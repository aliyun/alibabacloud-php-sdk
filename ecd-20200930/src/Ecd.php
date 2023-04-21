<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ActivateOfficeSiteRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ActivateOfficeSiteResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\AddDevicesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\AddDevicesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\AddFilePermissionRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\AddFilePermissionResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\AddFilePermissionShrinkRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\AddUserToDesktopGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\AddUserToDesktopGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ApplyAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ApplyAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ApplyCoordinatePrivilegeRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ApplyCoordinatePrivilegeResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ApplyCoordinationForMonitoringRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ApplyCoordinationForMonitoringResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ApproveFotaUpdateRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ApproveFotaUpdateResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\AssociateNetworkPackageRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\AssociateNetworkPackageResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\AttachCenRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\AttachCenResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\AttachEndUserRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\AttachEndUserResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CancelAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CancelAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CancelCdsFileShareLinkRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CancelCdsFileShareLinkResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CancelCoordinationForMonitoringRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CancelCoordinationForMonitoringResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CancelCopyImageRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CancelCopyImageResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ClonePolicyGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ClonePolicyGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CompleteCdsFileRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CompleteCdsFileResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ConfigADConnectorTrustRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ConfigADConnectorTrustResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ConfigADConnectorUserRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ConfigADConnectorUserResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CopyCdsFileRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CopyCdsFileResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CopyImageRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CopyImageResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateADConnectorDirectoryRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateADConnectorDirectoryResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateADConnectorOfficeSiteRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateADConnectorOfficeSiteResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateAndBindNasFileSystemRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateAndBindNasFileSystemResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateBundleRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateBundleResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCdsFileRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCdsFileResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCdsFileShareLinkRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCdsFileShareLinkResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDiskEncryptionServiceRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDiskEncryptionServiceResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateImageRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateImageResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateNASFileSystemRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateNASFileSystemResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateNetworkPackageRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateNetworkPackageResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreatePolicyGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreatePolicyGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateRAMDirectoryRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateRAMDirectoryResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateSimpleOfficeSiteRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateSimpleOfficeSiteResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateSnapshotRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateSnapshotResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteBundlesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteBundlesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteCdsFileRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteCdsFileResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteCloudDriveGroupsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteCloudDriveGroupsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteCloudDriveUsersRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteCloudDriveUsersResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteDesktopGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteDesktopGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteDesktopsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteDesktopsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteDevicesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteDevicesResponse;
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
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteSnapshotRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteSnapshotResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteVirtualMFADeviceRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteVirtualMFADeviceResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeAlarmEventStackInfoRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeAlarmEventStackInfoResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeBundlesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeBundlesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCdsFileShareLinksRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCdsFileShareLinksResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCensRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCensResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeClientEventsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeClientEventsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCloudDriveGroupsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCloudDriveGroupsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCloudDrivePermissionsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCloudDrivePermissionsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCustomizedListHeadersRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCustomizedListHeadersResponse;
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
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDevicesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDevicesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDirectoriesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDirectoriesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeFlowMetricRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeFlowMetricResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeFlowStatisticRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeFlowStatisticResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeFotaPendingDesktopsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeFotaPendingDesktopsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeFotaTasksRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeFotaTasksResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeFrontVulPatchListRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeFrontVulPatchListResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeGroupedVulRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeGroupedVulResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeImageModifiedRecordsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeImageModifiedRecordsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeImagePermissionRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeImagePermissionResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeImagesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeImagesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeInvocationsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeInvocationsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeKmsKeysRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeKmsKeysResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeNASFileSystemsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeNASFileSystemsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeNetworkPackagesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeNetworkPackagesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeOfficeSitesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeOfficeSitesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePolicyGroupsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeRegionsResponse;
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
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUserProfilePathRulesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUserProfilePathRulesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUsersInGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUsersInGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUsersPasswordRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUsersPasswordResponse;
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
use AlibabaCloud\SDK\Ecd\V20200930\Models\DetachEndUserRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DetachEndUserResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DisableDesktopsInGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DisableDesktopsInGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DissociateNetworkPackageRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DissociateNetworkPackageResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ExportClientEventsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ExportClientEventsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ExportDesktopGroupInfoRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ExportDesktopGroupInfoResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ExportDesktopListInfoRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ExportDesktopListInfoResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\GetConnectionTicketRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\GetConnectionTicketResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\GetDesktopGroupDetailRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\GetDesktopGroupDetailResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\GetOfficeSiteSsoStatusRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\GetOfficeSiteSsoStatusResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\GetSpMetadataRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\GetSpMetadataResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\HandleSecurityEventsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\HandleSecurityEventsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ListCdsFilesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ListCdsFilesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ListCdsFilesShrinkRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ListDirectoryUsersRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ListDirectoryUsersResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ListFilePermissionRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ListFilePermissionResponse;
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
use AlibabaCloud\SDK\Ecd\V20200930\Models\MigrateDesktopsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\MigrateDesktopsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyADConnectorDirectoryRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyADConnectorDirectoryResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyADConnectorOfficeSiteRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyADConnectorOfficeSiteResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyBundleRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyBundleResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyCdsFileRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyCdsFileResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyCdsFileShareLinkRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyCdsFileShareLinkResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyCloudDriveGroupsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyCloudDriveGroupsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyCloudDrivePermissionRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyCloudDrivePermissionResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyCustomizedListHeadersRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyCustomizedListHeadersResponse;
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
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyDiskSpecRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyDiskSpecResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyEntitlementRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyEntitlementResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyImageAttributeRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyImageAttributeResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyImagePermissionRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyImagePermissionResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyNASDefaultMountTargetRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyNASDefaultMountTargetResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyNetworkPackageBandwidthRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyNetworkPackageBandwidthResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyNetworkPackageEnabledRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyNetworkPackageEnabledResponse;
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
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyUserEntitlementRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyUserEntitlementResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyUserToDesktopGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyUserToDesktopGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\MoveCdsFileRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\MoveCdsFileResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\OperateVulsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\OperateVulsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RebootDesktopsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RebootDesktopsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RebuildDesktopsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RebuildDesktopsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RemoveFilePermissionRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RemoveFilePermissionResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RemoveFilePermissionShrinkRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RemoveUserFromDesktopGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RemoveUserFromDesktopGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RenewDesktopsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RenewDesktopsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RenewNetworkPackagesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RenewNetworkPackagesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ResetDesktopsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ResetDesktopsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ResetNASDefaultMountTargetRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ResetNASDefaultMountTargetResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ResetSnapshotRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ResetSnapshotResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RevokeCoordinatePrivilegeRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RevokeCoordinatePrivilegeResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RollbackSuspEventQuaraFileRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RollbackSuspEventQuaraFileResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RunCommandRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RunCommandResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\SendVerifyCodeRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\SendVerifyCodeResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\SetDesktopGroupScaleTimerRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\SetDesktopGroupScaleTimerResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\SetDesktopGroupTimerRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\SetDesktopGroupTimerResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\SetDesktopGroupTimerStatusRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\SetDesktopGroupTimerStatusResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\SetDirectorySsoStatusRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\SetDirectorySsoStatusResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\SetIdpMetadataRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\SetIdpMetadataResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\SetOfficeSiteSsoStatusRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\SetOfficeSiteSsoStatusResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\SetUserProfilePathRulesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\SetUserProfilePathRulesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\SetUserProfilePathRulesShrinkRequest;
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
use AlibabaCloud\SDK\Ecd\V20200930\Models\UpdateFotaTaskRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\UpdateFotaTaskResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\UploadImageRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\UploadImageResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\VerifyCenRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\VerifyCenResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Ecd extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ecd', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * To improve resource utilization, the system automatically locks a workspace of the convenience account type to release virtual private cloud (VPC) resources, and the workspace has been no longer used for a long time. If you want to continue using the locked workspace, you can call this operation to activate it. When you activate the locked workspace, the system recreates VPC resources based on the original configurations.
     *   *
     * @param ActivateOfficeSiteRequest $request ActivateOfficeSiteRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ActivateOfficeSiteResponse ActivateOfficeSiteResponse
     */
    public function activateOfficeSiteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ActivateOfficeSite',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ActivateOfficeSiteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * To improve resource utilization, the system automatically locks a workspace of the convenience account type to release virtual private cloud (VPC) resources, and the workspace has been no longer used for a long time. If you want to continue using the locked workspace, you can call this operation to activate it. When you activate the locked workspace, the system recreates VPC resources based on the original configurations.
     *   *
     * @param ActivateOfficeSiteRequest $request ActivateOfficeSiteRequest
     *
     * @return ActivateOfficeSiteResponse ActivateOfficeSiteResponse
     */
    public function activateOfficeSite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->activateOfficeSiteWithOptions($request, $runtime);
    }

    /**
     * You can add only one device to a tenant.
     *   *
     * @param AddDevicesRequest $request AddDevicesRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return AddDevicesResponse AddDevicesResponse
     */
    public function addDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientType)) {
            $query['ClientType'] = $request->clientType;
        }
        if (!Utils::isUnset($request->deviceIds)) {
            $query['DeviceIds'] = $request->deviceIds;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddDevices',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can add only one device to a tenant.
     *   *
     * @param AddDevicesRequest $request AddDevicesRequest
     *
     * @return AddDevicesResponse AddDevicesResponse
     */
    public function addDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDevicesWithOptions($request, $runtime);
    }

    /**
     * @param AddFilePermissionRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return AddFilePermissionResponse
     */
    public function addFilePermissionWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddFilePermissionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->memberList)) {
            $request->memberListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->memberList, 'MemberList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->cdsId)) {
            $query['CdsId'] = $request->cdsId;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->fileId)) {
            $query['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->memberListShrink)) {
            $query['MemberList'] = $request->memberListShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddFilePermission',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddFilePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddFilePermissionRequest $request
     *
     * @return AddFilePermissionResponse
     */
    public function addFilePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addFilePermissionWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->desktopGroupId)) {
            $query['DesktopGroupId'] = $request->desktopGroupId;
        }
        if (!Utils::isUnset($request->desktopGroupIds)) {
            $query['DesktopGroupIds'] = $request->desktopGroupIds;
        }
        if (!Utils::isUnset($request->endUserIds)) {
            $query['EndUserIds'] = $request->endUserIds;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddUserToDesktopGroup',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddUserToDesktopGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * You can also associate an automatic snapshot policy with a cloud desktop in the Elastic Desktop Service (EDS) console. To do so, perform the following steps: 1. Log on to the EDS console. 2. Choose Desktops and Groups > Desktops in the left-side navigation pane. 3. Find the cloud desktop that you want to manage on the Cloud Desktops page and choose More > Change Automatic Snapshot Policy in the Actions column. 4. Configure a policy for the cloud desktop as prompted in the Change Automatic Snapshot Policy panel.
     *   * After you associate an automatic snapshot policy with the cloud desktop, the system creates snapshots for the cloud desktop based on the policy.
     *   *
     * @param ApplyAutoSnapshotPolicyRequest $request ApplyAutoSnapshotPolicyRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ApplyAutoSnapshotPolicyResponse ApplyAutoSnapshotPolicyResponse
     */
    public function applyAutoSnapshotPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApplyAutoSnapshotPolicy',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyAutoSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can also associate an automatic snapshot policy with a cloud desktop in the Elastic Desktop Service (EDS) console. To do so, perform the following steps: 1. Log on to the EDS console. 2. Choose Desktops and Groups > Desktops in the left-side navigation pane. 3. Find the cloud desktop that you want to manage on the Cloud Desktops page and choose More > Change Automatic Snapshot Policy in the Actions column. 4. Configure a policy for the cloud desktop as prompted in the Change Automatic Snapshot Policy panel.
     *   * After you associate an automatic snapshot policy with the cloud desktop, the system creates snapshots for the cloud desktop based on the policy.
     *   *
     * @param ApplyAutoSnapshotPolicyRequest $request ApplyAutoSnapshotPolicyRequest
     *
     * @return ApplyAutoSnapshotPolicyResponse ApplyAutoSnapshotPolicyResponse
     */
    public function applyAutoSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * @param ApplyCoordinatePrivilegeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ApplyCoordinatePrivilegeResponse
     */
    public function applyCoordinatePrivilegeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->coId)) {
            $query['CoId'] = $request->coId;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userType)) {
            $query['UserType'] = $request->userType;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApplyCoordinatePrivilege',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyCoordinatePrivilegeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyCoordinatePrivilegeRequest $request
     *
     * @return ApplyCoordinatePrivilegeResponse
     */
    public function applyCoordinatePrivilege($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyCoordinatePrivilegeWithOptions($request, $runtime);
    }

    /**
     * @param ApplyCoordinationForMonitoringRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ApplyCoordinationForMonitoringResponse
     */
    public function applyCoordinationForMonitoringWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->coordinatePolicyType)) {
            $query['CoordinatePolicyType'] = $request->coordinatePolicyType;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->initiatorType)) {
            $query['InitiatorType'] = $request->initiatorType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceCandidates)) {
            $query['ResourceCandidates'] = $request->resourceCandidates;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApplyCoordinationForMonitoring',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApplyCoordinationForMonitoringResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApplyCoordinationForMonitoringRequest $request
     *
     * @return ApplyCoordinationForMonitoringResponse
     */
    public function applyCoordinationForMonitoring($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyCoordinationForMonitoringWithOptions($request, $runtime);
    }

    /**
     * @param ApproveFotaUpdateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ApproveFotaUpdateResponse
     */
    public function approveFotaUpdateWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appVersion)) {
            $query['AppVersion'] = $request->appVersion;
        }
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ApproveFotaUpdate',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApproveFotaUpdateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApproveFotaUpdateRequest $request
     *
     * @return ApproveFotaUpdateResponse
     */
    public function approveFotaUpdate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->approveFotaUpdateWithOptions($request, $runtime);
    }

    /**
     * @param AssociateNetworkPackageRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AssociateNetworkPackageResponse
     */
    public function associateNetworkPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->networkPackageId)) {
            $query['NetworkPackageId'] = $request->networkPackageId;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AssociateNetworkPackage',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssociateNetworkPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AssociateNetworkPackageRequest $request
     *
     * @return AssociateNetworkPackageResponse
     */
    public function associateNetworkPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateNetworkPackageWithOptions($request, $runtime);
    }

    /**
     * ## Description
     *   * *   A Cloud Enterprise Network (CEN) instance is created.
     *   * *   A workspace of the convenience account type is created.
     *   * >  The secure office network of a workspace of the enterprise Active Directory (AD) account type is attached to a CEN instance when you create the workspace. The secure office network that corresponds to each workspace can be attached only to a single CEN instance.
     *   *
     * @param AttachCenRequest $request AttachCenRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachCenResponse AttachCenResponse
     */
    public function attachCenWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->cenOwnerId)) {
            $query['CenOwnerId'] = $request->cenOwnerId;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->verifyCode)) {
            $query['VerifyCode'] = $request->verifyCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachCen',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachCenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Description
     *   * *   A Cloud Enterprise Network (CEN) instance is created.
     *   * *   A workspace of the convenience account type is created.
     *   * >  The secure office network of a workspace of the enterprise Active Directory (AD) account type is attached to a CEN instance when you create the workspace. The secure office network that corresponds to each workspace can be attached only to a single CEN instance.
     *   *
     * @param AttachCenRequest $request AttachCenRequest
     *
     * @return AttachCenResponse AttachCenResponse
     */
    public function attachCen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachCenWithOptions($request, $runtime);
    }

    /**
     * @param AttachEndUserRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AttachEndUserResponse
     */
    public function attachEndUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->adDomain)) {
            $query['AdDomain'] = $request->adDomain;
        }
        if (!Utils::isUnset($request->clientType)) {
            $query['ClientType'] = $request->clientType;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userType)) {
            $query['UserType'] = $request->userType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachEndUser',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachEndUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AttachEndUserRequest $request
     *
     * @return AttachEndUserResponse
     */
    public function attachEndUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachEndUserWithOptions($request, $runtime);
    }

    /**
     * @param CancelAutoSnapshotPolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CancelAutoSnapshotPolicyResponse
     */
    public function cancelAutoSnapshotPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelAutoSnapshotPolicy',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelAutoSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelAutoSnapshotPolicyRequest $request
     *
     * @return CancelAutoSnapshotPolicyResponse
     */
    public function cancelAutoSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * @param CancelCdsFileShareLinkRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CancelCdsFileShareLinkResponse
     */
    public function cancelCdsFileShareLinkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cdsId)) {
            $query['CdsId'] = $request->cdsId;
        }
        if (!Utils::isUnset($request->shareId)) {
            $query['ShareId'] = $request->shareId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelCdsFileShareLink',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelCdsFileShareLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelCdsFileShareLinkRequest $request
     *
     * @return CancelCdsFileShareLinkResponse
     */
    public function cancelCdsFileShareLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelCdsFileShareLinkWithOptions($request, $runtime);
    }

    /**
     * @param CancelCoordinationForMonitoringRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CancelCoordinationForMonitoringResponse
     */
    public function cancelCoordinationForMonitoringWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->coIds)) {
            $query['CoIds'] = $request->coIds;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userType)) {
            $query['UserType'] = $request->userType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelCoordinationForMonitoring',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelCoordinationForMonitoringResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelCoordinationForMonitoringRequest $request
     *
     * @return CancelCoordinationForMonitoringResponse
     */
    public function cancelCoordinationForMonitoring($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelCoordinationForMonitoringWithOptions($request, $runtime);
    }

    /**
     * @param CancelCopyImageRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CancelCopyImageResponse
     */
    public function cancelCopyImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CancelCopyImage',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelCopyImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelCopyImageRequest $request
     *
     * @return CancelCopyImageResponse
     */
    public function cancelCopyImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelCopyImageWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->policyGroupId)) {
            $query['PolicyGroupId'] = $request->policyGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ClonePolicyGroup',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ClonePolicyGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CompleteCdsFileRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CompleteCdsFileResponse
     */
    public function completeCdsFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cdsId)) {
            $query['CdsId'] = $request->cdsId;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->fileId)) {
            $query['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->uploadId)) {
            $query['UploadId'] = $request->uploadId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CompleteCdsFile',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CompleteCdsFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CompleteCdsFileRequest $request
     *
     * @return CompleteCdsFileResponse
     */
    public function completeCdsFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->completeCdsFileWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->rdsLicenseDomain)) {
            $query['RdsLicenseDomain'] = $request->rdsLicenseDomain;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->trustKey)) {
            $query['TrustKey'] = $request->trustKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigADConnectorTrust',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigADConnectorTrustResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->domainPassword)) {
            $query['DomainPassword'] = $request->domainPassword;
        }
        if (!Utils::isUnset($request->domainUserName)) {
            $query['DomainUserName'] = $request->domainUserName;
        }
        if (!Utils::isUnset($request->OUName)) {
            $query['OUName'] = $request->OUName;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ConfigADConnectorUser',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConfigADConnectorUserResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param CopyCdsFileRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CopyCdsFileResponse
     */
    public function copyCdsFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoRename)) {
            $query['AutoRename'] = $request->autoRename;
        }
        if (!Utils::isUnset($request->cdsId)) {
            $query['CdsId'] = $request->cdsId;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->fileId)) {
            $query['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->parentFolderId)) {
            $query['ParentFolderId'] = $request->parentFolderId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CopyCdsFile',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CopyCdsFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CopyCdsFileRequest $request
     *
     * @return CopyCdsFileResponse
     */
    public function copyCdsFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyCdsFileWithOptions($request, $runtime);
    }

    /**
     * @param CopyImageRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CopyImageResponse
     */
    public function copyImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->destinationDescription)) {
            $query['DestinationDescription'] = $request->destinationDescription;
        }
        if (!Utils::isUnset($request->destinationImageName)) {
            $query['DestinationImageName'] = $request->destinationImageName;
        }
        if (!Utils::isUnset($request->destinationRegionId)) {
            $query['DestinationRegionId'] = $request->destinationRegionId;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CopyImage',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CopyImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CopyImageRequest $request
     *
     * @return CopyImageResponse
     */
    public function copyImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyImageWithOptions($request, $runtime);
    }

    /**
     * AD directories are used to connect to enterprise AD systems and are suitable for large-scale desktop deployments. You are charged for AD directories that are used to connect to enterprise AD systems. For more information, see [Billing overview](~~188395~~).
     *   *
     * @param CreateADConnectorDirectoryRequest $request CreateADConnectorDirectoryRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateADConnectorDirectoryResponse CreateADConnectorDirectoryResponse
     */
    public function createADConnectorDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->desktopAccessType)) {
            $query['DesktopAccessType'] = $request->desktopAccessType;
        }
        if (!Utils::isUnset($request->directoryName)) {
            $query['DirectoryName'] = $request->directoryName;
        }
        if (!Utils::isUnset($request->dnsAddress)) {
            $query['DnsAddress'] = $request->dnsAddress;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->domainPassword)) {
            $query['DomainPassword'] = $request->domainPassword;
        }
        if (!Utils::isUnset($request->domainUserName)) {
            $query['DomainUserName'] = $request->domainUserName;
        }
        if (!Utils::isUnset($request->enableAdminAccess)) {
            $query['EnableAdminAccess'] = $request->enableAdminAccess;
        }
        if (!Utils::isUnset($request->mfaEnabled)) {
            $query['MfaEnabled'] = $request->mfaEnabled;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->specification)) {
            $query['Specification'] = $request->specification;
        }
        if (!Utils::isUnset($request->subDomainDnsAddress)) {
            $query['SubDomainDnsAddress'] = $request->subDomainDnsAddress;
        }
        if (!Utils::isUnset($request->subDomainName)) {
            $query['SubDomainName'] = $request->subDomainName;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateADConnectorDirectory',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateADConnectorDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * AD directories are used to connect to enterprise AD systems and are suitable for large-scale desktop deployments. You are charged for AD directories that are used to connect to enterprise AD systems. For more information, see [Billing overview](~~188395~~).
     *   *
     * @param CreateADConnectorDirectoryRequest $request CreateADConnectorDirectoryRequest
     *
     * @return CreateADConnectorDirectoryResponse CreateADConnectorDirectoryResponse
     */
    public function createADConnectorDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createADConnectorDirectoryWithOptions($request, $runtime);
    }

    /**
     * - When you create a workspace of the enterprise Active Directory (AD) account type, AD connectors are automatically created for you to connect to enterprise AD systems. You are charged for the AD connectors. For more information, see [Billing overview](~~188395~~).
     *   * - After you call this operation to create the AD workspace, you must configure the AD domain. To configure the AD domain, perform the following operations:
     *   *     1. Configure the conditional forwarder in the Domain Name System (DNS) server.
     *   *     2. Configure the trust relationship in the AD domain server, and call the [ConfigADConnectorTrust](~~311258~~) operation to configure the trust relationship for the AD workspace.
     *   *     3. Call the [ListUserAdOrganizationUnits](~~311259~~) operation to obtain the organizational unit (OU) details of the AD domain. Then, call the [ConfigADConnectorUser](~~311262~~) operation to specify an OU and an administrator for the AD workspace.
     *   *     > If you specify the DomainUserName and DomainPassword parameters when you create the AD workspace, you need to configure only the conditional forwarder. If you do not specify the DomainUserName and DomainPassword parameters, you need to configure the conditional forwarder, trust relationship, and OU.
     *   * For more information, see [Create a workspace of the enterprise account type](~~214469~~).
     *   *
     * @param CreateADConnectorOfficeSiteRequest $request CreateADConnectorOfficeSiteRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateADConnectorOfficeSiteResponse CreateADConnectorOfficeSiteResponse
     */
    public function createADConnectorOfficeSiteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->adHostname)) {
            $query['AdHostname'] = $request->adHostname;
        }
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->cenOwnerId)) {
            $query['CenOwnerId'] = $request->cenOwnerId;
        }
        if (!Utils::isUnset($request->cidrBlock)) {
            $query['CidrBlock'] = $request->cidrBlock;
        }
        if (!Utils::isUnset($request->desktopAccessType)) {
            $query['DesktopAccessType'] = $request->desktopAccessType;
        }
        if (!Utils::isUnset($request->dnsAddress)) {
            $query['DnsAddress'] = $request->dnsAddress;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->domainPassword)) {
            $query['DomainPassword'] = $request->domainPassword;
        }
        if (!Utils::isUnset($request->domainUserName)) {
            $query['DomainUserName'] = $request->domainUserName;
        }
        if (!Utils::isUnset($request->enableAdminAccess)) {
            $query['EnableAdminAccess'] = $request->enableAdminAccess;
        }
        if (!Utils::isUnset($request->enableInternetAccess)) {
            $query['EnableInternetAccess'] = $request->enableInternetAccess;
        }
        if (!Utils::isUnset($request->mfaEnabled)) {
            $query['MfaEnabled'] = $request->mfaEnabled;
        }
        if (!Utils::isUnset($request->officeSiteName)) {
            $query['OfficeSiteName'] = $request->officeSiteName;
        }
        if (!Utils::isUnset($request->protocolType)) {
            $query['ProtocolType'] = $request->protocolType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->specification)) {
            $query['Specification'] = $request->specification;
        }
        if (!Utils::isUnset($request->subDomainDnsAddress)) {
            $query['SubDomainDnsAddress'] = $request->subDomainDnsAddress;
        }
        if (!Utils::isUnset($request->subDomainName)) {
            $query['SubDomainName'] = $request->subDomainName;
        }
        if (!Utils::isUnset($request->verifyCode)) {
            $query['VerifyCode'] = $request->verifyCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateADConnectorOfficeSite',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateADConnectorOfficeSiteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * - When you create a workspace of the enterprise Active Directory (AD) account type, AD connectors are automatically created for you to connect to enterprise AD systems. You are charged for the AD connectors. For more information, see [Billing overview](~~188395~~).
     *   * - After you call this operation to create the AD workspace, you must configure the AD domain. To configure the AD domain, perform the following operations:
     *   *     1. Configure the conditional forwarder in the Domain Name System (DNS) server.
     *   *     2. Configure the trust relationship in the AD domain server, and call the [ConfigADConnectorTrust](~~311258~~) operation to configure the trust relationship for the AD workspace.
     *   *     3. Call the [ListUserAdOrganizationUnits](~~311259~~) operation to obtain the organizational unit (OU) details of the AD domain. Then, call the [ConfigADConnectorUser](~~311262~~) operation to specify an OU and an administrator for the AD workspace.
     *   *     > If you specify the DomainUserName and DomainPassword parameters when you create the AD workspace, you need to configure only the conditional forwarder. If you do not specify the DomainUserName and DomainPassword parameters, you need to configure the conditional forwarder, trust relationship, and OU.
     *   * For more information, see [Create a workspace of the enterprise account type](~~214469~~).
     *   *
     * @param CreateADConnectorOfficeSiteRequest $request CreateADConnectorOfficeSiteRequest
     *
     * @return CreateADConnectorOfficeSiteResponse CreateADConnectorOfficeSiteResponse
     */
    public function createADConnectorOfficeSite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createADConnectorOfficeSiteWithOptions($request, $runtime);
    }

    /**
     * @param CreateAndBindNasFileSystemRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateAndBindNasFileSystemResponse
     */
    public function createAndBindNasFileSystemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->desktopGroupId)) {
            $query['DesktopGroupId'] = $request->desktopGroupId;
        }
        if (!Utils::isUnset($request->encryptType)) {
            $query['EncryptType'] = $request->encryptType;
        }
        if (!Utils::isUnset($request->endUserIds)) {
            $query['EndUserIds'] = $request->endUserIds;
        }
        if (!Utils::isUnset($request->fileSystemName)) {
            $query['FileSystemName'] = $request->fileSystemName;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->storageType)) {
            $query['StorageType'] = $request->storageType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAndBindNasFileSystem',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAndBindNasFileSystemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAndBindNasFileSystemRequest $request
     *
     * @return CreateAndBindNasFileSystemResponse
     */
    public function createAndBindNasFileSystem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAndBindNasFileSystemWithOptions($request, $runtime);
    }

    /**
     * You can call the operation to create an automatic snapshot policy based on a CRON expression. Then, the system automatically creates snapshots of a cloud desktop based on the policy.
     *   *
     * @param CreateAutoSnapshotPolicyRequest $request CreateAutoSnapshotPolicyRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAutoSnapshotPolicyResponse CreateAutoSnapshotPolicyResponse
     */
    public function createAutoSnapshotPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cronExpression)) {
            $query['CronExpression'] = $request->cronExpression;
        }
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->retentionDays)) {
            $query['RetentionDays'] = $request->retentionDays;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAutoSnapshotPolicy',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAutoSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the operation to create an automatic snapshot policy based on a CRON expression. Then, the system automatically creates snapshots of a cloud desktop based on the policy.
     *   *
     * @param CreateAutoSnapshotPolicyRequest $request CreateAutoSnapshotPolicyRequest
     *
     * @return CreateAutoSnapshotPolicyResponse CreateAutoSnapshotPolicyResponse
     */
    public function createAutoSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * ## Description
     *   * Desktop templates are categorized into system templates and custom templates. System templates are the templates provided by Alibaba Cloud. You can call this operation to create a custom template.
     *   *
     * @param CreateBundleRequest $request CreateBundleRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateBundleResponse CreateBundleResponse
     */
    public function createBundleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bundleName)) {
            $query['BundleName'] = $request->bundleName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->desktopType)) {
            $query['DesktopType'] = $request->desktopType;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->rootDiskPerformanceLevel)) {
            $query['RootDiskPerformanceLevel'] = $request->rootDiskPerformanceLevel;
        }
        if (!Utils::isUnset($request->rootDiskSizeGib)) {
            $query['RootDiskSizeGib'] = $request->rootDiskSizeGib;
        }
        if (!Utils::isUnset($request->userDiskPerformanceLevel)) {
            $query['UserDiskPerformanceLevel'] = $request->userDiskPerformanceLevel;
        }
        if (!Utils::isUnset($request->userDiskSizeGib)) {
            $query['UserDiskSizeGib'] = $request->userDiskSizeGib;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateBundle',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateBundleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Description
     *   * Desktop templates are categorized into system templates and custom templates. System templates are the templates provided by Alibaba Cloud. You can call this operation to create a custom template.
     *   *
     * @param CreateBundleRequest $request CreateBundleRequest
     *
     * @return CreateBundleResponse CreateBundleResponse
     */
    public function createBundle($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createBundleWithOptions($request, $runtime);
    }

    /**
     * @param CreateCdsFileRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateCdsFileResponse
     */
    public function createCdsFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cdsId)) {
            $query['CdsId'] = $request->cdsId;
        }
        if (!Utils::isUnset($request->conflictPolicy)) {
            $query['ConflictPolicy'] = $request->conflictPolicy;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->fileHash)) {
            $query['FileHash'] = $request->fileHash;
        }
        if (!Utils::isUnset($request->fileLength)) {
            $query['FileLength'] = $request->fileLength;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileType)) {
            $query['FileType'] = $request->fileType;
        }
        if (!Utils::isUnset($request->parentFileId)) {
            $query['ParentFileId'] = $request->parentFileId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCdsFile',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCdsFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCdsFileRequest $request
     *
     * @return CreateCdsFileResponse
     */
    public function createCdsFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCdsFileWithOptions($request, $runtime);
    }

    /**
     * @param CreateCdsFileShareLinkRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateCdsFileShareLinkResponse
     */
    public function createCdsFileShareLinkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cdsId)) {
            $query['CdsId'] = $request->cdsId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->disableDownload)) {
            $query['DisableDownload'] = $request->disableDownload;
        }
        if (!Utils::isUnset($request->disablePreview)) {
            $query['DisablePreview'] = $request->disablePreview;
        }
        if (!Utils::isUnset($request->disableSave)) {
            $query['DisableSave'] = $request->disableSave;
        }
        if (!Utils::isUnset($request->downloadLimit)) {
            $query['DownloadLimit'] = $request->downloadLimit;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->expiration)) {
            $query['Expiration'] = $request->expiration;
        }
        if (!Utils::isUnset($request->fileIds)) {
            $query['FileIds'] = $request->fileIds;
        }
        if (!Utils::isUnset($request->previewLimit)) {
            $query['PreviewLimit'] = $request->previewLimit;
        }
        if (!Utils::isUnset($request->saveLimit)) {
            $query['SaveLimit'] = $request->saveLimit;
        }
        if (!Utils::isUnset($request->shareName)) {
            $query['ShareName'] = $request->shareName;
        }
        if (!Utils::isUnset($request->sharePwd)) {
            $query['SharePwd'] = $request->sharePwd;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCdsFileShareLink',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCdsFileShareLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateCdsFileShareLinkRequest $request
     *
     * @return CreateCdsFileShareLinkResponse
     */
    public function createCdsFileShareLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCdsFileShareLinkWithOptions($request, $runtime);
    }

    /**
     * # Description
     *   * Before you call this operation to create a desktop group, make sure that the following operations are complete:
     *   * *   You are familiar with the features, usage limits, and scaling policies of desktop groups. For more information, see [Overview](~~290959~~) of desktop groups.
     *   * *   Resources, such as workspaces, users, desktop templates, and policies, are created.
     *   *
     * @param CreateDesktopGroupRequest $request CreateDesktopGroupRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDesktopGroupResponse CreateDesktopGroupResponse
     */
    public function createDesktopGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allClassifyUsers)) {
            $query['AllClassifyUsers'] = $request->allClassifyUsers;
        }
        if (!Utils::isUnset($request->allowAutoSetup)) {
            $query['AllowAutoSetup'] = $request->allowAutoSetup;
        }
        if (!Utils::isUnset($request->allowBufferCount)) {
            $query['AllowBufferCount'] = $request->allowBufferCount;
        }
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->bindAmount)) {
            $query['BindAmount'] = $request->bindAmount;
        }
        if (!Utils::isUnset($request->bundleId)) {
            $query['BundleId'] = $request->bundleId;
        }
        if (!Utils::isUnset($request->buyDesktopsCount)) {
            $query['BuyDesktopsCount'] = $request->buyDesktopsCount;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->classify)) {
            $query['Classify'] = $request->classify;
        }
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->comments)) {
            $query['Comments'] = $request->comments;
        }
        if (!Utils::isUnset($request->connectDuration)) {
            $query['ConnectDuration'] = $request->connectDuration;
        }
        if (!Utils::isUnset($request->defaultInitDesktopCount)) {
            $query['DefaultInitDesktopCount'] = $request->defaultInitDesktopCount;
        }
        if (!Utils::isUnset($request->desktopGroupName)) {
            $query['DesktopGroupName'] = $request->desktopGroupName;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->endUserIds)) {
            $query['EndUserIds'] = $request->endUserIds;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->groupVersion)) {
            $query['GroupVersion'] = $request->groupVersion;
        }
        if (!Utils::isUnset($request->idleDisconnectDuration)) {
            $query['IdleDisconnectDuration'] = $request->idleDisconnectDuration;
        }
        if (!Utils::isUnset($request->keepDuration)) {
            $query['KeepDuration'] = $request->keepDuration;
        }
        if (!Utils::isUnset($request->loadPolicy)) {
            $query['LoadPolicy'] = $request->loadPolicy;
        }
        if (!Utils::isUnset($request->maxDesktopsCount)) {
            $query['MaxDesktopsCount'] = $request->maxDesktopsCount;
        }
        if (!Utils::isUnset($request->minDesktopsCount)) {
            $query['MinDesktopsCount'] = $request->minDesktopsCount;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->ownType)) {
            $query['OwnType'] = $request->ownType;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->policyGroupId)) {
            $query['PolicyGroupId'] = $request->policyGroupId;
        }
        if (!Utils::isUnset($request->profileFollowSwitch)) {
            $query['ProfileFollowSwitch'] = $request->profileFollowSwitch;
        }
        if (!Utils::isUnset($request->ratioThreshold)) {
            $query['RatioThreshold'] = $request->ratioThreshold;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resetType)) {
            $query['ResetType'] = $request->resetType;
        }
        if (!Utils::isUnset($request->scaleStrategyId)) {
            $query['ScaleStrategyId'] = $request->scaleStrategyId;
        }
        if (!Utils::isUnset($request->stopDuration)) {
            $query['StopDuration'] = $request->stopDuration;
        }
        if (!Utils::isUnset($request->volumeEncryptionEnabled)) {
            $query['VolumeEncryptionEnabled'] = $request->volumeEncryptionEnabled;
        }
        if (!Utils::isUnset($request->volumeEncryptionKey)) {
            $query['VolumeEncryptionKey'] = $request->volumeEncryptionKey;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDesktopGroup',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDesktopGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * # Description
     *   * Before you call this operation to create a desktop group, make sure that the following operations are complete:
     *   * *   You are familiar with the features, usage limits, and scaling policies of desktop groups. For more information, see [Overview](~~290959~~) of desktop groups.
     *   * *   Resources, such as workspaces, users, desktop templates, and policies, are created.
     *   *
     * @param CreateDesktopGroupRequest $request CreateDesktopGroupRequest
     *
     * @return CreateDesktopGroupResponse CreateDesktopGroupResponse
     */
    public function createDesktopGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDesktopGroupWithOptions($request, $runtime);
    }

    /**
     * 1\\. Before you create a cloud desktop in Elastic Desktop Service (EDS), make sure that the following operations are complete:
     *   * *   A workspace and a user are created. For more information, see the following topics:
     *   *     *   Create a workspace of the convenience account type and a convenience user: [CreateSimpleOfficeSite](~~215416~~) and [Create a convenience user](~~214472~~)
     *   *     *   Create a workspace of the enterprise Active Directory (AD) account type and an enterprise AD user: [CreateADConnectorOfficeSite](~~215417~~) and [Create an enterprise AD user](~~188619~~)
     *   * *   A cloud desktop template is created by calling the [CreateBundle](~~188883~~) operation, or an existing cloud desktop template is used.
     *   * *   A policy is created by calling the [CreatePolicyGroup](~~188889~~) operation, or an existing policy is used.
     *   * 2\\. A custom command script that can be automatically executed after you create the cloud desktop is prepared. You can customize a command script by using the UserCommands parameter.
     *   *
     * @param CreateDesktopsRequest $request CreateDesktopsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDesktopsResponse CreateDesktopsResponse
     */
    public function createDesktopsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->amount)) {
            $query['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->bundleId)) {
            $query['BundleId'] = $request->bundleId;
        }
        if (!Utils::isUnset($request->bundleModels)) {
            $query['BundleModels'] = $request->bundleModels;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->desktopName)) {
            $query['DesktopName'] = $request->desktopName;
        }
        if (!Utils::isUnset($request->desktopNameSuffix)) {
            $query['DesktopNameSuffix'] = $request->desktopNameSuffix;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->hostname)) {
            $query['Hostname'] = $request->hostname;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->policyGroupId)) {
            $query['PolicyGroupId'] = $request->policyGroupId;
        }
        if (!Utils::isUnset($request->promotionId)) {
            $query['PromotionId'] = $request->promotionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->userAssignMode)) {
            $query['UserAssignMode'] = $request->userAssignMode;
        }
        if (!Utils::isUnset($request->userCommands)) {
            $query['UserCommands'] = $request->userCommands;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        if (!Utils::isUnset($request->volumeEncryptionEnabled)) {
            $query['VolumeEncryptionEnabled'] = $request->volumeEncryptionEnabled;
        }
        if (!Utils::isUnset($request->volumeEncryptionKey)) {
            $query['VolumeEncryptionKey'] = $request->volumeEncryptionKey;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDesktops',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDesktopsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 1\\. Before you create a cloud desktop in Elastic Desktop Service (EDS), make sure that the following operations are complete:
     *   * *   A workspace and a user are created. For more information, see the following topics:
     *   *     *   Create a workspace of the convenience account type and a convenience user: [CreateSimpleOfficeSite](~~215416~~) and [Create a convenience user](~~214472~~)
     *   *     *   Create a workspace of the enterprise Active Directory (AD) account type and an enterprise AD user: [CreateADConnectorOfficeSite](~~215417~~) and [Create an enterprise AD user](~~188619~~)
     *   * *   A cloud desktop template is created by calling the [CreateBundle](~~188883~~) operation, or an existing cloud desktop template is used.
     *   * *   A policy is created by calling the [CreatePolicyGroup](~~188889~~) operation, or an existing policy is used.
     *   * 2\\. A custom command script that can be automatically executed after you create the cloud desktop is prepared. You can customize a command script by using the UserCommands parameter.
     *   *
     * @param CreateDesktopsRequest $request CreateDesktopsRequest
     *
     * @return CreateDesktopsResponse CreateDesktopsResponse
     */
    public function createDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDesktopsWithOptions($request, $runtime);
    }

    /**
     * @param CreateDiskEncryptionServiceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateDiskEncryptionServiceResponse
     */
    public function createDiskEncryptionServiceWithOptions($request, $runtime)
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
            'action'      => 'CreateDiskEncryptionService',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDiskEncryptionServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDiskEncryptionServiceRequest $request
     *
     * @return CreateDiskEncryptionServiceResponse
     */
    public function createDiskEncryptionService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDiskEncryptionServiceWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->autoCleanUserdata)) {
            $query['AutoCleanUserdata'] = $request->autoCleanUserdata;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->diskType)) {
            $query['DiskType'] = $request->diskType;
        }
        if (!Utils::isUnset($request->imageName)) {
            $query['ImageName'] = $request->imageName;
        }
        if (!Utils::isUnset($request->imageResourceType)) {
            $query['ImageResourceType'] = $request->imageResourceType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->snapshotId)) {
            $query['SnapshotId'] = $request->snapshotId;
        }
        if (!Utils::isUnset($request->snapshotIds)) {
            $query['SnapshotIds'] = $request->snapshotIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateImage',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateImageResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * *   You can create a NAS file system for each standard workspace so that cloud desktops within the workspace can share files.
     *   * *   The system creates a General-purpose NAS file system and generates a default mount target. The storage types of the NAS file system includes Capacity type and Performance type. The Capacity type provides 10 PiB of storage while the Performance type provides only 1 PiB of storage.
     *   * *   NAS file systems are billed on a pay-as-you-go basis. You are charged based on the amount of used storage. You can also purchase resource plans to offset the storage fees of the NAS file systems.
     *   * For more information, see [Create a NAS file system](~~214481~~).
     *   *
     * @param CreateNASFileSystemRequest $request CreateNASFileSystemRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNASFileSystemResponse CreateNASFileSystemResponse
     */
    public function createNASFileSystemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->encryptType)) {
            $query['EncryptType'] = $request->encryptType;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->storageType)) {
            $query['StorageType'] = $request->storageType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateNASFileSystem',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateNASFileSystemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   You can create a NAS file system for each standard workspace so that cloud desktops within the workspace can share files.
     *   * *   The system creates a General-purpose NAS file system and generates a default mount target. The storage types of the NAS file system includes Capacity type and Performance type. The Capacity type provides 10 PiB of storage while the Performance type provides only 1 PiB of storage.
     *   * *   NAS file systems are billed on a pay-as-you-go basis. You are charged based on the amount of used storage. You can also purchase resource plans to offset the storage fees of the NAS file systems.
     *   * For more information, see [Create a NAS file system](~~214481~~).
     *   *
     * @param CreateNASFileSystemRequest $request CreateNASFileSystemRequest
     *
     * @return CreateNASFileSystemResponse CreateNASFileSystemResponse
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
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->internetChargeType)) {
            $query['InternetChargeType'] = $request->internetChargeType;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->promotionId)) {
            $query['PromotionId'] = $request->promotionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateNetworkPackage',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateNetworkPackageResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * A policy is a set of security rules that are used to control security configurations when end users use cloud desktops. A policy contains basic features, such as USB redirection and watermarking, and other features, such as security group control. For more information, see [Policy overview](~~189345~~).
     *   *
     * @param CreatePolicyGroupRequest $request CreatePolicyGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePolicyGroupResponse CreatePolicyGroupResponse
     */
    public function createPolicyGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appContentProtection)) {
            $query['AppContentProtection'] = $request->appContentProtection;
        }
        if (!Utils::isUnset($request->authorizeAccessPolicyRule)) {
            $query['AuthorizeAccessPolicyRule'] = $request->authorizeAccessPolicyRule;
        }
        if (!Utils::isUnset($request->authorizeSecurityPolicyRule)) {
            $query['AuthorizeSecurityPolicyRule'] = $request->authorizeSecurityPolicyRule;
        }
        if (!Utils::isUnset($request->cameraRedirect)) {
            $query['CameraRedirect'] = $request->cameraRedirect;
        }
        if (!Utils::isUnset($request->clientType)) {
            $query['ClientType'] = $request->clientType;
        }
        if (!Utils::isUnset($request->clipboard)) {
            $query['Clipboard'] = $request->clipboard;
        }
        if (!Utils::isUnset($request->domainList)) {
            $query['DomainList'] = $request->domainList;
        }
        if (!Utils::isUnset($request->endUserApplyAdminCoordinate)) {
            $query['EndUserApplyAdminCoordinate'] = $request->endUserApplyAdminCoordinate;
        }
        if (!Utils::isUnset($request->endUserGroupCoordinate)) {
            $query['EndUserGroupCoordinate'] = $request->endUserGroupCoordinate;
        }
        if (!Utils::isUnset($request->gpuAcceleration)) {
            $query['GpuAcceleration'] = $request->gpuAcceleration;
        }
        if (!Utils::isUnset($request->html5Access)) {
            $query['Html5Access'] = $request->html5Access;
        }
        if (!Utils::isUnset($request->html5FileTransfer)) {
            $query['Html5FileTransfer'] = $request->html5FileTransfer;
        }
        if (!Utils::isUnset($request->internetCommunicationProtocol)) {
            $query['InternetCommunicationProtocol'] = $request->internetCommunicationProtocol;
        }
        if (!Utils::isUnset($request->localDrive)) {
            $query['LocalDrive'] = $request->localDrive;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->netRedirect)) {
            $query['NetRedirect'] = $request->netRedirect;
        }
        if (!Utils::isUnset($request->preemptLogin)) {
            $query['PreemptLogin'] = $request->preemptLogin;
        }
        if (!Utils::isUnset($request->preemptLoginUser)) {
            $query['PreemptLoginUser'] = $request->preemptLoginUser;
        }
        if (!Utils::isUnset($request->printerRedirection)) {
            $query['PrinterRedirection'] = $request->printerRedirection;
        }
        if (!Utils::isUnset($request->recordContent)) {
            $query['RecordContent'] = $request->recordContent;
        }
        if (!Utils::isUnset($request->recordContentExpires)) {
            $query['RecordContentExpires'] = $request->recordContentExpires;
        }
        if (!Utils::isUnset($request->recording)) {
            $query['Recording'] = $request->recording;
        }
        if (!Utils::isUnset($request->recordingAudio)) {
            $query['RecordingAudio'] = $request->recordingAudio;
        }
        if (!Utils::isUnset($request->recordingDuration)) {
            $query['RecordingDuration'] = $request->recordingDuration;
        }
        if (!Utils::isUnset($request->recordingEndTime)) {
            $query['RecordingEndTime'] = $request->recordingEndTime;
        }
        if (!Utils::isUnset($request->recordingExpires)) {
            $query['RecordingExpires'] = $request->recordingExpires;
        }
        if (!Utils::isUnset($request->recordingFps)) {
            $query['RecordingFps'] = $request->recordingFps;
        }
        if (!Utils::isUnset($request->recordingStartTime)) {
            $query['RecordingStartTime'] = $request->recordingStartTime;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->remoteCoordinate)) {
            $query['RemoteCoordinate'] = $request->remoteCoordinate;
        }
        if (!Utils::isUnset($request->scope)) {
            $query['Scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->scopeValue)) {
            $query['ScopeValue'] = $request->scopeValue;
        }
        if (!Utils::isUnset($request->usbRedirect)) {
            $query['UsbRedirect'] = $request->usbRedirect;
        }
        if (!Utils::isUnset($request->usbSupplyRedirectRule)) {
            $query['UsbSupplyRedirectRule'] = $request->usbSupplyRedirectRule;
        }
        if (!Utils::isUnset($request->videoRedirect)) {
            $query['VideoRedirect'] = $request->videoRedirect;
        }
        if (!Utils::isUnset($request->visualQuality)) {
            $query['VisualQuality'] = $request->visualQuality;
        }
        if (!Utils::isUnset($request->watermark)) {
            $query['Watermark'] = $request->watermark;
        }
        if (!Utils::isUnset($request->watermarkColor)) {
            $query['WatermarkColor'] = $request->watermarkColor;
        }
        if (!Utils::isUnset($request->watermarkDegree)) {
            $query['WatermarkDegree'] = $request->watermarkDegree;
        }
        if (!Utils::isUnset($request->watermarkFontSize)) {
            $query['WatermarkFontSize'] = $request->watermarkFontSize;
        }
        if (!Utils::isUnset($request->watermarkFontStyle)) {
            $query['WatermarkFontStyle'] = $request->watermarkFontStyle;
        }
        if (!Utils::isUnset($request->watermarkRowAmount)) {
            $query['WatermarkRowAmount'] = $request->watermarkRowAmount;
        }
        if (!Utils::isUnset($request->watermarkTransparency)) {
            $query['WatermarkTransparency'] = $request->watermarkTransparency;
        }
        if (!Utils::isUnset($request->watermarkTransparencyValue)) {
            $query['WatermarkTransparencyValue'] = $request->watermarkTransparencyValue;
        }
        if (!Utils::isUnset($request->watermarkType)) {
            $query['WatermarkType'] = $request->watermarkType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreatePolicyGroup',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreatePolicyGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * A policy is a set of security rules that are used to control security configurations when end users use cloud desktops. A policy contains basic features, such as USB redirection and watermarking, and other features, such as security group control. For more information, see [Policy overview](~~189345~~).
     *   *
     * @param CreatePolicyGroupRequest $request CreatePolicyGroupRequest
     *
     * @return CreatePolicyGroupResponse CreatePolicyGroupResponse
     */
    public function createPolicyGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createPolicyGroupWithOptions($request, $runtime);
    }

    /**
     * Before you create a RAM directory, make sure that you have completed the following operations:
     *   * *   You have created a virtual private cloud (VPC) by calling the [CreateVpc](~~35737~~) operation in a region where EDS is available.
     *   * *   You have created a vSwitch in the VPC by calling the [CreateVSwitch](~~35745~~) operation, and the vSwitch resides in a zone where EDS is available.
     *   *
     * @param CreateRAMDirectoryRequest $request CreateRAMDirectoryRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRAMDirectoryResponse CreateRAMDirectoryResponse
     */
    public function createRAMDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->desktopAccessType)) {
            $query['DesktopAccessType'] = $request->desktopAccessType;
        }
        if (!Utils::isUnset($request->directoryName)) {
            $query['DirectoryName'] = $request->directoryName;
        }
        if (!Utils::isUnset($request->enableAdminAccess)) {
            $query['EnableAdminAccess'] = $request->enableAdminAccess;
        }
        if (!Utils::isUnset($request->enableInternetAccess)) {
            $query['EnableInternetAccess'] = $request->enableInternetAccess;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRAMDirectory',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRAMDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you create a RAM directory, make sure that you have completed the following operations:
     *   * *   You have created a virtual private cloud (VPC) by calling the [CreateVpc](~~35737~~) operation in a region where EDS is available.
     *   * *   You have created a vSwitch in the VPC by calling the [CreateVSwitch](~~35745~~) operation, and the vSwitch resides in a zone where EDS is available.
     *   *
     * @param CreateRAMDirectoryRequest $request CreateRAMDirectoryRequest
     *
     * @return CreateRAMDirectoryResponse CreateRAMDirectoryResponse
     */
    public function createRAMDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRAMDirectoryWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->cenOwnerId)) {
            $query['CenOwnerId'] = $request->cenOwnerId;
        }
        if (!Utils::isUnset($request->cidrBlock)) {
            $query['CidrBlock'] = $request->cidrBlock;
        }
        if (!Utils::isUnset($request->cloudBoxOfficeSite)) {
            $query['CloudBoxOfficeSite'] = $request->cloudBoxOfficeSite;
        }
        if (!Utils::isUnset($request->desktopAccessType)) {
            $query['DesktopAccessType'] = $request->desktopAccessType;
        }
        if (!Utils::isUnset($request->enableAdminAccess)) {
            $query['EnableAdminAccess'] = $request->enableAdminAccess;
        }
        if (!Utils::isUnset($request->enableInternetAccess)) {
            $query['EnableInternetAccess'] = $request->enableInternetAccess;
        }
        if (!Utils::isUnset($request->needVerifyZeroDevice)) {
            $query['NeedVerifyZeroDevice'] = $request->needVerifyZeroDevice;
        }
        if (!Utils::isUnset($request->officeSiteName)) {
            $query['OfficeSiteName'] = $request->officeSiteName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->verifyCode)) {
            $query['VerifyCode'] = $request->verifyCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSimpleOfficeSite',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSimpleOfficeSiteResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * The cloud desktop for which you want to create a snapshot must be in the **Running** state or **Stopped** state.
     *   *
     * @param CreateSnapshotRequest $request CreateSnapshotRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSnapshotResponse CreateSnapshotResponse
     */
    public function createSnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->snapshotName)) {
            $query['SnapshotName'] = $request->snapshotName;
        }
        if (!Utils::isUnset($request->sourceDiskType)) {
            $query['SourceDiskType'] = $request->sourceDiskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSnapshot',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The cloud desktop for which you want to create a snapshot must be in the **Running** state or **Stopped** state.
     *   *
     * @param CreateSnapshotRequest $request CreateSnapshotRequest
     *
     * @return CreateSnapshotResponse CreateSnapshotResponse
     */
    public function createSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSnapshotWithOptions($request, $runtime);
    }

    /**
     * @param DeleteAutoSnapshotPolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteAutoSnapshotPolicyResponse
     */
    public function deleteAutoSnapshotPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteAutoSnapshotPolicy',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteAutoSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteAutoSnapshotPolicyRequest $request
     *
     * @return DeleteAutoSnapshotPolicyResponse
     */
    public function deleteAutoSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAutoSnapshotPolicyWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->bundleId)) {
            $query['BundleId'] = $request->bundleId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteBundles',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteBundlesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DeleteCdsFileRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteCdsFileResponse
     */
    public function deleteCdsFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cdsId)) {
            $query['CdsId'] = $request->cdsId;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->fileId)) {
            $query['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCdsFile',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCdsFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCdsFileRequest $request
     *
     * @return DeleteCdsFileResponse
     */
    public function deleteCdsFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCdsFileWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCloudDriveGroupsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteCloudDriveGroupsResponse
     */
    public function deleteCloudDriveGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cdsId)) {
            $query['CdsId'] = $request->cdsId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCloudDriveGroups',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCloudDriveGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCloudDriveGroupsRequest $request
     *
     * @return DeleteCloudDriveGroupsResponse
     */
    public function deleteCloudDriveGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCloudDriveGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DeleteCloudDriveUsersRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteCloudDriveUsersResponse
     */
    public function deleteCloudDriveUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cdsId)) {
            $query['CdsId'] = $request->cdsId;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCloudDriveUsers',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCloudDriveUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteCloudDriveUsersRequest $request
     *
     * @return DeleteCloudDriveUsersResponse
     */
    public function deleteCloudDriveUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCloudDriveUsersWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->desktopGroupId)) {
            $query['DesktopGroupId'] = $request->desktopGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDesktopGroup',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDesktopGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDesktops',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDesktopsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * You can call the operation to manage client devices.
     *   *
     * @param DeleteDevicesRequest $request DeleteDevicesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDevicesResponse DeleteDevicesResponse
     */
    public function deleteDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientType)) {
            $query['ClientType'] = $request->clientType;
        }
        if (!Utils::isUnset($request->deviceIds)) {
            $query['DeviceIds'] = $request->deviceIds;
        }
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDevices',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the operation to manage client devices.
     *   *
     * @param DeleteDevicesRequest $request DeleteDevicesRequest
     *
     * @return DeleteDevicesResponse DeleteDevicesResponse
     */
    public function deleteDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDevicesWithOptions($request, $runtime);
    }

    /**
     * You cannot delete directories that are in use by cloud desktops.
     *   *
     * @param DeleteDirectoriesRequest $request DeleteDirectoriesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDirectoriesResponse DeleteDirectoriesResponse
     */
    public function deleteDirectoriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDirectories',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDirectoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You cannot delete directories that are in use by cloud desktops.
     *   *
     * @param DeleteDirectoriesRequest $request DeleteDirectoriesRequest
     *
     * @return DeleteDirectoriesResponse DeleteDirectoriesResponse
     */
    public function deleteDirectories($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDirectoriesWithOptions($request, $runtime);
    }

    /**
     * ## Description
     *   * *   Images include system images and custom images. System images cannot be deleted.
     *   * *   If an image to delete is used by a desktop bundle, call the [DeleteBundles](~~188885~~) operation to delete the desktop bundle.
     *   *
     * @param DeleteImagesRequest $request DeleteImagesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteImagesResponse DeleteImagesResponse
     */
    public function deleteImagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deleteCascadedBundle)) {
            $query['DeleteCascadedBundle'] = $request->deleteCascadedBundle;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteImages',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Description
     *   * *   Images include system images and custom images. System images cannot be deleted.
     *   * *   If an image to delete is used by a desktop bundle, call the [DeleteBundles](~~188885~~) operation to delete the desktop bundle.
     *   *
     * @param DeleteImagesRequest $request DeleteImagesRequest
     *
     * @return DeleteImagesResponse DeleteImagesResponse
     */
    public function deleteImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteImagesWithOptions($request, $runtime);
    }

    /**
     * ## Description
     *   * Before you delete a NAS file system, make sure that the data you want to retain is backed up.
     *   * >  If a NAS file system is deleted, data stored in the NAS file system cannot be restored. Proceed with caution when you delete NAS file systems.
     *   *
     * @param DeleteNASFileSystemsRequest $request DeleteNASFileSystemsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNASFileSystemsResponse DeleteNASFileSystemsResponse
     */
    public function deleteNASFileSystemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNASFileSystems',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNASFileSystemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Description
     *   * Before you delete a NAS file system, make sure that the data you want to retain is backed up.
     *   * >  If a NAS file system is deleted, data stored in the NAS file system cannot be restored. Proceed with caution when you delete NAS file systems.
     *   *
     * @param DeleteNASFileSystemsRequest $request DeleteNASFileSystemsRequest
     *
     * @return DeleteNASFileSystemsResponse DeleteNASFileSystemsResponse
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
        $query = [];
        if (!Utils::isUnset($request->networkPackageId)) {
            $query['NetworkPackageId'] = $request->networkPackageId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNetworkPackages',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNetworkPackagesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * Before you delete a workspace, make sure that the following operations are complete:
     *   * *   All cloud desktops in the workspace are released.
     *   * *   The data that you want to retain is backed up.
     *   * >  After a workspace is deleted, its resources and data cannot be restored. Proceed with caution.
     *   *
     * @param DeleteOfficeSitesRequest $request DeleteOfficeSitesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteOfficeSitesResponse DeleteOfficeSitesResponse
     */
    public function deleteOfficeSitesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteOfficeSites',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteOfficeSitesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you delete a workspace, make sure that the following operations are complete:
     *   * *   All cloud desktops in the workspace are released.
     *   * *   The data that you want to retain is backed up.
     *   * >  After a workspace is deleted, its resources and data cannot be restored. Proceed with caution.
     *   *
     * @param DeleteOfficeSitesRequest $request DeleteOfficeSitesRequest
     *
     * @return DeleteOfficeSitesResponse DeleteOfficeSitesResponse
     */
    public function deleteOfficeSites($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteOfficeSitesWithOptions($request, $runtime);
    }

    /**
     * *   System policies cannot be deleted.
     *   * *   Custom policies that are associated with cloud desktops cannot be deleted.
     *   *
     * @param DeletePolicyGroupsRequest $request DeletePolicyGroupsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeletePolicyGroupsResponse DeletePolicyGroupsResponse
     */
    public function deletePolicyGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policyGroupId)) {
            $query['PolicyGroupId'] = $request->policyGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeletePolicyGroups',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeletePolicyGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   System policies cannot be deleted.
     *   * *   Custom policies that are associated with cloud desktops cannot be deleted.
     *   *
     * @param DeletePolicyGroupsRequest $request DeletePolicyGroupsRequest
     *
     * @return DeletePolicyGroupsResponse DeletePolicyGroupsResponse
     */
    public function deletePolicyGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deletePolicyGroupsWithOptions($request, $runtime);
    }

    /**
     * If the IDs of the snapshots that you specify do not exist, requests are ignored.
     *   *
     * @param DeleteSnapshotRequest $request DeleteSnapshotRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSnapshotResponse DeleteSnapshotResponse
     */
    public function deleteSnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->snapshotId)) {
            $query['SnapshotId'] = $request->snapshotId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSnapshot',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If the IDs of the snapshots that you specify do not exist, requests are ignored.
     *   *
     * @param DeleteSnapshotRequest $request DeleteSnapshotRequest
     *
     * @return DeleteSnapshotResponse DeleteSnapshotResponse
     */
    public function deleteSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSnapshotWithOptions($request, $runtime);
    }

    /**
     * ## Description
     *   * If an MFA device is deleted, the device is unbound, reset, and disabled. When the Active Directory (AD) user wants to log on to the cloud desktop, the AD user must bind a new MFA device.
     *   *
     * @param DeleteVirtualMFADeviceRequest $request DeleteVirtualMFADeviceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteVirtualMFADeviceResponse DeleteVirtualMFADeviceResponse
     */
    public function deleteVirtualMFADeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serialNumber)) {
            $query['SerialNumber'] = $request->serialNumber;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVirtualMFADevice',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVirtualMFADeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Description
     *   * If an MFA device is deleted, the device is unbound, reset, and disabled. When the Active Directory (AD) user wants to log on to the cloud desktop, the AD user must bind a new MFA device.
     *   *
     * @param DeleteVirtualMFADeviceRequest $request DeleteVirtualMFADeviceRequest
     *
     * @return DeleteVirtualMFADeviceResponse DeleteVirtualMFADeviceResponse
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
        $query = [];
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->eventName)) {
            $query['EventName'] = $request->eventName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->uniqueInfo)) {
            $query['UniqueInfo'] = $request->uniqueInfo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAlarmEventStackInfo',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAlarmEventStackInfoResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * You can view an automatic snapshot policy that is associated with a cloud desktop in the Elastic Desktop Service (EDS) console. To view the automatic snapshot policy, you can go to the EDS console, choose Deployment > Snapshots in the left-side navigation pane, and then view an automatic snapshot policy on the Snapshots page.
     *   *
     * @param DescribeAutoSnapshotPolicyRequest $request DescribeAutoSnapshotPolicyRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAutoSnapshotPolicyResponse DescribeAutoSnapshotPolicyResponse
     */
    public function describeAutoSnapshotPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAutoSnapshotPolicy',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAutoSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can view an automatic snapshot policy that is associated with a cloud desktop in the Elastic Desktop Service (EDS) console. To view the automatic snapshot policy, you can go to the EDS console, choose Deployment > Snapshots in the left-side navigation pane, and then view an automatic snapshot policy on the Snapshots page.
     *   *
     * @param DescribeAutoSnapshotPolicyRequest $request DescribeAutoSnapshotPolicyRequest
     *
     * @return DescribeAutoSnapshotPolicyResponse DescribeAutoSnapshotPolicyResponse
     */
    public function describeAutoSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoSnapshotPolicyWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->bundleId)) {
            $query['BundleId'] = $request->bundleId;
        }
        if (!Utils::isUnset($request->bundleType)) {
            $query['BundleType'] = $request->bundleType;
        }
        if (!Utils::isUnset($request->checkStock)) {
            $query['CheckStock'] = $request->checkStock;
        }
        if (!Utils::isUnset($request->cpuCount)) {
            $query['CpuCount'] = $request->cpuCount;
        }
        if (!Utils::isUnset($request->desktopTypeFamily)) {
            $query['DesktopTypeFamily'] = $request->desktopTypeFamily;
        }
        if (!Utils::isUnset($request->fotaChannel)) {
            $query['FotaChannel'] = $request->fotaChannel;
        }
        if (!Utils::isUnset($request->fromDesktopGroup)) {
            $query['FromDesktopGroup'] = $request->fromDesktopGroup;
        }
        if (!Utils::isUnset($request->gpuCount)) {
            $query['GpuCount'] = $request->gpuCount;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->memorySize)) {
            $query['MemorySize'] = $request->memorySize;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->protocolType)) {
            $query['ProtocolType'] = $request->protocolType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->selectedBundle)) {
            $query['SelectedBundle'] = $request->selectedBundle;
        }
        if (!Utils::isUnset($request->sessionType)) {
            $query['SessionType'] = $request->sessionType;
        }
        if (!Utils::isUnset($request->supportMultiSession)) {
            $query['SupportMultiSession'] = $request->supportMultiSession;
        }
        if (!Utils::isUnset($request->volumeEncryptionEnabled)) {
            $query['VolumeEncryptionEnabled'] = $request->volumeEncryptionEnabled;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBundles',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBundlesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeCdsFileShareLinksRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeCdsFileShareLinksResponse
     */
    public function describeCdsFileShareLinksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cdsId)) {
            $query['CdsId'] = $request->cdsId;
        }
        if (!Utils::isUnset($request->creators)) {
            $query['Creators'] = $request->creators;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->shareId)) {
            $query['ShareId'] = $request->shareId;
        }
        if (!Utils::isUnset($request->shareName)) {
            $query['ShareName'] = $request->shareName;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCdsFileShareLinks',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCdsFileShareLinksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCdsFileShareLinksRequest $request
     *
     * @return DescribeCdsFileShareLinksResponse
     */
    public function describeCdsFileShareLinks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdsFileShareLinksWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCens',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCensResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * You can audit the operation logs of regular users to improve security. The operation logs record events such as desktop startup, shutdown, and session disconnection.
     *   *
     * @param DescribeClientEventsRequest $request DescribeClientEventsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeClientEventsResponse DescribeClientEventsResponse
     */
    public function describeClientEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->desktopIp)) {
            $query['DesktopIp'] = $request->desktopIp;
        }
        if (!Utils::isUnset($request->desktopName)) {
            $query['DesktopName'] = $request->desktopName;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->eventType)) {
            $query['EventType'] = $request->eventType;
        }
        if (!Utils::isUnset($request->eventTypes)) {
            $query['EventTypes'] = $request->eventTypes;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->officeSiteName)) {
            $query['OfficeSiteName'] = $request->officeSiteName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeClientEvents',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeClientEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can audit the operation logs of regular users to improve security. The operation logs record events such as desktop startup, shutdown, and session disconnection.
     *   *
     * @param DescribeClientEventsRequest $request DescribeClientEventsRequest
     *
     * @return DescribeClientEventsResponse DescribeClientEventsResponse
     */
    public function describeClientEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClientEventsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCloudDriveGroupsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeCloudDriveGroupsResponse
     */
    public function describeCloudDriveGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cdsId)) {
            $query['CdsId'] = $request->cdsId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->directoryName)) {
            $query['DirectoryName'] = $request->directoryName;
        }
        if (!Utils::isUnset($request->driveStatus)) {
            $query['DriveStatus'] = $request->driveStatus;
        }
        if (!Utils::isUnset($request->driveType)) {
            $query['DriveType'] = $request->driveType;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $query['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->groupType)) {
            $query['GroupType'] = $request->groupType;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->parentGroupId)) {
            $query['ParentGroupId'] = $request->parentGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCloudDriveGroups',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCloudDriveGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCloudDriveGroupsRequest $request
     *
     * @return DescribeCloudDriveGroupsResponse
     */
    public function describeCloudDriveGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudDriveGroupsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCloudDrivePermissionsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeCloudDrivePermissionsResponse
     */
    public function describeCloudDrivePermissionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cdsId)) {
            $query['CdsId'] = $request->cdsId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCloudDrivePermissions',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCloudDrivePermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCloudDrivePermissionsRequest $request
     *
     * @return DescribeCloudDrivePermissionsResponse
     */
    public function describeCloudDrivePermissions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudDrivePermissionsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCustomizedListHeadersRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeCustomizedListHeadersResponse
     */
    public function describeCustomizedListHeadersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->langType)) {
            $query['LangType'] = $request->langType;
        }
        if (!Utils::isUnset($request->listType)) {
            $query['ListType'] = $request->listType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCustomizedListHeaders',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCustomizedListHeadersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeCustomizedListHeadersRequest $request
     *
     * @return DescribeCustomizedListHeadersResponse
     */
    public function describeCustomizedListHeaders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomizedListHeadersWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->bundleId)) {
            $query['BundleId'] = $request->bundleId;
        }
        if (!Utils::isUnset($request->desktopGroupId)) {
            $query['DesktopGroupId'] = $request->desktopGroupId;
        }
        if (!Utils::isUnset($request->desktopGroupName)) {
            $query['DesktopGroupName'] = $request->desktopGroupName;
        }
        if (!Utils::isUnset($request->endUserIds)) {
            $query['EndUserIds'] = $request->endUserIds;
        }
        if (!Utils::isUnset($request->excludedEndUserIds)) {
            $query['ExcludedEndUserIds'] = $request->excludedEndUserIds;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->ownType)) {
            $query['OwnType'] = $request->ownType;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->policyGroupId)) {
            $query['PolicyGroupId'] = $request->policyGroupId;
        }
        if (!Utils::isUnset($request->protocolType)) {
            $query['ProtocolType'] = $request->protocolType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDesktopGroups',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDesktopGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->necessity)) {
            $query['Necessity'] = $request->necessity;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->vulName)) {
            $query['VulName'] = $request->vulName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDesktopIdsByVulNames',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDesktopIdsByVulNamesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->appliedScope)) {
            $query['AppliedScope'] = $request->appliedScope;
        }
        if (!Utils::isUnset($request->cpuCount)) {
            $query['CpuCount'] = $request->cpuCount;
        }
        if (!Utils::isUnset($request->desktopIdForModify)) {
            $query['DesktopIdForModify'] = $request->desktopIdForModify;
        }
        if (!Utils::isUnset($request->desktopTypeId)) {
            $query['DesktopTypeId'] = $request->desktopTypeId;
        }
        if (!Utils::isUnset($request->gpuCount)) {
            $query['GpuCount'] = $request->gpuCount;
        }
        if (!Utils::isUnset($request->instanceTypeFamily)) {
            $query['InstanceTypeFamily'] = $request->instanceTypeFamily;
        }
        if (!Utils::isUnset($request->memorySize)) {
            $query['MemorySize'] = $request->memorySize;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDesktopTypes',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDesktopTypesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->desktopGroupId)) {
            $query['DesktopGroupId'] = $request->desktopGroupId;
        }
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->desktopName)) {
            $query['DesktopName'] = $request->desktopName;
        }
        if (!Utils::isUnset($request->desktopStatus)) {
            $query['DesktopStatus'] = $request->desktopStatus;
        }
        if (!Utils::isUnset($request->desktopType)) {
            $query['DesktopType'] = $request->desktopType;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->excludedEndUserId)) {
            $query['ExcludedEndUserId'] = $request->excludedEndUserId;
        }
        if (!Utils::isUnset($request->expiredTime)) {
            $query['ExpiredTime'] = $request->expiredTime;
        }
        if (!Utils::isUnset($request->filterDesktopGroup)) {
            $query['FilterDesktopGroup'] = $request->filterDesktopGroup;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->managementFlag)) {
            $query['ManagementFlag'] = $request->managementFlag;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->officeSiteName)) {
            $query['OfficeSiteName'] = $request->officeSiteName;
        }
        if (!Utils::isUnset($request->onlyDesktopGroup)) {
            $query['OnlyDesktopGroup'] = $request->onlyDesktopGroup;
        }
        if (!Utils::isUnset($request->osTypes)) {
            $query['OsTypes'] = $request->osTypes;
        }
        if (!Utils::isUnset($request->policyGroupId)) {
            $query['PolicyGroupId'] = $request->policyGroupId;
        }
        if (!Utils::isUnset($request->protocolType)) {
            $query['ProtocolType'] = $request->protocolType;
        }
        if (!Utils::isUnset($request->queryFotaUpdate)) {
            $query['QueryFotaUpdate'] = $request->queryFotaUpdate;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->snapshotPolicyId)) {
            $query['SnapshotPolicyId'] = $request->snapshotPolicyId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDesktops',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDesktopsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->desktopGroupId)) {
            $query['DesktopGroupId'] = $request->desktopGroupId;
        }
        if (!Utils::isUnset($request->ignoreDeleted)) {
            $query['IgnoreDeleted'] = $request->ignoreDeleted;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDesktopsInGroup',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDesktopsInGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeDevicesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeDevicesResponse
     */
    public function describeDevicesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->adDomain)) {
            $query['AdDomain'] = $request->adDomain;
        }
        if (!Utils::isUnset($request->clientType)) {
            $query['ClientType'] = $request->clientType;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->userType)) {
            $query['UserType'] = $request->userType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDevices',
            'version'     => '2020-09-30',
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
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->directoryStatus)) {
            $query['DirectoryStatus'] = $request->directoryStatus;
        }
        if (!Utils::isUnset($request->directoryType)) {
            $query['DirectoryType'] = $request->directoryType;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDirectories',
            'version'     => '2020-09-30',
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
     * @param DescribeFlowMetricRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeFlowMetricResponse
     */
    public function describeFlowMetricWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->metricType)) {
            $query['MetricType'] = $request->metricType;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlowMetric',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFlowMetricResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * > You can query only the traffic data in the last 90 days.
     *   *
     * @param DescribeFlowStatisticRequest $request DescribeFlowStatisticRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFlowStatisticResponse DescribeFlowStatisticResponse
     */
    public function describeFlowStatisticWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFlowStatistic',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFlowStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * > You can query only the traffic data in the last 90 days.
     *   *
     * @param DescribeFlowStatisticRequest $request DescribeFlowStatisticRequest
     *
     * @return DescribeFlowStatisticResponse DescribeFlowStatisticResponse
     */
    public function describeFlowStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowStatisticWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFotaPendingDesktopsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeFotaPendingDesktopsResponse
     */
    public function describeFotaPendingDesktopsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFotaPendingDesktops',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFotaPendingDesktopsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFotaPendingDesktopsRequest $request
     *
     * @return DescribeFotaPendingDesktopsResponse
     */
    public function describeFotaPendingDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFotaPendingDesktopsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeFotaTasksRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeFotaTasksResponse
     */
    public function describeFotaTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fotaStatus)) {
            $query['FotaStatus'] = $request->fotaStatus;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->taskUid)) {
            $query['TaskUid'] = $request->taskUid;
        }
        if (!Utils::isUnset($request->userStatus)) {
            $query['UserStatus'] = $request->userStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFotaTasks',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFotaTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeFotaTasksRequest $request
     *
     * @return DescribeFotaTasksResponse
     */
    public function describeFotaTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFotaTasksWithOptions($request, $runtime);
    }

    /**
     * You can query the information about patches of up to 50 vulnerabilities in each request before you fix the current vulnerability.
     *   *
     * @param DescribeFrontVulPatchListRequest $request DescribeFrontVulPatchListRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFrontVulPatchListResponse DescribeFrontVulPatchListResponse
     */
    public function describeFrontVulPatchListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->operateType)) {
            $query['OperateType'] = $request->operateType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->vulInfo)) {
            $query['VulInfo'] = $request->vulInfo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFrontVulPatchList',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFrontVulPatchListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can query the information about patches of up to 50 vulnerabilities in each request before you fix the current vulnerability.
     *   *
     * @param DescribeFrontVulPatchListRequest $request DescribeFrontVulPatchListRequest
     *
     * @return DescribeFrontVulPatchListResponse DescribeFrontVulPatchListResponse
     */
    public function describeFrontVulPatchList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFrontVulPatchListWithOptions($request, $runtime);
    }

    /**
     * ## Description
     *   * After security protection is enabled, the system scans your cloud desktops for vulnerabilities once every day.
     *   *
     * @param DescribeGroupedVulRequest $request DescribeGroupedVulRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGroupedVulResponse DescribeGroupedVulResponse
     */
    public function describeGroupedVulWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->dealed)) {
            $query['Dealed'] = $request->dealed;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->necessity)) {
            $query['Necessity'] = $request->necessity;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeGroupedVul',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGroupedVulResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Description
     *   * After security protection is enabled, the system scans your cloud desktops for vulnerabilities once every day.
     *   *
     * @param DescribeGroupedVulRequest $request DescribeGroupedVulRequest
     *
     * @return DescribeGroupedVulResponse DescribeGroupedVulResponse
     */
    public function describeGroupedVul($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGroupedVulWithOptions($request, $runtime);
    }

    /**
     * If you have changed the image for a cloud desktop, you can go to the Elastic Desktop Service (EDS) console to query the image change records. To query the image change records of a cloud desktop, find the cloud desktop that you want to manage, click **Change Image History** to the right of **Image ID/Name** on the **Basic Information** tab.
     *   *
     * @param DescribeImageModifiedRecordsRequest $request DescribeImageModifiedRecordsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeImageModifiedRecordsResponse DescribeImageModifiedRecordsResponse
     */
    public function describeImageModifiedRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeImageModifiedRecords',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageModifiedRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If you have changed the image for a cloud desktop, you can go to the Elastic Desktop Service (EDS) console to query the image change records. To query the image change records of a cloud desktop, find the cloud desktop that you want to manage, click **Change Image History** to the right of **Image ID/Name** on the **Basic Information** tab.
     *   *
     * @param DescribeImageModifiedRecordsRequest $request DescribeImageModifiedRecordsRequest
     *
     * @return DescribeImageModifiedRecordsResponse DescribeImageModifiedRecordsResponse
     */
    public function describeImageModifiedRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageModifiedRecordsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeImagePermissionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeImagePermissionResponse
     */
    public function describeImagePermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeImagePermission',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImagePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeImagePermissionRequest $request
     *
     * @return DescribeImagePermissionResponse
     */
    public function describeImagePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImagePermissionWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->desktopInstanceType)) {
            $query['DesktopInstanceType'] = $request->desktopInstanceType;
        }
        if (!Utils::isUnset($request->gpuCategory)) {
            $query['GpuCategory'] = $request->gpuCategory;
        }
        if (!Utils::isUnset($request->gpuDriverVersion)) {
            $query['GpuDriverVersion'] = $request->gpuDriverVersion;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->imageStatus)) {
            $query['ImageStatus'] = $request->imageStatus;
        }
        if (!Utils::isUnset($request->imageType)) {
            $query['ImageType'] = $request->imageType;
        }
        if (!Utils::isUnset($request->languageType)) {
            $query['LanguageType'] = $request->languageType;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->osType)) {
            $query['OsType'] = $request->osType;
        }
        if (!Utils::isUnset($request->protocolType)) {
            $query['ProtocolType'] = $request->protocolType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sessionType)) {
            $query['SessionType'] = $request->sessionType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeImages',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImagesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * *   After you run a command, the command may not succeed or return the expected results. You can call this operation to query the execution result.
     *   * *   You can query the execution information in the previous two weeks. Up to 100,000 lines of execution information can be retained.
     *   *
     * @param DescribeInvocationsRequest $request DescribeInvocationsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInvocationsResponse DescribeInvocationsResponse
     */
    public function describeInvocationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->commandType)) {
            $query['CommandType'] = $request->commandType;
        }
        if (!Utils::isUnset($request->contentEncoding)) {
            $query['ContentEncoding'] = $request->contentEncoding;
        }
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->desktopIds)) {
            $query['DesktopIds'] = $request->desktopIds;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->includeOutput)) {
            $query['IncludeOutput'] = $request->includeOutput;
        }
        if (!Utils::isUnset($request->invokeId)) {
            $query['InvokeId'] = $request->invokeId;
        }
        if (!Utils::isUnset($request->invokeStatus)) {
            $query['InvokeStatus'] = $request->invokeStatus;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInvocations',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInvocationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   After you run a command, the command may not succeed or return the expected results. You can call this operation to query the execution result.
     *   * *   You can query the execution information in the previous two weeks. Up to 100,000 lines of execution information can be retained.
     *   *
     * @param DescribeInvocationsRequest $request DescribeInvocationsRequest
     *
     * @return DescribeInvocationsResponse DescribeInvocationsResponse
     */
    public function describeInvocations($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInvocationsWithOptions($request, $runtime);
    }

    /**
     * @param DescribeKmsKeysRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeKmsKeysResponse
     */
    public function describeKmsKeysWithOptions($request, $runtime)
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
            'action'      => 'DescribeKmsKeys',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeKmsKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeKmsKeysRequest $request
     *
     * @return DescribeKmsKeysResponse
     */
    public function describeKmsKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeKmsKeysWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->matchCompatibleProfile)) {
            $query['MatchCompatibleProfile'] = $request->matchCompatibleProfile;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNASFileSystems',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNASFileSystemsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->internetChargeType)) {
            $query['InternetChargeType'] = $request->internetChargeType;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->networkPackageId)) {
            $query['NetworkPackageId'] = $request->networkPackageId;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNetworkPackages',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNetworkPackagesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->officeSiteType)) {
            $query['OfficeSiteType'] = $request->officeSiteType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeOfficeSites',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeOfficeSitesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->policyGroupId)) {
            $query['PolicyGroupId'] = $request->policyGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->scope)) {
            $query['Scope'] = $request->scope;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePolicyGroups',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePolicyGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceptLanguage)) {
            $query['AcceptLanguage'] = $request->acceptLanguage;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegions',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeScanTaskProgressRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeScanTaskProgressResponse
     */
    public function describeScanTaskProgressWithOptions($request, $runtime)
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
            'action'      => 'DescribeScanTaskProgress',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeScanTaskProgressResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->securityEventId)) {
            $query['SecurityEventId'] = $request->securityEventId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSecurityEventOperationStatus',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSecurityEventOperationStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->securityEventId)) {
            $query['SecurityEventId'] = $request->securityEventId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSecurityEventOperations',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSecurityEventOperationsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->creator)) {
            $query['Creator'] = $request->creator;
        }
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->desktopName)) {
            $query['DesktopName'] = $request->desktopName;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->snapshotId)) {
            $query['SnapshotId'] = $request->snapshotId;
        }
        if (!Utils::isUnset($request->snapshotName)) {
            $query['SnapshotName'] = $request->snapshotName;
        }
        if (!Utils::isUnset($request->snapshotType)) {
            $query['SnapshotType'] = $request->snapshotType;
        }
        if (!Utils::isUnset($request->sourceDiskType)) {
            $query['SourceDiskType'] = $request->sourceDiskType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSnapshots',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSnapshotsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSuspEventOverview',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSuspEventOverviewResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * ## Description
     *   * When alerts are handled, the system quarantines the files that contain detected threats to the quarantine panel. You can call this operation to view the quarantined files.
     *   *
     * @param DescribeSuspEventQuaraFilesRequest $request DescribeSuspEventQuaraFilesRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSuspEventQuaraFilesResponse DescribeSuspEventQuaraFilesResponse
     */
    public function describeSuspEventQuaraFilesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSuspEventQuaraFiles',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSuspEventQuaraFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Description
     *   * When alerts are handled, the system quarantines the files that contain detected threats to the quarantine panel. You can call this operation to view the quarantined files.
     *   *
     * @param DescribeSuspEventQuaraFilesRequest $request DescribeSuspEventQuaraFilesRequest
     *
     * @return DescribeSuspEventQuaraFilesResponse DescribeSuspEventQuaraFilesResponse
     */
    public function describeSuspEventQuaraFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSuspEventQuaraFilesWithOptions($request, $runtime);
    }

    /**
     * An alert event consists of alerts and exceptions. Each alert event corresponds to multiple exceptions.
     *   *
     * @param DescribeSuspEventsRequest $request DescribeSuspEventsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSuspEventsResponse DescribeSuspEventsResponse
     */
    public function describeSuspEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->alarmUniqueInfo)) {
            $query['AlarmUniqueInfo'] = $request->alarmUniqueInfo;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->dealed)) {
            $query['Dealed'] = $request->dealed;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->levels)) {
            $query['Levels'] = $request->levels;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->parentEventType)) {
            $query['ParentEventType'] = $request->parentEventType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSuspEvents',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSuspEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * An alert event consists of alerts and exceptions. Each alert event corresponds to multiple exceptions.
     *   *
     * @param DescribeSuspEventsRequest $request DescribeSuspEventsRequest
     *
     * @return DescribeSuspEventsResponse DescribeSuspEventsResponse
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
        $query = [];
        if (!Utils::isUnset($request->connectDurationFrom)) {
            $query['ConnectDurationFrom'] = $request->connectDurationFrom;
        }
        if (!Utils::isUnset($request->connectDurationTo)) {
            $query['ConnectDurationTo'] = $request->connectDurationTo;
        }
        if (!Utils::isUnset($request->connectEndTimeFrom)) {
            $query['ConnectEndTimeFrom'] = $request->connectEndTimeFrom;
        }
        if (!Utils::isUnset($request->connectEndTimeTo)) {
            $query['ConnectEndTimeTo'] = $request->connectEndTimeTo;
        }
        if (!Utils::isUnset($request->connectStartTimeFrom)) {
            $query['ConnectStartTimeFrom'] = $request->connectStartTimeFrom;
        }
        if (!Utils::isUnset($request->connectStartTimeTo)) {
            $query['ConnectStartTimeTo'] = $request->connectStartTimeTo;
        }
        if (!Utils::isUnset($request->desktopGroupId)) {
            $query['DesktopGroupId'] = $request->desktopGroupId;
        }
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->endUserType)) {
            $query['EndUserType'] = $request->endUserType;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserConnectionRecords',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserConnectionRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeUserProfilePathRulesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeUserProfilePathRulesResponse
     */
    public function describeUserProfilePathRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->desktopGroupId)) {
            $query['DesktopGroupId'] = $request->desktopGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->ruleType)) {
            $query['RuleType'] = $request->ruleType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserProfilePathRules',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserProfilePathRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUserProfilePathRulesRequest $request
     *
     * @return DescribeUserProfilePathRulesResponse
     */
    public function describeUserProfilePathRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserProfilePathRulesWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->connectState)) {
            $query['ConnectState'] = $request->connectState;
        }
        if (!Utils::isUnset($request->desktopGroupId)) {
            $query['DesktopGroupId'] = $request->desktopGroupId;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->endUserIds)) {
            $query['EndUserIds'] = $request->endUserIds;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->orgId)) {
            $query['OrgId'] = $request->orgId;
        }
        if (!Utils::isUnset($request->queryUserDetail)) {
            $query['QueryUserDetail'] = $request->queryUserDetail;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUsersInGroup',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUsersInGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DescribeUsersPasswordRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeUsersPasswordResponse
     */
    public function describeUsersPasswordWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUsersPassword',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUsersPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeUsersPasswordRequest $request
     *
     * @return DescribeUsersPasswordResponse
     */
    public function describeUsersPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUsersPasswordWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVirtualMFADevices',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVirtualMFADevicesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->aliasName)) {
            $query['AliasName'] = $request->aliasName;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVulDetails',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVulDetailsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->aliasName)) {
            $query['AliasName'] = $request->aliasName;
        }
        if (!Utils::isUnset($request->currentPage)) {
            $query['CurrentPage'] = $request->currentPage;
        }
        if (!Utils::isUnset($request->dealed)) {
            $query['Dealed'] = $request->dealed;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->necessity)) {
            $query['Necessity'] = $request->necessity;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVulList',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVulListResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVulOverview',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVulOverviewResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->zoneType)) {
            $query['ZoneType'] = $request->zoneType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeZones',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeZonesResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachCen',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachCenResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param DetachEndUserRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DetachEndUserResponse
     */
    public function detachEndUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->adDomain)) {
            $query['AdDomain'] = $request->adDomain;
        }
        if (!Utils::isUnset($request->clientType)) {
            $query['ClientType'] = $request->clientType;
        }
        if (!Utils::isUnset($request->deviceId)) {
            $query['DeviceId'] = $request->deviceId;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachEndUser',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachEndUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DetachEndUserRequest $request
     *
     * @return DetachEndUserResponse
     */
    public function detachEndUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachEndUserWithOptions($request, $runtime);
    }

    /**
     * @param DisableDesktopsInGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DisableDesktopsInGroupResponse
     */
    public function disableDesktopsInGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->desktopGroupId)) {
            $query['DesktopGroupId'] = $request->desktopGroupId;
        }
        if (!Utils::isUnset($request->desktopIds)) {
            $query['DesktopIds'] = $request->desktopIds;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableDesktopsInGroup',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableDesktopsInGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DisableDesktopsInGroupRequest $request
     *
     * @return DisableDesktopsInGroupResponse
     */
    public function disableDesktopsInGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableDesktopsInGroupWithOptions($request, $runtime);
    }

    /**
     * @param DissociateNetworkPackageRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DissociateNetworkPackageResponse
     */
    public function dissociateNetworkPackageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->networkPackageId)) {
            $query['NetworkPackageId'] = $request->networkPackageId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DissociateNetworkPackage',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DissociateNetworkPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DissociateNetworkPackageRequest $request
     *
     * @return DissociateNetworkPackageResponse
     */
    public function dissociateNetworkPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dissociateNetworkPackageWithOptions($request, $runtime);
    }

    /**
     * @param ExportClientEventsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ExportClientEventsResponse
     */
    public function exportClientEventsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->desktopName)) {
            $query['DesktopName'] = $request->desktopName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->eventType)) {
            $query['EventType'] = $request->eventType;
        }
        if (!Utils::isUnset($request->eventTypes)) {
            $query['EventTypes'] = $request->eventTypes;
        }
        if (!Utils::isUnset($request->langType)) {
            $query['LangType'] = $request->langType;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->officeSiteName)) {
            $query['OfficeSiteName'] = $request->officeSiteName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExportClientEvents',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportClientEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ExportClientEventsRequest $request
     *
     * @return ExportClientEventsResponse
     */
    public function exportClientEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportClientEventsWithOptions($request, $runtime);
    }

    /**
     * You can call the operation to export desktop groups and then save the desktop groups in the .xlsx file. The information about exported desktop groups includes: the desktop group ID and name, the workspace ID and name, the desktop template, the security policy name, the number of authorized users, the billing method, and the creation time.
     *   *
     * @param ExportDesktopGroupInfoRequest $request ExportDesktopGroupInfoRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportDesktopGroupInfoResponse ExportDesktopGroupInfoResponse
     */
    public function exportDesktopGroupInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->desktopGroupId)) {
            $query['DesktopGroupId'] = $request->desktopGroupId;
        }
        if (!Utils::isUnset($request->desktopGroupName)) {
            $query['DesktopGroupName'] = $request->desktopGroupName;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->expiredTime)) {
            $query['ExpiredTime'] = $request->expiredTime;
        }
        if (!Utils::isUnset($request->langType)) {
            $query['LangType'] = $request->langType;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->policyGroupId)) {
            $query['PolicyGroupId'] = $request->policyGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExportDesktopGroupInfo',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportDesktopGroupInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the operation to export desktop groups and then save the desktop groups in the .xlsx file. The information about exported desktop groups includes: the desktop group ID and name, the workspace ID and name, the desktop template, the security policy name, the number of authorized users, the billing method, and the creation time.
     *   *
     * @param ExportDesktopGroupInfoRequest $request ExportDesktopGroupInfoRequest
     *
     * @return ExportDesktopGroupInfoResponse ExportDesktopGroupInfoResponse
     */
    public function exportDesktopGroupInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportDesktopGroupInfoWithOptions($request, $runtime);
    }

    /**
     * The list of cloud desktops that are exported by calling the ExportDesktopListInfo operation is saved in a CSV file. The CSV file contains the information about each cloud desktop, including the IDs and names of cloud desktops, IDs and names of workspaces, IDs and names of desktop groups, vCPUs, memory, protocols, system disk capacity, data disk capacity, OSs, running status, current user, tags, IP addresses, billing methods, and creation time.
     *   *
     * @param ExportDesktopListInfoRequest $request ExportDesktopListInfoRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportDesktopListInfoResponse ExportDesktopListInfoResponse
     */
    public function exportDesktopListInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->desktopName)) {
            $query['DesktopName'] = $request->desktopName;
        }
        if (!Utils::isUnset($request->desktopStatus)) {
            $query['DesktopStatus'] = $request->desktopStatus;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->expiredTime)) {
            $query['ExpiredTime'] = $request->expiredTime;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->langType)) {
            $query['LangType'] = $request->langType;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->policyGroupId)) {
            $query['PolicyGroupId'] = $request->policyGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->userName)) {
            $query['UserName'] = $request->userName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExportDesktopListInfo',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportDesktopListInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The list of cloud desktops that are exported by calling the ExportDesktopListInfo operation is saved in a CSV file. The CSV file contains the information about each cloud desktop, including the IDs and names of cloud desktops, IDs and names of workspaces, IDs and names of desktop groups, vCPUs, memory, protocols, system disk capacity, data disk capacity, OSs, running status, current user, tags, IP addresses, billing methods, and creation time.
     *   *
     * @param ExportDesktopListInfoRequest $request ExportDesktopListInfoRequest
     *
     * @return ExportDesktopListInfoResponse ExportDesktopListInfoResponse
     */
    public function exportDesktopListInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportDesktopListInfoWithOptions($request, $runtime);
    }

    /**
     * @param GetConnectionTicketRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetConnectionTicketResponse
     */
    public function getConnectionTicketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->commandContent)) {
            $query['CommandContent'] = $request->commandContent;
        }
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceOwnerAccount)) {
            $query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }
        if (!Utils::isUnset($request->resourceOwnerId)) {
            $query['ResourceOwnerId'] = $request->resourceOwnerId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetConnectionTicket',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetConnectionTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetConnectionTicketRequest $request
     *
     * @return GetConnectionTicketResponse
     */
    public function getConnectionTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConnectionTicketWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->desktopGroupId)) {
            $query['DesktopGroupId'] = $request->desktopGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDesktopGroupDetail',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDesktopGroupDetailResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param GetOfficeSiteSsoStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetOfficeSiteSsoStatusResponse
     */
    public function getOfficeSiteSsoStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOfficeSiteSsoStatus',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOfficeSiteSsoStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * ## Description
     *   * You can call this operation only for workspaces of the Active Directory (AD) and convenience account types. You cannot call this operation for RAM directories.
     *   *
     * @param GetSpMetadataRequest $request GetSpMetadataRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSpMetadataResponse GetSpMetadataResponse
     */
    public function getSpMetadataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSpMetadata',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSpMetadataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Description
     *   * You can call this operation only for workspaces of the Active Directory (AD) and convenience account types. You cannot call this operation for RAM directories.
     *   *
     * @param GetSpMetadataRequest $request GetSpMetadataRequest
     *
     * @return GetSpMetadataResponse GetSpMetadataResponse
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
        $query = [];
        if (!Utils::isUnset($request->operationCode)) {
            $query['OperationCode'] = $request->operationCode;
        }
        if (!Utils::isUnset($request->operationParams)) {
            $query['OperationParams'] = $request->operationParams;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->securityEvent)) {
            $query['SecurityEvent'] = $request->securityEvent;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'HandleSecurityEvents',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return HandleSecurityEventsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ListCdsFilesRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return ListCdsFilesResponse
     */
    public function listCdsFilesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListCdsFilesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->fileIds)) {
            $request->fileIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->fileIds, 'FileIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->cdsId)) {
            $query['CdsId'] = $request->cdsId;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->fileIdsShrink)) {
            $query['FileIds'] = $request->fileIdsShrink;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        if (!Utils::isUnset($request->parentFileId)) {
            $query['ParentFileId'] = $request->parentFileId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCdsFiles',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCdsFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCdsFilesRequest $request
     *
     * @return ListCdsFilesResponse
     */
    public function listCdsFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCdsFilesWithOptions($request, $runtime);
    }

    /**
     * If you use an AD directory to connect to an AD system of an enterprise, you can call this operation to obtain the information about users in the AD system.
     *   *
     * @param ListDirectoryUsersRequest $request ListDirectoryUsersRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListDirectoryUsersResponse ListDirectoryUsersResponse
     */
    public function listDirectoryUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->OUPath)) {
            $query['OUPath'] = $request->OUPath;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDirectoryUsers',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListDirectoryUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If you use an AD directory to connect to an AD system of an enterprise, you can call this operation to obtain the information about users in the AD system.
     *   *
     * @param ListDirectoryUsersRequest $request ListDirectoryUsersRequest
     *
     * @return ListDirectoryUsersResponse ListDirectoryUsersResponse
     */
    public function listDirectoryUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listDirectoryUsersWithOptions($request, $runtime);
    }

    /**
     * @param ListFilePermissionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListFilePermissionResponse
     */
    public function listFilePermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cdsId)) {
            $query['CdsId'] = $request->cdsId;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->fileId)) {
            $query['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListFilePermission',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListFilePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListFilePermissionRequest $request
     *
     * @return ListFilePermissionResponse
     */
    public function listFilePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFilePermissionWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->forceRefresh)) {
            $query['ForceRefresh'] = $request->forceRefresh;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->queryRange)) {
            $query['QueryRange'] = $request->queryRange;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOfficeSiteOverview',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListOfficeSiteOverviewResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->OUPath)) {
            $query['OUPath'] = $request->OUPath;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListOfficeSiteUsers',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListOfficeSiteUsersResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * ## Description
     *   * You must specify at least one of the ResourceId.N, Tag.N.Key, and Tag.N.Value parameters in the request to specify the query objects.
     *   *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Description
     *   * You must specify at least one of the ResourceId.N, Tag.N.Key, and Tag.N.Value parameters in the request to specify the query objects.
     *   *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
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
        $query = [];
        if (!Utils::isUnset($request->filter)) {
            $query['Filter'] = $request->filter;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListUserAdOrganizationUnits',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListUserAdOrganizationUnitsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * ## Description
     *   * After a virtual MFA device is locked, its status changes to LOCKED. The AD user who uses the virtual MFA device is unable to pass MFA and is therefore unable to log on to the client. You can call the [UnlockVirtualMFADevice](~~206212~~) operation to unlock the device.
     *   *
     * @param LockVirtualMFADeviceRequest $request LockVirtualMFADeviceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return LockVirtualMFADeviceResponse LockVirtualMFADeviceResponse
     */
    public function lockVirtualMFADeviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serialNumber)) {
            $query['SerialNumber'] = $request->serialNumber;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'LockVirtualMFADevice',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LockVirtualMFADeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Description
     *   * After a virtual MFA device is locked, its status changes to LOCKED. The AD user who uses the virtual MFA device is unable to pass MFA and is therefore unable to log on to the client. You can call the [UnlockVirtualMFADevice](~~206212~~) operation to unlock the device.
     *   *
     * @param LockVirtualMFADeviceRequest $request LockVirtualMFADeviceRequest
     *
     * @return LockVirtualMFADeviceResponse LockVirtualMFADeviceResponse
     */
    public function lockVirtualMFADevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->lockVirtualMFADeviceWithOptions($request, $runtime);
    }

    /**
     * @param MigrateDesktopsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return MigrateDesktopsResponse
     */
    public function migrateDesktopsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->targetOfficeSiteId)) {
            $query['TargetOfficeSiteId'] = $request->targetOfficeSiteId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MigrateDesktops',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MigrateDesktopsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MigrateDesktopsRequest $request
     *
     * @return MigrateDesktopsResponse
     */
    public function migrateDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->migrateDesktopsWithOptions($request, $runtime);
    }

    /**
     * This operation modifies only the domain name and Domain Name System (DNS) parameters of AD directories in the ERROR or REGISTERING state. DNS parameters include DomainName, SubDomainName, DnsAddress.N, and SubDomainDnsAddress.
     *   *
     * @param ModifyADConnectorDirectoryRequest $request ModifyADConnectorDirectoryRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyADConnectorDirectoryResponse ModifyADConnectorDirectoryResponse
     */
    public function modifyADConnectorDirectoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->adHostname)) {
            $query['AdHostname'] = $request->adHostname;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->directoryName)) {
            $query['DirectoryName'] = $request->directoryName;
        }
        if (!Utils::isUnset($request->dnsAddress)) {
            $query['DnsAddress'] = $request->dnsAddress;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->domainPassword)) {
            $query['DomainPassword'] = $request->domainPassword;
        }
        if (!Utils::isUnset($request->domainUserName)) {
            $query['DomainUserName'] = $request->domainUserName;
        }
        if (!Utils::isUnset($request->mfaEnabled)) {
            $query['MfaEnabled'] = $request->mfaEnabled;
        }
        if (!Utils::isUnset($request->OUName)) {
            $query['OUName'] = $request->OUName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->subDomainDnsAddress)) {
            $query['SubDomainDnsAddress'] = $request->subDomainDnsAddress;
        }
        if (!Utils::isUnset($request->subDomainName)) {
            $query['SubDomainName'] = $request->subDomainName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyADConnectorDirectory',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyADConnectorDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation modifies only the domain name and Domain Name System (DNS) parameters of AD directories in the ERROR or REGISTERING state. DNS parameters include DomainName, SubDomainName, DnsAddress.N, and SubDomainDnsAddress.
     *   *
     * @param ModifyADConnectorDirectoryRequest $request ModifyADConnectorDirectoryRequest
     *
     * @return ModifyADConnectorDirectoryResponse ModifyADConnectorDirectoryResponse
     */
    public function modifyADConnectorDirectory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyADConnectorDirectoryWithOptions($request, $runtime);
    }

    /**
     * This operation modifies the domain name and DNS parameters of workspaces that are of enterprise AD account type and in the Error or Registering state. DNS parameters include DomainName, SubDomainName, DnsAddress.N, and SubDomainDnsAddress.N.
     *   *
     * @param ModifyADConnectorOfficeSiteRequest $request ModifyADConnectorOfficeSiteRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyADConnectorOfficeSiteResponse ModifyADConnectorOfficeSiteResponse
     */
    public function modifyADConnectorOfficeSiteWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->adHostname)) {
            $query['AdHostname'] = $request->adHostname;
        }
        if (!Utils::isUnset($request->dnsAddress)) {
            $query['DnsAddress'] = $request->dnsAddress;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->domainPassword)) {
            $query['DomainPassword'] = $request->domainPassword;
        }
        if (!Utils::isUnset($request->domainUserName)) {
            $query['DomainUserName'] = $request->domainUserName;
        }
        if (!Utils::isUnset($request->mfaEnabled)) {
            $query['MfaEnabled'] = $request->mfaEnabled;
        }
        if (!Utils::isUnset($request->OUName)) {
            $query['OUName'] = $request->OUName;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->officeSiteName)) {
            $query['OfficeSiteName'] = $request->officeSiteName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->subDomainDnsAddress)) {
            $query['SubDomainDnsAddress'] = $request->subDomainDnsAddress;
        }
        if (!Utils::isUnset($request->subDomainName)) {
            $query['SubDomainName'] = $request->subDomainName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyADConnectorOfficeSite',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyADConnectorOfficeSiteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This operation modifies the domain name and DNS parameters of workspaces that are of enterprise AD account type and in the Error or Registering state. DNS parameters include DomainName, SubDomainName, DnsAddress.N, and SubDomainDnsAddress.N.
     *   *
     * @param ModifyADConnectorOfficeSiteRequest $request ModifyADConnectorOfficeSiteRequest
     *
     * @return ModifyADConnectorOfficeSiteResponse ModifyADConnectorOfficeSiteResponse
     */
    public function modifyADConnectorOfficeSite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyADConnectorOfficeSiteWithOptions($request, $runtime);
    }

    /**
     * @param ModifyAutoSnapshotPolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyAutoSnapshotPolicyResponse
     */
    public function modifyAutoSnapshotPolicyWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cronExpression)) {
            $query['CronExpression'] = $request->cronExpression;
        }
        if (!Utils::isUnset($request->policyId)) {
            $query['PolicyId'] = $request->policyId;
        }
        if (!Utils::isUnset($request->policyName)) {
            $query['PolicyName'] = $request->policyName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->retentionDays)) {
            $query['RetentionDays'] = $request->retentionDays;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAutoSnapshotPolicy',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAutoSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyAutoSnapshotPolicyRequest $request
     *
     * @return ModifyAutoSnapshotPolicyResponse
     */
    public function modifyAutoSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * ## Description
     *   * Only custom desktop templates can be modified.
     *   *
     * @param ModifyBundleRequest $request ModifyBundleRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyBundleResponse ModifyBundleResponse
     */
    public function modifyBundleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bundleId)) {
            $query['BundleId'] = $request->bundleId;
        }
        if (!Utils::isUnset($request->bundleName)) {
            $query['BundleName'] = $request->bundleName;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyBundle',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyBundleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Description
     *   * Only custom desktop templates can be modified.
     *   *
     * @param ModifyBundleRequest $request ModifyBundleRequest
     *
     * @return ModifyBundleResponse ModifyBundleResponse
     */
    public function modifyBundle($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyBundleWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCdsFileRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ModifyCdsFileResponse
     */
    public function modifyCdsFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cdsId)) {
            $query['CdsId'] = $request->cdsId;
        }
        if (!Utils::isUnset($request->conflictPolicy)) {
            $query['ConflictPolicy'] = $request->conflictPolicy;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->fileId)) {
            $query['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['FileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyCdsFile',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyCdsFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyCdsFileRequest $request
     *
     * @return ModifyCdsFileResponse
     */
    public function modifyCdsFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCdsFileWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCdsFileShareLinkRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyCdsFileShareLinkResponse
     */
    public function modifyCdsFileShareLinkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cdsId)) {
            $query['CdsId'] = $request->cdsId;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->disableDownload)) {
            $query['DisableDownload'] = $request->disableDownload;
        }
        if (!Utils::isUnset($request->disablePreview)) {
            $query['DisablePreview'] = $request->disablePreview;
        }
        if (!Utils::isUnset($request->disableSave)) {
            $query['DisableSave'] = $request->disableSave;
        }
        if (!Utils::isUnset($request->downloadCount)) {
            $query['DownloadCount'] = $request->downloadCount;
        }
        if (!Utils::isUnset($request->downloadLimit)) {
            $query['DownloadLimit'] = $request->downloadLimit;
        }
        if (!Utils::isUnset($request->expiration)) {
            $query['Expiration'] = $request->expiration;
        }
        if (!Utils::isUnset($request->previewCount)) {
            $query['PreviewCount'] = $request->previewCount;
        }
        if (!Utils::isUnset($request->previewLimit)) {
            $query['PreviewLimit'] = $request->previewLimit;
        }
        if (!Utils::isUnset($request->reportCount)) {
            $query['ReportCount'] = $request->reportCount;
        }
        if (!Utils::isUnset($request->saveCount)) {
            $query['SaveCount'] = $request->saveCount;
        }
        if (!Utils::isUnset($request->saveLimit)) {
            $query['SaveLimit'] = $request->saveLimit;
        }
        if (!Utils::isUnset($request->shareId)) {
            $query['ShareId'] = $request->shareId;
        }
        if (!Utils::isUnset($request->shareName)) {
            $query['ShareName'] = $request->shareName;
        }
        if (!Utils::isUnset($request->sharePwd)) {
            $query['SharePwd'] = $request->sharePwd;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->videoPreviewCount)) {
            $query['VideoPreviewCount'] = $request->videoPreviewCount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyCdsFileShareLink',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyCdsFileShareLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyCdsFileShareLinkRequest $request
     *
     * @return ModifyCdsFileShareLinkResponse
     */
    public function modifyCdsFileShareLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCdsFileShareLinkWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCloudDriveGroupsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyCloudDriveGroupsResponse
     */
    public function modifyCloudDriveGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cdsId)) {
            $query['CdsId'] = $request->cdsId;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->totalSize)) {
            $query['TotalSize'] = $request->totalSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyCloudDriveGroups',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyCloudDriveGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyCloudDriveGroupsRequest $request
     *
     * @return ModifyCloudDriveGroupsResponse
     */
    public function modifyCloudDriveGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCloudDriveGroupsWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCloudDrivePermissionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyCloudDrivePermissionResponse
     */
    public function modifyCloudDrivePermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cdsId)) {
            $query['CdsId'] = $request->cdsId;
        }
        if (!Utils::isUnset($request->downloadEndUserIds)) {
            $query['DownloadEndUserIds'] = $request->downloadEndUserIds;
        }
        if (!Utils::isUnset($request->downloadUploadEndUserIds)) {
            $query['DownloadUploadEndUserIds'] = $request->downloadUploadEndUserIds;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyCloudDrivePermission',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyCloudDrivePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyCloudDrivePermissionRequest $request
     *
     * @return ModifyCloudDrivePermissionResponse
     */
    public function modifyCloudDrivePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCloudDrivePermissionWithOptions($request, $runtime);
    }

    /**
     * @param ModifyCustomizedListHeadersRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyCustomizedListHeadersResponse
     */
    public function modifyCustomizedListHeadersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->headers)) {
            $query['Headers'] = $request->headers;
        }
        if (!Utils::isUnset($request->listType)) {
            $query['ListType'] = $request->listType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyCustomizedListHeaders',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyCustomizedListHeadersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyCustomizedListHeadersRequest $request
     *
     * @return ModifyCustomizedListHeadersResponse
     */
    public function modifyCustomizedListHeaders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCustomizedListHeadersWithOptions($request, $runtime);
    }

    /**
     * *   Before you call this operation, make sure that you are familiar with the billing methods of cloud desktops in Elastic Desktop Service (EDS). For more information, see [Billing overview](~~188395~~).
     *   * *   Before you call this operation, make sure that the cloud desktop that you want to manage is in the Running or Stopped state and no overdue payments of the cloud desktop are generated.
     *   * *   After the order payment is completed, the system starts to change the billing method of the cloud desktop. During the change, you cannot perform operations, such as starting or stopping the cloud desktop, and changing configurations of the cloud desktop.<props="china">
     *   * After you change the billing method of the cloud desktop from subscription to pay-as-you-go, you may get a refund. For more information, see [Change a subscription cloud desktop to a pay-as-you-go one](https://help.aliyun.com/document_detail/439964.html).
     *   * </props>.
     *   *
     * @param ModifyDesktopChargeTypeRequest $request ModifyDesktopChargeTypeRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDesktopChargeTypeResponse ModifyDesktopChargeTypeResponse
     */
    public function modifyDesktopChargeTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->promotionId)) {
            $query['PromotionId'] = $request->promotionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDesktopChargeType',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDesktopChargeTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * *   Before you call this operation, make sure that you are familiar with the billing methods of cloud desktops in Elastic Desktop Service (EDS). For more information, see [Billing overview](~~188395~~).
     *   * *   Before you call this operation, make sure that the cloud desktop that you want to manage is in the Running or Stopped state and no overdue payments of the cloud desktop are generated.
     *   * *   After the order payment is completed, the system starts to change the billing method of the cloud desktop. During the change, you cannot perform operations, such as starting or stopping the cloud desktop, and changing configurations of the cloud desktop.<props="china">
     *   * After you change the billing method of the cloud desktop from subscription to pay-as-you-go, you may get a refund. For more information, see [Change a subscription cloud desktop to a pay-as-you-go one](https://help.aliyun.com/document_detail/439964.html).
     *   * </props>.
     *   *
     * @param ModifyDesktopChargeTypeRequest $request ModifyDesktopChargeTypeRequest
     *
     * @return ModifyDesktopChargeTypeResponse ModifyDesktopChargeTypeResponse
     */
    public function modifyDesktopChargeType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDesktopChargeTypeWithOptions($request, $runtime);
    }

    /**
     * After you create a desktop group, the system creates a specific number of cloud desktops based on the scaling policy that you configure for the desktop group and the number of end users who request to connect to the cloud desktops. Cloud desktops in a desktop group are created by using the same desktop template and security policy. You can modify the configurations of the desktop group in different scenarios to manage cloud desktops in a centralized manner.
     *   * *   By default, a desktop group has the same name as all cloud desktops in the group. You can modify the desktop group name, which is specified by the DesktopGroupName parameter, to distinguish the desktop group from the cloud desktops.
     *   * *   If the number of vCPUs and memory size of the cloud desktop cannot meet your business requirements in high performance scenarios, you can change the desktop template that is used to create the cloud desktop to a desktop template (OwnBundleId) that has higher specifications.
     *   * *   If a security policy that is associated with the desktop group cannot meet your requirements on security, you can change the policy to another policy (PolicyGroupId) that provides higher security.
     *   * *   If the number of cloud desktops in the desktop group is insufficient to meet the business requirements of end users, you can modify the parameter settings in the scaling policy. The parameters include MinDesktopsCount, MaxDesktopsCount, and AllowBufferCount.
     *   *
     * @param ModifyDesktopGroupRequest $request ModifyDesktopGroupRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDesktopGroupResponse ModifyDesktopGroupResponse
     */
    public function modifyDesktopGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allowAutoSetup)) {
            $query['AllowAutoSetup'] = $request->allowAutoSetup;
        }
        if (!Utils::isUnset($request->allowBufferCount)) {
            $query['AllowBufferCount'] = $request->allowBufferCount;
        }
        if (!Utils::isUnset($request->bindAmount)) {
            $query['BindAmount'] = $request->bindAmount;
        }
        if (!Utils::isUnset($request->buyDesktopsCount)) {
            $query['BuyDesktopsCount'] = $request->buyDesktopsCount;
        }
        if (!Utils::isUnset($request->classify)) {
            $query['Classify'] = $request->classify;
        }
        if (!Utils::isUnset($request->comments)) {
            $query['Comments'] = $request->comments;
        }
        if (!Utils::isUnset($request->connectDuration)) {
            $query['ConnectDuration'] = $request->connectDuration;
        }
        if (!Utils::isUnset($request->desktopGroupId)) {
            $query['DesktopGroupId'] = $request->desktopGroupId;
        }
        if (!Utils::isUnset($request->desktopGroupName)) {
            $query['DesktopGroupName'] = $request->desktopGroupName;
        }
        if (!Utils::isUnset($request->disableSessionConfig)) {
            $query['DisableSessionConfig'] = $request->disableSessionConfig;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->idleDisconnectDuration)) {
            $query['IdleDisconnectDuration'] = $request->idleDisconnectDuration;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->keepDuration)) {
            $query['KeepDuration'] = $request->keepDuration;
        }
        if (!Utils::isUnset($request->loadPolicy)) {
            $query['LoadPolicy'] = $request->loadPolicy;
        }
        if (!Utils::isUnset($request->maxDesktopsCount)) {
            $query['MaxDesktopsCount'] = $request->maxDesktopsCount;
        }
        if (!Utils::isUnset($request->minDesktopsCount)) {
            $query['MinDesktopsCount'] = $request->minDesktopsCount;
        }
        if (!Utils::isUnset($request->ownBundleId)) {
            $query['OwnBundleId'] = $request->ownBundleId;
        }
        if (!Utils::isUnset($request->policyGroupId)) {
            $query['PolicyGroupId'] = $request->policyGroupId;
        }
        if (!Utils::isUnset($request->policyGroupIds)) {
            $query['PolicyGroupIds'] = $request->policyGroupIds;
        }
        if (!Utils::isUnset($request->profileFollowSwitch)) {
            $query['ProfileFollowSwitch'] = $request->profileFollowSwitch;
        }
        if (!Utils::isUnset($request->ratioThreshold)) {
            $query['RatioThreshold'] = $request->ratioThreshold;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resetType)) {
            $query['ResetType'] = $request->resetType;
        }
        if (!Utils::isUnset($request->scaleStrategyId)) {
            $query['ScaleStrategyId'] = $request->scaleStrategyId;
        }
        if (!Utils::isUnset($request->stopDuration)) {
            $query['StopDuration'] = $request->stopDuration;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDesktopGroup',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDesktopGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * After you create a desktop group, the system creates a specific number of cloud desktops based on the scaling policy that you configure for the desktop group and the number of end users who request to connect to the cloud desktops. Cloud desktops in a desktop group are created by using the same desktop template and security policy. You can modify the configurations of the desktop group in different scenarios to manage cloud desktops in a centralized manner.
     *   * *   By default, a desktop group has the same name as all cloud desktops in the group. You can modify the desktop group name, which is specified by the DesktopGroupName parameter, to distinguish the desktop group from the cloud desktops.
     *   * *   If the number of vCPUs and memory size of the cloud desktop cannot meet your business requirements in high performance scenarios, you can change the desktop template that is used to create the cloud desktop to a desktop template (OwnBundleId) that has higher specifications.
     *   * *   If a security policy that is associated with the desktop group cannot meet your requirements on security, you can change the policy to another policy (PolicyGroupId) that provides higher security.
     *   * *   If the number of cloud desktops in the desktop group is insufficient to meet the business requirements of end users, you can modify the parameter settings in the scaling policy. The parameters include MinDesktopsCount, MaxDesktopsCount, and AllowBufferCount.
     *   *
     * @param ModifyDesktopGroupRequest $request ModifyDesktopGroupRequest
     *
     * @return ModifyDesktopGroupResponse ModifyDesktopGroupResponse
     */
    public function modifyDesktopGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDesktopGroupWithOptions($request, $runtime);
    }

    /**
     * ## Description
     *   * You can only change the hostname of a Windows cloud desktop in the workspace of the enterprise Active Directory (AD) account type. After the hostname is changed, the cloud desktop is recreated.
     *   *
     * @param ModifyDesktopHostNameRequest $request ModifyDesktopHostNameRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDesktopHostNameResponse ModifyDesktopHostNameResponse
     */
    public function modifyDesktopHostNameWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->newHostName)) {
            $query['NewHostName'] = $request->newHostName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDesktopHostName',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDesktopHostNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Description
     *   * You can only change the hostname of a Windows cloud desktop in the workspace of the enterprise Active Directory (AD) account type. After the hostname is changed, the cloud desktop is recreated.
     *   *
     * @param ModifyDesktopHostNameRequest $request ModifyDesktopHostNameRequest
     *
     * @return ModifyDesktopHostNameResponse ModifyDesktopHostNameResponse
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
        $query = [];
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->newDesktopName)) {
            $query['NewDesktopName'] = $request->newDesktopName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDesktopName',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDesktopNameResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * You can call this operation to change the configurations, such as the desktop type and disk size, of a cloud desktop.
     *   * *   Before you call this operation, take note of the cloud desktop types and the disk sizes for each type of cloud desktop that Elastic Desktop Service (EDS) provides. For more information, see [Cloud desktop types](~~188609~~).
     *   * *   When you change the configurations of a cloud desktop, you must change the desktop type or the size of the system disk or data disk. You must configure at least one of the following parameters: DesktopType, RootDiskSizeGib, and UserDiskSizeGib. You must take note of the following items:
     *   *     *   Each desktop type contains different desktop specifications, such as vCPUs, memory, and GPUs. When you change the desktop configurations, you can only change the desktop type from one to another. However, you cannot change only one of the specifications, such as vCPUs, memory, and GPUs.
     *   *     *   You cannot change a cloud desktop from the General Office type to a non-General Office type, or from a non-General Office type to the General Office type. You cannot change a cloud desktop from the Graphics type to a non-Graphics type, or from a non-Graphics type to the Graphics type.
     *   *     *   You can only increase the sizes of system and data disks.
     *   *     *   If your cloud desktop uses the subscription billing method, the price difference is calculated based on the price before and after configuration changes. You may receive a refund, or pay for the price difference.
     *   *     *   If you want to change the configurations of your cloud desktop for multiple times, we recommend that you wait at least 5 minutes the next time you change the configurations of the same cloud desktop.
     *   *     *   The cloud desktop for which you want to change configurations must be in the Stopped state.
     *   * *   The changes do not affect your personal data on the cloud desktop.
     *   *
     * @param ModifyDesktopSpecRequest $request ModifyDesktopSpecRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDesktopSpecResponse ModifyDesktopSpecResponse
     */
    public function modifyDesktopSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->desktopType)) {
            $query['DesktopType'] = $request->desktopType;
        }
        if (!Utils::isUnset($request->promotionId)) {
            $query['PromotionId'] = $request->promotionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->rootDiskSizeGib)) {
            $query['RootDiskSizeGib'] = $request->rootDiskSizeGib;
        }
        if (!Utils::isUnset($request->userDiskPerformanceLevel)) {
            $query['UserDiskPerformanceLevel'] = $request->userDiskPerformanceLevel;
        }
        if (!Utils::isUnset($request->userDiskSizeGib)) {
            $query['UserDiskSizeGib'] = $request->userDiskSizeGib;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDesktopSpec',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDesktopSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to change the configurations, such as the desktop type and disk size, of a cloud desktop.
     *   * *   Before you call this operation, take note of the cloud desktop types and the disk sizes for each type of cloud desktop that Elastic Desktop Service (EDS) provides. For more information, see [Cloud desktop types](~~188609~~).
     *   * *   When you change the configurations of a cloud desktop, you must change the desktop type or the size of the system disk or data disk. You must configure at least one of the following parameters: DesktopType, RootDiskSizeGib, and UserDiskSizeGib. You must take note of the following items:
     *   *     *   Each desktop type contains different desktop specifications, such as vCPUs, memory, and GPUs. When you change the desktop configurations, you can only change the desktop type from one to another. However, you cannot change only one of the specifications, such as vCPUs, memory, and GPUs.
     *   *     *   You cannot change a cloud desktop from the General Office type to a non-General Office type, or from a non-General Office type to the General Office type. You cannot change a cloud desktop from the Graphics type to a non-Graphics type, or from a non-Graphics type to the Graphics type.
     *   *     *   You can only increase the sizes of system and data disks.
     *   *     *   If your cloud desktop uses the subscription billing method, the price difference is calculated based on the price before and after configuration changes. You may receive a refund, or pay for the price difference.
     *   *     *   If you want to change the configurations of your cloud desktop for multiple times, we recommend that you wait at least 5 minutes the next time you change the configurations of the same cloud desktop.
     *   *     *   The cloud desktop for which you want to change configurations must be in the Stopped state.
     *   * *   The changes do not affect your personal data on the cloud desktop.
     *   *
     * @param ModifyDesktopSpecRequest $request ModifyDesktopSpecRequest
     *
     * @return ModifyDesktopSpecResponse ModifyDesktopSpecResponse
     */
    public function modifyDesktopSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDesktopSpecWithOptions($request, $runtime);
    }

    /**
     * The cloud desktops whose policy you want to modify must be in the Running state.
     *   *
     * @param ModifyDesktopsPolicyGroupRequest $request ModifyDesktopsPolicyGroupRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDesktopsPolicyGroupResponse ModifyDesktopsPolicyGroupResponse
     */
    public function modifyDesktopsPolicyGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->policyGroupId)) {
            $query['PolicyGroupId'] = $request->policyGroupId;
        }
        if (!Utils::isUnset($request->policyGroupIds)) {
            $query['PolicyGroupIds'] = $request->policyGroupIds;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDesktopsPolicyGroup',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDesktopsPolicyGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The cloud desktops whose policy you want to modify must be in the Running state.
     *   *
     * @param ModifyDesktopsPolicyGroupRequest $request ModifyDesktopsPolicyGroupRequest
     *
     * @return ModifyDesktopsPolicyGroupResponse ModifyDesktopsPolicyGroupResponse
     */
    public function modifyDesktopsPolicyGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDesktopsPolicyGroupWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to change the configurations, such as the desktop type and disk size, of a cloud desktop.
     *   * *   Before you call this operation, you must know the cloud desktop types and the disk sizes for each type of cloud desktop that Elastic Desktop Service (EDS) provides.
     *   * *   When you change the configurations of a cloud desktop, you must change the desktop type or the size of the system disk or data disk. You must configure at least one of the following parameters: DesktopType, RootDiskSizeGib, and UserDiskSizeGib. Take note of the following items:
     *   * 1\\. Desktop types include the specifications of vCPUs, memory, and GPUs. You can change only the desktop type, instead of one of the specifications.
     *   * 2\\. You cannot change a cloud desktop from the General Office type to a non-General Office type, or from a non-General Office type to the General Office type. You cannot change a cloud desktop from the Graphics type to a non-Graphics type, or from a non-Graphics type to the Graphics type.
     *   * 3\\. You can only increase the sizes of system and data disks. You cannot decrease the sizes of system and data disks.
     *   * 4\\. If your cloud desktop uses the subscription billing method, the price difference is calculated based on the price before and after configuration changes. You may receive a refund, or must pay for the price difference.
     *   * 5\\. If you need to change the configurations of a cloud desktop multiple times, we recommend that you wait at least 5 minutes between consecutive operations on the cloud desktop.
     *   * 6\\. The cloud desktop for which you want to change the desktop type must be in the Stopped state.
     *   * *   The changes do not affect your personal data on the cloud desktop.
     *   *
     * @param ModifyDiskSpecRequest $request ModifyDiskSpecRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDiskSpecResponse ModifyDiskSpecResponse
     */
    public function modifyDiskSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->promotionId)) {
            $query['PromotionId'] = $request->promotionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->rootDiskPerformanceLevel)) {
            $query['RootDiskPerformanceLevel'] = $request->rootDiskPerformanceLevel;
        }
        if (!Utils::isUnset($request->userDiskPerformanceLevel)) {
            $query['UserDiskPerformanceLevel'] = $request->userDiskPerformanceLevel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDiskSpec',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDiskSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to change the configurations, such as the desktop type and disk size, of a cloud desktop.
     *   * *   Before you call this operation, you must know the cloud desktop types and the disk sizes for each type of cloud desktop that Elastic Desktop Service (EDS) provides.
     *   * *   When you change the configurations of a cloud desktop, you must change the desktop type or the size of the system disk or data disk. You must configure at least one of the following parameters: DesktopType, RootDiskSizeGib, and UserDiskSizeGib. Take note of the following items:
     *   * 1\\. Desktop types include the specifications of vCPUs, memory, and GPUs. You can change only the desktop type, instead of one of the specifications.
     *   * 2\\. You cannot change a cloud desktop from the General Office type to a non-General Office type, or from a non-General Office type to the General Office type. You cannot change a cloud desktop from the Graphics type to a non-Graphics type, or from a non-Graphics type to the Graphics type.
     *   * 3\\. You can only increase the sizes of system and data disks. You cannot decrease the sizes of system and data disks.
     *   * 4\\. If your cloud desktop uses the subscription billing method, the price difference is calculated based on the price before and after configuration changes. You may receive a refund, or must pay for the price difference.
     *   * 5\\. If you need to change the configurations of a cloud desktop multiple times, we recommend that you wait at least 5 minutes between consecutive operations on the cloud desktop.
     *   * 6\\. The cloud desktop for which you want to change the desktop type must be in the Stopped state.
     *   * *   The changes do not affect your personal data on the cloud desktop.
     *   *
     * @param ModifyDiskSpecRequest $request ModifyDiskSpecRequest
     *
     * @return ModifyDiskSpecResponse ModifyDiskSpecResponse
     */
    public function modifyDiskSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDiskSpecWithOptions($request, $runtime);
    }

    /**
     * The cloud desktop must be in the Running state.
     *   *
     * @param ModifyEntitlementRequest $request ModifyEntitlementRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyEntitlementResponse ModifyEntitlementResponse
     */
    public function modifyEntitlementWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyEntitlement',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyEntitlementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The cloud desktop must be in the Running state.
     *   *
     * @param ModifyEntitlementRequest $request ModifyEntitlementRequest
     *
     * @return ModifyEntitlementResponse ModifyEntitlementResponse
     */
    public function modifyEntitlement($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyEntitlementWithOptions($request, $runtime);
    }

    /**
     * ## Description
     *   * You can call this operation to modify the properties of only custom images in the Available (Available) state.
     *   *
     * @param ModifyImageAttributeRequest $request ModifyImageAttributeRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyImageAttributeResponse ModifyImageAttributeResponse
     */
    public function modifyImageAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyImageAttribute',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyImageAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Description
     *   * You can call this operation to modify the properties of only custom images in the Available (Available) state.
     *   *
     * @param ModifyImageAttributeRequest $request ModifyImageAttributeRequest
     *
     * @return ModifyImageAttributeResponse ModifyImageAttributeResponse
     */
    public function modifyImageAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyImageAttributeWithOptions($request, $runtime);
    }

    /**
     * ### Security of shared images
     *   * Elastic Desktop Service (EDS) does not ensure the integrity and security of shared images on cloud desktops. Before you use shared images, make sure that the images come from trusted accounts. You must assume all risks.
     *   * ### Quotas and billing
     *   * *   Shared images do not count against the image quotas of the recipient Alibaba Cloud accounts.
     *   * *   Alibaba Cloud accounts that share images are not charged if the recipient accounts use the shared images to create cloud desktops.
     *   * *   There are no additional charges for sharing an image.
     *   * ### Supported sharing behavior
     *   * *   You can share custom images with other Alibaba Cloud accounts.
     *   * *   You can share custom images between accounts in the China site (aliyun.com) and the international site (alibabacloud.com).
     *   * ### Unsupported sharing behavior
     *   * *   You cannot share images that are shared by other Alibaba Cloud accounts.
     *   * *   You cannot share encrypted images.
     *   * *   You cannot share images across regions. If you want to share images across regions, you can call the CopyImage operation to copy the images from the source region to the destination region.
     *   *
     * @param ModifyImagePermissionRequest $request ModifyImagePermissionRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyImagePermissionResponse ModifyImagePermissionResponse
     */
    public function modifyImagePermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addAccount)) {
            $query['AddAccount'] = $request->addAccount;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->removeAccount)) {
            $query['RemoveAccount'] = $request->removeAccount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyImagePermission',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyImagePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ### Security of shared images
     *   * Elastic Desktop Service (EDS) does not ensure the integrity and security of shared images on cloud desktops. Before you use shared images, make sure that the images come from trusted accounts. You must assume all risks.
     *   * ### Quotas and billing
     *   * *   Shared images do not count against the image quotas of the recipient Alibaba Cloud accounts.
     *   * *   Alibaba Cloud accounts that share images are not charged if the recipient accounts use the shared images to create cloud desktops.
     *   * *   There are no additional charges for sharing an image.
     *   * ### Supported sharing behavior
     *   * *   You can share custom images with other Alibaba Cloud accounts.
     *   * *   You can share custom images between accounts in the China site (aliyun.com) and the international site (alibabacloud.com).
     *   * ### Unsupported sharing behavior
     *   * *   You cannot share images that are shared by other Alibaba Cloud accounts.
     *   * *   You cannot share encrypted images.
     *   * *   You cannot share images across regions. If you want to share images across regions, you can call the CopyImage operation to copy the images from the source region to the destination region.
     *   *
     * @param ModifyImagePermissionRequest $request ModifyImagePermissionRequest
     *
     * @return ModifyImagePermissionResponse ModifyImagePermissionResponse
     */
    public function modifyImagePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyImagePermissionWithOptions($request, $runtime);
    }

    /**
     * ## Description
     *   * When you create a NAS file system, a mount target is automatically generated. By default, the mount target does not need to be changed. If the mount target is accidentally deleted, you must specify a new mount target for the NAS file system in the workspace. You can call the [CreateMountTarget](~~62621~~) operation to create a mount target.
     *   *
     * @param ModifyNASDefaultMountTargetRequest $request ModifyNASDefaultMountTargetRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyNASDefaultMountTargetResponse ModifyNASDefaultMountTargetResponse
     */
    public function modifyNASDefaultMountTargetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->mountTargetDomain)) {
            $query['MountTargetDomain'] = $request->mountTargetDomain;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyNASDefaultMountTarget',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyNASDefaultMountTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Description
     *   * When you create a NAS file system, a mount target is automatically generated. By default, the mount target does not need to be changed. If the mount target is accidentally deleted, you must specify a new mount target for the NAS file system in the workspace. You can call the [CreateMountTarget](~~62621~~) operation to create a mount target.
     *   *
     * @param ModifyNASDefaultMountTargetRequest $request ModifyNASDefaultMountTargetRequest
     *
     * @return ModifyNASDefaultMountTargetResponse ModifyNASDefaultMountTargetResponse
     */
    public function modifyNASDefaultMountTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNASDefaultMountTargetWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->networkPackageId)) {
            $query['NetworkPackageId'] = $request->networkPackageId;
        }
        if (!Utils::isUnset($request->promotionId)) {
            $query['PromotionId'] = $request->promotionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyNetworkPackageBandwidth',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyNetworkPackageBandwidthResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * ## Description
     *   * If you want to temporarily disable Internet access for a cloud desktop, you can disable the Internet access package. You can restore the package based on your requirements.
     *   *
     * @param ModifyNetworkPackageEnabledRequest $request ModifyNetworkPackageEnabledRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyNetworkPackageEnabledResponse ModifyNetworkPackageEnabledResponse
     */
    public function modifyNetworkPackageEnabledWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->enabled)) {
            $query['Enabled'] = $request->enabled;
        }
        if (!Utils::isUnset($request->networkPackageId)) {
            $query['NetworkPackageId'] = $request->networkPackageId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyNetworkPackageEnabled',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyNetworkPackageEnabledResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Description
     *   * If you want to temporarily disable Internet access for a cloud desktop, you can disable the Internet access package. You can restore the package based on your requirements.
     *   *
     * @param ModifyNetworkPackageEnabledRequest $request ModifyNetworkPackageEnabledRequest
     *
     * @return ModifyNetworkPackageEnabledResponse ModifyNetworkPackageEnabledResponse
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
        $query = [];
        if (!Utils::isUnset($request->desktopAccessType)) {
            $query['DesktopAccessType'] = $request->desktopAccessType;
        }
        if (!Utils::isUnset($request->enableAdminAccess)) {
            $query['EnableAdminAccess'] = $request->enableAdminAccess;
        }
        if (!Utils::isUnset($request->needVerifyLoginRisk)) {
            $query['NeedVerifyLoginRisk'] = $request->needVerifyLoginRisk;
        }
        if (!Utils::isUnset($request->needVerifyZeroDevice)) {
            $query['NeedVerifyZeroDevice'] = $request->needVerifyZeroDevice;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->officeSiteName)) {
            $query['OfficeSiteName'] = $request->officeSiteName;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyOfficeSiteAttribute',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyOfficeSiteAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->enableCrossDesktopAccess)) {
            $query['EnableCrossDesktopAccess'] = $request->enableCrossDesktopAccess;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyOfficeSiteCrossDesktopAccess',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyOfficeSiteCrossDesktopAccessResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->mfaEnabled)) {
            $query['MfaEnabled'] = $request->mfaEnabled;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyOfficeSiteMfaEnabled',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyOfficeSiteMfaEnabledResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->operateType)) {
            $query['OperateType'] = $request->operateType;
        }
        if (!Utils::isUnset($request->reason)) {
            $query['Reason'] = $request->reason;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->vulInfo)) {
            $query['VulInfo'] = $request->vulInfo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyOperateVul',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyOperateVulResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->appContentProtection)) {
            $query['AppContentProtection'] = $request->appContentProtection;
        }
        if (!Utils::isUnset($request->authorizeAccessPolicyRule)) {
            $query['AuthorizeAccessPolicyRule'] = $request->authorizeAccessPolicyRule;
        }
        if (!Utils::isUnset($request->authorizeSecurityPolicyRule)) {
            $query['AuthorizeSecurityPolicyRule'] = $request->authorizeSecurityPolicyRule;
        }
        if (!Utils::isUnset($request->cameraRedirect)) {
            $query['CameraRedirect'] = $request->cameraRedirect;
        }
        if (!Utils::isUnset($request->clientType)) {
            $query['ClientType'] = $request->clientType;
        }
        if (!Utils::isUnset($request->clipboard)) {
            $query['Clipboard'] = $request->clipboard;
        }
        if (!Utils::isUnset($request->domainList)) {
            $query['DomainList'] = $request->domainList;
        }
        if (!Utils::isUnset($request->endUserApplyAdminCoordinate)) {
            $query['EndUserApplyAdminCoordinate'] = $request->endUserApplyAdminCoordinate;
        }
        if (!Utils::isUnset($request->endUserGroupCoordinate)) {
            $query['EndUserGroupCoordinate'] = $request->endUserGroupCoordinate;
        }
        if (!Utils::isUnset($request->gpuAcceleration)) {
            $query['GpuAcceleration'] = $request->gpuAcceleration;
        }
        if (!Utils::isUnset($request->html5Access)) {
            $query['Html5Access'] = $request->html5Access;
        }
        if (!Utils::isUnset($request->html5FileTransfer)) {
            $query['Html5FileTransfer'] = $request->html5FileTransfer;
        }
        if (!Utils::isUnset($request->internetCommunicationProtocol)) {
            $query['InternetCommunicationProtocol'] = $request->internetCommunicationProtocol;
        }
        if (!Utils::isUnset($request->localDrive)) {
            $query['LocalDrive'] = $request->localDrive;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->netRedirect)) {
            $query['NetRedirect'] = $request->netRedirect;
        }
        if (!Utils::isUnset($request->policyGroupId)) {
            $query['PolicyGroupId'] = $request->policyGroupId;
        }
        if (!Utils::isUnset($request->preemptLogin)) {
            $query['PreemptLogin'] = $request->preemptLogin;
        }
        if (!Utils::isUnset($request->preemptLoginUser)) {
            $query['PreemptLoginUser'] = $request->preemptLoginUser;
        }
        if (!Utils::isUnset($request->printerRedirection)) {
            $query['PrinterRedirection'] = $request->printerRedirection;
        }
        if (!Utils::isUnset($request->recordContent)) {
            $query['RecordContent'] = $request->recordContent;
        }
        if (!Utils::isUnset($request->recordContentExpires)) {
            $query['RecordContentExpires'] = $request->recordContentExpires;
        }
        if (!Utils::isUnset($request->recording)) {
            $query['Recording'] = $request->recording;
        }
        if (!Utils::isUnset($request->recordingAudio)) {
            $query['RecordingAudio'] = $request->recordingAudio;
        }
        if (!Utils::isUnset($request->recordingDuration)) {
            $query['RecordingDuration'] = $request->recordingDuration;
        }
        if (!Utils::isUnset($request->recordingEndTime)) {
            $query['RecordingEndTime'] = $request->recordingEndTime;
        }
        if (!Utils::isUnset($request->recordingExpires)) {
            $query['RecordingExpires'] = $request->recordingExpires;
        }
        if (!Utils::isUnset($request->recordingFps)) {
            $query['RecordingFps'] = $request->recordingFps;
        }
        if (!Utils::isUnset($request->recordingStartTime)) {
            $query['RecordingStartTime'] = $request->recordingStartTime;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->remoteCoordinate)) {
            $query['RemoteCoordinate'] = $request->remoteCoordinate;
        }
        if (!Utils::isUnset($request->revokeAccessPolicyRule)) {
            $query['RevokeAccessPolicyRule'] = $request->revokeAccessPolicyRule;
        }
        if (!Utils::isUnset($request->revokeSecurityPolicyRule)) {
            $query['RevokeSecurityPolicyRule'] = $request->revokeSecurityPolicyRule;
        }
        if (!Utils::isUnset($request->scope)) {
            $query['Scope'] = $request->scope;
        }
        if (!Utils::isUnset($request->scopeValue)) {
            $query['ScopeValue'] = $request->scopeValue;
        }
        if (!Utils::isUnset($request->usbRedirect)) {
            $query['UsbRedirect'] = $request->usbRedirect;
        }
        if (!Utils::isUnset($request->usbSupplyRedirectRule)) {
            $query['UsbSupplyRedirectRule'] = $request->usbSupplyRedirectRule;
        }
        if (!Utils::isUnset($request->videoRedirect)) {
            $query['VideoRedirect'] = $request->videoRedirect;
        }
        if (!Utils::isUnset($request->visualQuality)) {
            $query['VisualQuality'] = $request->visualQuality;
        }
        if (!Utils::isUnset($request->watermark)) {
            $query['Watermark'] = $request->watermark;
        }
        if (!Utils::isUnset($request->watermarkColor)) {
            $query['WatermarkColor'] = $request->watermarkColor;
        }
        if (!Utils::isUnset($request->watermarkDegree)) {
            $query['WatermarkDegree'] = $request->watermarkDegree;
        }
        if (!Utils::isUnset($request->watermarkFontSize)) {
            $query['WatermarkFontSize'] = $request->watermarkFontSize;
        }
        if (!Utils::isUnset($request->watermarkFontStyle)) {
            $query['WatermarkFontStyle'] = $request->watermarkFontStyle;
        }
        if (!Utils::isUnset($request->watermarkRowAmount)) {
            $query['WatermarkRowAmount'] = $request->watermarkRowAmount;
        }
        if (!Utils::isUnset($request->watermarkTransparency)) {
            $query['WatermarkTransparency'] = $request->watermarkTransparency;
        }
        if (!Utils::isUnset($request->watermarkTransparencyValue)) {
            $query['WatermarkTransparencyValue'] = $request->watermarkTransparencyValue;
        }
        if (!Utils::isUnset($request->watermarkType)) {
            $query['WatermarkType'] = $request->watermarkType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyPolicyGroup',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyPolicyGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * You can modify permissions for regular users on cloud desktops that are only in the Running state.
     *   *
     * @param ModifyUserEntitlementRequest $request ModifyUserEntitlementRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyUserEntitlementResponse ModifyUserEntitlementResponse
     */
    public function modifyUserEntitlementWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->authorizeDesktopId)) {
            $query['AuthorizeDesktopId'] = $request->authorizeDesktopId;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->revokeDesktopId)) {
            $query['RevokeDesktopId'] = $request->revokeDesktopId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyUserEntitlement',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyUserEntitlementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can modify permissions for regular users on cloud desktops that are only in the Running state.
     *   *
     * @param ModifyUserEntitlementRequest $request ModifyUserEntitlementRequest
     *
     * @return ModifyUserEntitlementResponse ModifyUserEntitlementResponse
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
        $query = [];
        if (!Utils::isUnset($request->desktopGroupId)) {
            $query['DesktopGroupId'] = $request->desktopGroupId;
        }
        if (!Utils::isUnset($request->newEndUserIds)) {
            $query['NewEndUserIds'] = $request->newEndUserIds;
        }
        if (!Utils::isUnset($request->oldEndUserIds)) {
            $query['OldEndUserIds'] = $request->oldEndUserIds;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyUserToDesktopGroup',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyUserToDesktopGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param MoveCdsFileRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return MoveCdsFileResponse
     */
    public function moveCdsFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cdsId)) {
            $query['CdsId'] = $request->cdsId;
        }
        if (!Utils::isUnset($request->conflictPolicy)) {
            $query['ConflictPolicy'] = $request->conflictPolicy;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->fileId)) {
            $query['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->parentFolderId)) {
            $query['ParentFolderId'] = $request->parentFolderId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MoveCdsFile',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MoveCdsFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param MoveCdsFileRequest $request
     *
     * @return MoveCdsFileResponse
     */
    public function moveCdsFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveCdsFileWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->operateType)) {
            $query['OperateType'] = $request->operateType;
        }
        if (!Utils::isUnset($request->precondition)) {
            $query['Precondition'] = $request->precondition;
        }
        if (!Utils::isUnset($request->reason)) {
            $query['Reason'] = $request->reason;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->vulName)) {
            $query['VulName'] = $request->vulName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'OperateVuls',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return OperateVulsResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * The cloud desktops that you want to restart by calling this operation must be in the Running state.
     *   *
     * @param RebootDesktopsRequest $request RebootDesktopsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return RebootDesktopsResponse RebootDesktopsResponse
     */
    public function rebootDesktopsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RebootDesktops',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RebootDesktopsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The cloud desktops that you want to restart by calling this operation must be in the Running state.
     *   *
     * @param RebootDesktopsRequest $request RebootDesktopsRequest
     *
     * @return RebootDesktopsResponse RebootDesktopsResponse
     */
    public function rebootDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebootDesktopsWithOptions($request, $runtime);
    }

    /**
     * Before you change the image of a cloud desktop, take note of the following limits:
     *   * - You can select the OS of an image during image change. However, this operation is unavailable in the following regions: China (Hong Kong), Australia (Sydney), Singapore (Singapore), and Japan (Tokyo).
     *   * - Image change between GPU and non-GPU images is not supported. If a cloud desktop is of the Graphics type, you can use only a GPU image. If the cloud desktop is of a non-Graphics type, you can use only a non-GPU image.
     *   * After you change the image of the cloud desktop, the system uses the new image to initialize the system disk of the cloud desktop. Take note of the following impacts:
     *   * - The system deletes data from the original system disk. The snapshots that are created from the original system disk of the cloud desktop become unavailable and are automatically deleted.
     *   * - If you change the OS of the image, the system deletes data from the original data disk of the cloud desktop. The system also deletes snapshots that are created from the original data disk of the cloud desktop because original snapshots become unavailable. If you do not change the OS of the image, data on the original data disk is retained, and snapshots that are created from the data disk are still available.
     *   *
     * @param RebuildDesktopsRequest $request RebuildDesktopsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return RebuildDesktopsResponse RebuildDesktopsResponse
     */
    public function rebuildDesktopsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RebuildDesktops',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RebuildDesktopsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you change the image of a cloud desktop, take note of the following limits:
     *   * - You can select the OS of an image during image change. However, this operation is unavailable in the following regions: China (Hong Kong), Australia (Sydney), Singapore (Singapore), and Japan (Tokyo).
     *   * - Image change between GPU and non-GPU images is not supported. If a cloud desktop is of the Graphics type, you can use only a GPU image. If the cloud desktop is of a non-Graphics type, you can use only a non-GPU image.
     *   * After you change the image of the cloud desktop, the system uses the new image to initialize the system disk of the cloud desktop. Take note of the following impacts:
     *   * - The system deletes data from the original system disk. The snapshots that are created from the original system disk of the cloud desktop become unavailable and are automatically deleted.
     *   * - If you change the OS of the image, the system deletes data from the original data disk of the cloud desktop. The system also deletes snapshots that are created from the original data disk of the cloud desktop because original snapshots become unavailable. If you do not change the OS of the image, data on the original data disk is retained, and snapshots that are created from the data disk are still available.
     *   *
     * @param RebuildDesktopsRequest $request RebuildDesktopsRequest
     *
     * @return RebuildDesktopsResponse RebuildDesktopsResponse
     */
    public function rebuildDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebuildDesktopsWithOptions($request, $runtime);
    }

    /**
     * @param RemoveFilePermissionRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return RemoveFilePermissionResponse
     */
    public function removeFilePermissionWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RemoveFilePermissionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->memberList)) {
            $request->memberListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->memberList, 'MemberList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->cdsId)) {
            $query['CdsId'] = $request->cdsId;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->fileId)) {
            $query['FileId'] = $request->fileId;
        }
        if (!Utils::isUnset($request->memberListShrink)) {
            $query['MemberList'] = $request->memberListShrink;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveFilePermission',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveFilePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveFilePermissionRequest $request
     *
     * @return RemoveFilePermissionResponse
     */
    public function removeFilePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeFilePermissionWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->desktopGroupId)) {
            $query['DesktopGroupId'] = $request->desktopGroupId;
        }
        if (!Utils::isUnset($request->desktopGroupIds)) {
            $query['DesktopGroupIds'] = $request->desktopGroupIds;
        }
        if (!Utils::isUnset($request->endUserIds)) {
            $query['EndUserIds'] = $request->endUserIds;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveUserFromDesktopGroup',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveUserFromDesktopGroupResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param RenewDesktopsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RenewDesktopsResponse
     */
    public function renewDesktopsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->promotionId)) {
            $query['PromotionId'] = $request->promotionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RenewDesktops',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenewDesktopsResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->networkPackageId)) {
            $query['NetworkPackageId'] = $request->networkPackageId;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->promotionId)) {
            $query['PromotionId'] = $request->promotionId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RenewNetworkPackages',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenewNetworkPackagesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param ResetDesktopsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ResetDesktopsResponse
     */
    public function resetDesktopsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->desktopGroupId)) {
            $query['DesktopGroupId'] = $request->desktopGroupId;
        }
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resetType)) {
            $query['ResetType'] = $request->resetType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetDesktops',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetDesktopsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ResetDesktopsRequest $request
     *
     * @return ResetDesktopsResponse
     */
    public function resetDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetDesktopsWithOptions($request, $runtime);
    }

    /**
     * ## Description
     *   * When you create a NAS file system, a mount target is automatically generated. By default, you do not need to modify the mount target of the NAS file system. If the mount target is disabled, you need to reset the mount target of the NAS file system.
     *   *
     * @param ResetNASDefaultMountTargetRequest $request ResetNASDefaultMountTargetRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetNASDefaultMountTargetResponse ResetNASDefaultMountTargetResponse
     */
    public function resetNASDefaultMountTargetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetNASDefaultMountTarget',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetNASDefaultMountTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Description
     *   * When you create a NAS file system, a mount target is automatically generated. By default, you do not need to modify the mount target of the NAS file system. If the mount target is disabled, you need to reset the mount target of the NAS file system.
     *   *
     * @param ResetNASDefaultMountTargetRequest $request ResetNASDefaultMountTargetRequest
     *
     * @return ResetNASDefaultMountTargetResponse ResetNASDefaultMountTargetResponse
     */
    public function resetNASDefaultMountTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetNASDefaultMountTargetWithOptions($request, $runtime);
    }

    /**
     * Before you call this operation, make sure that the following operations are performed:
     *   * *   The data that you want to retain in the disk is backed up.
     *   *     **
     *   *     **Note**The disk restoration operation is irreversible. After you restore data on a disk, the disk is restored to the status at the point in time when the snapshot was created. Data that is generated between the snapshot creation time and the current time is lost. Before you restore a disk from a snapshot, make sure that you back up important data.
     *   * *   The cloud desktop whose disk you want to restore is stopped.
     *   *
     * @param ResetSnapshotRequest $request ResetSnapshotRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetSnapshotResponse ResetSnapshotResponse
     */
    public function resetSnapshotWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->snapshotId)) {
            $query['SnapshotId'] = $request->snapshotId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetSnapshot',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Before you call this operation, make sure that the following operations are performed:
     *   * *   The data that you want to retain in the disk is backed up.
     *   *     **
     *   *     **Note**The disk restoration operation is irreversible. After you restore data on a disk, the disk is restored to the status at the point in time when the snapshot was created. Data that is generated between the snapshot creation time and the current time is lost. Before you restore a disk from a snapshot, make sure that you back up important data.
     *   * *   The cloud desktop whose disk you want to restore is stopped.
     *   *
     * @param ResetSnapshotRequest $request ResetSnapshotRequest
     *
     * @return ResetSnapshotResponse ResetSnapshotResponse
     */
    public function resetSnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetSnapshotWithOptions($request, $runtime);
    }

    /**
     * @param RevokeCoordinatePrivilegeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RevokeCoordinatePrivilegeResponse
     */
    public function revokeCoordinatePrivilegeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->coId)) {
            $query['CoId'] = $request->coId;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userType)) {
            $query['UserType'] = $request->userType;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RevokeCoordinatePrivilege',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RevokeCoordinatePrivilegeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RevokeCoordinatePrivilegeRequest $request
     *
     * @return RevokeCoordinatePrivilegeResponse
     */
    public function revokeCoordinatePrivilege($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeCoordinatePrivilegeWithOptions($request, $runtime);
    }

    /**
     * ## Description
     *   * When alerts are handled, the system quarantines the files that contain detected threats to the quarantine panel. You can call this operation to remove quarantined files from the quarantine panel.
     *   *
     * @param RollbackSuspEventQuaraFileRequest $request RollbackSuspEventQuaraFileRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return RollbackSuspEventQuaraFileResponse RollbackSuspEventQuaraFileResponse
     */
    public function rollbackSuspEventQuaraFileWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->quaraFieldId)) {
            $query['QuaraFieldId'] = $request->quaraFieldId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RollbackSuspEventQuaraFile',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RollbackSuspEventQuaraFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Description
     *   * When alerts are handled, the system quarantines the files that contain detected threats to the quarantine panel. You can call this operation to remove quarantined files from the quarantine panel.
     *   *
     * @param RollbackSuspEventQuaraFileRequest $request RollbackSuspEventQuaraFileRequest
     *
     * @return RollbackSuspEventQuaraFileResponse RollbackSuspEventQuaraFileResponse
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
        $query = [];
        if (!Utils::isUnset($request->commandContent)) {
            $query['CommandContent'] = $request->commandContent;
        }
        if (!Utils::isUnset($request->contentEncoding)) {
            $query['ContentEncoding'] = $request->contentEncoding;
        }
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RunCommand',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RunCommandResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * ## Description
     *   * When you attach your workspace network to a Cloud Enterprise Network (CEN) instance in another Alibaba Cloud account, you need to call this operation to obtain a verification code. After the call is successful, the system sends a verification code to the email address associated with the Alibaba Cloud account.
     *   *
     * @param SendVerifyCodeRequest $request SendVerifyCodeRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return SendVerifyCodeResponse SendVerifyCodeResponse
     */
    public function sendVerifyCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->extraInfo)) {
            $query['ExtraInfo'] = $request->extraInfo;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->verifyCodeAction)) {
            $query['VerifyCodeAction'] = $request->verifyCodeAction;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SendVerifyCode',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SendVerifyCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Description
     *   * When you attach your workspace network to a Cloud Enterprise Network (CEN) instance in another Alibaba Cloud account, you need to call this operation to obtain a verification code. After the call is successful, the system sends a verification code to the email address associated with the Alibaba Cloud account.
     *   *
     * @param SendVerifyCodeRequest $request SendVerifyCodeRequest
     *
     * @return SendVerifyCodeResponse SendVerifyCodeResponse
     */
    public function sendVerifyCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->sendVerifyCodeWithOptions($request, $runtime);
    }

    /**
     * @param SetDesktopGroupScaleTimerRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SetDesktopGroupScaleTimerResponse
     */
    public function setDesktopGroupScaleTimerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->desktopGroupId)) {
            $query['DesktopGroupId'] = $request->desktopGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->scaleTimerInfos)) {
            $query['ScaleTimerInfos'] = $request->scaleTimerInfos;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDesktopGroupScaleTimer',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDesktopGroupScaleTimerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetDesktopGroupScaleTimerRequest $request
     *
     * @return SetDesktopGroupScaleTimerResponse
     */
    public function setDesktopGroupScaleTimer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDesktopGroupScaleTimerWithOptions($request, $runtime);
    }

    /**
     * @param SetDesktopGroupTimerRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SetDesktopGroupTimerResponse
     */
    public function setDesktopGroupTimerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cronExpression)) {
            $query['CronExpression'] = $request->cronExpression;
        }
        if (!Utils::isUnset($request->desktopGroupId)) {
            $query['DesktopGroupId'] = $request->desktopGroupId;
        }
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resetType)) {
            $query['ResetType'] = $request->resetType;
        }
        if (!Utils::isUnset($request->timerType)) {
            $query['TimerType'] = $request->timerType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDesktopGroupTimer',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDesktopGroupTimerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetDesktopGroupTimerRequest $request
     *
     * @return SetDesktopGroupTimerResponse
     */
    public function setDesktopGroupTimer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDesktopGroupTimerWithOptions($request, $runtime);
    }

    /**
     * @param SetDesktopGroupTimerStatusRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SetDesktopGroupTimerStatusResponse
     */
    public function setDesktopGroupTimerStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->desktopGroupId)) {
            $query['DesktopGroupId'] = $request->desktopGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->timerType)) {
            $query['TimerType'] = $request->timerType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDesktopGroupTimerStatus',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDesktopGroupTimerStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetDesktopGroupTimerStatusRequest $request
     *
     * @return SetDesktopGroupTimerStatusResponse
     */
    public function setDesktopGroupTimerStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDesktopGroupTimerStatusWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->enableSso)) {
            $query['EnableSso'] = $request->enableSso;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDirectorySsoStatus',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDirectorySsoStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * ## Description
     *   * You can call this operation only for workspaces of the Active Directory (AD) and convenience account types. You cannot call this operation for RAM directories.
     *   *
     * @param SetIdpMetadataRequest $request SetIdpMetadataRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return SetIdpMetadataResponse SetIdpMetadataResponse
     */
    public function setIdpMetadataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
        }
        if (!Utils::isUnset($request->idpMetadata)) {
            $query['IdpMetadata'] = $request->idpMetadata;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetIdpMetadata',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetIdpMetadataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * ## Description
     *   * You can call this operation only for workspaces of the Active Directory (AD) and convenience account types. You cannot call this operation for RAM directories.
     *   *
     * @param SetIdpMetadataRequest $request SetIdpMetadataRequest
     *
     * @return SetIdpMetadataResponse SetIdpMetadataResponse
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
        $query = [];
        if (!Utils::isUnset($request->enableSso)) {
            $query['EnableSso'] = $request->enableSso;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetOfficeSiteSsoStatus',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetOfficeSiteSsoStatusResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param SetUserProfilePathRulesRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return SetUserProfilePathRulesResponse
     */
    public function setUserProfilePathRulesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SetUserProfilePathRulesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->userProfilePathRule)) {
            $request->userProfilePathRuleShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->userProfilePathRule, 'UserProfilePathRule', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->desktopGroupId)) {
            $query['DesktopGroupId'] = $request->desktopGroupId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->userProfilePathRuleShrink)) {
            $query['UserProfilePathRule'] = $request->userProfilePathRuleShrink;
        }
        if (!Utils::isUnset($request->userProfileRuleType)) {
            $query['UserProfileRuleType'] = $request->userProfileRuleType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetUserProfilePathRules',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetUserProfilePathRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetUserProfilePathRulesRequest $request
     *
     * @return SetUserProfilePathRulesResponse
     */
    public function setUserProfilePathRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setUserProfilePathRulesWithOptions($request, $runtime);
    }

    /**
     * The cloud desktop to be started must be in the Stopped (Stopped) state.
     *   *
     * @param StartDesktopsRequest $request StartDesktopsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return StartDesktopsResponse StartDesktopsResponse
     */
    public function startDesktopsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartDesktops',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartDesktopsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The cloud desktop to be started must be in the Stopped (Stopped) state.
     *   *
     * @param StartDesktopsRequest $request StartDesktopsRequest
     *
     * @return StartDesktopsResponse StartDesktopsResponse
     */
    public function startDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startDesktopsWithOptions($request, $runtime);
    }

    /**
     * When you call this operation, you must specify a workspace or a cloud desktop by specifying the OfficeSiteId or DesktopId parameter.
     *   * > When you specify a workspace, all cloud desktops within the workspace are scanned.
     *   *
     * @param StartVirusScanTaskRequest $request StartVirusScanTaskRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return StartVirusScanTaskResponse StartVirusScanTaskResponse
     */
    public function startVirusScanTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartVirusScanTask',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartVirusScanTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * When you call this operation, you must specify a workspace or a cloud desktop by specifying the OfficeSiteId or DesktopId parameter.
     *   * > When you specify a workspace, all cloud desktops within the workspace are scanned.
     *   *
     * @param StartVirusScanTaskRequest $request StartVirusScanTaskRequest
     *
     * @return StartVirusScanTaskResponse StartVirusScanTaskResponse
     */
    public function startVirusScanTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startVirusScanTaskWithOptions($request, $runtime);
    }

    /**
     * The cloud desktop must be in the Running state.
     *   *
     * @param StopDesktopsRequest $request StopDesktopsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return StopDesktopsResponse StopDesktopsResponse
     */
    public function stopDesktopsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->stoppedMode)) {
            $query['StoppedMode'] = $request->stoppedMode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopDesktops',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopDesktopsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The cloud desktop must be in the Running state.
     *   *
     * @param StopDesktopsRequest $request StopDesktopsRequest
     *
     * @return StopDesktopsResponse StopDesktopsResponse
     */
    public function stopDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopDesktopsWithOptions($request, $runtime);
    }

    /**
     * When you stop a one-time execution of a command, the command continues to run on the cloud desktops where it has started to run, and will not run on the cloud desktops where it has not started to run.
     *   *
     * @param StopInvocationRequest $request StopInvocationRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return StopInvocationResponse StopInvocationResponse
     */
    public function stopInvocationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->invokeId)) {
            $query['InvokeId'] = $request->invokeId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopInvocation',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopInvocationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * When you stop a one-time execution of a command, the command continues to run on the cloud desktops where it has started to run, and will not run on the cloud desktops where it has not started to run.
     *   *
     * @param StopInvocationRequest $request StopInvocationRequest
     *
     * @return StopInvocationResponse StopInvocationResponse
     */
    public function stopInvocation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopInvocationWithOptions($request, $runtime);
    }

    /**
     * If TagKey is specified, the new TagValue value overrides the original TagValue value.
     *   *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * If TagKey is specified, the new TagValue value overrides the original TagValue value.
     *   *
     * @param TagResourcesRequest $request TagResourcesRequest
     *
     * @return TagResourcesResponse TagResourcesResponse
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
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->serialNumber)) {
            $query['SerialNumber'] = $request->serialNumber;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnlockVirtualMFADevice',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnlockVirtualMFADeviceResponse::fromMap($this->callApi($params, $req, $runtime));
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
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
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
     * @param UpdateFotaTaskRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateFotaTaskResponse
     */
    public function updateFotaTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->taskUid)) {
            $query['TaskUid'] = $request->taskUid;
        }
        if (!Utils::isUnset($request->userStatus)) {
            $query['UserStatus'] = $request->userStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateFotaTask',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateFotaTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateFotaTaskRequest $request
     *
     * @return UpdateFotaTaskResponse
     */
    public function updateFotaTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFotaTaskWithOptions($request, $runtime);
    }

    /**
     * @param UploadImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UploadImageResponse
     */
    public function uploadImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataDiskSize)) {
            $query['DataDiskSize'] = $request->dataDiskSize;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->enableSecurityCheck)) {
            $query['EnableSecurityCheck'] = $request->enableSecurityCheck;
        }
        if (!Utils::isUnset($request->gpuCategory)) {
            $query['GpuCategory'] = $request->gpuCategory;
        }
        if (!Utils::isUnset($request->gpuDriverType)) {
            $query['GpuDriverType'] = $request->gpuDriverType;
        }
        if (!Utils::isUnset($request->imageName)) {
            $query['ImageName'] = $request->imageName;
        }
        if (!Utils::isUnset($request->licenseType)) {
            $query['LicenseType'] = $request->licenseType;
        }
        if (!Utils::isUnset($request->osType)) {
            $query['OsType'] = $request->osType;
        }
        if (!Utils::isUnset($request->ossObjectPath)) {
            $query['OssObjectPath'] = $request->ossObjectPath;
        }
        if (!Utils::isUnset($request->protocolType)) {
            $query['ProtocolType'] = $request->protocolType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UploadImage',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UploadImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UploadImageRequest $request
     *
     * @return UploadImageResponse
     */
    public function uploadImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadImageWithOptions($request, $runtime);
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
        $query = [];
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->cenOwnerId)) {
            $query['CenOwnerId'] = $request->cenOwnerId;
        }
        if (!Utils::isUnset($request->cidrBlock)) {
            $query['CidrBlock'] = $request->cidrBlock;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->verifyCode)) {
            $query['VerifyCode'] = $request->verifyCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'VerifyCen',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return VerifyCenResponse::fromMap($this->callApi($params, $req, $runtime));
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
}
