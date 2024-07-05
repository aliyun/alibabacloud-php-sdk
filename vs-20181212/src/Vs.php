<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Vs\V20181212\Models\AddVsPullStreamInfoConfigRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\AddVsPullStreamInfoConfigResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchBindDirectoriesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchBindDirectoriesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchBindParentPlatformDevicesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchBindParentPlatformDevicesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchBindPurchasedDevicesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchBindPurchasedDevicesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchBindTemplateRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchBindTemplateResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchBindTemplatesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchBindTemplatesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchDeleteDevicesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchDeleteDevicesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchDeleteVsDomainConfigsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchDeleteVsDomainConfigsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchForbidVsStreamRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchForbidVsStreamResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchResumeVsStreamRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchResumeVsStreamResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchSetVsDomainConfigsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchSetVsDomainConfigsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchStartDevicesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchStartDevicesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchStartStreamsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchStartStreamsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchStopDevicesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchStopDevicesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchStopStreamsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchStopStreamsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchUnbindDirectoriesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchUnbindDirectoriesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchUnbindParentPlatformDevicesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchUnbindParentPlatformDevicesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchUnbindPurchasedDevicesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchUnbindPurchasedDevicesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchUnbindTemplateRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchUnbindTemplateResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchUnbindTemplatesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchUnbindTemplatesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BindDirectoryRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BindDirectoryResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BindParentPlatformDeviceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BindParentPlatformDeviceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BindPurchasedDeviceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BindPurchasedDeviceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\BindTemplateRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\BindTemplateResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ContinuousAdjustRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ContinuousAdjustResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ContinuousMoveRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ContinuousMoveResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateClusterRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateClusterResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateDeviceAlarmRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateDeviceAlarmResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateDeviceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateDeviceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateDirectoryRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateDirectoryResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateGroupRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateGroupResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateParentPlatformRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateParentPlatformResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateRenderingInstanceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateRenderingInstanceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateRenderingInstanceShrinkRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateStreamSnapshotRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateStreamSnapshotResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateTemplateRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateTemplateResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteCloudAppRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteCloudAppResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteClusterRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteClusterResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteDeviceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteDeviceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteDirectoryRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteDirectoryResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteFileRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteFileResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteGroupRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteGroupResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteParentPlatformRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteParentPlatformResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeletePresetRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeletePresetResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeletePublicKeyRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeletePublicKeyResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteRenderingInstanceConfigurationRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteRenderingInstanceConfigurationResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteRenderingInstanceConfigurationShrinkRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteTemplateRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteTemplateResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteVsPullStreamInfoConfigRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteVsPullStreamInfoConfigResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteVsStreamsNotifyUrlConfigRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteVsStreamsNotifyUrlConfigResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeAccountStatRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeAccountStatResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeClusterDevicesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeClusterDevicesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeClusterRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeClusterResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeClustersRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeClustersResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeContainerInstanceIdRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeContainerInstanceIdResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDeviceChannelsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDeviceChannelsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDeviceGatewayRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDeviceGatewayResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDeviceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDeviceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDevicesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDevicesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDeviceURLRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDeviceURLResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDirectoriesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDirectoriesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDirectoryRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDirectoryResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeGroupRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeGroupResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeGroupsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeGroupsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeParentPlatformDevicesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeParentPlatformDevicesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeParentPlatformRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeParentPlatformResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeParentPlatformsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeParentPlatformsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribePresetsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribePresetsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribePublishStreamStatusRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribePublishStreamStatusResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribePurchasedDeviceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribePurchasedDeviceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribePurchasedDevicesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribePurchasedDevicesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRecordsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRecordsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingInstanceConfigurationRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingInstanceConfigurationResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingInstanceConfigurationShrinkRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingInstanceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingInstanceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeStreamRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeStreamResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeStreamsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeStreamsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeStreamURLRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeStreamURLResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeStreamVodListRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeStreamVodListResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeTemplateRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeTemplateResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeTemplatesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeTemplatesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeUserDevicesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeUserDevicesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVodStreamURLRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVodStreamURLResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsCertificateDetailRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsCertificateDetailResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsCertificateListRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsCertificateListResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDevicesDataRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDevicesDataResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainBpsDataRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainBpsDataResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainCertificateInfoRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainCertificateInfoResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainConfigsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainConfigsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainDetailRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainDetailResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainPvDataRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainPvDataResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainPvUvDataRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainPvUvDataResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainRecordDataRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainRecordDataResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainRegionDataRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainRegionDataResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainReqBpsDataRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainReqBpsDataResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainReqTrafficDataRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainReqTrafficDataResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainSnapshotDataRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainSnapshotDataResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainTrafficDataRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainTrafficDataResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainUvDataRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainUvDataResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsPullStreamInfoConfigRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsPullStreamInfoConfigResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsStreamsNotifyUrlConfigRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsStreamsNotifyUrlConfigResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsStreamsOnlineListRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsStreamsOnlineListResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsStreamsPublishListRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsStreamsPublishListResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsTopDomainsByFlowRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsTopDomainsByFlowResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsUpPeakPublishStreamDataRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsUpPeakPublishStreamDataResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsUserResourcePackageRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsUserResourcePackageResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsVerifyContentRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsVerifyContentResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ForbidVsStreamRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ForbidVsStreamResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\GetRenderingInstanceStreamingInfoRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\GetRenderingInstanceStreamingInfoResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\GotoPresetRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\GotoPresetResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\InstallCloudAppRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\InstallCloudAppResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListCloudAppInstallationsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListCloudAppInstallationsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListCloudAppsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListCloudAppsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListFilePushStatusesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListFilePushStatusesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListFilesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListFilesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListPublicKeysRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListPublicKeysResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListRenderingInstancesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListRenderingInstancesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ManageLoginRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ManageLoginResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyDeviceAlarmRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyDeviceAlarmResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyDeviceCaptureRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyDeviceCaptureResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyDeviceChannelsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyDeviceChannelsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyDeviceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyDeviceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyDirectoryRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyDirectoryResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyGroupRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyGroupResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyParentPlatformRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyParentPlatformResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyRenderingInstanceBandwidthRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyRenderingInstanceBandwidthResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyTemplateRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyTemplateResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\OpenVsServiceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\PushFileRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\PushFileResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\RebootRenderingInstanceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\RebootRenderingInstanceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ReleaseRenderingInstanceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ReleaseRenderingInstanceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\RenewRenderingInstanceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\RenewRenderingInstanceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ResumeVsStreamRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ResumeVsStreamResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\SendRenderingInstanceCommandsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\SendRenderingInstanceCommandsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\SetPresetRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\SetPresetResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\SetVsDomainCertificateRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\SetVsDomainCertificateResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\SetVsStreamsNotifyUrlConfigRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\SetVsStreamsNotifyUrlConfigResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\StartDeviceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\StartDeviceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\StartParentPlatformRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\StartParentPlatformResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\StartPublishStreamRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\StartPublishStreamResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\StartRecordStreamRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\StartRecordStreamResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\StartStreamRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\StartStreamResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\StartTransferStreamRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\StartTransferStreamResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\StopAdjustRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\StopAdjustResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\StopDeviceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\StopDeviceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\StopMoveRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\StopMoveResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\StopPublishStreamRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\StopPublishStreamResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\StopRecordStreamRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\StopRecordStreamResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\StopStreamRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\StopStreamResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\StopTransferStreamRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\StopTransferStreamResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\SyncCatalogsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\SyncCatalogsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\UnbindDirectoryRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\UnbindDirectoryResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\UnbindParentPlatformDeviceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\UnbindParentPlatformDeviceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\UnbindPurchasedDeviceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\UnbindPurchasedDeviceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\UnbindTemplateRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\UnbindTemplateResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\UninstallCloudAppRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\UninstallCloudAppResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\UnlockDeviceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\UnlockDeviceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateCloudAppInfoRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateCloudAppInfoResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateClusterRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateClusterResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateFileInfoRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateFileInfoResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateRenderingInstanceConfigurationRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateRenderingInstanceConfigurationResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateRenderingInstanceConfigurationShrinkRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateVsPullStreamInfoConfigRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateVsPullStreamInfoConfigResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\UploadCloudAppRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\UploadCloudAppResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\UploadFileRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\UploadFileResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\UploadPublicKeyRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\UploadPublicKeyResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\VerifyVsDomainOwnerRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\VerifyVsDomainOwnerResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Vs extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('vs', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @param AddVsPullStreamInfoConfigRequest $request AddVsPullStreamInfoConfigRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return AddVsPullStreamInfoConfigResponse AddVsPullStreamInfoConfigResponse
     */
    public function addVsPullStreamInfoConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->always)) {
            $query['Always'] = $request->always;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->sourceUrl)) {
            $query['SourceUrl'] = $request->sourceUrl;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddVsPullStreamInfoConfig',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddVsPullStreamInfoConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddVsPullStreamInfoConfigRequest $request AddVsPullStreamInfoConfigRequest
     *
     * @return AddVsPullStreamInfoConfigResponse AddVsPullStreamInfoConfigResponse
     */
    public function addVsPullStreamInfoConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addVsPullStreamInfoConfigWithOptions($request, $runtime);
    }

    /**
     * @param BatchBindDirectoriesRequest $request BatchBindDirectoriesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchBindDirectoriesResponse BatchBindDirectoriesResponse
     */
    public function batchBindDirectoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchBindDirectories',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchBindDirectoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchBindDirectoriesRequest $request BatchBindDirectoriesRequest
     *
     * @return BatchBindDirectoriesResponse BatchBindDirectoriesResponse
     */
    public function batchBindDirectories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchBindDirectoriesWithOptions($request, $runtime);
    }

    /**
     * @param BatchBindParentPlatformDevicesRequest $request BatchBindParentPlatformDevicesRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchBindParentPlatformDevicesResponse BatchBindParentPlatformDevicesResponse
     */
    public function batchBindParentPlatformDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->parentPlatformId)) {
            $query['ParentPlatformId'] = $request->parentPlatformId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchBindParentPlatformDevices',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchBindParentPlatformDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchBindParentPlatformDevicesRequest $request BatchBindParentPlatformDevicesRequest
     *
     * @return BatchBindParentPlatformDevicesResponse BatchBindParentPlatformDevicesResponse
     */
    public function batchBindParentPlatformDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchBindParentPlatformDevicesWithOptions($request, $runtime);
    }

    /**
     * @param BatchBindPurchasedDevicesRequest $request BatchBindPurchasedDevicesRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchBindPurchasedDevicesResponse BatchBindPurchasedDevicesResponse
     */
    public function batchBindPurchasedDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchBindPurchasedDevices',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchBindPurchasedDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchBindPurchasedDevicesRequest $request BatchBindPurchasedDevicesRequest
     *
     * @return BatchBindPurchasedDevicesResponse BatchBindPurchasedDevicesResponse
     */
    public function batchBindPurchasedDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchBindPurchasedDevicesWithOptions($request, $runtime);
    }

    /**
     * @param BatchBindTemplateRequest $request BatchBindTemplateRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchBindTemplateResponse BatchBindTemplateResponse
     */
    public function batchBindTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applyAll)) {
            $query['ApplyAll'] = $request->applyAll;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->replace)) {
            $query['Replace'] = $request->replace;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchBindTemplate',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchBindTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchBindTemplateRequest $request BatchBindTemplateRequest
     *
     * @return BatchBindTemplateResponse BatchBindTemplateResponse
     */
    public function batchBindTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchBindTemplateWithOptions($request, $runtime);
    }

    /**
     * @param BatchBindTemplatesRequest $request BatchBindTemplatesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchBindTemplatesResponse BatchBindTemplatesResponse
     */
    public function batchBindTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applyAll)) {
            $query['ApplyAll'] = $request->applyAll;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->replace)) {
            $query['Replace'] = $request->replace;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchBindTemplates',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchBindTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchBindTemplatesRequest $request BatchBindTemplatesRequest
     *
     * @return BatchBindTemplatesResponse BatchBindTemplatesResponse
     */
    public function batchBindTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchBindTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param BatchDeleteDevicesRequest $request BatchDeleteDevicesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchDeleteDevicesResponse BatchDeleteDevicesResponse
     */
    public function batchDeleteDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchDeleteDevices',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchDeleteDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchDeleteDevicesRequest $request BatchDeleteDevicesRequest
     *
     * @return BatchDeleteDevicesResponse BatchDeleteDevicesResponse
     */
    public function batchDeleteDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteDevicesWithOptions($request, $runtime);
    }

    /**
     * @param BatchDeleteVsDomainConfigsRequest $request BatchDeleteVsDomainConfigsRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchDeleteVsDomainConfigsResponse BatchDeleteVsDomainConfigsResponse
     */
    public function batchDeleteVsDomainConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainNames)) {
            $query['DomainNames'] = $request->domainNames;
        }
        if (!Utils::isUnset($request->functionNames)) {
            $query['FunctionNames'] = $request->functionNames;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchDeleteVsDomainConfigs',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchDeleteVsDomainConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchDeleteVsDomainConfigsRequest $request BatchDeleteVsDomainConfigsRequest
     *
     * @return BatchDeleteVsDomainConfigsResponse BatchDeleteVsDomainConfigsResponse
     */
    public function batchDeleteVsDomainConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteVsDomainConfigsWithOptions($request, $runtime);
    }

    /**
     * @param BatchForbidVsStreamRequest $request BatchForbidVsStreamRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchForbidVsStreamResponse BatchForbidVsStreamResponse
     */
    public function batchForbidVsStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->channel)) {
            $query['Channel'] = $request->channel;
        }
        if (!Utils::isUnset($request->controlStreamAction)) {
            $query['ControlStreamAction'] = $request->controlStreamAction;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->liveStreamType)) {
            $query['LiveStreamType'] = $request->liveStreamType;
        }
        if (!Utils::isUnset($request->oneshot)) {
            $query['Oneshot'] = $request->oneshot;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resumeTime)) {
            $query['ResumeTime'] = $request->resumeTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchForbidVsStream',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchForbidVsStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchForbidVsStreamRequest $request BatchForbidVsStreamRequest
     *
     * @return BatchForbidVsStreamResponse BatchForbidVsStreamResponse
     */
    public function batchForbidVsStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchForbidVsStreamWithOptions($request, $runtime);
    }

    /**
     * @param BatchResumeVsStreamRequest $request BatchResumeVsStreamRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchResumeVsStreamResponse BatchResumeVsStreamResponse
     */
    public function batchResumeVsStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->channel)) {
            $query['Channel'] = $request->channel;
        }
        if (!Utils::isUnset($request->controlStreamAction)) {
            $query['ControlStreamAction'] = $request->controlStreamAction;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->liveStreamType)) {
            $query['LiveStreamType'] = $request->liveStreamType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchResumeVsStream',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchResumeVsStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchResumeVsStreamRequest $request BatchResumeVsStreamRequest
     *
     * @return BatchResumeVsStreamResponse BatchResumeVsStreamResponse
     */
    public function batchResumeVsStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchResumeVsStreamWithOptions($request, $runtime);
    }

    /**
     * @param BatchSetVsDomainConfigsRequest $request BatchSetVsDomainConfigsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchSetVsDomainConfigsResponse BatchSetVsDomainConfigsResponse
     */
    public function batchSetVsDomainConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainNames)) {
            $query['DomainNames'] = $request->domainNames;
        }
        if (!Utils::isUnset($request->functions)) {
            $query['Functions'] = $request->functions;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchSetVsDomainConfigs',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchSetVsDomainConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchSetVsDomainConfigsRequest $request BatchSetVsDomainConfigsRequest
     *
     * @return BatchSetVsDomainConfigsResponse BatchSetVsDomainConfigsResponse
     */
    public function batchSetVsDomainConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchSetVsDomainConfigsWithOptions($request, $runtime);
    }

    /**
     * @param BatchStartDevicesRequest $request BatchStartDevicesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchStartDevicesResponse BatchStartDevicesResponse
     */
    public function batchStartDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchStartDevices',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchStartDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchStartDevicesRequest $request BatchStartDevicesRequest
     *
     * @return BatchStartDevicesResponse BatchStartDevicesResponse
     */
    public function batchStartDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchStartDevicesWithOptions($request, $runtime);
    }

    /**
     * @param BatchStartStreamsRequest $request BatchStartStreamsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchStartStreamsResponse BatchStartStreamsResponse
     */
    public function batchStartStreamsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchStartStreams',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchStartStreamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchStartStreamsRequest $request BatchStartStreamsRequest
     *
     * @return BatchStartStreamsResponse BatchStartStreamsResponse
     */
    public function batchStartStreams($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchStartStreamsWithOptions($request, $runtime);
    }

    /**
     * @param BatchStopDevicesRequest $request BatchStopDevicesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchStopDevicesResponse BatchStopDevicesResponse
     */
    public function batchStopDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchStopDevices',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchStopDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchStopDevicesRequest $request BatchStopDevicesRequest
     *
     * @return BatchStopDevicesResponse BatchStopDevicesResponse
     */
    public function batchStopDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchStopDevicesWithOptions($request, $runtime);
    }

    /**
     * @param BatchStopStreamsRequest $request BatchStopStreamsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchStopStreamsResponse BatchStopStreamsResponse
     */
    public function batchStopStreamsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchStopStreams',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchStopStreamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchStopStreamsRequest $request BatchStopStreamsRequest
     *
     * @return BatchStopStreamsResponse BatchStopStreamsResponse
     */
    public function batchStopStreams($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchStopStreamsWithOptions($request, $runtime);
    }

    /**
     * @param BatchUnbindDirectoriesRequest $request BatchUnbindDirectoriesRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchUnbindDirectoriesResponse BatchUnbindDirectoriesResponse
     */
    public function batchUnbindDirectoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchUnbindDirectories',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchUnbindDirectoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchUnbindDirectoriesRequest $request BatchUnbindDirectoriesRequest
     *
     * @return BatchUnbindDirectoriesResponse BatchUnbindDirectoriesResponse
     */
    public function batchUnbindDirectories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchUnbindDirectoriesWithOptions($request, $runtime);
    }

    /**
     * @param BatchUnbindParentPlatformDevicesRequest $request BatchUnbindParentPlatformDevicesRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchUnbindParentPlatformDevicesResponse BatchUnbindParentPlatformDevicesResponse
     */
    public function batchUnbindParentPlatformDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->parentPlatformId)) {
            $query['ParentPlatformId'] = $request->parentPlatformId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchUnbindParentPlatformDevices',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchUnbindParentPlatformDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchUnbindParentPlatformDevicesRequest $request BatchUnbindParentPlatformDevicesRequest
     *
     * @return BatchUnbindParentPlatformDevicesResponse BatchUnbindParentPlatformDevicesResponse
     */
    public function batchUnbindParentPlatformDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchUnbindParentPlatformDevicesWithOptions($request, $runtime);
    }

    /**
     * @param BatchUnbindPurchasedDevicesRequest $request BatchUnbindPurchasedDevicesRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchUnbindPurchasedDevicesResponse BatchUnbindPurchasedDevicesResponse
     */
    public function batchUnbindPurchasedDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchUnbindPurchasedDevices',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchUnbindPurchasedDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchUnbindPurchasedDevicesRequest $request BatchUnbindPurchasedDevicesRequest
     *
     * @return BatchUnbindPurchasedDevicesResponse BatchUnbindPurchasedDevicesResponse
     */
    public function batchUnbindPurchasedDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchUnbindPurchasedDevicesWithOptions($request, $runtime);
    }

    /**
     * @param BatchUnbindTemplateRequest $request BatchUnbindTemplateRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchUnbindTemplateResponse BatchUnbindTemplateResponse
     */
    public function batchUnbindTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchUnbindTemplate',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchUnbindTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchUnbindTemplateRequest $request BatchUnbindTemplateRequest
     *
     * @return BatchUnbindTemplateResponse BatchUnbindTemplateResponse
     */
    public function batchUnbindTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchUnbindTemplateWithOptions($request, $runtime);
    }

    /**
     * @param BatchUnbindTemplatesRequest $request BatchUnbindTemplatesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return BatchUnbindTemplatesResponse BatchUnbindTemplatesResponse
     */
    public function batchUnbindTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BatchUnbindTemplates',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BatchUnbindTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BatchUnbindTemplatesRequest $request BatchUnbindTemplatesRequest
     *
     * @return BatchUnbindTemplatesResponse BatchUnbindTemplatesResponse
     */
    public function batchUnbindTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchUnbindTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param BindDirectoryRequest $request BindDirectoryRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return BindDirectoryResponse BindDirectoryResponse
     */
    public function bindDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindDirectory',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BindDirectoryRequest $request BindDirectoryRequest
     *
     * @return BindDirectoryResponse BindDirectoryResponse
     */
    public function bindDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindDirectoryWithOptions($request, $runtime);
    }

    /**
     * @param BindParentPlatformDeviceRequest $request BindParentPlatformDeviceRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return BindParentPlatformDeviceResponse BindParentPlatformDeviceResponse
     */
    public function bindParentPlatformDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->parentPlatformId)) {
            $query['ParentPlatformId'] = $request->parentPlatformId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindParentPlatformDevice',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindParentPlatformDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BindParentPlatformDeviceRequest $request BindParentPlatformDeviceRequest
     *
     * @return BindParentPlatformDeviceResponse BindParentPlatformDeviceResponse
     */
    public function bindParentPlatformDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindParentPlatformDeviceWithOptions($request, $runtime);
    }

    /**
     * @param BindPurchasedDeviceRequest $request BindPurchasedDeviceRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return BindPurchasedDeviceResponse BindPurchasedDeviceResponse
     */
    public function bindPurchasedDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindPurchasedDevice',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindPurchasedDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BindPurchasedDeviceRequest $request BindPurchasedDeviceRequest
     *
     * @return BindPurchasedDeviceResponse BindPurchasedDeviceResponse
     */
    public function bindPurchasedDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindPurchasedDeviceWithOptions($request, $runtime);
    }

    /**
     * @param BindTemplateRequest $request BindTemplateRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return BindTemplateResponse BindTemplateResponse
     */
    public function bindTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->applyAll)) {
            $query['ApplyAll'] = $request->applyAll;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->replace)) {
            $query['Replace'] = $request->replace;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'BindTemplate',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return BindTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param BindTemplateRequest $request BindTemplateRequest
     *
     * @return BindTemplateResponse BindTemplateResponse
     */
    public function bindTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindTemplateWithOptions($request, $runtime);
    }

    /**
     * @param ContinuousAdjustRequest $request ContinuousAdjustRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ContinuousAdjustResponse ContinuousAdjustResponse
     */
    public function continuousAdjustWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->focus)) {
            $query['Focus'] = $request->focus;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->iris)) {
            $query['Iris'] = $request->iris;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ContinuousAdjust',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ContinuousAdjustResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ContinuousAdjustRequest $request ContinuousAdjustRequest
     *
     * @return ContinuousAdjustResponse ContinuousAdjustResponse
     */
    public function continuousAdjust($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->continuousAdjustWithOptions($request, $runtime);
    }

    /**
     * @param ContinuousMoveRequest $request ContinuousMoveRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ContinuousMoveResponse ContinuousMoveResponse
     */
    public function continuousMoveWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pan)) {
            $query['Pan'] = $request->pan;
        }
        if (!Utils::isUnset($request->tilt)) {
            $query['Tilt'] = $request->tilt;
        }
        if (!Utils::isUnset($request->zoom)) {
            $query['Zoom'] = $request->zoom;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ContinuousMove',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ContinuousMoveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ContinuousMoveRequest $request ContinuousMoveRequest
     *
     * @return ContinuousMoveResponse ContinuousMoveResponse
     */
    public function continuousMove($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->continuousMoveWithOptions($request, $runtime);
    }

    /**
     * @param CreateClusterRequest $request CreateClusterRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateClusterResponse CreateClusterResponse
     */
    public function createClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->internalPorts)) {
            $query['InternalPorts'] = $request->internalPorts;
        }
        if (!Utils::isUnset($request->maintainTime)) {
            $query['MaintainTime'] = $request->maintainTime;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCluster',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateClusterRequest $request CreateClusterRequest
     *
     * @return CreateClusterResponse CreateClusterResponse
     */
    public function createCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClusterWithOptions($request, $runtime);
    }

    /**
     * @param CreateDeviceRequest $request CreateDeviceRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDeviceResponse CreateDeviceResponse
     */
    public function createDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alarmMethod)) {
            $query['AlarmMethod'] = $request->alarmMethod;
        }
        if (!Utils::isUnset($request->autoDirectory)) {
            $query['AutoDirectory'] = $request->autoDirectory;
        }
        if (!Utils::isUnset($request->autoPos)) {
            $query['AutoPos'] = $request->autoPos;
        }
        if (!Utils::isUnset($request->autoStart)) {
            $query['AutoStart'] = $request->autoStart;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->dsn)) {
            $query['Dsn'] = $request->dsn;
        }
        if (!Utils::isUnset($request->gbId)) {
            $query['GbId'] = $request->gbId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->latitude)) {
            $query['Latitude'] = $request->latitude;
        }
        if (!Utils::isUnset($request->longitude)) {
            $query['Longitude'] = $request->longitude;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        if (!Utils::isUnset($request->parentId)) {
            $query['ParentId'] = $request->parentId;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->posInterval)) {
            $query['PosInterval'] = $request->posInterval;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        if (!Utils::isUnset($request->username)) {
            $query['Username'] = $request->username;
        }
        if (!Utils::isUnset($request->vendor)) {
            $query['Vendor'] = $request->vendor;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDevice',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDeviceRequest $request CreateDeviceRequest
     *
     * @return CreateDeviceResponse CreateDeviceResponse
     */
    public function createDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDeviceWithOptions($request, $runtime);
    }

    /**
     * @param CreateDeviceAlarmRequest $request CreateDeviceAlarmRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDeviceAlarmResponse CreateDeviceAlarmResponse
     */
    public function createDeviceAlarmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alarm)) {
            $query['Alarm'] = $request->alarm;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->expire)) {
            $query['Expire'] = $request->expire;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->objectType)) {
            $query['ObjectType'] = $request->objectType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->subAlarm)) {
            $query['SubAlarm'] = $request->subAlarm;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDeviceAlarm',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDeviceAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDeviceAlarmRequest $request CreateDeviceAlarmRequest
     *
     * @return CreateDeviceAlarmResponse CreateDeviceAlarmResponse
     */
    public function createDeviceAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDeviceAlarmWithOptions($request, $runtime);
    }

    /**
     * @param CreateDirectoryRequest $request CreateDirectoryRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDirectoryResponse CreateDirectoryResponse
     */
    public function createDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->parentId)) {
            $query['ParentId'] = $request->parentId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDirectory',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDirectoryRequest $request CreateDirectoryRequest
     *
     * @return CreateDirectoryResponse CreateDirectoryResponse
     */
    public function createDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDirectoryWithOptions($request, $runtime);
    }

    /**
     * @param CreateGroupRequest $request CreateGroupRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateGroupResponse CreateGroupResponse
     */
    public function createGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->app)) {
            $query['App'] = $request->app;
        }
        if (!Utils::isUnset($request->callback)) {
            $query['Callback'] = $request->callback;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->inProtocol)) {
            $query['InProtocol'] = $request->inProtocol;
        }
        if (!Utils::isUnset($request->lazyPull)) {
            $query['LazyPull'] = $request->lazyPull;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->outProtocol)) {
            $query['OutProtocol'] = $request->outProtocol;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->playDomain)) {
            $query['PlayDomain'] = $request->playDomain;
        }
        if (!Utils::isUnset($request->pushDomain)) {
            $query['PushDomain'] = $request->pushDomain;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateGroup',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateGroupRequest $request CreateGroupRequest
     *
     * @return CreateGroupResponse CreateGroupResponse
     */
    public function createGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateParentPlatformRequest $request CreateParentPlatformRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateParentPlatformResponse CreateParentPlatformResponse
     */
    public function createParentPlatformWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoStart)) {
            $query['AutoStart'] = $request->autoStart;
        }
        if (!Utils::isUnset($request->clientAuth)) {
            $query['ClientAuth'] = $request->clientAuth;
        }
        if (!Utils::isUnset($request->clientPassword)) {
            $query['ClientPassword'] = $request->clientPassword;
        }
        if (!Utils::isUnset($request->clientUsername)) {
            $query['ClientUsername'] = $request->clientUsername;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->gbId)) {
            $query['GbId'] = $request->gbId;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->protocol)) {
            $query['Protocol'] = $request->protocol;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateParentPlatform',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateParentPlatformResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateParentPlatformRequest $request CreateParentPlatformRequest
     *
     * @return CreateParentPlatformResponse CreateParentPlatformResponse
     */
    public function createParentPlatform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createParentPlatformWithOptions($request, $runtime);
    }

    /**
     * @summary 申请云渲染资源实例
     *  *
     * @param CreateRenderingInstanceRequest $tmpReq  CreateRenderingInstanceRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRenderingInstanceResponse CreateRenderingInstanceResponse
     */
    public function createRenderingInstanceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateRenderingInstanceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->clientInfo)) {
            $request->clientInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->clientInfo, 'ClientInfo', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->clientInfoShrink)) {
            $query['ClientInfo'] = $request->clientInfoShrink;
        }
        if (!Utils::isUnset($request->instanceChargeType)) {
            $query['InstanceChargeType'] = $request->instanceChargeType;
        }
        if (!Utils::isUnset($request->internetChargeType)) {
            $query['InternetChargeType'] = $request->internetChargeType;
        }
        if (!Utils::isUnset($request->internetMaxBandwidth)) {
            $query['InternetMaxBandwidth'] = $request->internetMaxBandwidth;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->renderingSpec)) {
            $query['RenderingSpec'] = $request->renderingSpec;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRenderingInstance',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRenderingInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 申请云渲染资源实例
     *  *
     * @param CreateRenderingInstanceRequest $request CreateRenderingInstanceRequest
     *
     * @return CreateRenderingInstanceResponse CreateRenderingInstanceResponse
     */
    public function createRenderingInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRenderingInstanceWithOptions($request, $runtime);
    }

    /**
     * @param CreateStreamSnapshotRequest $request CreateStreamSnapshotRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateStreamSnapshotResponse CreateStreamSnapshotResponse
     */
    public function createStreamSnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->location)) {
            $query['Location'] = $request->location;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateStreamSnapshot',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateStreamSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateStreamSnapshotRequest $request CreateStreamSnapshotRequest
     *
     * @return CreateStreamSnapshotResponse CreateStreamSnapshotResponse
     */
    public function createStreamSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStreamSnapshotWithOptions($request, $runtime);
    }

    /**
     * @param CreateTemplateRequest $request CreateTemplateRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateTemplateResponse CreateTemplateResponse
     */
    public function createTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callback)) {
            $query['Callback'] = $request->callback;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->fileFormat)) {
            $query['FileFormat'] = $request->fileFormat;
        }
        if (!Utils::isUnset($request->flv)) {
            $query['Flv'] = $request->flv;
        }
        if (!Utils::isUnset($request->hlsM3u8)) {
            $query['HlsM3u8'] = $request->hlsM3u8;
        }
        if (!Utils::isUnset($request->hlsTs)) {
            $query['HlsTs'] = $request->hlsTs;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->jpgOnDemand)) {
            $query['JpgOnDemand'] = $request->jpgOnDemand;
        }
        if (!Utils::isUnset($request->jpgOverwrite)) {
            $query['JpgOverwrite'] = $request->jpgOverwrite;
        }
        if (!Utils::isUnset($request->jpgSequence)) {
            $query['JpgSequence'] = $request->jpgSequence;
        }
        if (!Utils::isUnset($request->mp4)) {
            $query['Mp4'] = $request->mp4;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ossBucket)) {
            $query['OssBucket'] = $request->ossBucket;
        }
        if (!Utils::isUnset($request->ossEndpoint)) {
            $query['OssEndpoint'] = $request->ossEndpoint;
        }
        if (!Utils::isUnset($request->ossFilePrefix)) {
            $query['OssFilePrefix'] = $request->ossFilePrefix;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->retention)) {
            $query['Retention'] = $request->retention;
        }
        if (!Utils::isUnset($request->transConfigsJSON)) {
            $query['TransConfigsJSON'] = $request->transConfigsJSON;
        }
        if (!Utils::isUnset($request->trigger)) {
            $query['Trigger'] = $request->trigger;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateTemplate',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTemplateRequest $request CreateTemplateRequest
     *
     * @return CreateTemplateResponse CreateTemplateResponse
     */
    public function createTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 删除云应用
     *  *
     * @param DeleteCloudAppRequest $request DeleteCloudAppRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCloudAppResponse DeleteCloudAppResponse
     */
    public function deleteCloudAppWithOptions($request, $runtime)
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
            'action'      => 'DeleteCloudApp',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCloudAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除云应用
     *  *
     * @param DeleteCloudAppRequest $request DeleteCloudAppRequest
     *
     * @return DeleteCloudAppResponse DeleteCloudAppResponse
     */
    public function deleteCloudApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCloudAppWithOptions($request, $runtime);
    }

    /**
     * @param DeleteClusterRequest $request DeleteClusterRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteClusterResponse DeleteClusterResponse
     */
    public function deleteClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCluster',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteClusterRequest $request DeleteClusterRequest
     *
     * @return DeleteClusterResponse DeleteClusterResponse
     */
    public function deleteCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClusterWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDeviceRequest $request DeleteDeviceRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDeviceResponse DeleteDeviceResponse
     */
    public function deleteDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDevice',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDeviceRequest $request DeleteDeviceRequest
     *
     * @return DeleteDeviceResponse DeleteDeviceResponse
     */
    public function deleteDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDeviceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDirectoryRequest $request DeleteDirectoryRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDirectoryResponse DeleteDirectoryResponse
     */
    public function deleteDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDirectory',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteDirectoryRequest $request DeleteDirectoryRequest
     *
     * @return DeleteDirectoryResponse DeleteDirectoryResponse
     */
    public function deleteDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDirectoryWithOptions($request, $runtime);
    }

    /**
     * @summary 删除文件对象。
     *  *
     * @param DeleteFileRequest $request DeleteFileRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteFileResponse DeleteFileResponse
     */
    public function deleteFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileId)) {
            $query['FileId'] = $request->fileId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFile',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除文件对象。
     *  *
     * @param DeleteFileRequest $request DeleteFileRequest
     *
     * @return DeleteFileResponse DeleteFileResponse
     */
    public function deleteFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFileWithOptions($request, $runtime);
    }

    /**
     * @param DeleteGroupRequest $request DeleteGroupRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteGroupResponse DeleteGroupResponse
     */
    public function deleteGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteGroup',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteGroupRequest $request DeleteGroupRequest
     *
     * @return DeleteGroupResponse DeleteGroupResponse
     */
    public function deleteGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteParentPlatformRequest $request DeleteParentPlatformRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteParentPlatformResponse DeleteParentPlatformResponse
     */
    public function deleteParentPlatformWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteParentPlatform',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteParentPlatformResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteParentPlatformRequest $request DeleteParentPlatformRequest
     *
     * @return DeleteParentPlatformResponse DeleteParentPlatformResponse
     */
    public function deleteParentPlatform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteParentPlatformWithOptions($request, $runtime);
    }

    /**
     * @param DeletePresetRequest $request DeletePresetRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePresetResponse DeletePresetResponse
     */
    public function deletePresetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->presetId)) {
            $query['PresetId'] = $request->presetId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePreset',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePresetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeletePresetRequest $request DeletePresetRequest
     *
     * @return DeletePresetResponse DeletePresetResponse
     */
    public function deletePreset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePresetWithOptions($request, $runtime);
    }

    /**
     * @summary 删除公钥信息
     *  *
     * @param DeletePublicKeyRequest $request DeletePublicKeyRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePublicKeyResponse DeletePublicKeyResponse
     */
    public function deletePublicKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyName)) {
            $query['KeyName'] = $request->keyName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePublicKey',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePublicKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除公钥信息
     *  *
     * @param DeletePublicKeyRequest $request DeletePublicKeyRequest
     *
     * @return DeletePublicKeyResponse DeletePublicKeyResponse
     */
    public function deletePublicKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePublicKeyWithOptions($request, $runtime);
    }

    /**
     * @summary 删除云渲染实例配置参数
     *  *
     * @param DeleteRenderingInstanceConfigurationRequest $tmpReq  DeleteRenderingInstanceConfigurationRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteRenderingInstanceConfigurationResponse DeleteRenderingInstanceConfigurationResponse
     */
    public function deleteRenderingInstanceConfigurationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteRenderingInstanceConfigurationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->configuration)) {
            $request->configurationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->configuration, 'Configuration', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->renderingInstanceId)) {
            $query['RenderingInstanceId'] = $request->renderingInstanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->configurationShrink)) {
            $body['Configuration'] = $request->configurationShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteRenderingInstanceConfiguration',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRenderingInstanceConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除云渲染实例配置参数
     *  *
     * @param DeleteRenderingInstanceConfigurationRequest $request DeleteRenderingInstanceConfigurationRequest
     *
     * @return DeleteRenderingInstanceConfigurationResponse DeleteRenderingInstanceConfigurationResponse
     */
    public function deleteRenderingInstanceConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRenderingInstanceConfigurationWithOptions($request, $runtime);
    }

    /**
     * @param DeleteTemplateRequest $request DeleteTemplateRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteTemplateResponse DeleteTemplateResponse
     */
    public function deleteTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTemplate',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
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
     * @param DeleteVsPullStreamInfoConfigRequest $request DeleteVsPullStreamInfoConfigRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteVsPullStreamInfoConfigResponse DeleteVsPullStreamInfoConfigResponse
     */
    public function deleteVsPullStreamInfoConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVsPullStreamInfoConfig',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVsPullStreamInfoConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteVsPullStreamInfoConfigRequest $request DeleteVsPullStreamInfoConfigRequest
     *
     * @return DeleteVsPullStreamInfoConfigResponse DeleteVsPullStreamInfoConfigResponse
     */
    public function deleteVsPullStreamInfoConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVsPullStreamInfoConfigWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVsStreamsNotifyUrlConfigRequest $request DeleteVsStreamsNotifyUrlConfigRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteVsStreamsNotifyUrlConfigResponse DeleteVsStreamsNotifyUrlConfigResponse
     */
    public function deleteVsStreamsNotifyUrlConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVsStreamsNotifyUrlConfig',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVsStreamsNotifyUrlConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteVsStreamsNotifyUrlConfigRequest $request DeleteVsStreamsNotifyUrlConfigRequest
     *
     * @return DeleteVsStreamsNotifyUrlConfigResponse DeleteVsStreamsNotifyUrlConfigResponse
     */
    public function deleteVsStreamsNotifyUrlConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVsStreamsNotifyUrlConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAccountStatRequest $request DescribeAccountStatRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAccountStatResponse DescribeAccountStatResponse
     */
    public function describeAccountStatWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAccountStat',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAccountStatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAccountStatRequest $request DescribeAccountStatRequest
     *
     * @return DescribeAccountStatResponse DescribeAccountStatResponse
     */
    public function describeAccountStat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountStatWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterRequest $request DescribeClusterRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeClusterResponse DescribeClusterResponse
     */
    public function describeClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCluster',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClusterRequest $request DescribeClusterRequest
     *
     * @return DescribeClusterResponse DescribeClusterResponse
     */
    public function describeCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterDevicesRequest $request DescribeClusterDevicesRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeClusterDevicesResponse DescribeClusterDevicesResponse
     */
    public function describeClusterDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->edgeNodeName)) {
            $query['EdgeNodeName'] = $request->edgeNodeName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->platform)) {
            $query['Platform'] = $request->platform;
        }
        if (!Utils::isUnset($request->specification)) {
            $query['Specification'] = $request->specification;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClusterDevices',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClusterDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClusterDevicesRequest $request DescribeClusterDevicesRequest
     *
     * @return DescribeClusterDevicesResponse DescribeClusterDevicesResponse
     */
    public function describeClusterDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterDevicesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClustersRequest $request DescribeClustersRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeClustersResponse DescribeClustersResponse
     */
    public function describeClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'DescribeClusters',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeClustersRequest $request DescribeClustersRequest
     *
     * @return DescribeClustersResponse DescribeClustersResponse
     */
    public function describeClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClustersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeContainerInstanceIdRequest $request DescribeContainerInstanceIdRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeContainerInstanceIdResponse DescribeContainerInstanceIdResponse
     */
    public function describeContainerInstanceIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nodeName)) {
            $query['NodeName'] = $request->nodeName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->podIndex)) {
            $query['PodIndex'] = $request->podIndex;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeContainerInstanceId',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeContainerInstanceIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeContainerInstanceIdRequest $request DescribeContainerInstanceIdRequest
     *
     * @return DescribeContainerInstanceIdResponse DescribeContainerInstanceIdResponse
     */
    public function describeContainerInstanceId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContainerInstanceIdWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDeviceRequest $request DescribeDeviceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDeviceResponse DescribeDeviceResponse
     */
    public function describeDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->includeDirectory)) {
            $query['IncludeDirectory'] = $request->includeDirectory;
        }
        if (!Utils::isUnset($request->includeStats)) {
            $query['IncludeStats'] = $request->includeStats;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDevice',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDeviceRequest $request DescribeDeviceRequest
     *
     * @return DescribeDeviceResponse DescribeDeviceResponse
     */
    public function describeDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeviceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDeviceChannelsRequest $request DescribeDeviceChannelsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDeviceChannelsResponse DescribeDeviceChannelsResponse
     */
    public function describeDeviceChannelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDeviceChannels',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDeviceChannelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDeviceChannelsRequest $request DescribeDeviceChannelsRequest
     *
     * @return DescribeDeviceChannelsResponse DescribeDeviceChannelsResponse
     */
    public function describeDeviceChannels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeviceChannelsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDeviceGatewayRequest $request DescribeDeviceGatewayRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDeviceGatewayResponse DescribeDeviceGatewayResponse
     */
    public function describeDeviceGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientIp)) {
            $query['ClientIp'] = $request->clientIp;
        }
        if (!Utils::isUnset($request->expire)) {
            $query['Expire'] = $request->expire;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDeviceGateway',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDeviceGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDeviceGatewayRequest $request DescribeDeviceGatewayRequest
     *
     * @return DescribeDeviceGatewayResponse DescribeDeviceGatewayResponse
     */
    public function describeDeviceGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeviceGatewayWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDeviceURLRequest $request DescribeDeviceURLRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDeviceURLResponse DescribeDeviceURLResponse
     */
    public function describeDeviceURLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->auth)) {
            $query['Auth'] = $request->auth;
        }
        if (!Utils::isUnset($request->expire)) {
            $query['Expire'] = $request->expire;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->outProtocol)) {
            $query['OutProtocol'] = $request->outProtocol;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->stream)) {
            $query['Stream'] = $request->stream;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDeviceURL',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDeviceURLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDeviceURLRequest $request DescribeDeviceURLRequest
     *
     * @return DescribeDeviceURLResponse DescribeDeviceURLResponse
     */
    public function describeDeviceURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeviceURLWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDevicesRequest $request DescribeDevicesRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDevicesResponse DescribeDevicesResponse
     */
    public function describeDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->dsn)) {
            $query['Dsn'] = $request->dsn;
        }
        if (!Utils::isUnset($request->gbId)) {
            $query['GbId'] = $request->gbId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->includeDirectory)) {
            $query['IncludeDirectory'] = $request->includeDirectory;
        }
        if (!Utils::isUnset($request->includeStats)) {
            $query['IncludeStats'] = $request->includeStats;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->parentId)) {
            $query['ParentId'] = $request->parentId;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->sortDirection)) {
            $query['SortDirection'] = $request->sortDirection;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->vendor)) {
            $query['Vendor'] = $request->vendor;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDevices',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDevicesRequest $request DescribeDevicesRequest
     *
     * @return DescribeDevicesResponse DescribeDevicesResponse
     */
    public function describeDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDevicesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDirectoriesRequest $request DescribeDirectoriesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDirectoriesResponse DescribeDirectoriesResponse
     */
    public function describeDirectoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->noPagination)) {
            $query['NoPagination'] = $request->noPagination;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->parentId)) {
            $query['ParentId'] = $request->parentId;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->sortDirection)) {
            $query['SortDirection'] = $request->sortDirection;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDirectories',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDirectoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDirectoriesRequest $request DescribeDirectoriesRequest
     *
     * @return DescribeDirectoriesResponse DescribeDirectoriesResponse
     */
    public function describeDirectories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDirectoriesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDirectoryRequest $request DescribeDirectoryRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDirectoryResponse DescribeDirectoryResponse
     */
    public function describeDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDirectory',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeDirectoryRequest $request DescribeDirectoryRequest
     *
     * @return DescribeDirectoryResponse DescribeDirectoryResponse
     */
    public function describeDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDirectoryWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGroupRequest $request DescribeGroupRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGroupResponse DescribeGroupResponse
     */
    public function describeGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->includeStats)) {
            $query['IncludeStats'] = $request->includeStats;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGroup',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGroupRequest $request DescribeGroupRequest
     *
     * @return DescribeGroupResponse DescribeGroupResponse
     */
    public function describeGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGroupsRequest $request DescribeGroupsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGroupsResponse DescribeGroupsResponse
     */
    public function describeGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->inProtocol)) {
            $query['InProtocol'] = $request->inProtocol;
        }
        if (!Utils::isUnset($request->includeStats)) {
            $query['IncludeStats'] = $request->includeStats;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->sortDirection)) {
            $query['SortDirection'] = $request->sortDirection;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGroups',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeGroupsRequest $request DescribeGroupsRequest
     *
     * @return DescribeGroupsResponse DescribeGroupsResponse
     */
    public function describeGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeParentPlatformRequest $request DescribeParentPlatformRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeParentPlatformResponse DescribeParentPlatformResponse
     */
    public function describeParentPlatformWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeParentPlatform',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeParentPlatformResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeParentPlatformRequest $request DescribeParentPlatformRequest
     *
     * @return DescribeParentPlatformResponse DescribeParentPlatformResponse
     */
    public function describeParentPlatform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParentPlatformWithOptions($request, $runtime);
    }

    /**
     * @param DescribeParentPlatformDevicesRequest $request DescribeParentPlatformDevicesRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeParentPlatformDevicesResponse DescribeParentPlatformDevicesResponse
     */
    public function describeParentPlatformDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->sortDirection)) {
            $query['SortDirection'] = $request->sortDirection;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeParentPlatformDevices',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeParentPlatformDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeParentPlatformDevicesRequest $request DescribeParentPlatformDevicesRequest
     *
     * @return DescribeParentPlatformDevicesResponse DescribeParentPlatformDevicesResponse
     */
    public function describeParentPlatformDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParentPlatformDevicesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeParentPlatformsRequest $request DescribeParentPlatformsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeParentPlatformsResponse DescribeParentPlatformsResponse
     */
    public function describeParentPlatformsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gbId)) {
            $query['GbId'] = $request->gbId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->sortDirection)) {
            $query['SortDirection'] = $request->sortDirection;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeParentPlatforms',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeParentPlatformsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeParentPlatformsRequest $request DescribeParentPlatformsRequest
     *
     * @return DescribeParentPlatformsResponse DescribeParentPlatformsResponse
     */
    public function describeParentPlatforms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParentPlatformsWithOptions($request, $runtime);
    }

    /**
     * @param DescribePresetsRequest $request DescribePresetsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePresetsResponse DescribePresetsResponse
     */
    public function describePresetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePresets',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePresetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePresetsRequest $request DescribePresetsRequest
     *
     * @return DescribePresetsResponse DescribePresetsResponse
     */
    public function describePresets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePresetsWithOptions($request, $runtime);
    }

    /**
     * @param DescribePublishStreamStatusRequest $request DescribePublishStreamStatusRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePublishStreamStatusResponse DescribePublishStreamStatusResponse
     */
    public function describePublishStreamStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePublishStreamStatus',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePublishStreamStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePublishStreamStatusRequest $request DescribePublishStreamStatusRequest
     *
     * @return DescribePublishStreamStatusResponse DescribePublishStreamStatusResponse
     */
    public function describePublishStreamStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePublishStreamStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribePurchasedDeviceRequest $request DescribePurchasedDeviceRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePurchasedDeviceResponse DescribePurchasedDeviceResponse
     */
    public function describePurchasedDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePurchasedDevice',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePurchasedDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePurchasedDeviceRequest $request DescribePurchasedDeviceRequest
     *
     * @return DescribePurchasedDeviceResponse DescribePurchasedDeviceResponse
     */
    public function describePurchasedDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePurchasedDeviceWithOptions($request, $runtime);
    }

    /**
     * @param DescribePurchasedDevicesRequest $request DescribePurchasedDevicesRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePurchasedDevicesResponse DescribePurchasedDevicesResponse
     */
    public function describePurchasedDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->sortDirection)) {
            $query['SortDirection'] = $request->sortDirection;
        }
        if (!Utils::isUnset($request->subType)) {
            $query['SubType'] = $request->subType;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->vendor)) {
            $query['Vendor'] = $request->vendor;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePurchasedDevices',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePurchasedDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribePurchasedDevicesRequest $request DescribePurchasedDevicesRequest
     *
     * @return DescribePurchasedDevicesResponse DescribePurchasedDevicesResponse
     */
    public function describePurchasedDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePurchasedDevicesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRecordsRequest $request DescribeRecordsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRecordsResponse DescribeRecordsResponse
     */
    public function describeRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->privateBucket)) {
            $query['PrivateBucket'] = $request->privateBucket;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->sortDirection)) {
            $query['SortDirection'] = $request->sortDirection;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->streamId)) {
            $query['StreamId'] = $request->streamId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRecords',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRecordsRequest $request DescribeRecordsRequest
     *
     * @return DescribeRecordsResponse DescribeRecordsResponse
     */
    public function describeRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecordsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询云渲染实例详细信息。
     *  *
     * @param DescribeRenderingInstanceRequest $request DescribeRenderingInstanceRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRenderingInstanceResponse DescribeRenderingInstanceResponse
     */
    public function describeRenderingInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRenderingInstance',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRenderingInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询云渲染实例详细信息。
     *  *
     * @param DescribeRenderingInstanceRequest $request DescribeRenderingInstanceRequest
     *
     * @return DescribeRenderingInstanceResponse DescribeRenderingInstanceResponse
     */
    public function describeRenderingInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRenderingInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 查询云渲染实例模块配置参数
     *  *
     * @param DescribeRenderingInstanceConfigurationRequest $tmpReq  DescribeRenderingInstanceConfigurationRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRenderingInstanceConfigurationResponse DescribeRenderingInstanceConfigurationResponse
     */
    public function describeRenderingInstanceConfigurationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeRenderingInstanceConfigurationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->configuration)) {
            $request->configurationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->configuration, 'Configuration', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRenderingInstanceConfiguration',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRenderingInstanceConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询云渲染实例模块配置参数
     *  *
     * @param DescribeRenderingInstanceConfigurationRequest $request DescribeRenderingInstanceConfigurationRequest
     *
     * @return DescribeRenderingInstanceConfigurationResponse DescribeRenderingInstanceConfigurationResponse
     */
    public function describeRenderingInstanceConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRenderingInstanceConfigurationWithOptions($request, $runtime);
    }

    /**
     * @param DescribeStreamRequest $request DescribeStreamRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeStreamResponse DescribeStreamResponse
     */
    public function describeStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeStream',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeStreamRequest $request DescribeStreamRequest
     *
     * @return DescribeStreamResponse DescribeStreamResponse
     */
    public function describeStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStreamWithOptions($request, $runtime);
    }

    /**
     * @param DescribeStreamURLRequest $request DescribeStreamURLRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeStreamURLResponse DescribeStreamURLResponse
     */
    public function describeStreamURLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->auth)) {
            $query['Auth'] = $request->auth;
        }
        if (!Utils::isUnset($request->authKey)) {
            $query['AuthKey'] = $request->authKey;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->expire)) {
            $query['Expire'] = $request->expire;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->outProtocol)) {
            $query['OutProtocol'] = $request->outProtocol;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->transcode)) {
            $query['Transcode'] = $request->transcode;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeStreamURL',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeStreamURLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeStreamURLRequest $request DescribeStreamURLRequest
     *
     * @return DescribeStreamURLResponse DescribeStreamURLResponse
     */
    public function describeStreamURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStreamURLWithOptions($request, $runtime);
    }

    /**
     * @param DescribeStreamVodListRequest $request DescribeStreamVodListRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeStreamVodListResponse DescribeStreamVodListResponse
     */
    public function describeStreamVodListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeStreamVodList',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeStreamVodListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeStreamVodListRequest $request DescribeStreamVodListRequest
     *
     * @return DescribeStreamVodListResponse DescribeStreamVodListResponse
     */
    public function describeStreamVodList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStreamVodListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeStreamsRequest $request DescribeStreamsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeStreamsResponse DescribeStreamsResponse
     */
    public function describeStreamsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->app)) {
            $query['App'] = $request->app;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->domain)) {
            $query['Domain'] = $request->domain;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->parentId)) {
            $query['ParentId'] = $request->parentId;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->sortDirection)) {
            $query['SortDirection'] = $request->sortDirection;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeStreams',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeStreamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeStreamsRequest $request DescribeStreamsRequest
     *
     * @return DescribeStreamsResponse DescribeStreamsResponse
     */
    public function describeStreams($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStreamsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTemplateRequest $request DescribeTemplateRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTemplateResponse DescribeTemplateResponse
     */
    public function describeTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTemplate',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTemplateRequest $request DescribeTemplateRequest
     *
     * @return DescribeTemplateResponse DescribeTemplateResponse
     */
    public function describeTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTemplateWithOptions($request, $runtime);
    }

    /**
     * @param DescribeTemplatesRequest $request DescribeTemplatesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTemplatesResponse DescribeTemplatesResponse
     */
    public function describeTemplatesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->sortDirection)) {
            $query['SortDirection'] = $request->sortDirection;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTemplates',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeTemplatesRequest $request DescribeTemplatesRequest
     *
     * @return DescribeTemplatesResponse DescribeTemplatesResponse
     */
    public function describeTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserDevicesRequest $request DescribeUserDevicesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserDevicesResponse DescribeUserDevicesResponse
     */
    public function describeUserDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ensInstanceIds)) {
            $query['EnsInstanceIds'] = $request->ensInstanceIds;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->serverName)) {
            $query['ServerName'] = $request->serverName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserDevices',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUserDevicesRequest $request DescribeUserDevicesRequest
     *
     * @return DescribeUserDevicesResponse DescribeUserDevicesResponse
     */
    public function describeUserDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserDevicesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodStreamURLRequest $request DescribeVodStreamURLRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVodStreamURLResponse DescribeVodStreamURLResponse
     */
    public function describeVodStreamURLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVodStreamURL',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVodStreamURLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVodStreamURLRequest $request DescribeVodStreamURLRequest
     *
     * @return DescribeVodStreamURLResponse DescribeVodStreamURLResponse
     */
    public function describeVodStreamURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodStreamURLWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsCertificateDetailRequest $request DescribeVsCertificateDetailRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVsCertificateDetailResponse DescribeVsCertificateDetailResponse
     */
    public function describeVsCertificateDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certName)) {
            $query['CertName'] = $request->certName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVsCertificateDetail',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVsCertificateDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVsCertificateDetailRequest $request DescribeVsCertificateDetailRequest
     *
     * @return DescribeVsCertificateDetailResponse DescribeVsCertificateDetailResponse
     */
    public function describeVsCertificateDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsCertificateDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsCertificateListRequest $request DescribeVsCertificateListRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVsCertificateListResponse DescribeVsCertificateListResponse
     */
    public function describeVsCertificateListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVsCertificateList',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVsCertificateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVsCertificateListRequest $request DescribeVsCertificateListRequest
     *
     * @return DescribeVsCertificateListResponse DescribeVsCertificateListResponse
     */
    public function describeVsCertificateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsCertificateListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsDevicesDataRequest $request DescribeVsDevicesDataRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVsDevicesDataResponse DescribeVsDevicesDataResponse
     */
    public function describeVsDevicesDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVsDevicesData',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVsDevicesDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVsDevicesDataRequest $request DescribeVsDevicesDataRequest
     *
     * @return DescribeVsDevicesDataResponse DescribeVsDevicesDataResponse
     */
    public function describeVsDevicesData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDevicesDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsDomainBpsDataRequest $request DescribeVsDomainBpsDataRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVsDomainBpsDataResponse DescribeVsDomainBpsDataResponse
     */
    public function describeVsDomainBpsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ispNameEn)) {
            $query['IspNameEn'] = $request->ispNameEn;
        }
        if (!Utils::isUnset($request->locationNameEn)) {
            $query['LocationNameEn'] = $request->locationNameEn;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVsDomainBpsData',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVsDomainBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVsDomainBpsDataRequest $request DescribeVsDomainBpsDataRequest
     *
     * @return DescribeVsDomainBpsDataResponse DescribeVsDomainBpsDataResponse
     */
    public function describeVsDomainBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainBpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsDomainCertificateInfoRequest $request DescribeVsDomainCertificateInfoRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVsDomainCertificateInfoResponse DescribeVsDomainCertificateInfoResponse
     */
    public function describeVsDomainCertificateInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVsDomainCertificateInfo',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVsDomainCertificateInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVsDomainCertificateInfoRequest $request DescribeVsDomainCertificateInfoRequest
     *
     * @return DescribeVsDomainCertificateInfoResponse DescribeVsDomainCertificateInfoResponse
     */
    public function describeVsDomainCertificateInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainCertificateInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsDomainConfigsRequest $request DescribeVsDomainConfigsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVsDomainConfigsResponse DescribeVsDomainConfigsResponse
     */
    public function describeVsDomainConfigsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->functionNames)) {
            $query['FunctionNames'] = $request->functionNames;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVsDomainConfigs',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVsDomainConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVsDomainConfigsRequest $request DescribeVsDomainConfigsRequest
     *
     * @return DescribeVsDomainConfigsResponse DescribeVsDomainConfigsResponse
     */
    public function describeVsDomainConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainConfigsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsDomainDetailRequest $request DescribeVsDomainDetailRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVsDomainDetailResponse DescribeVsDomainDetailResponse
     */
    public function describeVsDomainDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVsDomainDetail',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVsDomainDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVsDomainDetailRequest $request DescribeVsDomainDetailRequest
     *
     * @return DescribeVsDomainDetailResponse DescribeVsDomainDetailResponse
     */
    public function describeVsDomainDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainDetailWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsDomainPvDataRequest $request DescribeVsDomainPvDataRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVsDomainPvDataResponse DescribeVsDomainPvDataResponse
     */
    public function describeVsDomainPvDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVsDomainPvData',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVsDomainPvDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVsDomainPvDataRequest $request DescribeVsDomainPvDataRequest
     *
     * @return DescribeVsDomainPvDataResponse DescribeVsDomainPvDataResponse
     */
    public function describeVsDomainPvData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainPvDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsDomainPvUvDataRequest $request DescribeVsDomainPvUvDataRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVsDomainPvUvDataResponse DescribeVsDomainPvUvDataResponse
     */
    public function describeVsDomainPvUvDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVsDomainPvUvData',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVsDomainPvUvDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVsDomainPvUvDataRequest $request DescribeVsDomainPvUvDataRequest
     *
     * @return DescribeVsDomainPvUvDataResponse DescribeVsDomainPvUvDataResponse
     */
    public function describeVsDomainPvUvData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainPvUvDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsDomainRecordDataRequest $request DescribeVsDomainRecordDataRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVsDomainRecordDataResponse DescribeVsDomainRecordDataResponse
     */
    public function describeVsDomainRecordDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVsDomainRecordData',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVsDomainRecordDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVsDomainRecordDataRequest $request DescribeVsDomainRecordDataRequest
     *
     * @return DescribeVsDomainRecordDataResponse DescribeVsDomainRecordDataResponse
     */
    public function describeVsDomainRecordData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainRecordDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsDomainRegionDataRequest $request DescribeVsDomainRegionDataRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVsDomainRegionDataResponse DescribeVsDomainRegionDataResponse
     */
    public function describeVsDomainRegionDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVsDomainRegionData',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVsDomainRegionDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVsDomainRegionDataRequest $request DescribeVsDomainRegionDataRequest
     *
     * @return DescribeVsDomainRegionDataResponse DescribeVsDomainRegionDataResponse
     */
    public function describeVsDomainRegionData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainRegionDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsDomainReqBpsDataRequest $request DescribeVsDomainReqBpsDataRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVsDomainReqBpsDataResponse DescribeVsDomainReqBpsDataResponse
     */
    public function describeVsDomainReqBpsDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ispNameEn)) {
            $query['IspNameEn'] = $request->ispNameEn;
        }
        if (!Utils::isUnset($request->locationNameEn)) {
            $query['LocationNameEn'] = $request->locationNameEn;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVsDomainReqBpsData',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVsDomainReqBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVsDomainReqBpsDataRequest $request DescribeVsDomainReqBpsDataRequest
     *
     * @return DescribeVsDomainReqBpsDataResponse DescribeVsDomainReqBpsDataResponse
     */
    public function describeVsDomainReqBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainReqBpsDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsDomainReqTrafficDataRequest $request DescribeVsDomainReqTrafficDataRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVsDomainReqTrafficDataResponse DescribeVsDomainReqTrafficDataResponse
     */
    public function describeVsDomainReqTrafficDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ispNameEn)) {
            $query['IspNameEn'] = $request->ispNameEn;
        }
        if (!Utils::isUnset($request->locationNameEn)) {
            $query['LocationNameEn'] = $request->locationNameEn;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVsDomainReqTrafficData',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVsDomainReqTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVsDomainReqTrafficDataRequest $request DescribeVsDomainReqTrafficDataRequest
     *
     * @return DescribeVsDomainReqTrafficDataResponse DescribeVsDomainReqTrafficDataResponse
     */
    public function describeVsDomainReqTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainReqTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsDomainSnapshotDataRequest $request DescribeVsDomainSnapshotDataRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVsDomainSnapshotDataResponse DescribeVsDomainSnapshotDataResponse
     */
    public function describeVsDomainSnapshotDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVsDomainSnapshotData',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVsDomainSnapshotDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVsDomainSnapshotDataRequest $request DescribeVsDomainSnapshotDataRequest
     *
     * @return DescribeVsDomainSnapshotDataResponse DescribeVsDomainSnapshotDataResponse
     */
    public function describeVsDomainSnapshotData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainSnapshotDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsDomainTrafficDataRequest $request DescribeVsDomainTrafficDataRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVsDomainTrafficDataResponse DescribeVsDomainTrafficDataResponse
     */
    public function describeVsDomainTrafficDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ispNameEn)) {
            $query['IspNameEn'] = $request->ispNameEn;
        }
        if (!Utils::isUnset($request->locationNameEn)) {
            $query['LocationNameEn'] = $request->locationNameEn;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVsDomainTrafficData',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVsDomainTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVsDomainTrafficDataRequest $request DescribeVsDomainTrafficDataRequest
     *
     * @return DescribeVsDomainTrafficDataResponse DescribeVsDomainTrafficDataResponse
     */
    public function describeVsDomainTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsDomainUvDataRequest $request DescribeVsDomainUvDataRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVsDomainUvDataResponse DescribeVsDomainUvDataResponse
     */
    public function describeVsDomainUvDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVsDomainUvData',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVsDomainUvDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVsDomainUvDataRequest $request DescribeVsDomainUvDataRequest
     *
     * @return DescribeVsDomainUvDataResponse DescribeVsDomainUvDataResponse
     */
    public function describeVsDomainUvData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainUvDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsPullStreamInfoConfigRequest $request DescribeVsPullStreamInfoConfigRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVsPullStreamInfoConfigResponse DescribeVsPullStreamInfoConfigResponse
     */
    public function describeVsPullStreamInfoConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVsPullStreamInfoConfig',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVsPullStreamInfoConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVsPullStreamInfoConfigRequest $request DescribeVsPullStreamInfoConfigRequest
     *
     * @return DescribeVsPullStreamInfoConfigResponse DescribeVsPullStreamInfoConfigResponse
     */
    public function describeVsPullStreamInfoConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsPullStreamInfoConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsStreamsNotifyUrlConfigRequest $request DescribeVsStreamsNotifyUrlConfigRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVsStreamsNotifyUrlConfigResponse DescribeVsStreamsNotifyUrlConfigResponse
     */
    public function describeVsStreamsNotifyUrlConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVsStreamsNotifyUrlConfig',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVsStreamsNotifyUrlConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVsStreamsNotifyUrlConfigRequest $request DescribeVsStreamsNotifyUrlConfigRequest
     *
     * @return DescribeVsStreamsNotifyUrlConfigResponse DescribeVsStreamsNotifyUrlConfigResponse
     */
    public function describeVsStreamsNotifyUrlConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsStreamsNotifyUrlConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsStreamsOnlineListRequest $request DescribeVsStreamsOnlineListRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVsStreamsOnlineListResponse DescribeVsStreamsOnlineListResponse
     */
    public function describeVsStreamsOnlineListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryType)) {
            $query['QueryType'] = $request->queryType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        if (!Utils::isUnset($request->streamType)) {
            $query['StreamType'] = $request->streamType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVsStreamsOnlineList',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVsStreamsOnlineListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVsStreamsOnlineListRequest $request DescribeVsStreamsOnlineListRequest
     *
     * @return DescribeVsStreamsOnlineListResponse DescribeVsStreamsOnlineListResponse
     */
    public function describeVsStreamsOnlineList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsStreamsOnlineListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsStreamsPublishListRequest $request DescribeVsStreamsPublishListRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVsStreamsPublishListResponse DescribeVsStreamsPublishListResponse
     */
    public function describeVsStreamsPublishListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryType)) {
            $query['QueryType'] = $request->queryType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        if (!Utils::isUnset($request->streamType)) {
            $query['StreamType'] = $request->streamType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVsStreamsPublishList',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVsStreamsPublishListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVsStreamsPublishListRequest $request DescribeVsStreamsPublishListRequest
     *
     * @return DescribeVsStreamsPublishListResponse DescribeVsStreamsPublishListResponse
     */
    public function describeVsStreamsPublishList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsStreamsPublishListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsTopDomainsByFlowRequest $request DescribeVsTopDomainsByFlowRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVsTopDomainsByFlowResponse DescribeVsTopDomainsByFlowResponse
     */
    public function describeVsTopDomainsByFlowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->limit)) {
            $query['Limit'] = $request->limit;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVsTopDomainsByFlow',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVsTopDomainsByFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVsTopDomainsByFlowRequest $request DescribeVsTopDomainsByFlowRequest
     *
     * @return DescribeVsTopDomainsByFlowResponse DescribeVsTopDomainsByFlowResponse
     */
    public function describeVsTopDomainsByFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsTopDomainsByFlowWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsUpPeakPublishStreamDataRequest $request DescribeVsUpPeakPublishStreamDataRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVsUpPeakPublishStreamDataResponse DescribeVsUpPeakPublishStreamDataResponse
     */
    public function describeVsUpPeakPublishStreamDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->domainSwitch)) {
            $query['DomainSwitch'] = $request->domainSwitch;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVsUpPeakPublishStreamData',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVsUpPeakPublishStreamDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVsUpPeakPublishStreamDataRequest $request DescribeVsUpPeakPublishStreamDataRequest
     *
     * @return DescribeVsUpPeakPublishStreamDataResponse DescribeVsUpPeakPublishStreamDataResponse
     */
    public function describeVsUpPeakPublishStreamData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsUpPeakPublishStreamDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsUserResourcePackageRequest $request DescribeVsUserResourcePackageRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVsUserResourcePackageResponse DescribeVsUserResourcePackageResponse
     */
    public function describeVsUserResourcePackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityToken)) {
            $query['SecurityToken'] = $request->securityToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVsUserResourcePackage',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVsUserResourcePackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVsUserResourcePackageRequest $request DescribeVsUserResourcePackageRequest
     *
     * @return DescribeVsUserResourcePackageResponse DescribeVsUserResourcePackageResponse
     */
    public function describeVsUserResourcePackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsUserResourcePackageWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsVerifyContentRequest $request DescribeVsVerifyContentRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVsVerifyContentResponse DescribeVsVerifyContentResponse
     */
    public function describeVsVerifyContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVsVerifyContent',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVsVerifyContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVsVerifyContentRequest $request DescribeVsVerifyContentRequest
     *
     * @return DescribeVsVerifyContentResponse DescribeVsVerifyContentResponse
     */
    public function describeVsVerifyContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsVerifyContentWithOptions($request, $runtime);
    }

    /**
     * @param ForbidVsStreamRequest $request ForbidVsStreamRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ForbidVsStreamResponse ForbidVsStreamResponse
     */
    public function forbidVsStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->controlStreamAction)) {
            $query['ControlStreamAction'] = $request->controlStreamAction;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->liveStreamType)) {
            $query['LiveStreamType'] = $request->liveStreamType;
        }
        if (!Utils::isUnset($request->oneshot)) {
            $query['Oneshot'] = $request->oneshot;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resumeTime)) {
            $query['ResumeTime'] = $request->resumeTime;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ForbidVsStream',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ForbidVsStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ForbidVsStreamRequest $request ForbidVsStreamRequest
     *
     * @return ForbidVsStreamResponse ForbidVsStreamResponse
     */
    public function forbidVsStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->forbidVsStreamWithOptions($request, $runtime);
    }

    /**
     * @summary 获取云渲染实例流连接信息，每次流化建联前都需要调用此接口获取最新连接信息
     *  *
     * @param GetRenderingInstanceStreamingInfoRequest $request GetRenderingInstanceStreamingInfoRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRenderingInstanceStreamingInfoResponse GetRenderingInstanceStreamingInfoResponse
     */
    public function getRenderingInstanceStreamingInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->renderingInstanceId)) {
            $query['RenderingInstanceId'] = $request->renderingInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRenderingInstanceStreamingInfo',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRenderingInstanceStreamingInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取云渲染实例流连接信息，每次流化建联前都需要调用此接口获取最新连接信息
     *  *
     * @param GetRenderingInstanceStreamingInfoRequest $request GetRenderingInstanceStreamingInfoRequest
     *
     * @return GetRenderingInstanceStreamingInfoResponse GetRenderingInstanceStreamingInfoResponse
     */
    public function getRenderingInstanceStreamingInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRenderingInstanceStreamingInfoWithOptions($request, $runtime);
    }

    /**
     * @param GotoPresetRequest $request GotoPresetRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GotoPresetResponse GotoPresetResponse
     */
    public function gotoPresetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->presetId)) {
            $query['PresetId'] = $request->presetId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GotoPreset',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GotoPresetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GotoPresetRequest $request GotoPresetRequest
     *
     * @return GotoPresetResponse GotoPresetResponse
     */
    public function gotoPreset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->gotoPresetWithOptions($request, $runtime);
    }

    /**
     * @summary 安装云应用
     *  *
     * @param InstallCloudAppRequest $request InstallCloudAppRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return InstallCloudAppResponse InstallCloudAppResponse
     */
    public function installCloudAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->renderingInstanceId)) {
            $query['RenderingInstanceId'] = $request->renderingInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'InstallCloudApp',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InstallCloudAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 安装云应用
     *  *
     * @param InstallCloudAppRequest $request InstallCloudAppRequest
     *
     * @return InstallCloudAppResponse InstallCloudAppResponse
     */
    public function installCloudApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installCloudAppWithOptions($request, $runtime);
    }

    /**
     * @summary 查询云应用安装信息列表
     *  *
     * @param ListCloudAppInstallationsRequest $request ListCloudAppInstallationsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCloudAppInstallationsResponse ListCloudAppInstallationsResponse
     */
    public function listCloudAppInstallationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCloudAppInstallations',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCloudAppInstallationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询云应用安装信息列表
     *  *
     * @param ListCloudAppInstallationsRequest $request ListCloudAppInstallationsRequest
     *
     * @return ListCloudAppInstallationsResponse ListCloudAppInstallationsResponse
     */
    public function listCloudAppInstallations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCloudAppInstallationsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询云应用列表
     *  *
     * @param ListCloudAppsRequest $request ListCloudAppsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCloudAppsResponse ListCloudAppsResponse
     */
    public function listCloudAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCloudApps',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCloudAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询云应用列表
     *  *
     * @param ListCloudAppsRequest $request ListCloudAppsRequest
     *
     * @return ListCloudAppsResponse ListCloudAppsResponse
     */
    public function listCloudApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCloudAppsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询文件的实例推送状态信息列表。
     *  *
     * @param ListFilePushStatusesRequest $request ListFilePushStatusesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListFilePushStatusesResponse ListFilePushStatusesResponse
     */
    public function listFilePushStatusesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFilePushStatuses',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFilePushStatusesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询文件的实例推送状态信息列表。
     *  *
     * @param ListFilePushStatusesRequest $request ListFilePushStatusesRequest
     *
     * @return ListFilePushStatusesResponse ListFilePushStatusesResponse
     */
    public function listFilePushStatuses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFilePushStatusesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询可用文件列表。
     *  *
     * @param ListFilesRequest $request ListFilesRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ListFilesResponse ListFilesResponse
     */
    public function listFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFiles',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询可用文件列表。
     *  *
     * @param ListFilesRequest $request ListFilesRequest
     *
     * @return ListFilesResponse ListFilesResponse
     */
    public function listFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFilesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询公钥信息
     *  *
     * @param ListPublicKeysRequest $request ListPublicKeysRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListPublicKeysResponse ListPublicKeysResponse
     */
    public function listPublicKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListPublicKeys',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListPublicKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询公钥信息
     *  *
     * @param ListPublicKeysRequest $request ListPublicKeysRequest
     *
     * @return ListPublicKeysResponse ListPublicKeysResponse
     */
    public function listPublicKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPublicKeysWithOptions($request, $runtime);
    }

    /**
     * @summary 查询所有云渲染实例信息，支持分页查询。
     *  *
     * @param ListRenderingInstancesRequest $request ListRenderingInstancesRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRenderingInstancesResponse ListRenderingInstancesResponse
     */
    public function listRenderingInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListRenderingInstances',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRenderingInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询所有云渲染实例信息，支持分页查询。
     *  *
     * @param ListRenderingInstancesRequest $request ListRenderingInstancesRequest
     *
     * @return ListRenderingInstancesResponse ListRenderingInstancesResponse
     */
    public function listRenderingInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRenderingInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary 安全登陆管理
     *  *
     * @param ManageLoginRequest $request ManageLoginRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ManageLoginResponse ManageLoginResponse
     */
    public function manageLoginWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->actionName)) {
            $query['ActionName'] = $request->actionName;
        }
        if (!Utils::isUnset($request->keyGroup)) {
            $query['KeyGroup'] = $request->keyGroup;
        }
        if (!Utils::isUnset($request->keyName)) {
            $query['KeyName'] = $request->keyName;
        }
        if (!Utils::isUnset($request->renderingInstanceId)) {
            $query['RenderingInstanceId'] = $request->renderingInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ManageLogin',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ManageLoginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 安全登陆管理
     *  *
     * @param ManageLoginRequest $request ManageLoginRequest
     *
     * @return ManageLoginResponse ManageLoginResponse
     */
    public function manageLogin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->manageLoginWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDeviceRequest $request ModifyDeviceRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDeviceResponse ModifyDeviceResponse
     */
    public function modifyDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alarmMethod)) {
            $query['AlarmMethod'] = $request->alarmMethod;
        }
        if (!Utils::isUnset($request->autoDirectory)) {
            $query['AutoDirectory'] = $request->autoDirectory;
        }
        if (!Utils::isUnset($request->autoPos)) {
            $query['AutoPos'] = $request->autoPos;
        }
        if (!Utils::isUnset($request->autoStart)) {
            $query['AutoStart'] = $request->autoStart;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->gbId)) {
            $query['GbId'] = $request->gbId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->latitude)) {
            $query['Latitude'] = $request->latitude;
        }
        if (!Utils::isUnset($request->longitude)) {
            $query['Longitude'] = $request->longitude;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->params)) {
            $query['Params'] = $request->params;
        }
        if (!Utils::isUnset($request->parentId)) {
            $query['ParentId'] = $request->parentId;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->posInterval)) {
            $query['PosInterval'] = $request->posInterval;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        if (!Utils::isUnset($request->username)) {
            $query['Username'] = $request->username;
        }
        if (!Utils::isUnset($request->vendor)) {
            $query['Vendor'] = $request->vendor;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDevice',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDeviceRequest $request ModifyDeviceRequest
     *
     * @return ModifyDeviceResponse ModifyDeviceResponse
     */
    public function modifyDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDeviceWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDeviceAlarmRequest $request ModifyDeviceAlarmRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDeviceAlarmResponse ModifyDeviceAlarmResponse
     */
    public function modifyDeviceAlarmWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alarmId)) {
            $query['AlarmId'] = $request->alarmId;
        }
        if (!Utils::isUnset($request->channelId)) {
            $query['ChannelId'] = $request->channelId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDeviceAlarm',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDeviceAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDeviceAlarmRequest $request ModifyDeviceAlarmRequest
     *
     * @return ModifyDeviceAlarmResponse ModifyDeviceAlarmResponse
     */
    public function modifyDeviceAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDeviceAlarmWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDeviceCaptureRequest $request ModifyDeviceCaptureRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDeviceCaptureResponse ModifyDeviceCaptureResponse
     */
    public function modifyDeviceCaptureWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->image)) {
            $query['Image'] = $request->image;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->video)) {
            $query['Video'] = $request->video;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDeviceCapture',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDeviceCaptureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDeviceCaptureRequest $request ModifyDeviceCaptureRequest
     *
     * @return ModifyDeviceCaptureResponse ModifyDeviceCaptureResponse
     */
    public function modifyDeviceCapture($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDeviceCaptureWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDeviceChannelsRequest $request ModifyDeviceChannelsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDeviceChannelsResponse ModifyDeviceChannelsResponse
     */
    public function modifyDeviceChannelsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->channels)) {
            $query['Channels'] = $request->channels;
        }
        if (!Utils::isUnset($request->deviceStatus)) {
            $query['DeviceStatus'] = $request->deviceStatus;
        }
        if (!Utils::isUnset($request->dsn)) {
            $query['Dsn'] = $request->dsn;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDeviceChannels',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDeviceChannelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDeviceChannelsRequest $request ModifyDeviceChannelsRequest
     *
     * @return ModifyDeviceChannelsResponse ModifyDeviceChannelsResponse
     */
    public function modifyDeviceChannels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDeviceChannelsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDirectoryRequest $request ModifyDirectoryRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDirectoryResponse ModifyDirectoryResponse
     */
    public function modifyDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDirectory',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyDirectoryRequest $request ModifyDirectoryRequest
     *
     * @return ModifyDirectoryResponse ModifyDirectoryResponse
     */
    public function modifyDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDirectoryWithOptions($request, $runtime);
    }

    /**
     * @param ModifyGroupRequest $request ModifyGroupRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyGroupResponse ModifyGroupResponse
     */
    public function modifyGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callback)) {
            $query['Callback'] = $request->callback;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->enabled)) {
            $query['Enabled'] = $request->enabled;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->inProtocol)) {
            $query['InProtocol'] = $request->inProtocol;
        }
        if (!Utils::isUnset($request->lazyPull)) {
            $query['LazyPull'] = $request->lazyPull;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->outProtocol)) {
            $query['OutProtocol'] = $request->outProtocol;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->playDomain)) {
            $query['PlayDomain'] = $request->playDomain;
        }
        if (!Utils::isUnset($request->pushDomain)) {
            $query['PushDomain'] = $request->pushDomain;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyGroup',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyGroupRequest $request ModifyGroupRequest
     *
     * @return ModifyGroupResponse ModifyGroupResponse
     */
    public function modifyGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGroupWithOptions($request, $runtime);
    }

    /**
     * @param ModifyParentPlatformRequest $request ModifyParentPlatformRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyParentPlatformResponse ModifyParentPlatformResponse
     */
    public function modifyParentPlatformWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoStart)) {
            $query['AutoStart'] = $request->autoStart;
        }
        if (!Utils::isUnset($request->clientAuth)) {
            $query['ClientAuth'] = $request->clientAuth;
        }
        if (!Utils::isUnset($request->clientPassword)) {
            $query['ClientPassword'] = $request->clientPassword;
        }
        if (!Utils::isUnset($request->clientUsername)) {
            $query['ClientUsername'] = $request->clientUsername;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->gbId)) {
            $query['GbId'] = $request->gbId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyParentPlatform',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyParentPlatformResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyParentPlatformRequest $request ModifyParentPlatformRequest
     *
     * @return ModifyParentPlatformResponse ModifyParentPlatformResponse
     */
    public function modifyParentPlatform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyParentPlatformWithOptions($request, $runtime);
    }

    /**
     * @summary 修改云渲染实例限速带宽
     *  *
     * @param ModifyRenderingInstanceBandwidthRequest $request ModifyRenderingInstanceBandwidthRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyRenderingInstanceBandwidthResponse ModifyRenderingInstanceBandwidthResponse
     */
    public function modifyRenderingInstanceBandwidthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxEgressBandwidth)) {
            $query['MaxEgressBandwidth'] = $request->maxEgressBandwidth;
        }
        if (!Utils::isUnset($request->maxIngressBandwidth)) {
            $query['MaxIngressBandwidth'] = $request->maxIngressBandwidth;
        }
        if (!Utils::isUnset($request->renderingInstanceId)) {
            $query['RenderingInstanceId'] = $request->renderingInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyRenderingInstanceBandwidth',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyRenderingInstanceBandwidthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改云渲染实例限速带宽
     *  *
     * @param ModifyRenderingInstanceBandwidthRequest $request ModifyRenderingInstanceBandwidthRequest
     *
     * @return ModifyRenderingInstanceBandwidthResponse ModifyRenderingInstanceBandwidthResponse
     */
    public function modifyRenderingInstanceBandwidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRenderingInstanceBandwidthWithOptions($request, $runtime);
    }

    /**
     * @param ModifyTemplateRequest $request ModifyTemplateRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyTemplateResponse ModifyTemplateResponse
     */
    public function modifyTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->callback)) {
            $query['Callback'] = $request->callback;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->fileFormat)) {
            $query['FileFormat'] = $request->fileFormat;
        }
        if (!Utils::isUnset($request->flv)) {
            $query['Flv'] = $request->flv;
        }
        if (!Utils::isUnset($request->hlsM3u8)) {
            $query['HlsM3u8'] = $request->hlsM3u8;
        }
        if (!Utils::isUnset($request->hlsTs)) {
            $query['HlsTs'] = $request->hlsTs;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->jpgOnDemand)) {
            $query['JpgOnDemand'] = $request->jpgOnDemand;
        }
        if (!Utils::isUnset($request->jpgOverwrite)) {
            $query['JpgOverwrite'] = $request->jpgOverwrite;
        }
        if (!Utils::isUnset($request->jpgSequence)) {
            $query['JpgSequence'] = $request->jpgSequence;
        }
        if (!Utils::isUnset($request->mp4)) {
            $query['Mp4'] = $request->mp4;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ossBucket)) {
            $query['OssBucket'] = $request->ossBucket;
        }
        if (!Utils::isUnset($request->ossEndpoint)) {
            $query['OssEndpoint'] = $request->ossEndpoint;
        }
        if (!Utils::isUnset($request->ossFilePrefix)) {
            $query['OssFilePrefix'] = $request->ossFilePrefix;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->retention)) {
            $query['Retention'] = $request->retention;
        }
        if (!Utils::isUnset($request->transConfigsJSON)) {
            $query['TransConfigsJSON'] = $request->transConfigsJSON;
        }
        if (!Utils::isUnset($request->trigger)) {
            $query['Trigger'] = $request->trigger;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyTemplate',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyTemplateRequest $request ModifyTemplateRequest
     *
     * @return ModifyTemplateResponse ModifyTemplateResponse
     */
    public function modifyTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTemplateWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return OpenVsServiceResponse OpenVsServiceResponse
     */
    public function openVsServiceWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'OpenVsService',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OpenVsServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return OpenVsServiceResponse OpenVsServiceResponse
     */
    public function openVsService()
    {
        $runtime = new RuntimeOptions([]);

        return $this->openVsServiceWithOptions($runtime);
    }

    /**
     * @summary 预推文件到云渲染实例。
     *  *
     * @param PushFileRequest $request PushFileRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return PushFileResponse PushFileResponse
     */
    public function pushFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileId)) {
            $query['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->renderingInstanceId)) {
            $query['RenderingInstanceId'] = $request->renderingInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PushFile',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PushFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 预推文件到云渲染实例。
     *  *
     * @param PushFileRequest $request PushFileRequest
     *
     * @return PushFileResponse PushFileResponse
     */
    public function pushFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushFileWithOptions($request, $runtime);
    }

    /**
     * @summary 重启云渲染实例
     *  *
     * @param RebootRenderingInstanceRequest $request RebootRenderingInstanceRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return RebootRenderingInstanceResponse RebootRenderingInstanceResponse
     */
    public function rebootRenderingInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->renderingInstanceId)) {
            $query['RenderingInstanceId'] = $request->renderingInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RebootRenderingInstance',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RebootRenderingInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 重启云渲染实例
     *  *
     * @param RebootRenderingInstanceRequest $request RebootRenderingInstanceRequest
     *
     * @return RebootRenderingInstanceResponse RebootRenderingInstanceResponse
     */
    public function rebootRenderingInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebootRenderingInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 释放云渲染实例
     *  *
     * @param ReleaseRenderingInstanceRequest $request ReleaseRenderingInstanceRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleaseRenderingInstanceResponse ReleaseRenderingInstanceResponse
     */
    public function releaseRenderingInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->renderingInstanceId)) {
            $query['RenderingInstanceId'] = $request->renderingInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseRenderingInstance',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseRenderingInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 释放云渲染实例
     *  *
     * @param ReleaseRenderingInstanceRequest $request ReleaseRenderingInstanceRequest
     *
     * @return ReleaseRenderingInstanceResponse ReleaseRenderingInstanceResponse
     */
    public function releaseRenderingInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseRenderingInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 续费云渲染资源实例
     *  *
     * @param RenewRenderingInstanceRequest $request RenewRenderingInstanceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return RenewRenderingInstanceResponse RenewRenderingInstanceResponse
     */
    public function renewRenderingInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->renderingInstanceId)) {
            $query['RenderingInstanceId'] = $request->renderingInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RenewRenderingInstance',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenewRenderingInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 续费云渲染资源实例
     *  *
     * @param RenewRenderingInstanceRequest $request RenewRenderingInstanceRequest
     *
     * @return RenewRenderingInstanceResponse RenewRenderingInstanceResponse
     */
    public function renewRenderingInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewRenderingInstanceWithOptions($request, $runtime);
    }

    /**
     * @param ResumeVsStreamRequest $request ResumeVsStreamRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ResumeVsStreamResponse ResumeVsStreamResponse
     */
    public function resumeVsStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->controlStreamAction)) {
            $query['ControlStreamAction'] = $request->controlStreamAction;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->liveStreamType)) {
            $query['LiveStreamType'] = $request->liveStreamType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResumeVsStream',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResumeVsStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResumeVsStreamRequest $request ResumeVsStreamRequest
     *
     * @return ResumeVsStreamResponse ResumeVsStreamResponse
     */
    public function resumeVsStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeVsStreamWithOptions($request, $runtime);
    }

    /**
     * @summary 下发shell命令，同步响应。不适用于耗时命令。
     *  *
     * @param SendRenderingInstanceCommandsRequest $request SendRenderingInstanceCommandsRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return SendRenderingInstanceCommandsResponse SendRenderingInstanceCommandsResponse
     */
    public function sendRenderingInstanceCommandsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->renderingInstanceId)) {
            $query['RenderingInstanceId'] = $request->renderingInstanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->commands)) {
            $body['Commands'] = $request->commands;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SendRenderingInstanceCommands',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendRenderingInstanceCommandsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 下发shell命令，同步响应。不适用于耗时命令。
     *  *
     * @param SendRenderingInstanceCommandsRequest $request SendRenderingInstanceCommandsRequest
     *
     * @return SendRenderingInstanceCommandsResponse SendRenderingInstanceCommandsResponse
     */
    public function sendRenderingInstanceCommands($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendRenderingInstanceCommandsWithOptions($request, $runtime);
    }

    /**
     * @param SetPresetRequest $request SetPresetRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return SetPresetResponse SetPresetResponse
     */
    public function setPresetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->presetId)) {
            $query['PresetId'] = $request->presetId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetPreset',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetPresetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetPresetRequest $request SetPresetRequest
     *
     * @return SetPresetResponse SetPresetResponse
     */
    public function setPreset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setPresetWithOptions($request, $runtime);
    }

    /**
     * @param SetVsDomainCertificateRequest $request SetVsDomainCertificateRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return SetVsDomainCertificateResponse SetVsDomainCertificateResponse
     */
    public function setVsDomainCertificateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->certName)) {
            $query['CertName'] = $request->certName;
        }
        if (!Utils::isUnset($request->certType)) {
            $query['CertType'] = $request->certType;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->forceSet)) {
            $query['ForceSet'] = $request->forceSet;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->SSLPri)) {
            $query['SSLPri'] = $request->SSLPri;
        }
        if (!Utils::isUnset($request->SSLProtocol)) {
            $query['SSLProtocol'] = $request->SSLProtocol;
        }
        if (!Utils::isUnset($request->SSLPub)) {
            $query['SSLPub'] = $request->SSLPub;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetVsDomainCertificate',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetVsDomainCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetVsDomainCertificateRequest $request SetVsDomainCertificateRequest
     *
     * @return SetVsDomainCertificateResponse SetVsDomainCertificateResponse
     */
    public function setVsDomainCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setVsDomainCertificateWithOptions($request, $runtime);
    }

    /**
     * @param SetVsStreamsNotifyUrlConfigRequest $request SetVsStreamsNotifyUrlConfigRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return SetVsStreamsNotifyUrlConfigResponse SetVsStreamsNotifyUrlConfigResponse
     */
    public function setVsStreamsNotifyUrlConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authKey)) {
            $query['AuthKey'] = $request->authKey;
        }
        if (!Utils::isUnset($request->authType)) {
            $query['AuthType'] = $request->authType;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->notifyUrl)) {
            $query['NotifyUrl'] = $request->notifyUrl;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetVsStreamsNotifyUrlConfig',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetVsStreamsNotifyUrlConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetVsStreamsNotifyUrlConfigRequest $request SetVsStreamsNotifyUrlConfigRequest
     *
     * @return SetVsStreamsNotifyUrlConfigResponse SetVsStreamsNotifyUrlConfigResponse
     */
    public function setVsStreamsNotifyUrlConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setVsStreamsNotifyUrlConfigWithOptions($request, $runtime);
    }

    /**
     * @param StartDeviceRequest $request StartDeviceRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return StartDeviceResponse StartDeviceResponse
     */
    public function startDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartDevice',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartDeviceRequest $request StartDeviceRequest
     *
     * @return StartDeviceResponse StartDeviceResponse
     */
    public function startDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDeviceWithOptions($request, $runtime);
    }

    /**
     * @param StartParentPlatformRequest $request StartParentPlatformRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return StartParentPlatformResponse StartParentPlatformResponse
     */
    public function startParentPlatformWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartParentPlatform',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartParentPlatformResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartParentPlatformRequest $request StartParentPlatformRequest
     *
     * @return StartParentPlatformResponse StartParentPlatformResponse
     */
    public function startParentPlatform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startParentPlatformWithOptions($request, $runtime);
    }

    /**
     * @param StartPublishStreamRequest $request StartPublishStreamRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return StartPublishStreamResponse StartPublishStreamResponse
     */
    public function startPublishStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->publishUrl)) {
            $query['PublishUrl'] = $request->publishUrl;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartPublishStream',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartPublishStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartPublishStreamRequest $request StartPublishStreamRequest
     *
     * @return StartPublishStreamResponse StartPublishStreamResponse
     */
    public function startPublishStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startPublishStreamWithOptions($request, $runtime);
    }

    /**
     * @param StartRecordStreamRequest $request StartRecordStreamRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return StartRecordStreamResponse StartRecordStreamResponse
     */
    public function startRecordStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->app)) {
            $query['App'] = $request->app;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->playDomain)) {
            $query['PlayDomain'] = $request->playDomain;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartRecordStream',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartRecordStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartRecordStreamRequest $request StartRecordStreamRequest
     *
     * @return StartRecordStreamResponse StartRecordStreamResponse
     */
    public function startRecordStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startRecordStreamWithOptions($request, $runtime);
    }

    /**
     * @param StartStreamRequest $request StartStreamRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return StartStreamResponse StartStreamResponse
     */
    public function startStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartStream',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartStreamRequest $request StartStreamRequest
     *
     * @return StartStreamResponse StartStreamResponse
     */
    public function startStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startStreamWithOptions($request, $runtime);
    }

    /**
     * @param StartTransferStreamRequest $request StartTransferStreamRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return StartTransferStreamResponse StartTransferStreamResponse
     */
    public function startTransferStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->transcode)) {
            $query['Transcode'] = $request->transcode;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartTransferStream',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartTransferStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartTransferStreamRequest $request StartTransferStreamRequest
     *
     * @return StartTransferStreamResponse StartTransferStreamResponse
     */
    public function startTransferStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startTransferStreamWithOptions($request, $runtime);
    }

    /**
     * @param StopAdjustRequest $request StopAdjustRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return StopAdjustResponse StopAdjustResponse
     */
    public function stopAdjustWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->focus)) {
            $query['Focus'] = $request->focus;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->iris)) {
            $query['Iris'] = $request->iris;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopAdjust',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopAdjustResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopAdjustRequest $request StopAdjustRequest
     *
     * @return StopAdjustResponse StopAdjustResponse
     */
    public function stopAdjust($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopAdjustWithOptions($request, $runtime);
    }

    /**
     * @param StopDeviceRequest $request StopDeviceRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return StopDeviceResponse StopDeviceResponse
     */
    public function stopDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopDevice',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopDeviceRequest $request StopDeviceRequest
     *
     * @return StopDeviceResponse StopDeviceResponse
     */
    public function stopDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDeviceWithOptions($request, $runtime);
    }

    /**
     * @param StopMoveRequest $request StopMoveRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return StopMoveResponse StopMoveResponse
     */
    public function stopMoveWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->pan)) {
            $query['Pan'] = $request->pan;
        }
        if (!Utils::isUnset($request->tilt)) {
            $query['Tilt'] = $request->tilt;
        }
        if (!Utils::isUnset($request->zoom)) {
            $query['Zoom'] = $request->zoom;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopMove',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopMoveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopMoveRequest $request StopMoveRequest
     *
     * @return StopMoveResponse StopMoveResponse
     */
    public function stopMove($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopMoveWithOptions($request, $runtime);
    }

    /**
     * @param StopPublishStreamRequest $request StopPublishStreamRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return StopPublishStreamResponse StopPublishStreamResponse
     */
    public function stopPublishStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopPublishStream',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopPublishStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopPublishStreamRequest $request StopPublishStreamRequest
     *
     * @return StopPublishStreamResponse StopPublishStreamResponse
     */
    public function stopPublishStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopPublishStreamWithOptions($request, $runtime);
    }

    /**
     * @param StopRecordStreamRequest $request StopRecordStreamRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return StopRecordStreamResponse StopRecordStreamResponse
     */
    public function stopRecordStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->app)) {
            $query['App'] = $request->app;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->playDomain)) {
            $query['PlayDomain'] = $request->playDomain;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopRecordStream',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopRecordStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopRecordStreamRequest $request StopRecordStreamRequest
     *
     * @return StopRecordStreamResponse StopRecordStreamResponse
     */
    public function stopRecordStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopRecordStreamWithOptions($request, $runtime);
    }

    /**
     * @param StopStreamRequest $request StopStreamRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return StopStreamResponse StopStreamResponse
     */
    public function stopStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopStream',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopStreamRequest $request StopStreamRequest
     *
     * @return StopStreamResponse StopStreamResponse
     */
    public function stopStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopStreamWithOptions($request, $runtime);
    }

    /**
     * @param StopTransferStreamRequest $request StopTransferStreamRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return StopTransferStreamResponse StopTransferStreamResponse
     */
    public function stopTransferStreamWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->transcode)) {
            $query['Transcode'] = $request->transcode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopTransferStream',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopTransferStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopTransferStreamRequest $request StopTransferStreamRequest
     *
     * @return StopTransferStreamResponse StopTransferStreamResponse
     */
    public function stopTransferStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopTransferStreamWithOptions($request, $runtime);
    }

    /**
     * @param SyncCatalogsRequest $request SyncCatalogsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return SyncCatalogsResponse SyncCatalogsResponse
     */
    public function syncCatalogsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SyncCatalogs',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SyncCatalogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SyncCatalogsRequest $request SyncCatalogsRequest
     *
     * @return SyncCatalogsResponse SyncCatalogsResponse
     */
    public function syncCatalogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncCatalogsWithOptions($request, $runtime);
    }

    /**
     * @param UnbindDirectoryRequest $request UnbindDirectoryRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UnbindDirectoryResponse UnbindDirectoryResponse
     */
    public function unbindDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnbindDirectory',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnbindDirectoryRequest $request UnbindDirectoryRequest
     *
     * @return UnbindDirectoryResponse UnbindDirectoryResponse
     */
    public function unbindDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindDirectoryWithOptions($request, $runtime);
    }

    /**
     * @param UnbindParentPlatformDeviceRequest $request UnbindParentPlatformDeviceRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return UnbindParentPlatformDeviceResponse UnbindParentPlatformDeviceResponse
     */
    public function unbindParentPlatformDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->parentPlatformId)) {
            $query['ParentPlatformId'] = $request->parentPlatformId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnbindParentPlatformDevice',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindParentPlatformDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnbindParentPlatformDeviceRequest $request UnbindParentPlatformDeviceRequest
     *
     * @return UnbindParentPlatformDeviceResponse UnbindParentPlatformDeviceResponse
     */
    public function unbindParentPlatformDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindParentPlatformDeviceWithOptions($request, $runtime);
    }

    /**
     * @param UnbindPurchasedDeviceRequest $request UnbindPurchasedDeviceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UnbindPurchasedDeviceResponse UnbindPurchasedDeviceResponse
     */
    public function unbindPurchasedDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnbindPurchasedDevice',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindPurchasedDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnbindPurchasedDeviceRequest $request UnbindPurchasedDeviceRequest
     *
     * @return UnbindPurchasedDeviceResponse UnbindPurchasedDeviceResponse
     */
    public function unbindPurchasedDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindPurchasedDeviceWithOptions($request, $runtime);
    }

    /**
     * @param UnbindTemplateRequest $request UnbindTemplateRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UnbindTemplateResponse UnbindTemplateResponse
     */
    public function unbindTemplateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $query['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateType)) {
            $query['TemplateType'] = $request->templateType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnbindTemplate',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnbindTemplateRequest $request UnbindTemplateRequest
     *
     * @return UnbindTemplateResponse UnbindTemplateResponse
     */
    public function unbindTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindTemplateWithOptions($request, $runtime);
    }

    /**
     * @summary 卸载云应用
     *  *
     * @param UninstallCloudAppRequest $request UninstallCloudAppRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UninstallCloudAppResponse UninstallCloudAppResponse
     */
    public function uninstallCloudAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->renderingInstanceId)) {
            $query['RenderingInstanceId'] = $request->renderingInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UninstallCloudApp',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UninstallCloudAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 卸载云应用
     *  *
     * @param UninstallCloudAppRequest $request UninstallCloudAppRequest
     *
     * @return UninstallCloudAppResponse UninstallCloudAppResponse
     */
    public function uninstallCloudApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uninstallCloudAppWithOptions($request, $runtime);
    }

    /**
     * @param UnlockDeviceRequest $request UnlockDeviceRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return UnlockDeviceResponse UnlockDeviceResponse
     */
    public function unlockDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnlockDevice',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnlockDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UnlockDeviceRequest $request UnlockDeviceRequest
     *
     * @return UnlockDeviceResponse UnlockDeviceResponse
     */
    public function unlockDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unlockDeviceWithOptions($request, $runtime);
    }

    /**
     * @summary 更新云应用信息
     *  *
     * @param UpdateCloudAppInfoRequest $request UpdateCloudAppInfoRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateCloudAppInfoResponse UpdateCloudAppInfoResponse
     */
    public function updateCloudAppInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateCloudAppInfo',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateCloudAppInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新云应用信息
     *  *
     * @param UpdateCloudAppInfoRequest $request UpdateCloudAppInfoRequest
     *
     * @return UpdateCloudAppInfoResponse UpdateCloudAppInfoResponse
     */
    public function updateCloudAppInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCloudAppInfoWithOptions($request, $runtime);
    }

    /**
     * @param UpdateClusterRequest $request UpdateClusterRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateClusterResponse UpdateClusterResponse
     */
    public function updateClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->effectiveTime)) {
            $query['EffectiveTime'] = $request->effectiveTime;
        }
        if (!Utils::isUnset($request->internalPorts)) {
            $query['InternalPorts'] = $request->internalPorts;
        }
        if (!Utils::isUnset($request->maintainTime)) {
            $query['MaintainTime'] = $request->maintainTime;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateCluster',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateClusterRequest $request UpdateClusterRequest
     *
     * @return UpdateClusterResponse UpdateClusterResponse
     */
    public function updateCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateClusterWithOptions($request, $runtime);
    }

    /**
     * @summary 更新文件信息。
     *  *
     * @param UpdateFileInfoRequest $request UpdateFileInfoRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateFileInfoResponse UpdateFileInfoResponse
     */
    public function updateFileInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->fileId)) {
            $query['FileId'] = $request->fileId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateFileInfo',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateFileInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新文件信息。
     *  *
     * @param UpdateFileInfoRequest $request UpdateFileInfoRequest
     *
     * @return UpdateFileInfoResponse UpdateFileInfoResponse
     */
    public function updateFileInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFileInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 更新云渲染实例配置参数
     *  *
     * @param UpdateRenderingInstanceConfigurationRequest $tmpReq  UpdateRenderingInstanceConfigurationRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateRenderingInstanceConfigurationResponse UpdateRenderingInstanceConfigurationResponse
     */
    public function updateRenderingInstanceConfigurationWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateRenderingInstanceConfigurationShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->configuration)) {
            $request->configurationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->configuration, 'Configuration', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->renderingInstanceId)) {
            $query['RenderingInstanceId'] = $request->renderingInstanceId;
        }
        $body = [];
        if (!Utils::isUnset($request->configurationShrink)) {
            $body['Configuration'] = $request->configurationShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateRenderingInstanceConfiguration',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateRenderingInstanceConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新云渲染实例配置参数
     *  *
     * @param UpdateRenderingInstanceConfigurationRequest $request UpdateRenderingInstanceConfigurationRequest
     *
     * @return UpdateRenderingInstanceConfigurationResponse UpdateRenderingInstanceConfigurationResponse
     */
    public function updateRenderingInstanceConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRenderingInstanceConfigurationWithOptions($request, $runtime);
    }

    /**
     * @param UpdateVsPullStreamInfoConfigRequest $request UpdateVsPullStreamInfoConfigRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateVsPullStreamInfoConfigResponse UpdateVsPullStreamInfoConfigResponse
     */
    public function updateVsPullStreamInfoConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->always)) {
            $query['Always'] = $request->always;
        }
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->sourceUrl)) {
            $query['SourceUrl'] = $request->sourceUrl;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->streamName)) {
            $query['StreamName'] = $request->streamName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateVsPullStreamInfoConfig',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateVsPullStreamInfoConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateVsPullStreamInfoConfigRequest $request UpdateVsPullStreamInfoConfigRequest
     *
     * @return UpdateVsPullStreamInfoConfigResponse UpdateVsPullStreamInfoConfigResponse
     */
    public function updateVsPullStreamInfoConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVsPullStreamInfoConfigWithOptions($request, $runtime);
    }

    /**
     * @summary 应用上架
     *  *
     * @param UploadCloudAppRequest $request UploadCloudAppRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UploadCloudAppResponse UploadCloudAppResponse
     */
    public function uploadCloudAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->appVersion)) {
            $query['AppVersion'] = $request->appVersion;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->downloadUrl)) {
            $query['DownloadUrl'] = $request->downloadUrl;
        }
        if (!Utils::isUnset($request->md5)) {
            $query['Md5'] = $request->md5;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadCloudApp',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadCloudAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 应用上架
     *  *
     * @param UploadCloudAppRequest $request UploadCloudAppRequest
     *
     * @return UploadCloudAppResponse UploadCloudAppResponse
     */
    public function uploadCloudApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadCloudAppWithOptions($request, $runtime);
    }

    /**
     * @summary 文件上传
     *  *
     * @param UploadFileRequest $request UploadFileRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return UploadFileResponse UploadFileResponse
     */
    public function uploadFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->md5)) {
            $query['Md5'] = $request->md5;
        }
        if (!Utils::isUnset($request->originUrl)) {
            $query['OriginUrl'] = $request->originUrl;
        }
        if (!Utils::isUnset($request->targetPath)) {
            $query['TargetPath'] = $request->targetPath;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadFile',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 文件上传
     *  *
     * @param UploadFileRequest $request UploadFileRequest
     *
     * @return UploadFileResponse UploadFileResponse
     */
    public function uploadFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadFileWithOptions($request, $runtime);
    }

    /**
     * @summary 上传公钥，用于安全登陆鉴权。
     *  *
     * @param UploadPublicKeyRequest $request UploadPublicKeyRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UploadPublicKeyResponse UploadPublicKeyResponse
     */
    public function uploadPublicKeyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->content)) {
            $query['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->keyGroup)) {
            $query['KeyGroup'] = $request->keyGroup;
        }
        if (!Utils::isUnset($request->keyName)) {
            $query['KeyName'] = $request->keyName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadPublicKey',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadPublicKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 上传公钥，用于安全登陆鉴权。
     *  *
     * @param UploadPublicKeyRequest $request UploadPublicKeyRequest
     *
     * @return UploadPublicKeyResponse UploadPublicKeyResponse
     */
    public function uploadPublicKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadPublicKeyWithOptions($request, $runtime);
    }

    /**
     * @param VerifyVsDomainOwnerRequest $request VerifyVsDomainOwnerRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return VerifyVsDomainOwnerResponse VerifyVsDomainOwnerResponse
     */
    public function verifyVsDomainOwnerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->verifyType)) {
            $query['VerifyType'] = $request->verifyType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifyVsDomainOwner',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyVsDomainOwnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param VerifyVsDomainOwnerRequest $request VerifyVsDomainOwnerRequest
     *
     * @return VerifyVsDomainOwnerResponse VerifyVsDomainOwnerResponse
     */
    public function verifyVsDomainOwner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyVsDomainOwnerWithOptions($request, $runtime);
    }
}
