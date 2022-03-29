<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Vs\V20181212\Models\AddRegisteredDeviceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\AddRegisteredDeviceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\AddRegisteredVendorRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\AddRegisteredVendorResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\AddRenderingDeviceInternetPortsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\AddRenderingDeviceInternetPortsResponse;
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
use AlibabaCloud\SDK\Vs\V20181212\Models\CaptureDeviceSnapshotRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\CaptureDeviceSnapshotResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ContinuousAdjustRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ContinuousAdjustResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ContinuousMoveRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ContinuousMoveResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateAIConfigRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateAIConfigResponse;
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
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateRenderingDeviceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateRenderingDeviceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateStreamSnapshotRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateStreamSnapshotResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateTemplateRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\CreateTemplateResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteAIConfigRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteAIConfigResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteBucketRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteBucketResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteClusterRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteClusterResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteDeviceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteDeviceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteDirectoryRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteDirectoryResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteGroupRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteGroupResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteParentPlatformRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteParentPlatformResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeletePresetRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeletePresetResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeletePurchasedDeviceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeletePurchasedDeviceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteRenderingDeviceInternetPortsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteRenderingDeviceInternetPortsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteRenderingDevicesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteRenderingDevicesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteTemplateRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteTemplateResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteVsPullStreamInfoConfigRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteVsPullStreamInfoConfigResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteVsStreamsNotifyUrlConfigRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DeleteVsStreamsNotifyUrlConfigResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeAccountStatRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeAccountStatResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeAIConfigListRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeAIConfigListResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeAIConfigRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeAIConfigResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeAIEventListRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeAIEventListResponse;
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
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeExternalStreamURLRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeExternalStreamURLResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeGroupRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeGroupResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeGroupsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeGroupsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeNodeDevicesInfoRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeNodeDevicesInfoResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeParentPlatformDevicesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeParentPlatformDevicesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeParentPlatformRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeParentPlatformResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeParentPlatformsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeParentPlatformsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribePresetsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribePresetsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribePurchasedDeviceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribePurchasedDeviceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribePurchasedDevicesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribePurchasedDevicesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRecordsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRecordsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingDevicesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingDevicesResponse;
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
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainOnlineUserNumRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainOnlineUserNumResponse;
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
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsPullStreamConfigRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsPullStreamConfigResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsPullStreamInfoConfigRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsPullStreamInfoConfigResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsStorageTrafficUsageDataRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsStorageTrafficUsageDataResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsStorageUsageDataRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsStorageUsageDataResponse;
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
use AlibabaCloud\SDK\Vs\V20181212\Models\ForbidVsStreamRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ForbidVsStreamResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\GetBucketInfoRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\GetBucketInfoResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\GetObjectTotalRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\GetObjectTotalResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\GotoPresetRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\GotoPresetResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListBucketsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListBucketsResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListObjectsRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListObjectsResponse;
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
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyPurchasedDeviceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyPurchasedDeviceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyTemplateRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ModifyTemplateResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\OpenVsServiceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\OperateRenderingDevicesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\OperateRenderingDevicesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\PrepareUploadRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\PrepareUploadResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\PutBucketRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\PutBucketResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ResetRenderingDevicesRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ResetRenderingDevicesResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\ResumeVsStreamRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\ResumeVsStreamResponse;
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
use AlibabaCloud\SDK\Vs\V20181212\Models\StopParentPlatformRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\StopParentPlatformResponse;
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
use AlibabaCloud\SDK\Vs\V20181212\Models\UnlockDeviceRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\UnlockDeviceResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateAIConfigRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateAIConfigResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateBucketInfoRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateBucketInfoResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateClusterRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateClusterResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateRenderingDeviceSpecRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateRenderingDeviceSpecResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateVsPullStreamInfoConfigRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpdateVsPullStreamInfoConfigResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpgradeRenderingDevicesHostOSRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpgradeRenderingDevicesHostOSResponse;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpgradeRenderingDevicesImageRequest;
use AlibabaCloud\SDK\Vs\V20181212\Models\UpgradeRenderingDevicesImageResponse;
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param AddRegisteredDeviceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AddRegisteredDeviceResponse
     */
    public function addRegisteredDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dsn)) {
            $query['Dsn'] = $request->dsn;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->registerCode)) {
            $query['RegisterCode'] = $request->registerCode;
        }
        if (!Utils::isUnset($request->secretKey)) {
            $query['SecretKey'] = $request->secretKey;
        }
        if (!Utils::isUnset($request->vendor)) {
            $query['Vendor'] = $request->vendor;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddRegisteredDevice',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddRegisteredDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddRegisteredDeviceRequest $request
     *
     * @return AddRegisteredDeviceResponse
     */
    public function addRegisteredDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addRegisteredDeviceWithOptions($request, $runtime);
    }

    /**
     * @param AddRegisteredVendorRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return AddRegisteredVendorResponse
     */
    public function addRegisteredVendorWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
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
            'action'      => 'AddRegisteredVendor',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddRegisteredVendorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddRegisteredVendorRequest $request
     *
     * @return AddRegisteredVendorResponse
     */
    public function addRegisteredVendor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addRegisteredVendorWithOptions($request, $runtime);
    }

    /**
     * @param AddRenderingDeviceInternetPortsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return AddRenderingDeviceInternetPortsResponse
     */
    public function addRenderingDeviceInternetPortsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ISP)) {
            $query['ISP'] = $request->ISP;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->internalPort)) {
            $query['InternalPort'] = $request->internalPort;
        }
        if (!Utils::isUnset($request->ipProtocol)) {
            $query['IpProtocol'] = $request->ipProtocol;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddRenderingDeviceInternetPorts',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddRenderingDeviceInternetPortsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddRenderingDeviceInternetPortsRequest $request
     *
     * @return AddRenderingDeviceInternetPortsResponse
     */
    public function addRenderingDeviceInternetPorts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addRenderingDeviceInternetPortsWithOptions($request, $runtime);
    }

    /**
     * @param AddVsPullStreamInfoConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return AddVsPullStreamInfoConfigResponse
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
     * @param BatchBindDirectoriesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return BatchBindDirectoriesResponse
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
     * @param BatchBindParentPlatformDevicesRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return BatchBindParentPlatformDevicesResponse
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
     * @param BatchBindPurchasedDevicesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return BatchBindPurchasedDevicesResponse
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
     * @param BatchBindTemplateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return BatchBindTemplateResponse
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
     * @param BatchBindTemplatesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return BatchBindTemplatesResponse
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
     * @param BatchDeleteDevicesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return BatchDeleteDevicesResponse
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
     * @param BatchDeleteVsDomainConfigsRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return BatchDeleteVsDomainConfigsResponse
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
     * @param BatchForbidVsStreamRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return BatchForbidVsStreamResponse
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
     * @param BatchResumeVsStreamRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return BatchResumeVsStreamResponse
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
     * @param BatchSetVsDomainConfigsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return BatchSetVsDomainConfigsResponse
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
     * @param BatchStartDevicesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return BatchStartDevicesResponse
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
     * @param BatchStartStreamsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return BatchStartStreamsResponse
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
     * @param BatchStopDevicesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return BatchStopDevicesResponse
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
     * @param BatchStopStreamsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return BatchStopStreamsResponse
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
     * @param BatchUnbindDirectoriesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return BatchUnbindDirectoriesResponse
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
     * @param BatchUnbindParentPlatformDevicesRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return BatchUnbindParentPlatformDevicesResponse
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
     * @param BatchUnbindPurchasedDevicesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return BatchUnbindPurchasedDevicesResponse
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
     * @param BatchUnbindTemplateRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return BatchUnbindTemplateResponse
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
     * @param BatchUnbindTemplatesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return BatchUnbindTemplatesResponse
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
     * @param BindDirectoryRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return BindDirectoryResponse
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
     * @param BindParentPlatformDeviceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return BindParentPlatformDeviceResponse
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
     * @param BindPurchasedDeviceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return BindPurchasedDeviceResponse
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
     * @param BindTemplateRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return BindTemplateResponse
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
     * @param CaptureDeviceSnapshotRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CaptureDeviceSnapshotResponse
     */
    public function captureDeviceSnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->snapshotConfig)) {
            $query['SnapshotConfig'] = $request->snapshotConfig;
        }
        if (!Utils::isUnset($request->streamId)) {
            $query['StreamId'] = $request->streamId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CaptureDeviceSnapshot',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CaptureDeviceSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CaptureDeviceSnapshotRequest $request
     *
     * @return CaptureDeviceSnapshotResponse
     */
    public function captureDeviceSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->captureDeviceSnapshotWithOptions($request, $runtime);
    }

    /**
     * @param ContinuousAdjustRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ContinuousAdjustResponse
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
     * @param ContinuousMoveRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ContinuousMoveResponse
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
     * @param CreateAIConfigRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateAIConfigResponse
     */
    public function createAIConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->captureInterval)) {
            $query['CaptureInterval'] = $request->captureInterval;
        }
        if (!Utils::isUnset($request->configs)) {
            $query['Configs'] = $request->configs;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->features)) {
            $query['Features'] = $request->features;
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
            'action'      => 'CreateAIConfig',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAIConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAIConfigRequest $request
     *
     * @return CreateAIConfigResponse
     */
    public function createAIConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAIConfigWithOptions($request, $runtime);
    }

    /**
     * @param CreateClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateClusterResponse
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
     * @param CreateClusterRequest $request
     *
     * @return CreateClusterResponse
     */
    public function createCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClusterWithOptions($request, $runtime);
    }

    /**
     * @param CreateDeviceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateDeviceResponse
     */
    public function createDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alarmMethod)) {
            $query['AlarmMethod'] = $request->alarmMethod;
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
     * @param CreateDeviceAlarmRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateDeviceAlarmResponse
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
     * @param CreateDirectoryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateDirectoryResponse
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
     * @param CreateGroupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateGroupResponse
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
     * @param CreateParentPlatformRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateParentPlatformResponse
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
     * @param CreateRenderingDeviceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateRenderingDeviceResponse
     */
    public function createRenderingDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->autoRenewPeriod)) {
            $query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->count)) {
            $query['Count'] = $request->count;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->edgeNodeName)) {
            $query['EdgeNodeName'] = $request->edgeNodeName;
        }
        if (!Utils::isUnset($request->ISP)) {
            $query['ISP'] = $request->ISP;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->instanceChargeType)) {
            $query['InstanceChargeType'] = $request->instanceChargeType;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->specification)) {
            $query['Specification'] = $request->specification;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRenderingDevice',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRenderingDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateRenderingDeviceRequest $request
     *
     * @return CreateRenderingDeviceResponse
     */
    public function createRenderingDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRenderingDeviceWithOptions($request, $runtime);
    }

    /**
     * @param CreateStreamSnapshotRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateStreamSnapshotResponse
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
     * @param CreateTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateTemplateResponse
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
     * @param DeleteAIConfigRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteAIConfigResponse
     */
    public function deleteAIConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configId)) {
            $query['ConfigId'] = $request->configId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAIConfig',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAIConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAIConfigRequest $request
     *
     * @return DeleteAIConfigResponse
     */
    public function deleteAIConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAIConfigWithOptions($request, $runtime);
    }

    /**
     * @param DeleteBucketRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteBucketResponse
     */
    public function deleteBucketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucketName)) {
            $query['BucketName'] = $request->bucketName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteBucket',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteBucketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteBucketRequest $request
     *
     * @return DeleteBucketResponse
     */
    public function deleteBucket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBucketWithOptions($request, $runtime);
    }

    /**
     * @param DeleteClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteClusterResponse
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
     * @param DeleteClusterRequest $request
     *
     * @return DeleteClusterResponse
     */
    public function deleteCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClusterWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDeviceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteDeviceResponse
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
     * @param DeleteDirectoryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteDirectoryResponse
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
     * @param DeleteGroupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteGroupResponse
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
     * @param DeleteParentPlatformRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteParentPlatformResponse
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
     * @param DeletePresetRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeletePresetResponse
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
     * @param DeletePurchasedDeviceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeletePurchasedDeviceResponse
     */
    public function deletePurchasedDeviceWithOptions($request, $runtime)
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
            'action'      => 'DeletePurchasedDevice',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePurchasedDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeletePurchasedDeviceRequest $request
     *
     * @return DeletePurchasedDeviceResponse
     */
    public function deletePurchasedDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePurchasedDeviceWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRenderingDeviceInternetPortsRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DeleteRenderingDeviceInternetPortsResponse
     */
    public function deleteRenderingDeviceInternetPortsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ISP)) {
            $query['ISP'] = $request->ISP;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->internalPort)) {
            $query['InternalPort'] = $request->internalPort;
        }
        if (!Utils::isUnset($request->ipProtocol)) {
            $query['IpProtocol'] = $request->ipProtocol;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteRenderingDeviceInternetPorts',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRenderingDeviceInternetPortsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteRenderingDeviceInternetPortsRequest $request
     *
     * @return DeleteRenderingDeviceInternetPortsResponse
     */
    public function deleteRenderingDeviceInternetPorts($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRenderingDeviceInternetPortsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteRenderingDevicesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteRenderingDevicesResponse
     */
    public function deleteRenderingDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteRenderingDevices',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRenderingDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteRenderingDevicesRequest $request
     *
     * @return DeleteRenderingDevicesResponse
     */
    public function deleteRenderingDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteRenderingDevicesWithOptions($request, $runtime);
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
     * @param DeleteVsPullStreamInfoConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DeleteVsPullStreamInfoConfigResponse
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
     * @param DeleteVsStreamsNotifyUrlConfigRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteVsStreamsNotifyUrlConfigResponse
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
     * @param DescribeAIConfigRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeAIConfigResponse
     */
    public function describeAIConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->configId)) {
            $query['ConfigId'] = $request->configId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAIConfig',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAIConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAIConfigRequest $request
     *
     * @return DescribeAIConfigResponse
     */
    public function describeAIConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAIConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAIConfigListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeAIConfigListResponse
     */
    public function describeAIConfigListWithOptions($request, $runtime)
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
            'action'      => 'DescribeAIConfigList',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAIConfigListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAIConfigListRequest $request
     *
     * @return DescribeAIConfigListResponse
     */
    public function describeAIConfigList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAIConfigListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAIEventListRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeAIEventListResponse
     */
    public function describeAIEventListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAIEventList',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAIEventListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeAIEventListRequest $request
     *
     * @return DescribeAIEventListResponse
     */
    public function describeAIEventList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAIEventListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAccountStatRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeAccountStatResponse
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
     * @param DescribeClusterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeClusterResponse
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
     * @param DescribeClusterRequest $request
     *
     * @return DescribeClusterResponse
     */
    public function describeCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClusterDevicesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeClusterDevicesResponse
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
     * @param DescribeClusterDevicesRequest $request
     *
     * @return DescribeClusterDevicesResponse
     */
    public function describeClusterDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterDevicesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClustersRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeClustersResponse
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
     * @param DescribeClustersRequest $request
     *
     * @return DescribeClustersResponse
     */
    public function describeClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClustersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeContainerInstanceIdRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeContainerInstanceIdResponse
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
     * @param DescribeContainerInstanceIdRequest $request
     *
     * @return DescribeContainerInstanceIdResponse
     */
    public function describeContainerInstanceId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeContainerInstanceIdWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDeviceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeDeviceResponse
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
     * @param DescribeDeviceChannelsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDeviceChannelsResponse
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
     * @param DescribeDeviceGatewayRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDeviceGatewayResponse
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
     * @param DescribeDeviceURLRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeDeviceURLResponse
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
     * @param DescribeDevicesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeDevicesResponse
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
     * @param DescribeDirectoriesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDirectoriesResponse
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
     * @param DescribeDirectoryRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeDirectoryResponse
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
     * @param DescribeExternalStreamURLRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeExternalStreamURLResponse
     */
    public function describeExternalStreamURLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->kind)) {
            $query['Kind'] = $request->kind;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->profile)) {
            $query['Profile'] = $request->profile;
        }
        if (!Utils::isUnset($request->txId)) {
            $query['TxId'] = $request->txId;
        }
        if (!Utils::isUnset($request->url)) {
            $query['Url'] = $request->url;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeExternalStreamURL',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExternalStreamURLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeExternalStreamURLRequest $request
     *
     * @return DescribeExternalStreamURLResponse
     */
    public function describeExternalStreamURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExternalStreamURLWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGroupRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeGroupResponse
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
     * @param DescribeGroupsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeGroupsResponse
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
     * @param DescribeNodeDevicesInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeNodeDevicesInfoResponse
     */
    public function describeNodeDevicesInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nodeName)) {
            $query['NodeName'] = $request->nodeName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNodeDevicesInfo',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNodeDevicesInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeNodeDevicesInfoRequest $request
     *
     * @return DescribeNodeDevicesInfoResponse
     */
    public function describeNodeDevicesInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNodeDevicesInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeParentPlatformRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeParentPlatformResponse
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
     * @param DescribeParentPlatformDevicesRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeParentPlatformDevicesResponse
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
     * @param DescribeParentPlatformsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeParentPlatformsResponse
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
     * @param DescribePresetsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribePresetsResponse
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
     * @param DescribePurchasedDeviceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribePurchasedDeviceResponse
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
     * @param DescribePurchasedDevicesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribePurchasedDevicesResponse
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
     * @param DescribeRecordsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRecordsResponse
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
     * @param DescribeRenderingDevicesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeRenderingDevicesResponse
     */
    public function describeRenderingDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRenderingDevices',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRenderingDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRenderingDevicesRequest $request
     *
     * @return DescribeRenderingDevicesResponse
     */
    public function describeRenderingDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRenderingDevicesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeStreamRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeStreamResponse
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
     * @param DescribeStreamURLRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeStreamURLResponse
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
     * @param DescribeStreamVodListRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeStreamVodListResponse
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
     * @param DescribeStreamsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeStreamsResponse
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
     * @param DescribeTemplateRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeTemplateResponse
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
     * @param DescribeTemplatesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeTemplatesResponse
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
     * @param DescribeUserDevicesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeUserDevicesResponse
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
     * @param DescribeUserDevicesRequest $request
     *
     * @return DescribeUserDevicesResponse
     */
    public function describeUserDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserDevicesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVodStreamURLRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeVodStreamURLResponse
     */
    public function describeVodStreamURLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->txId)) {
            $query['TxId'] = $request->txId;
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
     * @param DescribeVsCertificateDetailRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeVsCertificateDetailResponse
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
     * @param DescribeVsCertificateListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeVsCertificateListResponse
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
     * @param DescribeVsDevicesDataRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeVsDevicesDataResponse
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
     * @param DescribeVsDomainBpsDataRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeVsDomainBpsDataResponse
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
     * @param DescribeVsDomainCertificateInfoRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeVsDomainCertificateInfoResponse
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
     * @param DescribeVsDomainConfigsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeVsDomainConfigsResponse
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
     * @param DescribeVsDomainDetailRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeVsDomainDetailResponse
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
     * @param DescribeVsDomainOnlineUserNumRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeVsDomainOnlineUserNumResponse
     */
    public function describeVsDomainOnlineUserNumWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->queryTime)) {
            $query['QueryTime'] = $request->queryTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVsDomainOnlineUserNum',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVsDomainOnlineUserNumResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVsDomainOnlineUserNumRequest $request
     *
     * @return DescribeVsDomainOnlineUserNumResponse
     */
    public function describeVsDomainOnlineUserNum($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsDomainOnlineUserNumWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsDomainPvDataRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeVsDomainPvDataResponse
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
     * @param DescribeVsDomainPvUvDataRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeVsDomainPvUvDataResponse
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
     * @param DescribeVsDomainRecordDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeVsDomainRecordDataResponse
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
     * @param DescribeVsDomainRegionDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeVsDomainRegionDataResponse
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
     * @param DescribeVsDomainReqBpsDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeVsDomainReqBpsDataResponse
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
     * @param DescribeVsDomainReqTrafficDataRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeVsDomainReqTrafficDataResponse
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
     * @param DescribeVsDomainSnapshotDataRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeVsDomainSnapshotDataResponse
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
     * @param DescribeVsDomainTrafficDataRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeVsDomainTrafficDataResponse
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
     * @param DescribeVsDomainUvDataRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeVsDomainUvDataResponse
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
     * @param DescribeVsPullStreamConfigRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeVsPullStreamConfigResponse
     */
    public function describeVsPullStreamConfigWithOptions($request, $runtime)
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
            'action'      => 'DescribeVsPullStreamConfig',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVsPullStreamConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVsPullStreamConfigRequest $request
     *
     * @return DescribeVsPullStreamConfigResponse
     */
    public function describeVsPullStreamConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsPullStreamConfigWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsPullStreamInfoConfigRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeVsPullStreamInfoConfigResponse
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
     * @param DescribeVsStorageTrafficUsageDataRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeVsStorageTrafficUsageDataResponse
     */
    public function describeVsStorageTrafficUsageDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucket)) {
            $query['Bucket'] = $request->bucket;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->splitBy)) {
            $query['SplitBy'] = $request->splitBy;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVsStorageTrafficUsageData',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVsStorageTrafficUsageDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVsStorageTrafficUsageDataRequest $request
     *
     * @return DescribeVsStorageTrafficUsageDataResponse
     */
    public function describeVsStorageTrafficUsageData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsStorageTrafficUsageDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsStorageUsageDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeVsStorageUsageDataResponse
     */
    public function describeVsStorageUsageDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucket)) {
            $query['Bucket'] = $request->bucket;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->interval)) {
            $query['Interval'] = $request->interval;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->splitBy)) {
            $query['SplitBy'] = $request->splitBy;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVsStorageUsageData',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVsStorageUsageDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeVsStorageUsageDataRequest $request
     *
     * @return DescribeVsStorageUsageDataResponse
     */
    public function describeVsStorageUsageData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVsStorageUsageDataWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVsStreamsNotifyUrlConfigRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeVsStreamsNotifyUrlConfigResponse
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
     * @param DescribeVsStreamsOnlineListRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeVsStreamsOnlineListResponse
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
     * @param DescribeVsStreamsPublishListRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeVsStreamsPublishListResponse
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
     * @param DescribeVsTopDomainsByFlowRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeVsTopDomainsByFlowResponse
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
     * @param DescribeVsUpPeakPublishStreamDataRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeVsUpPeakPublishStreamDataResponse
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
     * @param DescribeVsUserResourcePackageRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeVsUserResourcePackageResponse
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
     * @param ForbidVsStreamRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ForbidVsStreamResponse
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
     * @param GetBucketInfoRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetBucketInfoResponse
     */
    public function getBucketInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucketName)) {
            $query['BucketName'] = $request->bucketName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBucketInfo',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBucketInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetBucketInfoRequest $request
     *
     * @return GetBucketInfoResponse
     */
    public function getBucketInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBucketInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetObjectTotalRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetObjectTotalResponse
     */
    public function getObjectTotalWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucketName)) {
            $query['BucketName'] = $request->bucketName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetObjectTotal',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetObjectTotalResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetObjectTotalRequest $request
     *
     * @return GetObjectTotalResponse
     */
    public function getObjectTotal($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getObjectTotalWithOptions($request, $runtime);
    }

    /**
     * @param GotoPresetRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GotoPresetResponse
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
     * @param ListBucketsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListBucketsResponse
     */
    public function listBucketsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->marker)) {
            $query['Marker'] = $request->marker;
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
        if (!Utils::isUnset($request->prefix)) {
            $query['Prefix'] = $request->prefix;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListBuckets',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListBucketsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListBucketsRequest $request
     *
     * @return ListBucketsResponse
     */
    public function listBuckets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBucketsWithOptions($request, $runtime);
    }

    /**
     * @param ListObjectsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListObjectsResponse
     */
    public function listObjectsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucketName)) {
            $query['BucketName'] = $request->bucketName;
        }
        if (!Utils::isUnset($request->continuationToken)) {
            $query['ContinuationToken'] = $request->continuationToken;
        }
        if (!Utils::isUnset($request->delimiter)) {
            $query['Delimiter'] = $request->delimiter;
        }
        if (!Utils::isUnset($request->encodingType)) {
            $query['EncodingType'] = $request->encodingType;
        }
        if (!Utils::isUnset($request->marker)) {
            $query['Marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->maxKeys)) {
            $query['MaxKeys'] = $request->maxKeys;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->prefix)) {
            $query['Prefix'] = $request->prefix;
        }
        if (!Utils::isUnset($request->startAfter)) {
            $query['StartAfter'] = $request->startAfter;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListObjects',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListObjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListObjectsRequest $request
     *
     * @return ListObjectsResponse
     */
    public function listObjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listObjectsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDeviceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ModifyDeviceResponse
     */
    public function modifyDeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alarmMethod)) {
            $query['AlarmMethod'] = $request->alarmMethod;
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
     * @param ModifyDeviceAlarmRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyDeviceAlarmResponse
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
     * @param ModifyDeviceCaptureRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyDeviceCaptureResponse
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
     * @param ModifyDeviceChannelsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyDeviceChannelsResponse
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
     * @param ModifyDirectoryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifyDirectoryResponse
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
     * @param ModifyGroupRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ModifyGroupResponse
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
     * @param ModifyParentPlatformRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyParentPlatformResponse
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
     * @param ModifyPurchasedDeviceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyPurchasedDeviceResponse
     */
    public function modifyPurchasedDeviceWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->orderId)) {
            $query['OrderId'] = $request->orderId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->registerCode)) {
            $query['RegisterCode'] = $request->registerCode;
        }
        if (!Utils::isUnset($request->subType)) {
            $query['SubType'] = $request->subType;
        }
        if (!Utils::isUnset($request->vendor)) {
            $query['Vendor'] = $request->vendor;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyPurchasedDevice',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyPurchasedDeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyPurchasedDeviceRequest $request
     *
     * @return ModifyPurchasedDeviceResponse
     */
    public function modifyPurchasedDevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPurchasedDeviceWithOptions($request, $runtime);
    }

    /**
     * @param ModifyTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyTemplateResponse
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
     * @param RuntimeOptions $runtime
     *
     * @return OpenVsServiceResponse
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
     * @return OpenVsServiceResponse
     */
    public function openVsService()
    {
        $runtime = new RuntimeOptions([]);

        return $this->openVsServiceWithOptions($runtime);
    }

    /**
     * @param OperateRenderingDevicesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return OperateRenderingDevicesResponse
     */
    public function operateRenderingDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->operation)) {
            $query['Operation'] = $request->operation;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->podId)) {
            $query['PodId'] = $request->podId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OperateRenderingDevices',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OperateRenderingDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param OperateRenderingDevicesRequest $request
     *
     * @return OperateRenderingDevicesResponse
     */
    public function operateRenderingDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateRenderingDevicesWithOptions($request, $runtime);
    }

    /**
     * @param PrepareUploadRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return PrepareUploadResponse
     */
    public function prepareUploadWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucketName)) {
            $query['BucketName'] = $request->bucketName;
        }
        if (!Utils::isUnset($request->clientIp)) {
            $query['ClientIp'] = $request->clientIp;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PrepareUpload',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PrepareUploadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PrepareUploadRequest $request
     *
     * @return PrepareUploadResponse
     */
    public function prepareUpload($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->prepareUploadWithOptions($request, $runtime);
    }

    /**
     * @param PutBucketRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return PutBucketResponse
     */
    public function putBucketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucketAcl)) {
            $query['BucketAcl'] = $request->bucketAcl;
        }
        if (!Utils::isUnset($request->bucketName)) {
            $query['BucketName'] = $request->bucketName;
        }
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->dataRedundancyType)) {
            $query['DataRedundancyType'] = $request->dataRedundancyType;
        }
        if (!Utils::isUnset($request->dispatcherType)) {
            $query['DispatcherType'] = $request->dispatcherType;
        }
        if (!Utils::isUnset($request->endpoint)) {
            $query['Endpoint'] = $request->endpoint;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->storageClass)) {
            $query['StorageClass'] = $request->storageClass;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutBucket',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutBucketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PutBucketRequest $request
     *
     * @return PutBucketResponse
     */
    public function putBucket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putBucketWithOptions($request, $runtime);
    }

    /**
     * @param ResetRenderingDevicesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ResetRenderingDevicesResponse
     */
    public function resetRenderingDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->podId)) {
            $query['PodId'] = $request->podId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetRenderingDevices',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetRenderingDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResetRenderingDevicesRequest $request
     *
     * @return ResetRenderingDevicesResponse
     */
    public function resetRenderingDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetRenderingDevicesWithOptions($request, $runtime);
    }

    /**
     * @param ResumeVsStreamRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ResumeVsStreamResponse
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
     * @param SetPresetRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return SetPresetResponse
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
     * @param SetVsDomainCertificateRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SetVsDomainCertificateResponse
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
     * @param SetVsStreamsNotifyUrlConfigRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return SetVsStreamsNotifyUrlConfigResponse
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
     * @param StartDeviceRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return StartDeviceResponse
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
     * @param StartParentPlatformRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return StartParentPlatformResponse
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
     * @param StartRecordStreamRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return StartRecordStreamResponse
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
     * @param StartStreamRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return StartStreamResponse
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
     * @param StartTransferStreamRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return StartTransferStreamResponse
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
     * @param StopAdjustRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return StopAdjustResponse
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
     * @param StopDeviceRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return StopDeviceResponse
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
     * @param StopMoveRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return StopMoveResponse
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
     * @param StopParentPlatformRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return StopParentPlatformResponse
     */
    public function stopParentPlatformWithOptions($request, $runtime)
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
            'action'      => 'StopParentPlatform',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopParentPlatformResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopParentPlatformRequest $request
     *
     * @return StopParentPlatformResponse
     */
    public function stopParentPlatform($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopParentPlatformWithOptions($request, $runtime);
    }

    /**
     * @param StopRecordStreamRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return StopRecordStreamResponse
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
     * @param StopStreamRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return StopStreamResponse
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
     * @param StopTransferStreamRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return StopTransferStreamResponse
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
     * @param SyncCatalogsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return SyncCatalogsResponse
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
     * @param UnbindDirectoryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return UnbindDirectoryResponse
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
     * @param UnbindParentPlatformDeviceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UnbindParentPlatformDeviceResponse
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
     * @param UnbindPurchasedDeviceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UnbindPurchasedDeviceResponse
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
     * @param UnbindTemplateRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UnbindTemplateResponse
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
     * @param UnlockDeviceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return UnlockDeviceResponse
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
     * @param UpdateAIConfigRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateAIConfigResponse
     */
    public function updateAIConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->captureInterval)) {
            $query['CaptureInterval'] = $request->captureInterval;
        }
        if (!Utils::isUnset($request->configId)) {
            $query['ConfigId'] = $request->configId;
        }
        if (!Utils::isUnset($request->configs)) {
            $query['Configs'] = $request->configs;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->features)) {
            $query['Features'] = $request->features;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
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
            'action'      => 'UpdateAIConfig',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAIConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAIConfigRequest $request
     *
     * @return UpdateAIConfigResponse
     */
    public function updateAIConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAIConfigWithOptions($request, $runtime);
    }

    /**
     * @param UpdateBucketInfoRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UpdateBucketInfoResponse
     */
    public function updateBucketInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucketName)) {
            $query['BucketName'] = $request->bucketName;
        }
        if (!Utils::isUnset($request->comment)) {
            $query['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateBucketInfo',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateBucketInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateBucketInfoRequest $request
     *
     * @return UpdateBucketInfoResponse
     */
    public function updateBucketInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateBucketInfoWithOptions($request, $runtime);
    }

    /**
     * @param UpdateClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateClusterResponse
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
     * @param UpdateClusterRequest $request
     *
     * @return UpdateClusterResponse
     */
    public function updateCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateClusterWithOptions($request, $runtime);
    }

    /**
     * @param UpdateRenderingDeviceSpecRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateRenderingDeviceSpecResponse
     */
    public function updateRenderingDeviceSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->autoRenewPeriod)) {
            $query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->effectiveTime)) {
            $query['EffectiveTime'] = $request->effectiveTime;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->specification)) {
            $query['Specification'] = $request->specification;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateRenderingDeviceSpec',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateRenderingDeviceSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateRenderingDeviceSpecRequest $request
     *
     * @return UpdateRenderingDeviceSpecResponse
     */
    public function updateRenderingDeviceSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateRenderingDeviceSpecWithOptions($request, $runtime);
    }

    /**
     * @param UpdateVsPullStreamInfoConfigRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateVsPullStreamInfoConfigResponse
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
     * @param UpgradeRenderingDevicesHostOSRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return UpgradeRenderingDevicesHostOSResponse
     */
    public function upgradeRenderingDevicesHostOSWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->romName)) {
            $query['RomName'] = $request->romName;
        }
        if (!Utils::isUnset($request->romPath)) {
            $query['RomPath'] = $request->romPath;
        }
        if (!Utils::isUnset($request->romVersion)) {
            $query['RomVersion'] = $request->romVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeRenderingDevicesHostOS',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeRenderingDevicesHostOSResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpgradeRenderingDevicesHostOSRequest $request
     *
     * @return UpgradeRenderingDevicesHostOSResponse
     */
    public function upgradeRenderingDevicesHostOS($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeRenderingDevicesHostOSWithOptions($request, $runtime);
    }

    /**
     * @param UpgradeRenderingDevicesImageRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return UpgradeRenderingDevicesImageResponse
     */
    public function upgradeRenderingDevicesImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeRenderingDevicesImage',
            'version'     => '2018-12-12',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeRenderingDevicesImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpgradeRenderingDevicesImageRequest $request
     *
     * @return UpgradeRenderingDevicesImageResponse
     */
    public function upgradeRenderingDevicesImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeRenderingDevicesImageWithOptions($request, $runtime);
    }
}
