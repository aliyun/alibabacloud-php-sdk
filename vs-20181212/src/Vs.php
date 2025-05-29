<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Vs\V20181212\Models\AddVsPullStreamInfoConfigRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\AddVsPullStreamInfoConfigResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\AssociateRenderingProjectInstancesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\AssociateRenderingProjectInstancesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\AssociateRenderingProjectInstancesShrinkRequest;
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
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateRenderingDataPackageRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateRenderingDataPackageResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateRenderingInstanceGatewayRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateRenderingInstanceGatewayResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateRenderingInstanceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateRenderingInstanceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateRenderingInstanceShrinkRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateRenderingProjectRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateRenderingProjectResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateRenderingProjectShrinkRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateStreamSnapshotRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateStreamSnapshotResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateTemplateRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateTemplateResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteCloudAppRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteCloudAppResponse;
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
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteRenderingInstanceGatewayRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteRenderingInstanceGatewayResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteRenderingInstanceSettingsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteRenderingInstanceSettingsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteRenderingInstanceSettingsShrinkRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteRenderingProjectRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteRenderingProjectResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteTemplateRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteTemplateResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteVsPullStreamInfoConfigRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteVsPullStreamInfoConfigResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteVsStreamsNotifyUrlConfigRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteVsStreamsNotifyUrlConfigResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeAccountStatRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeAccountStatResponse;
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
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingInstanceSettingsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingInstanceSettingsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingInstanceSettingsShrinkRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingSessionRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingSessionResponse;
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
use AlibabaCloud\SDK\Vs\V20181212\Models\DisassociateRenderingProjectInstancesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DisassociateRenderingProjectInstancesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DisassociateRenderingProjectInstancesShrinkRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ForbidVsStreamRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ForbidVsStreamResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\GetRenderingInstanceStreamingInfoRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\GetRenderingInstanceStreamingInfoResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\GetRenderingProjectInstanceStateMetricsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\GetRenderingProjectInstanceStateMetricsResponse;
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
use AlibabaCloud\SDK\Vs\V20181212\Models\ListRenderingDataPackagesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListRenderingDataPackagesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListRenderingInstanceGatewayRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListRenderingInstanceGatewayResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListRenderingInstancesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListRenderingInstancesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListRenderingProjectInstancesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListRenderingProjectInstancesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListRenderingProjectsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListRenderingProjectsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListRenderingSessionsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListRenderingSessionsResponse;
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
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyRenderingInstanceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyRenderingInstanceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyTemplateRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyTemplateResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\OpenVsServiceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\PushFileRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\PushFileResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\RebootRenderingInstanceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\RebootRenderingInstanceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\RecoverRenderingDataPackageRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\RecoverRenderingDataPackageResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\RefreshRenderingInstanceStreamingRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\RefreshRenderingInstanceStreamingResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\RefreshRenderingInstanceStreamingShrinkRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ReleaseRenderingDataPackageRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ReleaseRenderingDataPackageResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ReleaseRenderingInstanceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ReleaseRenderingInstanceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\RenewRenderingInstanceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\RenewRenderingInstanceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ResetRenderingInstanceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ResetRenderingInstanceResponse;
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
use AlibabaCloud\SDK\Vs\V20181212\Models\StartRenderingSessionRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\StartRenderingSessionResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\StartRenderingSessionShrinkRequest;
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
use AlibabaCloud\SDK\Vs\V20181212\Models\StopRenderingSessionRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\StopRenderingSessionResponse;
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
use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateFileInfoRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateFileInfoResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateRenderingInstanceConfigurationRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateRenderingInstanceConfigurationResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateRenderingInstanceConfigurationShrinkRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateRenderingInstanceSettingsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateRenderingInstanceSettingsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateRenderingInstanceSettingsShrinkRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateRenderingProjectRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateRenderingProjectResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateRenderingProjectShrinkRequest;
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
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Vs extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule = 'regional';
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param request - AddVsPullStreamInfoConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddVsPullStreamInfoConfigResponse
     *
     * @param AddVsPullStreamInfoConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AddVsPullStreamInfoConfigResponse
     */
    public function addVsPullStreamInfoConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->always) {
            @$query['Always'] = $request->always;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->sourceUrl) {
            @$query['SourceUrl'] = $request->sourceUrl;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->streamName) {
            @$query['StreamName'] = $request->streamName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddVsPullStreamInfoConfig',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddVsPullStreamInfoConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - AddVsPullStreamInfoConfigRequest
     *
     * @returns AddVsPullStreamInfoConfigResponse
     *
     * @param AddVsPullStreamInfoConfigRequest $request
     *
     * @return AddVsPullStreamInfoConfigResponse
     */
    public function addVsPullStreamInfoConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addVsPullStreamInfoConfigWithOptions($request, $runtime);
    }

    /**
     * 云应用服务实例与项目进行关联。
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于将满足特定条件的实例与指定项目进行关联。
     *
     * @param tmpReq - AssociateRenderingProjectInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssociateRenderingProjectInstancesResponse
     *
     * @param AssociateRenderingProjectInstancesRequest $tmpReq
     * @param RuntimeOptions                            $runtime
     *
     * @return AssociateRenderingProjectInstancesResponse
     */
    public function associateRenderingProjectInstancesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AssociateRenderingProjectInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->renderingInstanceIds) {
            $request->renderingInstanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->renderingInstanceIds, 'RenderingInstanceIds', 'json');
        }

        $query = [];
        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->renderingInstanceIdsShrink) {
            @$query['RenderingInstanceIds'] = $request->renderingInstanceIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AssociateRenderingProjectInstances',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AssociateRenderingProjectInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 云应用服务实例与项目进行关联。
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于将满足特定条件的实例与指定项目进行关联。
     *
     * @param request - AssociateRenderingProjectInstancesRequest
     *
     * @returns AssociateRenderingProjectInstancesResponse
     *
     * @param AssociateRenderingProjectInstancesRequest $request
     *
     * @return AssociateRenderingProjectInstancesResponse
     */
    public function associateRenderingProjectInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateRenderingProjectInstancesWithOptions($request, $runtime);
    }

    /**
     * @param request - BatchBindDirectoriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchBindDirectoriesResponse
     *
     * @param BatchBindDirectoriesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return BatchBindDirectoriesResponse
     */
    public function batchBindDirectoriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchBindDirectories',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchBindDirectoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BatchBindDirectoriesRequest
     *
     * @returns BatchBindDirectoriesResponse
     *
     * @param BatchBindDirectoriesRequest $request
     *
     * @return BatchBindDirectoriesResponse
     */
    public function batchBindDirectories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchBindDirectoriesWithOptions($request, $runtime);
    }

    /**
     * @param request - BatchBindParentPlatformDevicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchBindParentPlatformDevicesResponse
     *
     * @param BatchBindParentPlatformDevicesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return BatchBindParentPlatformDevicesResponse
     */
    public function batchBindParentPlatformDevicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->parentPlatformId) {
            @$query['ParentPlatformId'] = $request->parentPlatformId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchBindParentPlatformDevices',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchBindParentPlatformDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BatchBindParentPlatformDevicesRequest
     *
     * @returns BatchBindParentPlatformDevicesResponse
     *
     * @param BatchBindParentPlatformDevicesRequest $request
     *
     * @return BatchBindParentPlatformDevicesResponse
     */
    public function batchBindParentPlatformDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchBindParentPlatformDevicesWithOptions($request, $runtime);
    }

    /**
     * @param request - BatchBindPurchasedDevicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchBindPurchasedDevicesResponse
     *
     * @param BatchBindPurchasedDevicesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return BatchBindPurchasedDevicesResponse
     */
    public function batchBindPurchasedDevicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchBindPurchasedDevices',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchBindPurchasedDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BatchBindPurchasedDevicesRequest
     *
     * @returns BatchBindPurchasedDevicesResponse
     *
     * @param BatchBindPurchasedDevicesRequest $request
     *
     * @return BatchBindPurchasedDevicesResponse
     */
    public function batchBindPurchasedDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchBindPurchasedDevicesWithOptions($request, $runtime);
    }

    /**
     * @param request - BatchBindTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchBindTemplateResponse
     *
     * @param BatchBindTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return BatchBindTemplateResponse
     */
    public function batchBindTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applyAll) {
            @$query['ApplyAll'] = $request->applyAll;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->replace) {
            @$query['Replace'] = $request->replace;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchBindTemplate',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchBindTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BatchBindTemplateRequest
     *
     * @returns BatchBindTemplateResponse
     *
     * @param BatchBindTemplateRequest $request
     *
     * @return BatchBindTemplateResponse
     */
    public function batchBindTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchBindTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - BatchBindTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchBindTemplatesResponse
     *
     * @param BatchBindTemplatesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return BatchBindTemplatesResponse
     */
    public function batchBindTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applyAll) {
            @$query['ApplyAll'] = $request->applyAll;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->replace) {
            @$query['Replace'] = $request->replace;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateType) {
            @$query['TemplateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchBindTemplates',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchBindTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BatchBindTemplatesRequest
     *
     * @returns BatchBindTemplatesResponse
     *
     * @param BatchBindTemplatesRequest $request
     *
     * @return BatchBindTemplatesResponse
     */
    public function batchBindTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchBindTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param request - BatchDeleteDevicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchDeleteDevicesResponse
     *
     * @param BatchDeleteDevicesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return BatchDeleteDevicesResponse
     */
    public function batchDeleteDevicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchDeleteDevices',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchDeleteDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BatchDeleteDevicesRequest
     *
     * @returns BatchDeleteDevicesResponse
     *
     * @param BatchDeleteDevicesRequest $request
     *
     * @return BatchDeleteDevicesResponse
     */
    public function batchDeleteDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteDevicesWithOptions($request, $runtime);
    }

    /**
     * @param request - BatchDeleteVsDomainConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchDeleteVsDomainConfigsResponse
     *
     * @param BatchDeleteVsDomainConfigsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return BatchDeleteVsDomainConfigsResponse
     */
    public function batchDeleteVsDomainConfigsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainNames) {
            @$query['DomainNames'] = $request->domainNames;
        }

        if (null !== $request->functionNames) {
            @$query['FunctionNames'] = $request->functionNames;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchDeleteVsDomainConfigs',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchDeleteVsDomainConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BatchDeleteVsDomainConfigsRequest
     *
     * @returns BatchDeleteVsDomainConfigsResponse
     *
     * @param BatchDeleteVsDomainConfigsRequest $request
     *
     * @return BatchDeleteVsDomainConfigsResponse
     */
    public function batchDeleteVsDomainConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchDeleteVsDomainConfigsWithOptions($request, $runtime);
    }

    /**
     * @param request - BatchForbidVsStreamRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchForbidVsStreamResponse
     *
     * @param BatchForbidVsStreamRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return BatchForbidVsStreamResponse
     */
    public function batchForbidVsStreamWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->channel) {
            @$query['Channel'] = $request->channel;
        }

        if (null !== $request->controlStreamAction) {
            @$query['ControlStreamAction'] = $request->controlStreamAction;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->liveStreamType) {
            @$query['LiveStreamType'] = $request->liveStreamType;
        }

        if (null !== $request->oneshot) {
            @$query['Oneshot'] = $request->oneshot;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resumeTime) {
            @$query['ResumeTime'] = $request->resumeTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchForbidVsStream',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchForbidVsStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BatchForbidVsStreamRequest
     *
     * @returns BatchForbidVsStreamResponse
     *
     * @param BatchForbidVsStreamRequest $request
     *
     * @return BatchForbidVsStreamResponse
     */
    public function batchForbidVsStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchForbidVsStreamWithOptions($request, $runtime);
    }

    /**
     * @param request - BatchResumeVsStreamRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchResumeVsStreamResponse
     *
     * @param BatchResumeVsStreamRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return BatchResumeVsStreamResponse
     */
    public function batchResumeVsStreamWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->channel) {
            @$query['Channel'] = $request->channel;
        }

        if (null !== $request->controlStreamAction) {
            @$query['ControlStreamAction'] = $request->controlStreamAction;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->liveStreamType) {
            @$query['LiveStreamType'] = $request->liveStreamType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchResumeVsStream',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchResumeVsStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BatchResumeVsStreamRequest
     *
     * @returns BatchResumeVsStreamResponse
     *
     * @param BatchResumeVsStreamRequest $request
     *
     * @return BatchResumeVsStreamResponse
     */
    public function batchResumeVsStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchResumeVsStreamWithOptions($request, $runtime);
    }

    /**
     * @param request - BatchSetVsDomainConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchSetVsDomainConfigsResponse
     *
     * @param BatchSetVsDomainConfigsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return BatchSetVsDomainConfigsResponse
     */
    public function batchSetVsDomainConfigsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainNames) {
            @$query['DomainNames'] = $request->domainNames;
        }

        if (null !== $request->functions) {
            @$query['Functions'] = $request->functions;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchSetVsDomainConfigs',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchSetVsDomainConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BatchSetVsDomainConfigsRequest
     *
     * @returns BatchSetVsDomainConfigsResponse
     *
     * @param BatchSetVsDomainConfigsRequest $request
     *
     * @return BatchSetVsDomainConfigsResponse
     */
    public function batchSetVsDomainConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchSetVsDomainConfigsWithOptions($request, $runtime);
    }

    /**
     * @param request - BatchStartDevicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchStartDevicesResponse
     *
     * @param BatchStartDevicesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return BatchStartDevicesResponse
     */
    public function batchStartDevicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchStartDevices',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchStartDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BatchStartDevicesRequest
     *
     * @returns BatchStartDevicesResponse
     *
     * @param BatchStartDevicesRequest $request
     *
     * @return BatchStartDevicesResponse
     */
    public function batchStartDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchStartDevicesWithOptions($request, $runtime);
    }

    /**
     * @param request - BatchStartStreamsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchStartStreamsResponse
     *
     * @param BatchStartStreamsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return BatchStartStreamsResponse
     */
    public function batchStartStreamsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchStartStreams',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchStartStreamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BatchStartStreamsRequest
     *
     * @returns BatchStartStreamsResponse
     *
     * @param BatchStartStreamsRequest $request
     *
     * @return BatchStartStreamsResponse
     */
    public function batchStartStreams($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchStartStreamsWithOptions($request, $runtime);
    }

    /**
     * @param request - BatchStopDevicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchStopDevicesResponse
     *
     * @param BatchStopDevicesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return BatchStopDevicesResponse
     */
    public function batchStopDevicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchStopDevices',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchStopDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BatchStopDevicesRequest
     *
     * @returns BatchStopDevicesResponse
     *
     * @param BatchStopDevicesRequest $request
     *
     * @return BatchStopDevicesResponse
     */
    public function batchStopDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchStopDevicesWithOptions($request, $runtime);
    }

    /**
     * @param request - BatchStopStreamsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchStopStreamsResponse
     *
     * @param BatchStopStreamsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return BatchStopStreamsResponse
     */
    public function batchStopStreamsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchStopStreams',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchStopStreamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BatchStopStreamsRequest
     *
     * @returns BatchStopStreamsResponse
     *
     * @param BatchStopStreamsRequest $request
     *
     * @return BatchStopStreamsResponse
     */
    public function batchStopStreams($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchStopStreamsWithOptions($request, $runtime);
    }

    /**
     * @param request - BatchUnbindDirectoriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchUnbindDirectoriesResponse
     *
     * @param BatchUnbindDirectoriesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return BatchUnbindDirectoriesResponse
     */
    public function batchUnbindDirectoriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchUnbindDirectories',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchUnbindDirectoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BatchUnbindDirectoriesRequest
     *
     * @returns BatchUnbindDirectoriesResponse
     *
     * @param BatchUnbindDirectoriesRequest $request
     *
     * @return BatchUnbindDirectoriesResponse
     */
    public function batchUnbindDirectories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchUnbindDirectoriesWithOptions($request, $runtime);
    }

    /**
     * @param request - BatchUnbindParentPlatformDevicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchUnbindParentPlatformDevicesResponse
     *
     * @param BatchUnbindParentPlatformDevicesRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return BatchUnbindParentPlatformDevicesResponse
     */
    public function batchUnbindParentPlatformDevicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->parentPlatformId) {
            @$query['ParentPlatformId'] = $request->parentPlatformId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchUnbindParentPlatformDevices',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchUnbindParentPlatformDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BatchUnbindParentPlatformDevicesRequest
     *
     * @returns BatchUnbindParentPlatformDevicesResponse
     *
     * @param BatchUnbindParentPlatformDevicesRequest $request
     *
     * @return BatchUnbindParentPlatformDevicesResponse
     */
    public function batchUnbindParentPlatformDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchUnbindParentPlatformDevicesWithOptions($request, $runtime);
    }

    /**
     * @param request - BatchUnbindPurchasedDevicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchUnbindPurchasedDevicesResponse
     *
     * @param BatchUnbindPurchasedDevicesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return BatchUnbindPurchasedDevicesResponse
     */
    public function batchUnbindPurchasedDevicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchUnbindPurchasedDevices',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchUnbindPurchasedDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BatchUnbindPurchasedDevicesRequest
     *
     * @returns BatchUnbindPurchasedDevicesResponse
     *
     * @param BatchUnbindPurchasedDevicesRequest $request
     *
     * @return BatchUnbindPurchasedDevicesResponse
     */
    public function batchUnbindPurchasedDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchUnbindPurchasedDevicesWithOptions($request, $runtime);
    }

    /**
     * @param request - BatchUnbindTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchUnbindTemplateResponse
     *
     * @param BatchUnbindTemplateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return BatchUnbindTemplateResponse
     */
    public function batchUnbindTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateType) {
            @$query['TemplateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchUnbindTemplate',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchUnbindTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BatchUnbindTemplateRequest
     *
     * @returns BatchUnbindTemplateResponse
     *
     * @param BatchUnbindTemplateRequest $request
     *
     * @return BatchUnbindTemplateResponse
     */
    public function batchUnbindTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchUnbindTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - BatchUnbindTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchUnbindTemplatesResponse
     *
     * @param BatchUnbindTemplatesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return BatchUnbindTemplatesResponse
     */
    public function batchUnbindTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateType) {
            @$query['TemplateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchUnbindTemplates',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchUnbindTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BatchUnbindTemplatesRequest
     *
     * @returns BatchUnbindTemplatesResponse
     *
     * @param BatchUnbindTemplatesRequest $request
     *
     * @return BatchUnbindTemplatesResponse
     */
    public function batchUnbindTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchUnbindTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param request - BindDirectoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindDirectoryResponse
     *
     * @param BindDirectoryRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return BindDirectoryResponse
     */
    public function bindDirectoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindDirectory',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BindDirectoryRequest
     *
     * @returns BindDirectoryResponse
     *
     * @param BindDirectoryRequest $request
     *
     * @return BindDirectoryResponse
     */
    public function bindDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindDirectoryWithOptions($request, $runtime);
    }

    /**
     * @param request - BindParentPlatformDeviceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindParentPlatformDeviceResponse
     *
     * @param BindParentPlatformDeviceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return BindParentPlatformDeviceResponse
     */
    public function bindParentPlatformDeviceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->parentPlatformId) {
            @$query['ParentPlatformId'] = $request->parentPlatformId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindParentPlatformDevice',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindParentPlatformDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BindParentPlatformDeviceRequest
     *
     * @returns BindParentPlatformDeviceResponse
     *
     * @param BindParentPlatformDeviceRequest $request
     *
     * @return BindParentPlatformDeviceResponse
     */
    public function bindParentPlatformDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindParentPlatformDeviceWithOptions($request, $runtime);
    }

    /**
     * @param request - BindPurchasedDeviceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindPurchasedDeviceResponse
     *
     * @param BindPurchasedDeviceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return BindPurchasedDeviceResponse
     */
    public function bindPurchasedDeviceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindPurchasedDevice',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindPurchasedDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BindPurchasedDeviceRequest
     *
     * @returns BindPurchasedDeviceResponse
     *
     * @param BindPurchasedDeviceRequest $request
     *
     * @return BindPurchasedDeviceResponse
     */
    public function bindPurchasedDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindPurchasedDeviceWithOptions($request, $runtime);
    }

    /**
     * @param request - BindTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindTemplateResponse
     *
     * @param BindTemplateRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return BindTemplateResponse
     */
    public function bindTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->applyAll) {
            @$query['ApplyAll'] = $request->applyAll;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->replace) {
            @$query['Replace'] = $request->replace;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateType) {
            @$query['TemplateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindTemplate',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - BindTemplateRequest
     *
     * @returns BindTemplateResponse
     *
     * @param BindTemplateRequest $request
     *
     * @return BindTemplateResponse
     */
    public function bindTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - ContinuousAdjustRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ContinuousAdjustResponse
     *
     * @param ContinuousAdjustRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ContinuousAdjustResponse
     */
    public function continuousAdjustWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->focus) {
            @$query['Focus'] = $request->focus;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->iris) {
            @$query['Iris'] = $request->iris;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ContinuousAdjust',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ContinuousAdjustResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ContinuousAdjustRequest
     *
     * @returns ContinuousAdjustResponse
     *
     * @param ContinuousAdjustRequest $request
     *
     * @return ContinuousAdjustResponse
     */
    public function continuousAdjust($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->continuousAdjustWithOptions($request, $runtime);
    }

    /**
     * @param request - ContinuousMoveRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ContinuousMoveResponse
     *
     * @param ContinuousMoveRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ContinuousMoveResponse
     */
    public function continuousMoveWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pan) {
            @$query['Pan'] = $request->pan;
        }

        if (null !== $request->tilt) {
            @$query['Tilt'] = $request->tilt;
        }

        if (null !== $request->zoom) {
            @$query['Zoom'] = $request->zoom;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ContinuousMove',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ContinuousMoveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ContinuousMoveRequest
     *
     * @returns ContinuousMoveResponse
     *
     * @param ContinuousMoveRequest $request
     *
     * @return ContinuousMoveResponse
     */
    public function continuousMove($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->continuousMoveWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateDeviceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDeviceResponse
     *
     * @param CreateDeviceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateDeviceResponse
     */
    public function createDeviceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alarmMethod) {
            @$query['AlarmMethod'] = $request->alarmMethod;
        }

        if (null !== $request->autoDirectory) {
            @$query['AutoDirectory'] = $request->autoDirectory;
        }

        if (null !== $request->autoPos) {
            @$query['AutoPos'] = $request->autoPos;
        }

        if (null !== $request->autoStart) {
            @$query['AutoStart'] = $request->autoStart;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->dsn) {
            @$query['Dsn'] = $request->dsn;
        }

        if (null !== $request->gbId) {
            @$query['GbId'] = $request->gbId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->latitude) {
            @$query['Latitude'] = $request->latitude;
        }

        if (null !== $request->longitude) {
            @$query['Longitude'] = $request->longitude;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->params) {
            @$query['Params'] = $request->params;
        }

        if (null !== $request->parentId) {
            @$query['ParentId'] = $request->parentId;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        if (null !== $request->posInterval) {
            @$query['PosInterval'] = $request->posInterval;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        if (null !== $request->username) {
            @$query['Username'] = $request->username;
        }

        if (null !== $request->vendor) {
            @$query['Vendor'] = $request->vendor;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDevice',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateDeviceRequest
     *
     * @returns CreateDeviceResponse
     *
     * @param CreateDeviceRequest $request
     *
     * @return CreateDeviceResponse
     */
    public function createDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDeviceWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateDeviceAlarmRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDeviceAlarmResponse
     *
     * @param CreateDeviceAlarmRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateDeviceAlarmResponse
     */
    public function createDeviceAlarmWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alarm) {
            @$query['Alarm'] = $request->alarm;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->expire) {
            @$query['Expire'] = $request->expire;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->objectType) {
            @$query['ObjectType'] = $request->objectType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->subAlarm) {
            @$query['SubAlarm'] = $request->subAlarm;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDeviceAlarm',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDeviceAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateDeviceAlarmRequest
     *
     * @returns CreateDeviceAlarmResponse
     *
     * @param CreateDeviceAlarmRequest $request
     *
     * @return CreateDeviceAlarmResponse
     */
    public function createDeviceAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDeviceAlarmWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateDirectoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDirectoryResponse
     *
     * @param CreateDirectoryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateDirectoryResponse
     */
    public function createDirectoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->parentId) {
            @$query['ParentId'] = $request->parentId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDirectory',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateDirectoryRequest
     *
     * @returns CreateDirectoryResponse
     *
     * @param CreateDirectoryRequest $request
     *
     * @return CreateDirectoryResponse
     */
    public function createDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDirectoryWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateGroupResponse
     *
     * @param CreateGroupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateGroupResponse
     */
    public function createGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->app) {
            @$query['App'] = $request->app;
        }

        if (null !== $request->callback) {
            @$query['Callback'] = $request->callback;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->inProtocol) {
            @$query['InProtocol'] = $request->inProtocol;
        }

        if (null !== $request->lazyPull) {
            @$query['LazyPull'] = $request->lazyPull;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->outProtocol) {
            @$query['OutProtocol'] = $request->outProtocol;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->playDomain) {
            @$query['PlayDomain'] = $request->playDomain;
        }

        if (null !== $request->pushDomain) {
            @$query['PushDomain'] = $request->pushDomain;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateGroup',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateGroupRequest
     *
     * @returns CreateGroupResponse
     *
     * @param CreateGroupRequest $request
     *
     * @return CreateGroupResponse
     */
    public function createGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createGroupWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateParentPlatformRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateParentPlatformResponse
     *
     * @param CreateParentPlatformRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateParentPlatformResponse
     */
    public function createParentPlatformWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoStart) {
            @$query['AutoStart'] = $request->autoStart;
        }

        if (null !== $request->clientAuth) {
            @$query['ClientAuth'] = $request->clientAuth;
        }

        if (null !== $request->clientPassword) {
            @$query['ClientPassword'] = $request->clientPassword;
        }

        if (null !== $request->clientUsername) {
            @$query['ClientUsername'] = $request->clientUsername;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->gbId) {
            @$query['GbId'] = $request->gbId;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        if (null !== $request->protocol) {
            @$query['Protocol'] = $request->protocol;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateParentPlatform',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateParentPlatformResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateParentPlatformRequest
     *
     * @returns CreateParentPlatformResponse
     *
     * @param CreateParentPlatformRequest $request
     *
     * @return CreateParentPlatformResponse
     */
    public function createParentPlatform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createParentPlatformWithOptions($request, $runtime);
    }

    /**
     * 创建云渲染数据包.
     *
     * @param request - CreateRenderingDataPackageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRenderingDataPackageResponse
     *
     * @param CreateRenderingDataPackageRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateRenderingDataPackageResponse
     */
    public function createRenderingDataPackageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->renderingInstanceId) {
            @$query['RenderingInstanceId'] = $request->renderingInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRenderingDataPackage',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRenderingDataPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建云渲染数据包.
     *
     * @param request - CreateRenderingDataPackageRequest
     *
     * @returns CreateRenderingDataPackageResponse
     *
     * @param CreateRenderingDataPackageRequest $request
     *
     * @return CreateRenderingDataPackageResponse
     */
    public function createRenderingDataPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRenderingDataPackageWithOptions($request, $runtime);
    }

    /**
     * 申请云渲染资源实例.
     *
     * @param tmpReq - CreateRenderingInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRenderingInstanceResponse
     *
     * @param CreateRenderingInstanceRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateRenderingInstanceResponse
     */
    public function createRenderingInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateRenderingInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->clientInfo) {
            $request->clientInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->clientInfo, 'ClientInfo', 'json');
        }

        $query = [];
        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->clientInfoShrink) {
            @$query['ClientInfo'] = $request->clientInfoShrink;
        }

        if (null !== $request->instanceBillingCycle) {
            @$query['InstanceBillingCycle'] = $request->instanceBillingCycle;
        }

        if (null !== $request->instanceChargeType) {
            @$query['InstanceChargeType'] = $request->instanceChargeType;
        }

        if (null !== $request->internetChargeType) {
            @$query['InternetChargeType'] = $request->internetChargeType;
        }

        if (null !== $request->internetMaxBandwidth) {
            @$query['InternetMaxBandwidth'] = $request->internetMaxBandwidth;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->renderingSpec) {
            @$query['RenderingSpec'] = $request->renderingSpec;
        }

        if (null !== $request->storageSize) {
            @$query['StorageSize'] = $request->storageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRenderingInstance',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRenderingInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 申请云渲染资源实例.
     *
     * @param request - CreateRenderingInstanceRequest
     *
     * @returns CreateRenderingInstanceResponse
     *
     * @param CreateRenderingInstanceRequest $request
     *
     * @return CreateRenderingInstanceResponse
     */
    public function createRenderingInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRenderingInstanceWithOptions($request, $runtime);
    }

    /**
     * 创建自定义网关.
     *
     * @param request - CreateRenderingInstanceGatewayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRenderingInstanceGatewayResponse
     *
     * @param CreateRenderingInstanceGatewayRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateRenderingInstanceGatewayResponse
     */
    public function createRenderingInstanceGatewayWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayInstanceId) {
            @$query['GatewayInstanceId'] = $request->gatewayInstanceId;
        }

        if (null !== $request->renderingInstanceId) {
            @$query['RenderingInstanceId'] = $request->renderingInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRenderingInstanceGateway',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRenderingInstanceGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建自定义网关.
     *
     * @param request - CreateRenderingInstanceGatewayRequest
     *
     * @returns CreateRenderingInstanceGatewayResponse
     *
     * @param CreateRenderingInstanceGatewayRequest $request
     *
     * @return CreateRenderingInstanceGatewayResponse
     */
    public function createRenderingInstanceGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRenderingInstanceGatewayWithOptions($request, $runtime);
    }

    /**
     * 创建一个新的云应用服务项目，并设置相关属性。
     *
     * @param tmpReq - CreateRenderingProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRenderingProjectResponse
     *
     * @param CreateRenderingProjectRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return CreateRenderingProjectResponse
     */
    public function createRenderingProjectWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateRenderingProjectShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sessionAttribs) {
            $request->sessionAttribsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sessionAttribs, 'SessionAttribs', 'json');
        }

        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->sessionAttribsShrink) {
            @$query['SessionAttribs'] = $request->sessionAttribsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRenderingProject',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRenderingProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建一个新的云应用服务项目，并设置相关属性。
     *
     * @param request - CreateRenderingProjectRequest
     *
     * @returns CreateRenderingProjectResponse
     *
     * @param CreateRenderingProjectRequest $request
     *
     * @return CreateRenderingProjectResponse
     */
    public function createRenderingProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRenderingProjectWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateStreamSnapshotRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateStreamSnapshotResponse
     *
     * @param CreateStreamSnapshotRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateStreamSnapshotResponse
     */
    public function createStreamSnapshotWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->location) {
            @$query['Location'] = $request->location;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateStreamSnapshot',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateStreamSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateStreamSnapshotRequest
     *
     * @returns CreateStreamSnapshotResponse
     *
     * @param CreateStreamSnapshotRequest $request
     *
     * @return CreateStreamSnapshotResponse
     */
    public function createStreamSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStreamSnapshotWithOptions($request, $runtime);
    }

    /**
     * @param request - CreateTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateTemplateResponse
     *
     * @param CreateTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateTemplateResponse
     */
    public function createTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callback) {
            @$query['Callback'] = $request->callback;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->fileFormat) {
            @$query['FileFormat'] = $request->fileFormat;
        }

        if (null !== $request->flv) {
            @$query['Flv'] = $request->flv;
        }

        if (null !== $request->hlsM3u8) {
            @$query['HlsM3u8'] = $request->hlsM3u8;
        }

        if (null !== $request->hlsTs) {
            @$query['HlsTs'] = $request->hlsTs;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->jpgOnDemand) {
            @$query['JpgOnDemand'] = $request->jpgOnDemand;
        }

        if (null !== $request->jpgOverwrite) {
            @$query['JpgOverwrite'] = $request->jpgOverwrite;
        }

        if (null !== $request->jpgSequence) {
            @$query['JpgSequence'] = $request->jpgSequence;
        }

        if (null !== $request->mp4) {
            @$query['Mp4'] = $request->mp4;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ossBucket) {
            @$query['OssBucket'] = $request->ossBucket;
        }

        if (null !== $request->ossEndpoint) {
            @$query['OssEndpoint'] = $request->ossEndpoint;
        }

        if (null !== $request->ossFilePrefix) {
            @$query['OssFilePrefix'] = $request->ossFilePrefix;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->retention) {
            @$query['Retention'] = $request->retention;
        }

        if (null !== $request->transConfigsJSON) {
            @$query['TransConfigsJSON'] = $request->transConfigsJSON;
        }

        if (null !== $request->trigger) {
            @$query['Trigger'] = $request->trigger;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateTemplate',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - CreateTemplateRequest
     *
     * @returns CreateTemplateResponse
     *
     * @param CreateTemplateRequest $request
     *
     * @return CreateTemplateResponse
     */
    public function createTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createTemplateWithOptions($request, $runtime);
    }

    /**
     * 删除云应用.
     *
     * @param request - DeleteCloudAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCloudAppResponse
     *
     * @param DeleteCloudAppRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteCloudAppResponse
     */
    public function deleteCloudAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCloudApp',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCloudAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除云应用.
     *
     * @param request - DeleteCloudAppRequest
     *
     * @returns DeleteCloudAppResponse
     *
     * @param DeleteCloudAppRequest $request
     *
     * @return DeleteCloudAppResponse
     */
    public function deleteCloudApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCloudAppWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteDeviceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDeviceResponse
     *
     * @param DeleteDeviceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteDeviceResponse
     */
    public function deleteDeviceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDevice',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteDeviceRequest
     *
     * @returns DeleteDeviceResponse
     *
     * @param DeleteDeviceRequest $request
     *
     * @return DeleteDeviceResponse
     */
    public function deleteDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDeviceWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteDirectoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDirectoryResponse
     *
     * @param DeleteDirectoryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteDirectoryResponse
     */
    public function deleteDirectoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDirectory',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteDirectoryRequest
     *
     * @returns DeleteDirectoryResponse
     *
     * @param DeleteDirectoryRequest $request
     *
     * @return DeleteDirectoryResponse
     */
    public function deleteDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDirectoryWithOptions($request, $runtime);
    }

    /**
     * 删除文件对象。
     *
     * @param request - DeleteFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFileResponse
     *
     * @param DeleteFileRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteFileResponse
     */
    public function deleteFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileId) {
            @$query['FileId'] = $request->fileId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteFile',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除文件对象。
     *
     * @param request - DeleteFileRequest
     *
     * @returns DeleteFileResponse
     *
     * @param DeleteFileRequest $request
     *
     * @return DeleteFileResponse
     */
    public function deleteFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFileWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteGroupResponse
     *
     * @param DeleteGroupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteGroupResponse
     */
    public function deleteGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteGroup',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteGroupRequest
     *
     * @returns DeleteGroupResponse
     *
     * @param DeleteGroupRequest $request
     *
     * @return DeleteGroupResponse
     */
    public function deleteGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteGroupWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteParentPlatformRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteParentPlatformResponse
     *
     * @param DeleteParentPlatformRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteParentPlatformResponse
     */
    public function deleteParentPlatformWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteParentPlatform',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteParentPlatformResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteParentPlatformRequest
     *
     * @returns DeleteParentPlatformResponse
     *
     * @param DeleteParentPlatformRequest $request
     *
     * @return DeleteParentPlatformResponse
     */
    public function deleteParentPlatform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteParentPlatformWithOptions($request, $runtime);
    }

    /**
     * @param request - DeletePresetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePresetResponse
     *
     * @param DeletePresetRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeletePresetResponse
     */
    public function deletePresetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->presetId) {
            @$query['PresetId'] = $request->presetId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePreset',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePresetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeletePresetRequest
     *
     * @returns DeletePresetResponse
     *
     * @param DeletePresetRequest $request
     *
     * @return DeletePresetResponse
     */
    public function deletePreset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePresetWithOptions($request, $runtime);
    }

    /**
     * 删除公钥信息.
     *
     * @param request - DeletePublicKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePublicKeyResponse
     *
     * @param DeletePublicKeyRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeletePublicKeyResponse
     */
    public function deletePublicKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyName) {
            @$query['KeyName'] = $request->keyName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePublicKey',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePublicKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除公钥信息.
     *
     * @param request - DeletePublicKeyRequest
     *
     * @returns DeletePublicKeyResponse
     *
     * @param DeletePublicKeyRequest $request
     *
     * @return DeletePublicKeyResponse
     */
    public function deletePublicKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePublicKeyWithOptions($request, $runtime);
    }

    /**
     * 删除云渲染实例配置参数.
     *
     * @param tmpReq - DeleteRenderingInstanceConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRenderingInstanceConfigurationResponse
     *
     * @param DeleteRenderingInstanceConfigurationRequest $tmpReq
     * @param RuntimeOptions                              $runtime
     *
     * @return DeleteRenderingInstanceConfigurationResponse
     */
    public function deleteRenderingInstanceConfigurationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteRenderingInstanceConfigurationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->configuration) {
            $request->configurationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->configuration, 'Configuration', 'json');
        }

        $query = [];
        if (null !== $request->renderingInstanceId) {
            @$query['RenderingInstanceId'] = $request->renderingInstanceId;
        }

        $body = [];
        if (null !== $request->configurationShrink) {
            @$body['Configuration'] = $request->configurationShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteRenderingInstanceConfiguration',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteRenderingInstanceConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除云渲染实例配置参数.
     *
     * @param request - DeleteRenderingInstanceConfigurationRequest
     *
     * @returns DeleteRenderingInstanceConfigurationResponse
     *
     * @param DeleteRenderingInstanceConfigurationRequest $request
     *
     * @return DeleteRenderingInstanceConfigurationResponse
     */
    public function deleteRenderingInstanceConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRenderingInstanceConfigurationWithOptions($request, $runtime);
    }

    /**
     * 删除自定义网关.
     *
     * @param request - DeleteRenderingInstanceGatewayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRenderingInstanceGatewayResponse
     *
     * @param DeleteRenderingInstanceGatewayRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteRenderingInstanceGatewayResponse
     */
    public function deleteRenderingInstanceGatewayWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->renderingInstanceId) {
            @$query['RenderingInstanceId'] = $request->renderingInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteRenderingInstanceGateway',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteRenderingInstanceGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除自定义网关.
     *
     * @param request - DeleteRenderingInstanceGatewayRequest
     *
     * @returns DeleteRenderingInstanceGatewayResponse
     *
     * @param DeleteRenderingInstanceGatewayRequest $request
     *
     * @return DeleteRenderingInstanceGatewayResponse
     */
    public function deleteRenderingInstanceGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRenderingInstanceGatewayWithOptions($request, $runtime);
    }

    /**
     * 清除实例设置.
     *
     * @param tmpReq - DeleteRenderingInstanceSettingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRenderingInstanceSettingsResponse
     *
     * @param DeleteRenderingInstanceSettingsRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return DeleteRenderingInstanceSettingsResponse
     */
    public function deleteRenderingInstanceSettingsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteRenderingInstanceSettingsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->attributeNames) {
            $request->attributeNamesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->attributeNames, 'AttributeNames', 'json');
        }

        $query = [];
        if (null !== $request->attributeNamesShrink) {
            @$query['AttributeNames'] = $request->attributeNamesShrink;
        }

        if (null !== $request->renderingInstanceId) {
            @$query['RenderingInstanceId'] = $request->renderingInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteRenderingInstanceSettings',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteRenderingInstanceSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 清除实例设置.
     *
     * @param request - DeleteRenderingInstanceSettingsRequest
     *
     * @returns DeleteRenderingInstanceSettingsResponse
     *
     * @param DeleteRenderingInstanceSettingsRequest $request
     *
     * @return DeleteRenderingInstanceSettingsResponse
     */
    public function deleteRenderingInstanceSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRenderingInstanceSettingsWithOptions($request, $runtime);
    }

    /**
     * 删除一个云应用服务项目，有在线会话等业务调度数据的项目不允许删除。
     *
     * @param request - DeleteRenderingProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteRenderingProjectResponse
     *
     * @param DeleteRenderingProjectRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteRenderingProjectResponse
     */
    public function deleteRenderingProjectWithOptions($request, $runtime)
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
            'action' => 'DeleteRenderingProject',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteRenderingProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除一个云应用服务项目，有在线会话等业务调度数据的项目不允许删除。
     *
     * @param request - DeleteRenderingProjectRequest
     *
     * @returns DeleteRenderingProjectResponse
     *
     * @param DeleteRenderingProjectRequest $request
     *
     * @return DeleteRenderingProjectResponse
     */
    public function deleteRenderingProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRenderingProjectWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
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
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteTemplate',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteTemplateRequest
     *
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
     * @param request - DeleteVsPullStreamInfoConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVsPullStreamInfoConfigResponse
     *
     * @param DeleteVsPullStreamInfoConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteVsPullStreamInfoConfigResponse
     */
    public function deleteVsPullStreamInfoConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->streamName) {
            @$query['StreamName'] = $request->streamName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteVsPullStreamInfoConfig',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteVsPullStreamInfoConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteVsPullStreamInfoConfigRequest
     *
     * @returns DeleteVsPullStreamInfoConfigResponse
     *
     * @param DeleteVsPullStreamInfoConfigRequest $request
     *
     * @return DeleteVsPullStreamInfoConfigResponse
     */
    public function deleteVsPullStreamInfoConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVsPullStreamInfoConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - DeleteVsStreamsNotifyUrlConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVsStreamsNotifyUrlConfigResponse
     *
     * @param DeleteVsStreamsNotifyUrlConfigRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteVsStreamsNotifyUrlConfigResponse
     */
    public function deleteVsStreamsNotifyUrlConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteVsStreamsNotifyUrlConfig',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteVsStreamsNotifyUrlConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteVsStreamsNotifyUrlConfigRequest
     *
     * @returns DeleteVsStreamsNotifyUrlConfigResponse
     *
     * @param DeleteVsStreamsNotifyUrlConfigRequest $request
     *
     * @return DeleteVsStreamsNotifyUrlConfigResponse
     */
    public function deleteVsStreamsNotifyUrlConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVsStreamsNotifyUrlConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeAccountStatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAccountStatResponse
     *
     * @param DescribeAccountStatRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeAccountStatResponse
     */
    public function describeAccountStatWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAccountStat',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAccountStatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeAccountStatRequest
     *
     * @returns DescribeAccountStatResponse
     *
     * @param DescribeAccountStatRequest $request
     *
     * @return DescribeAccountStatResponse
     */
    public function describeAccountStat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAccountStatWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDeviceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDeviceResponse
     *
     * @param DescribeDeviceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeDeviceResponse
     */
    public function describeDeviceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->includeDirectory) {
            @$query['IncludeDirectory'] = $request->includeDirectory;
        }

        if (null !== $request->includeStats) {
            @$query['IncludeStats'] = $request->includeStats;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDevice',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDeviceRequest
     *
     * @returns DescribeDeviceResponse
     *
     * @param DescribeDeviceRequest $request
     *
     * @return DescribeDeviceResponse
     */
    public function describeDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeviceWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDeviceChannelsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDeviceChannelsResponse
     *
     * @param DescribeDeviceChannelsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDeviceChannelsResponse
     */
    public function describeDeviceChannelsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDeviceChannels',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDeviceChannelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDeviceChannelsRequest
     *
     * @returns DescribeDeviceChannelsResponse
     *
     * @param DescribeDeviceChannelsRequest $request
     *
     * @return DescribeDeviceChannelsResponse
     */
    public function describeDeviceChannels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeviceChannelsWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDeviceGatewayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDeviceGatewayResponse
     *
     * @param DescribeDeviceGatewayRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDeviceGatewayResponse
     */
    public function describeDeviceGatewayWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientIp) {
            @$query['ClientIp'] = $request->clientIp;
        }

        if (null !== $request->expire) {
            @$query['Expire'] = $request->expire;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDeviceGateway',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDeviceGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDeviceGatewayRequest
     *
     * @returns DescribeDeviceGatewayResponse
     *
     * @param DescribeDeviceGatewayRequest $request
     *
     * @return DescribeDeviceGatewayResponse
     */
    public function describeDeviceGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeviceGatewayWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDeviceURLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDeviceURLResponse
     *
     * @param DescribeDeviceURLRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeDeviceURLResponse
     */
    public function describeDeviceURLWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->auth) {
            @$query['Auth'] = $request->auth;
        }

        if (null !== $request->expire) {
            @$query['Expire'] = $request->expire;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->mode) {
            @$query['Mode'] = $request->mode;
        }

        if (null !== $request->outProtocol) {
            @$query['OutProtocol'] = $request->outProtocol;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->stream) {
            @$query['Stream'] = $request->stream;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDeviceURL',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDeviceURLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDeviceURLRequest
     *
     * @returns DescribeDeviceURLResponse
     *
     * @param DescribeDeviceURLRequest $request
     *
     * @return DescribeDeviceURLResponse
     */
    public function describeDeviceURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeviceURLWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDevicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDevicesResponse
     *
     * @param DescribeDevicesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeDevicesResponse
     */
    public function describeDevicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->dsn) {
            @$query['Dsn'] = $request->dsn;
        }

        if (null !== $request->gbId) {
            @$query['GbId'] = $request->gbId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->includeDirectory) {
            @$query['IncludeDirectory'] = $request->includeDirectory;
        }

        if (null !== $request->includeStats) {
            @$query['IncludeStats'] = $request->includeStats;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->parentId) {
            @$query['ParentId'] = $request->parentId;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->sortDirection) {
            @$query['SortDirection'] = $request->sortDirection;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->vendor) {
            @$query['Vendor'] = $request->vendor;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDevices',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDevicesRequest
     *
     * @returns DescribeDevicesResponse
     *
     * @param DescribeDevicesRequest $request
     *
     * @return DescribeDevicesResponse
     */
    public function describeDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDevicesWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDirectoriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDirectoriesResponse
     *
     * @param DescribeDirectoriesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDirectoriesResponse
     */
    public function describeDirectoriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->noPagination) {
            @$query['NoPagination'] = $request->noPagination;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->parentId) {
            @$query['ParentId'] = $request->parentId;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->sortDirection) {
            @$query['SortDirection'] = $request->sortDirection;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDirectories',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDirectoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDirectoriesRequest
     *
     * @returns DescribeDirectoriesResponse
     *
     * @param DescribeDirectoriesRequest $request
     *
     * @return DescribeDirectoriesResponse
     */
    public function describeDirectories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDirectoriesWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeDirectoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDirectoryResponse
     *
     * @param DescribeDirectoryRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeDirectoryResponse
     */
    public function describeDirectoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDirectory',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeDirectoryRequest
     *
     * @returns DescribeDirectoryResponse
     *
     * @param DescribeDirectoryRequest $request
     *
     * @return DescribeDirectoryResponse
     */
    public function describeDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDirectoryWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGroupResponse
     *
     * @param DescribeGroupRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeGroupResponse
     */
    public function describeGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->includeStats) {
            @$query['IncludeStats'] = $request->includeStats;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGroup',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeGroupRequest
     *
     * @returns DescribeGroupResponse
     *
     * @param DescribeGroupRequest $request
     *
     * @return DescribeGroupResponse
     */
    public function describeGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGroupsResponse
     *
     * @param DescribeGroupsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeGroupsResponse
     */
    public function describeGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->inProtocol) {
            @$query['InProtocol'] = $request->inProtocol;
        }

        if (null !== $request->includeStats) {
            @$query['IncludeStats'] = $request->includeStats;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->sortDirection) {
            @$query['SortDirection'] = $request->sortDirection;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGroups',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeGroupsRequest
     *
     * @returns DescribeGroupsResponse
     *
     * @param DescribeGroupsRequest $request
     *
     * @return DescribeGroupsResponse
     */
    public function describeGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupsWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeParentPlatformRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeParentPlatformResponse
     *
     * @param DescribeParentPlatformRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeParentPlatformResponse
     */
    public function describeParentPlatformWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeParentPlatform',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeParentPlatformResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeParentPlatformRequest
     *
     * @returns DescribeParentPlatformResponse
     *
     * @param DescribeParentPlatformRequest $request
     *
     * @return DescribeParentPlatformResponse
     */
    public function describeParentPlatform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParentPlatformWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeParentPlatformDevicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeParentPlatformDevicesResponse
     *
     * @param DescribeParentPlatformDevicesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeParentPlatformDevicesResponse
     */
    public function describeParentPlatformDevicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->sortDirection) {
            @$query['SortDirection'] = $request->sortDirection;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeParentPlatformDevices',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeParentPlatformDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeParentPlatformDevicesRequest
     *
     * @returns DescribeParentPlatformDevicesResponse
     *
     * @param DescribeParentPlatformDevicesRequest $request
     *
     * @return DescribeParentPlatformDevicesResponse
     */
    public function describeParentPlatformDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParentPlatformDevicesWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeParentPlatformsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeParentPlatformsResponse
     *
     * @param DescribeParentPlatformsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeParentPlatformsResponse
     */
    public function describeParentPlatformsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gbId) {
            @$query['GbId'] = $request->gbId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->sortDirection) {
            @$query['SortDirection'] = $request->sortDirection;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeParentPlatforms',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeParentPlatformsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeParentPlatformsRequest
     *
     * @returns DescribeParentPlatformsResponse
     *
     * @param DescribeParentPlatformsRequest $request
     *
     * @return DescribeParentPlatformsResponse
     */
    public function describeParentPlatforms($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeParentPlatformsWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribePresetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePresetsResponse
     *
     * @param DescribePresetsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribePresetsResponse
     */
    public function describePresetsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePresets',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePresetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribePresetsRequest
     *
     * @returns DescribePresetsResponse
     *
     * @param DescribePresetsRequest $request
     *
     * @return DescribePresetsResponse
     */
    public function describePresets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePresetsWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribePublishStreamStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePublishStreamStatusResponse
     *
     * @param DescribePublishStreamStatusRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribePublishStreamStatusResponse
     */
    public function describePublishStreamStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePublishStreamStatus',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePublishStreamStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribePublishStreamStatusRequest
     *
     * @returns DescribePublishStreamStatusResponse
     *
     * @param DescribePublishStreamStatusRequest $request
     *
     * @return DescribePublishStreamStatusResponse
     */
    public function describePublishStreamStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePublishStreamStatusWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribePurchasedDeviceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePurchasedDeviceResponse
     *
     * @param DescribePurchasedDeviceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribePurchasedDeviceResponse
     */
    public function describePurchasedDeviceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePurchasedDevice',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePurchasedDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribePurchasedDeviceRequest
     *
     * @returns DescribePurchasedDeviceResponse
     *
     * @param DescribePurchasedDeviceRequest $request
     *
     * @return DescribePurchasedDeviceResponse
     */
    public function describePurchasedDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePurchasedDeviceWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribePurchasedDevicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePurchasedDevicesResponse
     *
     * @param DescribePurchasedDevicesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribePurchasedDevicesResponse
     */
    public function describePurchasedDevicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->sortDirection) {
            @$query['SortDirection'] = $request->sortDirection;
        }

        if (null !== $request->subType) {
            @$query['SubType'] = $request->subType;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->vendor) {
            @$query['Vendor'] = $request->vendor;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePurchasedDevices',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePurchasedDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribePurchasedDevicesRequest
     *
     * @returns DescribePurchasedDevicesResponse
     *
     * @param DescribePurchasedDevicesRequest $request
     *
     * @return DescribePurchasedDevicesResponse
     */
    public function describePurchasedDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePurchasedDevicesWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRecordsResponse
     *
     * @param DescribeRecordsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRecordsResponse
     */
    public function describeRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->privateBucket) {
            @$query['PrivateBucket'] = $request->privateBucket;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->sortDirection) {
            @$query['SortDirection'] = $request->sortDirection;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->streamId) {
            @$query['StreamId'] = $request->streamId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRecords',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeRecordsRequest
     *
     * @returns DescribeRecordsResponse
     *
     * @param DescribeRecordsRequest $request
     *
     * @return DescribeRecordsResponse
     */
    public function describeRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecordsWithOptions($request, $runtime);
    }

    /**
     * 查询云渲染实例详细信息。
     *
     * @param request - DescribeRenderingInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRenderingInstanceResponse
     *
     * @param DescribeRenderingInstanceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeRenderingInstanceResponse
     */
    public function describeRenderingInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRenderingInstance',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRenderingInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询云渲染实例详细信息。
     *
     * @param request - DescribeRenderingInstanceRequest
     *
     * @returns DescribeRenderingInstanceResponse
     *
     * @param DescribeRenderingInstanceRequest $request
     *
     * @return DescribeRenderingInstanceResponse
     */
    public function describeRenderingInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRenderingInstanceWithOptions($request, $runtime);
    }

    /**
     * 查询云渲染实例模块配置参数.
     *
     * @param tmpReq - DescribeRenderingInstanceConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRenderingInstanceConfigurationResponse
     *
     * @param DescribeRenderingInstanceConfigurationRequest $tmpReq
     * @param RuntimeOptions                                $runtime
     *
     * @return DescribeRenderingInstanceConfigurationResponse
     */
    public function describeRenderingInstanceConfigurationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeRenderingInstanceConfigurationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->configuration) {
            $request->configurationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->configuration, 'Configuration', 'json');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRenderingInstanceConfiguration',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRenderingInstanceConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询云渲染实例模块配置参数.
     *
     * @param request - DescribeRenderingInstanceConfigurationRequest
     *
     * @returns DescribeRenderingInstanceConfigurationResponse
     *
     * @param DescribeRenderingInstanceConfigurationRequest $request
     *
     * @return DescribeRenderingInstanceConfigurationResponse
     */
    public function describeRenderingInstanceConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRenderingInstanceConfigurationWithOptions($request, $runtime);
    }

    /**
     * 查询实例配置.
     *
     * @param tmpReq - DescribeRenderingInstanceSettingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRenderingInstanceSettingsResponse
     *
     * @param DescribeRenderingInstanceSettingsRequest $tmpReq
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeRenderingInstanceSettingsResponse
     */
    public function describeRenderingInstanceSettingsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeRenderingInstanceSettingsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->attributeNames) {
            $request->attributeNamesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->attributeNames, 'AttributeNames', 'json');
        }

        $query = [];
        if (null !== $request->attributeNamesShrink) {
            @$query['AttributeNames'] = $request->attributeNamesShrink;
        }

        if (null !== $request->renderingInstanceId) {
            @$query['RenderingInstanceId'] = $request->renderingInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRenderingInstanceSettings',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRenderingInstanceSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询实例配置.
     *
     * @param request - DescribeRenderingInstanceSettingsRequest
     *
     * @returns DescribeRenderingInstanceSettingsResponse
     *
     * @param DescribeRenderingInstanceSettingsRequest $request
     *
     * @return DescribeRenderingInstanceSettingsResponse
     */
    public function describeRenderingInstanceSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRenderingInstanceSettingsWithOptions($request, $runtime);
    }

    /**
     * 输出会话的详情信息，包含关联的实例、网络出口等信息。
     *
     * @param request - DescribeRenderingSessionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRenderingSessionResponse
     *
     * @param DescribeRenderingSessionRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeRenderingSessionResponse
     */
    public function describeRenderingSessionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRenderingSession',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRenderingSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 输出会话的详情信息，包含关联的实例、网络出口等信息。
     *
     * @param request - DescribeRenderingSessionRequest
     *
     * @returns DescribeRenderingSessionResponse
     *
     * @param DescribeRenderingSessionRequest $request
     *
     * @return DescribeRenderingSessionResponse
     */
    public function describeRenderingSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRenderingSessionWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeStreamRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeStreamResponse
     *
     * @param DescribeStreamRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeStreamResponse
     */
    public function describeStreamWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeStream',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeStreamRequest
     *
     * @returns DescribeStreamResponse
     *
     * @param DescribeStreamRequest $request
     *
     * @return DescribeStreamResponse
     */
    public function describeStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStreamWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeStreamURLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeStreamURLResponse
     *
     * @param DescribeStreamURLRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeStreamURLResponse
     */
    public function describeStreamURLWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->auth) {
            @$query['Auth'] = $request->auth;
        }

        if (null !== $request->authKey) {
            @$query['AuthKey'] = $request->authKey;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->expire) {
            @$query['Expire'] = $request->expire;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->outProtocol) {
            @$query['OutProtocol'] = $request->outProtocol;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->transcode) {
            @$query['Transcode'] = $request->transcode;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeStreamURL',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeStreamURLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeStreamURLRequest
     *
     * @returns DescribeStreamURLResponse
     *
     * @param DescribeStreamURLRequest $request
     *
     * @return DescribeStreamURLResponse
     */
    public function describeStreamURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStreamURLWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeStreamVodListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeStreamVodListResponse
     *
     * @param DescribeStreamVodListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeStreamVodListResponse
     */
    public function describeStreamVodListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeStreamVodList',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeStreamVodListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeStreamVodListRequest
     *
     * @returns DescribeStreamVodListResponse
     *
     * @param DescribeStreamVodListRequest $request
     *
     * @return DescribeStreamVodListResponse
     */
    public function describeStreamVodList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStreamVodListWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeStreamsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeStreamsResponse
     *
     * @param DescribeStreamsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeStreamsResponse
     */
    public function describeStreamsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->app) {
            @$query['App'] = $request->app;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->domain) {
            @$query['Domain'] = $request->domain;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->parentId) {
            @$query['ParentId'] = $request->parentId;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->sortDirection) {
            @$query['SortDirection'] = $request->sortDirection;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeStreams',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeStreamsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeStreamsRequest
     *
     * @returns DescribeStreamsResponse
     *
     * @param DescribeStreamsRequest $request
     *
     * @return DescribeStreamsResponse
     */
    public function describeStreams($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStreamsWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTemplateResponse
     *
     * @param DescribeTemplateRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeTemplateResponse
     */
    public function describeTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTemplate',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeTemplateRequest
     *
     * @returns DescribeTemplateResponse
     *
     * @param DescribeTemplateRequest $request
     *
     * @return DescribeTemplateResponse
     */
    public function describeTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTemplatesResponse
     *
     * @param DescribeTemplatesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeTemplatesResponse
     */
    public function describeTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->sortBy) {
            @$query['SortBy'] = $request->sortBy;
        }

        if (null !== $request->sortDirection) {
            @$query['SortDirection'] = $request->sortDirection;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTemplates',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeTemplatesRequest
     *
     * @returns DescribeTemplatesResponse
     *
     * @param DescribeTemplatesRequest $request
     *
     * @return DescribeTemplatesResponse
     */
    public function describeTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTemplatesWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeVodStreamURLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVodStreamURLResponse
     *
     * @param DescribeVodStreamURLRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeVodStreamURLResponse
     */
    public function describeVodStreamURLWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVodStreamURL',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVodStreamURLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeVodStreamURLRequest
     *
     * @returns DescribeVodStreamURLResponse
     *
     * @param DescribeVodStreamURLRequest $request
     *
     * @return DescribeVodStreamURLResponse
     */
    public function describeVodStreamURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVodStreamURLWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeVsCertificateDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVsCertificateDetailResponse
     *
     * @param DescribeVsCertificateDetailRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeVsCertificateDetailResponse
     */
    public function describeVsCertificateDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certName) {
            @$query['CertName'] = $request->certName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVsCertificateDetail',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVsCertificateDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeVsCertificateDetailRequest
     *
     * @returns DescribeVsCertificateDetailResponse
     *
     * @param DescribeVsCertificateDetailRequest $request
     *
     * @return DescribeVsCertificateDetailResponse
     */
    public function describeVsCertificateDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsCertificateDetailWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeVsCertificateListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVsCertificateListResponse
     *
     * @param DescribeVsCertificateListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeVsCertificateListResponse
     */
    public function describeVsCertificateListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVsCertificateList',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVsCertificateListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeVsCertificateListRequest
     *
     * @returns DescribeVsCertificateListResponse
     *
     * @param DescribeVsCertificateListRequest $request
     *
     * @return DescribeVsCertificateListResponse
     */
    public function describeVsCertificateList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsCertificateListWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeVsDevicesDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVsDevicesDataResponse
     *
     * @param DescribeVsDevicesDataRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeVsDevicesDataResponse
     */
    public function describeVsDevicesDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVsDevicesData',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVsDevicesDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeVsDevicesDataRequest
     *
     * @returns DescribeVsDevicesDataResponse
     *
     * @param DescribeVsDevicesDataRequest $request
     *
     * @return DescribeVsDevicesDataResponse
     */
    public function describeVsDevicesData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDevicesDataWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeVsDomainBpsDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVsDomainBpsDataResponse
     *
     * @param DescribeVsDomainBpsDataRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeVsDomainBpsDataResponse
     */
    public function describeVsDomainBpsDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->ispNameEn) {
            @$query['IspNameEn'] = $request->ispNameEn;
        }

        if (null !== $request->locationNameEn) {
            @$query['LocationNameEn'] = $request->locationNameEn;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVsDomainBpsData',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVsDomainBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeVsDomainBpsDataRequest
     *
     * @returns DescribeVsDomainBpsDataResponse
     *
     * @param DescribeVsDomainBpsDataRequest $request
     *
     * @return DescribeVsDomainBpsDataResponse
     */
    public function describeVsDomainBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainBpsDataWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeVsDomainCertificateInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVsDomainCertificateInfoResponse
     *
     * @param DescribeVsDomainCertificateInfoRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeVsDomainCertificateInfoResponse
     */
    public function describeVsDomainCertificateInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVsDomainCertificateInfo',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVsDomainCertificateInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeVsDomainCertificateInfoRequest
     *
     * @returns DescribeVsDomainCertificateInfoResponse
     *
     * @param DescribeVsDomainCertificateInfoRequest $request
     *
     * @return DescribeVsDomainCertificateInfoResponse
     */
    public function describeVsDomainCertificateInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainCertificateInfoWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeVsDomainConfigsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVsDomainConfigsResponse
     *
     * @param DescribeVsDomainConfigsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeVsDomainConfigsResponse
     */
    public function describeVsDomainConfigsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->functionNames) {
            @$query['FunctionNames'] = $request->functionNames;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVsDomainConfigs',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVsDomainConfigsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeVsDomainConfigsRequest
     *
     * @returns DescribeVsDomainConfigsResponse
     *
     * @param DescribeVsDomainConfigsRequest $request
     *
     * @return DescribeVsDomainConfigsResponse
     */
    public function describeVsDomainConfigs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainConfigsWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeVsDomainDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVsDomainDetailResponse
     *
     * @param DescribeVsDomainDetailRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeVsDomainDetailResponse
     */
    public function describeVsDomainDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVsDomainDetail',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVsDomainDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeVsDomainDetailRequest
     *
     * @returns DescribeVsDomainDetailResponse
     *
     * @param DescribeVsDomainDetailRequest $request
     *
     * @return DescribeVsDomainDetailResponse
     */
    public function describeVsDomainDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainDetailWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeVsDomainPvDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVsDomainPvDataResponse
     *
     * @param DescribeVsDomainPvDataRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeVsDomainPvDataResponse
     */
    public function describeVsDomainPvDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVsDomainPvData',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVsDomainPvDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeVsDomainPvDataRequest
     *
     * @returns DescribeVsDomainPvDataResponse
     *
     * @param DescribeVsDomainPvDataRequest $request
     *
     * @return DescribeVsDomainPvDataResponse
     */
    public function describeVsDomainPvData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainPvDataWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeVsDomainPvUvDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVsDomainPvUvDataResponse
     *
     * @param DescribeVsDomainPvUvDataRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeVsDomainPvUvDataResponse
     */
    public function describeVsDomainPvUvDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVsDomainPvUvData',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVsDomainPvUvDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeVsDomainPvUvDataRequest
     *
     * @returns DescribeVsDomainPvUvDataResponse
     *
     * @param DescribeVsDomainPvUvDataRequest $request
     *
     * @return DescribeVsDomainPvUvDataResponse
     */
    public function describeVsDomainPvUvData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainPvUvDataWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeVsDomainRecordDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVsDomainRecordDataResponse
     *
     * @param DescribeVsDomainRecordDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeVsDomainRecordDataResponse
     */
    public function describeVsDomainRecordDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVsDomainRecordData',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVsDomainRecordDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeVsDomainRecordDataRequest
     *
     * @returns DescribeVsDomainRecordDataResponse
     *
     * @param DescribeVsDomainRecordDataRequest $request
     *
     * @return DescribeVsDomainRecordDataResponse
     */
    public function describeVsDomainRecordData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainRecordDataWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeVsDomainRegionDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVsDomainRegionDataResponse
     *
     * @param DescribeVsDomainRegionDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeVsDomainRegionDataResponse
     */
    public function describeVsDomainRegionDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVsDomainRegionData',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVsDomainRegionDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeVsDomainRegionDataRequest
     *
     * @returns DescribeVsDomainRegionDataResponse
     *
     * @param DescribeVsDomainRegionDataRequest $request
     *
     * @return DescribeVsDomainRegionDataResponse
     */
    public function describeVsDomainRegionData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainRegionDataWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeVsDomainReqBpsDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVsDomainReqBpsDataResponse
     *
     * @param DescribeVsDomainReqBpsDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeVsDomainReqBpsDataResponse
     */
    public function describeVsDomainReqBpsDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->ispNameEn) {
            @$query['IspNameEn'] = $request->ispNameEn;
        }

        if (null !== $request->locationNameEn) {
            @$query['LocationNameEn'] = $request->locationNameEn;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVsDomainReqBpsData',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVsDomainReqBpsDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeVsDomainReqBpsDataRequest
     *
     * @returns DescribeVsDomainReqBpsDataResponse
     *
     * @param DescribeVsDomainReqBpsDataRequest $request
     *
     * @return DescribeVsDomainReqBpsDataResponse
     */
    public function describeVsDomainReqBpsData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainReqBpsDataWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeVsDomainReqTrafficDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVsDomainReqTrafficDataResponse
     *
     * @param DescribeVsDomainReqTrafficDataRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeVsDomainReqTrafficDataResponse
     */
    public function describeVsDomainReqTrafficDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->ispNameEn) {
            @$query['IspNameEn'] = $request->ispNameEn;
        }

        if (null !== $request->locationNameEn) {
            @$query['LocationNameEn'] = $request->locationNameEn;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVsDomainReqTrafficData',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVsDomainReqTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeVsDomainReqTrafficDataRequest
     *
     * @returns DescribeVsDomainReqTrafficDataResponse
     *
     * @param DescribeVsDomainReqTrafficDataRequest $request
     *
     * @return DescribeVsDomainReqTrafficDataResponse
     */
    public function describeVsDomainReqTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainReqTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeVsDomainSnapshotDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVsDomainSnapshotDataResponse
     *
     * @param DescribeVsDomainSnapshotDataRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeVsDomainSnapshotDataResponse
     */
    public function describeVsDomainSnapshotDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVsDomainSnapshotData',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVsDomainSnapshotDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeVsDomainSnapshotDataRequest
     *
     * @returns DescribeVsDomainSnapshotDataResponse
     *
     * @param DescribeVsDomainSnapshotDataRequest $request
     *
     * @return DescribeVsDomainSnapshotDataResponse
     */
    public function describeVsDomainSnapshotData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainSnapshotDataWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeVsDomainTrafficDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVsDomainTrafficDataResponse
     *
     * @param DescribeVsDomainTrafficDataRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeVsDomainTrafficDataResponse
     */
    public function describeVsDomainTrafficDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->ispNameEn) {
            @$query['IspNameEn'] = $request->ispNameEn;
        }

        if (null !== $request->locationNameEn) {
            @$query['LocationNameEn'] = $request->locationNameEn;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVsDomainTrafficData',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVsDomainTrafficDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeVsDomainTrafficDataRequest
     *
     * @returns DescribeVsDomainTrafficDataResponse
     *
     * @param DescribeVsDomainTrafficDataRequest $request
     *
     * @return DescribeVsDomainTrafficDataResponse
     */
    public function describeVsDomainTrafficData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainTrafficDataWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeVsDomainUvDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVsDomainUvDataResponse
     *
     * @param DescribeVsDomainUvDataRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeVsDomainUvDataResponse
     */
    public function describeVsDomainUvDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVsDomainUvData',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVsDomainUvDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeVsDomainUvDataRequest
     *
     * @returns DescribeVsDomainUvDataResponse
     *
     * @param DescribeVsDomainUvDataRequest $request
     *
     * @return DescribeVsDomainUvDataResponse
     */
    public function describeVsDomainUvData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainUvDataWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeVsPullStreamInfoConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVsPullStreamInfoConfigResponse
     *
     * @param DescribeVsPullStreamInfoConfigRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeVsPullStreamInfoConfigResponse
     */
    public function describeVsPullStreamInfoConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVsPullStreamInfoConfig',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVsPullStreamInfoConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeVsPullStreamInfoConfigRequest
     *
     * @returns DescribeVsPullStreamInfoConfigResponse
     *
     * @param DescribeVsPullStreamInfoConfigRequest $request
     *
     * @return DescribeVsPullStreamInfoConfigResponse
     */
    public function describeVsPullStreamInfoConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsPullStreamInfoConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeVsStreamsNotifyUrlConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVsStreamsNotifyUrlConfigResponse
     *
     * @param DescribeVsStreamsNotifyUrlConfigRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeVsStreamsNotifyUrlConfigResponse
     */
    public function describeVsStreamsNotifyUrlConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVsStreamsNotifyUrlConfig',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVsStreamsNotifyUrlConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeVsStreamsNotifyUrlConfigRequest
     *
     * @returns DescribeVsStreamsNotifyUrlConfigResponse
     *
     * @param DescribeVsStreamsNotifyUrlConfigRequest $request
     *
     * @return DescribeVsStreamsNotifyUrlConfigResponse
     */
    public function describeVsStreamsNotifyUrlConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsStreamsNotifyUrlConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeVsStreamsOnlineListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVsStreamsOnlineListResponse
     *
     * @param DescribeVsStreamsOnlineListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeVsStreamsOnlineListResponse
     */
    public function describeVsStreamsOnlineListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNum) {
            @$query['PageNum'] = $request->pageNum;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryType) {
            @$query['QueryType'] = $request->queryType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->streamName) {
            @$query['StreamName'] = $request->streamName;
        }

        if (null !== $request->streamType) {
            @$query['StreamType'] = $request->streamType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVsStreamsOnlineList',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVsStreamsOnlineListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeVsStreamsOnlineListRequest
     *
     * @returns DescribeVsStreamsOnlineListResponse
     *
     * @param DescribeVsStreamsOnlineListRequest $request
     *
     * @return DescribeVsStreamsOnlineListResponse
     */
    public function describeVsStreamsOnlineList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsStreamsOnlineListWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeVsStreamsPublishListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVsStreamsPublishListResponse
     *
     * @param DescribeVsStreamsPublishListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeVsStreamsPublishListResponse
     */
    public function describeVsStreamsPublishListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->queryType) {
            @$query['QueryType'] = $request->queryType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->streamName) {
            @$query['StreamName'] = $request->streamName;
        }

        if (null !== $request->streamType) {
            @$query['StreamType'] = $request->streamType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVsStreamsPublishList',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVsStreamsPublishListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeVsStreamsPublishListRequest
     *
     * @returns DescribeVsStreamsPublishListResponse
     *
     * @param DescribeVsStreamsPublishListRequest $request
     *
     * @return DescribeVsStreamsPublishListResponse
     */
    public function describeVsStreamsPublishList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsStreamsPublishListWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeVsTopDomainsByFlowRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVsTopDomainsByFlowResponse
     *
     * @param DescribeVsTopDomainsByFlowRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeVsTopDomainsByFlowResponse
     */
    public function describeVsTopDomainsByFlowWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->limit) {
            @$query['Limit'] = $request->limit;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVsTopDomainsByFlow',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVsTopDomainsByFlowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeVsTopDomainsByFlowRequest
     *
     * @returns DescribeVsTopDomainsByFlowResponse
     *
     * @param DescribeVsTopDomainsByFlowRequest $request
     *
     * @return DescribeVsTopDomainsByFlowResponse
     */
    public function describeVsTopDomainsByFlow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsTopDomainsByFlowWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeVsUpPeakPublishStreamDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVsUpPeakPublishStreamDataResponse
     *
     * @param DescribeVsUpPeakPublishStreamDataRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeVsUpPeakPublishStreamDataResponse
     */
    public function describeVsUpPeakPublishStreamDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->domainSwitch) {
            @$query['DomainSwitch'] = $request->domainSwitch;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVsUpPeakPublishStreamData',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVsUpPeakPublishStreamDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeVsUpPeakPublishStreamDataRequest
     *
     * @returns DescribeVsUpPeakPublishStreamDataResponse
     *
     * @param DescribeVsUpPeakPublishStreamDataRequest $request
     *
     * @return DescribeVsUpPeakPublishStreamDataResponse
     */
    public function describeVsUpPeakPublishStreamData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsUpPeakPublishStreamDataWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeVsUserResourcePackageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVsUserResourcePackageResponse
     *
     * @param DescribeVsUserResourcePackageRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeVsUserResourcePackageResponse
     */
    public function describeVsUserResourcePackageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->securityToken) {
            @$query['SecurityToken'] = $request->securityToken;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVsUserResourcePackage',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVsUserResourcePackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeVsUserResourcePackageRequest
     *
     * @returns DescribeVsUserResourcePackageResponse
     *
     * @param DescribeVsUserResourcePackageRequest $request
     *
     * @return DescribeVsUserResourcePackageResponse
     */
    public function describeVsUserResourcePackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsUserResourcePackageWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeVsVerifyContentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVsVerifyContentResponse
     *
     * @param DescribeVsVerifyContentRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeVsVerifyContentResponse
     */
    public function describeVsVerifyContentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVsVerifyContent',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVsVerifyContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeVsVerifyContentRequest
     *
     * @returns DescribeVsVerifyContentResponse
     *
     * @param DescribeVsVerifyContentRequest $request
     *
     * @return DescribeVsVerifyContentResponse
     */
    public function describeVsVerifyContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsVerifyContentWithOptions($request, $runtime);
    }

    /**
     * 云应用服务实例与项目解除关联.
     *
     * @param tmpReq - DisassociateRenderingProjectInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisassociateRenderingProjectInstancesResponse
     *
     * @param DisassociateRenderingProjectInstancesRequest $tmpReq
     * @param RuntimeOptions                               $runtime
     *
     * @return DisassociateRenderingProjectInstancesResponse
     */
    public function disassociateRenderingProjectInstancesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DisassociateRenderingProjectInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->renderingInstanceIds) {
            $request->renderingInstanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->renderingInstanceIds, 'RenderingInstanceIds', 'json');
        }

        $query = [];
        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->renderingInstanceIdsShrink) {
            @$query['RenderingInstanceIds'] = $request->renderingInstanceIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisassociateRenderingProjectInstances',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisassociateRenderingProjectInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 云应用服务实例与项目解除关联.
     *
     * @param request - DisassociateRenderingProjectInstancesRequest
     *
     * @returns DisassociateRenderingProjectInstancesResponse
     *
     * @param DisassociateRenderingProjectInstancesRequest $request
     *
     * @return DisassociateRenderingProjectInstancesResponse
     */
    public function disassociateRenderingProjectInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disassociateRenderingProjectInstancesWithOptions($request, $runtime);
    }

    /**
     * @param request - ForbidVsStreamRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ForbidVsStreamResponse
     *
     * @param ForbidVsStreamRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ForbidVsStreamResponse
     */
    public function forbidVsStreamWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->controlStreamAction) {
            @$query['ControlStreamAction'] = $request->controlStreamAction;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->liveStreamType) {
            @$query['LiveStreamType'] = $request->liveStreamType;
        }

        if (null !== $request->oneshot) {
            @$query['Oneshot'] = $request->oneshot;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->resumeTime) {
            @$query['ResumeTime'] = $request->resumeTime;
        }

        if (null !== $request->streamName) {
            @$query['StreamName'] = $request->streamName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ForbidVsStream',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ForbidVsStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ForbidVsStreamRequest
     *
     * @returns ForbidVsStreamResponse
     *
     * @param ForbidVsStreamRequest $request
     *
     * @return ForbidVsStreamResponse
     */
    public function forbidVsStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->forbidVsStreamWithOptions($request, $runtime);
    }

    /**
     * 获取云渲染实例流连接信息，每次流化建联前都需要调用此接口获取最新连接信息.
     *
     * @param request - GetRenderingInstanceStreamingInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRenderingInstanceStreamingInfoResponse
     *
     * @param GetRenderingInstanceStreamingInfoRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return GetRenderingInstanceStreamingInfoResponse
     */
    public function getRenderingInstanceStreamingInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->renderingInstanceId) {
            @$query['RenderingInstanceId'] = $request->renderingInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetRenderingInstanceStreamingInfo',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRenderingInstanceStreamingInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取云渲染实例流连接信息，每次流化建联前都需要调用此接口获取最新连接信息.
     *
     * @param request - GetRenderingInstanceStreamingInfoRequest
     *
     * @returns GetRenderingInstanceStreamingInfoResponse
     *
     * @param GetRenderingInstanceStreamingInfoRequest $request
     *
     * @return GetRenderingInstanceStreamingInfoResponse
     */
    public function getRenderingInstanceStreamingInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRenderingInstanceStreamingInfoWithOptions($request, $runtime);
    }

    /**
     * 输出满足特定条件的资源各状态数据量统计值。
     *
     * @param request - GetRenderingProjectInstanceStateMetricsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetRenderingProjectInstanceStateMetricsResponse
     *
     * @param GetRenderingProjectInstanceStateMetricsRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return GetRenderingProjectInstanceStateMetricsResponse
     */
    public function getRenderingProjectInstanceStateMetricsWithOptions($request, $runtime)
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
            'action' => 'GetRenderingProjectInstanceStateMetrics',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetRenderingProjectInstanceStateMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 输出满足特定条件的资源各状态数据量统计值。
     *
     * @param request - GetRenderingProjectInstanceStateMetricsRequest
     *
     * @returns GetRenderingProjectInstanceStateMetricsResponse
     *
     * @param GetRenderingProjectInstanceStateMetricsRequest $request
     *
     * @return GetRenderingProjectInstanceStateMetricsResponse
     */
    public function getRenderingProjectInstanceStateMetrics($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRenderingProjectInstanceStateMetricsWithOptions($request, $runtime);
    }

    /**
     * @param request - GotoPresetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GotoPresetResponse
     *
     * @param GotoPresetRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GotoPresetResponse
     */
    public function gotoPresetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->presetId) {
            @$query['PresetId'] = $request->presetId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GotoPreset',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GotoPresetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - GotoPresetRequest
     *
     * @returns GotoPresetResponse
     *
     * @param GotoPresetRequest $request
     *
     * @return GotoPresetResponse
     */
    public function gotoPreset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->gotoPresetWithOptions($request, $runtime);
    }

    /**
     * 安装云应用.
     *
     * @param request - InstallCloudAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns InstallCloudAppResponse
     *
     * @param InstallCloudAppRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return InstallCloudAppResponse
     */
    public function installCloudAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->renderingInstanceId) {
            @$query['RenderingInstanceId'] = $request->renderingInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'InstallCloudApp',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return InstallCloudAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 安装云应用.
     *
     * @param request - InstallCloudAppRequest
     *
     * @returns InstallCloudAppResponse
     *
     * @param InstallCloudAppRequest $request
     *
     * @return InstallCloudAppResponse
     */
    public function installCloudApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->installCloudAppWithOptions($request, $runtime);
    }

    /**
     * 查询云应用安装信息列表.
     *
     * @param request - ListCloudAppInstallationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCloudAppInstallationsResponse
     *
     * @param ListCloudAppInstallationsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListCloudAppInstallationsResponse
     */
    public function listCloudAppInstallationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCloudAppInstallations',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCloudAppInstallationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询云应用安装信息列表.
     *
     * @param request - ListCloudAppInstallationsRequest
     *
     * @returns ListCloudAppInstallationsResponse
     *
     * @param ListCloudAppInstallationsRequest $request
     *
     * @return ListCloudAppInstallationsResponse
     */
    public function listCloudAppInstallations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCloudAppInstallationsWithOptions($request, $runtime);
    }

    /**
     * 查询云应用列表.
     *
     * @param request - ListCloudAppsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCloudAppsResponse
     *
     * @param ListCloudAppsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListCloudAppsResponse
     */
    public function listCloudAppsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCloudApps',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCloudAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询云应用列表.
     *
     * @param request - ListCloudAppsRequest
     *
     * @returns ListCloudAppsResponse
     *
     * @param ListCloudAppsRequest $request
     *
     * @return ListCloudAppsResponse
     */
    public function listCloudApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCloudAppsWithOptions($request, $runtime);
    }

    /**
     * 查询文件的实例推送状态信息列表。
     *
     * @param request - ListFilePushStatusesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFilePushStatusesResponse
     *
     * @param ListFilePushStatusesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListFilePushStatusesResponse
     */
    public function listFilePushStatusesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFilePushStatuses',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListFilePushStatusesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询文件的实例推送状态信息列表。
     *
     * @param request - ListFilePushStatusesRequest
     *
     * @returns ListFilePushStatusesResponse
     *
     * @param ListFilePushStatusesRequest $request
     *
     * @return ListFilePushStatusesResponse
     */
    public function listFilePushStatuses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFilePushStatusesWithOptions($request, $runtime);
    }

    /**
     * 查询可用文件列表。
     *
     * @param request - ListFilesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFilesResponse
     *
     * @param ListFilesRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ListFilesResponse
     */
    public function listFilesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFiles',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询可用文件列表。
     *
     * @param request - ListFilesRequest
     *
     * @returns ListFilesResponse
     *
     * @param ListFilesRequest $request
     *
     * @return ListFilesResponse
     */
    public function listFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFilesWithOptions($request, $runtime);
    }

    /**
     * 查询公钥信息.
     *
     * @param request - ListPublicKeysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListPublicKeysResponse
     *
     * @param ListPublicKeysRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListPublicKeysResponse
     */
    public function listPublicKeysWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListPublicKeys',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListPublicKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询公钥信息.
     *
     * @param request - ListPublicKeysRequest
     *
     * @returns ListPublicKeysResponse
     *
     * @param ListPublicKeysRequest $request
     *
     * @return ListPublicKeysResponse
     */
    public function listPublicKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listPublicKeysWithOptions($request, $runtime);
    }

    /**
     * 查询所有云应用数据包信息，支持分页查询。
     *
     * @param request - ListRenderingDataPackagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRenderingDataPackagesResponse
     *
     * @param ListRenderingDataPackagesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ListRenderingDataPackagesResponse
     */
    public function listRenderingDataPackagesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->dataPackageId) {
            @$query['DataPackageId'] = $request->dataPackageId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->size) {
            @$query['Size'] = $request->size;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRenderingDataPackages',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRenderingDataPackagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询所有云应用数据包信息，支持分页查询。
     *
     * @param request - ListRenderingDataPackagesRequest
     *
     * @returns ListRenderingDataPackagesResponse
     *
     * @param ListRenderingDataPackagesRequest $request
     *
     * @return ListRenderingDataPackagesResponse
     */
    public function listRenderingDataPackages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRenderingDataPackagesWithOptions($request, $runtime);
    }

    /**
     * 查询自定义网关.
     *
     * @param request - ListRenderingInstanceGatewayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRenderingInstanceGatewayResponse
     *
     * @param ListRenderingInstanceGatewayRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ListRenderingInstanceGatewayResponse
     */
    public function listRenderingInstanceGatewayWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayInstanceId) {
            @$query['GatewayInstanceId'] = $request->gatewayInstanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->renderingInstanceId) {
            @$query['RenderingInstanceId'] = $request->renderingInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRenderingInstanceGateway',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRenderingInstanceGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询自定义网关.
     *
     * @param request - ListRenderingInstanceGatewayRequest
     *
     * @returns ListRenderingInstanceGatewayResponse
     *
     * @param ListRenderingInstanceGatewayRequest $request
     *
     * @return ListRenderingInstanceGatewayResponse
     */
    public function listRenderingInstanceGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRenderingInstanceGatewayWithOptions($request, $runtime);
    }

    /**
     * 查询所有云渲染实例信息，支持分页查询。
     *
     * @param request - ListRenderingInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRenderingInstancesResponse
     *
     * @param ListRenderingInstancesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListRenderingInstancesResponse
     */
    public function listRenderingInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRenderingInstances',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRenderingInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询所有云渲染实例信息，支持分页查询。
     *
     * @param request - ListRenderingInstancesRequest
     *
     * @returns ListRenderingInstancesResponse
     *
     * @param ListRenderingInstancesRequest $request
     *
     * @return ListRenderingInstancesResponse
     */
    public function listRenderingInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRenderingInstancesWithOptions($request, $runtime);
    }

    /**
     * 分页查询项目关联的云应用服务实例列表。
     *
     * @remarks
     * ## 请求说明
     * - 该接口支持通过多种筛选条件（如状态、实例ID等）来查询指定项目下的云应用服务实例。
     *
     * @param request - ListRenderingProjectInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRenderingProjectInstancesResponse
     *
     * @param ListRenderingProjectInstancesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ListRenderingProjectInstancesResponse
     */
    public function listRenderingProjectInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->renderingInstanceId) {
            @$query['RenderingInstanceId'] = $request->renderingInstanceId;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRenderingProjectInstances',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRenderingProjectInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分页查询项目关联的云应用服务实例列表。
     *
     * @remarks
     * ## 请求说明
     * - 该接口支持通过多种筛选条件（如状态、实例ID等）来查询指定项目下的云应用服务实例。
     *
     * @param request - ListRenderingProjectInstancesRequest
     *
     * @returns ListRenderingProjectInstancesResponse
     *
     * @param ListRenderingProjectInstancesRequest $request
     *
     * @return ListRenderingProjectInstancesResponse
     */
    public function listRenderingProjectInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRenderingProjectInstancesWithOptions($request, $runtime);
    }

    /**
     * 分页查询用户下的云应用服务项目基本信息列表。
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于分页查询指定用户下的渲染项目基本信息列表。
     * - 可通过 `ProjectId` 和 `ProjectName` 进行过滤查询。
     *
     * @param request - ListRenderingProjectsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRenderingProjectsResponse
     *
     * @param ListRenderingProjectsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListRenderingProjectsResponse
     */
    public function listRenderingProjectsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRenderingProjects',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRenderingProjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分页查询用户下的云应用服务项目基本信息列表。
     *
     * @remarks
     * ## 请求说明
     * - 该接口用于分页查询指定用户下的渲染项目基本信息列表。
     * - 可通过 `ProjectId` 和 `ProjectName` 进行过滤查询。
     *
     * @param request - ListRenderingProjectsRequest
     *
     * @returns ListRenderingProjectsResponse
     *
     * @param ListRenderingProjectsRequest $request
     *
     * @return ListRenderingProjectsResponse
     */
    public function listRenderingProjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRenderingProjectsWithOptions($request, $runtime);
    }

    /**
     * 分页查询指定条件下的渲染会话列表。
     *
     * @remarks
     * ## 请求说明
     * - 该接口支持通过多种参数组合来过滤和分页查询用户的渲染会话列表。
     * - `SessionId` 和 `ClientId` 参数至少需要提供一个，但两者都不是必选的。如果同时提供了两个参数，则将根据这两个参数进行更精确的匹配。
     *
     * @param request - ListRenderingSessionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRenderingSessionsResponse
     *
     * @param ListRenderingSessionsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ListRenderingSessionsResponse
     */
    public function listRenderingSessionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->state) {
            @$query['State'] = $request->state;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListRenderingSessions',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRenderingSessionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 分页查询指定条件下的渲染会话列表。
     *
     * @remarks
     * ## 请求说明
     * - 该接口支持通过多种参数组合来过滤和分页查询用户的渲染会话列表。
     * - `SessionId` 和 `ClientId` 参数至少需要提供一个，但两者都不是必选的。如果同时提供了两个参数，则将根据这两个参数进行更精确的匹配。
     *
     * @param request - ListRenderingSessionsRequest
     *
     * @returns ListRenderingSessionsResponse
     *
     * @param ListRenderingSessionsRequest $request
     *
     * @return ListRenderingSessionsResponse
     */
    public function listRenderingSessions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRenderingSessionsWithOptions($request, $runtime);
    }

    /**
     * 安全登陆管理.
     *
     * @param request - ManageLoginRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ManageLoginResponse
     *
     * @param ManageLoginRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ManageLoginResponse
     */
    public function manageLoginWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->actionName) {
            @$query['ActionName'] = $request->actionName;
        }

        if (null !== $request->keyGroup) {
            @$query['KeyGroup'] = $request->keyGroup;
        }

        if (null !== $request->keyName) {
            @$query['KeyName'] = $request->keyName;
        }

        if (null !== $request->renderingInstanceId) {
            @$query['RenderingInstanceId'] = $request->renderingInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ManageLogin',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ManageLoginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 安全登陆管理.
     *
     * @param request - ManageLoginRequest
     *
     * @returns ManageLoginResponse
     *
     * @param ManageLoginRequest $request
     *
     * @return ManageLoginResponse
     */
    public function manageLogin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->manageLoginWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyDeviceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDeviceResponse
     *
     * @param ModifyDeviceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ModifyDeviceResponse
     */
    public function modifyDeviceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alarmMethod) {
            @$query['AlarmMethod'] = $request->alarmMethod;
        }

        if (null !== $request->autoDirectory) {
            @$query['AutoDirectory'] = $request->autoDirectory;
        }

        if (null !== $request->autoPos) {
            @$query['AutoPos'] = $request->autoPos;
        }

        if (null !== $request->autoStart) {
            @$query['AutoStart'] = $request->autoStart;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->gbId) {
            @$query['GbId'] = $request->gbId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->latitude) {
            @$query['Latitude'] = $request->latitude;
        }

        if (null !== $request->longitude) {
            @$query['Longitude'] = $request->longitude;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->params) {
            @$query['Params'] = $request->params;
        }

        if (null !== $request->parentId) {
            @$query['ParentId'] = $request->parentId;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        if (null !== $request->posInterval) {
            @$query['PosInterval'] = $request->posInterval;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        if (null !== $request->username) {
            @$query['Username'] = $request->username;
        }

        if (null !== $request->vendor) {
            @$query['Vendor'] = $request->vendor;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDevice',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyDeviceRequest
     *
     * @returns ModifyDeviceResponse
     *
     * @param ModifyDeviceRequest $request
     *
     * @return ModifyDeviceResponse
     */
    public function modifyDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDeviceWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyDeviceAlarmRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDeviceAlarmResponse
     *
     * @param ModifyDeviceAlarmRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyDeviceAlarmResponse
     */
    public function modifyDeviceAlarmWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->alarmId) {
            @$query['AlarmId'] = $request->alarmId;
        }

        if (null !== $request->channelId) {
            @$query['ChannelId'] = $request->channelId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDeviceAlarm',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDeviceAlarmResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyDeviceAlarmRequest
     *
     * @returns ModifyDeviceAlarmResponse
     *
     * @param ModifyDeviceAlarmRequest $request
     *
     * @return ModifyDeviceAlarmResponse
     */
    public function modifyDeviceAlarm($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDeviceAlarmWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyDeviceCaptureRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDeviceCaptureResponse
     *
     * @param ModifyDeviceCaptureRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyDeviceCaptureResponse
     */
    public function modifyDeviceCaptureWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->image) {
            @$query['Image'] = $request->image;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->video) {
            @$query['Video'] = $request->video;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDeviceCapture',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDeviceCaptureResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyDeviceCaptureRequest
     *
     * @returns ModifyDeviceCaptureResponse
     *
     * @param ModifyDeviceCaptureRequest $request
     *
     * @return ModifyDeviceCaptureResponse
     */
    public function modifyDeviceCapture($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDeviceCaptureWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyDeviceChannelsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDeviceChannelsResponse
     *
     * @param ModifyDeviceChannelsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyDeviceChannelsResponse
     */
    public function modifyDeviceChannelsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->channels) {
            @$query['Channels'] = $request->channels;
        }

        if (null !== $request->deviceStatus) {
            @$query['DeviceStatus'] = $request->deviceStatus;
        }

        if (null !== $request->dsn) {
            @$query['Dsn'] = $request->dsn;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDeviceChannels',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDeviceChannelsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyDeviceChannelsRequest
     *
     * @returns ModifyDeviceChannelsResponse
     *
     * @param ModifyDeviceChannelsRequest $request
     *
     * @return ModifyDeviceChannelsResponse
     */
    public function modifyDeviceChannels($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDeviceChannelsWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyDirectoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDirectoryResponse
     *
     * @param ModifyDirectoryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyDirectoryResponse
     */
    public function modifyDirectoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDirectory',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyDirectoryRequest
     *
     * @returns ModifyDirectoryResponse
     *
     * @param ModifyDirectoryRequest $request
     *
     * @return ModifyDirectoryResponse
     */
    public function modifyDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDirectoryWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyGroupResponse
     *
     * @param ModifyGroupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ModifyGroupResponse
     */
    public function modifyGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callback) {
            @$query['Callback'] = $request->callback;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->enabled) {
            @$query['Enabled'] = $request->enabled;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->inProtocol) {
            @$query['InProtocol'] = $request->inProtocol;
        }

        if (null !== $request->lazyPull) {
            @$query['LazyPull'] = $request->lazyPull;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->outProtocol) {
            @$query['OutProtocol'] = $request->outProtocol;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->playDomain) {
            @$query['PlayDomain'] = $request->playDomain;
        }

        if (null !== $request->pushDomain) {
            @$query['PushDomain'] = $request->pushDomain;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyGroup',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyGroupRequest
     *
     * @returns ModifyGroupResponse
     *
     * @param ModifyGroupRequest $request
     *
     * @return ModifyGroupResponse
     */
    public function modifyGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyGroupWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyParentPlatformRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyParentPlatformResponse
     *
     * @param ModifyParentPlatformRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyParentPlatformResponse
     */
    public function modifyParentPlatformWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoStart) {
            @$query['AutoStart'] = $request->autoStart;
        }

        if (null !== $request->clientAuth) {
            @$query['ClientAuth'] = $request->clientAuth;
        }

        if (null !== $request->clientPassword) {
            @$query['ClientPassword'] = $request->clientPassword;
        }

        if (null !== $request->clientUsername) {
            @$query['ClientUsername'] = $request->clientUsername;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->gbId) {
            @$query['GbId'] = $request->gbId;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ip) {
            @$query['Ip'] = $request->ip;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->port) {
            @$query['Port'] = $request->port;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyParentPlatform',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyParentPlatformResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyParentPlatformRequest
     *
     * @returns ModifyParentPlatformResponse
     *
     * @param ModifyParentPlatformRequest $request
     *
     * @return ModifyParentPlatformResponse
     */
    public function modifyParentPlatform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyParentPlatformWithOptions($request, $runtime);
    }

    /**
     * 变配云渲染资源实例.
     *
     * @param request - ModifyRenderingInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyRenderingInstanceResponse
     *
     * @param ModifyRenderingInstanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyRenderingInstanceResponse
     */
    public function modifyRenderingInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->renderingInstanceId) {
            @$query['RenderingInstanceId'] = $request->renderingInstanceId;
        }

        if (null !== $request->renderingSpec) {
            @$query['RenderingSpec'] = $request->renderingSpec;
        }

        if (null !== $request->storageSize) {
            @$query['StorageSize'] = $request->storageSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyRenderingInstance',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyRenderingInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 变配云渲染资源实例.
     *
     * @param request - ModifyRenderingInstanceRequest
     *
     * @returns ModifyRenderingInstanceResponse
     *
     * @param ModifyRenderingInstanceRequest $request
     *
     * @return ModifyRenderingInstanceResponse
     */
    public function modifyRenderingInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRenderingInstanceWithOptions($request, $runtime);
    }

    /**
     * 修改云渲染实例限速带宽.
     *
     * @param request - ModifyRenderingInstanceBandwidthRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyRenderingInstanceBandwidthResponse
     *
     * @param ModifyRenderingInstanceBandwidthRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifyRenderingInstanceBandwidthResponse
     */
    public function modifyRenderingInstanceBandwidthWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxEgressBandwidth) {
            @$query['MaxEgressBandwidth'] = $request->maxEgressBandwidth;
        }

        if (null !== $request->maxIngressBandwidth) {
            @$query['MaxIngressBandwidth'] = $request->maxIngressBandwidth;
        }

        if (null !== $request->renderingInstanceId) {
            @$query['RenderingInstanceId'] = $request->renderingInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyRenderingInstanceBandwidth',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyRenderingInstanceBandwidthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改云渲染实例限速带宽.
     *
     * @param request - ModifyRenderingInstanceBandwidthRequest
     *
     * @returns ModifyRenderingInstanceBandwidthResponse
     *
     * @param ModifyRenderingInstanceBandwidthRequest $request
     *
     * @return ModifyRenderingInstanceBandwidthResponse
     */
    public function modifyRenderingInstanceBandwidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyRenderingInstanceBandwidthWithOptions($request, $runtime);
    }

    /**
     * @param request - ModifyTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyTemplateResponse
     *
     * @param ModifyTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyTemplateResponse
     */
    public function modifyTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->callback) {
            @$query['Callback'] = $request->callback;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->fileFormat) {
            @$query['FileFormat'] = $request->fileFormat;
        }

        if (null !== $request->flv) {
            @$query['Flv'] = $request->flv;
        }

        if (null !== $request->hlsM3u8) {
            @$query['HlsM3u8'] = $request->hlsM3u8;
        }

        if (null !== $request->hlsTs) {
            @$query['HlsTs'] = $request->hlsTs;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->interval) {
            @$query['Interval'] = $request->interval;
        }

        if (null !== $request->jpgOnDemand) {
            @$query['JpgOnDemand'] = $request->jpgOnDemand;
        }

        if (null !== $request->jpgOverwrite) {
            @$query['JpgOverwrite'] = $request->jpgOverwrite;
        }

        if (null !== $request->jpgSequence) {
            @$query['JpgSequence'] = $request->jpgSequence;
        }

        if (null !== $request->mp4) {
            @$query['Mp4'] = $request->mp4;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ossBucket) {
            @$query['OssBucket'] = $request->ossBucket;
        }

        if (null !== $request->ossEndpoint) {
            @$query['OssEndpoint'] = $request->ossEndpoint;
        }

        if (null !== $request->ossFilePrefix) {
            @$query['OssFilePrefix'] = $request->ossFilePrefix;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->retention) {
            @$query['Retention'] = $request->retention;
        }

        if (null !== $request->transConfigsJSON) {
            @$query['TransConfigsJSON'] = $request->transConfigsJSON;
        }

        if (null !== $request->trigger) {
            @$query['Trigger'] = $request->trigger;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyTemplate',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyTemplateRequest
     *
     * @returns ModifyTemplateResponse
     *
     * @param ModifyTemplateRequest $request
     *
     * @return ModifyTemplateResponse
     */
    public function modifyTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTemplateWithOptions($request, $runtime);
    }

    /**
     * @param request - OpenVsServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OpenVsServiceResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return OpenVsServiceResponse
     */
    public function openVsServiceWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'OpenVsService',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OpenVsServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @returns OpenVsServiceResponse
     *
     * @return OpenVsServiceResponse
     */
    public function openVsService()
    {
        $runtime = new RuntimeOptions([]);

        return $this->openVsServiceWithOptions($runtime);
    }

    /**
     * 预推文件到云渲染实例。
     *
     * @param request - PushFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PushFileResponse
     *
     * @param PushFileRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return PushFileResponse
     */
    public function pushFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileId) {
            @$query['FileId'] = $request->fileId;
        }

        if (null !== $request->renderingInstanceId) {
            @$query['RenderingInstanceId'] = $request->renderingInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PushFile',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PushFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 预推文件到云渲染实例。
     *
     * @param request - PushFileRequest
     *
     * @returns PushFileResponse
     *
     * @param PushFileRequest $request
     *
     * @return PushFileResponse
     */
    public function pushFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushFileWithOptions($request, $runtime);
    }

    /**
     * 重启云渲染实例.
     *
     * @param request - RebootRenderingInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RebootRenderingInstanceResponse
     *
     * @param RebootRenderingInstanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RebootRenderingInstanceResponse
     */
    public function rebootRenderingInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->renderingInstanceId) {
            @$query['RenderingInstanceId'] = $request->renderingInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RebootRenderingInstance',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RebootRenderingInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 重启云渲染实例.
     *
     * @param request - RebootRenderingInstanceRequest
     *
     * @returns RebootRenderingInstanceResponse
     *
     * @param RebootRenderingInstanceRequest $request
     *
     * @return RebootRenderingInstanceResponse
     */
    public function rebootRenderingInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebootRenderingInstanceWithOptions($request, $runtime);
    }

    /**
     * 恢复数据到云渲染实例.
     *
     * @param request - RecoverRenderingDataPackageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecoverRenderingDataPackageResponse
     *
     * @param RecoverRenderingDataPackageRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return RecoverRenderingDataPackageResponse
     */
    public function recoverRenderingDataPackageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dataPackageId) {
            @$query['DataPackageId'] = $request->dataPackageId;
        }

        if (null !== $request->loadMode) {
            @$query['LoadMode'] = $request->loadMode;
        }

        if (null !== $request->renderingInstanceId) {
            @$query['RenderingInstanceId'] = $request->renderingInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RecoverRenderingDataPackage',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecoverRenderingDataPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 恢复数据到云渲染实例.
     *
     * @param request - RecoverRenderingDataPackageRequest
     *
     * @returns RecoverRenderingDataPackageResponse
     *
     * @param RecoverRenderingDataPackageRequest $request
     *
     * @return RecoverRenderingDataPackageResponse
     */
    public function recoverRenderingDataPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recoverRenderingDataPackageWithOptions($request, $runtime);
    }

    /**
     * 更新实例流连接信息.
     *
     * @param tmpReq - RefreshRenderingInstanceStreamingRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RefreshRenderingInstanceStreamingResponse
     *
     * @param RefreshRenderingInstanceStreamingRequest $tmpReq
     * @param RuntimeOptions                           $runtime
     *
     * @return RefreshRenderingInstanceStreamingResponse
     */
    public function refreshRenderingInstanceStreamingWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RefreshRenderingInstanceStreamingShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->clientInfo) {
            $request->clientInfoShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->clientInfo, 'ClientInfo', 'json');
        }

        $query = [];
        if (null !== $request->clientInfoShrink) {
            @$query['ClientInfo'] = $request->clientInfoShrink;
        }

        if (null !== $request->renderingInstanceId) {
            @$query['RenderingInstanceId'] = $request->renderingInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RefreshRenderingInstanceStreaming',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RefreshRenderingInstanceStreamingResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新实例流连接信息.
     *
     * @param request - RefreshRenderingInstanceStreamingRequest
     *
     * @returns RefreshRenderingInstanceStreamingResponse
     *
     * @param RefreshRenderingInstanceStreamingRequest $request
     *
     * @return RefreshRenderingInstanceStreamingResponse
     */
    public function refreshRenderingInstanceStreaming($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->refreshRenderingInstanceStreamingWithOptions($request, $runtime);
    }

    /**
     * 释放云渲染数据包.
     *
     * @param request - ReleaseRenderingDataPackageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseRenderingDataPackageResponse
     *
     * @param ReleaseRenderingDataPackageRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ReleaseRenderingDataPackageResponse
     */
    public function releaseRenderingDataPackageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dataPackageId) {
            @$query['DataPackageId'] = $request->dataPackageId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReleaseRenderingDataPackage',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReleaseRenderingDataPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 释放云渲染数据包.
     *
     * @param request - ReleaseRenderingDataPackageRequest
     *
     * @returns ReleaseRenderingDataPackageResponse
     *
     * @param ReleaseRenderingDataPackageRequest $request
     *
     * @return ReleaseRenderingDataPackageResponse
     */
    public function releaseRenderingDataPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseRenderingDataPackageWithOptions($request, $runtime);
    }

    /**
     * 释放云渲染实例.
     *
     * @param request - ReleaseRenderingInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseRenderingInstanceResponse
     *
     * @param ReleaseRenderingInstanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ReleaseRenderingInstanceResponse
     */
    public function releaseRenderingInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->renderingInstanceId) {
            @$query['RenderingInstanceId'] = $request->renderingInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReleaseRenderingInstance',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReleaseRenderingInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 释放云渲染实例.
     *
     * @param request - ReleaseRenderingInstanceRequest
     *
     * @returns ReleaseRenderingInstanceResponse
     *
     * @param ReleaseRenderingInstanceRequest $request
     *
     * @return ReleaseRenderingInstanceResponse
     */
    public function releaseRenderingInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseRenderingInstanceWithOptions($request, $runtime);
    }

    /**
     * 续费云渲染资源实例.
     *
     * @param request - RenewRenderingInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenewRenderingInstanceResponse
     *
     * @param RenewRenderingInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RenewRenderingInstanceResponse
     */
    public function renewRenderingInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->renderingInstanceId) {
            @$query['RenderingInstanceId'] = $request->renderingInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RenewRenderingInstance',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RenewRenderingInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 续费云渲染资源实例.
     *
     * @param request - RenewRenderingInstanceRequest
     *
     * @returns RenewRenderingInstanceResponse
     *
     * @param RenewRenderingInstanceRequest $request
     *
     * @return RenewRenderingInstanceResponse
     */
    public function renewRenderingInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewRenderingInstanceWithOptions($request, $runtime);
    }

    /**
     * 重置云渲染实例.
     *
     * @param request - ResetRenderingInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetRenderingInstanceResponse
     *
     * @param ResetRenderingInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ResetRenderingInstanceResponse
     */
    public function resetRenderingInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->actionName) {
            @$query['ActionName'] = $request->actionName;
        }

        if (null !== $request->dataPackageId) {
            @$query['DataPackageId'] = $request->dataPackageId;
        }

        if (null !== $request->renderingInstanceId) {
            @$query['RenderingInstanceId'] = $request->renderingInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetRenderingInstance',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetRenderingInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 重置云渲染实例.
     *
     * @param request - ResetRenderingInstanceRequest
     *
     * @returns ResetRenderingInstanceResponse
     *
     * @param ResetRenderingInstanceRequest $request
     *
     * @return ResetRenderingInstanceResponse
     */
    public function resetRenderingInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetRenderingInstanceWithOptions($request, $runtime);
    }

    /**
     * @param request - ResumeVsStreamRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResumeVsStreamResponse
     *
     * @param ResumeVsStreamRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ResumeVsStreamResponse
     */
    public function resumeVsStreamWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->controlStreamAction) {
            @$query['ControlStreamAction'] = $request->controlStreamAction;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->liveStreamType) {
            @$query['LiveStreamType'] = $request->liveStreamType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->streamName) {
            @$query['StreamName'] = $request->streamName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResumeVsStream',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResumeVsStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ResumeVsStreamRequest
     *
     * @returns ResumeVsStreamResponse
     *
     * @param ResumeVsStreamRequest $request
     *
     * @return ResumeVsStreamResponse
     */
    public function resumeVsStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resumeVsStreamWithOptions($request, $runtime);
    }

    /**
     * 下发shell命令，同步响应。不适用于耗时命令。
     *
     * @param request - SendRenderingInstanceCommandsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendRenderingInstanceCommandsResponse
     *
     * @param SendRenderingInstanceCommandsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return SendRenderingInstanceCommandsResponse
     */
    public function sendRenderingInstanceCommandsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->renderingInstanceId) {
            @$query['RenderingInstanceId'] = $request->renderingInstanceId;
        }

        $body = [];
        if (null !== $request->commands) {
            @$body['Commands'] = $request->commands;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'SendRenderingInstanceCommands',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendRenderingInstanceCommandsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 下发shell命令，同步响应。不适用于耗时命令。
     *
     * @param request - SendRenderingInstanceCommandsRequest
     *
     * @returns SendRenderingInstanceCommandsResponse
     *
     * @param SendRenderingInstanceCommandsRequest $request
     *
     * @return SendRenderingInstanceCommandsResponse
     */
    public function sendRenderingInstanceCommands($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendRenderingInstanceCommandsWithOptions($request, $runtime);
    }

    /**
     * @param request - SetPresetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetPresetResponse
     *
     * @param SetPresetRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return SetPresetResponse
     */
    public function setPresetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->presetId) {
            @$query['PresetId'] = $request->presetId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetPreset',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetPresetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SetPresetRequest
     *
     * @returns SetPresetResponse
     *
     * @param SetPresetRequest $request
     *
     * @return SetPresetResponse
     */
    public function setPreset($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setPresetWithOptions($request, $runtime);
    }

    /**
     * @param request - SetVsDomainCertificateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetVsDomainCertificateResponse
     *
     * @param SetVsDomainCertificateRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SetVsDomainCertificateResponse
     */
    public function setVsDomainCertificateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->certName) {
            @$query['CertName'] = $request->certName;
        }

        if (null !== $request->certType) {
            @$query['CertType'] = $request->certType;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->forceSet) {
            @$query['ForceSet'] = $request->forceSet;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->SSLPri) {
            @$query['SSLPri'] = $request->SSLPri;
        }

        if (null !== $request->SSLProtocol) {
            @$query['SSLProtocol'] = $request->SSLProtocol;
        }

        if (null !== $request->SSLPub) {
            @$query['SSLPub'] = $request->SSLPub;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetVsDomainCertificate',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetVsDomainCertificateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SetVsDomainCertificateRequest
     *
     * @returns SetVsDomainCertificateResponse
     *
     * @param SetVsDomainCertificateRequest $request
     *
     * @return SetVsDomainCertificateResponse
     */
    public function setVsDomainCertificate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setVsDomainCertificateWithOptions($request, $runtime);
    }

    /**
     * @param request - SetVsStreamsNotifyUrlConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetVsStreamsNotifyUrlConfigResponse
     *
     * @param SetVsStreamsNotifyUrlConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SetVsStreamsNotifyUrlConfigResponse
     */
    public function setVsStreamsNotifyUrlConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authKey) {
            @$query['AuthKey'] = $request->authKey;
        }

        if (null !== $request->authType) {
            @$query['AuthType'] = $request->authType;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->notifyUrl) {
            @$query['NotifyUrl'] = $request->notifyUrl;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetVsStreamsNotifyUrlConfig',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetVsStreamsNotifyUrlConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SetVsStreamsNotifyUrlConfigRequest
     *
     * @returns SetVsStreamsNotifyUrlConfigResponse
     *
     * @param SetVsStreamsNotifyUrlConfigRequest $request
     *
     * @return SetVsStreamsNotifyUrlConfigResponse
     */
    public function setVsStreamsNotifyUrlConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setVsStreamsNotifyUrlConfigWithOptions($request, $runtime);
    }

    /**
     * @param request - StartDeviceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartDeviceResponse
     *
     * @param StartDeviceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return StartDeviceResponse
     */
    public function startDeviceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartDevice',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - StartDeviceRequest
     *
     * @returns StartDeviceResponse
     *
     * @param StartDeviceRequest $request
     *
     * @return StartDeviceResponse
     */
    public function startDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDeviceWithOptions($request, $runtime);
    }

    /**
     * @param request - StartParentPlatformRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartParentPlatformResponse
     *
     * @param StartParentPlatformRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return StartParentPlatformResponse
     */
    public function startParentPlatformWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartParentPlatform',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartParentPlatformResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - StartParentPlatformRequest
     *
     * @returns StartParentPlatformResponse
     *
     * @param StartParentPlatformRequest $request
     *
     * @return StartParentPlatformResponse
     */
    public function startParentPlatform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startParentPlatformWithOptions($request, $runtime);
    }

    /**
     * @param request - StartPublishStreamRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartPublishStreamResponse
     *
     * @param StartPublishStreamRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return StartPublishStreamResponse
     */
    public function startPublishStreamWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->publishUrl) {
            @$query['PublishUrl'] = $request->publishUrl;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartPublishStream',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartPublishStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - StartPublishStreamRequest
     *
     * @returns StartPublishStreamResponse
     *
     * @param StartPublishStreamRequest $request
     *
     * @return StartPublishStreamResponse
     */
    public function startPublishStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startPublishStreamWithOptions($request, $runtime);
    }

    /**
     * @param request - StartRecordStreamRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartRecordStreamResponse
     *
     * @param StartRecordStreamRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return StartRecordStreamResponse
     */
    public function startRecordStreamWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->app) {
            @$query['App'] = $request->app;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->playDomain) {
            @$query['PlayDomain'] = $request->playDomain;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartRecordStream',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartRecordStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - StartRecordStreamRequest
     *
     * @returns StartRecordStreamResponse
     *
     * @param StartRecordStreamRequest $request
     *
     * @return StartRecordStreamResponse
     */
    public function startRecordStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startRecordStreamWithOptions($request, $runtime);
    }

    /**
     * 调度一个空闲云应用服务实例，并完成服务启动。
     *
     * @param tmpReq - StartRenderingSessionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartRenderingSessionResponse
     *
     * @param StartRenderingSessionRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return StartRenderingSessionResponse
     */
    public function startRenderingSessionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new StartRenderingSessionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->clientParams) {
            $request->clientParamsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->clientParams, 'ClientParams', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->clientParamsShrink) {
            @$query['ClientParams'] = $request->clientParamsShrink;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartRenderingSession',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartRenderingSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 调度一个空闲云应用服务实例，并完成服务启动。
     *
     * @param request - StartRenderingSessionRequest
     *
     * @returns StartRenderingSessionResponse
     *
     * @param StartRenderingSessionRequest $request
     *
     * @return StartRenderingSessionResponse
     */
    public function startRenderingSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startRenderingSessionWithOptions($request, $runtime);
    }

    /**
     * @param request - StartStreamRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartStreamResponse
     *
     * @param StartStreamRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return StartStreamResponse
     */
    public function startStreamWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartStream',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - StartStreamRequest
     *
     * @returns StartStreamResponse
     *
     * @param StartStreamRequest $request
     *
     * @return StartStreamResponse
     */
    public function startStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startStreamWithOptions($request, $runtime);
    }

    /**
     * @param request - StartTransferStreamRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartTransferStreamResponse
     *
     * @param StartTransferStreamRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return StartTransferStreamResponse
     */
    public function startTransferStreamWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->transcode) {
            @$query['Transcode'] = $request->transcode;
        }

        if (null !== $request->url) {
            @$query['Url'] = $request->url;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartTransferStream',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartTransferStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - StartTransferStreamRequest
     *
     * @returns StartTransferStreamResponse
     *
     * @param StartTransferStreamRequest $request
     *
     * @return StartTransferStreamResponse
     */
    public function startTransferStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startTransferStreamWithOptions($request, $runtime);
    }

    /**
     * @param request - StopAdjustRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopAdjustResponse
     *
     * @param StopAdjustRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return StopAdjustResponse
     */
    public function stopAdjustWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->focus) {
            @$query['Focus'] = $request->focus;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->iris) {
            @$query['Iris'] = $request->iris;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopAdjust',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopAdjustResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - StopAdjustRequest
     *
     * @returns StopAdjustResponse
     *
     * @param StopAdjustRequest $request
     *
     * @return StopAdjustResponse
     */
    public function stopAdjust($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopAdjustWithOptions($request, $runtime);
    }

    /**
     * @param request - StopDeviceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopDeviceResponse
     *
     * @param StopDeviceRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return StopDeviceResponse
     */
    public function stopDeviceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopDevice',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - StopDeviceRequest
     *
     * @returns StopDeviceResponse
     *
     * @param StopDeviceRequest $request
     *
     * @return StopDeviceResponse
     */
    public function stopDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDeviceWithOptions($request, $runtime);
    }

    /**
     * @param request - StopMoveRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopMoveResponse
     *
     * @param StopMoveRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return StopMoveResponse
     */
    public function stopMoveWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->pan) {
            @$query['Pan'] = $request->pan;
        }

        if (null !== $request->tilt) {
            @$query['Tilt'] = $request->tilt;
        }

        if (null !== $request->zoom) {
            @$query['Zoom'] = $request->zoom;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopMove',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopMoveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - StopMoveRequest
     *
     * @returns StopMoveResponse
     *
     * @param StopMoveRequest $request
     *
     * @return StopMoveResponse
     */
    public function stopMove($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopMoveWithOptions($request, $runtime);
    }

    /**
     * @param request - StopPublishStreamRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopPublishStreamResponse
     *
     * @param StopPublishStreamRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return StopPublishStreamResponse
     */
    public function stopPublishStreamWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopPublishStream',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopPublishStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - StopPublishStreamRequest
     *
     * @returns StopPublishStreamResponse
     *
     * @param StopPublishStreamRequest $request
     *
     * @return StopPublishStreamResponse
     */
    public function stopPublishStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopPublishStreamWithOptions($request, $runtime);
    }

    /**
     * @param request - StopRecordStreamRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopRecordStreamResponse
     *
     * @param StopRecordStreamRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return StopRecordStreamResponse
     */
    public function stopRecordStreamWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->app) {
            @$query['App'] = $request->app;
        }

        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->playDomain) {
            @$query['PlayDomain'] = $request->playDomain;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopRecordStream',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopRecordStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - StopRecordStreamRequest
     *
     * @returns StopRecordStreamResponse
     *
     * @param StopRecordStreamRequest $request
     *
     * @return StopRecordStreamResponse
     */
    public function stopRecordStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopRecordStreamWithOptions($request, $runtime);
    }

    /**
     * 关闭指定的云应用服务会话并回收相关实例资源。
     *
     * @remarks
     * ## 请求说明
     *
     * @param request - StopRenderingSessionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopRenderingSessionResponse
     *
     * @param StopRenderingSessionRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return StopRenderingSessionResponse
     */
    public function stopRenderingSessionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientId) {
            @$query['ClientId'] = $request->clientId;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopRenderingSession',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopRenderingSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 关闭指定的云应用服务会话并回收相关实例资源。
     *
     * @remarks
     * ## 请求说明
     *
     * @param request - StopRenderingSessionRequest
     *
     * @returns StopRenderingSessionResponse
     *
     * @param StopRenderingSessionRequest $request
     *
     * @return StopRenderingSessionResponse
     */
    public function stopRenderingSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopRenderingSessionWithOptions($request, $runtime);
    }

    /**
     * @param request - StopStreamRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopStreamResponse
     *
     * @param StopStreamRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return StopStreamResponse
     */
    public function stopStreamWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopStream',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - StopStreamRequest
     *
     * @returns StopStreamResponse
     *
     * @param StopStreamRequest $request
     *
     * @return StopStreamResponse
     */
    public function stopStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopStreamWithOptions($request, $runtime);
    }

    /**
     * @param request - StopTransferStreamRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopTransferStreamResponse
     *
     * @param StopTransferStreamRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return StopTransferStreamResponse
     */
    public function stopTransferStreamWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->transcode) {
            @$query['Transcode'] = $request->transcode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopTransferStream',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopTransferStreamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - StopTransferStreamRequest
     *
     * @returns StopTransferStreamResponse
     *
     * @param StopTransferStreamRequest $request
     *
     * @return StopTransferStreamResponse
     */
    public function stopTransferStream($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopTransferStreamWithOptions($request, $runtime);
    }

    /**
     * @param request - SyncCatalogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SyncCatalogsResponse
     *
     * @param SyncCatalogsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SyncCatalogsResponse
     */
    public function syncCatalogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SyncCatalogs',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SyncCatalogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - SyncCatalogsRequest
     *
     * @returns SyncCatalogsResponse
     *
     * @param SyncCatalogsRequest $request
     *
     * @return SyncCatalogsResponse
     */
    public function syncCatalogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncCatalogsWithOptions($request, $runtime);
    }

    /**
     * @param request - UnbindDirectoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindDirectoryResponse
     *
     * @param UnbindDirectoryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UnbindDirectoryResponse
     */
    public function unbindDirectoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnbindDirectory',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnbindDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UnbindDirectoryRequest
     *
     * @returns UnbindDirectoryResponse
     *
     * @param UnbindDirectoryRequest $request
     *
     * @return UnbindDirectoryResponse
     */
    public function unbindDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindDirectoryWithOptions($request, $runtime);
    }

    /**
     * @param request - UnbindParentPlatformDeviceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindParentPlatformDeviceResponse
     *
     * @param UnbindParentPlatformDeviceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UnbindParentPlatformDeviceResponse
     */
    public function unbindParentPlatformDeviceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->parentPlatformId) {
            @$query['ParentPlatformId'] = $request->parentPlatformId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnbindParentPlatformDevice',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnbindParentPlatformDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UnbindParentPlatformDeviceRequest
     *
     * @returns UnbindParentPlatformDeviceResponse
     *
     * @param UnbindParentPlatformDeviceRequest $request
     *
     * @return UnbindParentPlatformDeviceResponse
     */
    public function unbindParentPlatformDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindParentPlatformDeviceWithOptions($request, $runtime);
    }

    /**
     * @param request - UnbindPurchasedDeviceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindPurchasedDeviceResponse
     *
     * @param UnbindPurchasedDeviceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UnbindPurchasedDeviceResponse
     */
    public function unbindPurchasedDeviceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnbindPurchasedDevice',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnbindPurchasedDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UnbindPurchasedDeviceRequest
     *
     * @returns UnbindPurchasedDeviceResponse
     *
     * @param UnbindPurchasedDeviceRequest $request
     *
     * @return UnbindPurchasedDeviceResponse
     */
    public function unbindPurchasedDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindPurchasedDeviceWithOptions($request, $runtime);
    }

    /**
     * @param request - UnbindTemplateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindTemplateResponse
     *
     * @param UnbindTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UnbindTemplateResponse
     */
    public function unbindTemplateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->templateId) {
            @$query['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateType) {
            @$query['TemplateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnbindTemplate',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnbindTemplateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UnbindTemplateRequest
     *
     * @returns UnbindTemplateResponse
     *
     * @param UnbindTemplateRequest $request
     *
     * @return UnbindTemplateResponse
     */
    public function unbindTemplate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindTemplateWithOptions($request, $runtime);
    }

    /**
     * 卸载云应用.
     *
     * @param request - UninstallCloudAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UninstallCloudAppResponse
     *
     * @param UninstallCloudAppRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UninstallCloudAppResponse
     */
    public function uninstallCloudAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->renderingInstanceId) {
            @$query['RenderingInstanceId'] = $request->renderingInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UninstallCloudApp',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UninstallCloudAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 卸载云应用.
     *
     * @param request - UninstallCloudAppRequest
     *
     * @returns UninstallCloudAppResponse
     *
     * @param UninstallCloudAppRequest $request
     *
     * @return UninstallCloudAppResponse
     */
    public function uninstallCloudApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uninstallCloudAppWithOptions($request, $runtime);
    }

    /**
     * @param request - UnlockDeviceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnlockDeviceResponse
     *
     * @param UnlockDeviceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UnlockDeviceResponse
     */
    public function unlockDeviceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->id) {
            @$query['Id'] = $request->id;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnlockDevice',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnlockDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UnlockDeviceRequest
     *
     * @returns UnlockDeviceResponse
     *
     * @param UnlockDeviceRequest $request
     *
     * @return UnlockDeviceResponse
     */
    public function unlockDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unlockDeviceWithOptions($request, $runtime);
    }

    /**
     * 更新云应用信息.
     *
     * @param request - UpdateCloudAppInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateCloudAppInfoResponse
     *
     * @param UpdateCloudAppInfoRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpdateCloudAppInfoResponse
     */
    public function updateCloudAppInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCloudAppInfo',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateCloudAppInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新云应用信息.
     *
     * @param request - UpdateCloudAppInfoRequest
     *
     * @returns UpdateCloudAppInfoResponse
     *
     * @param UpdateCloudAppInfoRequest $request
     *
     * @return UpdateCloudAppInfoResponse
     */
    public function updateCloudAppInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateCloudAppInfoWithOptions($request, $runtime);
    }

    /**
     * 更新文件信息。
     *
     * @param request - UpdateFileInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateFileInfoResponse
     *
     * @param UpdateFileInfoRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateFileInfoResponse
     */
    public function updateFileInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->fileId) {
            @$query['FileId'] = $request->fileId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateFileInfo',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateFileInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新文件信息。
     *
     * @param request - UpdateFileInfoRequest
     *
     * @returns UpdateFileInfoResponse
     *
     * @param UpdateFileInfoRequest $request
     *
     * @return UpdateFileInfoResponse
     */
    public function updateFileInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFileInfoWithOptions($request, $runtime);
    }

    /**
     * 更新云渲染实例配置参数.
     *
     * @param tmpReq - UpdateRenderingInstanceConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRenderingInstanceConfigurationResponse
     *
     * @param UpdateRenderingInstanceConfigurationRequest $tmpReq
     * @param RuntimeOptions                              $runtime
     *
     * @return UpdateRenderingInstanceConfigurationResponse
     */
    public function updateRenderingInstanceConfigurationWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateRenderingInstanceConfigurationShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->configuration) {
            $request->configurationShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->configuration, 'Configuration', 'json');
        }

        $query = [];
        if (null !== $request->renderingInstanceId) {
            @$query['RenderingInstanceId'] = $request->renderingInstanceId;
        }

        $body = [];
        if (null !== $request->configurationShrink) {
            @$body['Configuration'] = $request->configurationShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateRenderingInstanceConfiguration',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateRenderingInstanceConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新云渲染实例配置参数.
     *
     * @param request - UpdateRenderingInstanceConfigurationRequest
     *
     * @returns UpdateRenderingInstanceConfigurationResponse
     *
     * @param UpdateRenderingInstanceConfigurationRequest $request
     *
     * @return UpdateRenderingInstanceConfigurationResponse
     */
    public function updateRenderingInstanceConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRenderingInstanceConfigurationWithOptions($request, $runtime);
    }

    /**
     * 更新实例设置.
     *
     * @param tmpReq - UpdateRenderingInstanceSettingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRenderingInstanceSettingsResponse
     *
     * @param UpdateRenderingInstanceSettingsRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return UpdateRenderingInstanceSettingsResponse
     */
    public function updateRenderingInstanceSettingsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateRenderingInstanceSettingsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->settings) {
            $request->settingsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->settings, 'Settings', 'json');
        }

        $query = [];
        if (null !== $request->renderingInstanceId) {
            @$query['RenderingInstanceId'] = $request->renderingInstanceId;
        }

        if (null !== $request->settingsShrink) {
            @$query['Settings'] = $request->settingsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateRenderingInstanceSettings',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateRenderingInstanceSettingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新实例设置.
     *
     * @param request - UpdateRenderingInstanceSettingsRequest
     *
     * @returns UpdateRenderingInstanceSettingsResponse
     *
     * @param UpdateRenderingInstanceSettingsRequest $request
     *
     * @return UpdateRenderingInstanceSettingsResponse
     */
    public function updateRenderingInstanceSettings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRenderingInstanceSettingsWithOptions($request, $runtime);
    }

    /**
     * 更新一个项目的属性信息.
     *
     * @param tmpReq - UpdateRenderingProjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateRenderingProjectResponse
     *
     * @param UpdateRenderingProjectRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateRenderingProjectResponse
     */
    public function updateRenderingProjectWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateRenderingProjectShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->sessionAttribs) {
            $request->sessionAttribsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sessionAttribs, 'SessionAttribs', 'json');
        }

        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->projectId) {
            @$query['ProjectId'] = $request->projectId;
        }

        if (null !== $request->projectName) {
            @$query['ProjectName'] = $request->projectName;
        }

        if (null !== $request->sessionAttribsShrink) {
            @$query['SessionAttribs'] = $request->sessionAttribsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateRenderingProject',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateRenderingProjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 更新一个项目的属性信息.
     *
     * @param request - UpdateRenderingProjectRequest
     *
     * @returns UpdateRenderingProjectResponse
     *
     * @param UpdateRenderingProjectRequest $request
     *
     * @return UpdateRenderingProjectResponse
     */
    public function updateRenderingProject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRenderingProjectWithOptions($request, $runtime);
    }

    /**
     * @param request - UpdateVsPullStreamInfoConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateVsPullStreamInfoConfigResponse
     *
     * @param UpdateVsPullStreamInfoConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateVsPullStreamInfoConfigResponse
     */
    public function updateVsPullStreamInfoConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->always) {
            @$query['Always'] = $request->always;
        }

        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->sourceUrl) {
            @$query['SourceUrl'] = $request->sourceUrl;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->streamName) {
            @$query['StreamName'] = $request->streamName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateVsPullStreamInfoConfig',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateVsPullStreamInfoConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - UpdateVsPullStreamInfoConfigRequest
     *
     * @returns UpdateVsPullStreamInfoConfigResponse
     *
     * @param UpdateVsPullStreamInfoConfigRequest $request
     *
     * @return UpdateVsPullStreamInfoConfigResponse
     */
    public function updateVsPullStreamInfoConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateVsPullStreamInfoConfigWithOptions($request, $runtime);
    }

    /**
     * 应用上架.
     *
     * @param request - UploadCloudAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadCloudAppResponse
     *
     * @param UploadCloudAppRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UploadCloudAppResponse
     */
    public function uploadCloudAppWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->appVersion) {
            @$query['AppVersion'] = $request->appVersion;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->downloadUrl) {
            @$query['DownloadUrl'] = $request->downloadUrl;
        }

        if (null !== $request->md5) {
            @$query['Md5'] = $request->md5;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UploadCloudApp',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadCloudAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 应用上架.
     *
     * @param request - UploadCloudAppRequest
     *
     * @returns UploadCloudAppResponse
     *
     * @param UploadCloudAppRequest $request
     *
     * @return UploadCloudAppResponse
     */
    public function uploadCloudApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadCloudAppWithOptions($request, $runtime);
    }

    /**
     * 文件上传.
     *
     * @param request - UploadFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadFileResponse
     *
     * @param UploadFileRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return UploadFileResponse
     */
    public function uploadFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->md5) {
            @$query['Md5'] = $request->md5;
        }

        if (null !== $request->originUrl) {
            @$query['OriginUrl'] = $request->originUrl;
        }

        if (null !== $request->targetPath) {
            @$query['TargetPath'] = $request->targetPath;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UploadFile',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 文件上传.
     *
     * @param request - UploadFileRequest
     *
     * @returns UploadFileResponse
     *
     * @param UploadFileRequest $request
     *
     * @return UploadFileResponse
     */
    public function uploadFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadFileWithOptions($request, $runtime);
    }

    /**
     * 上传公钥，用于安全登陆鉴权。
     *
     * @param request - UploadPublicKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadPublicKeyResponse
     *
     * @param UploadPublicKeyRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UploadPublicKeyResponse
     */
    public function uploadPublicKeyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->content) {
            @$query['Content'] = $request->content;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->keyGroup) {
            @$query['KeyGroup'] = $request->keyGroup;
        }

        if (null !== $request->keyName) {
            @$query['KeyName'] = $request->keyName;
        }

        if (null !== $request->keyType) {
            @$query['KeyType'] = $request->keyType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UploadPublicKey',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadPublicKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 上传公钥，用于安全登陆鉴权。
     *
     * @param request - UploadPublicKeyRequest
     *
     * @returns UploadPublicKeyResponse
     *
     * @param UploadPublicKeyRequest $request
     *
     * @return UploadPublicKeyResponse
     */
    public function uploadPublicKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadPublicKeyWithOptions($request, $runtime);
    }

    /**
     * @param request - VerifyVsDomainOwnerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VerifyVsDomainOwnerResponse
     *
     * @param VerifyVsDomainOwnerRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return VerifyVsDomainOwnerResponse
     */
    public function verifyVsDomainOwnerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->verifyType) {
            @$query['VerifyType'] = $request->verifyType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VerifyVsDomainOwner',
            'version' => '2018-12-12',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VerifyVsDomainOwnerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - VerifyVsDomainOwnerRequest
     *
     * @returns VerifyVsDomainOwnerResponse
     *
     * @param VerifyVsDomainOwnerRequest $request
     *
     * @return VerifyVsDomainOwnerResponse
     */
    public function verifyVsDomainOwner($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyVsDomainOwnerWithOptions($request, $runtime);
    }
}
