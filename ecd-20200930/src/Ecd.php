<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930;

use AlibabaCloud\Dara\Models\RuntimeOptions;
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
use AlibabaCloud\SDK\Ecd\V20200930\Models\BindConfigGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\BindConfigGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CancelAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CancelAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CancelCdsFileShareLinkRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CancelCdsFileShareLinkResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CancelCoordinationForMonitoringRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CancelCoordinationForMonitoringResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CancelCopyImageRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CancelCopyImageResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CloneCenterPolicyRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CloneCenterPolicyResponse;
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
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateBandwidthResourcePackagesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateBandwidthResourcePackagesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateBundleRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateBundleResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCdsFileRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCdsFileResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCdsFileShareLinkRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCdsFileShareLinkResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCenterPolicyRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCenterPolicyResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCloudDriveServiceRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCloudDriveServiceResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCloudDriveUsersRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCloudDriveUsersResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateConfigGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateConfigGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopOversoldGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopOversoldGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateDesktopsShrinkRequest;
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
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateTemplateRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateTemplateResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteAutoSnapshotPolicyRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteAutoSnapshotPolicyResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteBundlesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteBundlesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteCdsFileRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteCdsFileResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteCenterPolicyRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteCenterPolicyResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteCloudDriveGroupsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteCloudDriveGroupsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteCloudDriveUsersRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteCloudDriveUsersResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteConfigGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteConfigGroupResponse;
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
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteTemplatesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DeleteTemplatesResponse;
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
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCenterPolicyListRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCenterPolicyListResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeClientEventsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeClientEventsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCloudDriveGroupsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCloudDriveGroupsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCloudDrivePermissionsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCloudDrivePermissionsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCloudDriveUsersRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCloudDriveUsersResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeConfigGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeConfigGroupResponse;
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
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeRefundPriceRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeRefundPriceResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeRegionsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeRegionsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeRenewalPriceRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeRenewalPriceResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeResourceByCenterPolicyIdRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeResourceByCenterPolicyIdResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSessionStatisticRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSessionStatisticResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSnapshotsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSnapshotsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeTemplatesRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeTemplatesResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeTimerGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeTimerGroupResponse;
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
use AlibabaCloud\SDK\Ecd\V20200930\Models\DownloadCdsFileRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DownloadCdsFileResponse;
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
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyCenterPolicyRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyCenterPolicyResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyCloudDriveGroupsRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyCloudDriveGroupsResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyCloudDrivePermissionRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyCloudDrivePermissionResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyCloudDriveUsersRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyCloudDriveUsersResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyConfigGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyConfigGroupResponse;
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
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyOfficeSiteDnsInfoRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyOfficeSiteDnsInfoResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyOfficeSiteMfaEnabledRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyOfficeSiteMfaEnabledResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyPolicyGroupResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyResourceCenterPolicyRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyResourceCenterPolicyResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyTemplateBaseInfoRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyTemplateBaseInfoResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyTemplateRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyTemplateResponse;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyTimerGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyTimerGroupResponse;
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
use AlibabaCloud\SDK\Ecd\V20200930\Models\RenewDesktopGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\RenewDesktopGroupResponse;
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
use AlibabaCloud\SDK\Ecd\V20200930\Models\UnbindConfigGroupRequest;
use AlibabaCloud\SDK\Ecd\V20200930\Models\UnbindConfigGroupResponse;
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
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Ecd extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * Unlocks a convenience office network that is automatically locked due to a long idle period of time.
     *
     * @remarks
     * If you do not create any cloud computer in a convenience office network within 15 days, the office network is automatically locked and virtual private cloud (VPC) resources are released. If you want to resume the office network, you can call this operation to unlock the office network.
     *
     * @param request - ActivateOfficeSiteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ActivateOfficeSiteResponse
     *
     * @param ActivateOfficeSiteRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ActivateOfficeSiteResponse
     */
    public function activateOfficeSiteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ActivateOfficeSite',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ActivateOfficeSiteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unlocks a convenience office network that is automatically locked due to a long idle period of time.
     *
     * @remarks
     * If you do not create any cloud computer in a convenience office network within 15 days, the office network is automatically locked and virtual private cloud (VPC) resources are released. If you want to resume the office network, you can call this operation to unlock the office network.
     *
     * @param request - ActivateOfficeSiteRequest
     *
     * @returns ActivateOfficeSiteResponse
     *
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
     * 添加桌面超卖用户组.
     *
     * @param request - AddDesktopOversoldUserGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddDesktopOversoldUserGroupResponse
     *
     * @param AddDesktopOversoldUserGroupRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return AddDesktopOversoldUserGroupResponse
     */
    public function addDesktopOversoldUserGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->oversoldGroupId) {
            @$query['OversoldGroupId'] = $request->oversoldGroupId;
        }

        if (null !== $request->policyGroupId) {
            @$query['PolicyGroupId'] = $request->policyGroupId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddDesktopOversoldUserGroup',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddDesktopOversoldUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加桌面超卖用户组.
     *
     * @param request - AddDesktopOversoldUserGroupRequest
     *
     * @returns AddDesktopOversoldUserGroupResponse
     *
     * @param AddDesktopOversoldUserGroupRequest $request
     *
     * @return AddDesktopOversoldUserGroupResponse
     */
    public function addDesktopOversoldUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDesktopOversoldUserGroupWithOptions($request, $runtime);
    }

    /**
     * Adds trusted devices.
     *
     * @remarks
     * Each device can be registered in only one Alibaba Cloud account. If you register a device that has been registered in another Alibaba Cloud account, an error is reported.
     *
     * @param request - AddDevicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddDevicesResponse
     *
     * @param AddDevicesRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AddDevicesResponse
     */
    public function addDevicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientType) {
            @$query['ClientType'] = $request->clientType;
        }

        if (null !== $request->deviceIds) {
            @$query['DeviceIds'] = $request->deviceIds;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddDevices',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds trusted devices.
     *
     * @remarks
     * Each device can be registered in only one Alibaba Cloud account. If you register a device that has been registered in another Alibaba Cloud account, an error is reported.
     *
     * @param request - AddDevicesRequest
     *
     * @returns AddDevicesResponse
     *
     * @param AddDevicesRequest $request
     *
     * @return AddDevicesResponse
     */
    public function addDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDevicesWithOptions($request, $runtime);
    }

    /**
     * Shares a folder of a cloud disk with other users.
     *
     * @remarks
     * You can call this operation to share a specific folder with other users. You can also configure the folder permissions.
     *
     * @param tmpReq - AddFilePermissionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddFilePermissionResponse
     *
     * @param AddFilePermissionRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return AddFilePermissionResponse
     */
    public function addFilePermissionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AddFilePermissionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->memberList) {
            $request->memberListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->memberList, 'MemberList', 'json');
        }

        $query = [];
        if (null !== $request->cdsId) {
            @$query['CdsId'] = $request->cdsId;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->fileId) {
            @$query['FileId'] = $request->fileId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->memberListShrink) {
            @$query['MemberList'] = $request->memberListShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddFilePermission',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddFilePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Shares a folder of a cloud disk with other users.
     *
     * @remarks
     * You can call this operation to share a specific folder with other users. You can also configure the folder permissions.
     *
     * @param request - AddFilePermissionRequest
     *
     * @returns AddFilePermissionResponse
     *
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
     * Adds authorized users for a cloud computer share. The system automatically assigns cloud computers from a share to authorized users based on administrator-configured rules.
     *
     * @param request - AddUserToDesktopGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddUserToDesktopGroupResponse
     *
     * @param AddUserToDesktopGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return AddUserToDesktopGroupResponse
     */
    public function addUserToDesktopGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->desktopGroupId) {
            @$query['DesktopGroupId'] = $request->desktopGroupId;
        }

        if (null !== $request->desktopGroupIds) {
            @$query['DesktopGroupIds'] = $request->desktopGroupIds;
        }

        if (null !== $request->endUserIds) {
            @$query['EndUserIds'] = $request->endUserIds;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->userGroupName) {
            @$query['UserGroupName'] = $request->userGroupName;
        }

        if (null !== $request->userOuPath) {
            @$query['UserOuPath'] = $request->userOuPath;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddUserToDesktopGroup',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddUserToDesktopGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds authorized users for a cloud computer share. The system automatically assigns cloud computers from a share to authorized users based on administrator-configured rules.
     *
     * @param request - AddUserToDesktopGroupRequest
     *
     * @returns AddUserToDesktopGroupResponse
     *
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
     * 添加用户到超卖用户组.
     *
     * @param request - AddUserToDesktopOversoldUserGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddUserToDesktopOversoldUserGroupResponse
     *
     * @param AddUserToDesktopOversoldUserGroupRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return AddUserToDesktopOversoldUserGroupResponse
     */
    public function addUserToDesktopOversoldUserGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addUserAmount) {
            @$query['AddUserAmount'] = $request->addUserAmount;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->oversoldGroupId) {
            @$query['OversoldGroupId'] = $request->oversoldGroupId;
        }

        if (null !== $request->userGroupId) {
            @$query['UserGroupId'] = $request->userGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddUserToDesktopOversoldUserGroup',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddUserToDesktopOversoldUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 添加用户到超卖用户组.
     *
     * @param request - AddUserToDesktopOversoldUserGroupRequest
     *
     * @returns AddUserToDesktopOversoldUserGroupResponse
     *
     * @param AddUserToDesktopOversoldUserGroupRequest $request
     *
     * @return AddUserToDesktopOversoldUserGroupResponse
     */
    public function addUserToDesktopOversoldUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addUserToDesktopOversoldUserGroupWithOptions($request, $runtime);
    }

    /**
     * Apply an automatic snapshot policy to cloud computers. After the automatic snapshot policy is applied to the cloud computers, Elastic Desktop Service automatically creates snapshots for the cloud computers based on the time specified in the automatic snapshot policy.
     *
     * @remarks
     * You can also associate an automatic snapshot policy with a cloud desktop in the Elastic Desktop Service (EDS) console. To do so, perform the following steps: 1. Log on to the EDS console. 2. Choose Desktops and Groups > Desktops in the left-side navigation pane. 3. Find the cloud desktop that you want to manage on the Cloud Desktops page and choose More > Change Automatic Snapshot Policy in the Actions column. 4. Configure a policy for the cloud desktop as prompted in the Change Automatic Snapshot Policy panel.
     * After you associate an automatic snapshot policy with the cloud desktop, the system creates snapshots for the cloud desktop based on the policy.
     *
     * @param request - ApplyAutoSnapshotPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyAutoSnapshotPolicyResponse
     *
     * @param ApplyAutoSnapshotPolicyRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ApplyAutoSnapshotPolicyResponse
     */
    public function applyAutoSnapshotPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ApplyAutoSnapshotPolicy',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApplyAutoSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Apply an automatic snapshot policy to cloud computers. After the automatic snapshot policy is applied to the cloud computers, Elastic Desktop Service automatically creates snapshots for the cloud computers based on the time specified in the automatic snapshot policy.
     *
     * @remarks
     * You can also associate an automatic snapshot policy with a cloud desktop in the Elastic Desktop Service (EDS) console. To do so, perform the following steps: 1. Log on to the EDS console. 2. Choose Desktops and Groups > Desktops in the left-side navigation pane. 3. Find the cloud desktop that you want to manage on the Cloud Desktops page and choose More > Change Automatic Snapshot Policy in the Actions column. 4. Configure a policy for the cloud desktop as prompted in the Change Automatic Snapshot Policy panel.
     * After you associate an automatic snapshot policy with the cloud desktop, the system creates snapshots for the cloud desktop based on the policy.
     *
     * @param request - ApplyAutoSnapshotPolicyRequest
     *
     * @returns ApplyAutoSnapshotPolicyResponse
     *
     * @param ApplyAutoSnapshotPolicyRequest $request
     *
     * @return ApplyAutoSnapshotPolicyResponse
     */
    public function applyAutoSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->applyAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * Applies for the coordinate permissions.
     *
     * @param request - ApplyCoordinatePrivilegeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyCoordinatePrivilegeResponse
     *
     * @param ApplyCoordinatePrivilegeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ApplyCoordinatePrivilegeResponse
     */
    public function applyCoordinatePrivilegeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->coId) {
            @$query['CoId'] = $request->coId;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->userType) {
            @$query['UserType'] = $request->userType;
        }

        if (null !== $request->uuid) {
            @$query['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ApplyCoordinatePrivilege',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApplyCoordinatePrivilegeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Applies for the coordinate permissions.
     *
     * @param request - ApplyCoordinatePrivilegeRequest
     *
     * @returns ApplyCoordinatePrivilegeResponse
     *
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
     * Applies for coordination monitoring. This operation is mainly used in administrator assistance scenarios and education scenarios.
     *
     * @param request - ApplyCoordinationForMonitoringRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApplyCoordinationForMonitoringResponse
     *
     * @param ApplyCoordinationForMonitoringRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ApplyCoordinationForMonitoringResponse
     */
    public function applyCoordinationForMonitoringWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->coordinatePolicyType) {
            @$query['CoordinatePolicyType'] = $request->coordinatePolicyType;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->initiatorType) {
            @$query['InitiatorType'] = $request->initiatorType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceCandidates) {
            @$query['ResourceCandidates'] = $request->resourceCandidates;
        }

        if (null !== $request->uuid) {
            @$query['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ApplyCoordinationForMonitoring',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApplyCoordinationForMonitoringResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Applies for coordination monitoring. This operation is mainly used in administrator assistance scenarios and education scenarios.
     *
     * @param request - ApplyCoordinationForMonitoringRequest
     *
     * @returns ApplyCoordinationForMonitoringResponse
     *
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
     * Allows you to upgrade images.
     *
     * @remarks
     * The cloud computers for which you want to allow image updates must be in the Running state.
     *
     * @param request - ApproveFotaUpdateRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ApproveFotaUpdateResponse
     *
     * @param ApproveFotaUpdateRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ApproveFotaUpdateResponse
     */
    public function approveFotaUpdateWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appVersion) {
            @$query['AppVersion'] = $request->appVersion;
        }

        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ApproveFotaUpdate',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ApproveFotaUpdateResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Allows you to upgrade images.
     *
     * @remarks
     * The cloud computers for which you want to allow image updates must be in the Running state.
     *
     * @param request - ApproveFotaUpdateRequest
     *
     * @returns ApproveFotaUpdateResponse
     *
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
     * Binds a premium bandwidth plan to an office network. A premium bandwidth plan is used together with only one office network.
     *
     * @param request - AssociateNetworkPackageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssociateNetworkPackageResponse
     *
     * @param AssociateNetworkPackageRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return AssociateNetworkPackageResponse
     */
    public function associateNetworkPackageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->networkPackageId) {
            @$query['NetworkPackageId'] = $request->networkPackageId;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AssociateNetworkPackage',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AssociateNetworkPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Binds a premium bandwidth plan to an office network. A premium bandwidth plan is used together with only one office network.
     *
     * @param request - AssociateNetworkPackageRequest
     *
     * @returns AssociateNetworkPackageResponse
     *
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
     * Binds an advanced office network to a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * Prerequisites
     * *   A CEN instance is created.
     * *   The office network is an advanced office network, and the account system type is convenient account.
     * >  The office network is added to the CEN instance when you create the instance. An office network can be added to only one CEN instance.
     *
     * @param request - AttachCenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachCenResponse
     *
     * @param AttachCenRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return AttachCenResponse
     */
    public function attachCenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->cenOwnerId) {
            @$query['CenOwnerId'] = $request->cenOwnerId;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->verifyCode) {
            @$query['VerifyCode'] = $request->verifyCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachCen',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachCenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Binds an advanced office network to a Cloud Enterprise Network (CEN) instance.
     *
     * @remarks
     * Prerequisites
     * *   A CEN instance is created.
     * *   The office network is an advanced office network, and the account system type is convenient account.
     * >  The office network is added to the CEN instance when you create the instance. An office network can be added to only one CEN instance.
     *
     * @param request - AttachCenRequest
     *
     * @returns AttachCenResponse
     *
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
     * Binds a hardware client to a user.
     *
     * @param request - AttachEndUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachEndUserResponse
     *
     * @param AttachEndUserRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return AttachEndUserResponse
     */
    public function attachEndUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->adDomain) {
            @$query['AdDomain'] = $request->adDomain;
        }

        if (null !== $request->clientType) {
            @$query['ClientType'] = $request->clientType;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->userType) {
            @$query['UserType'] = $request->userType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachEndUser',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachEndUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Binds a hardware client to a user.
     *
     * @param request - AttachEndUserRequest
     *
     * @returns AttachEndUserResponse
     *
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
     * Binds a configuration group to resources.
     *
     * @param request - BindConfigGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BindConfigGroupResponse
     *
     * @param BindConfigGroupRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return BindConfigGroupResponse
     */
    public function bindConfigGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceInfos) {
            @$query['ResourceInfos'] = $request->resourceInfos;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BindConfigGroup',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BindConfigGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Binds a configuration group to resources.
     *
     * @param request - BindConfigGroupRequest
     *
     * @returns BindConfigGroupResponse
     *
     * @param BindConfigGroupRequest $request
     *
     * @return BindConfigGroupResponse
     */
    public function bindConfigGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->bindConfigGroupWithOptions($request, $runtime);
    }

    /**
     * Cancels an automatic snapshot policy for cloud computers.
     *
     * @param request - CancelAutoSnapshotPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelAutoSnapshotPolicyResponse
     *
     * @param CancelAutoSnapshotPolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CancelAutoSnapshotPolicyResponse
     */
    public function cancelAutoSnapshotPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelAutoSnapshotPolicy',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelAutoSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels an automatic snapshot policy for cloud computers.
     *
     * @param request - CancelAutoSnapshotPolicyRequest
     *
     * @returns CancelAutoSnapshotPolicyResponse
     *
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
     * Cancels a file sharing task.
     *
     * @param request - CancelCdsFileShareLinkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelCdsFileShareLinkResponse
     *
     * @param CancelCdsFileShareLinkRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CancelCdsFileShareLinkResponse
     */
    public function cancelCdsFileShareLinkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cdsId) {
            @$query['CdsId'] = $request->cdsId;
        }

        if (null !== $request->shareId) {
            @$query['ShareId'] = $request->shareId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelCdsFileShareLink',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelCdsFileShareLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels a file sharing task.
     *
     * @param request - CancelCdsFileShareLinkRequest
     *
     * @returns CancelCdsFileShareLinkResponse
     *
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
     * Cancels monitoring on stream collaboration.
     *
     * @param request - CancelCoordinationForMonitoringRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelCoordinationForMonitoringResponse
     *
     * @param CancelCoordinationForMonitoringRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CancelCoordinationForMonitoringResponse
     */
    public function cancelCoordinationForMonitoringWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->coIds) {
            @$query['CoIds'] = $request->coIds;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->userType) {
            @$query['UserType'] = $request->userType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelCoordinationForMonitoring',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelCoordinationForMonitoringResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels monitoring on stream collaboration.
     *
     * @param request - CancelCoordinationForMonitoringRequest
     *
     * @returns CancelCoordinationForMonitoringResponse
     *
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
     * Cancels the operation of copying an image to another region.
     *
     * @param request - CancelCopyImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CancelCopyImageResponse
     *
     * @param CancelCopyImageRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CancelCopyImageResponse
     */
    public function cancelCopyImageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CancelCopyImage',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CancelCopyImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Cancels the operation of copying an image to another region.
     *
     * @param request - CancelCopyImageRequest
     *
     * @returns CancelCopyImageResponse
     *
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
     * Clones a policy based on an existing global policy.
     *
     * @param request - CloneCenterPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CloneCenterPolicyResponse
     *
     * @param CloneCenterPolicyRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CloneCenterPolicyResponse
     */
    public function cloneCenterPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessType) {
            @$query['BusinessType'] = $request->businessType;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->policyGroupId) {
            @$query['PolicyGroupId'] = $request->policyGroupId;
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
            'action' => 'CloneCenterPolicy',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CloneCenterPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Clones a policy based on an existing global policy.
     *
     * @param request - CloneCenterPolicyRequest
     *
     * @returns CloneCenterPolicyResponse
     *
     * @param CloneCenterPolicyRequest $request
     *
     * @return CloneCenterPolicyResponse
     */
    public function cloneCenterPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cloneCenterPolicyWithOptions($request, $runtime);
    }

    /**
     * Clones an existing policy to quickly create a policy.
     *
     * @param request - ClonePolicyGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ClonePolicyGroupResponse
     *
     * @param ClonePolicyGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ClonePolicyGroupResponse
     */
    public function clonePolicyGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->policyGroupId) {
            @$query['PolicyGroupId'] = $request->policyGroupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ClonePolicyGroup',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ClonePolicyGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Clones an existing policy to quickly create a policy.
     *
     * @param request - ClonePolicyGroupRequest
     *
     * @returns ClonePolicyGroupResponse
     *
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
     * Completes a file uploading task.
     *
     * @param request - CompleteCdsFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CompleteCdsFileResponse
     *
     * @param CompleteCdsFileRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CompleteCdsFileResponse
     */
    public function completeCdsFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cdsId) {
            @$query['CdsId'] = $request->cdsId;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->fileId) {
            @$query['FileId'] = $request->fileId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->uploadId) {
            @$query['UploadId'] = $request->uploadId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CompleteCdsFile',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CompleteCdsFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Completes a file uploading task.
     *
     * @param request - CompleteCdsFileRequest
     *
     * @returns CompleteCdsFileResponse
     *
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
     * Configures a conditional forwarder and trust relationship for a high-definition experience (HDX)-based office network (formerly workspace). You can call the operation to configure a trust relationship for an enterprise Active Directory (AD) office network.
     *
     * @param request - ConfigADConnectorTrustRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigADConnectorTrustResponse
     *
     * @param ConfigADConnectorTrustRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ConfigADConnectorTrustResponse
     */
    public function configADConnectorTrustWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->rdsLicenseDomain) {
            @$query['RdsLicenseDomain'] = $request->rdsLicenseDomain;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->trustKey) {
            @$query['TrustKey'] = $request->trustKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigADConnectorTrust',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigADConnectorTrustResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures a conditional forwarder and trust relationship for a high-definition experience (HDX)-based office network (formerly workspace). You can call the operation to configure a trust relationship for an enterprise Active Directory (AD) office network.
     *
     * @param request - ConfigADConnectorTrustRequest
     *
     * @returns ConfigADConnectorTrustResponse
     *
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
     * @param request - ConfigADConnectorUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ConfigADConnectorUserResponse
     *
     * @param ConfigADConnectorUserRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ConfigADConnectorUserResponse
     */
    public function configADConnectorUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->domainPassword) {
            @$query['DomainPassword'] = $request->domainPassword;
        }

        if (null !== $request->domainUserName) {
            @$query['DomainUserName'] = $request->domainUserName;
        }

        if (null !== $request->OUName) {
            @$query['OUName'] = $request->OUName;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ConfigADConnectorUser',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ConfigADConnectorUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ConfigADConnectorUserRequest
     *
     * @returns ConfigADConnectorUserResponse
     *
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
     * Copies a file or a directory.
     *
     * @param request - CopyCdsFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CopyCdsFileResponse
     *
     * @param CopyCdsFileRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CopyCdsFileResponse
     */
    public function copyCdsFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoRename) {
            @$query['AutoRename'] = $request->autoRename;
        }

        if (null !== $request->cdsId) {
            @$query['CdsId'] = $request->cdsId;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->fileId) {
            @$query['FileId'] = $request->fileId;
        }

        if (null !== $request->fileReceiverId) {
            @$query['FileReceiverId'] = $request->fileReceiverId;
        }

        if (null !== $request->fileReceiverType) {
            @$query['FileReceiverType'] = $request->fileReceiverType;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->parentFolderId) {
            @$query['ParentFolderId'] = $request->parentFolderId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CopyCdsFile',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CopyCdsFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Copies a file or a directory.
     *
     * @param request - CopyCdsFileRequest
     *
     * @returns CopyCdsFileResponse
     *
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
     * Copy an image to another region. If you want to share an image across regions, you can call this operation to copy the image to the destination region and then share the image.
     *
     * @param request - CopyImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CopyImageResponse
     *
     * @param CopyImageRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CopyImageResponse
     */
    public function copyImageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->destinationDescription) {
            @$query['DestinationDescription'] = $request->destinationDescription;
        }

        if (null !== $request->destinationImageName) {
            @$query['DestinationImageName'] = $request->destinationImageName;
        }

        if (null !== $request->destinationRegionId) {
            @$query['DestinationRegionId'] = $request->destinationRegionId;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CopyImage',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CopyImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Copy an image to another region. If you want to share an image across regions, you can call this operation to copy the image to the destination region and then share the image.
     *
     * @param request - CopyImageRequest
     *
     * @returns CopyImageResponse
     *
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
     * Creates a directory of the Active Directory (AD) type.
     *
     * @remarks
     * An AD directory is used to connect to an enterprise\\"s existing Active Directory and is suitable for large-scale cloud computer deployment. You are charged directory fees when you connect your AD to cloud computers. For more information, see [Billing overview](https://help.aliyun.com/document_detail/188395.html).
     *
     * @param request - CreateADConnectorDirectoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateADConnectorDirectoryResponse
     *
     * @param CreateADConnectorDirectoryRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateADConnectorDirectoryResponse
     */
    public function createADConnectorDirectoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopAccessType) {
            @$query['DesktopAccessType'] = $request->desktopAccessType;
        }

        if (null !== $request->directoryName) {
            @$query['DirectoryName'] = $request->directoryName;
        }

        if (null !== $request->dnsAddress) {
            @$query['DnsAddress'] = $request->dnsAddress;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->domainPassword) {
            @$query['DomainPassword'] = $request->domainPassword;
        }

        if (null !== $request->domainUserName) {
            @$query['DomainUserName'] = $request->domainUserName;
        }

        if (null !== $request->enableAdminAccess) {
            @$query['EnableAdminAccess'] = $request->enableAdminAccess;
        }

        if (null !== $request->mfaEnabled) {
            @$query['MfaEnabled'] = $request->mfaEnabled;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->specification) {
            @$query['Specification'] = $request->specification;
        }

        if (null !== $request->subDomainDnsAddress) {
            @$query['SubDomainDnsAddress'] = $request->subDomainDnsAddress;
        }

        if (null !== $request->subDomainName) {
            @$query['SubDomainName'] = $request->subDomainName;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateADConnectorDirectory',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateADConnectorDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a directory of the Active Directory (AD) type.
     *
     * @remarks
     * An AD directory is used to connect to an enterprise\\"s existing Active Directory and is suitable for large-scale cloud computer deployment. You are charged directory fees when you connect your AD to cloud computers. For more information, see [Billing overview](https://help.aliyun.com/document_detail/188395.html).
     *
     * @param request - CreateADConnectorDirectoryRequest
     *
     * @returns CreateADConnectorDirectoryResponse
     *
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
     * Creates an enterprise Active Directory (AD) office network (formerly workspace). Elastic Desktop Service supports the following types of accounts: convenience accounts and enterprise AD accounts.
     *
     * @remarks
     * When you create an enterprise AD office network, the system automatically creates an AD connector to connect to an enterprise AD. You are charged for the AD connector. For more information, see [Billing overview](https://help.aliyun.com/document_detail/188395.html).
     * After you call this operation to create an AD office network, you must perform the following steps to complete AD domain setting:
     * 1.  Configure a conditional forwarder in a Domain Name System (DNS) server.
     * 2.  Configure a trust relationship in an AD domain controller and call the [ConfigADConnectorTrust](https://help.aliyun.com/document_detail/311258.html) operation to configure the trust relationship with the AD office network.
     * 3.  Call the [ListUserAdOrganizationUnits](https://help.aliyun.com/document_detail/311259.html) operation to query a list of organizational units (OUs) of the AD domain, and call the [ConfigADConnectorUser](https://help.aliyun.com/document_detail/311262.html) operation to specify an OU and administrator for the AD office network.
     *     >  When you create the AD office network, take note of the DomainUserName and DomainPassword parameters. If you specify the parameters, you need to only configure a conditional forwarder. If you do not specify the parameters, you must configure a conditional forwarder, trust relationship, and OU as prompted.
     * For more information, see [Create and manage enterprise AD office networks](https://help.aliyun.com/document_detail/214469.html).
     *
     * @param request - CreateADConnectorOfficeSiteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateADConnectorOfficeSiteResponse
     *
     * @param CreateADConnectorOfficeSiteRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateADConnectorOfficeSiteResponse
     */
    public function createADConnectorOfficeSiteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->adHostname) {
            @$query['AdHostname'] = $request->adHostname;
        }

        if (null !== $request->backupDCHostname) {
            @$query['BackupDCHostname'] = $request->backupDCHostname;
        }

        if (null !== $request->backupDns) {
            @$query['BackupDns'] = $request->backupDns;
        }

        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->cenOwnerId) {
            @$query['CenOwnerId'] = $request->cenOwnerId;
        }

        if (null !== $request->cidrBlock) {
            @$query['CidrBlock'] = $request->cidrBlock;
        }

        if (null !== $request->desktopAccessType) {
            @$query['DesktopAccessType'] = $request->desktopAccessType;
        }

        if (null !== $request->dnsAddress) {
            @$query['DnsAddress'] = $request->dnsAddress;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->domainPassword) {
            @$query['DomainPassword'] = $request->domainPassword;
        }

        if (null !== $request->domainUserName) {
            @$query['DomainUserName'] = $request->domainUserName;
        }

        if (null !== $request->enableAdminAccess) {
            @$query['EnableAdminAccess'] = $request->enableAdminAccess;
        }

        if (null !== $request->enableInternetAccess) {
            @$query['EnableInternetAccess'] = $request->enableInternetAccess;
        }

        if (null !== $request->mfaEnabled) {
            @$query['MfaEnabled'] = $request->mfaEnabled;
        }

        if (null !== $request->officeSiteName) {
            @$query['OfficeSiteName'] = $request->officeSiteName;
        }

        if (null !== $request->protocolType) {
            @$query['ProtocolType'] = $request->protocolType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->specification) {
            @$query['Specification'] = $request->specification;
        }

        if (null !== $request->subDomainDnsAddress) {
            @$query['SubDomainDnsAddress'] = $request->subDomainDnsAddress;
        }

        if (null !== $request->subDomainName) {
            @$query['SubDomainName'] = $request->subDomainName;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->verifyCode) {
            @$query['VerifyCode'] = $request->verifyCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateADConnectorOfficeSite',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateADConnectorOfficeSiteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an enterprise Active Directory (AD) office network (formerly workspace). Elastic Desktop Service supports the following types of accounts: convenience accounts and enterprise AD accounts.
     *
     * @remarks
     * When you create an enterprise AD office network, the system automatically creates an AD connector to connect to an enterprise AD. You are charged for the AD connector. For more information, see [Billing overview](https://help.aliyun.com/document_detail/188395.html).
     * After you call this operation to create an AD office network, you must perform the following steps to complete AD domain setting:
     * 1.  Configure a conditional forwarder in a Domain Name System (DNS) server.
     * 2.  Configure a trust relationship in an AD domain controller and call the [ConfigADConnectorTrust](https://help.aliyun.com/document_detail/311258.html) operation to configure the trust relationship with the AD office network.
     * 3.  Call the [ListUserAdOrganizationUnits](https://help.aliyun.com/document_detail/311259.html) operation to query a list of organizational units (OUs) of the AD domain, and call the [ConfigADConnectorUser](https://help.aliyun.com/document_detail/311262.html) operation to specify an OU and administrator for the AD office network.
     *     >  When you create the AD office network, take note of the DomainUserName and DomainPassword parameters. If you specify the parameters, you need to only configure a conditional forwarder. If you do not specify the parameters, you must configure a conditional forwarder, trust relationship, and OU as prompted.
     * For more information, see [Create and manage enterprise AD office networks](https://help.aliyun.com/document_detail/214469.html).
     *
     * @param request - CreateADConnectorOfficeSiteRequest
     *
     * @returns CreateADConnectorOfficeSiteResponse
     *
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
     * Creates a File Storage NAS (NAS) file system and mount the file system to the workspace in which a desktop group resides.
     *
     * @param request - CreateAndBindNasFileSystemRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAndBindNasFileSystemResponse
     *
     * @param CreateAndBindNasFileSystemRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateAndBindNasFileSystemResponse
     */
    public function createAndBindNasFileSystemWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->desktopGroupId) {
            @$query['DesktopGroupId'] = $request->desktopGroupId;
        }

        if (null !== $request->encryptType) {
            @$query['EncryptType'] = $request->encryptType;
        }

        if (null !== $request->endUserIds) {
            @$query['EndUserIds'] = $request->endUserIds;
        }

        if (null !== $request->fileSystemName) {
            @$query['FileSystemName'] = $request->fileSystemName;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->storageType) {
            @$query['StorageType'] = $request->storageType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAndBindNasFileSystem',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAndBindNasFileSystemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a File Storage NAS (NAS) file system and mount the file system to the workspace in which a desktop group resides.
     *
     * @param request - CreateAndBindNasFileSystemRequest
     *
     * @returns CreateAndBindNasFileSystemResponse
     *
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
     * Creates an automatic snapshot policy. WUYING WorkSpace automatically creates snapshots based on the time specified by the cron expression in the automatic snapshot policy.
     *
     * @remarks
     * You can call the operation to create an automatic snapshot policy based on a CRON expression. Then, the system automatically creates snapshots of a cloud desktop based on the policy.
     *
     * @param request - CreateAutoSnapshotPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAutoSnapshotPolicyResponse
     *
     * @param CreateAutoSnapshotPolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateAutoSnapshotPolicyResponse
     */
    public function createAutoSnapshotPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cronExpression) {
            @$query['CronExpression'] = $request->cronExpression;
        }

        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->retentionDays) {
            @$query['RetentionDays'] = $request->retentionDays;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateAutoSnapshotPolicy',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAutoSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an automatic snapshot policy. WUYING WorkSpace automatically creates snapshots based on the time specified by the cron expression in the automatic snapshot policy.
     *
     * @remarks
     * You can call the operation to create an automatic snapshot policy based on a CRON expression. Then, the system automatically creates snapshots of a cloud desktop based on the policy.
     *
     * @param request - CreateAutoSnapshotPolicyRequest
     *
     * @returns CreateAutoSnapshotPolicyResponse
     *
     * @param CreateAutoSnapshotPolicyRequest $request
     *
     * @return CreateAutoSnapshotPolicyResponse
     */
    public function createAutoSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * Creates data transfer plans.
     *
     * @param request - CreateBandwidthResourcePackagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBandwidthResourcePackagesResponse
     *
     * @param CreateBandwidthResourcePackagesRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateBandwidthResourcePackagesResponse
     */
    public function createBandwidthResourcePackagesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->amount) {
            @$query['Amount'] = $request->amount;
        }

        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->packageSize) {
            @$query['PackageSize'] = $request->packageSize;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->promotionId) {
            @$query['PromotionId'] = $request->promotionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateBandwidthResourcePackages',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateBandwidthResourcePackagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates data transfer plans.
     *
     * @param request - CreateBandwidthResourcePackagesRequest
     *
     * @returns CreateBandwidthResourcePackagesResponse
     *
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
     * Creates a custom cloud computer template.
     *
     * @remarks
     * Cloud computer templates include system templates and custom templates. A system template is the default template provided by Alibaba Cloud. You can call this operation to create a custom template.
     *
     * @param request - CreateBundleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateBundleResponse
     *
     * @param CreateBundleRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return CreateBundleResponse
     */
    public function createBundleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bundleName) {
            @$query['BundleName'] = $request->bundleName;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->desktopType) {
            @$query['DesktopType'] = $request->desktopType;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->rootDiskPerformanceLevel) {
            @$query['RootDiskPerformanceLevel'] = $request->rootDiskPerformanceLevel;
        }

        if (null !== $request->rootDiskSizeGib) {
            @$query['RootDiskSizeGib'] = $request->rootDiskSizeGib;
        }

        if (null !== $request->userDiskPerformanceLevel) {
            @$query['UserDiskPerformanceLevel'] = $request->userDiskPerformanceLevel;
        }

        if (null !== $request->userDiskSizeGib) {
            @$query['UserDiskSizeGib'] = $request->userDiskSizeGib;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateBundle',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateBundleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a custom cloud computer template.
     *
     * @remarks
     * Cloud computer templates include system templates and custom templates. A system template is the default template provided by Alibaba Cloud. You can call this operation to create a custom template.
     *
     * @param request - CreateBundleRequest
     *
     * @returns CreateBundleResponse
     *
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
     * Uploads a file to a cloud disk.
     *
     * @remarks
     * After the RAM permissions are authenticated, you can call the CreateCdsFile operation to obtain the upload URL of a file and upload the file to a cloud disk.
     *
     * @param request - CreateCdsFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCdsFileResponse
     *
     * @param CreateCdsFileRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateCdsFileResponse
     */
    public function createCdsFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cdsId) {
            @$query['CdsId'] = $request->cdsId;
        }

        if (null !== $request->conflictPolicy) {
            @$query['ConflictPolicy'] = $request->conflictPolicy;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->fileHash) {
            @$query['FileHash'] = $request->fileHash;
        }

        if (null !== $request->fileLength) {
            @$query['FileLength'] = $request->fileLength;
        }

        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->fileType) {
            @$query['FileType'] = $request->fileType;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->parentFileId) {
            @$query['ParentFileId'] = $request->parentFileId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCdsFile',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCdsFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uploads a file to a cloud disk.
     *
     * @remarks
     * After the RAM permissions are authenticated, you can call the CreateCdsFile operation to obtain the upload URL of a file and upload the file to a cloud disk.
     *
     * @param request - CreateCdsFileRequest
     *
     * @returns CreateCdsFileResponse
     *
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
     * Creates a file sharing task.
     *
     * @param request - CreateCdsFileShareLinkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCdsFileShareLinkResponse
     *
     * @param CreateCdsFileShareLinkRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateCdsFileShareLinkResponse
     */
    public function createCdsFileShareLinkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cdsId) {
            @$query['CdsId'] = $request->cdsId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->disableDownload) {
            @$query['DisableDownload'] = $request->disableDownload;
        }

        if (null !== $request->disablePreview) {
            @$query['DisablePreview'] = $request->disablePreview;
        }

        if (null !== $request->disableSave) {
            @$query['DisableSave'] = $request->disableSave;
        }

        if (null !== $request->downloadLimit) {
            @$query['DownloadLimit'] = $request->downloadLimit;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->expiration) {
            @$query['Expiration'] = $request->expiration;
        }

        if (null !== $request->fileIds) {
            @$query['FileIds'] = $request->fileIds;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->previewLimit) {
            @$query['PreviewLimit'] = $request->previewLimit;
        }

        if (null !== $request->saveLimit) {
            @$query['SaveLimit'] = $request->saveLimit;
        }

        if (null !== $request->shareName) {
            @$query['ShareName'] = $request->shareName;
        }

        if (null !== $request->sharePwd) {
            @$query['SharePwd'] = $request->sharePwd;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCdsFileShareLink',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCdsFileShareLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a file sharing task.
     *
     * @param request - CreateCdsFileShareLinkRequest
     *
     * @returns CreateCdsFileShareLinkResponse
     *
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
     * Creates a center policy.
     *
     * @param request - CreateCenterPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCenterPolicyResponse
     *
     * @param CreateCenterPolicyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateCenterPolicyResponse
     */
    public function createCenterPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->adminAccess) {
            @$query['AdminAccess'] = $request->adminAccess;
        }

        if (null !== $request->appContentProtection) {
            @$query['AppContentProtection'] = $request->appContentProtection;
        }

        if (null !== $request->authorizeAccessPolicyRule) {
            @$query['AuthorizeAccessPolicyRule'] = $request->authorizeAccessPolicyRule;
        }

        if (null !== $request->authorizeSecurityPolicyRule) {
            @$query['AuthorizeSecurityPolicyRule'] = $request->authorizeSecurityPolicyRule;
        }

        if (null !== $request->businessType) {
            @$query['BusinessType'] = $request->businessType;
        }

        if (null !== $request->cameraRedirect) {
            @$query['CameraRedirect'] = $request->cameraRedirect;
        }

        if (null !== $request->clientType) {
            @$query['ClientType'] = $request->clientType;
        }

        if (null !== $request->clipboard) {
            @$query['Clipboard'] = $request->clipboard;
        }

        if (null !== $request->colorEnhancement) {
            @$query['ColorEnhancement'] = $request->colorEnhancement;
        }

        if (null !== $request->cpuDownGradeDuration) {
            @$query['CpuDownGradeDuration'] = $request->cpuDownGradeDuration;
        }

        if (null !== $request->cpuProcessors) {
            @$query['CpuProcessors'] = $request->cpuProcessors;
        }

        if (null !== $request->cpuProtectedMode) {
            @$query['CpuProtectedMode'] = $request->cpuProtectedMode;
        }

        if (null !== $request->cpuRateLimit) {
            @$query['CpuRateLimit'] = $request->cpuRateLimit;
        }

        if (null !== $request->cpuSampleDuration) {
            @$query['CpuSampleDuration'] = $request->cpuSampleDuration;
        }

        if (null !== $request->cpuSingleRateLimit) {
            @$query['CpuSingleRateLimit'] = $request->cpuSingleRateLimit;
        }

        if (null !== $request->deviceConnectHint) {
            @$query['DeviceConnectHint'] = $request->deviceConnectHint;
        }

        if (null !== $request->deviceRedirects) {
            @$query['DeviceRedirects'] = $request->deviceRedirects;
        }

        if (null !== $request->deviceRules) {
            @$query['DeviceRules'] = $request->deviceRules;
        }

        if (null !== $request->disconnectKeepSession) {
            @$query['DisconnectKeepSession'] = $request->disconnectKeepSession;
        }

        if (null !== $request->disconnectKeepSessionTime) {
            @$query['DisconnectKeepSessionTime'] = $request->disconnectKeepSessionTime;
        }

        if (null !== $request->displayMode) {
            @$query['DisplayMode'] = $request->displayMode;
        }

        if (null !== $request->domainResolveRule) {
            @$query['DomainResolveRule'] = $request->domainResolveRule;
        }

        if (null !== $request->domainResolveRuleType) {
            @$query['DomainResolveRuleType'] = $request->domainResolveRuleType;
        }

        if (null !== $request->enableSessionRateLimiting) {
            @$query['EnableSessionRateLimiting'] = $request->enableSessionRateLimiting;
        }

        if (null !== $request->endUserApplyAdminCoordinate) {
            @$query['EndUserApplyAdminCoordinate'] = $request->endUserApplyAdminCoordinate;
        }

        if (null !== $request->endUserGroupCoordinate) {
            @$query['EndUserGroupCoordinate'] = $request->endUserGroupCoordinate;
        }

        if (null !== $request->fileMigrate) {
            @$query['FileMigrate'] = $request->fileMigrate;
        }

        if (null !== $request->gpuAcceleration) {
            @$query['GpuAcceleration'] = $request->gpuAcceleration;
        }

        if (null !== $request->html5FileTransfer) {
            @$query['Html5FileTransfer'] = $request->html5FileTransfer;
        }

        if (null !== $request->internetCommunicationProtocol) {
            @$query['InternetCommunicationProtocol'] = $request->internetCommunicationProtocol;
        }

        if (null !== $request->internetPrinter) {
            @$query['InternetPrinter'] = $request->internetPrinter;
        }

        if (null !== $request->localDrive) {
            @$query['LocalDrive'] = $request->localDrive;
        }

        if (null !== $request->maxReconnectTime) {
            @$query['MaxReconnectTime'] = $request->maxReconnectTime;
        }

        if (null !== $request->memoryDownGradeDuration) {
            @$query['MemoryDownGradeDuration'] = $request->memoryDownGradeDuration;
        }

        if (null !== $request->memoryProcessors) {
            @$query['MemoryProcessors'] = $request->memoryProcessors;
        }

        if (null !== $request->memoryProtectedMode) {
            @$query['MemoryProtectedMode'] = $request->memoryProtectedMode;
        }

        if (null !== $request->memoryRateLimit) {
            @$query['MemoryRateLimit'] = $request->memoryRateLimit;
        }

        if (null !== $request->memorySampleDuration) {
            @$query['MemorySampleDuration'] = $request->memorySampleDuration;
        }

        if (null !== $request->memorySingleRateLimit) {
            @$query['MemorySingleRateLimit'] = $request->memorySingleRateLimit;
        }

        if (null !== $request->mobileRestart) {
            @$query['MobileRestart'] = $request->mobileRestart;
        }

        if (null !== $request->mobileShutdown) {
            @$query['MobileShutdown'] = $request->mobileShutdown;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->netRedirect) {
            @$query['NetRedirect'] = $request->netRedirect;
        }

        if (null !== $request->netRedirectRule) {
            @$query['NetRedirectRule'] = $request->netRedirectRule;
        }

        if (null !== $request->noOperationDisconnect) {
            @$query['NoOperationDisconnect'] = $request->noOperationDisconnect;
        }

        if (null !== $request->noOperationDisconnectTime) {
            @$query['NoOperationDisconnectTime'] = $request->noOperationDisconnectTime;
        }

        if (null !== $request->printerRedirect) {
            @$query['PrinterRedirect'] = $request->printerRedirect;
        }

        if (null !== $request->qualityEnhancement) {
            @$query['QualityEnhancement'] = $request->qualityEnhancement;
        }

        if (null !== $request->recordEventDuration) {
            @$query['RecordEventDuration'] = $request->recordEventDuration;
        }

        if (null !== $request->recordEventFilePaths) {
            @$query['RecordEventFilePaths'] = $request->recordEventFilePaths;
        }

        if (null !== $request->recordEventRegisters) {
            @$query['RecordEventRegisters'] = $request->recordEventRegisters;
        }

        if (null !== $request->recordEvents) {
            @$query['RecordEvents'] = $request->recordEvents;
        }

        if (null !== $request->recording) {
            @$query['Recording'] = $request->recording;
        }

        if (null !== $request->recordingAudio) {
            @$query['RecordingAudio'] = $request->recordingAudio;
        }

        if (null !== $request->recordingDuration) {
            @$query['RecordingDuration'] = $request->recordingDuration;
        }

        if (null !== $request->recordingEndTime) {
            @$query['RecordingEndTime'] = $request->recordingEndTime;
        }

        if (null !== $request->recordingExpires) {
            @$query['RecordingExpires'] = $request->recordingExpires;
        }

        if (null !== $request->recordingFps) {
            @$query['RecordingFps'] = $request->recordingFps;
        }

        if (null !== $request->recordingStartTime) {
            @$query['RecordingStartTime'] = $request->recordingStartTime;
        }

        if (null !== $request->recordingUserNotify) {
            @$query['RecordingUserNotify'] = $request->recordingUserNotify;
        }

        if (null !== $request->recordingUserNotifyMessage) {
            @$query['RecordingUserNotifyMessage'] = $request->recordingUserNotifyMessage;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->remoteCoordinate) {
            @$query['RemoteCoordinate'] = $request->remoteCoordinate;
        }

        if (null !== $request->resetDesktop) {
            @$query['ResetDesktop'] = $request->resetDesktop;
        }

        if (null !== $request->resolutionHeight) {
            @$query['ResolutionHeight'] = $request->resolutionHeight;
        }

        if (null !== $request->resolutionModel) {
            @$query['ResolutionModel'] = $request->resolutionModel;
        }

        if (null !== $request->resolutionWidth) {
            @$query['ResolutionWidth'] = $request->resolutionWidth;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->safeMenu) {
            @$query['SafeMenu'] = $request->safeMenu;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        if (null !== $request->scopeValue) {
            @$query['ScopeValue'] = $request->scopeValue;
        }

        if (null !== $request->sessionMaxRateKbps) {
            @$query['SessionMaxRateKbps'] = $request->sessionMaxRateKbps;
        }

        if (null !== $request->smoothEnhancement) {
            @$query['SmoothEnhancement'] = $request->smoothEnhancement;
        }

        if (null !== $request->statusMonitor) {
            @$query['StatusMonitor'] = $request->statusMonitor;
        }

        if (null !== $request->streamingMode) {
            @$query['StreamingMode'] = $request->streamingMode;
        }

        if (null !== $request->targetFps) {
            @$query['TargetFps'] = $request->targetFps;
        }

        if (null !== $request->taskbar) {
            @$query['Taskbar'] = $request->taskbar;
        }

        if (null !== $request->usbRedirect) {
            @$query['UsbRedirect'] = $request->usbRedirect;
        }

        if (null !== $request->usbSupplyRedirectRule) {
            @$query['UsbSupplyRedirectRule'] = $request->usbSupplyRedirectRule;
        }

        if (null !== $request->videoEncAvgKbps) {
            @$query['VideoEncAvgKbps'] = $request->videoEncAvgKbps;
        }

        if (null !== $request->videoEncMaxQP) {
            @$query['VideoEncMaxQP'] = $request->videoEncMaxQP;
        }

        if (null !== $request->videoEncMinQP) {
            @$query['VideoEncMinQP'] = $request->videoEncMinQP;
        }

        if (null !== $request->videoEncPeakKbps) {
            @$query['VideoEncPeakKbps'] = $request->videoEncPeakKbps;
        }

        if (null !== $request->videoEncPolicy) {
            @$query['VideoEncPolicy'] = $request->videoEncPolicy;
        }

        if (null !== $request->videoRedirect) {
            @$query['VideoRedirect'] = $request->videoRedirect;
        }

        if (null !== $request->visualQuality) {
            @$query['VisualQuality'] = $request->visualQuality;
        }

        if (null !== $request->watermark) {
            @$query['Watermark'] = $request->watermark;
        }

        if (null !== $request->watermarkAntiCam) {
            @$query['WatermarkAntiCam'] = $request->watermarkAntiCam;
        }

        if (null !== $request->watermarkColor) {
            @$query['WatermarkColor'] = $request->watermarkColor;
        }

        if (null !== $request->watermarkColumnAmount) {
            @$query['WatermarkColumnAmount'] = $request->watermarkColumnAmount;
        }

        if (null !== $request->watermarkCustomText) {
            @$query['WatermarkCustomText'] = $request->watermarkCustomText;
        }

        if (null !== $request->watermarkDegree) {
            @$query['WatermarkDegree'] = $request->watermarkDegree;
        }

        if (null !== $request->watermarkFontSize) {
            @$query['WatermarkFontSize'] = $request->watermarkFontSize;
        }

        if (null !== $request->watermarkFontStyle) {
            @$query['WatermarkFontStyle'] = $request->watermarkFontStyle;
        }

        if (null !== $request->watermarkPower) {
            @$query['WatermarkPower'] = $request->watermarkPower;
        }

        if (null !== $request->watermarkRowAmount) {
            @$query['WatermarkRowAmount'] = $request->watermarkRowAmount;
        }

        if (null !== $request->watermarkSecurity) {
            @$query['WatermarkSecurity'] = $request->watermarkSecurity;
        }

        if (null !== $request->watermarkTransparencyValue) {
            @$query['WatermarkTransparencyValue'] = $request->watermarkTransparencyValue;
        }

        if (null !== $request->watermarkType) {
            @$query['WatermarkType'] = $request->watermarkType;
        }

        if (null !== $request->wuyingKeeper) {
            @$query['WuyingKeeper'] = $request->wuyingKeeper;
        }

        if (null !== $request->wyAssistant) {
            @$query['WyAssistant'] = $request->wyAssistant;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCenterPolicy',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCenterPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a center policy.
     *
     * @param request - CreateCenterPolicyRequest
     *
     * @returns CreateCenterPolicyResponse
     *
     * @param CreateCenterPolicyRequest $request
     *
     * @return CreateCenterPolicyResponse
     */
    public function createCenterPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCenterPolicyWithOptions($request, $runtime);
    }

    /**
     * Creates an enterprise drive.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and pricing of Enterprise Drive Service (formerly Cloud Drive Service). For more information, see [Overview](https://help.aliyun.com/document_detail/386301.html).
     *
     * @param request - CreateCloudDriveServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCloudDriveServiceResponse
     *
     * @param CreateCloudDriveServiceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateCloudDriveServiceResponse
     */
    public function createCloudDriveServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->bizType) {
            @$query['BizType'] = $request->bizType;
        }

        if (null !== $request->cdsChargeType) {
            @$query['CdsChargeType'] = $request->cdsChargeType;
        }

        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->maxSize) {
            @$query['MaxSize'] = $request->maxSize;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->officeSiteType) {
            @$query['OfficeSiteType'] = $request->officeSiteType;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resellerOwnerUid) {
            @$query['ResellerOwnerUid'] = $request->resellerOwnerUid;
        }

        if (null !== $request->solutionId) {
            @$query['SolutionId'] = $request->solutionId;
        }

        if (null !== $request->userCount) {
            @$query['UserCount'] = $request->userCount;
        }

        if (null !== $request->userMaxSize) {
            @$query['UserMaxSize'] = $request->userMaxSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCloudDriveService',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCloudDriveServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an enterprise drive.
     *
     * @remarks
     * Before you call this operation, make sure that you understand the billing methods and pricing of Enterprise Drive Service (formerly Cloud Drive Service). For more information, see [Overview](https://help.aliyun.com/document_detail/386301.html).
     *
     * @param request - CreateCloudDriveServiceRequest
     *
     * @returns CreateCloudDriveServiceResponse
     *
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
     * Creates the users of a cloud disk.
     *
     * @param request - CreateCloudDriveUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateCloudDriveUsersResponse
     *
     * @param CreateCloudDriveUsersRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateCloudDriveUsersResponse
     */
    public function createCloudDriveUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cdsId) {
            @$query['CdsId'] = $request->cdsId;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->userMaxSize) {
            @$query['UserMaxSize'] = $request->userMaxSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCloudDriveUsers',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateCloudDriveUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates the users of a cloud disk.
     *
     * @param request - CreateCloudDriveUsersRequest
     *
     * @returns CreateCloudDriveUsersResponse
     *
     * @param CreateCloudDriveUsersRequest $request
     *
     * @return CreateCloudDriveUsersResponse
     */
    public function createCloudDriveUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCloudDriveUsersWithOptions($request, $runtime);
    }

    /**
     * Creates a configuration group. A configuration group stores the setup details for scheduled tasks on cloud computers.
     *
     * @param request - CreateConfigGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateConfigGroupResponse
     *
     * @param CreateConfigGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateConfigGroupResponse
     */
    public function createConfigGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configTimers) {
            @$query['ConfigTimers'] = $request->configTimers;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateConfigGroup',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateConfigGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a configuration group. A configuration group stores the setup details for scheduled tasks on cloud computers.
     *
     * @param request - CreateConfigGroupRequest
     *
     * @returns CreateConfigGroupResponse
     *
     * @param CreateConfigGroupRequest $request
     *
     * @return CreateConfigGroupResponse
     */
    public function createConfigGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createConfigGroupWithOptions($request, $runtime);
    }

    /**
     * Creates a shared group.
     *
     * @remarks
     *   To learn about the features, application scenarios, usage limits, scaling policies, and other details of shared groups, refer to [Overview](https://help.aliyun.com/document_detail/290959.html).
     * *   Before you call this operation, make sure that the required resources, such as the office network, cloud computer template, and policies, are created.
     *
     * @param request - CreateDesktopGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDesktopGroupResponse
     *
     * @param CreateDesktopGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateDesktopGroupResponse
     */
    public function createDesktopGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allClassifyUsers) {
            @$query['AllClassifyUsers'] = $request->allClassifyUsers;
        }

        if (null !== $request->allowAutoSetup) {
            @$query['AllowAutoSetup'] = $request->allowAutoSetup;
        }

        if (null !== $request->allowBufferCount) {
            @$query['AllowBufferCount'] = $request->allowBufferCount;
        }

        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->bindAmount) {
            @$query['BindAmount'] = $request->bindAmount;
        }

        if (null !== $request->bundleId) {
            @$query['BundleId'] = $request->bundleId;
        }

        if (null !== $request->buyDesktopsCount) {
            @$query['BuyDesktopsCount'] = $request->buyDesktopsCount;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->classify) {
            @$query['Classify'] = $request->classify;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->comments) {
            @$query['Comments'] = $request->comments;
        }

        if (null !== $request->connectDuration) {
            @$query['ConnectDuration'] = $request->connectDuration;
        }

        if (null !== $request->dataDiskCategory) {
            @$query['DataDiskCategory'] = $request->dataDiskCategory;
        }

        if (null !== $request->dataDiskPerLevel) {
            @$query['DataDiskPerLevel'] = $request->dataDiskPerLevel;
        }

        if (null !== $request->dataDiskSize) {
            @$query['DataDiskSize'] = $request->dataDiskSize;
        }

        if (null !== $request->defaultInitDesktopCount) {
            @$query['DefaultInitDesktopCount'] = $request->defaultInitDesktopCount;
        }

        if (null !== $request->defaultLanguage) {
            @$query['DefaultLanguage'] = $request->defaultLanguage;
        }

        if (null !== $request->desktopGroupName) {
            @$query['DesktopGroupName'] = $request->desktopGroupName;
        }

        if (null !== $request->desktopType) {
            @$query['DesktopType'] = $request->desktopType;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->endUserIds) {
            @$query['EndUserIds'] = $request->endUserIds;
        }

        if (null !== $request->exclusiveType) {
            @$query['ExclusiveType'] = $request->exclusiveType;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->groupAmount) {
            @$query['GroupAmount'] = $request->groupAmount;
        }

        if (null !== $request->groupVersion) {
            @$query['GroupVersion'] = $request->groupVersion;
        }

        if (null !== $request->hostname) {
            @$query['Hostname'] = $request->hostname;
        }

        if (null !== $request->idleDisconnectDuration) {
            @$query['IdleDisconnectDuration'] = $request->idleDisconnectDuration;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->keepDuration) {
            @$query['KeepDuration'] = $request->keepDuration;
        }

        if (null !== $request->loadPolicy) {
            @$query['LoadPolicy'] = $request->loadPolicy;
        }

        if (null !== $request->maxDesktopsCount) {
            @$query['MaxDesktopsCount'] = $request->maxDesktopsCount;
        }

        if (null !== $request->minDesktopsCount) {
            @$query['MinDesktopsCount'] = $request->minDesktopsCount;
        }

        if (null !== $request->multiResource) {
            @$query['MultiResource'] = $request->multiResource;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->ownType) {
            @$query['OwnType'] = $request->ownType;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->policyGroupId) {
            @$query['PolicyGroupId'] = $request->policyGroupId;
        }

        if (null !== $request->profileFollowSwitch) {
            @$query['ProfileFollowSwitch'] = $request->profileFollowSwitch;
        }

        if (null !== $request->promotionId) {
            @$query['PromotionId'] = $request->promotionId;
        }

        if (null !== $request->ratioThreshold) {
            @$query['RatioThreshold'] = $request->ratioThreshold;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resellerOwnerUid) {
            @$query['ResellerOwnerUid'] = $request->resellerOwnerUid;
        }

        if (null !== $request->resetType) {
            @$query['ResetType'] = $request->resetType;
        }

        if (null !== $request->scaleStrategyId) {
            @$query['ScaleStrategyId'] = $request->scaleStrategyId;
        }

        if (null !== $request->sessionType) {
            @$query['SessionType'] = $request->sessionType;
        }

        if (null !== $request->snapshotPolicyId) {
            @$query['SnapshotPolicyId'] = $request->snapshotPolicyId;
        }

        if (null !== $request->stopDuration) {
            @$query['StopDuration'] = $request->stopDuration;
        }

        if (null !== $request->systemDiskCategory) {
            @$query['SystemDiskCategory'] = $request->systemDiskCategory;
        }

        if (null !== $request->systemDiskPerLevel) {
            @$query['SystemDiskPerLevel'] = $request->systemDiskPerLevel;
        }

        if (null !== $request->systemDiskSize) {
            @$query['SystemDiskSize'] = $request->systemDiskSize;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->timerGroupId) {
            @$query['TimerGroupId'] = $request->timerGroupId;
        }

        if (null !== $request->userGroupName) {
            @$query['UserGroupName'] = $request->userGroupName;
        }

        if (null !== $request->userOuPath) {
            @$query['UserOuPath'] = $request->userOuPath;
        }

        if (null !== $request->volumeEncryptionEnabled) {
            @$query['VolumeEncryptionEnabled'] = $request->volumeEncryptionEnabled;
        }

        if (null !== $request->volumeEncryptionKey) {
            @$query['VolumeEncryptionKey'] = $request->volumeEncryptionKey;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDesktopGroup',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDesktopGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a shared group.
     *
     * @remarks
     *   To learn about the features, application scenarios, usage limits, scaling policies, and other details of shared groups, refer to [Overview](https://help.aliyun.com/document_detail/290959.html).
     * *   Before you call this operation, make sure that the required resources, such as the office network, cloud computer template, and policies, are created.
     *
     * @param request - CreateDesktopGroupRequest
     *
     * @returns CreateDesktopGroupResponse
     *
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
     * 创建桌面超卖组.
     *
     * @param request - CreateDesktopOversoldGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDesktopOversoldGroupResponse
     *
     * @param CreateDesktopOversoldGroupRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return CreateDesktopOversoldGroupResponse
     */
    public function createDesktopOversoldGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->concurrenceCount) {
            @$query['ConcurrenceCount'] = $request->concurrenceCount;
        }

        if (null !== $request->dataDiskSize) {
            @$query['DataDiskSize'] = $request->dataDiskSize;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->desktopType) {
            @$query['DesktopType'] = $request->desktopType;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->idleDisconnectDuration) {
            @$query['IdleDisconnectDuration'] = $request->idleDisconnectDuration;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->keepDuration) {
            @$query['KeepDuration'] = $request->keepDuration;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->oversoldUserCount) {
            @$query['OversoldUserCount'] = $request->oversoldUserCount;
        }

        if (null !== $request->oversoldWarn) {
            @$query['OversoldWarn'] = $request->oversoldWarn;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->policyGroupId) {
            @$query['PolicyGroupId'] = $request->policyGroupId;
        }

        if (null !== $request->stopDuration) {
            @$query['StopDuration'] = $request->stopDuration;
        }

        if (null !== $request->systemDiskSize) {
            @$query['SystemDiskSize'] = $request->systemDiskSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDesktopOversoldGroup',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDesktopOversoldGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建桌面超卖组.
     *
     * @param request - CreateDesktopOversoldGroupRequest
     *
     * @returns CreateDesktopOversoldGroupResponse
     *
     * @param CreateDesktopOversoldGroupRequest $request
     *
     * @return CreateDesktopOversoldGroupResponse
     */
    public function createDesktopOversoldGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDesktopOversoldGroupWithOptions($request, $runtime);
    }

    /**
     * Creates cloud computers. If you specify end users when you create cloud computers, the cloud computers are assigned to the end users after the cloud computers are created.
     *
     * @remarks
     * Before you create cloud computers, complete the following preparations:
     * *   An office network (formerly called workspace) and users are created. For more information, see:
     *     *   Convenience office network: [CreateSimpleOfficeSite](https://help.aliyun.com/document_detail/215416.html) and [CreateUsers](https://help.aliyun.com/document_detail/437832.html).
     *     *   Active Directory (AD) office network: [CreateADConnectorOfficeSite](https://help.aliyun.com/document_detail/215417.html) and [Create an AD user](https://help.aliyun.com/document_detail/188619.html).
     * *   Make sure a cloud computer template exists. If no cloud computer template exists, call the [CreateBundle](https://help.aliyun.com/document_detail/188883.html) operation to create a template.
     * *   Make sure a policy exists. If no policy exists, call the [CreatePolicyGroup](https://help.aliyun.com/document_detail/188889.html) operation to create a policy.
     * If you want the cloud computers to automatically execute a custom command script, you can use the `UserCommands` field to configure a custom command.
     *
     * @param tmpReq - CreateDesktopsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDesktopsResponse
     *
     * @param CreateDesktopsRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return CreateDesktopsResponse
     */
    public function createDesktopsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateDesktopsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->desktopAttachment) {
            $request->desktopAttachmentShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->desktopAttachment, 'DesktopAttachment', 'json');
        }

        $query = [];
        if (null !== $request->amount) {
            @$query['Amount'] = $request->amount;
        }

        if (null !== $request->appRuleId) {
            @$query['AppRuleId'] = $request->appRuleId;
        }

        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->bundleId) {
            @$query['BundleId'] = $request->bundleId;
        }

        if (null !== $request->bundleModels) {
            @$query['BundleModels'] = $request->bundleModels;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->desktopAttachmentShrink) {
            @$query['DesktopAttachment'] = $request->desktopAttachmentShrink;
        }

        if (null !== $request->desktopMemberIp) {
            @$query['DesktopMemberIp'] = $request->desktopMemberIp;
        }

        if (null !== $request->desktopName) {
            @$query['DesktopName'] = $request->desktopName;
        }

        if (null !== $request->desktopNameSuffix) {
            @$query['DesktopNameSuffix'] = $request->desktopNameSuffix;
        }

        if (null !== $request->desktopTimers) {
            @$query['DesktopTimers'] = $request->desktopTimers;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->extendInfo) {
            @$query['ExtendInfo'] = $request->extendInfo;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->hostname) {
            @$query['Hostname'] = $request->hostname;
        }

        if (null !== $request->monthDesktopSetting) {
            @$query['MonthDesktopSetting'] = $request->monthDesktopSetting;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->policyGroupId) {
            @$query['PolicyGroupId'] = $request->policyGroupId;
        }

        if (null !== $request->promotionId) {
            @$query['PromotionId'] = $request->promotionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resellerOwnerUid) {
            @$query['ResellerOwnerUid'] = $request->resellerOwnerUid;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->savingPlanId) {
            @$query['SavingPlanId'] = $request->savingPlanId;
        }

        if (null !== $request->snapshotPolicyId) {
            @$query['SnapshotPolicyId'] = $request->snapshotPolicyId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->timerGroupId) {
            @$query['TimerGroupId'] = $request->timerGroupId;
        }

        if (null !== $request->userAssignMode) {
            @$query['UserAssignMode'] = $request->userAssignMode;
        }

        if (null !== $request->userCommands) {
            @$query['UserCommands'] = $request->userCommands;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        if (null !== $request->volumeEncryptionEnabled) {
            @$query['VolumeEncryptionEnabled'] = $request->volumeEncryptionEnabled;
        }

        if (null !== $request->volumeEncryptionKey) {
            @$query['VolumeEncryptionKey'] = $request->volumeEncryptionKey;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDesktops',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDesktopsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates cloud computers. If you specify end users when you create cloud computers, the cloud computers are assigned to the end users after the cloud computers are created.
     *
     * @remarks
     * Before you create cloud computers, complete the following preparations:
     * *   An office network (formerly called workspace) and users are created. For more information, see:
     *     *   Convenience office network: [CreateSimpleOfficeSite](https://help.aliyun.com/document_detail/215416.html) and [CreateUsers](https://help.aliyun.com/document_detail/437832.html).
     *     *   Active Directory (AD) office network: [CreateADConnectorOfficeSite](https://help.aliyun.com/document_detail/215417.html) and [Create an AD user](https://help.aliyun.com/document_detail/188619.html).
     * *   Make sure a cloud computer template exists. If no cloud computer template exists, call the [CreateBundle](https://help.aliyun.com/document_detail/188883.html) operation to create a template.
     * *   Make sure a policy exists. If no policy exists, call the [CreatePolicyGroup](https://help.aliyun.com/document_detail/188889.html) operation to create a policy.
     * If you want the cloud computers to automatically execute a custom command script, you can use the `UserCommands` field to configure a custom command.
     *
     * @param request - CreateDesktopsRequest
     *
     * @returns CreateDesktopsResponse
     *
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
     * Enables the disk encryption feature and adds the service-linked role that is encrypted by Cloud Drive Service to a Resource Access Management (RAM) user.
     *
     * @param request - CreateDiskEncryptionServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDiskEncryptionServiceResponse
     *
     * @param CreateDiskEncryptionServiceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateDiskEncryptionServiceResponse
     */
    public function createDiskEncryptionServiceWithOptions($request, $runtime)
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
            'action' => 'CreateDiskEncryptionService',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDiskEncryptionServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables the disk encryption feature and adds the service-linked role that is encrypted by Cloud Drive Service to a Resource Access Management (RAM) user.
     *
     * @param request - CreateDiskEncryptionServiceRequest
     *
     * @returns CreateDiskEncryptionServiceResponse
     *
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
     * Creates a custom image based on a deployed cloud computer. Then, you can use the custom image to create cloud computers that have the same configurations. This prevents the repeated settings when you create cloud computers.
     *
     * @param request - CreateImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateImageResponse
     *
     * @param CreateImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateImageResponse
     */
    public function createImageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoCleanUserdata) {
            @$query['AutoCleanUserdata'] = $request->autoCleanUserdata;
        }

        if (null !== $request->dataSnapshotIds) {
            @$query['DataSnapshotIds'] = $request->dataSnapshotIds;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->diskType) {
            @$query['DiskType'] = $request->diskType;
        }

        if (null !== $request->imageName) {
            @$query['ImageName'] = $request->imageName;
        }

        if (null !== $request->imageResourceType) {
            @$query['ImageResourceType'] = $request->imageResourceType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->snapshotId) {
            @$query['SnapshotId'] = $request->snapshotId;
        }

        if (null !== $request->snapshotIds) {
            @$query['SnapshotIds'] = $request->snapshotIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateImage',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a custom image based on a deployed cloud computer. Then, you can use the custom image to create cloud computers that have the same configurations. This prevents the repeated settings when you create cloud computers.
     *
     * @param request - CreateImageRequest
     *
     * @returns CreateImageResponse
     *
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
     * Create a NAS file system.
     *
     * @remarks
     * <props="china">
     * - Each standard workspace can create one NAS file system to meet the need for sharing files between cloud desktops in the workspace.
     * - The system will automatically create a general-purpose NAS file system (with storage specifications of Capacity and Performance, with capacities of 10 PiB and 1 PiB respectively) and generate a default mount point.
     * - The NAS file system uses pay-as-you-go by default. You need to pay for the actual storage usage. You can also purchase resource packages to offset the storage usage.
     * For more information, see [Creating Shared Storage NAS](https://help.aliyun.com/document_detail/214481.html).
     * <props="intl">
     * - Each standard workspace can create one NAS file system to meet the need for sharing files between cloud desktops in the workspace.
     * - The system will automatically create a general-purpose NAS file system (with storage specifications of Capacity and Performance, with capacities of 10 PiB and 1 PiB respectively) and generate a default mount point.
     * - The NAS file system uses pay-as-you-go by default. You need to pay for the actual storage usage. You can also purchase storage packages to offset the storage usage.
     * For more information, see [Creating Shared Storage NAS](https://help.aliyun.com/document_detail/214481.html).
     *
     * @param request - CreateNASFileSystemRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNASFileSystemResponse
     *
     * @param CreateNASFileSystemRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateNASFileSystemResponse
     */
    public function createNASFileSystemWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->encryptType) {
            @$query['EncryptType'] = $request->encryptType;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->storageType) {
            @$query['StorageType'] = $request->storageType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateNASFileSystem',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateNASFileSystemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a NAS file system.
     *
     * @remarks
     * <props="china">
     * - Each standard workspace can create one NAS file system to meet the need for sharing files between cloud desktops in the workspace.
     * - The system will automatically create a general-purpose NAS file system (with storage specifications of Capacity and Performance, with capacities of 10 PiB and 1 PiB respectively) and generate a default mount point.
     * - The NAS file system uses pay-as-you-go by default. You need to pay for the actual storage usage. You can also purchase resource packages to offset the storage usage.
     * For more information, see [Creating Shared Storage NAS](https://help.aliyun.com/document_detail/214481.html).
     * <props="intl">
     * - Each standard workspace can create one NAS file system to meet the need for sharing files between cloud desktops in the workspace.
     * - The system will automatically create a general-purpose NAS file system (with storage specifications of Capacity and Performance, with capacities of 10 PiB and 1 PiB respectively) and generate a default mount point.
     * - The NAS file system uses pay-as-you-go by default. You need to pay for the actual storage usage. You can also purchase storage packages to offset the storage usage.
     * For more information, see [Creating Shared Storage NAS](https://help.aliyun.com/document_detail/214481.html).
     *
     * @param request - CreateNASFileSystemRequest
     *
     * @returns CreateNASFileSystemResponse
     *
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
     * Creates a premium bandwidth plan for an office network.
     *
     * @param request - CreateNetworkPackageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNetworkPackageResponse
     *
     * @param CreateNetworkPackageRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateNetworkPackageResponse
     */
    public function createNetworkPackageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->internetChargeType) {
            @$query['InternetChargeType'] = $request->internetChargeType;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->promotionId) {
            @$query['PromotionId'] = $request->promotionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resellerOwnerUid) {
            @$query['ResellerOwnerUid'] = $request->resellerOwnerUid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateNetworkPackage',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateNetworkPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a premium bandwidth plan for an office network.
     *
     * @param request - CreateNetworkPackageRequest
     *
     * @returns CreateNetworkPackageResponse
     *
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
     * Creates a cloud computer policy.
     *
     * @remarks
     * A cloud computer policy is a collection of rules to manage cloud computers in performance and security. For example, you can create a basic policy that involves the disk mapping, USB redirection, watermarking features and rules such as DNS rules. For more information, see [Policy overview](https://help.aliyun.com/document_detail/189345.html).
     *
     * @param request - CreatePolicyGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreatePolicyGroupResponse
     *
     * @param CreatePolicyGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreatePolicyGroupResponse
     */
    public function createPolicyGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->adminAccess) {
            @$query['AdminAccess'] = $request->adminAccess;
        }

        if (null !== $request->appContentProtection) {
            @$query['AppContentProtection'] = $request->appContentProtection;
        }

        if (null !== $request->authorizeAccessPolicyRule) {
            @$query['AuthorizeAccessPolicyRule'] = $request->authorizeAccessPolicyRule;
        }

        if (null !== $request->authorizeSecurityPolicyRule) {
            @$query['AuthorizeSecurityPolicyRule'] = $request->authorizeSecurityPolicyRule;
        }

        if (null !== $request->cameraRedirect) {
            @$query['CameraRedirect'] = $request->cameraRedirect;
        }

        if (null !== $request->clientType) {
            @$query['ClientType'] = $request->clientType;
        }

        if (null !== $request->clipboard) {
            @$query['Clipboard'] = $request->clipboard;
        }

        if (null !== $request->deviceRedirects) {
            @$query['DeviceRedirects'] = $request->deviceRedirects;
        }

        if (null !== $request->deviceRules) {
            @$query['DeviceRules'] = $request->deviceRules;
        }

        if (null !== $request->domainList) {
            @$query['DomainList'] = $request->domainList;
        }

        if (null !== $request->domainResolveRule) {
            @$query['DomainResolveRule'] = $request->domainResolveRule;
        }

        if (null !== $request->domainResolveRuleType) {
            @$query['DomainResolveRuleType'] = $request->domainResolveRuleType;
        }

        if (null !== $request->endUserApplyAdminCoordinate) {
            @$query['EndUserApplyAdminCoordinate'] = $request->endUserApplyAdminCoordinate;
        }

        if (null !== $request->endUserGroupCoordinate) {
            @$query['EndUserGroupCoordinate'] = $request->endUserGroupCoordinate;
        }

        if (null !== $request->gpuAcceleration) {
            @$query['GpuAcceleration'] = $request->gpuAcceleration;
        }

        if (null !== $request->html5Access) {
            @$query['Html5Access'] = $request->html5Access;
        }

        if (null !== $request->html5FileTransfer) {
            @$query['Html5FileTransfer'] = $request->html5FileTransfer;
        }

        if (null !== $request->internetCommunicationProtocol) {
            @$query['InternetCommunicationProtocol'] = $request->internetCommunicationProtocol;
        }

        if (null !== $request->localDrive) {
            @$query['LocalDrive'] = $request->localDrive;
        }

        if (null !== $request->maxReconnectTime) {
            @$query['MaxReconnectTime'] = $request->maxReconnectTime;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->netRedirect) {
            @$query['NetRedirect'] = $request->netRedirect;
        }

        if (null !== $request->preemptLogin) {
            @$query['PreemptLogin'] = $request->preemptLogin;
        }

        if (null !== $request->preemptLoginUser) {
            @$query['PreemptLoginUser'] = $request->preemptLoginUser;
        }

        if (null !== $request->printerRedirection) {
            @$query['PrinterRedirection'] = $request->printerRedirection;
        }

        if (null !== $request->recordContent) {
            @$query['RecordContent'] = $request->recordContent;
        }

        if (null !== $request->recordContentExpires) {
            @$query['RecordContentExpires'] = $request->recordContentExpires;
        }

        if (null !== $request->recording) {
            @$query['Recording'] = $request->recording;
        }

        if (null !== $request->recordingAudio) {
            @$query['RecordingAudio'] = $request->recordingAudio;
        }

        if (null !== $request->recordingDuration) {
            @$query['RecordingDuration'] = $request->recordingDuration;
        }

        if (null !== $request->recordingEndTime) {
            @$query['RecordingEndTime'] = $request->recordingEndTime;
        }

        if (null !== $request->recordingExpires) {
            @$query['RecordingExpires'] = $request->recordingExpires;
        }

        if (null !== $request->recordingFps) {
            @$query['RecordingFps'] = $request->recordingFps;
        }

        if (null !== $request->recordingStartTime) {
            @$query['RecordingStartTime'] = $request->recordingStartTime;
        }

        if (null !== $request->recordingUserNotify) {
            @$query['RecordingUserNotify'] = $request->recordingUserNotify;
        }

        if (null !== $request->recordingUserNotifyMessage) {
            @$query['RecordingUserNotifyMessage'] = $request->recordingUserNotifyMessage;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->remoteCoordinate) {
            @$query['RemoteCoordinate'] = $request->remoteCoordinate;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        if (null !== $request->scopeValue) {
            @$query['ScopeValue'] = $request->scopeValue;
        }

        if (null !== $request->usbRedirect) {
            @$query['UsbRedirect'] = $request->usbRedirect;
        }

        if (null !== $request->usbSupplyRedirectRule) {
            @$query['UsbSupplyRedirectRule'] = $request->usbSupplyRedirectRule;
        }

        if (null !== $request->videoRedirect) {
            @$query['VideoRedirect'] = $request->videoRedirect;
        }

        if (null !== $request->visualQuality) {
            @$query['VisualQuality'] = $request->visualQuality;
        }

        if (null !== $request->watermark) {
            @$query['Watermark'] = $request->watermark;
        }

        if (null !== $request->watermarkAntiCam) {
            @$query['WatermarkAntiCam'] = $request->watermarkAntiCam;
        }

        if (null !== $request->watermarkColor) {
            @$query['WatermarkColor'] = $request->watermarkColor;
        }

        if (null !== $request->watermarkDegree) {
            @$query['WatermarkDegree'] = $request->watermarkDegree;
        }

        if (null !== $request->watermarkFontSize) {
            @$query['WatermarkFontSize'] = $request->watermarkFontSize;
        }

        if (null !== $request->watermarkFontStyle) {
            @$query['WatermarkFontStyle'] = $request->watermarkFontStyle;
        }

        if (null !== $request->watermarkPower) {
            @$query['WatermarkPower'] = $request->watermarkPower;
        }

        if (null !== $request->watermarkRowAmount) {
            @$query['WatermarkRowAmount'] = $request->watermarkRowAmount;
        }

        if (null !== $request->watermarkSecurity) {
            @$query['WatermarkSecurity'] = $request->watermarkSecurity;
        }

        if (null !== $request->watermarkTransparency) {
            @$query['WatermarkTransparency'] = $request->watermarkTransparency;
        }

        if (null !== $request->watermarkTransparencyValue) {
            @$query['WatermarkTransparencyValue'] = $request->watermarkTransparencyValue;
        }

        if (null !== $request->watermarkType) {
            @$query['WatermarkType'] = $request->watermarkType;
        }

        if (null !== $request->wyAssistant) {
            @$query['WyAssistant'] = $request->wyAssistant;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreatePolicyGroup',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreatePolicyGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a cloud computer policy.
     *
     * @remarks
     * A cloud computer policy is a collection of rules to manage cloud computers in performance and security. For example, you can create a basic policy that involves the disk mapping, USB redirection, watermarking features and rules such as DNS rules. For more information, see [Policy overview](https://help.aliyun.com/document_detail/189345.html).
     *
     * @param request - CreatePolicyGroupRequest
     *
     * @returns CreatePolicyGroupResponse
     *
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
     * Creates a Resource Access Management (RAM) directory.
     *
     * @remarks
     * Before you create a RAM directory, complete the following preparations:
     * *   Call the `CreateVpc` operation to create a virtual private cloud (VPC) in a region supported by Elastic Desktop Service.
     * *   Call the `CreateVSwitch` operation to create a vSwitch in the VPC. The vSwitch is in a zone that is supported by Elastic Desktop Service. You can call the [DescribeZones](https://help.aliyun.com/document_detail/196648.html) operation to obtain the most recent zone list for a region supported by Elastic Desktop Service
     *
     * @param request - CreateRAMDirectoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateRAMDirectoryResponse
     *
     * @param CreateRAMDirectoryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateRAMDirectoryResponse
     */
    public function createRAMDirectoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopAccessType) {
            @$query['DesktopAccessType'] = $request->desktopAccessType;
        }

        if (null !== $request->directoryName) {
            @$query['DirectoryName'] = $request->directoryName;
        }

        if (null !== $request->enableAdminAccess) {
            @$query['EnableAdminAccess'] = $request->enableAdminAccess;
        }

        if (null !== $request->enableInternetAccess) {
            @$query['EnableInternetAccess'] = $request->enableInternetAccess;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateRAMDirectory',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateRAMDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Resource Access Management (RAM) directory.
     *
     * @remarks
     * Before you create a RAM directory, complete the following preparations:
     * *   Call the `CreateVpc` operation to create a virtual private cloud (VPC) in a region supported by Elastic Desktop Service.
     * *   Call the `CreateVSwitch` operation to create a vSwitch in the VPC. The vSwitch is in a zone that is supported by Elastic Desktop Service. You can call the [DescribeZones](https://help.aliyun.com/document_detail/196648.html) operation to obtain the most recent zone list for a region supported by Elastic Desktop Service
     *
     * @param request - CreateRAMDirectoryRequest
     *
     * @returns CreateRAMDirectoryResponse
     *
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
     * Creates an office network of the convenience account type. Elastic Desktop Service supports the following types of accounts: convenience accounts and enterprise AD accounts.
     *
     * @param request - CreateSimpleOfficeSiteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSimpleOfficeSiteResponse
     *
     * @param CreateSimpleOfficeSiteRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return CreateSimpleOfficeSiteResponse
     */
    public function createSimpleOfficeSiteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->cenOwnerId) {
            @$query['CenOwnerId'] = $request->cenOwnerId;
        }

        if (null !== $request->cidrBlock) {
            @$query['CidrBlock'] = $request->cidrBlock;
        }

        if (null !== $request->cloudBoxOfficeSite) {
            @$query['CloudBoxOfficeSite'] = $request->cloudBoxOfficeSite;
        }

        if (null !== $request->desktopAccessType) {
            @$query['DesktopAccessType'] = $request->desktopAccessType;
        }

        if (null !== $request->enableAdminAccess) {
            @$query['EnableAdminAccess'] = $request->enableAdminAccess;
        }

        if (null !== $request->enableInternetAccess) {
            @$query['EnableInternetAccess'] = $request->enableInternetAccess;
        }

        if (null !== $request->needVerifyZeroDevice) {
            @$query['NeedVerifyZeroDevice'] = $request->needVerifyZeroDevice;
        }

        if (null !== $request->officeSiteName) {
            @$query['OfficeSiteName'] = $request->officeSiteName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->verifyCode) {
            @$query['VerifyCode'] = $request->verifyCode;
        }

        if (null !== $request->vpcType) {
            @$query['VpcType'] = $request->vpcType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSimpleOfficeSite',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSimpleOfficeSiteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an office network of the convenience account type. Elastic Desktop Service supports the following types of accounts: convenience accounts and enterprise AD accounts.
     *
     * @param request - CreateSimpleOfficeSiteRequest
     *
     * @returns CreateSimpleOfficeSiteResponse
     *
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
     * Create a snapshot for a disk of a cloud computer to back up or restore the data on the disk.
     *
     * @remarks
     * The cloud computer must be in the **Running** or **Stopped** state.
     *
     * @param request - CreateSnapshotRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSnapshotResponse
     *
     * @param CreateSnapshotRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateSnapshotResponse
     */
    public function createSnapshotWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->snapshotName) {
            @$query['SnapshotName'] = $request->snapshotName;
        }

        if (null !== $request->sourceDiskType) {
            @$query['SourceDiskType'] = $request->sourceDiskType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSnapshot',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create a snapshot for a disk of a cloud computer to back up or restore the data on the disk.
     *
     * @remarks
     * The cloud computer must be in the **Running** or **Stopped** state.
     *
     * @param request - CreateSnapshotRequest
     *
     * @returns CreateSnapshotResponse
     *
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
     * 创建模板
     *
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
        $body = [];
        if (null !== $request->bizType) {
            @$body['BizType'] = $request->bizType;
        }

        $bodyFlat = [];
        if (null !== $request->dataDiskList) {
            @$bodyFlat['DataDiskList'] = $request->dataDiskList;
        }

        if (null !== $request->defaultLanguage) {
            @$body['DefaultLanguage'] = $request->defaultLanguage;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->imageId) {
            @$body['ImageId'] = $request->imageId;
        }

        if (null !== $request->policyGroupId) {
            @$body['PolicyGroupId'] = $request->policyGroupId;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->regionConfigList) {
            @$bodyFlat['RegionConfigList'] = $request->regionConfigList;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceTagList) {
            @$bodyFlat['ResourceTagList'] = $request->resourceTagList;
        }

        if (null !== $request->siteConfigList) {
            @$bodyFlat['SiteConfigList'] = $request->siteConfigList;
        }

        if (null !== $request->systemDiskPerformanceLevel) {
            @$body['SystemDiskPerformanceLevel'] = $request->systemDiskPerformanceLevel;
        }

        if (null !== $request->systemDiskSize) {
            @$body['SystemDiskSize'] = $request->systemDiskSize;
        }

        if (null !== $request->templateName) {
            @$body['TemplateName'] = $request->templateName;
        }

        if (null !== $request->timerGroupId) {
            @$body['TimerGroupId'] = $request->timerGroupId;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateTemplate',
            'version' => '2020-09-30',
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
     * 创建模板
     *
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
     * Deletes an automatic snapshot policy.
     *
     * @param request - DeleteAutoSnapshotPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAutoSnapshotPolicyResponse
     *
     * @param DeleteAutoSnapshotPolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteAutoSnapshotPolicyResponse
     */
    public function deleteAutoSnapshotPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteAutoSnapshotPolicy',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAutoSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an automatic snapshot policy.
     *
     * @param request - DeleteAutoSnapshotPolicyRequest
     *
     * @returns DeleteAutoSnapshotPolicyResponse
     *
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
     * Deletes custom cloud computer templates.
     *
     * @param request - DeleteBundlesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteBundlesResponse
     *
     * @param DeleteBundlesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteBundlesResponse
     */
    public function deleteBundlesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bundleId) {
            @$query['BundleId'] = $request->bundleId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteBundles',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteBundlesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes custom cloud computer templates.
     *
     * @param request - DeleteBundlesRequest
     *
     * @returns DeleteBundlesResponse
     *
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
     * Deletes a file from a cloud disk in Cloud Drive Service.
     *
     * @param request - DeleteCdsFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCdsFileResponse
     *
     * @param DeleteCdsFileRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteCdsFileResponse
     */
    public function deleteCdsFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cdsId) {
            @$query['CdsId'] = $request->cdsId;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->fileId) {
            @$query['FileId'] = $request->fileId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCdsFile',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCdsFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a file from a cloud disk in Cloud Drive Service.
     *
     * @param request - DeleteCdsFileRequest
     *
     * @returns DeleteCdsFileResponse
     *
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
     * Deletes a center policy.
     *
     * @param request - DeleteCenterPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCenterPolicyResponse
     *
     * @param DeleteCenterPolicyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteCenterPolicyResponse
     */
    public function deleteCenterPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessType) {
            @$query['BusinessType'] = $request->businessType;
        }

        if (null !== $request->policyGroupIds) {
            @$query['PolicyGroupIds'] = $request->policyGroupIds;
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
            'action' => 'DeleteCenterPolicy',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCenterPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a center policy.
     *
     * @param request - DeleteCenterPolicyRequest
     *
     * @returns DeleteCenterPolicyResponse
     *
     * @param DeleteCenterPolicyRequest $request
     *
     * @return DeleteCenterPolicyResponse
     */
    public function deleteCenterPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCenterPolicyWithOptions($request, $runtime);
    }

    /**
     * Deletes team spaces.
     *
     * @param request - DeleteCloudDriveGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCloudDriveGroupsResponse
     *
     * @param DeleteCloudDriveGroupsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteCloudDriveGroupsResponse
     */
    public function deleteCloudDriveGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cdsId) {
            @$query['CdsId'] = $request->cdsId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCloudDriveGroups',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCloudDriveGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes team spaces.
     *
     * @param request - DeleteCloudDriveGroupsRequest
     *
     * @returns DeleteCloudDriveGroupsResponse
     *
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
     * 删除无影网盘中的终端用户.
     *
     * @param request - DeleteCloudDriveUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteCloudDriveUsersResponse
     *
     * @param DeleteCloudDriveUsersRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteCloudDriveUsersResponse
     */
    public function deleteCloudDriveUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cdsId) {
            @$query['CdsId'] = $request->cdsId;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCloudDriveUsers',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteCloudDriveUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除无影网盘中的终端用户.
     *
     * @param request - DeleteCloudDriveUsersRequest
     *
     * @returns DeleteCloudDriveUsersResponse
     *
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
     * Deletes a configuration group.
     *
     * @param request - DeleteConfigGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteConfigGroupResponse
     *
     * @param DeleteConfigGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteConfigGroupResponse
     */
    public function deleteConfigGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupIds) {
            @$query['GroupIds'] = $request->groupIds;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteConfigGroup',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteConfigGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a configuration group.
     *
     * @param request - DeleteConfigGroupRequest
     *
     * @returns DeleteConfigGroupResponse
     *
     * @param DeleteConfigGroupRequest $request
     *
     * @return DeleteConfigGroupResponse
     */
    public function deleteConfigGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteConfigGroupWithOptions($request, $runtime);
    }

    /**
     * Releases a cloud computer share.
     *
     * @remarks
     *   Before releasing a cloud computer share, ensure that no cloud computers within it are in the Connected state and that no end users have access permissions to it.
     * *   You cannot delete a cloud computer share with an active subscription if it contains cloud computers that have not yet expired.
     * *   Deleting a pay-as-you-go cloud computer share will release all pay-as-you-go cloud computers within it.
     *
     * @param request - DeleteDesktopGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDesktopGroupResponse
     *
     * @param DeleteDesktopGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteDesktopGroupResponse
     */
    public function deleteDesktopGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopGroupId) {
            @$query['DesktopGroupId'] = $request->desktopGroupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resellerOwnerUid) {
            @$query['ResellerOwnerUid'] = $request->resellerOwnerUid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDesktopGroup',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDesktopGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases a cloud computer share.
     *
     * @remarks
     *   Before releasing a cloud computer share, ensure that no cloud computers within it are in the Connected state and that no end users have access permissions to it.
     * *   You cannot delete a cloud computer share with an active subscription if it contains cloud computers that have not yet expired.
     * *   Deleting a pay-as-you-go cloud computer share will release all pay-as-you-go cloud computers within it.
     *
     * @param request - DeleteDesktopGroupRequest
     *
     * @returns DeleteDesktopGroupResponse
     *
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
     * Releases pay-as-you-go cloud computers or expired subscription cloud computers.
     *
     * @param request - DeleteDesktopsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDesktopsResponse
     *
     * @param DeleteDesktopsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteDesktopsResponse
     */
    public function deleteDesktopsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resellerOwnerUid) {
            @$query['ResellerOwnerUid'] = $request->resellerOwnerUid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDesktops',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDesktopsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases pay-as-you-go cloud computers or expired subscription cloud computers.
     *
     * @param request - DeleteDesktopsRequest
     *
     * @returns DeleteDesktopsResponse
     *
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
     * Deletes trusted devices.
     *
     * @remarks
     * You can call the operation to manage client devices.
     *
     * @param request - DeleteDevicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDevicesResponse
     *
     * @param DeleteDevicesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteDevicesResponse
     */
    public function deleteDevicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientType) {
            @$query['ClientType'] = $request->clientType;
        }

        if (null !== $request->deviceIds) {
            @$query['DeviceIds'] = $request->deviceIds;
        }

        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDevices',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes trusted devices.
     *
     * @remarks
     * You can call the operation to manage client devices.
     *
     * @param request - DeleteDevicesRequest
     *
     * @returns DeleteDevicesResponse
     *
     * @param DeleteDevicesRequest $request
     *
     * @return DeleteDevicesResponse
     */
    public function deleteDevices($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDevicesWithOptions($request, $runtime);
    }

    /**
     * Deletes one or more directories.
     *
     * @remarks
     * You cannot delete a directory that has a cloud computer or is used by a cloud computer.
     *
     * @param request - DeleteDirectoriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDirectoriesResponse
     *
     * @param DeleteDirectoriesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteDirectoriesResponse
     */
    public function deleteDirectoriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDirectories',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDirectoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes one or more directories.
     *
     * @remarks
     * You cannot delete a directory that has a cloud computer or is used by a cloud computer.
     *
     * @param request - DeleteDirectoriesRequest
     *
     * @returns DeleteDirectoriesResponse
     *
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
     * @param request - DeleteEduRoomRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEduRoomResponse
     *
     * @param DeleteEduRoomRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteEduRoomResponse
     */
    public function deleteEduRoomWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eduRoomId) {
            @$query['EduRoomId'] = $request->eduRoomId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteEduRoom',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteEduRoomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DeleteEduRoomRequest
     *
     * @returns DeleteEduRoomResponse
     *
     * @param DeleteEduRoomRequest $request
     *
     * @return DeleteEduRoomResponse
     */
    public function deleteEduRoom($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEduRoomWithOptions($request, $runtime);
    }

    /**
     * Deletes one or more custom images.
     *
     * @remarks
     *   Images include system images and custom images. System images cannot be deleted.
     * *   If an image that you want to delete is referenced by a cloud computer template, call the [DeleteBundles](https://help.aliyun.com/document_detail/436972.html) operation to delete the cloud computer template before you delete the image.
     *
     * @param request - DeleteImagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteImagesResponse
     *
     * @param DeleteImagesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteImagesResponse
     */
    public function deleteImagesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deleteCascadedBundle) {
            @$query['DeleteCascadedBundle'] = $request->deleteCascadedBundle;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteImages',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes one or more custom images.
     *
     * @remarks
     *   Images include system images and custom images. System images cannot be deleted.
     * *   If an image that you want to delete is referenced by a cloud computer template, call the [DeleteBundles](https://help.aliyun.com/document_detail/436972.html) operation to delete the cloud computer template before you delete the image.
     *
     * @param request - DeleteImagesRequest
     *
     * @returns DeleteImagesResponse
     *
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
     * Deletes NAS file systems.
     *
     * @remarks
     * Before you delete a File Storage NAS (NAS) file system, make sure that the data you want to retain is backed up.
     * >Warning: If a NAS file system is deleted, data stored in the NAS file system cannot be restored. Proceed with caution when you delete NAS file systems.
     *
     * @param request - DeleteNASFileSystemsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNASFileSystemsResponse
     *
     * @param DeleteNASFileSystemsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteNASFileSystemsResponse
     */
    public function deleteNASFileSystemsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteNASFileSystems',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteNASFileSystemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes NAS file systems.
     *
     * @remarks
     * Before you delete a File Storage NAS (NAS) file system, make sure that the data you want to retain is backed up.
     * >Warning: If a NAS file system is deleted, data stored in the NAS file system cannot be restored. Proceed with caution when you delete NAS file systems.
     *
     * @param request - DeleteNASFileSystemsRequest
     *
     * @returns DeleteNASFileSystemsResponse
     *
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
     * Deletes one or more premium bandwidth plans.
     *
     * @param request - DeleteNetworkPackagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNetworkPackagesResponse
     *
     * @param DeleteNetworkPackagesRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteNetworkPackagesResponse
     */
    public function deleteNetworkPackagesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->networkPackageId) {
            @$query['NetworkPackageId'] = $request->networkPackageId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resellerOwnerUid) {
            @$query['ResellerOwnerUid'] = $request->resellerOwnerUid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteNetworkPackages',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteNetworkPackagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes one or more premium bandwidth plans.
     *
     * @param request - DeleteNetworkPackagesRequest
     *
     * @returns DeleteNetworkPackagesResponse
     *
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
     * Deletes office networks (formerly workspaces).
     *
     * @remarks
     * Before you delete an office network, make sure that the following operations are complete:
     * *   All cloud computers in the office network are released.
     * *   The data that you want to retain is backed up.
     * >  Resources and data on cloud computers in an office network cannot be restored after you delete it. Proceed with caution.
     *
     * @param request - DeleteOfficeSitesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteOfficeSitesResponse
     *
     * @param DeleteOfficeSitesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteOfficeSitesResponse
     */
    public function deleteOfficeSitesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteOfficeSites',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteOfficeSitesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes office networks (formerly workspaces).
     *
     * @remarks
     * Before you delete an office network, make sure that the following operations are complete:
     * *   All cloud computers in the office network are released.
     * *   The data that you want to retain is backed up.
     * >  Resources and data on cloud computers in an office network cannot be restored after you delete it. Proceed with caution.
     *
     * @param request - DeleteOfficeSitesRequest
     *
     * @returns DeleteOfficeSitesResponse
     *
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
     * Deletes one or more custom cloud computer policies.
     *
     * @remarks
     *   You cannot delete the cloud computer policy created by the Elastic Desktop Service (EDS) system.
     * *   You cannot delete the cloud computer policies that are associated with cloud computers.
     *
     * @param request - DeletePolicyGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeletePolicyGroupsResponse
     *
     * @param DeletePolicyGroupsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeletePolicyGroupsResponse
     */
    public function deletePolicyGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyGroupId) {
            @$query['PolicyGroupId'] = $request->policyGroupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeletePolicyGroups',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeletePolicyGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes one or more custom cloud computer policies.
     *
     * @remarks
     *   You cannot delete the cloud computer policy created by the Elastic Desktop Service (EDS) system.
     * *   You cannot delete the cloud computer policies that are associated with cloud computers.
     *
     * @param request - DeletePolicyGroupsRequest
     *
     * @returns DeletePolicyGroupsResponse
     *
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
     * Deletes one or more snapshots.
     *
     * @remarks
     * If the IDs of the snapshots that you specify do not exist, requests are ignored.
     *
     * @param request - DeleteSnapshotRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSnapshotResponse
     *
     * @param DeleteSnapshotRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteSnapshotResponse
     */
    public function deleteSnapshotWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->snapshotId) {
            @$query['SnapshotId'] = $request->snapshotId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSnapshot',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes one or more snapshots.
     *
     * @remarks
     * If the IDs of the snapshots that you specify do not exist, requests are ignored.
     *
     * @param request - DeleteSnapshotRequest
     *
     * @returns DeleteSnapshotResponse
     *
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
     * Deletes custom cloud computer templates.
     *
     * @remarks
     * Deleting a template does not affect cloud computers created from it or the associated resources.
     *
     * @param request - DeleteTemplatesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteTemplatesResponse
     *
     * @param DeleteTemplatesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteTemplatesResponse
     */
    public function deleteTemplatesWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->bizType) {
            @$body['BizType'] = $request->bizType;
        }

        if (null !== $request->templateIds) {
            @$body['TemplateIds'] = $request->templateIds;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteTemplates',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteTemplatesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes custom cloud computer templates.
     *
     * @remarks
     * Deleting a template does not affect cloud computers created from it or the associated resources.
     *
     * @param request - DeleteTemplatesRequest
     *
     * @returns DeleteTemplatesResponse
     *
     * @param DeleteTemplatesRequest $request
     *
     * @return DeleteTemplatesResponse
     */
    public function deleteTemplates($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteTemplatesWithOptions($request, $runtime);
    }

    /**
     * Delete virtual multi-factor authentication (MFA) devices.
     *
     * @remarks
     * If an MFA device is deleted, the device is unbound, reset, and disabled. When an Active Directory (AD) user wants to connect to the cloud desktop that is bound to the MFA device, the AD user must bind a new MFA device.
     *
     * @param request - DeleteVirtualMFADeviceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVirtualMFADeviceResponse
     *
     * @param DeleteVirtualMFADeviceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteVirtualMFADeviceResponse
     */
    public function deleteVirtualMFADeviceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serialNumber) {
            @$query['SerialNumber'] = $request->serialNumber;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteVirtualMFADevice',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteVirtualMFADeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Delete virtual multi-factor authentication (MFA) devices.
     *
     * @remarks
     * If an MFA device is deleted, the device is unbound, reset, and disabled. When an Active Directory (AD) user wants to connect to the cloud desktop that is bound to the MFA device, the AD user must bind a new MFA device.
     *
     * @param request - DeleteVirtualMFADeviceRequest
     *
     * @returns DeleteVirtualMFADeviceResponse
     *
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
     * Queries the details of an access control list (ACL) of an office network or a cloud computer.
     *
     * @param request - DescribeAclEntriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAclEntriesResponse
     *
     * @param DescribeAclEntriesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeAclEntriesResponse
     */
    public function describeAclEntriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sourceId) {
            @$query['SourceId'] = $request->sourceId;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAclEntries',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAclEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of an access control list (ACL) of an office network or a cloud computer.
     *
     * @param request - DescribeAclEntriesRequest
     *
     * @returns DescribeAclEntriesResponse
     *
     * @param DescribeAclEntriesRequest $request
     *
     * @return DescribeAclEntriesResponse
     */
    public function describeAclEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAclEntriesWithOptions($request, $runtime);
    }

    /**
     * Queries the automatic snapshot policy.
     *
     * @remarks
     * You can view an automatic snapshot policy that is associated with a cloud desktop in the Elastic Desktop Service (EDS) console. To view the automatic snapshot policy, you can go to the EDS console, choose Deployment > Snapshots in the left-side navigation pane, and then view an automatic snapshot policy on the Snapshots page.
     *
     * @param request - DescribeAutoSnapshotPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAutoSnapshotPolicyResponse
     *
     * @param DescribeAutoSnapshotPolicyRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeAutoSnapshotPolicyResponse
     */
    public function describeAutoSnapshotPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAutoSnapshotPolicy',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAutoSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the automatic snapshot policy.
     *
     * @remarks
     * You can view an automatic snapshot policy that is associated with a cloud desktop in the Elastic Desktop Service (EDS) console. To view the automatic snapshot policy, you can go to the EDS console, choose Deployment > Snapshots in the left-side navigation pane, and then view an automatic snapshot policy on the Snapshots page.
     *
     * @param request - DescribeAutoSnapshotPolicyRequest
     *
     * @returns DescribeAutoSnapshotPolicyResponse
     *
     * @param DescribeAutoSnapshotPolicyRequest $request
     *
     * @return DescribeAutoSnapshotPolicyResponse
     */
    public function describeAutoSnapshotPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoSnapshotPolicyWithOptions($request, $runtime);
    }

    /**
     * Queries the details of cloud computer templates.
     *
     * @param request - DescribeBundlesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBundlesResponse
     *
     * @param DescribeBundlesRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeBundlesResponse
     */
    public function describeBundlesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bundleId) {
            @$query['BundleId'] = $request->bundleId;
        }

        if (null !== $request->bundleType) {
            @$query['BundleType'] = $request->bundleType;
        }

        if (null !== $request->checkStock) {
            @$query['CheckStock'] = $request->checkStock;
        }

        if (null !== $request->cpuCount) {
            @$query['CpuCount'] = $request->cpuCount;
        }

        if (null !== $request->desktopTypeFamily) {
            @$query['DesktopTypeFamily'] = $request->desktopTypeFamily;
        }

        if (null !== $request->fotaChannel) {
            @$query['FotaChannel'] = $request->fotaChannel;
        }

        if (null !== $request->fromDesktopGroup) {
            @$query['FromDesktopGroup'] = $request->fromDesktopGroup;
        }

        if (null !== $request->gpuCount) {
            @$query['GpuCount'] = $request->gpuCount;
        }

        if (null !== $request->gpuDriverType) {
            @$query['GpuDriverType'] = $request->gpuDriverType;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->memorySize) {
            @$query['MemorySize'] = $request->memorySize;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->osType) {
            @$query['OsType'] = $request->osType;
        }

        if (null !== $request->protocolType) {
            @$query['ProtocolType'] = $request->protocolType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        if (null !== $request->selectedBundle) {
            @$query['SelectedBundle'] = $request->selectedBundle;
        }

        if (null !== $request->sessionType) {
            @$query['SessionType'] = $request->sessionType;
        }

        if (null !== $request->supportMultiSession) {
            @$query['SupportMultiSession'] = $request->supportMultiSession;
        }

        if (null !== $request->volumeEncryptionEnabled) {
            @$query['VolumeEncryptionEnabled'] = $request->volumeEncryptionEnabled;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBundles',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBundlesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of cloud computer templates.
     *
     * @param request - DescribeBundlesRequest
     *
     * @returns DescribeBundlesResponse
     *
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
     * Queries file sharing links of a cloud disk in Cloud Drive Service.
     *
     * @param request - DescribeCdsFileShareLinksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCdsFileShareLinksResponse
     *
     * @param DescribeCdsFileShareLinksRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeCdsFileShareLinksResponse
     */
    public function describeCdsFileShareLinksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cdsId) {
            @$query['CdsId'] = $request->cdsId;
        }

        if (null !== $request->creators) {
            @$query['Creators'] = $request->creators;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->shareId) {
            @$query['ShareId'] = $request->shareId;
        }

        if (null !== $request->shareName) {
            @$query['ShareName'] = $request->shareName;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCdsFileShareLinks',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCdsFileShareLinksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries file sharing links of a cloud disk in Cloud Drive Service.
     *
     * @param request - DescribeCdsFileShareLinksRequest
     *
     * @returns DescribeCdsFileShareLinksResponse
     *
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
     * Queries the details of all Cloud Enterprise Network (CEN) instances within an Alibaba Cloud account.
     *
     * @param request - DescribeCensRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCensResponse
     *
     * @param DescribeCensRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeCensResponse
     */
    public function describeCensWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCens',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCensResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of all Cloud Enterprise Network (CEN) instances within an Alibaba Cloud account.
     *
     * @param request - DescribeCensRequest
     *
     * @returns DescribeCensResponse
     *
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
     * Queries center policies.
     *
     * @param request - DescribeCenterPolicyListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCenterPolicyListResponse
     *
     * @param DescribeCenterPolicyListRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeCenterPolicyListResponse
     */
    public function describeCenterPolicyListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->businessType) {
            @$query['BusinessType'] = $request->businessType;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->policyGroupId) {
            @$query['PolicyGroupId'] = $request->policyGroupId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCenterPolicyList',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCenterPolicyListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries center policies.
     *
     * @param request - DescribeCenterPolicyListRequest
     *
     * @returns DescribeCenterPolicyListResponse
     *
     * @param DescribeCenterPolicyListRequest $request
     *
     * @return DescribeCenterPolicyListResponse
     */
    public function describeCenterPolicyList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCenterPolicyListWithOptions($request, $runtime);
    }

    /**
     * Queries the operation logs of end users. For example, the logs record the events that end users start and stop cloud desktops, and disconnect desktop sessions.
     *
     * @remarks
     * You can audit the operation logs of regular users to improve security. The operation logs record events such as desktop startup, shutdown, and session disconnection.
     *
     * @param request - DescribeClientEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClientEventsResponse
     *
     * @param DescribeClientEventsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeClientEventsResponse
     */
    public function describeClientEventsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->desktopIp) {
            @$query['DesktopIp'] = $request->desktopIp;
        }

        if (null !== $request->desktopName) {
            @$query['DesktopName'] = $request->desktopName;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->eventType) {
            @$query['EventType'] = $request->eventType;
        }

        if (null !== $request->eventTypes) {
            @$query['EventTypes'] = $request->eventTypes;
        }

        if (null !== $request->fillHardwareInfo) {
            @$query['FillHardwareInfo'] = $request->fillHardwareInfo;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->officeSiteName) {
            @$query['OfficeSiteName'] = $request->officeSiteName;
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
            'action' => 'DescribeClientEvents',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeClientEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the operation logs of end users. For example, the logs record the events that end users start and stop cloud desktops, and disconnect desktop sessions.
     *
     * @remarks
     * You can audit the operation logs of regular users to improve security. The operation logs record events such as desktop startup, shutdown, and session disconnection.
     *
     * @param request - DescribeClientEventsRequest
     *
     * @returns DescribeClientEventsResponse
     *
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
     * Queries a list of authorized team spaces.
     *
     * @param request - DescribeCloudDriveGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCloudDriveGroupsResponse
     *
     * @param DescribeCloudDriveGroupsRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeCloudDriveGroupsResponse
     */
    public function describeCloudDriveGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cdsId) {
            @$query['CdsId'] = $request->cdsId;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->directoryName) {
            @$query['DirectoryName'] = $request->directoryName;
        }

        if (null !== $request->driveStatus) {
            @$query['DriveStatus'] = $request->driveStatus;
        }

        if (null !== $request->driveType) {
            @$query['DriveType'] = $request->driveType;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->groupName) {
            @$query['GroupName'] = $request->groupName;
        }

        if (null !== $request->groupType) {
            @$query['GroupType'] = $request->groupType;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->parentGroupId) {
            @$query['ParentGroupId'] = $request->parentGroupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCloudDriveGroups',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCloudDriveGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of authorized team spaces.
     *
     * @param request - DescribeCloudDriveGroupsRequest
     *
     * @returns DescribeCloudDriveGroupsResponse
     *
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
     * 查询pds用户权限.
     *
     * @param request - DescribeCloudDrivePermissionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCloudDrivePermissionsResponse
     *
     * @param DescribeCloudDrivePermissionsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeCloudDrivePermissionsResponse
     */
    public function describeCloudDrivePermissionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cdsId) {
            @$query['CdsId'] = $request->cdsId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCloudDrivePermissions',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCloudDrivePermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询pds用户权限.
     *
     * @param request - DescribeCloudDrivePermissionsRequest
     *
     * @returns DescribeCloudDrivePermissionsResponse
     *
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
     * 查询所有无影网盘终端用户的信息.
     *
     * @param request - DescribeCloudDriveUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCloudDriveUsersResponse
     *
     * @param DescribeCloudDriveUsersRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeCloudDriveUsersResponse
     */
    public function describeCloudDriveUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cdsId) {
            @$query['CdsId'] = $request->cdsId;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCloudDriveUsers',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCloudDriveUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询所有无影网盘终端用户的信息.
     *
     * @param request - DescribeCloudDriveUsersRequest
     *
     * @returns DescribeCloudDriveUsersResponse
     *
     * @param DescribeCloudDriveUsersRequest $request
     *
     * @return DescribeCloudDriveUsersResponse
     */
    public function describeCloudDriveUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudDriveUsersWithOptions($request, $runtime);
    }

    /**
     * Queries configuration groups.
     *
     * @param request - DescribeConfigGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeConfigGroupResponse
     *
     * @param DescribeConfigGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeConfigGroupResponse
     */
    public function describeConfigGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->groupIds) {
            @$query['GroupIds'] = $request->groupIds;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->statuses) {
            @$query['Statuses'] = $request->statuses;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeConfigGroup',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeConfigGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries configuration groups.
     *
     * @param request - DescribeConfigGroupRequest
     *
     * @returns DescribeConfigGroupResponse
     *
     * @param DescribeConfigGroupRequest $request
     *
     * @return DescribeConfigGroupResponse
     */
    public function describeConfigGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeConfigGroupWithOptions($request, $runtime);
    }

    /**
     * @param request - DescribeCustomizedListHeadersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCustomizedListHeadersResponse
     *
     * @param DescribeCustomizedListHeadersRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeCustomizedListHeadersResponse
     */
    public function describeCustomizedListHeadersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->langType) {
            @$query['LangType'] = $request->langType;
        }

        if (null !== $request->listType) {
            @$query['ListType'] = $request->listType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCustomizedListHeaders',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCustomizedListHeadersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeCustomizedListHeadersRequest
     *
     * @returns DescribeCustomizedListHeadersResponse
     *
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
     * Queries sessions in a desktop group.
     *
     * @param request - DescribeDesktopGroupSessionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDesktopGroupSessionsResponse
     *
     * @param DescribeDesktopGroupSessionsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDesktopGroupSessionsResponse
     */
    public function describeDesktopGroupSessionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->ownType) {
            @$query['OwnType'] = $request->ownType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sessionStatus) {
            @$query['SessionStatus'] = $request->sessionStatus;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDesktopGroupSessions',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDesktopGroupSessionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries sessions in a desktop group.
     *
     * @param request - DescribeDesktopGroupSessionsRequest
     *
     * @returns DescribeDesktopGroupSessionsResponse
     *
     * @param DescribeDesktopGroupSessionsRequest $request
     *
     * @return DescribeDesktopGroupSessionsResponse
     */
    public function describeDesktopGroupSessions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDesktopGroupSessionsWithOptions($request, $runtime);
    }

    /**
     * Queries cloud computer shares.
     *
     * @param request - DescribeDesktopGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDesktopGroupsResponse
     *
     * @param DescribeDesktopGroupsRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDesktopGroupsResponse
     */
    public function describeDesktopGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bundleId) {
            @$query['BundleId'] = $request->bundleId;
        }

        if (null !== $request->desktopGroupId) {
            @$query['DesktopGroupId'] = $request->desktopGroupId;
        }

        if (null !== $request->desktopGroupIds) {
            @$query['DesktopGroupIds'] = $request->desktopGroupIds;
        }

        if (null !== $request->desktopGroupName) {
            @$query['DesktopGroupName'] = $request->desktopGroupName;
        }

        if (null !== $request->endUserIds) {
            @$query['EndUserIds'] = $request->endUserIds;
        }

        if (null !== $request->excludedEndUserIds) {
            @$query['ExcludedEndUserIds'] = $request->excludedEndUserIds;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->multiResource) {
            @$query['MultiResource'] = $request->multiResource;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->ownType) {
            @$query['OwnType'] = $request->ownType;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->policyGroupId) {
            @$query['PolicyGroupId'] = $request->policyGroupId;
        }

        if (null !== $request->protocolType) {
            @$query['ProtocolType'] = $request->protocolType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDesktopGroups',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDesktopGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries cloud computer shares.
     *
     * @param request - DescribeDesktopGroupsRequest
     *
     * @returns DescribeDesktopGroupsResponse
     *
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
     * Queries the basic information about cloud computers.
     *
     * @param request - DescribeDesktopInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDesktopInfoResponse
     *
     * @param DescribeDesktopInfoRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeDesktopInfoResponse
     */
    public function describeDesktopInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDesktopInfo',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDesktopInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the basic information about cloud computers.
     *
     * @param request - DescribeDesktopInfoRequest
     *
     * @returns DescribeDesktopInfoResponse
     *
     * @param DescribeDesktopInfoRequest $request
     *
     * @return DescribeDesktopInfoResponse
     */
    public function describeDesktopInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDesktopInfoWithOptions($request, $runtime);
    }

    /**
     * 查询超卖组.
     *
     * @param request - DescribeDesktopOversoldGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDesktopOversoldGroupResponse
     *
     * @param DescribeDesktopOversoldGroupRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeDesktopOversoldGroupResponse
     */
    public function describeDesktopOversoldGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->oversoldGroupIds) {
            @$query['OversoldGroupIds'] = $request->oversoldGroupIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDesktopOversoldGroup',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDesktopOversoldGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询超卖组.
     *
     * @param request - DescribeDesktopOversoldGroupRequest
     *
     * @returns DescribeDesktopOversoldGroupResponse
     *
     * @param DescribeDesktopOversoldGroupRequest $request
     *
     * @return DescribeDesktopOversoldGroupResponse
     */
    public function describeDesktopOversoldGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDesktopOversoldGroupWithOptions($request, $runtime);
    }

    /**
     * 查询超卖组用户.
     *
     * @param request - DescribeDesktopOversoldUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDesktopOversoldUserResponse
     *
     * @param DescribeDesktopOversoldUserRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeDesktopOversoldUserResponse
     */
    public function describeDesktopOversoldUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->oversoldGroupId) {
            @$query['OversoldGroupId'] = $request->oversoldGroupId;
        }

        if (null !== $request->userDesktopIds) {
            @$query['UserDesktopIds'] = $request->userDesktopIds;
        }

        if (null !== $request->userGroupId) {
            @$query['UserGroupId'] = $request->userGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDesktopOversoldUser',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDesktopOversoldUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询超卖组用户.
     *
     * @param request - DescribeDesktopOversoldUserRequest
     *
     * @returns DescribeDesktopOversoldUserResponse
     *
     * @param DescribeDesktopOversoldUserRequest $request
     *
     * @return DescribeDesktopOversoldUserResponse
     */
    public function describeDesktopOversoldUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDesktopOversoldUserWithOptions($request, $runtime);
    }

    /**
     * 查询超卖用户组.
     *
     * @param request - DescribeDesktopOversoldUserGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDesktopOversoldUserGroupResponse
     *
     * @param DescribeDesktopOversoldUserGroupRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeDesktopOversoldUserGroupResponse
     */
    public function describeDesktopOversoldUserGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->oversoldGroupId) {
            @$query['OversoldGroupId'] = $request->oversoldGroupId;
        }

        if (null !== $request->userGroupIds) {
            @$query['UserGroupIds'] = $request->userGroupIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDesktopOversoldUserGroup',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDesktopOversoldUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询超卖用户组.
     *
     * @param request - DescribeDesktopOversoldUserGroupRequest
     *
     * @returns DescribeDesktopOversoldUserGroupResponse
     *
     * @param DescribeDesktopOversoldUserGroupRequest $request
     *
     * @return DescribeDesktopOversoldUserGroupResponse
     */
    public function describeDesktopOversoldUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDesktopOversoldUserGroupWithOptions($request, $runtime);
    }

    /**
     * Queries the detailed session information of a cloud computer.
     *
     * @remarks
     * You can only query data within the last 30 days.
     *
     * @param request - DescribeDesktopSessionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDesktopSessionsResponse
     *
     * @param DescribeDesktopSessionsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDesktopSessionsResponse
     */
    public function describeDesktopSessionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->checkOsSession) {
            @$query['CheckOsSession'] = $request->checkOsSession;
        }

        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->desktopName) {
            @$query['DesktopName'] = $request->desktopName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->endUserIdFilter) {
            @$query['EndUserIdFilter'] = $request->endUserIdFilter;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sessionStatus) {
            @$query['SessionStatus'] = $request->sessionStatus;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->subPayType) {
            @$query['SubPayType'] = $request->subPayType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDesktopSessions',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDesktopSessionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the detailed session information of a cloud computer.
     *
     * @remarks
     * You can only query data within the last 30 days.
     *
     * @param request - DescribeDesktopSessionsRequest
     *
     * @returns DescribeDesktopSessionsResponse
     *
     * @param DescribeDesktopSessionsRequest $request
     *
     * @return DescribeDesktopSessionsResponse
     */
    public function describeDesktopSessions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDesktopSessionsWithOptions($request, $runtime);
    }

    /**
     * Queries the instance types of cloud computers.
     *
     * @remarks
     * When no values are specified for the `InstanceTypeFamily` and `DesktopTypeId` parameters for a cloud desktop, all types of cloud desktops are queried.
     *
     * @param request - DescribeDesktopTypesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDesktopTypesResponse
     *
     * @param DescribeDesktopTypesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDesktopTypesResponse
     */
    public function describeDesktopTypesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appliedScope) {
            @$query['AppliedScope'] = $request->appliedScope;
        }

        if (null !== $request->cpuCount) {
            @$query['CpuCount'] = $request->cpuCount;
        }

        if (null !== $request->desktopGroupIdForModify) {
            @$query['DesktopGroupIdForModify'] = $request->desktopGroupIdForModify;
        }

        if (null !== $request->desktopIdForModify) {
            @$query['DesktopIdForModify'] = $request->desktopIdForModify;
        }

        if (null !== $request->desktopTypeId) {
            @$query['DesktopTypeId'] = $request->desktopTypeId;
        }

        if (null !== $request->desktopTypeIdList) {
            @$query['DesktopTypeIdList'] = $request->desktopTypeIdList;
        }

        if (null !== $request->gpuCount) {
            @$query['GpuCount'] = $request->gpuCount;
        }

        if (null !== $request->gpuDriverType) {
            @$query['GpuDriverType'] = $request->gpuDriverType;
        }

        if (null !== $request->gpuMemory) {
            @$query['GpuMemory'] = $request->gpuMemory;
        }

        if (null !== $request->instanceTypeFamily) {
            @$query['InstanceTypeFamily'] = $request->instanceTypeFamily;
        }

        if (null !== $request->memorySize) {
            @$query['MemorySize'] = $request->memorySize;
        }

        if (null !== $request->orderBy) {
            @$query['OrderBy'] = $request->orderBy;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        if (null !== $request->sortType) {
            @$query['SortType'] = $request->sortType;
        }

        if (null !== $request->supportMinSessionCount) {
            @$query['SupportMinSessionCount'] = $request->supportMinSessionCount;
        }

        if (null !== $request->zoneId) {
            @$query['ZoneId'] = $request->zoneId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDesktopTypes',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDesktopTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the instance types of cloud computers.
     *
     * @remarks
     * When no values are specified for the `InstanceTypeFamily` and `DesktopTypeId` parameters for a cloud desktop, all types of cloud desktops are queried.
     *
     * @param request - DescribeDesktopTypesRequest
     *
     * @returns DescribeDesktopTypesResponse
     *
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
     * Queries the details of cloud computers.
     *
     * @param request - DescribeDesktopsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDesktopsResponse
     *
     * @param DescribeDesktopsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeDesktopsResponse
     */
    public function describeDesktopsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->desktopGroupId) {
            @$query['DesktopGroupId'] = $request->desktopGroupId;
        }

        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->desktopName) {
            @$query['DesktopName'] = $request->desktopName;
        }

        if (null !== $request->desktopStatus) {
            @$query['DesktopStatus'] = $request->desktopStatus;
        }

        if (null !== $request->desktopStatusList) {
            @$query['DesktopStatusList'] = $request->desktopStatusList;
        }

        if (null !== $request->desktopType) {
            @$query['DesktopType'] = $request->desktopType;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->excludedEndUserId) {
            @$query['ExcludedEndUserId'] = $request->excludedEndUserId;
        }

        if (null !== $request->expiredTime) {
            @$query['ExpiredTime'] = $request->expiredTime;
        }

        if (null !== $request->fillResourceGroup) {
            @$query['FillResourceGroup'] = $request->fillResourceGroup;
        }

        if (null !== $request->filterDesktopGroup) {
            @$query['FilterDesktopGroup'] = $request->filterDesktopGroup;
        }

        if (null !== $request->gpuInstanceGroupId) {
            @$query['GpuInstanceGroupId'] = $request->gpuInstanceGroupId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->managementFlag) {
            @$query['ManagementFlag'] = $request->managementFlag;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->multiResource) {
            @$query['MultiResource'] = $request->multiResource;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->officeSiteName) {
            @$query['OfficeSiteName'] = $request->officeSiteName;
        }

        if (null !== $request->onlyDesktopGroup) {
            @$query['OnlyDesktopGroup'] = $request->onlyDesktopGroup;
        }

        if (null !== $request->osTypes) {
            @$query['OsTypes'] = $request->osTypes;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->policyGroupId) {
            @$query['PolicyGroupId'] = $request->policyGroupId;
        }

        if (null !== $request->protocolType) {
            @$query['ProtocolType'] = $request->protocolType;
        }

        if (null !== $request->qosRuleId) {
            @$query['QosRuleId'] = $request->qosRuleId;
        }

        if (null !== $request->queryFotaUpdate) {
            @$query['QueryFotaUpdate'] = $request->queryFotaUpdate;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceGroupId) {
            @$query['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->snapshotPolicyId) {
            @$query['SnapshotPolicyId'] = $request->snapshotPolicyId;
        }

        if (null !== $request->subPayType) {
            @$query['SubPayType'] = $request->subPayType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDesktops',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDesktopsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of cloud computers.
     *
     * @param request - DescribeDesktopsRequest
     *
     * @returns DescribeDesktopsResponse
     *
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
     * Queries the cloud computers in a share by billing method.
     *
     * @param request - DescribeDesktopsInGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDesktopsInGroupResponse
     *
     * @param DescribeDesktopsInGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDesktopsInGroupResponse
     */
    public function describeDesktopsInGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->customEndTimePeriod) {
            @$query['CustomEndTimePeriod'] = $request->customEndTimePeriod;
        }

        if (null !== $request->customStartTimePeriod) {
            @$query['CustomStartTimePeriod'] = $request->customStartTimePeriod;
        }

        if (null !== $request->desktopGroupId) {
            @$query['DesktopGroupId'] = $request->desktopGroupId;
        }

        if (null !== $request->ignoreDeleted) {
            @$query['IgnoreDeleted'] = $request->ignoreDeleted;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDesktopsInGroup',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDesktopsInGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the cloud computers in a share by billing method.
     *
     * @param request - DescribeDesktopsInGroupRequest
     *
     * @returns DescribeDesktopsInGroupResponse
     *
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
     * Queries the list of trusted devices.
     *
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
        if (null !== $request->adDomain) {
            @$query['AdDomain'] = $request->adDomain;
        }

        if (null !== $request->clientType) {
            @$query['ClientType'] = $request->clientType;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->userType) {
            @$query['UserType'] = $request->userType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDevices',
            'version' => '2020-09-30',
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
     * Queries the list of trusted devices.
     *
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
     * Queries the details of directories.
     *
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
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->directoryStatus) {
            @$query['DirectoryStatus'] = $request->directoryStatus;
        }

        if (null !== $request->directoryType) {
            @$query['DirectoryType'] = $request->directoryType;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
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
            'action' => 'DescribeDirectories',
            'version' => '2020-09-30',
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
     * Queries the details of directories.
     *
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
     * @param request - DescribeFlowMetricRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFlowMetricResponse
     *
     * @param DescribeFlowMetricRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeFlowMetricResponse
     */
    public function describeFlowMetricWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->metricType) {
            @$query['MetricType'] = $request->metricType;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
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
            'action' => 'DescribeFlowMetric',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFlowMetricResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeFlowMetricRequest
     *
     * @returns DescribeFlowMetricResponse
     *
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
     * Queries cloud computer-level traffic statistics of a single office network.
     *
     * @remarks
     * > You can query only the traffic data in the last 90 days.
     *
     * @param request - DescribeFlowStatisticRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFlowStatisticResponse
     *
     * @param DescribeFlowStatisticRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeFlowStatisticResponse
     */
    public function describeFlowStatisticWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeFlowStatistic',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFlowStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries cloud computer-level traffic statistics of a single office network.
     *
     * @remarks
     * > You can query only the traffic data in the last 90 days.
     *
     * @param request - DescribeFlowStatisticRequest
     *
     * @returns DescribeFlowStatisticResponse
     *
     * @param DescribeFlowStatisticRequest $request
     *
     * @return DescribeFlowStatisticResponse
     */
    public function describeFlowStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFlowStatisticWithOptions($request, $runtime);
    }

    /**
     * Queries information about the cloud computers whose images can be and are pending to be updated to the specified version.
     *
     * @param request - DescribeFotaPendingDesktopsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFotaPendingDesktopsResponse
     *
     * @param DescribeFotaPendingDesktopsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeFotaPendingDesktopsResponse
     */
    public function describeFotaPendingDesktopsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->desktopName) {
            @$query['DesktopName'] = $request->desktopName;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->taskUid) {
            @$query['TaskUid'] = $request->taskUid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeFotaPendingDesktops',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFotaPendingDesktopsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about the cloud computers whose images can be and are pending to be updated to the specified version.
     *
     * @param request - DescribeFotaPendingDesktopsRequest
     *
     * @returns DescribeFotaPendingDesktopsResponse
     *
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
     * Queries a list of update tasks.
     *
     * @param request - DescribeFotaTasksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFotaTasksResponse
     *
     * @param DescribeFotaTasksRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeFotaTasksResponse
     */
    public function describeFotaTasksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fotaStatus) {
            @$query['FotaStatus'] = $request->fotaStatus;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->taskUid) {
            @$query['TaskUid'] = $request->taskUid;
        }

        if (null !== $request->userStatus) {
            @$query['UserStatus'] = $request->userStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeFotaTasks',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFotaTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a list of update tasks.
     *
     * @param request - DescribeFotaTasksRequest
     *
     * @returns DescribeFotaTasksResponse
     *
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
     * Queries the applications and their processes of an end user.
     *
     * @param request - DescribeGuestApplicationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeGuestApplicationsResponse
     *
     * @param DescribeGuestApplicationsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeGuestApplicationsResponse
     */
    public function describeGuestApplicationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeGuestApplications',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeGuestApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the applications and their processes of an end user.
     *
     * @param request - DescribeGuestApplicationsRequest
     *
     * @returns DescribeGuestApplicationsResponse
     *
     * @param DescribeGuestApplicationsRequest $request
     *
     * @return DescribeGuestApplicationsResponse
     */
    public function describeGuestApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeGuestApplicationsWithOptions($request, $runtime);
    }

    /**
     * Queries the image modification records of cloud computers.
     *
     * @param request - DescribeImageModifiedRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeImageModifiedRecordsResponse
     *
     * @param DescribeImageModifiedRecordsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeImageModifiedRecordsResponse
     */
    public function describeImageModifiedRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeImageModifiedRecords',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeImageModifiedRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the image modification records of cloud computers.
     *
     * @param request - DescribeImageModifiedRecordsRequest
     *
     * @returns DescribeImageModifiedRecordsResponse
     *
     * @param DescribeImageModifiedRecordsRequest $request
     *
     * @return DescribeImageModifiedRecordsResponse
     */
    public function describeImageModifiedRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageModifiedRecordsWithOptions($request, $runtime);
    }

    /**
     * Queries the recipient Alibaba Cloud accounts with which an image is shared.
     *
     * @remarks
     * You can call the [ModifyImagePermission](https://help.aliyun.com/document_detail/436982.html) operation to share an image with another cloud computer user or unshare an image. You can call the DescribeImagePermission operation to obtain the Alibaba Cloud accounts with which the current image is shared.
     *
     * @param request - DescribeImagePermissionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeImagePermissionResponse
     *
     * @param DescribeImagePermissionRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeImagePermissionResponse
     */
    public function describeImagePermissionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeImagePermission',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeImagePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the recipient Alibaba Cloud accounts with which an image is shared.
     *
     * @remarks
     * You can call the [ModifyImagePermission](https://help.aliyun.com/document_detail/436982.html) operation to share an image with another cloud computer user or unshare an image. You can call the DescribeImagePermission operation to obtain the Alibaba Cloud accounts with which the current image is shared.
     *
     * @param request - DescribeImagePermissionRequest
     *
     * @returns DescribeImagePermissionResponse
     *
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
     * Queries the information about images.
     *
     * @param request - DescribeImagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeImagesResponse
     *
     * @param DescribeImagesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeImagesResponse
     */
    public function describeImagesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopInstanceType) {
            @$query['DesktopInstanceType'] = $request->desktopInstanceType;
        }

        if (null !== $request->fotaVersion) {
            @$query['FotaVersion'] = $request->fotaVersion;
        }

        if (null !== $request->gpuCategory) {
            @$query['GpuCategory'] = $request->gpuCategory;
        }

        if (null !== $request->gpuDriverVersion) {
            @$query['GpuDriverVersion'] = $request->gpuDriverVersion;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->imageName) {
            @$query['ImageName'] = $request->imageName;
        }

        if (null !== $request->imageStatus) {
            @$query['ImageStatus'] = $request->imageStatus;
        }

        if (null !== $request->imageType) {
            @$query['ImageType'] = $request->imageType;
        }

        if (null !== $request->languageType) {
            @$query['LanguageType'] = $request->languageType;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->osType) {
            @$query['OsType'] = $request->osType;
        }

        if (null !== $request->protocolType) {
            @$query['ProtocolType'] = $request->protocolType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sessionType) {
            @$query['SessionType'] = $request->sessionType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeImages',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about images.
     *
     * @param request - DescribeImagesRequest
     *
     * @returns DescribeImagesResponse
     *
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
     * @remarks
     *   After you run a command, it may not succeed. You can call this operation to query the execution result.
     * *   You can query the information about execution in the last two weeks. A maximum of 100,000 lines of execution information can be retained.
     *
     * @param request - DescribeInvocationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInvocationsResponse
     *
     * @param DescribeInvocationsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeInvocationsResponse
     */
    public function describeInvocationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->commandType) {
            @$query['CommandType'] = $request->commandType;
        }

        if (null !== $request->contentEncoding) {
            @$query['ContentEncoding'] = $request->contentEncoding;
        }

        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->desktopIds) {
            @$query['DesktopIds'] = $request->desktopIds;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->includeInvokeDesktops) {
            @$query['IncludeInvokeDesktops'] = $request->includeInvokeDesktops;
        }

        if (null !== $request->includeOutput) {
            @$query['IncludeOutput'] = $request->includeOutput;
        }

        if (null !== $request->invokeId) {
            @$query['InvokeId'] = $request->invokeId;
        }

        if (null !== $request->invokeStatus) {
            @$query['InvokeStatus'] = $request->invokeStatus;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInvocations',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInvocationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @remarks
     *   After you run a command, it may not succeed. You can call this operation to query the execution result.
     * *   You can query the information about execution in the last two weeks. A maximum of 100,000 lines of execution information can be retained.
     *
     * @param request - DescribeInvocationsRequest
     *
     * @returns DescribeInvocationsResponse
     *
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
     * Queries Key Management Service (KMS) keys of users. The first time you call this operation, you can try to create a service key for Elastic Desktop Service (EDS) and call the operation to return results.
     *
     * @param request - DescribeKmsKeysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeKmsKeysResponse
     *
     * @param DescribeKmsKeysRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeKmsKeysResponse
     */
    public function describeKmsKeysWithOptions($request, $runtime)
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
            'action' => 'DescribeKmsKeys',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeKmsKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries Key Management Service (KMS) keys of users. The first time you call this operation, you can try to create a service key for Elastic Desktop Service (EDS) and call the operation to return results.
     *
     * @param request - DescribeKmsKeysRequest
     *
     * @returns DescribeKmsKeysResponse
     *
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
     * Queries the price for changing the specifications of a monthly subscription cloud computer with unlimited hours or a premium bandwidth plan.
     *
     * @param request - DescribeModificationPriceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeModificationPriceResponse
     *
     * @param DescribeModificationPriceRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeModificationPriceResponse
     */
    public function describeModificationPriceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resellerOwnerUid) {
            @$query['ResellerOwnerUid'] = $request->resellerOwnerUid;
        }

        if (null !== $request->resourceSpecs) {
            @$query['ResourceSpecs'] = $request->resourceSpecs;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->rootDiskSizeGib) {
            @$query['RootDiskSizeGib'] = $request->rootDiskSizeGib;
        }

        if (null !== $request->userDiskSizeGib) {
            @$query['UserDiskSizeGib'] = $request->userDiskSizeGib;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeModificationPrice',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeModificationPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the price for changing the specifications of a monthly subscription cloud computer with unlimited hours or a premium bandwidth plan.
     *
     * @param request - DescribeModificationPriceRequest
     *
     * @returns DescribeModificationPriceResponse
     *
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
     * Queries the information about File Storage NAS (NAS) file systems.
     *
     * @param request - DescribeNASFileSystemsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNASFileSystemsResponse
     *
     * @param DescribeNASFileSystemsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeNASFileSystemsResponse
     */
    public function describeNASFileSystemsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->matchCompatibleProfile) {
            @$query['MatchCompatibleProfile'] = $request->matchCompatibleProfile;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNASFileSystems',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNASFileSystemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about File Storage NAS (NAS) file systems.
     *
     * @param request - DescribeNASFileSystemsRequest
     *
     * @returns DescribeNASFileSystemsResponse
     *
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
     * Queries the details of one or more premium bandwidth plans.
     *
     * @param request - DescribeNetworkPackagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNetworkPackagesResponse
     *
     * @param DescribeNetworkPackagesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeNetworkPackagesResponse
     */
    public function describeNetworkPackagesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->internetChargeType) {
            @$query['InternetChargeType'] = $request->internetChargeType;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->networkPackageId) {
            @$query['NetworkPackageId'] = $request->networkPackageId;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNetworkPackages',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNetworkPackagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of one or more premium bandwidth plans.
     *
     * @param request - DescribeNetworkPackagesRequest
     *
     * @returns DescribeNetworkPackagesResponse
     *
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
     * Queries office network properties, including office network ID, name, status, and creation time.
     *
     * @param request - DescribeOfficeSitesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeOfficeSitesResponse
     *
     * @param DescribeOfficeSitesRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeOfficeSitesResponse
     */
    public function describeOfficeSitesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->officeSiteType) {
            @$query['OfficeSiteType'] = $request->officeSiteType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->securityProtection) {
            @$query['SecurityProtection'] = $request->securityProtection;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeOfficeSites',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeOfficeSitesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries office network properties, including office network ID, name, status, and creation time.
     *
     * @param request - DescribeOfficeSitesRequest
     *
     * @returns DescribeOfficeSitesResponse
     *
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
     * Queries the details of a cloud computer policy.
     *
     * @param request - DescribePolicyGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePolicyGroupsResponse
     *
     * @param DescribePolicyGroupsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribePolicyGroupsResponse
     */
    public function describePolicyGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->externalPolicyGroupIds) {
            @$query['ExternalPolicyGroupIds'] = $request->externalPolicyGroupIds;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->policyGroupId) {
            @$query['PolicyGroupId'] = $request->policyGroupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePolicyGroups',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePolicyGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a cloud computer policy.
     *
     * @param request - DescribePolicyGroupsRequest
     *
     * @returns DescribePolicyGroupsResponse
     *
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
     * Queries the prices of Elastic Desktop Service (EDS) resources.
     *
     * @remarks
     * ## Usage notes
     * The request parameters vary based on the type of desktop resources whose price you want to query. Take note of the following items:
     * *   If you set ResourceType to OfficeSite, you must specify InstanceType.
     * *   If you set ResourceType to Bandwidth, the pay-by-data-transfer metering method is used for network billing.
     * *   If you set ResourceType to Desktop, you must specify InstanceType, RootDiskSizeGib, and UserDiskSizeGib. You can specify OsType, PeriodUnit, Period, and Amount based on your business requirements.
     * > Before you call this operation to query the prices of cloud desktops by setting ResourceType to Desktop, you must know the desktop types and disk sizes that EDS provides. The disk sizes vary based on the desktop types. For more information, see [Cloud desktop types](https://help.aliyun.com/document_detail/188609.html).
     *
     * @param request - DescribePriceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePriceResponse
     *
     * @param DescribePriceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribePriceResponse
     */
    public function describePriceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->amount) {
            @$query['Amount'] = $request->amount;
        }

        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->groupDesktopCount) {
            @$query['GroupDesktopCount'] = $request->groupDesktopCount;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->internetChargeType) {
            @$query['InternetChargeType'] = $request->internetChargeType;
        }

        if (null !== $request->osType) {
            @$query['OsType'] = $request->osType;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->promotionId) {
            @$query['PromotionId'] = $request->promotionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resellerOwnerUid) {
            @$query['ResellerOwnerUid'] = $request->resellerOwnerUid;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->rootDiskCategory) {
            @$query['RootDiskCategory'] = $request->rootDiskCategory;
        }

        if (null !== $request->rootDiskSizeGib) {
            @$query['RootDiskSizeGib'] = $request->rootDiskSizeGib;
        }

        if (null !== $request->userDiskCategory) {
            @$query['UserDiskCategory'] = $request->userDiskCategory;
        }

        if (null !== $request->userDiskSizeGib) {
            @$query['UserDiskSizeGib'] = $request->userDiskSizeGib;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePrice',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the prices of Elastic Desktop Service (EDS) resources.
     *
     * @remarks
     * ## Usage notes
     * The request parameters vary based on the type of desktop resources whose price you want to query. Take note of the following items:
     * *   If you set ResourceType to OfficeSite, you must specify InstanceType.
     * *   If you set ResourceType to Bandwidth, the pay-by-data-transfer metering method is used for network billing.
     * *   If you set ResourceType to Desktop, you must specify InstanceType, RootDiskSizeGib, and UserDiskSizeGib. You can specify OsType, PeriodUnit, Period, and Amount based on your business requirements.
     * > Before you call this operation to query the prices of cloud desktops by setting ResourceType to Desktop, you must know the desktop types and disk sizes that EDS provides. The disk sizes vary based on the desktop types. For more information, see [Cloud desktop types](https://help.aliyun.com/document_detail/188609.html).
     *
     * @param request - DescribePriceRequest
     *
     * @returns DescribePriceResponse
     *
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
     * 查询价格用于创建超卖组.
     *
     * @param request - DescribePriceForCreateDesktopOversoldGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePriceForCreateDesktopOversoldGroupResponse
     *
     * @param DescribePriceForCreateDesktopOversoldGroupRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return DescribePriceForCreateDesktopOversoldGroupResponse
     */
    public function describePriceForCreateDesktopOversoldGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->concurrenceCount) {
            @$query['ConcurrenceCount'] = $request->concurrenceCount;
        }

        if (null !== $request->dataDiskSize) {
            @$query['DataDiskSize'] = $request->dataDiskSize;
        }

        if (null !== $request->desktopType) {
            @$query['DesktopType'] = $request->desktopType;
        }

        if (null !== $request->oversoldUserCount) {
            @$query['OversoldUserCount'] = $request->oversoldUserCount;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->systemDiskSize) {
            @$query['SystemDiskSize'] = $request->systemDiskSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePriceForCreateDesktopOversoldGroup',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePriceForCreateDesktopOversoldGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询价格用于创建超卖组.
     *
     * @param request - DescribePriceForCreateDesktopOversoldGroupRequest
     *
     * @returns DescribePriceForCreateDesktopOversoldGroupResponse
     *
     * @param DescribePriceForCreateDesktopOversoldGroupRequest $request
     *
     * @return DescribePriceForCreateDesktopOversoldGroupResponse
     */
    public function describePriceForCreateDesktopOversoldGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePriceForCreateDesktopOversoldGroupWithOptions($request, $runtime);
    }

    /**
     * 查询价格用于变配超卖组.
     *
     * @param request - DescribePriceForModifyDesktopOversoldGroupSaleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePriceForModifyDesktopOversoldGroupSaleResponse
     *
     * @param DescribePriceForModifyDesktopOversoldGroupSaleRequest $request
     * @param RuntimeOptions                                        $runtime
     *
     * @return DescribePriceForModifyDesktopOversoldGroupSaleResponse
     */
    public function describePriceForModifyDesktopOversoldGroupSaleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->concurrenceCount) {
            @$query['ConcurrenceCount'] = $request->concurrenceCount;
        }

        if (null !== $request->oversoldGroupId) {
            @$query['OversoldGroupId'] = $request->oversoldGroupId;
        }

        if (null !== $request->oversoldUserCount) {
            @$query['OversoldUserCount'] = $request->oversoldUserCount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePriceForModifyDesktopOversoldGroupSale',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePriceForModifyDesktopOversoldGroupSaleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询价格用于变配超卖组.
     *
     * @param request - DescribePriceForModifyDesktopOversoldGroupSaleRequest
     *
     * @returns DescribePriceForModifyDesktopOversoldGroupSaleResponse
     *
     * @param DescribePriceForModifyDesktopOversoldGroupSaleRequest $request
     *
     * @return DescribePriceForModifyDesktopOversoldGroupSaleResponse
     */
    public function describePriceForModifyDesktopOversoldGroupSale($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePriceForModifyDesktopOversoldGroupSaleWithOptions($request, $runtime);
    }

    /**
     * 查询价格用于续费超卖组.
     *
     * @param request - DescribePriceForRenewDesktopOversoldGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePriceForRenewDesktopOversoldGroupResponse
     *
     * @param DescribePriceForRenewDesktopOversoldGroupRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return DescribePriceForRenewDesktopOversoldGroupResponse
     */
    public function describePriceForRenewDesktopOversoldGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->oversoldGroupId) {
            @$query['OversoldGroupId'] = $request->oversoldGroupId;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePriceForRenewDesktopOversoldGroup',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePriceForRenewDesktopOversoldGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询价格用于续费超卖组.
     *
     * @param request - DescribePriceForRenewDesktopOversoldGroupRequest
     *
     * @returns DescribePriceForRenewDesktopOversoldGroupResponse
     *
     * @param DescribePriceForRenewDesktopOversoldGroupRequest $request
     *
     * @return DescribePriceForRenewDesktopOversoldGroupResponse
     */
    public function describePriceForRenewDesktopOversoldGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePriceForRenewDesktopOversoldGroupWithOptions($request, $runtime);
    }

    /**
     * Queries the details of screen recording files.
     *
     * @param request - DescribeRecordingsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRecordingsResponse
     *
     * @param DescribeRecordingsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeRecordingsResponse
     */
    public function describeRecordingsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->needSignedUrl) {
            @$query['NeedSignedUrl'] = $request->needSignedUrl;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->policyGroupId) {
            @$query['PolicyGroupId'] = $request->policyGroupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->signedUrlExpireMinutes) {
            @$query['SignedUrlExpireMinutes'] = $request->signedUrlExpireMinutes;
        }

        if (null !== $request->standardEndTime) {
            @$query['StandardEndTime'] = $request->standardEndTime;
        }

        if (null !== $request->standardStartTime) {
            @$query['StandardStartTime'] = $request->standardStartTime;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRecordings',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRecordingsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of screen recording files.
     *
     * @param request - DescribeRecordingsRequest
     *
     * @returns DescribeRecordingsResponse
     *
     * @param DescribeRecordingsRequest $request
     *
     * @return DescribeRecordingsResponse
     */
    public function describeRecordings($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRecordingsWithOptions($request, $runtime);
    }

    /**
     * Queries the refund amount for unsubscribing from a cloud computer.
     *
     * @param request - DescribeRefundPriceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRefundPriceResponse
     *
     * @param DescribeRefundPriceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeRefundPriceResponse
     */
    public function describeRefundPriceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->refundType) {
            @$query['RefundType'] = $request->refundType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resellerOwnerUid) {
            @$query['ResellerOwnerUid'] = $request->resellerOwnerUid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRefundPrice',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRefundPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the refund amount for unsubscribing from a cloud computer.
     *
     * @param request - DescribeRefundPriceRequest
     *
     * @returns DescribeRefundPriceResponse
     *
     * @param DescribeRefundPriceRequest $request
     *
     * @return DescribeRefundPriceResponse
     */
    public function describeRefundPrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRefundPriceWithOptions($request, $runtime);
    }

    /**
     * Queries the Alibaba Cloud regions that are available for Elastic Desktop Service (EDS).
     *
     * @param request - DescribeRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionsResponse
     *
     * @param DescribeRegionsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeRegionsResponse
     */
    public function describeRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->acceptLanguage) {
            @$query['AcceptLanguage'] = $request->acceptLanguage;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegions',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Alibaba Cloud regions that are available for Elastic Desktop Service (EDS).
     *
     * @param request - DescribeRegionsRequest
     *
     * @returns DescribeRegionsResponse
     *
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
     * Queries the renewal price of an Alibaba Cloud Workspace service.
     *
     * @param request - DescribeRenewalPriceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRenewalPriceResponse
     *
     * @param DescribeRenewalPriceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeRenewalPriceResponse
     */
    public function describeRenewalPriceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resellerOwnerUid) {
            @$query['ResellerOwnerUid'] = $request->resellerOwnerUid;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRenewalPrice',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRenewalPriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the renewal price of an Alibaba Cloud Workspace service.
     *
     * @param request - DescribeRenewalPriceRequest
     *
     * @returns DescribeRenewalPriceResponse
     *
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
     * @param request - DescribeResourceByCenterPolicyIdRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeResourceByCenterPolicyIdResponse
     *
     * @param DescribeResourceByCenterPolicyIdRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return DescribeResourceByCenterPolicyIdResponse
     */
    public function describeResourceByCenterPolicyIdWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->policyGroupId) {
            @$query['PolicyGroupId'] = $request->policyGroupId;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeResourceByCenterPolicyId',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeResourceByCenterPolicyIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - DescribeResourceByCenterPolicyIdRequest
     *
     * @returns DescribeResourceByCenterPolicyIdResponse
     *
     * @param DescribeResourceByCenterPolicyIdRequest $request
     *
     * @return DescribeResourceByCenterPolicyIdResponse
     */
    public function describeResourceByCenterPolicyId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceByCenterPolicyIdWithOptions($request, $runtime);
    }

    /**
     * Queries the session statistics of a region.
     *
     * @remarks
     *   This is a central operation and can be called only by using services in the China (Shanghai) region.
     * *   You can query session statistics for the past hour.
     *
     * @param request - DescribeSessionStatisticRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSessionStatisticResponse
     *
     * @param DescribeSessionStatisticRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeSessionStatisticResponse
     */
    public function describeSessionStatisticWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->searchRegionId) {
            @$query['SearchRegionId'] = $request->searchRegionId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSessionStatistic',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSessionStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the session statistics of a region.
     *
     * @remarks
     *   This is a central operation and can be called only by using services in the China (Shanghai) region.
     * *   You can query session statistics for the past hour.
     *
     * @param request - DescribeSessionStatisticRequest
     *
     * @returns DescribeSessionStatisticResponse
     *
     * @param DescribeSessionStatisticRequest $request
     *
     * @return DescribeSessionStatisticResponse
     */
    public function describeSessionStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSessionStatisticWithOptions($request, $runtime);
    }

    /**
     * Queries the snapshots that are created based on a cloud computer and the details of the snapshots.
     *
     * @param request - DescribeSnapshotsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSnapshotsResponse
     *
     * @param DescribeSnapshotsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeSnapshotsResponse
     */
    public function describeSnapshotsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->creator) {
            @$query['Creator'] = $request->creator;
        }

        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->desktopName) {
            @$query['DesktopName'] = $request->desktopName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->osType) {
            @$query['OsType'] = $request->osType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->snapshotId) {
            @$query['SnapshotId'] = $request->snapshotId;
        }

        if (null !== $request->snapshotName) {
            @$query['SnapshotName'] = $request->snapshotName;
        }

        if (null !== $request->snapshotType) {
            @$query['SnapshotType'] = $request->snapshotType;
        }

        if (null !== $request->sourceDiskType) {
            @$query['SourceDiskType'] = $request->sourceDiskType;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSnapshots',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSnapshotsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the snapshots that are created based on a cloud computer and the details of the snapshots.
     *
     * @param request - DescribeSnapshotsRequest
     *
     * @returns DescribeSnapshotsResponse
     *
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
     * 查询模板列表.
     *
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
        $body = [];
        if (null !== $request->bizRegionId) {
            @$body['BizRegionId'] = $request->bizRegionId;
        }

        if (null !== $request->bizType) {
            @$body['BizType'] = $request->bizType;
        }

        if (null !== $request->imageId) {
            @$body['ImageId'] = $request->imageId;
        }

        if (null !== $request->keyword) {
            @$body['Keyword'] = $request->keyword;
        }

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productType) {
            @$body['ProductType'] = $request->productType;
        }

        if (null !== $request->templateIds) {
            @$body['TemplateIds'] = $request->templateIds;
        }

        if (null !== $request->templateName) {
            @$body['TemplateName'] = $request->templateName;
        }

        if (null !== $request->templateType) {
            @$body['TemplateType'] = $request->templateType;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeTemplates',
            'version' => '2020-09-30',
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
     * 查询模板列表.
     *
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
     * Queries a scheduled task configuration group.
     *
     * @param request - DescribeTimerGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeTimerGroupResponse
     *
     * @param DescribeTimerGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeTimerGroupResponse
     */
    public function describeTimerGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeTimerGroup',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeTimerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries a scheduled task configuration group.
     *
     * @param request - DescribeTimerGroupRequest
     *
     * @returns DescribeTimerGroupResponse
     *
     * @param DescribeTimerGroupRequest $request
     *
     * @return DescribeTimerGroupResponse
     */
    public function describeTimerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTimerGroupWithOptions($request, $runtime);
    }

    /**
     * 查询超卖组中用户连接数据.
     *
     * @param request - DescribeUserConnectTimeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserConnectTimeResponse
     *
     * @param DescribeUserConnectTimeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeUserConnectTimeResponse
     */
    public function describeUserConnectTimeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->oversoldGroupId) {
            @$query['OversoldGroupId'] = $request->oversoldGroupId;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->userDesktopId) {
            @$query['UserDesktopId'] = $request->userDesktopId;
        }

        if (null !== $request->userGroupId) {
            @$query['UserGroupId'] = $request->userGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUserConnectTime',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserConnectTimeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询超卖组中用户连接数据.
     *
     * @param request - DescribeUserConnectTimeRequest
     *
     * @returns DescribeUserConnectTimeResponse
     *
     * @param DescribeUserConnectTimeRequest $request
     *
     * @return DescribeUserConnectTimeResponse
     */
    public function describeUserConnectTime($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserConnectTimeWithOptions($request, $runtime);
    }

    /**
     * Queries the connection records of an authorized user to cloud computers in a cloud computer pool.
     *
     * @param request - DescribeUserConnectionRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserConnectionRecordsResponse
     *
     * @param DescribeUserConnectionRecordsRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeUserConnectionRecordsResponse
     */
    public function describeUserConnectionRecordsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectDurationFrom) {
            @$query['ConnectDurationFrom'] = $request->connectDurationFrom;
        }

        if (null !== $request->connectDurationTo) {
            @$query['ConnectDurationTo'] = $request->connectDurationTo;
        }

        if (null !== $request->connectEndTimeFrom) {
            @$query['ConnectEndTimeFrom'] = $request->connectEndTimeFrom;
        }

        if (null !== $request->connectEndTimeTo) {
            @$query['ConnectEndTimeTo'] = $request->connectEndTimeTo;
        }

        if (null !== $request->connectStartTimeFrom) {
            @$query['ConnectStartTimeFrom'] = $request->connectStartTimeFrom;
        }

        if (null !== $request->connectStartTimeTo) {
            @$query['ConnectStartTimeTo'] = $request->connectStartTimeTo;
        }

        if (null !== $request->desktopGroupId) {
            @$query['DesktopGroupId'] = $request->desktopGroupId;
        }

        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->endUserType) {
            @$query['EndUserType'] = $request->endUserType;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUserConnectionRecords',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserConnectionRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the connection records of an authorized user to cloud computers in a cloud computer pool.
     *
     * @param request - DescribeUserConnectionRecordsRequest
     *
     * @returns DescribeUserConnectionRecordsResponse
     *
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
     * Queries the configurations of the user profile management (UPM) directory blacklist and whitelist.
     *
     * @param request - DescribeUserProfilePathRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserProfilePathRulesResponse
     *
     * @param DescribeUserProfilePathRulesRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeUserProfilePathRulesResponse
     */
    public function describeUserProfilePathRulesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopGroupId) {
            @$query['DesktopGroupId'] = $request->desktopGroupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->ruleType) {
            @$query['RuleType'] = $request->ruleType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUserProfilePathRules',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserProfilePathRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of the user profile management (UPM) directory blacklist and whitelist.
     *
     * @param request - DescribeUserProfilePathRulesRequest
     *
     * @returns DescribeUserProfilePathRulesResponse
     *
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
     * Queries the information about authorized users of a cloud computer share, including the usernames, email addresses, mobile numbers, and cloud computer IDs.
     *
     * @param request - DescribeUsersInGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUsersInGroupResponse
     *
     * @param DescribeUsersInGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeUsersInGroupResponse
     */
    public function describeUsersInGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->connectState) {
            @$query['ConnectState'] = $request->connectState;
        }

        if (null !== $request->desktopGroupId) {
            @$query['DesktopGroupId'] = $request->desktopGroupId;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->endUserIds) {
            @$query['EndUserIds'] = $request->endUserIds;
        }

        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orgId) {
            @$query['OrgId'] = $request->orgId;
        }

        if (null !== $request->queryUserDetail) {
            @$query['QueryUserDetail'] = $request->queryUserDetail;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUsersInGroup',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUsersInGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about authorized users of a cloud computer share, including the usernames, email addresses, mobile numbers, and cloud computer IDs.
     *
     * @param request - DescribeUsersInGroupRequest
     *
     * @returns DescribeUsersInGroupResponse
     *
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
     * Queries the passwords of authorized users of a cloud computer.
     *
     * @param request - DescribeUsersPasswordRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUsersPasswordResponse
     *
     * @param DescribeUsersPasswordRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeUsersPasswordResponse
     */
    public function describeUsersPasswordWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUsersPassword',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUsersPasswordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the passwords of authorized users of a cloud computer.
     *
     * @param request - DescribeUsersPasswordRequest
     *
     * @returns DescribeUsersPasswordResponse
     *
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
     * Queries multi-factor authentication (MFA) devices that are bound to an Active Directory (AD) account.
     *
     * @param request - DescribeVirtualMFADevicesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVirtualMFADevicesResponse
     *
     * @param DescribeVirtualMFADevicesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeVirtualMFADevicesResponse
     */
    public function describeVirtualMFADevicesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVirtualMFADevices',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVirtualMFADevicesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries multi-factor authentication (MFA) devices that are bound to an Active Directory (AD) account.
     *
     * @param request - DescribeVirtualMFADevicesRequest
     *
     * @returns DescribeVirtualMFADevicesResponse
     *
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
     * Queries the zones in a region in which Elastic Desktop Service is supported.
     *
     * @param request - DescribeZonesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeZonesResponse
     *
     * @param DescribeZonesRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeZonesResponse
     */
    public function describeZonesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->zoneType) {
            @$query['ZoneType'] = $request->zoneType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeZones',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the zones in a region in which Elastic Desktop Service is supported.
     *
     * @param request - DescribeZonesRequest
     *
     * @returns DescribeZonesResponse
     *
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
     * Unbinds an advanced office network from a CEN instance.
     *
     * @param request - DetachCenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachCenResponse
     *
     * @param DetachCenRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DetachCenResponse
     */
    public function detachCenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachCen',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachCenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unbinds an advanced office network from a CEN instance.
     *
     * @param request - DetachCenRequest
     *
     * @returns DetachCenResponse
     *
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
     * Unbinds a hardware client from a user.
     *
     * @param request - DetachEndUserRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachEndUserResponse
     *
     * @param DetachEndUserRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DetachEndUserResponse
     */
    public function detachEndUserWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->adDomain) {
            @$query['AdDomain'] = $request->adDomain;
        }

        if (null !== $request->clientType) {
            @$query['ClientType'] = $request->clientType;
        }

        if (null !== $request->deviceId) {
            @$query['DeviceId'] = $request->deviceId;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachEndUser',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachEndUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unbinds a hardware client from a user.
     *
     * @param request - DetachEndUserRequest
     *
     * @returns DetachEndUserResponse
     *
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
     * Disables specific cloud computers in a cloud computer share. After you call this operation to disable specific cloud computers, they enter the unavailable state.
     *
     * @param request - DisableDesktopsInGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisableDesktopsInGroupResponse
     *
     * @param DisableDesktopsInGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DisableDesktopsInGroupResponse
     */
    public function disableDesktopsInGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopGroupId) {
            @$query['DesktopGroupId'] = $request->desktopGroupId;
        }

        if (null !== $request->desktopIds) {
            @$query['DesktopIds'] = $request->desktopIds;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisableDesktopsInGroup',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisableDesktopsInGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables specific cloud computers in a cloud computer share. After you call this operation to disable specific cloud computers, they enter the unavailable state.
     *
     * @param request - DisableDesktopsInGroupRequest
     *
     * @returns DisableDesktopsInGroupResponse
     *
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
     * Disconnects from desktop sessions.
     *
     * @param request - DisconnectDesktopSessionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DisconnectDesktopSessionsResponse
     *
     * @param DisconnectDesktopSessionsRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DisconnectDesktopSessionsResponse
     */
    public function disconnectDesktopSessionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->preCheck) {
            @$query['PreCheck'] = $request->preCheck;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sessions) {
            @$query['Sessions'] = $request->sessions;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DisconnectDesktopSessions',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DisconnectDesktopSessionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disconnects from desktop sessions.
     *
     * @param request - DisconnectDesktopSessionsRequest
     *
     * @returns DisconnectDesktopSessionsResponse
     *
     * @param DisconnectDesktopSessionsRequest $request
     *
     * @return DisconnectDesktopSessionsResponse
     */
    public function disconnectDesktopSessions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disconnectDesktopSessionsWithOptions($request, $runtime);
    }

    /**
     * Unbinds a premium bandwidth plan from an office network.
     *
     * @param request - DissociateNetworkPackageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DissociateNetworkPackageResponse
     *
     * @param DissociateNetworkPackageRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DissociateNetworkPackageResponse
     */
    public function dissociateNetworkPackageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->networkPackageId) {
            @$query['NetworkPackageId'] = $request->networkPackageId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DissociateNetworkPackage',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DissociateNetworkPackageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unbinds a premium bandwidth plan from an office network.
     *
     * @param request - DissociateNetworkPackageRequest
     *
     * @returns DissociateNetworkPackageResponse
     *
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
     * Obtains the download link of the target file.
     *
     * @param request - DownloadCdsFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DownloadCdsFileResponse
     *
     * @param DownloadCdsFileRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DownloadCdsFileResponse
     */
    public function downloadCdsFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cdsId) {
            @$query['CdsId'] = $request->cdsId;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->fileId) {
            @$query['FileId'] = $request->fileId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DownloadCdsFile',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DownloadCdsFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the download link of the target file.
     *
     * @param request - DownloadCdsFileRequest
     *
     * @returns DownloadCdsFileResponse
     *
     * @param DownloadCdsFileRequest $request
     *
     * @return DownloadCdsFileResponse
     */
    public function downloadCdsFile($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->downloadCdsFileWithOptions($request, $runtime);
    }

    /**
     * Exports events that occur on a cloud desktop from an Alibaba Cloud Workspace client.
     *
     * @param request - ExportClientEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportClientEventsResponse
     *
     * @param ExportClientEventsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ExportClientEventsResponse
     */
    public function exportClientEventsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->desktopName) {
            @$query['DesktopName'] = $request->desktopName;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->eventType) {
            @$query['EventType'] = $request->eventType;
        }

        if (null !== $request->eventTypes) {
            @$query['EventTypes'] = $request->eventTypes;
        }

        if (null !== $request->langType) {
            @$query['LangType'] = $request->langType;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->officeSiteName) {
            @$query['OfficeSiteName'] = $request->officeSiteName;
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
            'action' => 'ExportClientEvents',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExportClientEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Exports events that occur on a cloud desktop from an Alibaba Cloud Workspace client.
     *
     * @param request - ExportClientEventsRequest
     *
     * @returns ExportClientEventsResponse
     *
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
     * Exports cloud computer shares and saves the list as an XLSX file. Each entry includes the ID and name of the cloud computer share, the ID and name of the office network, the cloud computer share template, and the name of the security policy.
     *
     * @param request - ExportDesktopGroupInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportDesktopGroupInfoResponse
     *
     * @param ExportDesktopGroupInfoRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ExportDesktopGroupInfoResponse
     */
    public function exportDesktopGroupInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->desktopGroupId) {
            @$query['DesktopGroupId'] = $request->desktopGroupId;
        }

        if (null !== $request->desktopGroupName) {
            @$query['DesktopGroupName'] = $request->desktopGroupName;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->expiredTime) {
            @$query['ExpiredTime'] = $request->expiredTime;
        }

        if (null !== $request->langType) {
            @$query['LangType'] = $request->langType;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->policyGroupId) {
            @$query['PolicyGroupId'] = $request->policyGroupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExportDesktopGroupInfo',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExportDesktopGroupInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Exports cloud computer shares and saves the list as an XLSX file. Each entry includes the ID and name of the cloud computer share, the ID and name of the office network, the cloud computer share template, and the name of the security policy.
     *
     * @param request - ExportDesktopGroupInfoRequest
     *
     * @returns ExportDesktopGroupInfoResponse
     *
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
     * Exports a cloud computer list as a CSV file.
     *
     * @remarks
     * The cloud computer list exported by calling this operation is saved as a CSV file. Each entry of data of a cloud computer includes the following fields:
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
     *
     * @param request - ExportDesktopListInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportDesktopListInfoResponse
     *
     * @param ExportDesktopListInfoRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ExportDesktopListInfoResponse
     */
    public function exportDesktopListInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->desktopName) {
            @$query['DesktopName'] = $request->desktopName;
        }

        if (null !== $request->desktopStatus) {
            @$query['DesktopStatus'] = $request->desktopStatus;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->expiredTime) {
            @$query['ExpiredTime'] = $request->expiredTime;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->langType) {
            @$query['LangType'] = $request->langType;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->policyGroupId) {
            @$query['PolicyGroupId'] = $request->policyGroupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExportDesktopListInfo',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExportDesktopListInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Exports a cloud computer list as a CSV file.
     *
     * @remarks
     * The cloud computer list exported by calling this operation is saved as a CSV file. Each entry of data of a cloud computer includes the following fields:
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
     *
     * @param request - ExportDesktopListInfoRequest
     *
     * @returns ExportDesktopListInfoResponse
     *
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
     * Obtains the information about an asynchronous task based on the value of the AsyncTaskId parameter that you obtain by calling the CopyCdsFile operation.
     *
     * @param request - GetAsyncTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetAsyncTaskResponse
     *
     * @param GetAsyncTaskRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetAsyncTaskResponse
     */
    public function getAsyncTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->asyncTaskId) {
            @$query['AsyncTaskId'] = $request->asyncTaskId;
        }

        if (null !== $request->cdsId) {
            @$query['CdsId'] = $request->cdsId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetAsyncTask',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAsyncTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the information about an asynchronous task based on the value of the AsyncTaskId parameter that you obtain by calling the CopyCdsFile operation.
     *
     * @param request - GetAsyncTaskRequest
     *
     * @returns GetAsyncTaskResponse
     *
     * @param GetAsyncTaskRequest $request
     *
     * @return GetAsyncTaskResponse
     */
    public function getAsyncTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAsyncTaskWithOptions($request, $runtime);
    }

    /**
     * Obtains the credential that is used to connect to a cloud desktop.
     *
     * @remarks
     * The cloud computer must be in the Running state. The ticket obtained by calling this operation will expire in 10 minutes.
     *
     * @param request - GetConnectionTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetConnectionTicketResponse
     *
     * @param GetConnectionTicketRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetConnectionTicketResponse
     */
    public function getConnectionTicketWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->commandContent) {
            @$query['CommandContent'] = $request->commandContent;
        }

        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceOwnerAccount) {
            @$query['ResourceOwnerAccount'] = $request->resourceOwnerAccount;
        }

        if (null !== $request->resourceOwnerId) {
            @$query['ResourceOwnerId'] = $request->resourceOwnerId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->uuid) {
            @$query['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetConnectionTicket',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetConnectionTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the credential that is used to connect to a cloud desktop.
     *
     * @remarks
     * The cloud computer must be in the Running state. The ticket obtained by calling this operation will expire in 10 minutes.
     *
     * @param request - GetConnectionTicketRequest
     *
     * @returns GetConnectionTicketResponse
     *
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
     * Obtains the credentials of the stream collaboration.
     *
     * @param request - GetCoordinateTicketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetCoordinateTicketResponse
     *
     * @param GetCoordinateTicketRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return GetCoordinateTicketResponse
     */
    public function getCoordinateTicketWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->coId) {
            @$query['CoId'] = $request->coId;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->taskId) {
            @$query['TaskId'] = $request->taskId;
        }

        if (null !== $request->userType) {
            @$query['UserType'] = $request->userType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCoordinateTicket',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetCoordinateTicketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the credentials of the stream collaboration.
     *
     * @param request - GetCoordinateTicketRequest
     *
     * @returns GetCoordinateTicketResponse
     *
     * @param GetCoordinateTicketRequest $request
     *
     * @return GetCoordinateTicketResponse
     */
    public function getCoordinateTicket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getCoordinateTicketWithOptions($request, $runtime);
    }

    /**
     * Queries the information about a cloud computer share.
     *
     * @param request - GetDesktopGroupDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDesktopGroupDetailResponse
     *
     * @param GetDesktopGroupDetailRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetDesktopGroupDetailResponse
     */
    public function getDesktopGroupDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopGroupId) {
            @$query['DesktopGroupId'] = $request->desktopGroupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDesktopGroupDetail',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDesktopGroupDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about a cloud computer share.
     *
     * @param request - GetDesktopGroupDetailRequest
     *
     * @returns GetDesktopGroupDetailResponse
     *
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
     * Queries whether single sign-on (SSO) is enabled for a workspace.
     *
     * @param request - GetOfficeSiteSsoStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOfficeSiteSsoStatusResponse
     *
     * @param GetOfficeSiteSsoStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return GetOfficeSiteSsoStatusResponse
     */
    public function getOfficeSiteSsoStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetOfficeSiteSsoStatus',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOfficeSiteSsoStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether single sign-on (SSO) is enabled for a workspace.
     *
     * @param request - GetOfficeSiteSsoStatusRequest
     *
     * @returns GetOfficeSiteSsoStatusResponse
     *
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
     * Obtains the metadata of a Security Assertion Markup Language (SAML) 2.0-based service provider (SP).
     *
     * @remarks
     * You can call this operation only for workspaces of the Active Directory (AD) and convenience account types.
     *
     * @param request - GetSpMetadataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetSpMetadataResponse
     *
     * @param GetSpMetadataRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetSpMetadataResponse
     */
    public function getSpMetadataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetSpMetadata',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetSpMetadataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the metadata of a Security Assertion Markup Language (SAML) 2.0-based service provider (SP).
     *
     * @remarks
     * You can call this operation only for workspaces of the Active Directory (AD) and convenience account types.
     *
     * @param request - GetSpMetadataRequest
     *
     * @returns GetSpMetadataResponse
     *
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
     * Hibernates cloud desktops.
     *
     * @remarks
     * Hibernating a cloud desktop is in private preview. If you want to try this feature, submit a ticket.
     *
     * @param request - HibernateDesktopsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns HibernateDesktopsResponse
     *
     * @param HibernateDesktopsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return HibernateDesktopsResponse
     */
    public function hibernateDesktopsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'HibernateDesktops',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return HibernateDesktopsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Hibernates cloud desktops.
     *
     * @remarks
     * Hibernating a cloud desktop is in private preview. If you want to try this feature, submit a ticket.
     *
     * @param request - HibernateDesktopsRequest
     *
     * @returns HibernateDesktopsResponse
     *
     * @param HibernateDesktopsRequest $request
     *
     * @return HibernateDesktopsResponse
     */
    public function hibernateDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->hibernateDesktopsWithOptions($request, $runtime);
    }

    /**
     * Queries the files in a cloud disk.
     *
     * @param tmpReq - ListCdsFilesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCdsFilesResponse
     *
     * @param ListCdsFilesRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return ListCdsFilesResponse
     */
    public function listCdsFilesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ListCdsFilesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->fileIds) {
            $request->fileIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->fileIds, 'FileIds', 'json');
        }

        $query = [];
        if (null !== $request->cdsId) {
            @$query['CdsId'] = $request->cdsId;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->fileIdsShrink) {
            @$query['FileIds'] = $request->fileIdsShrink;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        if (null !== $request->parentFileId) {
            @$query['ParentFileId'] = $request->parentFileId;
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
            'action' => 'ListCdsFiles',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCdsFilesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the files in a cloud disk.
     *
     * @param request - ListCdsFilesRequest
     *
     * @returns ListCdsFilesResponse
     *
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
     * Obtains the user information in the AD system if you use an AD directory to connect to an AD system.
     *
     * @remarks
     * If you use an AD directory to connect to an AD system, you can call this operation to obtain the user information in the AD system.
     *
     * @param request - ListDirectoryUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListDirectoryUsersResponse
     *
     * @param ListDirectoryUsersRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListDirectoryUsersResponse
     */
    public function listDirectoryUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->assignedInfo) {
            @$query['AssignedInfo'] = $request->assignedInfo;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->includeAssignedUser) {
            @$query['IncludeAssignedUser'] = $request->includeAssignedUser;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->OUPath) {
            @$query['OUPath'] = $request->OUPath;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sortType) {
            @$query['SortType'] = $request->sortType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListDirectoryUsers',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListDirectoryUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the user information in the AD system if you use an AD directory to connect to an AD system.
     *
     * @remarks
     * If you use an AD directory to connect to an AD system, you can call this operation to obtain the user information in the AD system.
     *
     * @param request - ListDirectoryUsersRequest
     *
     * @returns ListDirectoryUsersResponse
     *
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
     * Queries the information about shared files of cloud disks.
     *
     * @param request - ListFilePermissionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListFilePermissionResponse
     *
     * @param ListFilePermissionRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ListFilePermissionResponse
     */
    public function listFilePermissionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cdsId) {
            @$query['CdsId'] = $request->cdsId;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->fileId) {
            @$query['FileId'] = $request->fileId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListFilePermission',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListFilePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about shared files of cloud disks.
     *
     * @param request - ListFilePermissionRequest
     *
     * @returns ListFilePermissionResponse
     *
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
     * Queries information about an office network, including its status, cloud computer quantity, virtual private cloud (VPC) type, and more.
     *
     * @param request - ListOfficeSiteOverviewRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOfficeSiteOverviewResponse
     *
     * @param ListOfficeSiteOverviewRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ListOfficeSiteOverviewResponse
     */
    public function listOfficeSiteOverviewWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->forceRefresh) {
            @$query['ForceRefresh'] = $request->forceRefresh;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->queryRange) {
            @$query['QueryRange'] = $request->queryRange;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListOfficeSiteOverview',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListOfficeSiteOverviewResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about an office network, including its status, cloud computer quantity, virtual private cloud (VPC) type, and more.
     *
     * @param request - ListOfficeSiteOverviewRequest
     *
     * @returns ListOfficeSiteOverviewResponse
     *
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
     * Queries information about Active Directory (AD) accounts after an enterprise AD office network (formerly workspace) interconnects to an AD domain.
     *
     * @param request - ListOfficeSiteUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListOfficeSiteUsersResponse
     *
     * @param ListOfficeSiteUsersRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ListOfficeSiteUsersResponse
     */
    public function listOfficeSiteUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->assignedInfo) {
            @$query['AssignedInfo'] = $request->assignedInfo;
        }

        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->includeAssignedUser) {
            @$query['IncludeAssignedUser'] = $request->includeAssignedUser;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->OUPath) {
            @$query['OUPath'] = $request->OUPath;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sortType) {
            @$query['SortType'] = $request->sortType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListOfficeSiteUsers',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListOfficeSiteUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about Active Directory (AD) accounts after an enterprise AD office network (formerly workspace) interconnects to an AD domain.
     *
     * @param request - ListOfficeSiteUsersRequest
     *
     * @returns ListOfficeSiteUsersResponse
     *
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
     * Queries the tags of cloud computers.
     *
     * @remarks
     * You must use at least one of the following parameters in the request to determine the object that you want to query: `ResourceId.N`, `Tag.N.Key`, and `Tag.N.Value`.
     *
     * @param request - ListTagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListTagResourcesResponse
     *
     * @param ListTagResourcesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListTagResources',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the tags of cloud computers.
     *
     * @remarks
     * You must use at least one of the following parameters in the request to determine the object that you want to query: `ResourceId.N`, `Tag.N.Key`, and `Tag.N.Value`.
     *
     * @param request - ListTagResourcesRequest
     *
     * @returns ListTagResourcesResponse
     *
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
     * Obtains the organizational units (OUs) of an Active Directory (AD) domain that is connected to an enterprise AD office network (formerly workspace).
     *
     * @param request - ListUserAdOrganizationUnitsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListUserAdOrganizationUnitsResponse
     *
     * @param ListUserAdOrganizationUnitsRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ListUserAdOrganizationUnitsResponse
     */
    public function listUserAdOrganizationUnitsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->filter) {
            @$query['Filter'] = $request->filter;
        }

        if (null !== $request->maxResults) {
            @$query['MaxResults'] = $request->maxResults;
        }

        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListUserAdOrganizationUnits',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListUserAdOrganizationUnitsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the organizational units (OUs) of an Active Directory (AD) domain that is connected to an enterprise AD office network (formerly workspace).
     *
     * @param request - ListUserAdOrganizationUnitsRequest
     *
     * @returns ListUserAdOrganizationUnitsResponse
     *
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
     * Locks a multi-factor authentication (MFA) device that is in the NORMAL state.
     *
     * @remarks
     * After a virtual MFA device is locked, its status changes to LOCKED. The Active Directory (AD) user who uses the virtual MFA device is unable to pass MFA and is therefore unable to log on to the client. You can call the [UnlockVirtualMFADevice](https://help.aliyun.com/document_detail/206212.html) operation to unlock the device.
     *
     * @param request - LockVirtualMFADeviceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LockVirtualMFADeviceResponse
     *
     * @param LockVirtualMFADeviceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return LockVirtualMFADeviceResponse
     */
    public function lockVirtualMFADeviceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serialNumber) {
            @$query['SerialNumber'] = $request->serialNumber;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'LockVirtualMFADevice',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LockVirtualMFADeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Locks a multi-factor authentication (MFA) device that is in the NORMAL state.
     *
     * @remarks
     * After a virtual MFA device is locked, its status changes to LOCKED. The Active Directory (AD) user who uses the virtual MFA device is unable to pass MFA and is therefore unable to log on to the client. You can call the [UnlockVirtualMFADevice](https://help.aliyun.com/document_detail/206212.html) operation to unlock the device.
     *
     * @param request - LockVirtualMFADeviceRequest
     *
     * @returns LockVirtualMFADeviceResponse
     *
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
     * Migrates cloud computers from the current office network (formerly called workspace) to the new office network.
     *
     * @param request - MigrateDesktopsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MigrateDesktopsResponse
     *
     * @param MigrateDesktopsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return MigrateDesktopsResponse
     */
    public function migrateDesktopsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->targetOfficeSiteId) {
            @$query['TargetOfficeSiteId'] = $request->targetOfficeSiteId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MigrateDesktops',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MigrateDesktopsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Migrates cloud computers from the current office network (formerly called workspace) to the new office network.
     *
     * @param request - MigrateDesktopsRequest
     *
     * @returns MigrateDesktopsResponse
     *
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
     * Update the protocols of images to Adaptive Streaming Protocol (ASP).
     *
     * @param request - MigrateImageProtocolRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MigrateImageProtocolResponse
     *
     * @param MigrateImageProtocolRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return MigrateImageProtocolResponse
     */
    public function migrateImageProtocolWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->targetProtocolType) {
            @$query['TargetProtocolType'] = $request->targetProtocolType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MigrateImageProtocol',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MigrateImageProtocolResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Update the protocols of images to Adaptive Streaming Protocol (ASP).
     *
     * @param request - MigrateImageProtocolRequest
     *
     * @returns MigrateImageProtocolResponse
     *
     * @param MigrateImageProtocolRequest $request
     *
     * @return MigrateImageProtocolResponse
     */
    public function migrateImageProtocol($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->migrateImageProtocolWithOptions($request, $runtime);
    }

    /**
     * Modifies an Active Directory (AD) directory.
     *
     * @remarks
     * You can modify the following domain name- and Domain Name System (DNS)-related parameters only for Active Directory (AD) directories that are in the ERROR or REGISTERING state: `DomainName`, `SubDomainName`, `DnsAddress.N`, and `SubDomainDnsAddress`.
     *
     * @param request - ModifyADConnectorDirectoryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyADConnectorDirectoryResponse
     *
     * @param ModifyADConnectorDirectoryRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyADConnectorDirectoryResponse
     */
    public function modifyADConnectorDirectoryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->adHostname) {
            @$query['AdHostname'] = $request->adHostname;
        }

        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->directoryName) {
            @$query['DirectoryName'] = $request->directoryName;
        }

        if (null !== $request->dnsAddress) {
            @$query['DnsAddress'] = $request->dnsAddress;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->domainPassword) {
            @$query['DomainPassword'] = $request->domainPassword;
        }

        if (null !== $request->domainUserName) {
            @$query['DomainUserName'] = $request->domainUserName;
        }

        if (null !== $request->mfaEnabled) {
            @$query['MfaEnabled'] = $request->mfaEnabled;
        }

        if (null !== $request->OUName) {
            @$query['OUName'] = $request->OUName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->subDomainDnsAddress) {
            @$query['SubDomainDnsAddress'] = $request->subDomainDnsAddress;
        }

        if (null !== $request->subDomainName) {
            @$query['SubDomainName'] = $request->subDomainName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyADConnectorDirectory',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyADConnectorDirectoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies an Active Directory (AD) directory.
     *
     * @remarks
     * You can modify the following domain name- and Domain Name System (DNS)-related parameters only for Active Directory (AD) directories that are in the ERROR or REGISTERING state: `DomainName`, `SubDomainName`, `DnsAddress.N`, and `SubDomainDnsAddress`.
     *
     * @param request - ModifyADConnectorDirectoryRequest
     *
     * @returns ModifyADConnectorDirectoryResponse
     *
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
     * Modifies the basic properties of an enterprise Active Directory (AD) office network, such as the office network name and domain names of the enterprise AD subdomains.
     *
     * @remarks
     * You can modify parameters of domain names and Domain Name System (DNS) for enterprise AD office networks that are in the `ERROR` or `REGISTERED` state. The parameters include `DomainName`, `SubDomainName`, `DnsAddress.N`, and `SubDomainDnsAddress.N`.
     *
     * @param request - ModifyADConnectorOfficeSiteRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyADConnectorOfficeSiteResponse
     *
     * @param ModifyADConnectorOfficeSiteRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyADConnectorOfficeSiteResponse
     */
    public function modifyADConnectorOfficeSiteWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->adHostname) {
            @$query['AdHostname'] = $request->adHostname;
        }

        if (null !== $request->backupDCHostname) {
            @$query['BackupDCHostname'] = $request->backupDCHostname;
        }

        if (null !== $request->backupDns) {
            @$query['BackupDns'] = $request->backupDns;
        }

        if (null !== $request->dnsAddress) {
            @$query['DnsAddress'] = $request->dnsAddress;
        }

        if (null !== $request->domainName) {
            @$query['DomainName'] = $request->domainName;
        }

        if (null !== $request->domainPassword) {
            @$query['DomainPassword'] = $request->domainPassword;
        }

        if (null !== $request->domainUserName) {
            @$query['DomainUserName'] = $request->domainUserName;
        }

        if (null !== $request->mfaEnabled) {
            @$query['MfaEnabled'] = $request->mfaEnabled;
        }

        if (null !== $request->OUName) {
            @$query['OUName'] = $request->OUName;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->officeSiteName) {
            @$query['OfficeSiteName'] = $request->officeSiteName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->subDomainDnsAddress) {
            @$query['SubDomainDnsAddress'] = $request->subDomainDnsAddress;
        }

        if (null !== $request->subDomainName) {
            @$query['SubDomainName'] = $request->subDomainName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyADConnectorOfficeSite',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyADConnectorOfficeSiteResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the basic properties of an enterprise Active Directory (AD) office network, such as the office network name and domain names of the enterprise AD subdomains.
     *
     * @remarks
     * You can modify parameters of domain names and Domain Name System (DNS) for enterprise AD office networks that are in the `ERROR` or `REGISTERED` state. The parameters include `DomainName`, `SubDomainName`, `DnsAddress.N`, and `SubDomainDnsAddress.N`.
     *
     * @param request - ModifyADConnectorOfficeSiteRequest
     *
     * @returns ModifyADConnectorOfficeSiteResponse
     *
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
     * Modify the Internet access control policy on the office network or cloud computer granularity.
     *
     * @remarks
     * You can set different Internet access control policies at different granularities to achieve the effect of composite policies. For example, you can disable the Internet access on the office network granularity and enable the Internet access on specific cloud computer granularity. The effect is that all cloud computers in the office network except the specified cloud computers are not allowed to access the Internet.
     *
     * @param request - ModifyAclEntriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAclEntriesResponse
     *
     * @param ModifyAclEntriesRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyAclEntriesResponse
     */
    public function modifyAclEntriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policy) {
            @$query['Policy'] = $request->policy;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->sourceId) {
            @$query['SourceId'] = $request->sourceId;
        }

        if (null !== $request->sourceType) {
            @$query['SourceType'] = $request->sourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAclEntries',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAclEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modify the Internet access control policy on the office network or cloud computer granularity.
     *
     * @remarks
     * You can set different Internet access control policies at different granularities to achieve the effect of composite policies. For example, you can disable the Internet access on the office network granularity and enable the Internet access on specific cloud computer granularity. The effect is that all cloud computers in the office network except the specified cloud computers are not allowed to access the Internet.
     *
     * @param request - ModifyAclEntriesRequest
     *
     * @returns ModifyAclEntriesResponse
     *
     * @param ModifyAclEntriesRequest $request
     *
     * @return ModifyAclEntriesResponse
     */
    public function modifyAclEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAclEntriesWithOptions($request, $runtime);
    }

    /**
     * Modifies the parameters of an automatic snapshot policy, such as the policy name and snapshot retention period.
     *
     * @param request - ModifyAutoSnapshotPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyAutoSnapshotPolicyResponse
     *
     * @param ModifyAutoSnapshotPolicyRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyAutoSnapshotPolicyResponse
     */
    public function modifyAutoSnapshotPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cronExpression) {
            @$query['CronExpression'] = $request->cronExpression;
        }

        if (null !== $request->policyId) {
            @$query['PolicyId'] = $request->policyId;
        }

        if (null !== $request->policyName) {
            @$query['PolicyName'] = $request->policyName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->retentionDays) {
            @$query['RetentionDays'] = $request->retentionDays;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyAutoSnapshotPolicy',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyAutoSnapshotPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the parameters of an automatic snapshot policy, such as the policy name and snapshot retention period.
     *
     * @param request - ModifyAutoSnapshotPolicyRequest
     *
     * @returns ModifyAutoSnapshotPolicyResponse
     *
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
     * Modifies a custom cloud computer template.
     *
     * @remarks
     * Only custom desktop templates can be modified.
     *
     * @param request - ModifyBundleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyBundleResponse
     *
     * @param ModifyBundleRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ModifyBundleResponse
     */
    public function modifyBundleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bundleId) {
            @$query['BundleId'] = $request->bundleId;
        }

        if (null !== $request->bundleName) {
            @$query['BundleName'] = $request->bundleName;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyBundle',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyBundleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a custom cloud computer template.
     *
     * @remarks
     * Only custom desktop templates can be modified.
     *
     * @param request - ModifyBundleRequest
     *
     * @returns ModifyBundleResponse
     *
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
     * Modifies the files in a cloud disk.
     *
     * @param request - ModifyCdsFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCdsFileResponse
     *
     * @param ModifyCdsFileRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ModifyCdsFileResponse
     */
    public function modifyCdsFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cdsId) {
            @$query['CdsId'] = $request->cdsId;
        }

        if (null !== $request->conflictPolicy) {
            @$query['ConflictPolicy'] = $request->conflictPolicy;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->fileId) {
            @$query['FileId'] = $request->fileId;
        }

        if (null !== $request->fileName) {
            @$query['FileName'] = $request->fileName;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyCdsFile',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyCdsFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the files in a cloud disk.
     *
     * @param request - ModifyCdsFileRequest
     *
     * @returns ModifyCdsFileResponse
     *
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
     * Modifies the link for file sharing.
     *
     * @param request - ModifyCdsFileShareLinkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCdsFileShareLinkResponse
     *
     * @param ModifyCdsFileShareLinkRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyCdsFileShareLinkResponse
     */
    public function modifyCdsFileShareLinkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cdsId) {
            @$query['CdsId'] = $request->cdsId;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->disableDownload) {
            @$query['DisableDownload'] = $request->disableDownload;
        }

        if (null !== $request->disablePreview) {
            @$query['DisablePreview'] = $request->disablePreview;
        }

        if (null !== $request->disableSave) {
            @$query['DisableSave'] = $request->disableSave;
        }

        if (null !== $request->downloadCount) {
            @$query['DownloadCount'] = $request->downloadCount;
        }

        if (null !== $request->downloadLimit) {
            @$query['DownloadLimit'] = $request->downloadLimit;
        }

        if (null !== $request->expiration) {
            @$query['Expiration'] = $request->expiration;
        }

        if (null !== $request->previewCount) {
            @$query['PreviewCount'] = $request->previewCount;
        }

        if (null !== $request->previewLimit) {
            @$query['PreviewLimit'] = $request->previewLimit;
        }

        if (null !== $request->reportCount) {
            @$query['ReportCount'] = $request->reportCount;
        }

        if (null !== $request->saveCount) {
            @$query['SaveCount'] = $request->saveCount;
        }

        if (null !== $request->saveLimit) {
            @$query['SaveLimit'] = $request->saveLimit;
        }

        if (null !== $request->shareId) {
            @$query['ShareId'] = $request->shareId;
        }

        if (null !== $request->shareName) {
            @$query['ShareName'] = $request->shareName;
        }

        if (null !== $request->sharePwd) {
            @$query['SharePwd'] = $request->sharePwd;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->videoPreviewCount) {
            @$query['VideoPreviewCount'] = $request->videoPreviewCount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyCdsFileShareLink',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyCdsFileShareLinkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the link for file sharing.
     *
     * @param request - ModifyCdsFileShareLinkRequest
     *
     * @returns ModifyCdsFileShareLinkResponse
     *
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
     * Modifies a center policy.
     *
     * @param request - ModifyCenterPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCenterPolicyResponse
     *
     * @param ModifyCenterPolicyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyCenterPolicyResponse
     */
    public function modifyCenterPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->adminAccess) {
            @$query['AdminAccess'] = $request->adminAccess;
        }

        if (null !== $request->appContentProtection) {
            @$query['AppContentProtection'] = $request->appContentProtection;
        }

        if (null !== $request->authorizeAccessPolicyRule) {
            @$query['AuthorizeAccessPolicyRule'] = $request->authorizeAccessPolicyRule;
        }

        if (null !== $request->authorizeSecurityPolicyRule) {
            @$query['AuthorizeSecurityPolicyRule'] = $request->authorizeSecurityPolicyRule;
        }

        if (null !== $request->businessType) {
            @$query['BusinessType'] = $request->businessType;
        }

        if (null !== $request->cameraRedirect) {
            @$query['CameraRedirect'] = $request->cameraRedirect;
        }

        if (null !== $request->clientType) {
            @$query['ClientType'] = $request->clientType;
        }

        if (null !== $request->clipboard) {
            @$query['Clipboard'] = $request->clipboard;
        }

        if (null !== $request->colorEnhancement) {
            @$query['ColorEnhancement'] = $request->colorEnhancement;
        }

        if (null !== $request->cpuDownGradeDuration) {
            @$query['CpuDownGradeDuration'] = $request->cpuDownGradeDuration;
        }

        if (null !== $request->cpuProcessors) {
            @$query['CpuProcessors'] = $request->cpuProcessors;
        }

        if (null !== $request->cpuProtectedMode) {
            @$query['CpuProtectedMode'] = $request->cpuProtectedMode;
        }

        if (null !== $request->cpuRateLimit) {
            @$query['CpuRateLimit'] = $request->cpuRateLimit;
        }

        if (null !== $request->cpuSampleDuration) {
            @$query['CpuSampleDuration'] = $request->cpuSampleDuration;
        }

        if (null !== $request->cpuSingleRateLimit) {
            @$query['CpuSingleRateLimit'] = $request->cpuSingleRateLimit;
        }

        if (null !== $request->deviceConnectHint) {
            @$query['DeviceConnectHint'] = $request->deviceConnectHint;
        }

        if (null !== $request->deviceRedirects) {
            @$query['DeviceRedirects'] = $request->deviceRedirects;
        }

        if (null !== $request->deviceRules) {
            @$query['DeviceRules'] = $request->deviceRules;
        }

        if (null !== $request->disconnectKeepSession) {
            @$query['DisconnectKeepSession'] = $request->disconnectKeepSession;
        }

        if (null !== $request->disconnectKeepSessionTime) {
            @$query['DisconnectKeepSessionTime'] = $request->disconnectKeepSessionTime;
        }

        if (null !== $request->displayMode) {
            @$query['DisplayMode'] = $request->displayMode;
        }

        if (null !== $request->domainResolveRule) {
            @$query['DomainResolveRule'] = $request->domainResolveRule;
        }

        if (null !== $request->domainResolveRuleType) {
            @$query['DomainResolveRuleType'] = $request->domainResolveRuleType;
        }

        if (null !== $request->enableSessionRateLimiting) {
            @$query['EnableSessionRateLimiting'] = $request->enableSessionRateLimiting;
        }

        if (null !== $request->endUserApplyAdminCoordinate) {
            @$query['EndUserApplyAdminCoordinate'] = $request->endUserApplyAdminCoordinate;
        }

        if (null !== $request->endUserGroupCoordinate) {
            @$query['EndUserGroupCoordinate'] = $request->endUserGroupCoordinate;
        }

        if (null !== $request->fileMigrate) {
            @$query['FileMigrate'] = $request->fileMigrate;
        }

        if (null !== $request->gpuAcceleration) {
            @$query['GpuAcceleration'] = $request->gpuAcceleration;
        }

        if (null !== $request->html5FileTransfer) {
            @$query['Html5FileTransfer'] = $request->html5FileTransfer;
        }

        if (null !== $request->internetCommunicationProtocol) {
            @$query['InternetCommunicationProtocol'] = $request->internetCommunicationProtocol;
        }

        if (null !== $request->internetPrinter) {
            @$query['InternetPrinter'] = $request->internetPrinter;
        }

        if (null !== $request->localDrive) {
            @$query['LocalDrive'] = $request->localDrive;
        }

        if (null !== $request->maxReconnectTime) {
            @$query['MaxReconnectTime'] = $request->maxReconnectTime;
        }

        if (null !== $request->memoryDownGradeDuration) {
            @$query['MemoryDownGradeDuration'] = $request->memoryDownGradeDuration;
        }

        if (null !== $request->memoryProcessors) {
            @$query['MemoryProcessors'] = $request->memoryProcessors;
        }

        if (null !== $request->memoryProtectedMode) {
            @$query['MemoryProtectedMode'] = $request->memoryProtectedMode;
        }

        if (null !== $request->memoryRateLimit) {
            @$query['MemoryRateLimit'] = $request->memoryRateLimit;
        }

        if (null !== $request->memorySampleDuration) {
            @$query['MemorySampleDuration'] = $request->memorySampleDuration;
        }

        if (null !== $request->memorySingleRateLimit) {
            @$query['MemorySingleRateLimit'] = $request->memorySingleRateLimit;
        }

        if (null !== $request->mobileRestart) {
            @$query['MobileRestart'] = $request->mobileRestart;
        }

        if (null !== $request->mobileShutdown) {
            @$query['MobileShutdown'] = $request->mobileShutdown;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->netRedirect) {
            @$query['NetRedirect'] = $request->netRedirect;
        }

        if (null !== $request->netRedirectRule) {
            @$query['NetRedirectRule'] = $request->netRedirectRule;
        }

        if (null !== $request->noOperationDisconnect) {
            @$query['NoOperationDisconnect'] = $request->noOperationDisconnect;
        }

        if (null !== $request->noOperationDisconnectTime) {
            @$query['NoOperationDisconnectTime'] = $request->noOperationDisconnectTime;
        }

        if (null !== $request->policyGroupId) {
            @$query['PolicyGroupId'] = $request->policyGroupId;
        }

        if (null !== $request->printerRedirect) {
            @$query['PrinterRedirect'] = $request->printerRedirect;
        }

        if (null !== $request->qualityEnhancement) {
            @$query['QualityEnhancement'] = $request->qualityEnhancement;
        }

        if (null !== $request->recordEventDuration) {
            @$query['RecordEventDuration'] = $request->recordEventDuration;
        }

        if (null !== $request->recordEventFilePaths) {
            @$query['RecordEventFilePaths'] = $request->recordEventFilePaths;
        }

        if (null !== $request->recordEventRegisters) {
            @$query['RecordEventRegisters'] = $request->recordEventRegisters;
        }

        if (null !== $request->recordEvents) {
            @$query['RecordEvents'] = $request->recordEvents;
        }

        if (null !== $request->recording) {
            @$query['Recording'] = $request->recording;
        }

        if (null !== $request->recordingAudio) {
            @$query['RecordingAudio'] = $request->recordingAudio;
        }

        if (null !== $request->recordingDuration) {
            @$query['RecordingDuration'] = $request->recordingDuration;
        }

        if (null !== $request->recordingEndTime) {
            @$query['RecordingEndTime'] = $request->recordingEndTime;
        }

        if (null !== $request->recordingExpires) {
            @$query['RecordingExpires'] = $request->recordingExpires;
        }

        if (null !== $request->recordingFps) {
            @$query['RecordingFps'] = $request->recordingFps;
        }

        if (null !== $request->recordingStartTime) {
            @$query['RecordingStartTime'] = $request->recordingStartTime;
        }

        if (null !== $request->recordingUserNotify) {
            @$query['RecordingUserNotify'] = $request->recordingUserNotify;
        }

        if (null !== $request->recordingUserNotifyMessage) {
            @$query['RecordingUserNotifyMessage'] = $request->recordingUserNotifyMessage;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->remoteCoordinate) {
            @$query['RemoteCoordinate'] = $request->remoteCoordinate;
        }

        if (null !== $request->resetDesktop) {
            @$query['ResetDesktop'] = $request->resetDesktop;
        }

        if (null !== $request->resolutionHeight) {
            @$query['ResolutionHeight'] = $request->resolutionHeight;
        }

        if (null !== $request->resolutionModel) {
            @$query['ResolutionModel'] = $request->resolutionModel;
        }

        if (null !== $request->resolutionWidth) {
            @$query['ResolutionWidth'] = $request->resolutionWidth;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->revokeAccessPolicyRule) {
            @$query['RevokeAccessPolicyRule'] = $request->revokeAccessPolicyRule;
        }

        if (null !== $request->revokeSecurityPolicyRule) {
            @$query['RevokeSecurityPolicyRule'] = $request->revokeSecurityPolicyRule;
        }

        if (null !== $request->safeMenu) {
            @$query['SafeMenu'] = $request->safeMenu;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        if (null !== $request->scopeValue) {
            @$query['ScopeValue'] = $request->scopeValue;
        }

        if (null !== $request->sessionMaxRateKbps) {
            @$query['SessionMaxRateKbps'] = $request->sessionMaxRateKbps;
        }

        if (null !== $request->smoothEnhancement) {
            @$query['SmoothEnhancement'] = $request->smoothEnhancement;
        }

        if (null !== $request->statusMonitor) {
            @$query['StatusMonitor'] = $request->statusMonitor;
        }

        if (null !== $request->streamingMode) {
            @$query['StreamingMode'] = $request->streamingMode;
        }

        if (null !== $request->targetFps) {
            @$query['TargetFps'] = $request->targetFps;
        }

        if (null !== $request->taskbar) {
            @$query['Taskbar'] = $request->taskbar;
        }

        if (null !== $request->usbRedirect) {
            @$query['UsbRedirect'] = $request->usbRedirect;
        }

        if (null !== $request->usbSupplyRedirectRule) {
            @$query['UsbSupplyRedirectRule'] = $request->usbSupplyRedirectRule;
        }

        if (null !== $request->videoEncAvgKbps) {
            @$query['VideoEncAvgKbps'] = $request->videoEncAvgKbps;
        }

        if (null !== $request->videoEncMaxQP) {
            @$query['VideoEncMaxQP'] = $request->videoEncMaxQP;
        }

        if (null !== $request->videoEncMinQP) {
            @$query['VideoEncMinQP'] = $request->videoEncMinQP;
        }

        if (null !== $request->videoEncPeakKbps) {
            @$query['VideoEncPeakKbps'] = $request->videoEncPeakKbps;
        }

        if (null !== $request->videoEncPolicy) {
            @$query['VideoEncPolicy'] = $request->videoEncPolicy;
        }

        if (null !== $request->videoRedirect) {
            @$query['VideoRedirect'] = $request->videoRedirect;
        }

        if (null !== $request->visualQuality) {
            @$query['VisualQuality'] = $request->visualQuality;
        }

        if (null !== $request->watermark) {
            @$query['Watermark'] = $request->watermark;
        }

        if (null !== $request->watermarkAntiCam) {
            @$query['WatermarkAntiCam'] = $request->watermarkAntiCam;
        }

        if (null !== $request->watermarkColor) {
            @$query['WatermarkColor'] = $request->watermarkColor;
        }

        if (null !== $request->watermarkColumnAmount) {
            @$query['WatermarkColumnAmount'] = $request->watermarkColumnAmount;
        }

        if (null !== $request->watermarkCustomText) {
            @$query['WatermarkCustomText'] = $request->watermarkCustomText;
        }

        if (null !== $request->watermarkDegree) {
            @$query['WatermarkDegree'] = $request->watermarkDegree;
        }

        if (null !== $request->watermarkFontSize) {
            @$query['WatermarkFontSize'] = $request->watermarkFontSize;
        }

        if (null !== $request->watermarkFontStyle) {
            @$query['WatermarkFontStyle'] = $request->watermarkFontStyle;
        }

        if (null !== $request->watermarkPower) {
            @$query['WatermarkPower'] = $request->watermarkPower;
        }

        if (null !== $request->watermarkRowAmount) {
            @$query['WatermarkRowAmount'] = $request->watermarkRowAmount;
        }

        if (null !== $request->watermarkSecurity) {
            @$query['WatermarkSecurity'] = $request->watermarkSecurity;
        }

        if (null !== $request->watermarkTransparencyValue) {
            @$query['WatermarkTransparencyValue'] = $request->watermarkTransparencyValue;
        }

        if (null !== $request->watermarkType) {
            @$query['WatermarkType'] = $request->watermarkType;
        }

        if (null !== $request->wuyingKeeper) {
            @$query['WuyingKeeper'] = $request->wuyingKeeper;
        }

        if (null !== $request->wyAssistant) {
            @$query['WyAssistant'] = $request->wyAssistant;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyCenterPolicy',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyCenterPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a center policy.
     *
     * @param request - ModifyCenterPolicyRequest
     *
     * @returns ModifyCenterPolicyResponse
     *
     * @param ModifyCenterPolicyRequest $request
     *
     * @return ModifyCenterPolicyResponse
     */
    public function modifyCenterPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCenterPolicyWithOptions($request, $runtime);
    }

    /**
     * Modifies team spaces.
     *
     * @param request - ModifyCloudDriveGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCloudDriveGroupsResponse
     *
     * @param ModifyCloudDriveGroupsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyCloudDriveGroupsResponse
     */
    public function modifyCloudDriveGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cdsId) {
            @$query['CdsId'] = $request->cdsId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->totalSize) {
            @$query['TotalSize'] = $request->totalSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyCloudDriveGroups',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyCloudDriveGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies team spaces.
     *
     * @param request - ModifyCloudDriveGroupsRequest
     *
     * @returns ModifyCloudDriveGroupsResponse
     *
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
     * Modifies the user permissions on Cloud Drive Service, and configures users who have the download permissions and upload and download permissions. By default, the users that are not configured the preceding permissions only have the upload permissions.
     *
     * @param request - ModifyCloudDrivePermissionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCloudDrivePermissionResponse
     *
     * @param ModifyCloudDrivePermissionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyCloudDrivePermissionResponse
     */
    public function modifyCloudDrivePermissionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cdsId) {
            @$query['CdsId'] = $request->cdsId;
        }

        if (null !== $request->downloadEndUserIds) {
            @$query['DownloadEndUserIds'] = $request->downloadEndUserIds;
        }

        if (null !== $request->downloadUploadEndUserIds) {
            @$query['DownloadUploadEndUserIds'] = $request->downloadUploadEndUserIds;
        }

        if (null !== $request->noDownloadNoUploadEndUserIds) {
            @$query['NoDownloadNoUploadEndUserIds'] = $request->noDownloadNoUploadEndUserIds;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyCloudDrivePermission',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyCloudDrivePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the user permissions on Cloud Drive Service, and configures users who have the download permissions and upload and download permissions. By default, the users that are not configured the preceding permissions only have the upload permissions.
     *
     * @param request - ModifyCloudDrivePermissionRequest
     *
     * @returns ModifyCloudDrivePermissionResponse
     *
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
     * 修改无影网盘终端用户的属性.
     *
     * @param request - ModifyCloudDriveUsersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCloudDriveUsersResponse
     *
     * @param ModifyCloudDriveUsersRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyCloudDriveUsersResponse
     */
    public function modifyCloudDriveUsersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cdsId) {
            @$query['CdsId'] = $request->cdsId;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->userMaxSize) {
            @$query['UserMaxSize'] = $request->userMaxSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyCloudDriveUsers',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyCloudDriveUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改无影网盘终端用户的属性.
     *
     * @param request - ModifyCloudDriveUsersRequest
     *
     * @returns ModifyCloudDriveUsersResponse
     *
     * @param ModifyCloudDriveUsersRequest $request
     *
     * @return ModifyCloudDriveUsersResponse
     */
    public function modifyCloudDriveUsers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyCloudDriveUsersWithOptions($request, $runtime);
    }

    /**
     * Modifies the basic information of a configuration group.
     *
     * @param request - ModifyConfigGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyConfigGroupResponse
     *
     * @param ModifyConfigGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyConfigGroupResponse
     */
    public function modifyConfigGroupWithOptions($request, $runtime)
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

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyConfigGroup',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyConfigGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the basic information of a configuration group.
     *
     * @param request - ModifyConfigGroupRequest
     *
     * @returns ModifyConfigGroupResponse
     *
     * @param ModifyConfigGroupRequest $request
     *
     * @return ModifyConfigGroupResponse
     */
    public function modifyConfigGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyConfigGroupWithOptions($request, $runtime);
    }

    /**
     * Modifies the layouts of cloud computer list headers, such as the required fields and the display and hide settings.
     *
     * @param request - ModifyCustomizedListHeadersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyCustomizedListHeadersResponse
     *
     * @param ModifyCustomizedListHeadersRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyCustomizedListHeadersResponse
     */
    public function modifyCustomizedListHeadersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->headers) {
            @$query['Headers'] = $request->headers;
        }

        if (null !== $request->listType) {
            @$query['ListType'] = $request->listType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyCustomizedListHeaders',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyCustomizedListHeadersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the layouts of cloud computer list headers, such as the required fields and the display and hide settings.
     *
     * @param request - ModifyCustomizedListHeadersRequest
     *
     * @returns ModifyCustomizedListHeadersResponse
     *
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
     * Changes the billing method of cloud computers to subscription or pay-as-you-go.
     *
     * @remarks
     *   Before you call this operation, make sure that you fully understand the billing methods of cloud computers. For more information, see [Billing overview](https://help.aliyun.com/document_detail/188395.html).
     * *   Before you call this operation, make sure that the cloud computers whose billing method you want to change are in the Running or Stopped state and you have no overdue payments in your Alibaba Cloud account.
     * *   After the order payment is completed, the system starts to change the billing method of the cloud computers. During the change, you cannot perform operations, such as starting or stopping the cloud computers, and changing configurations of the cloud computers.
     *
     * @param request - ModifyDesktopChargeTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDesktopChargeTypeResponse
     *
     * @param ModifyDesktopChargeTypeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyDesktopChargeTypeResponse
     */
    public function modifyDesktopChargeTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->chargeType) {
            @$query['ChargeType'] = $request->chargeType;
        }

        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->promotionId) {
            @$query['PromotionId'] = $request->promotionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resellerOwnerUid) {
            @$query['ResellerOwnerUid'] = $request->resellerOwnerUid;
        }

        if (null !== $request->useDuration) {
            @$query['UseDuration'] = $request->useDuration;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDesktopChargeType',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDesktopChargeTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the billing method of cloud computers to subscription or pay-as-you-go.
     *
     * @remarks
     *   Before you call this operation, make sure that you fully understand the billing methods of cloud computers. For more information, see [Billing overview](https://help.aliyun.com/document_detail/188395.html).
     * *   Before you call this operation, make sure that the cloud computers whose billing method you want to change are in the Running or Stopped state and you have no overdue payments in your Alibaba Cloud account.
     * *   After the order payment is completed, the system starts to change the billing method of the cloud computers. During the change, you cannot perform operations, such as starting or stopping the cloud computers, and changing configurations of the cloud computers.
     *
     * @param request - ModifyDesktopChargeTypeRequest
     *
     * @returns ModifyDesktopChargeTypeResponse
     *
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
     * Modifies a cloud computer share.
     *
     * @remarks
     * Once a cloud computer share is created, the system automatically provisions cloud computers according to the auto-scaling policy and user connections, all based on the same template and security policy. You can adjust the cloud computer share\\"s configurations, including the share name, template, and policy, for different business scenarios.
     *
     * @param request - ModifyDesktopGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDesktopGroupResponse
     *
     * @param ModifyDesktopGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyDesktopGroupResponse
     */
    public function modifyDesktopGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allowAutoSetup) {
            @$query['AllowAutoSetup'] = $request->allowAutoSetup;
        }

        if (null !== $request->allowBufferCount) {
            @$query['AllowBufferCount'] = $request->allowBufferCount;
        }

        if (null !== $request->bindAmount) {
            @$query['BindAmount'] = $request->bindAmount;
        }

        if (null !== $request->buyDesktopsCount) {
            @$query['BuyDesktopsCount'] = $request->buyDesktopsCount;
        }

        if (null !== $request->classify) {
            @$query['Classify'] = $request->classify;
        }

        if (null !== $request->comments) {
            @$query['Comments'] = $request->comments;
        }

        if (null !== $request->connectDuration) {
            @$query['ConnectDuration'] = $request->connectDuration;
        }

        if (null !== $request->desktopGroupId) {
            @$query['DesktopGroupId'] = $request->desktopGroupId;
        }

        if (null !== $request->desktopGroupName) {
            @$query['DesktopGroupName'] = $request->desktopGroupName;
        }

        if (null !== $request->disableSessionConfig) {
            @$query['DisableSessionConfig'] = $request->disableSessionConfig;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->idleDisconnectDuration) {
            @$query['IdleDisconnectDuration'] = $request->idleDisconnectDuration;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->keepDuration) {
            @$query['KeepDuration'] = $request->keepDuration;
        }

        if (null !== $request->loadPolicy) {
            @$query['LoadPolicy'] = $request->loadPolicy;
        }

        if (null !== $request->maxDesktopsCount) {
            @$query['MaxDesktopsCount'] = $request->maxDesktopsCount;
        }

        if (null !== $request->minDesktopsCount) {
            @$query['MinDesktopsCount'] = $request->minDesktopsCount;
        }

        if (null !== $request->ownBundleId) {
            @$query['OwnBundleId'] = $request->ownBundleId;
        }

        if (null !== $request->policyGroupId) {
            @$query['PolicyGroupId'] = $request->policyGroupId;
        }

        if (null !== $request->policyGroupIds) {
            @$query['PolicyGroupIds'] = $request->policyGroupIds;
        }

        if (null !== $request->profileFollowSwitch) {
            @$query['ProfileFollowSwitch'] = $request->profileFollowSwitch;
        }

        if (null !== $request->ratioThreshold) {
            @$query['RatioThreshold'] = $request->ratioThreshold;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resetType) {
            @$query['ResetType'] = $request->resetType;
        }

        if (null !== $request->scaleStrategyId) {
            @$query['ScaleStrategyId'] = $request->scaleStrategyId;
        }

        if (null !== $request->stopDuration) {
            @$query['StopDuration'] = $request->stopDuration;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDesktopGroup',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDesktopGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a cloud computer share.
     *
     * @remarks
     * Once a cloud computer share is created, the system automatically provisions cloud computers according to the auto-scaling policy and user connections, all based on the same template and security policy. You can adjust the cloud computer share\\"s configurations, including the share name, template, and policy, for different business scenarios.
     *
     * @param request - ModifyDesktopGroupRequest
     *
     * @returns ModifyDesktopGroupResponse
     *
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
     * Modifies the hostname of a Windows cloud computer in the Active Directory (AD) office network.
     *
     * @remarks
     * The Windows cloud computer whose hostname you want to modify must be in an AD office network. After the hostname is modified, the cloud computer is re-created.
     *
     * @param request - ModifyDesktopHostNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDesktopHostNameResponse
     *
     * @param ModifyDesktopHostNameRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyDesktopHostNameResponse
     */
    public function modifyDesktopHostNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->newHostName) {
            @$query['NewHostName'] = $request->newHostName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDesktopHostName',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDesktopHostNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the hostname of a Windows cloud computer in the Active Directory (AD) office network.
     *
     * @remarks
     * The Windows cloud computer whose hostname you want to modify must be in an AD office network. After the hostname is modified, the cloud computer is re-created.
     *
     * @param request - ModifyDesktopHostNameRequest
     *
     * @returns ModifyDesktopHostNameResponse
     *
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
     * Changes the name of a cloud computer to a new name.
     *
     * @param request - ModifyDesktopNameRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDesktopNameResponse
     *
     * @param ModifyDesktopNameRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyDesktopNameResponse
     */
    public function modifyDesktopNameWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->newDesktopName) {
            @$query['NewDesktopName'] = $request->newDesktopName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDesktopName',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDesktopNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the name of a cloud computer to a new name.
     *
     * @param request - ModifyDesktopNameRequest
     *
     * @returns ModifyDesktopNameResponse
     *
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
     * 修改桌面超卖组.
     *
     * @param request - ModifyDesktopOversoldGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDesktopOversoldGroupResponse
     *
     * @param ModifyDesktopOversoldGroupRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyDesktopOversoldGroupResponse
     */
    public function modifyDesktopOversoldGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->concurrenceCount) {
            @$query['ConcurrenceCount'] = $request->concurrenceCount;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->idleDisconnectDuration) {
            @$query['IdleDisconnectDuration'] = $request->idleDisconnectDuration;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->keepDuration) {
            @$query['KeepDuration'] = $request->keepDuration;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->oversoldGroupId) {
            @$query['OversoldGroupId'] = $request->oversoldGroupId;
        }

        if (null !== $request->oversoldUserCount) {
            @$query['OversoldUserCount'] = $request->oversoldUserCount;
        }

        if (null !== $request->oversoldWarn) {
            @$query['OversoldWarn'] = $request->oversoldWarn;
        }

        if (null !== $request->policyGroupId) {
            @$query['PolicyGroupId'] = $request->policyGroupId;
        }

        if (null !== $request->stopDuration) {
            @$query['StopDuration'] = $request->stopDuration;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDesktopOversoldGroup',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDesktopOversoldGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改桌面超卖组.
     *
     * @param request - ModifyDesktopOversoldGroupRequest
     *
     * @returns ModifyDesktopOversoldGroupResponse
     *
     * @param ModifyDesktopOversoldGroupRequest $request
     *
     * @return ModifyDesktopOversoldGroupResponse
     */
    public function modifyDesktopOversoldGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDesktopOversoldGroupWithOptions($request, $runtime);
    }

    /**
     * 修改桌面超卖组售卖数据.
     *
     * @param request - ModifyDesktopOversoldGroupSaleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDesktopOversoldGroupSaleResponse
     *
     * @param ModifyDesktopOversoldGroupSaleRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyDesktopOversoldGroupSaleResponse
     */
    public function modifyDesktopOversoldGroupSaleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->concurrenceCount) {
            @$query['ConcurrenceCount'] = $request->concurrenceCount;
        }

        if (null !== $request->oversoldGroupId) {
            @$query['OversoldGroupId'] = $request->oversoldGroupId;
        }

        if (null !== $request->oversoldUserCount) {
            @$query['OversoldUserCount'] = $request->oversoldUserCount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDesktopOversoldGroupSale',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDesktopOversoldGroupSaleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改桌面超卖组售卖数据.
     *
     * @param request - ModifyDesktopOversoldGroupSaleRequest
     *
     * @returns ModifyDesktopOversoldGroupSaleResponse
     *
     * @param ModifyDesktopOversoldGroupSaleRequest $request
     *
     * @return ModifyDesktopOversoldGroupSaleResponse
     */
    public function modifyDesktopOversoldGroupSale($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDesktopOversoldGroupSaleWithOptions($request, $runtime);
    }

    /**
     * 修改桌面超卖用户组.
     *
     * @param request - ModifyDesktopOversoldUserGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDesktopOversoldUserGroupResponse
     *
     * @param ModifyDesktopOversoldUserGroupRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyDesktopOversoldUserGroupResponse
     */
    public function modifyDesktopOversoldUserGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->oversoldGroupId) {
            @$query['OversoldGroupId'] = $request->oversoldGroupId;
        }

        if (null !== $request->policyGroupId) {
            @$query['PolicyGroupId'] = $request->policyGroupId;
        }

        if (null !== $request->userGroupId) {
            @$query['UserGroupId'] = $request->userGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDesktopOversoldUserGroup',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDesktopOversoldUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改桌面超卖用户组.
     *
     * @param request - ModifyDesktopOversoldUserGroupRequest
     *
     * @returns ModifyDesktopOversoldUserGroupResponse
     *
     * @param ModifyDesktopOversoldUserGroupRequest $request
     *
     * @return ModifyDesktopOversoldUserGroupResponse
     */
    public function modifyDesktopOversoldUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDesktopOversoldUserGroupWithOptions($request, $runtime);
    }

    /**
     * Changes the instance type of a cloud computer and scales up the disks of the cloud computer.
     *
     * @remarks
     * Changing the configurations of a cloud computer includes changing the instance type of the cloud computer and scaling up the disks of the cloud computer.
     * *   Before you change the configurations of a cloud computer, you must understand the instance types and disk sizes supported by cloud computers. For more information, see [Cloud computer types](https://help.aliyun.com/document_detail/188609.html). You can call the [DescribeDesktopTypes](https://help.aliyun.com/document_detail/188882.html) operation to query the instance types supported by cloud computers.
     * *   You must change at least one of the following configurations: instance type, system disk size, and data disk size of the cloud computer. You must specify at least one of the following parameters: `DesktopType`, `RootDiskSizeGib`, and `UserDiskSizeGib`. Take note of the following items:
     *     *   The instance type of a cloud computer includes the configurations of vCPUs, memory, and GPUs. You can only change an instance type to another. You cannot change only one of the configurations.
     *     *   You cannot change a cloud computer between the General Office type and the non-General Office type. You cannot yet change a cloud computer between the Graphics type and the non-Graphics type.
     *     *   The system disk and data disks of a cloud computer can only be scaled up and cannot be scaled down.
     *     *   If the billing method of the cloud computer is subscription, the system calculates the price difference based on the configuration difference between the original cloud computer and the new cloud computer. You must make up for the price difference or receive a refund for the price difference.
     *     *   We recommend that you do not change the configurations of a cloud computer twice within 5 minutes.
     *     *   When you change the configurations of a cloud computer, the cloud computer must be in the Stopped state.
     * *   After you change the configurations of a cloud computer, the personal data on the cloud computer is not affected.
     *
     * @param request - ModifyDesktopSpecRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDesktopSpecResponse
     *
     * @param ModifyDesktopSpecRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyDesktopSpecResponse
     */
    public function modifyDesktopSpecWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->desktopType) {
            @$query['DesktopType'] = $request->desktopType;
        }

        if (null !== $request->promotionId) {
            @$query['PromotionId'] = $request->promotionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resellerOwnerUid) {
            @$query['ResellerOwnerUid'] = $request->resellerOwnerUid;
        }

        if (null !== $request->resourceSpecs) {
            @$query['ResourceSpecs'] = $request->resourceSpecs;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->rootDiskSizeGib) {
            @$query['RootDiskSizeGib'] = $request->rootDiskSizeGib;
        }

        if (null !== $request->userDiskPerformanceLevel) {
            @$query['UserDiskPerformanceLevel'] = $request->userDiskPerformanceLevel;
        }

        if (null !== $request->userDiskSizeGib) {
            @$query['UserDiskSizeGib'] = $request->userDiskSizeGib;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDesktopSpec',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDesktopSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the instance type of a cloud computer and scales up the disks of the cloud computer.
     *
     * @remarks
     * Changing the configurations of a cloud computer includes changing the instance type of the cloud computer and scaling up the disks of the cloud computer.
     * *   Before you change the configurations of a cloud computer, you must understand the instance types and disk sizes supported by cloud computers. For more information, see [Cloud computer types](https://help.aliyun.com/document_detail/188609.html). You can call the [DescribeDesktopTypes](https://help.aliyun.com/document_detail/188882.html) operation to query the instance types supported by cloud computers.
     * *   You must change at least one of the following configurations: instance type, system disk size, and data disk size of the cloud computer. You must specify at least one of the following parameters: `DesktopType`, `RootDiskSizeGib`, and `UserDiskSizeGib`. Take note of the following items:
     *     *   The instance type of a cloud computer includes the configurations of vCPUs, memory, and GPUs. You can only change an instance type to another. You cannot change only one of the configurations.
     *     *   You cannot change a cloud computer between the General Office type and the non-General Office type. You cannot yet change a cloud computer between the Graphics type and the non-Graphics type.
     *     *   The system disk and data disks of a cloud computer can only be scaled up and cannot be scaled down.
     *     *   If the billing method of the cloud computer is subscription, the system calculates the price difference based on the configuration difference between the original cloud computer and the new cloud computer. You must make up for the price difference or receive a refund for the price difference.
     *     *   We recommend that you do not change the configurations of a cloud computer twice within 5 minutes.
     *     *   When you change the configurations of a cloud computer, the cloud computer must be in the Stopped state.
     * *   After you change the configurations of a cloud computer, the personal data on the cloud computer is not affected.
     *
     * @param request - ModifyDesktopSpecRequest
     *
     * @returns ModifyDesktopSpecResponse
     *
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
     * Creates or modifies scheduled tasks on cloud computers, such as starting, stopping, restarting, and resetting cloud computers on schedule.
     *
     * @param request - ModifyDesktopTimerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDesktopTimerResponse
     *
     * @param ModifyDesktopTimerRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyDesktopTimerResponse
     */
    public function modifyDesktopTimerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->desktopTimers) {
            @$query['DesktopTimers'] = $request->desktopTimers;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->useDesktopTimers) {
            @$query['UseDesktopTimers'] = $request->useDesktopTimers;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDesktopTimer',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDesktopTimerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates or modifies scheduled tasks on cloud computers, such as starting, stopping, restarting, and resetting cloud computers on schedule.
     *
     * @param request - ModifyDesktopTimerRequest
     *
     * @returns ModifyDesktopTimerResponse
     *
     * @param ModifyDesktopTimerRequest $request
     *
     * @return ModifyDesktopTimerResponse
     */
    public function modifyDesktopTimer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDesktopTimerWithOptions($request, $runtime);
    }

    /**
     * Changes an existing cloud computer policy for cloud computers.
     *
     * @remarks
     * The cloud computers for which you want to change their policies must be in the Running state.
     *
     * @param request - ModifyDesktopsPolicyGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDesktopsPolicyGroupResponse
     *
     * @param ModifyDesktopsPolicyGroupRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyDesktopsPolicyGroupResponse
     */
    public function modifyDesktopsPolicyGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->policyGroupId) {
            @$query['PolicyGroupId'] = $request->policyGroupId;
        }

        if (null !== $request->policyGroupIds) {
            @$query['PolicyGroupIds'] = $request->policyGroupIds;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDesktopsPolicyGroup',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDesktopsPolicyGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes an existing cloud computer policy for cloud computers.
     *
     * @remarks
     * The cloud computers for which you want to change their policies must be in the Running state.
     *
     * @param request - ModifyDesktopsPolicyGroupRequest
     *
     * @returns ModifyDesktopsPolicyGroupResponse
     *
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
     * Changes the performance level (PL) of a system disk or data disk.
     *
     * @remarks
     * When creating a cloud computer in Elastic Desktop Service (EDS) Enterprise, you can use a template to define specifications that align with your business needs. By default, Enterprise Graphics or High Frequency cloud computers utilize Enterprise SSDs (ESSDs). You can customize the disk capacity and performance level (PL) of these ESSDs, and adjust the PL for both system and data disks as needed.
     * >  Only Enterprise Graphics or High Frequency cloud computers support disk PL adjustments.
     *
     * @param request - ModifyDiskSpecRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyDiskSpecResponse
     *
     * @param ModifyDiskSpecRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ModifyDiskSpecResponse
     */
    public function modifyDiskSpecWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->promotionId) {
            @$query['PromotionId'] = $request->promotionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resellerOwnerUid) {
            @$query['ResellerOwnerUid'] = $request->resellerOwnerUid;
        }

        if (null !== $request->rootDiskPerformanceLevel) {
            @$query['RootDiskPerformanceLevel'] = $request->rootDiskPerformanceLevel;
        }

        if (null !== $request->userDiskPerformanceLevel) {
            @$query['UserDiskPerformanceLevel'] = $request->userDiskPerformanceLevel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyDiskSpec',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyDiskSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the performance level (PL) of a system disk or data disk.
     *
     * @remarks
     * When creating a cloud computer in Elastic Desktop Service (EDS) Enterprise, you can use a template to define specifications that align with your business needs. By default, Enterprise Graphics or High Frequency cloud computers utilize Enterprise SSDs (ESSDs). You can customize the disk capacity and performance level (PL) of these ESSDs, and adjust the PL for both system and data disks as needed.
     * >  Only Enterprise Graphics or High Frequency cloud computers support disk PL adjustments.
     *
     * @param request - ModifyDiskSpecRequest
     *
     * @returns ModifyDiskSpecResponse
     *
     * @param ModifyDiskSpecRequest $request
     *
     * @return ModifyDiskSpecResponse
     */
    public function modifyDiskSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyDiskSpecWithOptions($request, $runtime);
    }

    /**
     * Assigns a cloud computer to end users and removes all original end users of the cloud computer.
     *
     * @remarks
     *   The cloud computer must be in the Running state.
     * *   After you call this operation, the assignment result is immediately returned. You can call the [DescribeDesktops](https://help.aliyun.com/document_detail/436815.html) operation to query the assignment of the cloud computer. The value of the `ManagementFlags` response parameter indicates the assignment of the cloud computer. A value of `ASSIGNING` indicates that the cloud computer is being assigned, and other values indicate that the cloud computer is assigned.
     * *   We recommend that you check the assignment every 2 to 5 seconds and perform the checks within 50 seconds. Typically, 1 to 5 seconds are required to complete the assignment.
     *
     * @param request - ModifyEntitlementRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyEntitlementResponse
     *
     * @param ModifyEntitlementRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyEntitlementResponse
     */
    public function modifyEntitlementWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyEntitlement',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyEntitlementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Assigns a cloud computer to end users and removes all original end users of the cloud computer.
     *
     * @remarks
     *   The cloud computer must be in the Running state.
     * *   After you call this operation, the assignment result is immediately returned. You can call the [DescribeDesktops](https://help.aliyun.com/document_detail/436815.html) operation to query the assignment of the cloud computer. The value of the `ManagementFlags` response parameter indicates the assignment of the cloud computer. A value of `ASSIGNING` indicates that the cloud computer is being assigned, and other values indicate that the cloud computer is assigned.
     * *   We recommend that you check the assignment every 2 to 5 seconds and perform the checks within 50 seconds. Typically, 1 to 5 seconds are required to complete the assignment.
     *
     * @param request - ModifyEntitlementRequest
     *
     * @returns ModifyEntitlementResponse
     *
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
     * Modifies the attributes of an image, including the name and description of the image.
     *
     * @remarks
     * You can call this operation to modify the attributes of only custom images that are in the Available state.
     *
     * @param request - ModifyImageAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyImageAttributeResponse
     *
     * @param ModifyImageAttributeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyImageAttributeResponse
     */
    public function modifyImageAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyImageAttribute',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyImageAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the attributes of an image, including the name and description of the image.
     *
     * @remarks
     * You can call this operation to modify the attributes of only custom images that are in the Available state.
     *
     * @param request - ModifyImageAttributeRequest
     *
     * @returns ModifyImageAttributeResponse
     *
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
     * Shares an image with other Alibaba Cloud accounts, or unshares an image from the recipient Alibaba Cloud accounts.
     *
     * @remarks
     * ### [](#)Security of shared images
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
     *
     * @param request - ModifyImagePermissionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyImagePermissionResponse
     *
     * @param ModifyImagePermissionRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyImagePermissionResponse
     */
    public function modifyImagePermissionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addAccount) {
            @$query['AddAccount'] = $request->addAccount;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->removeAccount) {
            @$query['RemoveAccount'] = $request->removeAccount;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyImagePermission',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyImagePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Shares an image with other Alibaba Cloud accounts, or unshares an image from the recipient Alibaba Cloud accounts.
     *
     * @remarks
     * ### [](#)Security of shared images
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
     *
     * @param request - ModifyImagePermissionRequest
     *
     * @returns ModifyImagePermissionResponse
     *
     * @param ModifyImagePermissionRequest $request
     *
     * @return ModifyImagePermissionResponse
     */
    public function modifyImagePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyImagePermissionWithOptions($request, $runtime);
    }

    /**
     * Modifies the mount target of a File Storage NAS (NAS) file system.
     *
     * @remarks
     * When you create a NAS file system, a mount target is automatically generated. By default, the mount target does not need to be changed. If the mount target is deleted by misoperation, you must specify a new mount target for the NAS file system in the workspace. You can call the [CreateMountTarget](https://help.aliyun.com/document_detail/62621.html) operation to create a mount target.
     *
     * @param request - ModifyNASDefaultMountTargetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyNASDefaultMountTargetResponse
     *
     * @param ModifyNASDefaultMountTargetRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyNASDefaultMountTargetResponse
     */
    public function modifyNASDefaultMountTargetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->mountTargetDomain) {
            @$query['MountTargetDomain'] = $request->mountTargetDomain;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyNASDefaultMountTarget',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyNASDefaultMountTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the mount target of a File Storage NAS (NAS) file system.
     *
     * @remarks
     * When you create a NAS file system, a mount target is automatically generated. By default, the mount target does not need to be changed. If the mount target is deleted by misoperation, you must specify a new mount target for the NAS file system in the workspace. You can call the [CreateMountTarget](https://help.aliyun.com/document_detail/62621.html) operation to create a mount target.
     *
     * @param request - ModifyNASDefaultMountTargetRequest
     *
     * @returns ModifyNASDefaultMountTargetResponse
     *
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
     * Modifies the bandwidth of a premium bandwidth plan.
     *
     * @param request - ModifyNetworkPackageBandwidthRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyNetworkPackageBandwidthResponse
     *
     * @param ModifyNetworkPackageBandwidthRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifyNetworkPackageBandwidthResponse
     */
    public function modifyNetworkPackageBandwidthWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->networkPackageId) {
            @$query['NetworkPackageId'] = $request->networkPackageId;
        }

        if (null !== $request->promotionId) {
            @$query['PromotionId'] = $request->promotionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resellerOwnerUid) {
            @$query['ResellerOwnerUid'] = $request->resellerOwnerUid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyNetworkPackageBandwidth',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyNetworkPackageBandwidthResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the bandwidth of a premium bandwidth plan.
     *
     * @param request - ModifyNetworkPackageBandwidthRequest
     *
     * @returns ModifyNetworkPackageBandwidthResponse
     *
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
     * Restores or disables a premium bandwidth plan.
     *
     * @remarks
     * If you want to temporarily disable the Internet access of your cloud computer after the Internet access is enabled for your cloud computer, you can disable the premium bandwidth plan and restore it as needed.
     *
     * @param request - ModifyNetworkPackageEnabledRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyNetworkPackageEnabledResponse
     *
     * @param ModifyNetworkPackageEnabledRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyNetworkPackageEnabledResponse
     */
    public function modifyNetworkPackageEnabledWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enabled) {
            @$query['Enabled'] = $request->enabled;
        }

        if (null !== $request->networkPackageId) {
            @$query['NetworkPackageId'] = $request->networkPackageId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyNetworkPackageEnabled',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyNetworkPackageEnabledResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restores or disables a premium bandwidth plan.
     *
     * @remarks
     * If you want to temporarily disable the Internet access of your cloud computer after the Internet access is enabled for your cloud computer, you can disable the premium bandwidth plan and restore it as needed.
     *
     * @param request - ModifyNetworkPackageEnabledRequest
     *
     * @returns ModifyNetworkPackageEnabledResponse
     *
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
     * Modifies the basic properties of an office network, including the name and local administrator permission settings.
     *
     * @param request - ModifyOfficeSiteAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyOfficeSiteAttributeResponse
     *
     * @param ModifyOfficeSiteAttributeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return ModifyOfficeSiteAttributeResponse
     */
    public function modifyOfficeSiteAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopAccessType) {
            @$query['DesktopAccessType'] = $request->desktopAccessType;
        }

        if (null !== $request->enableAdminAccess) {
            @$query['EnableAdminAccess'] = $request->enableAdminAccess;
        }

        if (null !== $request->needVerifyLoginRisk) {
            @$query['NeedVerifyLoginRisk'] = $request->needVerifyLoginRisk;
        }

        if (null !== $request->needVerifyZeroDevice) {
            @$query['NeedVerifyZeroDevice'] = $request->needVerifyZeroDevice;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->officeSiteName) {
            @$query['OfficeSiteName'] = $request->officeSiteName;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyOfficeSiteAttribute',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyOfficeSiteAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the basic properties of an office network, including the name and local administrator permission settings.
     *
     * @param request - ModifyOfficeSiteAttributeRequest
     *
     * @returns ModifyOfficeSiteAttributeResponse
     *
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
     * Enables or disables the communication between cloud computers in an office network (formerly workspace). If you enable the communication between cloud computers in an office network, the cloud computers can access each other.
     *
     * @param request - ModifyOfficeSiteCrossDesktopAccessRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyOfficeSiteCrossDesktopAccessResponse
     *
     * @param ModifyOfficeSiteCrossDesktopAccessRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return ModifyOfficeSiteCrossDesktopAccessResponse
     */
    public function modifyOfficeSiteCrossDesktopAccessWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enableCrossDesktopAccess) {
            @$query['EnableCrossDesktopAccess'] = $request->enableCrossDesktopAccess;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyOfficeSiteCrossDesktopAccess',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyOfficeSiteCrossDesktopAccessResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables the communication between cloud computers in an office network (formerly workspace). If you enable the communication between cloud computers in an office network, the cloud computers can access each other.
     *
     * @param request - ModifyOfficeSiteCrossDesktopAccessRequest
     *
     * @returns ModifyOfficeSiteCrossDesktopAccessResponse
     *
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
     * 修改工作区DNS信息.
     *
     * @param request - ModifyOfficeSiteDnsInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyOfficeSiteDnsInfoResponse
     *
     * @param ModifyOfficeSiteDnsInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyOfficeSiteDnsInfoResponse
     */
    public function modifyOfficeSiteDnsInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dnsAddress) {
            @$query['DnsAddress'] = $request->dnsAddress;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyOfficeSiteDnsInfo',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyOfficeSiteDnsInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改工作区DNS信息.
     *
     * @param request - ModifyOfficeSiteDnsInfoRequest
     *
     * @returns ModifyOfficeSiteDnsInfoResponse
     *
     * @param ModifyOfficeSiteDnsInfoRequest $request
     *
     * @return ModifyOfficeSiteDnsInfoResponse
     */
    public function modifyOfficeSiteDnsInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyOfficeSiteDnsInfoWithOptions($request, $runtime);
    }

    /**
     * Enables or disables multi-factor authentication (MFA) for an enterprise Active Directory (AD) office network (formerly workspace).
     *
     * @param request - ModifyOfficeSiteMfaEnabledRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyOfficeSiteMfaEnabledResponse
     *
     * @param ModifyOfficeSiteMfaEnabledRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyOfficeSiteMfaEnabledResponse
     */
    public function modifyOfficeSiteMfaEnabledWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->mfaEnabled) {
            @$query['MfaEnabled'] = $request->mfaEnabled;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyOfficeSiteMfaEnabled',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyOfficeSiteMfaEnabledResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables multi-factor authentication (MFA) for an enterprise Active Directory (AD) office network (formerly workspace).
     *
     * @param request - ModifyOfficeSiteMfaEnabledRequest
     *
     * @returns ModifyOfficeSiteMfaEnabledResponse
     *
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
     * Modifies the cloud computer policy.
     *
     * @param request - ModifyPolicyGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyPolicyGroupResponse
     *
     * @param ModifyPolicyGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyPolicyGroupResponse
     */
    public function modifyPolicyGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->adminAccess) {
            @$query['AdminAccess'] = $request->adminAccess;
        }

        if (null !== $request->appContentProtection) {
            @$query['AppContentProtection'] = $request->appContentProtection;
        }

        if (null !== $request->authorizeAccessPolicyRule) {
            @$query['AuthorizeAccessPolicyRule'] = $request->authorizeAccessPolicyRule;
        }

        if (null !== $request->authorizeSecurityPolicyRule) {
            @$query['AuthorizeSecurityPolicyRule'] = $request->authorizeSecurityPolicyRule;
        }

        if (null !== $request->cameraRedirect) {
            @$query['CameraRedirect'] = $request->cameraRedirect;
        }

        if (null !== $request->clientType) {
            @$query['ClientType'] = $request->clientType;
        }

        if (null !== $request->clipboard) {
            @$query['Clipboard'] = $request->clipboard;
        }

        if (null !== $request->deviceRedirects) {
            @$query['DeviceRedirects'] = $request->deviceRedirects;
        }

        if (null !== $request->deviceRules) {
            @$query['DeviceRules'] = $request->deviceRules;
        }

        if (null !== $request->domainList) {
            @$query['DomainList'] = $request->domainList;
        }

        if (null !== $request->domainResolveRule) {
            @$query['DomainResolveRule'] = $request->domainResolveRule;
        }

        if (null !== $request->domainResolveRuleType) {
            @$query['DomainResolveRuleType'] = $request->domainResolveRuleType;
        }

        if (null !== $request->endUserApplyAdminCoordinate) {
            @$query['EndUserApplyAdminCoordinate'] = $request->endUserApplyAdminCoordinate;
        }

        if (null !== $request->endUserGroupCoordinate) {
            @$query['EndUserGroupCoordinate'] = $request->endUserGroupCoordinate;
        }

        if (null !== $request->gpuAcceleration) {
            @$query['GpuAcceleration'] = $request->gpuAcceleration;
        }

        if (null !== $request->html5Access) {
            @$query['Html5Access'] = $request->html5Access;
        }

        if (null !== $request->html5FileTransfer) {
            @$query['Html5FileTransfer'] = $request->html5FileTransfer;
        }

        if (null !== $request->internetCommunicationProtocol) {
            @$query['InternetCommunicationProtocol'] = $request->internetCommunicationProtocol;
        }

        if (null !== $request->localDrive) {
            @$query['LocalDrive'] = $request->localDrive;
        }

        if (null !== $request->maxReconnectTime) {
            @$query['MaxReconnectTime'] = $request->maxReconnectTime;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->netRedirect) {
            @$query['NetRedirect'] = $request->netRedirect;
        }

        if (null !== $request->policyGroupId) {
            @$query['PolicyGroupId'] = $request->policyGroupId;
        }

        if (null !== $request->preemptLogin) {
            @$query['PreemptLogin'] = $request->preemptLogin;
        }

        if (null !== $request->preemptLoginUser) {
            @$query['PreemptLoginUser'] = $request->preemptLoginUser;
        }

        if (null !== $request->printerRedirection) {
            @$query['PrinterRedirection'] = $request->printerRedirection;
        }

        if (null !== $request->recordContent) {
            @$query['RecordContent'] = $request->recordContent;
        }

        if (null !== $request->recordContentExpires) {
            @$query['RecordContentExpires'] = $request->recordContentExpires;
        }

        if (null !== $request->recording) {
            @$query['Recording'] = $request->recording;
        }

        if (null !== $request->recordingAudio) {
            @$query['RecordingAudio'] = $request->recordingAudio;
        }

        if (null !== $request->recordingDuration) {
            @$query['RecordingDuration'] = $request->recordingDuration;
        }

        if (null !== $request->recordingEndTime) {
            @$query['RecordingEndTime'] = $request->recordingEndTime;
        }

        if (null !== $request->recordingExpires) {
            @$query['RecordingExpires'] = $request->recordingExpires;
        }

        if (null !== $request->recordingFps) {
            @$query['RecordingFps'] = $request->recordingFps;
        }

        if (null !== $request->recordingStartTime) {
            @$query['RecordingStartTime'] = $request->recordingStartTime;
        }

        if (null !== $request->recordingUserNotify) {
            @$query['RecordingUserNotify'] = $request->recordingUserNotify;
        }

        if (null !== $request->recordingUserNotifyMessage) {
            @$query['RecordingUserNotifyMessage'] = $request->recordingUserNotifyMessage;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->remoteCoordinate) {
            @$query['RemoteCoordinate'] = $request->remoteCoordinate;
        }

        if (null !== $request->revokeAccessPolicyRule) {
            @$query['RevokeAccessPolicyRule'] = $request->revokeAccessPolicyRule;
        }

        if (null !== $request->revokeSecurityPolicyRule) {
            @$query['RevokeSecurityPolicyRule'] = $request->revokeSecurityPolicyRule;
        }

        if (null !== $request->scope) {
            @$query['Scope'] = $request->scope;
        }

        if (null !== $request->scopeValue) {
            @$query['ScopeValue'] = $request->scopeValue;
        }

        if (null !== $request->usbRedirect) {
            @$query['UsbRedirect'] = $request->usbRedirect;
        }

        if (null !== $request->usbSupplyRedirectRule) {
            @$query['UsbSupplyRedirectRule'] = $request->usbSupplyRedirectRule;
        }

        if (null !== $request->videoRedirect) {
            @$query['VideoRedirect'] = $request->videoRedirect;
        }

        if (null !== $request->visualQuality) {
            @$query['VisualQuality'] = $request->visualQuality;
        }

        if (null !== $request->watermark) {
            @$query['Watermark'] = $request->watermark;
        }

        if (null !== $request->watermarkAntiCam) {
            @$query['WatermarkAntiCam'] = $request->watermarkAntiCam;
        }

        if (null !== $request->watermarkColor) {
            @$query['WatermarkColor'] = $request->watermarkColor;
        }

        if (null !== $request->watermarkDegree) {
            @$query['WatermarkDegree'] = $request->watermarkDegree;
        }

        if (null !== $request->watermarkFontSize) {
            @$query['WatermarkFontSize'] = $request->watermarkFontSize;
        }

        if (null !== $request->watermarkFontStyle) {
            @$query['WatermarkFontStyle'] = $request->watermarkFontStyle;
        }

        if (null !== $request->watermarkPower) {
            @$query['WatermarkPower'] = $request->watermarkPower;
        }

        if (null !== $request->watermarkRowAmount) {
            @$query['WatermarkRowAmount'] = $request->watermarkRowAmount;
        }

        if (null !== $request->watermarkSecurity) {
            @$query['WatermarkSecurity'] = $request->watermarkSecurity;
        }

        if (null !== $request->watermarkTransparency) {
            @$query['WatermarkTransparency'] = $request->watermarkTransparency;
        }

        if (null !== $request->watermarkTransparencyValue) {
            @$query['WatermarkTransparencyValue'] = $request->watermarkTransparencyValue;
        }

        if (null !== $request->watermarkType) {
            @$query['WatermarkType'] = $request->watermarkType;
        }

        if (null !== $request->wyAssistant) {
            @$query['WyAssistant'] = $request->wyAssistant;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyPolicyGroup',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyPolicyGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the cloud computer policy.
     *
     * @param request - ModifyPolicyGroupRequest
     *
     * @returns ModifyPolicyGroupResponse
     *
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
     * @param request - ModifyResourceCenterPolicyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyResourceCenterPolicyResponse
     *
     * @param ModifyResourceCenterPolicyRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyResourceCenterPolicyResponse
     */
    public function modifyResourceCenterPolicyWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->policyGroupIds) {
            @$query['PolicyGroupIds'] = $request->policyGroupIds;
        }

        if (null !== $request->policyGroupType) {
            @$query['PolicyGroupType'] = $request->policyGroupType;
        }

        if (null !== $request->productType) {
            @$query['ProductType'] = $request->productType;
        }

        if (null !== $request->resourceIds) {
            @$query['ResourceIds'] = $request->resourceIds;
        }

        if (null !== $request->resourceRegionId) {
            @$query['ResourceRegionId'] = $request->resourceRegionId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyResourceCenterPolicy',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyResourceCenterPolicyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param request - ModifyResourceCenterPolicyRequest
     *
     * @returns ModifyResourceCenterPolicyResponse
     *
     * @param ModifyResourceCenterPolicyRequest $request
     *
     * @return ModifyResourceCenterPolicyResponse
     */
    public function modifyResourceCenterPolicy($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyResourceCenterPolicyWithOptions($request, $runtime);
    }

    /**
     * 模板全量更新.
     *
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
        if (null !== $request->siteConfigList) {
            @$query['SiteConfigList'] = $request->siteConfigList;
        }

        $body = [];
        if (null !== $request->defaultLanguage) {
            @$body['DefaultLanguage'] = $request->defaultLanguage;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->imageId) {
            @$body['ImageId'] = $request->imageId;
        }

        if (null !== $request->policyGroupId) {
            @$body['PolicyGroupId'] = $request->policyGroupId;
        }

        $bodyFlat = [];
        if (null !== $request->regionConfigList) {
            @$bodyFlat['RegionConfigList'] = $request->regionConfigList;
        }

        if (null !== $request->resourceGroupId) {
            @$body['ResourceGroupId'] = $request->resourceGroupId;
        }

        if (null !== $request->resourceTagList) {
            @$bodyFlat['ResourceTagList'] = $request->resourceTagList;
        }

        if (null !== $request->systemDiskPerformanceLevel) {
            @$body['SystemDiskPerformanceLevel'] = $request->systemDiskPerformanceLevel;
        }

        if (null !== $request->systemDiskSize) {
            @$body['SystemDiskSize'] = $request->systemDiskSize;
        }

        if (null !== $request->templateId) {
            @$body['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateName) {
            @$body['TemplateName'] = $request->templateName;
        }

        if (null !== $request->timerGroupId) {
            @$body['TimerGroupId'] = $request->timerGroupId;
        }

        $body = Dara::merge([
        ], $body, Utils::query($bodyFlat));
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyTemplate',
            'version' => '2020-09-30',
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
     * 模板全量更新.
     *
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
     * Modifies the basic information of a custom cloud computer template, including the template name and template description.
     *
     * @remarks
     * You can use this operation to modify only the name and description of a custom cloud computer template. To change other parameters of the template, use the [ModifyTemplate](~~ModifyTemplate~~) operation.
     *
     * @param request - ModifyTemplateBaseInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyTemplateBaseInfoResponse
     *
     * @param ModifyTemplateBaseInfoRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyTemplateBaseInfoResponse
     */
    public function modifyTemplateBaseInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->templateId) {
            @$body['TemplateId'] = $request->templateId;
        }

        if (null !== $request->templateName) {
            @$body['TemplateName'] = $request->templateName;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ModifyTemplateBaseInfo',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyTemplateBaseInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the basic information of a custom cloud computer template, including the template name and template description.
     *
     * @remarks
     * You can use this operation to modify only the name and description of a custom cloud computer template. To change other parameters of the template, use the [ModifyTemplate](~~ModifyTemplate~~) operation.
     *
     * @param request - ModifyTemplateBaseInfoRequest
     *
     * @returns ModifyTemplateBaseInfoResponse
     *
     * @param ModifyTemplateBaseInfoRequest $request
     *
     * @return ModifyTemplateBaseInfoResponse
     */
    public function modifyTemplateBaseInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTemplateBaseInfoWithOptions($request, $runtime);
    }

    /**
     * Modifies a scheduled task configuration group.
     *
     * @param request - ModifyTimerGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyTimerGroupResponse
     *
     * @param ModifyTimerGroupRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyTimerGroupResponse
     */
    public function modifyTimerGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->configTimers) {
            @$query['ConfigTimers'] = $request->configTimers;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyTimerGroup',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyTimerGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a scheduled task configuration group.
     *
     * @param request - ModifyTimerGroupRequest
     *
     * @returns ModifyTimerGroupResponse
     *
     * @param ModifyTimerGroupRequest $request
     *
     * @return ModifyTimerGroupResponse
     */
    public function modifyTimerGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyTimerGroupWithOptions($request, $runtime);
    }

    /**
     * Grants permissions on cloud desktops to end users, or revokes the permissions from the end users.
     *
     * @remarks
     * You can modify end users only for cloud computers that are in the Running state.
     *
     * @param request - ModifyUserEntitlementRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyUserEntitlementResponse
     *
     * @param ModifyUserEntitlementRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifyUserEntitlementResponse
     */
    public function modifyUserEntitlementWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authorizeDesktopId) {
            @$query['AuthorizeDesktopId'] = $request->authorizeDesktopId;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->revokeDesktopId) {
            @$query['RevokeDesktopId'] = $request->revokeDesktopId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyUserEntitlement',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyUserEntitlementResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Grants permissions on cloud desktops to end users, or revokes the permissions from the end users.
     *
     * @remarks
     * You can modify end users only for cloud computers that are in the Running state.
     *
     * @param request - ModifyUserEntitlementRequest
     *
     * @returns ModifyUserEntitlementResponse
     *
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
     * Replaces the existing authorized users of a cloud computer share with different users.
     *
     * @param request - ModifyUserToDesktopGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyUserToDesktopGroupResponse
     *
     * @param ModifyUserToDesktopGroupRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyUserToDesktopGroupResponse
     */
    public function modifyUserToDesktopGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopGroupId) {
            @$query['DesktopGroupId'] = $request->desktopGroupId;
        }

        if (null !== $request->newEndUserIds) {
            @$query['NewEndUserIds'] = $request->newEndUserIds;
        }

        if (null !== $request->oldEndUserIds) {
            @$query['OldEndUserIds'] = $request->oldEndUserIds;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyUserToDesktopGroup',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyUserToDesktopGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Replaces the existing authorized users of a cloud computer share with different users.
     *
     * @param request - ModifyUserToDesktopGroupRequest
     *
     * @returns ModifyUserToDesktopGroupResponse
     *
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
     * Move files or folders.
     *
     * @param request - MoveCdsFileRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MoveCdsFileResponse
     *
     * @param MoveCdsFileRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return MoveCdsFileResponse
     */
    public function moveCdsFileWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cdsId) {
            @$query['CdsId'] = $request->cdsId;
        }

        if (null !== $request->conflictPolicy) {
            @$query['ConflictPolicy'] = $request->conflictPolicy;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->fileId) {
            @$query['FileId'] = $request->fileId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->parentFolderId) {
            @$query['ParentFolderId'] = $request->parentFolderId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MoveCdsFile',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MoveCdsFileResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Move files or folders.
     *
     * @param request - MoveCdsFileRequest
     *
     * @returns MoveCdsFileResponse
     *
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
     * Restart cloud computers.
     *
     * @remarks
     * The cloud computers that you want to restart must be in the Running state.
     *
     * @param request - RebootDesktopsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RebootDesktopsResponse
     *
     * @param RebootDesktopsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RebootDesktopsResponse
     */
    public function rebootDesktopsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->osUpdate) {
            @$query['OsUpdate'] = $request->osUpdate;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RebootDesktops',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RebootDesktopsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restart cloud computers.
     *
     * @remarks
     * The cloud computers that you want to restart must be in the Running state.
     *
     * @param request - RebootDesktopsRequest
     *
     * @returns RebootDesktopsResponse
     *
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
     * Rebuilds images for one or more cloud computers.
     *
     * @remarks
     * Before you proceed, take note of the following limits:
     * *   You cannot convert a cloud computer\\"s operating system image from one type to another (e.g., Windows to Linux or vice versa) in China (Hong Kong) or overseas regions.
     * *   GPU and non-GPU images are not interchangeable, as graphic-based cloud computers can only use GPU-accelerated images, while other cloud computers are limited to non-GPU-accelerated images.
     * When a cloud computer’s image is updated, the system initializes its system disk by using the new image, resulting in the following effects:
     * *   All data on the original system disk is erased. Snapshots created from the original system disk become unavailable and are automatically deleted.
     * *   If the OS changes, data on the original data disk is cleared, and snapshots created from the original data disk become unavailable and are automatically deleted. If the OS remains the same, data on the original data disk is retained, and snapshots from the original data disk remain available.
     *
     * @param request - RebuildDesktopsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RebuildDesktopsResponse
     *
     * @param RebuildDesktopsRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return RebuildDesktopsResponse
     */
    public function rebuildDesktopsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->afterStatus) {
            @$query['AfterStatus'] = $request->afterStatus;
        }

        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->language) {
            @$query['Language'] = $request->language;
        }

        if (null !== $request->operateType) {
            @$query['OperateType'] = $request->operateType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RebuildDesktops',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RebuildDesktopsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Rebuilds images for one or more cloud computers.
     *
     * @remarks
     * Before you proceed, take note of the following limits:
     * *   You cannot convert a cloud computer\\"s operating system image from one type to another (e.g., Windows to Linux or vice versa) in China (Hong Kong) or overseas regions.
     * *   GPU and non-GPU images are not interchangeable, as graphic-based cloud computers can only use GPU-accelerated images, while other cloud computers are limited to non-GPU-accelerated images.
     * When a cloud computer’s image is updated, the system initializes its system disk by using the new image, resulting in the following effects:
     * *   All data on the original system disk is erased. Snapshots created from the original system disk become unavailable and are automatically deleted.
     * *   If the OS changes, data on the original data disk is cleared, and snapshots created from the original data disk become unavailable and are automatically deleted. If the OS remains the same, data on the original data disk is retained, and snapshots from the original data disk remain available.
     *
     * @param request - RebuildDesktopsRequest
     *
     * @returns RebuildDesktopsResponse
     *
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
     * Removes the file sharing feature of a folder in a cloud disk.
     *
     * @param tmpReq - RemoveFilePermissionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveFilePermissionResponse
     *
     * @param RemoveFilePermissionRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return RemoveFilePermissionResponse
     */
    public function removeFilePermissionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RemoveFilePermissionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->memberList) {
            $request->memberListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->memberList, 'MemberList', 'json');
        }

        $query = [];
        if (null !== $request->cdsId) {
            @$query['CdsId'] = $request->cdsId;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->fileId) {
            @$query['FileId'] = $request->fileId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->memberListShrink) {
            @$query['MemberList'] = $request->memberListShrink;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveFilePermission',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveFilePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes the file sharing feature of a folder in a cloud disk.
     *
     * @param request - RemoveFilePermissionRequest
     *
     * @returns RemoveFilePermissionResponse
     *
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
     * Revokes user access permissions for a cloud computer share. Once access permissions for a cloud computer share are revoked from a user, the user can no longer access any cloud computers within that share.
     *
     * @param request - RemoveUserFromDesktopGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveUserFromDesktopGroupResponse
     *
     * @param RemoveUserFromDesktopGroupRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return RemoveUserFromDesktopGroupResponse
     */
    public function removeUserFromDesktopGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopGroupId) {
            @$query['DesktopGroupId'] = $request->desktopGroupId;
        }

        if (null !== $request->desktopGroupIds) {
            @$query['DesktopGroupIds'] = $request->desktopGroupIds;
        }

        if (null !== $request->endUserIds) {
            @$query['EndUserIds'] = $request->endUserIds;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->userGroupName) {
            @$query['UserGroupName'] = $request->userGroupName;
        }

        if (null !== $request->userOuPath) {
            @$query['UserOuPath'] = $request->userOuPath;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveUserFromDesktopGroup',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveUserFromDesktopGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Revokes user access permissions for a cloud computer share. Once access permissions for a cloud computer share are revoked from a user, the user can no longer access any cloud computers within that share.
     *
     * @param request - RemoveUserFromDesktopGroupRequest
     *
     * @returns RemoveUserFromDesktopGroupResponse
     *
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
     * 移除超卖用户组用户.
     *
     * @param request - RemoveUserFromDesktopOversoldUserGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveUserFromDesktopOversoldUserGroupResponse
     *
     * @param RemoveUserFromDesktopOversoldUserGroupRequest $request
     * @param RuntimeOptions                                $runtime
     *
     * @return RemoveUserFromDesktopOversoldUserGroupResponse
     */
    public function removeUserFromDesktopOversoldUserGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->oversoldGroupId) {
            @$query['OversoldGroupId'] = $request->oversoldGroupId;
        }

        if (null !== $request->userDesktopId) {
            @$query['UserDesktopId'] = $request->userDesktopId;
        }

        if (null !== $request->userGroupId) {
            @$query['UserGroupId'] = $request->userGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveUserFromDesktopOversoldUserGroup',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveUserFromDesktopOversoldUserGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 移除超卖用户组用户.
     *
     * @param request - RemoveUserFromDesktopOversoldUserGroupRequest
     *
     * @returns RemoveUserFromDesktopOversoldUserGroupResponse
     *
     * @param RemoveUserFromDesktopOversoldUserGroupRequest $request
     *
     * @return RemoveUserFromDesktopOversoldUserGroupResponse
     */
    public function removeUserFromDesktopOversoldUserGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeUserFromDesktopOversoldUserGroupWithOptions($request, $runtime);
    }

    /**
     * Renews a shared cloud computer.
     *
     * @param request - RenewDesktopGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenewDesktopGroupResponse
     *
     * @param RenewDesktopGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return RenewDesktopGroupResponse
     */
    public function renewDesktopGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->desktopGroupId) {
            @$query['DesktopGroupId'] = $request->desktopGroupId;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resellerOwnerUid) {
            @$query['ResellerOwnerUid'] = $request->resellerOwnerUid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RenewDesktopGroup',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RenewDesktopGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Renews a shared cloud computer.
     *
     * @param request - RenewDesktopGroupRequest
     *
     * @returns RenewDesktopGroupResponse
     *
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
     * 续费桌面超卖组.
     *
     * @param request - RenewDesktopOversoldGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenewDesktopOversoldGroupResponse
     *
     * @param RenewDesktopOversoldGroupRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RenewDesktopOversoldGroupResponse
     */
    public function renewDesktopOversoldGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->oversoldGroupId) {
            @$query['OversoldGroupId'] = $request->oversoldGroupId;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RenewDesktopOversoldGroup',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RenewDesktopOversoldGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 续费桌面超卖组.
     *
     * @param request - RenewDesktopOversoldGroupRequest
     *
     * @returns RenewDesktopOversoldGroupResponse
     *
     * @param RenewDesktopOversoldGroupRequest $request
     *
     * @return RenewDesktopOversoldGroupResponse
     */
    public function renewDesktopOversoldGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewDesktopOversoldGroupWithOptions($request, $runtime);
    }

    /**
     * Renews monthly subscription cloud computers.
     *
     * @param request - RenewDesktopsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenewDesktopsResponse
     *
     * @param RenewDesktopsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RenewDesktopsResponse
     */
    public function renewDesktopsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->promotionId) {
            @$query['PromotionId'] = $request->promotionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resellerOwnerUid) {
            @$query['ResellerOwnerUid'] = $request->resellerOwnerUid;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RenewDesktops',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RenewDesktopsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Renews monthly subscription cloud computers.
     *
     * @param request - RenewDesktopsRequest
     *
     * @returns RenewDesktopsResponse
     *
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
     * Renews premium bandwidth plans.
     *
     * @param request - RenewNetworkPackagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenewNetworkPackagesResponse
     *
     * @param RenewNetworkPackagesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RenewNetworkPackagesResponse
     */
    public function renewNetworkPackagesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->networkPackageId) {
            @$query['NetworkPackageId'] = $request->networkPackageId;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->promotionId) {
            @$query['PromotionId'] = $request->promotionId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resellerOwnerUid) {
            @$query['ResellerOwnerUid'] = $request->resellerOwnerUid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RenewNetworkPackages',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RenewNetworkPackagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Renews premium bandwidth plans.
     *
     * @param request - RenewNetworkPackagesRequest
     *
     * @returns RenewNetworkPackagesResponse
     *
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
     * Resets cloud computers of a cloud computer share.
     *
     * @remarks
     * >  You can call this operation to reset only cloud computers from a cloud computer share.
     *
     * @param request - ResetDesktopsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetDesktopsResponse
     *
     * @param ResetDesktopsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ResetDesktopsResponse
     */
    public function resetDesktopsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopGroupId) {
            @$query['DesktopGroupId'] = $request->desktopGroupId;
        }

        if (null !== $request->desktopGroupIds) {
            @$query['DesktopGroupIds'] = $request->desktopGroupIds;
        }

        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resetScope) {
            @$query['ResetScope'] = $request->resetScope;
        }

        if (null !== $request->resetType) {
            @$query['ResetType'] = $request->resetType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetDesktops',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetDesktopsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resets cloud computers of a cloud computer share.
     *
     * @remarks
     * >  You can call this operation to reset only cloud computers from a cloud computer share.
     *
     * @param request - ResetDesktopsRequest
     *
     * @returns ResetDesktopsResponse
     *
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
     * Resets the mount target of a File Storage NAS (NAS) file system.
     *
     * @remarks
     * When you create a NAS file system, a mount target is automatically generated. By default, you do not need to modify the mount target of the NAS file system. If the mount target is disabled, you need to reset the mount target of the NAS file system.
     *
     * @param request - ResetNASDefaultMountTargetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetNASDefaultMountTargetResponse
     *
     * @param ResetNASDefaultMountTargetRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ResetNASDefaultMountTargetResponse
     */
    public function resetNASDefaultMountTargetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetNASDefaultMountTarget',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetNASDefaultMountTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resets the mount target of a File Storage NAS (NAS) file system.
     *
     * @remarks
     * When you create a NAS file system, a mount target is automatically generated. By default, you do not need to modify the mount target of the NAS file system. If the mount target is disabled, you need to reset the mount target of the NAS file system.
     *
     * @param request - ResetNASDefaultMountTargetRequest
     *
     * @returns ResetNASDefaultMountTargetResponse
     *
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
     * Restores the data of a disk from a snapshot.
     *
     * @remarks
     * Before you call this operation, make sure that the following operations are performed:
     * *   The data that you want to retain is backed up.
     *     > The disk restoration operation is irreversible. After you call this operation, the disk is restored to the status at the point in time when the snapshot was created. Data that is generated between the snapshot creation time and the current time is lost. Before you restore the disk based on the snapshot, make sure that you back up data.
     * *   The cloud computer to which the disk belongs is stopped.
     *
     * @param request - ResetSnapshotRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetSnapshotResponse
     *
     * @param ResetSnapshotRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ResetSnapshotResponse
     */
    public function resetSnapshotWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->snapshotId) {
            @$query['SnapshotId'] = $request->snapshotId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetSnapshot',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetSnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restores the data of a disk from a snapshot.
     *
     * @remarks
     * Before you call this operation, make sure that the following operations are performed:
     * *   The data that you want to retain is backed up.
     *     > The disk restoration operation is irreversible. After you call this operation, the disk is restored to the status at the point in time when the snapshot was created. Data that is generated between the snapshot creation time and the current time is lost. Before you restore the disk based on the snapshot, make sure that you back up data.
     * *   The cloud computer to which the disk belongs is stopped.
     *
     * @param request - ResetSnapshotRequest
     *
     * @returns ResetSnapshotResponse
     *
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
     * Revokes the coordinate permissions.
     *
     * @param request - RevokeCoordinatePrivilegeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokeCoordinatePrivilegeResponse
     *
     * @param RevokeCoordinatePrivilegeRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RevokeCoordinatePrivilegeResponse
     */
    public function revokeCoordinatePrivilegeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->coId) {
            @$query['CoId'] = $request->coId;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->userType) {
            @$query['UserType'] = $request->userType;
        }

        if (null !== $request->uuid) {
            @$query['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RevokeCoordinatePrivilege',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RevokeCoordinatePrivilegeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Revokes the coordinate permissions.
     *
     * @param request - RevokeCoordinatePrivilegeRequest
     *
     * @returns RevokeCoordinatePrivilegeResponse
     *
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
     * Runs a PowerShell or batch (.bat) script on Windows cloud desktops.
     *
     * @remarks
     * You can use the RunCommand operation to run scripts only on Windows cloud desktops.
     *
     * @param request - RunCommandRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunCommandResponse
     *
     * @param RunCommandRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return RunCommandResponse
     */
    public function runCommandWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->commandContent) {
            @$query['CommandContent'] = $request->commandContent;
        }

        if (null !== $request->contentEncoding) {
            @$query['ContentEncoding'] = $request->contentEncoding;
        }

        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->endUserId) {
            @$query['EndUserId'] = $request->endUserId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RunCommand',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunCommandResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Runs a PowerShell or batch (.bat) script on Windows cloud desktops.
     *
     * @remarks
     * You can use the RunCommand operation to run scripts only on Windows cloud desktops.
     *
     * @param request - RunCommandRequest
     *
     * @returns RunCommandResponse
     *
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
     * Obtains the verification code that is required when you bind an advanced office network to a Cloud Enterprise Network (CEN) instance that belongs to another Alibaba Cloud account.
     *
     * @remarks
     * You must call this operation to obtain the verification code that is required when you bind an advanced office network to a CEN instance that belongs to another Alibaba Cloud account. After you call this operation, the system sends a verification code to the email address associated with the Alibaba Cloud account to which the CEN instance belongs.
     *
     * @param request - SendVerifyCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SendVerifyCodeResponse
     *
     * @param SendVerifyCodeRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SendVerifyCodeResponse
     */
    public function sendVerifyCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->extraInfo) {
            @$query['ExtraInfo'] = $request->extraInfo;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->verifyCodeAction) {
            @$query['VerifyCodeAction'] = $request->verifyCodeAction;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SendVerifyCode',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SendVerifyCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Obtains the verification code that is required when you bind an advanced office network to a Cloud Enterprise Network (CEN) instance that belongs to another Alibaba Cloud account.
     *
     * @remarks
     * You must call this operation to obtain the verification code that is required when you bind an advanced office network to a CEN instance that belongs to another Alibaba Cloud account. After you call this operation, the system sends a verification code to the email address associated with the Alibaba Cloud account to which the CEN instance belongs.
     *
     * @param request - SendVerifyCodeRequest
     *
     * @returns SendVerifyCodeResponse
     *
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
     * Configures an auto scaling policy for a multi-session cloud computer. Elastic Desktop Service allows multiple end users to share a cloud computer in a multi-session cloud computer pool. This helps save costs.
     *
     * @param request - SetDesktopGroupScaleTimerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDesktopGroupScaleTimerResponse
     *
     * @param SetDesktopGroupScaleTimerRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return SetDesktopGroupScaleTimerResponse
     */
    public function setDesktopGroupScaleTimerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopGroupId) {
            @$query['DesktopGroupId'] = $request->desktopGroupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->scaleTimerInfos) {
            @$query['ScaleTimerInfos'] = $request->scaleTimerInfos;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetDesktopGroupScaleTimer',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDesktopGroupScaleTimerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures an auto scaling policy for a multi-session cloud computer. Elastic Desktop Service allows multiple end users to share a cloud computer in a multi-session cloud computer pool. This helps save costs.
     *
     * @param request - SetDesktopGroupScaleTimerRequest
     *
     * @returns SetDesktopGroupScaleTimerResponse
     *
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
     * Configures a scheduled start, stop, restart, or reset task for a cloud computer share.
     *
     * @param request - SetDesktopGroupTimerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDesktopGroupTimerResponse
     *
     * @param SetDesktopGroupTimerRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return SetDesktopGroupTimerResponse
     */
    public function setDesktopGroupTimerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cronExpression) {
            @$query['CronExpression'] = $request->cronExpression;
        }

        if (null !== $request->desktopGroupId) {
            @$query['DesktopGroupId'] = $request->desktopGroupId;
        }

        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resetType) {
            @$query['ResetType'] = $request->resetType;
        }

        if (null !== $request->timerType) {
            @$query['TimerType'] = $request->timerType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetDesktopGroupTimer',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDesktopGroupTimerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures a scheduled start, stop, restart, or reset task for a cloud computer share.
     *
     * @param request - SetDesktopGroupTimerRequest
     *
     * @returns SetDesktopGroupTimerResponse
     *
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
     * Sets the status of a scheduled task for a cloud computer share, such as enabling or disabling it.
     *
     * @param request - SetDesktopGroupTimerStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDesktopGroupTimerStatusResponse
     *
     * @param SetDesktopGroupTimerStatusRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return SetDesktopGroupTimerStatusResponse
     */
    public function setDesktopGroupTimerStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopGroupId) {
            @$query['DesktopGroupId'] = $request->desktopGroupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->timerType) {
            @$query['TimerType'] = $request->timerType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetDesktopGroupTimerStatus',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDesktopGroupTimerStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets the status of a scheduled task for a cloud computer share, such as enabling or disabling it.
     *
     * @param request - SetDesktopGroupTimerStatusRequest
     *
     * @returns SetDesktopGroupTimerStatusResponse
     *
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
     * 设置桌面维护模式.
     *
     * @param request - SetDesktopMaintenanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDesktopMaintenanceResponse
     *
     * @param SetDesktopMaintenanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetDesktopMaintenanceResponse
     */
    public function setDesktopMaintenanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopIds) {
            @$query['DesktopIds'] = $request->desktopIds;
        }

        if (null !== $request->mode) {
            @$query['Mode'] = $request->mode;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetDesktopMaintenance',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDesktopMaintenanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 设置桌面维护模式.
     *
     * @param request - SetDesktopMaintenanceRequest
     *
     * @returns SetDesktopMaintenanceResponse
     *
     * @param SetDesktopMaintenanceRequest $request
     *
     * @return SetDesktopMaintenanceResponse
     */
    public function setDesktopMaintenance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setDesktopMaintenanceWithOptions($request, $runtime);
    }

    /**
     * Configures the single sign-on (SSO) status of an Active Directory (AD) directory.
     *
     * @remarks
     * This operation is supported only for AD directories, not for RAM directories.
     *
     * @param request - SetDirectorySsoStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetDirectorySsoStatusResponse
     *
     * @param SetDirectorySsoStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetDirectorySsoStatusResponse
     */
    public function setDirectorySsoStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->enableSso) {
            @$query['EnableSso'] = $request->enableSso;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetDirectorySsoStatus',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetDirectorySsoStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures the single sign-on (SSO) status of an Active Directory (AD) directory.
     *
     * @remarks
     * This operation is supported only for AD directories, not for RAM directories.
     *
     * @param request - SetDirectorySsoStatusRequest
     *
     * @returns SetDirectorySsoStatusResponse
     *
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
     * Uploads the metadata of a Security Assertion Markup Language (SAML) 2.0-based identity provider (IdP).
     *
     * @remarks
     * You can call this operation only for workspaces of the Active Directory (AD) and convenience account types.
     *
     * @param request - SetIdpMetadataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetIdpMetadataResponse
     *
     * @param SetIdpMetadataRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return SetIdpMetadataResponse
     */
    public function setIdpMetadataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->directoryId) {
            @$query['DirectoryId'] = $request->directoryId;
        }

        if (null !== $request->idpMetadata) {
            @$query['IdpMetadata'] = $request->idpMetadata;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetIdpMetadata',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetIdpMetadataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uploads the metadata of a Security Assertion Markup Language (SAML) 2.0-based identity provider (IdP).
     *
     * @remarks
     * You can call this operation only for workspaces of the Active Directory (AD) and convenience account types.
     *
     * @param request - SetIdpMetadataRequest
     *
     * @returns SetIdpMetadataResponse
     *
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
     * Enables or disables single sign-on (SSO) for a workspace.
     *
     * @param request - SetOfficeSiteSsoStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetOfficeSiteSsoStatusResponse
     *
     * @param SetOfficeSiteSsoStatusRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return SetOfficeSiteSsoStatusResponse
     */
    public function setOfficeSiteSsoStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->enableSso) {
            @$query['EnableSso'] = $request->enableSso;
        }

        if (null !== $request->officeSiteId) {
            @$query['OfficeSiteId'] = $request->officeSiteId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetOfficeSiteSsoStatus',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetOfficeSiteSsoStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables single sign-on (SSO) for a workspace.
     *
     * @param request - SetOfficeSiteSsoStatusRequest
     *
     * @returns SetOfficeSiteSsoStatusResponse
     *
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
     * Configures directories in the blacklist and whitelist based on the user profile management (UPM) feature.
     *
     * @param tmpReq - SetUserProfilePathRulesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetUserProfilePathRulesResponse
     *
     * @param SetUserProfilePathRulesRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return SetUserProfilePathRulesResponse
     */
    public function setUserProfilePathRulesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SetUserProfilePathRulesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->userProfilePathRule) {
            $request->userProfilePathRuleShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->userProfilePathRule, 'UserProfilePathRule', 'json');
        }

        $query = [];
        if (null !== $request->desktopGroupId) {
            @$query['DesktopGroupId'] = $request->desktopGroupId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->userProfilePathRuleShrink) {
            @$query['UserProfilePathRule'] = $request->userProfilePathRuleShrink;
        }

        if (null !== $request->userProfileRuleType) {
            @$query['UserProfileRuleType'] = $request->userProfileRuleType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetUserProfilePathRules',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetUserProfilePathRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures directories in the blacklist and whitelist based on the user profile management (UPM) feature.
     *
     * @param request - SetUserProfilePathRulesRequest
     *
     * @returns SetUserProfilePathRulesResponse
     *
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
     * Starts stopped cloud computers. After the API operation is successfully called, the cloud computers enter the Running state.
     *
     * @remarks
     * The cloud computers that you want to start must be in the Stopped state.
     *
     * @param request - StartDesktopsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartDesktopsResponse
     *
     * @param StartDesktopsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StartDesktopsResponse
     */
    public function startDesktopsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartDesktops',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartDesktopsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts stopped cloud computers. After the API operation is successfully called, the cloud computers enter the Running state.
     *
     * @remarks
     * The cloud computers that you want to start must be in the Stopped state.
     *
     * @param request - StartDesktopsRequest
     *
     * @returns StartDesktopsResponse
     *
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
     * Stop cloud computers that are in the Running state. After the operation is successfully called, the cloud computers enter the Stopped state.
     *
     * @remarks
     * The cloud computers that you want to stop must be in the Running state.
     *
     * @param request - StopDesktopsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopDesktopsResponse
     *
     * @param StopDesktopsRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StopDesktopsResponse
     */
    public function stopDesktopsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->osUpdate) {
            @$query['OsUpdate'] = $request->osUpdate;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->stoppedMode) {
            @$query['StoppedMode'] = $request->stoppedMode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopDesktops',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopDesktopsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stop cloud computers that are in the Running state. After the operation is successfully called, the cloud computers enter the Stopped state.
     *
     * @remarks
     * The cloud computers that you want to stop must be in the Running state.
     *
     * @param request - StopDesktopsRequest
     *
     * @returns StopDesktopsResponse
     *
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
     * Stops a Cloud Assistant command that is running on one or more cloud desktops.
     *
     * @remarks
     * When you stop a one-time execution of a command, the command continues to run on the cloud desktops where it has started to run, and will not run on the cloud desktops where it has not started to run.
     *
     * @param request - StopInvocationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopInvocationResponse
     *
     * @param StopInvocationRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return StopInvocationResponse
     */
    public function stopInvocationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->invokeId) {
            @$query['InvokeId'] = $request->invokeId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopInvocation',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopInvocationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops a Cloud Assistant command that is running on one or more cloud desktops.
     *
     * @remarks
     * When you stop a one-time execution of a command, the command continues to run on the cloud desktops where it has started to run, and will not run on the cloud desktops where it has not started to run.
     *
     * @param request - StopInvocationRequest
     *
     * @returns StopInvocationResponse
     *
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
     * Adds tags to cloud computers. This allows you to filter and manage cloud computers by tag.
     *
     * @remarks
     * If TagKey is specified, the new TagValue value overrides the original TagValue value.
     *
     * @param request - TagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns TagResourcesResponse
     *
     * @param TagResourcesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'TagResources',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds tags to cloud computers. This allows you to filter and manage cloud computers by tag.
     *
     * @remarks
     * If TagKey is specified, the new TagValue value overrides the original TagValue value.
     *
     * @param request - TagResourcesRequest
     *
     * @returns TagResourcesResponse
     *
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
     * Unbinds a configuration group from resources.
     *
     * @param request - UnbindConfigGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindConfigGroupResponse
     *
     * @param UnbindConfigGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UnbindConfigGroupResponse
     */
    public function unbindConfigGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceInfos) {
            @$query['ResourceInfos'] = $request->resourceInfos;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnbindConfigGroup',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnbindConfigGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unbinds a configuration group from resources.
     *
     * @param request - UnbindConfigGroupRequest
     *
     * @returns UnbindConfigGroupResponse
     *
     * @param UnbindConfigGroupRequest $request
     *
     * @return UnbindConfigGroupResponse
     */
    public function unbindConfigGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindConfigGroupWithOptions($request, $runtime);
    }

    /**
     * 解绑用户桌面.
     *
     * @param request - UnbindUserDesktopRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnbindUserDesktopResponse
     *
     * @param UnbindUserDesktopRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return UnbindUserDesktopResponse
     */
    public function unbindUserDesktopWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopAgentIds) {
            @$query['DesktopAgentIds'] = $request->desktopAgentIds;
        }

        if (null !== $request->desktopGroupId) {
            @$query['DesktopGroupId'] = $request->desktopGroupId;
        }

        if (null !== $request->desktopIds) {
            @$query['DesktopIds'] = $request->desktopIds;
        }

        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        if (null !== $request->reason) {
            @$query['Reason'] = $request->reason;
        }

        if (null !== $request->userDesktopIds) {
            @$query['UserDesktopIds'] = $request->userDesktopIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnbindUserDesktop',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnbindUserDesktopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 解绑用户桌面.
     *
     * @param request - UnbindUserDesktopRequest
     *
     * @returns UnbindUserDesktopResponse
     *
     * @param UnbindUserDesktopRequest $request
     *
     * @return UnbindUserDesktopResponse
     */
    public function unbindUserDesktop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unbindUserDesktopWithOptions($request, $runtime);
    }

    /**
     * Unlocks a virtual multi-factor authentication (MFA) device that is in the LOCKED state.
     *
     * @param request - UnlockVirtualMFADeviceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnlockVirtualMFADeviceResponse
     *
     * @param UnlockVirtualMFADeviceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return UnlockVirtualMFADeviceResponse
     */
    public function unlockVirtualMFADeviceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->serialNumber) {
            @$query['SerialNumber'] = $request->serialNumber;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnlockVirtualMFADevice',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnlockVirtualMFADeviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unlocks a virtual multi-factor authentication (MFA) device that is in the LOCKED state.
     *
     * @param request - UnlockVirtualMFADeviceRequest
     *
     * @returns UnlockVirtualMFADeviceResponse
     *
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
     * Removes tags from cloud computers. After you remove a tag, if the tag is not added to a cloud computer, the tag is automatically deleted.
     *
     * @param request - UntagResourcesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UntagResourcesResponse
     *
     * @param UntagResourcesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->all) {
            @$query['All'] = $request->all;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        if (null !== $request->resourceType) {
            @$query['ResourceType'] = $request->resourceType;
        }

        if (null !== $request->tagKey) {
            @$query['TagKey'] = $request->tagKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UntagResources',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes tags from cloud computers. After you remove a tag, if the tag is not added to a cloud computer, the tag is automatically deleted.
     *
     * @param request - UntagResourcesRequest
     *
     * @returns UntagResourcesResponse
     *
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
     * Enables or disables the auto-push feature for an image update task.
     *
     * @remarks
     * You can call this operation to manage each image update task. This operation is valid only when the auto-update switch in the image update module for global image updates is turned off. If the auto-update switch is turned on, the switches for each image update task are always turned on. If you want to turn on or off the auto-update switch, go to the Elastic Desktop Service console and choose **Operations > Image Updates** in the left-side navigation pane.
     *
     * @param request - UpdateFotaTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateFotaTaskResponse
     *
     * @param UpdateFotaTaskRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateFotaTaskResponse
     */
    public function updateFotaTaskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->taskUid) {
            @$query['TaskUid'] = $request->taskUid;
        }

        if (null !== $request->userStatus) {
            @$query['UserStatus'] = $request->userStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateFotaTask',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateFotaTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables or disables the auto-push feature for an image update task.
     *
     * @remarks
     * You can call this operation to manage each image update task. This operation is valid only when the auto-update switch in the image update module for global image updates is turned off. If the auto-update switch is turned on, the switches for each image update task are always turned on. If you want to turn on or off the auto-update switch, go to the Elastic Desktop Service console and choose **Operations > Image Updates** in the left-side navigation pane.
     *
     * @param request - UpdateFotaTaskRequest
     *
     * @returns UpdateFotaTaskResponse
     *
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
     * Uploads your custom Windows image.
     *
     * @remarks
     * >  You can upload only Windows images.
     *
     * @param request - UploadImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadImageResponse
     *
     * @param UploadImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return UploadImageResponse
     */
    public function uploadImageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dataDiskSize) {
            @$query['DataDiskSize'] = $request->dataDiskSize;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->enableSecurityCheck) {
            @$query['EnableSecurityCheck'] = $request->enableSecurityCheck;
        }

        if (null !== $request->gpuCategory) {
            @$query['GpuCategory'] = $request->gpuCategory;
        }

        if (null !== $request->gpuDriverType) {
            @$query['GpuDriverType'] = $request->gpuDriverType;
        }

        if (null !== $request->imageName) {
            @$query['ImageName'] = $request->imageName;
        }

        if (null !== $request->licenseType) {
            @$query['LicenseType'] = $request->licenseType;
        }

        if (null !== $request->osType) {
            @$query['OsType'] = $request->osType;
        }

        if (null !== $request->ossObjectPath) {
            @$query['OssObjectPath'] = $request->ossObjectPath;
        }

        if (null !== $request->protocolType) {
            @$query['ProtocolType'] = $request->protocolType;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->systemDiskSize) {
            @$query['SystemDiskSize'] = $request->systemDiskSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UploadImage',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Uploads your custom Windows image.
     *
     * @remarks
     * >  You can upload only Windows images.
     *
     * @param request - UploadImageRequest
     *
     * @returns UploadImageResponse
     *
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
     * Verifies the ID of a Cloud Enterprise Network (CEN) instance and the ID of the Alibaba Cloud account to which the instance belongs and checks whether a CIDR block conflict exists between the routes of the instance and the IPv4 CIDR blocks of the associated office network.
     *
     * @param request - VerifyCenRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns VerifyCenResponse
     *
     * @param VerifyCenRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return VerifyCenResponse
     */
    public function verifyCenWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cenId) {
            @$query['CenId'] = $request->cenId;
        }

        if (null !== $request->cenOwnerId) {
            @$query['CenOwnerId'] = $request->cenOwnerId;
        }

        if (null !== $request->cidrBlock) {
            @$query['CidrBlock'] = $request->cidrBlock;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        if (null !== $request->verifyCode) {
            @$query['VerifyCode'] = $request->verifyCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'VerifyCen',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return VerifyCenResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Verifies the ID of a Cloud Enterprise Network (CEN) instance and the ID of the Alibaba Cloud account to which the instance belongs and checks whether a CIDR block conflict exists between the routes of the instance and the IPv4 CIDR blocks of the associated office network.
     *
     * @param request - VerifyCenRequest
     *
     * @returns VerifyCenResponse
     *
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
     * Wakes up cloud computers.
     *
     * @remarks
     * Only cloud computers that are in the Hibernated state can be waked up.
     *
     * @param request - WakeupDesktopsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns WakeupDesktopsResponse
     *
     * @param WakeupDesktopsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return WakeupDesktopsResponse
     */
    public function wakeupDesktopsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->desktopId) {
            @$query['DesktopId'] = $request->desktopId;
        }

        if (null !== $request->regionId) {
            @$query['RegionId'] = $request->regionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'WakeupDesktops',
            'version' => '2020-09-30',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return WakeupDesktopsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Wakes up cloud computers.
     *
     * @remarks
     * Only cloud computers that are in the Hibernated state can be waked up.
     *
     * @param request - WakeupDesktopsRequest
     *
     * @returns WakeupDesktopsResponse
     *
     * @param WakeupDesktopsRequest $request
     *
     * @return WakeupDesktopsResponse
     */
    public function wakeupDesktops($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->wakeupDesktopsWithOptions($request, $runtime);
    }
}
