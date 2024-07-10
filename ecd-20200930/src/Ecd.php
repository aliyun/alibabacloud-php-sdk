<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ActivateOfficeSiteRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ActivateOfficeSiteResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\AddDesktopOversoldUserGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\AddDesktopOversoldUserGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\AddDevicesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\AddDevicesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\AddFilePermissionRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\AddFilePermissionResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\AddFilePermissionShrinkRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\AddUserToDesktopGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\AddUserToDesktopGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\AddUserToDesktopOversoldUserGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\AddUserToDesktopOversoldUserGroupResponse;
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
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCloudDriveServiceRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCloudDriveServiceResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCloudDriveUsersRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCloudDriveUsersResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopOversoldGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopOversoldGroupResponse;
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
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteEduRoomRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteEduRoomResponse;
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
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeAclEntriesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeAclEntriesResponse;
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
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCloudDriveUsersRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCloudDriveUsersResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCustomizedListHeadersRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCustomizedListHeadersResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopGroupSessionsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopGroupSessionsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopGroupsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopGroupsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopInfoRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopInfoResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopOversoldGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopOversoldGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopOversoldUserGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopOversoldUserGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopOversoldUserRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopOversoldUserResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopSessionsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopSessionsResponse;
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
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeGuestApplicationsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeGuestApplicationsResponse;
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
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePriceForCreateDesktopOversoldGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePriceForCreateDesktopOversoldGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePriceForModifyDesktopOversoldGroupSaleRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePriceForModifyDesktopOversoldGroupSaleResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePriceForRenewDesktopOversoldGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePriceForRenewDesktopOversoldGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePriceRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePriceResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeRecordingsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeRecordingsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSessionStatisticRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSessionStatisticResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSnapshotsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSnapshotsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUserConnectionRecordsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUserConnectionRecordsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUserConnectTimeRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUserConnectTimeResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUserProfilePathRulesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUserProfilePathRulesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUsersInGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUsersInGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUsersPasswordRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUsersPasswordResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeVirtualMFADevicesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeVirtualMFADevicesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeZonesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeZonesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DetachCenRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DetachCenResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DetachEndUserRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DetachEndUserResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DisableDesktopsInGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DisableDesktopsInGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DisconnectDesktopSessionsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DisconnectDesktopSessionsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DissociateNetworkPackageRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DissociateNetworkPackageResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ExportClientEventsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ExportClientEventsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ExportDesktopGroupInfoRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ExportDesktopGroupInfoResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ExportDesktopListInfoRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ExportDesktopListInfoResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\GetAsyncTaskRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\GetAsyncTaskResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\GetConnectionTicketRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\GetConnectionTicketResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\GetCoordinateTicketRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\GetCoordinateTicketResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\GetDesktopGroupDetailRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\GetDesktopGroupDetailResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\GetOfficeSiteSsoStatusRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\GetOfficeSiteSsoStatusResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\GetSpMetadataRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\GetSpMetadataResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\HibernateDesktopsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\HibernateDesktopsResponse;
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
use AlibabaCloud\SDK\Ecd\V20200930\Models\MigrateImageProtocolRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\MigrateImageProtocolResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyAclEntriesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyAclEntriesResponse;
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
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyCloudDriveUsersRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyCloudDriveUsersResponse;
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
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyDesktopOversoldGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyDesktopOversoldGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyDesktopOversoldGroupSaleRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyDesktopOversoldGroupSaleResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyDesktopOversoldUserGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyDesktopOversoldUserGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyDesktopSpecRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyDesktopSpecResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyDesktopsPolicyGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyDesktopsPolicyGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyDesktopTimerRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyDesktopTimerResponse;
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
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyUserEntitlementRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyUserEntitlementResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyUserToDesktopGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyUserToDesktopGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\MoveCdsFileRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\MoveCdsFileResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RebootDesktopsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RebootDesktopsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RebuildDesktopsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RebuildDesktopsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RemoveFilePermissionRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RemoveFilePermissionResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RemoveFilePermissionShrinkRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RemoveUserFromDesktopGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RemoveUserFromDesktopGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RemoveUserFromDesktopOversoldUserGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RemoveUserFromDesktopOversoldUserGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RenewDesktopOversoldGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RenewDesktopOversoldGroupResponse;
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
use AlibabaCloud\SDK\Ecd\V20200930\Models\SetDesktopMaintenanceRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\SetDesktopMaintenanceResponse;
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
use AlibabaCloud\SDK\Ecd\V20200930\Models\StopDesktopsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\StopDesktopsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\StopInvocationRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\StopInvocationResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\UnbindUserDesktopRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\UnbindUserDesktopResponse;
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
use AlibabaCloud\SDK\Ecd\V20200930\Models\WakeupDesktopsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\WakeupDesktopsResponse;
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
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = 'regional';
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
     * @summary Unlocks a convenience office network that is automatically locked due to a long idle period of time.
     *  *
     * @description If you do not create any cloud computer in a convenience office network within 15 days, the office network is automatically locked and virtual private cloud (VPC) resources are released. If you want to resume the office network, you can call this operation to unlock the office network.
     *  *
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
     * @summary Unlocks a convenience office network that is automatically locked due to a long idle period of time.
     *  *
     * @description If you do not create any cloud computer in a convenience office network within 15 days, the office network is automatically locked and virtual private cloud (VPC) resources are released. If you want to resume the office network, you can call this operation to unlock the office network.
     *  *
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
     * @summary 添加桌面超卖用户组
     *  *
     * @param AddDesktopOversoldUserGroupRequest $request AddDesktopOversoldUserGroupRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return AddDesktopOversoldUserGroupResponse AddDesktopOversoldUserGroupResponse
     */
    public function addDesktopOversoldUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->oversoldGroupId)) {
            $query['OversoldGroupId'] = $request->oversoldGroupId;
        }
        if (!Utils::isUnset($request->policyGroupId)) {
            $query['PolicyGroupId'] = $request->policyGroupId;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddDesktopOversoldUserGroup',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddDesktopOversoldUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加桌面超卖用户组
     *  *
     * @param AddDesktopOversoldUserGroupRequest $request AddDesktopOversoldUserGroupRequest
     *
     * @return AddDesktopOversoldUserGroupResponse AddDesktopOversoldUserGroupResponse
     */
    public function addDesktopOversoldUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDesktopOversoldUserGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Adds trusted devices.
     *  *
     * @description Each device can be registered in only one Alibaba Cloud account. If you register a device that has been registered in another Alibaba Cloud account, an error is reported.
     *  *
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
     * @summary Adds trusted devices.
     *  *
     * @description Each device can be registered in only one Alibaba Cloud account. If you register a device that has been registered in another Alibaba Cloud account, an error is reported.
     *  *
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
     * @summary Shares a folder of a cloud disk with other users.
     *  *
     * @description You can call this operation to share a specific folder with other users. You can also configure the folder permissions.
     *  *
     * @param AddFilePermissionRequest $tmpReq  AddFilePermissionRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return AddFilePermissionResponse AddFilePermissionResponse
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
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
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
     * @summary Shares a folder of a cloud disk with other users.
     *  *
     * @description You can call this operation to share a specific folder with other users. You can also configure the folder permissions.
     *  *
     * @param AddFilePermissionRequest $request AddFilePermissionRequest
     *
     * @return AddFilePermissionResponse AddFilePermissionResponse
     */
    public function addFilePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addFilePermissionWithOptions($request, $runtime);
    }

    /**
     * @summary Adds authorized end users of a desktop group.
     *  *
     * @param AddUserToDesktopGroupRequest $request AddUserToDesktopGroupRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return AddUserToDesktopGroupResponse AddUserToDesktopGroupResponse
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
     * @summary Adds authorized end users of a desktop group.
     *  *
     * @param AddUserToDesktopGroupRequest $request AddUserToDesktopGroupRequest
     *
     * @return AddUserToDesktopGroupResponse AddUserToDesktopGroupResponse
     */
    public function addUserToDesktopGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUserToDesktopGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 添加用户到超卖用户组
     *  *
     * @param AddUserToDesktopOversoldUserGroupRequest $request AddUserToDesktopOversoldUserGroupRequest
     * @param RuntimeOptions                           $runtime runtime options for this request RuntimeOptions
     *
     * @return AddUserToDesktopOversoldUserGroupResponse AddUserToDesktopOversoldUserGroupResponse
     */
    public function addUserToDesktopOversoldUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addUserAmount)) {
            $query['AddUserAmount'] = $request->addUserAmount;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->oversoldGroupId)) {
            $query['OversoldGroupId'] = $request->oversoldGroupId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddUserToDesktopOversoldUserGroup',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddUserToDesktopOversoldUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 添加用户到超卖用户组
     *  *
     * @param AddUserToDesktopOversoldUserGroupRequest $request AddUserToDesktopOversoldUserGroupRequest
     *
     * @return AddUserToDesktopOversoldUserGroupResponse AddUserToDesktopOversoldUserGroupResponse
     */
    public function addUserToDesktopOversoldUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUserToDesktopOversoldUserGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Apply an automatic snapshot policy to cloud computers. After the automatic snapshot policy is applied to the cloud computers, Elastic Desktop Service automatically creates snapshots for the cloud computers based on the time specified in the automatic snapshot policy.
     *  *
     * @description You can also associate an automatic snapshot policy with a cloud desktop in the Elastic Desktop Service (EDS) console. To do so, perform the following steps: 1. Log on to the EDS console. 2. Choose Desktops and Groups > Desktops in the left-side navigation pane. 3. Find the cloud desktop that you want to manage on the Cloud Desktops page and choose More > Change Automatic Snapshot Policy in the Actions column. 4. Configure a policy for the cloud desktop as prompted in the Change Automatic Snapshot Policy panel.
     * After you associate an automatic snapshot policy with the cloud desktop, the system creates snapshots for the cloud desktop based on the policy.
     *  *
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
     * @summary Apply an automatic snapshot policy to cloud computers. After the automatic snapshot policy is applied to the cloud computers, Elastic Desktop Service automatically creates snapshots for the cloud computers based on the time specified in the automatic snapshot policy.
     *  *
     * @description You can also associate an automatic snapshot policy with a cloud desktop in the Elastic Desktop Service (EDS) console. To do so, perform the following steps: 1. Log on to the EDS console. 2. Choose Desktops and Groups > Desktops in the left-side navigation pane. 3. Find the cloud desktop that you want to manage on the Cloud Desktops page and choose More > Change Automatic Snapshot Policy in the Actions column. 4. Configure a policy for the cloud desktop as prompted in the Change Automatic Snapshot Policy panel.
     * After you associate an automatic snapshot policy with the cloud desktop, the system creates snapshots for the cloud desktop based on the policy.
     *  *
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
     * @summary Applies for the coordinate permissions.
     *  *
     * @param ApplyCoordinatePrivilegeRequest $request ApplyCoordinatePrivilegeRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ApplyCoordinatePrivilegeResponse ApplyCoordinatePrivilegeResponse
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
     * @summary Applies for the coordinate permissions.
     *  *
     * @param ApplyCoordinatePrivilegeRequest $request ApplyCoordinatePrivilegeRequest
     *
     * @return ApplyCoordinatePrivilegeResponse ApplyCoordinatePrivilegeResponse
     */
    public function applyCoordinatePrivilege($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyCoordinatePrivilegeWithOptions($request, $runtime);
    }

    /**
     * @summary Applies for coordination monitoring. This operation is mainly used in administrator assistance scenarios and education scenarios.
     *  *
     * @param ApplyCoordinationForMonitoringRequest $request ApplyCoordinationForMonitoringRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ApplyCoordinationForMonitoringResponse ApplyCoordinationForMonitoringResponse
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
     * @summary Applies for coordination monitoring. This operation is mainly used in administrator assistance scenarios and education scenarios.
     *  *
     * @param ApplyCoordinationForMonitoringRequest $request ApplyCoordinationForMonitoringRequest
     *
     * @return ApplyCoordinationForMonitoringResponse ApplyCoordinationForMonitoringResponse
     */
    public function applyCoordinationForMonitoring($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyCoordinationForMonitoringWithOptions($request, $runtime);
    }

    /**
     * @summary Allows you to upgrade images.
     *  *
     * @description The cloud computers for which you want to allow image updates must be in the Running state.
     *  *
     * @param ApproveFotaUpdateRequest $request ApproveFotaUpdateRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ApproveFotaUpdateResponse ApproveFotaUpdateResponse
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
     * @summary Allows you to upgrade images.
     *  *
     * @description The cloud computers for which you want to allow image updates must be in the Running state.
     *  *
     * @param ApproveFotaUpdateRequest $request ApproveFotaUpdateRequest
     *
     * @return ApproveFotaUpdateResponse ApproveFotaUpdateResponse
     */
    public function approveFotaUpdate($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->approveFotaUpdateWithOptions($request, $runtime);
    }

    /**
     * @summary Binds a premium bandwidth plan to an office network. A premium bandwidth plan is used together with only one office network.
     *  *
     * @param AssociateNetworkPackageRequest $request AssociateNetworkPackageRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return AssociateNetworkPackageResponse AssociateNetworkPackageResponse
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
     * @summary Binds a premium bandwidth plan to an office network. A premium bandwidth plan is used together with only one office network.
     *  *
     * @param AssociateNetworkPackageRequest $request AssociateNetworkPackageRequest
     *
     * @return AssociateNetworkPackageResponse AssociateNetworkPackageResponse
     */
    public function associateNetworkPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateNetworkPackageWithOptions($request, $runtime);
    }

    /**
     * @summary Binds an advanced office network to a Cloud Enterprise Network (CEN) instance.
     *  *
     * @description Prerequisites
     * *   A CEN instance is created.
     * *   The office network is an advanced office network, and the account system type is convenient account.
     * >  The office network is added to the CEN instance when you create the instance. An office network can be added to only one CEN instance.
     *  *
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
     * @summary Binds an advanced office network to a Cloud Enterprise Network (CEN) instance.
     *  *
     * @description Prerequisites
     * *   A CEN instance is created.
     * *   The office network is an advanced office network, and the account system type is convenient account.
     * >  The office network is added to the CEN instance when you create the instance. An office network can be added to only one CEN instance.
     *  *
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
     * @summary Binds a hardware client to a user.
     *  *
     * @param AttachEndUserRequest $request AttachEndUserRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachEndUserResponse AttachEndUserResponse
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
     * @summary Binds a hardware client to a user.
     *  *
     * @param AttachEndUserRequest $request AttachEndUserRequest
     *
     * @return AttachEndUserResponse AttachEndUserResponse
     */
    public function attachEndUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachEndUserWithOptions($request, $runtime);
    }

    /**
     * @summary Cancels an automatic snapshot policy for cloud computers.
     *  *
     * @param CancelAutoSnapshotPolicyRequest $request CancelAutoSnapshotPolicyRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelAutoSnapshotPolicyResponse CancelAutoSnapshotPolicyResponse
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
     * @summary Cancels an automatic snapshot policy for cloud computers.
     *  *
     * @param CancelAutoSnapshotPolicyRequest $request CancelAutoSnapshotPolicyRequest
     *
     * @return CancelAutoSnapshotPolicyResponse CancelAutoSnapshotPolicyResponse
     */
    public function cancelAutoSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Cancels a file sharing task.
     *  *
     * @param CancelCdsFileShareLinkRequest $request CancelCdsFileShareLinkRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelCdsFileShareLinkResponse CancelCdsFileShareLinkResponse
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
     * @summary Cancels a file sharing task.
     *  *
     * @param CancelCdsFileShareLinkRequest $request CancelCdsFileShareLinkRequest
     *
     * @return CancelCdsFileShareLinkResponse CancelCdsFileShareLinkResponse
     */
    public function cancelCdsFileShareLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelCdsFileShareLinkWithOptions($request, $runtime);
    }

    /**
     * @summary Cancels monitoring on stream collaboration.
     *  *
     * @param CancelCoordinationForMonitoringRequest $request CancelCoordinationForMonitoringRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelCoordinationForMonitoringResponse CancelCoordinationForMonitoringResponse
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
     * @summary Cancels monitoring on stream collaboration.
     *  *
     * @param CancelCoordinationForMonitoringRequest $request CancelCoordinationForMonitoringRequest
     *
     * @return CancelCoordinationForMonitoringResponse CancelCoordinationForMonitoringResponse
     */
    public function cancelCoordinationForMonitoring($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelCoordinationForMonitoringWithOptions($request, $runtime);
    }

    /**
     * @summary Cancels the operation of copying an image to another region.
     *  *
     * @param CancelCopyImageRequest $request CancelCopyImageRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CancelCopyImageResponse CancelCopyImageResponse
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
     * @summary Cancels the operation of copying an image to another region.
     *  *
     * @param CancelCopyImageRequest $request CancelCopyImageRequest
     *
     * @return CancelCopyImageResponse CancelCopyImageResponse
     */
    public function cancelCopyImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelCopyImageWithOptions($request, $runtime);
    }

    /**
     * @summary Clones an existing policy.
     *  *
     * @param ClonePolicyGroupRequest $request ClonePolicyGroupRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ClonePolicyGroupResponse ClonePolicyGroupResponse
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
     * @summary Clones an existing policy.
     *  *
     * @param ClonePolicyGroupRequest $request ClonePolicyGroupRequest
     *
     * @return ClonePolicyGroupResponse ClonePolicyGroupResponse
     */
    public function clonePolicyGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->clonePolicyGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Completes a file uploading task.
     *  *
     * @param CompleteCdsFileRequest $request CompleteCdsFileRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CompleteCdsFileResponse CompleteCdsFileResponse
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
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
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
     * @summary Completes a file uploading task.
     *  *
     * @param CompleteCdsFileRequest $request CompleteCdsFileRequest
     *
     * @return CompleteCdsFileResponse CompleteCdsFileResponse
     */
    public function completeCdsFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->completeCdsFileWithOptions($request, $runtime);
    }

    /**
     * @summary Configures a conditional forwarder and trust relationship for a high-definition experience (HDX)-based office network (formerly workspace). You can call the operation to configure a trust relationship for an enterprise Active Directory (AD) office network.
     *  *
     * @param ConfigADConnectorTrustRequest $request ConfigADConnectorTrustRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigADConnectorTrustResponse ConfigADConnectorTrustResponse
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
     * @summary Configures a conditional forwarder and trust relationship for a high-definition experience (HDX)-based office network (formerly workspace). You can call the operation to configure a trust relationship for an enterprise Active Directory (AD) office network.
     *  *
     * @param ConfigADConnectorTrustRequest $request ConfigADConnectorTrustRequest
     *
     * @return ConfigADConnectorTrustResponse ConfigADConnectorTrustResponse
     */
    public function configADConnectorTrust($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configADConnectorTrustWithOptions($request, $runtime);
    }

    /**
     * @param ConfigADConnectorUserRequest $request ConfigADConnectorUserRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ConfigADConnectorUserResponse ConfigADConnectorUserResponse
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
     * @param ConfigADConnectorUserRequest $request ConfigADConnectorUserRequest
     *
     * @return ConfigADConnectorUserResponse ConfigADConnectorUserResponse
     */
    public function configADConnectorUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->configADConnectorUserWithOptions($request, $runtime);
    }

    /**
     * @summary Copies a file or a directory.
     *  *
     * @param CopyCdsFileRequest $request CopyCdsFileRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CopyCdsFileResponse CopyCdsFileResponse
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
        if (!Utils::isUnset($request->fileReceiverId)) {
            $query['FileReceiverId'] = $request->fileReceiverId;
        }
        if (!Utils::isUnset($request->fileReceiverType)) {
            $query['FileReceiverType'] = $request->fileReceiverType;
        }
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
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
     * @summary Copies a file or a directory.
     *  *
     * @param CopyCdsFileRequest $request CopyCdsFileRequest
     *
     * @return CopyCdsFileResponse CopyCdsFileResponse
     */
    public function copyCdsFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyCdsFileWithOptions($request, $runtime);
    }

    /**
     * @summary Copy an image to another region. If you want to share an image across regions, you can call this operation to copy the image to the destination region and then share the image.
     *  *
     * @param CopyImageRequest $request CopyImageRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CopyImageResponse CopyImageResponse
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
     * @summary Copy an image to another region. If you want to share an image across regions, you can call this operation to copy the image to the destination region and then share the image.
     *  *
     * @param CopyImageRequest $request CopyImageRequest
     *
     * @return CopyImageResponse CopyImageResponse
     */
    public function copyImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copyImageWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a directory of the Active Directory (AD) type.
     *  *
     * @description An AD directory is used to connect to an enterprise\\"s existing Active Directory and is suitable for large-scale cloud computer deployment. You are charged directory fees when you connect your AD to cloud computers. For more information, see [Billing overview](https://help.aliyun.com/document_detail/188395.html).
     *  *
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
     * @summary Creates a directory of the Active Directory (AD) type.
     *  *
     * @description An AD directory is used to connect to an enterprise\\"s existing Active Directory and is suitable for large-scale cloud computer deployment. You are charged directory fees when you connect your AD to cloud computers. For more information, see [Billing overview](https://help.aliyun.com/document_detail/188395.html).
     *  *
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
     * @summary Creates an enterprise Active Directory (AD) office network (formerly workspace). Elastic Desktop Service supports the following types of accounts: convenience accounts and enterprise AD accounts.
     *  *
     * @description When you create an enterprise AD office network, the system automatically creates an AD connector to connect to an enterprise AD. You are charged for the AD connector. For more information, see [Billing overview](https://help.aliyun.com/document_detail/188395.html).
     * After you call this operation to create an AD office network, you must perform the following steps to complete AD domain setting:
     * 1.  Configure a conditional forwarder in a Domain Name System (DNS) server.
     * 2.  Configure a trust relationship in an AD domain controller and call the [ConfigADConnectorTrust](https://help.aliyun.com/document_detail/311258.html) operation to configure the trust relationship with the AD office network.
     * 3.  Call the [ListUserAdOrganizationUnits](https://help.aliyun.com/document_detail/311259.html) operation to query a list of organizational units (OUs) of the AD domain, and call the [ConfigADConnectorUser](https://help.aliyun.com/document_detail/311262.html) operation to specify an OU and administrator for the AD office network.
     *     >  When you create the AD office network, take note of the DomainUserName and DomainPassword parameters. If you specify the parameters, you need to only configure a conditional forwarder. If you do not specify the parameters, you must configure a conditional forwarder, trust relationship, and OU as prompted.
     * For more information, see [Create and manage enterprise AD office networks](https://help.aliyun.com/document_detail/214469.html).
     *  *
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
        if (!Utils::isUnset($request->backupDCHostname)) {
            $query['BackupDCHostname'] = $request->backupDCHostname;
        }
        if (!Utils::isUnset($request->backupDns)) {
            $query['BackupDns'] = $request->backupDns;
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
     * @summary Creates an enterprise Active Directory (AD) office network (formerly workspace). Elastic Desktop Service supports the following types of accounts: convenience accounts and enterprise AD accounts.
     *  *
     * @description When you create an enterprise AD office network, the system automatically creates an AD connector to connect to an enterprise AD. You are charged for the AD connector. For more information, see [Billing overview](https://help.aliyun.com/document_detail/188395.html).
     * After you call this operation to create an AD office network, you must perform the following steps to complete AD domain setting:
     * 1.  Configure a conditional forwarder in a Domain Name System (DNS) server.
     * 2.  Configure a trust relationship in an AD domain controller and call the [ConfigADConnectorTrust](https://help.aliyun.com/document_detail/311258.html) operation to configure the trust relationship with the AD office network.
     * 3.  Call the [ListUserAdOrganizationUnits](https://help.aliyun.com/document_detail/311259.html) operation to query a list of organizational units (OUs) of the AD domain, and call the [ConfigADConnectorUser](https://help.aliyun.com/document_detail/311262.html) operation to specify an OU and administrator for the AD office network.
     *     >  When you create the AD office network, take note of the DomainUserName and DomainPassword parameters. If you specify the parameters, you need to only configure a conditional forwarder. If you do not specify the parameters, you must configure a conditional forwarder, trust relationship, and OU as prompted.
     * For more information, see [Create and manage enterprise AD office networks](https://help.aliyun.com/document_detail/214469.html).
     *  *
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
     * @summary Creates an Apsara File Storage NAS (NAS) file system and mount the file system to the workspace in which a desktop group resides.
     *  *
     * @param CreateAndBindNasFileSystemRequest $request CreateAndBindNasFileSystemRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAndBindNasFileSystemResponse CreateAndBindNasFileSystemResponse
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
     * @summary Creates an Apsara File Storage NAS (NAS) file system and mount the file system to the workspace in which a desktop group resides.
     *  *
     * @param CreateAndBindNasFileSystemRequest $request CreateAndBindNasFileSystemRequest
     *
     * @return CreateAndBindNasFileSystemResponse CreateAndBindNasFileSystemResponse
     */
    public function createAndBindNasFileSystem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAndBindNasFileSystemWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an automatic snapshot policy. WUYING WorkSpace automatically creates snapshots based on the time specified by the cron expression in the automatic snapshot policy.
     *  *
     * @description You can call the operation to create an automatic snapshot policy based on a CRON expression. Then, the system automatically creates snapshots of a cloud desktop based on the policy.
     *  *
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
     * @summary Creates an automatic snapshot policy. WUYING WorkSpace automatically creates snapshots based on the time specified by the cron expression in the automatic snapshot policy.
     *  *
     * @description You can call the operation to create an automatic snapshot policy based on a CRON expression. Then, the system automatically creates snapshots of a cloud desktop based on the policy.
     *  *
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
     * @summary Creates a custom cloud computer template.
     *  *
     * @description Cloud computer templates include system templates and custom templates. A system template is the default template provided by Alibaba Cloud. You can call this operation to create a custom template.
     *  *
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
     * @summary Creates a custom cloud computer template.
     *  *
     * @description Cloud computer templates include system templates and custom templates. A system template is the default template provided by Alibaba Cloud. You can call this operation to create a custom template.
     *  *
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
     * @summary Uploads a file to a cloud disk.
     *  *
     * @description After the RAM permissions are authenticated, you can call the CreateCdsFile operation to obtain the upload URL of a file and upload the file to a cloud disk.
     *  *
     * @param CreateCdsFileRequest $request CreateCdsFileRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCdsFileResponse CreateCdsFileResponse
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
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
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
     * @summary Uploads a file to a cloud disk.
     *  *
     * @description After the RAM permissions are authenticated, you can call the CreateCdsFile operation to obtain the upload URL of a file and upload the file to a cloud disk.
     *  *
     * @param CreateCdsFileRequest $request CreateCdsFileRequest
     *
     * @return CreateCdsFileResponse CreateCdsFileResponse
     */
    public function createCdsFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCdsFileWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a file sharing task.
     *  *
     * @param CreateCdsFileShareLinkRequest $request CreateCdsFileShareLinkRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCdsFileShareLinkResponse CreateCdsFileShareLinkResponse
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
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
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
     * @summary Creates a file sharing task.
     *  *
     * @param CreateCdsFileShareLinkRequest $request CreateCdsFileShareLinkRequest
     *
     * @return CreateCdsFileShareLinkResponse CreateCdsFileShareLinkResponse
     */
    public function createCdsFileShareLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCdsFileShareLinkWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a cloud disk.
     *  *
     * @param CreateCloudDriveServiceRequest $request CreateCloudDriveServiceRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCloudDriveServiceResponse CreateCloudDriveServiceResponse
     */
    public function createCloudDriveServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->bizType)) {
            $query['BizType'] = $request->bizType;
        }
        if (!Utils::isUnset($request->cdsChargeType)) {
            $query['CdsChargeType'] = $request->cdsChargeType;
        }
        if (!Utils::isUnset($request->cenId)) {
            $query['CenId'] = $request->cenId;
        }
        if (!Utils::isUnset($request->domainName)) {
            $query['DomainName'] = $request->domainName;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->maxSize)) {
            $query['MaxSize'] = $request->maxSize;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->officeSiteType)) {
            $query['OfficeSiteType'] = $request->officeSiteType;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->solutionId)) {
            $query['SolutionId'] = $request->solutionId;
        }
        if (!Utils::isUnset($request->userCount)) {
            $query['UserCount'] = $request->userCount;
        }
        if (!Utils::isUnset($request->userMaxSize)) {
            $query['UserMaxSize'] = $request->userMaxSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCloudDriveService',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCloudDriveServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a cloud disk.
     *  *
     * @param CreateCloudDriveServiceRequest $request CreateCloudDriveServiceRequest
     *
     * @return CreateCloudDriveServiceResponse CreateCloudDriveServiceResponse
     */
    public function createCloudDriveService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCloudDriveServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Creates the users of a cloud disk.
     *  *
     * @param CreateCloudDriveUsersRequest $request CreateCloudDriveUsersRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCloudDriveUsersResponse CreateCloudDriveUsersResponse
     */
    public function createCloudDriveUsersWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->userMaxSize)) {
            $query['UserMaxSize'] = $request->userMaxSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCloudDriveUsers',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCloudDriveUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates the users of a cloud disk.
     *  *
     * @param CreateCloudDriveUsersRequest $request CreateCloudDriveUsersRequest
     *
     * @return CreateCloudDriveUsersResponse CreateCloudDriveUsersResponse
     */
    public function createCloudDriveUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCloudDriveUsersWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a cloud computer pool (formerly desktop group).
     *  *
     * @description Before you call this operation to create a desktop group, make sure that the following operations are complete:
     * *   You are familiar with the features, usage limits, and scaling policies of desktop groups. For more information, see [Overview](https://help.aliyun.com/document_detail/290959.html) of desktop groups.
     * *   Resources, such as workspaces, users, desktop templates, and policies, are created.
     *  *
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
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
     * @summary Creates a cloud computer pool (formerly desktop group).
     *  *
     * @description Before you call this operation to create a desktop group, make sure that the following operations are complete:
     * *   You are familiar with the features, usage limits, and scaling policies of desktop groups. For more information, see [Overview](https://help.aliyun.com/document_detail/290959.html) of desktop groups.
     * *   Resources, such as workspaces, users, desktop templates, and policies, are created.
     *  *
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
     * @summary 创建桌面超卖组
     *  *
     * @param CreateDesktopOversoldGroupRequest $request CreateDesktopOversoldGroupRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDesktopOversoldGroupResponse CreateDesktopOversoldGroupResponse
     */
    public function createDesktopOversoldGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->concurrenceCount)) {
            $query['ConcurrenceCount'] = $request->concurrenceCount;
        }
        if (!Utils::isUnset($request->dataDiskSize)) {
            $query['DataDiskSize'] = $request->dataDiskSize;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->desktopType)) {
            $query['DesktopType'] = $request->desktopType;
        }
        if (!Utils::isUnset($request->directoryId)) {
            $query['DirectoryId'] = $request->directoryId;
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
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->oversoldUserCount)) {
            $query['OversoldUserCount'] = $request->oversoldUserCount;
        }
        if (!Utils::isUnset($request->oversoldWarn)) {
            $query['OversoldWarn'] = $request->oversoldWarn;
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
        if (!Utils::isUnset($request->stopDuration)) {
            $query['StopDuration'] = $request->stopDuration;
        }
        if (!Utils::isUnset($request->systemDiskSize)) {
            $query['SystemDiskSize'] = $request->systemDiskSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDesktopOversoldGroup',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDesktopOversoldGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建桌面超卖组
     *  *
     * @param CreateDesktopOversoldGroupRequest $request CreateDesktopOversoldGroupRequest
     *
     * @return CreateDesktopOversoldGroupResponse CreateDesktopOversoldGroupResponse
     */
    public function createDesktopOversoldGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDesktopOversoldGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Creates cloud computers. If you specify end users when you create cloud computers, the cloud computers are assigned to the end users after the cloud computers are created.
     *  *
     * @description Before you create cloud computers, complete the following preparations:
     * *   An office network (formerly called workspace) and users are created. For more information, see:
     *     *   Convenience office network: [CreateSimpleOfficeSite](https://help.aliyun.com/document_detail/215416.html) and [CreateUsers](https://help.aliyun.com/document_detail/437832.html).
     *     *   Active Directory (AD) office network: [CreateADConnectorOfficeSite](https://help.aliyun.com/document_detail/215417.html) and [Create an AD user](https://help.aliyun.com/document_detail/188619.html).
     * *   Make sure a cloud computer template exists. If no cloud computer template exists, call the [CreateBundle](https://help.aliyun.com/document_detail/188883.html) operation to create a template.
     * *   Make sure a policy exists. If no policy exists, call the [CreatePolicyGroup](https://help.aliyun.com/document_detail/188889.html) operation to create a policy.
     * If you want the cloud computers to automatically execute a custom command script, you can use the `UserCommands` field to configure a custom command.
     *  *
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
        if (!Utils::isUnset($request->desktopMemberIp)) {
            $query['DesktopMemberIp'] = $request->desktopMemberIp;
        }
        if (!Utils::isUnset($request->desktopName)) {
            $query['DesktopName'] = $request->desktopName;
        }
        if (!Utils::isUnset($request->desktopNameSuffix)) {
            $query['DesktopNameSuffix'] = $request->desktopNameSuffix;
        }
        if (!Utils::isUnset($request->desktopTimers)) {
            $query['DesktopTimers'] = $request->desktopTimers;
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
        if (!Utils::isUnset($request->monthDesktopSetting)) {
            $query['MonthDesktopSetting'] = $request->monthDesktopSetting;
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
     * @summary Creates cloud computers. If you specify end users when you create cloud computers, the cloud computers are assigned to the end users after the cloud computers are created.
     *  *
     * @description Before you create cloud computers, complete the following preparations:
     * *   An office network (formerly called workspace) and users are created. For more information, see:
     *     *   Convenience office network: [CreateSimpleOfficeSite](https://help.aliyun.com/document_detail/215416.html) and [CreateUsers](https://help.aliyun.com/document_detail/437832.html).
     *     *   Active Directory (AD) office network: [CreateADConnectorOfficeSite](https://help.aliyun.com/document_detail/215417.html) and [Create an AD user](https://help.aliyun.com/document_detail/188619.html).
     * *   Make sure a cloud computer template exists. If no cloud computer template exists, call the [CreateBundle](https://help.aliyun.com/document_detail/188883.html) operation to create a template.
     * *   Make sure a policy exists. If no policy exists, call the [CreatePolicyGroup](https://help.aliyun.com/document_detail/188889.html) operation to create a policy.
     * If you want the cloud computers to automatically execute a custom command script, you can use the `UserCommands` field to configure a custom command.
     *  *
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
     * @summary Enables the disk encryption feature and adds the service-linked role that is encrypted by Cloud Drive Service to a Resource Access Management (RAM) user.
     *  *
     * @param CreateDiskEncryptionServiceRequest $request CreateDiskEncryptionServiceRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDiskEncryptionServiceResponse CreateDiskEncryptionServiceResponse
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
     * @summary Enables the disk encryption feature and adds the service-linked role that is encrypted by Cloud Drive Service to a Resource Access Management (RAM) user.
     *  *
     * @param CreateDiskEncryptionServiceRequest $request CreateDiskEncryptionServiceRequest
     *
     * @return CreateDiskEncryptionServiceResponse CreateDiskEncryptionServiceResponse
     */
    public function createDiskEncryptionService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDiskEncryptionServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a custom image based on a deployed cloud computer. Then, you can use the custom image to create cloud computers that have the same configurations. This prevents the repeated settings when you create cloud computers.
     *  *
     * @param CreateImageRequest $request CreateImageRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateImageResponse CreateImageResponse
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
     * @summary Creates a custom image based on a deployed cloud computer. Then, you can use the custom image to create cloud computers that have the same configurations. This prevents the repeated settings when you create cloud computers.
     *  *
     * @param CreateImageRequest $request CreateImageRequest
     *
     * @return CreateImageResponse CreateImageResponse
     */
    public function createImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createImageWithOptions($request, $runtime);
    }

    /**
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
     * @summary Creates a premium bandwidth plan for an office network.
     *  *
     * @param CreateNetworkPackageRequest $request CreateNetworkPackageRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNetworkPackageResponse CreateNetworkPackageResponse
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
     * @summary Creates a premium bandwidth plan for an office network.
     *  *
     * @param CreateNetworkPackageRequest $request CreateNetworkPackageRequest
     *
     * @return CreateNetworkPackageResponse CreateNetworkPackageResponse
     */
    public function createNetworkPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNetworkPackageWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a policy.
     *  *
     * @description A policy is a set of security rules that are used to control security configurations when end users use cloud desktops. A policy contains basic features, such as USB redirection and watermarking, and other features, such as security group control. For more information, see [Policy overview](https://help.aliyun.com/document_detail/189345.html).
     *  *
     * @param CreatePolicyGroupRequest $request CreatePolicyGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreatePolicyGroupResponse CreatePolicyGroupResponse
     */
    public function createPolicyGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->adminAccess)) {
            $query['AdminAccess'] = $request->adminAccess;
        }
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
        if (!Utils::isUnset($request->domainResolveRule)) {
            $query['DomainResolveRule'] = $request->domainResolveRule;
        }
        if (!Utils::isUnset($request->domainResolveRuleType)) {
            $query['DomainResolveRuleType'] = $request->domainResolveRuleType;
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
        if (!Utils::isUnset($request->maxReconnectTime)) {
            $query['MaxReconnectTime'] = $request->maxReconnectTime;
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
        if (!Utils::isUnset($request->recordingUserNotify)) {
            $query['RecordingUserNotify'] = $request->recordingUserNotify;
        }
        if (!Utils::isUnset($request->recordingUserNotifyMessage)) {
            $query['RecordingUserNotifyMessage'] = $request->recordingUserNotifyMessage;
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
        if (!Utils::isUnset($request->watermarkAntiCam)) {
            $query['WatermarkAntiCam'] = $request->watermarkAntiCam;
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
        if (!Utils::isUnset($request->watermarkPower)) {
            $query['WatermarkPower'] = $request->watermarkPower;
        }
        if (!Utils::isUnset($request->watermarkRowAmount)) {
            $query['WatermarkRowAmount'] = $request->watermarkRowAmount;
        }
        if (!Utils::isUnset($request->watermarkSecurity)) {
            $query['WatermarkSecurity'] = $request->watermarkSecurity;
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
     * @summary Creates a policy.
     *  *
     * @description A policy is a set of security rules that are used to control security configurations when end users use cloud desktops. A policy contains basic features, such as USB redirection and watermarking, and other features, such as security group control. For more information, see [Policy overview](https://help.aliyun.com/document_detail/189345.html).
     *  *
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
     * @summary Creates a Resource Access Management (RAM) directory.
     *  *
     * @description Before you create a RAM directory, complete the following preparations:
     * *   Call the `CreateVpc` operation to create a virtual private cloud (VPC) in a region supported by Elastic Desktop Service.
     * *   Call the `CreateVSwitch` operation to create a vSwitch in the VPC. The vSwitch is in a zone that is supported by Elastic Desktop Service. You can call the [DescribeZones](https://help.aliyun.com/document_detail/196648.html) operation to obtain the most recent zone list for a region supported by Elastic Desktop Service
     *  *
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
     * @summary Creates a Resource Access Management (RAM) directory.
     *  *
     * @description Before you create a RAM directory, complete the following preparations:
     * *   Call the `CreateVpc` operation to create a virtual private cloud (VPC) in a region supported by Elastic Desktop Service.
     * *   Call the `CreateVSwitch` operation to create a vSwitch in the VPC. The vSwitch is in a zone that is supported by Elastic Desktop Service. You can call the [DescribeZones](https://help.aliyun.com/document_detail/196648.html) operation to obtain the most recent zone list for a region supported by Elastic Desktop Service
     *  *
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
     * @summary Creates an office network of the convenience account type. Elastic Desktop Service supports the following types of accounts: convenience accounts and enterprise AD accounts.
     *  *
     * @param CreateSimpleOfficeSiteRequest $request CreateSimpleOfficeSiteRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSimpleOfficeSiteResponse CreateSimpleOfficeSiteResponse
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
        if (!Utils::isUnset($request->vpcType)) {
            $query['VpcType'] = $request->vpcType;
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
     * @summary Creates an office network of the convenience account type. Elastic Desktop Service supports the following types of accounts: convenience accounts and enterprise AD accounts.
     *  *
     * @param CreateSimpleOfficeSiteRequest $request CreateSimpleOfficeSiteRequest
     *
     * @return CreateSimpleOfficeSiteResponse CreateSimpleOfficeSiteResponse
     */
    public function createSimpleOfficeSite($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSimpleOfficeSiteWithOptions($request, $runtime);
    }

    /**
     * @summary Create a snapshot for a disk of a cloud computer to back up or restore the data on the disk.
     *  *
     * @description The cloud computer must be in the **Running** or **Stopped** state.
     *  *
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
     * @summary Create a snapshot for a disk of a cloud computer to back up or restore the data on the disk.
     *  *
     * @description The cloud computer must be in the **Running** or **Stopped** state.
     *  *
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
     * @summary Deletes an automatic snapshot policy.
     *  *
     * @param DeleteAutoSnapshotPolicyRequest $request DeleteAutoSnapshotPolicyRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAutoSnapshotPolicyResponse DeleteAutoSnapshotPolicyResponse
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
     * @summary Deletes an automatic snapshot policy.
     *  *
     * @param DeleteAutoSnapshotPolicyRequest $request DeleteAutoSnapshotPolicyRequest
     *
     * @return DeleteAutoSnapshotPolicyResponse DeleteAutoSnapshotPolicyResponse
     */
    public function deleteAutoSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes custom cloud computer templates.
     *  *
     * @param DeleteBundlesRequest $request DeleteBundlesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteBundlesResponse DeleteBundlesResponse
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
     * @summary Deletes custom cloud computer templates.
     *  *
     * @param DeleteBundlesRequest $request DeleteBundlesRequest
     *
     * @return DeleteBundlesResponse DeleteBundlesResponse
     */
    public function deleteBundles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBundlesWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a file from a cloud disk in Cloud Drive Service.
     *  *
     * @param DeleteCdsFileRequest $request DeleteCdsFileRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCdsFileResponse DeleteCdsFileResponse
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
     * @summary Deletes a file from a cloud disk in Cloud Drive Service.
     *  *
     * @param DeleteCdsFileRequest $request DeleteCdsFileRequest
     *
     * @return DeleteCdsFileResponse DeleteCdsFileResponse
     */
    public function deleteCdsFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCdsFileWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes team spaces.
     *  *
     * @param DeleteCloudDriveGroupsRequest $request DeleteCloudDriveGroupsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCloudDriveGroupsResponse DeleteCloudDriveGroupsResponse
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
     * @summary Deletes team spaces.
     *  *
     * @param DeleteCloudDriveGroupsRequest $request DeleteCloudDriveGroupsRequest
     *
     * @return DeleteCloudDriveGroupsResponse DeleteCloudDriveGroupsResponse
     */
    public function deleteCloudDriveGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCloudDriveGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary 删除无影网盘中的终端用户
     *  *
     * @param DeleteCloudDriveUsersRequest $request DeleteCloudDriveUsersRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCloudDriveUsersResponse DeleteCloudDriveUsersResponse
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
     * @summary 删除无影网盘中的终端用户
     *  *
     * @param DeleteCloudDriveUsersRequest $request DeleteCloudDriveUsersRequest
     *
     * @return DeleteCloudDriveUsersResponse DeleteCloudDriveUsersResponse
     */
    public function deleteCloudDriveUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCloudDriveUsersWithOptions($request, $runtime);
    }

    /**
     * @summary Releases a desktop group.
     *  *
     * @description *   Before you delete a desktop group, make sure that cloud desktops in the desktop group are not connected and no users are authorized to use the cloud desktops.
     * *   You cannot delete a subscription desktop group when cloud desktops in the group are in valid period.
     * *   If you delete a pay-as-you-go desktop group, cloud desktops in the group are deleted.
     *  *
     * @param DeleteDesktopGroupRequest $request DeleteDesktopGroupRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDesktopGroupResponse DeleteDesktopGroupResponse
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
     * @summary Releases a desktop group.
     *  *
     * @description *   Before you delete a desktop group, make sure that cloud desktops in the desktop group are not connected and no users are authorized to use the cloud desktops.
     * *   You cannot delete a subscription desktop group when cloud desktops in the group are in valid period.
     * *   If you delete a pay-as-you-go desktop group, cloud desktops in the group are deleted.
     *  *
     * @param DeleteDesktopGroupRequest $request DeleteDesktopGroupRequest
     *
     * @return DeleteDesktopGroupResponse DeleteDesktopGroupResponse
     */
    public function deleteDesktopGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDesktopGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Releases pay-as-you-go cloud computers or expired subscription cloud computers.
     *  *
     * @param DeleteDesktopsRequest $request DeleteDesktopsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDesktopsResponse DeleteDesktopsResponse
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
     * @summary Releases pay-as-you-go cloud computers or expired subscription cloud computers.
     *  *
     * @param DeleteDesktopsRequest $request DeleteDesktopsRequest
     *
     * @return DeleteDesktopsResponse DeleteDesktopsResponse
     */
    public function deleteDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDesktopsWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes trusted devices.
     *  *
     * @description You can call the operation to manage client devices.
     *  *
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
     * @summary Deletes trusted devices.
     *  *
     * @description You can call the operation to manage client devices.
     *  *
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
     * @summary Deletes one or more directories.
     *  *
     * @description You cannot delete a directory that has a cloud computer or is used by a cloud computer.
     *  *
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
     * @summary Deletes one or more directories.
     *  *
     * @description You cannot delete a directory that has a cloud computer or is used by a cloud computer.
     *  *
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
     * @param DeleteEduRoomRequest $request DeleteEduRoomRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEduRoomResponse DeleteEduRoomResponse
     */
    public function deleteEduRoomWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eduRoomId)) {
            $query['EduRoomId'] = $request->eduRoomId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEduRoom',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEduRoomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteEduRoomRequest $request DeleteEduRoomRequest
     *
     * @return DeleteEduRoomResponse DeleteEduRoomResponse
     */
    public function deleteEduRoom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEduRoomWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes one or more custom images.
     *  *
     * @description *   Images include system images and custom images. System images cannot be deleted.
     * *   If an image that you want to delete is referenced by a cloud computer template, call the [DeleteBundles](https://help.aliyun.com/document_detail/436972.html) operation to delete the cloud computer template before you delete the image.
     *  *
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
     * @summary Deletes one or more custom images.
     *  *
     * @description *   Images include system images and custom images. System images cannot be deleted.
     * *   If an image that you want to delete is referenced by a cloud computer template, call the [DeleteBundles](https://help.aliyun.com/document_detail/436972.html) operation to delete the cloud computer template before you delete the image.
     *  *
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
     * @summary Deletes NAS file systems.
     *  *
     * @description Before you delete an Apsara File Storage NAS (NAS) file system, make sure that the data you want to retain is backed up.
     * >Warning: If a NAS file system is deleted, data stored in the NAS file system cannot be restored. Proceed with caution when you delete NAS file systems.
     *  *
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
     * @summary Deletes NAS file systems.
     *  *
     * @description Before you delete an Apsara File Storage NAS (NAS) file system, make sure that the data you want to retain is backed up.
     * >Warning: If a NAS file system is deleted, data stored in the NAS file system cannot be restored. Proceed with caution when you delete NAS file systems.
     *  *
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
     * @summary Deletes one or more premium bandwidth plans.
     *  *
     * @param DeleteNetworkPackagesRequest $request DeleteNetworkPackagesRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNetworkPackagesResponse DeleteNetworkPackagesResponse
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
     * @summary Deletes one or more premium bandwidth plans.
     *  *
     * @param DeleteNetworkPackagesRequest $request DeleteNetworkPackagesRequest
     *
     * @return DeleteNetworkPackagesResponse DeleteNetworkPackagesResponse
     */
    public function deleteNetworkPackages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNetworkPackagesWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes office networks (formerly workspaces).
     *  *
     * @description Before you delete an office network, make sure that the following operations are complete:
     * *   All cloud computers in the office network are released.
     * *   The data that you want to retain is backed up.
     * >  Resources and data on cloud computers in an office network cannot be restored after you delete it. Proceed with caution.
     *  *
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
     * @summary Deletes office networks (formerly workspaces).
     *  *
     * @description Before you delete an office network, make sure that the following operations are complete:
     * *   All cloud computers in the office network are released.
     * *   The data that you want to retain is backed up.
     * >  Resources and data on cloud computers in an office network cannot be restored after you delete it. Proceed with caution.
     *  *
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
     * @summary Deletes one or more custom policies.
     *  *
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
     * @summary Deletes one or more custom policies.
     *  *
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
     * @summary Deletes one or more snapshots.
     *  *
     * @description If the IDs of the snapshots that you specify do not exist, requests are ignored.
     *  *
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
     * @summary Deletes one or more snapshots.
     *  *
     * @description If the IDs of the snapshots that you specify do not exist, requests are ignored.
     *  *
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
     * @summary Delete virtual multi-factor authentication (MFA) devices.
     *  *
     * @description If an MFA device is deleted, the device is unbound, reset, and disabled. When an Active Directory (AD) user wants to connect to the cloud desktop that is bound to the MFA device, the AD user must bind a new MFA device.
     *  *
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
     * @summary Delete virtual multi-factor authentication (MFA) devices.
     *  *
     * @description If an MFA device is deleted, the device is unbound, reset, and disabled. When an Active Directory (AD) user wants to connect to the cloud desktop that is bound to the MFA device, the AD user must bind a new MFA device.
     *  *
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
     * @summary Queries the details of an access control list (ACL) of an office network or a cloud computer.
     *  *
     * @param DescribeAclEntriesRequest $request DescribeAclEntriesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAclEntriesResponse DescribeAclEntriesResponse
     */
    public function describeAclEntriesWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->sourceId)) {
            $query['SourceId'] = $request->sourceId;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAclEntries',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAclEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of an access control list (ACL) of an office network or a cloud computer.
     *  *
     * @param DescribeAclEntriesRequest $request DescribeAclEntriesRequest
     *
     * @return DescribeAclEntriesResponse DescribeAclEntriesResponse
     */
    public function describeAclEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAclEntriesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the automatic snapshot policy.
     *  *
     * @description You can view an automatic snapshot policy that is associated with a cloud desktop in the Elastic Desktop Service (EDS) console. To view the automatic snapshot policy, you can go to the EDS console, choose Deployment > Snapshots in the left-side navigation pane, and then view an automatic snapshot policy on the Snapshots page.
     *  *
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
     * @summary Queries the automatic snapshot policy.
     *  *
     * @description You can view an automatic snapshot policy that is associated with a cloud desktop in the Elastic Desktop Service (EDS) console. To view the automatic snapshot policy, you can go to the EDS console, choose Deployment > Snapshots in the left-side navigation pane, and then view an automatic snapshot policy on the Snapshots page.
     *  *
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
     * @summary Queries the details of cloud computer templates.
     *  *
     * @param DescribeBundlesRequest $request DescribeBundlesRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBundlesResponse DescribeBundlesResponse
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
        if (!Utils::isUnset($request->osType)) {
            $query['OsType'] = $request->osType;
        }
        if (!Utils::isUnset($request->protocolType)) {
            $query['ProtocolType'] = $request->protocolType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->scope)) {
            $query['Scope'] = $request->scope;
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
     * @summary Queries the details of cloud computer templates.
     *  *
     * @param DescribeBundlesRequest $request DescribeBundlesRequest
     *
     * @return DescribeBundlesResponse DescribeBundlesResponse
     */
    public function describeBundles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBundlesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries file sharing links of a cloud disk in Cloud Drive Service.
     *  *
     * @param DescribeCdsFileShareLinksRequest $request DescribeCdsFileShareLinksRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCdsFileShareLinksResponse DescribeCdsFileShareLinksResponse
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
     * @summary Queries file sharing links of a cloud disk in Cloud Drive Service.
     *  *
     * @param DescribeCdsFileShareLinksRequest $request DescribeCdsFileShareLinksRequest
     *
     * @return DescribeCdsFileShareLinksResponse DescribeCdsFileShareLinksResponse
     */
    public function describeCdsFileShareLinks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCdsFileShareLinksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of all Cloud Enterprise Network (CEN) instances within an Alibaba Cloud account.
     *  *
     * @param DescribeCensRequest $request DescribeCensRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCensResponse DescribeCensResponse
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
     * @summary Queries the details of all Cloud Enterprise Network (CEN) instances within an Alibaba Cloud account.
     *  *
     * @param DescribeCensRequest $request DescribeCensRequest
     *
     * @return DescribeCensResponse DescribeCensResponse
     */
    public function describeCens($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCensWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the operation logs of end users. For example, the logs record the events that end users start and stop cloud desktops, and disconnect desktop sessions.
     *  *
     * @description You can audit the operation logs of regular users to improve security. The operation logs record events such as desktop startup, shutdown, and session disconnection.
     *  *
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
     * @summary Queries the operation logs of end users. For example, the logs record the events that end users start and stop cloud desktops, and disconnect desktop sessions.
     *  *
     * @description You can audit the operation logs of regular users to improve security. The operation logs record events such as desktop startup, shutdown, and session disconnection.
     *  *
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
     * @summary Queries a list of authorized team spaces.
     *  *
     * @param DescribeCloudDriveGroupsRequest $request DescribeCloudDriveGroupsRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCloudDriveGroupsResponse DescribeCloudDriveGroupsResponse
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
     * @summary Queries a list of authorized team spaces.
     *  *
     * @param DescribeCloudDriveGroupsRequest $request DescribeCloudDriveGroupsRequest
     *
     * @return DescribeCloudDriveGroupsResponse DescribeCloudDriveGroupsResponse
     */
    public function describeCloudDriveGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudDriveGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询pds用户权限
     *  *
     * @param DescribeCloudDrivePermissionsRequest $request DescribeCloudDrivePermissionsRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCloudDrivePermissionsResponse DescribeCloudDrivePermissionsResponse
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
     * @summary 查询pds用户权限
     *  *
     * @param DescribeCloudDrivePermissionsRequest $request DescribeCloudDrivePermissionsRequest
     *
     * @return DescribeCloudDrivePermissionsResponse DescribeCloudDrivePermissionsResponse
     */
    public function describeCloudDrivePermissions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudDrivePermissionsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询所有无影网盘终端用户的信息
     *  *
     * @param DescribeCloudDriveUsersRequest $request DescribeCloudDriveUsersRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCloudDriveUsersResponse DescribeCloudDriveUsersResponse
     */
    public function describeCloudDriveUsersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cdsId)) {
            $query['CdsId'] = $request->cdsId;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
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
            'action'      => 'DescribeCloudDriveUsers',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCloudDriveUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询所有无影网盘终端用户的信息
     *  *
     * @param DescribeCloudDriveUsersRequest $request DescribeCloudDriveUsersRequest
     *
     * @return DescribeCloudDriveUsersResponse DescribeCloudDriveUsersResponse
     */
    public function describeCloudDriveUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudDriveUsersWithOptions($request, $runtime);
    }

    /**
     * @param DescribeCustomizedListHeadersRequest $request DescribeCustomizedListHeadersRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCustomizedListHeadersResponse DescribeCustomizedListHeadersResponse
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
     * @param DescribeCustomizedListHeadersRequest $request DescribeCustomizedListHeadersRequest
     *
     * @return DescribeCustomizedListHeadersResponse DescribeCustomizedListHeadersResponse
     */
    public function describeCustomizedListHeaders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCustomizedListHeadersWithOptions($request, $runtime);
    }

    /**
     * @summary Queries sessions in a desktop group.
     *  *
     * @param DescribeDesktopGroupSessionsRequest $request DescribeDesktopGroupSessionsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDesktopGroupSessionsResponse DescribeDesktopGroupSessionsResponse
     */
    public function describeDesktopGroupSessionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->ownType)) {
            $query['OwnType'] = $request->ownType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sessionStatus)) {
            $query['SessionStatus'] = $request->sessionStatus;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDesktopGroupSessions',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDesktopGroupSessionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries sessions in a desktop group.
     *  *
     * @param DescribeDesktopGroupSessionsRequest $request DescribeDesktopGroupSessionsRequest
     *
     * @return DescribeDesktopGroupSessionsResponse DescribeDesktopGroupSessionsResponse
     */
    public function describeDesktopGroupSessions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDesktopGroupSessionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of desktop groups.
     *  *
     * @param DescribeDesktopGroupsRequest $request DescribeDesktopGroupsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDesktopGroupsResponse DescribeDesktopGroupsResponse
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
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
     * @summary Queries a list of desktop groups.
     *  *
     * @param DescribeDesktopGroupsRequest $request DescribeDesktopGroupsRequest
     *
     * @return DescribeDesktopGroupsResponse DescribeDesktopGroupsResponse
     */
    public function describeDesktopGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDesktopGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the basic information about cloud computers.
     *  *
     * @param DescribeDesktopInfoRequest $request DescribeDesktopInfoRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDesktopInfoResponse DescribeDesktopInfoResponse
     */
    public function describeDesktopInfoWithOptions($request, $runtime)
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
            'action'      => 'DescribeDesktopInfo',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDesktopInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the basic information about cloud computers.
     *  *
     * @param DescribeDesktopInfoRequest $request DescribeDesktopInfoRequest
     *
     * @return DescribeDesktopInfoResponse DescribeDesktopInfoResponse
     */
    public function describeDesktopInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDesktopInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 查询超卖组
     *  *
     * @param DescribeDesktopOversoldGroupRequest $request DescribeDesktopOversoldGroupRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDesktopOversoldGroupResponse DescribeDesktopOversoldGroupResponse
     */
    public function describeDesktopOversoldGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->oversoldGroupIds)) {
            $query['OversoldGroupIds'] = $request->oversoldGroupIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDesktopOversoldGroup',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDesktopOversoldGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询超卖组
     *  *
     * @param DescribeDesktopOversoldGroupRequest $request DescribeDesktopOversoldGroupRequest
     *
     * @return DescribeDesktopOversoldGroupResponse DescribeDesktopOversoldGroupResponse
     */
    public function describeDesktopOversoldGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDesktopOversoldGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 查询超卖组用户
     *  *
     * @param DescribeDesktopOversoldUserRequest $request DescribeDesktopOversoldUserRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDesktopOversoldUserResponse DescribeDesktopOversoldUserResponse
     */
    public function describeDesktopOversoldUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clientToken)) {
            $query['ClientToken'] = $request->clientToken;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->oversoldGroupId)) {
            $query['OversoldGroupId'] = $request->oversoldGroupId;
        }
        if (!Utils::isUnset($request->userDesktopIds)) {
            $query['UserDesktopIds'] = $request->userDesktopIds;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDesktopOversoldUser',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDesktopOversoldUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询超卖组用户
     *  *
     * @param DescribeDesktopOversoldUserRequest $request DescribeDesktopOversoldUserRequest
     *
     * @return DescribeDesktopOversoldUserResponse DescribeDesktopOversoldUserResponse
     */
    public function describeDesktopOversoldUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDesktopOversoldUserWithOptions($request, $runtime);
    }

    /**
     * @summary 查询超卖用户组
     *  *
     * @param DescribeDesktopOversoldUserGroupRequest $request DescribeDesktopOversoldUserGroupRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDesktopOversoldUserGroupResponse DescribeDesktopOversoldUserGroupResponse
     */
    public function describeDesktopOversoldUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->oversoldGroupId)) {
            $query['OversoldGroupId'] = $request->oversoldGroupId;
        }
        if (!Utils::isUnset($request->userGroupIds)) {
            $query['UserGroupIds'] = $request->userGroupIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDesktopOversoldUserGroup',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDesktopOversoldUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询超卖用户组
     *  *
     * @param DescribeDesktopOversoldUserGroupRequest $request DescribeDesktopOversoldUserGroupRequest
     *
     * @return DescribeDesktopOversoldUserGroupResponse DescribeDesktopOversoldUserGroupResponse
     */
    public function describeDesktopOversoldUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDesktopOversoldUserGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the detailed session information of a cloud computer.
     *  *
     * @description You can only query data within the last 30 days.
     *  *
     * @param DescribeDesktopSessionsRequest $request DescribeDesktopSessionsRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDesktopSessionsResponse DescribeDesktopSessionsResponse
     */
    public function describeDesktopSessionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->checkOsSession)) {
            $query['CheckOsSession'] = $request->checkOsSession;
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
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
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
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sessionStatus)) {
            $query['SessionStatus'] = $request->sessionStatus;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->subPayType)) {
            $query['SubPayType'] = $request->subPayType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDesktopSessions',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDesktopSessionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the detailed session information of a cloud computer.
     *  *
     * @description You can only query data within the last 30 days.
     *  *
     * @param DescribeDesktopSessionsRequest $request DescribeDesktopSessionsRequest
     *
     * @return DescribeDesktopSessionsResponse DescribeDesktopSessionsResponse
     */
    public function describeDesktopSessions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDesktopSessionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the instance types of cloud computers.
     *  *
     * @description When no values are specified for the `InstanceTypeFamily` and `DesktopTypeId` parameters for a cloud desktop, all types of cloud desktops are queried.
     *  *
     * @param DescribeDesktopTypesRequest $request DescribeDesktopTypesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDesktopTypesResponse DescribeDesktopTypesResponse
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
        if (!Utils::isUnset($request->desktopGroupIdForModify)) {
            $query['DesktopGroupIdForModify'] = $request->desktopGroupIdForModify;
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
     * @summary Queries the instance types of cloud computers.
     *  *
     * @description When no values are specified for the `InstanceTypeFamily` and `DesktopTypeId` parameters for a cloud desktop, all types of cloud desktops are queried.
     *  *
     * @param DescribeDesktopTypesRequest $request DescribeDesktopTypesRequest
     *
     * @return DescribeDesktopTypesResponse DescribeDesktopTypesResponse
     */
    public function describeDesktopTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDesktopTypesWithOptions($request, $runtime);
    }

    /**
     * @summary Query the details of the cloud desktop.
     *  *
     * @param DescribeDesktopsRequest $request DescribeDesktopsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDesktopsResponse DescribeDesktopsResponse
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
        if (!Utils::isUnset($request->desktopStatusList)) {
            $query['DesktopStatusList'] = $request->desktopStatusList;
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
        if (!Utils::isUnset($request->fillResourceGroup)) {
            $query['FillResourceGroup'] = $request->fillResourceGroup;
        }
        if (!Utils::isUnset($request->filterDesktopGroup)) {
            $query['FilterDesktopGroup'] = $request->filterDesktopGroup;
        }
        if (!Utils::isUnset($request->gpuInstanceGroupId)) {
            $query['GpuInstanceGroupId'] = $request->gpuInstanceGroupId;
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
        if (!Utils::isUnset($request->qosRuleId)) {
            $query['QosRuleId'] = $request->qosRuleId;
        }
        if (!Utils::isUnset($request->queryFotaUpdate)) {
            $query['QueryFotaUpdate'] = $request->queryFotaUpdate;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->snapshotPolicyId)) {
            $query['SnapshotPolicyId'] = $request->snapshotPolicyId;
        }
        if (!Utils::isUnset($request->subPayType)) {
            $query['SubPayType'] = $request->subPayType;
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
     * @summary Query the details of the cloud desktop.
     *  *
     * @param DescribeDesktopsRequest $request DescribeDesktopsRequest
     *
     * @return DescribeDesktopsResponse DescribeDesktopsResponse
     */
    public function describeDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDesktopsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the cloud computers in a cloud computer pool by billing method.
     *  *
     * @param DescribeDesktopsInGroupRequest $request DescribeDesktopsInGroupRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDesktopsInGroupResponse DescribeDesktopsInGroupResponse
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
     * @summary Queries the cloud computers in a cloud computer pool by billing method.
     *  *
     * @param DescribeDesktopsInGroupRequest $request DescribeDesktopsInGroupRequest
     *
     * @return DescribeDesktopsInGroupResponse DescribeDesktopsInGroupResponse
     */
    public function describeDesktopsInGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDesktopsInGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the list of trusted devices.
     *  *
     * @param DescribeDevicesRequest $request DescribeDevicesRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDevicesResponse DescribeDevicesResponse
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
     * @summary Queries the list of trusted devices.
     *  *
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
     * @summary Queries the details of directories.
     *  *
     * @param DescribeDirectoriesRequest $request DescribeDirectoriesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDirectoriesResponse DescribeDirectoriesResponse
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
     * @summary Queries the details of directories.
     *  *
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
     * @param DescribeFlowMetricRequest $request DescribeFlowMetricRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFlowMetricResponse DescribeFlowMetricResponse
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
     * @param DescribeFlowMetricRequest $request DescribeFlowMetricRequest
     *
     * @return DescribeFlowMetricResponse DescribeFlowMetricResponse
     */
    public function describeFlowMetric($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowMetricWithOptions($request, $runtime);
    }

    /**
     * @summary Queries cloud computer-level traffic statistics of a single office network.
     *  *
     * @description > You can query only the traffic data in the last 90 days.
     *  *
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
     * @summary Queries cloud computer-level traffic statistics of a single office network.
     *  *
     * @description > You can query only the traffic data in the last 90 days.
     *  *
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
     * @summary Queries information about the cloud computers whose images can be and are pending to be updated to the specified version.
     *  *
     * @param DescribeFotaPendingDesktopsRequest $request DescribeFotaPendingDesktopsRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFotaPendingDesktopsResponse DescribeFotaPendingDesktopsResponse
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
     * @summary Queries information about the cloud computers whose images can be and are pending to be updated to the specified version.
     *  *
     * @param DescribeFotaPendingDesktopsRequest $request DescribeFotaPendingDesktopsRequest
     *
     * @return DescribeFotaPendingDesktopsResponse DescribeFotaPendingDesktopsResponse
     */
    public function describeFotaPendingDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFotaPendingDesktopsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of update tasks.
     *  *
     * @param DescribeFotaTasksRequest $request DescribeFotaTasksRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFotaTasksResponse DescribeFotaTasksResponse
     */
    public function describeFotaTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->fotaStatus)) {
            $query['FotaStatus'] = $request->fotaStatus;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
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
     * @summary Queries a list of update tasks.
     *  *
     * @param DescribeFotaTasksRequest $request DescribeFotaTasksRequest
     *
     * @return DescribeFotaTasksResponse DescribeFotaTasksResponse
     */
    public function describeFotaTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFotaTasksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the applications and their processes of an end user.
     *  *
     * @param DescribeGuestApplicationsRequest $request DescribeGuestApplicationsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeGuestApplicationsResponse DescribeGuestApplicationsResponse
     */
    public function describeGuestApplicationsWithOptions($request, $runtime)
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
            'action'      => 'DescribeGuestApplications',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeGuestApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the applications and their processes of an end user.
     *  *
     * @param DescribeGuestApplicationsRequest $request DescribeGuestApplicationsRequest
     *
     * @return DescribeGuestApplicationsResponse DescribeGuestApplicationsResponse
     */
    public function describeGuestApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGuestApplicationsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the image modification records of cloud computers.
     *  *
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
     * @summary Queries the image modification records of cloud computers.
     *  *
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
     * @summary Queries the recipient Alibaba Cloud accounts with which an image is shared.
     *  *
     * @description You can call the [ModifyImagePermission](https://help.aliyun.com/document_detail/436982.html) operation to share an image with another cloud computer user or unshare an image. You can call the DescribeImagePermission operation to obtain the Alibaba Cloud accounts with which the current image is shared.
     *  *
     * @param DescribeImagePermissionRequest $request DescribeImagePermissionRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeImagePermissionResponse DescribeImagePermissionResponse
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
     * @summary Queries the recipient Alibaba Cloud accounts with which an image is shared.
     *  *
     * @description You can call the [ModifyImagePermission](https://help.aliyun.com/document_detail/436982.html) operation to share an image with another cloud computer user or unshare an image. You can call the DescribeImagePermission operation to obtain the Alibaba Cloud accounts with which the current image is shared.
     *  *
     * @param DescribeImagePermissionRequest $request DescribeImagePermissionRequest
     *
     * @return DescribeImagePermissionResponse DescribeImagePermissionResponse
     */
    public function describeImagePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImagePermissionWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about images.
     *  *
     * @param DescribeImagesRequest $request DescribeImagesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeImagesResponse DescribeImagesResponse
     */
    public function describeImagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->desktopInstanceType)) {
            $query['DesktopInstanceType'] = $request->desktopInstanceType;
        }
        if (!Utils::isUnset($request->fotaVersion)) {
            $query['FotaVersion'] = $request->fotaVersion;
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
        if (!Utils::isUnset($request->imageName)) {
            $query['ImageName'] = $request->imageName;
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
     * @summary Queries the information about images.
     *  *
     * @param DescribeImagesRequest $request DescribeImagesRequest
     *
     * @return DescribeImagesResponse DescribeImagesResponse
     */
    public function describeImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImagesWithOptions($request, $runtime);
    }

    /**
     * @description *   After you run a command, it may not succeed. You can call this operation to query the execution result.
     * *   You can query the information about execution in the last two weeks. A maximum of 100,000 lines of execution information can be retained.
     *  *
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
     * @description *   After you run a command, it may not succeed. You can call this operation to query the execution result.
     * *   You can query the information about execution in the last two weeks. A maximum of 100,000 lines of execution information can be retained.
     *  *
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
     * @summary Queries Key Management Service (KMS) keys of users. The first time you call this operation, you can try to create a service key for Elastic Desktop Service (EDS) and call the operation to return results.
     *  *
     * @param DescribeKmsKeysRequest $request DescribeKmsKeysRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeKmsKeysResponse DescribeKmsKeysResponse
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
     * @summary Queries Key Management Service (KMS) keys of users. The first time you call this operation, you can try to create a service key for Elastic Desktop Service (EDS) and call the operation to return results.
     *  *
     * @param DescribeKmsKeysRequest $request DescribeKmsKeysRequest
     *
     * @return DescribeKmsKeysResponse DescribeKmsKeysResponse
     */
    public function describeKmsKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeKmsKeysWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about Apsara File Storage NAS (NAS) file systems.
     *  *
     * @param DescribeNASFileSystemsRequest $request DescribeNASFileSystemsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNASFileSystemsResponse DescribeNASFileSystemsResponse
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
     * @summary Queries the information about Apsara File Storage NAS (NAS) file systems.
     *  *
     * @param DescribeNASFileSystemsRequest $request DescribeNASFileSystemsRequest
     *
     * @return DescribeNASFileSystemsResponse DescribeNASFileSystemsResponse
     */
    public function describeNASFileSystems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNASFileSystemsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of one or more premium bandwidth plans.
     *  *
     * @param DescribeNetworkPackagesRequest $request DescribeNetworkPackagesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNetworkPackagesResponse DescribeNetworkPackagesResponse
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
     * @summary Queries the details of one or more premium bandwidth plans.
     *  *
     * @param DescribeNetworkPackagesRequest $request DescribeNetworkPackagesRequest
     *
     * @return DescribeNetworkPackagesResponse DescribeNetworkPackagesResponse
     */
    public function describeNetworkPackages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworkPackagesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries office network properties, including office network ID, name, status, and creation time.
     *  *
     * @param DescribeOfficeSitesRequest $request DescribeOfficeSitesRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeOfficeSitesResponse DescribeOfficeSitesResponse
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
        if (!Utils::isUnset($request->securityProtection)) {
            $query['SecurityProtection'] = $request->securityProtection;
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
     * @summary Queries office network properties, including office network ID, name, status, and creation time.
     *  *
     * @param DescribeOfficeSitesRequest $request DescribeOfficeSitesRequest
     *
     * @return DescribeOfficeSitesResponse DescribeOfficeSitesResponse
     */
    public function describeOfficeSites($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeOfficeSitesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about one or more policies.
     *  *
     * @param DescribePolicyGroupsRequest $request DescribePolicyGroupsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePolicyGroupsResponse DescribePolicyGroupsResponse
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
     * @summary Queries the information about one or more policies.
     *  *
     * @param DescribePolicyGroupsRequest $request DescribePolicyGroupsRequest
     *
     * @return DescribePolicyGroupsResponse DescribePolicyGroupsResponse
     */
    public function describePolicyGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePolicyGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the price information of desktop resources in Elastic Desktop Service (EDS).
     *  *
     * @description ## Usage notes
     * The request parameters vary based on the type of desktop resources whose price you want to query. Take note of the following items:
     * *   If you set ResourceType to OfficeSite, you must specify InstanceType.
     * *   If you set ResourceType to Bandwidth, the pay-by-data-transfer metering method is used for network billing.
     * *   If you set ResourceType to Desktop, you must specify InstanceType, RootDiskSizeGib, and UserDiskSizeGib. You can specify OsType, PeriodUnit, Period, and Amount based on your business requirements.
     * > Before you call this operation to query the prices of cloud desktops by setting ResourceType to Desktop, you must know the desktop types and disk sizes that EDS provides. The disk sizes vary based on the desktop types. For more information, see [Cloud desktop types](https://help.aliyun.com/document_detail/188609.html).
     *  *
     * @param DescribePriceRequest $request DescribePriceRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePriceResponse DescribePriceResponse
     */
    public function describePriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->amount)) {
            $query['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->bundleModels)) {
            $query['BundleModels'] = $request->bundleModels;
        }
        if (!Utils::isUnset($request->eduCdsEnable)) {
            $query['EduCdsEnable'] = $request->eduCdsEnable;
        }
        if (!Utils::isUnset($request->eduCdsSize)) {
            $query['EduCdsSize'] = $request->eduCdsSize;
        }
        if (!Utils::isUnset($request->eduCommittedTime)) {
            $query['EduCommittedTime'] = $request->eduCommittedTime;
        }
        if (!Utils::isUnset($request->eduDesktopBundleId)) {
            $query['EduDesktopBundleId'] = $request->eduDesktopBundleId;
        }
        if (!Utils::isUnset($request->eduDesktopNum)) {
            $query['EduDesktopNum'] = $request->eduDesktopNum;
        }
        if (!Utils::isUnset($request->eduRoomClassify)) {
            $query['EduRoomClassify'] = $request->eduRoomClassify;
        }
        if (!Utils::isUnset($request->eduStudentBundleId)) {
            $query['EduStudentBundleId'] = $request->eduStudentBundleId;
        }
        if (!Utils::isUnset($request->eduStudentNum)) {
            $query['EduStudentNum'] = $request->eduStudentNum;
        }
        if (!Utils::isUnset($request->eduTeacherBundleId)) {
            $query['EduTeacherBundleId'] = $request->eduTeacherBundleId;
        }
        if (!Utils::isUnset($request->eduTeacherNum)) {
            $query['EduTeacherNum'] = $request->eduTeacherNum;
        }
        if (!Utils::isUnset($request->groupDesktopCount)) {
            $query['GroupDesktopCount'] = $request->groupDesktopCount;
        }
        if (!Utils::isUnset($request->hardwareVersion)) {
            $query['HardwareVersion'] = $request->hardwareVersion;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->internetChargeType)) {
            $query['InternetChargeType'] = $request->internetChargeType;
        }
        if (!Utils::isUnset($request->networkType)) {
            $query['NetworkType'] = $request->networkType;
        }
        if (!Utils::isUnset($request->osType)) {
            $query['OsType'] = $request->osType;
        }
        if (!Utils::isUnset($request->packageSize)) {
            $query['PackageSize'] = $request->packageSize;
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
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->rootDiskPerformanceLevel)) {
            $query['RootDiskPerformanceLevel'] = $request->rootDiskPerformanceLevel;
        }
        if (!Utils::isUnset($request->rootDiskSizeGib)) {
            $query['RootDiskSizeGib'] = $request->rootDiskSizeGib;
        }
        if (!Utils::isUnset($request->spPeriodInfo)) {
            $query['SpPeriodInfo'] = $request->spPeriodInfo;
        }
        if (!Utils::isUnset($request->spPrice)) {
            $query['SpPrice'] = $request->spPrice;
        }
        if (!Utils::isUnset($request->spType)) {
            $query['SpType'] = $request->spType;
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
            'action'      => 'DescribePrice',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the price information of desktop resources in Elastic Desktop Service (EDS).
     *  *
     * @description ## Usage notes
     * The request parameters vary based on the type of desktop resources whose price you want to query. Take note of the following items:
     * *   If you set ResourceType to OfficeSite, you must specify InstanceType.
     * *   If you set ResourceType to Bandwidth, the pay-by-data-transfer metering method is used for network billing.
     * *   If you set ResourceType to Desktop, you must specify InstanceType, RootDiskSizeGib, and UserDiskSizeGib. You can specify OsType, PeriodUnit, Period, and Amount based on your business requirements.
     * > Before you call this operation to query the prices of cloud desktops by setting ResourceType to Desktop, you must know the desktop types and disk sizes that EDS provides. The disk sizes vary based on the desktop types. For more information, see [Cloud desktop types](https://help.aliyun.com/document_detail/188609.html).
     *  *
     * @param DescribePriceRequest $request DescribePriceRequest
     *
     * @return DescribePriceResponse DescribePriceResponse
     */
    public function describePrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePriceWithOptions($request, $runtime);
    }

    /**
     * @summary 查询价格用于创建超卖组
     *  *
     * @param DescribePriceForCreateDesktopOversoldGroupRequest $request DescribePriceForCreateDesktopOversoldGroupRequest
     * @param RuntimeOptions                                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePriceForCreateDesktopOversoldGroupResponse DescribePriceForCreateDesktopOversoldGroupResponse
     */
    public function describePriceForCreateDesktopOversoldGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->concurrenceCount)) {
            $query['ConcurrenceCount'] = $request->concurrenceCount;
        }
        if (!Utils::isUnset($request->dataDiskSize)) {
            $query['DataDiskSize'] = $request->dataDiskSize;
        }
        if (!Utils::isUnset($request->desktopType)) {
            $query['DesktopType'] = $request->desktopType;
        }
        if (!Utils::isUnset($request->oversoldUserCount)) {
            $query['OversoldUserCount'] = $request->oversoldUserCount;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->systemDiskSize)) {
            $query['SystemDiskSize'] = $request->systemDiskSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePriceForCreateDesktopOversoldGroup',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePriceForCreateDesktopOversoldGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询价格用于创建超卖组
     *  *
     * @param DescribePriceForCreateDesktopOversoldGroupRequest $request DescribePriceForCreateDesktopOversoldGroupRequest
     *
     * @return DescribePriceForCreateDesktopOversoldGroupResponse DescribePriceForCreateDesktopOversoldGroupResponse
     */
    public function describePriceForCreateDesktopOversoldGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePriceForCreateDesktopOversoldGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 查询价格用于变配超卖组
     *  *
     * @param DescribePriceForModifyDesktopOversoldGroupSaleRequest $request DescribePriceForModifyDesktopOversoldGroupSaleRequest
     * @param RuntimeOptions                                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePriceForModifyDesktopOversoldGroupSaleResponse DescribePriceForModifyDesktopOversoldGroupSaleResponse
     */
    public function describePriceForModifyDesktopOversoldGroupSaleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->concurrenceCount)) {
            $query['ConcurrenceCount'] = $request->concurrenceCount;
        }
        if (!Utils::isUnset($request->oversoldGroupId)) {
            $query['OversoldGroupId'] = $request->oversoldGroupId;
        }
        if (!Utils::isUnset($request->oversoldUserCount)) {
            $query['OversoldUserCount'] = $request->oversoldUserCount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePriceForModifyDesktopOversoldGroupSale',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePriceForModifyDesktopOversoldGroupSaleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询价格用于变配超卖组
     *  *
     * @param DescribePriceForModifyDesktopOversoldGroupSaleRequest $request DescribePriceForModifyDesktopOversoldGroupSaleRequest
     *
     * @return DescribePriceForModifyDesktopOversoldGroupSaleResponse DescribePriceForModifyDesktopOversoldGroupSaleResponse
     */
    public function describePriceForModifyDesktopOversoldGroupSale($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePriceForModifyDesktopOversoldGroupSaleWithOptions($request, $runtime);
    }

    /**
     * @summary 查询价格用于续费超卖组
     *  *
     * @param DescribePriceForRenewDesktopOversoldGroupRequest $request DescribePriceForRenewDesktopOversoldGroupRequest
     * @param RuntimeOptions                                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePriceForRenewDesktopOversoldGroupResponse DescribePriceForRenewDesktopOversoldGroupResponse
     */
    public function describePriceForRenewDesktopOversoldGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->oversoldGroupId)) {
            $query['OversoldGroupId'] = $request->oversoldGroupId;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePriceForRenewDesktopOversoldGroup',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePriceForRenewDesktopOversoldGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询价格用于续费超卖组
     *  *
     * @param DescribePriceForRenewDesktopOversoldGroupRequest $request DescribePriceForRenewDesktopOversoldGroupRequest
     *
     * @return DescribePriceForRenewDesktopOversoldGroupResponse DescribePriceForRenewDesktopOversoldGroupResponse
     */
    public function describePriceForRenewDesktopOversoldGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePriceForRenewDesktopOversoldGroupWithOptions($request, $runtime);
    }

    /**
     * @param DescribeRecordingsRequest $request DescribeRecordingsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRecordingsResponse DescribeRecordingsResponse
     */
    public function describeRecordingsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->needSignedUrl)) {
            $query['NeedSignedUrl'] = $request->needSignedUrl;
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
        if (!Utils::isUnset($request->signedUrlExpireMinutes)) {
            $query['SignedUrlExpireMinutes'] = $request->signedUrlExpireMinutes;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRecordings',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRecordingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeRecordingsRequest $request DescribeRecordingsRequest
     *
     * @return DescribeRecordingsResponse DescribeRecordingsResponse
     */
    public function describeRecordings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecordingsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the Alibaba Cloud regions that are available for Elastic Desktop Service (EDS).
     *  *
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
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
     * @summary Queries the Alibaba Cloud regions that are available for Elastic Desktop Service (EDS).
     *  *
     * @param DescribeRegionsRequest $request DescribeRegionsRequest
     *
     * @return DescribeRegionsResponse DescribeRegionsResponse
     */
    public function describeRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the session statistics of a region.
     *  *
     * @description *   This is a central operation and can be called only by using services in the China (Shanghai) region.
     * *   You can query session statistics for the past hour.
     *  *
     * @param DescribeSessionStatisticRequest $request DescribeSessionStatisticRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSessionStatisticResponse DescribeSessionStatisticResponse
     */
    public function describeSessionStatisticWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->officeSiteId)) {
            $query['OfficeSiteId'] = $request->officeSiteId;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->searchRegionId)) {
            $query['SearchRegionId'] = $request->searchRegionId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSessionStatistic',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSessionStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the session statistics of a region.
     *  *
     * @description *   This is a central operation and can be called only by using services in the China (Shanghai) region.
     * *   You can query session statistics for the past hour.
     *  *
     * @param DescribeSessionStatisticRequest $request DescribeSessionStatisticRequest
     *
     * @return DescribeSessionStatisticResponse DescribeSessionStatisticResponse
     */
    public function describeSessionStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSessionStatisticWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the snapshots that are created based on a cloud computer and the details of the snapshots.
     *  *
     * @param DescribeSnapshotsRequest $request DescribeSnapshotsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSnapshotsResponse DescribeSnapshotsResponse
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
     * @summary Queries the snapshots that are created based on a cloud computer and the details of the snapshots.
     *  *
     * @param DescribeSnapshotsRequest $request DescribeSnapshotsRequest
     *
     * @return DescribeSnapshotsResponse DescribeSnapshotsResponse
     */
    public function describeSnapshots($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSnapshotsWithOptions($request, $runtime);
    }

    /**
     * @summary 查询超卖组中用户连接数据
     *  *
     * @param DescribeUserConnectTimeRequest $request DescribeUserConnectTimeRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserConnectTimeResponse DescribeUserConnectTimeResponse
     */
    public function describeUserConnectTimeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->oversoldGroupId)) {
            $query['OversoldGroupId'] = $request->oversoldGroupId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->userDesktopId)) {
            $query['UserDesktopId'] = $request->userDesktopId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserConnectTime',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserConnectTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询超卖组中用户连接数据
     *  *
     * @param DescribeUserConnectTimeRequest $request DescribeUserConnectTimeRequest
     *
     * @return DescribeUserConnectTimeResponse DescribeUserConnectTimeResponse
     */
    public function describeUserConnectTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserConnectTimeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the connection records of an authorized user to cloud computers in a cloud computer pool.
     *  *
     * @param DescribeUserConnectionRecordsRequest $request DescribeUserConnectionRecordsRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserConnectionRecordsResponse DescribeUserConnectionRecordsResponse
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
     * @summary Queries the connection records of an authorized user to cloud computers in a cloud computer pool.
     *  *
     * @param DescribeUserConnectionRecordsRequest $request DescribeUserConnectionRecordsRequest
     *
     * @return DescribeUserConnectionRecordsResponse DescribeUserConnectionRecordsResponse
     */
    public function describeUserConnectionRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserConnectionRecordsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configurations of the user profile management (UPM) directory blacklist and whitelist.
     *  *
     * @param DescribeUserProfilePathRulesRequest $request DescribeUserProfilePathRulesRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserProfilePathRulesResponse DescribeUserProfilePathRulesResponse
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
     * @summary Queries the configurations of the user profile management (UPM) directory blacklist and whitelist.
     *  *
     * @param DescribeUserProfilePathRulesRequest $request DescribeUserProfilePathRulesRequest
     *
     * @return DescribeUserProfilePathRulesResponse DescribeUserProfilePathRulesResponse
     */
    public function describeUserProfilePathRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserProfilePathRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about authorized users in a cloud computer pool, including the usernames, email addresses, mobile numbers, and cloud computer IDs.
     *  *
     * @param DescribeUsersInGroupRequest $request DescribeUsersInGroupRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUsersInGroupResponse DescribeUsersInGroupResponse
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
     * @summary Queries the information about authorized users in a cloud computer pool, including the usernames, email addresses, mobile numbers, and cloud computer IDs.
     *  *
     * @param DescribeUsersInGroupRequest $request DescribeUsersInGroupRequest
     *
     * @return DescribeUsersInGroupResponse DescribeUsersInGroupResponse
     */
    public function describeUsersInGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUsersInGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the passwords of authorized users of a cloud computer.
     *  *
     * @param DescribeUsersPasswordRequest $request DescribeUsersPasswordRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUsersPasswordResponse DescribeUsersPasswordResponse
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
     * @summary Queries the passwords of authorized users of a cloud computer.
     *  *
     * @param DescribeUsersPasswordRequest $request DescribeUsersPasswordRequest
     *
     * @return DescribeUsersPasswordResponse DescribeUsersPasswordResponse
     */
    public function describeUsersPassword($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUsersPasswordWithOptions($request, $runtime);
    }

    /**
     * @summary Queries multi-factor authentication (MFA) devices that are bound to an Active Directory (AD) account.
     *  *
     * @param DescribeVirtualMFADevicesRequest $request DescribeVirtualMFADevicesRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVirtualMFADevicesResponse DescribeVirtualMFADevicesResponse
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
     * @summary Queries multi-factor authentication (MFA) devices that are bound to an Active Directory (AD) account.
     *  *
     * @param DescribeVirtualMFADevicesRequest $request DescribeVirtualMFADevicesRequest
     *
     * @return DescribeVirtualMFADevicesResponse DescribeVirtualMFADevicesResponse
     */
    public function describeVirtualMFADevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVirtualMFADevicesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the zones in a region in which Elastic Desktop Service is supported.
     *  *
     * @param DescribeZonesRequest $request DescribeZonesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeZonesResponse DescribeZonesResponse
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
     * @summary Queries the zones in a region in which Elastic Desktop Service is supported.
     *  *
     * @param DescribeZonesRequest $request DescribeZonesRequest
     *
     * @return DescribeZonesResponse DescribeZonesResponse
     */
    public function describeZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeZonesWithOptions($request, $runtime);
    }

    /**
     * @summary Unbinds an advanced office network from a CEN instance.
     *  *
     * @param DetachCenRequest $request DetachCenRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachCenResponse DetachCenResponse
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
     * @summary Unbinds an advanced office network from a CEN instance.
     *  *
     * @param DetachCenRequest $request DetachCenRequest
     *
     * @return DetachCenResponse DetachCenResponse
     */
    public function detachCen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachCenWithOptions($request, $runtime);
    }

    /**
     * @summary Unbinds a hardware client from a user.
     *  *
     * @param DetachEndUserRequest $request DetachEndUserRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachEndUserResponse DetachEndUserResponse
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
     * @summary Unbinds a hardware client from a user.
     *  *
     * @param DetachEndUserRequest $request DetachEndUserRequest
     *
     * @return DetachEndUserResponse DetachEndUserResponse
     */
    public function detachEndUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachEndUserWithOptions($request, $runtime);
    }

    /**
     * @summary Disables cloud desktops in a desktop group.
     *  *
     * @param DisableDesktopsInGroupRequest $request DisableDesktopsInGroupRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableDesktopsInGroupResponse DisableDesktopsInGroupResponse
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
     * @summary Disables cloud desktops in a desktop group.
     *  *
     * @param DisableDesktopsInGroupRequest $request DisableDesktopsInGroupRequest
     *
     * @return DisableDesktopsInGroupResponse DisableDesktopsInGroupResponse
     */
    public function disableDesktopsInGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableDesktopsInGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Disconnects from desktop sessions.
     *  *
     * @param DisconnectDesktopSessionsRequest $request DisconnectDesktopSessionsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DisconnectDesktopSessionsResponse DisconnectDesktopSessionsResponse
     */
    public function disconnectDesktopSessionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->preCheck)) {
            $query['PreCheck'] = $request->preCheck;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sessions)) {
            $query['Sessions'] = $request->sessions;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisconnectDesktopSessions',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisconnectDesktopSessionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disconnects from desktop sessions.
     *  *
     * @param DisconnectDesktopSessionsRequest $request DisconnectDesktopSessionsRequest
     *
     * @return DisconnectDesktopSessionsResponse DisconnectDesktopSessionsResponse
     */
    public function disconnectDesktopSessions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disconnectDesktopSessionsWithOptions($request, $runtime);
    }

    /**
     * @summary Unbinds a premium bandwidth plan from an office network.
     *  *
     * @param DissociateNetworkPackageRequest $request DissociateNetworkPackageRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DissociateNetworkPackageResponse DissociateNetworkPackageResponse
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
     * @summary Unbinds a premium bandwidth plan from an office network.
     *  *
     * @param DissociateNetworkPackageRequest $request DissociateNetworkPackageRequest
     *
     * @return DissociateNetworkPackageResponse DissociateNetworkPackageResponse
     */
    public function dissociateNetworkPackage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->dissociateNetworkPackageWithOptions($request, $runtime);
    }

    /**
     * @summary Exports events that occur on a cloud desktop from an Alibaba Cloud Workspace client.
     *  *
     * @param ExportClientEventsRequest $request ExportClientEventsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportClientEventsResponse ExportClientEventsResponse
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
     * @summary Exports events that occur on a cloud desktop from an Alibaba Cloud Workspace client.
     *  *
     * @param ExportClientEventsRequest $request ExportClientEventsRequest
     *
     * @return ExportClientEventsResponse ExportClientEventsResponse
     */
    public function exportClientEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportClientEventsWithOptions($request, $runtime);
    }

    /**
     * @summary Exports cloud computer pools. The list of cloud computer pools is saved as an XLSX file. Each entry of cloud computer pool data includes the ID and name of the cloud computer pool, the ID and name of the office network, the cloud computer pool template, and the name of the security policy.
     *  *
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
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
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
     * @summary Exports cloud computer pools. The list of cloud computer pools is saved as an XLSX file. Each entry of cloud computer pool data includes the ID and name of the cloud computer pool, the ID and name of the office network, the cloud computer pool template, and the name of the security policy.
     *  *
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
     * @summary Exports a cloud computer list as a CSV file.
     *  *
     * @description The cloud computer list exported by calling this operation is saved as a CSV file. Each entry of data of a cloud computer includes the following fields:
     * *   Cloud computer ID and name
     * *   Office network ID and name
     * *   The instance type, OS and protocol of the cloud computer
     * *   System disk and data disk of the cloud computer
     * *   The status
     * *   Purchase method
     * *   The time when the cloud computer expires
     * *   Remaining duration and total duration
     * *   Number of assigned users and number of current users
     * *   Office network type
     * *   The time when the cloud computer was created
     * *   Tags
     * *   Encryption status
     * *   IP
     * *   The hostname
     *  *
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
     * @summary Exports a cloud computer list as a CSV file.
     *  *
     * @description The cloud computer list exported by calling this operation is saved as a CSV file. Each entry of data of a cloud computer includes the following fields:
     * *   Cloud computer ID and name
     * *   Office network ID and name
     * *   The instance type, OS and protocol of the cloud computer
     * *   System disk and data disk of the cloud computer
     * *   The status
     * *   Purchase method
     * *   The time when the cloud computer expires
     * *   Remaining duration and total duration
     * *   Number of assigned users and number of current users
     * *   Office network type
     * *   The time when the cloud computer was created
     * *   Tags
     * *   Encryption status
     * *   IP
     * *   The hostname
     *  *
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
     * @summary Obtains the information about an asynchronous task based on the value of the AsyncTaskId parameter that you obtain by calling the CopyCdsFile operation.
     *  *
     * @param GetAsyncTaskRequest $request GetAsyncTaskRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAsyncTaskResponse GetAsyncTaskResponse
     */
    public function getAsyncTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->asyncTaskId)) {
            $query['AsyncTaskId'] = $request->asyncTaskId;
        }
        if (!Utils::isUnset($request->cdsId)) {
            $query['CdsId'] = $request->cdsId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAsyncTask',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAsyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the information about an asynchronous task based on the value of the AsyncTaskId parameter that you obtain by calling the CopyCdsFile operation.
     *  *
     * @param GetAsyncTaskRequest $request GetAsyncTaskRequest
     *
     * @return GetAsyncTaskResponse GetAsyncTaskResponse
     */
    public function getAsyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAsyncTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the credential that is used to connect to a cloud desktop.
     *  *
     * @description The cloud computer must be in the Running state.
     *  *
     * @param GetConnectionTicketRequest $request GetConnectionTicketRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetConnectionTicketResponse GetConnectionTicketResponse
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
     * @summary Obtains the credential that is used to connect to a cloud desktop.
     *  *
     * @description The cloud computer must be in the Running state.
     *  *
     * @param GetConnectionTicketRequest $request GetConnectionTicketRequest
     *
     * @return GetConnectionTicketResponse GetConnectionTicketResponse
     */
    public function getConnectionTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getConnectionTicketWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the credentials of the stream collaboration
     *  *
     * @param GetCoordinateTicketRequest $request GetCoordinateTicketRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetCoordinateTicketResponse GetCoordinateTicketResponse
     */
    public function getCoordinateTicketWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->userType)) {
            $query['UserType'] = $request->userType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetCoordinateTicket',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetCoordinateTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Obtains the credentials of the stream collaboration
     *  *
     * @param GetCoordinateTicketRequest $request GetCoordinateTicketRequest
     *
     * @return GetCoordinateTicketResponse GetCoordinateTicketResponse
     */
    public function getCoordinateTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCoordinateTicketWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about a cloud computer pool.
     *  *
     * @param GetDesktopGroupDetailRequest $request GetDesktopGroupDetailRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDesktopGroupDetailResponse GetDesktopGroupDetailResponse
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
     * @summary Queries the information about a cloud computer pool.
     *  *
     * @param GetDesktopGroupDetailRequest $request GetDesktopGroupDetailRequest
     *
     * @return GetDesktopGroupDetailResponse GetDesktopGroupDetailResponse
     */
    public function getDesktopGroupDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDesktopGroupDetailWithOptions($request, $runtime);
    }

    /**
     * @summary Queries whether single sign-on (SSO) is enabled for a workspace.
     *  *
     * @param GetOfficeSiteSsoStatusRequest $request GetOfficeSiteSsoStatusRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOfficeSiteSsoStatusResponse GetOfficeSiteSsoStatusResponse
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
     * @summary Queries whether single sign-on (SSO) is enabled for a workspace.
     *  *
     * @param GetOfficeSiteSsoStatusRequest $request GetOfficeSiteSsoStatusRequest
     *
     * @return GetOfficeSiteSsoStatusResponse GetOfficeSiteSsoStatusResponse
     */
    public function getOfficeSiteSsoStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOfficeSiteSsoStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the metadata of a Security Assertion Markup Language (SAML) 2.0-based service provider (SP).
     *  *
     * @description You can call this operation only for workspaces of the Active Directory (AD) and convenience account types.
     *  *
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
     * @summary Obtains the metadata of a Security Assertion Markup Language (SAML) 2.0-based service provider (SP).
     *  *
     * @description You can call this operation only for workspaces of the Active Directory (AD) and convenience account types.
     *  *
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
     * @summary Hibernates cloud desktops.
     *  *
     * @description Hibernating a cloud desktop is in private preview. If you want to try this feature, submit a ticket.
     *  *
     * @param HibernateDesktopsRequest $request HibernateDesktopsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return HibernateDesktopsResponse HibernateDesktopsResponse
     */
    public function hibernateDesktopsWithOptions($request, $runtime)
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
            'action'      => 'HibernateDesktops',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return HibernateDesktopsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Hibernates cloud desktops.
     *  *
     * @description Hibernating a cloud desktop is in private preview. If you want to try this feature, submit a ticket.
     *  *
     * @param HibernateDesktopsRequest $request HibernateDesktopsRequest
     *
     * @return HibernateDesktopsResponse HibernateDesktopsResponse
     */
    public function hibernateDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->hibernateDesktopsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the files in a cloud disk.
     *  *
     * @param ListCdsFilesRequest $tmpReq  ListCdsFilesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCdsFilesResponse ListCdsFilesResponse
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
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
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
     * @summary Queries the files in a cloud disk.
     *  *
     * @param ListCdsFilesRequest $request ListCdsFilesRequest
     *
     * @return ListCdsFilesResponse ListCdsFilesResponse
     */
    public function listCdsFiles($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCdsFilesWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the user information in the AD system if you use an AD directory to connect to an AD system.
     *  *
     * @description If you use an AD directory to connect to an AD system, you can call this operation to obtain the user information in the AD system.
     *  *
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
     * @summary Obtains the user information in the AD system if you use an AD directory to connect to an AD system.
     *  *
     * @description If you use an AD directory to connect to an AD system, you can call this operation to obtain the user information in the AD system.
     *  *
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
     * @summary Queries the information about shared files of cloud disks.
     *  *
     * @param ListFilePermissionRequest $request ListFilePermissionRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ListFilePermissionResponse ListFilePermissionResponse
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
     * @summary Queries the information about shared files of cloud disks.
     *  *
     * @param ListFilePermissionRequest $request ListFilePermissionRequest
     *
     * @return ListFilePermissionResponse ListFilePermissionResponse
     */
    public function listFilePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listFilePermissionWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about an office network, including its status, cloud computer quantity, virtual private cloud (VPC) type, and more.
     *  *
     * @param ListOfficeSiteOverviewRequest $request ListOfficeSiteOverviewRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ListOfficeSiteOverviewResponse ListOfficeSiteOverviewResponse
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
     * @summary Queries information about an office network, including its status, cloud computer quantity, virtual private cloud (VPC) type, and more.
     *  *
     * @param ListOfficeSiteOverviewRequest $request ListOfficeSiteOverviewRequest
     *
     * @return ListOfficeSiteOverviewResponse ListOfficeSiteOverviewResponse
     */
    public function listOfficeSiteOverview($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOfficeSiteOverviewWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about Active Directory (AD) users after an enterprise AD office network (formerly workspace) interconnects to an AD domain.
     *  *
     * @param ListOfficeSiteUsersRequest $request ListOfficeSiteUsersRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ListOfficeSiteUsersResponse ListOfficeSiteUsersResponse
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
     * @summary Queries information about Active Directory (AD) users after an enterprise AD office network (formerly workspace) interconnects to an AD domain.
     *  *
     * @param ListOfficeSiteUsersRequest $request ListOfficeSiteUsersRequest
     *
     * @return ListOfficeSiteUsersResponse ListOfficeSiteUsersResponse
     */
    public function listOfficeSiteUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOfficeSiteUsersWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the tags of cloud computers.
     *  *
     * @description You must use at least one of the following parameters in the request to determine the object that you want to query: `ResourceId.N`, `Tag.N.Key`, and `Tag.N.Value`.
     *  *
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
     * @summary Queries the tags of cloud computers.
     *  *
     * @description You must use at least one of the following parameters in the request to determine the object that you want to query: `ResourceId.N`, `Tag.N.Key`, and `Tag.N.Value`.
     *  *
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
     * @summary Obtains the organizational units (OUs) of an Active Directory (AD) domain that is connected to an enterprise AD office network (formerly workspace).
     *  *
     * @param ListUserAdOrganizationUnitsRequest $request ListUserAdOrganizationUnitsRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListUserAdOrganizationUnitsResponse ListUserAdOrganizationUnitsResponse
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
     * @summary Obtains the organizational units (OUs) of an Active Directory (AD) domain that is connected to an enterprise AD office network (formerly workspace).
     *  *
     * @param ListUserAdOrganizationUnitsRequest $request ListUserAdOrganizationUnitsRequest
     *
     * @return ListUserAdOrganizationUnitsResponse ListUserAdOrganizationUnitsResponse
     */
    public function listUserAdOrganizationUnits($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listUserAdOrganizationUnitsWithOptions($request, $runtime);
    }

    /**
     * @summary Locks a multi-factor authentication (MFA) device that is in the NORMAL state.
     *  *
     * @description After a virtual MFA device is locked, its status changes to LOCKED. The Active Directory (AD) user who uses the virtual MFA device is unable to pass MFA and is therefore unable to log on to the client. You can call the [UnlockVirtualMFADevice](https://help.aliyun.com/document_detail/206212.html) operation to unlock the device.
     *  *
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
     * @summary Locks a multi-factor authentication (MFA) device that is in the NORMAL state.
     *  *
     * @description After a virtual MFA device is locked, its status changes to LOCKED. The Active Directory (AD) user who uses the virtual MFA device is unable to pass MFA and is therefore unable to log on to the client. You can call the [UnlockVirtualMFADevice](https://help.aliyun.com/document_detail/206212.html) operation to unlock the device.
     *  *
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
     * @summary Migrates cloud computers from the current office network (formerly called workspace) to the new office network.
     *  *
     * @param MigrateDesktopsRequest $request MigrateDesktopsRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return MigrateDesktopsResponse MigrateDesktopsResponse
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
     * @summary Migrates cloud computers from the current office network (formerly called workspace) to the new office network.
     *  *
     * @param MigrateDesktopsRequest $request MigrateDesktopsRequest
     *
     * @return MigrateDesktopsResponse MigrateDesktopsResponse
     */
    public function migrateDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->migrateDesktopsWithOptions($request, $runtime);
    }

    /**
     * @summary Update the protocols of images to Adaptive Streaming Protocol (ASP).
     *  *
     * @param MigrateImageProtocolRequest $request MigrateImageProtocolRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return MigrateImageProtocolResponse MigrateImageProtocolResponse
     */
    public function migrateImageProtocolWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->targetProtocolType)) {
            $query['TargetProtocolType'] = $request->targetProtocolType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'MigrateImageProtocol',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return MigrateImageProtocolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Update the protocols of images to Adaptive Streaming Protocol (ASP).
     *  *
     * @param MigrateImageProtocolRequest $request MigrateImageProtocolRequest
     *
     * @return MigrateImageProtocolResponse MigrateImageProtocolResponse
     */
    public function migrateImageProtocol($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->migrateImageProtocolWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies an Active Directory (AD) directory.
     *  *
     * @description You can modify the following domain name- and Domain Name System (DNS)-related parameters only for Active Directory (AD) directories that are in the ERROR or REGISTERING state: `DomainName`, `SubDomainName`, `DnsAddress.N`, and `SubDomainDnsAddress`.
     *  *
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
     * @summary Modifies an Active Directory (AD) directory.
     *  *
     * @description You can modify the following domain name- and Domain Name System (DNS)-related parameters only for Active Directory (AD) directories that are in the ERROR or REGISTERING state: `DomainName`, `SubDomainName`, `DnsAddress.N`, and `SubDomainDnsAddress`.
     *  *
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
     * @summary Modifies the basic properties of an enterprise Active Directory (AD) office network, such as the office network name and domain names of the enterprise AD subdomains.
     *  *
     * @description You can modify parameters of domain names and Domain Name System (DNS) for enterprise AD office networks that are in the `ERROR` or `REGISTERED` state. The parameters include `DomainName`, `SubDomainName`, `DnsAddress.N`, and `SubDomainDnsAddress.N`.
     *  *
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
        if (!Utils::isUnset($request->backupDCHostname)) {
            $query['BackupDCHostname'] = $request->backupDCHostname;
        }
        if (!Utils::isUnset($request->backupDns)) {
            $query['BackupDns'] = $request->backupDns;
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
     * @summary Modifies the basic properties of an enterprise Active Directory (AD) office network, such as the office network name and domain names of the enterprise AD subdomains.
     *  *
     * @description You can modify parameters of domain names and Domain Name System (DNS) for enterprise AD office networks that are in the `ERROR` or `REGISTERED` state. The parameters include `DomainName`, `SubDomainName`, `DnsAddress.N`, and `SubDomainDnsAddress.N`.
     *  *
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
     * @summary Modify the Internet access control policy on the office network or cloud computer granularity.
     *  *
     * @description You can set different Internet access control policies at different granularities to achieve the effect of composite policies. For example, you can disable the Internet access on the office network granularity and enable the Internet access on specific cloud computer granularity. The effect is that all cloud computers in the office network except the specified cloud computers are not allowed to access the Internet.
     *  *
     * @param ModifyAclEntriesRequest $request ModifyAclEntriesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAclEntriesResponse ModifyAclEntriesResponse
     */
    public function modifyAclEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->policy)) {
            $query['Policy'] = $request->policy;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->sourceId)) {
            $query['SourceId'] = $request->sourceId;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAclEntries',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAclEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modify the Internet access control policy on the office network or cloud computer granularity.
     *  *
     * @description You can set different Internet access control policies at different granularities to achieve the effect of composite policies. For example, you can disable the Internet access on the office network granularity and enable the Internet access on specific cloud computer granularity. The effect is that all cloud computers in the office network except the specified cloud computers are not allowed to access the Internet.
     *  *
     * @param ModifyAclEntriesRequest $request ModifyAclEntriesRequest
     *
     * @return ModifyAclEntriesResponse ModifyAclEntriesResponse
     */
    public function modifyAclEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAclEntriesWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the parameters of an automatic snapshot policy, such as the policy name and snapshot retention period.
     *  *
     * @param ModifyAutoSnapshotPolicyRequest $request ModifyAutoSnapshotPolicyRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAutoSnapshotPolicyResponse ModifyAutoSnapshotPolicyResponse
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
     * @summary Modifies the parameters of an automatic snapshot policy, such as the policy name and snapshot retention period.
     *  *
     * @param ModifyAutoSnapshotPolicyRequest $request ModifyAutoSnapshotPolicyRequest
     *
     * @return ModifyAutoSnapshotPolicyResponse ModifyAutoSnapshotPolicyResponse
     */
    public function modifyAutoSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a custom cloud computer template.
     *  *
     * @description Only custom desktop templates can be modified.
     *  *
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
     * @summary Modifies a custom cloud computer template.
     *  *
     * @description Only custom desktop templates can be modified.
     *  *
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
     * @summary Modifies the files in a cloud disk.
     *  *
     * @param ModifyCdsFileRequest $request ModifyCdsFileRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyCdsFileResponse ModifyCdsFileResponse
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
     * @summary Modifies the files in a cloud disk.
     *  *
     * @param ModifyCdsFileRequest $request ModifyCdsFileRequest
     *
     * @return ModifyCdsFileResponse ModifyCdsFileResponse
     */
    public function modifyCdsFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCdsFileWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the link for file sharing.
     *  *
     * @param ModifyCdsFileShareLinkRequest $request ModifyCdsFileShareLinkRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyCdsFileShareLinkResponse ModifyCdsFileShareLinkResponse
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
     * @summary Modifies the link for file sharing.
     *  *
     * @param ModifyCdsFileShareLinkRequest $request ModifyCdsFileShareLinkRequest
     *
     * @return ModifyCdsFileShareLinkResponse ModifyCdsFileShareLinkResponse
     */
    public function modifyCdsFileShareLink($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCdsFileShareLinkWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies team spaces.
     *  *
     * @param ModifyCloudDriveGroupsRequest $request ModifyCloudDriveGroupsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyCloudDriveGroupsResponse ModifyCloudDriveGroupsResponse
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
     * @summary Modifies team spaces.
     *  *
     * @param ModifyCloudDriveGroupsRequest $request ModifyCloudDriveGroupsRequest
     *
     * @return ModifyCloudDriveGroupsResponse ModifyCloudDriveGroupsResponse
     */
    public function modifyCloudDriveGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCloudDriveGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the user permissions on Cloud Drive Service, and configures users who have the download permissions and upload and download permissions. By default, the users that are not configured the preceding permissions only have the upload permissions.
     *  *
     * @param ModifyCloudDrivePermissionRequest $request ModifyCloudDrivePermissionRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyCloudDrivePermissionResponse ModifyCloudDrivePermissionResponse
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
     * @summary Modifies the user permissions on Cloud Drive Service, and configures users who have the download permissions and upload and download permissions. By default, the users that are not configured the preceding permissions only have the upload permissions.
     *  *
     * @param ModifyCloudDrivePermissionRequest $request ModifyCloudDrivePermissionRequest
     *
     * @return ModifyCloudDrivePermissionResponse ModifyCloudDrivePermissionResponse
     */
    public function modifyCloudDrivePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCloudDrivePermissionWithOptions($request, $runtime);
    }

    /**
     * @summary 修改无影网盘终端用户的属性
     *  *
     * @param ModifyCloudDriveUsersRequest $request ModifyCloudDriveUsersRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyCloudDriveUsersResponse ModifyCloudDriveUsersResponse
     */
    public function modifyCloudDriveUsersWithOptions($request, $runtime)
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
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->userMaxSize)) {
            $query['UserMaxSize'] = $request->userMaxSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyCloudDriveUsers',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyCloudDriveUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改无影网盘终端用户的属性
     *  *
     * @param ModifyCloudDriveUsersRequest $request ModifyCloudDriveUsersRequest
     *
     * @return ModifyCloudDriveUsersResponse ModifyCloudDriveUsersResponse
     */
    public function modifyCloudDriveUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCloudDriveUsersWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the layouts of cloud computer list headers, such as the required fields and the display and hide settings.
     *  *
     * @param ModifyCustomizedListHeadersRequest $request ModifyCustomizedListHeadersRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyCustomizedListHeadersResponse ModifyCustomizedListHeadersResponse
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
     * @summary Modifies the layouts of cloud computer list headers, such as the required fields and the display and hide settings.
     *  *
     * @param ModifyCustomizedListHeadersRequest $request ModifyCustomizedListHeadersRequest
     *
     * @return ModifyCustomizedListHeadersResponse ModifyCustomizedListHeadersResponse
     */
    public function modifyCustomizedListHeaders($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCustomizedListHeadersWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the billing method of cloud computers to subscription or pay-as-you-go.
     *  *
     * @description *   Before you call this operation, make sure that you fully understand the billing methods of cloud computers. For more information, see [Billing overview](https://help.aliyun.com/document_detail/188395.html).
     * *   Before you call this operation, make sure that the cloud computers whose billing method you want to change are in the Running or Stopped state and you have no overdue payments in your Alibaba Cloud account.
     * *   After the order payment is completed, the system starts to change the billing method of the cloud computers. During the change, you cannot perform operations, such as starting or stopping the cloud computers, and changing configurations of the cloud computers.
     *  *
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
        if (!Utils::isUnset($request->useDuration)) {
            $query['UseDuration'] = $request->useDuration;
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
     * @summary Changes the billing method of cloud computers to subscription or pay-as-you-go.
     *  *
     * @description *   Before you call this operation, make sure that you fully understand the billing methods of cloud computers. For more information, see [Billing overview](https://help.aliyun.com/document_detail/188395.html).
     * *   Before you call this operation, make sure that the cloud computers whose billing method you want to change are in the Running or Stopped state and you have no overdue payments in your Alibaba Cloud account.
     * *   After the order payment is completed, the system starts to change the billing method of the cloud computers. During the change, you cannot perform operations, such as starting or stopping the cloud computers, and changing configurations of the cloud computers.
     *  *
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
     * @summary Modifies the configurations of a cloud computer pool.
     *  *
     * @description After a cloud computer pool is created, the system creates a specific number of cloud computers in the pool based on the auto scaling policy and user connections. Cloud computers are created by using the same cloud computer template and security policy. You can modify the configurations of the pool, including the pool name, cloud computer template, and policy, in different business scenarios.
     *  *
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
     * @summary Modifies the configurations of a cloud computer pool.
     *  *
     * @description After a cloud computer pool is created, the system creates a specific number of cloud computers in the pool based on the auto scaling policy and user connections. Cloud computers are created by using the same cloud computer template and security policy. You can modify the configurations of the pool, including the pool name, cloud computer template, and policy, in different business scenarios.
     *  *
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
     * @summary Modifies the hostname of a Windows cloud computer in the Active Directory (AD) office network.
     *  *
     * @description The Windows cloud computer whose hostname you want to modify must be in an AD office network. After the hostname is modified, the cloud computer is re-created.
     *  *
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
     * @summary Modifies the hostname of a Windows cloud computer in the Active Directory (AD) office network.
     *  *
     * @description The Windows cloud computer whose hostname you want to modify must be in an AD office network. After the hostname is modified, the cloud computer is re-created.
     *  *
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
     * @summary Changes the name of a cloud computer to a new name.
     *  *
     * @param ModifyDesktopNameRequest $request ModifyDesktopNameRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDesktopNameResponse ModifyDesktopNameResponse
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
     * @summary Changes the name of a cloud computer to a new name.
     *  *
     * @param ModifyDesktopNameRequest $request ModifyDesktopNameRequest
     *
     * @return ModifyDesktopNameResponse ModifyDesktopNameResponse
     */
    public function modifyDesktopName($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDesktopNameWithOptions($request, $runtime);
    }

    /**
     * @summary 修改桌面超卖组
     *  *
     * @param ModifyDesktopOversoldGroupRequest $request ModifyDesktopOversoldGroupRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDesktopOversoldGroupResponse ModifyDesktopOversoldGroupResponse
     */
    public function modifyDesktopOversoldGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->concurrenceCount)) {
            $query['ConcurrenceCount'] = $request->concurrenceCount;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
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
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->oversoldGroupId)) {
            $query['OversoldGroupId'] = $request->oversoldGroupId;
        }
        if (!Utils::isUnset($request->oversoldUserCount)) {
            $query['OversoldUserCount'] = $request->oversoldUserCount;
        }
        if (!Utils::isUnset($request->oversoldWarn)) {
            $query['OversoldWarn'] = $request->oversoldWarn;
        }
        if (!Utils::isUnset($request->policyGroupId)) {
            $query['PolicyGroupId'] = $request->policyGroupId;
        }
        if (!Utils::isUnset($request->stopDuration)) {
            $query['StopDuration'] = $request->stopDuration;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDesktopOversoldGroup',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDesktopOversoldGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改桌面超卖组
     *  *
     * @param ModifyDesktopOversoldGroupRequest $request ModifyDesktopOversoldGroupRequest
     *
     * @return ModifyDesktopOversoldGroupResponse ModifyDesktopOversoldGroupResponse
     */
    public function modifyDesktopOversoldGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDesktopOversoldGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 修改桌面超卖组售卖数据
     *  *
     * @param ModifyDesktopOversoldGroupSaleRequest $request ModifyDesktopOversoldGroupSaleRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDesktopOversoldGroupSaleResponse ModifyDesktopOversoldGroupSaleResponse
     */
    public function modifyDesktopOversoldGroupSaleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->concurrenceCount)) {
            $query['ConcurrenceCount'] = $request->concurrenceCount;
        }
        if (!Utils::isUnset($request->oversoldGroupId)) {
            $query['OversoldGroupId'] = $request->oversoldGroupId;
        }
        if (!Utils::isUnset($request->oversoldUserCount)) {
            $query['OversoldUserCount'] = $request->oversoldUserCount;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDesktopOversoldGroupSale',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDesktopOversoldGroupSaleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改桌面超卖组售卖数据
     *  *
     * @param ModifyDesktopOversoldGroupSaleRequest $request ModifyDesktopOversoldGroupSaleRequest
     *
     * @return ModifyDesktopOversoldGroupSaleResponse ModifyDesktopOversoldGroupSaleResponse
     */
    public function modifyDesktopOversoldGroupSale($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDesktopOversoldGroupSaleWithOptions($request, $runtime);
    }

    /**
     * @summary 修改桌面超卖用户组
     *  *
     * @param ModifyDesktopOversoldUserGroupRequest $request ModifyDesktopOversoldUserGroupRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDesktopOversoldUserGroupResponse ModifyDesktopOversoldUserGroupResponse
     */
    public function modifyDesktopOversoldUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->oversoldGroupId)) {
            $query['OversoldGroupId'] = $request->oversoldGroupId;
        }
        if (!Utils::isUnset($request->policyGroupId)) {
            $query['PolicyGroupId'] = $request->policyGroupId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDesktopOversoldUserGroup',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDesktopOversoldUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改桌面超卖用户组
     *  *
     * @param ModifyDesktopOversoldUserGroupRequest $request ModifyDesktopOversoldUserGroupRequest
     *
     * @return ModifyDesktopOversoldUserGroupResponse ModifyDesktopOversoldUserGroupResponse
     */
    public function modifyDesktopOversoldUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDesktopOversoldUserGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the instance type of a cloud computer and scales up the disks of the cloud computer.
     *  *
     * @description Changing the configurations of a cloud computer includes changing the instance type of the cloud computer and scaling up the disks of the cloud computer.
     * *   Before you change the configurations of a cloud computer, you must understand the instance types and disk sizes supported by cloud computers. For more information, see [Cloud computer types](https://help.aliyun.com/document_detail/188609.html). You can call the [DescribeDesktopTypes](https://help.aliyun.com/document_detail/188882.html) operation to query the instance types supported by cloud computers.
     * *   You must change at least one of the following configurations: instance type, system disk size, and data disk size of the cloud computer. You must specify at least one of the following parameters: `DesktopType`, `RootDiskSizeGib`, and `UserDiskSizeGib`. Take note of the following items:
     *     *   The instance type of a cloud computer includes the configurations of vCPUs, memory, and GPUs. You can only change an instance type to another. You cannot change only one of the configurations.
     *     *   You cannot change a cloud computer between the General Office type and the non-General Office type. You cannot yet change a cloud computer between the Graphics type and the non-Graphics type.
     *     *   The system disk and data disks of a cloud computer can only be scaled up and cannot be scaled down.
     *     *   If the billing method of the cloud computer is subscription, the system calculates the price difference based on the configuration difference between the original cloud computer and the new cloud computer. You must make up for the price difference or receive a refund for the price difference.
     *     *   We recommend that you do not change the configurations of a cloud computer twice within 5 minutes.
     *     *   When you change the configurations of a cloud computer, the cloud computer must be in the Stopped state.
     * *   After you change the configurations of a cloud computer, the personal data on the cloud computer is not affected.
     *  *
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
        if (!Utils::isUnset($request->resourceSpecs)) {
            $query['ResourceSpecs'] = $request->resourceSpecs;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
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
     * @summary Changes the instance type of a cloud computer and scales up the disks of the cloud computer.
     *  *
     * @description Changing the configurations of a cloud computer includes changing the instance type of the cloud computer and scaling up the disks of the cloud computer.
     * *   Before you change the configurations of a cloud computer, you must understand the instance types and disk sizes supported by cloud computers. For more information, see [Cloud computer types](https://help.aliyun.com/document_detail/188609.html). You can call the [DescribeDesktopTypes](https://help.aliyun.com/document_detail/188882.html) operation to query the instance types supported by cloud computers.
     * *   You must change at least one of the following configurations: instance type, system disk size, and data disk size of the cloud computer. You must specify at least one of the following parameters: `DesktopType`, `RootDiskSizeGib`, and `UserDiskSizeGib`. Take note of the following items:
     *     *   The instance type of a cloud computer includes the configurations of vCPUs, memory, and GPUs. You can only change an instance type to another. You cannot change only one of the configurations.
     *     *   You cannot change a cloud computer between the General Office type and the non-General Office type. You cannot yet change a cloud computer between the Graphics type and the non-Graphics type.
     *     *   The system disk and data disks of a cloud computer can only be scaled up and cannot be scaled down.
     *     *   If the billing method of the cloud computer is subscription, the system calculates the price difference based on the configuration difference between the original cloud computer and the new cloud computer. You must make up for the price difference or receive a refund for the price difference.
     *     *   We recommend that you do not change the configurations of a cloud computer twice within 5 minutes.
     *     *   When you change the configurations of a cloud computer, the cloud computer must be in the Stopped state.
     * *   After you change the configurations of a cloud computer, the personal data on the cloud computer is not affected.
     *  *
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
     * @summary Creates or modifies scheduled tasks on cloud computers, such as starting, stopping, restarting, and resetting cloud computers on schedule.
     *  *
     * @param ModifyDesktopTimerRequest $request ModifyDesktopTimerRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyDesktopTimerResponse ModifyDesktopTimerResponse
     */
    public function modifyDesktopTimerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->desktopId)) {
            $query['DesktopId'] = $request->desktopId;
        }
        if (!Utils::isUnset($request->desktopTimers)) {
            $query['DesktopTimers'] = $request->desktopTimers;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->useDesktopTimers)) {
            $query['UseDesktopTimers'] = $request->useDesktopTimers;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyDesktopTimer',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyDesktopTimerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates or modifies scheduled tasks on cloud computers, such as starting, stopping, restarting, and resetting cloud computers on schedule.
     *  *
     * @param ModifyDesktopTimerRequest $request ModifyDesktopTimerRequest
     *
     * @return ModifyDesktopTimerResponse ModifyDesktopTimerResponse
     */
    public function modifyDesktopTimer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDesktopTimerWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the policies that are configured for a cloud desktop.
     *  *
     * @description The cloud desktops that you want to restart by calling this operation must be in the Running state.
     *  *
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
     * @summary Modifies the policies that are configured for a cloud desktop.
     *  *
     * @description The cloud desktops that you want to restart by calling this operation must be in the Running state.
     *  *
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
     * @summary Changes the configurations of a cloud desktop, including the number of vCPUs, memory size, and disk size.
     *  *
     * @description You can call this operation to change the configurations, such as the desktop type and disk size, of a cloud desktop.
     * *   Before you call this operation, you must know the cloud desktop types and the disk sizes for each type of cloud desktop that Elastic Desktop Service (EDS) provides.
     * *   When you change the configurations of a cloud desktop, you must change the desktop type or the size of the system disk or data disk. You must configure at least one of the following parameters: DesktopType, RootDiskSizeGib, and UserDiskSizeGib. Take note of the following items:
     * 1\\. Desktop types include the specifications of vCPUs, memory, and GPUs. You can change only the desktop type, instead of one of the specifications.
     * 2\\. You cannot change a cloud desktop from the General Office type to a non-General Office type, or from a non-General Office type to the General Office type. You cannot change a cloud desktop from the Graphics type to a non-Graphics type, or from a non-Graphics type to the Graphics type.
     * 3\\. You can only increase the sizes of system and data disks. You cannot decrease the sizes of system and data disks.
     * 4\\. If your cloud desktop uses the subscription billing method, the price difference is calculated based on the price before and after configuration changes. You may receive a refund, or must pay for the price difference.
     * 5\\. If you need to change the configurations of a cloud desktop multiple times, we recommend that you wait at least 5 minutes between consecutive operations on the cloud desktop.
     * 6\\. The cloud desktop for which you want to change the desktop type must be in the Stopped state.
     * *   The changes do not affect your personal data on the cloud desktop.
     *  *
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
     * @summary Changes the configurations of a cloud desktop, including the number of vCPUs, memory size, and disk size.
     *  *
     * @description You can call this operation to change the configurations, such as the desktop type and disk size, of a cloud desktop.
     * *   Before you call this operation, you must know the cloud desktop types and the disk sizes for each type of cloud desktop that Elastic Desktop Service (EDS) provides.
     * *   When you change the configurations of a cloud desktop, you must change the desktop type or the size of the system disk or data disk. You must configure at least one of the following parameters: DesktopType, RootDiskSizeGib, and UserDiskSizeGib. Take note of the following items:
     * 1\\. Desktop types include the specifications of vCPUs, memory, and GPUs. You can change only the desktop type, instead of one of the specifications.
     * 2\\. You cannot change a cloud desktop from the General Office type to a non-General Office type, or from a non-General Office type to the General Office type. You cannot change a cloud desktop from the Graphics type to a non-Graphics type, or from a non-Graphics type to the Graphics type.
     * 3\\. You can only increase the sizes of system and data disks. You cannot decrease the sizes of system and data disks.
     * 4\\. If your cloud desktop uses the subscription billing method, the price difference is calculated based on the price before and after configuration changes. You may receive a refund, or must pay for the price difference.
     * 5\\. If you need to change the configurations of a cloud desktop multiple times, we recommend that you wait at least 5 minutes between consecutive operations on the cloud desktop.
     * 6\\. The cloud desktop for which you want to change the desktop type must be in the Stopped state.
     * *   The changes do not affect your personal data on the cloud desktop.
     *  *
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
     * @summary Assigns a cloud computer to end users and removes all original end users of the cloud computer.
     *  *
     * @description *   The cloud computer must be in the Running state.
     * *   After you call this operation, the assignment result is immediately returned. You can call the [DescribeDesktops](https://help.aliyun.com/document_detail/436815.html) operation to query the assignment of the cloud computer. The value of the `ManagementFlags` response parameter indicates the assignment of the cloud computer. A value of `ASSIGNING` indicates that the cloud computer is being assigned, and other values indicate that the cloud computer is assigned.
     * *   We recommend that you check the assignment every 2 to 5 seconds and perform the checks within 50 seconds. Typically, 1 to 5 seconds are required to complete the assignment.
     *  *
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
     * @summary Assigns a cloud computer to end users and removes all original end users of the cloud computer.
     *  *
     * @description *   The cloud computer must be in the Running state.
     * *   After you call this operation, the assignment result is immediately returned. You can call the [DescribeDesktops](https://help.aliyun.com/document_detail/436815.html) operation to query the assignment of the cloud computer. The value of the `ManagementFlags` response parameter indicates the assignment of the cloud computer. A value of `ASSIGNING` indicates that the cloud computer is being assigned, and other values indicate that the cloud computer is assigned.
     * *   We recommend that you check the assignment every 2 to 5 seconds and perform the checks within 50 seconds. Typically, 1 to 5 seconds are required to complete the assignment.
     *  *
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
     * @summary Modifies the attributes of an image, including the name and description of the image.
     *  *
     * @description You can call this operation to modify the attributes of only custom images that are in the Available state.
     *  *
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
     * @summary Modifies the attributes of an image, including the name and description of the image.
     *  *
     * @description You can call this operation to modify the attributes of only custom images that are in the Available state.
     *  *
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
     * @summary Shares an image with other Alibaba Cloud accounts, or unshares an image from the recipient Alibaba Cloud accounts.
     *  *
     * @description ### [](#)Security of shared images
     * Elastic Desktop Service cannot guarantee the integrity and security of shared images. When you use a shared image, you must make sure that the image comes from a trusted sharer or account, and you are legally responsible for using the shared image.
     * ### [](#)Quota and billing
     * *   A shared image does not count against the image quotas of principals to which the image is shared.
     * *   After a principal uses a shared image to create a cloud computer, the sharer is not charged for the shared image.
     * *   You are not charged for shared images.
     * ### [](#)Supported sharing behaviors
     * *   You can share custom images with other Alibaba Cloud accounts.
     * *   You can share custom images between accounts in the China site (aliyun.com) and the international site (alibabacloud.com).
     * ### [](#)Unsupported sharing behaviors
     * *   You cannot share images that are shared by other Alibaba Cloud accounts.
     * *   You cannot share encrypted images.
     * *   You cannot share images across regions. If you want to share an image across regions, you must copy the image to the destination region and then share the image. For more information, see [CopyImage](https://help.aliyun.com/document_detail/436978.html).
     *  *
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
     * @summary Shares an image with other Alibaba Cloud accounts, or unshares an image from the recipient Alibaba Cloud accounts.
     *  *
     * @description ### [](#)Security of shared images
     * Elastic Desktop Service cannot guarantee the integrity and security of shared images. When you use a shared image, you must make sure that the image comes from a trusted sharer or account, and you are legally responsible for using the shared image.
     * ### [](#)Quota and billing
     * *   A shared image does not count against the image quotas of principals to which the image is shared.
     * *   After a principal uses a shared image to create a cloud computer, the sharer is not charged for the shared image.
     * *   You are not charged for shared images.
     * ### [](#)Supported sharing behaviors
     * *   You can share custom images with other Alibaba Cloud accounts.
     * *   You can share custom images between accounts in the China site (aliyun.com) and the international site (alibabacloud.com).
     * ### [](#)Unsupported sharing behaviors
     * *   You cannot share images that are shared by other Alibaba Cloud accounts.
     * *   You cannot share encrypted images.
     * *   You cannot share images across regions. If you want to share an image across regions, you must copy the image to the destination region and then share the image. For more information, see [CopyImage](https://help.aliyun.com/document_detail/436978.html).
     *  *
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
     * @summary Modifies the mount target of an Apsara File Storage NAS (NAS) file system.
     *  *
     * @description When you create a NAS file system, a mount target is automatically generated. By default, the mount target does not need to be changed. If the mount target is deleted by misoperation, you must specify a new mount target for the NAS file system in the workspace. You can call the [CreateMountTarget](https://help.aliyun.com/document_detail/62621.html) operation to create a mount target.
     *  *
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
     * @summary Modifies the mount target of an Apsara File Storage NAS (NAS) file system.
     *  *
     * @description When you create a NAS file system, a mount target is automatically generated. By default, the mount target does not need to be changed. If the mount target is deleted by misoperation, you must specify a new mount target for the NAS file system in the workspace. You can call the [CreateMountTarget](https://help.aliyun.com/document_detail/62621.html) operation to create a mount target.
     *  *
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
     * @summary Modifies the bandwidth of a premium bandwidth plan.
     *  *
     * @param ModifyNetworkPackageBandwidthRequest $request ModifyNetworkPackageBandwidthRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyNetworkPackageBandwidthResponse ModifyNetworkPackageBandwidthResponse
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
     * @summary Modifies the bandwidth of a premium bandwidth plan.
     *  *
     * @param ModifyNetworkPackageBandwidthRequest $request ModifyNetworkPackageBandwidthRequest
     *
     * @return ModifyNetworkPackageBandwidthResponse ModifyNetworkPackageBandwidthResponse
     */
    public function modifyNetworkPackageBandwidth($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNetworkPackageBandwidthWithOptions($request, $runtime);
    }

    /**
     * @summary Restores or disables a premium bandwidth plan.
     *  *
     * @description If you want to temporarily disable the Internet access of your cloud computer after the Internet access is enabled for your cloud computer, you can disable the premium bandwidth plan and restore it as needed.
     *  *
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
     * @summary Restores or disables a premium bandwidth plan.
     *  *
     * @description If you want to temporarily disable the Internet access of your cloud computer after the Internet access is enabled for your cloud computer, you can disable the premium bandwidth plan and restore it as needed.
     *  *
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
     * @summary Modifies the basic properties of an office network, including the name and local administrator permission settings.
     *  *
     * @param ModifyOfficeSiteAttributeRequest $request ModifyOfficeSiteAttributeRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyOfficeSiteAttributeResponse ModifyOfficeSiteAttributeResponse
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
     * @summary Modifies the basic properties of an office network, including the name and local administrator permission settings.
     *  *
     * @param ModifyOfficeSiteAttributeRequest $request ModifyOfficeSiteAttributeRequest
     *
     * @return ModifyOfficeSiteAttributeResponse ModifyOfficeSiteAttributeResponse
     */
    public function modifyOfficeSiteAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyOfficeSiteAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables the communication between cloud computers in an office network (formerly workspace). If you enable the communication between cloud computers in an office network, the cloud computers can access each other.
     *  *
     * @param ModifyOfficeSiteCrossDesktopAccessRequest $request ModifyOfficeSiteCrossDesktopAccessRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyOfficeSiteCrossDesktopAccessResponse ModifyOfficeSiteCrossDesktopAccessResponse
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
     * @summary Enables or disables the communication between cloud computers in an office network (formerly workspace). If you enable the communication between cloud computers in an office network, the cloud computers can access each other.
     *  *
     * @param ModifyOfficeSiteCrossDesktopAccessRequest $request ModifyOfficeSiteCrossDesktopAccessRequest
     *
     * @return ModifyOfficeSiteCrossDesktopAccessResponse ModifyOfficeSiteCrossDesktopAccessResponse
     */
    public function modifyOfficeSiteCrossDesktopAccess($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyOfficeSiteCrossDesktopAccessWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables multi-factor authentication (MFA) for an enterprise Active Directory (AD) office network (formerly workspace).
     *  *
     * @param ModifyOfficeSiteMfaEnabledRequest $request ModifyOfficeSiteMfaEnabledRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyOfficeSiteMfaEnabledResponse ModifyOfficeSiteMfaEnabledResponse
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
     * @summary Enables or disables multi-factor authentication (MFA) for an enterprise Active Directory (AD) office network (formerly workspace).
     *  *
     * @param ModifyOfficeSiteMfaEnabledRequest $request ModifyOfficeSiteMfaEnabledRequest
     *
     * @return ModifyOfficeSiteMfaEnabledResponse ModifyOfficeSiteMfaEnabledResponse
     */
    public function modifyOfficeSiteMfaEnabled($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyOfficeSiteMfaEnabledWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a policy.
     *  *
     * @param ModifyPolicyGroupRequest $request ModifyPolicyGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyPolicyGroupResponse ModifyPolicyGroupResponse
     */
    public function modifyPolicyGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->adminAccess)) {
            $query['AdminAccess'] = $request->adminAccess;
        }
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
        if (!Utils::isUnset($request->domainResolveRule)) {
            $query['DomainResolveRule'] = $request->domainResolveRule;
        }
        if (!Utils::isUnset($request->domainResolveRuleType)) {
            $query['DomainResolveRuleType'] = $request->domainResolveRuleType;
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
        if (!Utils::isUnset($request->maxReconnectTime)) {
            $query['MaxReconnectTime'] = $request->maxReconnectTime;
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
        if (!Utils::isUnset($request->recordingUserNotify)) {
            $query['RecordingUserNotify'] = $request->recordingUserNotify;
        }
        if (!Utils::isUnset($request->recordingUserNotifyMessage)) {
            $query['RecordingUserNotifyMessage'] = $request->recordingUserNotifyMessage;
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
        if (!Utils::isUnset($request->watermarkAntiCam)) {
            $query['WatermarkAntiCam'] = $request->watermarkAntiCam;
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
        if (!Utils::isUnset($request->watermarkPower)) {
            $query['WatermarkPower'] = $request->watermarkPower;
        }
        if (!Utils::isUnset($request->watermarkRowAmount)) {
            $query['WatermarkRowAmount'] = $request->watermarkRowAmount;
        }
        if (!Utils::isUnset($request->watermarkSecurity)) {
            $query['WatermarkSecurity'] = $request->watermarkSecurity;
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
     * @summary Modifies a policy.
     *  *
     * @param ModifyPolicyGroupRequest $request ModifyPolicyGroupRequest
     *
     * @return ModifyPolicyGroupResponse ModifyPolicyGroupResponse
     */
    public function modifyPolicyGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPolicyGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Grants permissions on cloud desktops to end users, or revokes the permissions from the end users.
     *  *
     * @description You can modify end users only for cloud computers that are in the Running state.
     *  *
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
     * @summary Grants permissions on cloud desktops to end users, or revokes the permissions from the end users.
     *  *
     * @description You can modify end users only for cloud computers that are in the Running state.
     *  *
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
     * @summary Changes the end users of a cloud computer pool into new end users.
     *  *
     * @param ModifyUserToDesktopGroupRequest $request ModifyUserToDesktopGroupRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyUserToDesktopGroupResponse ModifyUserToDesktopGroupResponse
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
     * @summary Changes the end users of a cloud computer pool into new end users.
     *  *
     * @param ModifyUserToDesktopGroupRequest $request ModifyUserToDesktopGroupRequest
     *
     * @return ModifyUserToDesktopGroupResponse ModifyUserToDesktopGroupResponse
     */
    public function modifyUserToDesktopGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyUserToDesktopGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Move files or folders.
     *  *
     * @param MoveCdsFileRequest $request MoveCdsFileRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return MoveCdsFileResponse MoveCdsFileResponse
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
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
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
     * @summary Move files or folders.
     *  *
     * @param MoveCdsFileRequest $request MoveCdsFileRequest
     *
     * @return MoveCdsFileResponse MoveCdsFileResponse
     */
    public function moveCdsFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->moveCdsFileWithOptions($request, $runtime);
    }

    /**
     * @summary Restart cloud computers.
     *  *
     * @description The cloud computers that you want to restart must be in the Running state.
     *  *
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
     * @summary Restart cloud computers.
     *  *
     * @description The cloud computers that you want to restart must be in the Running state.
     *  *
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
     * @summary Recreates cloud computers.
     *  *
     * @description Before you change the image of a cloud computer, take note of the following limits:
     * *   You can select an image whose OS is different from the OS of the original image. The image change feature is not supported in the following regions: China (Hong Kong), Australia (Sydney), Singapore, and Japan (Tokyo).
     * *   GPU images and non-GPU images cannot be exchanged. Graphical cloud computers can only use GPU-accelerated images. Non-graphical cloud computers can only use non-GPU-accelerated images.
     * After the image is changed, the system uses the new image to initialize the system disk of the cloud computer. This has the following impacts:
     * *   Data in the system disk of the original cloud computer is cleared. Snapshots that are created based on the system disk of the original cloud computer can no longer be used. The system automatically deletes the snapshots.
     * *   If the OS of the image is changed, the data in the data disks of the original cloud computer is cleared, and the snapshots that are created based on the data disks of the original cloud computer can no longer be used. The system automatically deletes the snapshots. If the OS of the image is not changed, the data in the data disks of the original cloud computer is retained, and the snapshots that are created based on the data disks of the original cloud computer can still be used.
     *  *
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
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->operateType)) {
            $query['OperateType'] = $request->operateType;
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
     * @summary Recreates cloud computers.
     *  *
     * @description Before you change the image of a cloud computer, take note of the following limits:
     * *   You can select an image whose OS is different from the OS of the original image. The image change feature is not supported in the following regions: China (Hong Kong), Australia (Sydney), Singapore, and Japan (Tokyo).
     * *   GPU images and non-GPU images cannot be exchanged. Graphical cloud computers can only use GPU-accelerated images. Non-graphical cloud computers can only use non-GPU-accelerated images.
     * After the image is changed, the system uses the new image to initialize the system disk of the cloud computer. This has the following impacts:
     * *   Data in the system disk of the original cloud computer is cleared. Snapshots that are created based on the system disk of the original cloud computer can no longer be used. The system automatically deletes the snapshots.
     * *   If the OS of the image is changed, the data in the data disks of the original cloud computer is cleared, and the snapshots that are created based on the data disks of the original cloud computer can no longer be used. The system automatically deletes the snapshots. If the OS of the image is not changed, the data in the data disks of the original cloud computer is retained, and the snapshots that are created based on the data disks of the original cloud computer can still be used.
     *  *
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
     * @summary Removes the file sharing feature of a folder in a cloud disk.
     *  *
     * @param RemoveFilePermissionRequest $tmpReq  RemoveFilePermissionRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveFilePermissionResponse RemoveFilePermissionResponse
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
        if (!Utils::isUnset($request->groupId)) {
            $query['GroupId'] = $request->groupId;
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
     * @summary Removes the file sharing feature of a folder in a cloud disk.
     *  *
     * @param RemoveFilePermissionRequest $request RemoveFilePermissionRequest
     *
     * @return RemoveFilePermissionResponse RemoveFilePermissionResponse
     */
    public function removeFilePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeFilePermissionWithOptions($request, $runtime);
    }

    /**
     * @summary Removes authorized users of cloud computer pools. The removed users can no longer connect to cloud computers in the cloud computer pool.
     *  *
     * @param RemoveUserFromDesktopGroupRequest $request RemoveUserFromDesktopGroupRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveUserFromDesktopGroupResponse RemoveUserFromDesktopGroupResponse
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
     * @summary Removes authorized users of cloud computer pools. The removed users can no longer connect to cloud computers in the cloud computer pool.
     *  *
     * @param RemoveUserFromDesktopGroupRequest $request RemoveUserFromDesktopGroupRequest
     *
     * @return RemoveUserFromDesktopGroupResponse RemoveUserFromDesktopGroupResponse
     */
    public function removeUserFromDesktopGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeUserFromDesktopGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 移除超卖用户组用户
     *  *
     * @param RemoveUserFromDesktopOversoldUserGroupRequest $request RemoveUserFromDesktopOversoldUserGroupRequest
     * @param RuntimeOptions                                $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveUserFromDesktopOversoldUserGroupResponse RemoveUserFromDesktopOversoldUserGroupResponse
     */
    public function removeUserFromDesktopOversoldUserGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endUserId)) {
            $query['EndUserId'] = $request->endUserId;
        }
        if (!Utils::isUnset($request->oversoldGroupId)) {
            $query['OversoldGroupId'] = $request->oversoldGroupId;
        }
        if (!Utils::isUnset($request->userDesktopId)) {
            $query['UserDesktopId'] = $request->userDesktopId;
        }
        if (!Utils::isUnset($request->userGroupId)) {
            $query['UserGroupId'] = $request->userGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveUserFromDesktopOversoldUserGroup',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveUserFromDesktopOversoldUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 移除超卖用户组用户
     *  *
     * @param RemoveUserFromDesktopOversoldUserGroupRequest $request RemoveUserFromDesktopOversoldUserGroupRequest
     *
     * @return RemoveUserFromDesktopOversoldUserGroupResponse RemoveUserFromDesktopOversoldUserGroupResponse
     */
    public function removeUserFromDesktopOversoldUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeUserFromDesktopOversoldUserGroupWithOptions($request, $runtime);
    }

    /**
     * @summary 续费桌面超卖组
     *  *
     * @param RenewDesktopOversoldGroupRequest $request RenewDesktopOversoldGroupRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return RenewDesktopOversoldGroupResponse RenewDesktopOversoldGroupResponse
     */
    public function renewDesktopOversoldGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->oversoldGroupId)) {
            $query['OversoldGroupId'] = $request->oversoldGroupId;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RenewDesktopOversoldGroup',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenewDesktopOversoldGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 续费桌面超卖组
     *  *
     * @param RenewDesktopOversoldGroupRequest $request RenewDesktopOversoldGroupRequest
     *
     * @return RenewDesktopOversoldGroupResponse RenewDesktopOversoldGroupResponse
     */
    public function renewDesktopOversoldGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewDesktopOversoldGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Renew subscription cloud computers.
     *  *
     * @param RenewDesktopsRequest $request RenewDesktopsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return RenewDesktopsResponse RenewDesktopsResponse
     */
    public function renewDesktopsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
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
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
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
     * @summary Renew subscription cloud computers.
     *  *
     * @param RenewDesktopsRequest $request RenewDesktopsRequest
     *
     * @return RenewDesktopsResponse RenewDesktopsResponse
     */
    public function renewDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewDesktopsWithOptions($request, $runtime);
    }

    /**
     * @summary Renews premium bandwidth plans.
     *  *
     * @param RenewNetworkPackagesRequest $request RenewNetworkPackagesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return RenewNetworkPackagesResponse RenewNetworkPackagesResponse
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
     * @summary Renews premium bandwidth plans.
     *  *
     * @param RenewNetworkPackagesRequest $request RenewNetworkPackagesRequest
     *
     * @return RenewNetworkPackagesResponse RenewNetworkPackagesResponse
     */
    public function renewNetworkPackages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewNetworkPackagesWithOptions($request, $runtime);
    }

    /**
     * @summary Resets cloud computers.
     *  *
     * @description > You can call this operation to reset only cloud computers in a cloud computer pool.
     *  *
     * @param ResetDesktopsRequest $request ResetDesktopsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetDesktopsResponse ResetDesktopsResponse
     */
    public function resetDesktopsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->desktopGroupId)) {
            $query['DesktopGroupId'] = $request->desktopGroupId;
        }
        if (!Utils::isUnset($request->desktopGroupIds)) {
            $query['DesktopGroupIds'] = $request->desktopGroupIds;
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
        if (!Utils::isUnset($request->resetScope)) {
            $query['ResetScope'] = $request->resetScope;
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
     * @summary Resets cloud computers.
     *  *
     * @description > You can call this operation to reset only cloud computers in a cloud computer pool.
     *  *
     * @param ResetDesktopsRequest $request ResetDesktopsRequest
     *
     * @return ResetDesktopsResponse ResetDesktopsResponse
     */
    public function resetDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetDesktopsWithOptions($request, $runtime);
    }

    /**
     * @summary Resets the mount target of an Apsara File Storage NAS (NAS) file system.
     *  *
     * @description When you create a NAS file system, a mount target is automatically generated. By default, you do not need to modify the mount target of the NAS file system. If the mount target is disabled, you need to reset the mount target of the NAS file system.
     *  *
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
     * @summary Resets the mount target of an Apsara File Storage NAS (NAS) file system.
     *  *
     * @description When you create a NAS file system, a mount target is automatically generated. By default, you do not need to modify the mount target of the NAS file system. If the mount target is disabled, you need to reset the mount target of the NAS file system.
     *  *
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
     * @summary Restores the data of a disk from a snapshot.
     *  *
     * @description Before you call this operation, make sure that the following operations are performed:
     * *   The data that you want to retain is backed up.
     *     > The disk restoration operation is irreversible. After you call this operation, the disk is restored to the status at the point in time when the snapshot was created. Data that is generated between the snapshot creation time and the current time is lost. Before you restore the disk based on the snapshot, make sure that you back up data.
     * *   The cloud computer to which the disk belongs is stopped.
     *  *
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
     * @summary Restores the data of a disk from a snapshot.
     *  *
     * @description Before you call this operation, make sure that the following operations are performed:
     * *   The data that you want to retain is backed up.
     *     > The disk restoration operation is irreversible. After you call this operation, the disk is restored to the status at the point in time when the snapshot was created. Data that is generated between the snapshot creation time and the current time is lost. Before you restore the disk based on the snapshot, make sure that you back up data.
     * *   The cloud computer to which the disk belongs is stopped.
     *  *
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
     * @summary Revokes the coordinate permissions.
     *  *
     * @param RevokeCoordinatePrivilegeRequest $request RevokeCoordinatePrivilegeRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return RevokeCoordinatePrivilegeResponse RevokeCoordinatePrivilegeResponse
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
     * @summary Revokes the coordinate permissions.
     *  *
     * @param RevokeCoordinatePrivilegeRequest $request RevokeCoordinatePrivilegeRequest
     *
     * @return RevokeCoordinatePrivilegeResponse RevokeCoordinatePrivilegeResponse
     */
    public function revokeCoordinatePrivilege($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeCoordinatePrivilegeWithOptions($request, $runtime);
    }

    /**
     * @summary Runs a PowerShell or batch (.bat) script on Windows cloud desktops.
     *  *
     * @description You can use the RunCommand operation to run scripts only on Windows cloud desktops.
     *  *
     * @param RunCommandRequest $request RunCommandRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return RunCommandResponse RunCommandResponse
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
     * @summary Runs a PowerShell or batch (.bat) script on Windows cloud desktops.
     *  *
     * @description You can use the RunCommand operation to run scripts only on Windows cloud desktops.
     *  *
     * @param RunCommandRequest $request RunCommandRequest
     *
     * @return RunCommandResponse RunCommandResponse
     */
    public function runCommand($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runCommandWithOptions($request, $runtime);
    }

    /**
     * @summary Obtains the verification code that is required when you bind an advanced office network to a Cloud Enterprise Network (CEN) instance that belongs to another Alibaba Cloud account.
     *  *
     * @description You must call this operation to obtain the verification code that is required when you bind an advanced office network to a CEN instance that belongs to another Alibaba Cloud account. After you call this operation, the system sends a verification code to the email address associated with the Alibaba Cloud account to which the CEN instance belongs.
     *  *
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
     * @summary Obtains the verification code that is required when you bind an advanced office network to a Cloud Enterprise Network (CEN) instance that belongs to another Alibaba Cloud account.
     *  *
     * @description You must call this operation to obtain the verification code that is required when you bind an advanced office network to a CEN instance that belongs to another Alibaba Cloud account. After you call this operation, the system sends a verification code to the email address associated with the Alibaba Cloud account to which the CEN instance belongs.
     *  *
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
     * @summary Configures an auto scaling policy for a multi-session cloud computer. Elastic Desktop Service allows multiple end users to share a cloud computer in a multi-session cloud computer pool. This helps save costs.
     *  *
     * @param SetDesktopGroupScaleTimerRequest $request SetDesktopGroupScaleTimerRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDesktopGroupScaleTimerResponse SetDesktopGroupScaleTimerResponse
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
     * @summary Configures an auto scaling policy for a multi-session cloud computer. Elastic Desktop Service allows multiple end users to share a cloud computer in a multi-session cloud computer pool. This helps save costs.
     *  *
     * @param SetDesktopGroupScaleTimerRequest $request SetDesktopGroupScaleTimerRequest
     *
     * @return SetDesktopGroupScaleTimerResponse SetDesktopGroupScaleTimerResponse
     */
    public function setDesktopGroupScaleTimer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDesktopGroupScaleTimerWithOptions($request, $runtime);
    }

    /**
     * @summary Configures a scheduled task for a cloud computer pool, such as starting, stopping, restarting or resting cloud computers in the pool.
     *  *
     * @param SetDesktopGroupTimerRequest $request SetDesktopGroupTimerRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDesktopGroupTimerResponse SetDesktopGroupTimerResponse
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
     * @summary Configures a scheduled task for a cloud computer pool, such as starting, stopping, restarting or resting cloud computers in the pool.
     *  *
     * @param SetDesktopGroupTimerRequest $request SetDesktopGroupTimerRequest
     *
     * @return SetDesktopGroupTimerResponse SetDesktopGroupTimerResponse
     */
    public function setDesktopGroupTimer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDesktopGroupTimerWithOptions($request, $runtime);
    }

    /**
     * @summary Sets the status of a scheduled task for a cloud computer pool. For example, you enable or disable the scheduled task.
     *  *
     * @param SetDesktopGroupTimerStatusRequest $request SetDesktopGroupTimerStatusRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDesktopGroupTimerStatusResponse SetDesktopGroupTimerStatusResponse
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
     * @summary Sets the status of a scheduled task for a cloud computer pool. For example, you enable or disable the scheduled task.
     *  *
     * @param SetDesktopGroupTimerStatusRequest $request SetDesktopGroupTimerStatusRequest
     *
     * @return SetDesktopGroupTimerStatusResponse SetDesktopGroupTimerStatusResponse
     */
    public function setDesktopGroupTimerStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDesktopGroupTimerStatusWithOptions($request, $runtime);
    }

    /**
     * @summary 设置桌面维护模式
     *  *
     * @param SetDesktopMaintenanceRequest $request SetDesktopMaintenanceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDesktopMaintenanceResponse SetDesktopMaintenanceResponse
     */
    public function setDesktopMaintenanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->desktopIds)) {
            $query['DesktopIds'] = $request->desktopIds;
        }
        if (!Utils::isUnset($request->mode)) {
            $query['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetDesktopMaintenance',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetDesktopMaintenanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 设置桌面维护模式
     *  *
     * @param SetDesktopMaintenanceRequest $request SetDesktopMaintenanceRequest
     *
     * @return SetDesktopMaintenanceResponse SetDesktopMaintenanceResponse
     */
    public function setDesktopMaintenance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDesktopMaintenanceWithOptions($request, $runtime);
    }

    /**
     * @summary Configures the single sign-on (SSO) status of an Active Directory (AD) directory.
     *  *
     * @description This operation is supported only for AD directories, not for RAM directories.
     *  *
     * @param SetDirectorySsoStatusRequest $request SetDirectorySsoStatusRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SetDirectorySsoStatusResponse SetDirectorySsoStatusResponse
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
     * @summary Configures the single sign-on (SSO) status of an Active Directory (AD) directory.
     *  *
     * @description This operation is supported only for AD directories, not for RAM directories.
     *  *
     * @param SetDirectorySsoStatusRequest $request SetDirectorySsoStatusRequest
     *
     * @return SetDirectorySsoStatusResponse SetDirectorySsoStatusResponse
     */
    public function setDirectorySsoStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDirectorySsoStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Uploads the metadata of a Security Assertion Markup Language (SAML) 2.0-based identity provider (IdP).
     *  *
     * @description You can call this operation only for workspaces of the Active Directory (AD) and convenience account types.
     *  *
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
     * @summary Uploads the metadata of a Security Assertion Markup Language (SAML) 2.0-based identity provider (IdP).
     *  *
     * @description You can call this operation only for workspaces of the Active Directory (AD) and convenience account types.
     *  *
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
     * @summary Enables or disables single sign-on (SSO) for a workspace.
     *  *
     * @param SetOfficeSiteSsoStatusRequest $request SetOfficeSiteSsoStatusRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return SetOfficeSiteSsoStatusResponse SetOfficeSiteSsoStatusResponse
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
     * @summary Enables or disables single sign-on (SSO) for a workspace.
     *  *
     * @param SetOfficeSiteSsoStatusRequest $request SetOfficeSiteSsoStatusRequest
     *
     * @return SetOfficeSiteSsoStatusResponse SetOfficeSiteSsoStatusResponse
     */
    public function setOfficeSiteSsoStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setOfficeSiteSsoStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Configures directories in the blacklist and whitelist based on the user profile management (UPM) feature.
     *  *
     * @param SetUserProfilePathRulesRequest $tmpReq  SetUserProfilePathRulesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return SetUserProfilePathRulesResponse SetUserProfilePathRulesResponse
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
     * @summary Configures directories in the blacklist and whitelist based on the user profile management (UPM) feature.
     *  *
     * @param SetUserProfilePathRulesRequest $request SetUserProfilePathRulesRequest
     *
     * @return SetUserProfilePathRulesResponse SetUserProfilePathRulesResponse
     */
    public function setUserProfilePathRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setUserProfilePathRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Starts stopped cloud computers. After the API operation is successfully called, the cloud computers enter the Running state.
     *  *
     * @description The cloud computers that you want to start must be in the Stopped state.
     *  *
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
     * @summary Starts stopped cloud computers. After the API operation is successfully called, the cloud computers enter the Running state.
     *  *
     * @description The cloud computers that you want to start must be in the Stopped state.
     *  *
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
     * @summary Stop cloud computers that are in the Running state. After the operation is successfully called, the cloud computers enter the Stopped state.
     *  *
     * @description The cloud computers that you want to stop must be in the Running state.
     *  *
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
     * @summary Stop cloud computers that are in the Running state. After the operation is successfully called, the cloud computers enter the Stopped state.
     *  *
     * @description The cloud computers that you want to stop must be in the Running state.
     *  *
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
     * @summary Stops a Cloud Assistant command that is running on one or more cloud desktops.
     *  *
     * @description When you stop a one-time execution of a command, the command continues to run on the cloud desktops where it has started to run, and will not run on the cloud desktops where it has not started to run.
     *  *
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
     * @summary Stops a Cloud Assistant command that is running on one or more cloud desktops.
     *  *
     * @description When you stop a one-time execution of a command, the command continues to run on the cloud desktops where it has started to run, and will not run on the cloud desktops where it has not started to run.
     *  *
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
     * @summary Adds tags to cloud computers. This allows you to filter and manage cloud computers by tag.
     *  *
     * @description If TagKey is specified, the new TagValue value overrides the original TagValue value.
     *  *
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
     * @summary Adds tags to cloud computers. This allows you to filter and manage cloud computers by tag.
     *  *
     * @description If TagKey is specified, the new TagValue value overrides the original TagValue value.
     *  *
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
     * @summary 解绑用户桌面
     *  *
     * @param UnbindUserDesktopRequest $request UnbindUserDesktopRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return UnbindUserDesktopResponse UnbindUserDesktopResponse
     */
    public function unbindUserDesktopWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->desktopAgentIds)) {
            $query['DesktopAgentIds'] = $request->desktopAgentIds;
        }
        if (!Utils::isUnset($request->desktopGroupId)) {
            $query['DesktopGroupId'] = $request->desktopGroupId;
        }
        if (!Utils::isUnset($request->desktopIds)) {
            $query['DesktopIds'] = $request->desktopIds;
        }
        if (!Utils::isUnset($request->force)) {
            $query['Force'] = $request->force;
        }
        if (!Utils::isUnset($request->reason)) {
            $query['Reason'] = $request->reason;
        }
        if (!Utils::isUnset($request->userDesktopIds)) {
            $query['UserDesktopIds'] = $request->userDesktopIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnbindUserDesktop',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnbindUserDesktopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 解绑用户桌面
     *  *
     * @param UnbindUserDesktopRequest $request UnbindUserDesktopRequest
     *
     * @return UnbindUserDesktopResponse UnbindUserDesktopResponse
     */
    public function unbindUserDesktop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindUserDesktopWithOptions($request, $runtime);
    }

    /**
     * @summary Unlocks a virtual multi-factor authentication (MFA) device that is in the LOCKED state.
     *  *
     * @param UnlockVirtualMFADeviceRequest $request UnlockVirtualMFADeviceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return UnlockVirtualMFADeviceResponse UnlockVirtualMFADeviceResponse
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
     * @summary Unlocks a virtual multi-factor authentication (MFA) device that is in the LOCKED state.
     *  *
     * @param UnlockVirtualMFADeviceRequest $request UnlockVirtualMFADeviceRequest
     *
     * @return UnlockVirtualMFADeviceResponse UnlockVirtualMFADeviceResponse
     */
    public function unlockVirtualMFADevice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unlockVirtualMFADeviceWithOptions($request, $runtime);
    }

    /**
     * @summary Removes tags from cloud computers. After you remove a tag, if the tag is not added to a cloud computer, the tag is automatically deleted.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
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
     * @summary Removes tags from cloud computers. After you remove a tag, if the tag is not added to a cloud computer, the tag is automatically deleted.
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or disables the auto-push feature for an image update task.
     *  *
     * @description You can call this operation to manage each image update task. This operation is valid only when the auto-update switch in the image update module for global image updates is turned off. If the auto-update switch is turned on, the switches for each image update task are always turned on. If you want to turn on or off the auto-update switch, go to the Elastic Desktop Service console and choose **Operations > Image Updates** in the left-side navigation pane.
     *  *
     * @param UpdateFotaTaskRequest $request UpdateFotaTaskRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateFotaTaskResponse UpdateFotaTaskResponse
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
     * @summary Enables or disables the auto-push feature for an image update task.
     *  *
     * @description You can call this operation to manage each image update task. This operation is valid only when the auto-update switch in the image update module for global image updates is turned off. If the auto-update switch is turned on, the switches for each image update task are always turned on. If you want to turn on or off the auto-update switch, go to the Elastic Desktop Service console and choose **Operations > Image Updates** in the left-side navigation pane.
     *  *
     * @param UpdateFotaTaskRequest $request UpdateFotaTaskRequest
     *
     * @return UpdateFotaTaskResponse UpdateFotaTaskResponse
     */
    public function updateFotaTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateFotaTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Uploads your custom Windows image.
     *  *
     * @description >  You can upload only Windows images.
     *  *
     * @param UploadImageRequest $request UploadImageRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return UploadImageResponse UploadImageResponse
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
     * @summary Uploads your custom Windows image.
     *  *
     * @description >  You can upload only Windows images.
     *  *
     * @param UploadImageRequest $request UploadImageRequest
     *
     * @return UploadImageResponse UploadImageResponse
     */
    public function uploadImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadImageWithOptions($request, $runtime);
    }

    /**
     * @summary Verifies the ID of a Cloud Enterprise Network (CEN) instance and the ID of the Alibaba Cloud account to which the instance belongs and checks whether a CIDR block conflict exists between the routes of the instance and the IPv4 CIDR blocks of the associated office network.
     *  *
     * @param VerifyCenRequest $request VerifyCenRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return VerifyCenResponse VerifyCenResponse
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
     * @summary Verifies the ID of a Cloud Enterprise Network (CEN) instance and the ID of the Alibaba Cloud account to which the instance belongs and checks whether a CIDR block conflict exists between the routes of the instance and the IPv4 CIDR blocks of the associated office network.
     *  *
     * @param VerifyCenRequest $request VerifyCenRequest
     *
     * @return VerifyCenResponse VerifyCenResponse
     */
    public function verifyCen($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->verifyCenWithOptions($request, $runtime);
    }

    /**
     * @param WakeupDesktopsRequest $request WakeupDesktopsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return WakeupDesktopsResponse WakeupDesktopsResponse
     */
    public function wakeupDesktopsWithOptions($request, $runtime)
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
            'action'      => 'WakeupDesktops',
            'version'     => '2020-09-30',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return WakeupDesktopsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param WakeupDesktopsRequest $request WakeupDesktopsRequest
     *
     * @return WakeupDesktopsResponse WakeupDesktopsResponse
     */
    public function wakeupDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->wakeupDesktopsWithOptions($request, $runtime);
    }
}
