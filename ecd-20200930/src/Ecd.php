<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ActivateOfficeSiteRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ActivateOfficeSiteResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\AddUserToDesktopGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\AddUserToDesktopGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\AddUserToSecurityCenterWhiteListRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\AddUserToSecurityCenterWhiteListResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\AttachCenRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\AttachCenResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CheckUserInSecurityCenterWhiteListRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CheckUserInSecurityCenterWhiteListResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CheckUserTagsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CheckUserTagsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ClonePolicyGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ClonePolicyGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ConfigADConnectorTrustRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ConfigADConnectorTrustResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ConfigADConnectorUserRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ConfigADConnectorUserResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateADConnectorDirectoryRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateADConnectorDirectoryResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateADConnectorOfficeSiteRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateADConnectorOfficeSiteResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateBandwidthResourcePackagesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateBandwidthResourcePackagesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateBundleRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateBundleResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCloudDriveServiceRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCloudDriveServiceResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopsLiteRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopsLiteResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateImageRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateImageResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateNASFileSystemRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateNASFileSystemResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateNetworkPackageRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateNetworkPackageResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateOrderForHardwareRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateOrderForHardwareResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreatePolicyGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreatePolicyGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateRAMDirectoryRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateRAMDirectoryResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateScaleStrategyRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateScaleStrategyResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateServiceLinkedRoleRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateServiceLinkedRoleResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateSimpleOfficeSiteRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateSimpleOfficeSiteResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateSnapshotRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateSnapshotResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteBundlesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteBundlesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteCloudDriveServicesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteCloudDriveServicesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteDesktopGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteDesktopGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteDesktopsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteDesktopsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteDirectoriesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteDirectoriesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteImagesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteImagesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteNASFileSystemsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteNASFileSystemsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteNetworkPackagesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteNetworkPackagesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteOfficeSitesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteOfficeSitesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeletePolicyGroupsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeletePolicyGroupsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteScaleStrategyRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteScaleStrategyResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteSnapshotRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteSnapshotResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteVirtualMFADeviceRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteVirtualMFADeviceResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeAlarmEventStackInfoRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeAlarmEventStackInfoResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeBundlesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeBundlesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCensRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCensResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeClientEventsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeClientEventsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCloudDriveServiceRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCloudDriveServiceResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopGroupsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopGroupsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopIdsByVulNamesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopIdsByVulNamesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsInGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsInGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopTypesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopTypesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDirectoriesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDirectoriesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeFlowMetricRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeFlowMetricResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeFrontVulPatchListRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeFrontVulPatchListResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeGroupedVulRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeGroupedVulResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeHardwareTerminalsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeHardwareTerminalsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeImagesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeImagesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeInvocationsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeInvocationsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeModificationPriceRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeModificationPriceResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeNASFileSystemsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeNASFileSystemsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeNetworkPackagesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeNetworkPackagesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeOfficeSitesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeOfficeSitesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePostPaidDesktopBillsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePostPaidDesktopBillsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePriceRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePriceResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeRenewalPriceRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeRenewalPriceResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeResourcePackageQuotaRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeResourcePackageQuotaResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeScaleStrategysRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeScaleStrategysResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeScanTaskProgressRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeScanTaskProgressResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSecurityEventOperationsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSecurityEventOperationsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSecurityEventOperationStatusRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSecurityEventOperationStatusResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSnapshotsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSnapshotsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSuspEventOverviewRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSuspEventOverviewResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSuspEventQuaraFilesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSuspEventQuaraFilesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSuspEventsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSuspEventsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUserConnectionRecordsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUserConnectionRecordsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUsersInGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUsersInGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeVirtualMFADevicesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeVirtualMFADevicesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeVulDetailsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeVulDetailsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeVulListRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeVulListResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeVulOverviewRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeVulOverviewResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeZonesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeZonesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DetachCenRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DetachCenResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ExportDesktopGroupInfoRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ExportDesktopGroupInfoResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ExportDesktopListInfoRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ExportDesktopListInfoResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\GetDesktopGroupDetailRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\GetDesktopGroupDetailResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\GetDirectorySsoStatusRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\GetDirectorySsoStatusResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\GetOfficeSiteSsoStatusRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\GetOfficeSiteSsoStatusResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\GetSpMetadataRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\GetSpMetadataResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\HandleSecurityEventsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\HandleSecurityEventsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ListDirectoryUsersRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ListDirectoryUsersResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ListOfficeSiteOverviewRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ListOfficeSiteOverviewResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ListOfficeSiteUsersRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ListOfficeSiteUsersResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ListUserAdOrganizationUnitsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ListUserAdOrganizationUnitsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\LockVirtualMFADeviceRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\LockVirtualMFADeviceResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyADConnectorDirectoryRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyADConnectorDirectoryResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyADConnectorOfficeSiteRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyADConnectorOfficeSiteResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyBundleRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyBundleResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyCloudDriveServiceRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyCloudDriveServiceResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyDesktopChargeTypeRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyDesktopChargeTypeResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyDesktopGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyDesktopGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyDesktopHostNameRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyDesktopHostNameResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyDesktopNameRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyDesktopNameResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyDesktopSpecRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyDesktopSpecResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyDesktopsPolicyGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyDesktopsPolicyGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyEntitlementRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyEntitlementResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyImageAttributeRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyImageAttributeResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyNASDefaultMountTargetRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyNASDefaultMountTargetResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyNetworkPackageBandwidthRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyNetworkPackageBandwidthResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyNetworkPackageEnabledRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyNetworkPackageEnabledResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyNetworkPackageRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyNetworkPackageResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyOfficeSiteAttributeRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyOfficeSiteAttributeResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyOfficeSiteCrossDesktopAccessRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyOfficeSiteCrossDesktopAccessResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyOfficeSiteMfaEnabledRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyOfficeSiteMfaEnabledResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyOperateVulRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyOperateVulResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyScaleStrategyRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyScaleStrategyResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyUserEntitlementRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyUserEntitlementResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyUserToDesktopGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyUserToDesktopGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\OperateVulsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\OperateVulsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RebootDesktopsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RebootDesktopsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RebuildDesktopsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RebuildDesktopsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RecreateDesktopGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RecreateDesktopGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RemoveUserFromDesktopGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RemoveUserFromDesktopGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RenewDesktopGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RenewDesktopGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RenewDesktopsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RenewDesktopsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RenewNetworkPackagesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RenewNetworkPackagesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ResetNASDefaultMountTargetRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ResetNASDefaultMountTargetResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ResetSnapshotRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ResetSnapshotResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RollbackSuspEventQuaraFileRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RollbackSuspEventQuaraFileResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RunCommandRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RunCommandResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\SendVerifyCodeRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\SendVerifyCodeResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\SetDirectorySsoStatusRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\SetDirectorySsoStatusResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\SetIdpMetadataRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\SetIdpMetadataResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\SetOfficeSiteSsoStatusRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\SetOfficeSiteSsoStatusResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\StartDesktopsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\StartDesktopsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\StartVirusScanTaskRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\StartVirusScanTaskResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\StopDesktopsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\StopDesktopsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\StopInvocationRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\StopInvocationResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\UnlockVirtualMFADeviceRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\UnlockVirtualMFADeviceResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\VerifyCenRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\VerifyCenResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Ecd extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ecd', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param ActivateOfficeSiteRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ActivateOfficeSiteResponse
     */
    public function activateOfficeSiteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ActivateOfficeSiteResponse::fromMap($this->doRequest('ActivateOfficeSite', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ActivateOfficeSiteRequest $request
     *
     * @return ActivateOfficeSiteResponse
     */
    public function activateOfficeSite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activateOfficeSiteWithOptions($request, $runtime);
    }

    /**
     * @param AddUserToDesktopGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return AddUserToDesktopGroupResponse
     */
    public function addUserToDesktopGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddUserToDesktopGroupResponse::fromMap($this->doRequest('AddUserToDesktopGroup', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AddUserToDesktopGroupRequest $request
     *
     * @return AddUserToDesktopGroupResponse
     */
    public function addUserToDesktopGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUserToDesktopGroupWithOptions($request, $runtime);
    }

    /**
     * @param AddUserToSecurityCenterWhiteListRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return AddUserToSecurityCenterWhiteListResponse
     */
    public function addUserToSecurityCenterWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AddUserToSecurityCenterWhiteListResponse::fromMap($this->doRequest('AddUserToSecurityCenterWhiteList', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AddUserToSecurityCenterWhiteListRequest $request
     *
     * @return AddUserToSecurityCenterWhiteListResponse
     */
    public function addUserToSecurityCenterWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUserToSecurityCenterWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param AttachCenRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return AttachCenResponse
     */
    public function attachCenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return AttachCenResponse::fromMap($this->doRequest('AttachCen', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param AttachCenRequest $request
     *
     * @return AttachCenResponse
     */
    public function attachCen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachCenWithOptions($request, $runtime);
    }

    /**
     * @param CheckUserInSecurityCenterWhiteListRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return CheckUserInSecurityCenterWhiteListResponse
     */
    public function checkUserInSecurityCenterWhiteListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CheckUserInSecurityCenterWhiteListResponse::fromMap($this->doRequest('CheckUserInSecurityCenterWhiteList', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CheckUserInSecurityCenterWhiteListRequest $request
     *
     * @return CheckUserInSecurityCenterWhiteListResponse
     */
    public function checkUserInSecurityCenterWhiteList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkUserInSecurityCenterWhiteListWithOptions($request, $runtime);
    }

    /**
     * @param CheckUserTagsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CheckUserTagsResponse
     */
    public function checkUserTagsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CheckUserTagsResponse::fromMap($this->doRequest('CheckUserTags', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CheckUserTagsRequest $request
     *
     * @return CheckUserTagsResponse
     */
    public function checkUserTags($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->checkUserTagsWithOptions($request, $runtime);
    }

    /**
     * @param ClonePolicyGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ClonePolicyGroupResponse
     */
    public function clonePolicyGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ClonePolicyGroupResponse::fromMap($this->doRequest('ClonePolicyGroup', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ClonePolicyGroupRequest $request
     *
     * @return ClonePolicyGroupResponse
     */
    public function clonePolicyGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clonePolicyGroupWithOptions($request, $runtime);
    }

    /**
     * @param ConfigADConnectorTrustRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ConfigADConnectorTrustResponse
     */
    public function configADConnectorTrustWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ConfigADConnectorTrustResponse::fromMap($this->doRequest('ConfigADConnectorTrust', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ConfigADConnectorTrustRequest $request
     *
     * @return ConfigADConnectorTrustResponse
     */
    public function configADConnectorTrust($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configADConnectorTrustWithOptions($request, $runtime);
    }

    /**
     * @param ConfigADConnectorUserRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ConfigADConnectorUserResponse
     */
    public function configADConnectorUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ConfigADConnectorUserResponse::fromMap($this->doRequest('ConfigADConnectorUser', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ConfigADConnectorUserRequest $request
     *
     * @return ConfigADConnectorUserResponse
     */
    public function configADConnectorUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configADConnectorUserWithOptions($request, $runtime);
    }

    /**
     * @param CreateADConnectorDirectoryRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateADConnectorDirectoryResponse
     */
    public function createADConnectorDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateADConnectorDirectoryResponse::fromMap($this->doRequest('CreateADConnectorDirectory', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateADConnectorDirectoryRequest $request
     *
     * @return CreateADConnectorDirectoryResponse
     */
    public function createADConnectorDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createADConnectorDirectoryWithOptions($request, $runtime);
    }

    /**
     * @param CreateADConnectorOfficeSiteRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateADConnectorOfficeSiteResponse
     */
    public function createADConnectorOfficeSiteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateADConnectorOfficeSiteResponse::fromMap($this->doRequest('CreateADConnectorOfficeSite', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateADConnectorOfficeSiteRequest $request
     *
     * @return CreateADConnectorOfficeSiteResponse
     */
    public function createADConnectorOfficeSite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createADConnectorOfficeSiteWithOptions($request, $runtime);
    }

    /**
     * @param CreateBandwidthResourcePackagesRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateBandwidthResourcePackagesResponse
     */
    public function createBandwidthResourcePackagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateBandwidthResourcePackagesResponse::fromMap($this->doRequest('CreateBandwidthResourcePackages', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateBandwidthResourcePackagesRequest $request
     *
     * @return CreateBandwidthResourcePackagesResponse
     */
    public function createBandwidthResourcePackages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBandwidthResourcePackagesWithOptions($request, $runtime);
    }

    /**
     * @param CreateBundleRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateBundleResponse
     */
    public function createBundleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateBundleResponse::fromMap($this->doRequest('CreateBundle', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateBundleRequest $request
     *
     * @return CreateBundleResponse
     */
    public function createBundle($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBundleWithOptions($request, $runtime);
    }

    /**
     * @param CreateCloudDriveServiceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateCloudDriveServiceResponse
     */
    public function createCloudDriveServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateCloudDriveServiceResponse::fromMap($this->doRequest('CreateCloudDriveService', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateCloudDriveServiceRequest $request
     *
     * @return CreateCloudDriveServiceResponse
     */
    public function createCloudDriveService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCloudDriveServiceWithOptions($request, $runtime);
    }

    /**
     * @param CreateDesktopGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateDesktopGroupResponse
     */
    public function createDesktopGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateDesktopGroupResponse::fromMap($this->doRequest('CreateDesktopGroup', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateDesktopGroupRequest $request
     *
     * @return CreateDesktopGroupResponse
     */
    public function createDesktopGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDesktopGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateDesktopsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateDesktopsResponse
     */
    public function createDesktopsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateDesktopsResponse::fromMap($this->doRequest('CreateDesktops', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateDesktopsRequest $request
     *
     * @return CreateDesktopsResponse
     */
    public function createDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDesktopsWithOptions($request, $runtime);
    }

    /**
     * @param CreateDesktopsLiteRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateDesktopsLiteResponse
     */
    public function createDesktopsLiteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateDesktopsLiteResponse::fromMap($this->doRequest('CreateDesktopsLite', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateDesktopsLiteRequest $request
     *
     * @return CreateDesktopsLiteResponse
     */
    public function createDesktopsLite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDesktopsLiteWithOptions($request, $runtime);
    }

    /**
     * @param CreateImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateImageResponse
     */
    public function createImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateImageResponse::fromMap($this->doRequest('CreateImage', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateImageRequest $request
     *
     * @return CreateImageResponse
     */
    public function createImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageWithOptions($request, $runtime);
    }

    /**
     * @param CreateNASFileSystemRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateNASFileSystemResponse
     */
    public function createNASFileSystemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateNASFileSystemResponse::fromMap($this->doRequest('CreateNASFileSystem', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateNASFileSystemRequest $request
     *
     * @return CreateNASFileSystemResponse
     */
    public function createNASFileSystem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNASFileSystemWithOptions($request, $runtime);
    }

    /**
     * @param CreateNetworkPackageRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateNetworkPackageResponse
     */
    public function createNetworkPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateNetworkPackageResponse::fromMap($this->doRequest('CreateNetworkPackage', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateNetworkPackageRequest $request
     *
     * @return CreateNetworkPackageResponse
     */
    public function createNetworkPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNetworkPackageWithOptions($request, $runtime);
    }

    /**
     * @param CreateOrderForHardwareRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateOrderForHardwareResponse
     */
    public function createOrderForHardwareWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateOrderForHardwareResponse::fromMap($this->doRequest('CreateOrderForHardware', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateOrderForHardwareRequest $request
     *
     * @return CreateOrderForHardwareResponse
     */
    public function createOrderForHardware($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createOrderForHardwareWithOptions($request, $runtime);
    }

    /**
     * @param CreatePolicyGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreatePolicyGroupResponse
     */
    public function createPolicyGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreatePolicyGroupResponse::fromMap($this->doRequest('CreatePolicyGroup', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreatePolicyGroupRequest $request
     *
     * @return CreatePolicyGroupResponse
     */
    public function createPolicyGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPolicyGroupWithOptions($request, $runtime);
    }

    /**
     * @param CreateRAMDirectoryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateRAMDirectoryResponse
     */
    public function createRAMDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateRAMDirectoryResponse::fromMap($this->doRequest('CreateRAMDirectory', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateRAMDirectoryRequest $request
     *
     * @return CreateRAMDirectoryResponse
     */
    public function createRAMDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRAMDirectoryWithOptions($request, $runtime);
    }

    /**
     * @param CreateScaleStrategyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateScaleStrategyResponse
     */
    public function createScaleStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateScaleStrategyResponse::fromMap($this->doRequest('CreateScaleStrategy', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateScaleStrategyRequest $request
     *
     * @return CreateScaleStrategyResponse
     */
    public function createScaleStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createScaleStrategyWithOptions($request, $runtime);
    }

    /**
     * @param CreateServiceLinkedRoleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRoleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateServiceLinkedRoleResponse::fromMap($this->doRequest('CreateServiceLinkedRole', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateServiceLinkedRoleRequest $request
     *
     * @return CreateServiceLinkedRoleResponse
     */
    public function createServiceLinkedRole($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createServiceLinkedRoleWithOptions($request, $runtime);
    }

    /**
     * @param CreateSimpleOfficeSiteRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateSimpleOfficeSiteResponse
     */
    public function createSimpleOfficeSiteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateSimpleOfficeSiteResponse::fromMap($this->doRequest('CreateSimpleOfficeSite', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateSimpleOfficeSiteRequest $request
     *
     * @return CreateSimpleOfficeSiteResponse
     */
    public function createSimpleOfficeSite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSimpleOfficeSiteWithOptions($request, $runtime);
    }

    /**
     * @param CreateSnapshotRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateSnapshotResponse
     */
    public function createSnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return CreateSnapshotResponse::fromMap($this->doRequest('CreateSnapshot', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param CreateSnapshotRequest $request
     *
     * @return CreateSnapshotResponse
     */
    public function createSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSnapshotWithOptions($request, $runtime);
    }

    /**
     * @param DeleteBundlesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteBundlesResponse
     */
    public function deleteBundlesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteBundlesResponse::fromMap($this->doRequest('DeleteBundles', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteBundlesRequest $request
     *
     * @return DeleteBundlesResponse
     */
    public function deleteBundles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBundlesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCloudDriveServicesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteCloudDriveServicesResponse
     */
    public function deleteCloudDriveServicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteCloudDriveServicesResponse::fromMap($this->doRequest('DeleteCloudDriveServices', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteCloudDriveServicesRequest $request
     *
     * @return DeleteCloudDriveServicesResponse
     */
    public function deleteCloudDriveServices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCloudDriveServicesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDesktopGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteDesktopGroupResponse
     */
    public function deleteDesktopGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteDesktopGroupResponse::fromMap($this->doRequest('DeleteDesktopGroup', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteDesktopGroupRequest $request
     *
     * @return DeleteDesktopGroupResponse
     */
    public function deleteDesktopGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDesktopGroupWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDesktopsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteDesktopsResponse
     */
    public function deleteDesktopsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteDesktopsResponse::fromMap($this->doRequest('DeleteDesktops', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteDesktopsRequest $request
     *
     * @return DeleteDesktopsResponse
     */
    public function deleteDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDesktopsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteDirectoriesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteDirectoriesResponse
     */
    public function deleteDirectoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteDirectoriesResponse::fromMap($this->doRequest('DeleteDirectories', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteDirectoriesRequest $request
     *
     * @return DeleteDirectoriesResponse
     */
    public function deleteDirectories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDirectoriesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteImagesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteImagesResponse
     */
    public function deleteImagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteImagesResponse::fromMap($this->doRequest('DeleteImages', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteImagesRequest $request
     *
     * @return DeleteImagesResponse
     */
    public function deleteImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteImagesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteNASFileSystemsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteNASFileSystemsResponse
     */
    public function deleteNASFileSystemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteNASFileSystemsResponse::fromMap($this->doRequest('DeleteNASFileSystems', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteNASFileSystemsRequest $request
     *
     * @return DeleteNASFileSystemsResponse
     */
    public function deleteNASFileSystems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNASFileSystemsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteNetworkPackagesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteNetworkPackagesResponse
     */
    public function deleteNetworkPackagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteNetworkPackagesResponse::fromMap($this->doRequest('DeleteNetworkPackages', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteNetworkPackagesRequest $request
     *
     * @return DeleteNetworkPackagesResponse
     */
    public function deleteNetworkPackages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNetworkPackagesWithOptions($request, $runtime);
    }

    /**
     * @param DeleteOfficeSitesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteOfficeSitesResponse
     */
    public function deleteOfficeSitesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteOfficeSitesResponse::fromMap($this->doRequest('DeleteOfficeSites', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteOfficeSitesRequest $request
     *
     * @return DeleteOfficeSitesResponse
     */
    public function deleteOfficeSites($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOfficeSitesWithOptions($request, $runtime);
    }

    /**
     * @param DeletePolicyGroupsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeletePolicyGroupsResponse
     */
    public function deletePolicyGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeletePolicyGroupsResponse::fromMap($this->doRequest('DeletePolicyGroups', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeletePolicyGroupsRequest $request
     *
     * @return DeletePolicyGroupsResponse
     */
    public function deletePolicyGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePolicyGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteScaleStrategyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteScaleStrategyResponse
     */
    public function deleteScaleStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteScaleStrategyResponse::fromMap($this->doRequest('DeleteScaleStrategy', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteScaleStrategyRequest $request
     *
     * @return DeleteScaleStrategyResponse
     */
    public function deleteScaleStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteScaleStrategyWithOptions($request, $runtime);
    }

    /**
     * @param DeleteSnapshotRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteSnapshotResponse
     */
    public function deleteSnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteSnapshotResponse::fromMap($this->doRequest('DeleteSnapshot', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteSnapshotRequest $request
     *
     * @return DeleteSnapshotResponse
     */
    public function deleteSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSnapshotWithOptions($request, $runtime);
    }

    /**
     * @param DeleteVirtualMFADeviceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteVirtualMFADeviceResponse
     */
    public function deleteVirtualMFADeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DeleteVirtualMFADeviceResponse::fromMap($this->doRequest('DeleteVirtualMFADevice', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DeleteVirtualMFADeviceRequest $request
     *
     * @return DeleteVirtualMFADeviceResponse
     */
    public function deleteVirtualMFADevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVirtualMFADeviceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeAlarmEventStackInfoRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeAlarmEventStackInfoResponse
     */
    public function describeAlarmEventStackInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeAlarmEventStackInfoResponse::fromMap($this->doRequest('DescribeAlarmEventStackInfo', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeAlarmEventStackInfoRequest $request
     *
     * @return DescribeAlarmEventStackInfoResponse
     */
    public function describeAlarmEventStackInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAlarmEventStackInfoWithOptions($request, $runtime);
    }

    /**
     * @param DescribeBundlesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeBundlesResponse
     */
    public function describeBundlesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeBundlesResponse::fromMap($this->doRequest('DescribeBundles', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeBundlesRequest $request
     *
     * @return DescribeBundlesResponse
     */
    public function describeBundles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBundlesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCensRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeCensResponse
     */
    public function describeCensWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeCensResponse::fromMap($this->doRequest('DescribeCens', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeCensRequest $request
     *
     * @return DescribeCensResponse
     */
    public function describeCens($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCensWithOptions($request, $runtime);
    }

    /**
     * @param DescribeClientEventsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeClientEventsResponse
     */
    public function describeClientEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeClientEventsResponse::fromMap($this->doRequest('DescribeClientEvents', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeClientEventsRequest $request
     *
     * @return DescribeClientEventsResponse
     */
    public function describeClientEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClientEventsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCloudDriveServiceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeCloudDriveServiceResponse
     */
    public function describeCloudDriveServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeCloudDriveServiceResponse::fromMap($this->doRequest('DescribeCloudDriveService', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeCloudDriveServiceRequest $request
     *
     * @return DescribeCloudDriveServiceResponse
     */
    public function describeCloudDriveService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudDriveServiceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDesktopGroupsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDesktopGroupsResponse
     */
    public function describeDesktopGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDesktopGroupsResponse::fromMap($this->doRequest('DescribeDesktopGroups', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeDesktopGroupsRequest $request
     *
     * @return DescribeDesktopGroupsResponse
     */
    public function describeDesktopGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDesktopGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDesktopIdsByVulNamesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDesktopIdsByVulNamesResponse
     */
    public function describeDesktopIdsByVulNamesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDesktopIdsByVulNamesResponse::fromMap($this->doRequest('DescribeDesktopIdsByVulNames', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeDesktopIdsByVulNamesRequest $request
     *
     * @return DescribeDesktopIdsByVulNamesResponse
     */
    public function describeDesktopIdsByVulNames($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDesktopIdsByVulNamesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDesktopTypesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDesktopTypesResponse
     */
    public function describeDesktopTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDesktopTypesResponse::fromMap($this->doRequest('DescribeDesktopTypes', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeDesktopTypesRequest $request
     *
     * @return DescribeDesktopTypesResponse
     */
    public function describeDesktopTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDesktopTypesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDesktopsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeDesktopsResponse
     */
    public function describeDesktopsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDesktopsResponse::fromMap($this->doRequest('DescribeDesktops', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeDesktopsRequest $request
     *
     * @return DescribeDesktopsResponse
     */
    public function describeDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDesktopsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeDesktopsInGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDesktopsInGroupResponse
     */
    public function describeDesktopsInGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeDesktopsInGroupResponse::fromMap($this->doRequest('DescribeDesktopsInGroup', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeDesktopsInGroupRequest $request
     *
     * @return DescribeDesktopsInGroupResponse
     */
    public function describeDesktopsInGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDesktopsInGroupWithOptions($request, $runtime);
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

        return DescribeDirectoriesResponse::fromMap($this->doRequest('DescribeDirectories', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
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
     * @param DescribeFlowMetricRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeFlowMetricResponse
     */
    public function describeFlowMetricWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeFlowMetricResponse::fromMap($this->doRequest('DescribeFlowMetric', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeFlowMetricRequest $request
     *
     * @return DescribeFlowMetricResponse
     */
    public function describeFlowMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowMetricWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFrontVulPatchListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeFrontVulPatchListResponse
     */
    public function describeFrontVulPatchListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeFrontVulPatchListResponse::fromMap($this->doRequest('DescribeFrontVulPatchList', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeFrontVulPatchListRequest $request
     *
     * @return DescribeFrontVulPatchListResponse
     */
    public function describeFrontVulPatchList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFrontVulPatchListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeGroupedVulRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeGroupedVulResponse
     */
    public function describeGroupedVulWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeGroupedVulResponse::fromMap($this->doRequest('DescribeGroupedVul', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeGroupedVulRequest $request
     *
     * @return DescribeGroupedVulResponse
     */
    public function describeGroupedVul($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupedVulWithOptions($request, $runtime);
    }

    /**
     * @param DescribeHardwareTerminalsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeHardwareTerminalsResponse
     */
    public function describeHardwareTerminalsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeHardwareTerminalsResponse::fromMap($this->doRequest('DescribeHardwareTerminals', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeHardwareTerminalsRequest $request
     *
     * @return DescribeHardwareTerminalsResponse
     */
    public function describeHardwareTerminals($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHardwareTerminalsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImagesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeImagesResponse
     */
    public function describeImagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeImagesResponse::fromMap($this->doRequest('DescribeImages', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeImagesRequest $request
     *
     * @return DescribeImagesResponse
     */
    public function describeImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImagesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeInvocationsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeInvocationsResponse
     */
    public function describeInvocationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeInvocationsResponse::fromMap($this->doRequest('DescribeInvocations', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeInvocationsRequest $request
     *
     * @return DescribeInvocationsResponse
     */
    public function describeInvocations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInvocationsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeModificationPriceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeModificationPriceResponse
     */
    public function describeModificationPriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeModificationPriceResponse::fromMap($this->doRequest('DescribeModificationPrice', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeModificationPriceRequest $request
     *
     * @return DescribeModificationPriceResponse
     */
    public function describeModificationPrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeModificationPriceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeNASFileSystemsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeNASFileSystemsResponse
     */
    public function describeNASFileSystemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeNASFileSystemsResponse::fromMap($this->doRequest('DescribeNASFileSystems', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeNASFileSystemsRequest $request
     *
     * @return DescribeNASFileSystemsResponse
     */
    public function describeNASFileSystems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNASFileSystemsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeNetworkPackagesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeNetworkPackagesResponse
     */
    public function describeNetworkPackagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeNetworkPackagesResponse::fromMap($this->doRequest('DescribeNetworkPackages', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeNetworkPackagesRequest $request
     *
     * @return DescribeNetworkPackagesResponse
     */
    public function describeNetworkPackages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworkPackagesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeOfficeSitesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeOfficeSitesResponse
     */
    public function describeOfficeSitesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeOfficeSitesResponse::fromMap($this->doRequest('DescribeOfficeSites', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeOfficeSitesRequest $request
     *
     * @return DescribeOfficeSitesResponse
     */
    public function describeOfficeSites($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOfficeSitesWithOptions($request, $runtime);
    }

    /**
     * @param DescribePolicyGroupsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribePolicyGroupsResponse
     */
    public function describePolicyGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribePolicyGroupsResponse::fromMap($this->doRequest('DescribePolicyGroups', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribePolicyGroupsRequest $request
     *
     * @return DescribePolicyGroupsResponse
     */
    public function describePolicyGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePolicyGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribePostPaidDesktopBillsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribePostPaidDesktopBillsResponse
     */
    public function describePostPaidDesktopBillsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribePostPaidDesktopBillsResponse::fromMap($this->doRequest('DescribePostPaidDesktopBills', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribePostPaidDesktopBillsRequest $request
     *
     * @return DescribePostPaidDesktopBillsResponse
     */
    public function describePostPaidDesktopBills($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePostPaidDesktopBillsWithOptions($request, $runtime);
    }

    /**
     * @param DescribePriceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribePriceResponse
     */
    public function describePriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribePriceResponse::fromMap($this->doRequest('DescribePrice', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribePriceRequest $request
     *
     * @return DescribePriceResponse
     */
    public function describePrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePriceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeRegionsResponse::fromMap($this->doRequest('DescribeRegions', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeRegionsRequest $request
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRenewalPriceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeRenewalPriceResponse
     */
    public function describeRenewalPriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeRenewalPriceResponse::fromMap($this->doRequest('DescribeRenewalPrice', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeRenewalPriceRequest $request
     *
     * @return DescribeRenewalPriceResponse
     */
    public function describeRenewalPrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRenewalPriceWithOptions($request, $runtime);
    }

    /**
     * @param DescribeResourcePackageQuotaRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeResourcePackageQuotaResponse
     */
    public function describeResourcePackageQuotaWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeResourcePackageQuotaResponse::fromMap($this->doRequest('DescribeResourcePackageQuota', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeResourcePackageQuotaRequest $request
     *
     * @return DescribeResourcePackageQuotaResponse
     */
    public function describeResourcePackageQuota($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourcePackageQuotaWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScaleStrategysRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeScaleStrategysResponse
     */
    public function describeScaleStrategysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeScaleStrategysResponse::fromMap($this->doRequest('DescribeScaleStrategys', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeScaleStrategysRequest $request
     *
     * @return DescribeScaleStrategysResponse
     */
    public function describeScaleStrategys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScaleStrategysWithOptions($request, $runtime);
    }

    /**
     * @param DescribeScanTaskProgressRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeScanTaskProgressResponse
     */
    public function describeScanTaskProgressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeScanTaskProgressResponse::fromMap($this->doRequest('DescribeScanTaskProgress', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeScanTaskProgressRequest $request
     *
     * @return DescribeScanTaskProgressResponse
     */
    public function describeScanTaskProgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeScanTaskProgressWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSecurityEventOperationStatusRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return DescribeSecurityEventOperationStatusResponse
     */
    public function describeSecurityEventOperationStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeSecurityEventOperationStatusResponse::fromMap($this->doRequest('DescribeSecurityEventOperationStatus', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeSecurityEventOperationStatusRequest $request
     *
     * @return DescribeSecurityEventOperationStatusResponse
     */
    public function describeSecurityEventOperationStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityEventOperationStatusWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSecurityEventOperationsRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeSecurityEventOperationsResponse
     */
    public function describeSecurityEventOperationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeSecurityEventOperationsResponse::fromMap($this->doRequest('DescribeSecurityEventOperations', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeSecurityEventOperationsRequest $request
     *
     * @return DescribeSecurityEventOperationsResponse
     */
    public function describeSecurityEventOperations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityEventOperationsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSnapshotsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeSnapshotsResponse
     */
    public function describeSnapshotsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeSnapshotsResponse::fromMap($this->doRequest('DescribeSnapshots', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeSnapshotsRequest $request
     *
     * @return DescribeSnapshotsResponse
     */
    public function describeSnapshots($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSnapshotsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSuspEventOverviewRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeSuspEventOverviewResponse
     */
    public function describeSuspEventOverviewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeSuspEventOverviewResponse::fromMap($this->doRequest('DescribeSuspEventOverview', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeSuspEventOverviewRequest $request
     *
     * @return DescribeSuspEventOverviewResponse
     */
    public function describeSuspEventOverview($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSuspEventOverviewWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSuspEventQuaraFilesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeSuspEventQuaraFilesResponse
     */
    public function describeSuspEventQuaraFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeSuspEventQuaraFilesResponse::fromMap($this->doRequest('DescribeSuspEventQuaraFiles', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeSuspEventQuaraFilesRequest $request
     *
     * @return DescribeSuspEventQuaraFilesResponse
     */
    public function describeSuspEventQuaraFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSuspEventQuaraFilesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeSuspEventsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeSuspEventsResponse
     */
    public function describeSuspEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeSuspEventsResponse::fromMap($this->doRequest('DescribeSuspEvents', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeSuspEventsRequest $request
     *
     * @return DescribeSuspEventsResponse
     */
    public function describeSuspEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSuspEventsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUserConnectionRecordsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeUserConnectionRecordsResponse
     */
    public function describeUserConnectionRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeUserConnectionRecordsResponse::fromMap($this->doRequest('DescribeUserConnectionRecords', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeUserConnectionRecordsRequest $request
     *
     * @return DescribeUserConnectionRecordsResponse
     */
    public function describeUserConnectionRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserConnectionRecordsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeUsersInGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeUsersInGroupResponse
     */
    public function describeUsersInGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeUsersInGroupResponse::fromMap($this->doRequest('DescribeUsersInGroup', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeUsersInGroupRequest $request
     *
     * @return DescribeUsersInGroupResponse
     */
    public function describeUsersInGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUsersInGroupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVirtualMFADevicesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeVirtualMFADevicesResponse
     */
    public function describeVirtualMFADevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeVirtualMFADevicesResponse::fromMap($this->doRequest('DescribeVirtualMFADevices', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeVirtualMFADevicesRequest $request
     *
     * @return DescribeVirtualMFADevicesResponse
     */
    public function describeVirtualMFADevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVirtualMFADevicesWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVulDetailsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeVulDetailsResponse
     */
    public function describeVulDetailsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeVulDetailsResponse::fromMap($this->doRequest('DescribeVulDetails', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeVulDetailsRequest $request
     *
     * @return DescribeVulDetailsResponse
     */
    public function describeVulDetails($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVulDetailsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVulListRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeVulListResponse
     */
    public function describeVulListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeVulListResponse::fromMap($this->doRequest('DescribeVulList', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeVulListRequest $request
     *
     * @return DescribeVulListResponse
     */
    public function describeVulList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVulListWithOptions($request, $runtime);
    }

    /**
     * @param DescribeVulOverviewRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeVulOverviewResponse
     */
    public function describeVulOverviewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeVulOverviewResponse::fromMap($this->doRequest('DescribeVulOverview', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeVulOverviewRequest $request
     *
     * @return DescribeVulOverviewResponse
     */
    public function describeVulOverview($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVulOverviewWithOptions($request, $runtime);
    }

    /**
     * @param DescribeZonesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeZonesResponse
     */
    public function describeZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DescribeZonesResponse::fromMap($this->doRequest('DescribeZones', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DescribeZonesRequest $request
     *
     * @return DescribeZonesResponse
     */
    public function describeZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeZonesWithOptions($request, $runtime);
    }

    /**
     * @param DetachCenRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DetachCenResponse
     */
    public function detachCenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return DetachCenResponse::fromMap($this->doRequest('DetachCen', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param DetachCenRequest $request
     *
     * @return DetachCenResponse
     */
    public function detachCen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachCenWithOptions($request, $runtime);
    }

    /**
     * @param ExportDesktopGroupInfoRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ExportDesktopGroupInfoResponse
     */
    public function exportDesktopGroupInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ExportDesktopGroupInfoResponse::fromMap($this->doRequest('ExportDesktopGroupInfo', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ExportDesktopGroupInfoRequest $request
     *
     * @return ExportDesktopGroupInfoResponse
     */
    public function exportDesktopGroupInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportDesktopGroupInfoWithOptions($request, $runtime);
    }

    /**
     * @param ExportDesktopListInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ExportDesktopListInfoResponse
     */
    public function exportDesktopListInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ExportDesktopListInfoResponse::fromMap($this->doRequest('ExportDesktopListInfo', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ExportDesktopListInfoRequest $request
     *
     * @return ExportDesktopListInfoResponse
     */
    public function exportDesktopListInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportDesktopListInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetDesktopGroupDetailRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetDesktopGroupDetailResponse
     */
    public function getDesktopGroupDetailWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDesktopGroupDetailResponse::fromMap($this->doRequest('GetDesktopGroupDetail', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetDesktopGroupDetailRequest $request
     *
     * @return GetDesktopGroupDetailResponse
     */
    public function getDesktopGroupDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDesktopGroupDetailWithOptions($request, $runtime);
    }

    /**
     * @param GetDirectorySsoStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetDirectorySsoStatusResponse
     */
    public function getDirectorySsoStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetDirectorySsoStatusResponse::fromMap($this->doRequest('GetDirectorySsoStatus', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetDirectorySsoStatusRequest $request
     *
     * @return GetDirectorySsoStatusResponse
     */
    public function getDirectorySsoStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDirectorySsoStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetOfficeSiteSsoStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetOfficeSiteSsoStatusResponse
     */
    public function getOfficeSiteSsoStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetOfficeSiteSsoStatusResponse::fromMap($this->doRequest('GetOfficeSiteSsoStatus', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetOfficeSiteSsoStatusRequest $request
     *
     * @return GetOfficeSiteSsoStatusResponse
     */
    public function getOfficeSiteSsoStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOfficeSiteSsoStatusWithOptions($request, $runtime);
    }

    /**
     * @param GetSpMetadataRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetSpMetadataResponse
     */
    public function getSpMetadataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return GetSpMetadataResponse::fromMap($this->doRequest('GetSpMetadata', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param GetSpMetadataRequest $request
     *
     * @return GetSpMetadataResponse
     */
    public function getSpMetadata($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSpMetadataWithOptions($request, $runtime);
    }

    /**
     * @param HandleSecurityEventsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return HandleSecurityEventsResponse
     */
    public function handleSecurityEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return HandleSecurityEventsResponse::fromMap($this->doRequest('HandleSecurityEvents', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param HandleSecurityEventsRequest $request
     *
     * @return HandleSecurityEventsResponse
     */
    public function handleSecurityEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->handleSecurityEventsWithOptions($request, $runtime);
    }

    /**
     * @param ListDirectoryUsersRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListDirectoryUsersResponse
     */
    public function listDirectoryUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListDirectoryUsersResponse::fromMap($this->doRequest('ListDirectoryUsers', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListDirectoryUsersRequest $request
     *
     * @return ListDirectoryUsersResponse
     */
    public function listDirectoryUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDirectoryUsersWithOptions($request, $runtime);
    }

    /**
     * @param ListOfficeSiteOverviewRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListOfficeSiteOverviewResponse
     */
    public function listOfficeSiteOverviewWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListOfficeSiteOverviewResponse::fromMap($this->doRequest('ListOfficeSiteOverview', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListOfficeSiteOverviewRequest $request
     *
     * @return ListOfficeSiteOverviewResponse
     */
    public function listOfficeSiteOverview($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOfficeSiteOverviewWithOptions($request, $runtime);
    }

    /**
     * @param ListOfficeSiteUsersRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListOfficeSiteUsersResponse
     */
    public function listOfficeSiteUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListOfficeSiteUsersResponse::fromMap($this->doRequest('ListOfficeSiteUsers', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListOfficeSiteUsersRequest $request
     *
     * @return ListOfficeSiteUsersResponse
     */
    public function listOfficeSiteUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOfficeSiteUsersWithOptions($request, $runtime);
    }

    /**
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListTagResourcesResponse::fromMap($this->doRequest('ListTagResources', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListTagResourcesRequest $request
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param ListUserAdOrganizationUnitsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListUserAdOrganizationUnitsResponse
     */
    public function listUserAdOrganizationUnitsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ListUserAdOrganizationUnitsResponse::fromMap($this->doRequest('ListUserAdOrganizationUnits', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ListUserAdOrganizationUnitsRequest $request
     *
     * @return ListUserAdOrganizationUnitsResponse
     */
    public function listUserAdOrganizationUnits($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserAdOrganizationUnitsWithOptions($request, $runtime);
    }

    /**
     * @param LockVirtualMFADeviceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return LockVirtualMFADeviceResponse
     */
    public function lockVirtualMFADeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return LockVirtualMFADeviceResponse::fromMap($this->doRequest('LockVirtualMFADevice', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param LockVirtualMFADeviceRequest $request
     *
     * @return LockVirtualMFADeviceResponse
     */
    public function lockVirtualMFADevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->lockVirtualMFADeviceWithOptions($request, $runtime);
    }

    /**
     * @param ModifyADConnectorDirectoryRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyADConnectorDirectoryResponse
     */
    public function modifyADConnectorDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyADConnectorDirectoryResponse::fromMap($this->doRequest('ModifyADConnectorDirectory', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyADConnectorDirectoryRequest $request
     *
     * @return ModifyADConnectorDirectoryResponse
     */
    public function modifyADConnectorDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyADConnectorDirectoryWithOptions($request, $runtime);
    }

    /**
     * @param ModifyADConnectorOfficeSiteRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyADConnectorOfficeSiteResponse
     */
    public function modifyADConnectorOfficeSiteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyADConnectorOfficeSiteResponse::fromMap($this->doRequest('ModifyADConnectorOfficeSite', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyADConnectorOfficeSiteRequest $request
     *
     * @return ModifyADConnectorOfficeSiteResponse
     */
    public function modifyADConnectorOfficeSite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyADConnectorOfficeSiteWithOptions($request, $runtime);
    }

    /**
     * @param ModifyBundleRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ModifyBundleResponse
     */
    public function modifyBundleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyBundleResponse::fromMap($this->doRequest('ModifyBundle', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyBundleRequest $request
     *
     * @return ModifyBundleResponse
     */
    public function modifyBundle($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBundleWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCloudDriveServiceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyCloudDriveServiceResponse
     */
    public function modifyCloudDriveServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyCloudDriveServiceResponse::fromMap($this->doRequest('ModifyCloudDriveService', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyCloudDriveServiceRequest $request
     *
     * @return ModifyCloudDriveServiceResponse
     */
    public function modifyCloudDriveService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCloudDriveServiceWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDesktopChargeTypeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyDesktopChargeTypeResponse
     */
    public function modifyDesktopChargeTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyDesktopChargeTypeResponse::fromMap($this->doRequest('ModifyDesktopChargeType', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyDesktopChargeTypeRequest $request
     *
     * @return ModifyDesktopChargeTypeResponse
     */
    public function modifyDesktopChargeType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDesktopChargeTypeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDesktopGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyDesktopGroupResponse
     */
    public function modifyDesktopGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyDesktopGroupResponse::fromMap($this->doRequest('ModifyDesktopGroup', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyDesktopGroupRequest $request
     *
     * @return ModifyDesktopGroupResponse
     */
    public function modifyDesktopGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDesktopGroupWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDesktopHostNameRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyDesktopHostNameResponse
     */
    public function modifyDesktopHostNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyDesktopHostNameResponse::fromMap($this->doRequest('ModifyDesktopHostName', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyDesktopHostNameRequest $request
     *
     * @return ModifyDesktopHostNameResponse
     */
    public function modifyDesktopHostName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDesktopHostNameWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDesktopNameRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyDesktopNameResponse
     */
    public function modifyDesktopNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyDesktopNameResponse::fromMap($this->doRequest('ModifyDesktopName', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyDesktopNameRequest $request
     *
     * @return ModifyDesktopNameResponse
     */
    public function modifyDesktopName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDesktopNameWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDesktopSpecRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyDesktopSpecResponse
     */
    public function modifyDesktopSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyDesktopSpecResponse::fromMap($this->doRequest('ModifyDesktopSpec', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyDesktopSpecRequest $request
     *
     * @return ModifyDesktopSpecResponse
     */
    public function modifyDesktopSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDesktopSpecWithOptions($request, $runtime);
    }

    /**
     * @param ModifyDesktopsPolicyGroupRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyDesktopsPolicyGroupResponse
     */
    public function modifyDesktopsPolicyGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyDesktopsPolicyGroupResponse::fromMap($this->doRequest('ModifyDesktopsPolicyGroup', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyDesktopsPolicyGroupRequest $request
     *
     * @return ModifyDesktopsPolicyGroupResponse
     */
    public function modifyDesktopsPolicyGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDesktopsPolicyGroupWithOptions($request, $runtime);
    }

    /**
     * @param ModifyEntitlementRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyEntitlementResponse
     */
    public function modifyEntitlementWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyEntitlementResponse::fromMap($this->doRequest('ModifyEntitlement', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyEntitlementRequest $request
     *
     * @return ModifyEntitlementResponse
     */
    public function modifyEntitlement($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyEntitlementWithOptions($request, $runtime);
    }

    /**
     * @param ModifyImageAttributeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyImageAttributeResponse
     */
    public function modifyImageAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyImageAttributeResponse::fromMap($this->doRequest('ModifyImageAttribute', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyImageAttributeRequest $request
     *
     * @return ModifyImageAttributeResponse
     */
    public function modifyImageAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyImageAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyNASDefaultMountTargetRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyNASDefaultMountTargetResponse
     */
    public function modifyNASDefaultMountTargetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyNASDefaultMountTargetResponse::fromMap($this->doRequest('ModifyNASDefaultMountTarget', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyNASDefaultMountTargetRequest $request
     *
     * @return ModifyNASDefaultMountTargetResponse
     */
    public function modifyNASDefaultMountTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNASDefaultMountTargetWithOptions($request, $runtime);
    }

    /**
     * @param ModifyNetworkPackageRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyNetworkPackageResponse
     */
    public function modifyNetworkPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyNetworkPackageResponse::fromMap($this->doRequest('ModifyNetworkPackage', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyNetworkPackageRequest $request
     *
     * @return ModifyNetworkPackageResponse
     */
    public function modifyNetworkPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNetworkPackageWithOptions($request, $runtime);
    }

    /**
     * @param ModifyNetworkPackageBandwidthRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyNetworkPackageBandwidthResponse
     */
    public function modifyNetworkPackageBandwidthWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyNetworkPackageBandwidthResponse::fromMap($this->doRequest('ModifyNetworkPackageBandwidth', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyNetworkPackageBandwidthRequest $request
     *
     * @return ModifyNetworkPackageBandwidthResponse
     */
    public function modifyNetworkPackageBandwidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNetworkPackageBandwidthWithOptions($request, $runtime);
    }

    /**
     * @param ModifyNetworkPackageEnabledRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyNetworkPackageEnabledResponse
     */
    public function modifyNetworkPackageEnabledWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyNetworkPackageEnabledResponse::fromMap($this->doRequest('ModifyNetworkPackageEnabled', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyNetworkPackageEnabledRequest $request
     *
     * @return ModifyNetworkPackageEnabledResponse
     */
    public function modifyNetworkPackageEnabled($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNetworkPackageEnabledWithOptions($request, $runtime);
    }

    /**
     * @param ModifyOfficeSiteAttributeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyOfficeSiteAttributeResponse
     */
    public function modifyOfficeSiteAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyOfficeSiteAttributeResponse::fromMap($this->doRequest('ModifyOfficeSiteAttribute', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyOfficeSiteAttributeRequest $request
     *
     * @return ModifyOfficeSiteAttributeResponse
     */
    public function modifyOfficeSiteAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyOfficeSiteAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyOfficeSiteCrossDesktopAccessRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ModifyOfficeSiteCrossDesktopAccessResponse
     */
    public function modifyOfficeSiteCrossDesktopAccessWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyOfficeSiteCrossDesktopAccessResponse::fromMap($this->doRequest('ModifyOfficeSiteCrossDesktopAccess', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyOfficeSiteCrossDesktopAccessRequest $request
     *
     * @return ModifyOfficeSiteCrossDesktopAccessResponse
     */
    public function modifyOfficeSiteCrossDesktopAccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyOfficeSiteCrossDesktopAccessWithOptions($request, $runtime);
    }

    /**
     * @param ModifyOfficeSiteMfaEnabledRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyOfficeSiteMfaEnabledResponse
     */
    public function modifyOfficeSiteMfaEnabledWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyOfficeSiteMfaEnabledResponse::fromMap($this->doRequest('ModifyOfficeSiteMfaEnabled', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyOfficeSiteMfaEnabledRequest $request
     *
     * @return ModifyOfficeSiteMfaEnabledResponse
     */
    public function modifyOfficeSiteMfaEnabled($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyOfficeSiteMfaEnabledWithOptions($request, $runtime);
    }

    /**
     * @param ModifyOperateVulRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyOperateVulResponse
     */
    public function modifyOperateVulWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyOperateVulResponse::fromMap($this->doRequest('ModifyOperateVul', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyOperateVulRequest $request
     *
     * @return ModifyOperateVulResponse
     */
    public function modifyOperateVul($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyOperateVulWithOptions($request, $runtime);
    }

    /**
     * @param ModifyPolicyGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyPolicyGroupResponse
     */
    public function modifyPolicyGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyPolicyGroupResponse::fromMap($this->doRequest('ModifyPolicyGroup', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyPolicyGroupRequest $request
     *
     * @return ModifyPolicyGroupResponse
     */
    public function modifyPolicyGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPolicyGroupWithOptions($request, $runtime);
    }

    /**
     * @param ModifyScaleStrategyRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyScaleStrategyResponse
     */
    public function modifyScaleStrategyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyScaleStrategyResponse::fromMap($this->doRequest('ModifyScaleStrategy', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyScaleStrategyRequest $request
     *
     * @return ModifyScaleStrategyResponse
     */
    public function modifyScaleStrategy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyScaleStrategyWithOptions($request, $runtime);
    }

    /**
     * @param ModifyUserEntitlementRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyUserEntitlementResponse
     */
    public function modifyUserEntitlementWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyUserEntitlementResponse::fromMap($this->doRequest('ModifyUserEntitlement', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyUserEntitlementRequest $request
     *
     * @return ModifyUserEntitlementResponse
     */
    public function modifyUserEntitlement($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUserEntitlementWithOptions($request, $runtime);
    }

    /**
     * @param ModifyUserToDesktopGroupRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyUserToDesktopGroupResponse
     */
    public function modifyUserToDesktopGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ModifyUserToDesktopGroupResponse::fromMap($this->doRequest('ModifyUserToDesktopGroup', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ModifyUserToDesktopGroupRequest $request
     *
     * @return ModifyUserToDesktopGroupResponse
     */
    public function modifyUserToDesktopGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUserToDesktopGroupWithOptions($request, $runtime);
    }

    /**
     * @param OperateVulsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return OperateVulsResponse
     */
    public function operateVulsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return OperateVulsResponse::fromMap($this->doRequest('OperateVuls', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param OperateVulsRequest $request
     *
     * @return OperateVulsResponse
     */
    public function operateVuls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateVulsWithOptions($request, $runtime);
    }

    /**
     * @param RebootDesktopsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RebootDesktopsResponse
     */
    public function rebootDesktopsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RebootDesktopsResponse::fromMap($this->doRequest('RebootDesktops', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RebootDesktopsRequest $request
     *
     * @return RebootDesktopsResponse
     */
    public function rebootDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebootDesktopsWithOptions($request, $runtime);
    }

    /**
     * @param RebuildDesktopsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RebuildDesktopsResponse
     */
    public function rebuildDesktopsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RebuildDesktopsResponse::fromMap($this->doRequest('RebuildDesktops', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RebuildDesktopsRequest $request
     *
     * @return RebuildDesktopsResponse
     */
    public function rebuildDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebuildDesktopsWithOptions($request, $runtime);
    }

    /**
     * @param RecreateDesktopGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RecreateDesktopGroupResponse
     */
    public function recreateDesktopGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RecreateDesktopGroupResponse::fromMap($this->doRequest('RecreateDesktopGroup', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RecreateDesktopGroupRequest $request
     *
     * @return RecreateDesktopGroupResponse
     */
    public function recreateDesktopGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recreateDesktopGroupWithOptions($request, $runtime);
    }

    /**
     * @param RemoveUserFromDesktopGroupRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return RemoveUserFromDesktopGroupResponse
     */
    public function removeUserFromDesktopGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RemoveUserFromDesktopGroupResponse::fromMap($this->doRequest('RemoveUserFromDesktopGroup', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RemoveUserFromDesktopGroupRequest $request
     *
     * @return RemoveUserFromDesktopGroupResponse
     */
    public function removeUserFromDesktopGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeUserFromDesktopGroupWithOptions($request, $runtime);
    }

    /**
     * @param RenewDesktopGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RenewDesktopGroupResponse
     */
    public function renewDesktopGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RenewDesktopGroupResponse::fromMap($this->doRequest('RenewDesktopGroup', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RenewDesktopGroupRequest $request
     *
     * @return RenewDesktopGroupResponse
     */
    public function renewDesktopGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewDesktopGroupWithOptions($request, $runtime);
    }

    /**
     * @param RenewDesktopsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RenewDesktopsResponse
     */
    public function renewDesktopsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RenewDesktopsResponse::fromMap($this->doRequest('RenewDesktops', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RenewDesktopsRequest $request
     *
     * @return RenewDesktopsResponse
     */
    public function renewDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewDesktopsWithOptions($request, $runtime);
    }

    /**
     * @param RenewNetworkPackagesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RenewNetworkPackagesResponse
     */
    public function renewNetworkPackagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RenewNetworkPackagesResponse::fromMap($this->doRequest('RenewNetworkPackages', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RenewNetworkPackagesRequest $request
     *
     * @return RenewNetworkPackagesResponse
     */
    public function renewNetworkPackages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewNetworkPackagesWithOptions($request, $runtime);
    }

    /**
     * @param ResetNASDefaultMountTargetRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ResetNASDefaultMountTargetResponse
     */
    public function resetNASDefaultMountTargetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ResetNASDefaultMountTargetResponse::fromMap($this->doRequest('ResetNASDefaultMountTarget', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ResetNASDefaultMountTargetRequest $request
     *
     * @return ResetNASDefaultMountTargetResponse
     */
    public function resetNASDefaultMountTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetNASDefaultMountTargetWithOptions($request, $runtime);
    }

    /**
     * @param ResetSnapshotRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ResetSnapshotResponse
     */
    public function resetSnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ResetSnapshotResponse::fromMap($this->doRequest('ResetSnapshot', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ResetSnapshotRequest $request
     *
     * @return ResetSnapshotResponse
     */
    public function resetSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetSnapshotWithOptions($request, $runtime);
    }

    /**
     * @param RollbackSuspEventQuaraFileRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return RollbackSuspEventQuaraFileResponse
     */
    public function rollbackSuspEventQuaraFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RollbackSuspEventQuaraFileResponse::fromMap($this->doRequest('RollbackSuspEventQuaraFile', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RollbackSuspEventQuaraFileRequest $request
     *
     * @return RollbackSuspEventQuaraFileResponse
     */
    public function rollbackSuspEventQuaraFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rollbackSuspEventQuaraFileWithOptions($request, $runtime);
    }

    /**
     * @param RunCommandRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return RunCommandResponse
     */
    public function runCommandWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return RunCommandResponse::fromMap($this->doRequest('RunCommand', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param RunCommandRequest $request
     *
     * @return RunCommandResponse
     */
    public function runCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runCommandWithOptions($request, $runtime);
    }

    /**
     * @param SendVerifyCodeRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SendVerifyCodeResponse
     */
    public function sendVerifyCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SendVerifyCodeResponse::fromMap($this->doRequest('SendVerifyCode', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param SendVerifyCodeRequest $request
     *
     * @return SendVerifyCodeResponse
     */
    public function sendVerifyCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendVerifyCodeWithOptions($request, $runtime);
    }

    /**
     * @param SetDirectorySsoStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetDirectorySsoStatusResponse
     */
    public function setDirectorySsoStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetDirectorySsoStatusResponse::fromMap($this->doRequest('SetDirectorySsoStatus', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param SetDirectorySsoStatusRequest $request
     *
     * @return SetDirectorySsoStatusResponse
     */
    public function setDirectorySsoStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDirectorySsoStatusWithOptions($request, $runtime);
    }

    /**
     * @param SetIdpMetadataRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SetIdpMetadataResponse
     */
    public function setIdpMetadataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetIdpMetadataResponse::fromMap($this->doRequest('SetIdpMetadata', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param SetIdpMetadataRequest $request
     *
     * @return SetIdpMetadataResponse
     */
    public function setIdpMetadata($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setIdpMetadataWithOptions($request, $runtime);
    }

    /**
     * @param SetOfficeSiteSsoStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SetOfficeSiteSsoStatusResponse
     */
    public function setOfficeSiteSsoStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return SetOfficeSiteSsoStatusResponse::fromMap($this->doRequest('SetOfficeSiteSsoStatus', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param SetOfficeSiteSsoStatusRequest $request
     *
     * @return SetOfficeSiteSsoStatusResponse
     */
    public function setOfficeSiteSsoStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setOfficeSiteSsoStatusWithOptions($request, $runtime);
    }

    /**
     * @param StartDesktopsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StartDesktopsResponse
     */
    public function startDesktopsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return StartDesktopsResponse::fromMap($this->doRequest('StartDesktops', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param StartDesktopsRequest $request
     *
     * @return StartDesktopsResponse
     */
    public function startDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDesktopsWithOptions($request, $runtime);
    }

    /**
     * @param StartVirusScanTaskRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return StartVirusScanTaskResponse
     */
    public function startVirusScanTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return StartVirusScanTaskResponse::fromMap($this->doRequest('StartVirusScanTask', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param StartVirusScanTaskRequest $request
     *
     * @return StartVirusScanTaskResponse
     */
    public function startVirusScanTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startVirusScanTaskWithOptions($request, $runtime);
    }

    /**
     * @param StopDesktopsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StopDesktopsResponse
     */
    public function stopDesktopsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return StopDesktopsResponse::fromMap($this->doRequest('StopDesktops', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param StopDesktopsRequest $request
     *
     * @return StopDesktopsResponse
     */
    public function stopDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDesktopsWithOptions($request, $runtime);
    }

    /**
     * @param StopInvocationRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StopInvocationResponse
     */
    public function stopInvocationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return StopInvocationResponse::fromMap($this->doRequest('StopInvocation', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param StopInvocationRequest $request
     *
     * @return StopInvocationResponse
     */
    public function stopInvocation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopInvocationWithOptions($request, $runtime);
    }

    /**
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return TagResourcesResponse::fromMap($this->doRequest('TagResources', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param TagResourcesRequest $request
     *
     * @return TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param UnlockVirtualMFADeviceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UnlockVirtualMFADeviceResponse
     */
    public function unlockVirtualMFADeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UnlockVirtualMFADeviceResponse::fromMap($this->doRequest('UnlockVirtualMFADevice', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UnlockVirtualMFADeviceRequest $request
     *
     * @return UnlockVirtualMFADeviceResponse
     */
    public function unlockVirtualMFADevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unlockVirtualMFADeviceWithOptions($request, $runtime);
    }

    /**
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return UntagResourcesResponse::fromMap($this->doRequest('UntagResources', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param UntagResourcesRequest $request
     *
     * @return UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @param VerifyCenRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return VerifyCenResponse
     */
    public function verifyCenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return VerifyCenResponse::fromMap($this->doRequest('VerifyCen', 'HTTPS', 'POST', '2020-09-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param VerifyCenRequest $request
     *
     * @return VerifyCenResponse
     */
    public function verifyCen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyCenWithOptions($request, $runtime);
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
}
