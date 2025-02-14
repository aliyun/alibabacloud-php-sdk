<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddAdInsertionRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddAdInsertionResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddCategoryRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddCategoryResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddEditingProjectMaterialsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddEditingProjectMaterialsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddFavoritePublicMediaRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddFavoritePublicMediaResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddMediaConnectFlowInputRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddMediaConnectFlowInputResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddMediaConnectFlowOutputRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddMediaConnectFlowOutputResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddMediaMarksRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddMediaMarksResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\AddTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\AlterSearchIndexRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\AlterSearchIndexResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\BatchCreateVodPackagingAssetRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\BatchCreateVodPackagingAssetResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\BatchCreateVodPackagingAssetShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\BatchGetMediaInfosRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\BatchGetMediaInfosResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CancelDNAJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CancelDNAJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CancelFavoritePublicMediaRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CancelFavoritePublicMediaResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateAuditRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateAuditResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateAvatarTrainingJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateAvatarTrainingJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateChannelRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateChannelResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateCustomizedVoiceJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateCustomizedVoiceJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateCustomTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateCustomTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateDNADBRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateDNADBResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateEditingProjectRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateEditingProjectResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateLivePackageChannelGroupRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateLivePackageChannelGroupResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateLivePackageChannelRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateLivePackageChannelResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateLivePackageOriginEndpointRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateLivePackageOriginEndpointResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateLiveRecordTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateLiveRecordTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateLiveRecordTemplateShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateLiveSnapshotTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateLiveSnapshotTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateLiveTranscodeTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateLiveTranscodeTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateLiveTranscodeTemplateShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateMediaConnectFlowRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateMediaConnectFlowResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreatePipelineRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreatePipelineResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateProgramRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateProgramResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateSearchIndexRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateSearchIndexResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateSearchLibRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateSearchLibResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateSourceLocationRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateSourceLocationResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateSourceRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateSourceResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateUploadMediaRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateUploadMediaResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateUploadStreamRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateUploadStreamResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateVodPackagingAssetRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateVodPackagingAssetResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateVodPackagingAssetShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateVodPackagingConfigurationRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateVodPackagingConfigurationResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateVodPackagingConfigurationShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateVodPackagingGroupRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateVodPackagingGroupResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DecryptKMSDataKeyRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DecryptKMSDataKeyResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteAdInsertionRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteAdInsertionResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteAIAgentDialogueRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteAIAgentDialogueResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteAvatarTrainingJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteAvatarTrainingJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteCategoryRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteCategoryResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteChannelRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteChannelResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteCustomizedVoiceJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteCustomizedVoiceJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteCustomTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteCustomTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteDNADBRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteDNADBResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteDNAFilesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteDNAFilesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteEditingProjectMaterialsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteEditingProjectMaterialsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteEditingProjectsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteEditingProjectsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLivePackageChannelGroupRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLivePackageChannelGroupResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLivePackageChannelRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLivePackageChannelResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLivePackageOriginEndpointRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLivePackageOriginEndpointResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLiveRecordFilesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLiveRecordFilesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLiveRecordTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLiveRecordTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLiveSnapshotFilesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLiveSnapshotFilesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLiveSnapshotFilesShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLiveSnapshotTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLiveSnapshotTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLiveTranscodeJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLiveTranscodeJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLiveTranscodeTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteLiveTranscodeTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteMediaConnectFlowInputRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteMediaConnectFlowInputResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteMediaConnectFlowOutputRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteMediaConnectFlowOutputResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteMediaConnectFlowRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteMediaConnectFlowResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteMediaFromSearchLibRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteMediaFromSearchLibResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteMediaInfosRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteMediaInfosResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteMediaMarksRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteMediaMarksResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeletePipelineRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeletePipelineResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeletePlayInfoRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeletePlayInfoResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteProgramRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteProgramResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteSmartJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteSmartJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteSourceLocationRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteSourceLocationResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteSourceRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteSourceResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteVodPackagingAssetRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteVodPackagingAssetResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteVodPackagingConfigurationRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteVodPackagingConfigurationResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteVodPackagingGroupRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteVodPackagingGroupResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeAIAgentInstanceRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeAIAgentInstanceResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterImsEditUsageRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterImsEditUsageResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterImsMediaConvertUHDUsageRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterImsMediaConvertUHDUsageResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterImsMediaConvertUsageRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterImsMediaConvertUsageResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterImsMpsAiUsageRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterImsMpsAiUsageResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterImsSummaryRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterImsSummaryResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeNotifyConfigRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeNotifyConfigResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribePlayListRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribePlayListResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeRtcRobotInstanceRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeRtcRobotInstanceResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DetectAudioForCustomizedVoiceJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DetectAudioForCustomizedVoiceJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DropSearchIndexRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DropSearchIndexResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DropSearchLibRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DropSearchLibResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GenerateAIAgentCallRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GenerateAIAgentCallResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GenerateAIAgentCallShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GenerateKMSDataKeyResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GenerateMessageChatTokenRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GenerateMessageChatTokenResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetAdInsertionRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetAdInsertionResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetAvatarRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetAvatarResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetAvatarTrainingJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetAvatarTrainingJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetBatchMediaProducingJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetBatchMediaProducingJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetCategoriesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetCategoriesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetChannelRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetChannelResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetContentAnalyzeConfigResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetCustomizedVoiceJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetCustomizedVoiceJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetCustomizedVoiceRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetCustomizedVoiceResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetCustomTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetCustomTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetDefaultStorageLocationResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetDemonstrationForCustomizedVoiceJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetDemonstrationForCustomizedVoiceJobResponse;
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
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLivePackageChannelGroupRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLivePackageChannelGroupResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLivePackageChannelRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLivePackageChannelResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLivePackageOriginEndpointRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLivePackageOriginEndpointResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveRecordJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveRecordJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveRecordTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveRecordTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveSnapshotJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveSnapshotJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveSnapshotTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveSnapshotTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveTranscodeJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveTranscodeJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveTranscodeTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveTranscodeTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaConnectFlowInputRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaConnectFlowInputResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaConnectFlowOutputRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaConnectFlowOutputResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaConnectFlowRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaConnectFlowResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaConvertJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaConvertJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaMarksRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaMarksResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaProducingJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaProducingJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetPackageJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetPackageJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetPipelineRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetPipelineResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetPlayInfoRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetPlayInfoResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetProgramRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetProgramResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetProjectExportJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetProjectExportJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetPublicMediaInfoRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetPublicMediaInfoResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetSmartHandleJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetSmartHandleJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetSnapshotJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetSnapshotJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetSnapshotUrlsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetSnapshotUrlsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetSourceLocationRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetSourceLocationResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetSourceRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetSourceResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetStorageListRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetStorageListResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetSystemTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetSystemTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetTemplateMaterialsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetTemplateMaterialsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetTemplateParamsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetTemplateParamsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetUrlUploadInfosRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetUrlUploadInfosResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetVideoListRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetVideoListResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetVodPackagingAssetRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetVodPackagingAssetResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetVodPackagingConfigurationRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetVodPackagingConfigurationResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetVodPackagingGroupRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetVodPackagingGroupResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetWorkflowTaskRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetWorkflowTaskResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\InsertMediaToSearchLibRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\InsertMediaToSearchLibResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListAdInsertionsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListAdInsertionsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListAIAgentDialoguesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListAIAgentDialoguesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListAIAgentInstanceRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListAIAgentInstanceResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListAlertsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListAlertsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListAllPublicMediaTagsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListAllPublicMediaTagsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListAvatarsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListAvatarsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListAvatarTrainingJobsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListAvatarTrainingJobsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListBatchMediaProducingJobsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListBatchMediaProducingJobsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListChannelAlertsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListChannelAlertsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListChannelsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListChannelsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListCustomizedVoiceJobsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListCustomizedVoiceJobsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListCustomizedVoicesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListCustomizedVoicesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListCustomTemplatesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListCustomTemplatesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListDNADBRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListDNADBResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListDNAFilesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListDNAFilesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListDynamicImageJobsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListDynamicImageJobsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListEditingProjectsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListEditingProjectsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLivePackageChannelGroupsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLivePackageChannelGroupsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLivePackageChannelsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLivePackageChannelsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLivePackageOriginEndpointsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLivePackageOriginEndpointsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveRecordFilesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveRecordFilesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveRecordJobsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveRecordJobsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveRecordTemplatesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveRecordTemplatesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveSnapshotFilesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveSnapshotFilesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveSnapshotJobsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveSnapshotJobsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveSnapshotTemplatesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveSnapshotTemplatesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveTranscodeJobsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveTranscodeJobsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveTranscodeTemplatesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveTranscodeTemplatesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaBasicInfosRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaBasicInfosResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaInfoJobsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaInfoJobsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaMarksRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaMarksResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaProducingJobsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaProducingJobsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListPackageJobsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListPackageJobsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListPipelinesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListPipelinesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListProgramsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListProgramsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListPublicMediaBasicInfosRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListPublicMediaBasicInfosResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSchedulesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSchedulesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSearchLibRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSearchLibResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartJobsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartJobsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartSysAvatarModelsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartSysAvatarModelsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSmartVoiceGroupsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSnapshotJobsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSnapshotJobsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSourceLocationsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSourceLocationsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSourcesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSourcesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSystemTemplatesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSystemTemplatesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListTemplatesRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListTemplatesResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListTranscodeJobsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListTranscodeJobsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListVodPackagingAssetsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListVodPackagingAssetsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListVodPackagingConfigurationsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListVodPackagingConfigurationsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListVodPackagingGroupsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListVodPackagingGroupsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryCopyrightExtractJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryCopyrightExtractJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryCopyrightJobListRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryCopyrightJobListResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryDNAJobListRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryDNAJobListResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryIProductionJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryIProductionJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobDetailRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobDetailResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobListRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobListResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaIndexJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaIndexJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\QuerySearchIndexRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\QuerySearchIndexResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\QuerySearchLibRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\QuerySearchLibResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\QuerySmarttagJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\QuerySmarttagJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryTraceAbJobListRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryTraceAbJobListResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryTraceExtractJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryTraceExtractJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryTraceM3u8JobListRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryTraceM3u8JobListResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\RefreshUploadMediaRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\RefreshUploadMediaResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\RegisterMediaInfoRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\RegisterMediaInfoResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\RegisterMediaStreamRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\RegisterMediaStreamResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchEditingProjectRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchEditingProjectResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchIndexJobRerunRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchIndexJobRerunResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaByAILabelRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaByAILabelResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaByFaceRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaByFaceResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaByHybridRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaByHybridResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaByMultimodalRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaByMultimodalResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaClipByFaceRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaClipByFaceResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchPublicMediaInfoRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchPublicMediaInfoResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SendAIAgentDataChannelMessageRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SendAIAgentDataChannelMessageResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SendAIAgentSpeechRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SendAIAgentSpeechResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SendAIAgentTextRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SendAIAgentTextResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SendLiveSnapshotJobCommandRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SendLiveSnapshotJobCommandResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SendLiveTranscodeJobCommandRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SendLiveTranscodeJobCommandResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SetContentAnalyzeConfigRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SetContentAnalyzeConfigResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SetDefaultCustomTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SetDefaultCustomTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SetDefaultStorageLocationRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SetDefaultStorageLocationResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SetEventCallbackRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SetEventCallbackResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SetNotifyConfigRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SetNotifyConfigResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\StartAIAgentInstanceRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\StartAIAgentInstanceResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\StartAIAgentInstanceShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\StartChannelRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\StartChannelResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\StartRtcRobotInstanceRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\StartRtcRobotInstanceResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\StartRtcRobotInstanceShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\StartWorkflowRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\StartWorkflowResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\StopAIAgentInstanceRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\StopAIAgentInstanceResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\StopChannelRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\StopChannelResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\StopRtcRobotInstanceRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\StopRtcRobotInstanceResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitASRJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitASRJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitAudioProduceJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitAudioProduceJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitAvatarTrainingJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitAvatarTrainingJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitAvatarVideoJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitAvatarVideoJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitBatchMediaProducingJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitBatchMediaProducingJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitCopyrightExtractJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitCopyrightExtractJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitCopyrightExtractJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitCopyrightJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitCopyrightJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitCopyrightJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitCustomizedVoiceJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitCustomizedVoiceJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitDNAJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitDNAJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitDNAJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitDynamicChartJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitDynamicChartJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitDynamicImageJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitDynamicImageJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitDynamicImageJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitHighlightExtractionJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitHighlightExtractionJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitIProductionJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitIProductionJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitIProductionJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveEditingJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveEditingJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveRecordJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveRecordJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveRecordJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveSnapshotJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveSnapshotJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveSnapshotJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveTranscodeJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveTranscodeJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveTranscodeJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaAiAnalysisJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaAiAnalysisJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaCensorJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaCensorJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaCensorJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaConvertJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaConvertJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaInfoJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaInfoJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaInfoJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaProducingJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitMediaProducingJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitPackageJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitPackageJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitPackageJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitProjectExportJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitProjectExportJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitScreenMediaHighlightsJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitScreenMediaHighlightsJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSmarttagJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSmarttagJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSmarttagJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSnapshotJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSnapshotJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSnapshotJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSportsHighlightsJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSportsHighlightsJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitStandardCustomizedVoiceJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitStandardCustomizedVoiceJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSyncMediaInfoJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSyncMediaInfoJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSyncMediaInfoJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTextGenerateJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTextGenerateJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTraceAbJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTraceAbJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTraceAbJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTraceExtractJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTraceExtractJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTraceExtractJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTraceM3u8JobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTraceM3u8JobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTraceM3u8JobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitVideoTranslationJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitVideoTranslationJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\TakeoverAIAgentCallRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\TakeoverAIAgentCallResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateAdInsertionRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateAdInsertionResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateAIAgentInstanceRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateAIAgentInstanceResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateAIAgentInstanceShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateAvatarTrainingJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateAvatarTrainingJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateCategoryRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateCategoryResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateChannelRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateChannelResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateCustomizedVoiceRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateCustomizedVoiceResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateCustomTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateCustomTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateEditingProjectRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateEditingProjectResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLivePackageChannelCredentialsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLivePackageChannelCredentialsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLivePackageChannelGroupRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLivePackageChannelGroupResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLivePackageChannelRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLivePackageChannelResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLivePackageOriginEndpointRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLivePackageOriginEndpointResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLiveRecordTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLiveRecordTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLiveRecordTemplateShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLiveSnapshotTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLiveSnapshotTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLiveTranscodeJobRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLiveTranscodeJobResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLiveTranscodeJobShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLiveTranscodeTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLiveTranscodeTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLiveTranscodeTemplateShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaConnectFlowInputRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaConnectFlowInputResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaConnectFlowOutputRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaConnectFlowOutputResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaConnectFlowStatusRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaConnectFlowStatusResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaInfoRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaInfoResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaMarksRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaMarksResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaToSearchLibRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaToSearchLibResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdatePipelineRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdatePipelineResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateProgramRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateProgramResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateRtcRobotInstanceRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateRtcRobotInstanceResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateRtcRobotInstanceShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateSourceLocationRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateSourceLocationResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateSourceRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateSourceResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateTemplateRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateTemplateResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UploadMediaByURLRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UploadMediaByURLResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UploadStreamByURLRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UploadStreamByURLResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * 添加广告插入配置.
     *
     * @param request - AddAdInsertionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AddAdInsertionResponse
     *
     * @param AddAdInsertionRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AddAdInsertionResponse
     */
    public function addAdInsertionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->adMarkerPassthrough) {
            @$body['AdMarkerPassthrough'] = $request->adMarkerPassthrough;
        }

        if (null !== $request->adsUrl) {
            @$body['AdsUrl'] = $request->adsUrl;
        }

        if (null !== $request->cdnAdSegmentUrlPrefix) {
            @$body['CdnAdSegmentUrlPrefix'] = $request->cdnAdSegmentUrlPrefix;
        }

        if (null !== $request->cdnContentSegmentUrlPrefix) {
            @$body['CdnContentSegmentUrlPrefix'] = $request->cdnContentSegmentUrlPrefix;
        }

        if (null !== $request->clientToken) {
            @$body['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->configAliases) {
            @$body['ConfigAliases'] = $request->configAliases;
        }

        if (null !== $request->contentUrlPrefix) {
            @$body['ContentUrlPrefix'] = $request->contentUrlPrefix;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->personalizationThreshold) {
            @$body['PersonalizationThreshold'] = $request->personalizationThreshold;
        }

        if (null !== $request->slateAdUrl) {
            @$body['SlateAdUrl'] = $request->slateAdUrl;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddAdInsertion',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddAdInsertionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddAdInsertionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 添加广告插入配置.
     *
     * @param request - AddAdInsertionRequest
     * @returns AddAdInsertionResponse
     *
     * @param AddAdInsertionRequest $request
     *
     * @return AddAdInsertionResponse
     */
    public function addAdInsertion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAdInsertionWithOptions($request, $runtime);
    }

    /**
     * Creates a category.
     *
     * @remarks
     * You can create at most three levels of categories. Each category level can contain a maximum of 100 subcategories.
     *
     * @param request - AddCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AddCategoryResponse
     *
     * @param AddCategoryRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddCategoryResponse
     */
    public function addCategoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cateName) {
            @$query['CateName'] = $request->cateName;
        }

        if (null !== $request->parentId) {
            @$query['ParentId'] = $request->parentId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddCategoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a category.
     *
     * @remarks
     * You can create at most three levels of categories. Each category level can contain a maximum of 100 subcategories.
     *
     * @param request - AddCategoryRequest
     * @returns AddCategoryResponse
     *
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
     * Adds one or more materials to an online editing project.
     *
     * @param request - AddEditingProjectMaterialsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AddEditingProjectMaterialsResponse
     *
     * @param AddEditingProjectMaterialsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return AddEditingProjectMaterialsResponse
     */
    public function addEditingProjectMaterialsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->materialMaps) {
            @$query['MaterialMaps'] = $request->materialMaps;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddEditingProjectMaterialsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddEditingProjectMaterialsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Adds one or more materials to an online editing project.
     *
     * @param request - AddEditingProjectMaterialsRequest
     * @returns AddEditingProjectMaterialsResponse
     *
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
     * 收藏公共媒资.
     *
     * @param request - AddFavoritePublicMediaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AddFavoritePublicMediaResponse
     *
     * @param AddFavoritePublicMediaRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AddFavoritePublicMediaResponse
     */
    public function addFavoritePublicMediaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaIds) {
            @$query['MediaIds'] = $request->mediaIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddFavoritePublicMediaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddFavoritePublicMediaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 收藏公共媒资.
     *
     * @param request - AddFavoritePublicMediaRequest
     * @returns AddFavoritePublicMediaResponse
     *
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
     * Add input for MediaConnect instance.
     *
     * @remarks
     * - If the provided Flow instance ID does not exist, the interface will return an error.
     * - A Flow instance can only have one Input.
     * ### Description of Input Types
     * - RTMP-PUSH: Creates an input of the RTMP listening type. You can push to the URL returned by the interface using the RTMP protocol.
     * - RTMP-PULL: Creates an input of the RTMP origin-pull type. The Flow will pull the RTMP live stream from the source you specify.
     * - SRT-Listener: Creates an input of the SRT listening type. You can push to the URL returned by the interface using the SRT protocol.
     * - SRT-Caller: Creates an input of the SRT origin-pull type. The Flow will pull the SRT live stream from the source you specify.
     * - Flow: Uses the output of another upstream Flow instance as the input. You need to specify both the instance ID and the output name of the paired Flow. The output of the upstream Flow instance must be of the SRT-Listener/RTMP-PULL type. When cascading between Flow instances, a dedicated line is used by default, which can be utilized for cross-regional distribution among multiple Flows.
     *
     * @param request - AddMediaConnectFlowInputRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AddMediaConnectFlowInputResponse
     *
     * @param AddMediaConnectFlowInputRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AddMediaConnectFlowInputResponse
     */
    public function addMediaConnectFlowInputWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cidrs) {
            @$query['Cidrs'] = $request->cidrs;
        }

        if (null !== $request->flowId) {
            @$query['FlowId'] = $request->flowId;
        }

        if (null !== $request->inputFromUrl) {
            @$query['InputFromUrl'] = $request->inputFromUrl;
        }

        if (null !== $request->inputName) {
            @$query['InputName'] = $request->inputName;
        }

        if (null !== $request->inputProtocol) {
            @$query['InputProtocol'] = $request->inputProtocol;
        }

        if (null !== $request->maxBitrate) {
            @$query['MaxBitrate'] = $request->maxBitrate;
        }

        if (null !== $request->pairFlowId) {
            @$query['PairFlowId'] = $request->pairFlowId;
        }

        if (null !== $request->pairOutputName) {
            @$query['PairOutputName'] = $request->pairOutputName;
        }

        if (null !== $request->srtLatency) {
            @$query['SrtLatency'] = $request->srtLatency;
        }

        if (null !== $request->srtPassphrase) {
            @$query['SrtPassphrase'] = $request->srtPassphrase;
        }

        if (null !== $request->srtPbkeyLen) {
            @$query['SrtPbkeyLen'] = $request->srtPbkeyLen;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddMediaConnectFlowInput',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddMediaConnectFlowInputResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddMediaConnectFlowInputResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Add input for MediaConnect instance.
     *
     * @remarks
     * - If the provided Flow instance ID does not exist, the interface will return an error.
     * - A Flow instance can only have one Input.
     * ### Description of Input Types
     * - RTMP-PUSH: Creates an input of the RTMP listening type. You can push to the URL returned by the interface using the RTMP protocol.
     * - RTMP-PULL: Creates an input of the RTMP origin-pull type. The Flow will pull the RTMP live stream from the source you specify.
     * - SRT-Listener: Creates an input of the SRT listening type. You can push to the URL returned by the interface using the SRT protocol.
     * - SRT-Caller: Creates an input of the SRT origin-pull type. The Flow will pull the SRT live stream from the source you specify.
     * - Flow: Uses the output of another upstream Flow instance as the input. You need to specify both the instance ID and the output name of the paired Flow. The output of the upstream Flow instance must be of the SRT-Listener/RTMP-PULL type. When cascading between Flow instances, a dedicated line is used by default, which can be utilized for cross-regional distribution among multiple Flows.
     *
     * @param request - AddMediaConnectFlowInputRequest
     * @returns AddMediaConnectFlowInputResponse
     *
     * @param AddMediaConnectFlowInputRequest $request
     *
     * @return AddMediaConnectFlowInputResponse
     */
    public function addMediaConnectFlowInput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMediaConnectFlowInputWithOptions($request, $runtime);
    }

    /**
     * Add output for MediaConnect instance.
     *
     * @remarks
     * - If the provided Flow instance ID does not exist, the interface will return an error.
     * - A Flow instance can have up to 4 outputs.
     * - The output names under the same Flow instance cannot be duplicated.
     * - You can set a maximum number of simultaneous players for each output. New plays will fail once this limit is exceeded. Each output supports up to 5 streams.
     * ### Description of Output Types
     * - RTMP-PUSH: Creates an output of the RTMP push type. The Flow will use the RTMP protocol to push the live stream to the origin you set.
     * - RTMP-PULL: Creates an output of the RTMP pull type. You can use the RTMP protocol to pull the stream from the URL returned by the interface.
     * - SRT-Caller: Creates an output of the SRT push type. The Flow will use the SRT protocol to push the live stream to the origin you set.
     * - SRT-Listener: Creates an output of the SRT pull type. You can use the SRT protocol to pull the stream from the URL returned by the interface.
     * - Flow: Uses the input of another downstream Flow instance as the output. You need to specify both the instance ID and the input name of the paired Flow. The input type of the downstream Flow instance must be a listening type, i.e., SRT-Listener/RTMP-PUSH. This instance will push the live stream to the downstream Flow. When cascading between Flow instances, a dedicated line is used by default, which can be used for cross-regional distribution among multiple Flows.
     *
     * @param request - AddMediaConnectFlowOutputRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AddMediaConnectFlowOutputResponse
     *
     * @param AddMediaConnectFlowOutputRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AddMediaConnectFlowOutputResponse
     */
    public function addMediaConnectFlowOutputWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cidrs) {
            @$query['Cidrs'] = $request->cidrs;
        }

        if (null !== $request->flowId) {
            @$query['FlowId'] = $request->flowId;
        }

        if (null !== $request->outputName) {
            @$query['OutputName'] = $request->outputName;
        }

        if (null !== $request->outputProtocol) {
            @$query['OutputProtocol'] = $request->outputProtocol;
        }

        if (null !== $request->outputToUrl) {
            @$query['OutputToUrl'] = $request->outputToUrl;
        }

        if (null !== $request->pairFlowId) {
            @$query['PairFlowId'] = $request->pairFlowId;
        }

        if (null !== $request->pairInputName) {
            @$query['PairInputName'] = $request->pairInputName;
        }

        if (null !== $request->playerLimit) {
            @$query['PlayerLimit'] = $request->playerLimit;
        }

        if (null !== $request->srtLatency) {
            @$query['SrtLatency'] = $request->srtLatency;
        }

        if (null !== $request->srtPassphrase) {
            @$query['SrtPassphrase'] = $request->srtPassphrase;
        }

        if (null !== $request->srtPbkeyLen) {
            @$query['SrtPbkeyLen'] = $request->srtPbkeyLen;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddMediaConnectFlowOutput',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddMediaConnectFlowOutputResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddMediaConnectFlowOutputResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Add output for MediaConnect instance.
     *
     * @remarks
     * - If the provided Flow instance ID does not exist, the interface will return an error.
     * - A Flow instance can have up to 4 outputs.
     * - The output names under the same Flow instance cannot be duplicated.
     * - You can set a maximum number of simultaneous players for each output. New plays will fail once this limit is exceeded. Each output supports up to 5 streams.
     * ### Description of Output Types
     * - RTMP-PUSH: Creates an output of the RTMP push type. The Flow will use the RTMP protocol to push the live stream to the origin you set.
     * - RTMP-PULL: Creates an output of the RTMP pull type. You can use the RTMP protocol to pull the stream from the URL returned by the interface.
     * - SRT-Caller: Creates an output of the SRT push type. The Flow will use the SRT protocol to push the live stream to the origin you set.
     * - SRT-Listener: Creates an output of the SRT pull type. You can use the SRT protocol to pull the stream from the URL returned by the interface.
     * - Flow: Uses the input of another downstream Flow instance as the output. You need to specify both the instance ID and the input name of the paired Flow. The input type of the downstream Flow instance must be a listening type, i.e., SRT-Listener/RTMP-PUSH. This instance will push the live stream to the downstream Flow. When cascading between Flow instances, a dedicated line is used by default, which can be used for cross-regional distribution among multiple Flows.
     *
     * @param request - AddMediaConnectFlowOutputRequest
     * @returns AddMediaConnectFlowOutputResponse
     *
     * @param AddMediaConnectFlowOutputRequest $request
     *
     * @return AddMediaConnectFlowOutputResponse
     */
    public function addMediaConnectFlowOutput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMediaConnectFlowOutputWithOptions($request, $runtime);
    }

    /**
     * Adds marks for a media asset.
     *
     * @param request - AddMediaMarksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AddMediaMarksResponse
     *
     * @param AddMediaMarksRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AddMediaMarksResponse
     */
    public function addMediaMarksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->mediaMarks) {
            @$query['MediaMarks'] = $request->mediaMarks;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddMediaMarks',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddMediaMarksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddMediaMarksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Adds marks for a media asset.
     *
     * @param request - AddMediaMarksRequest
     * @returns AddMediaMarksResponse
     *
     * @param AddMediaMarksRequest $request
     *
     * @return AddMediaMarksResponse
     */
    public function addMediaMarks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMediaMarksWithOptions($request, $runtime);
    }

    /**
     * Creates a template.
     *
     * @remarks
     *   For more information about how to use a regular template, see [Create and use a regular template](https://help.aliyun.com/document_detail/445399.html).
     * *   For more information about how to use an advanced template, see [Create and use advanced templates](https://help.aliyun.com/document_detail/445389.html).
     * *   After an advanced template is created, it enters the Processing state. In this case, the template is unavailable. The template can be used only when it is in the Available state. The time required for template processing varies based on the size of the template file. Generally, it ranges from 10 seconds to 5 minutes.
     *
     * @param request - AddTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AddTemplateResponse
     *
     * @param AddTemplateRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return AddTemplateResponse
     */
    public function addTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->coverUrl) {
            @$query['CoverUrl'] = $request->coverUrl;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->previewMedia) {
            @$query['PreviewMedia'] = $request->previewMedia;
        }

        if (null !== $request->relatedMediaids) {
            @$query['RelatedMediaids'] = $request->relatedMediaids;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $body = [];
        if (null !== $request->config) {
            @$body['Config'] = $request->config;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AddTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a template.
     *
     * @remarks
     *   For more information about how to use a regular template, see [Create and use a regular template](https://help.aliyun.com/document_detail/445399.html).
     * *   For more information about how to use an advanced template, see [Create and use advanced templates](https://help.aliyun.com/document_detail/445389.html).
     * *   After an advanced template is created, it enters the Processing state. In this case, the template is unavailable. The template can be used only when it is in the Available state. The time required for template processing varies based on the size of the template file. Generally, it ranges from 10 seconds to 5 minutes.
     *
     * @param request - AddTemplateRequest
     * @returns AddTemplateResponse
     *
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
     * Modifies search index information including index status and configurations.
     *
     * @param request - AlterSearchIndexRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns AlterSearchIndexResponse
     *
     * @param AlterSearchIndexRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return AlterSearchIndexResponse
     */
    public function alterSearchIndexWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->indexConfig) {
            @$query['IndexConfig'] = $request->indexConfig;
        }

        if (null !== $request->indexStatus) {
            @$query['IndexStatus'] = $request->indexStatus;
        }

        if (null !== $request->indexType) {
            @$query['IndexType'] = $request->indexType;
        }

        if (null !== $request->searchLibName) {
            @$query['SearchLibName'] = $request->searchLibName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'AlterSearchIndex',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return AlterSearchIndexResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AlterSearchIndexResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies search index information including index status and configurations.
     *
     * @param request - AlterSearchIndexRequest
     * @returns AlterSearchIndexResponse
     *
     * @param AlterSearchIndexRequest $request
     *
     * @return AlterSearchIndexResponse
     */
    public function alterSearchIndex($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->alterSearchIndexWithOptions($request, $runtime);
    }

    /**
     * 批量创建vod打包资产.
     *
     * @param tmpReq - BatchCreateVodPackagingAssetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns BatchCreateVodPackagingAssetResponse
     *
     * @param BatchCreateVodPackagingAssetRequest $tmpReq
     * @param RuntimeOptions                      $runtime
     *
     * @return BatchCreateVodPackagingAssetResponse
     */
    public function batchCreateVodPackagingAssetWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchCreateVodPackagingAssetShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->assets) {
            $request->assetsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->assets, 'Assets', 'json');
        }

        $query = [];
        if (null !== $request->assetsShrink) {
            @$query['Assets'] = $request->assetsShrink;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchCreateVodPackagingAsset',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return BatchCreateVodPackagingAssetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return BatchCreateVodPackagingAssetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 批量创建vod打包资产.
     *
     * @param request - BatchCreateVodPackagingAssetRequest
     * @returns BatchCreateVodPackagingAssetResponse
     *
     * @param BatchCreateVodPackagingAssetRequest $request
     *
     * @return BatchCreateVodPackagingAssetResponse
     */
    public function batchCreateVodPackagingAsset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchCreateVodPackagingAssetWithOptions($request, $runtime);
    }

    /**
     * Queries the information about multiple media assets at a time based on media asset IDs.
     *
     * @param request - BatchGetMediaInfosRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns BatchGetMediaInfosResponse
     *
     * @param BatchGetMediaInfosRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return BatchGetMediaInfosResponse
     */
    public function batchGetMediaInfosWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->additionType) {
            @$query['AdditionType'] = $request->additionType;
        }

        if (null !== $request->mediaIds) {
            @$query['MediaIds'] = $request->mediaIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return BatchGetMediaInfosResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return BatchGetMediaInfosResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about multiple media assets at a time based on media asset IDs.
     *
     * @param request - BatchGetMediaInfosRequest
     * @returns BatchGetMediaInfosResponse
     *
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
     * Cancels a media fingerprint analysis job.
     *
     * @remarks
     *   You can cancel a media fingerprint analysis job only if the job is in the Queuing state.
     * *   We recommend that you call the **UpdatePipeline** operation to set the status of the ApsaraVideo Media Processing (MPS) queue to Paused before you cancel a job. This suspends job scheduling in the MPS queue. After the job is canceled, you must set the status of the MPS queue back to Active so that the other jobs in the MPS queue can be scheduled.
     *
     * @param request - CancelDNAJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CancelDNAJobResponse
     *
     * @param CancelDNAJobRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CancelDNAJobResponse
     */
    public function cancelDNAJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelDNAJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CancelDNAJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CancelDNAJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Cancels a media fingerprint analysis job.
     *
     * @remarks
     *   You can cancel a media fingerprint analysis job only if the job is in the Queuing state.
     * *   We recommend that you call the **UpdatePipeline** operation to set the status of the ApsaraVideo Media Processing (MPS) queue to Paused before you cancel a job. This suspends job scheduling in the MPS queue. After the job is canceled, you must set the status of the MPS queue back to Active so that the other jobs in the MPS queue can be scheduled.
     *
     * @param request - CancelDNAJobRequest
     * @returns CancelDNAJobResponse
     *
     * @param CancelDNAJobRequest $request
     *
     * @return CancelDNAJobResponse
     */
    public function cancelDNAJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelDNAJobWithOptions($request, $runtime);
    }

    /**
     * 取消收藏公共媒资.
     *
     * @param request - CancelFavoritePublicMediaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CancelFavoritePublicMediaResponse
     *
     * @param CancelFavoritePublicMediaRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return CancelFavoritePublicMediaResponse
     */
    public function cancelFavoritePublicMediaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaIds) {
            @$query['MediaIds'] = $request->mediaIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CancelFavoritePublicMediaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CancelFavoritePublicMediaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 取消收藏公共媒资.
     *
     * @param request - CancelFavoritePublicMediaRequest
     * @returns CancelFavoritePublicMediaResponse
     *
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
     * Submits manual review results for media assets.
     *
     * @param request - CreateAuditRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateAuditResponse
     *
     * @param CreateAuditRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateAuditResponse
     */
    public function createAuditWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->auditContent) {
            @$query['AuditContent'] = $request->auditContent;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateAuditResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateAuditResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Submits manual review results for media assets.
     *
     * @param request - CreateAuditRequest
     * @returns CreateAuditResponse
     *
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
     * Creates a digital human training job. You can configure the basic information of the digital human and the materials required for the training. Note: This operation is used to initialize the training job. It does not submit the training job. To submit the training job, call the SubmitAvatarTrainingJob operation.
     *
     * @param request - CreateAvatarTrainingJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateAvatarTrainingJobResponse
     *
     * @param CreateAvatarTrainingJobRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateAvatarTrainingJobResponse
     */
    public function createAvatarTrainingJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->avatarDescription) {
            @$query['AvatarDescription'] = $request->avatarDescription;
        }

        if (null !== $request->avatarName) {
            @$query['AvatarName'] = $request->avatarName;
        }

        if (null !== $request->avatarType) {
            @$query['AvatarType'] = $request->avatarType;
        }

        if (null !== $request->portrait) {
            @$query['Portrait'] = $request->portrait;
        }

        if (null !== $request->thumbnail) {
            @$query['Thumbnail'] = $request->thumbnail;
        }

        if (null !== $request->transparent) {
            @$query['Transparent'] = $request->transparent;
        }

        if (null !== $request->video) {
            @$query['Video'] = $request->video;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAvatarTrainingJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateAvatarTrainingJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateAvatarTrainingJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a digital human training job. You can configure the basic information of the digital human and the materials required for the training. Note: This operation is used to initialize the training job. It does not submit the training job. To submit the training job, call the SubmitAvatarTrainingJob operation.
     *
     * @param request - CreateAvatarTrainingJobRequest
     * @returns CreateAvatarTrainingJobResponse
     *
     * @param CreateAvatarTrainingJobRequest $request
     *
     * @return CreateAvatarTrainingJobResponse
     */
    public function createAvatarTrainingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAvatarTrainingJobWithOptions($request, $runtime);
    }

    /**
     * 创建一个新的频道.
     *
     * @param request - CreateChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateChannelResponse
     *
     * @param CreateChannelRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateChannelResponse
     */
    public function createChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessPolicy) {
            @$query['AccessPolicy'] = $request->accessPolicy;
        }

        if (null !== $request->accessToken) {
            @$query['AccessToken'] = $request->accessToken;
        }

        if (null !== $request->channelName) {
            @$query['ChannelName'] = $request->channelName;
        }

        if (null !== $request->channelTier) {
            @$query['ChannelTier'] = $request->channelTier;
        }

        if (null !== $request->fillerSourceLocationName) {
            @$query['FillerSourceLocationName'] = $request->fillerSourceLocationName;
        }

        if (null !== $request->fillerSourceName) {
            @$query['FillerSourceName'] = $request->fillerSourceName;
        }

        if (null !== $request->outPutConfigList) {
            @$query['OutPutConfigList'] = $request->outPutConfigList;
        }

        if (null !== $request->playbackMode) {
            @$query['PlaybackMode'] = $request->playbackMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateChannel',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateChannelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateChannelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建一个新的频道.
     *
     * @param request - CreateChannelRequest
     * @returns CreateChannelResponse
     *
     * @param CreateChannelRequest $request
     *
     * @return CreateChannelResponse
     */
    public function createChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createChannelWithOptions($request, $runtime);
    }

    /**
     * Creates a custom template.
     *
     * @param request - CreateCustomTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateCustomTemplateResponse
     *
     * @param CreateCustomTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateCustomTemplateResponse
     */
    public function createCustomTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->subtype) {
            @$query['Subtype'] = $request->subtype;
        }

        if (null !== $request->templateConfig) {
            @$query['TemplateConfig'] = $request->templateConfig;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateCustomTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateCustomTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a custom template.
     *
     * @param request - CreateCustomTemplateRequest
     * @returns CreateCustomTemplateResponse
     *
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
     * Creates a human voice cloning job. You can configure the basic information of the human voice cloning job.
     *
     * @param request - CreateCustomizedVoiceJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateCustomizedVoiceJobResponse
     *
     * @param CreateCustomizedVoiceJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateCustomizedVoiceJobResponse
     */
    public function createCustomizedVoiceJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gender) {
            @$query['Gender'] = $request->gender;
        }

        if (null !== $request->scenario) {
            @$query['Scenario'] = $request->scenario;
        }

        if (null !== $request->voiceDesc) {
            @$query['VoiceDesc'] = $request->voiceDesc;
        }

        if (null !== $request->voiceId) {
            @$query['VoiceId'] = $request->voiceId;
        }

        if (null !== $request->voiceName) {
            @$query['VoiceName'] = $request->voiceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCustomizedVoiceJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateCustomizedVoiceJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateCustomizedVoiceJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a human voice cloning job. You can configure the basic information of the human voice cloning job.
     *
     * @param request - CreateCustomizedVoiceJobRequest
     * @returns CreateCustomizedVoiceJobResponse
     *
     * @param CreateCustomizedVoiceJobRequest $request
     *
     * @return CreateCustomizedVoiceJobResponse
     */
    public function createCustomizedVoiceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomizedVoiceJobWithOptions($request, $runtime);
    }

    /**
     * Creates media fingerprint libraries.
     *
     * @remarks
     *   You can create up to five media fingerprint libraries within an account. To increase the quota, submit a ticket. You can call the DeleteDNADB operation to delete the fingerprint libraries that you no longer need.
     *
     * @param request - CreateDNADBRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateDNADBResponse
     *
     * @param CreateDNADBRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateDNADBResponse
     */
    public function createDNADBWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->model) {
            @$query['Model'] = $request->model;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDNADB',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateDNADBResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateDNADBResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates media fingerprint libraries.
     *
     * @remarks
     *   You can create up to five media fingerprint libraries within an account. To increase the quota, submit a ticket. You can call the DeleteDNADB operation to delete the fingerprint libraries that you no longer need.
     *
     * @param request - CreateDNADBRequest
     * @returns CreateDNADBResponse
     *
     * @param CreateDNADBRequest $request
     *
     * @return CreateDNADBResponse
     */
    public function createDNADB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDNADBWithOptions($request, $runtime);
    }

    /**
     * Creates an online editing project. You can specify configurations such as the title, description, timeline, and thumbnail for the project.
     *
     * @param request - CreateEditingProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateEditingProjectResponse
     *
     * @param CreateEditingProjectRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateEditingProjectResponse
     */
    public function createEditingProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessConfig) {
            @$query['BusinessConfig'] = $request->businessConfig;
        }

        if (null !== $request->clipsParam) {
            @$query['ClipsParam'] = $request->clipsParam;
        }

        if (null !== $request->coverURL) {
            @$query['CoverURL'] = $request->coverURL;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->materialMaps) {
            @$query['MaterialMaps'] = $request->materialMaps;
        }

        if (null !== $request->projectType) {
            @$query['ProjectType'] = $request->projectType;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateType) {
            @$query['TemplateType'] = $request->templateType;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        $body = [];
        if (null !== $request->timeline) {
            @$body['Timeline'] = $request->timeline;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateEditingProjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateEditingProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates an online editing project. You can specify configurations such as the title, description, timeline, and thumbnail for the project.
     *
     * @param request - CreateEditingProjectRequest
     * @returns CreateEditingProjectResponse
     *
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
     * 创建实时打包频道.
     *
     * @param request - CreateLivePackageChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateLivePackageChannelResponse
     *
     * @param CreateLivePackageChannelRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateLivePackageChannelResponse
     */
    public function createLivePackageChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->channelName) {
            @$body['ChannelName'] = $request->channelName;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->groupName) {
            @$body['GroupName'] = $request->groupName;
        }

        if (null !== $request->protocol) {
            @$body['Protocol'] = $request->protocol;
        }

        if (null !== $request->segmentCount) {
            @$body['SegmentCount'] = $request->segmentCount;
        }

        if (null !== $request->segmentDuration) {
            @$body['SegmentDuration'] = $request->segmentDuration;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateLivePackageChannel',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateLivePackageChannelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateLivePackageChannelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建实时打包频道.
     *
     * @param request - CreateLivePackageChannelRequest
     * @returns CreateLivePackageChannelResponse
     *
     * @param CreateLivePackageChannelRequest $request
     *
     * @return CreateLivePackageChannelResponse
     */
    public function createLivePackageChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLivePackageChannelWithOptions($request, $runtime);
    }

    /**
     * 添加实时打包频道组.
     *
     * @param request - CreateLivePackageChannelGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateLivePackageChannelGroupResponse
     *
     * @param CreateLivePackageChannelGroupRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateLivePackageChannelGroupResponse
     */
    public function createLivePackageChannelGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        $body = [];
        if (null !== $request->groupName) {
            @$body['GroupName'] = $request->groupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateLivePackageChannelGroup',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateLivePackageChannelGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateLivePackageChannelGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 添加实时打包频道组.
     *
     * @param request - CreateLivePackageChannelGroupRequest
     * @returns CreateLivePackageChannelGroupResponse
     *
     * @param CreateLivePackageChannelGroupRequest $request
     *
     * @return CreateLivePackageChannelGroupResponse
     */
    public function createLivePackageChannelGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLivePackageChannelGroupWithOptions($request, $runtime);
    }

    /**
     * 创建实时打包源站端点.
     *
     * @param request - CreateLivePackageOriginEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateLivePackageOriginEndpointResponse
     *
     * @param CreateLivePackageOriginEndpointRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateLivePackageOriginEndpointResponse
     */
    public function createLivePackageOriginEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        $body = [];
        if (null !== $request->authorizationCode) {
            @$body['AuthorizationCode'] = $request->authorizationCode;
        }

        if (null !== $request->channelName) {
            @$body['ChannelName'] = $request->channelName;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->endpointName) {
            @$body['EndpointName'] = $request->endpointName;
        }

        if (null !== $request->groupName) {
            @$body['GroupName'] = $request->groupName;
        }

        if (null !== $request->ipBlacklist) {
            @$body['IpBlacklist'] = $request->ipBlacklist;
        }

        if (null !== $request->ipWhitelist) {
            @$body['IpWhitelist'] = $request->ipWhitelist;
        }

        if (null !== $request->manifestName) {
            @$body['ManifestName'] = $request->manifestName;
        }

        if (null !== $request->protocol) {
            @$body['Protocol'] = $request->protocol;
        }

        if (null !== $request->timeshiftVision) {
            @$body['TimeshiftVision'] = $request->timeshiftVision;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateLivePackageOriginEndpoint',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateLivePackageOriginEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateLivePackageOriginEndpointResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建实时打包源站端点.
     *
     * @param request - CreateLivePackageOriginEndpointRequest
     * @returns CreateLivePackageOriginEndpointResponse
     *
     * @param CreateLivePackageOriginEndpointRequest $request
     *
     * @return CreateLivePackageOriginEndpointResponse
     */
    public function createLivePackageOriginEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLivePackageOriginEndpointWithOptions($request, $runtime);
    }

    /**
     * Creates a live stream recording template to submit live stream recording jobs.
     *
     * @remarks
     * You must specify a recording template for live stream recording. You can configure information such as the format and duration of a recording in a recording template. The recording format can be M3U8, MP4, or FLV.
     *
     * @param tmpReq - CreateLiveRecordTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateLiveRecordTemplateResponse
     *
     * @param CreateLiveRecordTemplateRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateLiveRecordTemplateResponse
     */
    public function createLiveRecordTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateLiveRecordTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->recordFormat) {
            $request->recordFormatShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->recordFormat, 'RecordFormat', 'json');
        }

        $body = [];
        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->recordFormatShrink) {
            @$body['RecordFormat'] = $request->recordFormatShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateLiveRecordTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateLiveRecordTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a live stream recording template to submit live stream recording jobs.
     *
     * @remarks
     * You must specify a recording template for live stream recording. You can configure information such as the format and duration of a recording in a recording template. The recording format can be M3U8, MP4, or FLV.
     *
     * @param request - CreateLiveRecordTemplateRequest
     * @returns CreateLiveRecordTemplateResponse
     *
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
     * Create a live stream snapshot template to facilitate the creation of snapshot jobs.
     *
     * @param request - CreateLiveSnapshotTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateLiveSnapshotTemplateResponse
     *
     * @param CreateLiveSnapshotTemplateRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateLiveSnapshotTemplateResponse
     */
    public function createLiveSnapshotTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->overwriteFormat) {
            @$body['OverwriteFormat'] = $request->overwriteFormat;
        }

        if (null !== $request->sequenceFormat) {
            @$body['SequenceFormat'] = $request->sequenceFormat;
        }

        if (null !== $request->templateName) {
            @$body['TemplateName'] = $request->templateName;
        }

        if (null !== $request->timeInterval) {
            @$body['TimeInterval'] = $request->timeInterval;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateLiveSnapshotTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateLiveSnapshotTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateLiveSnapshotTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Create a live stream snapshot template to facilitate the creation of snapshot jobs.
     *
     * @param request - CreateLiveSnapshotTemplateRequest
     * @returns CreateLiveSnapshotTemplateResponse
     *
     * @param CreateLiveSnapshotTemplateRequest $request
     *
     * @return CreateLiveSnapshotTemplateResponse
     */
    public function createLiveSnapshotTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLiveSnapshotTemplateWithOptions($request, $runtime);
    }

    /**
     * Creates a live stream transcoding template to submit live stream transcoding jobs.
     *
     * @param tmpReq - CreateLiveTranscodeTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateLiveTranscodeTemplateResponse
     *
     * @param CreateLiveTranscodeTemplateRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateLiveTranscodeTemplateResponse
     */
    public function createLiveTranscodeTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateLiveTranscodeTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->templateConfig) {
            $request->templateConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->templateConfig, 'TemplateConfig', 'json');
        }

        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->templateConfigShrink) {
            @$query['TemplateConfig'] = $request->templateConfigShrink;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLiveTranscodeTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateLiveTranscodeTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateLiveTranscodeTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a live stream transcoding template to submit live stream transcoding jobs.
     *
     * @param request - CreateLiveTranscodeTemplateRequest
     * @returns CreateLiveTranscodeTemplateResponse
     *
     * @param CreateLiveTranscodeTemplateRequest $request
     *
     * @return CreateLiveTranscodeTemplateResponse
     */
    public function createLiveTranscodeTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLiveTranscodeTemplateWithOptions($request, $runtime);
    }

    /**
     * Create MediaConnect Flow.
     *
     * @remarks
     * - The name of the Flow cannot be duplicated within the same region.
     * - When the interface responds normally, it will return the Flow instance ID. Please keep it properly.
     *
     * @param request - CreateMediaConnectFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateMediaConnectFlowResponse
     *
     * @param CreateMediaConnectFlowRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateMediaConnectFlowResponse
     */
    public function createMediaConnectFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->flowName) {
            @$query['FlowName'] = $request->flowName;
        }

        if (null !== $request->flowRegion) {
            @$query['FlowRegion'] = $request->flowRegion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateMediaConnectFlow',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateMediaConnectFlowResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateMediaConnectFlowResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Create MediaConnect Flow.
     *
     * @remarks
     * - The name of the Flow cannot be duplicated within the same region.
     * - When the interface responds normally, it will return the Flow instance ID. Please keep it properly.
     *
     * @param request - CreateMediaConnectFlowRequest
     * @returns CreateMediaConnectFlowResponse
     *
     * @param CreateMediaConnectFlowRequest $request
     *
     * @return CreateMediaConnectFlowResponse
     */
    public function createMediaConnectFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMediaConnectFlowWithOptions($request, $runtime);
    }

    /**
     * Creates an ApsaraVideo Media Processing (MPS) queue.
     *
     * @param request - CreatePipelineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreatePipelineResponse
     *
     * @param CreatePipelineRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreatePipelineResponse
     */
    public function createPipelineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->speed) {
            @$query['Speed'] = $request->speed;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreatePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreatePipelineResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates an ApsaraVideo Media Processing (MPS) queue.
     *
     * @param request - CreatePipelineRequest
     * @returns CreatePipelineResponse
     *
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
     * 创建一个新的节目.
     *
     * @param request - CreateProgramRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateProgramResponse
     *
     * @param CreateProgramRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateProgramResponse
     */
    public function createProgramWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->adBreaks) {
            @$query['AdBreaks'] = $request->adBreaks;
        }

        if (null !== $request->channelName) {
            @$query['ChannelName'] = $request->channelName;
        }

        if (null !== $request->clipRange) {
            @$query['ClipRange'] = $request->clipRange;
        }

        if (null !== $request->programName) {
            @$query['ProgramName'] = $request->programName;
        }

        if (null !== $request->sourceLocationName) {
            @$query['SourceLocationName'] = $request->sourceLocationName;
        }

        if (null !== $request->sourceName) {
            @$query['SourceName'] = $request->sourceName;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->transition) {
            @$query['Transition'] = $request->transition;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateProgram',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateProgramResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateProgramResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建一个新的节目.
     *
     * @param request - CreateProgramRequest
     * @returns CreateProgramResponse
     *
     * @param CreateProgramRequest $request
     *
     * @return CreateProgramResponse
     */
    public function createProgram($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProgramWithOptions($request, $runtime);
    }

    /**
     * 创建搜索索引.
     *
     * @remarks
     * The large visual model feature is still in the public preview phase. You can use this feature for free for 1,000 hours of videos.
     *
     * @param request - CreateSearchIndexRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateSearchIndexResponse
     *
     * @param CreateSearchIndexRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateSearchIndexResponse
     */
    public function createSearchIndexWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->indexConfig) {
            @$query['IndexConfig'] = $request->indexConfig;
        }

        if (null !== $request->indexStatus) {
            @$query['IndexStatus'] = $request->indexStatus;
        }

        if (null !== $request->indexType) {
            @$query['IndexType'] = $request->indexType;
        }

        if (null !== $request->searchLibName) {
            @$query['SearchLibName'] = $request->searchLibName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSearchIndex',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateSearchIndexResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateSearchIndexResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建搜索索引.
     *
     * @remarks
     * The large visual model feature is still in the public preview phase. You can use this feature for free for 1,000 hours of videos.
     *
     * @param request - CreateSearchIndexRequest
     * @returns CreateSearchIndexResponse
     *
     * @param CreateSearchIndexRequest $request
     *
     * @return CreateSearchIndexResponse
     */
    public function createSearchIndex($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSearchIndexWithOptions($request, $runtime);
    }

    /**
     * Creates a search library to store media assets.
     *
     * @param request - CreateSearchLibRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateSearchLibResponse
     *
     * @param CreateSearchLibRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateSearchLibResponse
     */
    public function createSearchLibWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->searchLibName) {
            @$query['SearchLibName'] = $request->searchLibName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSearchLib',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateSearchLibResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateSearchLibResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Creates a search library to store media assets.
     *
     * @param request - CreateSearchLibRequest
     * @returns CreateSearchLibResponse
     *
     * @param CreateSearchLibRequest $request
     *
     * @return CreateSearchLibResponse
     */
    public function createSearchLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSearchLibWithOptions($request, $runtime);
    }

    /**
     * 创建一个新的源.
     *
     * @param request - CreateSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateSourceResponse
     *
     * @param CreateSourceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateSourceResponse
     */
    public function createSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->httpPackageConfigurations) {
            @$query['HttpPackageConfigurations'] = $request->httpPackageConfigurations;
        }

        if (null !== $request->sourceLocationName) {
            @$query['SourceLocationName'] = $request->sourceLocationName;
        }

        if (null !== $request->sourceName) {
            @$query['SourceName'] = $request->sourceName;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSource',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateSourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateSourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建一个新的源.
     *
     * @param request - CreateSourceRequest
     * @returns CreateSourceResponse
     *
     * @param CreateSourceRequest $request
     *
     * @return CreateSourceResponse
     */
    public function createSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSourceWithOptions($request, $runtime);
    }

    /**
     * 创建一个新的源位置.
     *
     * @param request - CreateSourceLocationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateSourceLocationResponse
     *
     * @param CreateSourceLocationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateSourceLocationResponse
     */
    public function createSourceLocationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseUrl) {
            @$query['BaseUrl'] = $request->baseUrl;
        }

        if (null !== $request->enableSegmentDelivery) {
            @$query['EnableSegmentDelivery'] = $request->enableSegmentDelivery;
        }

        if (null !== $request->segmentDeliveryUrl) {
            @$query['SegmentDeliveryUrl'] = $request->segmentDeliveryUrl;
        }

        if (null !== $request->sourceLocationName) {
            @$query['SourceLocationName'] = $request->sourceLocationName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSourceLocation',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateSourceLocationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateSourceLocationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建一个新的源位置.
     *
     * @param request - CreateSourceLocationRequest
     * @returns CreateSourceLocationResponse
     *
     * @param CreateSourceLocationRequest $request
     *
     * @return CreateSourceLocationResponse
     */
    public function createSourceLocation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSourceLocationWithOptions($request, $runtime);
    }

    /**
     * Obtains the upload URL and credential of a media asset and creates information about the media asset.
     *
     * @remarks
     *   You can call this operation to obtain the upload URLs and credentials of audio and video files. You can also call this operation to obtain the upload URLs and credentials of images and auxiliary media assets.
     * *   Obtaining an upload URL and credential is essential for Intelligent Media Services (IMS) and is required in each upload operation.
     * *   If the video upload credential expires, you can call the RefreshUploadMedia operation to obtain a new upload credential. The default validity period of a video upload credential is 3,000 seconds.
     * *   After you upload a media asset, you can configure a callback to receive upload event notifications or call the GetMediaInfo operation to determine whether the media asset is uploaded based on the returned status.
     * *   The MediaId parameter returned by this operation can be used for media asset lifecycle management or media processing.
     * *   You can call this operation to upload media assets only to ApsaraVideo VOD, but not to your own Object Storage Service (OSS) buckets. To upload a media asset to your own OSS bucket, you can upload the file to your OSS bucket by using [OSS SDK](https://help.aliyun.com/document_detail/32006.html), and then call the [RegisterMediaInfo](https://help.aliyun.com/document_detail/441152.html) operation to register the file in the OSS bucket with the media asset library.
     * *   This operation is available only in the China (Shanghai), China (Beijing), and China (Shenzhen) regions.
     *
     * @param request - CreateUploadMediaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateUploadMediaResponse
     *
     * @param CreateUploadMediaRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateUploadMediaResponse
     */
    public function createUploadMediaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->entityId) {
            @$query['EntityId'] = $request->entityId;
        }

        if (null !== $request->fileInfo) {
            @$query['FileInfo'] = $request->fileInfo;
        }

        if (null !== $request->mediaMetaData) {
            @$query['MediaMetaData'] = $request->mediaMetaData;
        }

        if (null !== $request->postProcessConfig) {
            @$query['PostProcessConfig'] = $request->postProcessConfig;
        }

        if (null !== $request->uploadTargetConfig) {
            @$query['UploadTargetConfig'] = $request->uploadTargetConfig;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateUploadMediaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateUploadMediaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the upload URL and credential of a media asset and creates information about the media asset.
     *
     * @remarks
     *   You can call this operation to obtain the upload URLs and credentials of audio and video files. You can also call this operation to obtain the upload URLs and credentials of images and auxiliary media assets.
     * *   Obtaining an upload URL and credential is essential for Intelligent Media Services (IMS) and is required in each upload operation.
     * *   If the video upload credential expires, you can call the RefreshUploadMedia operation to obtain a new upload credential. The default validity period of a video upload credential is 3,000 seconds.
     * *   After you upload a media asset, you can configure a callback to receive upload event notifications or call the GetMediaInfo operation to determine whether the media asset is uploaded based on the returned status.
     * *   The MediaId parameter returned by this operation can be used for media asset lifecycle management or media processing.
     * *   You can call this operation to upload media assets only to ApsaraVideo VOD, but not to your own Object Storage Service (OSS) buckets. To upload a media asset to your own OSS bucket, you can upload the file to your OSS bucket by using [OSS SDK](https://help.aliyun.com/document_detail/32006.html), and then call the [RegisterMediaInfo](https://help.aliyun.com/document_detail/441152.html) operation to register the file in the OSS bucket with the media asset library.
     * *   This operation is available only in the China (Shanghai), China (Beijing), and China (Shenzhen) regions.
     *
     * @param request - CreateUploadMediaRequest
     * @returns CreateUploadMediaResponse
     *
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
     * Obtains the upload URL and credential of a media stream.
     *
     * @remarks
     *   You can call this operation to upload only a local media stream. After the media stream is uploaded, it is associated with the specified media asset ID.
     * *   You can call this operation to upload media streams only to ApsaraVideo VOD, but not to your own Object Storage Service (OSS) buckets. To upload a media stream to your own OSS bucket, you can upload the file to your OSS bucket by using [OSS SDK](https://help.aliyun.com/document_detail/32006.html), and then call the [RegisterMediaStream](https://help.aliyun.com/document_detail/440765.html) operation to associate the media stream with the specified media asset ID.
     * *   This operation is available only in the China (Shanghai), China (Beijing), and China (Shenzhen) regions.
     *
     * @param request - CreateUploadStreamRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateUploadStreamResponse
     *
     * @param CreateUploadStreamRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateUploadStreamResponse
     */
    public function createUploadStreamWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->definition) {
            @$query['Definition'] = $request->definition;
        }

        if (null !== $request->fileExtension) {
            @$query['FileExtension'] = $request->fileExtension;
        }

        if (null !== $request->HDRType) {
            @$query['HDRType'] = $request->HDRType;
        }

        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateUploadStreamResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateUploadStreamResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtains the upload URL and credential of a media stream.
     *
     * @remarks
     *   You can call this operation to upload only a local media stream. After the media stream is uploaded, it is associated with the specified media asset ID.
     * *   You can call this operation to upload media streams only to ApsaraVideo VOD, but not to your own Object Storage Service (OSS) buckets. To upload a media stream to your own OSS bucket, you can upload the file to your OSS bucket by using [OSS SDK](https://help.aliyun.com/document_detail/32006.html), and then call the [RegisterMediaStream](https://help.aliyun.com/document_detail/440765.html) operation to associate the media stream with the specified media asset ID.
     * *   This operation is available only in the China (Shanghai), China (Beijing), and China (Shenzhen) regions.
     *
     * @param request - CreateUploadStreamRequest
     * @returns CreateUploadStreamResponse
     *
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
     * 创建vod打包资产.
     *
     * @param tmpReq - CreateVodPackagingAssetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateVodPackagingAssetResponse
     *
     * @param CreateVodPackagingAssetRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateVodPackagingAssetResponse
     */
    public function createVodPackagingAssetWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateVodPackagingAssetShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->input) {
            $request->inputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }

        $query = [];
        if (null !== $request->assetName) {
            @$query['AssetName'] = $request->assetName;
        }

        if (null !== $request->contentId) {
            @$query['ContentId'] = $request->contentId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->inputShrink) {
            @$query['Input'] = $request->inputShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVodPackagingAsset',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateVodPackagingAssetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateVodPackagingAssetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建vod打包资产.
     *
     * @param request - CreateVodPackagingAssetRequest
     * @returns CreateVodPackagingAssetResponse
     *
     * @param CreateVodPackagingAssetRequest $request
     *
     * @return CreateVodPackagingAssetResponse
     */
    public function createVodPackagingAsset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVodPackagingAssetWithOptions($request, $runtime);
    }

    /**
     * 创建点播打包配置.
     *
     * @param tmpReq - CreateVodPackagingConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateVodPackagingConfigurationResponse
     *
     * @param CreateVodPackagingConfigurationRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateVodPackagingConfigurationResponse
     */
    public function createVodPackagingConfigurationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateVodPackagingConfigurationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->packageConfig) {
            $request->packageConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->packageConfig, 'PackageConfig', 'json');
        }

        $query = [];
        if (null !== $request->configurationName) {
            @$query['ConfigurationName'] = $request->configurationName;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->packageConfigShrink) {
            @$query['PackageConfig'] = $request->packageConfigShrink;
        }

        if (null !== $request->protocol) {
            @$query['Protocol'] = $request->protocol;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVodPackagingConfiguration',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateVodPackagingConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateVodPackagingConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建点播打包配置.
     *
     * @param request - CreateVodPackagingConfigurationRequest
     * @returns CreateVodPackagingConfigurationResponse
     *
     * @param CreateVodPackagingConfigurationRequest $request
     *
     * @return CreateVodPackagingConfigurationResponse
     */
    public function createVodPackagingConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVodPackagingConfigurationWithOptions($request, $runtime);
    }

    /**
     * 创建点播打包组.
     *
     * @param request - CreateVodPackagingGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns CreateVodPackagingGroupResponse
     *
     * @param CreateVodPackagingGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateVodPackagingGroupResponse
     */
    public function createVodPackagingGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVodPackagingGroup',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return CreateVodPackagingGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateVodPackagingGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建点播打包组.
     *
     * @param request - CreateVodPackagingGroupRequest
     * @returns CreateVodPackagingGroupResponse
     *
     * @param CreateVodPackagingGroupRequest $request
     *
     * @return CreateVodPackagingGroupResponse
     */
    public function createVodPackagingGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVodPackagingGroupWithOptions($request, $runtime);
    }

    /**
     * Decrypts the ciphertext specified by CiphertextBlob in the Key Management Service (KMS) data key.
     *
     * @param request - DecryptKMSDataKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DecryptKMSDataKeyResponse
     *
     * @param DecryptKMSDataKeyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DecryptKMSDataKeyResponse
     */
    public function decryptKMSDataKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ciphertextBlob) {
            @$query['CiphertextBlob'] = $request->ciphertextBlob;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DecryptKMSDataKey',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DecryptKMSDataKeyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DecryptKMSDataKeyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Decrypts the ciphertext specified by CiphertextBlob in the Key Management Service (KMS) data key.
     *
     * @param request - DecryptKMSDataKeyRequest
     * @returns DecryptKMSDataKeyResponse
     *
     * @param DecryptKMSDataKeyRequest $request
     *
     * @return DecryptKMSDataKeyResponse
     */
    public function decryptKMSDataKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->decryptKMSDataKeyWithOptions($request, $runtime);
    }

    /**
     * 删除智能体的对话历史记录。
     *
     * @param request - DeleteAIAgentDialogueRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteAIAgentDialogueResponse
     *
     * @param DeleteAIAgentDialogueRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteAIAgentDialogueResponse
     */
    public function deleteAIAgentDialogueWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dialogueId) {
            @$query['DialogueId'] = $request->dialogueId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAIAgentDialogue',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteAIAgentDialogueResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAIAgentDialogueResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除智能体的对话历史记录。
     *
     * @param request - DeleteAIAgentDialogueRequest
     * @returns DeleteAIAgentDialogueResponse
     *
     * @param DeleteAIAgentDialogueRequest $request
     *
     * @return DeleteAIAgentDialogueResponse
     */
    public function deleteAIAgentDialogue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAIAgentDialogueWithOptions($request, $runtime);
    }

    /**
     * 删除广告插入配置.
     *
     * @param request - DeleteAdInsertionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteAdInsertionResponse
     *
     * @param DeleteAdInsertionRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteAdInsertionResponse
     */
    public function deleteAdInsertionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteAdInsertion',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteAdInsertionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAdInsertionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除广告插入配置.
     *
     * @param request - DeleteAdInsertionRequest
     * @returns DeleteAdInsertionResponse
     *
     * @param DeleteAdInsertionRequest $request
     *
     * @return DeleteAdInsertionResponse
     */
    public function deleteAdInsertion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAdInsertionWithOptions($request, $runtime);
    }

    /**
     * Deletes a digital human training job that is in the Init or Fail state.
     *
     * @param request - DeleteAvatarTrainingJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteAvatarTrainingJobResponse
     *
     * @param DeleteAvatarTrainingJobRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteAvatarTrainingJobResponse
     */
    public function deleteAvatarTrainingJobWithOptions($request, $runtime)
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
            'action'      => 'DeleteAvatarTrainingJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteAvatarTrainingJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAvatarTrainingJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a digital human training job that is in the Init or Fail state.
     *
     * @param request - DeleteAvatarTrainingJobRequest
     * @returns DeleteAvatarTrainingJobResponse
     *
     * @param DeleteAvatarTrainingJobRequest $request
     *
     * @return DeleteAvatarTrainingJobResponse
     */
    public function deleteAvatarTrainingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAvatarTrainingJobWithOptions($request, $runtime);
    }

    /**
     * Deletes a media asset category.
     *
     * @remarks
     * This operation also deletes the subcategories, including the level-2 and level-3 categories, of the category.
     *
     * @param request - DeleteCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteCategoryResponse
     *
     * @param DeleteCategoryRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteCategoryResponse
     */
    public function deleteCategoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cateId) {
            @$query['CateId'] = $request->cateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteCategoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a media asset category.
     *
     * @remarks
     * This operation also deletes the subcategories, including the level-2 and level-3 categories, of the category.
     *
     * @param request - DeleteCategoryRequest
     * @returns DeleteCategoryResponse
     *
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
     * 删除频道.
     *
     * @param request - DeleteChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteChannelResponse
     *
     * @param DeleteChannelRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteChannelResponse
     */
    public function deleteChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->channelName) {
            @$query['ChannelName'] = $request->channelName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteChannel',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteChannelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteChannelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除频道.
     *
     * @param request - DeleteChannelRequest
     * @returns DeleteChannelResponse
     *
     * @param DeleteChannelRequest $request
     *
     * @return DeleteChannelResponse
     */
    public function deleteChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteChannelWithOptions($request, $runtime);
    }

    /**
     * Deletes a custom template.
     *
     * @param request - DeleteCustomTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteCustomTemplateResponse
     *
     * @param DeleteCustomTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteCustomTemplateResponse
     */
    public function deleteCustomTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteCustomTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteCustomTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a custom template.
     *
     * @param request - DeleteCustomTemplateRequest
     * @returns DeleteCustomTemplateResponse
     *
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
     * Deletes a human voice cloning job that is not in the Training or Success state.
     *
     * @param request - DeleteCustomizedVoiceJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteCustomizedVoiceJobResponse
     *
     * @param DeleteCustomizedVoiceJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteCustomizedVoiceJobResponse
     */
    public function deleteCustomizedVoiceJobWithOptions($request, $runtime)
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
            'action'      => 'DeleteCustomizedVoiceJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteCustomizedVoiceJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteCustomizedVoiceJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a human voice cloning job that is not in the Training or Success state.
     *
     * @param request - DeleteCustomizedVoiceJobRequest
     * @returns DeleteCustomizedVoiceJobResponse
     *
     * @param DeleteCustomizedVoiceJobRequest $request
     *
     * @return DeleteCustomizedVoiceJobResponse
     */
    public function deleteCustomizedVoiceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomizedVoiceJobWithOptions($request, $runtime);
    }

    /**
     * Deletes a media fingerprint library.
     *
     * @param request - DeleteDNADBRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteDNADBResponse
     *
     * @param DeleteDNADBRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteDNADBResponse
     */
    public function deleteDNADBWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBId) {
            @$query['DBId'] = $request->DBId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDNADB',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteDNADBResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDNADBResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a media fingerprint library.
     *
     * @param request - DeleteDNADBRequest
     * @returns DeleteDNADBResponse
     *
     * @param DeleteDNADBRequest $request
     *
     * @return DeleteDNADBResponse
     */
    public function deleteDNADB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDNADBWithOptions($request, $runtime);
    }

    /**
     * Deletes files from a media fingerprint library.
     *
     * @param request - DeleteDNAFilesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteDNAFilesResponse
     *
     * @param DeleteDNAFilesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteDNAFilesResponse
     */
    public function deleteDNAFilesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBId) {
            @$query['DBId'] = $request->DBId;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->primaryKeys) {
            @$query['PrimaryKeys'] = $request->primaryKeys;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDNAFiles',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteDNAFilesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDNAFilesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes files from a media fingerprint library.
     *
     * @param request - DeleteDNAFilesRequest
     * @returns DeleteDNAFilesResponse
     *
     * @param DeleteDNAFilesRequest $request
     *
     * @return DeleteDNAFilesResponse
     */
    public function deleteDNAFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDNAFilesWithOptions($request, $runtime);
    }

    /**
     * Deletes one or more materials from an online editing project.
     *
     * @param request - DeleteEditingProjectMaterialsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteEditingProjectMaterialsResponse
     *
     * @param DeleteEditingProjectMaterialsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteEditingProjectMaterialsResponse
     */
    public function deleteEditingProjectMaterialsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->materialIds) {
            @$query['MaterialIds'] = $request->materialIds;
        }

        if (null !== $request->materialType) {
            @$query['MaterialType'] = $request->materialType;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteEditingProjectMaterialsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteEditingProjectMaterialsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes one or more materials from an online editing project.
     *
     * @param request - DeleteEditingProjectMaterialsRequest
     * @returns DeleteEditingProjectMaterialsResponse
     *
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
     * Deletes one or more online editing project.
     *
     * @param request - DeleteEditingProjectsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteEditingProjectsResponse
     *
     * @param DeleteEditingProjectsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteEditingProjectsResponse
     */
    public function deleteEditingProjectsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->projectIds) {
            @$query['ProjectIds'] = $request->projectIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteEditingProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteEditingProjectsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes one or more online editing project.
     *
     * @param request - DeleteEditingProjectsRequest
     * @returns DeleteEditingProjectsResponse
     *
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
     * 删除实时打包频道.
     *
     * @param request - DeleteLivePackageChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteLivePackageChannelResponse
     *
     * @param DeleteLivePackageChannelRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteLivePackageChannelResponse
     */
    public function deleteLivePackageChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->channelName) {
            @$query['ChannelName'] = $request->channelName;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLivePackageChannel',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteLivePackageChannelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteLivePackageChannelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除实时打包频道.
     *
     * @param request - DeleteLivePackageChannelRequest
     * @returns DeleteLivePackageChannelResponse
     *
     * @param DeleteLivePackageChannelRequest $request
     *
     * @return DeleteLivePackageChannelResponse
     */
    public function deleteLivePackageChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLivePackageChannelWithOptions($request, $runtime);
    }

    /**
     * 删除直播打包频道组.
     *
     * @param request - DeleteLivePackageChannelGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteLivePackageChannelGroupResponse
     *
     * @param DeleteLivePackageChannelGroupRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteLivePackageChannelGroupResponse
     */
    public function deleteLivePackageChannelGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLivePackageChannelGroup',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteLivePackageChannelGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteLivePackageChannelGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除直播打包频道组.
     *
     * @param request - DeleteLivePackageChannelGroupRequest
     * @returns DeleteLivePackageChannelGroupResponse
     *
     * @param DeleteLivePackageChannelGroupRequest $request
     *
     * @return DeleteLivePackageChannelGroupResponse
     */
    public function deleteLivePackageChannelGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLivePackageChannelGroupWithOptions($request, $runtime);
    }

    /**
     * 删除实时打包源站端点.
     *
     * @param request - DeleteLivePackageOriginEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteLivePackageOriginEndpointResponse
     *
     * @param DeleteLivePackageOriginEndpointRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DeleteLivePackageOriginEndpointResponse
     */
    public function deleteLivePackageOriginEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->channelName) {
            @$query['ChannelName'] = $request->channelName;
        }

        if (null !== $request->endpointName) {
            @$query['EndpointName'] = $request->endpointName;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLivePackageOriginEndpoint',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteLivePackageOriginEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteLivePackageOriginEndpointResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除实时打包源站端点.
     *
     * @param request - DeleteLivePackageOriginEndpointRequest
     * @returns DeleteLivePackageOriginEndpointResponse
     *
     * @param DeleteLivePackageOriginEndpointRequest $request
     *
     * @return DeleteLivePackageOriginEndpointResponse
     */
    public function deleteLivePackageOriginEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLivePackageOriginEndpointWithOptions($request, $runtime);
    }

    /**
     * Deletes live stream recording files. You can choose to delete only the recording files or delete both the recording files and the original Object Storage Service (OSS) files.
     *
     * @param request - DeleteLiveRecordFilesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteLiveRecordFilesResponse
     *
     * @param DeleteLiveRecordFilesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteLiveRecordFilesResponse
     */
    public function deleteLiveRecordFilesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->recordIds) {
            @$query['RecordIds'] = $request->recordIds;
        }

        if (null !== $request->removeFile) {
            @$query['RemoveFile'] = $request->removeFile;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLiveRecordFiles',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteLiveRecordFilesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteLiveRecordFilesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes live stream recording files. You can choose to delete only the recording files or delete both the recording files and the original Object Storage Service (OSS) files.
     *
     * @param request - DeleteLiveRecordFilesRequest
     * @returns DeleteLiveRecordFilesResponse
     *
     * @param DeleteLiveRecordFilesRequest $request
     *
     * @return DeleteLiveRecordFilesResponse
     */
    public function deleteLiveRecordFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveRecordFilesWithOptions($request, $runtime);
    }

    /**
     * Deletes a live stream recording template without affecting existing jobs.
     *
     * @param request - DeleteLiveRecordTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteLiveRecordTemplateResponse
     *
     * @param DeleteLiveRecordTemplateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteLiveRecordTemplateResponse
     */
    public function deleteLiveRecordTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLiveRecordTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteLiveRecordTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteLiveRecordTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a live stream recording template without affecting existing jobs.
     *
     * @param request - DeleteLiveRecordTemplateRequest
     * @returns DeleteLiveRecordTemplateResponse
     *
     * @param DeleteLiveRecordTemplateRequest $request
     *
     * @return DeleteLiveRecordTemplateResponse
     */
    public function deleteLiveRecordTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveRecordTemplateWithOptions($request, $runtime);
    }

    /**
     * Deletes live stream snapshot files. You can choose to delete only the snapshot files or delete both the snapshot files and the original Object Storage Service (OSS) files.
     *
     * @param tmpReq - DeleteLiveSnapshotFilesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteLiveSnapshotFilesResponse
     *
     * @param DeleteLiveSnapshotFilesRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteLiveSnapshotFilesResponse
     */
    public function deleteLiveSnapshotFilesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteLiveSnapshotFilesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->createTimestampList) {
            $request->createTimestampListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->createTimestampList, 'CreateTimestampList', 'json');
        }

        $query = [];
        if (null !== $request->createTimestampListShrink) {
            @$query['CreateTimestampList'] = $request->createTimestampListShrink;
        }

        if (null !== $request->deleteOriginalFile) {
            @$query['DeleteOriginalFile'] = $request->deleteOriginalFile;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLiveSnapshotFiles',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteLiveSnapshotFilesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteLiveSnapshotFilesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes live stream snapshot files. You can choose to delete only the snapshot files or delete both the snapshot files and the original Object Storage Service (OSS) files.
     *
     * @param request - DeleteLiveSnapshotFilesRequest
     * @returns DeleteLiveSnapshotFilesResponse
     *
     * @param DeleteLiveSnapshotFilesRequest $request
     *
     * @return DeleteLiveSnapshotFilesResponse
     */
    public function deleteLiveSnapshotFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveSnapshotFilesWithOptions($request, $runtime);
    }

    /**
     * Deletes a live stream snapshot template.
     *
     * @param request - DeleteLiveSnapshotTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteLiveSnapshotTemplateResponse
     *
     * @param DeleteLiveSnapshotTemplateRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteLiveSnapshotTemplateResponse
     */
    public function deleteLiveSnapshotTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->templateId) {
            @$body['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteLiveSnapshotTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteLiveSnapshotTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteLiveSnapshotTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a live stream snapshot template.
     *
     * @param request - DeleteLiveSnapshotTemplateRequest
     * @returns DeleteLiveSnapshotTemplateResponse
     *
     * @param DeleteLiveSnapshotTemplateRequest $request
     *
     * @return DeleteLiveSnapshotTemplateResponse
     */
    public function deleteLiveSnapshotTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveSnapshotTemplateWithOptions($request, $runtime);
    }

    /**
     * 删除指定转码任务
     *
     * @param request - DeleteLiveTranscodeJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteLiveTranscodeJobResponse
     *
     * @param DeleteLiveTranscodeJobRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteLiveTranscodeJobResponse
     */
    public function deleteLiveTranscodeJobWithOptions($request, $runtime)
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteLiveTranscodeJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteLiveTranscodeJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除指定转码任务
     *
     * @param request - DeleteLiveTranscodeJobRequest
     * @returns DeleteLiveTranscodeJobResponse
     *
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
     * Deletes a live stream transcoding template.
     *
     * @param request - DeleteLiveTranscodeTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteLiveTranscodeTemplateResponse
     *
     * @param DeleteLiveTranscodeTemplateRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteLiveTranscodeTemplateResponse
     */
    public function deleteLiveTranscodeTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteLiveTranscodeTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteLiveTranscodeTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a live stream transcoding template.
     *
     * @param request - DeleteLiveTranscodeTemplateRequest
     * @returns DeleteLiveTranscodeTemplateResponse
     *
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
     * Delete MediaConnect instance by instance ID.
     *
     * @remarks
     * - When the input Flow instance ID does not exist, the interface will return an error.
     * - When deleting a Flow instance, all Inputs and Outputs bound to this Flow will also be deleted.
     * - You cannot delete a Flow instance that is in the online state.
     *
     * @param request - DeleteMediaConnectFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteMediaConnectFlowResponse
     *
     * @param DeleteMediaConnectFlowRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteMediaConnectFlowResponse
     */
    public function deleteMediaConnectFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->flowId) {
            @$query['FlowId'] = $request->flowId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMediaConnectFlow',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteMediaConnectFlowResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteMediaConnectFlowResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Delete MediaConnect instance by instance ID.
     *
     * @remarks
     * - When the input Flow instance ID does not exist, the interface will return an error.
     * - When deleting a Flow instance, all Inputs and Outputs bound to this Flow will also be deleted.
     * - You cannot delete a Flow instance that is in the online state.
     *
     * @param request - DeleteMediaConnectFlowRequest
     * @returns DeleteMediaConnectFlowResponse
     *
     * @param DeleteMediaConnectFlowRequest $request
     *
     * @return DeleteMediaConnectFlowResponse
     */
    public function deleteMediaConnectFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMediaConnectFlowWithOptions($request, $runtime);
    }

    /**
     * Delete the input of a specific MediaConnect instance.
     *
     * @remarks
     * - If the provided Flow instance ID does not exist, the interface will return an error.
     * - When the Flow instance status is online, the input cannot be deleted.
     * - Only after all outputs under the Flow instance have been deleted can the input be deleted.
     *
     * @param request - DeleteMediaConnectFlowInputRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteMediaConnectFlowInputResponse
     *
     * @param DeleteMediaConnectFlowInputRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DeleteMediaConnectFlowInputResponse
     */
    public function deleteMediaConnectFlowInputWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->flowId) {
            @$query['FlowId'] = $request->flowId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMediaConnectFlowInput',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteMediaConnectFlowInputResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteMediaConnectFlowInputResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Delete the input of a specific MediaConnect instance.
     *
     * @remarks
     * - If the provided Flow instance ID does not exist, the interface will return an error.
     * - When the Flow instance status is online, the input cannot be deleted.
     * - Only after all outputs under the Flow instance have been deleted can the input be deleted.
     *
     * @param request - DeleteMediaConnectFlowInputRequest
     * @returns DeleteMediaConnectFlowInputResponse
     *
     * @param DeleteMediaConnectFlowInputRequest $request
     *
     * @return DeleteMediaConnectFlowInputResponse
     */
    public function deleteMediaConnectFlowInput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMediaConnectFlowInputWithOptions($request, $runtime);
    }

    /**
     * Delete a specific MediaConnect output.
     *
     * @remarks
     * - When the provided Flow instance ID does not exist, the interface will return an error.
     * - When the Flow instance status is online, the output cannot be deleted.
     *
     * @param request - DeleteMediaConnectFlowOutputRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteMediaConnectFlowOutputResponse
     *
     * @param DeleteMediaConnectFlowOutputRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteMediaConnectFlowOutputResponse
     */
    public function deleteMediaConnectFlowOutputWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->flowId) {
            @$query['FlowId'] = $request->flowId;
        }

        if (null !== $request->outputName) {
            @$query['OutputName'] = $request->outputName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMediaConnectFlowOutput',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteMediaConnectFlowOutputResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteMediaConnectFlowOutputResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Delete a specific MediaConnect output.
     *
     * @remarks
     * - When the provided Flow instance ID does not exist, the interface will return an error.
     * - When the Flow instance status is online, the output cannot be deleted.
     *
     * @param request - DeleteMediaConnectFlowOutputRequest
     * @returns DeleteMediaConnectFlowOutputResponse
     *
     * @param DeleteMediaConnectFlowOutputRequest $request
     *
     * @return DeleteMediaConnectFlowOutputResponse
     */
    public function deleteMediaConnectFlowOutput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMediaConnectFlowOutputWithOptions($request, $runtime);
    }

    /**
     * Deletes a specific media asset from a search library.
     *
     * @param request - DeleteMediaFromSearchLibRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteMediaFromSearchLibResponse
     *
     * @param DeleteMediaFromSearchLibRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteMediaFromSearchLibResponse
     */
    public function deleteMediaFromSearchLibWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->msgBody) {
            @$query['MsgBody'] = $request->msgBody;
        }

        if (null !== $request->searchLibName) {
            @$query['SearchLibName'] = $request->searchLibName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMediaFromSearchLib',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteMediaFromSearchLibResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteMediaFromSearchLibResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a specific media asset from a search library.
     *
     * @param request - DeleteMediaFromSearchLibRequest
     * @returns DeleteMediaFromSearchLibResponse
     *
     * @param DeleteMediaFromSearchLibRequest $request
     *
     * @return DeleteMediaFromSearchLibResponse
     */
    public function deleteMediaFromSearchLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMediaFromSearchLibWithOptions($request, $runtime);
    }

    /**
     * Deletes multiple media assets at a time. You can delete at most 20 media assets at a time. If MediaIds is specified, it is preferentially used. If MediaIds is empty, InputURLs must be specified.
     *
     * @param request - DeleteMediaInfosRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteMediaInfosResponse
     *
     * @param DeleteMediaInfosRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteMediaInfosResponse
     */
    public function deleteMediaInfosWithOptions($request, $runtime)
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteMediaInfosResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteMediaInfosResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes multiple media assets at a time. You can delete at most 20 media assets at a time. If MediaIds is specified, it is preferentially used. If MediaIds is empty, InputURLs must be specified.
     *
     * @param request - DeleteMediaInfosRequest
     * @returns DeleteMediaInfosResponse
     *
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
     * Deletes the marks of a media asset.
     *
     * @param request - DeleteMediaMarksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteMediaMarksResponse
     *
     * @param DeleteMediaMarksRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteMediaMarksResponse
     */
    public function deleteMediaMarksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->mediaMarkIds) {
            @$query['MediaMarkIds'] = $request->mediaMarkIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMediaMarks',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteMediaMarksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteMediaMarksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes the marks of a media asset.
     *
     * @param request - DeleteMediaMarksRequest
     * @returns DeleteMediaMarksResponse
     *
     * @param DeleteMediaMarksRequest $request
     *
     * @return DeleteMediaMarksResponse
     */
    public function deleteMediaMarks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMediaMarksWithOptions($request, $runtime);
    }

    /**
     * Deletes an ApsaraVideo Media Processing (MPS) queue.
     *
     * @param request - DeletePipelineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeletePipelineResponse
     *
     * @param DeletePipelineRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeletePipelineResponse
     */
    public function deletePipelineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pipelineId) {
            @$query['PipelineId'] = $request->pipelineId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeletePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeletePipelineResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes an ApsaraVideo Media Processing (MPS) queue.
     *
     * @param request - DeletePipelineRequest
     * @returns DeletePipelineResponse
     *
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
     * Deletes media streams such as video streams and audio streams.
     *
     * @remarks
     * You can call this operation to delete multiple media streams at a time.
     *
     * @param request - DeletePlayInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeletePlayInfoResponse
     *
     * @param DeletePlayInfoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeletePlayInfoResponse
     */
    public function deletePlayInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deletePhysicalFiles) {
            @$query['DeletePhysicalFiles'] = $request->deletePhysicalFiles;
        }

        if (null !== $request->fileURLs) {
            @$query['FileURLs'] = $request->fileURLs;
        }

        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeletePlayInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeletePlayInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes media streams such as video streams and audio streams.
     *
     * @remarks
     * You can call this operation to delete multiple media streams at a time.
     *
     * @param request - DeletePlayInfoRequest
     * @returns DeletePlayInfoResponse
     *
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
     * 删除节目.
     *
     * @param request - DeleteProgramRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteProgramResponse
     *
     * @param DeleteProgramRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteProgramResponse
     */
    public function deleteProgramWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->channelName) {
            @$query['ChannelName'] = $request->channelName;
        }

        if (null !== $request->programName) {
            @$query['ProgramName'] = $request->programName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteProgram',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteProgramResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteProgramResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除节目.
     *
     * @param request - DeleteProgramRequest
     * @returns DeleteProgramResponse
     *
     * @param DeleteProgramRequest $request
     *
     * @return DeleteProgramResponse
     */
    public function deleteProgram($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProgramWithOptions($request, $runtime);
    }

    /**
     * Deletes intelligent jobs based on job IDs.
     *
     * @param request - DeleteSmartJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteSmartJobResponse
     *
     * @param DeleteSmartJobRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteSmartJobResponse
     */
    public function deleteSmartJobWithOptions($request, $runtime)
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteSmartJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteSmartJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes intelligent jobs based on job IDs.
     *
     * @param request - DeleteSmartJobRequest
     * @returns DeleteSmartJobResponse
     *
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
     * 删除源.
     *
     * @param request - DeleteSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteSourceResponse
     *
     * @param DeleteSourceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteSourceResponse
     */
    public function deleteSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->softDelete) {
            @$query['SoftDelete'] = $request->softDelete;
        }

        if (null !== $request->sourceLocationName) {
            @$query['SourceLocationName'] = $request->sourceLocationName;
        }

        if (null !== $request->sourceName) {
            @$query['SourceName'] = $request->sourceName;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSource',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteSourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteSourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除源.
     *
     * @param request - DeleteSourceRequest
     * @returns DeleteSourceResponse
     *
     * @param DeleteSourceRequest $request
     *
     * @return DeleteSourceResponse
     */
    public function deleteSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSourceWithOptions($request, $runtime);
    }

    /**
     * 删除源位置.
     *
     * @param request - DeleteSourceLocationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteSourceLocationResponse
     *
     * @param DeleteSourceLocationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteSourceLocationResponse
     */
    public function deleteSourceLocationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->softDelete) {
            @$query['SoftDelete'] = $request->softDelete;
        }

        if (null !== $request->sourceLocationName) {
            @$query['SourceLocationName'] = $request->sourceLocationName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSourceLocation',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteSourceLocationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteSourceLocationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除源位置.
     *
     * @param request - DeleteSourceLocationRequest
     * @returns DeleteSourceLocationResponse
     *
     * @param DeleteSourceLocationRequest $request
     *
     * @return DeleteSourceLocationResponse
     */
    public function deleteSourceLocation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSourceLocationWithOptions($request, $runtime);
    }

    /**
     * Deletes templates.
     *
     * @remarks
     * A template is an encapsulation of the timeline of a media editing and production job. You can define a common timeline as a template. When you have the same requirements, you need to only specify key parameters and materials to produce videos.
     * *   For more information about how to use a regular template, see [Create and use a regular template](https://help.aliyun.com/document_detail/445399.html).
     * *   For more information about how to use an advanced template, see [Create and use advanced templates](https://help.aliyun.com/document_detail/445389.html).
     *
     * @param request - DeleteTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteTemplateResponse
     *
     * @param DeleteTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteTemplateResponse
     */
    public function deleteTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes templates.
     *
     * @remarks
     * A template is an encapsulation of the timeline of a media editing and production job. You can define a common timeline as a template. When you have the same requirements, you need to only specify key parameters and materials to produce videos.
     * *   For more information about how to use a regular template, see [Create and use a regular template](https://help.aliyun.com/document_detail/445399.html).
     * *   For more information about how to use an advanced template, see [Create and use advanced templates](https://help.aliyun.com/document_detail/445389.html).
     *
     * @param request - DeleteTemplateRequest
     * @returns DeleteTemplateResponse
     *
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
     * 删除点播打包资产.
     *
     * @param request - DeleteVodPackagingAssetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteVodPackagingAssetResponse
     *
     * @param DeleteVodPackagingAssetRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteVodPackagingAssetResponse
     */
    public function deleteVodPackagingAssetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->assetName) {
            @$query['AssetName'] = $request->assetName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVodPackagingAsset',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteVodPackagingAssetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteVodPackagingAssetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除点播打包资产.
     *
     * @param request - DeleteVodPackagingAssetRequest
     * @returns DeleteVodPackagingAssetResponse
     *
     * @param DeleteVodPackagingAssetRequest $request
     *
     * @return DeleteVodPackagingAssetResponse
     */
    public function deleteVodPackagingAsset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVodPackagingAssetWithOptions($request, $runtime);
    }

    /**
     * 删除点播打包配置.
     *
     * @param request - DeleteVodPackagingConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteVodPackagingConfigurationResponse
     *
     * @param DeleteVodPackagingConfigurationRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DeleteVodPackagingConfigurationResponse
     */
    public function deleteVodPackagingConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configurationName) {
            @$query['ConfigurationName'] = $request->configurationName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVodPackagingConfiguration',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteVodPackagingConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteVodPackagingConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除点播打包配置.
     *
     * @param request - DeleteVodPackagingConfigurationRequest
     * @returns DeleteVodPackagingConfigurationResponse
     *
     * @param DeleteVodPackagingConfigurationRequest $request
     *
     * @return DeleteVodPackagingConfigurationResponse
     */
    public function deleteVodPackagingConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVodPackagingConfigurationWithOptions($request, $runtime);
    }

    /**
     * 删除点播打包组.
     *
     * @param request - DeleteVodPackagingGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DeleteVodPackagingGroupResponse
     *
     * @param DeleteVodPackagingGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteVodPackagingGroupResponse
     */
    public function deleteVodPackagingGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVodPackagingGroup',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DeleteVodPackagingGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteVodPackagingGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 删除点播打包组.
     *
     * @param request - DeleteVodPackagingGroupRequest
     * @returns DeleteVodPackagingGroupResponse
     *
     * @param DeleteVodPackagingGroupRequest $request
     *
     * @return DeleteVodPackagingGroupResponse
     */
    public function deleteVodPackagingGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVodPackagingGroupWithOptions($request, $runtime);
    }

    /**
     * 查询实例.
     *
     * @param request - DescribeAIAgentInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeAIAgentInstanceResponse
     *
     * @param DescribeAIAgentInstanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeAIAgentInstanceResponse
     */
    public function describeAIAgentInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAIAgentInstance',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeAIAgentInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeAIAgentInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询实例.
     *
     * @param request - DescribeAIAgentInstanceRequest
     * @returns DescribeAIAgentInstanceResponse
     *
     * @param DescribeAIAgentInstanceRequest $request
     *
     * @return DescribeAIAgentInstanceResponse
     */
    public function describeAIAgentInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAIAgentInstanceWithOptions($request, $runtime);
    }

    /**
     * Queries the usage statistics of Intelligent Media Services (IMS) on video-on-demand (VOD) editing. The maximum query range is 31 days. You can query data within the last 90 days.
     *
     * @param request - DescribeMeterImsEditUsageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeMeterImsEditUsageResponse
     *
     * @param DescribeMeterImsEditUsageRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeMeterImsEditUsageResponse
     */
    public function describeMeterImsEditUsageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTs) {
            @$query['EndTs'] = $request->endTs;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->startTs) {
            @$query['StartTs'] = $request->startTs;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMeterImsEditUsage',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeMeterImsEditUsageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeMeterImsEditUsageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the usage statistics of Intelligent Media Services (IMS) on video-on-demand (VOD) editing. The maximum query range is 31 days. You can query data within the last 90 days.
     *
     * @param request - DescribeMeterImsEditUsageRequest
     * @returns DescribeMeterImsEditUsageResponse
     *
     * @param DescribeMeterImsEditUsageRequest $request
     *
     * @return DescribeMeterImsEditUsageResponse
     */
    public function describeMeterImsEditUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterImsEditUsageWithOptions($request, $runtime);
    }

    /**
     * Queries the usage statistics of Intelligent Media Services (IMS) on ultra high definition (UHD) transcoding of ApsaraVideo Media Processing (MPS). The maximum query range is 31 days. You can query data within the last 90 days.
     *
     * @param request - DescribeMeterImsMediaConvertUHDUsageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeMeterImsMediaConvertUHDUsageResponse
     *
     * @param DescribeMeterImsMediaConvertUHDUsageRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeMeterImsMediaConvertUHDUsageResponse
     */
    public function describeMeterImsMediaConvertUHDUsageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTs) {
            @$query['EndTs'] = $request->endTs;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->startTs) {
            @$query['StartTs'] = $request->startTs;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMeterImsMediaConvertUHDUsage',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeMeterImsMediaConvertUHDUsageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeMeterImsMediaConvertUHDUsageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the usage statistics of Intelligent Media Services (IMS) on ultra high definition (UHD) transcoding of ApsaraVideo Media Processing (MPS). The maximum query range is 31 days. You can query data within the last 90 days.
     *
     * @param request - DescribeMeterImsMediaConvertUHDUsageRequest
     * @returns DescribeMeterImsMediaConvertUHDUsageResponse
     *
     * @param DescribeMeterImsMediaConvertUHDUsageRequest $request
     *
     * @return DescribeMeterImsMediaConvertUHDUsageResponse
     */
    public function describeMeterImsMediaConvertUHDUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterImsMediaConvertUHDUsageWithOptions($request, $runtime);
    }

    /**
     * Queries the usage statistics of Intelligent Media Services (IMS) on video-on-demand (VOD) transcoding. The maximum query range is 31 days. You can query data within the last 90 days.
     *
     * @param request - DescribeMeterImsMediaConvertUsageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeMeterImsMediaConvertUsageResponse
     *
     * @param DescribeMeterImsMediaConvertUsageRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeMeterImsMediaConvertUsageResponse
     */
    public function describeMeterImsMediaConvertUsageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTs) {
            @$query['EndTs'] = $request->endTs;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->startTs) {
            @$query['StartTs'] = $request->startTs;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMeterImsMediaConvertUsage',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeMeterImsMediaConvertUsageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeMeterImsMediaConvertUsageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the usage statistics of Intelligent Media Services (IMS) on video-on-demand (VOD) transcoding. The maximum query range is 31 days. You can query data within the last 90 days.
     *
     * @param request - DescribeMeterImsMediaConvertUsageRequest
     * @returns DescribeMeterImsMediaConvertUsageResponse
     *
     * @param DescribeMeterImsMediaConvertUsageRequest $request
     *
     * @return DescribeMeterImsMediaConvertUsageResponse
     */
    public function describeMeterImsMediaConvertUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterImsMediaConvertUsageWithOptions($request, $runtime);
    }

    /**
     * Queries the usage statistics of Intelligent Media Services (IMS) on AI processing of ApsaraVideo Media Processing (MPS). The maximum query range is 31 days. You can query data within the last 90 days.
     *
     * @param request - DescribeMeterImsMpsAiUsageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeMeterImsMpsAiUsageResponse
     *
     * @param DescribeMeterImsMpsAiUsageRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeMeterImsMpsAiUsageResponse
     */
    public function describeMeterImsMpsAiUsageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTs) {
            @$query['EndTs'] = $request->endTs;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->startTs) {
            @$query['StartTs'] = $request->startTs;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMeterImsMpsAiUsage',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeMeterImsMpsAiUsageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeMeterImsMpsAiUsageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the usage statistics of Intelligent Media Services (IMS) on AI processing of ApsaraVideo Media Processing (MPS). The maximum query range is 31 days. You can query data within the last 90 days.
     *
     * @param request - DescribeMeterImsMpsAiUsageRequest
     * @returns DescribeMeterImsMpsAiUsageResponse
     *
     * @param DescribeMeterImsMpsAiUsageRequest $request
     *
     * @return DescribeMeterImsMpsAiUsageResponse
     */
    public function describeMeterImsMpsAiUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterImsMpsAiUsageWithOptions($request, $runtime);
    }

    /**
     * Queries the usage statistics of Intelligent Media Services (IMS). The maximum query range is 31 days. You can query data within the last 90 days.
     *
     * @param request - DescribeMeterImsSummaryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeMeterImsSummaryResponse
     *
     * @param DescribeMeterImsSummaryRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeMeterImsSummaryResponse
     */
    public function describeMeterImsSummaryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTs) {
            @$query['EndTs'] = $request->endTs;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->startTs) {
            @$query['StartTs'] = $request->startTs;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMeterImsSummary',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeMeterImsSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeMeterImsSummaryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the usage statistics of Intelligent Media Services (IMS). The maximum query range is 31 days. You can query data within the last 90 days.
     *
     * @param request - DescribeMeterImsSummaryRequest
     * @returns DescribeMeterImsSummaryResponse
     *
     * @param DescribeMeterImsSummaryRequest $request
     *
     * @return DescribeMeterImsSummaryResponse
     */
    public function describeMeterImsSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterImsSummaryWithOptions($request, $runtime);
    }

    /**
     * 描述回调配置.
     *
     * @param request - DescribeNotifyConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeNotifyConfigResponse
     *
     * @param DescribeNotifyConfigRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeNotifyConfigResponse
     */
    public function describeNotifyConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->AIAgentId) {
            @$query['AIAgentId'] = $request->AIAgentId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNotifyConfig',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeNotifyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeNotifyConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 描述回调配置.
     *
     * @param request - DescribeNotifyConfigRequest
     * @returns DescribeNotifyConfigResponse
     *
     * @param DescribeNotifyConfigRequest $request
     *
     * @return DescribeNotifyConfigResponse
     */
    public function describeNotifyConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNotifyConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribePlayListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribePlayListResponse
     *
     * @param DescribePlayListRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribePlayListResponse
     */
    public function describePlayListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->beginTs) {
            @$query['BeginTs'] = $request->beginTs;
        }

        if (null !== $request->endTs) {
            @$query['EndTs'] = $request->endTs;
        }

        if (null !== $request->orderName) {
            @$query['OrderName'] = $request->orderName;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->playType) {
            @$query['PlayType'] = $request->playType;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->traceId) {
            @$query['TraceId'] = $request->traceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePlayList',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribePlayListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribePlayListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param request - DescribePlayListRequest
     * @returns DescribePlayListResponse
     *
     * @param DescribePlayListRequest $request
     *
     * @return DescribePlayListResponse
     */
    public function describePlayList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePlayListWithOptions($request, $runtime);
    }

    /**
     * 查询实例.
     *
     * @param request - DescribeRtcRobotInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DescribeRtcRobotInstanceResponse
     *
     * @param DescribeRtcRobotInstanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeRtcRobotInstanceResponse
     */
    public function describeRtcRobotInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRtcRobotInstance',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DescribeRtcRobotInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeRtcRobotInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询实例.
     *
     * @param request - DescribeRtcRobotInstanceRequest
     * @returns DescribeRtcRobotInstanceResponse
     *
     * @param DescribeRtcRobotInstanceRequest $request
     *
     * @return DescribeRtcRobotInstanceResponse
     */
    public function describeRtcRobotInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRtcRobotInstanceWithOptions($request, $runtime);
    }

    /**
     * Checks whether the reading of users has issues, such as noticeable pronunciation errors or background noise. After the audio is checked on the cloud, the qualified audio is temporarily stored on the cloud for subsequent training. Do not skip this step.
     *
     * @param request - DetectAudioForCustomizedVoiceJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DetectAudioForCustomizedVoiceJobResponse
     *
     * @param DetectAudioForCustomizedVoiceJobRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DetectAudioForCustomizedVoiceJobResponse
     */
    public function detectAudioForCustomizedVoiceJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->audioRecordId) {
            @$query['AudioRecordId'] = $request->audioRecordId;
        }

        if (null !== $request->recordUrl) {
            @$query['RecordUrl'] = $request->recordUrl;
        }

        if (null !== $request->voiceId) {
            @$query['VoiceId'] = $request->voiceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetectAudioForCustomizedVoiceJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DetectAudioForCustomizedVoiceJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DetectAudioForCustomizedVoiceJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Checks whether the reading of users has issues, such as noticeable pronunciation errors or background noise. After the audio is checked on the cloud, the qualified audio is temporarily stored on the cloud for subsequent training. Do not skip this step.
     *
     * @param request - DetectAudioForCustomizedVoiceJobRequest
     * @returns DetectAudioForCustomizedVoiceJobResponse
     *
     * @param DetectAudioForCustomizedVoiceJobRequest $request
     *
     * @return DetectAudioForCustomizedVoiceJobResponse
     */
    public function detectAudioForCustomizedVoiceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectAudioForCustomizedVoiceJobWithOptions($request, $runtime);
    }

    /**
     * Deletes a search index. After you delete a search index, the existing index data is cleared and index-based analysis, storage, and query are not supported for subsequent media assets.
     *
     * @param request - DropSearchIndexRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DropSearchIndexResponse
     *
     * @param DropSearchIndexRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DropSearchIndexResponse
     */
    public function dropSearchIndexWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->indexType) {
            @$query['IndexType'] = $request->indexType;
        }

        if (null !== $request->searchLibName) {
            @$query['SearchLibName'] = $request->searchLibName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DropSearchIndex',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DropSearchIndexResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DropSearchIndexResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a search index. After you delete a search index, the existing index data is cleared and index-based analysis, storage, and query are not supported for subsequent media assets.
     *
     * @param request - DropSearchIndexRequest
     * @returns DropSearchIndexResponse
     *
     * @param DropSearchIndexRequest $request
     *
     * @return DropSearchIndexResponse
     */
    public function dropSearchIndex($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dropSearchIndexWithOptions($request, $runtime);
    }

    /**
     * Deletes a search library and all media assets in the library.
     *
     * @param request - DropSearchLibRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns DropSearchLibResponse
     *
     * @param DropSearchLibRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DropSearchLibResponse
     */
    public function dropSearchLibWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->searchLibName) {
            @$query['SearchLibName'] = $request->searchLibName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'DropSearchLib',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return DropSearchLibResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DropSearchLibResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Deletes a search library and all media assets in the library.
     *
     * @param request - DropSearchLibRequest
     * @returns DropSearchLibResponse
     *
     * @param DropSearchLibRequest $request
     *
     * @return DropSearchLibResponse
     */
    public function dropSearchLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dropSearchLibWithOptions($request, $runtime);
    }

    /**
     * 创建一个智能体实例，返回智能体所在的频道、频道内名称以及进入频道所需的token。
     *
     * @param tmpReq - GenerateAIAgentCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GenerateAIAgentCallResponse
     *
     * @param GenerateAIAgentCallRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return GenerateAIAgentCallResponse
     */
    public function generateAIAgentCallWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new GenerateAIAgentCallShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->templateConfig) {
            $request->templateConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->templateConfig, 'TemplateConfig', 'json');
        }

        $query = [];
        if (null !== $request->AIAgentId) {
            @$query['AIAgentId'] = $request->AIAgentId;
        }

        if (null !== $request->expire) {
            @$query['Expire'] = $request->expire;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->templateConfigShrink) {
            @$query['TemplateConfig'] = $request->templateConfigShrink;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateAIAgentCall',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GenerateAIAgentCallResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GenerateAIAgentCallResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 创建一个智能体实例，返回智能体所在的频道、频道内名称以及进入频道所需的token。
     *
     * @param request - GenerateAIAgentCallRequest
     * @returns GenerateAIAgentCallResponse
     *
     * @param GenerateAIAgentCallRequest $request
     *
     * @return GenerateAIAgentCallResponse
     */
    public function generateAIAgentCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateAIAgentCallWithOptions($request, $runtime);
    }

    /**
     * Generates a random Key Management Service (KMS) data key used for HTTP Live Streaming (HLS) encryption and transcoding of videos.
     *
     * @param request - GenerateKMSDataKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GenerateKMSDataKeyResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GenerateKMSDataKeyResponse
     */
    public function generateKMSDataKeyWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GenerateKMSDataKey',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GenerateKMSDataKeyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GenerateKMSDataKeyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Generates a random Key Management Service (KMS) data key used for HTTP Live Streaming (HLS) encryption and transcoding of videos.
     *
     * @returns GenerateKMSDataKeyResponse
     *
     * @return GenerateKMSDataKeyResponse
     */
    public function generateKMSDataKey()
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateKMSDataKeyWithOptions($runtime);
    }

    /**
     * 生成直播互动消息所需的token.
     *
     * @param request - GenerateMessageChatTokenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GenerateMessageChatTokenResponse
     *
     * @param GenerateMessageChatTokenRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GenerateMessageChatTokenResponse
     */
    public function generateMessageChatTokenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->AIAgentId) {
            @$query['AIAgentId'] = $request->AIAgentId;
        }

        if (null !== $request->expire) {
            @$query['Expire'] = $request->expire;
        }

        if (null !== $request->role) {
            @$query['Role'] = $request->role;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GenerateMessageChatToken',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GenerateMessageChatTokenResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GenerateMessageChatTokenResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 生成直播互动消息所需的token.
     *
     * @param request - GenerateMessageChatTokenRequest
     * @returns GenerateMessageChatTokenResponse
     *
     * @param GenerateMessageChatTokenRequest $request
     *
     * @return GenerateMessageChatTokenResponse
     */
    public function generateMessageChatToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateMessageChatTokenWithOptions($request, $runtime);
    }

    /**
     * 获取广告插入配置.
     *
     * @param request - GetAdInsertionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetAdInsertionResponse
     *
     * @param GetAdInsertionRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetAdInsertionResponse
     */
    public function getAdInsertionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAdInsertion',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetAdInsertionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAdInsertionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取广告插入配置.
     *
     * @param request - GetAdInsertionRequest
     * @returns GetAdInsertionResponse
     *
     * @param GetAdInsertionRequest $request
     *
     * @return GetAdInsertionResponse
     */
    public function getAdInsertion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAdInsertionWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a trained digital human.
     *
     * @param request - GetAvatarRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetAvatarResponse
     *
     * @param GetAvatarRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetAvatarResponse
     */
    public function getAvatarWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->avatarId) {
            @$query['AvatarId'] = $request->avatarId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAvatar',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetAvatarResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAvatarResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a trained digital human.
     *
     * @param request - GetAvatarRequest
     * @returns GetAvatarResponse
     *
     * @param GetAvatarRequest $request
     *
     * @return GetAvatarResponse
     */
    public function getAvatar($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAvatarWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a digital human training job.
     *
     * @param request - GetAvatarTrainingJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetAvatarTrainingJobResponse
     *
     * @param GetAvatarTrainingJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetAvatarTrainingJobResponse
     */
    public function getAvatarTrainingJobWithOptions($request, $runtime)
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
            'action'      => 'GetAvatarTrainingJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetAvatarTrainingJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAvatarTrainingJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a digital human training job.
     *
     * @param request - GetAvatarTrainingJobRequest
     * @returns GetAvatarTrainingJobResponse
     *
     * @param GetAvatarTrainingJobRequest $request
     *
     * @return GetAvatarTrainingJobResponse
     */
    public function getAvatarTrainingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAvatarTrainingJobWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a quick video production job, including the input parameters, job state, and the IDs and URLs of the output media assets. You can call this operation to query only quick video production jobs created within the past year.
     *
     * @param request - GetBatchMediaProducingJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetBatchMediaProducingJobResponse
     *
     * @param GetBatchMediaProducingJobRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetBatchMediaProducingJobResponse
     */
    public function getBatchMediaProducingJobWithOptions($request, $runtime)
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
            'action'      => 'GetBatchMediaProducingJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetBatchMediaProducingJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetBatchMediaProducingJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a quick video production job, including the input parameters, job state, and the IDs and URLs of the output media assets. You can call this operation to query only quick video production jobs created within the past year.
     *
     * @param request - GetBatchMediaProducingJobRequest
     * @returns GetBatchMediaProducingJobResponse
     *
     * @param GetBatchMediaProducingJobRequest $request
     *
     * @return GetBatchMediaProducingJobResponse
     */
    public function getBatchMediaProducingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBatchMediaProducingJobWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a category and its subcategories.
     *
     * @remarks
     * You can call this operation to query the information about a category and its subcategories based on the category ID and category type.
     *
     * @param request - GetCategoriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetCategoriesResponse
     *
     * @param GetCategoriesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetCategoriesResponse
     */
    public function getCategoriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cateId) {
            @$query['CateId'] = $request->cateId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetCategoriesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetCategoriesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a category and its subcategories.
     *
     * @remarks
     * You can call this operation to query the information about a category and its subcategories based on the category ID and category type.
     *
     * @param request - GetCategoriesRequest
     * @returns GetCategoriesResponse
     *
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
     * 获取频道.
     *
     * @param request - GetChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetChannelResponse
     *
     * @param GetChannelRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetChannelResponse
     */
    public function getChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->channelName) {
            @$query['ChannelName'] = $request->channelName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetChannel',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetChannelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetChannelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取频道.
     *
     * @param request - GetChannelRequest
     * @returns GetChannelResponse
     *
     * @param GetChannelRequest $request
     *
     * @return GetChannelResponse
     */
    public function getChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getChannelWithOptions($request, $runtime);
    }

    /**
     * 获取内容分析搜索配置.
     *
     * @param request - GetContentAnalyzeConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetContentAnalyzeConfigResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return GetContentAnalyzeConfigResponse
     */
    public function getContentAnalyzeConfigWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'GetContentAnalyzeConfig',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetContentAnalyzeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetContentAnalyzeConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取内容分析搜索配置.
     *
     * @returns GetContentAnalyzeConfigResponse
     *
     * @return GetContentAnalyzeConfigResponse
     */
    public function getContentAnalyzeConfig()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getContentAnalyzeConfigWithOptions($runtime);
    }

    /**
     * Queries the information about a custom template.
     *
     * @remarks
     * You can call this operation to query the information about a template with the ID specified by the TemplateId parameter. You can also query the information about the default template. If TemplateId is specified, other parameters are ignored and the template whose ID is specified is queried. If TemplateId is not specified, the default template is queried based on other parameters. In this case, Type is required.
     * Template types:
     * 1.  1: transcoding template.
     * 2.  2: snapshot template.
     * 3.  3: animated image template.
     * 4.  4\\. image watermark template.
     * 5.  5: text watermark template.
     * 6.  6: subtitle template.
     * 7.  7: AI-assisted content moderation template.
     * 8.  8: AI-assisted intelligent thumbnail template.
     * 9.  9: AI-assisted intelligent erasure template.
     * Subtypes of transcoding templates:
     * 1.  1 (Normal): regular template.
     * 2.  2 (AudioTranscode): audio transcoding template.
     * 3.  3 (Remux): container format conversion template.
     * 4.  4 (NarrowBandV1): Narrowband HD 1.0 template.
     * 5.  5 (NarrowBandV2): Narrowband HD 2.0 template.
     * Subtypes of snapshot templates:
     * 1.  1 (Normal): regular template.
     * 2.  2 (Sprite): sprite template.
     * 3.  3 (WebVtt): WebVTT template.
     * Subtypes of AI-assisted content moderation templates:
     * 1.  1 (Video): video moderation template.
     * 2.  2 (Audio): audio moderation template.
     * 3.  3 (Image): image moderation template.
     * Subtypes of AI-assisted intelligent erasure templates:
     * 1.  1 (VideoDelogo): logo erasure template.
     * 2.  2 (VideoDetext): subtitle erasure template.
     *
     * @param request - GetCustomTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetCustomTemplateResponse
     *
     * @param GetCustomTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetCustomTemplateResponse
     */
    public function getCustomTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->subtype) {
            @$query['Subtype'] = $request->subtype;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetCustomTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetCustomTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a custom template.
     *
     * @remarks
     * You can call this operation to query the information about a template with the ID specified by the TemplateId parameter. You can also query the information about the default template. If TemplateId is specified, other parameters are ignored and the template whose ID is specified is queried. If TemplateId is not specified, the default template is queried based on other parameters. In this case, Type is required.
     * Template types:
     * 1.  1: transcoding template.
     * 2.  2: snapshot template.
     * 3.  3: animated image template.
     * 4.  4\\. image watermark template.
     * 5.  5: text watermark template.
     * 6.  6: subtitle template.
     * 7.  7: AI-assisted content moderation template.
     * 8.  8: AI-assisted intelligent thumbnail template.
     * 9.  9: AI-assisted intelligent erasure template.
     * Subtypes of transcoding templates:
     * 1.  1 (Normal): regular template.
     * 2.  2 (AudioTranscode): audio transcoding template.
     * 3.  3 (Remux): container format conversion template.
     * 4.  4 (NarrowBandV1): Narrowband HD 1.0 template.
     * 5.  5 (NarrowBandV2): Narrowband HD 2.0 template.
     * Subtypes of snapshot templates:
     * 1.  1 (Normal): regular template.
     * 2.  2 (Sprite): sprite template.
     * 3.  3 (WebVtt): WebVTT template.
     * Subtypes of AI-assisted content moderation templates:
     * 1.  1 (Video): video moderation template.
     * 2.  2 (Audio): audio moderation template.
     * 3.  3 (Image): image moderation template.
     * Subtypes of AI-assisted intelligent erasure templates:
     * 1.  1 (VideoDelogo): logo erasure template.
     * 2.  2 (VideoDetext): subtitle erasure template.
     *
     * @param request - GetCustomTemplateRequest
     * @returns GetCustomTemplateResponse
     *
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
     * Queries the information about a personalized human voice.
     *
     * @param request - GetCustomizedVoiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetCustomizedVoiceResponse
     *
     * @param GetCustomizedVoiceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetCustomizedVoiceResponse
     */
    public function getCustomizedVoiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->voiceId) {
            @$query['VoiceId'] = $request->voiceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCustomizedVoice',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetCustomizedVoiceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetCustomizedVoiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a personalized human voice.
     *
     * @param request - GetCustomizedVoiceRequest
     * @returns GetCustomizedVoiceResponse
     *
     * @param GetCustomizedVoiceRequest $request
     *
     * @return GetCustomizedVoiceResponse
     */
    public function getCustomizedVoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomizedVoiceWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a human voice cloning job.
     *
     * @param request - GetCustomizedVoiceJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetCustomizedVoiceJobResponse
     *
     * @param GetCustomizedVoiceJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetCustomizedVoiceJobResponse
     */
    public function getCustomizedVoiceJobWithOptions($request, $runtime)
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
            'action'      => 'GetCustomizedVoiceJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetCustomizedVoiceJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetCustomizedVoiceJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a human voice cloning job.
     *
     * @param request - GetCustomizedVoiceJobRequest
     * @returns GetCustomizedVoiceJobResponse
     *
     * @param GetCustomizedVoiceJobRequest $request
     *
     * @return GetCustomizedVoiceJobResponse
     */
    public function getCustomizedVoiceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomizedVoiceJobWithOptions($request, $runtime);
    }

    /**
     * 获取用户默认存储地址
     *
     * @param request - GetDefaultStorageLocationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetDefaultStorageLocationResponse
     *
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDefaultStorageLocationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDefaultStorageLocationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取用户默认存储地址
     *
     * @returns GetDefaultStorageLocationResponse
     *
     * @return GetDefaultStorageLocationResponse
     */
    public function getDefaultStorageLocation()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDefaultStorageLocationWithOptions($runtime);
    }

    /**
     * Queries the text to be read and sample audio for training a personalized human voice.
     *
     * @param request - GetDemonstrationForCustomizedVoiceJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetDemonstrationForCustomizedVoiceJobResponse
     *
     * @param GetDemonstrationForCustomizedVoiceJobRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return GetDemonstrationForCustomizedVoiceJobResponse
     */
    public function getDemonstrationForCustomizedVoiceJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->scenario) {
            @$query['Scenario'] = $request->scenario;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDemonstrationForCustomizedVoiceJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDemonstrationForCustomizedVoiceJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDemonstrationForCustomizedVoiceJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the text to be read and sample audio for training a personalized human voice.
     *
     * @param request - GetDemonstrationForCustomizedVoiceJobRequest
     * @returns GetDemonstrationForCustomizedVoiceJobResponse
     *
     * @param GetDemonstrationForCustomizedVoiceJobRequest $request
     *
     * @return GetDemonstrationForCustomizedVoiceJobResponse
     */
    public function getDemonstrationForCustomizedVoiceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDemonstrationForCustomizedVoiceJobWithOptions($request, $runtime);
    }

    /**
     * Queries the information about an image animation job.
     *
     * @param request - GetDynamicImageJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetDynamicImageJobResponse
     *
     * @param GetDynamicImageJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetDynamicImageJobResponse
     */
    public function getDynamicImageJobWithOptions($request, $runtime)
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetDynamicImageJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDynamicImageJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about an image animation job.
     *
     * @param request - GetDynamicImageJobRequest
     * @returns GetDynamicImageJobResponse
     *
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
     * Queries the information about an online editing project.
     *
     * @param request - GetEditingProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetEditingProjectResponse
     *
     * @param GetEditingProjectRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetEditingProjectResponse
     */
    public function getEditingProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->requestSource) {
            @$query['RequestSource'] = $request->requestSource;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetEditingProjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetEditingProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about an online editing project.
     *
     * @param request - GetEditingProjectRequest
     * @returns GetEditingProjectResponse
     *
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
     * Queries all materials associated with an online editing project.
     *
     * @param request - GetEditingProjectMaterialsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetEditingProjectMaterialsResponse
     *
     * @param GetEditingProjectMaterialsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetEditingProjectMaterialsResponse
     */
    public function getEditingProjectMaterialsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetEditingProjectMaterialsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetEditingProjectMaterialsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries all materials associated with an online editing project.
     *
     * @param request - GetEditingProjectMaterialsRequest
     * @returns GetEditingProjectMaterialsResponse
     *
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
     * Queries event callback configurations.
     *
     * @param request - GetEventCallbackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetEventCallbackResponse
     *
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetEventCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetEventCallbackResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries event callback configurations.
     *
     * @returns GetEventCallbackResponse
     *
     * @return GetEventCallbackResponse
     */
    public function getEventCallback()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEventCallbackWithOptions($runtime);
    }

    /**
     * Queries the index file of a live stream. The index file is used to preview an editing project in the console.
     *
     * @param request - GetLiveEditingIndexFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetLiveEditingIndexFileResponse
     *
     * @param GetLiveEditingIndexFileRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetLiveEditingIndexFileResponse
     */
    public function getLiveEditingIndexFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->streamName) {
            @$query['StreamName'] = $request->streamName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLiveEditingIndexFile',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetLiveEditingIndexFileResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetLiveEditingIndexFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the index file of a live stream. The index file is used to preview an editing project in the console.
     *
     * @param request - GetLiveEditingIndexFileRequest
     * @returns GetLiveEditingIndexFileResponse
     *
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
     * Queries the information about a live editing job. The requested information includes the state, timeline, and template of the job, the ID and URL of the output file, and the configurations of the job. You can call this operation to query only live editing jobs created within the past year.
     *
     * @param request - GetLiveEditingJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetLiveEditingJobResponse
     *
     * @param GetLiveEditingJobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetLiveEditingJobResponse
     */
    public function getLiveEditingJobWithOptions($request, $runtime)
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetLiveEditingJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetLiveEditingJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a live editing job. The requested information includes the state, timeline, and template of the job, the ID and URL of the output file, and the configurations of the job. You can call this operation to query only live editing jobs created within the past year.
     *
     * @param request - GetLiveEditingJobRequest
     * @returns GetLiveEditingJobResponse
     *
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
     * 获取实时打包频道.
     *
     * @param request - GetLivePackageChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetLivePackageChannelResponse
     *
     * @param GetLivePackageChannelRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetLivePackageChannelResponse
     */
    public function getLivePackageChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->channelName) {
            @$query['ChannelName'] = $request->channelName;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLivePackageChannel',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetLivePackageChannelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetLivePackageChannelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取实时打包频道.
     *
     * @param request - GetLivePackageChannelRequest
     * @returns GetLivePackageChannelResponse
     *
     * @param GetLivePackageChannelRequest $request
     *
     * @return GetLivePackageChannelResponse
     */
    public function getLivePackageChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLivePackageChannelWithOptions($request, $runtime);
    }

    /**
     * 获取直播打包频道组.
     *
     * @param request - GetLivePackageChannelGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetLivePackageChannelGroupResponse
     *
     * @param GetLivePackageChannelGroupRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return GetLivePackageChannelGroupResponse
     */
    public function getLivePackageChannelGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLivePackageChannelGroup',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetLivePackageChannelGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetLivePackageChannelGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取直播打包频道组.
     *
     * @param request - GetLivePackageChannelGroupRequest
     * @returns GetLivePackageChannelGroupResponse
     *
     * @param GetLivePackageChannelGroupRequest $request
     *
     * @return GetLivePackageChannelGroupResponse
     */
    public function getLivePackageChannelGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLivePackageChannelGroupWithOptions($request, $runtime);
    }

    /**
     * 获取实时打包源站端点.
     *
     * @param request - GetLivePackageOriginEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetLivePackageOriginEndpointResponse
     *
     * @param GetLivePackageOriginEndpointRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetLivePackageOriginEndpointResponse
     */
    public function getLivePackageOriginEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->channelName) {
            @$query['ChannelName'] = $request->channelName;
        }

        if (null !== $request->endpointName) {
            @$query['EndpointName'] = $request->endpointName;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLivePackageOriginEndpoint',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetLivePackageOriginEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetLivePackageOriginEndpointResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取实时打包源站端点.
     *
     * @param request - GetLivePackageOriginEndpointRequest
     * @returns GetLivePackageOriginEndpointResponse
     *
     * @param GetLivePackageOriginEndpointRequest $request
     *
     * @return GetLivePackageOriginEndpointResponse
     */
    public function getLivePackageOriginEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLivePackageOriginEndpointWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a live stream recording job.
     *
     * @param request - GetLiveRecordJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetLiveRecordJobResponse
     *
     * @param GetLiveRecordJobRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetLiveRecordJobResponse
     */
    public function getLiveRecordJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLiveRecordJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetLiveRecordJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetLiveRecordJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a live stream recording job.
     *
     * @param request - GetLiveRecordJobRequest
     * @returns GetLiveRecordJobResponse
     *
     * @param GetLiveRecordJobRequest $request
     *
     * @return GetLiveRecordJobResponse
     */
    public function getLiveRecordJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLiveRecordJobWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a live stream recording template or a snapshot of the template.
     *
     * @param request - GetLiveRecordTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetLiveRecordTemplateResponse
     *
     * @param GetLiveRecordTemplateRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetLiveRecordTemplateResponse
     */
    public function getLiveRecordTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLiveRecordTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetLiveRecordTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetLiveRecordTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a live stream recording template or a snapshot of the template.
     *
     * @param request - GetLiveRecordTemplateRequest
     * @returns GetLiveRecordTemplateResponse
     *
     * @param GetLiveRecordTemplateRequest $request
     *
     * @return GetLiveRecordTemplateResponse
     */
    public function getLiveRecordTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLiveRecordTemplateWithOptions($request, $runtime);
    }

    /**
     * Queries the information a live stream snapshot job.
     *
     * @param request - GetLiveSnapshotJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetLiveSnapshotJobResponse
     *
     * @param GetLiveSnapshotJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetLiveSnapshotJobResponse
     */
    public function getLiveSnapshotJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLiveSnapshotJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetLiveSnapshotJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetLiveSnapshotJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information a live stream snapshot job.
     *
     * @param request - GetLiveSnapshotJobRequest
     * @returns GetLiveSnapshotJobResponse
     *
     * @param GetLiveSnapshotJobRequest $request
     *
     * @return GetLiveSnapshotJobResponse
     */
    public function getLiveSnapshotJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLiveSnapshotJobWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a live stream snapshot template.
     *
     * @param request - GetLiveSnapshotTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetLiveSnapshotTemplateResponse
     *
     * @param GetLiveSnapshotTemplateRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetLiveSnapshotTemplateResponse
     */
    public function getLiveSnapshotTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLiveSnapshotTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetLiveSnapshotTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetLiveSnapshotTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a live stream snapshot template.
     *
     * @param request - GetLiveSnapshotTemplateRequest
     * @returns GetLiveSnapshotTemplateResponse
     *
     * @param GetLiveSnapshotTemplateRequest $request
     *
     * @return GetLiveSnapshotTemplateResponse
     */
    public function getLiveSnapshotTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLiveSnapshotTemplateWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a live stream transcoding job.
     *
     * @param request - GetLiveTranscodeJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetLiveTranscodeJobResponse
     *
     * @param GetLiveTranscodeJobRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetLiveTranscodeJobResponse
     */
    public function getLiveTranscodeJobWithOptions($request, $runtime)
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetLiveTranscodeJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetLiveTranscodeJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a live stream transcoding job.
     *
     * @param request - GetLiveTranscodeJobRequest
     * @returns GetLiveTranscodeJobResponse
     *
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
     * Queries the information a live stream transcoding template.
     *
     * @param request - GetLiveTranscodeTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetLiveTranscodeTemplateResponse
     *
     * @param GetLiveTranscodeTemplateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetLiveTranscodeTemplateResponse
     */
    public function getLiveTranscodeTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetLiveTranscodeTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetLiveTranscodeTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information a live stream transcoding template.
     *
     * @param request - GetLiveTranscodeTemplateRequest
     * @returns GetLiveTranscodeTemplateResponse
     *
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
     * Retrieve detailed information of the corresponding MediaConnect based on the instance ID.
     *
     * @remarks
     * - When the input Flow instance ID does not exist, the interface will return an error.
     * - The StartTime returned by the interface is only valid when the Flow status is online.
     *
     * @param request - GetMediaConnectFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetMediaConnectFlowResponse
     *
     * @param GetMediaConnectFlowRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetMediaConnectFlowResponse
     */
    public function getMediaConnectFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->flowId) {
            @$query['FlowId'] = $request->flowId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMediaConnectFlow',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetMediaConnectFlowResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMediaConnectFlowResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Retrieve detailed information of the corresponding MediaConnect based on the instance ID.
     *
     * @remarks
     * - When the input Flow instance ID does not exist, the interface will return an error.
     * - The StartTime returned by the interface is only valid when the Flow status is online.
     *
     * @param request - GetMediaConnectFlowRequest
     * @returns GetMediaConnectFlowResponse
     *
     * @param GetMediaConnectFlowRequest $request
     *
     * @return GetMediaConnectFlowResponse
     */
    public function getMediaConnectFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaConnectFlowWithOptions($request, $runtime);
    }

    /**
     * Get input information under a MediaConnect instance.
     *
     * @remarks
     * - When the provided Flow instance ID does not exist, the interface will return an error.
     *
     * @param request - GetMediaConnectFlowInputRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetMediaConnectFlowInputResponse
     *
     * @param GetMediaConnectFlowInputRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return GetMediaConnectFlowInputResponse
     */
    public function getMediaConnectFlowInputWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->flowId) {
            @$query['FlowId'] = $request->flowId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMediaConnectFlowInput',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetMediaConnectFlowInputResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMediaConnectFlowInputResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Get input information under a MediaConnect instance.
     *
     * @remarks
     * - When the provided Flow instance ID does not exist, the interface will return an error.
     *
     * @param request - GetMediaConnectFlowInputRequest
     * @returns GetMediaConnectFlowInputResponse
     *
     * @param GetMediaConnectFlowInputRequest $request
     *
     * @return GetMediaConnectFlowInputResponse
     */
    public function getMediaConnectFlowInput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaConnectFlowInputWithOptions($request, $runtime);
    }

    /**
     * Retrieve detailed information of a specific output based on outputName.
     *
     * @remarks
     * - When the provided Flow instance ID does not exist, the interface will return an error.
     *
     * @param request - GetMediaConnectFlowOutputRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetMediaConnectFlowOutputResponse
     *
     * @param GetMediaConnectFlowOutputRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return GetMediaConnectFlowOutputResponse
     */
    public function getMediaConnectFlowOutputWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->flowId) {
            @$query['FlowId'] = $request->flowId;
        }

        if (null !== $request->outputName) {
            @$query['OutputName'] = $request->outputName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMediaConnectFlowOutput',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetMediaConnectFlowOutputResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMediaConnectFlowOutputResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Retrieve detailed information of a specific output based on outputName.
     *
     * @remarks
     * - When the provided Flow instance ID does not exist, the interface will return an error.
     *
     * @param request - GetMediaConnectFlowOutputRequest
     * @returns GetMediaConnectFlowOutputResponse
     *
     * @param GetMediaConnectFlowOutputRequest $request
     *
     * @return GetMediaConnectFlowOutputResponse
     */
    public function getMediaConnectFlowOutput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaConnectFlowOutputWithOptions($request, $runtime);
    }

    /**
     * 获取 MediaConvert 任务详情.
     *
     * @param request - GetMediaConvertJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetMediaConvertJobResponse
     *
     * @param GetMediaConvertJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetMediaConvertJobResponse
     */
    public function getMediaConvertJobWithOptions($request, $runtime)
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
            'action'      => 'GetMediaConvertJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetMediaConvertJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMediaConvertJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取 MediaConvert 任务详情.
     *
     * @param request - GetMediaConvertJobRequest
     * @returns GetMediaConvertJobResponse
     *
     * @param GetMediaConvertJobRequest $request
     *
     * @return GetMediaConvertJobResponse
     */
    public function getMediaConvertJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaConvertJobWithOptions($request, $runtime);
    }

    /**
     * Queries information about a media asset based on the ID of the media asset in Intelligent Media Services (IMS) or the input URL of the media asset.
     *
     * @remarks
     * If the MediaId parameter is specified, the MediaId parameter is preferentially used for the query. If the MediaId parameter is left empty, the InputURL parameter must be specified.
     *
     * @param request - GetMediaInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetMediaInfoResponse
     *
     * @param GetMediaInfoRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetMediaInfoResponse
     */
    public function getMediaInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->inputURL) {
            @$query['InputURL'] = $request->inputURL;
        }

        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->outputType) {
            @$query['OutputType'] = $request->outputType;
        }

        if (null !== $request->returnDetailedInfo) {
            @$query['ReturnDetailedInfo'] = $request->returnDetailedInfo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetMediaInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMediaInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries information about a media asset based on the ID of the media asset in Intelligent Media Services (IMS) or the input URL of the media asset.
     *
     * @remarks
     * If the MediaId parameter is specified, the MediaId parameter is preferentially used for the query. If the MediaId parameter is left empty, the InputURL parameter must be specified.
     *
     * @param request - GetMediaInfoRequest
     * @returns GetMediaInfoResponse
     *
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
     * Queries the information about a media information analysis job.
     *
     * @param request - GetMediaInfoJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetMediaInfoJobResponse
     *
     * @param GetMediaInfoJobRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetMediaInfoJobResponse
     */
    public function getMediaInfoJobWithOptions($request, $runtime)
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetMediaInfoJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMediaInfoJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a media information analysis job.
     *
     * @param request - GetMediaInfoJobRequest
     * @returns GetMediaInfoJobResponse
     *
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
     * Queries the information about marks based on mark IDs.
     *
     * @param request - GetMediaMarksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetMediaMarksResponse
     *
     * @param GetMediaMarksRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetMediaMarksResponse
     */
    public function getMediaMarksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->mediaMarkIds) {
            @$query['MediaMarkIds'] = $request->mediaMarkIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMediaMarks',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetMediaMarksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMediaMarksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about marks based on mark IDs.
     *
     * @param request - GetMediaMarksRequest
     * @returns GetMediaMarksResponse
     *
     * @param GetMediaMarksRequest $request
     *
     * @return GetMediaMarksResponse
     */
    public function getMediaMarks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaMarksWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a media editing and production job. The requested information includes the state, timeline, template, and data of the job. You can call this operation to query only media editing and production jobs created within the past year.
     *
     * @param request - GetMediaProducingJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetMediaProducingJobResponse
     *
     * @param GetMediaProducingJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetMediaProducingJobResponse
     */
    public function getMediaProducingJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetMediaProducingJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMediaProducingJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a media editing and production job. The requested information includes the state, timeline, template, and data of the job. You can call this operation to query only media editing and production jobs created within the past year.
     *
     * @param request - GetMediaProducingJobRequest
     * @returns GetMediaProducingJobResponse
     *
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
     * Queries the information about a packaging job.
     *
     * @param request - GetPackageJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetPackageJobResponse
     *
     * @param GetPackageJobRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetPackageJobResponse
     */
    public function getPackageJobWithOptions($request, $runtime)
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
            'action'      => 'GetPackageJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetPackageJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetPackageJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a packaging job.
     *
     * @param request - GetPackageJobRequest
     * @returns GetPackageJobResponse
     *
     * @param GetPackageJobRequest $request
     *
     * @return GetPackageJobResponse
     */
    public function getPackageJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPackageJobWithOptions($request, $runtime);
    }

    /**
     * Queries the information about an ApsaraVideo Media Processing (MPS) queue.
     *
     * @param request - GetPipelineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetPipelineResponse
     *
     * @param GetPipelineRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetPipelineResponse
     */
    public function getPipelineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pipelineId) {
            @$query['PipelineId'] = $request->pipelineId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetPipelineResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about an ApsaraVideo Media Processing (MPS) queue.
     *
     * @param request - GetPipelineRequest
     * @returns GetPipelineResponse
     *
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
     * Queries the playback URL of a video or audio file based on its ID.
     *
     * @remarks
     * You use the ID of a video or audio file to query the playback URL of the file. Then, you can use the playback URL to play the audio or video in ApsaraVideo Player SDK (for URL-based playback) or a third-party player.
     *
     * @param request - GetPlayInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetPlayInfoResponse
     *
     * @param GetPlayInfoRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetPlayInfoResponse
     */
    public function getPlayInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetPlayInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetPlayInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the playback URL of a video or audio file based on its ID.
     *
     * @remarks
     * You use the ID of a video or audio file to query the playback URL of the file. Then, you can use the playback URL to play the audio or video in ApsaraVideo Player SDK (for URL-based playback) or a third-party player.
     *
     * @param request - GetPlayInfoRequest
     * @returns GetPlayInfoResponse
     *
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
     * 获取节目.
     *
     * @param request - GetProgramRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetProgramResponse
     *
     * @param GetProgramRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetProgramResponse
     */
    public function getProgramWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->channelName) {
            @$query['ChannelName'] = $request->channelName;
        }

        if (null !== $request->programName) {
            @$query['ProgramName'] = $request->programName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetProgram',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetProgramResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetProgramResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取节目.
     *
     * @param request - GetProgramRequest
     * @returns GetProgramResponse
     *
     * @param GetProgramRequest $request
     *
     * @return GetProgramResponse
     */
    public function getProgram($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProgramWithOptions($request, $runtime);
    }

    /**
     * 查询工程导出任务
     *
     * @param request - GetProjectExportJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetProjectExportJobResponse
     *
     * @param GetProjectExportJobRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetProjectExportJobResponse
     */
    public function getProjectExportJobWithOptions($request, $runtime)
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
            'action'      => 'GetProjectExportJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetProjectExportJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetProjectExportJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询工程导出任务
     *
     * @param request - GetProjectExportJobRequest
     * @returns GetProjectExportJobResponse
     *
     * @param GetProjectExportJobRequest $request
     *
     * @return GetProjectExportJobResponse
     */
    public function getProjectExportJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProjectExportJobWithOptions($request, $runtime);
    }

    /**
     * 获取公共媒资内容信息.
     *
     * @param request - GetPublicMediaInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetPublicMediaInfoResponse
     *
     * @param GetPublicMediaInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetPublicMediaInfoResponse
     */
    public function getPublicMediaInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPublicMediaInfo',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetPublicMediaInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetPublicMediaInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取公共媒资内容信息.
     *
     * @param request - GetPublicMediaInfoRequest
     * @returns GetPublicMediaInfoResponse
     *
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
     * Queries the information about an intelligent job and the execution results of the job based the job ID. You can call this operation to query only intelligent jobs created within the past year.
     *
     * @param request - GetSmartHandleJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetSmartHandleJobResponse
     *
     * @param GetSmartHandleJobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetSmartHandleJobResponse
     */
    public function getSmartHandleJobWithOptions($request, $runtime)
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
            'action'      => 'GetSmartHandleJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetSmartHandleJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSmartHandleJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about an intelligent job and the execution results of the job based the job ID. You can call this operation to query only intelligent jobs created within the past year.
     *
     * @param request - GetSmartHandleJobRequest
     * @returns GetSmartHandleJobResponse
     *
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
     * Queries the information about a snapshot job.
     *
     * @param request - GetSnapshotJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetSnapshotJobResponse
     *
     * @param GetSnapshotJobRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetSnapshotJobResponse
     */
    public function getSnapshotJobWithOptions($request, $runtime)
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetSnapshotJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSnapshotJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a snapshot job.
     *
     * @param request - GetSnapshotJobRequest
     * @returns GetSnapshotJobResponse
     *
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
     * Queries the accessible URLs of the output images of a snapshot job.
     *
     * @param request - GetSnapshotUrlsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetSnapshotUrlsResponse
     *
     * @param GetSnapshotUrlsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetSnapshotUrlsResponse
     */
    public function getSnapshotUrlsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetSnapshotUrlsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSnapshotUrlsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the accessible URLs of the output images of a snapshot job.
     *
     * @param request - GetSnapshotUrlsRequest
     * @returns GetSnapshotUrlsResponse
     *
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
     * 获取源.
     *
     * @param request - GetSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetSourceResponse
     *
     * @param GetSourceRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return GetSourceResponse
     */
    public function getSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sourceLocationName) {
            @$query['SourceLocationName'] = $request->sourceLocationName;
        }

        if (null !== $request->sourceName) {
            @$query['SourceName'] = $request->sourceName;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSource',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetSourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取源.
     *
     * @param request - GetSourceRequest
     * @returns GetSourceResponse
     *
     * @param GetSourceRequest $request
     *
     * @return GetSourceResponse
     */
    public function getSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSourceWithOptions($request, $runtime);
    }

    /**
     * 获取源位置.
     *
     * @param request - GetSourceLocationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetSourceLocationResponse
     *
     * @param GetSourceLocationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetSourceLocationResponse
     */
    public function getSourceLocationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->sourceLocationName) {
            @$query['SourceLocationName'] = $request->sourceLocationName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSourceLocation',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetSourceLocationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSourceLocationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取源位置.
     *
     * @param request - GetSourceLocationRequest
     * @returns GetSourceLocationResponse
     *
     * @param GetSourceLocationRequest $request
     *
     * @return GetSourceLocationResponse
     */
    public function getSourceLocation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSourceLocationWithOptions($request, $runtime);
    }

    /**
     * 获取存储地址列表.
     *
     * @param request - GetStorageListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetStorageListResponse
     *
     * @param GetStorageListRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetStorageListResponse
     */
    public function getStorageListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->storageType) {
            @$query['StorageType'] = $request->storageType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetStorageList',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetStorageListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetStorageListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取存储地址列表.
     *
     * @param request - GetStorageListRequest
     * @returns GetStorageListResponse
     *
     * @param GetStorageListRequest $request
     *
     * @return GetStorageListResponse
     */
    public function getStorageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStorageListWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a system template.
     *
     * @param request - GetSystemTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetSystemTemplateResponse
     *
     * @param GetSystemTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetSystemTemplateResponse
     */
    public function getSystemTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetSystemTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSystemTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a system template.
     *
     * @param request - GetSystemTemplateRequest
     * @returns GetSystemTemplateResponse
     *
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
     * Queries the information about a template based on the template ID. You can call this operation to query the information about an advanced template if the template is in the Available state.
     *
     * @remarks
     * A template is an encapsulation of the timeline of a media editing and production job. You can define a common timeline as a template. When you have the same requirements, you need to only specify key parameters and materials to produce videos.
     * *   For more information about how to use a regular template, see [Create and use a regular template](https://help.aliyun.com/document_detail/445399.html).
     * *   For more information about how to use an advanced template, see [Create and use advanced templates](https://help.aliyun.com/document_detail/445389.html).
     *
     * @param request - GetTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetTemplateResponse
     *
     * @param GetTemplateRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return GetTemplateResponse
     */
    public function getTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->relatedMediaidFlag) {
            @$query['RelatedMediaidFlag'] = $request->relatedMediaidFlag;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a template based on the template ID. You can call this operation to query the information about an advanced template if the template is in the Available state.
     *
     * @remarks
     * A template is an encapsulation of the timeline of a media editing and production job. You can define a common timeline as a template. When you have the same requirements, you need to only specify key parameters and materials to produce videos.
     * *   For more information about how to use a regular template, see [Create and use a regular template](https://help.aliyun.com/document_detail/445399.html).
     * *   For more information about how to use an advanced template, see [Create and use advanced templates](https://help.aliyun.com/document_detail/445389.html).
     *
     * @param request - GetTemplateRequest
     * @returns GetTemplateResponse
     *
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
     * Queries the URLs of materials associated with an advanced template for use by the advanced template editor. The URLs expire in 30 minutes. FileList is an array of materials that you want to query. If you do not specify this parameter, the URLs of all materials are returned. A maximum of 400 URLs can be returned.
     *
     * @param request - GetTemplateMaterialsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetTemplateMaterialsResponse
     *
     * @param GetTemplateMaterialsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetTemplateMaterialsResponse
     */
    public function getTemplateMaterialsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileList) {
            @$query['FileList'] = $request->fileList;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTemplateMaterials',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetTemplateMaterialsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTemplateMaterialsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the URLs of materials associated with an advanced template for use by the advanced template editor. The URLs expire in 30 minutes. FileList is an array of materials that you want to query. If you do not specify this parameter, the URLs of all materials are returned. A maximum of 400 URLs can be returned.
     *
     * @param request - GetTemplateMaterialsRequest
     * @returns GetTemplateMaterialsResponse
     *
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
     * Queries the parameters for replaceable materials in a template, including the parameter names, default values, and material thumbnails. Only advanced templates are supported.
     *
     * @param request - GetTemplateParamsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetTemplateParamsResponse
     *
     * @param GetTemplateParamsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetTemplateParamsResponse
     */
    public function getTemplateParamsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTemplateParams',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetTemplateParamsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTemplateParamsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the parameters for replaceable materials in a template, including the parameter names, default values, and material thumbnails. Only advanced templates are supported.
     *
     * @param request - GetTemplateParamsRequest
     * @returns GetTemplateParamsResponse
     *
     * @param GetTemplateParamsRequest $request
     *
     * @return GetTemplateParamsResponse
     */
    public function getTemplateParams($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateParamsWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a transcoding job.
     *
     * @param request - GetTranscodeJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetTranscodeJobResponse
     *
     * @param GetTranscodeJobRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetTranscodeJobResponse
     */
    public function getTranscodeJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->parentJobId) {
            @$query['ParentJobId'] = $request->parentJobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetTranscodeJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTranscodeJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a transcoding job.
     *
     * @param request - GetTranscodeJobRequest
     * @returns GetTranscodeJobResponse
     *
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
     * Queries the information about URL-based upload jobs.
     *
     * @remarks
     * You can call this operation to query the information, including the upload status, user data, creation time, and completion time, about URL-based upload jobs based on the returned job IDs or the URLs used during the upload.
     * If an upload job fails, you can view the error code and error message. If an upload job is successful, you can obtain the video ID.
     *
     * @param request - GetUrlUploadInfosRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetUrlUploadInfosResponse
     *
     * @param GetUrlUploadInfosRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return GetUrlUploadInfosResponse
     */
    public function getUrlUploadInfosWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobIds) {
            @$query['JobIds'] = $request->jobIds;
        }

        if (null !== $request->uploadURLs) {
            @$query['UploadURLs'] = $request->uploadURLs;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetUrlUploadInfosResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetUrlUploadInfosResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about URL-based upload jobs.
     *
     * @remarks
     * You can call this operation to query the information, including the upload status, user data, creation time, and completion time, about URL-based upload jobs based on the returned job IDs or the URLs used during the upload.
     * If an upload job fails, you can view the error code and error message. If an upload job is successful, you can obtain the video ID.
     *
     * @param request - GetUrlUploadInfosRequest
     * @returns GetUrlUploadInfosResponse
     *
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
     * Queries information about video and audio files.
     *
     * @remarks
     * You can call this operation to query information about up to the first 5,000 audio and video files based on the filter condition, such as the status or category ID of the file. We recommend that you set the StartTime and EndTime parameters to narrow down the time range and perform multiple queries to obtain data.
     *
     * @param request - GetVideoListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetVideoListResponse
     *
     * @param GetVideoListRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetVideoListResponse
     */
    public function getVideoListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cateId) {
            @$query['CateId'] = $request->cateId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetVideoList',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetVideoListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetVideoListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries information about video and audio files.
     *
     * @remarks
     * You can call this operation to query information about up to the first 5,000 audio and video files based on the filter condition, such as the status or category ID of the file. We recommend that you set the StartTime and EndTime parameters to narrow down the time range and perform multiple queries to obtain data.
     *
     * @param request - GetVideoListRequest
     * @returns GetVideoListResponse
     *
     * @param GetVideoListRequest $request
     *
     * @return GetVideoListResponse
     */
    public function getVideoList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVideoListWithOptions($request, $runtime);
    }

    /**
     * 查询点播打包资产.
     *
     * @param request - GetVodPackagingAssetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetVodPackagingAssetResponse
     *
     * @param GetVodPackagingAssetRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetVodPackagingAssetResponse
     */
    public function getVodPackagingAssetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->assetName) {
            @$query['AssetName'] = $request->assetName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetVodPackagingAsset',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetVodPackagingAssetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetVodPackagingAssetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询点播打包资产.
     *
     * @param request - GetVodPackagingAssetRequest
     * @returns GetVodPackagingAssetResponse
     *
     * @param GetVodPackagingAssetRequest $request
     *
     * @return GetVodPackagingAssetResponse
     */
    public function getVodPackagingAsset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVodPackagingAssetWithOptions($request, $runtime);
    }

    /**
     * 查询打包模板配置.
     *
     * @param request - GetVodPackagingConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetVodPackagingConfigurationResponse
     *
     * @param GetVodPackagingConfigurationRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetVodPackagingConfigurationResponse
     */
    public function getVodPackagingConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configurationName) {
            @$query['ConfigurationName'] = $request->configurationName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetVodPackagingConfiguration',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetVodPackagingConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetVodPackagingConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询打包模板配置.
     *
     * @param request - GetVodPackagingConfigurationRequest
     * @returns GetVodPackagingConfigurationResponse
     *
     * @param GetVodPackagingConfigurationRequest $request
     *
     * @return GetVodPackagingConfigurationResponse
     */
    public function getVodPackagingConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVodPackagingConfigurationWithOptions($request, $runtime);
    }

    /**
     * 获取点播打包组.
     *
     * @param request - GetVodPackagingGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetVodPackagingGroupResponse
     *
     * @param GetVodPackagingGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return GetVodPackagingGroupResponse
     */
    public function getVodPackagingGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetVodPackagingGroup',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetVodPackagingGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetVodPackagingGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取点播打包组.
     *
     * @param request - GetVodPackagingGroupRequest
     * @returns GetVodPackagingGroupResponse
     *
     * @param GetVodPackagingGroupRequest $request
     *
     * @return GetVodPackagingGroupResponse
     */
    public function getVodPackagingGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVodPackagingGroupWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a workflow task by task ID, including the workflow ID and the status and result of the task. You can query only the workflow task data of the last year.
     *
     * @param request - GetWorkflowTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns GetWorkflowTaskResponse
     *
     * @param GetWorkflowTaskRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetWorkflowTaskResponse
     */
    public function getWorkflowTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetWorkflowTask',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return GetWorkflowTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetWorkflowTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a workflow task by task ID, including the workflow ID and the status and result of the task. You can query only the workflow task data of the last year.
     *
     * @param request - GetWorkflowTaskRequest
     * @returns GetWorkflowTaskResponse
     *
     * @param GetWorkflowTaskRequest $request
     *
     * @return GetWorkflowTaskResponse
     */
    public function getWorkflowTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWorkflowTaskWithOptions($request, $runtime);
    }

    /**
     * Adds a media asset in a search library. Before you call this operation, you must create a search library.
     *
     * @param request - InsertMediaToSearchLibRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns InsertMediaToSearchLibResponse
     *
     * @param InsertMediaToSearchLibRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return InsertMediaToSearchLibResponse
     */
    public function insertMediaToSearchLibWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->input) {
            @$query['Input'] = $request->input;
        }

        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->mediaType) {
            @$query['MediaType'] = $request->mediaType;
        }

        if (null !== $request->msgBody) {
            @$query['MsgBody'] = $request->msgBody;
        }

        if (null !== $request->searchLibName) {
            @$query['SearchLibName'] = $request->searchLibName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'InsertMediaToSearchLib',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return InsertMediaToSearchLibResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return InsertMediaToSearchLibResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Adds a media asset in a search library. Before you call this operation, you must create a search library.
     *
     * @param request - InsertMediaToSearchLibRequest
     * @returns InsertMediaToSearchLibResponse
     *
     * @param InsertMediaToSearchLibRequest $request
     *
     * @return InsertMediaToSearchLibResponse
     */
    public function insertMediaToSearchLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->insertMediaToSearchLibWithOptions($request, $runtime);
    }

    /**
     * 列出智能体的对话历史记录。
     *
     * @param request - ListAIAgentDialoguesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListAIAgentDialoguesResponse
     *
     * @param ListAIAgentDialoguesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListAIAgentDialoguesResponse
     */
    public function listAIAgentDialoguesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->order) {
            @$query['Order'] = $request->order;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAIAgentDialogues',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListAIAgentDialoguesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAIAgentDialoguesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 列出智能体的对话历史记录。
     *
     * @param request - ListAIAgentDialoguesRequest
     * @returns ListAIAgentDialoguesResponse
     *
     * @param ListAIAgentDialoguesRequest $request
     *
     * @return ListAIAgentDialoguesResponse
     */
    public function listAIAgentDialogues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAIAgentDialoguesWithOptions($request, $runtime);
    }

    /**
     * 列出实例.
     *
     * @param request - ListAIAgentInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListAIAgentInstanceResponse
     *
     * @param ListAIAgentInstanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListAIAgentInstanceResponse
     */
    public function listAIAgentInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->AIAgentId) {
            @$query['AIAgentId'] = $request->AIAgentId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAIAgentInstance',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListAIAgentInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAIAgentInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 列出实例.
     *
     * @param request - ListAIAgentInstanceRequest
     * @returns ListAIAgentInstanceResponse
     *
     * @param ListAIAgentInstanceRequest $request
     *
     * @return ListAIAgentInstanceResponse
     */
    public function listAIAgentInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAIAgentInstanceWithOptions($request, $runtime);
    }

    /**
     * 获取广告插入配置列表.
     *
     * @param request - ListAdInsertionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListAdInsertionsResponse
     *
     * @param ListAdInsertionsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListAdInsertionsResponse
     */
    public function listAdInsertionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAdInsertions',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListAdInsertionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAdInsertionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取广告插入配置列表.
     *
     * @param request - ListAdInsertionsRequest
     * @returns ListAdInsertionsResponse
     *
     * @param ListAdInsertionsRequest $request
     *
     * @return ListAdInsertionsResponse
     */
    public function listAdInsertions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAdInsertionsWithOptions($request, $runtime);
    }

    /**
     * 获取警告.
     *
     * @param request - ListAlertsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListAlertsResponse
     *
     * @param ListAlertsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListAlertsResponse
     */
    public function listAlertsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->gmtEnd) {
            @$query['GmtEnd'] = $request->gmtEnd;
        }

        if (null !== $request->gmtStart) {
            @$query['GmtStart'] = $request->gmtStart;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceArn) {
            @$query['ResourceArn'] = $request->resourceArn;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->sortByModifiedTime) {
            @$query['SortByModifiedTime'] = $request->sortByModifiedTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAlerts',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListAlertsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAlertsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取警告.
     *
     * @param request - ListAlertsRequest
     * @returns ListAlertsResponse
     *
     * @param ListAlertsRequest $request
     *
     * @return ListAlertsResponse
     */
    public function listAlerts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAlertsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of tags of media assets in the public media library.
     *
     * @param request - ListAllPublicMediaTagsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListAllPublicMediaTagsResponse
     *
     * @param ListAllPublicMediaTagsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListAllPublicMediaTagsResponse
     */
    public function listAllPublicMediaTagsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessType) {
            @$query['BusinessType'] = $request->businessType;
        }

        if (null !== $request->entityId) {
            @$query['EntityId'] = $request->entityId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListAllPublicMediaTagsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAllPublicMediaTagsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of tags of media assets in the public media library.
     *
     * @param request - ListAllPublicMediaTagsRequest
     * @returns ListAllPublicMediaTagsResponse
     *
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
     * Queries a list of digital human training jobs.
     *
     * @param request - ListAvatarTrainingJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListAvatarTrainingJobsResponse
     *
     * @param ListAvatarTrainingJobsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListAvatarTrainingJobsResponse
     */
    public function listAvatarTrainingJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListAvatarTrainingJobs',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListAvatarTrainingJobsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAvatarTrainingJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of digital human training jobs.
     *
     * @param request - ListAvatarTrainingJobsRequest
     * @returns ListAvatarTrainingJobsResponse
     *
     * @param ListAvatarTrainingJobsRequest $request
     *
     * @return ListAvatarTrainingJobsResponse
     */
    public function listAvatarTrainingJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAvatarTrainingJobsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of trained digital humans.
     *
     * @param request - ListAvatarsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListAvatarsResponse
     *
     * @param ListAvatarsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListAvatarsResponse
     */
    public function listAvatarsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->avatarType) {
            @$query['AvatarType'] = $request->avatarType;
        }

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
            'action'      => 'ListAvatars',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListAvatarsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAvatarsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of trained digital humans.
     *
     * @param request - ListAvatarsRequest
     * @returns ListAvatarsResponse
     *
     * @param ListAvatarsRequest $request
     *
     * @return ListAvatarsResponse
     */
    public function listAvatars($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAvatarsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of quick video production jobs based on conditions such as the job type and state.
     *
     * @param request - ListBatchMediaProducingJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListBatchMediaProducingJobsResponse
     *
     * @param ListBatchMediaProducingJobsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListBatchMediaProducingJobsResponse
     */
    public function listBatchMediaProducingJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->jobType) {
            @$query['JobType'] = $request->jobType;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListBatchMediaProducingJobs',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListBatchMediaProducingJobsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListBatchMediaProducingJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of quick video production jobs based on conditions such as the job type and state.
     *
     * @param request - ListBatchMediaProducingJobsRequest
     * @returns ListBatchMediaProducingJobsResponse
     *
     * @param ListBatchMediaProducingJobsRequest $request
     *
     * @return ListBatchMediaProducingJobsResponse
     */
    public function listBatchMediaProducingJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBatchMediaProducingJobsWithOptions($request, $runtime);
    }

    /**
     * 获取频道警告.
     *
     * @param request - ListChannelAlertsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListChannelAlertsResponse
     *
     * @param ListChannelAlertsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListChannelAlertsResponse
     */
    public function listChannelAlertsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->gmtEnd) {
            @$query['GmtEnd'] = $request->gmtEnd;
        }

        if (null !== $request->gmtStart) {
            @$query['GmtStart'] = $request->gmtStart;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceArn) {
            @$query['ResourceArn'] = $request->resourceArn;
        }

        if (null !== $request->sortByModifiedTime) {
            @$query['SortByModifiedTime'] = $request->sortByModifiedTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListChannelAlerts',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListChannelAlertsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListChannelAlertsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取频道警告.
     *
     * @param request - ListChannelAlertsRequest
     * @returns ListChannelAlertsResponse
     *
     * @param ListChannelAlertsRequest $request
     *
     * @return ListChannelAlertsResponse
     */
    public function listChannelAlerts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listChannelAlertsWithOptions($request, $runtime);
    }

    /**
     * 获取频道列表.
     *
     * @param request - ListChannelsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListChannelsResponse
     *
     * @param ListChannelsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListChannelsResponse
     */
    public function listChannelsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->channelName) {
            @$query['ChannelName'] = $request->channelName;
        }

        if (null !== $request->channelTier) {
            @$query['ChannelTier'] = $request->channelTier;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->playbackMode) {
            @$query['PlaybackMode'] = $request->playbackMode;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->sortByModifiedTime) {
            @$query['SortByModifiedTime'] = $request->sortByModifiedTime;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListChannels',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListChannelsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListChannelsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取频道列表.
     *
     * @param request - ListChannelsRequest
     * @returns ListChannelsResponse
     *
     * @param ListChannelsRequest $request
     *
     * @return ListChannelsResponse
     */
    public function listChannels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listChannelsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of custom templates.
     *
     * @param request - ListCustomTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListCustomTemplatesResponse
     *
     * @param ListCustomTemplatesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListCustomTemplatesResponse
     */
    public function listCustomTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->subtype) {
            @$query['Subtype'] = $request->subtype;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListCustomTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListCustomTemplatesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of custom templates.
     *
     * @param request - ListCustomTemplatesRequest
     * @returns ListCustomTemplatesResponse
     *
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
     * Queries a list of human voice cloning jobs.
     *
     * @param request - ListCustomizedVoiceJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListCustomizedVoiceJobsResponse
     *
     * @param ListCustomizedVoiceJobsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListCustomizedVoiceJobsResponse
     */
    public function listCustomizedVoiceJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCustomizedVoiceJobs',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListCustomizedVoiceJobsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListCustomizedVoiceJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of human voice cloning jobs.
     *
     * @param request - ListCustomizedVoiceJobsRequest
     * @returns ListCustomizedVoiceJobsResponse
     *
     * @param ListCustomizedVoiceJobsRequest $request
     *
     * @return ListCustomizedVoiceJobsResponse
     */
    public function listCustomizedVoiceJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomizedVoiceJobsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of personalized human voices.
     *
     * @param request - ListCustomizedVoicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListCustomizedVoicesResponse
     *
     * @param ListCustomizedVoicesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListCustomizedVoicesResponse
     */
    public function listCustomizedVoicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCustomizedVoices',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListCustomizedVoicesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListCustomizedVoicesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of personalized human voices.
     *
     * @param request - ListCustomizedVoicesRequest
     * @returns ListCustomizedVoicesResponse
     *
     * @param ListCustomizedVoicesRequest $request
     *
     * @return ListCustomizedVoicesResponse
     */
    public function listCustomizedVoices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomizedVoicesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of media fingerprint libraries.
     *
     * @param request - ListDNADBRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDNADBResponse
     *
     * @param ListDNADBRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListDNADBResponse
     */
    public function listDNADBWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBIds) {
            @$query['DBIds'] = $request->DBIds;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDNADB',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDNADBResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDNADBResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of media fingerprint libraries.
     *
     * @param request - ListDNADBRequest
     * @returns ListDNADBResponse
     *
     * @param ListDNADBRequest $request
     *
     * @return ListDNADBResponse
     */
    public function listDNADB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDNADBWithOptions($request, $runtime);
    }

    /**
     * Queries a list of files in a media fingerprint library.
     *
     * @remarks
     * You can call this operation to query files in a media fingerprint library based on the library ID. The queried results can be paginated.
     *
     * @param request - ListDNAFilesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDNAFilesResponse
     *
     * @param ListDNAFilesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListDNAFilesResponse
     */
    public function listDNAFilesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->DBId) {
            @$query['DBId'] = $request->DBId;
        }

        if (null !== $request->nextPageToken) {
            @$query['NextPageToken'] = $request->nextPageToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDNAFiles',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDNAFilesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDNAFilesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of files in a media fingerprint library.
     *
     * @remarks
     * You can call this operation to query files in a media fingerprint library based on the library ID. The queried results can be paginated.
     *
     * @param request - ListDNAFilesRequest
     * @returns ListDNAFilesResponse
     *
     * @param ListDNAFilesRequest $request
     *
     * @return ListDNAFilesResponse
     */
    public function listDNAFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDNAFilesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of image animation jobs.
     *
     * @param request - ListDynamicImageJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListDynamicImageJobsResponse
     *
     * @param ListDynamicImageJobsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListDynamicImageJobsResponse
     */
    public function listDynamicImageJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endOfCreateTime) {
            @$query['EndOfCreateTime'] = $request->endOfCreateTime;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->nextPageToken) {
            @$query['NextPageToken'] = $request->nextPageToken;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startOfCreateTime) {
            @$query['StartOfCreateTime'] = $request->startOfCreateTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListDynamicImageJobsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDynamicImageJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of image animation jobs.
     *
     * @param request - ListDynamicImageJobsRequest
     * @returns ListDynamicImageJobsResponse
     *
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
     * Queries a list of projects that meet the specified conditions. You can filter projects by project creation time.
     *
     * @param request - ListEditingProjectsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListEditingProjectsResponse
     *
     * @param ListEditingProjectsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListEditingProjectsResponse
     */
    public function listEditingProjectsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createSource) {
            @$query['CreateSource'] = $request->createSource;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->projectType) {
            @$query['ProjectType'] = $request->projectType;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->templateType) {
            @$query['TemplateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEditingProjects',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListEditingProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEditingProjectsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of projects that meet the specified conditions. You can filter projects by project creation time.
     *
     * @param request - ListEditingProjectsRequest
     * @returns ListEditingProjectsResponse
     *
     * @param ListEditingProjectsRequest $request
     *
     * @return ListEditingProjectsResponse
     */
    public function listEditingProjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEditingProjectsWithOptions($request, $runtime);
    }

    /**
     * 查询实时打包频道组.
     *
     * @param request - ListLivePackageChannelGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListLivePackageChannelGroupsResponse
     *
     * @param ListLivePackageChannelGroupsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListLivePackageChannelGroupsResponse
     */
    public function listLivePackageChannelGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLivePackageChannelGroups',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListLivePackageChannelGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListLivePackageChannelGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询实时打包频道组.
     *
     * @param request - ListLivePackageChannelGroupsRequest
     * @returns ListLivePackageChannelGroupsResponse
     *
     * @param ListLivePackageChannelGroupsRequest $request
     *
     * @return ListLivePackageChannelGroupsResponse
     */
    public function listLivePackageChannelGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLivePackageChannelGroupsWithOptions($request, $runtime);
    }

    /**
     * 查询实时打包频道.
     *
     * @param request - ListLivePackageChannelsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListLivePackageChannelsResponse
     *
     * @param ListLivePackageChannelsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListLivePackageChannelsResponse
     */
    public function listLivePackageChannelsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLivePackageChannels',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListLivePackageChannelsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListLivePackageChannelsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询实时打包频道.
     *
     * @param request - ListLivePackageChannelsRequest
     * @returns ListLivePackageChannelsResponse
     *
     * @param ListLivePackageChannelsRequest $request
     *
     * @return ListLivePackageChannelsResponse
     */
    public function listLivePackageChannels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLivePackageChannelsWithOptions($request, $runtime);
    }

    /**
     * 查询实时打包源站端点.
     *
     * @param request - ListLivePackageOriginEndpointsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListLivePackageOriginEndpointsResponse
     *
     * @param ListLivePackageOriginEndpointsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListLivePackageOriginEndpointsResponse
     */
    public function listLivePackageOriginEndpointsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->channelName) {
            @$query['ChannelName'] = $request->channelName;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLivePackageOriginEndpoints',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListLivePackageOriginEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListLivePackageOriginEndpointsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询实时打包源站端点.
     *
     * @param request - ListLivePackageOriginEndpointsRequest
     * @returns ListLivePackageOriginEndpointsResponse
     *
     * @param ListLivePackageOriginEndpointsRequest $request
     *
     * @return ListLivePackageOriginEndpointsResponse
     */
    public function listLivePackageOriginEndpoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLivePackageOriginEndpointsWithOptions($request, $runtime);
    }

    /**
     * Queries all recording index files in the specified period of time.
     *
     * @param request - ListLiveRecordFilesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListLiveRecordFilesResponse
     *
     * @param ListLiveRecordFilesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListLiveRecordFilesResponse
     */
    public function listLiveRecordFilesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLiveRecordFiles',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListLiveRecordFilesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListLiveRecordFilesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries all recording index files in the specified period of time.
     *
     * @param request - ListLiveRecordFilesRequest
     * @returns ListLiveRecordFilesResponse
     *
     * @param ListLiveRecordFilesRequest $request
     *
     * @return ListLiveRecordFilesResponse
     */
    public function listLiveRecordFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveRecordFilesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of live stream recording jobs by page.
     *
     * @param request - ListLiveRecordJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListLiveRecordJobsResponse
     *
     * @param ListLiveRecordJobsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListLiveRecordJobsResponse
     */
    public function listLiveRecordJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLiveRecordJobs',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListLiveRecordJobsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListLiveRecordJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of live stream recording jobs by page.
     *
     * @param request - ListLiveRecordJobsRequest
     * @returns ListLiveRecordJobsResponse
     *
     * @param ListLiveRecordJobsRequest $request
     *
     * @return ListLiveRecordJobsResponse
     */
    public function listLiveRecordJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveRecordJobsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of live stream recording templates.
     *
     * @param request - ListLiveRecordTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListLiveRecordTemplatesResponse
     *
     * @param ListLiveRecordTemplatesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ListLiveRecordTemplatesResponse
     */
    public function listLiveRecordTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListLiveRecordTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListLiveRecordTemplatesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of live stream recording templates.
     *
     * @param request - ListLiveRecordTemplatesRequest
     * @returns ListLiveRecordTemplatesResponse
     *
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
     * Queries a list of live stream snapshot files by page.
     *
     * @param request - ListLiveSnapshotFilesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListLiveSnapshotFilesResponse
     *
     * @param ListLiveSnapshotFilesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListLiveSnapshotFilesResponse
     */
    public function listLiveSnapshotFilesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLiveSnapshotFiles',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListLiveSnapshotFilesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListLiveSnapshotFilesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of live stream snapshot files by page.
     *
     * @param request - ListLiveSnapshotFilesRequest
     * @returns ListLiveSnapshotFilesResponse
     *
     * @param ListLiveSnapshotFilesRequest $request
     *
     * @return ListLiveSnapshotFilesResponse
     */
    public function listLiveSnapshotFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveSnapshotFilesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of live stream snapshot jobs by page.
     *
     * @param request - ListLiveSnapshotJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListLiveSnapshotJobsResponse
     *
     * @param ListLiveSnapshotJobsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListLiveSnapshotJobsResponse
     */
    public function listLiveSnapshotJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLiveSnapshotJobs',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListLiveSnapshotJobsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListLiveSnapshotJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of live stream snapshot jobs by page.
     *
     * @param request - ListLiveSnapshotJobsRequest
     * @returns ListLiveSnapshotJobsResponse
     *
     * @param ListLiveSnapshotJobsRequest $request
     *
     * @return ListLiveSnapshotJobsResponse
     */
    public function listLiveSnapshotJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveSnapshotJobsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of live stream snapshot templates by page.
     *
     * @param request - ListLiveSnapshotTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListLiveSnapshotTemplatesResponse
     *
     * @param ListLiveSnapshotTemplatesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListLiveSnapshotTemplatesResponse
     */
    public function listLiveSnapshotTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListLiveSnapshotTemplates',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListLiveSnapshotTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListLiveSnapshotTemplatesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of live stream snapshot templates by page.
     *
     * @param request - ListLiveSnapshotTemplatesRequest
     * @returns ListLiveSnapshotTemplatesResponse
     *
     * @param ListLiveSnapshotTemplatesRequest $request
     *
     * @return ListLiveSnapshotTemplatesResponse
     */
    public function listLiveSnapshotTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveSnapshotTemplatesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of live stream transcoding jobs.
     *
     * @param request - ListLiveTranscodeJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListLiveTranscodeJobsResponse
     *
     * @param ListLiveTranscodeJobsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListLiveTranscodeJobsResponse
     */
    public function listLiveTranscodeJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyWord) {
            @$query['KeyWord'] = $request->keyWord;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->startMode) {
            @$query['StartMode'] = $request->startMode;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListLiveTranscodeJobsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListLiveTranscodeJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of live stream transcoding jobs.
     *
     * @param request - ListLiveTranscodeJobsRequest
     * @returns ListLiveTranscodeJobsResponse
     *
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
     * Queries a list of live stream transcoding templates.
     *
     * @param request - ListLiveTranscodeTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListLiveTranscodeTemplatesResponse
     *
     * @param ListLiveTranscodeTemplatesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListLiveTranscodeTemplatesResponse
     */
    public function listLiveTranscodeTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->keyWord) {
            @$query['KeyWord'] = $request->keyWord;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->videoCodec) {
            @$query['VideoCodec'] = $request->videoCodec;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListLiveTranscodeTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListLiveTranscodeTemplatesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of live stream transcoding templates.
     *
     * @param request - ListLiveTranscodeTemplatesRequest
     * @returns ListLiveTranscodeTemplatesResponse
     *
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
     * Queries the basic information of all media assets that meet the specified conditions.
     *
     * @remarks
     * If includeFileBasicInfo is set to true, the basic information, such as the duration and file size, of the source file is also returned. At most the first 100 entries that meet the specified conditions are returned. All media assets must exactly match all non-empty fields. The fields that support exact match include MediaType, Source, BusinessType, Category, and Status. If all information cannot be returned at a time, you can use NextToken to initiate a request to retrieve a new page of results.
     *
     * @param request - ListMediaBasicInfosRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListMediaBasicInfosResponse
     *
     * @param ListMediaBasicInfosRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListMediaBasicInfosResponse
     */
    public function listMediaBasicInfosWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessType) {
            @$query['BusinessType'] = $request->businessType;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->includeFileBasicInfo) {
            @$query['IncludeFileBasicInfo'] = $request->includeFileBasicInfo;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->mediaType) {
            @$query['MediaType'] = $request->mediaType;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListMediaBasicInfosResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListMediaBasicInfosResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the basic information of all media assets that meet the specified conditions.
     *
     * @remarks
     * If includeFileBasicInfo is set to true, the basic information, such as the duration and file size, of the source file is also returned. At most the first 100 entries that meet the specified conditions are returned. All media assets must exactly match all non-empty fields. The fields that support exact match include MediaType, Source, BusinessType, Category, and Status. If all information cannot be returned at a time, you can use NextToken to initiate a request to retrieve a new page of results.
     *
     * @param request - ListMediaBasicInfosRequest
     * @returns ListMediaBasicInfosResponse
     *
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
     * Queries a list of media information analysis jobs.
     *
     * @param request - ListMediaInfoJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListMediaInfoJobsResponse
     *
     * @param ListMediaInfoJobsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListMediaInfoJobsResponse
     */
    public function listMediaInfoJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endOfCreateTime) {
            @$query['EndOfCreateTime'] = $request->endOfCreateTime;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->nextPageToken) {
            @$query['NextPageToken'] = $request->nextPageToken;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startOfCreateTime) {
            @$query['StartOfCreateTime'] = $request->startOfCreateTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListMediaInfoJobsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListMediaInfoJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of media information analysis jobs.
     *
     * @param request - ListMediaInfoJobsRequest
     * @returns ListMediaInfoJobsResponse
     *
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
     * Queries a list of marks of a media asset.
     *
     * @param request - ListMediaMarksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListMediaMarksResponse
     *
     * @param ListMediaMarksRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListMediaMarksResponse
     */
    public function listMediaMarksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->mediaMarkIds) {
            @$query['MediaMarkIds'] = $request->mediaMarkIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMediaMarks',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListMediaMarksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListMediaMarksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of marks of a media asset.
     *
     * @param request - ListMediaMarksRequest
     * @returns ListMediaMarksResponse
     *
     * @param ListMediaMarksRequest $request
     *
     * @return ListMediaMarksResponse
     */
    public function listMediaMarks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMediaMarksWithOptions($request, $runtime);
    }

    /**
     * Queries a list of media editing and production jobs that meet the specified conditions. You can query the jobs based on the job state and type.
     *
     * @param request - ListMediaProducingJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListMediaProducingJobsResponse
     *
     * @param ListMediaProducingJobsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListMediaProducingJobsResponse
     */
    public function listMediaProducingJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->jobType) {
            @$query['JobType'] = $request->jobType;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->masterJobId) {
            @$query['MasterJobId'] = $request->masterJobId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListMediaProducingJobs',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListMediaProducingJobsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListMediaProducingJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of media editing and production jobs that meet the specified conditions. You can query the jobs based on the job state and type.
     *
     * @param request - ListMediaProducingJobsRequest
     * @returns ListMediaProducingJobsResponse
     *
     * @param ListMediaProducingJobsRequest $request
     *
     * @return ListMediaProducingJobsResponse
     */
    public function listMediaProducingJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMediaProducingJobsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of packaging jobs.
     *
     * @param request - ListPackageJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListPackageJobsResponse
     *
     * @param ListPackageJobsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ListPackageJobsResponse
     */
    public function listPackageJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endOfCreateTime) {
            @$query['EndOfCreateTime'] = $request->endOfCreateTime;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->nextPageToken) {
            @$query['NextPageToken'] = $request->nextPageToken;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startOfCreateTime) {
            @$query['StartOfCreateTime'] = $request->startOfCreateTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPackageJobs',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListPackageJobsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListPackageJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of packaging jobs.
     *
     * @param request - ListPackageJobsRequest
     * @returns ListPackageJobsResponse
     *
     * @param ListPackageJobsRequest $request
     *
     * @return ListPackageJobsResponse
     */
    public function listPackageJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPackageJobsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of ApsaraVideo Media Processing (MPS) queues.
     *
     * @param request - ListPipelinesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListPipelinesResponse
     *
     * @param ListPipelinesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListPipelinesResponse
     */
    public function listPipelinesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->speed) {
            @$query['Speed'] = $request->speed;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListPipelinesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListPipelinesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of ApsaraVideo Media Processing (MPS) queues.
     *
     * @param request - ListPipelinesRequest
     * @returns ListPipelinesResponse
     *
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
     * 获取节目列表.
     *
     * @param request - ListProgramsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListProgramsResponse
     *
     * @param ListProgramsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListProgramsResponse
     */
    public function listProgramsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->channelName) {
            @$query['ChannelName'] = $request->channelName;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->programName) {
            @$query['ProgramName'] = $request->programName;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPrograms',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListProgramsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListProgramsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取节目列表.
     *
     * @param request - ListProgramsRequest
     * @returns ListProgramsResponse
     *
     * @param ListProgramsRequest $request
     *
     * @return ListProgramsResponse
     */
    public function listPrograms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProgramsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of media assets in the public media library that meet the specified conditions. A maximum of 100 media assets can be returned.
     *
     * @param request - ListPublicMediaBasicInfosRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListPublicMediaBasicInfosResponse
     *
     * @param ListPublicMediaBasicInfosRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListPublicMediaBasicInfosResponse
     */
    public function listPublicMediaBasicInfosWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessType) {
            @$query['BusinessType'] = $request->businessType;
        }

        if (null !== $request->includeFileBasicInfo) {
            @$query['IncludeFileBasicInfo'] = $request->includeFileBasicInfo;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->mediaTagId) {
            @$query['MediaTagId'] = $request->mediaTagId;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListPublicMediaBasicInfosResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListPublicMediaBasicInfosResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of media assets in the public media library that meet the specified conditions. A maximum of 100 media assets can be returned.
     *
     * @param request - ListPublicMediaBasicInfosRequest
     * @returns ListPublicMediaBasicInfosResponse
     *
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
     * 获取节目单.
     *
     * @param request - ListSchedulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListSchedulesResponse
     *
     * @param ListSchedulesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListSchedulesResponse
     */
    public function listSchedulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->channelName) {
            @$query['ChannelName'] = $request->channelName;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->windowDurationSeconds) {
            @$query['WindowDurationSeconds'] = $request->windowDurationSeconds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSchedules',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListSchedulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSchedulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 获取节目单.
     *
     * @param request - ListSchedulesRequest
     * @returns ListSchedulesResponse
     *
     * @param ListSchedulesRequest $request
     *
     * @return ListSchedulesResponse
     */
    public function listSchedules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSchedulesWithOptions($request, $runtime);
    }

    /**
     * Queries the information about search libraries.
     *
     * @param request - ListSearchLibRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListSearchLibResponse
     *
     * @param ListSearchLibRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListSearchLibResponse
     */
    public function listSearchLibWithOptions($request, $runtime)
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
            'action'      => 'ListSearchLib',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListSearchLibResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSearchLibResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about search libraries.
     *
     * @param request - ListSearchLibRequest
     * @returns ListSearchLibResponse
     *
     * @param ListSearchLibRequest $request
     *
     * @return ListSearchLibResponse
     */
    public function listSearchLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSearchLibWithOptions($request, $runtime);
    }

    /**
     * Queries a list of intelligent jobs based on specified parameters.
     *
     * @param request - ListSmartJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListSmartJobsResponse
     *
     * @param ListSmartJobsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListSmartJobsResponse
     */
    public function listSmartJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req   = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListSmartJobsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSmartJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of intelligent jobs based on specified parameters.
     *
     * @param request - ListSmartJobsRequest
     * @returns ListSmartJobsResponse
     *
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
     * Queries a list of system digital humans. This operation supports paged queries.
     *
     * @param request - ListSmartSysAvatarModelsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListSmartSysAvatarModelsResponse
     *
     * @param ListSmartSysAvatarModelsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ListSmartSysAvatarModelsResponse
     */
    public function listSmartSysAvatarModelsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sdkVersion) {
            @$query['SdkVersion'] = $request->sdkVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSmartSysAvatarModels',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListSmartSysAvatarModelsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSmartSysAvatarModelsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of system digital humans. This operation supports paged queries.
     *
     * @param request - ListSmartSysAvatarModelsRequest
     * @returns ListSmartSysAvatarModelsResponse
     *
     * @param ListSmartSysAvatarModelsRequest $request
     *
     * @return ListSmartSysAvatarModelsResponse
     */
    public function listSmartSysAvatarModels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSmartSysAvatarModelsWithOptions($request, $runtime);
    }

    /**
     * Queries a list of speaker groups, including the name, gender, and sample audio of each speaker. The list is grouped by scenario.
     *
     * @param request - ListSmartVoiceGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListSmartVoiceGroupsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListSmartVoiceGroupsResponse
     */
    public function listSmartVoiceGroupsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListSmartVoiceGroups',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListSmartVoiceGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSmartVoiceGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of speaker groups, including the name, gender, and sample audio of each speaker. The list is grouped by scenario.
     *
     * @returns ListSmartVoiceGroupsResponse
     *
     * @return ListSmartVoiceGroupsResponse
     */
    public function listSmartVoiceGroups()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSmartVoiceGroupsWithOptions($runtime);
    }

    /**
     * Queries a list of snapshot jobs.
     *
     * @param request - ListSnapshotJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListSnapshotJobsResponse
     *
     * @param ListSnapshotJobsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListSnapshotJobsResponse
     */
    public function listSnapshotJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endOfCreateTime) {
            @$query['EndOfCreateTime'] = $request->endOfCreateTime;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->nextPageToken) {
            @$query['NextPageToken'] = $request->nextPageToken;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->startOfCreateTime) {
            @$query['StartOfCreateTime'] = $request->startOfCreateTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListSnapshotJobsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSnapshotJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of snapshot jobs.
     *
     * @param request - ListSnapshotJobsRequest
     * @returns ListSnapshotJobsResponse
     *
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
     * 列举源位置.
     *
     * @param request - ListSourceLocationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListSourceLocationsResponse
     *
     * @param ListSourceLocationsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListSourceLocationsResponse
     */
    public function listSourceLocationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filterState) {
            @$query['FilterState'] = $request->filterState;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->sortByModifiedTime) {
            @$query['SortByModifiedTime'] = $request->sortByModifiedTime;
        }

        if (null !== $request->sourceLocationName) {
            @$query['SourceLocationName'] = $request->sourceLocationName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSourceLocations',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListSourceLocationsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSourceLocationsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 列举源位置.
     *
     * @param request - ListSourceLocationsRequest
     * @returns ListSourceLocationsResponse
     *
     * @param ListSourceLocationsRequest $request
     *
     * @return ListSourceLocationsResponse
     */
    public function listSourceLocations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSourceLocationsWithOptions($request, $runtime);
    }

    /**
     * 列举源.
     *
     * @param request - ListSourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListSourcesResponse
     *
     * @param ListSourcesRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListSourcesResponse
     */
    public function listSourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filterState) {
            @$query['FilterState'] = $request->filterState;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->sortByModifiedTime) {
            @$query['SortByModifiedTime'] = $request->sortByModifiedTime;
        }

        if (null !== $request->sourceLocationName) {
            @$query['SourceLocationName'] = $request->sourceLocationName;
        }

        if (null !== $request->sourceName) {
            @$query['SourceName'] = $request->sourceName;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListSources',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 列举源.
     *
     * @param request - ListSourcesRequest
     * @returns ListSourcesResponse
     *
     * @param ListSourcesRequest $request
     *
     * @return ListSourcesResponse
     */
    public function listSources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSourcesWithOptions($request, $runtime);
    }

    /**
     * Queries a list of system templates.
     *
     * @remarks
     * Template types:
     * 1.  1: transcoding template.
     * 2.  2: snapshot template.
     * 3.  3: animated image template.
     * 4.  4\\. image watermark template.
     * 5.  5: text watermark template.
     * 6.  6: subtitle template.
     * 7.  7: AI-assisted content moderation template.
     * 8.  8: AI-assisted intelligent thumbnail template.
     * 9.  9: AI-assisted intelligent erasure template.
     * Subtypes of transcoding templates:
     * 1.  1 (Normal): regular template.
     * 2.  2 (AudioTranscode): audio transcoding template.
     * 3.  3 (Remux): container format conversion template.
     * 4.  4 (NarrowBandV1): Narrowband HD 1.0 template.
     * 5.  5 (NarrowBandV2): Narrowband HD 2.0 template.
     * Subtypes of snapshot templates:
     * 1.  1 (Normal): regular template.
     * 2.  2 (Sprite): sprite template.
     * 3.  3 (WebVtt): WebVTT template.
     * Subtypes of AI-assisted content moderation templates:
     * 1.  1 (Video): video moderation template.
     * 2.  2 (Audio): audio moderation template.
     * 3.  3 (Image): image moderation template.
     * Subtypes of AI-assisted intelligent erasure templates:
     * 1.  1 (VideoDelogo): logo erasure template.
     * 2.  2 (VideoDetext): subtitle erasure template.
     *
     * @param request - ListSystemTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListSystemTemplatesResponse
     *
     * @param ListSystemTemplatesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListSystemTemplatesResponse
     */
    public function listSystemTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->subtype) {
            @$query['Subtype'] = $request->subtype;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListSystemTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSystemTemplatesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of system templates.
     *
     * @remarks
     * Template types:
     * 1.  1: transcoding template.
     * 2.  2: snapshot template.
     * 3.  3: animated image template.
     * 4.  4\\. image watermark template.
     * 5.  5: text watermark template.
     * 6.  6: subtitle template.
     * 7.  7: AI-assisted content moderation template.
     * 8.  8: AI-assisted intelligent thumbnail template.
     * 9.  9: AI-assisted intelligent erasure template.
     * Subtypes of transcoding templates:
     * 1.  1 (Normal): regular template.
     * 2.  2 (AudioTranscode): audio transcoding template.
     * 3.  3 (Remux): container format conversion template.
     * 4.  4 (NarrowBandV1): Narrowband HD 1.0 template.
     * 5.  5 (NarrowBandV2): Narrowband HD 2.0 template.
     * Subtypes of snapshot templates:
     * 1.  1 (Normal): regular template.
     * 2.  2 (Sprite): sprite template.
     * 3.  3 (WebVtt): WebVTT template.
     * Subtypes of AI-assisted content moderation templates:
     * 1.  1 (Video): video moderation template.
     * 2.  2 (Audio): audio moderation template.
     * 3.  3 (Image): image moderation template.
     * Subtypes of AI-assisted intelligent erasure templates:
     * 1.  1 (VideoDelogo): logo erasure template.
     * 2.  2 (VideoDetext): subtitle erasure template.
     *
     * @param request - ListSystemTemplatesRequest
     * @returns ListSystemTemplatesResponse
     *
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
     * Queries a list of templates that meet the specified conditions. You can query templates based on information such as the template status and creation source.
     *
     * @remarks
     * A template is an encapsulation of the timeline of a media editing and production job. You can define a common timeline as a template. When you have the same requirements, you need to only specify key parameters and materials to produce videos.
     * *   For more information about how to use a regular template, see [Create and use a regular template](https://help.aliyun.com/document_detail/445399.html).
     * *   For more information about how to use an advanced template, see [Create and use advanced templates](https://help.aliyun.com/document_detail/445389.html).
     *
     * @param request - ListTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListTemplatesResponse
     *
     * @param ListTemplatesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListTemplatesResponse
     */
    public function listTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createSource) {
            @$query['CreateSource'] = $request->createSource;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortType) {
            @$query['SortType'] = $request->sortType;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTemplatesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of templates that meet the specified conditions. You can query templates based on information such as the template status and creation source.
     *
     * @remarks
     * A template is an encapsulation of the timeline of a media editing and production job. You can define a common timeline as a template. When you have the same requirements, you need to only specify key parameters and materials to produce videos.
     * *   For more information about how to use a regular template, see [Create and use a regular template](https://help.aliyun.com/document_detail/445399.html).
     * *   For more information about how to use an advanced template, see [Create and use advanced templates](https://help.aliyun.com/document_detail/445389.html).
     *
     * @param request - ListTemplatesRequest
     * @returns ListTemplatesResponse
     *
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
     * Queries a list of transcoding jobs.
     *
     * @param request - ListTranscodeJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListTranscodeJobsResponse
     *
     * @param ListTranscodeJobsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListTranscodeJobsResponse
     */
    public function listTranscodeJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endOfCreateTime) {
            @$query['EndOfCreateTime'] = $request->endOfCreateTime;
        }

        if (null !== $request->nextPageToken) {
            @$query['NextPageToken'] = $request->nextPageToken;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->parentJobId) {
            @$query['ParentJobId'] = $request->parentJobId;
        }

        if (null !== $request->startOfCreateTime) {
            @$query['StartOfCreateTime'] = $request->startOfCreateTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListTranscodeJobsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTranscodeJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of transcoding jobs.
     *
     * @param request - ListTranscodeJobsRequest
     * @returns ListTranscodeJobsResponse
     *
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
     * 列举点播打包资产.
     *
     * @param request - ListVodPackagingAssetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListVodPackagingAssetsResponse
     *
     * @param ListVodPackagingAssetsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListVodPackagingAssetsResponse
     */
    public function listVodPackagingAssetsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVodPackagingAssets',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListVodPackagingAssetsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListVodPackagingAssetsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 列举点播打包资产.
     *
     * @param request - ListVodPackagingAssetsRequest
     * @returns ListVodPackagingAssetsResponse
     *
     * @param ListVodPackagingAssetsRequest $request
     *
     * @return ListVodPackagingAssetsResponse
     */
    public function listVodPackagingAssets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVodPackagingAssetsWithOptions($request, $runtime);
    }

    /**
     * 列举点播打包配置列表.
     *
     * @param request - ListVodPackagingConfigurationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListVodPackagingConfigurationsResponse
     *
     * @param ListVodPackagingConfigurationsRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ListVodPackagingConfigurationsResponse
     */
    public function listVodPackagingConfigurationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVodPackagingConfigurations',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListVodPackagingConfigurationsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListVodPackagingConfigurationsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 列举点播打包配置列表.
     *
     * @param request - ListVodPackagingConfigurationsRequest
     * @returns ListVodPackagingConfigurationsResponse
     *
     * @param ListVodPackagingConfigurationsRequest $request
     *
     * @return ListVodPackagingConfigurationsResponse
     */
    public function listVodPackagingConfigurations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVodPackagingConfigurationsWithOptions($request, $runtime);
    }

    /**
     * 列举点播打包组.
     *
     * @param request - ListVodPackagingGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns ListVodPackagingGroupsResponse
     *
     * @param ListVodPackagingGroupsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListVodPackagingGroupsResponse
     */
    public function listVodPackagingGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyword) {
            @$query['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListVodPackagingGroups',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return ListVodPackagingGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListVodPackagingGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 列举点播打包组.
     *
     * @param request - ListVodPackagingGroupsRequest
     * @returns ListVodPackagingGroupsResponse
     *
     * @param ListVodPackagingGroupsRequest $request
     *
     * @return ListVodPackagingGroupsResponse
     */
    public function listVodPackagingGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVodPackagingGroupsWithOptions($request, $runtime);
    }

    /**
     * 查询版权水印提取任务
     *
     * @param request - QueryCopyrightExtractJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns QueryCopyrightExtractJobResponse
     *
     * @param QueryCopyrightExtractJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryCopyrightExtractJobResponse
     */
    public function queryCopyrightExtractJobWithOptions($request, $runtime)
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
            'action'      => 'QueryCopyrightExtractJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryCopyrightExtractJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryCopyrightExtractJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询版权水印提取任务
     *
     * @param request - QueryCopyrightExtractJobRequest
     * @returns QueryCopyrightExtractJobResponse
     *
     * @param QueryCopyrightExtractJobRequest $request
     *
     * @return QueryCopyrightExtractJobResponse
     */
    public function queryCopyrightExtractJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCopyrightExtractJobWithOptions($request, $runtime);
    }

    /**
     * 查询视频版权水印任务列表.
     *
     * @param request - QueryCopyrightJobListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns QueryCopyrightJobListResponse
     *
     * @param QueryCopyrightJobListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryCopyrightJobListResponse
     */
    public function queryCopyrightJobListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createTimeEnd) {
            @$query['CreateTimeEnd'] = $request->createTimeEnd;
        }

        if (null !== $request->createTimeStart) {
            @$query['CreateTimeStart'] = $request->createTimeStart;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->level) {
            @$query['Level'] = $request->level;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryCopyrightJobList',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryCopyrightJobListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryCopyrightJobListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询视频版权水印任务列表.
     *
     * @param request - QueryCopyrightJobListRequest
     * @returns QueryCopyrightJobListResponse
     *
     * @param QueryCopyrightJobListRequest $request
     *
     * @return QueryCopyrightJobListResponse
     */
    public function queryCopyrightJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCopyrightJobListWithOptions($request, $runtime);
    }

    /**
     * Queries a list of media fingerprint analysis jobs.
     *
     * @param request - QueryDNAJobListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns QueryDNAJobListResponse
     *
     * @param QueryDNAJobListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return QueryDNAJobListResponse
     */
    public function queryDNAJobListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobIds) {
            @$query['JobIds'] = $request->jobIds;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryDNAJobList',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryDNAJobListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryDNAJobListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of media fingerprint analysis jobs.
     *
     * @param request - QueryDNAJobListRequest
     * @returns QueryDNAJobListResponse
     *
     * @param QueryDNAJobListRequest $request
     *
     * @return QueryDNAJobListResponse
     */
    public function queryDNAJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDNAJobListWithOptions($request, $runtime);
    }

    /**
     * Queries the status and result of an intelligent production job.
     *
     * @param request - QueryIProductionJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns QueryIProductionJobResponse
     *
     * @param QueryIProductionJobRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryIProductionJobResponse
     */
    public function queryIProductionJobWithOptions($request, $runtime)
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryIProductionJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryIProductionJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the status and result of an intelligent production job.
     *
     * @param request - QueryIProductionJobRequest
     * @returns QueryIProductionJobResponse
     *
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
     * Queries the information about a content moderation job.
     *
     * @remarks
     * In the content moderation results, the moderation results of the video are sorted in ascending order by time into a timeline. If the video is long, the content moderation results are paginated, and the first page is returned. You can call this operation again to query the remaining moderation results of the video.
     *
     * @param request - QueryMediaCensorJobDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns QueryMediaCensorJobDetailResponse
     *
     * @param QueryMediaCensorJobDetailRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryMediaCensorJobDetailResponse
     */
    public function queryMediaCensorJobDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->maximumPageSize) {
            @$query['MaximumPageSize'] = $request->maximumPageSize;
        }

        if (null !== $request->nextPageToken) {
            @$query['NextPageToken'] = $request->nextPageToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryMediaCensorJobDetailResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryMediaCensorJobDetailResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a content moderation job.
     *
     * @remarks
     * In the content moderation results, the moderation results of the video are sorted in ascending order by time into a timeline. If the video is long, the content moderation results are paginated, and the first page is returned. You can call this operation again to query the remaining moderation results of the video.
     *
     * @param request - QueryMediaCensorJobDetailRequest
     * @returns QueryMediaCensorJobDetailResponse
     *
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
     * Queries a list of content moderation jobs.
     *
     * @remarks
     * You can call this operation to query only the content moderation jobs within the most recent three months.
     *
     * @param request - QueryMediaCensorJobListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns QueryMediaCensorJobListResponse
     *
     * @param QueryMediaCensorJobListRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryMediaCensorJobListResponse
     */
    public function queryMediaCensorJobListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endOfJobCreatedTimeRange) {
            @$query['EndOfJobCreatedTimeRange'] = $request->endOfJobCreatedTimeRange;
        }

        if (null !== $request->jobIds) {
            @$query['JobIds'] = $request->jobIds;
        }

        if (null !== $request->maximumPageSize) {
            @$query['MaximumPageSize'] = $request->maximumPageSize;
        }

        if (null !== $request->nextPageToken) {
            @$query['NextPageToken'] = $request->nextPageToken;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pipelineId) {
            @$query['PipelineId'] = $request->pipelineId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->startOfJobCreatedTimeRange) {
            @$query['StartOfJobCreatedTimeRange'] = $request->startOfJobCreatedTimeRange;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMediaCensorJobList',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryMediaCensorJobListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryMediaCensorJobListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries a list of content moderation jobs.
     *
     * @remarks
     * You can call this operation to query only the content moderation jobs within the most recent three months.
     *
     * @param request - QueryMediaCensorJobListRequest
     * @returns QueryMediaCensorJobListResponse
     *
     * @param QueryMediaCensorJobListRequest $request
     *
     * @return QueryMediaCensorJobListResponse
     */
    public function queryMediaCensorJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMediaCensorJobListWithOptions($request, $runtime);
    }

    /**
     * Queries the indexing jobs enabled for a media asset.
     *
     * @param request - QueryMediaIndexJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns QueryMediaIndexJobResponse
     *
     * @param QueryMediaIndexJobRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return QueryMediaIndexJobResponse
     */
    public function queryMediaIndexJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->searchLibName) {
            @$query['SearchLibName'] = $request->searchLibName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryMediaIndexJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryMediaIndexJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryMediaIndexJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the indexing jobs enabled for a media asset.
     *
     * @param request - QueryMediaIndexJobRequest
     * @returns QueryMediaIndexJobResponse
     *
     * @param QueryMediaIndexJobRequest $request
     *
     * @return QueryMediaIndexJobResponse
     */
    public function queryMediaIndexJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMediaIndexJobWithOptions($request, $runtime);
    }

    /**
     * Queries the details of a search index.
     *
     * @param request - QuerySearchIndexRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns QuerySearchIndexResponse
     *
     * @param QuerySearchIndexRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QuerySearchIndexResponse
     */
    public function querySearchIndexWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->indexType) {
            @$query['IndexType'] = $request->indexType;
        }

        if (null !== $request->searchLibName) {
            @$query['SearchLibName'] = $request->searchLibName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySearchIndex',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QuerySearchIndexResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QuerySearchIndexResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the details of a search index.
     *
     * @param request - QuerySearchIndexRequest
     * @returns QuerySearchIndexResponse
     *
     * @param QuerySearchIndexRequest $request
     *
     * @return QuerySearchIndexResponse
     */
    public function querySearchIndex($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySearchIndexWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a search library.
     *
     * @param request - QuerySearchLibRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns QuerySearchLibResponse
     *
     * @param QuerySearchLibRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return QuerySearchLibResponse
     */
    public function querySearchLibWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->searchLibName) {
            @$query['SearchLibName'] = $request->searchLibName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySearchLib',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QuerySearchLibResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QuerySearchLibResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a search library.
     *
     * @param request - QuerySearchLibRequest
     * @returns QuerySearchLibResponse
     *
     * @param QuerySearchLibRequest $request
     *
     * @return QuerySearchLibResponse
     */
    public function querySearchLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySearchLibWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a smart tagging job.
     *
     * @param request - QuerySmarttagJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns QuerySmarttagJobResponse
     *
     * @param QuerySmarttagJobRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return QuerySmarttagJobResponse
     */
    public function querySmarttagJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->params) {
            @$query['Params'] = $request->params;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'QuerySmarttagJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QuerySmarttagJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QuerySmarttagJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about a smart tagging job.
     *
     * @param request - QuerySmarttagJobRequest
     * @returns QuerySmarttagJobResponse
     *
     * @param QuerySmarttagJobRequest $request
     *
     * @return QuerySmarttagJobResponse
     */
    public function querySmarttagJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmarttagJobWithOptions($request, $runtime);
    }

    /**
     * 查询视频溯源水印ab流任务
     *
     * @param request - QueryTraceAbJobListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns QueryTraceAbJobListResponse
     *
     * @param QueryTraceAbJobListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return QueryTraceAbJobListResponse
     */
    public function queryTraceAbJobListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createTimeEnd) {
            @$query['CreateTimeEnd'] = $request->createTimeEnd;
        }

        if (null !== $request->createTimeStart) {
            @$query['CreateTimeStart'] = $request->createTimeStart;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->traceMediaId) {
            @$query['TraceMediaId'] = $request->traceMediaId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTraceAbJobList',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryTraceAbJobListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryTraceAbJobListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询视频溯源水印ab流任务
     *
     * @param request - QueryTraceAbJobListRequest
     * @returns QueryTraceAbJobListResponse
     *
     * @param QueryTraceAbJobListRequest $request
     *
     * @return QueryTraceAbJobListResponse
     */
    public function queryTraceAbJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTraceAbJobListWithOptions($request, $runtime);
    }

    /**
     * 查询溯源水印提取任务
     *
     * @param request - QueryTraceExtractJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns QueryTraceExtractJobResponse
     *
     * @param QueryTraceExtractJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return QueryTraceExtractJobResponse
     */
    public function queryTraceExtractJobWithOptions($request, $runtime)
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
            'action'      => 'QueryTraceExtractJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryTraceExtractJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryTraceExtractJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询溯源水印提取任务
     *
     * @param request - QueryTraceExtractJobRequest
     * @returns QueryTraceExtractJobResponse
     *
     * @param QueryTraceExtractJobRequest $request
     *
     * @return QueryTraceExtractJobResponse
     */
    public function queryTraceExtractJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTraceExtractJobWithOptions($request, $runtime);
    }

    /**
     * 查询视频溯源水印m3u8任务
     *
     * @param request - QueryTraceM3u8JobListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns QueryTraceM3u8JobListResponse
     *
     * @param QueryTraceM3u8JobListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return QueryTraceM3u8JobListResponse
     */
    public function queryTraceM3u8JobListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createTimeEnd) {
            @$query['CreateTimeEnd'] = $request->createTimeEnd;
        }

        if (null !== $request->createTimeStart) {
            @$query['CreateTimeStart'] = $request->createTimeStart;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'QueryTraceM3u8JobList',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return QueryTraceM3u8JobListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryTraceM3u8JobListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 查询视频溯源水印m3u8任务
     *
     * @param request - QueryTraceM3u8JobListRequest
     * @returns QueryTraceM3u8JobListResponse
     *
     * @param QueryTraceM3u8JobListRequest $request
     *
     * @return QueryTraceM3u8JobListResponse
     */
    public function queryTraceM3u8JobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTraceM3u8JobListWithOptions($request, $runtime);
    }

    /**
     * Obtain a new upload credential for a media asset after its upload credential expires.
     *
     * @remarks
     * You can also call this operation to overwrite media files. After you obtain the upload URL of a media file, you can upload the media file again without changing the audio or video ID.
     *
     * @param request - RefreshUploadMediaRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RefreshUploadMediaResponse
     *
     * @param RefreshUploadMediaRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RefreshUploadMediaResponse
     */
    public function refreshUploadMediaWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RefreshUploadMediaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RefreshUploadMediaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Obtain a new upload credential for a media asset after its upload credential expires.
     *
     * @remarks
     * You can also call this operation to overwrite media files. After you obtain the upload URL of a media file, you can upload the media file again without changing the audio or video ID.
     *
     * @param request - RefreshUploadMediaRequest
     * @returns RefreshUploadMediaResponse
     *
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
     * Registers a media asset with Intelligent Media Services (IMS). IMS assigns an ID to the media asset. This operation asynchronously accesses the media asset service in which the media asset is stored to obtain the file information of the media asset based on the input URL. You can also specify basic information, such as the title, tags, and description, for the media asset. This operation returns the ID of the media asset. You can call the GetMediaInfo operation based on the ID to query the details of the media asset. You can set InputURL only to the URL of an Object Storage Service (OSS) file or an ApsaraVideo VOD media asset.
     *
     * @remarks
     * Registering a media asset is an asynchronous job that takes 2 to 3 seconds. When the operation returns the ID of the media asset, the registration may have not be completed. If you call the GetMediaInfo operation at this time, you may fail to obtain the information about the media asset.
     *
     * @param request - RegisterMediaInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RegisterMediaInfoResponse
     *
     * @param RegisterMediaInfoRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RegisterMediaInfoResponse
     */
    public function registerMediaInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessType) {
            @$query['BusinessType'] = $request->businessType;
        }

        if (null !== $request->cateId) {
            @$query['CateId'] = $request->cateId;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->coverURL) {
            @$query['CoverURL'] = $request->coverURL;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
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

        if (null !== $request->referenceId) {
            @$query['ReferenceId'] = $request->referenceId;
        }

        if (null !== $request->registerConfig) {
            @$query['RegisterConfig'] = $request->registerConfig;
        }

        if (null !== $request->smartTagTemplateId) {
            @$query['SmartTagTemplateId'] = $request->smartTagTemplateId;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        if (null !== $request->workflowId) {
            @$query['WorkflowId'] = $request->workflowId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RegisterMediaInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RegisterMediaInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Registers a media asset with Intelligent Media Services (IMS). IMS assigns an ID to the media asset. This operation asynchronously accesses the media asset service in which the media asset is stored to obtain the file information of the media asset based on the input URL. You can also specify basic information, such as the title, tags, and description, for the media asset. This operation returns the ID of the media asset. You can call the GetMediaInfo operation based on the ID to query the details of the media asset. You can set InputURL only to the URL of an Object Storage Service (OSS) file or an ApsaraVideo VOD media asset.
     *
     * @remarks
     * Registering a media asset is an asynchronous job that takes 2 to 3 seconds. When the operation returns the ID of the media asset, the registration may have not be completed. If you call the GetMediaInfo operation at this time, you may fail to obtain the information about the media asset.
     *
     * @param request - RegisterMediaInfoRequest
     * @returns RegisterMediaInfoResponse
     *
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
     * Registers a media stream.
     *
     * @remarks
     * You can call this operation to register a media stream file in an Object Storage Service (OSS) bucket with Intelligent Media Services (IMS) and associate the media stream with the specified media asset ID.
     *
     * @param request - RegisterMediaStreamRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns RegisterMediaStreamResponse
     *
     * @param RegisterMediaStreamRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RegisterMediaStreamResponse
     */
    public function registerMediaStreamWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->inputURL) {
            @$query['InputURL'] = $request->inputURL;
        }

        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return RegisterMediaStreamResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RegisterMediaStreamResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Registers a media stream.
     *
     * @remarks
     * You can call this operation to register a media stream file in an Object Storage Service (OSS) bucket with Intelligent Media Services (IMS) and associate the media stream with the specified media asset ID.
     *
     * @param request - RegisterMediaStreamRequest
     * @returns RegisterMediaStreamResponse
     *
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
     * Queries online editing projects by creation time and status.
     *
     * @param request - SearchEditingProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SearchEditingProjectResponse
     *
     * @param SearchEditingProjectRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SearchEditingProjectResponse
     */
    public function searchEditingProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->createSource) {
            @$query['CreateSource'] = $request->createSource;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->projectType) {
            @$query['ProjectType'] = $request->projectType;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->templateType) {
            @$query['TemplateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SearchEditingProjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchEditingProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries online editing projects by creation time and status.
     *
     * @param request - SearchEditingProjectRequest
     * @returns SearchEditingProjectResponse
     *
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
     * Re-analyzes the search index jobs of media assets. You can re-run the search index jobs of up to 20 media assets in each request.
     *
     * @param request - SearchIndexJobRerunRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SearchIndexJobRerunResponse
     *
     * @param SearchIndexJobRerunRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SearchIndexJobRerunResponse
     */
    public function searchIndexJobRerunWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaIds) {
            @$query['MediaIds'] = $request->mediaIds;
        }

        if (null !== $request->searchLibName) {
            @$query['SearchLibName'] = $request->searchLibName;
        }

        if (null !== $request->task) {
            @$query['Task'] = $request->task;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchIndexJobRerun',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SearchIndexJobRerunResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchIndexJobRerunResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Re-analyzes the search index jobs of media assets. You can re-run the search index jobs of up to 20 media assets in each request.
     *
     * @param request - SearchIndexJobRerunRequest
     * @returns SearchIndexJobRerunResponse
     *
     * @param SearchIndexJobRerunRequest $request
     *
     * @return SearchIndexJobRerunResponse
     */
    public function searchIndexJobRerun($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchIndexJobRerunWithOptions($request, $runtime);
    }

    /**
     * Queries information about media assets based on the request parameters.
     *
     * @remarks
     * If you have questions about how to use the media asset search feature in Intelligent Media Services (IMS), contact technical support in the DingTalk group (ID 30415005038).
     *
     * @param request - SearchMediaRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SearchMediaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchMediaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries information about media assets based on the request parameters.
     *
     * @remarks
     * If you have questions about how to use the media asset search feature in Intelligent Media Services (IMS), contact technical support in the DingTalk group (ID 30415005038).
     *
     * @param request - SearchMediaRequest
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
     * Queries media assets based on character names, subtitles, or AI categories.
     *
     * @remarks
     * You can call this operation to query media assets or media asset clips based on character names, subtitles, or AI categories.
     *
     * @param request - SearchMediaByAILabelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SearchMediaByAILabelResponse
     *
     * @param SearchMediaByAILabelRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SearchMediaByAILabelResponse
     */
    public function searchMediaByAILabelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->matchingMode) {
            @$query['MatchingMode'] = $request->matchingMode;
        }

        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->mediaType) {
            @$query['MediaType'] = $request->mediaType;
        }

        if (null !== $request->multimodalSearchType) {
            @$query['MultimodalSearchType'] = $request->multimodalSearchType;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchLibName) {
            @$query['SearchLibName'] = $request->searchLibName;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->specificSearch) {
            @$query['SpecificSearch'] = $request->specificSearch;
        }

        if (null !== $request->text) {
            @$query['Text'] = $request->text;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchMediaByAILabel',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SearchMediaByAILabelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchMediaByAILabelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries media assets based on character names, subtitles, or AI categories.
     *
     * @remarks
     * You can call this operation to query media assets or media asset clips based on character names, subtitles, or AI categories.
     *
     * @param request - SearchMediaByAILabelRequest
     * @returns SearchMediaByAILabelResponse
     *
     * @param SearchMediaByAILabelRequest $request
     *
     * @return SearchMediaByAILabelResponse
     */
    public function searchMediaByAILabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchMediaByAILabelWithOptions($request, $runtime);
    }

    /**
     * Queries the information about media assets that are related to a specific face.
     *
     * @remarks
     * If you have questions about how to use the media asset search feature in Intelligent Media Services (IMS), contact technical support in the DingTalk group (ID 30415005038).
     *
     * @param request - SearchMediaByFaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SearchMediaByFaceResponse
     *
     * @param SearchMediaByFaceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SearchMediaByFaceResponse
     */
    public function searchMediaByFaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->entityId) {
            @$query['EntityId'] = $request->entityId;
        }

        if (null !== $request->faceSearchToken) {
            @$query['FaceSearchToken'] = $request->faceSearchToken;
        }

        if (null !== $request->mediaType) {
            @$query['MediaType'] = $request->mediaType;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->personImageUrl) {
            @$query['PersonImageUrl'] = $request->personImageUrl;
        }

        if (null !== $request->searchLibName) {
            @$query['SearchLibName'] = $request->searchLibName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchMediaByFace',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SearchMediaByFaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchMediaByFaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about media assets that are related to a specific face.
     *
     * @remarks
     * If you have questions about how to use the media asset search feature in Intelligent Media Services (IMS), contact technical support in the DingTalk group (ID 30415005038).
     *
     * @param request - SearchMediaByFaceRequest
     * @returns SearchMediaByFaceResponse
     *
     * @param SearchMediaByFaceRequest $request
     *
     * @return SearchMediaByFaceResponse
     */
    public function searchMediaByFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchMediaByFaceWithOptions($request, $runtime);
    }

    /**
     * Queries media assets by using the hybrid search feature. This operation allows you to search for media assets by using natural language based on intelligent tag text search and the search capabilities of large language models (LLMs). This implements multimodal retrieval.
     *
     * @param request - SearchMediaByHybridRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SearchMediaByHybridResponse
     *
     * @param SearchMediaByHybridRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return SearchMediaByHybridResponse
     */
    public function searchMediaByHybridWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->mediaType) {
            @$query['MediaType'] = $request->mediaType;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchLibName) {
            @$query['SearchLibName'] = $request->searchLibName;
        }

        if (null !== $request->text) {
            @$query['Text'] = $request->text;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchMediaByHybrid',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SearchMediaByHybridResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchMediaByHybridResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries media assets by using the hybrid search feature. This operation allows you to search for media assets by using natural language based on intelligent tag text search and the search capabilities of large language models (LLMs). This implements multimodal retrieval.
     *
     * @param request - SearchMediaByHybridRequest
     * @returns SearchMediaByHybridResponse
     *
     * @param SearchMediaByHybridRequest $request
     *
     * @return SearchMediaByHybridResponse
     */
    public function searchMediaByHybrid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchMediaByHybridWithOptions($request, $runtime);
    }

    /**
     * Queries media assets by using the large visual model. You can use natural language for the query.
     *
     * @remarks
     * If you have questions about how to use the media asset search feature in Intelligent Media Services (IMS), contact technical support in the DingTalk group (ID 30415005038).
     *
     * @param request - SearchMediaByMultimodalRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SearchMediaByMultimodalResponse
     *
     * @param SearchMediaByMultimodalRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SearchMediaByMultimodalResponse
     */
    public function searchMediaByMultimodalWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaType) {
            @$query['MediaType'] = $request->mediaType;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchLibName) {
            @$query['SearchLibName'] = $request->searchLibName;
        }

        if (null !== $request->text) {
            @$query['Text'] = $request->text;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchMediaByMultimodal',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SearchMediaByMultimodalResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchMediaByMultimodalResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries media assets by using the large visual model. You can use natural language for the query.
     *
     * @remarks
     * If you have questions about how to use the media asset search feature in Intelligent Media Services (IMS), contact technical support in the DingTalk group (ID 30415005038).
     *
     * @param request - SearchMediaByMultimodalRequest
     * @returns SearchMediaByMultimodalResponse
     *
     * @param SearchMediaByMultimodalRequest $request
     *
     * @return SearchMediaByMultimodalResponse
     */
    public function searchMediaByMultimodal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchMediaByMultimodalWithOptions($request, $runtime);
    }

    /**
     * Queries the information about media asset clips that are related to a specific face based on the response to the SearchMediaByFace operation.
     *
     * @remarks
     * If you have questions about how to use the media asset search feature in Intelligent Media Services (IMS), contact technical support in the DingTalk group (ID 30415005038).
     *
     * @param request - SearchMediaClipByFaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SearchMediaClipByFaceResponse
     *
     * @param SearchMediaClipByFaceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SearchMediaClipByFaceResponse
     */
    public function searchMediaClipByFaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->entityId) {
            @$query['EntityId'] = $request->entityId;
        }

        if (null !== $request->faceSearchToken) {
            @$query['FaceSearchToken'] = $request->faceSearchToken;
        }

        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchLibName) {
            @$query['SearchLibName'] = $request->searchLibName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SearchMediaClipByFace',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SearchMediaClipByFaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchMediaClipByFaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Queries the information about media asset clips that are related to a specific face based on the response to the SearchMediaByFace operation.
     *
     * @remarks
     * If you have questions about how to use the media asset search feature in Intelligent Media Services (IMS), contact technical support in the DingTalk group (ID 30415005038).
     *
     * @param request - SearchMediaClipByFaceRequest
     * @returns SearchMediaClipByFaceResponse
     *
     * @param SearchMediaClipByFaceRequest $request
     *
     * @return SearchMediaClipByFaceResponse
     */
    public function searchMediaClipByFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchMediaClipByFaceWithOptions($request, $runtime);
    }

    /**
     * 搜索公共媒资信息.
     *
     * @param request - SearchPublicMediaInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SearchPublicMediaInfoResponse
     *
     * @param SearchPublicMediaInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SearchPublicMediaInfoResponse
     */
    public function searchPublicMediaInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authorized) {
            @$query['Authorized'] = $request->authorized;
        }

        if (null !== $request->dynamicMetaDataMatchFields) {
            @$query['DynamicMetaDataMatchFields'] = $request->dynamicMetaDataMatchFields;
        }

        if (null !== $request->entityId) {
            @$query['EntityId'] = $request->entityId;
        }

        if (null !== $request->favorite) {
            @$query['Favorite'] = $request->favorite;
        }

        if (null !== $request->mediaIds) {
            @$query['MediaIds'] = $request->mediaIds;
        }

        if (null !== $request->pageNo) {
            @$query['PageNo'] = $request->pageNo;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SearchPublicMediaInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchPublicMediaInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 搜索公共媒资信息.
     *
     * @param request - SearchPublicMediaInfoRequest
     * @returns SearchPublicMediaInfoResponse
     *
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
     * 向智能体通话发送datachannel消息.
     *
     * @param request - SendAIAgentDataChannelMessageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SendAIAgentDataChannelMessageResponse
     *
     * @param SendAIAgentDataChannelMessageRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return SendAIAgentDataChannelMessageResponse
     */
    public function sendAIAgentDataChannelMessageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->message) {
            @$query['Message'] = $request->message;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendAIAgentDataChannelMessage',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SendAIAgentDataChannelMessageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SendAIAgentDataChannelMessageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 向智能体通话发送datachannel消息.
     *
     * @param request - SendAIAgentDataChannelMessageRequest
     * @returns SendAIAgentDataChannelMessageResponse
     *
     * @param SendAIAgentDataChannelMessageRequest $request
     *
     * @return SendAIAgentDataChannelMessageResponse
     */
    public function sendAIAgentDataChannelMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendAIAgentDataChannelMessageWithOptions($request, $runtime);
    }

    /**
     * 用来立即让某个智能体实例播报指定的文本。
     *
     * @param request - SendAIAgentSpeechRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SendAIAgentSpeechResponse
     *
     * @param SendAIAgentSpeechRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return SendAIAgentSpeechResponse
     */
    public function sendAIAgentSpeechWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enableInterrupt) {
            @$query['EnableInterrupt'] = $request->enableInterrupt;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->text) {
            @$query['Text'] = $request->text;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendAIAgentSpeech',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SendAIAgentSpeechResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SendAIAgentSpeechResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 用来立即让某个智能体实例播报指定的文本。
     *
     * @param request - SendAIAgentSpeechRequest
     * @returns SendAIAgentSpeechResponse
     *
     * @param SendAIAgentSpeechRequest $request
     *
     * @return SendAIAgentSpeechResponse
     */
    public function sendAIAgentSpeech($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendAIAgentSpeechWithOptions($request, $runtime);
    }

    /**
     * 传入消息作为LLM输入。
     *
     * @param request - SendAIAgentTextRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SendAIAgentTextResponse
     *
     * @param SendAIAgentTextRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SendAIAgentTextResponse
     */
    public function sendAIAgentTextWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->text) {
            @$query['Text'] = $request->text;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendAIAgentText',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SendAIAgentTextResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SendAIAgentTextResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 传入消息作为LLM输入。
     *
     * @param request - SendAIAgentTextRequest
     * @returns SendAIAgentTextResponse
     *
     * @param SendAIAgentTextRequest $request
     *
     * @return SendAIAgentTextResponse
     */
    public function sendAIAgentText($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendAIAgentTextWithOptions($request, $runtime);
    }

    /**
     * Sends a command to process a live stream snapshot job.
     *
     * @param request - SendLiveSnapshotJobCommandRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SendLiveSnapshotJobCommandResponse
     *
     * @param SendLiveSnapshotJobCommandRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SendLiveSnapshotJobCommandResponse
     */
    public function sendLiveSnapshotJobCommandWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->command) {
            @$body['Command'] = $request->command;
        }

        if (null !== $request->jobId) {
            @$body['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SendLiveSnapshotJobCommand',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SendLiveSnapshotJobCommandResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SendLiveSnapshotJobCommandResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Sends a command to process a live stream snapshot job.
     *
     * @param request - SendLiveSnapshotJobCommandRequest
     * @returns SendLiveSnapshotJobCommandResponse
     *
     * @param SendLiveSnapshotJobCommandRequest $request
     *
     * @return SendLiveSnapshotJobCommandResponse
     */
    public function sendLiveSnapshotJobCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendLiveSnapshotJobCommandWithOptions($request, $runtime);
    }

    /**
     * Sends a command to process a live stream transcoding job.
     *
     * @param request - SendLiveTranscodeJobCommandRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SendLiveTranscodeJobCommandResponse
     *
     * @param SendLiveTranscodeJobCommandRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SendLiveTranscodeJobCommandResponse
     */
    public function sendLiveTranscodeJobCommandWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->command) {
            @$query['Command'] = $request->command;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SendLiveTranscodeJobCommandResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SendLiveTranscodeJobCommandResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Sends a command to process a live stream transcoding job.
     *
     * @param request - SendLiveTranscodeJobCommandRequest
     * @returns SendLiveTranscodeJobCommandResponse
     *
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
     * 设置内容分析搜索配置.
     *
     * @param request - SetContentAnalyzeConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SetContentAnalyzeConfigResponse
     *
     * @param SetContentAnalyzeConfigRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SetContentAnalyzeConfigResponse
     */
    public function setContentAnalyzeConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->auto) {
            @$query['Auto'] = $request->auto;
        }

        if (null !== $request->saveType) {
            @$query['SaveType'] = $request->saveType;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetContentAnalyzeConfig',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SetContentAnalyzeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetContentAnalyzeConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 设置内容分析搜索配置.
     *
     * @param request - SetContentAnalyzeConfigRequest
     * @returns SetContentAnalyzeConfigResponse
     *
     * @param SetContentAnalyzeConfigRequest $request
     *
     * @return SetContentAnalyzeConfigResponse
     */
    public function setContentAnalyzeConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setContentAnalyzeConfigWithOptions($request, $runtime);
    }

    /**
     * Sets a custom template as the default template.
     *
     * @param request - SetDefaultCustomTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SetDefaultCustomTemplateResponse
     *
     * @param SetDefaultCustomTemplateRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SetDefaultCustomTemplateResponse
     */
    public function setDefaultCustomTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SetDefaultCustomTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetDefaultCustomTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Sets a custom template as the default template.
     *
     * @param request - SetDefaultCustomTemplateRequest
     * @returns SetDefaultCustomTemplateResponse
     *
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
     * 设置默认存储路径.
     *
     * @param request - SetDefaultStorageLocationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SetDefaultStorageLocationResponse
     *
     * @param SetDefaultStorageLocationRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SetDefaultStorageLocationResponse
     */
    public function setDefaultStorageLocationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucket) {
            @$query['Bucket'] = $request->bucket;
        }

        if (null !== $request->path) {
            @$query['Path'] = $request->path;
        }

        if (null !== $request->storageType) {
            @$query['StorageType'] = $request->storageType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SetDefaultStorageLocationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetDefaultStorageLocationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 设置默认存储路径.
     *
     * @param request - SetDefaultStorageLocationRequest
     * @returns SetDefaultStorageLocationResponse
     *
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
     * Configures a callback method for one or more events.
     *
     * @param request - SetEventCallbackRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SetEventCallbackResponse
     *
     * @param SetEventCallbackRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return SetEventCallbackResponse
     */
    public function setEventCallbackWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authKey) {
            @$query['AuthKey'] = $request->authKey;
        }

        if (null !== $request->authSwitch) {
            @$query['AuthSwitch'] = $request->authSwitch;
        }

        if (null !== $request->callbackQueueName) {
            @$query['CallbackQueueName'] = $request->callbackQueueName;
        }

        if (null !== $request->callbackType) {
            @$query['CallbackType'] = $request->callbackType;
        }

        if (null !== $request->callbackURL) {
            @$query['CallbackURL'] = $request->callbackURL;
        }

        if (null !== $request->eventTypeList) {
            @$query['EventTypeList'] = $request->eventTypeList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SetEventCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetEventCallbackResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Configures a callback method for one or more events.
     *
     * @param request - SetEventCallbackRequest
     * @returns SetEventCallbackResponse
     *
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
     * 更新回调配置.
     *
     * @param request - SetNotifyConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SetNotifyConfigResponse
     *
     * @param SetNotifyConfigRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return SetNotifyConfigResponse
     */
    public function setNotifyConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->AIAgentId) {
            @$query['AIAgentId'] = $request->AIAgentId;
        }

        if (null !== $request->callbackUrl) {
            @$query['CallbackUrl'] = $request->callbackUrl;
        }

        if (null !== $request->enableNotify) {
            @$query['EnableNotify'] = $request->enableNotify;
        }

        if (null !== $request->eventTypes) {
            @$query['EventTypes'] = $request->eventTypes;
        }

        if (null !== $request->token) {
            @$query['Token'] = $request->token;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetNotifyConfig',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SetNotifyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetNotifyConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新回调配置.
     *
     * @param request - SetNotifyConfigRequest
     * @returns SetNotifyConfigResponse
     *
     * @param SetNotifyConfigRequest $request
     *
     * @return SetNotifyConfigResponse
     */
    public function setNotifyConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setNotifyConfigWithOptions($request, $runtime);
    }

    /**
     * 启动一个智能体实例，并加入通话。
     *
     * @param tmpReq - StartAIAgentInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns StartAIAgentInstanceResponse
     *
     * @param StartAIAgentInstanceRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return StartAIAgentInstanceResponse
     */
    public function startAIAgentInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new StartAIAgentInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->runtimeConfig) {
            $request->runtimeConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->runtimeConfig, 'RuntimeConfig', 'json');
        }

        if (null !== $tmpReq->templateConfig) {
            $request->templateConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->templateConfig, 'TemplateConfig', 'json');
        }

        $query = [];
        if (null !== $request->AIAgentId) {
            @$query['AIAgentId'] = $request->AIAgentId;
        }

        if (null !== $request->runtimeConfigShrink) {
            @$query['RuntimeConfig'] = $request->runtimeConfigShrink;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->templateConfigShrink) {
            @$query['TemplateConfig'] = $request->templateConfigShrink;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartAIAgentInstance',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StartAIAgentInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartAIAgentInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 启动一个智能体实例，并加入通话。
     *
     * @param request - StartAIAgentInstanceRequest
     * @returns StartAIAgentInstanceResponse
     *
     * @param StartAIAgentInstanceRequest $request
     *
     * @return StartAIAgentInstanceResponse
     */
    public function startAIAgentInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startAIAgentInstanceWithOptions($request, $runtime);
    }

    /**
     * 启动频道.
     *
     * @param request - StartChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns StartChannelResponse
     *
     * @param StartChannelRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StartChannelResponse
     */
    public function startChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->channelName) {
            @$query['ChannelName'] = $request->channelName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartChannel',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StartChannelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartChannelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 启动频道.
     *
     * @param request - StartChannelRequest
     * @returns StartChannelResponse
     *
     * @param StartChannelRequest $request
     *
     * @return StartChannelResponse
     */
    public function startChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startChannelWithOptions($request, $runtime);
    }

    /**
     * 开启一个机器人实例.
     *
     * @param tmpReq - StartRtcRobotInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns StartRtcRobotInstanceResponse
     *
     * @param StartRtcRobotInstanceRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return StartRtcRobotInstanceResponse
     */
    public function startRtcRobotInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new StartRtcRobotInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->config) {
            $request->configShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->config, 'Config', 'json');
        }

        $query = [];
        if (null !== $request->authToken) {
            @$query['AuthToken'] = $request->authToken;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->configShrink) {
            @$query['Config'] = $request->configShrink;
        }

        if (null !== $request->robotId) {
            @$query['RobotId'] = $request->robotId;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        if (null !== $request->userId) {
            @$query['UserId'] = $request->userId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartRtcRobotInstance',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StartRtcRobotInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartRtcRobotInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 开启一个机器人实例.
     *
     * @param request - StartRtcRobotInstanceRequest
     * @returns StartRtcRobotInstanceResponse
     *
     * @param StartRtcRobotInstanceRequest $request
     *
     * @return StartRtcRobotInstanceResponse
     */
    public function startRtcRobotInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startRtcRobotInstanceWithOptions($request, $runtime);
    }

    /**
     * Submits a workflow task. You can submit a workflow task to implement automated media processing based on a workflow template.
     *
     * @remarks
     *   Only media assets from Intelligent Media Services (IMS) or ApsaraVideo VOD can be used as the input of a workflow.
     * *   When you submit a workflow task, you must specify a workflow template. You can create a workflow template in the [IMS console](https://ims.console.aliyun.com/settings/workflow/list) or use a preset workflow template.
     *
     * @param request - StartWorkflowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns StartWorkflowResponse
     *
     * @param StartWorkflowRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StartWorkflowResponse
     */
    public function startWorkflowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->taskInput) {
            @$query['TaskInput'] = $request->taskInput;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        if (null !== $request->workflowId) {
            @$query['WorkflowId'] = $request->workflowId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartWorkflow',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StartWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartWorkflowResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Submits a workflow task. You can submit a workflow task to implement automated media processing based on a workflow template.
     *
     * @remarks
     *   Only media assets from Intelligent Media Services (IMS) or ApsaraVideo VOD can be used as the input of a workflow.
     * *   When you submit a workflow task, you must specify a workflow template. You can create a workflow template in the [IMS console](https://ims.console.aliyun.com/settings/workflow/list) or use a preset workflow template.
     *
     * @param request - StartWorkflowRequest
     * @returns StartWorkflowResponse
     *
     * @param StartWorkflowRequest $request
     *
     * @return StartWorkflowResponse
     */
    public function startWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startWorkflowWithOptions($request, $runtime);
    }

    /**
     * 停止一个智能体实例。
     *
     * @param request - StopAIAgentInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns StopAIAgentInstanceResponse
     *
     * @param StopAIAgentInstanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return StopAIAgentInstanceResponse
     */
    public function stopAIAgentInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopAIAgentInstance',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StopAIAgentInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopAIAgentInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 停止一个智能体实例。
     *
     * @param request - StopAIAgentInstanceRequest
     * @returns StopAIAgentInstanceResponse
     *
     * @param StopAIAgentInstanceRequest $request
     *
     * @return StopAIAgentInstanceResponse
     */
    public function stopAIAgentInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopAIAgentInstanceWithOptions($request, $runtime);
    }

    /**
     * 停止频道.
     *
     * @param request - StopChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns StopChannelResponse
     *
     * @param StopChannelRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return StopChannelResponse
     */
    public function stopChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->channelName) {
            @$query['ChannelName'] = $request->channelName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopChannel',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StopChannelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopChannelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 停止频道.
     *
     * @param request - StopChannelRequest
     * @returns StopChannelResponse
     *
     * @param StopChannelRequest $request
     *
     * @return StopChannelResponse
     */
    public function stopChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopChannelWithOptions($request, $runtime);
    }

    /**
     * 停止一个机器人实例.
     *
     * @param request - StopRtcRobotInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns StopRtcRobotInstanceResponse
     *
     * @param StopRtcRobotInstanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return StopRtcRobotInstanceResponse
     */
    public function stopRtcRobotInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopRtcRobotInstance',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return StopRtcRobotInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopRtcRobotInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 停止一个机器人实例.
     *
     * @param request - StopRtcRobotInstanceRequest
     * @returns StopRtcRobotInstanceResponse
     *
     * @param StopRtcRobotInstanceRequest $request
     *
     * @return StopRtcRobotInstanceResponse
     */
    public function stopRtcRobotInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopRtcRobotInstanceWithOptions($request, $runtime);
    }

    /**
     * Submits an automatic speech recognition (ASR) job to extract the start and end time and the corresponding text information of a speech in a video.
     *
     * @param request - SubmitASRJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitASRJobResponse
     *
     * @param SubmitASRJobRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SubmitASRJobResponse
     */
    public function submitASRJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->editingConfig) {
            @$query['EditingConfig'] = $request->editingConfig;
        }

        if (null !== $request->inputFile) {
            @$query['InputFile'] = $request->inputFile;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitASRJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitASRJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Submits an automatic speech recognition (ASR) job to extract the start and end time and the corresponding text information of a speech in a video.
     *
     * @param request - SubmitASRJobRequest
     * @returns SubmitASRJobResponse
     *
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
     * Submits an audio production job that converts text into an audio file.
     *
     * @param request - SubmitAudioProduceJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitAudioProduceJobResponse
     *
     * @param SubmitAudioProduceJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SubmitAudioProduceJobResponse
     */
    public function submitAudioProduceJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->editingConfig) {
            @$query['EditingConfig'] = $request->editingConfig;
        }

        if (null !== $request->inputConfig) {
            @$query['InputConfig'] = $request->inputConfig;
        }

        if (null !== $request->outputConfig) {
            @$query['OutputConfig'] = $request->outputConfig;
        }

        if (null !== $request->overwrite) {
            @$query['Overwrite'] = $request->overwrite;
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitAudioProduceJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitAudioProduceJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Submits an audio production job that converts text into an audio file.
     *
     * @param request - SubmitAudioProduceJobRequest
     * @returns SubmitAudioProduceJobResponse
     *
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
     * Submits a digital human training job. You can call this operation to submit a job the first time or submit a job again with updated parameters if the training failed.
     *
     * @param request - SubmitAvatarTrainingJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitAvatarTrainingJobResponse
     *
     * @param SubmitAvatarTrainingJobRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SubmitAvatarTrainingJobResponse
     */
    public function submitAvatarTrainingJobWithOptions($request, $runtime)
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
            'action'      => 'SubmitAvatarTrainingJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitAvatarTrainingJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitAvatarTrainingJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Submits a digital human training job. You can call this operation to submit a job the first time or submit a job again with updated parameters if the training failed.
     *
     * @param request - SubmitAvatarTrainingJobRequest
     * @returns SubmitAvatarTrainingJobResponse
     *
     * @param SubmitAvatarTrainingJobRequest $request
     *
     * @return SubmitAvatarTrainingJobResponse
     */
    public function submitAvatarTrainingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAvatarTrainingJobWithOptions($request, $runtime);
    }

    /**
     * Submits a video rendering job for a digitized virtual human based on text or an audio file of a human voice.
     *
     * @param request - SubmitAvatarVideoJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitAvatarVideoJobResponse
     *
     * @param SubmitAvatarVideoJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SubmitAvatarVideoJobResponse
     */
    public function submitAvatarVideoJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->editingConfig) {
            @$query['EditingConfig'] = $request->editingConfig;
        }

        if (null !== $request->inputConfig) {
            @$query['InputConfig'] = $request->inputConfig;
        }

        if (null !== $request->outputConfig) {
            @$query['OutputConfig'] = $request->outputConfig;
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
            'action'      => 'SubmitAvatarVideoJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitAvatarVideoJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitAvatarVideoJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Submits a video rendering job for a digitized virtual human based on text or an audio file of a human voice.
     *
     * @param request - SubmitAvatarVideoJobRequest
     * @returns SubmitAvatarVideoJobResponse
     *
     * @param SubmitAvatarVideoJobRequest $request
     *
     * @return SubmitAvatarVideoJobResponse
     */
    public function submitAvatarVideoJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAvatarVideoJobWithOptions($request, $runtime);
    }

    /**
     * Submits a quick video production job that intelligently edits multiple video, audio, and image assets to generate multiple videos at a time.
     *
     * @param request - SubmitBatchMediaProducingJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitBatchMediaProducingJobResponse
     *
     * @param SubmitBatchMediaProducingJobRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return SubmitBatchMediaProducingJobResponse
     */
    public function submitBatchMediaProducingJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->outputConfig) {
            @$query['OutputConfig'] = $request->outputConfig;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $body = [];
        if (null !== $request->editingConfig) {
            @$body['EditingConfig'] = $request->editingConfig;
        }

        if (null !== $request->inputConfig) {
            @$body['InputConfig'] = $request->inputConfig;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitBatchMediaProducingJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitBatchMediaProducingJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Submits a quick video production job that intelligently edits multiple video, audio, and image assets to generate multiple videos at a time.
     *
     * @param request - SubmitBatchMediaProducingJobRequest
     * @returns SubmitBatchMediaProducingJobResponse
     *
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
     * 提交版权水印提取作业.
     *
     * @param tmpReq - SubmitCopyrightExtractJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitCopyrightExtractJobResponse
     *
     * @param SubmitCopyrightExtractJobRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return SubmitCopyrightExtractJobResponse
     */
    public function submitCopyrightExtractJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitCopyrightExtractJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->input) {
            $request->inputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }

        $query = [];
        if (null !== $request->inputShrink) {
            @$query['Input'] = $request->inputShrink;
        }

        if (null !== $request->params) {
            @$query['Params'] = $request->params;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitCopyrightExtractJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitCopyrightExtractJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitCopyrightExtractJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 提交版权水印提取作业.
     *
     * @param request - SubmitCopyrightExtractJobRequest
     * @returns SubmitCopyrightExtractJobResponse
     *
     * @param SubmitCopyrightExtractJobRequest $request
     *
     * @return SubmitCopyrightExtractJobResponse
     */
    public function submitCopyrightExtractJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitCopyrightExtractJobWithOptions($request, $runtime);
    }

    /**
     * 提交版权水印任务
     *
     * @param tmpReq - SubmitCopyrightJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitCopyrightJobResponse
     *
     * @param SubmitCopyrightJobRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitCopyrightJobResponse
     */
    public function submitCopyrightJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitCopyrightJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->input) {
            $request->inputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }

        if (null !== $tmpReq->output) {
            $request->outputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->output, 'Output', 'json');
        }

        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->inputShrink) {
            @$query['Input'] = $request->inputShrink;
        }

        if (null !== $request->level) {
            @$query['Level'] = $request->level;
        }

        if (null !== $request->message) {
            @$query['Message'] = $request->message;
        }

        if (null !== $request->outputShrink) {
            @$query['Output'] = $request->outputShrink;
        }

        if (null !== $request->params) {
            @$query['Params'] = $request->params;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->totalTime) {
            @$query['TotalTime'] = $request->totalTime;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitCopyrightJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitCopyrightJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitCopyrightJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 提交版权水印任务
     *
     * @param request - SubmitCopyrightJobRequest
     * @returns SubmitCopyrightJobResponse
     *
     * @param SubmitCopyrightJobRequest $request
     *
     * @return SubmitCopyrightJobResponse
     */
    public function submitCopyrightJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitCopyrightJobWithOptions($request, $runtime);
    }

    /**
     * Submits a human voice cloning job. The value of VoiceId must be the one used during audio check. The system uses this ID to find the cached audio file for training. After you call this operation, the JobId is returned. The training process is asynchronous. During training, you can call the GetCustomizedVoiceJob operation to query information such as the job state.
     *
     * @param request - SubmitCustomizedVoiceJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitCustomizedVoiceJobResponse
     *
     * @param SubmitCustomizedVoiceJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SubmitCustomizedVoiceJobResponse
     */
    public function submitCustomizedVoiceJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->demoAudioMediaURL) {
            @$query['DemoAudioMediaURL'] = $request->demoAudioMediaURL;
        }

        if (null !== $request->voiceId) {
            @$query['VoiceId'] = $request->voiceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitCustomizedVoiceJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitCustomizedVoiceJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitCustomizedVoiceJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Submits a human voice cloning job. The value of VoiceId must be the one used during audio check. The system uses this ID to find the cached audio file for training. After you call this operation, the JobId is returned. The training process is asynchronous. During training, you can call the GetCustomizedVoiceJob operation to query information such as the job state.
     *
     * @param request - SubmitCustomizedVoiceJobRequest
     * @returns SubmitCustomizedVoiceJobResponse
     *
     * @param SubmitCustomizedVoiceJobRequest $request
     *
     * @return SubmitCustomizedVoiceJobResponse
     */
    public function submitCustomizedVoiceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitCustomizedVoiceJobWithOptions($request, $runtime);
    }

    /**
     * Submits a media fingerprint analysis job.
     *
     * @remarks
     *   SubmitDNAJob is an asynchronous operation. After a request is sent, the system returns a request ID and a job ID and runs the task in the background.
     * *   You can call this operation only in the China (Beijing), China (Hangzhou), and China (Shanghai) regions.
     * *   You can submit a text fingerprint analysis job only in the China (Shanghai) region.
     *
     * @param tmpReq - SubmitDNAJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitDNAJobResponse
     *
     * @param SubmitDNAJobRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return SubmitDNAJobResponse
     */
    public function submitDNAJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitDNAJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->input) {
            $request->inputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }

        $query = [];
        if (null !== $request->config) {
            @$query['Config'] = $request->config;
        }

        if (null !== $request->DBId) {
            @$query['DBId'] = $request->DBId;
        }

        if (null !== $request->inputShrink) {
            @$query['Input'] = $request->inputShrink;
        }

        if (null !== $request->ownerAccount) {
            @$query['OwnerAccount'] = $request->ownerAccount;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pipelineId) {
            @$query['PipelineId'] = $request->pipelineId;
        }

        if (null !== $request->primaryKey) {
            @$query['PrimaryKey'] = $request->primaryKey;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitDNAJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitDNAJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitDNAJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Submits a media fingerprint analysis job.
     *
     * @remarks
     *   SubmitDNAJob is an asynchronous operation. After a request is sent, the system returns a request ID and a job ID and runs the task in the background.
     * *   You can call this operation only in the China (Beijing), China (Hangzhou), and China (Shanghai) regions.
     * *   You can submit a text fingerprint analysis job only in the China (Shanghai) region.
     *
     * @param request - SubmitDNAJobRequest
     * @returns SubmitDNAJobResponse
     *
     * @param SubmitDNAJobRequest $request
     *
     * @return SubmitDNAJobResponse
     */
    public function submitDNAJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitDNAJobWithOptions($request, $runtime);
    }

    /**
     * Generates animated charts based on Excel datasheets, such as line, pie, and bar charts. You can modify the line color and font.
     *
     * @remarks
     * This feature is available only in the China (Shanghai) region.
     * *   You can add a title, subtitle, data source, and unit to a chart and specify the font and font size. For supported fonts, see [Fonts](https://help.aliyun.com/document_detail/449567.html).
     * *   This feature provides five styles of animated charts: normal, mystery, lively, business, and green.
     * *   You can set the background color or image.
     * *   You can set the animation duration, size, and bitrate.
     * Examples
     * *   Line chart: [Sample datasheet](https://ice-public-media.oss-cn-shanghai.aliyuncs.com/smart/dynamicChart/line.xlsx), [Effect](https://ice-public-media.oss-cn-shanghai.aliyuncs.com/smart/dynamicChart/line.mp4)
     * *   Bar chart: [Sample datasheet](https://ice-public-media.oss-cn-shanghai.aliyuncs.com/smart/dynamicChart/histgram.xlsx), [Effect](https://ice-public-media.oss-cn-shanghai.aliyuncs.com/smart/dynamicChart/histgram.mp4)
     * *   Pie chart: [Sample datasheet](https://ice-public-media.oss-cn-shanghai.aliyuncs.com/smart/dynamicChart/pie.xlsx), [Effect](https://ice-public-media.oss-cn-shanghai.aliyuncs.com/smart/dynamicChart/pie.mp4)
     * *   Normal: [Effect](https://ice-public-media.oss-cn-shanghai.aliyuncs.com/smart/dynamicChart/Normal.mp4)
     * *   Mystery: [Effect](https://ice-public-media.oss-cn-shanghai.aliyuncs.com/smart/dynamicChart/Mystery.mp4)
     * *   Lively: [Effect](https://ice-public-media.oss-cn-shanghai.aliyuncs.com/smart/dynamicChart/Lively.mp4)
     * *   Business: [Effect](https://ice-public-media.oss-cn-shanghai.aliyuncs.com/smart/dynamicChart/Business.mp4)
     * *   Green: [Effect](https://ice-public-media.oss-cn-shanghai.aliyuncs.com/smart/dynamicChart/Green.mp4)
     *
     * @param request - SubmitDynamicChartJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitDynamicChartJobResponse
     *
     * @param SubmitDynamicChartJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SubmitDynamicChartJobResponse
     */
    public function submitDynamicChartJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->axisParams) {
            @$query['AxisParams'] = $request->axisParams;
        }

        if (null !== $request->background) {
            @$query['Background'] = $request->background;
        }

        if (null !== $request->chartConfig) {
            @$query['ChartConfig'] = $request->chartConfig;
        }

        if (null !== $request->chartTitle) {
            @$query['ChartTitle'] = $request->chartTitle;
        }

        if (null !== $request->chartType) {
            @$query['ChartType'] = $request->chartType;
        }

        if (null !== $request->dataSource) {
            @$query['DataSource'] = $request->dataSource;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->input) {
            @$query['Input'] = $request->input;
        }

        if (null !== $request->outputConfig) {
            @$query['OutputConfig'] = $request->outputConfig;
        }

        if (null !== $request->subtitle) {
            @$query['Subtitle'] = $request->subtitle;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        if (null !== $request->unit) {
            @$query['Unit'] = $request->unit;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitDynamicChartJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitDynamicChartJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Generates animated charts based on Excel datasheets, such as line, pie, and bar charts. You can modify the line color and font.
     *
     * @remarks
     * This feature is available only in the China (Shanghai) region.
     * *   You can add a title, subtitle, data source, and unit to a chart and specify the font and font size. For supported fonts, see [Fonts](https://help.aliyun.com/document_detail/449567.html).
     * *   This feature provides five styles of animated charts: normal, mystery, lively, business, and green.
     * *   You can set the background color or image.
     * *   You can set the animation duration, size, and bitrate.
     * Examples
     * *   Line chart: [Sample datasheet](https://ice-public-media.oss-cn-shanghai.aliyuncs.com/smart/dynamicChart/line.xlsx), [Effect](https://ice-public-media.oss-cn-shanghai.aliyuncs.com/smart/dynamicChart/line.mp4)
     * *   Bar chart: [Sample datasheet](https://ice-public-media.oss-cn-shanghai.aliyuncs.com/smart/dynamicChart/histgram.xlsx), [Effect](https://ice-public-media.oss-cn-shanghai.aliyuncs.com/smart/dynamicChart/histgram.mp4)
     * *   Pie chart: [Sample datasheet](https://ice-public-media.oss-cn-shanghai.aliyuncs.com/smart/dynamicChart/pie.xlsx), [Effect](https://ice-public-media.oss-cn-shanghai.aliyuncs.com/smart/dynamicChart/pie.mp4)
     * *   Normal: [Effect](https://ice-public-media.oss-cn-shanghai.aliyuncs.com/smart/dynamicChart/Normal.mp4)
     * *   Mystery: [Effect](https://ice-public-media.oss-cn-shanghai.aliyuncs.com/smart/dynamicChart/Mystery.mp4)
     * *   Lively: [Effect](https://ice-public-media.oss-cn-shanghai.aliyuncs.com/smart/dynamicChart/Lively.mp4)
     * *   Business: [Effect](https://ice-public-media.oss-cn-shanghai.aliyuncs.com/smart/dynamicChart/Business.mp4)
     * *   Green: [Effect](https://ice-public-media.oss-cn-shanghai.aliyuncs.com/smart/dynamicChart/Green.mp4)
     *
     * @param request - SubmitDynamicChartJobRequest
     * @returns SubmitDynamicChartJobResponse
     *
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
     * Submits an image animation job.
     *
     * @param tmpReq - SubmitDynamicImageJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitDynamicImageJobResponse
     *
     * @param SubmitDynamicImageJobRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return SubmitDynamicImageJobResponse
     */
    public function submitDynamicImageJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitDynamicImageJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->input) {
            $request->inputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }

        if (null !== $tmpReq->output) {
            $request->outputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->output, 'Output', 'json');
        }

        if (null !== $tmpReq->scheduleConfig) {
            $request->scheduleConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->scheduleConfig, 'ScheduleConfig', 'json');
        }

        if (null !== $tmpReq->templateConfig) {
            $request->templateConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->templateConfig, 'TemplateConfig', 'json');
        }

        $query = [];
        if (null !== $request->inputShrink) {
            @$query['Input'] = $request->inputShrink;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->outputShrink) {
            @$query['Output'] = $request->outputShrink;
        }

        if (null !== $request->scheduleConfigShrink) {
            @$query['ScheduleConfig'] = $request->scheduleConfigShrink;
        }

        if (null !== $request->templateConfigShrink) {
            @$query['TemplateConfig'] = $request->templateConfigShrink;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitDynamicImageJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitDynamicImageJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Submits an image animation job.
     *
     * @param request - SubmitDynamicImageJobRequest
     * @returns SubmitDynamicImageJobResponse
     *
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
     * 提交高光提取任务
     *
     * @param request - SubmitHighlightExtractionJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitHighlightExtractionJobResponse
     *
     * @param SubmitHighlightExtractionJobRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return SubmitHighlightExtractionJobResponse
     */
    public function submitHighlightExtractionJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->outputConfig) {
            @$query['OutputConfig'] = $request->outputConfig;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $body = [];
        if (null !== $request->inputConfig) {
            @$body['InputConfig'] = $request->inputConfig;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitHighlightExtractionJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitHighlightExtractionJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitHighlightExtractionJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 提交高光提取任务
     *
     * @param request - SubmitHighlightExtractionJobRequest
     * @returns SubmitHighlightExtractionJobResponse
     *
     * @param SubmitHighlightExtractionJobRequest $request
     *
     * @return SubmitHighlightExtractionJobResponse
     */
    public function submitHighlightExtractionJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitHighlightExtractionJobWithOptions($request, $runtime);
    }

    /**
     * Submits an intelligent production job.
     *
     * @param tmpReq - SubmitIProductionJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitIProductionJobResponse
     *
     * @param SubmitIProductionJobRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return SubmitIProductionJobResponse
     */
    public function submitIProductionJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitIProductionJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->input) {
            $request->inputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }

        if (null !== $tmpReq->output) {
            $request->outputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->output, 'Output', 'json');
        }

        if (null !== $tmpReq->scheduleConfig) {
            $request->scheduleConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->scheduleConfig, 'ScheduleConfig', 'json');
        }

        $query = [];
        if (null !== $request->functionName) {
            @$query['FunctionName'] = $request->functionName;
        }

        if (null !== $request->inputShrink) {
            @$query['Input'] = $request->inputShrink;
        }

        if (null !== $request->jobParams) {
            @$query['JobParams'] = $request->jobParams;
        }

        if (null !== $request->modelId) {
            @$query['ModelId'] = $request->modelId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->outputShrink) {
            @$query['Output'] = $request->outputShrink;
        }

        if (null !== $request->scheduleConfigShrink) {
            @$query['ScheduleConfig'] = $request->scheduleConfigShrink;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitIProductionJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitIProductionJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Submits an intelligent production job.
     *
     * @param request - SubmitIProductionJobRequest
     * @returns SubmitIProductionJobResponse
     *
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
     * Submits a live editing job to merge one or more live stream clips into one video. After a live editing job is submitted, the job is queued in the background for asynchronous processing. You can call the GeLiveEditingJob operation to query the state of the job based on the job ID. You can also call the GetMediaInfo operation to query the information about the generated media asset based on the media asset ID.
     *
     * @remarks
     * Live editing is supported for live streams that are recorded and stored in Object Storage Service (OSS) and ApsaraVideo VOD. If multiple live streams are involved in a single job, only those recorded within the same application are supported for mixed editing. The streams must all be recorded either in OSS or ApsaraVideo VOD.
     *
     * @param request - SubmitLiveEditingJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitLiveEditingJobResponse
     *
     * @param SubmitLiveEditingJobRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SubmitLiveEditingJobResponse
     */
    public function submitLiveEditingJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clips) {
            @$query['Clips'] = $request->clips;
        }

        if (null !== $request->liveStreamConfig) {
            @$query['LiveStreamConfig'] = $request->liveStreamConfig;
        }

        if (null !== $request->mediaProduceConfig) {
            @$query['MediaProduceConfig'] = $request->mediaProduceConfig;
        }

        if (null !== $request->outputMediaConfig) {
            @$query['OutputMediaConfig'] = $request->outputMediaConfig;
        }

        if (null !== $request->outputMediaTarget) {
            @$query['OutputMediaTarget'] = $request->outputMediaTarget;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitLiveEditingJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitLiveEditingJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Submits a live editing job to merge one or more live stream clips into one video. After a live editing job is submitted, the job is queued in the background for asynchronous processing. You can call the GeLiveEditingJob operation to query the state of the job based on the job ID. You can also call the GetMediaInfo operation to query the information about the generated media asset based on the media asset ID.
     *
     * @remarks
     * Live editing is supported for live streams that are recorded and stored in Object Storage Service (OSS) and ApsaraVideo VOD. If multiple live streams are involved in a single job, only those recorded within the same application are supported for mixed editing. The streams must all be recorded either in OSS or ApsaraVideo VOD.
     *
     * @param request - SubmitLiveEditingJobRequest
     * @returns SubmitLiveEditingJobResponse
     *
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
     * Submits a live stream recording job.
     *
     * @remarks
     * You can call this operation to record live streams of ApsaraVideo Live or third-party Real-Time Messaging Protocol (RTMP) live streams. We recommend that you ingest a stream before you call this operation to submit a recording job. If no stream is pulled from the streaming URL, the job attempts to pull a stream for 3 minutes. If the attempt times out, the recording service stops.
     * Before you submit a recording job, you must prepare an Object Storage Service (OSS) or ApsaraVideo VOD bucket. We recommend that you use a storage address configured in Intelligent Media Services (IMS) to facilitate the management and processing of generated recording files.
     * If the preset recording template does not meet your requirements, you can create a custom recording template.
     *
     * @param tmpReq - SubmitLiveRecordJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitLiveRecordJobResponse
     *
     * @param SubmitLiveRecordJobRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return SubmitLiveRecordJobResponse
     */
    public function submitLiveRecordJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitLiveRecordJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->recordOutput) {
            $request->recordOutputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->recordOutput, 'RecordOutput', 'json');
        }

        if (null !== $tmpReq->streamInput) {
            $request->streamInputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->streamInput, 'StreamInput', 'json');
        }

        $body = [];
        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->notifyUrl) {
            @$body['NotifyUrl'] = $request->notifyUrl;
        }

        if (null !== $request->recordOutputShrink) {
            @$body['RecordOutput'] = $request->recordOutputShrink;
        }

        if (null !== $request->streamInputShrink) {
            @$body['StreamInput'] = $request->streamInputShrink;
        }

        if (null !== $request->templateId) {
            @$body['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitLiveRecordJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitLiveRecordJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitLiveRecordJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Submits a live stream recording job.
     *
     * @remarks
     * You can call this operation to record live streams of ApsaraVideo Live or third-party Real-Time Messaging Protocol (RTMP) live streams. We recommend that you ingest a stream before you call this operation to submit a recording job. If no stream is pulled from the streaming URL, the job attempts to pull a stream for 3 minutes. If the attempt times out, the recording service stops.
     * Before you submit a recording job, you must prepare an Object Storage Service (OSS) or ApsaraVideo VOD bucket. We recommend that you use a storage address configured in Intelligent Media Services (IMS) to facilitate the management and processing of generated recording files.
     * If the preset recording template does not meet your requirements, you can create a custom recording template.
     *
     * @param request - SubmitLiveRecordJobRequest
     * @returns SubmitLiveRecordJobResponse
     *
     * @param SubmitLiveRecordJobRequest $request
     *
     * @return SubmitLiveRecordJobResponse
     */
    public function submitLiveRecordJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitLiveRecordJobWithOptions($request, $runtime);
    }

    /**
     * Submits a live stream snapshot job. If the job is submitted during stream ingest, it automatically starts in asynchronous mode. Otherwise, it does not start.
     *
     * @param tmpReq - SubmitLiveSnapshotJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitLiveSnapshotJobResponse
     *
     * @param SubmitLiveSnapshotJobRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return SubmitLiveSnapshotJobResponse
     */
    public function submitLiveSnapshotJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitLiveSnapshotJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->snapshotOutput) {
            $request->snapshotOutputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->snapshotOutput, 'SnapshotOutput', 'json');
        }

        if (null !== $tmpReq->streamInput) {
            $request->streamInputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->streamInput, 'StreamInput', 'json');
        }

        $body = [];
        if (null !== $request->callbackUrl) {
            @$body['CallbackUrl'] = $request->callbackUrl;
        }

        if (null !== $request->jobName) {
            @$body['JobName'] = $request->jobName;
        }

        if (null !== $request->snapshotOutputShrink) {
            @$body['SnapshotOutput'] = $request->snapshotOutputShrink;
        }

        if (null !== $request->streamInputShrink) {
            @$body['StreamInput'] = $request->streamInputShrink;
        }

        if (null !== $request->templateId) {
            @$body['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitLiveSnapshotJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitLiveSnapshotJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitLiveSnapshotJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Submits a live stream snapshot job. If the job is submitted during stream ingest, it automatically starts in asynchronous mode. Otherwise, it does not start.
     *
     * @param request - SubmitLiveSnapshotJobRequest
     * @returns SubmitLiveSnapshotJobResponse
     *
     * @param SubmitLiveSnapshotJobRequest $request
     *
     * @return SubmitLiveSnapshotJobResponse
     */
    public function submitLiveSnapshotJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitLiveSnapshotJobWithOptions($request, $runtime);
    }

    /**
     * Submits a live stream transcoding job.
     *
     * @remarks
     *   When you submit a transcoding job that immediately takes effect, make sure that the input stream can be streamed.
     * *   When you submit a timed transcoding job, make sure that the input stream can be streamed before the specified time.
     *
     * @param tmpReq - SubmitLiveTranscodeJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitLiveTranscodeJobResponse
     *
     * @param SubmitLiveTranscodeJobRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return SubmitLiveTranscodeJobResponse
     */
    public function submitLiveTranscodeJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitLiveTranscodeJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->streamInput) {
            $request->streamInputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->streamInput, 'StreamInput', 'json');
        }

        if (null !== $tmpReq->timedConfig) {
            $request->timedConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->timedConfig, 'TimedConfig', 'json');
        }

        if (null !== $tmpReq->transcodeOutput) {
            $request->transcodeOutputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->transcodeOutput, 'TranscodeOutput', 'json');
        }

        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->startMode) {
            @$query['StartMode'] = $request->startMode;
        }

        if (null !== $request->streamInputShrink) {
            @$query['StreamInput'] = $request->streamInputShrink;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->timedConfigShrink) {
            @$query['TimedConfig'] = $request->timedConfigShrink;
        }

        if (null !== $request->transcodeOutputShrink) {
            @$query['TranscodeOutput'] = $request->transcodeOutputShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitLiveTranscodeJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitLiveTranscodeJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitLiveTranscodeJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Submits a live stream transcoding job.
     *
     * @remarks
     *   When you submit a transcoding job that immediately takes effect, make sure that the input stream can be streamed.
     * *   When you submit a timed transcoding job, make sure that the input stream can be streamed before the specified time.
     *
     * @param request - SubmitLiveTranscodeJobRequest
     * @returns SubmitLiveTranscodeJobResponse
     *
     * @param SubmitLiveTranscodeJobRequest $request
     *
     * @return SubmitLiveTranscodeJobResponse
     */
    public function submitLiveTranscodeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitLiveTranscodeJobWithOptions($request, $runtime);
    }

    /**
     * Submits a structural analysis job for a media asset. For example, you can submit a job to analyze the speaker, translate the video, and obtain the paragraph summary.
     *
     * @param request - SubmitMediaAiAnalysisJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitMediaAiAnalysisJobResponse
     *
     * @param SubmitMediaAiAnalysisJobRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return SubmitMediaAiAnalysisJobResponse
     */
    public function submitMediaAiAnalysisJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->analysisParams) {
            @$query['AnalysisParams'] = $request->analysisParams;
        }

        if (null !== $request->input) {
            @$query['Input'] = $request->input;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitMediaAiAnalysisJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitMediaAiAnalysisJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitMediaAiAnalysisJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Submits a structural analysis job for a media asset. For example, you can submit a job to analyze the speaker, translate the video, and obtain the paragraph summary.
     *
     * @param request - SubmitMediaAiAnalysisJobRequest
     * @returns SubmitMediaAiAnalysisJobResponse
     *
     * @param SubmitMediaAiAnalysisJobRequest $request
     *
     * @return SubmitMediaAiAnalysisJobResponse
     */
    public function submitMediaAiAnalysisJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitMediaAiAnalysisJobWithOptions($request, $runtime);
    }

    /**
     * Submits a content moderation job.
     *
     * @remarks
     * The job that you submit by calling this operation is run in asynchronous mode. The job is added to an ApsaraVideo Media Processing (MPS) queue to be scheduled and run. You can call the [QueryMediaCensorJobDetail](https://help.aliyun.com/document_detail/444847.html) operation or configure an asynchronous notification to obtain the job results.
     *
     * @param tmpReq - SubmitMediaCensorJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitMediaCensorJobResponse
     *
     * @param SubmitMediaCensorJobRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return SubmitMediaCensorJobResponse
     */
    public function submitMediaCensorJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitMediaCensorJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->input) {
            $request->inputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }

        if (null !== $tmpReq->scheduleConfig) {
            $request->scheduleConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->scheduleConfig, 'ScheduleConfig', 'json');
        }

        $query = [];
        if (null !== $request->barrages) {
            @$query['Barrages'] = $request->barrages;
        }

        if (null !== $request->coverImages) {
            @$query['CoverImages'] = $request->coverImages;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->inputShrink) {
            @$query['Input'] = $request->inputShrink;
        }

        if (null !== $request->notifyUrl) {
            @$query['NotifyUrl'] = $request->notifyUrl;
        }

        if (null !== $request->output) {
            @$query['Output'] = $request->output;
        }

        if (null !== $request->scheduleConfigShrink) {
            @$query['ScheduleConfig'] = $request->scheduleConfigShrink;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitMediaCensorJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitMediaCensorJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Submits a content moderation job.
     *
     * @remarks
     * The job that you submit by calling this operation is run in asynchronous mode. The job is added to an ApsaraVideo Media Processing (MPS) queue to be scheduled and run. You can call the [QueryMediaCensorJobDetail](https://help.aliyun.com/document_detail/444847.html) operation or configure an asynchronous notification to obtain the job results.
     *
     * @param request - SubmitMediaCensorJobRequest
     * @returns SubmitMediaCensorJobResponse
     *
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
     * 提交媒体处理任务
     *
     * @param request - SubmitMediaConvertJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitMediaConvertJobResponse
     *
     * @param SubmitMediaConvertJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SubmitMediaConvertJobResponse
     */
    public function submitMediaConvertJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->config) {
            @$query['Config'] = $request->config;
        }

        if (null !== $request->pipelineId) {
            @$query['PipelineId'] = $request->pipelineId;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitMediaConvertJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitMediaConvertJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitMediaConvertJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 提交媒体处理任务
     *
     * @param request - SubmitMediaConvertJobRequest
     * @returns SubmitMediaConvertJobResponse
     *
     * @param SubmitMediaConvertJobRequest $request
     *
     * @return SubmitMediaConvertJobResponse
     */
    public function submitMediaConvertJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitMediaConvertJobWithOptions($request, $runtime);
    }

    /**
     * Submits a media information analysis job in asynchronous mode.
     *
     * @remarks
     * You can call this operation to analyze an input media file by using a callback mechanism or initiating subsequent queries. This operation is suitable for scenarios in which real-time performance is less critical and high concurrency is expected.
     *
     * @param tmpReq - SubmitMediaInfoJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitMediaInfoJobResponse
     *
     * @param SubmitMediaInfoJobRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitMediaInfoJobResponse
     */
    public function submitMediaInfoJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitMediaInfoJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->input) {
            $request->inputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }

        if (null !== $tmpReq->scheduleConfig) {
            $request->scheduleConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->scheduleConfig, 'ScheduleConfig', 'json');
        }

        $query = [];
        if (null !== $request->inputShrink) {
            @$query['Input'] = $request->inputShrink;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->scheduleConfigShrink) {
            @$query['ScheduleConfig'] = $request->scheduleConfigShrink;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitMediaInfoJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitMediaInfoJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Submits a media information analysis job in asynchronous mode.
     *
     * @remarks
     * You can call this operation to analyze an input media file by using a callback mechanism or initiating subsequent queries. This operation is suitable for scenarios in which real-time performance is less critical and high concurrency is expected.
     *
     * @param request - SubmitMediaInfoJobRequest
     * @returns SubmitMediaInfoJobResponse
     *
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
     * Submits a media editing and production job. If you need to perform any form of post-production such as editing and production on video or audio materials, you can call this operation to automate the process.
     *
     * @remarks
     *   This operation returns only the submission result of a media editing and production job. When the submission result is returned, the job may still be in progress. After a media editing and production job is submitted, the job is queued in the background for asynchronous processing.
     * *   The materials referenced in the timeline of an online editing project can be media assets in the media asset library or Object Storage Service (OSS) objects. External URLs or Alibaba Cloud Content Delivery Network (CDN) URLs are not supported. To use an OSS object as a material, you must set MediaUrl to an OSS URL, such as https://your-bucket.oss-region-name.aliyuncs.com/your-object.ext.
     * *   After the production is complete, the output file is automatically registered as a media asset. The media asset first needs to be analyzed. After the media asset is analyzed, you can query the duration and resolution information based on the media asset ID.
     * ## [](#)Limits
     * *   The throttling threshold of this operation is 30 queries per second (QPS).
     *     **
     *     **Note** If the threshold is exceeded, a "Throttling.User" error is returned when you submit an editing job. For more information about how to resolve this issue, see the [FAQ](https://help.aliyun.com/document_detail/453484.html).
     * *   You can create up to 100 video tracks, 100 image tracks, and 100 subtitle tracks in a project.
     * *   The total size of material files cannot exceed 1 TB.
     * *   The OSS buckets in which the materials reside and where the output media assets are stored must be in the same region as the region in which Intelligent Media Services (IMS) is activated.
     * *   An output video must meet the following requirements:
     *     *   Both the width and height must be at least 128 pixels.
     *     *   Both the width and height cannot exceed 4,096 pixels.
     *     *   The shorter side of the video cannot exceed 2,160 pixels.
     *
     * @param request - SubmitMediaProducingJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitMediaProducingJobResponse
     *
     * @param SubmitMediaProducingJobRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return SubmitMediaProducingJobResponse
     */
    public function submitMediaProducingJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->clipsParam) {
            @$query['ClipsParam'] = $request->clipsParam;
        }

        if (null !== $request->editingProduceConfig) {
            @$query['EditingProduceConfig'] = $request->editingProduceConfig;
        }

        if (null !== $request->mediaMetadata) {
            @$query['MediaMetadata'] = $request->mediaMetadata;
        }

        if (null !== $request->outputMediaConfig) {
            @$query['OutputMediaConfig'] = $request->outputMediaConfig;
        }

        if (null !== $request->outputMediaTarget) {
            @$query['OutputMediaTarget'] = $request->outputMediaTarget;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->projectMetadata) {
            @$query['ProjectMetadata'] = $request->projectMetadata;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $body = [];
        if (null !== $request->timeline) {
            @$body['Timeline'] = $request->timeline;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitMediaProducingJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitMediaProducingJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Submits a media editing and production job. If you need to perform any form of post-production such as editing and production on video or audio materials, you can call this operation to automate the process.
     *
     * @remarks
     *   This operation returns only the submission result of a media editing and production job. When the submission result is returned, the job may still be in progress. After a media editing and production job is submitted, the job is queued in the background for asynchronous processing.
     * *   The materials referenced in the timeline of an online editing project can be media assets in the media asset library or Object Storage Service (OSS) objects. External URLs or Alibaba Cloud Content Delivery Network (CDN) URLs are not supported. To use an OSS object as a material, you must set MediaUrl to an OSS URL, such as https://your-bucket.oss-region-name.aliyuncs.com/your-object.ext.
     * *   After the production is complete, the output file is automatically registered as a media asset. The media asset first needs to be analyzed. After the media asset is analyzed, you can query the duration and resolution information based on the media asset ID.
     * ## [](#)Limits
     * *   The throttling threshold of this operation is 30 queries per second (QPS).
     *     **
     *     **Note** If the threshold is exceeded, a "Throttling.User" error is returned when you submit an editing job. For more information about how to resolve this issue, see the [FAQ](https://help.aliyun.com/document_detail/453484.html).
     * *   You can create up to 100 video tracks, 100 image tracks, and 100 subtitle tracks in a project.
     * *   The total size of material files cannot exceed 1 TB.
     * *   The OSS buckets in which the materials reside and where the output media assets are stored must be in the same region as the region in which Intelligent Media Services (IMS) is activated.
     * *   An output video must meet the following requirements:
     *     *   Both the width and height must be at least 128 pixels.
     *     *   Both the width and height cannot exceed 4,096 pixels.
     *     *   The shorter side of the video cannot exceed 2,160 pixels.
     *
     * @param request - SubmitMediaProducingJobRequest
     * @returns SubmitMediaProducingJobResponse
     *
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
     * Submits a packaging job.
     *
     * @param tmpReq - SubmitPackageJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitPackageJobResponse
     *
     * @param SubmitPackageJobRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return SubmitPackageJobResponse
     */
    public function submitPackageJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitPackageJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->inputs) {
            $request->inputsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->inputs, 'Inputs', 'json');
        }

        if (null !== $tmpReq->output) {
            $request->outputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->output, 'Output', 'json');
        }

        if (null !== $tmpReq->scheduleConfig) {
            $request->scheduleConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->scheduleConfig, 'ScheduleConfig', 'json');
        }

        $query = [];
        if (null !== $request->inputsShrink) {
            @$query['Inputs'] = $request->inputsShrink;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->outputShrink) {
            @$query['Output'] = $request->outputShrink;
        }

        if (null !== $request->scheduleConfigShrink) {
            @$query['ScheduleConfig'] = $request->scheduleConfigShrink;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitPackageJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitPackageJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitPackageJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Submits a packaging job.
     *
     * @param request - SubmitPackageJobRequest
     * @returns SubmitPackageJobResponse
     *
     * @param SubmitPackageJobRequest $request
     *
     * @return SubmitPackageJobResponse
     */
    public function submitPackageJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitPackageJobWithOptions($request, $runtime);
    }

    /**
     * 提交工程导出任务
     *
     * @param request - SubmitProjectExportJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitProjectExportJobResponse
     *
     * @param SubmitProjectExportJobRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SubmitProjectExportJobResponse
     */
    public function submitProjectExportJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->exportType) {
            @$query['ExportType'] = $request->exportType;
        }

        if (null !== $request->outputMediaConfig) {
            @$query['OutputMediaConfig'] = $request->outputMediaConfig;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $body = [];
        if (null !== $request->timeline) {
            @$body['Timeline'] = $request->timeline;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitProjectExportJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitProjectExportJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitProjectExportJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 提交工程导出任务
     *
     * @param request - SubmitProjectExportJobRequest
     * @returns SubmitProjectExportJobResponse
     *
     * @param SubmitProjectExportJobRequest $request
     *
     * @return SubmitProjectExportJobResponse
     */
    public function submitProjectExportJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitProjectExportJobWithOptions($request, $runtime);
    }

    /**
     * 提交高燃混剪任务
     *
     * @param request - SubmitScreenMediaHighlightsJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitScreenMediaHighlightsJobResponse
     *
     * @param SubmitScreenMediaHighlightsJobRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return SubmitScreenMediaHighlightsJobResponse
     */
    public function submitScreenMediaHighlightsJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->outputConfig) {
            @$query['OutputConfig'] = $request->outputConfig;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $body = [];
        if (null !== $request->editingConfig) {
            @$body['EditingConfig'] = $request->editingConfig;
        }

        if (null !== $request->inputConfig) {
            @$body['InputConfig'] = $request->inputConfig;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitScreenMediaHighlightsJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitScreenMediaHighlightsJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitScreenMediaHighlightsJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 提交高燃混剪任务
     *
     * @param request - SubmitScreenMediaHighlightsJobRequest
     * @returns SubmitScreenMediaHighlightsJobResponse
     *
     * @param SubmitScreenMediaHighlightsJobRequest $request
     *
     * @return SubmitScreenMediaHighlightsJobResponse
     */
    public function submitScreenMediaHighlightsJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitScreenMediaHighlightsJobWithOptions($request, $runtime);
    }

    /**
     * Submits a smart tagging job.
     *
     * @remarks
     * Before you call this operation to submit a smart tagging job, you must add a smart tagging template and specify the analysis types that you want to use in the template. For more information, see CreateCustomTemplate. You can use the smart tagging feature only in the China (Beijing), China (Shanghai), and China (Hangzhou) regions. By default, an ApsaraVideo Media Processing (MPS) queue can process a maximum of two concurrent smart tagging jobs. If you need to process more concurrent smart tagging jobs, submit a ticket to contact Alibaba Cloud Technical Support for evaluation and configuration.
     *
     * @param tmpReq - SubmitSmarttagJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitSmarttagJobResponse
     *
     * @param SubmitSmarttagJobRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return SubmitSmarttagJobResponse
     */
    public function submitSmarttagJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitSmarttagJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->input) {
            $request->inputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }

        if (null !== $tmpReq->scheduleConfig) {
            $request->scheduleConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->scheduleConfig, 'ScheduleConfig', 'json');
        }

        $query = [];
        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->contentAddr) {
            @$query['ContentAddr'] = $request->contentAddr;
        }

        if (null !== $request->contentType) {
            @$query['ContentType'] = $request->contentType;
        }

        if (null !== $request->inputShrink) {
            @$query['Input'] = $request->inputShrink;
        }

        if (null !== $request->notifyUrl) {
            @$query['NotifyUrl'] = $request->notifyUrl;
        }

        if (null !== $request->params) {
            @$query['Params'] = $request->params;
        }

        if (null !== $request->scheduleConfigShrink) {
            @$query['ScheduleConfig'] = $request->scheduleConfigShrink;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
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
            'action'      => 'SubmitSmarttagJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitSmarttagJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitSmarttagJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Submits a smart tagging job.
     *
     * @remarks
     * Before you call this operation to submit a smart tagging job, you must add a smart tagging template and specify the analysis types that you want to use in the template. For more information, see CreateCustomTemplate. You can use the smart tagging feature only in the China (Beijing), China (Shanghai), and China (Hangzhou) regions. By default, an ApsaraVideo Media Processing (MPS) queue can process a maximum of two concurrent smart tagging jobs. If you need to process more concurrent smart tagging jobs, submit a ticket to contact Alibaba Cloud Technical Support for evaluation and configuration.
     *
     * @param request - SubmitSmarttagJobRequest
     * @returns SubmitSmarttagJobResponse
     *
     * @param SubmitSmarttagJobRequest $request
     *
     * @return SubmitSmarttagJobResponse
     */
    public function submitSmarttagJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSmarttagJobWithOptions($request, $runtime);
    }

    /**
     * Submits a snapshot job.
     *
     * @param tmpReq - SubmitSnapshotJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitSnapshotJobResponse
     *
     * @param SubmitSnapshotJobRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return SubmitSnapshotJobResponse
     */
    public function submitSnapshotJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitSnapshotJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->input) {
            $request->inputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }

        if (null !== $tmpReq->output) {
            $request->outputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->output, 'Output', 'json');
        }

        if (null !== $tmpReq->scheduleConfig) {
            $request->scheduleConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->scheduleConfig, 'ScheduleConfig', 'json');
        }

        if (null !== $tmpReq->templateConfig) {
            $request->templateConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->templateConfig, 'TemplateConfig', 'json');
        }

        $query = [];
        if (null !== $request->inputShrink) {
            @$query['Input'] = $request->inputShrink;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->outputShrink) {
            @$query['Output'] = $request->outputShrink;
        }

        if (null !== $request->scheduleConfigShrink) {
            @$query['ScheduleConfig'] = $request->scheduleConfigShrink;
        }

        if (null !== $request->templateConfigShrink) {
            @$query['TemplateConfig'] = $request->templateConfigShrink;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitSnapshotJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitSnapshotJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Submits a snapshot job.
     *
     * @param request - SubmitSnapshotJobRequest
     * @returns SubmitSnapshotJobResponse
     *
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
     * Submits a sports highlights job to generate a highlights video of an event based on event materials that contain commentary.
     *
     * @param request - SubmitSportsHighlightsJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitSportsHighlightsJobResponse
     *
     * @param SubmitSportsHighlightsJobRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SubmitSportsHighlightsJobResponse
     */
    public function submitSportsHighlightsJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->outputConfig) {
            @$query['OutputConfig'] = $request->outputConfig;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $body = [];
        if (null !== $request->inputConfig) {
            @$body['InputConfig'] = $request->inputConfig;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SubmitSportsHighlightsJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitSportsHighlightsJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitSportsHighlightsJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Submits a sports highlights job to generate a highlights video of an event based on event materials that contain commentary.
     *
     * @param request - SubmitSportsHighlightsJobRequest
     * @returns SubmitSportsHighlightsJobResponse
     *
     * @param SubmitSportsHighlightsJobRequest $request
     *
     * @return SubmitSportsHighlightsJobResponse
     */
    public function submitSportsHighlightsJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSportsHighlightsJobWithOptions($request, $runtime);
    }

    /**
     * Submits a standard human voice cloning job. After you call this operation, the JobId is returned. The training process is asynchronous. During training, you can call the GetCustomizedVoiceJob operation to query information such as the job state.
     *
     * @param request - SubmitStandardCustomizedVoiceJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitStandardCustomizedVoiceJobResponse
     *
     * @param SubmitStandardCustomizedVoiceJobRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return SubmitStandardCustomizedVoiceJobResponse
     */
    public function submitStandardCustomizedVoiceJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->audios) {
            @$query['Audios'] = $request->audios;
        }

        if (null !== $request->authentication) {
            @$query['Authentication'] = $request->authentication;
        }

        if (null !== $request->demoAudioMediaURL) {
            @$query['DemoAudioMediaURL'] = $request->demoAudioMediaURL;
        }

        if (null !== $request->gender) {
            @$query['Gender'] = $request->gender;
        }

        if (null !== $request->voiceName) {
            @$query['VoiceName'] = $request->voiceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitStandardCustomizedVoiceJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitStandardCustomizedVoiceJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitStandardCustomizedVoiceJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Submits a standard human voice cloning job. After you call this operation, the JobId is returned. The training process is asynchronous. During training, you can call the GetCustomizedVoiceJob operation to query information such as the job state.
     *
     * @param request - SubmitStandardCustomizedVoiceJobRequest
     * @returns SubmitStandardCustomizedVoiceJobResponse
     *
     * @param SubmitStandardCustomizedVoiceJobRequest $request
     *
     * @return SubmitStandardCustomizedVoiceJobResponse
     */
    public function submitStandardCustomizedVoiceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitStandardCustomizedVoiceJobWithOptions($request, $runtime);
    }

    /**
     * Submits a media file in synchronous mode for media information analysis.
     *
     * @remarks
     * You can call this operation to analyze an input media file in synchronous mode. This operation is suitable for scenarios that require high real-time performance and low concurrency. If it takes an extended period of time to obtain the media information about the input media file, the request may time out or the obtained information may be inaccurate. We recommend that you call the [SubmitMediaInfoJob](https://help.aliyun.com/document_detail/441222.html) operation to obtain media information.
     *
     * @param tmpReq - SubmitSyncMediaInfoJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitSyncMediaInfoJobResponse
     *
     * @param SubmitSyncMediaInfoJobRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return SubmitSyncMediaInfoJobResponse
     */
    public function submitSyncMediaInfoJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitSyncMediaInfoJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->input) {
            $request->inputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }

        if (null !== $tmpReq->scheduleConfig) {
            $request->scheduleConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->scheduleConfig, 'ScheduleConfig', 'json');
        }

        $query = [];
        if (null !== $request->inputShrink) {
            @$query['Input'] = $request->inputShrink;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->scheduleConfigShrink) {
            @$query['ScheduleConfig'] = $request->scheduleConfigShrink;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitSyncMediaInfoJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitSyncMediaInfoJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Submits a media file in synchronous mode for media information analysis.
     *
     * @remarks
     * You can call this operation to analyze an input media file in synchronous mode. This operation is suitable for scenarios that require high real-time performance and low concurrency. If it takes an extended period of time to obtain the media information about the input media file, the request may time out or the obtained information may be inaccurate. We recommend that you call the [SubmitMediaInfoJob](https://help.aliyun.com/document_detail/441222.html) operation to obtain media information.
     *
     * @param request - SubmitSyncMediaInfoJobRequest
     * @returns SubmitSyncMediaInfoJobResponse
     *
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
     * Submits a text generation job to generate marketing copies based on keywords and the requirements for the word count and number of output copies. The word count of the output copies may differ from the specified word count. After the job is submitted, you can call the GetSmartHandleJob operation to obtain the job state and result based on the job ID.
     *
     * @param request - SubmitTextGenerateJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitTextGenerateJobResponse
     *
     * @param SubmitTextGenerateJobRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SubmitTextGenerateJobResponse
     */
    public function submitTextGenerateJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->generateConfig) {
            @$query['GenerateConfig'] = $request->generateConfig;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitTextGenerateJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitTextGenerateJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitTextGenerateJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Submits a text generation job to generate marketing copies based on keywords and the requirements for the word count and number of output copies. The word count of the output copies may differ from the specified word count. After the job is submitted, you can call the GetSmartHandleJob operation to obtain the job state and result based on the job ID.
     *
     * @param request - SubmitTextGenerateJobRequest
     * @returns SubmitTextGenerateJobResponse
     *
     * @param SubmitTextGenerateJobRequest $request
     *
     * @return SubmitTextGenerateJobResponse
     */
    public function submitTextGenerateJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitTextGenerateJobWithOptions($request, $runtime);
    }

    /**
     * 提交视频溯源水印ab流任务
     *
     * @param tmpReq - SubmitTraceAbJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitTraceAbJobResponse
     *
     * @param SubmitTraceAbJobRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return SubmitTraceAbJobResponse
     */
    public function submitTraceAbJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitTraceAbJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->input) {
            $request->inputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }

        if (null !== $tmpReq->output) {
            $request->outputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->output, 'Output', 'json');
        }

        $query = [];
        if (null !== $request->cipherBase64ed) {
            @$query['CipherBase64ed'] = $request->cipherBase64ed;
        }

        if (null !== $request->inputShrink) {
            @$query['Input'] = $request->inputShrink;
        }

        if (null !== $request->level) {
            @$query['Level'] = $request->level;
        }

        if (null !== $request->outputShrink) {
            @$query['Output'] = $request->outputShrink;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->totalTime) {
            @$query['TotalTime'] = $request->totalTime;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitTraceAbJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitTraceAbJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitTraceAbJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 提交视频溯源水印ab流任务
     *
     * @param request - SubmitTraceAbJobRequest
     * @returns SubmitTraceAbJobResponse
     *
     * @param SubmitTraceAbJobRequest $request
     *
     * @return SubmitTraceAbJobResponse
     */
    public function submitTraceAbJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitTraceAbJobWithOptions($request, $runtime);
    }

    /**
     * 提交溯源水印提取任务
     *
     * @param tmpReq - SubmitTraceExtractJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitTraceExtractJobResponse
     *
     * @param SubmitTraceExtractJobRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return SubmitTraceExtractJobResponse
     */
    public function submitTraceExtractJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitTraceExtractJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->input) {
            $request->inputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }

        $query = [];
        if (null !== $request->inputShrink) {
            @$query['Input'] = $request->inputShrink;
        }

        if (null !== $request->params) {
            @$query['Params'] = $request->params;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitTraceExtractJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitTraceExtractJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitTraceExtractJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 提交溯源水印提取任务
     *
     * @param request - SubmitTraceExtractJobRequest
     * @returns SubmitTraceExtractJobResponse
     *
     * @param SubmitTraceExtractJobRequest $request
     *
     * @return SubmitTraceExtractJobResponse
     */
    public function submitTraceExtractJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitTraceExtractJobWithOptions($request, $runtime);
    }

    /**
     * 提交视频溯源水印m3u8文件任务
     *
     * @param tmpReq - SubmitTraceM3u8JobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitTraceM3u8JobResponse
     *
     * @param SubmitTraceM3u8JobRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitTraceM3u8JobResponse
     */
    public function submitTraceM3u8JobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitTraceM3u8JobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->output) {
            $request->outputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->output, 'Output', 'json');
        }

        $query = [];
        if (null !== $request->keyUri) {
            @$query['KeyUri'] = $request->keyUri;
        }

        if (null !== $request->outputShrink) {
            @$query['Output'] = $request->outputShrink;
        }

        if (null !== $request->params) {
            @$query['Params'] = $request->params;
        }

        if (null !== $request->trace) {
            @$query['Trace'] = $request->trace;
        }

        if (null !== $request->traceMediaId) {
            @$query['TraceMediaId'] = $request->traceMediaId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'SubmitTraceM3u8Job',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitTraceM3u8JobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitTraceM3u8JobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 提交视频溯源水印m3u8文件任务
     *
     * @param request - SubmitTraceM3u8JobRequest
     * @returns SubmitTraceM3u8JobResponse
     *
     * @param SubmitTraceM3u8JobRequest $request
     *
     * @return SubmitTraceM3u8JobResponse
     */
    public function submitTraceM3u8Job($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitTraceM3u8JobWithOptions($request, $runtime);
    }

    /**
     * Submits a transcoding job.
     *
     * @param tmpReq - SubmitTranscodeJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns SubmitTranscodeJobResponse
     *
     * @param SubmitTranscodeJobRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return SubmitTranscodeJobResponse
     */
    public function submitTranscodeJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SubmitTranscodeJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->inputGroup) {
            $request->inputGroupShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->inputGroup, 'InputGroup', 'json');
        }

        if (null !== $tmpReq->outputGroup) {
            $request->outputGroupShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->outputGroup, 'OutputGroup', 'json');
        }

        if (null !== $tmpReq->scheduleConfig) {
            $request->scheduleConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->scheduleConfig, 'ScheduleConfig', 'json');
        }

        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->inputGroupShrink) {
            @$query['InputGroup'] = $request->inputGroupShrink;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->outputGroupShrink) {
            @$query['OutputGroup'] = $request->outputGroupShrink;
        }

        if (null !== $request->scheduleConfigShrink) {
            @$query['ScheduleConfig'] = $request->scheduleConfigShrink;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitTranscodeJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitTranscodeJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Submits a transcoding job.
     *
     * @param request - SubmitTranscodeJobRequest
     * @returns SubmitTranscodeJobResponse
     *
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
     * Submits a video translation job. You can call this operation to translate subtitles in a video and audio to a specific language. Lip-sync adaptation will be supported in the future.
     *
     * @remarks
     * After you call this operation to submit a video translation job, the system returns a job ID. You can call the GetSmartHandleJob operation based on the job ID to obtain the status and result information of the job.
     *
     * @param request - SubmitVideoTranslationJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
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
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->editingConfig) {
            @$query['EditingConfig'] = $request->editingConfig;
        }

        if (null !== $request->inputConfig) {
            @$query['InputConfig'] = $request->inputConfig;
        }

        if (null !== $request->outputConfig) {
            @$query['OutputConfig'] = $request->outputConfig;
        }

        if (null !== $request->signature) {
            @$query['Signature'] = $request->signature;
        }

        if (null !== $request->signatureMehtod) {
            @$query['SignatureMehtod'] = $request->signatureMehtod;
        }

        if (null !== $request->signatureNonce) {
            @$query['SignatureNonce'] = $request->signatureNonce;
        }

        if (null !== $request->signatureType) {
            @$query['SignatureType'] = $request->signatureType;
        }

        if (null !== $request->signatureVersion) {
            @$query['SignatureVersion'] = $request->signatureVersion;
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
            'action'      => 'SubmitVideoTranslationJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return SubmitVideoTranslationJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitVideoTranslationJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Submits a video translation job. You can call this operation to translate subtitles in a video and audio to a specific language. Lip-sync adaptation will be supported in the future.
     *
     * @remarks
     * After you call this operation to submit a video translation job, the system returns a job ID. You can call the GetSmartHandleJob operation based on the job ID to obtain the status and result information of the job.
     *
     * @param request - SubmitVideoTranslationJobRequest
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
     * 切换真人客服接管模式.
     *
     * @param request - TakeoverAIAgentCallRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns TakeoverAIAgentCallResponse
     *
     * @param TakeoverAIAgentCallRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return TakeoverAIAgentCallResponse
     */
    public function takeoverAIAgentCallWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->humanAgentUserId) {
            @$query['HumanAgentUserId'] = $request->humanAgentUserId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->requireToken) {
            @$query['RequireToken'] = $request->requireToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'TakeoverAIAgentCall',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return TakeoverAIAgentCallResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return TakeoverAIAgentCallResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 切换真人客服接管模式.
     *
     * @param request - TakeoverAIAgentCallRequest
     * @returns TakeoverAIAgentCallResponse
     *
     * @param TakeoverAIAgentCallRequest $request
     *
     * @return TakeoverAIAgentCallResponse
     */
    public function takeoverAIAgentCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->takeoverAIAgentCallWithOptions($request, $runtime);
    }

    /**
     * 修改实例的配置.
     *
     * @param tmpReq - UpdateAIAgentInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateAIAgentInstanceResponse
     *
     * @param UpdateAIAgentInstanceRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateAIAgentInstanceResponse
     */
    public function updateAIAgentInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateAIAgentInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->templateConfig) {
            $request->templateConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->templateConfig, 'TemplateConfig', 'json');
        }

        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->templateConfigShrink) {
            @$query['TemplateConfig'] = $request->templateConfigShrink;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAIAgentInstance',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateAIAgentInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateAIAgentInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 修改实例的配置.
     *
     * @param request - UpdateAIAgentInstanceRequest
     * @returns UpdateAIAgentInstanceResponse
     *
     * @param UpdateAIAgentInstanceRequest $request
     *
     * @return UpdateAIAgentInstanceResponse
     */
    public function updateAIAgentInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAIAgentInstanceWithOptions($request, $runtime);
    }

    /**
     * 更新广告插入配置.
     *
     * @param request - UpdateAdInsertionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateAdInsertionResponse
     *
     * @param UpdateAdInsertionRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateAdInsertionResponse
     */
    public function updateAdInsertionWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->adMarkerPassthrough) {
            @$body['AdMarkerPassthrough'] = $request->adMarkerPassthrough;
        }

        if (null !== $request->adsUrl) {
            @$body['AdsUrl'] = $request->adsUrl;
        }

        if (null !== $request->cdnAdSegmentUrlPrefix) {
            @$body['CdnAdSegmentUrlPrefix'] = $request->cdnAdSegmentUrlPrefix;
        }

        if (null !== $request->cdnContentSegmentUrlPrefix) {
            @$body['CdnContentSegmentUrlPrefix'] = $request->cdnContentSegmentUrlPrefix;
        }

        if (null !== $request->configAliases) {
            @$body['ConfigAliases'] = $request->configAliases;
        }

        if (null !== $request->contentUrlPrefix) {
            @$body['ContentUrlPrefix'] = $request->contentUrlPrefix;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->personalizationThreshold) {
            @$body['PersonalizationThreshold'] = $request->personalizationThreshold;
        }

        if (null !== $request->slateAdUrl) {
            @$body['SlateAdUrl'] = $request->slateAdUrl;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateAdInsertion',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateAdInsertionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateAdInsertionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新广告插入配置.
     *
     * @param request - UpdateAdInsertionRequest
     * @returns UpdateAdInsertionResponse
     *
     * @param UpdateAdInsertionRequest $request
     *
     * @return UpdateAdInsertionResponse
     */
    public function updateAdInsertion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAdInsertionWithOptions($request, $runtime);
    }

    /**
     * Modifies a digital human training job. You can modify the basic information or update parameters such as Video and Transparent for retraining if the training failed.
     *
     * @param request - UpdateAvatarTrainingJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateAvatarTrainingJobResponse
     *
     * @param UpdateAvatarTrainingJobRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return UpdateAvatarTrainingJobResponse
     */
    public function updateAvatarTrainingJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->avatarDescription) {
            @$query['AvatarDescription'] = $request->avatarDescription;
        }

        if (null !== $request->avatarName) {
            @$query['AvatarName'] = $request->avatarName;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->portrait) {
            @$query['Portrait'] = $request->portrait;
        }

        if (null !== $request->thumbnail) {
            @$query['Thumbnail'] = $request->thumbnail;
        }

        if (null !== $request->transparent) {
            @$query['Transparent'] = $request->transparent;
        }

        if (null !== $request->video) {
            @$query['Video'] = $request->video;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAvatarTrainingJob',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateAvatarTrainingJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateAvatarTrainingJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies a digital human training job. You can modify the basic information or update parameters such as Video and Transparent for retraining if the training failed.
     *
     * @param request - UpdateAvatarTrainingJobRequest
     * @returns UpdateAvatarTrainingJobResponse
     *
     * @param UpdateAvatarTrainingJobRequest $request
     *
     * @return UpdateAvatarTrainingJobResponse
     */
    public function updateAvatarTrainingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAvatarTrainingJobWithOptions($request, $runtime);
    }

    /**
     * Updates a category.
     *
     * @remarks
     * After you create a media asset category, you can call this operation to find the category based on the category ID and change the name of the category.
     *
     * @param request - UpdateCategoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateCategoryResponse
     *
     * @param UpdateCategoryRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateCategoryResponse
     */
    public function updateCategoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cateId) {
            @$query['CateId'] = $request->cateId;
        }

        if (null !== $request->cateName) {
            @$query['CateName'] = $request->cateName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateCategoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a category.
     *
     * @remarks
     * After you create a media asset category, you can call this operation to find the category based on the category ID and change the name of the category.
     *
     * @param request - UpdateCategoryRequest
     * @returns UpdateCategoryResponse
     *
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
     * 更新频道.
     *
     * @param request - UpdateChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateChannelResponse
     *
     * @param UpdateChannelRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateChannelResponse
     */
    public function updateChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->accessPolicy) {
            @$query['AccessPolicy'] = $request->accessPolicy;
        }

        if (null !== $request->accessToken) {
            @$query['AccessToken'] = $request->accessToken;
        }

        if (null !== $request->channelName) {
            @$query['ChannelName'] = $request->channelName;
        }

        if (null !== $request->fillerSourceLocationName) {
            @$query['FillerSourceLocationName'] = $request->fillerSourceLocationName;
        }

        if (null !== $request->fillerSourceName) {
            @$query['FillerSourceName'] = $request->fillerSourceName;
        }

        if (null !== $request->outPutConfigList) {
            @$query['OutPutConfigList'] = $request->outPutConfigList;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateChannel',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateChannelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateChannelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新频道.
     *
     * @param request - UpdateChannelRequest
     * @returns UpdateChannelResponse
     *
     * @param UpdateChannelRequest $request
     *
     * @return UpdateChannelResponse
     */
    public function updateChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateChannelWithOptions($request, $runtime);
    }

    /**
     * Updates a custom template.
     *
     * @param request - UpdateCustomTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateCustomTemplateResponse
     *
     * @param UpdateCustomTemplateRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateCustomTemplateResponse
     */
    public function updateCustomTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->templateConfig) {
            @$query['TemplateConfig'] = $request->templateConfig;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateCustomTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateCustomTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a custom template.
     *
     * @param request - UpdateCustomTemplateRequest
     * @returns UpdateCustomTemplateResponse
     *
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
     * Updates a personalized human voice. Only the media asset ID of the sample audio file can be modified.
     *
     * @param request - UpdateCustomizedVoiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateCustomizedVoiceResponse
     *
     * @param UpdateCustomizedVoiceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateCustomizedVoiceResponse
     */
    public function updateCustomizedVoiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->demoAudioMediaId) {
            @$query['DemoAudioMediaId'] = $request->demoAudioMediaId;
        }

        if (null !== $request->voiceId) {
            @$query['VoiceId'] = $request->voiceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateCustomizedVoice',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateCustomizedVoiceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateCustomizedVoiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates a personalized human voice. Only the media asset ID of the sample audio file can be modified.
     *
     * @param request - UpdateCustomizedVoiceRequest
     * @returns UpdateCustomizedVoiceResponse
     *
     * @param UpdateCustomizedVoiceRequest $request
     *
     * @return UpdateCustomizedVoiceResponse
     */
    public function updateCustomizedVoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCustomizedVoiceWithOptions($request, $runtime);
    }

    /**
     * Modifies an online editing project. You can call this operation to modify the configurations such as the title, timeline, and thumbnail of an online editing project.
     *
     * @param request - UpdateEditingProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateEditingProjectResponse
     *
     * @param UpdateEditingProjectRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateEditingProjectResponse
     */
    public function updateEditingProjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessStatus) {
            @$query['BusinessStatus'] = $request->businessStatus;
        }

        if (null !== $request->clipsParam) {
            @$query['ClipsParam'] = $request->clipsParam;
        }

        if (null !== $request->coverURL) {
            @$query['CoverURL'] = $request->coverURL;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->title) {
            @$query['Title'] = $request->title;
        }

        $body = [];
        if (null !== $request->timeline) {
            @$body['Timeline'] = $request->timeline;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateEditingProjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateEditingProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies an online editing project. You can call this operation to modify the configurations such as the title, timeline, and thumbnail of an online editing project.
     *
     * @param request - UpdateEditingProjectRequest
     * @returns UpdateEditingProjectResponse
     *
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
     * 更新实时打包频道.
     *
     * @param request - UpdateLivePackageChannelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateLivePackageChannelResponse
     *
     * @param UpdateLivePackageChannelRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateLivePackageChannelResponse
     */
    public function updateLivePackageChannelWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->channelName) {
            @$body['ChannelName'] = $request->channelName;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->groupName) {
            @$body['GroupName'] = $request->groupName;
        }

        if (null !== $request->protocol) {
            @$body['Protocol'] = $request->protocol;
        }

        if (null !== $request->segmentCount) {
            @$body['SegmentCount'] = $request->segmentCount;
        }

        if (null !== $request->segmentDuration) {
            @$body['SegmentDuration'] = $request->segmentDuration;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateLivePackageChannel',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateLivePackageChannelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateLivePackageChannelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新实时打包频道.
     *
     * @param request - UpdateLivePackageChannelRequest
     * @returns UpdateLivePackageChannelResponse
     *
     * @param UpdateLivePackageChannelRequest $request
     *
     * @return UpdateLivePackageChannelResponse
     */
    public function updateLivePackageChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLivePackageChannelWithOptions($request, $runtime);
    }

    /**
     * 更新实时打包频道.
     *
     * @param request - UpdateLivePackageChannelCredentialsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateLivePackageChannelCredentialsResponse
     *
     * @param UpdateLivePackageChannelCredentialsRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return UpdateLivePackageChannelCredentialsResponse
     */
    public function updateLivePackageChannelCredentialsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->channelName) {
            @$body['ChannelName'] = $request->channelName;
        }

        if (null !== $request->groupName) {
            @$body['GroupName'] = $request->groupName;
        }

        if (null !== $request->rotateCredentials) {
            @$body['RotateCredentials'] = $request->rotateCredentials;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateLivePackageChannelCredentials',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateLivePackageChannelCredentialsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateLivePackageChannelCredentialsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新实时打包频道.
     *
     * @param request - UpdateLivePackageChannelCredentialsRequest
     * @returns UpdateLivePackageChannelCredentialsResponse
     *
     * @param UpdateLivePackageChannelCredentialsRequest $request
     *
     * @return UpdateLivePackageChannelCredentialsResponse
     */
    public function updateLivePackageChannelCredentials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLivePackageChannelCredentialsWithOptions($request, $runtime);
    }

    /**
     * 修改直播打包频道组.
     *
     * @param request - UpdateLivePackageChannelGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateLivePackageChannelGroupResponse
     *
     * @param UpdateLivePackageChannelGroupRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UpdateLivePackageChannelGroupResponse
     */
    public function updateLivePackageChannelGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->groupName) {
            @$body['GroupName'] = $request->groupName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateLivePackageChannelGroup',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateLivePackageChannelGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateLivePackageChannelGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 修改直播打包频道组.
     *
     * @param request - UpdateLivePackageChannelGroupRequest
     * @returns UpdateLivePackageChannelGroupResponse
     *
     * @param UpdateLivePackageChannelGroupRequest $request
     *
     * @return UpdateLivePackageChannelGroupResponse
     */
    public function updateLivePackageChannelGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLivePackageChannelGroupWithOptions($request, $runtime);
    }

    /**
     * 修改实时打包源站端点.
     *
     * @param request - UpdateLivePackageOriginEndpointRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateLivePackageOriginEndpointResponse
     *
     * @param UpdateLivePackageOriginEndpointRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateLivePackageOriginEndpointResponse
     */
    public function updateLivePackageOriginEndpointWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->authorizationCode) {
            @$body['AuthorizationCode'] = $request->authorizationCode;
        }

        if (null !== $request->channelName) {
            @$body['ChannelName'] = $request->channelName;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->endpointName) {
            @$body['EndpointName'] = $request->endpointName;
        }

        if (null !== $request->groupName) {
            @$body['GroupName'] = $request->groupName;
        }

        if (null !== $request->ipBlacklist) {
            @$body['IpBlacklist'] = $request->ipBlacklist;
        }

        if (null !== $request->ipWhitelist) {
            @$body['IpWhitelist'] = $request->ipWhitelist;
        }

        if (null !== $request->manifestName) {
            @$body['ManifestName'] = $request->manifestName;
        }

        if (null !== $request->protocol) {
            @$body['Protocol'] = $request->protocol;
        }

        if (null !== $request->timeshiftVision) {
            @$body['TimeshiftVision'] = $request->timeshiftVision;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateLivePackageOriginEndpoint',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateLivePackageOriginEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateLivePackageOriginEndpointResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 修改实时打包源站端点.
     *
     * @param request - UpdateLivePackageOriginEndpointRequest
     * @returns UpdateLivePackageOriginEndpointResponse
     *
     * @param UpdateLivePackageOriginEndpointRequest $request
     *
     * @return UpdateLivePackageOriginEndpointResponse
     */
    public function updateLivePackageOriginEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLivePackageOriginEndpointWithOptions($request, $runtime);
    }

    /**
     * Updates the information about a live stream recording template.
     *
     * @remarks
     * Only user-created templates can be updated. The preset template cannot be updated.
     *
     * @param tmpReq - UpdateLiveRecordTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateLiveRecordTemplateResponse
     *
     * @param UpdateLiveRecordTemplateRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateLiveRecordTemplateResponse
     */
    public function updateLiveRecordTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateLiveRecordTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->recordFormat) {
            $request->recordFormatShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->recordFormat, 'RecordFormat', 'json');
        }

        $body = [];
        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->recordFormatShrink) {
            @$body['RecordFormat'] = $request->recordFormatShrink;
        }

        if (null !== $request->templateId) {
            @$body['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateLiveRecordTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateLiveRecordTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateLiveRecordTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the information about a live stream recording template.
     *
     * @remarks
     * Only user-created templates can be updated. The preset template cannot be updated.
     *
     * @param request - UpdateLiveRecordTemplateRequest
     * @returns UpdateLiveRecordTemplateResponse
     *
     * @param UpdateLiveRecordTemplateRequest $request
     *
     * @return UpdateLiveRecordTemplateResponse
     */
    public function updateLiveRecordTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLiveRecordTemplateWithOptions($request, $runtime);
    }

    /**
     * Updates the information about a live stream snapshot template.
     *
     * @param request - UpdateLiveSnapshotTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateLiveSnapshotTemplateResponse
     *
     * @param UpdateLiveSnapshotTemplateRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateLiveSnapshotTemplateResponse
     */
    public function updateLiveSnapshotTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->overwriteFormat) {
            @$body['OverwriteFormat'] = $request->overwriteFormat;
        }

        if (null !== $request->sequenceFormat) {
            @$body['SequenceFormat'] = $request->sequenceFormat;
        }

        if (null !== $request->templateId) {
            @$body['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateName) {
            @$body['TemplateName'] = $request->templateName;
        }

        if (null !== $request->timeInterval) {
            @$body['TimeInterval'] = $request->timeInterval;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateLiveSnapshotTemplate',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateLiveSnapshotTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateLiveSnapshotTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the information about a live stream snapshot template.
     *
     * @param request - UpdateLiveSnapshotTemplateRequest
     * @returns UpdateLiveSnapshotTemplateResponse
     *
     * @param UpdateLiveSnapshotTemplateRequest $request
     *
     * @return UpdateLiveSnapshotTemplateResponse
     */
    public function updateLiveSnapshotTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLiveSnapshotTemplateWithOptions($request, $runtime);
    }

    /**
     * Updates the information about a live stream transcoding job.
     *
     * @remarks
     *   For a non-timed transcoding job, you can modify the Name parameter of the job, regardless of the job state.
     * *   For a timed job, you can modify the Name, StreamInput, TranscodeOutput, and TimedConfig parameters. However, the StreamInput, TranscodeOutput, and TimedConfig parameters can be modified only when the job is not started.
     *
     * @param tmpReq - UpdateLiveTranscodeJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateLiveTranscodeJobResponse
     *
     * @param UpdateLiveTranscodeJobRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateLiveTranscodeJobResponse
     */
    public function updateLiveTranscodeJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateLiveTranscodeJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->streamInput) {
            $request->streamInputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->streamInput, 'StreamInput', 'json');
        }

        if (null !== $tmpReq->timedConfig) {
            $request->timedConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->timedConfig, 'TimedConfig', 'json');
        }

        if (null !== $tmpReq->transcodeOutput) {
            $request->transcodeOutputShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->transcodeOutput, 'TranscodeOutput', 'json');
        }

        $query = [];
        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->streamInputShrink) {
            @$query['StreamInput'] = $request->streamInputShrink;
        }

        if (null !== $request->timedConfigShrink) {
            @$query['TimedConfig'] = $request->timedConfigShrink;
        }

        if (null !== $request->transcodeOutputShrink) {
            @$query['TranscodeOutput'] = $request->transcodeOutputShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateLiveTranscodeJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateLiveTranscodeJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the information about a live stream transcoding job.
     *
     * @remarks
     *   For a non-timed transcoding job, you can modify the Name parameter of the job, regardless of the job state.
     * *   For a timed job, you can modify the Name, StreamInput, TranscodeOutput, and TimedConfig parameters. However, the StreamInput, TranscodeOutput, and TimedConfig parameters can be modified only when the job is not started.
     *
     * @param request - UpdateLiveTranscodeJobRequest
     * @returns UpdateLiveTranscodeJobResponse
     *
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
     * Updates the information about a live stream transcoding template.
     *
     * @param tmpReq - UpdateLiveTranscodeTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateLiveTranscodeTemplateResponse
     *
     * @param UpdateLiveTranscodeTemplateRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateLiveTranscodeTemplateResponse
     */
    public function updateLiveTranscodeTemplateWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateLiveTranscodeTemplateShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->templateConfig) {
            $request->templateConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->templateConfig, 'TemplateConfig', 'json');
        }

        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->templateConfigShrink) {
            @$query['TemplateConfig'] = $request->templateConfigShrink;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateLiveTranscodeTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateLiveTranscodeTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the information about a live stream transcoding template.
     *
     * @param request - UpdateLiveTranscodeTemplateRequest
     * @returns UpdateLiveTranscodeTemplateResponse
     *
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
     * Modify the input information of a specific MediaConnect flow.
     *
     * @remarks
     * - The input can only be modified when the Flow instance status is offline.
     * - The input type cannot be modified.
     *
     * @param request - UpdateMediaConnectFlowInputRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateMediaConnectFlowInputResponse
     *
     * @param UpdateMediaConnectFlowInputRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateMediaConnectFlowInputResponse
     */
    public function updateMediaConnectFlowInputWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cidrs) {
            @$query['Cidrs'] = $request->cidrs;
        }

        if (null !== $request->flowId) {
            @$query['FlowId'] = $request->flowId;
        }

        if (null !== $request->inputFromUrl) {
            @$query['InputFromUrl'] = $request->inputFromUrl;
        }

        if (null !== $request->maxBitrate) {
            @$query['MaxBitrate'] = $request->maxBitrate;
        }

        if (null !== $request->srtLatency) {
            @$query['SrtLatency'] = $request->srtLatency;
        }

        if (null !== $request->srtPassphrase) {
            @$query['SrtPassphrase'] = $request->srtPassphrase;
        }

        if (null !== $request->srtPbkeyLen) {
            @$query['SrtPbkeyLen'] = $request->srtPbkeyLen;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateMediaConnectFlowInput',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateMediaConnectFlowInputResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateMediaConnectFlowInputResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modify the input information of a specific MediaConnect flow.
     *
     * @remarks
     * - The input can only be modified when the Flow instance status is offline.
     * - The input type cannot be modified.
     *
     * @param request - UpdateMediaConnectFlowInputRequest
     * @returns UpdateMediaConnectFlowInputResponse
     *
     * @param UpdateMediaConnectFlowInputRequest $request
     *
     * @return UpdateMediaConnectFlowInputResponse
     */
    public function updateMediaConnectFlowInput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaConnectFlowInputWithOptions($request, $runtime);
    }

    /**
     * Modify information of a specific output in MediaConnect.
     *
     * @remarks
     * - The output can only be modified when the Flow instance status is offline.
     * - The output type cannot be modified.
     *
     * @param request - UpdateMediaConnectFlowOutputRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateMediaConnectFlowOutputResponse
     *
     * @param UpdateMediaConnectFlowOutputRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateMediaConnectFlowOutputResponse
     */
    public function updateMediaConnectFlowOutputWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cidrs) {
            @$query['Cidrs'] = $request->cidrs;
        }

        if (null !== $request->flowId) {
            @$query['FlowId'] = $request->flowId;
        }

        if (null !== $request->outputName) {
            @$query['OutputName'] = $request->outputName;
        }

        if (null !== $request->outputToUrl) {
            @$query['OutputToUrl'] = $request->outputToUrl;
        }

        if (null !== $request->playerLimit) {
            @$query['PlayerLimit'] = $request->playerLimit;
        }

        if (null !== $request->srtLatency) {
            @$query['SrtLatency'] = $request->srtLatency;
        }

        if (null !== $request->srtPassphrase) {
            @$query['SrtPassphrase'] = $request->srtPassphrase;
        }

        if (null !== $request->srtPbkeyLen) {
            @$query['SrtPbkeyLen'] = $request->srtPbkeyLen;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateMediaConnectFlowOutput',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateMediaConnectFlowOutputResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateMediaConnectFlowOutputResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modify information of a specific output in MediaConnect.
     *
     * @remarks
     * - The output can only be modified when the Flow instance status is offline.
     * - The output type cannot be modified.
     *
     * @param request - UpdateMediaConnectFlowOutputRequest
     * @returns UpdateMediaConnectFlowOutputResponse
     *
     * @param UpdateMediaConnectFlowOutputRequest $request
     *
     * @return UpdateMediaConnectFlowOutputResponse
     */
    public function updateMediaConnectFlowOutput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaConnectFlowOutputWithOptions($request, $runtime);
    }

    /**
     * Modify MediaConnect Instance Status.
     *
     * @param request - UpdateMediaConnectFlowStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateMediaConnectFlowStatusResponse
     *
     * @param UpdateMediaConnectFlowStatusRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateMediaConnectFlowStatusResponse
     */
    public function updateMediaConnectFlowStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->flowId) {
            @$query['FlowId'] = $request->flowId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateMediaConnectFlowStatus',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateMediaConnectFlowStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateMediaConnectFlowStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modify MediaConnect Instance Status.
     *
     * @param request - UpdateMediaConnectFlowStatusRequest
     * @returns UpdateMediaConnectFlowStatusResponse
     *
     * @param UpdateMediaConnectFlowStatusRequest $request
     *
     * @return UpdateMediaConnectFlowStatusResponse
     */
    public function updateMediaConnectFlowStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaConnectFlowStatusWithOptions($request, $runtime);
    }

    /**
     * Updates information about a media asset based on the ID of the media asset in Intelligent Media Services (IMS) or the input URL of the media asset.
     *
     * @remarks
     * If the MediaId parameter is specified, the MediaId parameter is preferentially used for the query. If the MediaId parameter is left empty, the InputURL parameter must be specified. The request ID and media asset ID are returned. You cannot modify the input URL of a media asset by specifying the ID of the media asset.
     *
     * @param request - UpdateMediaInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateMediaInfoResponse
     *
     * @param UpdateMediaInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateMediaInfoResponse
     */
    public function updateMediaInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appendTags) {
            @$query['AppendTags'] = $request->appendTags;
        }

        if (null !== $request->businessType) {
            @$query['BusinessType'] = $request->businessType;
        }

        if (null !== $request->cateId) {
            @$query['CateId'] = $request->cateId;
        }

        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->coverURL) {
            @$query['CoverURL'] = $request->coverURL;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
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

        if (null !== $request->referenceId) {
            @$query['ReferenceId'] = $request->referenceId;
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateMediaInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateMediaInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates information about a media asset based on the ID of the media asset in Intelligent Media Services (IMS) or the input URL of the media asset.
     *
     * @remarks
     * If the MediaId parameter is specified, the MediaId parameter is preferentially used for the query. If the MediaId parameter is left empty, the InputURL parameter must be specified. The request ID and media asset ID are returned. You cannot modify the input URL of a media asset by specifying the ID of the media asset.
     *
     * @param request - UpdateMediaInfoRequest
     * @returns UpdateMediaInfoResponse
     *
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
     * Modifies the marks of a media asset.
     *
     * @param request - UpdateMediaMarksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateMediaMarksResponse
     *
     * @param UpdateMediaMarksRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateMediaMarksResponse
     */
    public function updateMediaMarksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->mediaMarks) {
            @$query['MediaMarks'] = $request->mediaMarks;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateMediaMarks',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateMediaMarksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateMediaMarksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies the marks of a media asset.
     *
     * @param request - UpdateMediaMarksRequest
     * @returns UpdateMediaMarksResponse
     *
     * @param UpdateMediaMarksRequest $request
     *
     * @return UpdateMediaMarksResponse
     */
    public function updateMediaMarks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaMarksWithOptions($request, $runtime);
    }

    /**
     * Updates the media asset information in a search library.
     *
     * @param request - UpdateMediaToSearchLibRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateMediaToSearchLibResponse
     *
     * @param UpdateMediaToSearchLibRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateMediaToSearchLibResponse
     */
    public function updateMediaToSearchLibWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->msgBody) {
            @$query['MsgBody'] = $request->msgBody;
        }

        if (null !== $request->searchLibName) {
            @$query['SearchLibName'] = $request->searchLibName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateMediaToSearchLib',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateMediaToSearchLibResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateMediaToSearchLibResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the media asset information in a search library.
     *
     * @param request - UpdateMediaToSearchLibRequest
     * @returns UpdateMediaToSearchLibResponse
     *
     * @param UpdateMediaToSearchLibRequest $request
     *
     * @return UpdateMediaToSearchLibResponse
     */
    public function updateMediaToSearchLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaToSearchLibWithOptions($request, $runtime);
    }

    /**
     * Updates the information about an ApsaraVideo Media Processing (MPS) queue.
     *
     * @param request - UpdatePipelineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdatePipelineResponse
     *
     * @param UpdatePipelineRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdatePipelineResponse
     */
    public function updatePipelineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pipelineId) {
            @$query['PipelineId'] = $request->pipelineId;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdatePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdatePipelineResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Updates the information about an ApsaraVideo Media Processing (MPS) queue.
     *
     * @param request - UpdatePipelineRequest
     * @returns UpdatePipelineResponse
     *
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
     * 更新节目.
     *
     * @param request - UpdateProgramRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateProgramResponse
     *
     * @param UpdateProgramRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateProgramResponse
     */
    public function updateProgramWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->adBreaks) {
            @$query['AdBreaks'] = $request->adBreaks;
        }

        if (null !== $request->channelName) {
            @$query['ChannelName'] = $request->channelName;
        }

        if (null !== $request->clipRange) {
            @$query['ClipRange'] = $request->clipRange;
        }

        if (null !== $request->programName) {
            @$query['ProgramName'] = $request->programName;
        }

        if (null !== $request->sourceLocationName) {
            @$query['SourceLocationName'] = $request->sourceLocationName;
        }

        if (null !== $request->sourceName) {
            @$query['SourceName'] = $request->sourceName;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        if (null !== $request->transition) {
            @$query['Transition'] = $request->transition;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateProgram',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateProgramResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateProgramResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新节目.
     *
     * @param request - UpdateProgramRequest
     * @returns UpdateProgramResponse
     *
     * @param UpdateProgramRequest $request
     *
     * @return UpdateProgramResponse
     */
    public function updateProgram($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProgramWithOptions($request, $runtime);
    }

    /**
     * 修改实例的配置.
     *
     * @param tmpReq - UpdateRtcRobotInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateRtcRobotInstanceResponse
     *
     * @param UpdateRtcRobotInstanceRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateRtcRobotInstanceResponse
     */
    public function updateRtcRobotInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateRtcRobotInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->config) {
            $request->configShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->config, 'Config', 'json');
        }

        $query = [];
        if (null !== $request->configShrink) {
            @$query['Config'] = $request->configShrink;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateRtcRobotInstance',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateRtcRobotInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateRtcRobotInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 修改实例的配置.
     *
     * @param request - UpdateRtcRobotInstanceRequest
     * @returns UpdateRtcRobotInstanceResponse
     *
     * @param UpdateRtcRobotInstanceRequest $request
     *
     * @return UpdateRtcRobotInstanceResponse
     */
    public function updateRtcRobotInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRtcRobotInstanceWithOptions($request, $runtime);
    }

    /**
     * 更新源.
     *
     * @param request - UpdateSourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateSourceResponse
     *
     * @param UpdateSourceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UpdateSourceResponse
     */
    public function updateSourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->httpPackageConfigurations) {
            @$query['HttpPackageConfigurations'] = $request->httpPackageConfigurations;
        }

        if (null !== $request->sourceLocationName) {
            @$query['SourceLocationName'] = $request->sourceLocationName;
        }

        if (null !== $request->sourceName) {
            @$query['SourceName'] = $request->sourceName;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSource',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateSourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateSourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新源.
     *
     * @param request - UpdateSourceRequest
     * @returns UpdateSourceResponse
     *
     * @param UpdateSourceRequest $request
     *
     * @return UpdateSourceResponse
     */
    public function updateSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSourceWithOptions($request, $runtime);
    }

    /**
     * 更新源位置.
     *
     * @param request - UpdateSourceLocationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateSourceLocationResponse
     *
     * @param UpdateSourceLocationRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateSourceLocationResponse
     */
    public function updateSourceLocationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->baseUrl) {
            @$query['BaseUrl'] = $request->baseUrl;
        }

        if (null !== $request->enableSegmentDelivery) {
            @$query['EnableSegmentDelivery'] = $request->enableSegmentDelivery;
        }

        if (null !== $request->segmentDeliveryUrl) {
            @$query['SegmentDeliveryUrl'] = $request->segmentDeliveryUrl;
        }

        if (null !== $request->sourceLocationName) {
            @$query['SourceLocationName'] = $request->sourceLocationName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateSourceLocation',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateSourceLocationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateSourceLocationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * 更新源位置.
     *
     * @param request - UpdateSourceLocationRequest
     * @returns UpdateSourceLocationResponse
     *
     * @param UpdateSourceLocationRequest $request
     *
     * @return UpdateSourceLocationResponse
     */
    public function updateSourceLocation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSourceLocationWithOptions($request, $runtime);
    }

    /**
     * Modifies an online editing template. You can modify the template title and template configurations.
     *
     * @remarks
     *   For more information about how to use a regular template, see [Create and use a regular template](https://help.aliyun.com/document_detail/445399.html).
     * *   For more information about how to use an advanced template, see [Create and use advanced templates](https://help.aliyun.com/document_detail/445389.html).
     *
     * @param request - UpdateTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UpdateTemplateResponse
     *
     * @param UpdateTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateTemplateResponse
     */
    public function updateTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->coverUrl) {
            @$query['CoverUrl'] = $request->coverUrl;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->previewMedia) {
            @$query['PreviewMedia'] = $request->previewMedia;
        }

        if (null !== $request->relatedMediaids) {
            @$query['RelatedMediaids'] = $request->relatedMediaids;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $body = [];
        if (null !== $request->config) {
            @$body['Config'] = $request->config;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body'  => Utils::parseToMap($body),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UpdateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Modifies an online editing template. You can modify the template title and template configurations.
     *
     * @remarks
     *   For more information about how to use a regular template, see [Create and use a regular template](https://help.aliyun.com/document_detail/445399.html).
     * *   For more information about how to use an advanced template, see [Create and use advanced templates](https://help.aliyun.com/document_detail/445389.html).
     *
     * @param request - UpdateTemplateRequest
     * @returns UpdateTemplateResponse
     *
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
     * Uploads an audio or video file based on the URL of the source file. You can upload multiple media files at a time.
     *
     * @remarks
     *   If a callback is configured, you will receive an UploadByURLComplete event notification after the file is uploaded. You can query the upload status by calling the GetURLUploadInfos operation.
     * *   After a request is submitted, the upload job is queued as an asynchronous job in the cloud. You can query the status of the upload job based on information such as the URL and media asset ID that are returned in the event notification.
     * *   You can call this operation to upload media files that are not stored on a local server or device and must be uploaded by using URLs that are accessible over the Internet.
     * *   You can call this operation to upload media files only to ApsaraVideo VOD, but not to your own Object Storage Service (OSS) buckets. To upload a media file to an OSS bucket, pull the file to a local directory, use [OSS SDK](https://help.aliyun.com/document_detail/32006.html) to upload the file to an OSS bucket, and then call the [RegisterMediaInfo](https://help.aliyun.com/document_detail/441152.html) operation to register the file in the OSS bucket with the media asset library.
     * *   This operation is available only in the China (Shanghai), China (Beijing), and China (Shenzhen) regions.
     * *   You can call this operation to upload only audio and video files.
     *
     * @param request - UploadMediaByURLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UploadMediaByURLResponse
     *
     * @param UploadMediaByURLRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UploadMediaByURLResponse
     */
    public function uploadMediaByURLWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->entityId) {
            @$query['EntityId'] = $request->entityId;
        }

        if (null !== $request->mediaMetaData) {
            @$query['MediaMetaData'] = $request->mediaMetaData;
        }

        if (null !== $request->postProcessConfig) {
            @$query['PostProcessConfig'] = $request->postProcessConfig;
        }

        if (null !== $request->uploadTargetConfig) {
            @$query['UploadTargetConfig'] = $request->uploadTargetConfig;
        }

        if (null !== $request->uploadURLs) {
            @$query['UploadURLs'] = $request->uploadURLs;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UploadMediaByURLResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UploadMediaByURLResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Uploads an audio or video file based on the URL of the source file. You can upload multiple media files at a time.
     *
     * @remarks
     *   If a callback is configured, you will receive an UploadByURLComplete event notification after the file is uploaded. You can query the upload status by calling the GetURLUploadInfos operation.
     * *   After a request is submitted, the upload job is queued as an asynchronous job in the cloud. You can query the status of the upload job based on information such as the URL and media asset ID that are returned in the event notification.
     * *   You can call this operation to upload media files that are not stored on a local server or device and must be uploaded by using URLs that are accessible over the Internet.
     * *   You can call this operation to upload media files only to ApsaraVideo VOD, but not to your own Object Storage Service (OSS) buckets. To upload a media file to an OSS bucket, pull the file to a local directory, use [OSS SDK](https://help.aliyun.com/document_detail/32006.html) to upload the file to an OSS bucket, and then call the [RegisterMediaInfo](https://help.aliyun.com/document_detail/441152.html) operation to register the file in the OSS bucket with the media asset library.
     * *   This operation is available only in the China (Shanghai), China (Beijing), and China (Shenzhen) regions.
     * *   You can call this operation to upload only audio and video files.
     *
     * @param request - UploadMediaByURLRequest
     * @returns UploadMediaByURLResponse
     *
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
     * Uploads a media stream file based on the URL of the source file.
     *
     * @remarks
     *   You can call this operation to pull a media stream file based on a URL and upload the file. After the media stream file is uploaded, the media stream is associated with the specified media asset ID.
     * *   You can call this operation to upload media stream files only to ApsaraVideo VOD, but not to your own Object Storage Service (OSS) buckets. To upload a media stream file to an OSS bucket, pull the file to a local directory, use [OSS SDK](https://help.aliyun.com/document_detail/32006.html) to upload the file to an OSS bucket, and then call the [RegisterMediaStream](https://help.aliyun.com/document_detail/440765.html) operation to associate the media stream with the specified media asset ID.
     * *   This operation is available only in the China (Shanghai), China (Beijing), and China (Shenzhen) regions.
     *
     * @param request - UploadStreamByURLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     * @returns UploadStreamByURLResponse
     *
     * @param UploadStreamByURLRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UploadStreamByURLResponse
     */
    public function uploadStreamByURLWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->definition) {
            @$query['Definition'] = $request->definition;
        }

        if (null !== $request->fileExtension) {
            @$query['FileExtension'] = $request->fileExtension;
        }

        if (null !== $request->HDRType) {
            @$query['HDRType'] = $request->HDRType;
        }

        if (null !== $request->mediaId) {
            @$query['MediaId'] = $request->mediaId;
        }

        if (null !== $request->streamURL) {
            @$query['StreamURL'] = $request->streamURL;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
        if (null === $this->_signatureVersion || 'v4' != $this->_signatureVersion) {
            return UploadStreamByURLResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UploadStreamByURLResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * Uploads a media stream file based on the URL of the source file.
     *
     * @remarks
     *   You can call this operation to pull a media stream file based on a URL and upload the file. After the media stream file is uploaded, the media stream is associated with the specified media asset ID.
     * *   You can call this operation to upload media stream files only to ApsaraVideo VOD, but not to your own Object Storage Service (OSS) buckets. To upload a media stream file to an OSS bucket, pull the file to a local directory, use [OSS SDK](https://help.aliyun.com/document_detail/32006.html) to upload the file to an OSS bucket, and then call the [RegisterMediaStream](https://help.aliyun.com/document_detail/440765.html) operation to associate the media stream with the specified media asset ID.
     * *   This operation is available only in the China (Shanghai), China (Beijing), and China (Shenzhen) regions.
     *
     * @param request - UploadStreamByURLRequest
     * @returns UploadStreamByURLResponse
     *
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
