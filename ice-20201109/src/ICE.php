<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
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
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateMediaLiveChannelRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateMediaLiveChannelResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateMediaLiveChannelShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateMediaLiveInputRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateMediaLiveInputResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateMediaLiveInputSecurityGroupRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateMediaLiveInputSecurityGroupResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateMediaLiveInputSecurityGroupShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\CreateMediaLiveInputShrinkRequest;
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
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteMediaLiveChannelRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteMediaLiveChannelResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteMediaLiveInputRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteMediaLiveInputResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteMediaLiveInputSecurityGroupRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\DeleteMediaLiveInputSecurityGroupResponse;
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
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaLiveChannelRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaLiveChannelResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaLiveInputRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaLiveInputResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaLiveInputSecurityGroupRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaLiveInputSecurityGroupResponse;
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
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaLiveChannelsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaLiveChannelsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaLiveInputSecurityGroupsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaLiveInputSecurityGroupsResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaLiveInputsRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaLiveInputsResponse;
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
use AlibabaCloud\SDK\ICE\V20201109\Models\SendMessageChatTextRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\SendMessageChatTextResponse;
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
use AlibabaCloud\SDK\ICE\V20201109\Models\StartMediaLiveChannelRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\StartMediaLiveChannelResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\StartRtcRobotInstanceRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\StartRtcRobotInstanceResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\StartRtcRobotInstanceShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\StartWorkflowRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\StartWorkflowResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\StopAIAgentInstanceRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\StopAIAgentInstanceResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\StopChannelRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\StopChannelResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\StopMediaLiveChannelRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\StopMediaLiveChannelResponse;
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
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveChannelRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveChannelResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveChannelShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveInputRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveInputResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveInputSecurityGroupRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveInputSecurityGroupResponse;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveInputSecurityGroupShrinkRequest;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveInputShrinkRequest;
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
     * @summary Adds an ad insertion configuration.
     *  *
     * @param AddAdInsertionRequest $request AddAdInsertionRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return AddAdInsertionResponse AddAdInsertionResponse
     */
    public function addAdInsertionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->adMarkerPassthrough)) {
            $body['AdMarkerPassthrough'] = $request->adMarkerPassthrough;
        }
        if (!Utils::isUnset($request->adsUrl)) {
            $body['AdsUrl'] = $request->adsUrl;
        }
        if (!Utils::isUnset($request->cdnAdSegmentUrlPrefix)) {
            $body['CdnAdSegmentUrlPrefix'] = $request->cdnAdSegmentUrlPrefix;
        }
        if (!Utils::isUnset($request->cdnContentSegmentUrlPrefix)) {
            $body['CdnContentSegmentUrlPrefix'] = $request->cdnContentSegmentUrlPrefix;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $body['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->configAliases)) {
            $body['ConfigAliases'] = $request->configAliases;
        }
        if (!Utils::isUnset($request->contentUrlPrefix)) {
            $body['ContentUrlPrefix'] = $request->contentUrlPrefix;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->personalizationThreshold)) {
            $body['PersonalizationThreshold'] = $request->personalizationThreshold;
        }
        if (!Utils::isUnset($request->slateAdUrl)) {
            $body['SlateAdUrl'] = $request->slateAdUrl;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return AddAdInsertionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddAdInsertionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Adds an ad insertion configuration.
     *  *
     * @param AddAdInsertionRequest $request AddAdInsertionRequest
     *
     * @return AddAdInsertionResponse AddAdInsertionResponse
     */
    public function addAdInsertion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addAdInsertionWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a category.
     *  *
     * @description You can create at most three levels of categories. Each category level can contain a maximum of 100 subcategories.
     *  *
     * @param AddCategoryRequest $request AddCategoryRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return AddCategoryResponse AddCategoryResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return AddCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddCategoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a category.
     *  *
     * @description You can create at most three levels of categories. Each category level can contain a maximum of 100 subcategories.
     *  *
     * @param AddCategoryRequest $request AddCategoryRequest
     *
     * @return AddCategoryResponse AddCategoryResponse
     */
    public function addCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addCategoryWithOptions($request, $runtime);
    }

    /**
     * @summary Adds one or more materials to an online editing project.
     *  *
     * @param AddEditingProjectMaterialsRequest $request AddEditingProjectMaterialsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return AddEditingProjectMaterialsResponse AddEditingProjectMaterialsResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return AddEditingProjectMaterialsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddEditingProjectMaterialsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Adds one or more materials to an online editing project.
     *  *
     * @param AddEditingProjectMaterialsRequest $request AddEditingProjectMaterialsRequest
     *
     * @return AddEditingProjectMaterialsResponse AddEditingProjectMaterialsResponse
     */
    public function addEditingProjectMaterials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addEditingProjectMaterialsWithOptions($request, $runtime);
    }

    /**
     * @summary 收藏公共媒资
     *  *
     * @param AddFavoritePublicMediaRequest $request AddFavoritePublicMediaRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return AddFavoritePublicMediaResponse AddFavoritePublicMediaResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return AddFavoritePublicMediaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddFavoritePublicMediaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 收藏公共媒资
     *  *
     * @param AddFavoritePublicMediaRequest $request AddFavoritePublicMediaRequest
     *
     * @return AddFavoritePublicMediaResponse AddFavoritePublicMediaResponse
     */
    public function addFavoritePublicMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addFavoritePublicMediaWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a source for a MediaConnect flow.
     *  *
     * @description *   When the specified flow ID is not available, an error code is returned.
     * *   A flow can have only one source.
     * ### [](#)Source type
     * *   RTMP-PUSH: An input that you can push to the returned URL over the RTMP protocol.
     * *   RTMP-PULL: An input that the MediaConnect flow pulls from the specified server over the RTMP protocol.
     * *   SRT-Listener: An input that you can push to the returned URL over the SRT protocol.
     * *   SRT-Caller: An input that the MediaConnect flow pulls from the specified server over the SRT protocol.
     * *   Flow: An input that uses the output of another upstream flow. You must specify an upstream flow and its output. The output type of the upstream flow must be SRT-Listener or RTMP-PULL. By default, a dedicated line is used when flows are cascaded. This allows for cross-region distribution among multiple flows.
     *  *
     * @param AddMediaConnectFlowInputRequest $request AddMediaConnectFlowInputRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return AddMediaConnectFlowInputResponse AddMediaConnectFlowInputResponse
     */
    public function addMediaConnectFlowInputWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cidrs)) {
            $query['Cidrs'] = $request->cidrs;
        }
        if (!Utils::isUnset($request->flowId)) {
            $query['FlowId'] = $request->flowId;
        }
        if (!Utils::isUnset($request->inputFromUrl)) {
            $query['InputFromUrl'] = $request->inputFromUrl;
        }
        if (!Utils::isUnset($request->inputName)) {
            $query['InputName'] = $request->inputName;
        }
        if (!Utils::isUnset($request->inputProtocol)) {
            $query['InputProtocol'] = $request->inputProtocol;
        }
        if (!Utils::isUnset($request->maxBitrate)) {
            $query['MaxBitrate'] = $request->maxBitrate;
        }
        if (!Utils::isUnset($request->pairFlowId)) {
            $query['PairFlowId'] = $request->pairFlowId;
        }
        if (!Utils::isUnset($request->pairOutputName)) {
            $query['PairOutputName'] = $request->pairOutputName;
        }
        if (!Utils::isUnset($request->srtLatency)) {
            $query['SrtLatency'] = $request->srtLatency;
        }
        if (!Utils::isUnset($request->srtPassphrase)) {
            $query['SrtPassphrase'] = $request->srtPassphrase;
        }
        if (!Utils::isUnset($request->srtPbkeyLen)) {
            $query['SrtPbkeyLen'] = $request->srtPbkeyLen;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return AddMediaConnectFlowInputResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddMediaConnectFlowInputResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a source for a MediaConnect flow.
     *  *
     * @description *   When the specified flow ID is not available, an error code is returned.
     * *   A flow can have only one source.
     * ### [](#)Source type
     * *   RTMP-PUSH: An input that you can push to the returned URL over the RTMP protocol.
     * *   RTMP-PULL: An input that the MediaConnect flow pulls from the specified server over the RTMP protocol.
     * *   SRT-Listener: An input that you can push to the returned URL over the SRT protocol.
     * *   SRT-Caller: An input that the MediaConnect flow pulls from the specified server over the SRT protocol.
     * *   Flow: An input that uses the output of another upstream flow. You must specify an upstream flow and its output. The output type of the upstream flow must be SRT-Listener or RTMP-PULL. By default, a dedicated line is used when flows are cascaded. This allows for cross-region distribution among multiple flows.
     *  *
     * @param AddMediaConnectFlowInputRequest $request AddMediaConnectFlowInputRequest
     *
     * @return AddMediaConnectFlowInputResponse AddMediaConnectFlowInputResponse
     */
    public function addMediaConnectFlowInput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMediaConnectFlowInputWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an output for a MediaConnect flow.
     *  *
     * @description *   When the specified flow ID is not available, an error code is returned.
     * *   A flow can have a maximum of four outputs.
     * *   The output names in the same flow cannot be duplicated.
     * *   You can set an upper limit on the number of concurrent viewers for each output. If this limit is exceeded, any new playback requests will fail. Each output supports up to five streams.
     * ### [](#)Output types
     * *   RTMP-PUSH: An output that the MediaConnect flow pushes to the server you specified over the RTMP protocol.
     * *   RTMP-PULL: An output that you can pull using the returned streaming URL over the RTMP protocol.
     * *   SRT-Caller: An output that the MediaConnect flow pushes to the server you specified over the SRT protocol.
     * *   SRT-Listener: An output that you can pull using the returned streaming URL over the SRT protocol.
     * *   Flow: An output that is pushed to the source URL of another MediaConnect flow. The source type of the destination flow must be SRT-Listener or RTMP-PUSH. By default, a dedicated line is used when flows are cascaded. This allows for cross-region distribution among multiple flows.
     *  *
     * @param AddMediaConnectFlowOutputRequest $request AddMediaConnectFlowOutputRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return AddMediaConnectFlowOutputResponse AddMediaConnectFlowOutputResponse
     */
    public function addMediaConnectFlowOutputWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cidrs)) {
            $query['Cidrs'] = $request->cidrs;
        }
        if (!Utils::isUnset($request->flowId)) {
            $query['FlowId'] = $request->flowId;
        }
        if (!Utils::isUnset($request->outputName)) {
            $query['OutputName'] = $request->outputName;
        }
        if (!Utils::isUnset($request->outputProtocol)) {
            $query['OutputProtocol'] = $request->outputProtocol;
        }
        if (!Utils::isUnset($request->outputToUrl)) {
            $query['OutputToUrl'] = $request->outputToUrl;
        }
        if (!Utils::isUnset($request->pairFlowId)) {
            $query['PairFlowId'] = $request->pairFlowId;
        }
        if (!Utils::isUnset($request->pairInputName)) {
            $query['PairInputName'] = $request->pairInputName;
        }
        if (!Utils::isUnset($request->playerLimit)) {
            $query['PlayerLimit'] = $request->playerLimit;
        }
        if (!Utils::isUnset($request->srtLatency)) {
            $query['SrtLatency'] = $request->srtLatency;
        }
        if (!Utils::isUnset($request->srtPassphrase)) {
            $query['SrtPassphrase'] = $request->srtPassphrase;
        }
        if (!Utils::isUnset($request->srtPbkeyLen)) {
            $query['SrtPbkeyLen'] = $request->srtPbkeyLen;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return AddMediaConnectFlowOutputResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddMediaConnectFlowOutputResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates an output for a MediaConnect flow.
     *  *
     * @description *   When the specified flow ID is not available, an error code is returned.
     * *   A flow can have a maximum of four outputs.
     * *   The output names in the same flow cannot be duplicated.
     * *   You can set an upper limit on the number of concurrent viewers for each output. If this limit is exceeded, any new playback requests will fail. Each output supports up to five streams.
     * ### [](#)Output types
     * *   RTMP-PUSH: An output that the MediaConnect flow pushes to the server you specified over the RTMP protocol.
     * *   RTMP-PULL: An output that you can pull using the returned streaming URL over the RTMP protocol.
     * *   SRT-Caller: An output that the MediaConnect flow pushes to the server you specified over the SRT protocol.
     * *   SRT-Listener: An output that you can pull using the returned streaming URL over the SRT protocol.
     * *   Flow: An output that is pushed to the source URL of another MediaConnect flow. The source type of the destination flow must be SRT-Listener or RTMP-PUSH. By default, a dedicated line is used when flows are cascaded. This allows for cross-region distribution among multiple flows.
     *  *
     * @param AddMediaConnectFlowOutputRequest $request AddMediaConnectFlowOutputRequest
     *
     * @return AddMediaConnectFlowOutputResponse AddMediaConnectFlowOutputResponse
     */
    public function addMediaConnectFlowOutput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMediaConnectFlowOutputWithOptions($request, $runtime);
    }

    /**
     * @summary Adds marks for a media asset.
     *  *
     * @param AddMediaMarksRequest $request AddMediaMarksRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return AddMediaMarksResponse AddMediaMarksResponse
     */
    public function addMediaMarksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->mediaMarks)) {
            $query['MediaMarks'] = $request->mediaMarks;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return AddMediaMarksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddMediaMarksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Adds marks for a media asset.
     *  *
     * @param AddMediaMarksRequest $request AddMediaMarksRequest
     *
     * @return AddMediaMarksResponse AddMediaMarksResponse
     */
    public function addMediaMarks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addMediaMarksWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a template.
     *  *
     * @description *   For more information about how to use a regular template, see [Create and use a regular template](https://help.aliyun.com/document_detail/445399.html).
     * *   For more information about how to use an advanced template, see [Create and use advanced templates](https://help.aliyun.com/document_detail/445389.html).
     * *   After an advanced template is created, it enters the Processing state. In this case, the template is unavailable. The template can be used only when it is in the Available state. The time required for template processing varies based on the size of the template file. Generally, it ranges from 10 seconds to 5 minutes.
     *  *
     * @param AddTemplateRequest $request AddTemplateRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return AddTemplateResponse AddTemplateResponse
     */
    public function addTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $body = [];
        if (!Utils::isUnset($request->config)) {
            $body['Config'] = $request->config;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return AddTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AddTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a template.
     *  *
     * @description *   For more information about how to use a regular template, see [Create and use a regular template](https://help.aliyun.com/document_detail/445399.html).
     * *   For more information about how to use an advanced template, see [Create and use advanced templates](https://help.aliyun.com/document_detail/445389.html).
     * *   After an advanced template is created, it enters the Processing state. In this case, the template is unavailable. The template can be used only when it is in the Available state. The time required for template processing varies based on the size of the template file. Generally, it ranges from 10 seconds to 5 minutes.
     *  *
     * @param AddTemplateRequest $request AddTemplateRequest
     *
     * @return AddTemplateResponse AddTemplateResponse
     */
    public function addTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies search index information including index status and configurations.
     *  *
     * @param AlterSearchIndexRequest $request AlterSearchIndexRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return AlterSearchIndexResponse AlterSearchIndexResponse
     */
    public function alterSearchIndexWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->indexConfig)) {
            $query['IndexConfig'] = $request->indexConfig;
        }
        if (!Utils::isUnset($request->indexStatus)) {
            $query['IndexStatus'] = $request->indexStatus;
        }
        if (!Utils::isUnset($request->indexType)) {
            $query['IndexType'] = $request->indexType;
        }
        if (!Utils::isUnset($request->searchLibName)) {
            $query['SearchLibName'] = $request->searchLibName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return AlterSearchIndexResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return AlterSearchIndexResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies search index information including index status and configurations.
     *  *
     * @param AlterSearchIndexRequest $request AlterSearchIndexRequest
     *
     * @return AlterSearchIndexResponse AlterSearchIndexResponse
     */
    public function alterSearchIndex($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->alterSearchIndexWithOptions($request, $runtime);
    }

    /**
     * @summary Ingests multiple assets for VOD packaging.
     *  *
     * @param BatchCreateVodPackagingAssetRequest $tmpReq  BatchCreateVodPackagingAssetRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchCreateVodPackagingAssetResponse BatchCreateVodPackagingAssetResponse
     */
    public function batchCreateVodPackagingAssetWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new BatchCreateVodPackagingAssetShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->assets)) {
            $request->assetsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->assets, 'Assets', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->assetsShrink)) {
            $query['Assets'] = $request->assetsShrink;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return BatchCreateVodPackagingAssetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return BatchCreateVodPackagingAssetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Ingests multiple assets for VOD packaging.
     *  *
     * @param BatchCreateVodPackagingAssetRequest $request BatchCreateVodPackagingAssetRequest
     *
     * @return BatchCreateVodPackagingAssetResponse BatchCreateVodPackagingAssetResponse
     */
    public function batchCreateVodPackagingAsset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchCreateVodPackagingAssetWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about multiple media assets at a time based on media asset IDs.
     *  *
     * @param BatchGetMediaInfosRequest $request BatchGetMediaInfosRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchGetMediaInfosResponse BatchGetMediaInfosResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return BatchGetMediaInfosResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return BatchGetMediaInfosResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about multiple media assets at a time based on media asset IDs.
     *  *
     * @param BatchGetMediaInfosRequest $request BatchGetMediaInfosRequest
     *
     * @return BatchGetMediaInfosResponse BatchGetMediaInfosResponse
     */
    public function batchGetMediaInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchGetMediaInfosWithOptions($request, $runtime);
    }

    /**
     * @summary Cancels a media fingerprint analysis job.
     *  *
     * @description *   You can cancel a media fingerprint analysis job only if the job is in the Queuing state.
     * *   We recommend that you call the **UpdatePipeline** operation to set the status of the ApsaraVideo Media Processing (MPS) queue to Paused before you cancel a job. This suspends job scheduling in the MPS queue. After the job is canceled, you must set the status of the MPS queue back to Active so that the other jobs in the MPS queue can be scheduled.
     *  *
     * @param CancelDNAJobRequest $request CancelDNAJobRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelDNAJobResponse CancelDNAJobResponse
     */
    public function cancelDNAJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CancelDNAJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CancelDNAJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Cancels a media fingerprint analysis job.
     *  *
     * @description *   You can cancel a media fingerprint analysis job only if the job is in the Queuing state.
     * *   We recommend that you call the **UpdatePipeline** operation to set the status of the ApsaraVideo Media Processing (MPS) queue to Paused before you cancel a job. This suspends job scheduling in the MPS queue. After the job is canceled, you must set the status of the MPS queue back to Active so that the other jobs in the MPS queue can be scheduled.
     *  *
     * @param CancelDNAJobRequest $request CancelDNAJobRequest
     *
     * @return CancelDNAJobResponse CancelDNAJobResponse
     */
    public function cancelDNAJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelDNAJobWithOptions($request, $runtime);
    }

    /**
     * @summary 取消收藏公共媒资
     *  *
     * @param CancelFavoritePublicMediaRequest $request CancelFavoritePublicMediaRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelFavoritePublicMediaResponse CancelFavoritePublicMediaResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CancelFavoritePublicMediaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CancelFavoritePublicMediaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 取消收藏公共媒资
     *  *
     * @param CancelFavoritePublicMediaRequest $request CancelFavoritePublicMediaRequest
     *
     * @return CancelFavoritePublicMediaResponse CancelFavoritePublicMediaResponse
     */
    public function cancelFavoritePublicMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelFavoritePublicMediaWithOptions($request, $runtime);
    }

    /**
     * @summary Submits manual review results for media assets.
     *  *
     * @param CreateAuditRequest $request CreateAuditRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAuditResponse CreateAuditResponse
     */
    public function createAuditWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateAuditResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateAuditResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Submits manual review results for media assets.
     *  *
     * @param CreateAuditRequest $request CreateAuditRequest
     *
     * @return CreateAuditResponse CreateAuditResponse
     */
    public function createAudit($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAuditWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a digital human training job. You can configure the basic information of the digital human and the materials required for the training. Note: This operation is used to initialize the training job. It does not submit the training job. To submit the training job, call the SubmitAvatarTrainingJob operation.
     *  *
     * @param CreateAvatarTrainingJobRequest $request CreateAvatarTrainingJobRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAvatarTrainingJobResponse CreateAvatarTrainingJobResponse
     */
    public function createAvatarTrainingJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->avatarDescription)) {
            $query['AvatarDescription'] = $request->avatarDescription;
        }
        if (!Utils::isUnset($request->avatarName)) {
            $query['AvatarName'] = $request->avatarName;
        }
        if (!Utils::isUnset($request->avatarType)) {
            $query['AvatarType'] = $request->avatarType;
        }
        if (!Utils::isUnset($request->portrait)) {
            $query['Portrait'] = $request->portrait;
        }
        if (!Utils::isUnset($request->thumbnail)) {
            $query['Thumbnail'] = $request->thumbnail;
        }
        if (!Utils::isUnset($request->transparent)) {
            $query['Transparent'] = $request->transparent;
        }
        if (!Utils::isUnset($request->video)) {
            $query['Video'] = $request->video;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateAvatarTrainingJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateAvatarTrainingJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a digital human training job. You can configure the basic information of the digital human and the materials required for the training. Note: This operation is used to initialize the training job. It does not submit the training job. To submit the training job, call the SubmitAvatarTrainingJob operation.
     *  *
     * @param CreateAvatarTrainingJobRequest $request CreateAvatarTrainingJobRequest
     *
     * @return CreateAvatarTrainingJobResponse CreateAvatarTrainingJobResponse
     */
    public function createAvatarTrainingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAvatarTrainingJobWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a channel in MediaWeaver.
     *  *
     * @param CreateChannelRequest $request CreateChannelRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateChannelResponse CreateChannelResponse
     */
    public function createChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessPolicy)) {
            $query['AccessPolicy'] = $request->accessPolicy;
        }
        if (!Utils::isUnset($request->accessToken)) {
            $query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->channelName)) {
            $query['ChannelName'] = $request->channelName;
        }
        if (!Utils::isUnset($request->channelTier)) {
            $query['ChannelTier'] = $request->channelTier;
        }
        if (!Utils::isUnset($request->fillerSourceLocationName)) {
            $query['FillerSourceLocationName'] = $request->fillerSourceLocationName;
        }
        if (!Utils::isUnset($request->fillerSourceName)) {
            $query['FillerSourceName'] = $request->fillerSourceName;
        }
        if (!Utils::isUnset($request->outPutConfigList)) {
            $query['OutPutConfigList'] = $request->outPutConfigList;
        }
        if (!Utils::isUnset($request->playbackMode)) {
            $query['PlaybackMode'] = $request->playbackMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateChannelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateChannelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a channel in MediaWeaver.
     *  *
     * @param CreateChannelRequest $request CreateChannelRequest
     *
     * @return CreateChannelResponse CreateChannelResponse
     */
    public function createChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createChannelWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a custom template.
     *  *
     * @param CreateCustomTemplateRequest $request CreateCustomTemplateRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCustomTemplateResponse CreateCustomTemplateResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateCustomTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateCustomTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a custom template.
     *  *
     * @param CreateCustomTemplateRequest $request CreateCustomTemplateRequest
     *
     * @return CreateCustomTemplateResponse CreateCustomTemplateResponse
     */
    public function createCustomTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a human voice cloning job. You can configure the basic information of the human voice cloning job.
     *  *
     * @param CreateCustomizedVoiceJobRequest $request CreateCustomizedVoiceJobRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCustomizedVoiceJobResponse CreateCustomizedVoiceJobResponse
     */
    public function createCustomizedVoiceJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gender)) {
            $query['Gender'] = $request->gender;
        }
        if (!Utils::isUnset($request->scenario)) {
            $query['Scenario'] = $request->scenario;
        }
        if (!Utils::isUnset($request->voiceDesc)) {
            $query['VoiceDesc'] = $request->voiceDesc;
        }
        if (!Utils::isUnset($request->voiceId)) {
            $query['VoiceId'] = $request->voiceId;
        }
        if (!Utils::isUnset($request->voiceName)) {
            $query['VoiceName'] = $request->voiceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateCustomizedVoiceJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateCustomizedVoiceJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a human voice cloning job. You can configure the basic information of the human voice cloning job.
     *  *
     * @param CreateCustomizedVoiceJobRequest $request CreateCustomizedVoiceJobRequest
     *
     * @return CreateCustomizedVoiceJobResponse CreateCustomizedVoiceJobResponse
     */
    public function createCustomizedVoiceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCustomizedVoiceJobWithOptions($request, $runtime);
    }

    /**
     * @summary Creates media fingerprint libraries.
     *  *
     * @description *   You can create up to five media fingerprint libraries within an account. To increase the quota, submit a ticket. You can call the DeleteDNADB operation to delete the fingerprint libraries that you no longer need.
     *  *
     * @param CreateDNADBRequest $request CreateDNADBRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDNADBResponse CreateDNADBResponse
     */
    public function createDNADBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->model)) {
            $query['Model'] = $request->model;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateDNADBResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateDNADBResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates media fingerprint libraries.
     *  *
     * @description *   You can create up to five media fingerprint libraries within an account. To increase the quota, submit a ticket. You can call the DeleteDNADB operation to delete the fingerprint libraries that you no longer need.
     *  *
     * @param CreateDNADBRequest $request CreateDNADBRequest
     *
     * @return CreateDNADBResponse CreateDNADBResponse
     */
    public function createDNADB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDNADBWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an online editing project. You can specify configurations such as the title, description, timeline, and thumbnail for the project.
     *  *
     * @param CreateEditingProjectRequest $request CreateEditingProjectRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateEditingProjectResponse CreateEditingProjectResponse
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
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $body = [];
        if (!Utils::isUnset($request->timeline)) {
            $body['Timeline'] = $request->timeline;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateEditingProjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateEditingProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates an online editing project. You can specify configurations such as the title, description, timeline, and thumbnail for the project.
     *  *
     * @param CreateEditingProjectRequest $request CreateEditingProjectRequest
     *
     * @return CreateEditingProjectResponse CreateEditingProjectResponse
     */
    public function createEditingProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEditingProjectWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a live package channel.
     *  *
     * @description ## [](#)Usage notes
     * After you call this operation to create a live package channel, the system will automatically generate the ingest endpoint URL, and username and password required for authentication.
     * ### [](#)Precautions
     * *   Channel group names and channel names can contain only letters, digits, underscores (_), and hyphens (-).
     * *   Only `HLS` is supported.
     * *   The segment duration must be from 1 to 30 seconds.
     * *   The number of M3U8 segments must be from 2 to 100.
     * If the request succeeds, the system will return the details of the newly created channel, including the channel name, creation time, modification time, and ingest endpoint details.
     *  *
     * @param CreateLivePackageChannelRequest $request CreateLivePackageChannelRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLivePackageChannelResponse CreateLivePackageChannelResponse
     */
    public function createLivePackageChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->channelName)) {
            $body['ChannelName'] = $request->channelName;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupName)) {
            $body['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->protocol)) {
            $body['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->segmentCount)) {
            $body['SegmentCount'] = $request->segmentCount;
        }
        if (!Utils::isUnset($request->segmentDuration)) {
            $body['SegmentDuration'] = $request->segmentDuration;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateLivePackageChannelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateLivePackageChannelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a live package channel.
     *  *
     * @description ## [](#)Usage notes
     * After you call this operation to create a live package channel, the system will automatically generate the ingest endpoint URL, and username and password required for authentication.
     * ### [](#)Precautions
     * *   Channel group names and channel names can contain only letters, digits, underscores (_), and hyphens (-).
     * *   Only `HLS` is supported.
     * *   The segment duration must be from 1 to 30 seconds.
     * *   The number of M3U8 segments must be from 2 to 100.
     * If the request succeeds, the system will return the details of the newly created channel, including the channel name, creation time, modification time, and ingest endpoint details.
     *  *
     * @param CreateLivePackageChannelRequest $request CreateLivePackageChannelRequest
     *
     * @return CreateLivePackageChannelResponse CreateLivePackageChannelResponse
     */
    public function createLivePackageChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLivePackageChannelWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a live package channel group with a custom name and description.
     *  *
     * @description After you create a channel group, the assigned origin domain is returned.
     *  *
     * @param CreateLivePackageChannelGroupRequest $request CreateLivePackageChannelGroupRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLivePackageChannelGroupResponse CreateLivePackageChannelGroupResponse
     */
    public function createLivePackageChannelGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        $body = [];
        if (!Utils::isUnset($request->groupName)) {
            $body['GroupName'] = $request->groupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateLivePackageChannelGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateLivePackageChannelGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a live package channel group with a custom name and description.
     *  *
     * @description After you create a channel group, the assigned origin domain is returned.
     *  *
     * @param CreateLivePackageChannelGroupRequest $request CreateLivePackageChannelGroupRequest
     *
     * @return CreateLivePackageChannelGroupResponse CreateLivePackageChannelGroupResponse
     */
    public function createLivePackageChannelGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLivePackageChannelGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an origin endpoint for a live package channel to deliver live streams in HLS format.
     *  *
     * @description ## [](#)Usage notes
     * This API operation is mainly used to configure origin settings, security policies including the IP address blacklist and whitelist and authorization code, and time shifting settings for channels. Before you create an origin endpoint, you must create a live package channel group and channel. After you create the endpoint, the endpoint URL and other configuration details are returned.
     *  *
     * @param CreateLivePackageOriginEndpointRequest $request CreateLivePackageOriginEndpointRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLivePackageOriginEndpointResponse CreateLivePackageOriginEndpointResponse
     */
    public function createLivePackageOriginEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        $body = [];
        if (!Utils::isUnset($request->authorizationCode)) {
            $body['AuthorizationCode'] = $request->authorizationCode;
        }
        if (!Utils::isUnset($request->channelName)) {
            $body['ChannelName'] = $request->channelName;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->endpointName)) {
            $body['EndpointName'] = $request->endpointName;
        }
        if (!Utils::isUnset($request->groupName)) {
            $body['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->ipBlacklist)) {
            $body['IpBlacklist'] = $request->ipBlacklist;
        }
        if (!Utils::isUnset($request->ipWhitelist)) {
            $body['IpWhitelist'] = $request->ipWhitelist;
        }
        if (!Utils::isUnset($request->manifestName)) {
            $body['ManifestName'] = $request->manifestName;
        }
        if (!Utils::isUnset($request->protocol)) {
            $body['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->timeshiftVision)) {
            $body['TimeshiftVision'] = $request->timeshiftVision;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateLivePackageOriginEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateLivePackageOriginEndpointResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates an origin endpoint for a live package channel to deliver live streams in HLS format.
     *  *
     * @description ## [](#)Usage notes
     * This API operation is mainly used to configure origin settings, security policies including the IP address blacklist and whitelist and authorization code, and time shifting settings for channels. Before you create an origin endpoint, you must create a live package channel group and channel. After you create the endpoint, the endpoint URL and other configuration details are returned.
     *  *
     * @param CreateLivePackageOriginEndpointRequest $request CreateLivePackageOriginEndpointRequest
     *
     * @return CreateLivePackageOriginEndpointResponse CreateLivePackageOriginEndpointResponse
     */
    public function createLivePackageOriginEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLivePackageOriginEndpointWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a live stream recording template to submit live stream recording jobs.
     *  *
     * @description You must specify a recording template for live stream recording. You can configure information such as the format and duration of a recording in a recording template. The recording format can be M3U8, MP4, or FLV.
     *  *
     * @param CreateLiveRecordTemplateRequest $tmpReq  CreateLiveRecordTemplateRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLiveRecordTemplateResponse CreateLiveRecordTemplateResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateLiveRecordTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateLiveRecordTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a live stream recording template to submit live stream recording jobs.
     *  *
     * @description You must specify a recording template for live stream recording. You can configure information such as the format and duration of a recording in a recording template. The recording format can be M3U8, MP4, or FLV.
     *  *
     * @param CreateLiveRecordTemplateRequest $request CreateLiveRecordTemplateRequest
     *
     * @return CreateLiveRecordTemplateResponse CreateLiveRecordTemplateResponse
     */
    public function createLiveRecordTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLiveRecordTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Create a live stream snapshot template to facilitate the creation of snapshot jobs.
     *  *
     * @param CreateLiveSnapshotTemplateRequest $request CreateLiveSnapshotTemplateRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLiveSnapshotTemplateResponse CreateLiveSnapshotTemplateResponse
     */
    public function createLiveSnapshotTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->overwriteFormat)) {
            $body['OverwriteFormat'] = $request->overwriteFormat;
        }
        if (!Utils::isUnset($request->sequenceFormat)) {
            $body['SequenceFormat'] = $request->sequenceFormat;
        }
        if (!Utils::isUnset($request->templateName)) {
            $body['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->timeInterval)) {
            $body['TimeInterval'] = $request->timeInterval;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateLiveSnapshotTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateLiveSnapshotTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Create a live stream snapshot template to facilitate the creation of snapshot jobs.
     *  *
     * @param CreateLiveSnapshotTemplateRequest $request CreateLiveSnapshotTemplateRequest
     *
     * @return CreateLiveSnapshotTemplateResponse CreateLiveSnapshotTemplateResponse
     */
    public function createLiveSnapshotTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLiveSnapshotTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a live stream transcoding template to submit live stream transcoding jobs.
     *  *
     * @param CreateLiveTranscodeTemplateRequest $tmpReq  CreateLiveTranscodeTemplateRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLiveTranscodeTemplateResponse CreateLiveTranscodeTemplateResponse
     */
    public function createLiveTranscodeTemplateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateLiveTranscodeTemplateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->templateConfig)) {
            $request->templateConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->templateConfig, 'TemplateConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->templateConfigShrink)) {
            $query['TemplateConfig'] = $request->templateConfigShrink;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateLiveTranscodeTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateLiveTranscodeTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a live stream transcoding template to submit live stream transcoding jobs.
     *  *
     * @param CreateLiveTranscodeTemplateRequest $request CreateLiveTranscodeTemplateRequest
     *
     * @return CreateLiveTranscodeTemplateResponse CreateLiveTranscodeTemplateResponse
     */
    public function createLiveTranscodeTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLiveTranscodeTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a MediaConnect flow.
     *  *
     * @description *   The flow names cannot be duplicated in the same region.
     * *   Take note of the returned flow ID. You may reference it in other API operations.
     *  *
     * @param CreateMediaConnectFlowRequest $request CreateMediaConnectFlowRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateMediaConnectFlowResponse CreateMediaConnectFlowResponse
     */
    public function createMediaConnectFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->flowName)) {
            $query['FlowName'] = $request->flowName;
        }
        if (!Utils::isUnset($request->flowRegion)) {
            $query['FlowRegion'] = $request->flowRegion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateMediaConnectFlowResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateMediaConnectFlowResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a MediaConnect flow.
     *  *
     * @description *   The flow names cannot be duplicated in the same region.
     * *   Take note of the returned flow ID. You may reference it in other API operations.
     *  *
     * @param CreateMediaConnectFlowRequest $request CreateMediaConnectFlowRequest
     *
     * @return CreateMediaConnectFlowResponse CreateMediaConnectFlowResponse
     */
    public function createMediaConnectFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMediaConnectFlowWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a MediaLive channel.
     *  *
     * @description *
     * ## [](#qps-)QPS limit
     * This operation can be called up to 50 times per second for each Alibaba Cloud account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *  *
     * @param CreateMediaLiveChannelRequest $tmpReq  CreateMediaLiveChannelRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateMediaLiveChannelResponse CreateMediaLiveChannelResponse
     */
    public function createMediaLiveChannelWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateMediaLiveChannelShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->audioSettings)) {
            $request->audioSettingsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->audioSettings, 'AudioSettings', 'json');
        }
        if (!Utils::isUnset($tmpReq->inputAttachments)) {
            $request->inputAttachmentsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->inputAttachments, 'InputAttachments', 'json');
        }
        if (!Utils::isUnset($tmpReq->outputGroups)) {
            $request->outputGroupsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->outputGroups, 'OutputGroups', 'json');
        }
        if (!Utils::isUnset($tmpReq->videoSettings)) {
            $request->videoSettingsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->videoSettings, 'VideoSettings', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->audioSettingsShrink)) {
            $body['AudioSettings'] = $request->audioSettingsShrink;
        }
        if (!Utils::isUnset($request->inputAttachmentsShrink)) {
            $body['InputAttachments'] = $request->inputAttachmentsShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->outputGroupsShrink)) {
            $body['OutputGroups'] = $request->outputGroupsShrink;
        }
        if (!Utils::isUnset($request->videoSettingsShrink)) {
            $body['VideoSettings'] = $request->videoSettingsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMediaLiveChannel',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateMediaLiveChannelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateMediaLiveChannelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a MediaLive channel.
     *  *
     * @description *
     * ## [](#qps-)QPS limit
     * This operation can be called up to 50 times per second for each Alibaba Cloud account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *  *
     * @param CreateMediaLiveChannelRequest $request CreateMediaLiveChannelRequest
     *
     * @return CreateMediaLiveChannelResponse CreateMediaLiveChannelResponse
     */
    public function createMediaLiveChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMediaLiveChannelWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a MediaLive input.
     *  *
     * @description *
     * ## [](#qps-)QPS limit
     * This operation can be called up to 50 times per second for each Alibaba Cloud account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *  *
     * @param CreateMediaLiveInputRequest $tmpReq  CreateMediaLiveInputRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateMediaLiveInputResponse CreateMediaLiveInputResponse
     */
    public function createMediaLiveInputWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateMediaLiveInputShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->inputSettings)) {
            $request->inputSettingsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->inputSettings, 'InputSettings', 'json');
        }
        if (!Utils::isUnset($tmpReq->securityGroupIds)) {
            $request->securityGroupIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->securityGroupIds, 'SecurityGroupIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->inputSettingsShrink)) {
            $body['InputSettings'] = $request->inputSettingsShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->securityGroupIdsShrink)) {
            $body['SecurityGroupIds'] = $request->securityGroupIdsShrink;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMediaLiveInput',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateMediaLiveInputResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateMediaLiveInputResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a MediaLive input.
     *  *
     * @description *
     * ## [](#qps-)QPS limit
     * This operation can be called up to 50 times per second for each Alibaba Cloud account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *  *
     * @param CreateMediaLiveInputRequest $request CreateMediaLiveInputRequest
     *
     * @return CreateMediaLiveInputResponse CreateMediaLiveInputResponse
     */
    public function createMediaLiveInput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMediaLiveInputWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a security group in MediaLive.
     *  *
     * @description *
     * ## [](#qps-)QPS limit
     * This operation can be called up to 50 times per second for each Alibaba Cloud account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *  *
     * @param CreateMediaLiveInputSecurityGroupRequest $tmpReq  CreateMediaLiveInputSecurityGroupRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateMediaLiveInputSecurityGroupResponse CreateMediaLiveInputSecurityGroupResponse
     */
    public function createMediaLiveInputSecurityGroupWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateMediaLiveInputSecurityGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->whitelistRules)) {
            $request->whitelistRulesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->whitelistRules, 'WhitelistRules', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->whitelistRulesShrink)) {
            $body['WhitelistRules'] = $request->whitelistRulesShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMediaLiveInputSecurityGroup',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateMediaLiveInputSecurityGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateMediaLiveInputSecurityGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a security group in MediaLive.
     *  *
     * @description *
     * ## [](#qps-)QPS limit
     * This operation can be called up to 50 times per second for each Alibaba Cloud account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *  *
     * @param CreateMediaLiveInputSecurityGroupRequest $request CreateMediaLiveInputSecurityGroupRequest
     *
     * @return CreateMediaLiveInputSecurityGroupResponse CreateMediaLiveInputSecurityGroupResponse
     */
    public function createMediaLiveInputSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMediaLiveInputSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an ApsaraVideo Media Processing (MPS) queue.
     *  *
     * @param CreatePipelineRequest $request CreatePipelineRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePipelineResponse CreatePipelineResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreatePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreatePipelineResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates an ApsaraVideo Media Processing (MPS) queue.
     *  *
     * @param CreatePipelineRequest $request CreatePipelineRequest
     *
     * @return CreatePipelineResponse CreatePipelineResponse
     */
    public function createPipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPipelineWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a program in a MediaWeaver channel.
     *  *
     * @param CreateProgramRequest $request CreateProgramRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateProgramResponse CreateProgramResponse
     */
    public function createProgramWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->adBreaks)) {
            $query['AdBreaks'] = $request->adBreaks;
        }
        if (!Utils::isUnset($request->channelName)) {
            $query['ChannelName'] = $request->channelName;
        }
        if (!Utils::isUnset($request->clipRange)) {
            $query['ClipRange'] = $request->clipRange;
        }
        if (!Utils::isUnset($request->programName)) {
            $query['ProgramName'] = $request->programName;
        }
        if (!Utils::isUnset($request->sourceLocationName)) {
            $query['SourceLocationName'] = $request->sourceLocationName;
        }
        if (!Utils::isUnset($request->sourceName)) {
            $query['SourceName'] = $request->sourceName;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->transition)) {
            $query['Transition'] = $request->transition;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateProgramResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateProgramResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a program in a MediaWeaver channel.
     *  *
     * @param CreateProgramRequest $request CreateProgramRequest
     *
     * @return CreateProgramResponse CreateProgramResponse
     */
    public function createProgram($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createProgramWithOptions($request, $runtime);
    }

    /**
     * @summary 创建搜索索引
     *  *
     * @description The large visual model feature is still in the public preview phase. You can use this feature for free for 1,000 hours of videos.
     *  *
     * @param CreateSearchIndexRequest $request CreateSearchIndexRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSearchIndexResponse CreateSearchIndexResponse
     */
    public function createSearchIndexWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->indexConfig)) {
            $query['IndexConfig'] = $request->indexConfig;
        }
        if (!Utils::isUnset($request->indexStatus)) {
            $query['IndexStatus'] = $request->indexStatus;
        }
        if (!Utils::isUnset($request->indexType)) {
            $query['IndexType'] = $request->indexType;
        }
        if (!Utils::isUnset($request->searchLibName)) {
            $query['SearchLibName'] = $request->searchLibName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateSearchIndexResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateSearchIndexResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 创建搜索索引
     *  *
     * @description The large visual model feature is still in the public preview phase. You can use this feature for free for 1,000 hours of videos.
     *  *
     * @param CreateSearchIndexRequest $request CreateSearchIndexRequest
     *
     * @return CreateSearchIndexResponse CreateSearchIndexResponse
     */
    public function createSearchIndex($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSearchIndexWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a search library to store media assets.
     *  *
     * @param CreateSearchLibRequest $request CreateSearchLibRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSearchLibResponse CreateSearchLibResponse
     */
    public function createSearchLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->searchLibName)) {
            $query['SearchLibName'] = $request->searchLibName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateSearchLibResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateSearchLibResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a search library to store media assets.
     *  *
     * @param CreateSearchLibRequest $request CreateSearchLibRequest
     *
     * @return CreateSearchLibResponse CreateSearchLibResponse
     */
    public function createSearchLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSearchLibWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a source in MediaWeaver.
     *  *
     * @param CreateSourceRequest $request CreateSourceRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSourceResponse CreateSourceResponse
     */
    public function createSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->httpPackageConfigurations)) {
            $query['HttpPackageConfigurations'] = $request->httpPackageConfigurations;
        }
        if (!Utils::isUnset($request->sourceLocationName)) {
            $query['SourceLocationName'] = $request->sourceLocationName;
        }
        if (!Utils::isUnset($request->sourceName)) {
            $query['SourceName'] = $request->sourceName;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateSourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateSourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a source in MediaWeaver.
     *  *
     * @param CreateSourceRequest $request CreateSourceRequest
     *
     * @return CreateSourceResponse CreateSourceResponse
     */
    public function createSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSourceWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a source location.
     *  *
     * @param CreateSourceLocationRequest $request CreateSourceLocationRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSourceLocationResponse CreateSourceLocationResponse
     */
    public function createSourceLocationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseUrl)) {
            $query['BaseUrl'] = $request->baseUrl;
        }
        if (!Utils::isUnset($request->enableSegmentDelivery)) {
            $query['EnableSegmentDelivery'] = $request->enableSegmentDelivery;
        }
        if (!Utils::isUnset($request->segmentDeliveryUrl)) {
            $query['SegmentDeliveryUrl'] = $request->segmentDeliveryUrl;
        }
        if (!Utils::isUnset($request->sourceLocationName)) {
            $query['SourceLocationName'] = $request->sourceLocationName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateSourceLocationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateSourceLocationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a source location.
     *  *
     * @param CreateSourceLocationRequest $request CreateSourceLocationRequest
     *
     * @return CreateSourceLocationResponse CreateSourceLocationResponse
     */
    public function createSourceLocation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSourceLocationWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the upload URL and credential of a media asset and creates information about the media asset.
     *  *
     * @description *   You can call this operation to obtain the upload URLs and credentials of audio and video files. You can also call this operation to obtain the upload URLs and credentials of images and auxiliary media assets.
     * *   Obtaining an upload URL and credential is essential for Intelligent Media Services (IMS) and is required in each upload operation.
     * *   If the video upload credential expires, you can call the RefreshUploadMedia operation to obtain a new upload credential. The default validity period of a video upload credential is 3,000 seconds.
     * *   After you upload a media asset, you can configure a callback to receive upload event notifications or call the GetMediaInfo operation to determine whether the media asset is uploaded based on the returned status.
     * *   The MediaId parameter returned by this operation can be used for media asset lifecycle management or media processing.
     * *   You can call this operation to upload media assets only to ApsaraVideo VOD, but not to your own Object Storage Service (OSS) buckets. To upload a media asset to your own OSS bucket, you can upload the file to your OSS bucket by using [OSS SDK](https://help.aliyun.com/document_detail/32006.html), and then call the [RegisterMediaInfo](https://help.aliyun.com/document_detail/441152.html) operation to register the file in the OSS bucket with the media asset library.
     * *   This operation is available only in the China (Shanghai), China (Beijing), and China (Shenzhen) regions.
     *  *
     * @param CreateUploadMediaRequest $request CreateUploadMediaRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateUploadMediaResponse CreateUploadMediaResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateUploadMediaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateUploadMediaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Obtains the upload URL and credential of a media asset and creates information about the media asset.
     *  *
     * @description *   You can call this operation to obtain the upload URLs and credentials of audio and video files. You can also call this operation to obtain the upload URLs and credentials of images and auxiliary media assets.
     * *   Obtaining an upload URL and credential is essential for Intelligent Media Services (IMS) and is required in each upload operation.
     * *   If the video upload credential expires, you can call the RefreshUploadMedia operation to obtain a new upload credential. The default validity period of a video upload credential is 3,000 seconds.
     * *   After you upload a media asset, you can configure a callback to receive upload event notifications or call the GetMediaInfo operation to determine whether the media asset is uploaded based on the returned status.
     * *   The MediaId parameter returned by this operation can be used for media asset lifecycle management or media processing.
     * *   You can call this operation to upload media assets only to ApsaraVideo VOD, but not to your own Object Storage Service (OSS) buckets. To upload a media asset to your own OSS bucket, you can upload the file to your OSS bucket by using [OSS SDK](https://help.aliyun.com/document_detail/32006.html), and then call the [RegisterMediaInfo](https://help.aliyun.com/document_detail/441152.html) operation to register the file in the OSS bucket with the media asset library.
     * *   This operation is available only in the China (Shanghai), China (Beijing), and China (Shenzhen) regions.
     *  *
     * @param CreateUploadMediaRequest $request CreateUploadMediaRequest
     *
     * @return CreateUploadMediaResponse CreateUploadMediaResponse
     */
    public function createUploadMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUploadMediaWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the upload URL and credential of a media stream.
     *  *
     * @description *   You can call this operation to upload only a local media stream. After the media stream is uploaded, it is associated with the specified media asset ID.
     * *   You can call this operation to upload media streams only to ApsaraVideo VOD, but not to your own Object Storage Service (OSS) buckets. To upload a media stream to your own OSS bucket, you can upload the file to your OSS bucket by using [OSS SDK](https://help.aliyun.com/document_detail/32006.html), and then call the [RegisterMediaStream](https://help.aliyun.com/document_detail/440765.html) operation to associate the media stream with the specified media asset ID.
     * *   This operation is available only in the China (Shanghai), China (Beijing), and China (Shenzhen) regions.
     *  *
     * @param CreateUploadStreamRequest $request CreateUploadStreamRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateUploadStreamResponse CreateUploadStreamResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateUploadStreamResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateUploadStreamResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Obtains the upload URL and credential of a media stream.
     *  *
     * @description *   You can call this operation to upload only a local media stream. After the media stream is uploaded, it is associated with the specified media asset ID.
     * *   You can call this operation to upload media streams only to ApsaraVideo VOD, but not to your own Object Storage Service (OSS) buckets. To upload a media stream to your own OSS bucket, you can upload the file to your OSS bucket by using [OSS SDK](https://help.aliyun.com/document_detail/32006.html), and then call the [RegisterMediaStream](https://help.aliyun.com/document_detail/440765.html) operation to associate the media stream with the specified media asset ID.
     * *   This operation is available only in the China (Shanghai), China (Beijing), and China (Shenzhen) regions.
     *  *
     * @param CreateUploadStreamRequest $request CreateUploadStreamRequest
     *
     * @return CreateUploadStreamResponse CreateUploadStreamResponse
     */
    public function createUploadStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createUploadStreamWithOptions($request, $runtime);
    }

    /**
     * @summary Ingests an asset for VOD packaging.
     *  *
     * @param CreateVodPackagingAssetRequest $tmpReq  CreateVodPackagingAssetRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateVodPackagingAssetResponse CreateVodPackagingAssetResponse
     */
    public function createVodPackagingAssetWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateVodPackagingAssetShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->input)) {
            $request->inputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->assetName)) {
            $query['AssetName'] = $request->assetName;
        }
        if (!Utils::isUnset($request->contentId)) {
            $query['ContentId'] = $request->contentId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->inputShrink)) {
            $query['Input'] = $request->inputShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateVodPackagingAssetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateVodPackagingAssetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Ingests an asset for VOD packaging.
     *  *
     * @param CreateVodPackagingAssetRequest $request CreateVodPackagingAssetRequest
     *
     * @return CreateVodPackagingAssetResponse CreateVodPackagingAssetResponse
     */
    public function createVodPackagingAsset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVodPackagingAssetWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a packaging configuration.
     *  *
     * @param CreateVodPackagingConfigurationRequest $tmpReq  CreateVodPackagingConfigurationRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateVodPackagingConfigurationResponse CreateVodPackagingConfigurationResponse
     */
    public function createVodPackagingConfigurationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateVodPackagingConfigurationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->packageConfig)) {
            $request->packageConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->packageConfig, 'PackageConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->configurationName)) {
            $query['ConfigurationName'] = $request->configurationName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->packageConfigShrink)) {
            $query['PackageConfig'] = $request->packageConfigShrink;
        }
        if (!Utils::isUnset($request->protocol)) {
            $query['Protocol'] = $request->protocol;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateVodPackagingConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateVodPackagingConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a packaging configuration.
     *  *
     * @param CreateVodPackagingConfigurationRequest $request CreateVodPackagingConfigurationRequest
     *
     * @return CreateVodPackagingConfigurationResponse CreateVodPackagingConfigurationResponse
     */
    public function createVodPackagingConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVodPackagingConfigurationWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a packaging group.
     *  *
     * @param CreateVodPackagingGroupRequest $request CreateVodPackagingGroupRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateVodPackagingGroupResponse CreateVodPackagingGroupResponse
     */
    public function createVodPackagingGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return CreateVodPackagingGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return CreateVodPackagingGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates a packaging group.
     *  *
     * @param CreateVodPackagingGroupRequest $request CreateVodPackagingGroupRequest
     *
     * @return CreateVodPackagingGroupResponse CreateVodPackagingGroupResponse
     */
    public function createVodPackagingGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVodPackagingGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Decrypts the ciphertext specified by CiphertextBlob in the Key Management Service (KMS) data key.
     *  *
     * @param DecryptKMSDataKeyRequest $request DecryptKMSDataKeyRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DecryptKMSDataKeyResponse DecryptKMSDataKeyResponse
     */
    public function decryptKMSDataKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ciphertextBlob)) {
            $query['CiphertextBlob'] = $request->ciphertextBlob;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DecryptKMSDataKeyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DecryptKMSDataKeyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Decrypts the ciphertext specified by CiphertextBlob in the Key Management Service (KMS) data key.
     *  *
     * @param DecryptKMSDataKeyRequest $request DecryptKMSDataKeyRequest
     *
     * @return DecryptKMSDataKeyResponse DecryptKMSDataKeyResponse
     */
    public function decryptKMSDataKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->decryptKMSDataKeyWithOptions($request, $runtime);
    }

    /**
     * @summary 删除智能体的对话历史记录。
     *  *
     * @param DeleteAIAgentDialogueRequest $request DeleteAIAgentDialogueRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAIAgentDialogueResponse DeleteAIAgentDialogueResponse
     */
    public function deleteAIAgentDialogueWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dialogueId)) {
            $query['DialogueId'] = $request->dialogueId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteAIAgentDialogueResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAIAgentDialogueResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 删除智能体的对话历史记录。
     *  *
     * @param DeleteAIAgentDialogueRequest $request DeleteAIAgentDialogueRequest
     *
     * @return DeleteAIAgentDialogueResponse DeleteAIAgentDialogueResponse
     */
    public function deleteAIAgentDialogue($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAIAgentDialogueWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an ad insertion configuration.
     *  *
     * @param DeleteAdInsertionRequest $request DeleteAdInsertionRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAdInsertionResponse DeleteAdInsertionResponse
     */
    public function deleteAdInsertionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteAdInsertionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAdInsertionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes an ad insertion configuration.
     *  *
     * @param DeleteAdInsertionRequest $request DeleteAdInsertionRequest
     *
     * @return DeleteAdInsertionResponse DeleteAdInsertionResponse
     */
    public function deleteAdInsertion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAdInsertionWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a digital human training job that is in the Init or Fail state.
     *  *
     * @param DeleteAvatarTrainingJobRequest $request DeleteAvatarTrainingJobRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAvatarTrainingJobResponse DeleteAvatarTrainingJobResponse
     */
    public function deleteAvatarTrainingJobWithOptions($request, $runtime)
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteAvatarTrainingJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteAvatarTrainingJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a digital human training job that is in the Init or Fail state.
     *  *
     * @param DeleteAvatarTrainingJobRequest $request DeleteAvatarTrainingJobRequest
     *
     * @return DeleteAvatarTrainingJobResponse DeleteAvatarTrainingJobResponse
     */
    public function deleteAvatarTrainingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAvatarTrainingJobWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a media asset category.
     *  *
     * @description This operation also deletes the subcategories, including the level-2 and level-3 categories, of the category.
     *  *
     * @param DeleteCategoryRequest $request DeleteCategoryRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCategoryResponse DeleteCategoryResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteCategoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a media asset category.
     *  *
     * @description This operation also deletes the subcategories, including the level-2 and level-3 categories, of the category.
     *  *
     * @param DeleteCategoryRequest $request DeleteCategoryRequest
     *
     * @return DeleteCategoryResponse DeleteCategoryResponse
     */
    public function deleteCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCategoryWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a channel in MediaWeaver.
     *  *
     * @param DeleteChannelRequest $request DeleteChannelRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteChannelResponse DeleteChannelResponse
     */
    public function deleteChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->channelName)) {
            $query['ChannelName'] = $request->channelName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteChannelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteChannelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a channel in MediaWeaver.
     *  *
     * @param DeleteChannelRequest $request DeleteChannelRequest
     *
     * @return DeleteChannelResponse DeleteChannelResponse
     */
    public function deleteChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteChannelWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a custom template.
     *  *
     * @param DeleteCustomTemplateRequest $request DeleteCustomTemplateRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCustomTemplateResponse DeleteCustomTemplateResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteCustomTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteCustomTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a custom template.
     *  *
     * @param DeleteCustomTemplateRequest $request DeleteCustomTemplateRequest
     *
     * @return DeleteCustomTemplateResponse DeleteCustomTemplateResponse
     */
    public function deleteCustomTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a human voice cloning job that is not in the Training or Success state.
     *  *
     * @param DeleteCustomizedVoiceJobRequest $request DeleteCustomizedVoiceJobRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCustomizedVoiceJobResponse DeleteCustomizedVoiceJobResponse
     */
    public function deleteCustomizedVoiceJobWithOptions($request, $runtime)
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteCustomizedVoiceJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteCustomizedVoiceJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a human voice cloning job that is not in the Training or Success state.
     *  *
     * @param DeleteCustomizedVoiceJobRequest $request DeleteCustomizedVoiceJobRequest
     *
     * @return DeleteCustomizedVoiceJobResponse DeleteCustomizedVoiceJobResponse
     */
    public function deleteCustomizedVoiceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCustomizedVoiceJobWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a media fingerprint library.
     *  *
     * @param DeleteDNADBRequest $request DeleteDNADBRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDNADBResponse DeleteDNADBResponse
     */
    public function deleteDNADBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBId)) {
            $query['DBId'] = $request->DBId;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteDNADBResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDNADBResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a media fingerprint library.
     *  *
     * @param DeleteDNADBRequest $request DeleteDNADBRequest
     *
     * @return DeleteDNADBResponse DeleteDNADBResponse
     */
    public function deleteDNADB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDNADBWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes files from a media fingerprint library.
     *  *
     * @param DeleteDNAFilesRequest $request DeleteDNAFilesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDNAFilesResponse DeleteDNAFilesResponse
     */
    public function deleteDNAFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBId)) {
            $query['DBId'] = $request->DBId;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->primaryKeys)) {
            $query['PrimaryKeys'] = $request->primaryKeys;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteDNAFilesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteDNAFilesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes files from a media fingerprint library.
     *  *
     * @param DeleteDNAFilesRequest $request DeleteDNAFilesRequest
     *
     * @return DeleteDNAFilesResponse DeleteDNAFilesResponse
     */
    public function deleteDNAFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDNAFilesWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes one or more materials from an online editing project.
     *  *
     * @param DeleteEditingProjectMaterialsRequest $request DeleteEditingProjectMaterialsRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEditingProjectMaterialsResponse DeleteEditingProjectMaterialsResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteEditingProjectMaterialsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteEditingProjectMaterialsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes one or more materials from an online editing project.
     *  *
     * @param DeleteEditingProjectMaterialsRequest $request DeleteEditingProjectMaterialsRequest
     *
     * @return DeleteEditingProjectMaterialsResponse DeleteEditingProjectMaterialsResponse
     */
    public function deleteEditingProjectMaterials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEditingProjectMaterialsWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes one or more online editing project.
     *  *
     * @param DeleteEditingProjectsRequest $request DeleteEditingProjectsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEditingProjectsResponse DeleteEditingProjectsResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteEditingProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteEditingProjectsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes one or more online editing project.
     *  *
     * @param DeleteEditingProjectsRequest $request DeleteEditingProjectsRequest
     *
     * @return DeleteEditingProjectsResponse DeleteEditingProjectsResponse
     */
    public function deleteEditingProjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEditingProjectsWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a live package channel by GroupName and ChannelName.
     *  *
     * @description ## [](#)Usage notes
     * You need to provide GroupName and ChannelName as parameters to specify exactly which channel to delete. Before you delete a channel, you must delete the origin endpoints associated with the channel.
     *  *
     * @param DeleteLivePackageChannelRequest $request DeleteLivePackageChannelRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLivePackageChannelResponse DeleteLivePackageChannelResponse
     */
    public function deleteLivePackageChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->channelName)) {
            $query['ChannelName'] = $request->channelName;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteLivePackageChannelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteLivePackageChannelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a live package channel by GroupName and ChannelName.
     *  *
     * @description ## [](#)Usage notes
     * You need to provide GroupName and ChannelName as parameters to specify exactly which channel to delete. Before you delete a channel, you must delete the origin endpoints associated with the channel.
     *  *
     * @param DeleteLivePackageChannelRequest $request DeleteLivePackageChannelRequest
     *
     * @return DeleteLivePackageChannelResponse DeleteLivePackageChannelResponse
     */
    public function deleteLivePackageChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLivePackageChannelWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a live package channel group by name.
     *  *
     * @description ## [](#)Usage notes
     * Make sure that no channels are included in the channel group before you delete it.
     *  *
     * @param DeleteLivePackageChannelGroupRequest $request DeleteLivePackageChannelGroupRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLivePackageChannelGroupResponse DeleteLivePackageChannelGroupResponse
     */
    public function deleteLivePackageChannelGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteLivePackageChannelGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteLivePackageChannelGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a live package channel group by name.
     *  *
     * @description ## [](#)Usage notes
     * Make sure that no channels are included in the channel group before you delete it.
     *  *
     * @param DeleteLivePackageChannelGroupRequest $request DeleteLivePackageChannelGroupRequest
     *
     * @return DeleteLivePackageChannelGroupResponse DeleteLivePackageChannelGroupResponse
     */
    public function deleteLivePackageChannelGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLivePackageChannelGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an origin endpoint associated with a live package channel.
     *  *
     * @description ## [](#)Usage notes
     * This API operation is used to delete an origin endpoint associated with a live package channel by specifying `GroupName`, `ChannelName`, and `EndpointName`. This operation will permanently delete the relevant configurations. Exercise caution when you perform this operation.
     *  *
     * @param DeleteLivePackageOriginEndpointRequest $request DeleteLivePackageOriginEndpointRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLivePackageOriginEndpointResponse DeleteLivePackageOriginEndpointResponse
     */
    public function deleteLivePackageOriginEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->channelName)) {
            $query['ChannelName'] = $request->channelName;
        }
        if (!Utils::isUnset($request->endpointName)) {
            $query['EndpointName'] = $request->endpointName;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteLivePackageOriginEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteLivePackageOriginEndpointResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes an origin endpoint associated with a live package channel.
     *  *
     * @description ## [](#)Usage notes
     * This API operation is used to delete an origin endpoint associated with a live package channel by specifying `GroupName`, `ChannelName`, and `EndpointName`. This operation will permanently delete the relevant configurations. Exercise caution when you perform this operation.
     *  *
     * @param DeleteLivePackageOriginEndpointRequest $request DeleteLivePackageOriginEndpointRequest
     *
     * @return DeleteLivePackageOriginEndpointResponse DeleteLivePackageOriginEndpointResponse
     */
    public function deleteLivePackageOriginEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLivePackageOriginEndpointWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes live stream recording files. You can choose to delete only the recording files or delete both the recording files and the original Object Storage Service (OSS) files.
     *  *
     * @param DeleteLiveRecordFilesRequest $request DeleteLiveRecordFilesRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLiveRecordFilesResponse DeleteLiveRecordFilesResponse
     */
    public function deleteLiveRecordFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->recordIds)) {
            $query['RecordIds'] = $request->recordIds;
        }
        if (!Utils::isUnset($request->removeFile)) {
            $query['RemoveFile'] = $request->removeFile;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteLiveRecordFilesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteLiveRecordFilesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes live stream recording files. You can choose to delete only the recording files or delete both the recording files and the original Object Storage Service (OSS) files.
     *  *
     * @param DeleteLiveRecordFilesRequest $request DeleteLiveRecordFilesRequest
     *
     * @return DeleteLiveRecordFilesResponse DeleteLiveRecordFilesResponse
     */
    public function deleteLiveRecordFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveRecordFilesWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a live stream recording template without affecting existing jobs.
     *  *
     * @param DeleteLiveRecordTemplateRequest $request DeleteLiveRecordTemplateRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLiveRecordTemplateResponse DeleteLiveRecordTemplateResponse
     */
    public function deleteLiveRecordTemplateWithOptions($request, $runtime)
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteLiveRecordTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteLiveRecordTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a live stream recording template without affecting existing jobs.
     *  *
     * @param DeleteLiveRecordTemplateRequest $request DeleteLiveRecordTemplateRequest
     *
     * @return DeleteLiveRecordTemplateResponse DeleteLiveRecordTemplateResponse
     */
    public function deleteLiveRecordTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveRecordTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes live stream snapshot files. You can choose to delete only the snapshot files or delete both the snapshot files and the original Object Storage Service (OSS) files.
     *  *
     * @param DeleteLiveSnapshotFilesRequest $tmpReq  DeleteLiveSnapshotFilesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLiveSnapshotFilesResponse DeleteLiveSnapshotFilesResponse
     */
    public function deleteLiveSnapshotFilesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteLiveSnapshotFilesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->createTimestampList)) {
            $request->createTimestampListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->createTimestampList, 'CreateTimestampList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->createTimestampListShrink)) {
            $query['CreateTimestampList'] = $request->createTimestampListShrink;
        }
        if (!Utils::isUnset($request->deleteOriginalFile)) {
            $query['DeleteOriginalFile'] = $request->deleteOriginalFile;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteLiveSnapshotFilesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteLiveSnapshotFilesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes live stream snapshot files. You can choose to delete only the snapshot files or delete both the snapshot files and the original Object Storage Service (OSS) files.
     *  *
     * @param DeleteLiveSnapshotFilesRequest $request DeleteLiveSnapshotFilesRequest
     *
     * @return DeleteLiveSnapshotFilesResponse DeleteLiveSnapshotFilesResponse
     */
    public function deleteLiveSnapshotFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveSnapshotFilesWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a live stream snapshot template.
     *  *
     * @param DeleteLiveSnapshotTemplateRequest $request DeleteLiveSnapshotTemplateRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLiveSnapshotTemplateResponse DeleteLiveSnapshotTemplateResponse
     */
    public function deleteLiveSnapshotTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteLiveSnapshotTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteLiveSnapshotTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a live stream snapshot template.
     *  *
     * @param DeleteLiveSnapshotTemplateRequest $request DeleteLiveSnapshotTemplateRequest
     *
     * @return DeleteLiveSnapshotTemplateResponse DeleteLiveSnapshotTemplateResponse
     */
    public function deleteLiveSnapshotTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveSnapshotTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 删除指定转码任务
     *  *
     * @param DeleteLiveTranscodeJobRequest $request DeleteLiveTranscodeJobRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLiveTranscodeJobResponse DeleteLiveTranscodeJobResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteLiveTranscodeJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteLiveTranscodeJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 删除指定转码任务
     *  *
     * @param DeleteLiveTranscodeJobRequest $request DeleteLiveTranscodeJobRequest
     *
     * @return DeleteLiveTranscodeJobResponse DeleteLiveTranscodeJobResponse
     */
    public function deleteLiveTranscodeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveTranscodeJobWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a live stream transcoding template.
     *  *
     * @param DeleteLiveTranscodeTemplateRequest $request DeleteLiveTranscodeTemplateRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLiveTranscodeTemplateResponse DeleteLiveTranscodeTemplateResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteLiveTranscodeTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteLiveTranscodeTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a live stream transcoding template.
     *  *
     * @param DeleteLiveTranscodeTemplateRequest $request DeleteLiveTranscodeTemplateRequest
     *
     * @return DeleteLiveTranscodeTemplateResponse DeleteLiveTranscodeTemplateResponse
     */
    public function deleteLiveTranscodeTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLiveTranscodeTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a MediaConnect flow.
     *  *
     * @description *   When the specified flow ID is not available, an error code is returned.
     * *   When a flow is deleted, its source and outputs are also deleted.
     * *   When a flow is in the online state, it cannot be deleted.
     *  *
     * @param DeleteMediaConnectFlowRequest $request DeleteMediaConnectFlowRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMediaConnectFlowResponse DeleteMediaConnectFlowResponse
     */
    public function deleteMediaConnectFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->flowId)) {
            $query['FlowId'] = $request->flowId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteMediaConnectFlowResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteMediaConnectFlowResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a MediaConnect flow.
     *  *
     * @description *   When the specified flow ID is not available, an error code is returned.
     * *   When a flow is deleted, its source and outputs are also deleted.
     * *   When a flow is in the online state, it cannot be deleted.
     *  *
     * @param DeleteMediaConnectFlowRequest $request DeleteMediaConnectFlowRequest
     *
     * @return DeleteMediaConnectFlowResponse DeleteMediaConnectFlowResponse
     */
    public function deleteMediaConnectFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMediaConnectFlowWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes the source of a MediaConnect flow.
     *  *
     * @description *   When the specified flow ID is not available, an error code is returned.
     * *   When a flow is in the online state, its source cannot be deleted.
     * *   You can delete the source only after all outputs of the flow have been deleted.
     *  *
     * @param DeleteMediaConnectFlowInputRequest $request DeleteMediaConnectFlowInputRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMediaConnectFlowInputResponse DeleteMediaConnectFlowInputResponse
     */
    public function deleteMediaConnectFlowInputWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->flowId)) {
            $query['FlowId'] = $request->flowId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteMediaConnectFlowInputResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteMediaConnectFlowInputResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes the source of a MediaConnect flow.
     *  *
     * @description *   When the specified flow ID is not available, an error code is returned.
     * *   When a flow is in the online state, its source cannot be deleted.
     * *   You can delete the source only after all outputs of the flow have been deleted.
     *  *
     * @param DeleteMediaConnectFlowInputRequest $request DeleteMediaConnectFlowInputRequest
     *
     * @return DeleteMediaConnectFlowInputResponse DeleteMediaConnectFlowInputResponse
     */
    public function deleteMediaConnectFlowInput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMediaConnectFlowInputWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an output of a MediaConnect flow.
     *  *
     * @description *   When the specified flow ID is not available, an error code is returned.
     * *   When a flow is in the online state, its outputs cannot be deleted.
     *  *
     * @param DeleteMediaConnectFlowOutputRequest $request DeleteMediaConnectFlowOutputRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMediaConnectFlowOutputResponse DeleteMediaConnectFlowOutputResponse
     */
    public function deleteMediaConnectFlowOutputWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->flowId)) {
            $query['FlowId'] = $request->flowId;
        }
        if (!Utils::isUnset($request->outputName)) {
            $query['OutputName'] = $request->outputName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteMediaConnectFlowOutputResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteMediaConnectFlowOutputResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes an output of a MediaConnect flow.
     *  *
     * @description *   When the specified flow ID is not available, an error code is returned.
     * *   When a flow is in the online state, its outputs cannot be deleted.
     *  *
     * @param DeleteMediaConnectFlowOutputRequest $request DeleteMediaConnectFlowOutputRequest
     *
     * @return DeleteMediaConnectFlowOutputResponse DeleteMediaConnectFlowOutputResponse
     */
    public function deleteMediaConnectFlowOutput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMediaConnectFlowOutputWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a specific media asset from a search library.
     *  *
     * @param DeleteMediaFromSearchLibRequest $request DeleteMediaFromSearchLibRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMediaFromSearchLibResponse DeleteMediaFromSearchLibResponse
     */
    public function deleteMediaFromSearchLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->msgBody)) {
            $query['MsgBody'] = $request->msgBody;
        }
        if (!Utils::isUnset($request->searchLibName)) {
            $query['SearchLibName'] = $request->searchLibName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteMediaFromSearchLibResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteMediaFromSearchLibResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a specific media asset from a search library.
     *  *
     * @param DeleteMediaFromSearchLibRequest $request DeleteMediaFromSearchLibRequest
     *
     * @return DeleteMediaFromSearchLibResponse DeleteMediaFromSearchLibResponse
     */
    public function deleteMediaFromSearchLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMediaFromSearchLibWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes multiple media assets at a time. You can delete at most 20 media assets at a time. If MediaIds is specified, it is preferentially used. If MediaIds is empty, InputURLs must be specified.
     *  *
     * @param DeleteMediaInfosRequest $request DeleteMediaInfosRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMediaInfosResponse DeleteMediaInfosResponse
     */
    public function deleteMediaInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deletePhysicalFiles)) {
            $query['DeletePhysicalFiles'] = $request->deletePhysicalFiles;
        }
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteMediaInfosResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteMediaInfosResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes multiple media assets at a time. You can delete at most 20 media assets at a time. If MediaIds is specified, it is preferentially used. If MediaIds is empty, InputURLs must be specified.
     *  *
     * @param DeleteMediaInfosRequest $request DeleteMediaInfosRequest
     *
     * @return DeleteMediaInfosResponse DeleteMediaInfosResponse
     */
    public function deleteMediaInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMediaInfosWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a MediaLive channel.
     *  *
     * @description *
     * *   You can only delete a channel that is not running.
     * ## [](#qps-)QPS limit
     * This operation can be called up to 50 times per second for each Alibaba Cloud account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *  *
     * @param DeleteMediaLiveChannelRequest $request DeleteMediaLiveChannelRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMediaLiveChannelResponse DeleteMediaLiveChannelResponse
     */
    public function deleteMediaLiveChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteMediaLiveChannel',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteMediaLiveChannelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteMediaLiveChannelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a MediaLive channel.
     *  *
     * @description *
     * *   You can only delete a channel that is not running.
     * ## [](#qps-)QPS limit
     * This operation can be called up to 50 times per second for each Alibaba Cloud account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *  *
     * @param DeleteMediaLiveChannelRequest $request DeleteMediaLiveChannelRequest
     *
     * @return DeleteMediaLiveChannelResponse DeleteMediaLiveChannelResponse
     */
    public function deleteMediaLiveChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMediaLiveChannelWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a MediaLive input.
     *  *
     * @description *
     * *   You can delete an input only when it is not associated with a MediaLive channel.
     * ## [](#qps-)QPS limit
     * This operation can be called up to 50 times per second for each Alibaba Cloud account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *  *
     * @param DeleteMediaLiveInputRequest $request DeleteMediaLiveInputRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMediaLiveInputResponse DeleteMediaLiveInputResponse
     */
    public function deleteMediaLiveInputWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->inputId)) {
            $body['InputId'] = $request->inputId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteMediaLiveInput',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteMediaLiveInputResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteMediaLiveInputResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a MediaLive input.
     *  *
     * @description *
     * *   You can delete an input only when it is not associated with a MediaLive channel.
     * ## [](#qps-)QPS limit
     * This operation can be called up to 50 times per second for each Alibaba Cloud account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *  *
     * @param DeleteMediaLiveInputRequest $request DeleteMediaLiveInputRequest
     *
     * @return DeleteMediaLiveInputResponse DeleteMediaLiveInputResponse
     */
    public function deleteMediaLiveInput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMediaLiveInputWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a security group in MediaLive.
     *  *
     * @description *
     * *   You can only delete a security group not associated with an input.
     * ## [](#qps-)QPS limit
     * This operation can be called up to 50 times per second for each Alibaba Cloud account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *  *
     * @param DeleteMediaLiveInputSecurityGroupRequest $request DeleteMediaLiveInputSecurityGroupRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMediaLiveInputSecurityGroupResponse DeleteMediaLiveInputSecurityGroupResponse
     */
    public function deleteMediaLiveInputSecurityGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->securityGroupId)) {
            $body['SecurityGroupId'] = $request->securityGroupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteMediaLiveInputSecurityGroup',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteMediaLiveInputSecurityGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteMediaLiveInputSecurityGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a security group in MediaLive.
     *  *
     * @description *
     * *   You can only delete a security group not associated with an input.
     * ## [](#qps-)QPS limit
     * This operation can be called up to 50 times per second for each Alibaba Cloud account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *  *
     * @param DeleteMediaLiveInputSecurityGroupRequest $request DeleteMediaLiveInputSecurityGroupRequest
     *
     * @return DeleteMediaLiveInputSecurityGroupResponse DeleteMediaLiveInputSecurityGroupResponse
     */
    public function deleteMediaLiveInputSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMediaLiveInputSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes the marks of a media asset.
     *  *
     * @param DeleteMediaMarksRequest $request DeleteMediaMarksRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMediaMarksResponse DeleteMediaMarksResponse
     */
    public function deleteMediaMarksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->mediaMarkIds)) {
            $query['MediaMarkIds'] = $request->mediaMarkIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteMediaMarksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteMediaMarksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes the marks of a media asset.
     *  *
     * @param DeleteMediaMarksRequest $request DeleteMediaMarksRequest
     *
     * @return DeleteMediaMarksResponse DeleteMediaMarksResponse
     */
    public function deleteMediaMarks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMediaMarksWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an ApsaraVideo Media Processing (MPS) queue.
     *  *
     * @param DeletePipelineRequest $request DeletePipelineRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePipelineResponse DeletePipelineResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeletePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeletePipelineResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes an ApsaraVideo Media Processing (MPS) queue.
     *  *
     * @param DeletePipelineRequest $request DeletePipelineRequest
     *
     * @return DeletePipelineResponse DeletePipelineResponse
     */
    public function deletePipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePipelineWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes media streams such as video streams and audio streams.
     *  *
     * @description You can call this operation to delete multiple media streams at a time.
     *  *
     * @param DeletePlayInfoRequest $request DeletePlayInfoRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePlayInfoResponse DeletePlayInfoResponse
     */
    public function deletePlayInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deletePhysicalFiles)) {
            $query['DeletePhysicalFiles'] = $request->deletePhysicalFiles;
        }
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeletePlayInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeletePlayInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes media streams such as video streams and audio streams.
     *  *
     * @description You can call this operation to delete multiple media streams at a time.
     *  *
     * @param DeletePlayInfoRequest $request DeletePlayInfoRequest
     *
     * @return DeletePlayInfoResponse DeletePlayInfoResponse
     */
    public function deletePlayInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePlayInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a program from a channel.
     *  *
     * @param DeleteProgramRequest $request DeleteProgramRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteProgramResponse DeleteProgramResponse
     */
    public function deleteProgramWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->channelName)) {
            $query['ChannelName'] = $request->channelName;
        }
        if (!Utils::isUnset($request->programName)) {
            $query['ProgramName'] = $request->programName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteProgramResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteProgramResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a program from a channel.
     *  *
     * @param DeleteProgramRequest $request DeleteProgramRequest
     *
     * @return DeleteProgramResponse DeleteProgramResponse
     */
    public function deleteProgram($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteProgramWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes intelligent jobs based on job IDs.
     *  *
     * @param DeleteSmartJobRequest $request DeleteSmartJobRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSmartJobResponse DeleteSmartJobResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteSmartJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteSmartJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes intelligent jobs based on job IDs.
     *  *
     * @param DeleteSmartJobRequest $request DeleteSmartJobRequest
     *
     * @return DeleteSmartJobResponse DeleteSmartJobResponse
     */
    public function deleteSmartJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSmartJobWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a source from MediaWeaver.
     *  *
     * @param DeleteSourceRequest $request DeleteSourceRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSourceResponse DeleteSourceResponse
     */
    public function deleteSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->softDelete)) {
            $query['SoftDelete'] = $request->softDelete;
        }
        if (!Utils::isUnset($request->sourceLocationName)) {
            $query['SourceLocationName'] = $request->sourceLocationName;
        }
        if (!Utils::isUnset($request->sourceName)) {
            $query['SourceName'] = $request->sourceName;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteSourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteSourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a source from MediaWeaver.
     *  *
     * @param DeleteSourceRequest $request DeleteSourceRequest
     *
     * @return DeleteSourceResponse DeleteSourceResponse
     */
    public function deleteSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSourceWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a source location.
     *  *
     * @param DeleteSourceLocationRequest $request DeleteSourceLocationRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSourceLocationResponse DeleteSourceLocationResponse
     */
    public function deleteSourceLocationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->softDelete)) {
            $query['SoftDelete'] = $request->softDelete;
        }
        if (!Utils::isUnset($request->sourceLocationName)) {
            $query['SourceLocationName'] = $request->sourceLocationName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteSourceLocationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteSourceLocationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a source location.
     *  *
     * @param DeleteSourceLocationRequest $request DeleteSourceLocationRequest
     *
     * @return DeleteSourceLocationResponse DeleteSourceLocationResponse
     */
    public function deleteSourceLocation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSourceLocationWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes templates.
     *  *
     * @description A template is an encapsulation of the timeline of a media editing and production job. You can define a common timeline as a template. When you have the same requirements, you need to only specify key parameters and materials to produce videos.
     * *   For more information about how to use a regular template, see [Create and use a regular template](https://help.aliyun.com/document_detail/445399.html).
     * *   For more information about how to use an advanced template, see [Create and use advanced templates](https://help.aliyun.com/document_detail/445389.html).
     *  *
     * @param DeleteTemplateRequest $request DeleteTemplateRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTemplateResponse DeleteTemplateResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes templates.
     *  *
     * @description A template is an encapsulation of the timeline of a media editing and production job. You can define a common timeline as a template. When you have the same requirements, you need to only specify key parameters and materials to produce videos.
     * *   For more information about how to use a regular template, see [Create and use a regular template](https://help.aliyun.com/document_detail/445399.html).
     * *   For more information about how to use an advanced template, see [Create and use advanced templates](https://help.aliyun.com/document_detail/445389.html).
     *  *
     * @param DeleteTemplateRequest $request DeleteTemplateRequest
     *
     * @return DeleteTemplateResponse DeleteTemplateResponse
     */
    public function deleteTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a VOD packaging asset.
     *  *
     * @param DeleteVodPackagingAssetRequest $request DeleteVodPackagingAssetRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteVodPackagingAssetResponse DeleteVodPackagingAssetResponse
     */
    public function deleteVodPackagingAssetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->assetName)) {
            $query['AssetName'] = $request->assetName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteVodPackagingAssetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteVodPackagingAssetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a VOD packaging asset.
     *  *
     * @param DeleteVodPackagingAssetRequest $request DeleteVodPackagingAssetRequest
     *
     * @return DeleteVodPackagingAssetResponse DeleteVodPackagingAssetResponse
     */
    public function deleteVodPackagingAsset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVodPackagingAssetWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a packaging configuration.
     *  *
     * @param DeleteVodPackagingConfigurationRequest $request DeleteVodPackagingConfigurationRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteVodPackagingConfigurationResponse DeleteVodPackagingConfigurationResponse
     */
    public function deleteVodPackagingConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configurationName)) {
            $query['ConfigurationName'] = $request->configurationName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteVodPackagingConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteVodPackagingConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a packaging configuration.
     *  *
     * @param DeleteVodPackagingConfigurationRequest $request DeleteVodPackagingConfigurationRequest
     *
     * @return DeleteVodPackagingConfigurationResponse DeleteVodPackagingConfigurationResponse
     */
    public function deleteVodPackagingConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVodPackagingConfigurationWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a packaging group.
     *  *
     * @param DeleteVodPackagingGroupRequest $request DeleteVodPackagingGroupRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteVodPackagingGroupResponse DeleteVodPackagingGroupResponse
     */
    public function deleteVodPackagingGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DeleteVodPackagingGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DeleteVodPackagingGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a packaging group.
     *  *
     * @param DeleteVodPackagingGroupRequest $request DeleteVodPackagingGroupRequest
     *
     * @return DeleteVodPackagingGroupResponse DeleteVodPackagingGroupResponse
     */
    public function deleteVodPackagingGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVodPackagingGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about an AI agent.
     *  *
     * @description ## [](#)Request description
     * *   **Feature**: You can call this operation to query the information about an AI agent.
     * *   **Scenario**: If you need to monitor or analyze the performance of an AI agent in a call or debug the agent configurations, you can call this operation to obtain required data.
     *  *
     * @param DescribeAIAgentInstanceRequest $request DescribeAIAgentInstanceRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAIAgentInstanceResponse DescribeAIAgentInstanceResponse
     */
    public function describeAIAgentInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeAIAgentInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeAIAgentInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about an AI agent.
     *  *
     * @description ## [](#)Request description
     * *   **Feature**: You can call this operation to query the information about an AI agent.
     * *   **Scenario**: If you need to monitor or analyze the performance of an AI agent in a call or debug the agent configurations, you can call this operation to obtain required data.
     *  *
     * @param DescribeAIAgentInstanceRequest $request DescribeAIAgentInstanceRequest
     *
     * @return DescribeAIAgentInstanceResponse DescribeAIAgentInstanceResponse
     */
    public function describeAIAgentInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAIAgentInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the usage statistics of Intelligent Media Services (IMS) on video-on-demand (VOD) editing. The maximum query range is 31 days. You can query data within the last 90 days.
     *  *
     * @param DescribeMeterImsEditUsageRequest $request DescribeMeterImsEditUsageRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMeterImsEditUsageResponse DescribeMeterImsEditUsageResponse
     */
    public function describeMeterImsEditUsageWithOptions($request, $runtime)
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeMeterImsEditUsageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeMeterImsEditUsageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the usage statistics of Intelligent Media Services (IMS) on video-on-demand (VOD) editing. The maximum query range is 31 days. You can query data within the last 90 days.
     *  *
     * @param DescribeMeterImsEditUsageRequest $request DescribeMeterImsEditUsageRequest
     *
     * @return DescribeMeterImsEditUsageResponse DescribeMeterImsEditUsageResponse
     */
    public function describeMeterImsEditUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterImsEditUsageWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the usage statistics of Intelligent Media Services (IMS) on ultra high definition (UHD) transcoding of ApsaraVideo Media Processing (MPS). The maximum query range is 31 days. You can query data within the last 90 days.
     *  *
     * @param DescribeMeterImsMediaConvertUHDUsageRequest $request DescribeMeterImsMediaConvertUHDUsageRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMeterImsMediaConvertUHDUsageResponse DescribeMeterImsMediaConvertUHDUsageResponse
     */
    public function describeMeterImsMediaConvertUHDUsageWithOptions($request, $runtime)
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeMeterImsMediaConvertUHDUsageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeMeterImsMediaConvertUHDUsageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the usage statistics of Intelligent Media Services (IMS) on ultra high definition (UHD) transcoding of ApsaraVideo Media Processing (MPS). The maximum query range is 31 days. You can query data within the last 90 days.
     *  *
     * @param DescribeMeterImsMediaConvertUHDUsageRequest $request DescribeMeterImsMediaConvertUHDUsageRequest
     *
     * @return DescribeMeterImsMediaConvertUHDUsageResponse DescribeMeterImsMediaConvertUHDUsageResponse
     */
    public function describeMeterImsMediaConvertUHDUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterImsMediaConvertUHDUsageWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the usage statistics of Intelligent Media Services (IMS) on video-on-demand (VOD) transcoding. The maximum query range is 31 days. You can query data within the last 90 days.
     *  *
     * @param DescribeMeterImsMediaConvertUsageRequest $request DescribeMeterImsMediaConvertUsageRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMeterImsMediaConvertUsageResponse DescribeMeterImsMediaConvertUsageResponse
     */
    public function describeMeterImsMediaConvertUsageWithOptions($request, $runtime)
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeMeterImsMediaConvertUsageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeMeterImsMediaConvertUsageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the usage statistics of Intelligent Media Services (IMS) on video-on-demand (VOD) transcoding. The maximum query range is 31 days. You can query data within the last 90 days.
     *  *
     * @param DescribeMeterImsMediaConvertUsageRequest $request DescribeMeterImsMediaConvertUsageRequest
     *
     * @return DescribeMeterImsMediaConvertUsageResponse DescribeMeterImsMediaConvertUsageResponse
     */
    public function describeMeterImsMediaConvertUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterImsMediaConvertUsageWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the usage statistics of Intelligent Media Services (IMS) on AI processing of ApsaraVideo Media Processing (MPS). The maximum query range is 31 days. You can query data within the last 90 days.
     *  *
     * @param DescribeMeterImsMpsAiUsageRequest $request DescribeMeterImsMpsAiUsageRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMeterImsMpsAiUsageResponse DescribeMeterImsMpsAiUsageResponse
     */
    public function describeMeterImsMpsAiUsageWithOptions($request, $runtime)
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeMeterImsMpsAiUsageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeMeterImsMpsAiUsageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the usage statistics of Intelligent Media Services (IMS) on AI processing of ApsaraVideo Media Processing (MPS). The maximum query range is 31 days. You can query data within the last 90 days.
     *  *
     * @param DescribeMeterImsMpsAiUsageRequest $request DescribeMeterImsMpsAiUsageRequest
     *
     * @return DescribeMeterImsMpsAiUsageResponse DescribeMeterImsMpsAiUsageResponse
     */
    public function describeMeterImsMpsAiUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterImsMpsAiUsageWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the usage statistics of Intelligent Media Services (IMS). The maximum query range is 31 days. You can query data within the last 90 days.
     *  *
     * @param DescribeMeterImsSummaryRequest $request DescribeMeterImsSummaryRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMeterImsSummaryResponse DescribeMeterImsSummaryResponse
     */
    public function describeMeterImsSummaryWithOptions($request, $runtime)
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeMeterImsSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeMeterImsSummaryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the usage statistics of Intelligent Media Services (IMS). The maximum query range is 31 days. You can query data within the last 90 days.
     *  *
     * @param DescribeMeterImsSummaryRequest $request DescribeMeterImsSummaryRequest
     *
     * @return DescribeMeterImsSummaryResponse DescribeMeterImsSummaryResponse
     */
    public function describeMeterImsSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeterImsSummaryWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the event callback configurations of an AI agent.
     *  *
     * @description You can call this operation to query the detailed callback configurations of an AI agent.
     *  *
     * @param DescribeNotifyConfigRequest $request DescribeNotifyConfigRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNotifyConfigResponse DescribeNotifyConfigResponse
     */
    public function describeNotifyConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->AIAgentId)) {
            $query['AIAgentId'] = $request->AIAgentId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeNotifyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeNotifyConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the event callback configurations of an AI agent.
     *  *
     * @description You can call this operation to query the detailed callback configurations of an AI agent.
     *  *
     * @param DescribeNotifyConfigRequest $request DescribeNotifyConfigRequest
     *
     * @return DescribeNotifyConfigResponse DescribeNotifyConfigResponse
     */
    public function describeNotifyConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNotifyConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribePlayListRequest $request DescribePlayListRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePlayListResponse DescribePlayListResponse
     */
    public function describePlayListWithOptions($request, $runtime)
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribePlayListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribePlayListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @param DescribePlayListRequest $request DescribePlayListRequest
     *
     * @return DescribePlayListResponse DescribePlayListResponse
     */
    public function describePlayList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePlayListWithOptions($request, $runtime);
    }

    /**
     * @summary 查询实例
     *  *
     * @param DescribeRtcRobotInstanceRequest $request DescribeRtcRobotInstanceRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRtcRobotInstanceResponse DescribeRtcRobotInstanceResponse
     */
    public function describeRtcRobotInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DescribeRtcRobotInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DescribeRtcRobotInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询实例
     *  *
     * @param DescribeRtcRobotInstanceRequest $request DescribeRtcRobotInstanceRequest
     *
     * @return DescribeRtcRobotInstanceResponse DescribeRtcRobotInstanceResponse
     */
    public function describeRtcRobotInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRtcRobotInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Checks whether the reading of users has issues, such as noticeable pronunciation errors or background noise. After the audio is checked on the cloud, the qualified audio is temporarily stored on the cloud for subsequent training. Do not skip this step.
     *  *
     * @param DetectAudioForCustomizedVoiceJobRequest $request DetectAudioForCustomizedVoiceJobRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DetectAudioForCustomizedVoiceJobResponse DetectAudioForCustomizedVoiceJobResponse
     */
    public function detectAudioForCustomizedVoiceJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->audioRecordId)) {
            $query['AudioRecordId'] = $request->audioRecordId;
        }
        if (!Utils::isUnset($request->recordUrl)) {
            $query['RecordUrl'] = $request->recordUrl;
        }
        if (!Utils::isUnset($request->voiceId)) {
            $query['VoiceId'] = $request->voiceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DetectAudioForCustomizedVoiceJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DetectAudioForCustomizedVoiceJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Checks whether the reading of users has issues, such as noticeable pronunciation errors or background noise. After the audio is checked on the cloud, the qualified audio is temporarily stored on the cloud for subsequent training. Do not skip this step.
     *  *
     * @param DetectAudioForCustomizedVoiceJobRequest $request DetectAudioForCustomizedVoiceJobRequest
     *
     * @return DetectAudioForCustomizedVoiceJobResponse DetectAudioForCustomizedVoiceJobResponse
     */
    public function detectAudioForCustomizedVoiceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detectAudioForCustomizedVoiceJobWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a search index. After you delete a search index, the existing index data is cleared and index-based analysis, storage, and query are not supported for subsequent media assets.
     *  *
     * @param DropSearchIndexRequest $request DropSearchIndexRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DropSearchIndexResponse DropSearchIndexResponse
     */
    public function dropSearchIndexWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->indexType)) {
            $query['IndexType'] = $request->indexType;
        }
        if (!Utils::isUnset($request->searchLibName)) {
            $query['SearchLibName'] = $request->searchLibName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DropSearchIndexResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DropSearchIndexResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a search index. After you delete a search index, the existing index data is cleared and index-based analysis, storage, and query are not supported for subsequent media assets.
     *  *
     * @param DropSearchIndexRequest $request DropSearchIndexRequest
     *
     * @return DropSearchIndexResponse DropSearchIndexResponse
     */
    public function dropSearchIndex($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dropSearchIndexWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a search library and all media assets in the library.
     *  *
     * @param DropSearchLibRequest $request DropSearchLibRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DropSearchLibResponse DropSearchLibResponse
     */
    public function dropSearchLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->searchLibName)) {
            $query['SearchLibName'] = $request->searchLibName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return DropSearchLibResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return DropSearchLibResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Deletes a search library and all media assets in the library.
     *  *
     * @param DropSearchLibRequest $request DropSearchLibRequest
     *
     * @return DropSearchLibResponse DropSearchLibResponse
     */
    public function dropSearchLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dropSearchLibWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an AI agent. This operation returns the channel in which the AI agent resides, the username of the AI agent in the channel, and the token that you can use to join the channel.
     *  *
     * @description ## [](#)Request description
     * You can call this operation to create an AI agent based on the provided ID. You can join the channel based on the returned information and talk to the agent.
     * **Note:** Make sure that the provided AI agent ID is valid and configure optional parameters based on your business requirements.
     *  *
     * @param GenerateAIAgentCallRequest $tmpReq  GenerateAIAgentCallRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateAIAgentCallResponse GenerateAIAgentCallResponse
     */
    public function generateAIAgentCallWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GenerateAIAgentCallShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->chatSyncConfig)) {
            $request->chatSyncConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->chatSyncConfig, 'ChatSyncConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->templateConfig)) {
            $request->templateConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->templateConfig, 'TemplateConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->AIAgentId)) {
            $query['AIAgentId'] = $request->AIAgentId;
        }
        if (!Utils::isUnset($request->chatSyncConfigShrink)) {
            $query['ChatSyncConfig'] = $request->chatSyncConfigShrink;
        }
        if (!Utils::isUnset($request->expire)) {
            $query['Expire'] = $request->expire;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->templateConfigShrink)) {
            $query['TemplateConfig'] = $request->templateConfigShrink;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GenerateAIAgentCallResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GenerateAIAgentCallResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Creates an AI agent. This operation returns the channel in which the AI agent resides, the username of the AI agent in the channel, and the token that you can use to join the channel.
     *  *
     * @description ## [](#)Request description
     * You can call this operation to create an AI agent based on the provided ID. You can join the channel based on the returned information and talk to the agent.
     * **Note:** Make sure that the provided AI agent ID is valid and configure optional parameters based on your business requirements.
     *  *
     * @param GenerateAIAgentCallRequest $request GenerateAIAgentCallRequest
     *
     * @return GenerateAIAgentCallResponse GenerateAIAgentCallResponse
     */
    public function generateAIAgentCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateAIAgentCallWithOptions($request, $runtime);
    }

    /**
     * @summary Generates a random Key Management Service (KMS) data key used for HTTP Live Streaming (HLS) encryption and transcoding of videos.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateKMSDataKeyResponse GenerateKMSDataKeyResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GenerateKMSDataKeyResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GenerateKMSDataKeyResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Generates a random Key Management Service (KMS) data key used for HTTP Live Streaming (HLS) encryption and transcoding of videos.
     *  *
     * @return GenerateKMSDataKeyResponse GenerateKMSDataKeyResponse
     */
    public function generateKMSDataKey()
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateKMSDataKeyWithOptions($runtime);
    }

    /**
     * @summary 生成直播互动消息所需的token
     *  *
     * @param GenerateMessageChatTokenRequest $request GenerateMessageChatTokenRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GenerateMessageChatTokenResponse GenerateMessageChatTokenResponse
     */
    public function generateMessageChatTokenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->AIAgentId)) {
            $query['AIAgentId'] = $request->AIAgentId;
        }
        if (!Utils::isUnset($request->expire)) {
            $query['Expire'] = $request->expire;
        }
        if (!Utils::isUnset($request->role)) {
            $query['Role'] = $request->role;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GenerateMessageChatTokenResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GenerateMessageChatTokenResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 生成直播互动消息所需的token
     *  *
     * @param GenerateMessageChatTokenRequest $request GenerateMessageChatTokenRequest
     *
     * @return GenerateMessageChatTokenResponse GenerateMessageChatTokenResponse
     */
    public function generateMessageChatToken($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->generateMessageChatTokenWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains details of an ad insertion configuration.
     *  *
     * @param GetAdInsertionRequest $request GetAdInsertionRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAdInsertionResponse GetAdInsertionResponse
     */
    public function getAdInsertionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetAdInsertionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAdInsertionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Obtains details of an ad insertion configuration.
     *  *
     * @param GetAdInsertionRequest $request GetAdInsertionRequest
     *
     * @return GetAdInsertionResponse GetAdInsertionResponse
     */
    public function getAdInsertion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAdInsertionWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a trained digital human.
     *  *
     * @param GetAvatarRequest $request GetAvatarRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAvatarResponse GetAvatarResponse
     */
    public function getAvatarWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->avatarId)) {
            $query['AvatarId'] = $request->avatarId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetAvatarResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAvatarResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a trained digital human.
     *  *
     * @param GetAvatarRequest $request GetAvatarRequest
     *
     * @return GetAvatarResponse GetAvatarResponse
     */
    public function getAvatar($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAvatarWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a digital human training job.
     *  *
     * @param GetAvatarTrainingJobRequest $request GetAvatarTrainingJobRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAvatarTrainingJobResponse GetAvatarTrainingJobResponse
     */
    public function getAvatarTrainingJobWithOptions($request, $runtime)
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetAvatarTrainingJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetAvatarTrainingJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a digital human training job.
     *  *
     * @param GetAvatarTrainingJobRequest $request GetAvatarTrainingJobRequest
     *
     * @return GetAvatarTrainingJobResponse GetAvatarTrainingJobResponse
     */
    public function getAvatarTrainingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAvatarTrainingJobWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a quick video production job, including the input parameters, job state, and the IDs and URLs of the output media assets. You can call this operation to query only quick video production jobs created within the past year.
     *  *
     * @param GetBatchMediaProducingJobRequest $request GetBatchMediaProducingJobRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetBatchMediaProducingJobResponse GetBatchMediaProducingJobResponse
     */
    public function getBatchMediaProducingJobWithOptions($request, $runtime)
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetBatchMediaProducingJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetBatchMediaProducingJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a quick video production job, including the input parameters, job state, and the IDs and URLs of the output media assets. You can call this operation to query only quick video production jobs created within the past year.
     *  *
     * @param GetBatchMediaProducingJobRequest $request GetBatchMediaProducingJobRequest
     *
     * @return GetBatchMediaProducingJobResponse GetBatchMediaProducingJobResponse
     */
    public function getBatchMediaProducingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBatchMediaProducingJobWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a category and its subcategories.
     *  *
     * @description You can call this operation to query the information about a category and its subcategories based on the category ID and category type.
     *  *
     * @param GetCategoriesRequest $request GetCategoriesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCategoriesResponse GetCategoriesResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetCategoriesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetCategoriesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a category and its subcategories.
     *  *
     * @description You can call this operation to query the information about a category and its subcategories based on the category ID and category type.
     *  *
     * @param GetCategoriesRequest $request GetCategoriesRequest
     *
     * @return GetCategoriesResponse GetCategoriesResponse
     */
    public function getCategories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCategoriesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about a channel in MediaWeaver.
     *  *
     * @param GetChannelRequest $request GetChannelRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetChannelResponse GetChannelResponse
     */
    public function getChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->channelName)) {
            $query['ChannelName'] = $request->channelName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetChannelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetChannelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries information about a channel in MediaWeaver.
     *  *
     * @param GetChannelRequest $request GetChannelRequest
     *
     * @return GetChannelResponse GetChannelResponse
     */
    public function getChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getChannelWithOptions($request, $runtime);
    }

    /**
     * @summary 获取内容分析搜索配置
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetContentAnalyzeConfigResponse GetContentAnalyzeConfigResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetContentAnalyzeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetContentAnalyzeConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取内容分析搜索配置
     *  *
     * @return GetContentAnalyzeConfigResponse GetContentAnalyzeConfigResponse
     */
    public function getContentAnalyzeConfig()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getContentAnalyzeConfigWithOptions($runtime);
    }

    /**
     * @summary Queries the information about a custom template.
     *  *
     * @description You can call this operation to query the information about a template with the ID specified by the TemplateId parameter. You can also query the information about the default template. If TemplateId is specified, other parameters are ignored and the template whose ID is specified is queried. If TemplateId is not specified, the default template is queried based on other parameters. In this case, Type is required.
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
     *  *
     * @param GetCustomTemplateRequest $request GetCustomTemplateRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCustomTemplateResponse GetCustomTemplateResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetCustomTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetCustomTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a custom template.
     *  *
     * @description You can call this operation to query the information about a template with the ID specified by the TemplateId parameter. You can also query the information about the default template. If TemplateId is specified, other parameters are ignored and the template whose ID is specified is queried. If TemplateId is not specified, the default template is queried based on other parameters. In this case, Type is required.
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
     *  *
     * @param GetCustomTemplateRequest $request GetCustomTemplateRequest
     *
     * @return GetCustomTemplateResponse GetCustomTemplateResponse
     */
    public function getCustomTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a personalized human voice.
     *  *
     * @param GetCustomizedVoiceRequest $request GetCustomizedVoiceRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCustomizedVoiceResponse GetCustomizedVoiceResponse
     */
    public function getCustomizedVoiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->voiceId)) {
            $query['VoiceId'] = $request->voiceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetCustomizedVoiceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetCustomizedVoiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a personalized human voice.
     *  *
     * @param GetCustomizedVoiceRequest $request GetCustomizedVoiceRequest
     *
     * @return GetCustomizedVoiceResponse GetCustomizedVoiceResponse
     */
    public function getCustomizedVoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomizedVoiceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a human voice cloning job.
     *  *
     * @param GetCustomizedVoiceJobRequest $request GetCustomizedVoiceJobRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCustomizedVoiceJobResponse GetCustomizedVoiceJobResponse
     */
    public function getCustomizedVoiceJobWithOptions($request, $runtime)
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetCustomizedVoiceJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetCustomizedVoiceJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a human voice cloning job.
     *  *
     * @param GetCustomizedVoiceJobRequest $request GetCustomizedVoiceJobRequest
     *
     * @return GetCustomizedVoiceJobResponse GetCustomizedVoiceJobResponse
     */
    public function getCustomizedVoiceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCustomizedVoiceJobWithOptions($request, $runtime);
    }

    /**
     * @summary 获取用户默认存储地址
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDefaultStorageLocationResponse GetDefaultStorageLocationResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetDefaultStorageLocationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDefaultStorageLocationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取用户默认存储地址
     *  *
     * @return GetDefaultStorageLocationResponse GetDefaultStorageLocationResponse
     */
    public function getDefaultStorageLocation()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDefaultStorageLocationWithOptions($runtime);
    }

    /**
     * @summary Queries the text to be read and sample audio for training a personalized human voice.
     *  *
     * @param GetDemonstrationForCustomizedVoiceJobRequest $request GetDemonstrationForCustomizedVoiceJobRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDemonstrationForCustomizedVoiceJobResponse GetDemonstrationForCustomizedVoiceJobResponse
     */
    public function getDemonstrationForCustomizedVoiceJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->scenario)) {
            $query['Scenario'] = $request->scenario;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetDemonstrationForCustomizedVoiceJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDemonstrationForCustomizedVoiceJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the text to be read and sample audio for training a personalized human voice.
     *  *
     * @param GetDemonstrationForCustomizedVoiceJobRequest $request GetDemonstrationForCustomizedVoiceJobRequest
     *
     * @return GetDemonstrationForCustomizedVoiceJobResponse GetDemonstrationForCustomizedVoiceJobResponse
     */
    public function getDemonstrationForCustomizedVoiceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDemonstrationForCustomizedVoiceJobWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about an image animation job.
     *  *
     * @param GetDynamicImageJobRequest $request GetDynamicImageJobRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDynamicImageJobResponse GetDynamicImageJobResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetDynamicImageJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetDynamicImageJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about an image animation job.
     *  *
     * @param GetDynamicImageJobRequest $request GetDynamicImageJobRequest
     *
     * @return GetDynamicImageJobResponse GetDynamicImageJobResponse
     */
    public function getDynamicImageJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDynamicImageJobWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about an online editing project.
     *  *
     * @param GetEditingProjectRequest $request GetEditingProjectRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEditingProjectResponse GetEditingProjectResponse
     */
    public function getEditingProjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->requestSource)) {
            $query['RequestSource'] = $request->requestSource;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetEditingProjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetEditingProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about an online editing project.
     *  *
     * @param GetEditingProjectRequest $request GetEditingProjectRequest
     *
     * @return GetEditingProjectResponse GetEditingProjectResponse
     */
    public function getEditingProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEditingProjectWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all materials associated with an online editing project.
     *  *
     * @param GetEditingProjectMaterialsRequest $request GetEditingProjectMaterialsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEditingProjectMaterialsResponse GetEditingProjectMaterialsResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetEditingProjectMaterialsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetEditingProjectMaterialsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries all materials associated with an online editing project.
     *  *
     * @param GetEditingProjectMaterialsRequest $request GetEditingProjectMaterialsRequest
     *
     * @return GetEditingProjectMaterialsResponse GetEditingProjectMaterialsResponse
     */
    public function getEditingProjectMaterials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEditingProjectMaterialsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries event callback configurations.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEventCallbackResponse GetEventCallbackResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetEventCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetEventCallbackResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries event callback configurations.
     *  *
     * @return GetEventCallbackResponse GetEventCallbackResponse
     */
    public function getEventCallback()
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEventCallbackWithOptions($runtime);
    }

    /**
     * @summary Queries the index file of a live stream. The index file is used to preview an editing project in the console.
     *  *
     * @param GetLiveEditingIndexFileRequest $request GetLiveEditingIndexFileRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLiveEditingIndexFileResponse GetLiveEditingIndexFileResponse
     */
    public function getLiveEditingIndexFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetLiveEditingIndexFileResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetLiveEditingIndexFileResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the index file of a live stream. The index file is used to preview an editing project in the console.
     *  *
     * @param GetLiveEditingIndexFileRequest $request GetLiveEditingIndexFileRequest
     *
     * @return GetLiveEditingIndexFileResponse GetLiveEditingIndexFileResponse
     */
    public function getLiveEditingIndexFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLiveEditingIndexFileWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a live editing job. The requested information includes the state, timeline, and template of the job, the ID and URL of the output file, and the configurations of the job. You can call this operation to query only live editing jobs created within the past year.
     *  *
     * @param GetLiveEditingJobRequest $request GetLiveEditingJobRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLiveEditingJobResponse GetLiveEditingJobResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetLiveEditingJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetLiveEditingJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a live editing job. The requested information includes the state, timeline, and template of the job, the ID and URL of the output file, and the configurations of the job. You can call this operation to query only live editing jobs created within the past year.
     *  *
     * @param GetLiveEditingJobRequest $request GetLiveEditingJobRequest
     *
     * @return GetLiveEditingJobResponse GetLiveEditingJobResponse
     */
    public function getLiveEditingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLiveEditingJobWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a live package channel.
     *  *
     * @description ## [](#)Usage notes
     * This API operation allows you to query the details of a live package channel, including the creation time, description, ingest endpoint, protocol, number of segments, and segment duration.
     *  *
     * @param GetLivePackageChannelRequest $request GetLivePackageChannelRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLivePackageChannelResponse GetLivePackageChannelResponse
     */
    public function getLivePackageChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->channelName)) {
            $query['ChannelName'] = $request->channelName;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetLivePackageChannelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetLivePackageChannelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a live package channel.
     *  *
     * @description ## [](#)Usage notes
     * This API operation allows you to query the details of a live package channel, including the creation time, description, ingest endpoint, protocol, number of segments, and segment duration.
     *  *
     * @param GetLivePackageChannelRequest $request GetLivePackageChannelRequest
     *
     * @return GetLivePackageChannelResponse GetLivePackageChannelResponse
     */
    public function getLivePackageChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLivePackageChannelWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a live package channel group by name.
     *  *
     * @description ## [](#)Usage notes
     * You can call this API operation to query the details of a specific channel group, including its name, description, origin domain, and creation and last modification timestamps.
     *  *
     * @param GetLivePackageChannelGroupRequest $request GetLivePackageChannelGroupRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLivePackageChannelGroupResponse GetLivePackageChannelGroupResponse
     */
    public function getLivePackageChannelGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetLivePackageChannelGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetLivePackageChannelGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a live package channel group by name.
     *  *
     * @description ## [](#)Usage notes
     * You can call this API operation to query the details of a specific channel group, including its name, description, origin domain, and creation and last modification timestamps.
     *  *
     * @param GetLivePackageChannelGroupRequest $request GetLivePackageChannelGroupRequest
     *
     * @return GetLivePackageChannelGroupResponse GetLivePackageChannelGroupResponse
     */
    public function getLivePackageChannelGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLivePackageChannelGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries origin endpoints associated with a live package channel.
     *  *
     * @description ## [](#)Usage notes
     *  *
     * @param GetLivePackageOriginEndpointRequest $request GetLivePackageOriginEndpointRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLivePackageOriginEndpointResponse GetLivePackageOriginEndpointResponse
     */
    public function getLivePackageOriginEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->channelName)) {
            $query['ChannelName'] = $request->channelName;
        }
        if (!Utils::isUnset($request->endpointName)) {
            $query['EndpointName'] = $request->endpointName;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetLivePackageOriginEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetLivePackageOriginEndpointResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries origin endpoints associated with a live package channel.
     *  *
     * @description ## [](#)Usage notes
     *  *
     * @param GetLivePackageOriginEndpointRequest $request GetLivePackageOriginEndpointRequest
     *
     * @return GetLivePackageOriginEndpointResponse GetLivePackageOriginEndpointResponse
     */
    public function getLivePackageOriginEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLivePackageOriginEndpointWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a live stream recording job.
     *  *
     * @param GetLiveRecordJobRequest $request GetLiveRecordJobRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLiveRecordJobResponse GetLiveRecordJobResponse
     */
    public function getLiveRecordJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetLiveRecordJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetLiveRecordJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a live stream recording job.
     *  *
     * @param GetLiveRecordJobRequest $request GetLiveRecordJobRequest
     *
     * @return GetLiveRecordJobResponse GetLiveRecordJobResponse
     */
    public function getLiveRecordJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLiveRecordJobWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a live stream recording template or a snapshot of the template.
     *  *
     * @param GetLiveRecordTemplateRequest $request GetLiveRecordTemplateRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLiveRecordTemplateResponse GetLiveRecordTemplateResponse
     */
    public function getLiveRecordTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetLiveRecordTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetLiveRecordTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a live stream recording template or a snapshot of the template.
     *  *
     * @param GetLiveRecordTemplateRequest $request GetLiveRecordTemplateRequest
     *
     * @return GetLiveRecordTemplateResponse GetLiveRecordTemplateResponse
     */
    public function getLiveRecordTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLiveRecordTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information a live stream snapshot job.
     *  *
     * @param GetLiveSnapshotJobRequest $request GetLiveSnapshotJobRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLiveSnapshotJobResponse GetLiveSnapshotJobResponse
     */
    public function getLiveSnapshotJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetLiveSnapshotJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetLiveSnapshotJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information a live stream snapshot job.
     *  *
     * @param GetLiveSnapshotJobRequest $request GetLiveSnapshotJobRequest
     *
     * @return GetLiveSnapshotJobResponse GetLiveSnapshotJobResponse
     */
    public function getLiveSnapshotJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLiveSnapshotJobWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a live stream snapshot template.
     *  *
     * @param GetLiveSnapshotTemplateRequest $request GetLiveSnapshotTemplateRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLiveSnapshotTemplateResponse GetLiveSnapshotTemplateResponse
     */
    public function getLiveSnapshotTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetLiveSnapshotTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetLiveSnapshotTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a live stream snapshot template.
     *  *
     * @param GetLiveSnapshotTemplateRequest $request GetLiveSnapshotTemplateRequest
     *
     * @return GetLiveSnapshotTemplateResponse GetLiveSnapshotTemplateResponse
     */
    public function getLiveSnapshotTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLiveSnapshotTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a live stream transcoding job.
     *  *
     * @param GetLiveTranscodeJobRequest $request GetLiveTranscodeJobRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLiveTranscodeJobResponse GetLiveTranscodeJobResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetLiveTranscodeJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetLiveTranscodeJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a live stream transcoding job.
     *  *
     * @param GetLiveTranscodeJobRequest $request GetLiveTranscodeJobRequest
     *
     * @return GetLiveTranscodeJobResponse GetLiveTranscodeJobResponse
     */
    public function getLiveTranscodeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLiveTranscodeJobWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information a live stream transcoding template.
     *  *
     * @param GetLiveTranscodeTemplateRequest $request GetLiveTranscodeTemplateRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLiveTranscodeTemplateResponse GetLiveTranscodeTemplateResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetLiveTranscodeTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetLiveTranscodeTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information a live stream transcoding template.
     *  *
     * @param GetLiveTranscodeTemplateRequest $request GetLiveTranscodeTemplateRequest
     *
     * @return GetLiveTranscodeTemplateResponse GetLiveTranscodeTemplateResponse
     */
    public function getLiveTranscodeTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLiveTranscodeTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains information about a specific MediaConnect flow.
     *  *
     * @description *   When the specified flow ID is not available, an error code is returned.
     * *   The returned StartTime is valid only when the flow is in the online state.
     *  *
     * @param GetMediaConnectFlowRequest $request GetMediaConnectFlowRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMediaConnectFlowResponse GetMediaConnectFlowResponse
     */
    public function getMediaConnectFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->flowId)) {
            $query['FlowId'] = $request->flowId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetMediaConnectFlowResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMediaConnectFlowResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Obtains information about a specific MediaConnect flow.
     *  *
     * @description *   When the specified flow ID is not available, an error code is returned.
     * *   The returned StartTime is valid only when the flow is in the online state.
     *  *
     * @param GetMediaConnectFlowRequest $request GetMediaConnectFlowRequest
     *
     * @return GetMediaConnectFlowResponse GetMediaConnectFlowResponse
     */
    public function getMediaConnectFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaConnectFlowWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains information about the source of a MediaConnect flow.
     *  *
     * @description *   When the specified flow ID is not available, an error code is returned.
     *  *
     * @param GetMediaConnectFlowInputRequest $request GetMediaConnectFlowInputRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMediaConnectFlowInputResponse GetMediaConnectFlowInputResponse
     */
    public function getMediaConnectFlowInputWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->flowId)) {
            $query['FlowId'] = $request->flowId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetMediaConnectFlowInputResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMediaConnectFlowInputResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Obtains information about the source of a MediaConnect flow.
     *  *
     * @description *   When the specified flow ID is not available, an error code is returned.
     *  *
     * @param GetMediaConnectFlowInputRequest $request GetMediaConnectFlowInputRequest
     *
     * @return GetMediaConnectFlowInputResponse GetMediaConnectFlowInputResponse
     */
    public function getMediaConnectFlowInput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaConnectFlowInputWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains information about an output of a MediaConnect flow.
     *  *
     * @description *   When the specified flow ID is not available, an error code is returned.
     *  *
     * @param GetMediaConnectFlowOutputRequest $request GetMediaConnectFlowOutputRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMediaConnectFlowOutputResponse GetMediaConnectFlowOutputResponse
     */
    public function getMediaConnectFlowOutputWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->flowId)) {
            $query['FlowId'] = $request->flowId;
        }
        if (!Utils::isUnset($request->outputName)) {
            $query['OutputName'] = $request->outputName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetMediaConnectFlowOutputResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMediaConnectFlowOutputResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Obtains information about an output of a MediaConnect flow.
     *  *
     * @description *   When the specified flow ID is not available, an error code is returned.
     *  *
     * @param GetMediaConnectFlowOutputRequest $request GetMediaConnectFlowOutputRequest
     *
     * @return GetMediaConnectFlowOutputResponse GetMediaConnectFlowOutputResponse
     */
    public function getMediaConnectFlowOutput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaConnectFlowOutputWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the details of a transcoding task.
     *  *
     * @param GetMediaConvertJobRequest $request GetMediaConvertJobRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMediaConvertJobResponse GetMediaConvertJobResponse
     */
    public function getMediaConvertJobWithOptions($request, $runtime)
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetMediaConvertJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMediaConvertJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Obtains the details of a transcoding task.
     *  *
     * @param GetMediaConvertJobRequest $request GetMediaConvertJobRequest
     *
     * @return GetMediaConvertJobResponse GetMediaConvertJobResponse
     */
    public function getMediaConvertJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaConvertJobWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about a media asset based on the ID of the media asset in Intelligent Media Services (IMS) or the input URL of the media asset.
     *  *
     * @description If the MediaId parameter is specified, the MediaId parameter is preferentially used for the query. If the MediaId parameter is left empty, the InputURL parameter must be specified.
     *  *
     * @param GetMediaInfoRequest $request GetMediaInfoRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMediaInfoResponse GetMediaInfoResponse
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
        if (!Utils::isUnset($request->returnDetailedInfo)) {
            $query['ReturnDetailedInfo'] = $request->returnDetailedInfo;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetMediaInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMediaInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries information about a media asset based on the ID of the media asset in Intelligent Media Services (IMS) or the input URL of the media asset.
     *  *
     * @description If the MediaId parameter is specified, the MediaId parameter is preferentially used for the query. If the MediaId parameter is left empty, the InputURL parameter must be specified.
     *  *
     * @param GetMediaInfoRequest $request GetMediaInfoRequest
     *
     * @return GetMediaInfoResponse GetMediaInfoResponse
     */
    public function getMediaInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a media information analysis job.
     *  *
     * @param GetMediaInfoJobRequest $request GetMediaInfoJobRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMediaInfoJobResponse GetMediaInfoJobResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetMediaInfoJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMediaInfoJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a media information analysis job.
     *  *
     * @param GetMediaInfoJobRequest $request GetMediaInfoJobRequest
     *
     * @return GetMediaInfoJobResponse GetMediaInfoJobResponse
     */
    public function getMediaInfoJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaInfoJobWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a MediaLive channel.
     *  *
     * @description *
     * ## [](#qps-)QPS limit
     * This operation can be called up to 50 times per second for each Alibaba Cloud account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *  *
     * @param GetMediaLiveChannelRequest $request GetMediaLiveChannelRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMediaLiveChannelResponse GetMediaLiveChannelResponse
     */
    public function getMediaLiveChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetMediaLiveChannel',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetMediaLiveChannelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMediaLiveChannelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a MediaLive channel.
     *  *
     * @description *
     * ## [](#qps-)QPS limit
     * This operation can be called up to 50 times per second for each Alibaba Cloud account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *  *
     * @param GetMediaLiveChannelRequest $request GetMediaLiveChannelRequest
     *
     * @return GetMediaLiveChannelResponse GetMediaLiveChannelResponse
     */
    public function getMediaLiveChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaLiveChannelWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a MediaLive input.
     *  *
     * @description *
     * ## [](#qps-)QPS limit
     * This operation can be called up to 50 times per second for each Alibaba Cloud account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *  *
     * @param GetMediaLiveInputRequest $request GetMediaLiveInputRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMediaLiveInputResponse GetMediaLiveInputResponse
     */
    public function getMediaLiveInputWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->inputId)) {
            $body['InputId'] = $request->inputId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetMediaLiveInput',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetMediaLiveInputResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMediaLiveInputResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a MediaLive input.
     *  *
     * @description *
     * ## [](#qps-)QPS limit
     * This operation can be called up to 50 times per second for each Alibaba Cloud account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *  *
     * @param GetMediaLiveInputRequest $request GetMediaLiveInputRequest
     *
     * @return GetMediaLiveInputResponse GetMediaLiveInputResponse
     */
    public function getMediaLiveInput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaLiveInputWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a security group in MediaLive.
     *  *
     * @description *
     * ## [](#qps-)QPS limit
     * This operation can be called up to 50 times per second for each Alibaba Cloud account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *  *
     * @param GetMediaLiveInputSecurityGroupRequest $request GetMediaLiveInputSecurityGroupRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMediaLiveInputSecurityGroupResponse GetMediaLiveInputSecurityGroupResponse
     */
    public function getMediaLiveInputSecurityGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->securityGroupId)) {
            $body['SecurityGroupId'] = $request->securityGroupId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetMediaLiveInputSecurityGroup',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetMediaLiveInputSecurityGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMediaLiveInputSecurityGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a security group in MediaLive.
     *  *
     * @description *
     * ## [](#qps-)QPS limit
     * This operation can be called up to 50 times per second for each Alibaba Cloud account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *  *
     * @param GetMediaLiveInputSecurityGroupRequest $request GetMediaLiveInputSecurityGroupRequest
     *
     * @return GetMediaLiveInputSecurityGroupResponse GetMediaLiveInputSecurityGroupResponse
     */
    public function getMediaLiveInputSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaLiveInputSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about marks based on mark IDs.
     *  *
     * @param GetMediaMarksRequest $request GetMediaMarksRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMediaMarksResponse GetMediaMarksResponse
     */
    public function getMediaMarksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->mediaMarkIds)) {
            $query['MediaMarkIds'] = $request->mediaMarkIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetMediaMarksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMediaMarksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about marks based on mark IDs.
     *  *
     * @param GetMediaMarksRequest $request GetMediaMarksRequest
     *
     * @return GetMediaMarksResponse GetMediaMarksResponse
     */
    public function getMediaMarks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaMarksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a media editing and production job. The requested information includes the state, timeline, template, and data of the job. You can call this operation to query only media editing and production jobs created within the past year.
     *  *
     * @param GetMediaProducingJobRequest $request GetMediaProducingJobRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMediaProducingJobResponse GetMediaProducingJobResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetMediaProducingJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetMediaProducingJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a media editing and production job. The requested information includes the state, timeline, template, and data of the job. You can call this operation to query only media editing and production jobs created within the past year.
     *  *
     * @param GetMediaProducingJobRequest $request GetMediaProducingJobRequest
     *
     * @return GetMediaProducingJobResponse GetMediaProducingJobResponse
     */
    public function getMediaProducingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMediaProducingJobWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a packaging job.
     *  *
     * @param GetPackageJobRequest $request GetPackageJobRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPackageJobResponse GetPackageJobResponse
     */
    public function getPackageJobWithOptions($request, $runtime)
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetPackageJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetPackageJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a packaging job.
     *  *
     * @param GetPackageJobRequest $request GetPackageJobRequest
     *
     * @return GetPackageJobResponse GetPackageJobResponse
     */
    public function getPackageJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPackageJobWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about an ApsaraVideo Media Processing (MPS) queue.
     *  *
     * @param GetPipelineRequest $request GetPipelineRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPipelineResponse GetPipelineResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetPipelineResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetPipelineResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about an ApsaraVideo Media Processing (MPS) queue.
     *  *
     * @param GetPipelineRequest $request GetPipelineRequest
     *
     * @return GetPipelineResponse GetPipelineResponse
     */
    public function getPipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPipelineWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the playback URL of a video or audio file based on its ID.
     *  *
     * @description You use the ID of a video or audio file to query the playback URL of the file. Then, you can use the playback URL to play the audio or video in ApsaraVideo Player SDK (for URL-based playback) or a third-party player.
     *  *
     * @param GetPlayInfoRequest $request GetPlayInfoRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPlayInfoResponse GetPlayInfoResponse
     */
    public function getPlayInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->inputURL)) {
            $query['InputURL'] = $request->inputURL;
        }
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetPlayInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetPlayInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the playback URL of a video or audio file based on its ID.
     *  *
     * @description You use the ID of a video or audio file to query the playback URL of the file. Then, you can use the playback URL to play the audio or video in ApsaraVideo Player SDK (for URL-based playback) or a third-party player.
     *  *
     * @param GetPlayInfoRequest $request GetPlayInfoRequest
     *
     * @return GetPlayInfoResponse GetPlayInfoResponse
     */
    public function getPlayInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPlayInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a program.
     *  *
     * @param GetProgramRequest $request GetProgramRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetProgramResponse GetProgramResponse
     */
    public function getProgramWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->channelName)) {
            $query['ChannelName'] = $request->channelName;
        }
        if (!Utils::isUnset($request->programName)) {
            $query['ProgramName'] = $request->programName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetProgramResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetProgramResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a program.
     *  *
     * @param GetProgramRequest $request GetProgramRequest
     *
     * @return GetProgramResponse GetProgramResponse
     */
    public function getProgram($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProgramWithOptions($request, $runtime);
    }

    /**
     * @summary 查询工程导出任务
     *  *
     * @param GetProjectExportJobRequest $request GetProjectExportJobRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetProjectExportJobResponse GetProjectExportJobResponse
     */
    public function getProjectExportJobWithOptions($request, $runtime)
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetProjectExportJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetProjectExportJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询工程导出任务
     *  *
     * @param GetProjectExportJobRequest $request GetProjectExportJobRequest
     *
     * @return GetProjectExportJobResponse GetProjectExportJobResponse
     */
    public function getProjectExportJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getProjectExportJobWithOptions($request, $runtime);
    }

    /**
     * @summary 获取公共媒资内容信息
     *  *
     * @param GetPublicMediaInfoRequest $request GetPublicMediaInfoRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPublicMediaInfoResponse GetPublicMediaInfoResponse
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
            'authType'    => 'Anonymous',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetPublicMediaInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetPublicMediaInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取公共媒资内容信息
     *  *
     * @param GetPublicMediaInfoRequest $request GetPublicMediaInfoRequest
     *
     * @return GetPublicMediaInfoResponse GetPublicMediaInfoResponse
     */
    public function getPublicMediaInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPublicMediaInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about an intelligent job and the execution results of the job based the job ID. You can call this operation to query only intelligent jobs created within the past year.
     *  *
     * @param GetSmartHandleJobRequest $request GetSmartHandleJobRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSmartHandleJobResponse GetSmartHandleJobResponse
     */
    public function getSmartHandleJobWithOptions($request, $runtime)
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetSmartHandleJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSmartHandleJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about an intelligent job and the execution results of the job based the job ID. You can call this operation to query only intelligent jobs created within the past year.
     *  *
     * @param GetSmartHandleJobRequest $request GetSmartHandleJobRequest
     *
     * @return GetSmartHandleJobResponse GetSmartHandleJobResponse
     */
    public function getSmartHandleJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSmartHandleJobWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a snapshot job.
     *  *
     * @param GetSnapshotJobRequest $request GetSnapshotJobRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSnapshotJobResponse GetSnapshotJobResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetSnapshotJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSnapshotJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a snapshot job.
     *  *
     * @param GetSnapshotJobRequest $request GetSnapshotJobRequest
     *
     * @return GetSnapshotJobResponse GetSnapshotJobResponse
     */
    public function getSnapshotJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSnapshotJobWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the accessible URLs of the output images of a snapshot job.
     *  *
     * @param GetSnapshotUrlsRequest $request GetSnapshotUrlsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSnapshotUrlsResponse GetSnapshotUrlsResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetSnapshotUrlsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSnapshotUrlsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the accessible URLs of the output images of a snapshot job.
     *  *
     * @param GetSnapshotUrlsRequest $request GetSnapshotUrlsRequest
     *
     * @return GetSnapshotUrlsResponse GetSnapshotUrlsResponse
     */
    public function getSnapshotUrls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSnapshotUrlsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a source in MediaWeaver.
     *  *
     * @param GetSourceRequest $request GetSourceRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSourceResponse GetSourceResponse
     */
    public function getSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sourceLocationName)) {
            $query['SourceLocationName'] = $request->sourceLocationName;
        }
        if (!Utils::isUnset($request->sourceName)) {
            $query['SourceName'] = $request->sourceName;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetSourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a source in MediaWeaver.
     *  *
     * @param GetSourceRequest $request GetSourceRequest
     *
     * @return GetSourceResponse GetSourceResponse
     */
    public function getSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSourceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a source location.
     *  *
     * @param GetSourceLocationRequest $request GetSourceLocationRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSourceLocationResponse GetSourceLocationResponse
     */
    public function getSourceLocationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->sourceLocationName)) {
            $query['SourceLocationName'] = $request->sourceLocationName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetSourceLocationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSourceLocationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a source location.
     *  *
     * @param GetSourceLocationRequest $request GetSourceLocationRequest
     *
     * @return GetSourceLocationResponse GetSourceLocationResponse
     */
    public function getSourceLocation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSourceLocationWithOptions($request, $runtime);
    }

    /**
     * @summary 获取存储地址列表
     *  *
     * @param GetStorageListRequest $request GetStorageListRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetStorageListResponse GetStorageListResponse
     */
    public function getStorageListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->storageType)) {
            $query['StorageType'] = $request->storageType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetStorageListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetStorageListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 获取存储地址列表
     *  *
     * @param GetStorageListRequest $request GetStorageListRequest
     *
     * @return GetStorageListResponse GetStorageListResponse
     */
    public function getStorageList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStorageListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a system template.
     *  *
     * @param GetSystemTemplateRequest $request GetSystemTemplateRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSystemTemplateResponse GetSystemTemplateResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetSystemTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetSystemTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a system template.
     *  *
     * @param GetSystemTemplateRequest $request GetSystemTemplateRequest
     *
     * @return GetSystemTemplateResponse GetSystemTemplateResponse
     */
    public function getSystemTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSystemTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a template based on the template ID. You can call this operation to query the information about an advanced template if the template is in the Available state.
     *  *
     * @description A template is an encapsulation of the timeline of a media editing and production job. You can define a common timeline as a template. When you have the same requirements, you need to only specify key parameters and materials to produce videos.
     * *   For more information about how to use a regular template, see [Create and use a regular template](https://help.aliyun.com/document_detail/445399.html).
     * *   For more information about how to use an advanced template, see [Create and use advanced templates](https://help.aliyun.com/document_detail/445389.html).
     *  *
     * @param GetTemplateRequest $request GetTemplateRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTemplateResponse GetTemplateResponse
     */
    public function getTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->relatedMediaidFlag)) {
            $query['RelatedMediaidFlag'] = $request->relatedMediaidFlag;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a template based on the template ID. You can call this operation to query the information about an advanced template if the template is in the Available state.
     *  *
     * @description A template is an encapsulation of the timeline of a media editing and production job. You can define a common timeline as a template. When you have the same requirements, you need to only specify key parameters and materials to produce videos.
     * *   For more information about how to use a regular template, see [Create and use a regular template](https://help.aliyun.com/document_detail/445399.html).
     * *   For more information about how to use an advanced template, see [Create and use advanced templates](https://help.aliyun.com/document_detail/445389.html).
     *  *
     * @param GetTemplateRequest $request GetTemplateRequest
     *
     * @return GetTemplateResponse GetTemplateResponse
     */
    public function getTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the URLs of materials associated with an advanced template for use by the advanced template editor. The URLs expire in 30 minutes. FileList is an array of materials that you want to query. If you do not specify this parameter, the URLs of all materials are returned. A maximum of 400 URLs can be returned.
     *  *
     * @param GetTemplateMaterialsRequest $request GetTemplateMaterialsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTemplateMaterialsResponse GetTemplateMaterialsResponse
     */
    public function getTemplateMaterialsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileList)) {
            $query['FileList'] = $request->fileList;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetTemplateMaterialsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTemplateMaterialsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the URLs of materials associated with an advanced template for use by the advanced template editor. The URLs expire in 30 minutes. FileList is an array of materials that you want to query. If you do not specify this parameter, the URLs of all materials are returned. A maximum of 400 URLs can be returned.
     *  *
     * @param GetTemplateMaterialsRequest $request GetTemplateMaterialsRequest
     *
     * @return GetTemplateMaterialsResponse GetTemplateMaterialsResponse
     */
    public function getTemplateMaterials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateMaterialsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the parameters for replaceable materials in a template, including the parameter names, default values, and material thumbnails. Only advanced templates are supported.
     *  *
     * @param GetTemplateParamsRequest $request GetTemplateParamsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTemplateParamsResponse GetTemplateParamsResponse
     */
    public function getTemplateParamsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetTemplateParamsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTemplateParamsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the parameters for replaceable materials in a template, including the parameter names, default values, and material thumbnails. Only advanced templates are supported.
     *  *
     * @param GetTemplateParamsRequest $request GetTemplateParamsRequest
     *
     * @return GetTemplateParamsResponse GetTemplateParamsResponse
     */
    public function getTemplateParams($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTemplateParamsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a transcoding job.
     *  *
     * @param GetTranscodeJobRequest $request GetTranscodeJobRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetTranscodeJobResponse GetTranscodeJobResponse
     */
    public function getTranscodeJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->parentJobId)) {
            $query['ParentJobId'] = $request->parentJobId;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetTranscodeJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetTranscodeJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a transcoding job.
     *  *
     * @param GetTranscodeJobRequest $request GetTranscodeJobRequest
     *
     * @return GetTranscodeJobResponse GetTranscodeJobResponse
     */
    public function getTranscodeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getTranscodeJobWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about URL-based upload jobs.
     *  *
     * @description You can call this operation to query the information, including the upload status, user data, creation time, and completion time, about URL-based upload jobs based on the returned job IDs or the URLs used during the upload.
     * If an upload job fails, you can view the error code and error message. If an upload job is successful, you can obtain the video ID.
     *  *
     * @param GetUrlUploadInfosRequest $request GetUrlUploadInfosRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetUrlUploadInfosResponse GetUrlUploadInfosResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetUrlUploadInfosResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetUrlUploadInfosResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about URL-based upload jobs.
     *  *
     * @description You can call this operation to query the information, including the upload status, user data, creation time, and completion time, about URL-based upload jobs based on the returned job IDs or the URLs used during the upload.
     * If an upload job fails, you can view the error code and error message. If an upload job is successful, you can obtain the video ID.
     *  *
     * @param GetUrlUploadInfosRequest $request GetUrlUploadInfosRequest
     *
     * @return GetUrlUploadInfosResponse GetUrlUploadInfosResponse
     */
    public function getUrlUploadInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getUrlUploadInfosWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about video and audio files.
     *  *
     * @description You can call this operation to query information about up to the first 5,000 audio and video files based on the filter condition, such as the status or category ID of the file. We recommend that you set the StartTime and EndTime parameters to narrow down the time range and perform multiple queries to obtain data.
     *  *
     * @param GetVideoListRequest $request GetVideoListRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetVideoListResponse GetVideoListResponse
     */
    public function getVideoListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cateId)) {
            $query['CateId'] = $request->cateId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetVideoListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetVideoListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries information about video and audio files.
     *  *
     * @description You can call this operation to query information about up to the first 5,000 audio and video files based on the filter condition, such as the status or category ID of the file. We recommend that you set the StartTime and EndTime parameters to narrow down the time range and perform multiple queries to obtain data.
     *  *
     * @param GetVideoListRequest $request GetVideoListRequest
     *
     * @return GetVideoListResponse GetVideoListResponse
     */
    public function getVideoList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVideoListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a VOD packaging asset.
     *  *
     * @param GetVodPackagingAssetRequest $request GetVodPackagingAssetRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetVodPackagingAssetResponse GetVodPackagingAssetResponse
     */
    public function getVodPackagingAssetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->assetName)) {
            $query['AssetName'] = $request->assetName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetVodPackagingAssetResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetVodPackagingAssetResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a VOD packaging asset.
     *  *
     * @param GetVodPackagingAssetRequest $request GetVodPackagingAssetRequest
     *
     * @return GetVodPackagingAssetResponse GetVodPackagingAssetResponse
     */
    public function getVodPackagingAsset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVodPackagingAssetWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a packaging configuration.
     *  *
     * @param GetVodPackagingConfigurationRequest $request GetVodPackagingConfigurationRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetVodPackagingConfigurationResponse GetVodPackagingConfigurationResponse
     */
    public function getVodPackagingConfigurationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configurationName)) {
            $query['ConfigurationName'] = $request->configurationName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetVodPackagingConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetVodPackagingConfigurationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a packaging configuration.
     *  *
     * @param GetVodPackagingConfigurationRequest $request GetVodPackagingConfigurationRequest
     *
     * @return GetVodPackagingConfigurationResponse GetVodPackagingConfigurationResponse
     */
    public function getVodPackagingConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVodPackagingConfigurationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a packaging group.
     *  *
     * @param GetVodPackagingGroupRequest $request GetVodPackagingGroupRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetVodPackagingGroupResponse GetVodPackagingGroupResponse
     */
    public function getVodPackagingGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetVodPackagingGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetVodPackagingGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a packaging group.
     *  *
     * @param GetVodPackagingGroupRequest $request GetVodPackagingGroupRequest
     *
     * @return GetVodPackagingGroupResponse GetVodPackagingGroupResponse
     */
    public function getVodPackagingGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getVodPackagingGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a workflow task by task ID, including the workflow ID and the status and result of the task. You can query only the workflow task data of the last year.
     *  *
     * @param GetWorkflowTaskRequest $request GetWorkflowTaskRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetWorkflowTaskResponse GetWorkflowTaskResponse
     */
    public function getWorkflowTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return GetWorkflowTaskResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return GetWorkflowTaskResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a workflow task by task ID, including the workflow ID and the status and result of the task. You can query only the workflow task data of the last year.
     *  *
     * @param GetWorkflowTaskRequest $request GetWorkflowTaskRequest
     *
     * @return GetWorkflowTaskResponse GetWorkflowTaskResponse
     */
    public function getWorkflowTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getWorkflowTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Adds a media asset in a search library. Before you call this operation, you must create a search library.
     *  *
     * @param InsertMediaToSearchLibRequest $request InsertMediaToSearchLibRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return InsertMediaToSearchLibResponse InsertMediaToSearchLibResponse
     */
    public function insertMediaToSearchLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
        }
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->mediaType)) {
            $query['MediaType'] = $request->mediaType;
        }
        if (!Utils::isUnset($request->msgBody)) {
            $query['MsgBody'] = $request->msgBody;
        }
        if (!Utils::isUnset($request->searchLibName)) {
            $query['SearchLibName'] = $request->searchLibName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return InsertMediaToSearchLibResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return InsertMediaToSearchLibResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Adds a media asset in a search library. Before you call this operation, you must create a search library.
     *  *
     * @param InsertMediaToSearchLibRequest $request InsertMediaToSearchLibRequest
     *
     * @return InsertMediaToSearchLibResponse InsertMediaToSearchLibResponse
     */
    public function insertMediaToSearchLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->insertMediaToSearchLibWithOptions($request, $runtime);
    }

    /**
     * @summary 列出智能体的对话历史记录。
     *  *
     * @param ListAIAgentDialoguesRequest $request ListAIAgentDialoguesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAIAgentDialoguesResponse ListAIAgentDialoguesResponse
     */
    public function listAIAgentDialoguesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListAIAgentDialoguesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAIAgentDialoguesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 列出智能体的对话历史记录。
     *  *
     * @param ListAIAgentDialoguesRequest $request ListAIAgentDialoguesRequest
     *
     * @return ListAIAgentDialoguesResponse ListAIAgentDialoguesResponse
     */
    public function listAIAgentDialogues($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAIAgentDialoguesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of AI agents.
     *  *
     * @description ## [](#)Request description
     * You can call this operation to query a list of AI agents based on the `AIAgentId`. The optional parameters include `StartTime`, `EndTime`, `PageSize`, and `PageNumber`. The returned result includes the status, runtime configurations, template configurations, custom information, and the URL of call log file for each AI agent.
     * **Note**:
     * *   The default value of `PageSize` is 10, and the default value of `PageNumber` is 1.
     *  *
     * @param ListAIAgentInstanceRequest $request ListAIAgentInstanceRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAIAgentInstanceResponse ListAIAgentInstanceResponse
     */
    public function listAIAgentInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->AIAgentId)) {
            $query['AIAgentId'] = $request->AIAgentId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListAIAgentInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAIAgentInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of AI agents.
     *  *
     * @description ## [](#)Request description
     * You can call this operation to query a list of AI agents based on the `AIAgentId`. The optional parameters include `StartTime`, `EndTime`, `PageSize`, and `PageNumber`. The returned result includes the status, runtime configurations, template configurations, custom information, and the URL of call log file for each AI agent.
     * **Note**:
     * *   The default value of `PageSize` is 10, and the default value of `PageNumber` is 1.
     *  *
     * @param ListAIAgentInstanceRequest $request ListAIAgentInstanceRequest
     *
     * @return ListAIAgentInstanceResponse ListAIAgentInstanceResponse
     */
    public function listAIAgentInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAIAgentInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains ad insertion configurations.
     *  *
     * @param ListAdInsertionsRequest $request ListAdInsertionsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAdInsertionsResponse ListAdInsertionsResponse
     */
    public function listAdInsertionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListAdInsertionsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAdInsertionsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Obtains ad insertion configurations.
     *  *
     * @param ListAdInsertionsRequest $request ListAdInsertionsRequest
     *
     * @return ListAdInsertionsResponse ListAdInsertionsResponse
     */
    public function listAdInsertions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAdInsertionsWithOptions($request, $runtime);
    }

    /**
     * @summary Lists alerts received in MediaWeaver.
     *  *
     * @param ListAlertsRequest $request ListAlertsRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAlertsResponse ListAlertsResponse
     */
    public function listAlertsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->gmtEnd)) {
            $query['GmtEnd'] = $request->gmtEnd;
        }
        if (!Utils::isUnset($request->gmtStart)) {
            $query['GmtStart'] = $request->gmtStart;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceArn)) {
            $query['ResourceArn'] = $request->resourceArn;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->sortByModifiedTime)) {
            $query['SortByModifiedTime'] = $request->sortByModifiedTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListAlertsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAlertsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Lists alerts received in MediaWeaver.
     *  *
     * @param ListAlertsRequest $request ListAlertsRequest
     *
     * @return ListAlertsResponse ListAlertsResponse
     */
    public function listAlerts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAlertsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of tags of media assets in the public media library.
     *  *
     * @param ListAllPublicMediaTagsRequest $request ListAllPublicMediaTagsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAllPublicMediaTagsResponse ListAllPublicMediaTagsResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListAllPublicMediaTagsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAllPublicMediaTagsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of tags of media assets in the public media library.
     *  *
     * @param ListAllPublicMediaTagsRequest $request ListAllPublicMediaTagsRequest
     *
     * @return ListAllPublicMediaTagsResponse ListAllPublicMediaTagsResponse
     */
    public function listAllPublicMediaTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAllPublicMediaTagsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of digital human training jobs.
     *  *
     * @param ListAvatarTrainingJobsRequest $request ListAvatarTrainingJobsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAvatarTrainingJobsResponse ListAvatarTrainingJobsResponse
     */
    public function listAvatarTrainingJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListAvatarTrainingJobsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAvatarTrainingJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of digital human training jobs.
     *  *
     * @param ListAvatarTrainingJobsRequest $request ListAvatarTrainingJobsRequest
     *
     * @return ListAvatarTrainingJobsResponse ListAvatarTrainingJobsResponse
     */
    public function listAvatarTrainingJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAvatarTrainingJobsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of trained digital humans.
     *  *
     * @param ListAvatarsRequest $request ListAvatarsRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAvatarsResponse ListAvatarsResponse
     */
    public function listAvatarsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->avatarType)) {
            $query['AvatarType'] = $request->avatarType;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListAvatarsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListAvatarsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of trained digital humans.
     *  *
     * @param ListAvatarsRequest $request ListAvatarsRequest
     *
     * @return ListAvatarsResponse ListAvatarsResponse
     */
    public function listAvatars($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAvatarsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of quick video production jobs based on conditions such as the job type and state.
     *  *
     * @param ListBatchMediaProducingJobsRequest $request ListBatchMediaProducingJobsRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListBatchMediaProducingJobsResponse ListBatchMediaProducingJobsResponse
     */
    public function listBatchMediaProducingJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->jobType)) {
            $query['JobType'] = $request->jobType;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListBatchMediaProducingJobsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListBatchMediaProducingJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of quick video production jobs based on conditions such as the job type and state.
     *  *
     * @param ListBatchMediaProducingJobsRequest $request ListBatchMediaProducingJobsRequest
     *
     * @return ListBatchMediaProducingJobsResponse ListBatchMediaProducingJobsResponse
     */
    public function listBatchMediaProducingJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBatchMediaProducingJobsWithOptions($request, $runtime);
    }

    /**
     * @summary Lists alerts for resources in a MediaWeaver channel.
     *  *
     * @param ListChannelAlertsRequest $request ListChannelAlertsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListChannelAlertsResponse ListChannelAlertsResponse
     */
    public function listChannelAlertsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->gmtEnd)) {
            $query['GmtEnd'] = $request->gmtEnd;
        }
        if (!Utils::isUnset($request->gmtStart)) {
            $query['GmtStart'] = $request->gmtStart;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceArn)) {
            $query['ResourceArn'] = $request->resourceArn;
        }
        if (!Utils::isUnset($request->sortByModifiedTime)) {
            $query['SortByModifiedTime'] = $request->sortByModifiedTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListChannelAlertsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListChannelAlertsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Lists alerts for resources in a MediaWeaver channel.
     *  *
     * @param ListChannelAlertsRequest $request ListChannelAlertsRequest
     *
     * @return ListChannelAlertsResponse ListChannelAlertsResponse
     */
    public function listChannelAlerts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listChannelAlertsWithOptions($request, $runtime);
    }

    /**
     * @summary Lists MediaWeaver channels.
     *  *
     * @param ListChannelsRequest $request ListChannelsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListChannelsResponse ListChannelsResponse
     */
    public function listChannelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->channelName)) {
            $query['ChannelName'] = $request->channelName;
        }
        if (!Utils::isUnset($request->channelTier)) {
            $query['ChannelTier'] = $request->channelTier;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->playbackMode)) {
            $query['PlaybackMode'] = $request->playbackMode;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->sortByModifiedTime)) {
            $query['SortByModifiedTime'] = $request->sortByModifiedTime;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListChannelsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListChannelsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Lists MediaWeaver channels.
     *  *
     * @param ListChannelsRequest $request ListChannelsRequest
     *
     * @return ListChannelsResponse ListChannelsResponse
     */
    public function listChannels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listChannelsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of custom templates.
     *  *
     * @param ListCustomTemplatesRequest $request ListCustomTemplatesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCustomTemplatesResponse ListCustomTemplatesResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListCustomTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListCustomTemplatesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of custom templates.
     *  *
     * @param ListCustomTemplatesRequest $request ListCustomTemplatesRequest
     *
     * @return ListCustomTemplatesResponse ListCustomTemplatesResponse
     */
    public function listCustomTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomTemplatesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of human voice cloning jobs.
     *  *
     * @param ListCustomizedVoiceJobsRequest $request ListCustomizedVoiceJobsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCustomizedVoiceJobsResponse ListCustomizedVoiceJobsResponse
     */
    public function listCustomizedVoiceJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListCustomizedVoiceJobsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListCustomizedVoiceJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of human voice cloning jobs.
     *  *
     * @param ListCustomizedVoiceJobsRequest $request ListCustomizedVoiceJobsRequest
     *
     * @return ListCustomizedVoiceJobsResponse ListCustomizedVoiceJobsResponse
     */
    public function listCustomizedVoiceJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomizedVoiceJobsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of personalized human voices.
     *  *
     * @param ListCustomizedVoicesRequest $request ListCustomizedVoicesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCustomizedVoicesResponse ListCustomizedVoicesResponse
     */
    public function listCustomizedVoicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListCustomizedVoicesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListCustomizedVoicesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of personalized human voices.
     *  *
     * @param ListCustomizedVoicesRequest $request ListCustomizedVoicesRequest
     *
     * @return ListCustomizedVoicesResponse ListCustomizedVoicesResponse
     */
    public function listCustomizedVoices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCustomizedVoicesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of media fingerprint libraries.
     *  *
     * @param ListDNADBRequest $request ListDNADBRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDNADBResponse ListDNADBResponse
     */
    public function listDNADBWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBIds)) {
            $query['DBIds'] = $request->DBIds;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListDNADBResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDNADBResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of media fingerprint libraries.
     *  *
     * @param ListDNADBRequest $request ListDNADBRequest
     *
     * @return ListDNADBResponse ListDNADBResponse
     */
    public function listDNADB($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDNADBWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of files in a media fingerprint library.
     *  *
     * @description You can call this operation to query files in a media fingerprint library based on the library ID. The queried results can be paginated.
     *  *
     * @param ListDNAFilesRequest $request ListDNAFilesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDNAFilesResponse ListDNAFilesResponse
     */
    public function listDNAFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBId)) {
            $query['DBId'] = $request->DBId;
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
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListDNAFilesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDNAFilesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of files in a media fingerprint library.
     *  *
     * @description You can call this operation to query files in a media fingerprint library based on the library ID. The queried results can be paginated.
     *  *
     * @param ListDNAFilesRequest $request ListDNAFilesRequest
     *
     * @return ListDNAFilesResponse ListDNAFilesResponse
     */
    public function listDNAFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDNAFilesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of image animation jobs.
     *  *
     * @param ListDynamicImageJobsRequest $request ListDynamicImageJobsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDynamicImageJobsResponse ListDynamicImageJobsResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListDynamicImageJobsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListDynamicImageJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of image animation jobs.
     *  *
     * @param ListDynamicImageJobsRequest $request ListDynamicImageJobsRequest
     *
     * @return ListDynamicImageJobsResponse ListDynamicImageJobsResponse
     */
    public function listDynamicImageJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDynamicImageJobsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of projects that meet the specified conditions. You can filter projects by project creation time.
     *  *
     * @param ListEditingProjectsRequest $request ListEditingProjectsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListEditingProjectsResponse ListEditingProjectsResponse
     */
    public function listEditingProjectsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->createSource)) {
            $query['CreateSource'] = $request->createSource;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListEditingProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListEditingProjectsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of projects that meet the specified conditions. You can filter projects by project creation time.
     *  *
     * @param ListEditingProjectsRequest $request ListEditingProjectsRequest
     *
     * @return ListEditingProjectsResponse ListEditingProjectsResponse
     */
    public function listEditingProjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listEditingProjectsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries live package channel groups by page. Fuzzy search by name or description and sorting are supported.
     *  *
     * @description ## [](#)Usage notes
     *  *
     * @param ListLivePackageChannelGroupsRequest $request ListLivePackageChannelGroupsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLivePackageChannelGroupsResponse ListLivePackageChannelGroupsResponse
     */
    public function listLivePackageChannelGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListLivePackageChannelGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListLivePackageChannelGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries live package channel groups by page. Fuzzy search by name or description and sorting are supported.
     *  *
     * @description ## [](#)Usage notes
     *  *
     * @param ListLivePackageChannelGroupsRequest $request ListLivePackageChannelGroupsRequest
     *
     * @return ListLivePackageChannelGroupsResponse ListLivePackageChannelGroupsResponse
     */
    public function listLivePackageChannelGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLivePackageChannelGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries live package channels by channel group and keyword. Paging and sorting are supported.
     *  *
     * @description ## [](#)Usage notes
     * This API operation allows you to query live package channels by **GroupName** and **Keyword**. Keyword is optional. You can sort the channels by creation time in ascending or descending order and paginate the results. This facilitates the management of channels and retrieval of channel information.
     * *   **GroupName** is required to specify the channel group to which the channel belongs.
     * *   **Keyword** supports fuzzy match of channel names or descriptions, which helps quickly filter desired channels.
     * *   **PageNo** and **PageSize** can help control the paging of returned results to facilitate batch processing of data.
     * *   **SortBy** allows you to customize how the results are sorted. By default, the results are sorted in descending order.
     * **RequestId** in the response is used for subsequent troubleshooting. **TotalCount** indicates the total number of channels that meet the conditions.
     *  *
     * @param ListLivePackageChannelsRequest $request ListLivePackageChannelsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLivePackageChannelsResponse ListLivePackageChannelsResponse
     */
    public function listLivePackageChannelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
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
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListLivePackageChannelsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListLivePackageChannelsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries live package channels by channel group and keyword. Paging and sorting are supported.
     *  *
     * @description ## [](#)Usage notes
     * This API operation allows you to query live package channels by **GroupName** and **Keyword**. Keyword is optional. You can sort the channels by creation time in ascending or descending order and paginate the results. This facilitates the management of channels and retrieval of channel information.
     * *   **GroupName** is required to specify the channel group to which the channel belongs.
     * *   **Keyword** supports fuzzy match of channel names or descriptions, which helps quickly filter desired channels.
     * *   **PageNo** and **PageSize** can help control the paging of returned results to facilitate batch processing of data.
     * *   **SortBy** allows you to customize how the results are sorted. By default, the results are sorted in descending order.
     * **RequestId** in the response is used for subsequent troubleshooting. **TotalCount** indicates the total number of channels that meet the conditions.
     *  *
     * @param ListLivePackageChannelsRequest $request ListLivePackageChannelsRequest
     *
     * @return ListLivePackageChannelsResponse ListLivePackageChannelsResponse
     */
    public function listLivePackageChannels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLivePackageChannelsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries origin endpoints by channel group and channel name. Paging and sorting are supported.
     *  *
     * @description ## [](#)Usage notes
     * This API operation allows you to query origin endpoints associated with a live package channel. The results include detailed configurations about the origin endpoints, such as access URL, protocol, and security policies. Paging and sorting by creation time are supported.
     *  *
     * @param ListLivePackageOriginEndpointsRequest $request ListLivePackageOriginEndpointsRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLivePackageOriginEndpointsResponse ListLivePackageOriginEndpointsResponse
     */
    public function listLivePackageOriginEndpointsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->channelName)) {
            $query['ChannelName'] = $request->channelName;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
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
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListLivePackageOriginEndpointsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListLivePackageOriginEndpointsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries origin endpoints by channel group and channel name. Paging and sorting are supported.
     *  *
     * @description ## [](#)Usage notes
     * This API operation allows you to query origin endpoints associated with a live package channel. The results include detailed configurations about the origin endpoints, such as access URL, protocol, and security policies. Paging and sorting by creation time are supported.
     *  *
     * @param ListLivePackageOriginEndpointsRequest $request ListLivePackageOriginEndpointsRequest
     *
     * @return ListLivePackageOriginEndpointsResponse ListLivePackageOriginEndpointsResponse
     */
    public function listLivePackageOriginEndpoints($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLivePackageOriginEndpointsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all recording index files in the specified period of time.
     *  *
     * @param ListLiveRecordFilesRequest $request ListLiveRecordFilesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLiveRecordFilesResponse ListLiveRecordFilesResponse
     */
    public function listLiveRecordFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListLiveRecordFilesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListLiveRecordFilesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries all recording index files in the specified period of time.
     *  *
     * @param ListLiveRecordFilesRequest $request ListLiveRecordFilesRequest
     *
     * @return ListLiveRecordFilesResponse ListLiveRecordFilesResponse
     */
    public function listLiveRecordFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveRecordFilesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of live stream recording jobs by page.
     *  *
     * @param ListLiveRecordJobsRequest $request ListLiveRecordJobsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLiveRecordJobsResponse ListLiveRecordJobsResponse
     */
    public function listLiveRecordJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListLiveRecordJobsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListLiveRecordJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of live stream recording jobs by page.
     *  *
     * @param ListLiveRecordJobsRequest $request ListLiveRecordJobsRequest
     *
     * @return ListLiveRecordJobsResponse ListLiveRecordJobsResponse
     */
    public function listLiveRecordJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveRecordJobsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of live stream recording templates.
     *  *
     * @param ListLiveRecordTemplatesRequest $request ListLiveRecordTemplatesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLiveRecordTemplatesResponse ListLiveRecordTemplatesResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListLiveRecordTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListLiveRecordTemplatesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of live stream recording templates.
     *  *
     * @param ListLiveRecordTemplatesRequest $request ListLiveRecordTemplatesRequest
     *
     * @return ListLiveRecordTemplatesResponse ListLiveRecordTemplatesResponse
     */
    public function listLiveRecordTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveRecordTemplatesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of live stream snapshot files by page.
     *  *
     * @param ListLiveSnapshotFilesRequest $request ListLiveSnapshotFilesRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLiveSnapshotFilesResponse ListLiveSnapshotFilesResponse
     */
    public function listLiveSnapshotFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListLiveSnapshotFilesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListLiveSnapshotFilesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of live stream snapshot files by page.
     *  *
     * @param ListLiveSnapshotFilesRequest $request ListLiveSnapshotFilesRequest
     *
     * @return ListLiveSnapshotFilesResponse ListLiveSnapshotFilesResponse
     */
    public function listLiveSnapshotFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveSnapshotFilesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of live stream snapshot jobs by page.
     *  *
     * @param ListLiveSnapshotJobsRequest $request ListLiveSnapshotJobsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLiveSnapshotJobsResponse ListLiveSnapshotJobsResponse
     */
    public function listLiveSnapshotJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListLiveSnapshotJobsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListLiveSnapshotJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of live stream snapshot jobs by page.
     *  *
     * @param ListLiveSnapshotJobsRequest $request ListLiveSnapshotJobsRequest
     *
     * @return ListLiveSnapshotJobsResponse ListLiveSnapshotJobsResponse
     */
    public function listLiveSnapshotJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveSnapshotJobsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of live stream snapshot templates by page.
     *  *
     * @param ListLiveSnapshotTemplatesRequest $request ListLiveSnapshotTemplatesRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLiveSnapshotTemplatesResponse ListLiveSnapshotTemplatesResponse
     */
    public function listLiveSnapshotTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListLiveSnapshotTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListLiveSnapshotTemplatesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of live stream snapshot templates by page.
     *  *
     * @param ListLiveSnapshotTemplatesRequest $request ListLiveSnapshotTemplatesRequest
     *
     * @return ListLiveSnapshotTemplatesResponse ListLiveSnapshotTemplatesResponse
     */
    public function listLiveSnapshotTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveSnapshotTemplatesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of live stream transcoding jobs.
     *  *
     * @param ListLiveTranscodeJobsRequest $request ListLiveTranscodeJobsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLiveTranscodeJobsResponse ListLiveTranscodeJobsResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListLiveTranscodeJobsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListLiveTranscodeJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of live stream transcoding jobs.
     *  *
     * @param ListLiveTranscodeJobsRequest $request ListLiveTranscodeJobsRequest
     *
     * @return ListLiveTranscodeJobsResponse ListLiveTranscodeJobsResponse
     */
    public function listLiveTranscodeJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveTranscodeJobsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of live stream transcoding templates.
     *  *
     * @param ListLiveTranscodeTemplatesRequest $request ListLiveTranscodeTemplatesRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLiveTranscodeTemplatesResponse ListLiveTranscodeTemplatesResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListLiveTranscodeTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListLiveTranscodeTemplatesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of live stream transcoding templates.
     *  *
     * @param ListLiveTranscodeTemplatesRequest $request ListLiveTranscodeTemplatesRequest
     *
     * @return ListLiveTranscodeTemplatesResponse ListLiveTranscodeTemplatesResponse
     */
    public function listLiveTranscodeTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLiveTranscodeTemplatesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the basic information of all media assets that meet the specified conditions.
     *  *
     * @description If includeFileBasicInfo is set to true, the basic information, such as the duration and file size, of the source file is also returned. At most the first 100 entries that meet the specified conditions are returned. All media assets must exactly match all non-empty fields. The fields that support exact match include MediaType, Source, BusinessType, Category, and Status. If all information cannot be returned at a time, you can use NextToken to initiate a request to retrieve a new page of results.
     *  *
     * @param ListMediaBasicInfosRequest $request ListMediaBasicInfosRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMediaBasicInfosResponse ListMediaBasicInfosResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListMediaBasicInfosResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListMediaBasicInfosResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the basic information of all media assets that meet the specified conditions.
     *  *
     * @description If includeFileBasicInfo is set to true, the basic information, such as the duration and file size, of the source file is also returned. At most the first 100 entries that meet the specified conditions are returned. All media assets must exactly match all non-empty fields. The fields that support exact match include MediaType, Source, BusinessType, Category, and Status. If all information cannot be returned at a time, you can use NextToken to initiate a request to retrieve a new page of results.
     *  *
     * @param ListMediaBasicInfosRequest $request ListMediaBasicInfosRequest
     *
     * @return ListMediaBasicInfosResponse ListMediaBasicInfosResponse
     */
    public function listMediaBasicInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMediaBasicInfosWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of media information analysis jobs.
     *  *
     * @param ListMediaInfoJobsRequest $request ListMediaInfoJobsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMediaInfoJobsResponse ListMediaInfoJobsResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListMediaInfoJobsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListMediaInfoJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of media information analysis jobs.
     *  *
     * @param ListMediaInfoJobsRequest $request ListMediaInfoJobsRequest
     *
     * @return ListMediaInfoJobsResponse ListMediaInfoJobsResponse
     */
    public function listMediaInfoJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMediaInfoJobsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries MediaLive channels.
     *  *
     * @description *
     * ## [](#qps-)QPS limit
     * This operation can be called up to 50 times per second for each Alibaba Cloud account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *  *
     * @param ListMediaLiveChannelsRequest $request ListMediaLiveChannelsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMediaLiveChannelsResponse ListMediaLiveChannelsResponse
     */
    public function listMediaLiveChannelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->keyword)) {
            $body['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->skip)) {
            $body['Skip'] = $request->skip;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $body['SortOrder'] = $request->sortOrder;
        }
        if (!Utils::isUnset($request->states)) {
            $body['States'] = $request->states;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListMediaLiveChannels',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListMediaLiveChannelsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListMediaLiveChannelsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries MediaLive channels.
     *  *
     * @description *
     * ## [](#qps-)QPS limit
     * This operation can be called up to 50 times per second for each Alibaba Cloud account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *  *
     * @param ListMediaLiveChannelsRequest $request ListMediaLiveChannelsRequest
     *
     * @return ListMediaLiveChannelsResponse ListMediaLiveChannelsResponse
     */
    public function listMediaLiveChannels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMediaLiveChannelsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the security groups in MediaLive.
     *  *
     * @description *
     * ## [](#qps-)QPS limit
     * This operation can be called up to 50 times per second for each Alibaba Cloud account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *  *
     * @param ListMediaLiveInputSecurityGroupsRequest $request ListMediaLiveInputSecurityGroupsRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMediaLiveInputSecurityGroupsResponse ListMediaLiveInputSecurityGroupsResponse
     */
    public function listMediaLiveInputSecurityGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->keyword)) {
            $body['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->skip)) {
            $body['Skip'] = $request->skip;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $body['SortOrder'] = $request->sortOrder;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListMediaLiveInputSecurityGroups',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListMediaLiveInputSecurityGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListMediaLiveInputSecurityGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the security groups in MediaLive.
     *  *
     * @description *
     * ## [](#qps-)QPS limit
     * This operation can be called up to 50 times per second for each Alibaba Cloud account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *  *
     * @param ListMediaLiveInputSecurityGroupsRequest $request ListMediaLiveInputSecurityGroupsRequest
     *
     * @return ListMediaLiveInputSecurityGroupsResponse ListMediaLiveInputSecurityGroupsResponse
     */
    public function listMediaLiveInputSecurityGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMediaLiveInputSecurityGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries MediaLive inputs.
     *  *
     * @description *
     * ## [](#qps-)QPS limit
     * This operation can be called up to 50 times per second for each Alibaba Cloud account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *  *
     * @param ListMediaLiveInputsRequest $request ListMediaLiveInputsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMediaLiveInputsResponse ListMediaLiveInputsResponse
     */
    public function listMediaLiveInputsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->keyword)) {
            $body['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->skip)) {
            $body['Skip'] = $request->skip;
        }
        if (!Utils::isUnset($request->sortOrder)) {
            $body['SortOrder'] = $request->sortOrder;
        }
        if (!Utils::isUnset($request->types)) {
            $body['Types'] = $request->types;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListMediaLiveInputs',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListMediaLiveInputsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListMediaLiveInputsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries MediaLive inputs.
     *  *
     * @description *
     * ## [](#qps-)QPS limit
     * This operation can be called up to 50 times per second for each Alibaba Cloud account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *  *
     * @param ListMediaLiveInputsRequest $request ListMediaLiveInputsRequest
     *
     * @return ListMediaLiveInputsResponse ListMediaLiveInputsResponse
     */
    public function listMediaLiveInputs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMediaLiveInputsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of marks of a media asset.
     *  *
     * @param ListMediaMarksRequest $request ListMediaMarksRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMediaMarksResponse ListMediaMarksResponse
     */
    public function listMediaMarksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->mediaMarkIds)) {
            $query['MediaMarkIds'] = $request->mediaMarkIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListMediaMarksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListMediaMarksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of marks of a media asset.
     *  *
     * @param ListMediaMarksRequest $request ListMediaMarksRequest
     *
     * @return ListMediaMarksResponse ListMediaMarksResponse
     */
    public function listMediaMarks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMediaMarksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of media editing and production jobs that meet the specified conditions. You can query the jobs based on the job state and type.
     *  *
     * @param ListMediaProducingJobsRequest $request ListMediaProducingJobsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListMediaProducingJobsResponse ListMediaProducingJobsResponse
     */
    public function listMediaProducingJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->jobType)) {
            $query['JobType'] = $request->jobType;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->masterJobId)) {
            $query['MasterJobId'] = $request->masterJobId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListMediaProducingJobsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListMediaProducingJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of media editing and production jobs that meet the specified conditions. You can query the jobs based on the job state and type.
     *  *
     * @param ListMediaProducingJobsRequest $request ListMediaProducingJobsRequest
     *
     * @return ListMediaProducingJobsResponse ListMediaProducingJobsResponse
     */
    public function listMediaProducingJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listMediaProducingJobsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of packaging jobs.
     *  *
     * @param ListPackageJobsRequest $request ListPackageJobsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPackageJobsResponse ListPackageJobsResponse
     */
    public function listPackageJobsWithOptions($request, $runtime)
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListPackageJobsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListPackageJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of packaging jobs.
     *  *
     * @param ListPackageJobsRequest $request ListPackageJobsRequest
     *
     * @return ListPackageJobsResponse ListPackageJobsResponse
     */
    public function listPackageJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPackageJobsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of ApsaraVideo Media Processing (MPS) queues.
     *  *
     * @param ListPipelinesRequest $request ListPipelinesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPipelinesResponse ListPipelinesResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListPipelinesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListPipelinesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of ApsaraVideo Media Processing (MPS) queues.
     *  *
     * @param ListPipelinesRequest $request ListPipelinesRequest
     *
     * @return ListPipelinesResponse ListPipelinesResponse
     */
    public function listPipelines($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPipelinesWithOptions($request, $runtime);
    }

    /**
     * @summary Lists programs.
     *  *
     * @param ListProgramsRequest $request ListProgramsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListProgramsResponse ListProgramsResponse
     */
    public function listProgramsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->channelName)) {
            $query['ChannelName'] = $request->channelName;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->programName)) {
            $query['ProgramName'] = $request->programName;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListProgramsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListProgramsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Lists programs.
     *  *
     * @param ListProgramsRequest $request ListProgramsRequest
     *
     * @return ListProgramsResponse ListProgramsResponse
     */
    public function listPrograms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProgramsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of media assets in the public media library that meet the specified conditions. A maximum of 100 media assets can be returned.
     *  *
     * @param ListPublicMediaBasicInfosRequest $request ListPublicMediaBasicInfosRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPublicMediaBasicInfosResponse ListPublicMediaBasicInfosResponse
     */
    public function listPublicMediaBasicInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->businessType)) {
            $query['BusinessType'] = $request->businessType;
        }
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
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListPublicMediaBasicInfosResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListPublicMediaBasicInfosResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of media assets in the public media library that meet the specified conditions. A maximum of 100 media assets can be returned.
     *  *
     * @param ListPublicMediaBasicInfosRequest $request ListPublicMediaBasicInfosRequest
     *
     * @return ListPublicMediaBasicInfosResponse ListPublicMediaBasicInfosResponse
     */
    public function listPublicMediaBasicInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPublicMediaBasicInfosWithOptions($request, $runtime);
    }

    /**
     * @summary Lists the program schedule of a MediaWeaver channel.
     *  *
     * @param ListSchedulesRequest $request ListSchedulesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSchedulesResponse ListSchedulesResponse
     */
    public function listSchedulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->channelName)) {
            $query['ChannelName'] = $request->channelName;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->windowDurationSeconds)) {
            $query['WindowDurationSeconds'] = $request->windowDurationSeconds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListSchedulesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSchedulesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Lists the program schedule of a MediaWeaver channel.
     *  *
     * @param ListSchedulesRequest $request ListSchedulesRequest
     *
     * @return ListSchedulesResponse ListSchedulesResponse
     */
    public function listSchedules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSchedulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about search libraries.
     *  *
     * @param ListSearchLibRequest $request ListSearchLibRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSearchLibResponse ListSearchLibResponse
     */
    public function listSearchLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListSearchLibResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSearchLibResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about search libraries.
     *  *
     * @param ListSearchLibRequest $request ListSearchLibRequest
     *
     * @return ListSearchLibResponse ListSearchLibResponse
     */
    public function listSearchLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSearchLibWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of intelligent jobs based on specified parameters.
     *  *
     * @param ListSmartJobsRequest $request ListSmartJobsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSmartJobsResponse ListSmartJobsResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListSmartJobsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSmartJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of intelligent jobs based on specified parameters.
     *  *
     * @param ListSmartJobsRequest $request ListSmartJobsRequest
     *
     * @return ListSmartJobsResponse ListSmartJobsResponse
     */
    public function listSmartJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSmartJobsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of system digital humans. This operation supports paged queries.
     *  *
     * @param ListSmartSysAvatarModelsRequest $request ListSmartSysAvatarModelsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSmartSysAvatarModelsResponse ListSmartSysAvatarModelsResponse
     */
    public function listSmartSysAvatarModelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sdkVersion)) {
            $query['SdkVersion'] = $request->sdkVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListSmartSysAvatarModelsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSmartSysAvatarModelsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of system digital humans. This operation supports paged queries.
     *  *
     * @param ListSmartSysAvatarModelsRequest $request ListSmartSysAvatarModelsRequest
     *
     * @return ListSmartSysAvatarModelsResponse ListSmartSysAvatarModelsResponse
     */
    public function listSmartSysAvatarModels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSmartSysAvatarModelsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of speaker groups, including the name, gender, and sample audio of each speaker. The list is grouped by scenario.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSmartVoiceGroupsResponse ListSmartVoiceGroupsResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListSmartVoiceGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSmartVoiceGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of speaker groups, including the name, gender, and sample audio of each speaker. The list is grouped by scenario.
     *  *
     * @return ListSmartVoiceGroupsResponse ListSmartVoiceGroupsResponse
     */
    public function listSmartVoiceGroups()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSmartVoiceGroupsWithOptions($runtime);
    }

    /**
     * @summary Queries a list of snapshot jobs.
     *  *
     * @param ListSnapshotJobsRequest $request ListSnapshotJobsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSnapshotJobsResponse ListSnapshotJobsResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListSnapshotJobsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSnapshotJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of snapshot jobs.
     *  *
     * @param ListSnapshotJobsRequest $request ListSnapshotJobsRequest
     *
     * @return ListSnapshotJobsResponse ListSnapshotJobsResponse
     */
    public function listSnapshotJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSnapshotJobsWithOptions($request, $runtime);
    }

    /**
     * @summary Lists source locations.
     *  *
     * @param ListSourceLocationsRequest $request ListSourceLocationsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSourceLocationsResponse ListSourceLocationsResponse
     */
    public function listSourceLocationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filterState)) {
            $query['FilterState'] = $request->filterState;
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
        if (!Utils::isUnset($request->sortByModifiedTime)) {
            $query['SortByModifiedTime'] = $request->sortByModifiedTime;
        }
        if (!Utils::isUnset($request->sourceLocationName)) {
            $query['SourceLocationName'] = $request->sourceLocationName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListSourceLocationsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSourceLocationsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Lists source locations.
     *  *
     * @param ListSourceLocationsRequest $request ListSourceLocationsRequest
     *
     * @return ListSourceLocationsResponse ListSourceLocationsResponse
     */
    public function listSourceLocations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSourceLocationsWithOptions($request, $runtime);
    }

    /**
     * @summary Lists sources in MediaWeaver.
     *  *
     * @param ListSourcesRequest $request ListSourcesRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSourcesResponse ListSourcesResponse
     */
    public function listSourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filterState)) {
            $query['FilterState'] = $request->filterState;
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
        if (!Utils::isUnset($request->sortByModifiedTime)) {
            $query['SortByModifiedTime'] = $request->sortByModifiedTime;
        }
        if (!Utils::isUnset($request->sourceLocationName)) {
            $query['SourceLocationName'] = $request->sourceLocationName;
        }
        if (!Utils::isUnset($request->sourceName)) {
            $query['SourceName'] = $request->sourceName;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSourcesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Lists sources in MediaWeaver.
     *  *
     * @param ListSourcesRequest $request ListSourcesRequest
     *
     * @return ListSourcesResponse ListSourcesResponse
     */
    public function listSources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of system templates.
     *  *
     * @description Template types:
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
     *  *
     * @param ListSystemTemplatesRequest $request ListSystemTemplatesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListSystemTemplatesResponse ListSystemTemplatesResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListSystemTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListSystemTemplatesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of system templates.
     *  *
     * @description Template types:
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
     *  *
     * @param ListSystemTemplatesRequest $request ListSystemTemplatesRequest
     *
     * @return ListSystemTemplatesResponse ListSystemTemplatesResponse
     */
    public function listSystemTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listSystemTemplatesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of templates that meet the specified conditions. You can query templates based on information such as the template status and creation source.
     *  *
     * @description A template is an encapsulation of the timeline of a media editing and production job. You can define a common timeline as a template. When you have the same requirements, you need to only specify key parameters and materials to produce videos.
     * *   For more information about how to use a regular template, see [Create and use a regular template](https://help.aliyun.com/document_detail/445399.html).
     * *   For more information about how to use an advanced template, see [Create and use advanced templates](https://help.aliyun.com/document_detail/445389.html).
     *  *
     * @param ListTemplatesRequest $request ListTemplatesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTemplatesResponse ListTemplatesResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTemplatesResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of templates that meet the specified conditions. You can query templates based on information such as the template status and creation source.
     *  *
     * @description A template is an encapsulation of the timeline of a media editing and production job. You can define a common timeline as a template. When you have the same requirements, you need to only specify key parameters and materials to produce videos.
     * *   For more information about how to use a regular template, see [Create and use a regular template](https://help.aliyun.com/document_detail/445399.html).
     * *   For more information about how to use an advanced template, see [Create and use advanced templates](https://help.aliyun.com/document_detail/445389.html).
     *  *
     * @param ListTemplatesRequest $request ListTemplatesRequest
     *
     * @return ListTemplatesResponse ListTemplatesResponse
     */
    public function listTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTemplatesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of transcoding jobs.
     *  *
     * @param ListTranscodeJobsRequest $request ListTranscodeJobsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTranscodeJobsResponse ListTranscodeJobsResponse
     */
    public function listTranscodeJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endOfCreateTime)) {
            $query['EndOfCreateTime'] = $request->endOfCreateTime;
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
        if (!Utils::isUnset($request->parentJobId)) {
            $query['ParentJobId'] = $request->parentJobId;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListTranscodeJobsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListTranscodeJobsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of transcoding jobs.
     *  *
     * @param ListTranscodeJobsRequest $request ListTranscodeJobsRequest
     *
     * @return ListTranscodeJobsResponse ListTranscodeJobsResponse
     */
    public function listTranscodeJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTranscodeJobsWithOptions($request, $runtime);
    }

    /**
     * @summary Lists VOD packaging assets.
     *  *
     * @param ListVodPackagingAssetsRequest $request ListVodPackagingAssetsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListVodPackagingAssetsResponse ListVodPackagingAssetsResponse
     */
    public function listVodPackagingAssetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
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
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListVodPackagingAssetsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListVodPackagingAssetsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Lists VOD packaging assets.
     *  *
     * @param ListVodPackagingAssetsRequest $request ListVodPackagingAssetsRequest
     *
     * @return ListVodPackagingAssetsResponse ListVodPackagingAssetsResponse
     */
    public function listVodPackagingAssets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVodPackagingAssetsWithOptions($request, $runtime);
    }

    /**
     * @summary Lists packaging configurations.
     *  *
     * @param ListVodPackagingConfigurationsRequest $request ListVodPackagingConfigurationsRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListVodPackagingConfigurationsResponse ListVodPackagingConfigurationsResponse
     */
    public function listVodPackagingConfigurationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
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
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListVodPackagingConfigurationsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListVodPackagingConfigurationsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Lists packaging configurations.
     *  *
     * @param ListVodPackagingConfigurationsRequest $request ListVodPackagingConfigurationsRequest
     *
     * @return ListVodPackagingConfigurationsResponse ListVodPackagingConfigurationsResponse
     */
    public function listVodPackagingConfigurations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVodPackagingConfigurationsWithOptions($request, $runtime);
    }

    /**
     * @summary Lists packaging groups.
     *  *
     * @param ListVodPackagingGroupsRequest $request ListVodPackagingGroupsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListVodPackagingGroupsResponse ListVodPackagingGroupsResponse
     */
    public function listVodPackagingGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return ListVodPackagingGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return ListVodPackagingGroupsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Lists packaging groups.
     *  *
     * @param ListVodPackagingGroupsRequest $request ListVodPackagingGroupsRequest
     *
     * @return ListVodPackagingGroupsResponse ListVodPackagingGroupsResponse
     */
    public function listVodPackagingGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listVodPackagingGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询版权水印提取任务
     *  *
     * @param QueryCopyrightExtractJobRequest $request QueryCopyrightExtractJobRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryCopyrightExtractJobResponse QueryCopyrightExtractJobResponse
     */
    public function queryCopyrightExtractJobWithOptions($request, $runtime)
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return QueryCopyrightExtractJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryCopyrightExtractJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询版权水印提取任务
     *  *
     * @param QueryCopyrightExtractJobRequest $request QueryCopyrightExtractJobRequest
     *
     * @return QueryCopyrightExtractJobResponse QueryCopyrightExtractJobResponse
     */
    public function queryCopyrightExtractJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCopyrightExtractJobWithOptions($request, $runtime);
    }

    /**
     * @summary 查询视频版权水印任务列表
     *  *
     * @param QueryCopyrightJobListRequest $request QueryCopyrightJobListRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryCopyrightJobListResponse QueryCopyrightJobListResponse
     */
    public function queryCopyrightJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->createTimeEnd)) {
            $query['CreateTimeEnd'] = $request->createTimeEnd;
        }
        if (!Utils::isUnset($request->createTimeStart)) {
            $query['CreateTimeStart'] = $request->createTimeStart;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->level)) {
            $query['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return QueryCopyrightJobListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryCopyrightJobListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询视频版权水印任务列表
     *  *
     * @param QueryCopyrightJobListRequest $request QueryCopyrightJobListRequest
     *
     * @return QueryCopyrightJobListResponse QueryCopyrightJobListResponse
     */
    public function queryCopyrightJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCopyrightJobListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of media fingerprint analysis jobs.
     *  *
     * @param QueryDNAJobListRequest $request QueryDNAJobListRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryDNAJobListResponse QueryDNAJobListResponse
     */
    public function queryDNAJobListWithOptions($request, $runtime)
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return QueryDNAJobListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryDNAJobListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of media fingerprint analysis jobs.
     *  *
     * @param QueryDNAJobListRequest $request QueryDNAJobListRequest
     *
     * @return QueryDNAJobListResponse QueryDNAJobListResponse
     */
    public function queryDNAJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryDNAJobListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status and result of an intelligent production job.
     *  *
     * @param QueryIProductionJobRequest $request QueryIProductionJobRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryIProductionJobResponse QueryIProductionJobResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return QueryIProductionJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryIProductionJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the status and result of an intelligent production job.
     *  *
     * @param QueryIProductionJobRequest $request QueryIProductionJobRequest
     *
     * @return QueryIProductionJobResponse QueryIProductionJobResponse
     */
    public function queryIProductionJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryIProductionJobWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a content moderation job.
     *  *
     * @description In the content moderation results, the moderation results of the video are sorted in ascending order by time into a timeline. If the video is long, the content moderation results are paginated, and the first page is returned. You can call this operation again to query the remaining moderation results of the video.
     *  *
     * @param QueryMediaCensorJobDetailRequest $request QueryMediaCensorJobDetailRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryMediaCensorJobDetailResponse QueryMediaCensorJobDetailResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return QueryMediaCensorJobDetailResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryMediaCensorJobDetailResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a content moderation job.
     *  *
     * @description In the content moderation results, the moderation results of the video are sorted in ascending order by time into a timeline. If the video is long, the content moderation results are paginated, and the first page is returned. You can call this operation again to query the remaining moderation results of the video.
     *  *
     * @param QueryMediaCensorJobDetailRequest $request QueryMediaCensorJobDetailRequest
     *
     * @return QueryMediaCensorJobDetailResponse QueryMediaCensorJobDetailResponse
     */
    public function queryMediaCensorJobDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMediaCensorJobDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of content moderation jobs.
     *  *
     * @description You can call this operation to query only the content moderation jobs within the most recent three months.
     *  *
     * @param QueryMediaCensorJobListRequest $request QueryMediaCensorJobListRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryMediaCensorJobListResponse QueryMediaCensorJobListResponse
     */
    public function queryMediaCensorJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endOfJobCreatedTimeRange)) {
            $query['EndOfJobCreatedTimeRange'] = $request->endOfJobCreatedTimeRange;
        }
        if (!Utils::isUnset($request->jobIds)) {
            $query['JobIds'] = $request->jobIds;
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
        if (!Utils::isUnset($request->pipelineId)) {
            $query['PipelineId'] = $request->pipelineId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->startOfJobCreatedTimeRange)) {
            $query['StartOfJobCreatedTimeRange'] = $request->startOfJobCreatedTimeRange;
        }
        if (!Utils::isUnset($request->state)) {
            $query['State'] = $request->state;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return QueryMediaCensorJobListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryMediaCensorJobListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of content moderation jobs.
     *  *
     * @description You can call this operation to query only the content moderation jobs within the most recent three months.
     *  *
     * @param QueryMediaCensorJobListRequest $request QueryMediaCensorJobListRequest
     *
     * @return QueryMediaCensorJobListResponse QueryMediaCensorJobListResponse
     */
    public function queryMediaCensorJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMediaCensorJobListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the indexing jobs enabled for a media asset.
     *  *
     * @param QueryMediaIndexJobRequest $request QueryMediaIndexJobRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryMediaIndexJobResponse QueryMediaIndexJobResponse
     */
    public function queryMediaIndexJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->searchLibName)) {
            $query['SearchLibName'] = $request->searchLibName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return QueryMediaIndexJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryMediaIndexJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the indexing jobs enabled for a media asset.
     *  *
     * @param QueryMediaIndexJobRequest $request QueryMediaIndexJobRequest
     *
     * @return QueryMediaIndexJobResponse QueryMediaIndexJobResponse
     */
    public function queryMediaIndexJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryMediaIndexJobWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a search index.
     *  *
     * @param QuerySearchIndexRequest $request QuerySearchIndexRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return QuerySearchIndexResponse QuerySearchIndexResponse
     */
    public function querySearchIndexWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->indexType)) {
            $query['IndexType'] = $request->indexType;
        }
        if (!Utils::isUnset($request->searchLibName)) {
            $query['SearchLibName'] = $request->searchLibName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return QuerySearchIndexResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QuerySearchIndexResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a search index.
     *  *
     * @param QuerySearchIndexRequest $request QuerySearchIndexRequest
     *
     * @return QuerySearchIndexResponse QuerySearchIndexResponse
     */
    public function querySearchIndex($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySearchIndexWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a search library.
     *  *
     * @param QuerySearchLibRequest $request QuerySearchLibRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return QuerySearchLibResponse QuerySearchLibResponse
     */
    public function querySearchLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->searchLibName)) {
            $query['SearchLibName'] = $request->searchLibName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return QuerySearchLibResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QuerySearchLibResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a search library.
     *  *
     * @param QuerySearchLibRequest $request QuerySearchLibRequest
     *
     * @return QuerySearchLibResponse QuerySearchLibResponse
     */
    public function querySearchLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySearchLibWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a smart tagging job.
     *  *
     * @param QuerySmarttagJobRequest $request QuerySmarttagJobRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return QuerySmarttagJobResponse QuerySmarttagJobResponse
     */
    public function querySmarttagJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return QuerySmarttagJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QuerySmarttagJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about a smart tagging job.
     *  *
     * @param QuerySmarttagJobRequest $request QuerySmarttagJobRequest
     *
     * @return QuerySmarttagJobResponse QuerySmarttagJobResponse
     */
    public function querySmarttagJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->querySmarttagJobWithOptions($request, $runtime);
    }

    /**
     * @summary 查询视频溯源水印ab流任务
     *  *
     * @param QueryTraceAbJobListRequest $request QueryTraceAbJobListRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryTraceAbJobListResponse QueryTraceAbJobListResponse
     */
    public function queryTraceAbJobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->createTimeEnd)) {
            $query['CreateTimeEnd'] = $request->createTimeEnd;
        }
        if (!Utils::isUnset($request->createTimeStart)) {
            $query['CreateTimeStart'] = $request->createTimeStart;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->traceMediaId)) {
            $query['TraceMediaId'] = $request->traceMediaId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return QueryTraceAbJobListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryTraceAbJobListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询视频溯源水印ab流任务
     *  *
     * @param QueryTraceAbJobListRequest $request QueryTraceAbJobListRequest
     *
     * @return QueryTraceAbJobListResponse QueryTraceAbJobListResponse
     */
    public function queryTraceAbJobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTraceAbJobListWithOptions($request, $runtime);
    }

    /**
     * @summary 查询溯源水印提取任务
     *  *
     * @param QueryTraceExtractJobRequest $request QueryTraceExtractJobRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryTraceExtractJobResponse QueryTraceExtractJobResponse
     */
    public function queryTraceExtractJobWithOptions($request, $runtime)
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return QueryTraceExtractJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryTraceExtractJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询溯源水印提取任务
     *  *
     * @param QueryTraceExtractJobRequest $request QueryTraceExtractJobRequest
     *
     * @return QueryTraceExtractJobResponse QueryTraceExtractJobResponse
     */
    public function queryTraceExtractJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTraceExtractJobWithOptions($request, $runtime);
    }

    /**
     * @summary 查询视频溯源水印m3u8任务
     *  *
     * @param QueryTraceM3u8JobListRequest $request QueryTraceM3u8JobListRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryTraceM3u8JobListResponse QueryTraceM3u8JobListResponse
     */
    public function queryTraceM3u8JobListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->createTimeEnd)) {
            $query['CreateTimeEnd'] = $request->createTimeEnd;
        }
        if (!Utils::isUnset($request->createTimeStart)) {
            $query['CreateTimeStart'] = $request->createTimeStart;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return QueryTraceM3u8JobListResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return QueryTraceM3u8JobListResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 查询视频溯源水印m3u8任务
     *  *
     * @param QueryTraceM3u8JobListRequest $request QueryTraceM3u8JobListRequest
     *
     * @return QueryTraceM3u8JobListResponse QueryTraceM3u8JobListResponse
     */
    public function queryTraceM3u8JobList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryTraceM3u8JobListWithOptions($request, $runtime);
    }

    /**
     * @summary Obtain a new upload credential for a media asset after its upload credential expires.
     *  *
     * @description You can also call this operation to overwrite media files. After you obtain the upload URL of a media file, you can upload the media file again without changing the audio or video ID.
     *  *
     * @param RefreshUploadMediaRequest $request RefreshUploadMediaRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return RefreshUploadMediaResponse RefreshUploadMediaResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RefreshUploadMediaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RefreshUploadMediaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Obtain a new upload credential for a media asset after its upload credential expires.
     *  *
     * @description You can also call this operation to overwrite media files. After you obtain the upload URL of a media file, you can upload the media file again without changing the audio or video ID.
     *  *
     * @param RefreshUploadMediaRequest $request RefreshUploadMediaRequest
     *
     * @return RefreshUploadMediaResponse RefreshUploadMediaResponse
     */
    public function refreshUploadMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshUploadMediaWithOptions($request, $runtime);
    }

    /**
     * @summary Registers a media asset with Intelligent Media Services (IMS). IMS assigns an ID to the media asset. This operation asynchronously accesses the media asset service in which the media asset is stored to obtain the file information of the media asset based on the input URL. You can also specify basic information, such as the title, tags, and description, for the media asset. This operation returns the ID of the media asset. You can call the GetMediaInfo operation based on the ID to query the details of the media asset. You can set InputURL only to the URL of an Object Storage Service (OSS) file or an ApsaraVideo VOD media asset.
     *  *
     * @description Registering a media asset is an asynchronous job that takes 2 to 3 seconds. When the operation returns the ID of the media asset, the registration may have not be completed. If you call the GetMediaInfo operation at this time, you may fail to obtain the information about the media asset.
     *  *
     * @param RegisterMediaInfoRequest $request RegisterMediaInfoRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return RegisterMediaInfoResponse RegisterMediaInfoResponse
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
        if (!Utils::isUnset($request->referenceId)) {
            $query['ReferenceId'] = $request->referenceId;
        }
        if (!Utils::isUnset($request->registerConfig)) {
            $query['RegisterConfig'] = $request->registerConfig;
        }
        if (!Utils::isUnset($request->smartTagTemplateId)) {
            $query['SmartTagTemplateId'] = $request->smartTagTemplateId;
        }
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        if (!Utils::isUnset($request->workflowId)) {
            $query['WorkflowId'] = $request->workflowId;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RegisterMediaInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RegisterMediaInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Registers a media asset with Intelligent Media Services (IMS). IMS assigns an ID to the media asset. This operation asynchronously accesses the media asset service in which the media asset is stored to obtain the file information of the media asset based on the input URL. You can also specify basic information, such as the title, tags, and description, for the media asset. This operation returns the ID of the media asset. You can call the GetMediaInfo operation based on the ID to query the details of the media asset. You can set InputURL only to the URL of an Object Storage Service (OSS) file or an ApsaraVideo VOD media asset.
     *  *
     * @description Registering a media asset is an asynchronous job that takes 2 to 3 seconds. When the operation returns the ID of the media asset, the registration may have not be completed. If you call the GetMediaInfo operation at this time, you may fail to obtain the information about the media asset.
     *  *
     * @param RegisterMediaInfoRequest $request RegisterMediaInfoRequest
     *
     * @return RegisterMediaInfoResponse RegisterMediaInfoResponse
     */
    public function registerMediaInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerMediaInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Registers a media stream.
     *  *
     * @description You can call this operation to register a media stream file in an Object Storage Service (OSS) bucket with Intelligent Media Services (IMS) and associate the media stream with the specified media asset ID.
     *  *
     * @param RegisterMediaStreamRequest $request RegisterMediaStreamRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return RegisterMediaStreamResponse RegisterMediaStreamResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return RegisterMediaStreamResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return RegisterMediaStreamResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Registers a media stream.
     *  *
     * @description You can call this operation to register a media stream file in an Object Storage Service (OSS) bucket with Intelligent Media Services (IMS) and associate the media stream with the specified media asset ID.
     *  *
     * @param RegisterMediaStreamRequest $request RegisterMediaStreamRequest
     *
     * @return RegisterMediaStreamResponse RegisterMediaStreamResponse
     */
    public function registerMediaStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->registerMediaStreamWithOptions($request, $runtime);
    }

    /**
     * @summary Queries online editing projects by creation time and status.
     *  *
     * @param SearchEditingProjectRequest $request SearchEditingProjectRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchEditingProjectResponse SearchEditingProjectResponse
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
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SearchEditingProjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchEditingProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries online editing projects by creation time and status.
     *  *
     * @param SearchEditingProjectRequest $request SearchEditingProjectRequest
     *
     * @return SearchEditingProjectResponse SearchEditingProjectResponse
     */
    public function searchEditingProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchEditingProjectWithOptions($request, $runtime);
    }

    /**
     * @summary Re-analyzes the search index jobs of media assets. You can re-run the search index jobs of up to 20 media assets in each request.
     *  *
     * @param SearchIndexJobRerunRequest $request SearchIndexJobRerunRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchIndexJobRerunResponse SearchIndexJobRerunResponse
     */
    public function searchIndexJobRerunWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaIds)) {
            $query['MediaIds'] = $request->mediaIds;
        }
        if (!Utils::isUnset($request->searchLibName)) {
            $query['SearchLibName'] = $request->searchLibName;
        }
        if (!Utils::isUnset($request->task)) {
            $query['Task'] = $request->task;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SearchIndexJobRerunResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchIndexJobRerunResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Re-analyzes the search index jobs of media assets. You can re-run the search index jobs of up to 20 media assets in each request.
     *  *
     * @param SearchIndexJobRerunRequest $request SearchIndexJobRerunRequest
     *
     * @return SearchIndexJobRerunResponse SearchIndexJobRerunResponse
     */
    public function searchIndexJobRerun($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchIndexJobRerunWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about media assets based on the request parameters.
     *  *
     * @description If you have questions about how to use the media asset search feature in Intelligent Media Services (IMS), contact technical support in the DingTalk group (ID 30415005038).
     *  *
     * @param SearchMediaRequest $request SearchMediaRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchMediaResponse SearchMediaResponse
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
        if (!Utils::isUnset($request->scrollToken)) {
            $query['ScrollToken'] = $request->scrollToken;
        }
        if (!Utils::isUnset($request->searchLibName)) {
            $query['SearchLibName'] = $request->searchLibName;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SearchMediaResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchMediaResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries information about media assets based on the request parameters.
     *  *
     * @description If you have questions about how to use the media asset search feature in Intelligent Media Services (IMS), contact technical support in the DingTalk group (ID 30415005038).
     *  *
     * @param SearchMediaRequest $request SearchMediaRequest
     *
     * @return SearchMediaResponse SearchMediaResponse
     */
    public function searchMedia($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchMediaWithOptions($request, $runtime);
    }

    /**
     * @summary Queries media assets based on character names, subtitles, or AI categories.
     *  *
     * @description You can call this operation to query media assets or media asset clips based on character names, subtitles, or AI categories.
     *  *
     * @param SearchMediaByAILabelRequest $request SearchMediaByAILabelRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchMediaByAILabelResponse SearchMediaByAILabelResponse
     */
    public function searchMediaByAILabelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->matchingMode)) {
            $query['MatchingMode'] = $request->matchingMode;
        }
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->mediaType)) {
            $query['MediaType'] = $request->mediaType;
        }
        if (!Utils::isUnset($request->multimodalSearchType)) {
            $query['MultimodalSearchType'] = $request->multimodalSearchType;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchLibName)) {
            $query['SearchLibName'] = $request->searchLibName;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->specificSearch)) {
            $query['SpecificSearch'] = $request->specificSearch;
        }
        if (!Utils::isUnset($request->text)) {
            $query['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SearchMediaByAILabelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchMediaByAILabelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries media assets based on character names, subtitles, or AI categories.
     *  *
     * @description You can call this operation to query media assets or media asset clips based on character names, subtitles, or AI categories.
     *  *
     * @param SearchMediaByAILabelRequest $request SearchMediaByAILabelRequest
     *
     * @return SearchMediaByAILabelResponse SearchMediaByAILabelResponse
     */
    public function searchMediaByAILabel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchMediaByAILabelWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about media assets that are related to a specific face.
     *  *
     * @description If you have questions about how to use the media asset search feature in Intelligent Media Services (IMS), contact technical support in the DingTalk group (ID 30415005038).
     *  *
     * @param SearchMediaByFaceRequest $request SearchMediaByFaceRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchMediaByFaceResponse SearchMediaByFaceResponse
     */
    public function searchMediaByFaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->entityId)) {
            $query['EntityId'] = $request->entityId;
        }
        if (!Utils::isUnset($request->faceSearchToken)) {
            $query['FaceSearchToken'] = $request->faceSearchToken;
        }
        if (!Utils::isUnset($request->mediaType)) {
            $query['MediaType'] = $request->mediaType;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->personImageUrl)) {
            $query['PersonImageUrl'] = $request->personImageUrl;
        }
        if (!Utils::isUnset($request->searchLibName)) {
            $query['SearchLibName'] = $request->searchLibName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SearchMediaByFaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchMediaByFaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about media assets that are related to a specific face.
     *  *
     * @description If you have questions about how to use the media asset search feature in Intelligent Media Services (IMS), contact technical support in the DingTalk group (ID 30415005038).
     *  *
     * @param SearchMediaByFaceRequest $request SearchMediaByFaceRequest
     *
     * @return SearchMediaByFaceResponse SearchMediaByFaceResponse
     */
    public function searchMediaByFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchMediaByFaceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries media assets by using the hybrid search feature. This operation allows you to search for media assets by using natural language based on intelligent tag text search and the search capabilities of large language models (LLMs). This implements multimodal retrieval.
     *  *
     * @param SearchMediaByHybridRequest $request SearchMediaByHybridRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchMediaByHybridResponse SearchMediaByHybridResponse
     */
    public function searchMediaByHybridWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->mediaType)) {
            $query['MediaType'] = $request->mediaType;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchLibName)) {
            $query['SearchLibName'] = $request->searchLibName;
        }
        if (!Utils::isUnset($request->text)) {
            $query['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SearchMediaByHybridResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchMediaByHybridResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries media assets by using the hybrid search feature. This operation allows you to search for media assets by using natural language based on intelligent tag text search and the search capabilities of large language models (LLMs). This implements multimodal retrieval.
     *  *
     * @param SearchMediaByHybridRequest $request SearchMediaByHybridRequest
     *
     * @return SearchMediaByHybridResponse SearchMediaByHybridResponse
     */
    public function searchMediaByHybrid($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchMediaByHybridWithOptions($request, $runtime);
    }

    /**
     * @summary Queries media assets by using the large visual model. You can use natural language for the query.
     *  *
     * @description If you have questions about how to use the media asset search feature in Intelligent Media Services (IMS), contact technical support in the DingTalk group (ID 30415005038).
     *  *
     * @param SearchMediaByMultimodalRequest $request SearchMediaByMultimodalRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchMediaByMultimodalResponse SearchMediaByMultimodalResponse
     */
    public function searchMediaByMultimodalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaType)) {
            $query['MediaType'] = $request->mediaType;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchLibName)) {
            $query['SearchLibName'] = $request->searchLibName;
        }
        if (!Utils::isUnset($request->text)) {
            $query['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SearchMediaByMultimodalResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchMediaByMultimodalResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries media assets by using the large visual model. You can use natural language for the query.
     *  *
     * @description If you have questions about how to use the media asset search feature in Intelligent Media Services (IMS), contact technical support in the DingTalk group (ID 30415005038).
     *  *
     * @param SearchMediaByMultimodalRequest $request SearchMediaByMultimodalRequest
     *
     * @return SearchMediaByMultimodalResponse SearchMediaByMultimodalResponse
     */
    public function searchMediaByMultimodal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchMediaByMultimodalWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about media asset clips that are related to a specific face based on the response to the SearchMediaByFace operation.
     *  *
     * @description If you have questions about how to use the media asset search feature in Intelligent Media Services (IMS), contact technical support in the DingTalk group (ID 30415005038).
     *  *
     * @param SearchMediaClipByFaceRequest $request SearchMediaClipByFaceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchMediaClipByFaceResponse SearchMediaClipByFaceResponse
     */
    public function searchMediaClipByFaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->entityId)) {
            $query['EntityId'] = $request->entityId;
        }
        if (!Utils::isUnset($request->faceSearchToken)) {
            $query['FaceSearchToken'] = $request->faceSearchToken;
        }
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchLibName)) {
            $query['SearchLibName'] = $request->searchLibName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SearchMediaClipByFaceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchMediaClipByFaceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about media asset clips that are related to a specific face based on the response to the SearchMediaByFace operation.
     *  *
     * @description If you have questions about how to use the media asset search feature in Intelligent Media Services (IMS), contact technical support in the DingTalk group (ID 30415005038).
     *  *
     * @param SearchMediaClipByFaceRequest $request SearchMediaClipByFaceRequest
     *
     * @return SearchMediaClipByFaceResponse SearchMediaClipByFaceResponse
     */
    public function searchMediaClipByFace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchMediaClipByFaceWithOptions($request, $runtime);
    }

    /**
     * @summary 搜索公共媒资信息
     *  *
     * @param SearchPublicMediaInfoRequest $request SearchPublicMediaInfoRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SearchPublicMediaInfoResponse SearchPublicMediaInfoResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SearchPublicMediaInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SearchPublicMediaInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 搜索公共媒资信息
     *  *
     * @param SearchPublicMediaInfoRequest $request SearchPublicMediaInfoRequest
     *
     * @return SearchPublicMediaInfoResponse SearchPublicMediaInfoResponse
     */
    public function searchPublicMediaInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->searchPublicMediaInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Sends a DataChannel message to an AI agent.
     *  *
     * @param SendAIAgentDataChannelMessageRequest $request SendAIAgentDataChannelMessageRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return SendAIAgentDataChannelMessageResponse SendAIAgentDataChannelMessageResponse
     */
    public function sendAIAgentDataChannelMessageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->message)) {
            $query['Message'] = $request->message;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SendAIAgentDataChannelMessageResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SendAIAgentDataChannelMessageResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Sends a DataChannel message to an AI agent.
     *  *
     * @param SendAIAgentDataChannelMessageRequest $request SendAIAgentDataChannelMessageRequest
     *
     * @return SendAIAgentDataChannelMessageResponse SendAIAgentDataChannelMessageResponse
     */
    public function sendAIAgentDataChannelMessage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendAIAgentDataChannelMessageWithOptions($request, $runtime);
    }

    /**
     * @summary Instructs an AI agent to immediately broadcast a text message and supports interruption settings.
     *  *
     * @description You can call this operation to instruct an AI agent to broadcast the content that you specify. You can determine whether this broadcast can immediately interrupt the ongoing speech. The interruption is allowed by default.
     * **Note**
     * *   Make sure that the `InstanceId` is valid and corresponds to an existing AI agent.
     * *   The content of `Text` must comply with the specifications and does not contain sensitive or inappropriate information.
     * *   If you do not want the new broadcast to interrupt the ongoing speech, you must set `EnableInterrupt` to `false`.
     *  *
     * @param SendAIAgentSpeechRequest $request SendAIAgentSpeechRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return SendAIAgentSpeechResponse SendAIAgentSpeechResponse
     */
    public function sendAIAgentSpeechWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->enableInterrupt)) {
            $query['EnableInterrupt'] = $request->enableInterrupt;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->text)) {
            $query['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SendAIAgentSpeechResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SendAIAgentSpeechResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Instructs an AI agent to immediately broadcast a text message and supports interruption settings.
     *  *
     * @description You can call this operation to instruct an AI agent to broadcast the content that you specify. You can determine whether this broadcast can immediately interrupt the ongoing speech. The interruption is allowed by default.
     * **Note**
     * *   Make sure that the `InstanceId` is valid and corresponds to an existing AI agent.
     * *   The content of `Text` must comply with the specifications and does not contain sensitive or inappropriate information.
     * *   If you do not want the new broadcast to interrupt the ongoing speech, you must set `EnableInterrupt` to `false`.
     *  *
     * @param SendAIAgentSpeechRequest $request SendAIAgentSpeechRequest
     *
     * @return SendAIAgentSpeechResponse SendAIAgentSpeechResponse
     */
    public function sendAIAgentSpeech($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendAIAgentSpeechWithOptions($request, $runtime);
    }

    /**
     * @summary 传入消息作为LLM输入。
     *  *
     * @param SendAIAgentTextRequest $request SendAIAgentTextRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return SendAIAgentTextResponse SendAIAgentTextResponse
     */
    public function sendAIAgentTextWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->text)) {
            $query['Text'] = $request->text;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SendAIAgentTextResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SendAIAgentTextResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 传入消息作为LLM输入。
     *  *
     * @param SendAIAgentTextRequest $request SendAIAgentTextRequest
     *
     * @return SendAIAgentTextResponse SendAIAgentTextResponse
     */
    public function sendAIAgentText($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendAIAgentTextWithOptions($request, $runtime);
    }

    /**
     * @summary Sends a command to process a live stream snapshot job.
     *  *
     * @param SendLiveSnapshotJobCommandRequest $request SendLiveSnapshotJobCommandRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return SendLiveSnapshotJobCommandResponse SendLiveSnapshotJobCommandResponse
     */
    public function sendLiveSnapshotJobCommandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->command)) {
            $body['Command'] = $request->command;
        }
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SendLiveSnapshotJobCommandResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SendLiveSnapshotJobCommandResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Sends a command to process a live stream snapshot job.
     *  *
     * @param SendLiveSnapshotJobCommandRequest $request SendLiveSnapshotJobCommandRequest
     *
     * @return SendLiveSnapshotJobCommandResponse SendLiveSnapshotJobCommandResponse
     */
    public function sendLiveSnapshotJobCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendLiveSnapshotJobCommandWithOptions($request, $runtime);
    }

    /**
     * @summary Sends a command to process a live stream transcoding job.
     *  *
     * @param SendLiveTranscodeJobCommandRequest $request SendLiveTranscodeJobCommandRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return SendLiveTranscodeJobCommandResponse SendLiveTranscodeJobCommandResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SendLiveTranscodeJobCommandResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SendLiveTranscodeJobCommandResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Sends a command to process a live stream transcoding job.
     *  *
     * @param SendLiveTranscodeJobCommandRequest $request SendLiveTranscodeJobCommandRequest
     *
     * @return SendLiveTranscodeJobCommandResponse SendLiveTranscodeJobCommandResponse
     */
    public function sendLiveTranscodeJobCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendLiveTranscodeJobCommandWithOptions($request, $runtime);
    }

    /**
     * @summary 向IM客户端发送消息。
     *  *
     * @param SendMessageChatTextRequest $request SendMessageChatTextRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return SendMessageChatTextResponse SendMessageChatTextResponse
     */
    public function sendMessageChatTextWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->AIAgentId)) {
            $query['AIAgentId'] = $request->AIAgentId;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->needArchiving)) {
            $query['NeedArchiving'] = $request->needArchiving;
        }
        if (!Utils::isUnset($request->receiverId)) {
            $query['ReceiverId'] = $request->receiverId;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
        }
        if (!Utils::isUnset($request->text)) {
            $query['Text'] = $request->text;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendMessageChatText',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SendMessageChatTextResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SendMessageChatTextResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 向IM客户端发送消息。
     *  *
     * @param SendMessageChatTextRequest $request SendMessageChatTextRequest
     *
     * @return SendMessageChatTextResponse SendMessageChatTextResponse
     */
    public function sendMessageChatText($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendMessageChatTextWithOptions($request, $runtime);
    }

    /**
     * @summary 设置内容分析搜索配置
     *  *
     * @param SetContentAnalyzeConfigRequest $request SetContentAnalyzeConfigRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return SetContentAnalyzeConfigResponse SetContentAnalyzeConfigResponse
     */
    public function setContentAnalyzeConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->auto)) {
            $query['Auto'] = $request->auto;
        }
        if (!Utils::isUnset($request->saveType)) {
            $query['SaveType'] = $request->saveType;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SetContentAnalyzeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetContentAnalyzeConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 设置内容分析搜索配置
     *  *
     * @param SetContentAnalyzeConfigRequest $request SetContentAnalyzeConfigRequest
     *
     * @return SetContentAnalyzeConfigResponse SetContentAnalyzeConfigResponse
     */
    public function setContentAnalyzeConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setContentAnalyzeConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Sets a custom template as the default template.
     *  *
     * @param SetDefaultCustomTemplateRequest $request SetDefaultCustomTemplateRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDefaultCustomTemplateResponse SetDefaultCustomTemplateResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SetDefaultCustomTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetDefaultCustomTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Sets a custom template as the default template.
     *  *
     * @param SetDefaultCustomTemplateRequest $request SetDefaultCustomTemplateRequest
     *
     * @return SetDefaultCustomTemplateResponse SetDefaultCustomTemplateResponse
     */
    public function setDefaultCustomTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDefaultCustomTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 设置默认存储路径
     *  *
     * @param SetDefaultStorageLocationRequest $request SetDefaultStorageLocationRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDefaultStorageLocationResponse SetDefaultStorageLocationResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SetDefaultStorageLocationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetDefaultStorageLocationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 设置默认存储路径
     *  *
     * @param SetDefaultStorageLocationRequest $request SetDefaultStorageLocationRequest
     *
     * @return SetDefaultStorageLocationResponse SetDefaultStorageLocationResponse
     */
    public function setDefaultStorageLocation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDefaultStorageLocationWithOptions($request, $runtime);
    }

    /**
     * @summary Configures a callback method for one or more events.
     *  *
     * @param SetEventCallbackRequest $request SetEventCallbackRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return SetEventCallbackResponse SetEventCallbackResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SetEventCallbackResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetEventCallbackResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Configures a callback method for one or more events.
     *  *
     * @param SetEventCallbackRequest $request SetEventCallbackRequest
     *
     * @return SetEventCallbackResponse SetEventCallbackResponse
     */
    public function setEventCallback($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setEventCallbackWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables event notifications for an AI agent and configures the callback URL and event types.
     *  *
     * @description ## [](#)Request description
     * You can call this operation to configure event notifications for an AI agent. You can configure `EnableNotify` to enable or disable event notifications, configure `CallbackUrl` to specify a callback URL, and configure `EventTypes` to specify event types. You can also configure `Token` to specify an authentication token for enhanced security. The system returns a unique `RequestId` for subsequent tracing after a successful request.
     *  *
     * @param SetNotifyConfigRequest $request SetNotifyConfigRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return SetNotifyConfigResponse SetNotifyConfigResponse
     */
    public function setNotifyConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->AIAgentId)) {
            $query['AIAgentId'] = $request->AIAgentId;
        }
        if (!Utils::isUnset($request->callbackUrl)) {
            $query['CallbackUrl'] = $request->callbackUrl;
        }
        if (!Utils::isUnset($request->enableNotify)) {
            $query['EnableNotify'] = $request->enableNotify;
        }
        if (!Utils::isUnset($request->eventTypes)) {
            $query['EventTypes'] = $request->eventTypes;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SetNotifyConfigResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SetNotifyConfigResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Enables or disables event notifications for an AI agent and configures the callback URL and event types.
     *  *
     * @description ## [](#)Request description
     * You can call this operation to configure event notifications for an AI agent. You can configure `EnableNotify` to enable or disable event notifications, configure `CallbackUrl` to specify a callback URL, and configure `EventTypes` to specify event types. You can also configure `Token` to specify an authentication token for enhanced security. The system returns a unique `RequestId` for subsequent tracing after a successful request.
     *  *
     * @param SetNotifyConfigRequest $request SetNotifyConfigRequest
     *
     * @return SetNotifyConfigResponse SetNotifyConfigResponse
     */
    public function setNotifyConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setNotifyConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Starts an AI agent that is configured in the Intelligent Media Services (IMS) console.
     *  *
     * @description You can call this operation to start an AI agent instance for a conversation. ````````When the AI agent is started, the system returns a unique `InstanceId` for subsequent tracking and operations.
     *  *
     * @param StartAIAgentInstanceRequest $tmpReq  StartAIAgentInstanceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return StartAIAgentInstanceResponse StartAIAgentInstanceResponse
     */
    public function startAIAgentInstanceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new StartAIAgentInstanceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->chatSyncConfig)) {
            $request->chatSyncConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->chatSyncConfig, 'ChatSyncConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->runtimeConfig)) {
            $request->runtimeConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->runtimeConfig, 'RuntimeConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->templateConfig)) {
            $request->templateConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->templateConfig, 'TemplateConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->AIAgentId)) {
            $query['AIAgentId'] = $request->AIAgentId;
        }
        if (!Utils::isUnset($request->chatSyncConfigShrink)) {
            $query['ChatSyncConfig'] = $request->chatSyncConfigShrink;
        }
        if (!Utils::isUnset($request->runtimeConfigShrink)) {
            $query['RuntimeConfig'] = $request->runtimeConfigShrink;
        }
        if (!Utils::isUnset($request->sessionId)) {
            $query['SessionId'] = $request->sessionId;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return StartAIAgentInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartAIAgentInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Starts an AI agent that is configured in the Intelligent Media Services (IMS) console.
     *  *
     * @description You can call this operation to start an AI agent instance for a conversation. ````````When the AI agent is started, the system returns a unique `InstanceId` for subsequent tracking and operations.
     *  *
     * @param StartAIAgentInstanceRequest $request StartAIAgentInstanceRequest
     *
     * @return StartAIAgentInstanceResponse StartAIAgentInstanceResponse
     */
    public function startAIAgentInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startAIAgentInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Starts a channel.
     *  *
     * @param StartChannelRequest $request StartChannelRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return StartChannelResponse StartChannelResponse
     */
    public function startChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->channelName)) {
            $query['ChannelName'] = $request->channelName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return StartChannelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartChannelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Starts a channel.
     *  *
     * @param StartChannelRequest $request StartChannelRequest
     *
     * @return StartChannelResponse StartChannelResponse
     */
    public function startChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startChannelWithOptions($request, $runtime);
    }

    /**
     * @summary Starts a MediaLive channel.
     *  *
     * @description *
     * *   You can call this operation only when the channel is idle. You cannot start a channel repeatedly.
     * ## [](#qps-)QPS limit
     * This operation can be called up to 50 times per second for each Alibaba Cloud account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *  *
     * @param StartMediaLiveChannelRequest $request StartMediaLiveChannelRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return StartMediaLiveChannelResponse StartMediaLiveChannelResponse
     */
    public function startMediaLiveChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartMediaLiveChannel',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return StartMediaLiveChannelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartMediaLiveChannelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Starts a MediaLive channel.
     *  *
     * @description *
     * *   You can call this operation only when the channel is idle. You cannot start a channel repeatedly.
     * ## [](#qps-)QPS limit
     * This operation can be called up to 50 times per second for each Alibaba Cloud account. Requests that exceed this limit are dropped and you will experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *  *
     * @param StartMediaLiveChannelRequest $request StartMediaLiveChannelRequest
     *
     * @return StartMediaLiveChannelResponse StartMediaLiveChannelResponse
     */
    public function startMediaLiveChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startMediaLiveChannelWithOptions($request, $runtime);
    }

    /**
     * @summary 开启一个机器人实例
     *  *
     * @param StartRtcRobotInstanceRequest $tmpReq  StartRtcRobotInstanceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return StartRtcRobotInstanceResponse StartRtcRobotInstanceResponse
     */
    public function startRtcRobotInstanceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new StartRtcRobotInstanceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->config)) {
            $request->configShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->config, 'Config', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->authToken)) {
            $query['AuthToken'] = $request->authToken;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->configShrink)) {
            $query['Config'] = $request->configShrink;
        }
        if (!Utils::isUnset($request->robotId)) {
            $query['RobotId'] = $request->robotId;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return StartRtcRobotInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartRtcRobotInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 开启一个机器人实例
     *  *
     * @param StartRtcRobotInstanceRequest $request StartRtcRobotInstanceRequest
     *
     * @return StartRtcRobotInstanceResponse StartRtcRobotInstanceResponse
     */
    public function startRtcRobotInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startRtcRobotInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Submits a workflow task. You can submit a workflow task to implement automated media processing based on a workflow template.
     *  *
     * @description *   Only media assets from Intelligent Media Services (IMS) or ApsaraVideo VOD can be used as the input of a workflow.
     * *   When you submit a workflow task, you must specify a workflow template. You can create a workflow template in the [IMS console](https://ims.console.aliyun.com/settings/workflow/list) or use a preset workflow template.
     *  *
     * @param StartWorkflowRequest $request StartWorkflowRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return StartWorkflowResponse StartWorkflowResponse
     */
    public function startWorkflowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskInput)) {
            $query['TaskInput'] = $request->taskInput;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        if (!Utils::isUnset($request->workflowId)) {
            $query['WorkflowId'] = $request->workflowId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return StartWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StartWorkflowResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Submits a workflow task. You can submit a workflow task to implement automated media processing based on a workflow template.
     *  *
     * @description *   Only media assets from Intelligent Media Services (IMS) or ApsaraVideo VOD can be used as the input of a workflow.
     * *   When you submit a workflow task, you must specify a workflow template. You can create a workflow template in the [IMS console](https://ims.console.aliyun.com/settings/workflow/list) or use a preset workflow template.
     *  *
     * @param StartWorkflowRequest $request StartWorkflowRequest
     *
     * @return StartWorkflowResponse StartWorkflowResponse
     */
    public function startWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startWorkflowWithOptions($request, $runtime);
    }

    /**
     * @summary Stops an AI agent instance.
     *  *
     * @description *   When you no longer need an AI agent to participate in a conversation or task, you can call this operation to stop the running agent and release relevant resources.****
     * *   You must specify the unique ID of the AI agent that you want to stop by using InstanceId.****
     *  *
     * @param StopAIAgentInstanceRequest $request StopAIAgentInstanceRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return StopAIAgentInstanceResponse StopAIAgentInstanceResponse
     */
    public function stopAIAgentInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return StopAIAgentInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopAIAgentInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Stops an AI agent instance.
     *  *
     * @description *   When you no longer need an AI agent to participate in a conversation or task, you can call this operation to stop the running agent and release relevant resources.****
     * *   You must specify the unique ID of the AI agent that you want to stop by using InstanceId.****
     *  *
     * @param StopAIAgentInstanceRequest $request StopAIAgentInstanceRequest
     *
     * @return StopAIAgentInstanceResponse StopAIAgentInstanceResponse
     */
    public function stopAIAgentInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopAIAgentInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Stops a MediaWeaver channel.
     *  *
     * @param StopChannelRequest $request StopChannelRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return StopChannelResponse StopChannelResponse
     */
    public function stopChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->channelName)) {
            $query['ChannelName'] = $request->channelName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return StopChannelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopChannelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Stops a MediaWeaver channel.
     *  *
     * @param StopChannelRequest $request StopChannelRequest
     *
     * @return StopChannelResponse StopChannelResponse
     */
    public function stopChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopChannelWithOptions($request, $runtime);
    }

    /**
     * @summary Stops a MediaLive channel.
     *  *
     * @description *
     * *
     * ## [](#qps-)QPS limit
     * This operation can be called up to 50 times per second for each Alibaba Cloud account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *  *
     * @param StopMediaLiveChannelRequest $request StopMediaLiveChannelRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return StopMediaLiveChannelResponse StopMediaLiveChannelResponse
     */
    public function stopMediaLiveChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StopMediaLiveChannel',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return StopMediaLiveChannelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopMediaLiveChannelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Stops a MediaLive channel.
     *  *
     * @description *
     * *
     * ## [](#qps-)QPS limit
     * This operation can be called up to 50 times per second for each Alibaba Cloud account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *  *
     * @param StopMediaLiveChannelRequest $request StopMediaLiveChannelRequest
     *
     * @return StopMediaLiveChannelResponse StopMediaLiveChannelResponse
     */
    public function stopMediaLiveChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopMediaLiveChannelWithOptions($request, $runtime);
    }

    /**
     * @summary 停止一个机器人实例
     *  *
     * @param StopRtcRobotInstanceRequest $request StopRtcRobotInstanceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return StopRtcRobotInstanceResponse StopRtcRobotInstanceResponse
     */
    public function stopRtcRobotInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return StopRtcRobotInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return StopRtcRobotInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 停止一个机器人实例
     *  *
     * @param StopRtcRobotInstanceRequest $request StopRtcRobotInstanceRequest
     *
     * @return StopRtcRobotInstanceResponse StopRtcRobotInstanceResponse
     */
    public function stopRtcRobotInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopRtcRobotInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Submits an automatic speech recognition (ASR) job to extract the start and end time and the corresponding text information of a speech in a video.
     *  *
     * @param SubmitASRJobRequest $request SubmitASRJobRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitASRJobResponse SubmitASRJobResponse
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
        if (!Utils::isUnset($request->editingConfig)) {
            $query['EditingConfig'] = $request->editingConfig;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitASRJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitASRJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Submits an automatic speech recognition (ASR) job to extract the start and end time and the corresponding text information of a speech in a video.
     *  *
     * @param SubmitASRJobRequest $request SubmitASRJobRequest
     *
     * @return SubmitASRJobResponse SubmitASRJobResponse
     */
    public function submitASRJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitASRJobWithOptions($request, $runtime);
    }

    /**
     * @summary Submits an audio production job that converts text into an audio file.
     *  *
     * @param SubmitAudioProduceJobRequest $request SubmitAudioProduceJobRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitAudioProduceJobResponse SubmitAudioProduceJobResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitAudioProduceJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitAudioProduceJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Submits an audio production job that converts text into an audio file.
     *  *
     * @param SubmitAudioProduceJobRequest $request SubmitAudioProduceJobRequest
     *
     * @return SubmitAudioProduceJobResponse SubmitAudioProduceJobResponse
     */
    public function submitAudioProduceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAudioProduceJobWithOptions($request, $runtime);
    }

    /**
     * @summary Submits a digital human training job. You can call this operation to submit a job the first time or submit a job again with updated parameters if the training failed.
     *  *
     * @param SubmitAvatarTrainingJobRequest $request SubmitAvatarTrainingJobRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitAvatarTrainingJobResponse SubmitAvatarTrainingJobResponse
     */
    public function submitAvatarTrainingJobWithOptions($request, $runtime)
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitAvatarTrainingJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitAvatarTrainingJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Submits a digital human training job. You can call this operation to submit a job the first time or submit a job again with updated parameters if the training failed.
     *  *
     * @param SubmitAvatarTrainingJobRequest $request SubmitAvatarTrainingJobRequest
     *
     * @return SubmitAvatarTrainingJobResponse SubmitAvatarTrainingJobResponse
     */
    public function submitAvatarTrainingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAvatarTrainingJobWithOptions($request, $runtime);
    }

    /**
     * @summary Submits a video rendering job for a digitized virtual human based on text or an audio file of a human voice.
     *  *
     * @param SubmitAvatarVideoJobRequest $request SubmitAvatarVideoJobRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitAvatarVideoJobResponse SubmitAvatarVideoJobResponse
     */
    public function submitAvatarVideoJobWithOptions($request, $runtime)
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitAvatarVideoJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitAvatarVideoJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Submits a video rendering job for a digitized virtual human based on text or an audio file of a human voice.
     *  *
     * @param SubmitAvatarVideoJobRequest $request SubmitAvatarVideoJobRequest
     *
     * @return SubmitAvatarVideoJobResponse SubmitAvatarVideoJobResponse
     */
    public function submitAvatarVideoJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitAvatarVideoJobWithOptions($request, $runtime);
    }

    /**
     * @summary Submits a quick video production job that intelligently edits multiple video, audio, and image assets to generate multiple videos at a time.
     *  *
     * @param SubmitBatchMediaProducingJobRequest $request SubmitBatchMediaProducingJobRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitBatchMediaProducingJobResponse SubmitBatchMediaProducingJobResponse
     */
    public function submitBatchMediaProducingJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->outputConfig)) {
            $query['OutputConfig'] = $request->outputConfig;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $body = [];
        if (!Utils::isUnset($request->editingConfig)) {
            $body['EditingConfig'] = $request->editingConfig;
        }
        if (!Utils::isUnset($request->inputConfig)) {
            $body['InputConfig'] = $request->inputConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitBatchMediaProducingJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitBatchMediaProducingJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Submits a quick video production job that intelligently edits multiple video, audio, and image assets to generate multiple videos at a time.
     *  *
     * @param SubmitBatchMediaProducingJobRequest $request SubmitBatchMediaProducingJobRequest
     *
     * @return SubmitBatchMediaProducingJobResponse SubmitBatchMediaProducingJobResponse
     */
    public function submitBatchMediaProducingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitBatchMediaProducingJobWithOptions($request, $runtime);
    }

    /**
     * @summary 提交版权水印提取作业
     *  *
     * @param SubmitCopyrightExtractJobRequest $tmpReq  SubmitCopyrightExtractJobRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitCopyrightExtractJobResponse SubmitCopyrightExtractJobResponse
     */
    public function submitCopyrightExtractJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitCopyrightExtractJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->input)) {
            $request->inputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->inputShrink)) {
            $query['Input'] = $request->inputShrink;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitCopyrightExtractJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitCopyrightExtractJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 提交版权水印提取作业
     *  *
     * @param SubmitCopyrightExtractJobRequest $request SubmitCopyrightExtractJobRequest
     *
     * @return SubmitCopyrightExtractJobResponse SubmitCopyrightExtractJobResponse
     */
    public function submitCopyrightExtractJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitCopyrightExtractJobWithOptions($request, $runtime);
    }

    /**
     * @summary 提交版权水印任务
     *  *
     * @param SubmitCopyrightJobRequest $tmpReq  SubmitCopyrightJobRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitCopyrightJobResponse SubmitCopyrightJobResponse
     */
    public function submitCopyrightJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitCopyrightJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->input)) {
            $request->inputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }
        if (!Utils::isUnset($tmpReq->output)) {
            $request->outputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->output, 'Output', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->inputShrink)) {
            $query['Input'] = $request->inputShrink;
        }
        if (!Utils::isUnset($request->level)) {
            $query['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->message)) {
            $query['Message'] = $request->message;
        }
        if (!Utils::isUnset($request->outputShrink)) {
            $query['Output'] = $request->outputShrink;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->totalTime)) {
            $query['TotalTime'] = $request->totalTime;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitCopyrightJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitCopyrightJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 提交版权水印任务
     *  *
     * @param SubmitCopyrightJobRequest $request SubmitCopyrightJobRequest
     *
     * @return SubmitCopyrightJobResponse SubmitCopyrightJobResponse
     */
    public function submitCopyrightJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitCopyrightJobWithOptions($request, $runtime);
    }

    /**
     * @summary Submits a human voice cloning job. The value of VoiceId must be the one used during audio check. The system uses this ID to find the cached audio file for training. After you call this operation, the JobId is returned. The training process is asynchronous. During training, you can call the GetCustomizedVoiceJob operation to query information such as the job state.
     *  *
     * @param SubmitCustomizedVoiceJobRequest $request SubmitCustomizedVoiceJobRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitCustomizedVoiceJobResponse SubmitCustomizedVoiceJobResponse
     */
    public function submitCustomizedVoiceJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->demoAudioMediaURL)) {
            $query['DemoAudioMediaURL'] = $request->demoAudioMediaURL;
        }
        if (!Utils::isUnset($request->voiceId)) {
            $query['VoiceId'] = $request->voiceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitCustomizedVoiceJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitCustomizedVoiceJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Submits a human voice cloning job. The value of VoiceId must be the one used during audio check. The system uses this ID to find the cached audio file for training. After you call this operation, the JobId is returned. The training process is asynchronous. During training, you can call the GetCustomizedVoiceJob operation to query information such as the job state.
     *  *
     * @param SubmitCustomizedVoiceJobRequest $request SubmitCustomizedVoiceJobRequest
     *
     * @return SubmitCustomizedVoiceJobResponse SubmitCustomizedVoiceJobResponse
     */
    public function submitCustomizedVoiceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitCustomizedVoiceJobWithOptions($request, $runtime);
    }

    /**
     * @summary Submits a media fingerprint analysis job.
     *  *
     * @description *   SubmitDNAJob is an asynchronous operation. After a request is sent, the system returns a request ID and a job ID and runs the task in the background.
     * *   You can call this operation only in the China (Beijing), China (Hangzhou), and China (Shanghai) regions.
     * *   You can submit a text fingerprint analysis job only in the China (Shanghai) region.
     *  *
     * @param SubmitDNAJobRequest $tmpReq  SubmitDNAJobRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitDNAJobResponse SubmitDNAJobResponse
     */
    public function submitDNAJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitDNAJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->input)) {
            $request->inputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->DBId)) {
            $query['DBId'] = $request->DBId;
        }
        if (!Utils::isUnset($request->inputShrink)) {
            $query['Input'] = $request->inputShrink;
        }
        if (!Utils::isUnset($request->ownerAccount)) {
            $query['OwnerAccount'] = $request->ownerAccount;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pipelineId)) {
            $query['PipelineId'] = $request->pipelineId;
        }
        if (!Utils::isUnset($request->primaryKey)) {
            $query['PrimaryKey'] = $request->primaryKey;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitDNAJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitDNAJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Submits a media fingerprint analysis job.
     *  *
     * @description *   SubmitDNAJob is an asynchronous operation. After a request is sent, the system returns a request ID and a job ID and runs the task in the background.
     * *   You can call this operation only in the China (Beijing), China (Hangzhou), and China (Shanghai) regions.
     * *   You can submit a text fingerprint analysis job only in the China (Shanghai) region.
     *  *
     * @param SubmitDNAJobRequest $request SubmitDNAJobRequest
     *
     * @return SubmitDNAJobResponse SubmitDNAJobResponse
     */
    public function submitDNAJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitDNAJobWithOptions($request, $runtime);
    }

    /**
     * @summary Generates animated charts based on Excel datasheets, such as line, pie, and bar charts. You can modify the line color and font.
     *  *
     * @description This feature is available only in the China (Shanghai) region.
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
     *  *
     * @param SubmitDynamicChartJobRequest $request SubmitDynamicChartJobRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitDynamicChartJobResponse SubmitDynamicChartJobResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitDynamicChartJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitDynamicChartJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Generates animated charts based on Excel datasheets, such as line, pie, and bar charts. You can modify the line color and font.
     *  *
     * @description This feature is available only in the China (Shanghai) region.
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
     *  *
     * @param SubmitDynamicChartJobRequest $request SubmitDynamicChartJobRequest
     *
     * @return SubmitDynamicChartJobResponse SubmitDynamicChartJobResponse
     */
    public function submitDynamicChartJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitDynamicChartJobWithOptions($request, $runtime);
    }

    /**
     * @summary Submits an image animation job.
     *  *
     * @param SubmitDynamicImageJobRequest $tmpReq  SubmitDynamicImageJobRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitDynamicImageJobResponse SubmitDynamicImageJobResponse
     */
    public function submitDynamicImageJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitDynamicImageJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->input)) {
            $request->inputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }
        if (!Utils::isUnset($tmpReq->output)) {
            $request->outputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->output, 'Output', 'json');
        }
        if (!Utils::isUnset($tmpReq->scheduleConfig)) {
            $request->scheduleConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->scheduleConfig, 'ScheduleConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->templateConfig)) {
            $request->templateConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->templateConfig, 'TemplateConfig', 'json');
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitDynamicImageJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitDynamicImageJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Submits an image animation job.
     *  *
     * @param SubmitDynamicImageJobRequest $request SubmitDynamicImageJobRequest
     *
     * @return SubmitDynamicImageJobResponse SubmitDynamicImageJobResponse
     */
    public function submitDynamicImageJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitDynamicImageJobWithOptions($request, $runtime);
    }

    /**
     * @summary 提交高光提取任务
     *  *
     * @param SubmitHighlightExtractionJobRequest $request SubmitHighlightExtractionJobRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitHighlightExtractionJobResponse SubmitHighlightExtractionJobResponse
     */
    public function submitHighlightExtractionJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->outputConfig)) {
            $query['OutputConfig'] = $request->outputConfig;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $body = [];
        if (!Utils::isUnset($request->inputConfig)) {
            $body['InputConfig'] = $request->inputConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitHighlightExtractionJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitHighlightExtractionJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 提交高光提取任务
     *  *
     * @param SubmitHighlightExtractionJobRequest $request SubmitHighlightExtractionJobRequest
     *
     * @return SubmitHighlightExtractionJobResponse SubmitHighlightExtractionJobResponse
     */
    public function submitHighlightExtractionJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitHighlightExtractionJobWithOptions($request, $runtime);
    }

    /**
     * @summary Submits an intelligent production job.
     *  *
     * @param SubmitIProductionJobRequest $tmpReq  SubmitIProductionJobRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitIProductionJobResponse SubmitIProductionJobResponse
     */
    public function submitIProductionJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitIProductionJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->input)) {
            $request->inputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }
        if (!Utils::isUnset($tmpReq->output)) {
            $request->outputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->output, 'Output', 'json');
        }
        if (!Utils::isUnset($tmpReq->scheduleConfig)) {
            $request->scheduleConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->scheduleConfig, 'ScheduleConfig', 'json');
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
        if (!Utils::isUnset($request->modelId)) {
            $query['ModelId'] = $request->modelId;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitIProductionJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitIProductionJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Submits an intelligent production job.
     *  *
     * @param SubmitIProductionJobRequest $request SubmitIProductionJobRequest
     *
     * @return SubmitIProductionJobResponse SubmitIProductionJobResponse
     */
    public function submitIProductionJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitIProductionJobWithOptions($request, $runtime);
    }

    /**
     * @summary Submits a live editing job to merge one or more live stream clips into one video. After a live editing job is submitted, the job is queued in the background for asynchronous processing. You can call the GeLiveEditingJob operation to query the state of the job based on the job ID. You can also call the GetMediaInfo operation to query the information about the generated media asset based on the media asset ID.
     *  *
     * @description Live editing is supported for live streams that are recorded and stored in Object Storage Service (OSS) and ApsaraVideo VOD. If multiple live streams are involved in a single job, only those recorded within the same application are supported for mixed editing. The streams must all be recorded either in OSS or ApsaraVideo VOD.
     *  *
     * @param SubmitLiveEditingJobRequest $request SubmitLiveEditingJobRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitLiveEditingJobResponse SubmitLiveEditingJobResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitLiveEditingJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitLiveEditingJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Submits a live editing job to merge one or more live stream clips into one video. After a live editing job is submitted, the job is queued in the background for asynchronous processing. You can call the GeLiveEditingJob operation to query the state of the job based on the job ID. You can also call the GetMediaInfo operation to query the information about the generated media asset based on the media asset ID.
     *  *
     * @description Live editing is supported for live streams that are recorded and stored in Object Storage Service (OSS) and ApsaraVideo VOD. If multiple live streams are involved in a single job, only those recorded within the same application are supported for mixed editing. The streams must all be recorded either in OSS or ApsaraVideo VOD.
     *  *
     * @param SubmitLiveEditingJobRequest $request SubmitLiveEditingJobRequest
     *
     * @return SubmitLiveEditingJobResponse SubmitLiveEditingJobResponse
     */
    public function submitLiveEditingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitLiveEditingJobWithOptions($request, $runtime);
    }

    /**
     * @summary Submits a live stream recording job.
     *  *
     * @description You can call this operation to record live streams of ApsaraVideo Live or third-party Real-Time Messaging Protocol (RTMP) live streams. We recommend that you ingest a stream before you call this operation to submit a recording job. If no stream is pulled from the streaming URL, the job attempts to pull a stream for 3 minutes. If the attempt times out, the recording service stops.
     * Before you submit a recording job, you must prepare an Object Storage Service (OSS) or ApsaraVideo VOD bucket. We recommend that you use a storage address configured in Intelligent Media Services (IMS) to facilitate the management and processing of generated recording files.
     * If the preset recording template does not meet your requirements, you can create a custom recording template.
     *  *
     * @param SubmitLiveRecordJobRequest $tmpReq  SubmitLiveRecordJobRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitLiveRecordJobResponse SubmitLiveRecordJobResponse
     */
    public function submitLiveRecordJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitLiveRecordJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->recordOutput)) {
            $request->recordOutputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->recordOutput, 'RecordOutput', 'json');
        }
        if (!Utils::isUnset($tmpReq->streamInput)) {
            $request->streamInputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->streamInput, 'StreamInput', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->notifyUrl)) {
            $body['NotifyUrl'] = $request->notifyUrl;
        }
        if (!Utils::isUnset($request->recordOutputShrink)) {
            $body['RecordOutput'] = $request->recordOutputShrink;
        }
        if (!Utils::isUnset($request->streamInputShrink)) {
            $body['StreamInput'] = $request->streamInputShrink;
        }
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitLiveRecordJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitLiveRecordJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Submits a live stream recording job.
     *  *
     * @description You can call this operation to record live streams of ApsaraVideo Live or third-party Real-Time Messaging Protocol (RTMP) live streams. We recommend that you ingest a stream before you call this operation to submit a recording job. If no stream is pulled from the streaming URL, the job attempts to pull a stream for 3 minutes. If the attempt times out, the recording service stops.
     * Before you submit a recording job, you must prepare an Object Storage Service (OSS) or ApsaraVideo VOD bucket. We recommend that you use a storage address configured in Intelligent Media Services (IMS) to facilitate the management and processing of generated recording files.
     * If the preset recording template does not meet your requirements, you can create a custom recording template.
     *  *
     * @param SubmitLiveRecordJobRequest $request SubmitLiveRecordJobRequest
     *
     * @return SubmitLiveRecordJobResponse SubmitLiveRecordJobResponse
     */
    public function submitLiveRecordJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitLiveRecordJobWithOptions($request, $runtime);
    }

    /**
     * @summary Submits a live stream snapshot job. If the job is submitted during stream ingest, it automatically starts in asynchronous mode. Otherwise, it does not start.
     *  *
     * @param SubmitLiveSnapshotJobRequest $tmpReq  SubmitLiveSnapshotJobRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitLiveSnapshotJobResponse SubmitLiveSnapshotJobResponse
     */
    public function submitLiveSnapshotJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitLiveSnapshotJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->snapshotOutput)) {
            $request->snapshotOutputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->snapshotOutput, 'SnapshotOutput', 'json');
        }
        if (!Utils::isUnset($tmpReq->streamInput)) {
            $request->streamInputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->streamInput, 'StreamInput', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->callbackUrl)) {
            $body['CallbackUrl'] = $request->callbackUrl;
        }
        if (!Utils::isUnset($request->jobName)) {
            $body['JobName'] = $request->jobName;
        }
        if (!Utils::isUnset($request->snapshotOutputShrink)) {
            $body['SnapshotOutput'] = $request->snapshotOutputShrink;
        }
        if (!Utils::isUnset($request->streamInputShrink)) {
            $body['StreamInput'] = $request->streamInputShrink;
        }
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitLiveSnapshotJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitLiveSnapshotJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Submits a live stream snapshot job. If the job is submitted during stream ingest, it automatically starts in asynchronous mode. Otherwise, it does not start.
     *  *
     * @param SubmitLiveSnapshotJobRequest $request SubmitLiveSnapshotJobRequest
     *
     * @return SubmitLiveSnapshotJobResponse SubmitLiveSnapshotJobResponse
     */
    public function submitLiveSnapshotJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitLiveSnapshotJobWithOptions($request, $runtime);
    }

    /**
     * @summary Submits a live stream transcoding job.
     *  *
     * @description *   When you submit a transcoding job that immediately takes effect, make sure that the input stream can be streamed.
     * *   When you submit a timed transcoding job, make sure that the input stream can be streamed before the specified time.
     *  *
     * @param SubmitLiveTranscodeJobRequest $tmpReq  SubmitLiveTranscodeJobRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitLiveTranscodeJobResponse SubmitLiveTranscodeJobResponse
     */
    public function submitLiveTranscodeJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitLiveTranscodeJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->streamInput)) {
            $request->streamInputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->streamInput, 'StreamInput', 'json');
        }
        if (!Utils::isUnset($tmpReq->timedConfig)) {
            $request->timedConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->timedConfig, 'TimedConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->transcodeOutput)) {
            $request->transcodeOutputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->transcodeOutput, 'TranscodeOutput', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->startMode)) {
            $query['StartMode'] = $request->startMode;
        }
        if (!Utils::isUnset($request->streamInputShrink)) {
            $query['StreamInput'] = $request->streamInputShrink;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitLiveTranscodeJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitLiveTranscodeJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Submits a live stream transcoding job.
     *  *
     * @description *   When you submit a transcoding job that immediately takes effect, make sure that the input stream can be streamed.
     * *   When you submit a timed transcoding job, make sure that the input stream can be streamed before the specified time.
     *  *
     * @param SubmitLiveTranscodeJobRequest $request SubmitLiveTranscodeJobRequest
     *
     * @return SubmitLiveTranscodeJobResponse SubmitLiveTranscodeJobResponse
     */
    public function submitLiveTranscodeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitLiveTranscodeJobWithOptions($request, $runtime);
    }

    /**
     * @summary Submits a structural analysis job for a media asset. For example, you can submit a job to analyze the speaker, translate the video, and obtain the paragraph summary.
     *  *
     * @param SubmitMediaAiAnalysisJobRequest $request SubmitMediaAiAnalysisJobRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitMediaAiAnalysisJobResponse SubmitMediaAiAnalysisJobResponse
     */
    public function submitMediaAiAnalysisJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->analysisParams)) {
            $query['AnalysisParams'] = $request->analysisParams;
        }
        if (!Utils::isUnset($request->input)) {
            $query['Input'] = $request->input;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitMediaAiAnalysisJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitMediaAiAnalysisJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Submits a structural analysis job for a media asset. For example, you can submit a job to analyze the speaker, translate the video, and obtain the paragraph summary.
     *  *
     * @param SubmitMediaAiAnalysisJobRequest $request SubmitMediaAiAnalysisJobRequest
     *
     * @return SubmitMediaAiAnalysisJobResponse SubmitMediaAiAnalysisJobResponse
     */
    public function submitMediaAiAnalysisJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitMediaAiAnalysisJobWithOptions($request, $runtime);
    }

    /**
     * @summary Submits a content moderation job.
     *  *
     * @description The job that you submit by calling this operation is run in asynchronous mode. The job is added to an ApsaraVideo Media Processing (MPS) queue to be scheduled and run. You can call the [QueryMediaCensorJobDetail](https://help.aliyun.com/document_detail/444847.html) operation or configure an asynchronous notification to obtain the job results.
     *  *
     * @param SubmitMediaCensorJobRequest $tmpReq  SubmitMediaCensorJobRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitMediaCensorJobResponse SubmitMediaCensorJobResponse
     */
    public function submitMediaCensorJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitMediaCensorJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->input)) {
            $request->inputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }
        if (!Utils::isUnset($tmpReq->scheduleConfig)) {
            $request->scheduleConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->scheduleConfig, 'ScheduleConfig', 'json');
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitMediaCensorJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitMediaCensorJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Submits a content moderation job.
     *  *
     * @description The job that you submit by calling this operation is run in asynchronous mode. The job is added to an ApsaraVideo Media Processing (MPS) queue to be scheduled and run. You can call the [QueryMediaCensorJobDetail](https://help.aliyun.com/document_detail/444847.html) operation or configure an asynchronous notification to obtain the job results.
     *  *
     * @param SubmitMediaCensorJobRequest $request SubmitMediaCensorJobRequest
     *
     * @return SubmitMediaCensorJobResponse SubmitMediaCensorJobResponse
     */
    public function submitMediaCensorJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitMediaCensorJobWithOptions($request, $runtime);
    }

    /**
     * @summary Submits a transcoding task.
     *  *
     * @param SubmitMediaConvertJobRequest $request SubmitMediaConvertJobRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitMediaConvertJobResponse SubmitMediaConvertJobResponse
     */
    public function submitMediaConvertJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->config)) {
            $query['Config'] = $request->config;
        }
        if (!Utils::isUnset($request->pipelineId)) {
            $query['PipelineId'] = $request->pipelineId;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitMediaConvertJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitMediaConvertJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Submits a transcoding task.
     *  *
     * @param SubmitMediaConvertJobRequest $request SubmitMediaConvertJobRequest
     *
     * @return SubmitMediaConvertJobResponse SubmitMediaConvertJobResponse
     */
    public function submitMediaConvertJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitMediaConvertJobWithOptions($request, $runtime);
    }

    /**
     * @summary Submits a media information analysis job in asynchronous mode.
     *  *
     * @description You can call this operation to analyze an input media file by using a callback mechanism or initiating subsequent queries. This operation is suitable for scenarios in which real-time performance is less critical and high concurrency is expected.
     *  *
     * @param SubmitMediaInfoJobRequest $tmpReq  SubmitMediaInfoJobRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitMediaInfoJobResponse SubmitMediaInfoJobResponse
     */
    public function submitMediaInfoJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitMediaInfoJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->input)) {
            $request->inputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }
        if (!Utils::isUnset($tmpReq->scheduleConfig)) {
            $request->scheduleConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->scheduleConfig, 'ScheduleConfig', 'json');
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitMediaInfoJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitMediaInfoJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Submits a media information analysis job in asynchronous mode.
     *  *
     * @description You can call this operation to analyze an input media file by using a callback mechanism or initiating subsequent queries. This operation is suitable for scenarios in which real-time performance is less critical and high concurrency is expected.
     *  *
     * @param SubmitMediaInfoJobRequest $request SubmitMediaInfoJobRequest
     *
     * @return SubmitMediaInfoJobResponse SubmitMediaInfoJobResponse
     */
    public function submitMediaInfoJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitMediaInfoJobWithOptions($request, $runtime);
    }

    /**
     * @summary Submits a media editing and production job. If you need to perform any form of post-production such as editing and production on video or audio materials, you can call this operation to automate the process.
     *  *
     * @description *   This operation returns only the submission result of a media editing and production job. When the submission result is returned, the job may still be in progress. After a media editing and production job is submitted, the job is queued in the background for asynchronous processing.
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
     *  *
     * @param SubmitMediaProducingJobRequest $request SubmitMediaProducingJobRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitMediaProducingJobResponse SubmitMediaProducingJobResponse
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
        if (!Utils::isUnset($request->mediaMetadata)) {
            $query['MediaMetadata'] = $request->mediaMetadata;
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
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $body = [];
        if (!Utils::isUnset($request->timeline)) {
            $body['Timeline'] = $request->timeline;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitMediaProducingJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitMediaProducingJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Submits a media editing and production job. If you need to perform any form of post-production such as editing and production on video or audio materials, you can call this operation to automate the process.
     *  *
     * @description *   This operation returns only the submission result of a media editing and production job. When the submission result is returned, the job may still be in progress. After a media editing and production job is submitted, the job is queued in the background for asynchronous processing.
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
     *  *
     * @param SubmitMediaProducingJobRequest $request SubmitMediaProducingJobRequest
     *
     * @return SubmitMediaProducingJobResponse SubmitMediaProducingJobResponse
     */
    public function submitMediaProducingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitMediaProducingJobWithOptions($request, $runtime);
    }

    /**
     * @summary Submits a packaging job.
     *  *
     * @param SubmitPackageJobRequest $tmpReq  SubmitPackageJobRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitPackageJobResponse SubmitPackageJobResponse
     */
    public function submitPackageJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitPackageJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->inputs)) {
            $request->inputsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->inputs, 'Inputs', 'json');
        }
        if (!Utils::isUnset($tmpReq->output)) {
            $request->outputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->output, 'Output', 'json');
        }
        if (!Utils::isUnset($tmpReq->scheduleConfig)) {
            $request->scheduleConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->scheduleConfig, 'ScheduleConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->inputsShrink)) {
            $query['Inputs'] = $request->inputsShrink;
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
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitPackageJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitPackageJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Submits a packaging job.
     *  *
     * @param SubmitPackageJobRequest $request SubmitPackageJobRequest
     *
     * @return SubmitPackageJobResponse SubmitPackageJobResponse
     */
    public function submitPackageJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitPackageJobWithOptions($request, $runtime);
    }

    /**
     * @summary 提交工程导出任务
     *  *
     * @param SubmitProjectExportJobRequest $request SubmitProjectExportJobRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitProjectExportJobResponse SubmitProjectExportJobResponse
     */
    public function submitProjectExportJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->exportType)) {
            $query['ExportType'] = $request->exportType;
        }
        if (!Utils::isUnset($request->outputMediaConfig)) {
            $query['OutputMediaConfig'] = $request->outputMediaConfig;
        }
        if (!Utils::isUnset($request->projectId)) {
            $query['ProjectId'] = $request->projectId;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $body = [];
        if (!Utils::isUnset($request->timeline)) {
            $body['Timeline'] = $request->timeline;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitProjectExportJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitProjectExportJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 提交工程导出任务
     *  *
     * @param SubmitProjectExportJobRequest $request SubmitProjectExportJobRequest
     *
     * @return SubmitProjectExportJobResponse SubmitProjectExportJobResponse
     */
    public function submitProjectExportJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitProjectExportJobWithOptions($request, $runtime);
    }

    /**
     * @summary 提交高燃混剪任务
     *  *
     * @param SubmitScreenMediaHighlightsJobRequest $request SubmitScreenMediaHighlightsJobRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitScreenMediaHighlightsJobResponse SubmitScreenMediaHighlightsJobResponse
     */
    public function submitScreenMediaHighlightsJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->outputConfig)) {
            $query['OutputConfig'] = $request->outputConfig;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $body = [];
        if (!Utils::isUnset($request->editingConfig)) {
            $body['EditingConfig'] = $request->editingConfig;
        }
        if (!Utils::isUnset($request->inputConfig)) {
            $body['InputConfig'] = $request->inputConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitScreenMediaHighlightsJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitScreenMediaHighlightsJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 提交高燃混剪任务
     *  *
     * @param SubmitScreenMediaHighlightsJobRequest $request SubmitScreenMediaHighlightsJobRequest
     *
     * @return SubmitScreenMediaHighlightsJobResponse SubmitScreenMediaHighlightsJobResponse
     */
    public function submitScreenMediaHighlightsJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitScreenMediaHighlightsJobWithOptions($request, $runtime);
    }

    /**
     * @summary Submits a smart tagging job.
     *  *
     * @description Before you call this operation to submit a smart tagging job, you must add a smart tagging template and specify the analysis types that you want to use in the template. For more information, see CreateCustomTemplate. You can use the smart tagging feature only in the China (Beijing), China (Shanghai), and China (Hangzhou) regions. By default, an ApsaraVideo Media Processing (MPS) queue can process a maximum of two concurrent smart tagging jobs. If you need to process more concurrent smart tagging jobs, submit a ticket to contact Alibaba Cloud Technical Support for evaluation and configuration.
     *  *
     * @param SubmitSmarttagJobRequest $tmpReq  SubmitSmarttagJobRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitSmarttagJobResponse SubmitSmarttagJobResponse
     */
    public function submitSmarttagJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitSmarttagJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->input)) {
            $request->inputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }
        if (!Utils::isUnset($tmpReq->scheduleConfig)) {
            $request->scheduleConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->scheduleConfig, 'ScheduleConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->contentAddr)) {
            $query['ContentAddr'] = $request->contentAddr;
        }
        if (!Utils::isUnset($request->contentType)) {
            $query['ContentType'] = $request->contentType;
        }
        if (!Utils::isUnset($request->inputShrink)) {
            $query['Input'] = $request->inputShrink;
        }
        if (!Utils::isUnset($request->notifyUrl)) {
            $query['NotifyUrl'] = $request->notifyUrl;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitSmarttagJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitSmarttagJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Submits a smart tagging job.
     *  *
     * @description Before you call this operation to submit a smart tagging job, you must add a smart tagging template and specify the analysis types that you want to use in the template. For more information, see CreateCustomTemplate. You can use the smart tagging feature only in the China (Beijing), China (Shanghai), and China (Hangzhou) regions. By default, an ApsaraVideo Media Processing (MPS) queue can process a maximum of two concurrent smart tagging jobs. If you need to process more concurrent smart tagging jobs, submit a ticket to contact Alibaba Cloud Technical Support for evaluation and configuration.
     *  *
     * @param SubmitSmarttagJobRequest $request SubmitSmarttagJobRequest
     *
     * @return SubmitSmarttagJobResponse SubmitSmarttagJobResponse
     */
    public function submitSmarttagJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSmarttagJobWithOptions($request, $runtime);
    }

    /**
     * @summary Submits a snapshot job.
     *  *
     * @param SubmitSnapshotJobRequest $tmpReq  SubmitSnapshotJobRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitSnapshotJobResponse SubmitSnapshotJobResponse
     */
    public function submitSnapshotJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitSnapshotJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->input)) {
            $request->inputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }
        if (!Utils::isUnset($tmpReq->output)) {
            $request->outputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->output, 'Output', 'json');
        }
        if (!Utils::isUnset($tmpReq->scheduleConfig)) {
            $request->scheduleConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->scheduleConfig, 'ScheduleConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->templateConfig)) {
            $request->templateConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->templateConfig, 'TemplateConfig', 'json');
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitSnapshotJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitSnapshotJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Submits a snapshot job.
     *  *
     * @param SubmitSnapshotJobRequest $request SubmitSnapshotJobRequest
     *
     * @return SubmitSnapshotJobResponse SubmitSnapshotJobResponse
     */
    public function submitSnapshotJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSnapshotJobWithOptions($request, $runtime);
    }

    /**
     * @summary Submits a sports highlights job to generate a highlights video of an event based on event materials that contain commentary.
     *  *
     * @param SubmitSportsHighlightsJobRequest $request SubmitSportsHighlightsJobRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitSportsHighlightsJobResponse SubmitSportsHighlightsJobResponse
     */
    public function submitSportsHighlightsJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->outputConfig)) {
            $query['OutputConfig'] = $request->outputConfig;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $body = [];
        if (!Utils::isUnset($request->inputConfig)) {
            $body['InputConfig'] = $request->inputConfig;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitSportsHighlightsJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitSportsHighlightsJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Submits a sports highlights job to generate a highlights video of an event based on event materials that contain commentary.
     *  *
     * @param SubmitSportsHighlightsJobRequest $request SubmitSportsHighlightsJobRequest
     *
     * @return SubmitSportsHighlightsJobResponse SubmitSportsHighlightsJobResponse
     */
    public function submitSportsHighlightsJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSportsHighlightsJobWithOptions($request, $runtime);
    }

    /**
     * @summary Submits a standard human voice cloning job. After you call this operation, the JobId is returned. The training process is asynchronous. During training, you can call the GetCustomizedVoiceJob operation to query information such as the job state.
     *  *
     * @param SubmitStandardCustomizedVoiceJobRequest $request SubmitStandardCustomizedVoiceJobRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitStandardCustomizedVoiceJobResponse SubmitStandardCustomizedVoiceJobResponse
     */
    public function submitStandardCustomizedVoiceJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->audios)) {
            $query['Audios'] = $request->audios;
        }
        if (!Utils::isUnset($request->authentication)) {
            $query['Authentication'] = $request->authentication;
        }
        if (!Utils::isUnset($request->demoAudioMediaURL)) {
            $query['DemoAudioMediaURL'] = $request->demoAudioMediaURL;
        }
        if (!Utils::isUnset($request->gender)) {
            $query['Gender'] = $request->gender;
        }
        if (!Utils::isUnset($request->voiceName)) {
            $query['VoiceName'] = $request->voiceName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitStandardCustomizedVoiceJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitStandardCustomizedVoiceJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Submits a standard human voice cloning job. After you call this operation, the JobId is returned. The training process is asynchronous. During training, you can call the GetCustomizedVoiceJob operation to query information such as the job state.
     *  *
     * @param SubmitStandardCustomizedVoiceJobRequest $request SubmitStandardCustomizedVoiceJobRequest
     *
     * @return SubmitStandardCustomizedVoiceJobResponse SubmitStandardCustomizedVoiceJobResponse
     */
    public function submitStandardCustomizedVoiceJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitStandardCustomizedVoiceJobWithOptions($request, $runtime);
    }

    /**
     * @summary Submits a media file in synchronous mode for media information analysis.
     *  *
     * @description You can call this operation to analyze an input media file in synchronous mode. This operation is suitable for scenarios that require high real-time performance and low concurrency. If it takes an extended period of time to obtain the media information about the input media file, the request may time out or the obtained information may be inaccurate. We recommend that you call the [SubmitMediaInfoJob](https://help.aliyun.com/document_detail/441222.html) operation to obtain media information.
     *  *
     * @param SubmitSyncMediaInfoJobRequest $tmpReq  SubmitSyncMediaInfoJobRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitSyncMediaInfoJobResponse SubmitSyncMediaInfoJobResponse
     */
    public function submitSyncMediaInfoJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitSyncMediaInfoJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->input)) {
            $request->inputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }
        if (!Utils::isUnset($tmpReq->scheduleConfig)) {
            $request->scheduleConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->scheduleConfig, 'ScheduleConfig', 'json');
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitSyncMediaInfoJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitSyncMediaInfoJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Submits a media file in synchronous mode for media information analysis.
     *  *
     * @description You can call this operation to analyze an input media file in synchronous mode. This operation is suitable for scenarios that require high real-time performance and low concurrency. If it takes an extended period of time to obtain the media information about the input media file, the request may time out or the obtained information may be inaccurate. We recommend that you call the [SubmitMediaInfoJob](https://help.aliyun.com/document_detail/441222.html) operation to obtain media information.
     *  *
     * @param SubmitSyncMediaInfoJobRequest $request SubmitSyncMediaInfoJobRequest
     *
     * @return SubmitSyncMediaInfoJobResponse SubmitSyncMediaInfoJobResponse
     */
    public function submitSyncMediaInfoJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitSyncMediaInfoJobWithOptions($request, $runtime);
    }

    /**
     * @summary Submits a text generation job to generate marketing copies based on keywords and the requirements for the word count and number of output copies. The word count of the output copies may differ from the specified word count. After the job is submitted, you can call the GetSmartHandleJob operation to obtain the job state and result based on the job ID.
     *  *
     * @param SubmitTextGenerateJobRequest $request SubmitTextGenerateJobRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitTextGenerateJobResponse SubmitTextGenerateJobResponse
     */
    public function submitTextGenerateJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->generateConfig)) {
            $query['GenerateConfig'] = $request->generateConfig;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitTextGenerateJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitTextGenerateJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Submits a text generation job to generate marketing copies based on keywords and the requirements for the word count and number of output copies. The word count of the output copies may differ from the specified word count. After the job is submitted, you can call the GetSmartHandleJob operation to obtain the job state and result based on the job ID.
     *  *
     * @param SubmitTextGenerateJobRequest $request SubmitTextGenerateJobRequest
     *
     * @return SubmitTextGenerateJobResponse SubmitTextGenerateJobResponse
     */
    public function submitTextGenerateJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitTextGenerateJobWithOptions($request, $runtime);
    }

    /**
     * @summary 提交视频溯源水印ab流任务
     *  *
     * @param SubmitTraceAbJobRequest $tmpReq  SubmitTraceAbJobRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitTraceAbJobResponse SubmitTraceAbJobResponse
     */
    public function submitTraceAbJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitTraceAbJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->input)) {
            $request->inputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }
        if (!Utils::isUnset($tmpReq->output)) {
            $request->outputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->output, 'Output', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->cipherBase64ed)) {
            $query['CipherBase64ed'] = $request->cipherBase64ed;
        }
        if (!Utils::isUnset($request->inputShrink)) {
            $query['Input'] = $request->inputShrink;
        }
        if (!Utils::isUnset($request->level)) {
            $query['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->outputShrink)) {
            $query['Output'] = $request->outputShrink;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->totalTime)) {
            $query['TotalTime'] = $request->totalTime;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitTraceAbJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitTraceAbJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 提交视频溯源水印ab流任务
     *  *
     * @param SubmitTraceAbJobRequest $request SubmitTraceAbJobRequest
     *
     * @return SubmitTraceAbJobResponse SubmitTraceAbJobResponse
     */
    public function submitTraceAbJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitTraceAbJobWithOptions($request, $runtime);
    }

    /**
     * @summary 提交溯源水印提取任务
     *  *
     * @param SubmitTraceExtractJobRequest $tmpReq  SubmitTraceExtractJobRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitTraceExtractJobResponse SubmitTraceExtractJobResponse
     */
    public function submitTraceExtractJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitTraceExtractJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->input)) {
            $request->inputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->input, 'Input', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->inputShrink)) {
            $query['Input'] = $request->inputShrink;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitTraceExtractJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitTraceExtractJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 提交溯源水印提取任务
     *  *
     * @param SubmitTraceExtractJobRequest $request SubmitTraceExtractJobRequest
     *
     * @return SubmitTraceExtractJobResponse SubmitTraceExtractJobResponse
     */
    public function submitTraceExtractJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitTraceExtractJobWithOptions($request, $runtime);
    }

    /**
     * @summary 提交视频溯源水印m3u8文件任务
     *  *
     * @param SubmitTraceM3u8JobRequest $tmpReq  SubmitTraceM3u8JobRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitTraceM3u8JobResponse SubmitTraceM3u8JobResponse
     */
    public function submitTraceM3u8JobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SubmitTraceM3u8JobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->output)) {
            $request->outputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->output, 'Output', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->keyUri)) {
            $query['KeyUri'] = $request->keyUri;
        }
        if (!Utils::isUnset($request->outputShrink)) {
            $query['Output'] = $request->outputShrink;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        if (!Utils::isUnset($request->trace)) {
            $query['Trace'] = $request->trace;
        }
        if (!Utils::isUnset($request->traceMediaId)) {
            $query['TraceMediaId'] = $request->traceMediaId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitTraceM3u8JobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitTraceM3u8JobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 提交视频溯源水印m3u8文件任务
     *  *
     * @param SubmitTraceM3u8JobRequest $request SubmitTraceM3u8JobRequest
     *
     * @return SubmitTraceM3u8JobResponse SubmitTraceM3u8JobResponse
     */
    public function submitTraceM3u8Job($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitTraceM3u8JobWithOptions($request, $runtime);
    }

    /**
     * @summary Submits a transcoding job.
     *  *
     * @param SubmitTranscodeJobRequest $tmpReq  SubmitTranscodeJobRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitTranscodeJobResponse SubmitTranscodeJobResponse
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
            $request->scheduleConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->scheduleConfig, 'ScheduleConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitTranscodeJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitTranscodeJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Submits a transcoding job.
     *  *
     * @param SubmitTranscodeJobRequest $request SubmitTranscodeJobRequest
     *
     * @return SubmitTranscodeJobResponse SubmitTranscodeJobResponse
     */
    public function submitTranscodeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitTranscodeJobWithOptions($request, $runtime);
    }

    /**
     * @summary Submits a video translation job. You can call this operation to translate subtitles in a video and audio to a specific language. Lip-sync adaptation will be supported in the future.
     *  *
     * @description After you call this operation to submit a video translation job, the system returns a job ID. You can call the GetSmartHandleJob operation based on the job ID to obtain the status and result information of the job.
     *  *
     * @param SubmitVideoTranslationJobRequest $request SubmitVideoTranslationJobRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return SubmitVideoTranslationJobResponse SubmitVideoTranslationJobResponse
     */
    public function submitVideoTranslationJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
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
        if (!Utils::isUnset($request->signature)) {
            $query['Signature'] = $request->signature;
        }
        if (!Utils::isUnset($request->signatureMehtod)) {
            $query['SignatureMehtod'] = $request->signatureMehtod;
        }
        if (!Utils::isUnset($request->signatureNonce)) {
            $query['SignatureNonce'] = $request->signatureNonce;
        }
        if (!Utils::isUnset($request->signatureType)) {
            $query['SignatureType'] = $request->signatureType;
        }
        if (!Utils::isUnset($request->signatureVersion)) {
            $query['SignatureVersion'] = $request->signatureVersion;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return SubmitVideoTranslationJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return SubmitVideoTranslationJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Submits a video translation job. You can call this operation to translate subtitles in a video and audio to a specific language. Lip-sync adaptation will be supported in the future.
     *  *
     * @description After you call this operation to submit a video translation job, the system returns a job ID. You can call the GetSmartHandleJob operation based on the job ID to obtain the status and result information of the job.
     *  *
     * @param SubmitVideoTranslationJobRequest $request SubmitVideoTranslationJobRequest
     *
     * @return SubmitVideoTranslationJobResponse SubmitVideoTranslationJobResponse
     */
    public function submitVideoTranslationJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->submitVideoTranslationJobWithOptions($request, $runtime);
    }

    /**
     * @summary Hands off a conversation to a human agent.
     *  *
     * @param TakeoverAIAgentCallRequest $request TakeoverAIAgentCallRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return TakeoverAIAgentCallResponse TakeoverAIAgentCallResponse
     */
    public function takeoverAIAgentCallWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->humanAgentUserId)) {
            $query['HumanAgentUserId'] = $request->humanAgentUserId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->requireToken)) {
            $query['RequireToken'] = $request->requireToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return TakeoverAIAgentCallResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return TakeoverAIAgentCallResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Hands off a conversation to a human agent.
     *  *
     * @param TakeoverAIAgentCallRequest $request TakeoverAIAgentCallRequest
     *
     * @return TakeoverAIAgentCallResponse TakeoverAIAgentCallResponse
     */
    public function takeoverAIAgentCall($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->takeoverAIAgentCallWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the configurations of an AI agent.
     *  *
     * @description ## [](#)Request description
     * You can call this operation to update the configurations of an AI agent, such as the tone, by specifying the agent ID and configurations.
     *  *
     * @param UpdateAIAgentInstanceRequest $tmpReq  UpdateAIAgentInstanceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAIAgentInstanceResponse UpdateAIAgentInstanceResponse
     */
    public function updateAIAgentInstanceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateAIAgentInstanceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->templateConfig)) {
            $request->templateConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->templateConfig, 'TemplateConfig', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateAIAgentInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateAIAgentInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates the configurations of an AI agent.
     *  *
     * @description ## [](#)Request description
     * You can call this operation to update the configurations of an AI agent, such as the tone, by specifying the agent ID and configurations.
     *  *
     * @param UpdateAIAgentInstanceRequest $request UpdateAIAgentInstanceRequest
     *
     * @return UpdateAIAgentInstanceResponse UpdateAIAgentInstanceResponse
     */
    public function updateAIAgentInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAIAgentInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies an ad insertion configuration.
     *  *
     * @param UpdateAdInsertionRequest $request UpdateAdInsertionRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAdInsertionResponse UpdateAdInsertionResponse
     */
    public function updateAdInsertionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->adMarkerPassthrough)) {
            $body['AdMarkerPassthrough'] = $request->adMarkerPassthrough;
        }
        if (!Utils::isUnset($request->adsUrl)) {
            $body['AdsUrl'] = $request->adsUrl;
        }
        if (!Utils::isUnset($request->cdnAdSegmentUrlPrefix)) {
            $body['CdnAdSegmentUrlPrefix'] = $request->cdnAdSegmentUrlPrefix;
        }
        if (!Utils::isUnset($request->cdnContentSegmentUrlPrefix)) {
            $body['CdnContentSegmentUrlPrefix'] = $request->cdnContentSegmentUrlPrefix;
        }
        if (!Utils::isUnset($request->configAliases)) {
            $body['ConfigAliases'] = $request->configAliases;
        }
        if (!Utils::isUnset($request->contentUrlPrefix)) {
            $body['ContentUrlPrefix'] = $request->contentUrlPrefix;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->personalizationThreshold)) {
            $body['PersonalizationThreshold'] = $request->personalizationThreshold;
        }
        if (!Utils::isUnset($request->slateAdUrl)) {
            $body['SlateAdUrl'] = $request->slateAdUrl;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateAdInsertionResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateAdInsertionResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies an ad insertion configuration.
     *  *
     * @param UpdateAdInsertionRequest $request UpdateAdInsertionRequest
     *
     * @return UpdateAdInsertionResponse UpdateAdInsertionResponse
     */
    public function updateAdInsertion($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAdInsertionWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a digital human training job. You can modify the basic information or update parameters such as Video and Transparent for retraining if the training failed.
     *  *
     * @param UpdateAvatarTrainingJobRequest $request UpdateAvatarTrainingJobRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAvatarTrainingJobResponse UpdateAvatarTrainingJobResponse
     */
    public function updateAvatarTrainingJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->avatarDescription)) {
            $query['AvatarDescription'] = $request->avatarDescription;
        }
        if (!Utils::isUnset($request->avatarName)) {
            $query['AvatarName'] = $request->avatarName;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->portrait)) {
            $query['Portrait'] = $request->portrait;
        }
        if (!Utils::isUnset($request->thumbnail)) {
            $query['Thumbnail'] = $request->thumbnail;
        }
        if (!Utils::isUnset($request->transparent)) {
            $query['Transparent'] = $request->transparent;
        }
        if (!Utils::isUnset($request->video)) {
            $query['Video'] = $request->video;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateAvatarTrainingJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateAvatarTrainingJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies a digital human training job. You can modify the basic information or update parameters such as Video and Transparent for retraining if the training failed.
     *  *
     * @param UpdateAvatarTrainingJobRequest $request UpdateAvatarTrainingJobRequest
     *
     * @return UpdateAvatarTrainingJobResponse UpdateAvatarTrainingJobResponse
     */
    public function updateAvatarTrainingJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAvatarTrainingJobWithOptions($request, $runtime);
    }

    /**
     * @summary Updates a category.
     *  *
     * @description After you create a media asset category, you can call this operation to find the category based on the category ID and change the name of the category.
     *  *
     * @param UpdateCategoryRequest $request UpdateCategoryRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCategoryResponse UpdateCategoryResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateCategoryResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateCategoryResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates a category.
     *  *
     * @description After you create a media asset category, you can call this operation to find the category based on the category ID and change the name of the category.
     *  *
     * @param UpdateCategoryRequest $request UpdateCategoryRequest
     *
     * @return UpdateCategoryResponse UpdateCategoryResponse
     */
    public function updateCategory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCategoryWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a MediaWeaver channel.
     *  *
     * @param UpdateChannelRequest $request UpdateChannelRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateChannelResponse UpdateChannelResponse
     */
    public function updateChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accessPolicy)) {
            $query['AccessPolicy'] = $request->accessPolicy;
        }
        if (!Utils::isUnset($request->accessToken)) {
            $query['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->channelName)) {
            $query['ChannelName'] = $request->channelName;
        }
        if (!Utils::isUnset($request->fillerSourceLocationName)) {
            $query['FillerSourceLocationName'] = $request->fillerSourceLocationName;
        }
        if (!Utils::isUnset($request->fillerSourceName)) {
            $query['FillerSourceName'] = $request->fillerSourceName;
        }
        if (!Utils::isUnset($request->outPutConfigList)) {
            $query['OutPutConfigList'] = $request->outPutConfigList;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateChannelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateChannelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies a MediaWeaver channel.
     *  *
     * @param UpdateChannelRequest $request UpdateChannelRequest
     *
     * @return UpdateChannelResponse UpdateChannelResponse
     */
    public function updateChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateChannelWithOptions($request, $runtime);
    }

    /**
     * @summary Updates a custom template.
     *  *
     * @param UpdateCustomTemplateRequest $request UpdateCustomTemplateRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCustomTemplateResponse UpdateCustomTemplateResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateCustomTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateCustomTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates a custom template.
     *  *
     * @param UpdateCustomTemplateRequest $request UpdateCustomTemplateRequest
     *
     * @return UpdateCustomTemplateResponse UpdateCustomTemplateResponse
     */
    public function updateCustomTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCustomTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Updates a personalized human voice. Only the media asset ID of the sample audio file can be modified.
     *  *
     * @param UpdateCustomizedVoiceRequest $request UpdateCustomizedVoiceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCustomizedVoiceResponse UpdateCustomizedVoiceResponse
     */
    public function updateCustomizedVoiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->demoAudioMediaId)) {
            $query['DemoAudioMediaId'] = $request->demoAudioMediaId;
        }
        if (!Utils::isUnset($request->voiceId)) {
            $query['VoiceId'] = $request->voiceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateCustomizedVoiceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateCustomizedVoiceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates a personalized human voice. Only the media asset ID of the sample audio file can be modified.
     *  *
     * @param UpdateCustomizedVoiceRequest $request UpdateCustomizedVoiceRequest
     *
     * @return UpdateCustomizedVoiceResponse UpdateCustomizedVoiceResponse
     */
    public function updateCustomizedVoice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCustomizedVoiceWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies an online editing project. You can call this operation to modify the configurations such as the title, timeline, and thumbnail of an online editing project.
     *  *
     * @param UpdateEditingProjectRequest $request UpdateEditingProjectRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateEditingProjectResponse UpdateEditingProjectResponse
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
        if (!Utils::isUnset($request->title)) {
            $query['Title'] = $request->title;
        }
        $body = [];
        if (!Utils::isUnset($request->timeline)) {
            $body['Timeline'] = $request->timeline;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateEditingProjectResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateEditingProjectResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies an online editing project. You can call this operation to modify the configurations such as the title, timeline, and thumbnail of an online editing project.
     *  *
     * @param UpdateEditingProjectRequest $request UpdateEditingProjectRequest
     *
     * @return UpdateEditingProjectResponse UpdateEditingProjectResponse
     */
    public function updateEditingProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEditingProjectWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the configuration of a live package channel, including the protocol, segment duration, and number of segments.
     *  *
     * @description ## [](#)Usage notes
     * You need to provide the name of the channel group to which the channel belongs, channel name, protocol, segment duration, and number of segments to update. In addition, you can choose to add or modify the description of the channel. Make sure that the provided channel group name and channel name conform to the naming conventions.
     *  *
     * @param UpdateLivePackageChannelRequest $request UpdateLivePackageChannelRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateLivePackageChannelResponse UpdateLivePackageChannelResponse
     */
    public function updateLivePackageChannelWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->channelName)) {
            $body['ChannelName'] = $request->channelName;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupName)) {
            $body['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->protocol)) {
            $body['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->segmentCount)) {
            $body['SegmentCount'] = $request->segmentCount;
        }
        if (!Utils::isUnset($request->segmentDuration)) {
            $body['SegmentDuration'] = $request->segmentDuration;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateLivePackageChannelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateLivePackageChannelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates the configuration of a live package channel, including the protocol, segment duration, and number of segments.
     *  *
     * @description ## [](#)Usage notes
     * You need to provide the name of the channel group to which the channel belongs, channel name, protocol, segment duration, and number of segments to update. In addition, you can choose to add or modify the description of the channel. Make sure that the provided channel group name and channel name conform to the naming conventions.
     *  *
     * @param UpdateLivePackageChannelRequest $request UpdateLivePackageChannelRequest
     *
     * @return UpdateLivePackageChannelResponse UpdateLivePackageChannelResponse
     */
    public function updateLivePackageChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLivePackageChannelWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the credentials of ingest endpoints associated with a live package channel.
     *  *
     * @description ## [](#)Usage notes
     * You can choose to update the primary endpoint, secondary endpoint, or both. The response includes the updated ingest endpoint URL, username, and password for the ingest device to reconfigure.
     *  *
     * @param UpdateLivePackageChannelCredentialsRequest $request UpdateLivePackageChannelCredentialsRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateLivePackageChannelCredentialsResponse UpdateLivePackageChannelCredentialsResponse
     */
    public function updateLivePackageChannelCredentialsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->channelName)) {
            $body['ChannelName'] = $request->channelName;
        }
        if (!Utils::isUnset($request->groupName)) {
            $body['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->rotateCredentials)) {
            $body['RotateCredentials'] = $request->rotateCredentials;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateLivePackageChannelCredentialsResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateLivePackageChannelCredentialsResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates the credentials of ingest endpoints associated with a live package channel.
     *  *
     * @description ## [](#)Usage notes
     * You can choose to update the primary endpoint, secondary endpoint, or both. The response includes the updated ingest endpoint URL, username, and password for the ingest device to reconfigure.
     *  *
     * @param UpdateLivePackageChannelCredentialsRequest $request UpdateLivePackageChannelCredentialsRequest
     *
     * @return UpdateLivePackageChannelCredentialsResponse UpdateLivePackageChannelCredentialsResponse
     */
    public function updateLivePackageChannelCredentials($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLivePackageChannelCredentialsWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the information about a live package channel group including its description.
     *  *
     * @description ## [](#)Usage notes
     * This API operation allows you to modify the name and description of a live package channel group. The channel group name must conform to the naming conventions and can be up to 1,000 characters. The API response includes the updated channel group details and unique identifier of the request.
     *  *
     * @param UpdateLivePackageChannelGroupRequest $request UpdateLivePackageChannelGroupRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateLivePackageChannelGroupResponse UpdateLivePackageChannelGroupResponse
     */
    public function updateLivePackageChannelGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupName)) {
            $body['GroupName'] = $request->groupName;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateLivePackageChannelGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateLivePackageChannelGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates the information about a live package channel group including its description.
     *  *
     * @description ## [](#)Usage notes
     * This API operation allows you to modify the name and description of a live package channel group. The channel group name must conform to the naming conventions and can be up to 1,000 characters. The API response includes the updated channel group details and unique identifier of the request.
     *  *
     * @param UpdateLivePackageChannelGroupRequest $request UpdateLivePackageChannelGroupRequest
     *
     * @return UpdateLivePackageChannelGroupResponse UpdateLivePackageChannelGroupResponse
     */
    public function updateLivePackageChannelGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLivePackageChannelGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the origin endpoint settings including the protocol, time shifting, and access control settings.
     *  *
     * @description ## [](#)Usage notes
     * You can call this operation to modify the origin protocol, set the number of days that time-shifted content is available, define playlist names, and configure the IP address blacklist and whitelist, allowing for fine-grained control over streaming media distribution. Some parameters are required. You must configure IpWhitelist, AuthorizationCode, or both.
     *  *
     * @param UpdateLivePackageOriginEndpointRequest $request UpdateLivePackageOriginEndpointRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateLivePackageOriginEndpointResponse UpdateLivePackageOriginEndpointResponse
     */
    public function updateLivePackageOriginEndpointWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->authorizationCode)) {
            $body['AuthorizationCode'] = $request->authorizationCode;
        }
        if (!Utils::isUnset($request->channelName)) {
            $body['ChannelName'] = $request->channelName;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->endpointName)) {
            $body['EndpointName'] = $request->endpointName;
        }
        if (!Utils::isUnset($request->groupName)) {
            $body['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->ipBlacklist)) {
            $body['IpBlacklist'] = $request->ipBlacklist;
        }
        if (!Utils::isUnset($request->ipWhitelist)) {
            $body['IpWhitelist'] = $request->ipWhitelist;
        }
        if (!Utils::isUnset($request->manifestName)) {
            $body['ManifestName'] = $request->manifestName;
        }
        if (!Utils::isUnset($request->protocol)) {
            $body['Protocol'] = $request->protocol;
        }
        if (!Utils::isUnset($request->timeshiftVision)) {
            $body['TimeshiftVision'] = $request->timeshiftVision;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateLivePackageOriginEndpointResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateLivePackageOriginEndpointResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates the origin endpoint settings including the protocol, time shifting, and access control settings.
     *  *
     * @description ## [](#)Usage notes
     * You can call this operation to modify the origin protocol, set the number of days that time-shifted content is available, define playlist names, and configure the IP address blacklist and whitelist, allowing for fine-grained control over streaming media distribution. Some parameters are required. You must configure IpWhitelist, AuthorizationCode, or both.
     *  *
     * @param UpdateLivePackageOriginEndpointRequest $request UpdateLivePackageOriginEndpointRequest
     *
     * @return UpdateLivePackageOriginEndpointResponse UpdateLivePackageOriginEndpointResponse
     */
    public function updateLivePackageOriginEndpoint($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLivePackageOriginEndpointWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the information about a live stream recording template.
     *  *
     * @description Only user-created templates can be updated. The preset template cannot be updated.
     *  *
     * @param UpdateLiveRecordTemplateRequest $tmpReq  UpdateLiveRecordTemplateRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateLiveRecordTemplateResponse UpdateLiveRecordTemplateResponse
     */
    public function updateLiveRecordTemplateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateLiveRecordTemplateShrinkRequest([]);
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
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateLiveRecordTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateLiveRecordTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates the information about a live stream recording template.
     *  *
     * @description Only user-created templates can be updated. The preset template cannot be updated.
     *  *
     * @param UpdateLiveRecordTemplateRequest $request UpdateLiveRecordTemplateRequest
     *
     * @return UpdateLiveRecordTemplateResponse UpdateLiveRecordTemplateResponse
     */
    public function updateLiveRecordTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLiveRecordTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the information about a live stream snapshot template.
     *  *
     * @param UpdateLiveSnapshotTemplateRequest $request UpdateLiveSnapshotTemplateRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateLiveSnapshotTemplateResponse UpdateLiveSnapshotTemplateResponse
     */
    public function updateLiveSnapshotTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->overwriteFormat)) {
            $body['OverwriteFormat'] = $request->overwriteFormat;
        }
        if (!Utils::isUnset($request->sequenceFormat)) {
            $body['SequenceFormat'] = $request->sequenceFormat;
        }
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateName)) {
            $body['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->timeInterval)) {
            $body['TimeInterval'] = $request->timeInterval;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateLiveSnapshotTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateLiveSnapshotTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates the information about a live stream snapshot template.
     *  *
     * @param UpdateLiveSnapshotTemplateRequest $request UpdateLiveSnapshotTemplateRequest
     *
     * @return UpdateLiveSnapshotTemplateResponse UpdateLiveSnapshotTemplateResponse
     */
    public function updateLiveSnapshotTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLiveSnapshotTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the information about a live stream transcoding job.
     *  *
     * @description *   For a non-timed transcoding job, you can modify the Name parameter of the job, regardless of the job state.
     * *   For a timed job, you can modify the Name, StreamInput, TranscodeOutput, and TimedConfig parameters. However, the StreamInput, TranscodeOutput, and TimedConfig parameters can be modified only when the job is not started.
     *  *
     * @param UpdateLiveTranscodeJobRequest $tmpReq  UpdateLiveTranscodeJobRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateLiveTranscodeJobResponse UpdateLiveTranscodeJobResponse
     */
    public function updateLiveTranscodeJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateLiveTranscodeJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->streamInput)) {
            $request->streamInputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->streamInput, 'StreamInput', 'json');
        }
        if (!Utils::isUnset($tmpReq->timedConfig)) {
            $request->timedConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->timedConfig, 'TimedConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->transcodeOutput)) {
            $request->transcodeOutputShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->transcodeOutput, 'TranscodeOutput', 'json');
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateLiveTranscodeJobResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateLiveTranscodeJobResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates the information about a live stream transcoding job.
     *  *
     * @description *   For a non-timed transcoding job, you can modify the Name parameter of the job, regardless of the job state.
     * *   For a timed job, you can modify the Name, StreamInput, TranscodeOutput, and TimedConfig parameters. However, the StreamInput, TranscodeOutput, and TimedConfig parameters can be modified only when the job is not started.
     *  *
     * @param UpdateLiveTranscodeJobRequest $request UpdateLiveTranscodeJobRequest
     *
     * @return UpdateLiveTranscodeJobResponse UpdateLiveTranscodeJobResponse
     */
    public function updateLiveTranscodeJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLiveTranscodeJobWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the information about a live stream transcoding template.
     *  *
     * @param UpdateLiveTranscodeTemplateRequest $tmpReq  UpdateLiveTranscodeTemplateRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateLiveTranscodeTemplateResponse UpdateLiveTranscodeTemplateResponse
     */
    public function updateLiveTranscodeTemplateWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateLiveTranscodeTemplateShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->templateConfig)) {
            $request->templateConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->templateConfig, 'TemplateConfig', 'json');
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateLiveTranscodeTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateLiveTranscodeTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates the information about a live stream transcoding template.
     *  *
     * @param UpdateLiveTranscodeTemplateRequest $request UpdateLiveTranscodeTemplateRequest
     *
     * @return UpdateLiveTranscodeTemplateResponse UpdateLiveTranscodeTemplateResponse
     */
    public function updateLiveTranscodeTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateLiveTranscodeTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the source of a MediaConnect flow.
     *  *
     * @description *   You can modify the source only when the flow is in the offline state.
     * *   The source type cannot be modified.
     *  *
     * @param UpdateMediaConnectFlowInputRequest $request UpdateMediaConnectFlowInputRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateMediaConnectFlowInputResponse UpdateMediaConnectFlowInputResponse
     */
    public function updateMediaConnectFlowInputWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cidrs)) {
            $query['Cidrs'] = $request->cidrs;
        }
        if (!Utils::isUnset($request->flowId)) {
            $query['FlowId'] = $request->flowId;
        }
        if (!Utils::isUnset($request->inputFromUrl)) {
            $query['InputFromUrl'] = $request->inputFromUrl;
        }
        if (!Utils::isUnset($request->maxBitrate)) {
            $query['MaxBitrate'] = $request->maxBitrate;
        }
        if (!Utils::isUnset($request->srtLatency)) {
            $query['SrtLatency'] = $request->srtLatency;
        }
        if (!Utils::isUnset($request->srtPassphrase)) {
            $query['SrtPassphrase'] = $request->srtPassphrase;
        }
        if (!Utils::isUnset($request->srtPbkeyLen)) {
            $query['SrtPbkeyLen'] = $request->srtPbkeyLen;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateMediaConnectFlowInputResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateMediaConnectFlowInputResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies the source of a MediaConnect flow.
     *  *
     * @description *   You can modify the source only when the flow is in the offline state.
     * *   The source type cannot be modified.
     *  *
     * @param UpdateMediaConnectFlowInputRequest $request UpdateMediaConnectFlowInputRequest
     *
     * @return UpdateMediaConnectFlowInputResponse UpdateMediaConnectFlowInputResponse
     */
    public function updateMediaConnectFlowInput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaConnectFlowInputWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies an output of a MediaConnect flow.
     *  *
     * @description *   You can modify an output only when the flow is in the offline state.
     * *   The output type cannot be modified.
     *  *
     * @param UpdateMediaConnectFlowOutputRequest $request UpdateMediaConnectFlowOutputRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateMediaConnectFlowOutputResponse UpdateMediaConnectFlowOutputResponse
     */
    public function updateMediaConnectFlowOutputWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cidrs)) {
            $query['Cidrs'] = $request->cidrs;
        }
        if (!Utils::isUnset($request->flowId)) {
            $query['FlowId'] = $request->flowId;
        }
        if (!Utils::isUnset($request->outputName)) {
            $query['OutputName'] = $request->outputName;
        }
        if (!Utils::isUnset($request->outputToUrl)) {
            $query['OutputToUrl'] = $request->outputToUrl;
        }
        if (!Utils::isUnset($request->playerLimit)) {
            $query['PlayerLimit'] = $request->playerLimit;
        }
        if (!Utils::isUnset($request->srtLatency)) {
            $query['SrtLatency'] = $request->srtLatency;
        }
        if (!Utils::isUnset($request->srtPassphrase)) {
            $query['SrtPassphrase'] = $request->srtPassphrase;
        }
        if (!Utils::isUnset($request->srtPbkeyLen)) {
            $query['SrtPbkeyLen'] = $request->srtPbkeyLen;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateMediaConnectFlowOutputResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateMediaConnectFlowOutputResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies an output of a MediaConnect flow.
     *  *
     * @description *   You can modify an output only when the flow is in the offline state.
     * *   The output type cannot be modified.
     *  *
     * @param UpdateMediaConnectFlowOutputRequest $request UpdateMediaConnectFlowOutputRequest
     *
     * @return UpdateMediaConnectFlowOutputResponse UpdateMediaConnectFlowOutputResponse
     */
    public function updateMediaConnectFlowOutput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaConnectFlowOutputWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the state of a MediaConnect flow.
     *  *
     * @param UpdateMediaConnectFlowStatusRequest $request UpdateMediaConnectFlowStatusRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateMediaConnectFlowStatusResponse UpdateMediaConnectFlowStatusResponse
     */
    public function updateMediaConnectFlowStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->flowId)) {
            $query['FlowId'] = $request->flowId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateMediaConnectFlowStatusResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateMediaConnectFlowStatusResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies the state of a MediaConnect flow.
     *  *
     * @param UpdateMediaConnectFlowStatusRequest $request UpdateMediaConnectFlowStatusRequest
     *
     * @return UpdateMediaConnectFlowStatusResponse UpdateMediaConnectFlowStatusResponse
     */
    public function updateMediaConnectFlowStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaConnectFlowStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Updates information about a media asset based on the ID of the media asset in Intelligent Media Services (IMS) or the input URL of the media asset.
     *  *
     * @description If the MediaId parameter is specified, the MediaId parameter is preferentially used for the query. If the MediaId parameter is left empty, the InputURL parameter must be specified. The request ID and media asset ID are returned. You cannot modify the input URL of a media asset by specifying the ID of the media asset.
     *  *
     * @param UpdateMediaInfoRequest $request UpdateMediaInfoRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateMediaInfoResponse UpdateMediaInfoResponse
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
        if (!Utils::isUnset($request->referenceId)) {
            $query['ReferenceId'] = $request->referenceId;
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateMediaInfoResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateMediaInfoResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates information about a media asset based on the ID of the media asset in Intelligent Media Services (IMS) or the input URL of the media asset.
     *  *
     * @description If the MediaId parameter is specified, the MediaId parameter is preferentially used for the query. If the MediaId parameter is left empty, the InputURL parameter must be specified. The request ID and media asset ID are returned. You cannot modify the input URL of a media asset by specifying the ID of the media asset.
     *  *
     * @param UpdateMediaInfoRequest $request UpdateMediaInfoRequest
     *
     * @return UpdateMediaInfoResponse UpdateMediaInfoResponse
     */
    public function updateMediaInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a MediaLive channel.
     *  *
     * @description *
     * *   You can modify a MediaLive channel only when it is not running.
     * ## [](#qps-)QPS limit
     * This operation can be called up to 50 times per second for each Alibaba Cloud account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *  *
     * @param UpdateMediaLiveChannelRequest $tmpReq  UpdateMediaLiveChannelRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateMediaLiveChannelResponse UpdateMediaLiveChannelResponse
     */
    public function updateMediaLiveChannelWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateMediaLiveChannelShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->audioSettings)) {
            $request->audioSettingsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->audioSettings, 'AudioSettings', 'json');
        }
        if (!Utils::isUnset($tmpReq->inputAttachments)) {
            $request->inputAttachmentsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->inputAttachments, 'InputAttachments', 'json');
        }
        if (!Utils::isUnset($tmpReq->outputGroups)) {
            $request->outputGroupsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->outputGroups, 'OutputGroups', 'json');
        }
        if (!Utils::isUnset($tmpReq->videoSettings)) {
            $request->videoSettingsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->videoSettings, 'VideoSettings', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->audioSettingsShrink)) {
            $body['AudioSettings'] = $request->audioSettingsShrink;
        }
        if (!Utils::isUnset($request->channelId)) {
            $body['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->inputAttachmentsShrink)) {
            $body['InputAttachments'] = $request->inputAttachmentsShrink;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->outputGroupsShrink)) {
            $body['OutputGroups'] = $request->outputGroupsShrink;
        }
        if (!Utils::isUnset($request->videoSettingsShrink)) {
            $body['VideoSettings'] = $request->videoSettingsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateMediaLiveChannel',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateMediaLiveChannelResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateMediaLiveChannelResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies a MediaLive channel.
     *  *
     * @description *
     * *   You can modify a MediaLive channel only when it is not running.
     * ## [](#qps-)QPS limit
     * This operation can be called up to 50 times per second for each Alibaba Cloud account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *  *
     * @param UpdateMediaLiveChannelRequest $request UpdateMediaLiveChannelRequest
     *
     * @return UpdateMediaLiveChannelResponse UpdateMediaLiveChannelResponse
     */
    public function updateMediaLiveChannel($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaLiveChannelWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies an input of MediaLive.
     *  *
     * @description *
     * *   You can modify an input only when it is not associated with a MediaLive channel.
     * ## [](#qps-)QPS limit
     * This operation can be called up to 50 times per second for each Alibaba Cloud account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *  *
     * @param UpdateMediaLiveInputRequest $tmpReq  UpdateMediaLiveInputRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateMediaLiveInputResponse UpdateMediaLiveInputResponse
     */
    public function updateMediaLiveInputWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateMediaLiveInputShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->inputSettings)) {
            $request->inputSettingsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->inputSettings, 'InputSettings', 'json');
        }
        if (!Utils::isUnset($tmpReq->securityGroupIds)) {
            $request->securityGroupIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->securityGroupIds, 'SecurityGroupIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->inputSettingsShrink)) {
            $query['InputSettings'] = $request->inputSettingsShrink;
        }
        if (!Utils::isUnset($request->securityGroupIdsShrink)) {
            $query['SecurityGroupIds'] = $request->securityGroupIdsShrink;
        }
        $body = [];
        if (!Utils::isUnset($request->inputId)) {
            $body['InputId'] = $request->inputId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateMediaLiveInput',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateMediaLiveInputResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateMediaLiveInputResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies an input of MediaLive.
     *  *
     * @description *
     * *   You can modify an input only when it is not associated with a MediaLive channel.
     * ## [](#qps-)QPS limit
     * This operation can be called up to 50 times per second for each Alibaba Cloud account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *  *
     * @param UpdateMediaLiveInputRequest $request UpdateMediaLiveInputRequest
     *
     * @return UpdateMediaLiveInputResponse UpdateMediaLiveInputResponse
     */
    public function updateMediaLiveInput($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaLiveInputWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a security group created in MediaLive.
     *  *
     * @description *
     * *   You can modify a security group only when it is not associated with a MediaLive input.
     * ## [](#qps-)QPS limit
     * This operation can be called up to 50 times per second for each Alibaba Cloud account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *  *
     * @param UpdateMediaLiveInputSecurityGroupRequest $tmpReq  UpdateMediaLiveInputSecurityGroupRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateMediaLiveInputSecurityGroupResponse UpdateMediaLiveInputSecurityGroupResponse
     */
    public function updateMediaLiveInputSecurityGroupWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateMediaLiveInputSecurityGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->whitelistRules)) {
            $request->whitelistRulesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->whitelistRules, 'WhitelistRules', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $body['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->whitelistRulesShrink)) {
            $body['WhitelistRules'] = $request->whitelistRulesShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateMediaLiveInputSecurityGroup',
            'version'     => '2020-11-09',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateMediaLiveInputSecurityGroupResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateMediaLiveInputSecurityGroupResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies a security group created in MediaLive.
     *  *
     * @description *
     * *   You can modify a security group only when it is not associated with a MediaLive input.
     * ## [](#qps-)QPS limit
     * This operation can be called up to 50 times per second for each Alibaba Cloud account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation.
     *  *
     * @param UpdateMediaLiveInputSecurityGroupRequest $request UpdateMediaLiveInputSecurityGroupRequest
     *
     * @return UpdateMediaLiveInputSecurityGroupResponse UpdateMediaLiveInputSecurityGroupResponse
     */
    public function updateMediaLiveInputSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaLiveInputSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the marks of a media asset.
     *  *
     * @param UpdateMediaMarksRequest $request UpdateMediaMarksRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateMediaMarksResponse UpdateMediaMarksResponse
     */
    public function updateMediaMarksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->mediaMarks)) {
            $query['MediaMarks'] = $request->mediaMarks;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateMediaMarksResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateMediaMarksResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies the marks of a media asset.
     *  *
     * @param UpdateMediaMarksRequest $request UpdateMediaMarksRequest
     *
     * @return UpdateMediaMarksResponse UpdateMediaMarksResponse
     */
    public function updateMediaMarks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaMarksWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the media asset information in a search library.
     *  *
     * @param UpdateMediaToSearchLibRequest $request UpdateMediaToSearchLibRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateMediaToSearchLibResponse UpdateMediaToSearchLibResponse
     */
    public function updateMediaToSearchLibWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->mediaId)) {
            $query['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->msgBody)) {
            $query['MsgBody'] = $request->msgBody;
        }
        if (!Utils::isUnset($request->searchLibName)) {
            $query['SearchLibName'] = $request->searchLibName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateMediaToSearchLibResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateMediaToSearchLibResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates the media asset information in a search library.
     *  *
     * @param UpdateMediaToSearchLibRequest $request UpdateMediaToSearchLibRequest
     *
     * @return UpdateMediaToSearchLibResponse UpdateMediaToSearchLibResponse
     */
    public function updateMediaToSearchLib($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateMediaToSearchLibWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the information about an ApsaraVideo Media Processing (MPS) queue.
     *  *
     * @param UpdatePipelineRequest $request UpdatePipelineRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdatePipelineResponse UpdatePipelineResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdatePipelineResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdatePipelineResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Updates the information about an ApsaraVideo Media Processing (MPS) queue.
     *  *
     * @param UpdatePipelineRequest $request UpdatePipelineRequest
     *
     * @return UpdatePipelineResponse UpdatePipelineResponse
     */
    public function updatePipeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updatePipelineWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a program in a MediaWeaver channel.
     *  *
     * @param UpdateProgramRequest $request UpdateProgramRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateProgramResponse UpdateProgramResponse
     */
    public function updateProgramWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->adBreaks)) {
            $query['AdBreaks'] = $request->adBreaks;
        }
        if (!Utils::isUnset($request->channelName)) {
            $query['ChannelName'] = $request->channelName;
        }
        if (!Utils::isUnset($request->clipRange)) {
            $query['ClipRange'] = $request->clipRange;
        }
        if (!Utils::isUnset($request->programName)) {
            $query['ProgramName'] = $request->programName;
        }
        if (!Utils::isUnset($request->sourceLocationName)) {
            $query['SourceLocationName'] = $request->sourceLocationName;
        }
        if (!Utils::isUnset($request->sourceName)) {
            $query['SourceName'] = $request->sourceName;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->transition)) {
            $query['Transition'] = $request->transition;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateProgramResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateProgramResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies a program in a MediaWeaver channel.
     *  *
     * @param UpdateProgramRequest $request UpdateProgramRequest
     *
     * @return UpdateProgramResponse UpdateProgramResponse
     */
    public function updateProgram($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateProgramWithOptions($request, $runtime);
    }

    /**
     * @summary 修改实例的配置
     *  *
     * @param UpdateRtcRobotInstanceRequest $tmpReq  UpdateRtcRobotInstanceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateRtcRobotInstanceResponse UpdateRtcRobotInstanceResponse
     */
    public function updateRtcRobotInstanceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateRtcRobotInstanceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->config)) {
            $request->configShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->config, 'Config', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->configShrink)) {
            $query['Config'] = $request->configShrink;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateRtcRobotInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateRtcRobotInstanceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary 修改实例的配置
     *  *
     * @param UpdateRtcRobotInstanceRequest $request UpdateRtcRobotInstanceRequest
     *
     * @return UpdateRtcRobotInstanceResponse UpdateRtcRobotInstanceResponse
     */
    public function updateRtcRobotInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRtcRobotInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a source in MediaWeaver.
     *  *
     * @param UpdateSourceRequest $request UpdateSourceRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSourceResponse UpdateSourceResponse
     */
    public function updateSourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->httpPackageConfigurations)) {
            $query['HttpPackageConfigurations'] = $request->httpPackageConfigurations;
        }
        if (!Utils::isUnset($request->sourceLocationName)) {
            $query['SourceLocationName'] = $request->sourceLocationName;
        }
        if (!Utils::isUnset($request->sourceName)) {
            $query['SourceName'] = $request->sourceName;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateSourceResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateSourceResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies a source in MediaWeaver.
     *  *
     * @param UpdateSourceRequest $request UpdateSourceRequest
     *
     * @return UpdateSourceResponse UpdateSourceResponse
     */
    public function updateSource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSourceWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a source location.
     *  *
     * @param UpdateSourceLocationRequest $request UpdateSourceLocationRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateSourceLocationResponse UpdateSourceLocationResponse
     */
    public function updateSourceLocationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->baseUrl)) {
            $query['BaseUrl'] = $request->baseUrl;
        }
        if (!Utils::isUnset($request->enableSegmentDelivery)) {
            $query['EnableSegmentDelivery'] = $request->enableSegmentDelivery;
        }
        if (!Utils::isUnset($request->segmentDeliveryUrl)) {
            $query['SegmentDeliveryUrl'] = $request->segmentDeliveryUrl;
        }
        if (!Utils::isUnset($request->sourceLocationName)) {
            $query['SourceLocationName'] = $request->sourceLocationName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateSourceLocationResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateSourceLocationResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies a source location.
     *  *
     * @param UpdateSourceLocationRequest $request UpdateSourceLocationRequest
     *
     * @return UpdateSourceLocationResponse UpdateSourceLocationResponse
     */
    public function updateSourceLocation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateSourceLocationWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies an online editing template. You can modify the template title and template configurations.
     *  *
     * @description *   For more information about how to use a regular template, see [Create and use a regular template](https://help.aliyun.com/document_detail/445399.html).
     * *   For more information about how to use an advanced template, see [Create and use advanced templates](https://help.aliyun.com/document_detail/445389.html).
     *  *
     * @param UpdateTemplateRequest $request UpdateTemplateRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateTemplateResponse UpdateTemplateResponse
     */
    public function updateTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
        $body = [];
        if (!Utils::isUnset($request->config)) {
            $body['Config'] = $request->config;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UpdateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UpdateTemplateResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Modifies an online editing template. You can modify the template title and template configurations.
     *  *
     * @description *   For more information about how to use a regular template, see [Create and use a regular template](https://help.aliyun.com/document_detail/445399.html).
     * *   For more information about how to use an advanced template, see [Create and use advanced templates](https://help.aliyun.com/document_detail/445389.html).
     *  *
     * @param UpdateTemplateRequest $request UpdateTemplateRequest
     *
     * @return UpdateTemplateResponse UpdateTemplateResponse
     */
    public function updateTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary Uploads an audio or video file based on the URL of the source file. You can upload multiple media files at a time.
     *  *
     * @description *   If a callback is configured, you will receive an UploadByURLComplete event notification after the file is uploaded. You can query the upload status by calling the GetURLUploadInfos operation.
     * *   After a request is submitted, the upload job is queued as an asynchronous job in the cloud. You can query the status of the upload job based on information such as the URL and media asset ID that are returned in the event notification.
     * *   You can call this operation to upload media files that are not stored on a local server or device and must be uploaded by using URLs that are accessible over the Internet.
     * *   You can call this operation to upload media files only to ApsaraVideo VOD, but not to your own Object Storage Service (OSS) buckets. To upload a media file to an OSS bucket, pull the file to a local directory, use [OSS SDK](https://help.aliyun.com/document_detail/32006.html) to upload the file to an OSS bucket, and then call the [RegisterMediaInfo](https://help.aliyun.com/document_detail/441152.html) operation to register the file in the OSS bucket with the media asset library.
     * *   This operation is available only in the China (Shanghai), China (Beijing), and China (Shenzhen) regions.
     * *   You can call this operation to upload only audio and video files.
     *  *
     * @param UploadMediaByURLRequest $request UploadMediaByURLRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return UploadMediaByURLResponse UploadMediaByURLResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UploadMediaByURLResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UploadMediaByURLResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Uploads an audio or video file based on the URL of the source file. You can upload multiple media files at a time.
     *  *
     * @description *   If a callback is configured, you will receive an UploadByURLComplete event notification after the file is uploaded. You can query the upload status by calling the GetURLUploadInfos operation.
     * *   After a request is submitted, the upload job is queued as an asynchronous job in the cloud. You can query the status of the upload job based on information such as the URL and media asset ID that are returned in the event notification.
     * *   You can call this operation to upload media files that are not stored on a local server or device and must be uploaded by using URLs that are accessible over the Internet.
     * *   You can call this operation to upload media files only to ApsaraVideo VOD, but not to your own Object Storage Service (OSS) buckets. To upload a media file to an OSS bucket, pull the file to a local directory, use [OSS SDK](https://help.aliyun.com/document_detail/32006.html) to upload the file to an OSS bucket, and then call the [RegisterMediaInfo](https://help.aliyun.com/document_detail/441152.html) operation to register the file in the OSS bucket with the media asset library.
     * *   This operation is available only in the China (Shanghai), China (Beijing), and China (Shenzhen) regions.
     * *   You can call this operation to upload only audio and video files.
     *  *
     * @param UploadMediaByURLRequest $request UploadMediaByURLRequest
     *
     * @return UploadMediaByURLResponse UploadMediaByURLResponse
     */
    public function uploadMediaByURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadMediaByURLWithOptions($request, $runtime);
    }

    /**
     * @summary Uploads a media stream file based on the URL of the source file.
     *  *
     * @description *   You can call this operation to pull a media stream file based on a URL and upload the file. After the media stream file is uploaded, the media stream is associated with the specified media asset ID.
     * *   You can call this operation to upload media stream files only to ApsaraVideo VOD, but not to your own Object Storage Service (OSS) buckets. To upload a media stream file to an OSS bucket, pull the file to a local directory, use [OSS SDK](https://help.aliyun.com/document_detail/32006.html) to upload the file to an OSS bucket, and then call the [RegisterMediaStream](https://help.aliyun.com/document_detail/440765.html) operation to associate the media stream with the specified media asset ID.
     * *   This operation is available only in the China (Shanghai), China (Beijing), and China (Shenzhen) regions.
     *  *
     * @param UploadStreamByURLRequest $request UploadStreamByURLRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UploadStreamByURLResponse UploadStreamByURLResponse
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
        if (Utils::isUnset($this->_signatureVersion) || !Utils::equalString($this->_signatureVersion, 'v4')) {
            return UploadStreamByURLResponse::fromMap($this->callApi($params, $req, $runtime));
        }

        return UploadStreamByURLResponse::fromMap($this->execute($params, $req, $runtime));
    }

    /**
     * @summary Uploads a media stream file based on the URL of the source file.
     *  *
     * @description *   You can call this operation to pull a media stream file based on a URL and upload the file. After the media stream file is uploaded, the media stream is associated with the specified media asset ID.
     * *   You can call this operation to upload media stream files only to ApsaraVideo VOD, but not to your own Object Storage Service (OSS) buckets. To upload a media stream file to an OSS bucket, pull the file to a local directory, use [OSS SDK](https://help.aliyun.com/document_detail/32006.html) to upload the file to an OSS bucket, and then call the [RegisterMediaStream](https://help.aliyun.com/document_detail/440765.html) operation to associate the media stream with the specified media asset ID.
     * *   This operation is available only in the China (Shanghai), China (Beijing), and China (Shenzhen) regions.
     *  *
     * @param UploadStreamByURLRequest $request UploadStreamByURLRequest
     *
     * @return UploadStreamByURLResponse UploadStreamByURLResponse
     */
    public function uploadStreamByURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadStreamByURLWithOptions($request, $runtime);
    }
}
