<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\Ens\V20171110\Models\AccosicateNetworkAclRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AccosicateNetworkAclResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\AddBackendServersRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AddBackendServersResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\AddBackendServersShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AddNetworkInterfaceToInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AddNetworkInterfaceToInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\AddSnatIpForSnatEntryRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AddSnatIpForSnatEntryResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\AssignPrivateIpAddressesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AssignPrivateIpAddressesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\AssociateEnsEipAddressRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AssociateEnsEipAddressResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\AssociateHaVipRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AssociateHaVipResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\AttachDiskRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AttachDiskResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\AttachEnsInstancesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AttachEnsInstancesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\AttachInstanceSDGRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AttachInstanceSDGResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\AttachInstanceSDGShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AttachNetworkInterfaceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AttachNetworkInterfaceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\AuthorizeSecurityGroupEgressRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AuthorizeSecurityGroupEgressResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\AuthorizeSecurityGroupRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AuthorizeSecurityGroupResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\BatchEventMigrateInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\BatchEventMigrateInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\BatchEventMigrateInstanceShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\BatchEventRebootInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\BatchEventRebootInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\BatchEventRebootInstanceShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\BatchEventRedeployInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\BatchEventRedeployInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\BatchEventRedeployInstanceShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CleanDistDataRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CleanDistDataResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CopySDGRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CopySDGResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CopySDGShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CopySnapshotRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CopySnapshotResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CopySnapshotShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateApplicationRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateApplicationResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateARMServerInstancesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateARMServerInstancesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateClassicNetworkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateClassicNetworkResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateClusterRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateClusterResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateClusterShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateDiskRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateDiskResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateEipInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateEipInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateEnsRouteEntryRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateEnsRouteEntryResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateEnsSaleControlRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateEnsSaleControlResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateEnsSaleControlShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateEnsServiceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateEnsServiceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateEpnInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateEpnInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateFileSystemRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateFileSystemResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateFileSystemShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateForwardEntryRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateForwardEntryResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateHaVipRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateHaVipResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateImageRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateImageResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateInstanceActiveOpsTaskRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateInstanceActiveOpsTaskResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateInstanceActiveOpsTaskShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateKeyPairRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateKeyPairResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateLoadBalancerHTTPListenerRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateLoadBalancerHTTPListenerResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateLoadBalancerHTTPSListenerRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateLoadBalancerHTTPSListenerResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateLoadBalancerRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateLoadBalancerResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateLoadBalancerTCPListenerRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateLoadBalancerTCPListenerResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateLoadBalancerUDPListenerRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateLoadBalancerUDPListenerResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateMountTargetRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateMountTargetResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateNatGatewayRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateNatGatewayResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateNetworkAclEntryRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateNetworkAclEntryResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateNetworkAclRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateNetworkAclResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateNetworkInterfaceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateNetworkInterfaceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateNetworkInterfaceShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateNetworkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateNetworkResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateSDGRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateSDGResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateSecurityGroupPermissionsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateSecurityGroupPermissionsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateSecurityGroupPermissionsShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateSecurityGroupRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateSecurityGroupResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateSecurityGroupShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateSnapshotRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateSnapshotResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateSnatEntryRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateSnatEntryResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateStorageGatewayRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateStorageGatewayResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateStorageGatewayShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateStorageVolumeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateStorageVolumeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateVSwitchRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateVSwitchResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteAICPublicKeyRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteAICPublicKeyResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteApplicationRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteApplicationResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteBucketLifecycleRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteBucketLifecycleResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteBucketRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteBucketResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteDiskRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteDiskResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteEipRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteEipResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteEnsRouteEntryRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteEnsRouteEntryResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteEnsSaleConditionControlRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteEnsSaleConditionControlResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteEnsSaleConditionControlShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteEnsSaleControlRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteEnsSaleControlResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteEnsSaleControlShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteEpnInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteEpnInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteFileSystemRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteFileSystemResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteForwardEntryRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteForwardEntryResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteHaVipsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteHaVipsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteHaVipsShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteImageRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteImageResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteKeyPairsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteKeyPairsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteLoadBalancerListenerRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteLoadBalancerListenerResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteMountTargetRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteMountTargetResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteNatGatewayRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteNatGatewayResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteNetworkAclEntryRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteNetworkAclEntryResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteNetworkAclRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteNetworkAclResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteNetworkInterfacesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteNetworkInterfacesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteNetworkInterfacesShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteNetworkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteNetworkResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteObjectRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteObjectResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSDGRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSDGResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSDGShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSecurityGroupPermissionsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSecurityGroupPermissionsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSecurityGroupPermissionsShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSecurityGroupRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSecurityGroupResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSnapshotRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSnapshotResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSnatEntryRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSnatEntryResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSnatIpForSnatEntryRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSnatIpForSnatEntryResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteStorageGatewayRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteStorageGatewayResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteStorageVolumeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteStorageVolumeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteVSwitchRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteVSwitchResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeployInstanceSDGRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeployInstanceSDGResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeployInstanceSDGShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeploySDGRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeploySDGResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeploySDGShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAICImagesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAICImagesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeApplicationRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeApplicationResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeARMServerInstancesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeARMServerInstancesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeARMServerInstancesShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceInfoResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeBandwitdhByInternetChargeTypeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeBandwitdhByInternetChargeTypeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeBandWithdChargeTypeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeCloudDiskAvailableResourceInfoResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeCloudDiskTypesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeCloudDiskTypesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeCloudDiskTypesShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeClusterKubeConfigRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeClusterKubeConfigResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeClusterRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeClusterResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeCreatePrePaidInstanceResultRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeCreatePrePaidInstanceResultResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDistResultRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDistResultResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDistResultShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDownloadURLRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDownloadURLResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataPushResultRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataPushResultResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDeviceServiceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDeviceServiceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDiskIopsListRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDiskIopsListResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDisksRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDisksResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeElbAvailableResourceInfoResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsCommodityCodeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsCommodityCodeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsCommodityModuleCodeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsCommodityModuleCodeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsEipAddressesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsEipAddressesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsNetDistrictRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsNetDistrictResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsNetLevelResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsNetSaleDistrictRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsNetSaleDistrictResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRegionIdIpv6InfoRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRegionIdIpv6InfoResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRegionIdResourceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRegionIdResourceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRegionsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRegionsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsResourceUsageRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsResourceUsageResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRouteEntryListRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRouteEntryListResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRouteTablesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRouteTablesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlAvailableResourceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlAvailableResourceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlStockRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlStockResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnBandWidthDataRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnBandWidthDataResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnBandwitdhByInternetChargeTypeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnBandwitdhByInternetChargeTypeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnInstanceAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnInstanceAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnInstancesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnInstancesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnMeasurementDataRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEpnMeasurementDataResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeExportImageInfoRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeExportImageInfoResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeExportImageStatusRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeExportImageStatusResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeFileSystemsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeFileSystemsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeForwardEntryAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeForwardEntryAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeForwardTableEntriesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeForwardTableEntriesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeHaVipsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeHaVipsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeHistoryEventsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeHistoryEventsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeHistoryEventsShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImageInfosRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImageInfosResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImageSharePermissionRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImageSharePermissionResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImagesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImagesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceAutoRenewAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceAutoRenewAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceBandwidthDetailRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceBandwidthDetailResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceBootConfigurationRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceBootConfigurationResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceMonitorDataRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceMonitorDataResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceSDGStatusRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceSDGStatusResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceSDGStatusShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceSpecResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceTypesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceVncUrlRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceVncUrlResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeKeyPairsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeKeyPairsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerHTTPListenerAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerHTTPListenerAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerHTTPSListenerAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerHTTPSListenerAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerListenersRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerListenersResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerListenMonitorRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerListenMonitorResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerSpecRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerSpecResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancersRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancersResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerTCPListenerAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerTCPListenerAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerUDPListenerAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerUDPListenerAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeMeasurementDataRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeMeasurementDataResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeMountTargetsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeMountTargetsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNASAvailableResourceInfoResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNatGatewaysRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNatGatewaysResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNCInformationRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNCInformationResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAclsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAclsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkInterfacesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkInterfacesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworksRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworksResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribePrePaidInstanceStockRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribePrePaidInstanceStockResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribePriceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribePriceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribePriceShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeRegionIspsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeRegionIspsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeRegionResourceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeRegionResourceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeReservedResourceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeResourceTimelineRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeResourceTimelineResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSDGDeploymentStatusRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSDGDeploymentStatusResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSDGDeploymentStatusShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSDGRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSDGResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSDGSharedDisksRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSDGSharedDisksResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSDGShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSDGsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSDGsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSDGsShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSecondaryPublicIpAddressesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSecondaryPublicIpAddressesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSecurityGroupAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSecurityGroupAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSecurityGroupsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSecurityGroupsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSelfImagesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSelfImagesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeServcieScheduleRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeServcieScheduleResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeServerLoadBalancerListenMonitorRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeServerLoadBalancerListenMonitorResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeServerLoadBalancerMonitorRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeServerLoadBalancerMonitorResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSnapshotsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSnapshotsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSnatAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSnatAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSnatTableEntriesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSnatTableEntriesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeStorageGatewayRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeStorageGatewayResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeStorageVolumeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeStorageVolumeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeUserBandWidthDataRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeUserBandWidthDataResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeVSwitchAttributesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeVSwitchAttributesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeVSwitchesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeVSwitchesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DetachDiskRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DetachDiskResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DetachInstanceSDGRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DetachInstanceSDGResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DetachInstanceSDGShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DetachNetworkInterfaceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DetachNetworkInterfaceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DistApplicationDataRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DistApplicationDataResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\EventMigrateInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\EventMigrateInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\EventRebootInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\EventRebootInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\EventRedeployInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\EventRedeployInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ExportBillDetailDataRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ExportBillDetailDataResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ExportImageRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ExportImageResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ExportMeasurementDataRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ExportMeasurementDataResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\GetBucketAclRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\GetBucketAclResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\GetBucketInfoRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\GetBucketInfoResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\GetBucketLifecycleRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\GetBucketLifecycleResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\GetOssStorageAndAccByBucketsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\GetOssStorageAndAccByBucketsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\GetOssUsageDataRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\GetOssUsageDataResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ImportImageRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ImportImageResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ImportImageShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ImportKeyPairRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ImportKeyPairResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\JoinPublicIpsToEpnInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\JoinPublicIpsToEpnInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\JoinSecurityGroupRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\JoinSecurityGroupResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\JoinVSwitchesToEpnInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\JoinVSwitchesToEpnInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\LeaveSecurityGroupRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\LeaveSecurityGroupResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ListAICPublicKeyDeliveriesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ListAICPublicKeyDeliveriesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ListAICPublicKeysRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ListAICPublicKeysResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ListApplicationsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ListApplicationsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ListBucketsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ListBucketsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ListObjectsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ListObjectsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ListProductAbilitiesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ManageAICLoginRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ManageAICLoginResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyEnsEipAddressAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyEnsEipAddressAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyEnsRouteEntryRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyEnsRouteEntryResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyEpnInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyEpnInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyFileSystemRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyFileSystemResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyForwardEntryRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyForwardEntryResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyHaVipAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyHaVipAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyImageAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyImageAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyImageSharePermissionRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyImageSharePermissionResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyInstanceAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyInstanceAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyInstanceAutoRenewAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyInstanceAutoRenewAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyInstanceBootConfigurationRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyInstanceBootConfigurationResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyInstanceChargeTypeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyInstanceChargeTypeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyInstanceChargeTypeShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyInstanceNetworkAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyInstanceNetworkAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyLoadBalancerAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyLoadBalancerAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyNetworkAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyNetworkAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyNetworkInterfaceAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyNetworkInterfaceAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyPrepayInstanceSpecRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyPrepayInstanceSpecResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifySecurityGroupAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifySecurityGroupAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifySnapshotAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifySnapshotAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifySnatEntryRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifySnatEntryResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyVSwitchAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyVSwitchAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\MountInstanceSDGRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\MountInstanceSDGResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\MountInstanceSDGShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\PreloadRegionSDGRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\PreloadRegionSDGResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\PreloadRegionSDGShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\PrepareUploadRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\PrepareUploadResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\PushApplicationDataRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\PushApplicationDataResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\PutBucketAclRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\PutBucketAclResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\PutBucketLifecycleRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\PutBucketLifecycleResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\PutBucketRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\PutBucketResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RebootAICInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RebootAICInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RebootAICInstanceShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RebootARMServerInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RebootARMServerInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RebootInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RebootInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RebootInstancesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RebootInstancesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RebootInstancesShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RecoverAICInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RecoverAICInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ReInitDiskRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ReInitDiskResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ReinitInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ReinitInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ReinitInstancesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ReinitInstancesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ReinitInstancesShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ReleaseAICInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ReleaseAICInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ReleaseARMServerInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ReleaseARMServerInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ReleaseInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ReleaseInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ReleasePostPaidInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ReleasePostPaidInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ReleasePrePaidInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ReleasePrePaidInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RemoveBackendServersRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RemoveBackendServersResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RemoveBackendServersShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RemoveInstanceSDGRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RemoveInstanceSDGResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RemoveInstanceSDGShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RemovePublicIpsFromEpnInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RemovePublicIpsFromEpnInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RemoveSDGRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RemoveSDGResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RemoveSDGShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RemoveSDGsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RemoveSDGsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RemoveSDGsShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RemoveVSwitchesFromEpnInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RemoveVSwitchesFromEpnInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RenewARMServerInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RenewARMServerInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RenewInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RenewInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RescaleApplicationRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RescaleApplicationResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RescaleDeviceServiceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RescaleDeviceServiceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ResetAICInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ResetAICInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ResetDiskRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ResetDiskResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ResizeDiskRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ResizeDiskResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RevokeSecurityGroupEgressRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RevokeSecurityGroupEgressResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RevokeSecurityGroupRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RevokeSecurityGroupResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RollbackApplicationRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RollbackApplicationResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RunInstancesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RunInstancesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RunInstancesShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RunServiceScheduleRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RunServiceScheduleResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\SaveSDGRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\SaveSDGResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\SetBackendServersRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\SetBackendServersResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\SetBackendServersShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\SetLoadBalancerHTTPListenerAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\SetLoadBalancerHTTPListenerAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\SetLoadBalancerHTTPSListenerAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\SetLoadBalancerHTTPSListenerAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\SetLoadBalancerStatusRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\SetLoadBalancerStatusResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\SetLoadBalancerTCPListenerAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\SetLoadBalancerTCPListenerAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\SetLoadBalancerUDPListenerAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\SetLoadBalancerUDPListenerAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ShareAICImageRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ShareAICImageResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ShareAICImageShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\StartEpnInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\StartEpnInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\StartInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\StartInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\StartInstancesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\StartInstancesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\StartInstancesShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\StartLoadBalancerListenerRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\StartLoadBalancerListenerResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\StartSnatIpForSnatEntryRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\StartSnatIpForSnatEntryResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\StopEpnInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\StopEpnInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\StopInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\StopInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\StopInstancesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\StopInstancesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\StopInstancesShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\StopLoadBalancerListenerRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\StopLoadBalancerListenerResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\StopSnatIpForSnatEntryRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\StopSnatIpForSnatEntryResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\UnassignPrivateIpAddressesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\UnassignPrivateIpAddressesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\UnAssociateEnsEipAddressRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\UnAssociateEnsEipAddressResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\UnassociateHaVipRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\UnassociateHaVipResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\UnassociateNetworkAclRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\UnassociateNetworkAclResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\UnloadRegionSDGRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\UnloadRegionSDGResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\UnloadRegionSDGShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\UnmountInstanceSDGRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\UnmountInstanceSDGResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\UnmountInstanceSDGShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\UntagResourcesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\UpdateEnsSaleControlRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\UpdateEnsSaleControlResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\UpdateEnsSaleControlShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\UpgradeAICInstanceImageRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\UpgradeAICInstanceImageResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\UpgradeAICInstanceImageShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\UpgradeApplicationRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\UpgradeApplicationResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\UploadAICPublicKeyRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\UploadAICPublicKeyResponse;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

class Ens extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ens', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * Associates a network access control list (ACL) with a network.
     *
     * @param request - AccosicateNetworkAclRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AccosicateNetworkAclResponse
     *
     * @param AccosicateNetworkAclRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AccosicateNetworkAclResponse
     */
    public function accosicateNetworkAclWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->networkAclId) {
            @$query['NetworkAclId'] = $request->networkAclId;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AccosicateNetworkAcl',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AccosicateNetworkAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associates a network access control list (ACL) with a network.
     *
     * @param request - AccosicateNetworkAclRequest
     *
     * @returns AccosicateNetworkAclResponse
     *
     * @param AccosicateNetworkAclRequest $request
     *
     * @return AccosicateNetworkAclResponse
     */
    public function accosicateNetworkAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->accosicateNetworkAclWithOptions($request, $runtime);
    }

    /**
     * Adds backend servers.
     *
     * @remarks
     *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 10 times per second per account.
     *
     * @param tmpReq - AddBackendServersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddBackendServersResponse
     *
     * @param AddBackendServersRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return AddBackendServersResponse
     */
    public function addBackendServersWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AddBackendServersShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->backendServers) {
            $request->backendServersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->backendServers, 'BackendServers', 'json');
        }

        $query = [];
        if (null !== $request->backendServersShrink) {
            @$query['BackendServers'] = $request->backendServersShrink;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddBackendServers',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddBackendServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds backend servers.
     *
     * @remarks
     *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 10 times per second per account.
     *
     * @param request - AddBackendServersRequest
     *
     * @returns AddBackendServersResponse
     *
     * @param AddBackendServersRequest $request
     *
     * @return AddBackendServersResponse
     */
    public function addBackendServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addBackendServersWithOptions($request, $runtime);
    }

    /**
     * Adds an IPv6 network interface controller (NIC). A public IP address is automatically assigned at the same time.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 5 times per second per user.
     * *   Internal networks and IPv4 addresses are not supported.
     *
     * @param request - AddNetworkInterfaceToInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddNetworkInterfaceToInstanceResponse
     *
     * @param AddNetworkInterfaceToInstanceRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return AddNetworkInterfaceToInstanceResponse
     */
    public function addNetworkInterfaceToInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoStart) {
            @$query['AutoStart'] = $request->autoStart;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->networks) {
            @$query['Networks'] = $request->networks;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddNetworkInterfaceToInstance',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddNetworkInterfaceToInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds an IPv6 network interface controller (NIC). A public IP address is automatically assigned at the same time.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 5 times per second per user.
     * *   Internal networks and IPv4 addresses are not supported.
     *
     * @param request - AddNetworkInterfaceToInstanceRequest
     *
     * @returns AddNetworkInterfaceToInstanceResponse
     *
     * @param AddNetworkInterfaceToInstanceRequest $request
     *
     * @return AddNetworkInterfaceToInstanceResponse
     */
    public function addNetworkInterfaceToInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addNetworkInterfaceToInstanceWithOptions($request, $runtime);
    }

    /**
     * Adds an elastic IP address (EIP) to a Source Network Address Translation (SNAT) entry.
     *
     * @param request - AddSnatIpForSnatEntryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AddSnatIpForSnatEntryResponse
     *
     * @param AddSnatIpForSnatEntryRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return AddSnatIpForSnatEntryResponse
     */
    public function addSnatIpForSnatEntryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->snatEntryId) {
            @$query['SnatEntryId'] = $request->snatEntryId;
        }

        if (null !== $request->snatIp) {
            @$query['SnatIp'] = $request->snatIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AddSnatIpForSnatEntry',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AddSnatIpForSnatEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds an elastic IP address (EIP) to a Source Network Address Translation (SNAT) entry.
     *
     * @param request - AddSnatIpForSnatEntryRequest
     *
     * @returns AddSnatIpForSnatEntryResponse
     *
     * @param AddSnatIpForSnatEntryRequest $request
     *
     * @return AddSnatIpForSnatEntryResponse
     */
    public function addSnatIpForSnatEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSnatIpForSnatEntryWithOptions($request, $runtime);
    }

    /**
     * Assigns secondary private IP addresses to an elastic network interface (ENI).
     *
     * @param request - AssignPrivateIpAddressesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssignPrivateIpAddressesResponse
     *
     * @param AssignPrivateIpAddressesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AssignPrivateIpAddressesResponse
     */
    public function assignPrivateIpAddressesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->networkInterfaceId) {
            @$query['NetworkInterfaceId'] = $request->networkInterfaceId;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AssignPrivateIpAddresses',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AssignPrivateIpAddressesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Assigns secondary private IP addresses to an elastic network interface (ENI).
     *
     * @param request - AssignPrivateIpAddressesRequest
     *
     * @returns AssignPrivateIpAddressesResponse
     *
     * @param AssignPrivateIpAddressesRequest $request
     *
     * @return AssignPrivateIpAddressesResponse
     */
    public function assignPrivateIpAddresses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assignPrivateIpAddressesWithOptions($request, $runtime);
    }

    /**
     * Associates an elastic IP address (EIP) with a cloud resource that is deployed in the same region.
     *
     * @param request - AssociateEnsEipAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssociateEnsEipAddressResponse
     *
     * @param AssociateEnsEipAddressRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AssociateEnsEipAddressResponse
     */
    public function associateEnsEipAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allocationId) {
            @$query['AllocationId'] = $request->allocationId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->standby) {
            @$query['Standby'] = $request->standby;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AssociateEnsEipAddress',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AssociateEnsEipAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associates an elastic IP address (EIP) with a cloud resource that is deployed in the same region.
     *
     * @param request - AssociateEnsEipAddressRequest
     *
     * @returns AssociateEnsEipAddressResponse
     *
     * @param AssociateEnsEipAddressRequest $request
     *
     * @return AssociateEnsEipAddressResponse
     */
    public function associateEnsEipAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateEnsEipAddressWithOptions($request, $runtime);
    }

    /**
     * Associates a high-availability virtual IP address (HAVIP) with an Edge Node Service (ENS) instance or elastic network interface (ENI).
     *
     * @remarks
     * When you call this operation to associate an HAVIP, take note of the following items:
     * *   An HAVIP immediately takes effect after it is associated. You do not need to restart the ENS instance. However, you need to associate the HAVIP with the ENI of the ENS instance.
     * *   The HAVIP and ENS instance must belong to the same vSwitch.
     * *   The ENS instance must be in the Running or Stopped state.
     * *   The HAVIP must be in the Available or InUse state.
     * *   AssociateHaVip is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the DescribeHaVips operation to query the status of an HAVIP:
     *     *   If the HAVIP is in the Associating state, the HAVIP is being associated.
     *     <!---->
     *     *   If the HAVIP is in the InUse state, the HAVIP is associated.
     *
     * @param request - AssociateHaVipRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AssociateHaVipResponse
     *
     * @param AssociateHaVipRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return AssociateHaVipResponse
     */
    public function associateHaVipWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->haVipId) {
            @$query['HaVipId'] = $request->haVipId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AssociateHaVip',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AssociateHaVipResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Associates a high-availability virtual IP address (HAVIP) with an Edge Node Service (ENS) instance or elastic network interface (ENI).
     *
     * @remarks
     * When you call this operation to associate an HAVIP, take note of the following items:
     * *   An HAVIP immediately takes effect after it is associated. You do not need to restart the ENS instance. However, you need to associate the HAVIP with the ENI of the ENS instance.
     * *   The HAVIP and ENS instance must belong to the same vSwitch.
     * *   The ENS instance must be in the Running or Stopped state.
     * *   The HAVIP must be in the Available or InUse state.
     * *   AssociateHaVip is an asynchronous operation. After a request is sent, the system returns a request ID and runs the task in the background. You can call the DescribeHaVips operation to query the status of an HAVIP:
     *     *   If the HAVIP is in the Associating state, the HAVIP is being associated.
     *     <!---->
     *     *   If the HAVIP is in the InUse state, the HAVIP is associated.
     *
     * @param request - AssociateHaVipRequest
     *
     * @returns AssociateHaVipResponse
     *
     * @param AssociateHaVipRequest $request
     *
     * @return AssociateHaVipResponse
     */
    public function associateHaVip($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateHaVipWithOptions($request, $runtime);
    }

    /**
     * Attaches a disk to an Edge Node Service (ENS) instance.
     *
     * @param request - AttachDiskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachDiskResponse
     *
     * @param AttachDiskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AttachDiskResponse
     */
    public function attachDiskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deleteWithInstance) {
            @$query['DeleteWithInstance'] = $request->deleteWithInstance;
        }

        if (null !== $request->diskId) {
            @$query['DiskId'] = $request->diskId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachDisk',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachDiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Attaches a disk to an Edge Node Service (ENS) instance.
     *
     * @param request - AttachDiskRequest
     *
     * @returns AttachDiskResponse
     *
     * @param AttachDiskRequest $request
     *
     * @return AttachDiskResponse
     */
    public function attachDisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachDiskWithOptions($request, $runtime);
    }

    /**
     * Adds an Edge Node Service (ENS) instance to Container Service for Kubernetes (ACK).
     *
     * @remarks
     * # [](#)Usage notes
     * *   You can call this operation up to 10 times per second per account.
     * *   After you execute the command, the instance restarts loading.
     * *   Limits: The instance has at least two vCPUs and 4 GB memory. An image of CentOS 7.4 or later is required.
     *
     * @param request - AttachEnsInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachEnsInstancesResponse
     *
     * @param AttachEnsInstancesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return AttachEnsInstancesResponse
     */
    public function attachEnsInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->scripts) {
            @$query['Scripts'] = $request->scripts;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachEnsInstances',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachEnsInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds an Edge Node Service (ENS) instance to Container Service for Kubernetes (ACK).
     *
     * @remarks
     * # [](#)Usage notes
     * *   You can call this operation up to 10 times per second per account.
     * *   After you execute the command, the instance restarts loading.
     * *   Limits: The instance has at least two vCPUs and 4 GB memory. An image of CentOS 7.4 or later is required.
     *
     * @param request - AttachEnsInstancesRequest
     *
     * @returns AttachEnsInstancesResponse
     *
     * @param AttachEnsInstancesRequest $request
     *
     * @return AttachEnsInstancesResponse
     */
    public function attachEnsInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachEnsInstancesWithOptions($request, $runtime);
    }

    /**
     * Attaches a shared data group (SDG) to the corresponding Android in Container (AIC) instance.
     *
     * @param tmpReq - AttachInstanceSDGRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachInstanceSDGResponse
     *
     * @param AttachInstanceSDGRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return AttachInstanceSDGResponse
     */
    public function attachInstanceSDGWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new AttachInstanceSDGShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceIds) {
            $request->instanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }

        if (null !== $tmpReq->loadOpt) {
            $request->loadOptShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->loadOpt, 'LoadOpt', 'json');
        }

        $query = [];
        if (null !== $request->diskAccessProtocol) {
            @$query['DiskAccessProtocol'] = $request->diskAccessProtocol;
        }

        if (null !== $request->diskType) {
            @$query['DiskType'] = $request->diskType;
        }

        if (null !== $request->instanceIdsShrink) {
            @$query['InstanceIds'] = $request->instanceIdsShrink;
        }

        if (null !== $request->loadOptShrink) {
            @$query['LoadOpt'] = $request->loadOptShrink;
        }

        if (null !== $request->SDGId) {
            @$query['SDGId'] = $request->SDGId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachInstanceSDG',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachInstanceSDGResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Attaches a shared data group (SDG) to the corresponding Android in Container (AIC) instance.
     *
     * @param request - AttachInstanceSDGRequest
     *
     * @returns AttachInstanceSDGResponse
     *
     * @param AttachInstanceSDGRequest $request
     *
     * @return AttachInstanceSDGResponse
     */
    public function attachInstanceSDG($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachInstanceSDGWithOptions($request, $runtime);
    }

    /**
     * Attaches an Elastic Network Interface (ENI) to an Edge Node Service (ECS) instance.
     *
     * @remarks
     * When you call this operation, take note of the following limits:
     * *   The ENI must be in the Available state.
     * *   An ENI can be attached to only one instance that is the same zone and the same Virtual Private Cloud (VPC).
     * *   The instance must be in the Stopped state.
     * *   A maximum of 10 ENIs can be attached to an instance.
     * *   This operation is an asynchronous operation. After you call this operation to attach an ENI, you can view the status of the ENI to check whether the ENI is attached.
     *
     * @param request - AttachNetworkInterfaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AttachNetworkInterfaceResponse
     *
     * @param AttachNetworkInterfaceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AttachNetworkInterfaceResponse
     */
    public function attachNetworkInterfaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->networkInterfaceId) {
            @$query['NetworkInterfaceId'] = $request->networkInterfaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AttachNetworkInterface',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AttachNetworkInterfaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Attaches an Elastic Network Interface (ENI) to an Edge Node Service (ECS) instance.
     *
     * @remarks
     * When you call this operation, take note of the following limits:
     * *   The ENI must be in the Available state.
     * *   An ENI can be attached to only one instance that is the same zone and the same Virtual Private Cloud (VPC).
     * *   The instance must be in the Stopped state.
     * *   A maximum of 10 ENIs can be attached to an instance.
     * *   This operation is an asynchronous operation. After you call this operation to attach an ENI, you can view the status of the ENI to check whether the ENI is attached.
     *
     * @param request - AttachNetworkInterfaceRequest
     *
     * @returns AttachNetworkInterfaceResponse
     *
     * @param AttachNetworkInterfaceRequest $request
     *
     * @return AttachNetworkInterfaceResponse
     */
    public function attachNetworkInterface($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachNetworkInterfaceWithOptions($request, $runtime);
    }

    /**
     * Creates an inbound security group rule. This operation allows or denies the inbound traffic from other devices to instances in the security group.
     *
     * @param request - AuthorizeSecurityGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AuthorizeSecurityGroupResponse
     *
     * @param AuthorizeSecurityGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AuthorizeSecurityGroupResponse
     */
    public function authorizeSecurityGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ipProtocol) {
            @$query['IpProtocol'] = $request->ipProtocol;
        }

        if (null !== $request->policy) {
            @$query['Policy'] = $request->policy;
        }

        if (null !== $request->portRange) {
            @$query['PortRange'] = $request->portRange;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->sourceCidrIp) {
            @$query['SourceCidrIp'] = $request->sourceCidrIp;
        }

        if (null !== $request->sourcePortRange) {
            @$query['SourcePortRange'] = $request->sourcePortRange;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AuthorizeSecurityGroup',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AuthorizeSecurityGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an inbound security group rule. This operation allows or denies the inbound traffic from other devices to instances in the security group.
     *
     * @param request - AuthorizeSecurityGroupRequest
     *
     * @returns AuthorizeSecurityGroupResponse
     *
     * @param AuthorizeSecurityGroupRequest $request
     *
     * @return AuthorizeSecurityGroupResponse
     */
    public function authorizeSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * Creates an outbound security group rule. This operation allows or denies the outbound traffic from the instances in the security group to other devices.
     *
     * @remarks
     * In the security group-related API documents, outbound traffic refers to the traffic that is sent by the source device and received at the destination device.
     *
     * @param request - AuthorizeSecurityGroupEgressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns AuthorizeSecurityGroupEgressResponse
     *
     * @param AuthorizeSecurityGroupEgressRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return AuthorizeSecurityGroupEgressResponse
     */
    public function authorizeSecurityGroupEgressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->destCidrIp) {
            @$query['DestCidrIp'] = $request->destCidrIp;
        }

        if (null !== $request->ipProtocol) {
            @$query['IpProtocol'] = $request->ipProtocol;
        }

        if (null !== $request->policy) {
            @$query['Policy'] = $request->policy;
        }

        if (null !== $request->portRange) {
            @$query['PortRange'] = $request->portRange;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->sourcePortRange) {
            @$query['SourcePortRange'] = $request->sourcePortRange;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'AuthorizeSecurityGroupEgress',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return AuthorizeSecurityGroupEgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an outbound security group rule. This operation allows or denies the outbound traffic from the instances in the security group to other devices.
     *
     * @remarks
     * In the security group-related API documents, outbound traffic refers to the traffic that is sent by the source device and received at the destination device.
     *
     * @param request - AuthorizeSecurityGroupEgressRequest
     *
     * @returns AuthorizeSecurityGroupEgressResponse
     *
     * @param AuthorizeSecurityGroupEgressRequest $request
     *
     * @return AuthorizeSecurityGroupEgressResponse
     */
    public function authorizeSecurityGroupEgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeSecurityGroupEgressWithOptions($request, $runtime);
    }

    /**
     * Migrates multiple instances in a specified event at a time. You can execute the task immediately or schedule the task execution.
     *
     * @remarks
     * ## [](#)Request description
     * *   This O\\&M operation is supported only by the Instance:SystemUpgrade.Migrate event.
     *
     * @param tmpReq - BatchEventMigrateInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchEventMigrateInstanceResponse
     *
     * @param BatchEventMigrateInstanceRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return BatchEventMigrateInstanceResponse
     */
    public function batchEventMigrateInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchEventMigrateInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->eventInfos) {
            $request->eventInfosShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->eventInfos, 'EventInfos', 'json');
        }

        $query = [];
        if (null !== $request->eventInfosShrink) {
            @$query['EventInfos'] = $request->eventInfosShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchEventMigrateInstance',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchEventMigrateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Migrates multiple instances in a specified event at a time. You can execute the task immediately or schedule the task execution.
     *
     * @remarks
     * ## [](#)Request description
     * *   This O\\&M operation is supported only by the Instance:SystemUpgrade.Migrate event.
     *
     * @param request - BatchEventMigrateInstanceRequest
     *
     * @returns BatchEventMigrateInstanceResponse
     *
     * @param BatchEventMigrateInstanceRequest $request
     *
     * @return BatchEventMigrateInstanceResponse
     */
    public function batchEventMigrateInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchEventMigrateInstanceWithOptions($request, $runtime);
    }

    /**
     * The event that is used to immediately redeploy specified resources in batches or by appointment.
     *
     * @remarks
     *   This O\\&M operation supports only the following event types: Instance:SystemMaintenance.Reboot (instance reboot due to system problems)
     *
     * @param tmpReq - BatchEventRebootInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchEventRebootInstanceResponse
     *
     * @param BatchEventRebootInstanceRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return BatchEventRebootInstanceResponse
     */
    public function batchEventRebootInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchEventRebootInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->eventInfos) {
            $request->eventInfosShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->eventInfos, 'EventInfos', 'json');
        }

        $query = [];
        if (null !== $request->eventInfosShrink) {
            @$query['EventInfos'] = $request->eventInfosShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchEventRebootInstance',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchEventRebootInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The event that is used to immediately redeploy specified resources in batches or by appointment.
     *
     * @remarks
     *   This O\\&M operation supports only the following event types: Instance:SystemMaintenance.Reboot (instance reboot due to system problems)
     *
     * @param request - BatchEventRebootInstanceRequest
     *
     * @returns BatchEventRebootInstanceResponse
     *
     * @param BatchEventRebootInstanceRequest $request
     *
     * @return BatchEventRebootInstanceResponse
     */
    public function batchEventRebootInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchEventRebootInstanceWithOptions($request, $runtime);
    }

    /**
     * Batch redeployment.
     *
     * @remarks
     * - This operation currently only supports event types: Instance:SystemFailure.Redeploy (redeploy instance due to system issues), Instance:SystemMaintenance.Redeploy (redeploy instance due to system maintenance)
     *
     * @param tmpReq - BatchEventRedeployInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns BatchEventRedeployInstanceResponse
     *
     * @param BatchEventRedeployInstanceRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return BatchEventRedeployInstanceResponse
     */
    public function batchEventRedeployInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new BatchEventRedeployInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->eventInfos) {
            $request->eventInfosShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->eventInfos, 'EventInfos', 'json');
        }

        $query = [];
        if (null !== $request->eventInfosShrink) {
            @$query['EventInfos'] = $request->eventInfosShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'BatchEventRedeployInstance',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return BatchEventRedeployInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Batch redeployment.
     *
     * @remarks
     * - This operation currently only supports event types: Instance:SystemFailure.Redeploy (redeploy instance due to system issues), Instance:SystemMaintenance.Redeploy (redeploy instance due to system maintenance)
     *
     * @param request - BatchEventRedeployInstanceRequest
     *
     * @returns BatchEventRedeployInstanceResponse
     *
     * @param BatchEventRedeployInstanceRequest $request
     *
     * @return BatchEventRedeployInstanceResponse
     */
    public function batchEventRedeployInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchEventRedeployInstanceWithOptions($request, $runtime);
    }

    /**
     * 清理分发数据.
     *
     * @param request - CleanDistDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CleanDistDataResponse
     *
     * @param CleanDistDataRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CleanDistDataResponse
     */
    public function cleanDistDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->dataName) {
            @$query['DataName'] = $request->dataName;
        }

        if (null !== $request->dataVersion) {
            @$query['DataVersion'] = $request->dataVersion;
        }

        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CleanDistData',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CleanDistDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 清理分发数据.
     *
     * @param request - CleanDistDataRequest
     *
     * @returns CleanDistDataResponse
     *
     * @param CleanDistDataRequest $request
     *
     * @return CleanDistDataResponse
     */
    public function cleanDistData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cleanDistDataWithOptions($request, $runtime);
    }

    /**
     * Copies a shared data group (SDG) across nodes.
     *
     * @param tmpReq - CopySDGRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CopySDGResponse
     *
     * @param CopySDGRequest $tmpReq
     * @param RuntimeOptions $runtime
     *
     * @return CopySDGResponse
     */
    public function copySDGWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CopySDGShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->destinationRegionIds) {
            $request->destinationRegionIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->destinationRegionIds, 'DestinationRegionIds', 'json');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CopySDG',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CopySDGResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Copies a shared data group (SDG) across nodes.
     *
     * @param request - CopySDGRequest
     *
     * @returns CopySDGResponse
     *
     * @param CopySDGRequest $request
     *
     * @return CopySDGResponse
     */
    public function copySDG($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copySDGWithOptions($request, $runtime);
    }

    /**
     * Copies a snapshot across nodes.
     *
     * @param tmpReq - CopySnapshotRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CopySnapshotResponse
     *
     * @param CopySnapshotRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return CopySnapshotResponse
     */
    public function copySnapshotWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CopySnapshotShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->destinationRegionIds) {
            $request->destinationRegionIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->destinationRegionIds, 'DestinationRegionIds', 'json');
        }

        $query = [];
        if (null !== $request->destinationRegionIdsShrink) {
            @$query['DestinationRegionIds'] = $request->destinationRegionIdsShrink;
        }

        if (null !== $request->destinationSnapshotDescription) {
            @$query['DestinationSnapshotDescription'] = $request->destinationSnapshotDescription;
        }

        if (null !== $request->destinationSnapshotName) {
            @$query['DestinationSnapshotName'] = $request->destinationSnapshotName;
        }

        if (null !== $request->instanceBillingCycle) {
            @$query['InstanceBillingCycle'] = $request->instanceBillingCycle;
        }

        if (null !== $request->snapshotId) {
            @$query['SnapshotId'] = $request->snapshotId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CopySnapshot',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CopySnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Copies a snapshot across nodes.
     *
     * @param request - CopySnapshotRequest
     *
     * @returns CopySnapshotResponse
     *
     * @param CopySnapshotRequest $request
     *
     * @return CopySnapshotResponse
     */
    public function copySnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copySnapshotWithOptions($request, $runtime);
    }

    /**
     * Creates an ARM server.
     *
     * @param request - CreateARMServerInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateARMServerInstancesResponse
     *
     * @param CreateARMServerInstancesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateARMServerInstancesResponse
     */
    public function createARMServerInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->amount) {
            @$query['Amount'] = $request->amount;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->autoUseCoupon) {
            @$query['AutoUseCoupon'] = $request->autoUseCoupon;
        }

        if (null !== $request->cidr) {
            @$query['Cidr'] = $request->cidr;
        }

        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        if (null !== $request->environmentVar) {
            @$query['EnvironmentVar'] = $request->environmentVar;
        }

        if (null !== $request->frequency) {
            @$query['Frequency'] = $request->frequency;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->instanceBillingCycle) {
            @$query['InstanceBillingCycle'] = $request->instanceBillingCycle;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->keyPairName) {
            @$query['KeyPairName'] = $request->keyPairName;
        }

        if (null !== $request->nameSpace) {
            @$query['NameSpace'] = $request->nameSpace;
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

        if (null !== $request->resolution) {
            @$query['Resolution'] = $request->resolution;
        }

        if (null !== $request->serverName) {
            @$query['ServerName'] = $request->serverName;
        }

        if (null !== $request->serverType) {
            @$query['ServerType'] = $request->serverType;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateARMServerInstances',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateARMServerInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an ARM server.
     *
     * @param request - CreateARMServerInstancesRequest
     *
     * @returns CreateARMServerInstancesResponse
     *
     * @param CreateARMServerInstancesRequest $request
     *
     * @return CreateARMServerInstancesResponse
     */
    public function createARMServerInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createARMServerInstancesWithOptions($request, $runtime);
    }

    /**
     * Creates an edge application that allows you to manage Edge Node Service (ENS) nodes in containers, bare metal instances, and virtual machines.
     *
     * @param request - CreateApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateApplicationResponse
     *
     * @param CreateApplicationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateApplicationResponse
     */
    public function createApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->template) {
            @$query['Template'] = $request->template;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateApplication',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an edge application that allows you to manage Edge Node Service (ENS) nodes in containers, bare metal instances, and virtual machines.
     *
     * @param request - CreateApplicationRequest
     *
     * @returns CreateApplicationResponse
     *
     * @param CreateApplicationRequest $request
     *
     * @return CreateApplicationResponse
     */
    public function createApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApplicationWithOptions($request, $runtime);
    }

    /**
     * Creates a classic network.
     *
     * @param request - CreateClassicNetworkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateClassicNetworkResponse
     *
     * @param CreateClassicNetworkRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateClassicNetworkResponse
     */
    public function createClassicNetworkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cidrBlock) {
            @$query['CidrBlock'] = $request->cidrBlock;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        if (null !== $request->networkName) {
            @$query['NetworkName'] = $request->networkName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateClassicNetwork',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateClassicNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a classic network.
     *
     * @param request - CreateClassicNetworkRequest
     *
     * @returns CreateClassicNetworkResponse
     *
     * @param CreateClassicNetworkRequest $request
     *
     * @return CreateClassicNetworkResponse
     */
    public function createClassicNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClassicNetworkWithOptions($request, $runtime);
    }

    /**
     * Creates a Container Service for Kubernetes (ACK) edge cluster.
     *
     * @remarks
     *   You can call this operation up to 10 times per second per account.
     * *   Creating a cluster is an asynchronous operation. After this operation returns the response, it takes 10 to 20 minutes to initialize the cluster. You can call the DescribeCluster operation to query the cluster status. After you create a cluster, you can call the DescribeClusterKubeConfig operation to obtain the cluster certificate.
     *
     * @param tmpReq - CreateClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateClusterResponse
     *
     * @param CreateClusterRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return CreateClusterResponse
     */
    public function createClusterWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateClusterShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->controlPlaneConfig) {
            $request->controlPlaneConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->controlPlaneConfig, 'ControlPlaneConfig', 'json');
        }

        if (null !== $tmpReq->podVswitchIds) {
            $request->podVswitchIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->podVswitchIds, 'PodVswitchIds', 'json');
        }

        if (null !== $tmpReq->vswitchIds) {
            $request->vswitchIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->vswitchIds, 'VswitchIds', 'json');
        }

        $query = [];
        if (null !== $request->clusterType) {
            @$query['ClusterType'] = $request->clusterType;
        }

        if (null !== $request->clusterVersion) {
            @$query['ClusterVersion'] = $request->clusterVersion;
        }

        if (null !== $request->containerCidr) {
            @$query['ContainerCidr'] = $request->containerCidr;
        }

        if (null !== $request->controlPlaneConfigShrink) {
            @$query['ControlPlaneConfig'] = $request->controlPlaneConfigShrink;
        }

        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        if (null !== $request->kubernetesVersion) {
            @$query['KubernetesVersion'] = $request->kubernetesVersion;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->podVswitchIdsShrink) {
            @$query['PodVswitchIds'] = $request->podVswitchIdsShrink;
        }

        if (null !== $request->profile) {
            @$query['Profile'] = $request->profile;
        }

        if (null !== $request->publicAccess) {
            @$query['PublicAccess'] = $request->publicAccess;
        }

        if (null !== $request->serviceCidr) {
            @$query['ServiceCidr'] = $request->serviceCidr;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        if (null !== $request->vswitchIdsShrink) {
            @$query['VswitchIds'] = $request->vswitchIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateCluster',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Container Service for Kubernetes (ACK) edge cluster.
     *
     * @remarks
     *   You can call this operation up to 10 times per second per account.
     * *   Creating a cluster is an asynchronous operation. After this operation returns the response, it takes 10 to 20 minutes to initialize the cluster. You can call the DescribeCluster operation to query the cluster status. After you create a cluster, you can call the DescribeClusterKubeConfig operation to obtain the cluster certificate.
     *
     * @param request - CreateClusterRequest
     *
     * @returns CreateClusterResponse
     *
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
     * Creates a pay-as-you-go or subscription data disk.
     *
     * @param request - CreateDiskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateDiskResponse
     *
     * @param CreateDiskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateDiskResponse
     */
    public function createDiskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->diskName) {
            @$query['DiskName'] = $request->diskName;
        }

        if (null !== $request->encrypted) {
            @$query['Encrypted'] = $request->encrypted;
        }

        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        if (null !== $request->instanceBillingCycle) {
            @$query['InstanceBillingCycle'] = $request->instanceBillingCycle;
        }

        if (null !== $request->instanceChargeType) {
            @$query['InstanceChargeType'] = $request->instanceChargeType;
        }

        if (null !== $request->KMSKeyId) {
            @$query['KMSKeyId'] = $request->KMSKeyId;
        }

        if (null !== $request->size) {
            @$query['Size'] = $request->size;
        }

        if (null !== $request->snapshotId) {
            @$query['SnapshotId'] = $request->snapshotId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateDisk',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateDiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a pay-as-you-go or subscription data disk.
     *
     * @param request - CreateDiskRequest
     *
     * @returns CreateDiskResponse
     *
     * @param CreateDiskRequest $request
     *
     * @return CreateDiskResponse
     */
    public function createDisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDiskWithOptions($request, $runtime);
    }

    /**
     * Applies for an elastic IP address (EIP).
     *
     * @remarks
     *   You can call this operation up to 5,000 times per second per account.
     * *   You can call this operation up to 50 times per second per user.
     *
     * @param request - CreateEipInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEipInstanceResponse
     *
     * @param CreateEipInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateEipInstanceResponse
     */
    public function createEipInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        if (null !== $request->instanceChargeType) {
            @$query['InstanceChargeType'] = $request->instanceChargeType;
        }

        if (null !== $request->internetChargeType) {
            @$query['InternetChargeType'] = $request->internetChargeType;
        }

        if (null !== $request->isp) {
            @$query['Isp'] = $request->isp;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateEipInstance',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateEipInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Applies for an elastic IP address (EIP).
     *
     * @remarks
     *   You can call this operation up to 5,000 times per second per account.
     * *   You can call this operation up to 50 times per second per user.
     *
     * @param request - CreateEipInstanceRequest
     *
     * @returns CreateEipInstanceResponse
     *
     * @param CreateEipInstanceRequest $request
     *
     * @return CreateEipInstanceResponse
     */
    public function createEipInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEipInstanceWithOptions($request, $runtime);
    }

    /**
     * Creates a custom route entry.
     *
     * @param request - CreateEnsRouteEntryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEnsRouteEntryResponse
     *
     * @param CreateEnsRouteEntryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateEnsRouteEntryResponse
     */
    public function createEnsRouteEntryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->destinationCidrBlock) {
            @$query['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }

        if (null !== $request->nextHopId) {
            @$query['NextHopId'] = $request->nextHopId;
        }

        if (null !== $request->nextHopType) {
            @$query['NextHopType'] = $request->nextHopType;
        }

        if (null !== $request->routeEntryName) {
            @$query['RouteEntryName'] = $request->routeEntryName;
        }

        if (null !== $request->routeTableId) {
            @$query['RouteTableId'] = $request->routeTableId;
        }

        if (null !== $request->sourceCidrBlock) {
            @$query['SourceCidrBlock'] = $request->sourceCidrBlock;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateEnsRouteEntry',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateEnsRouteEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a custom route entry.
     *
     * @param request - CreateEnsRouteEntryRequest
     *
     * @returns CreateEnsRouteEntryResponse
     *
     * @param CreateEnsRouteEntryRequest $request
     *
     * @return CreateEnsRouteEntryResponse
     */
    public function createEnsRouteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEnsRouteEntryWithOptions($request, $runtime);
    }

    /**
     * 创建售卖约束
     *
     * @param tmpReq - CreateEnsSaleControlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEnsSaleControlResponse
     *
     * @param CreateEnsSaleControlRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return CreateEnsSaleControlResponse
     */
    public function createEnsSaleControlWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateEnsSaleControlShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->saleControls) {
            $request->saleControlsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->saleControls, 'SaleControls', 'json');
        }

        $query = [];
        if (null !== $request->aliUidAccount) {
            @$query['AliUidAccount'] = $request->aliUidAccount;
        }

        if (null !== $request->commodityCode) {
            @$query['CommodityCode'] = $request->commodityCode;
        }

        if (null !== $request->customAccount) {
            @$query['CustomAccount'] = $request->customAccount;
        }

        if (null !== $request->saleControlsShrink) {
            @$query['SaleControls'] = $request->saleControlsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateEnsSaleControl',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateEnsSaleControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 创建售卖约束
     *
     * @param request - CreateEnsSaleControlRequest
     *
     * @returns CreateEnsSaleControlResponse
     *
     * @param CreateEnsSaleControlRequest $request
     *
     * @return CreateEnsSaleControlResponse
     */
    public function createEnsSaleControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEnsSaleControlWithOptions($request, $runtime);
    }

    /**
     * Creates an edge service.
     *
     * @param request - CreateEnsServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEnsServiceResponse
     *
     * @param CreateEnsServiceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateEnsServiceResponse
     */
    public function createEnsServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ensServiceId) {
            @$query['EnsServiceId'] = $request->ensServiceId;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateEnsService',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateEnsServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an edge service.
     *
     * @param request - CreateEnsServiceRequest
     *
     * @returns CreateEnsServiceResponse
     *
     * @param CreateEnsServiceRequest $request
     *
     * @return CreateEnsServiceResponse
     */
    public function createEnsService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEnsServiceWithOptions($request, $runtime);
    }

    /**
     * Creates an edge private network (EPN) instance.
     *
     * @param request - CreateEpnInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateEpnInstanceResponse
     *
     * @param CreateEpnInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateEpnInstanceResponse
     */
    public function createEpnInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->EPNInstanceName) {
            @$query['EPNInstanceName'] = $request->EPNInstanceName;
        }

        if (null !== $request->EPNInstanceType) {
            @$query['EPNInstanceType'] = $request->EPNInstanceType;
        }

        if (null !== $request->internetChargeType) {
            @$query['InternetChargeType'] = $request->internetChargeType;
        }

        if (null !== $request->internetMaxBandwidthOut) {
            @$query['InternetMaxBandwidthOut'] = $request->internetMaxBandwidthOut;
        }

        if (null !== $request->networkingModel) {
            @$query['NetworkingModel'] = $request->networkingModel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateEpnInstance',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateEpnInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an edge private network (EPN) instance.
     *
     * @param request - CreateEpnInstanceRequest
     *
     * @returns CreateEpnInstanceResponse
     *
     * @param CreateEpnInstanceRequest $request
     *
     * @return CreateEpnInstanceResponse
     */
    public function createEpnInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEpnInstanceWithOptions($request, $runtime);
    }

    /**
     * Creates a NAS file system.
     *
     * @param tmpReq - CreateFileSystemRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateFileSystemResponse
     *
     * @param CreateFileSystemRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateFileSystemResponse
     */
    public function createFileSystemWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateFileSystemShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->orderDetails) {
            $request->orderDetailsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->orderDetails, 'OrderDetails', 'json');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateFileSystem',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateFileSystemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a NAS file system.
     *
     * @param request - CreateFileSystemRequest
     *
     * @returns CreateFileSystemResponse
     *
     * @param CreateFileSystemRequest $request
     *
     * @return CreateFileSystemResponse
     */
    public function createFileSystem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFileSystemWithOptions($request, $runtime);
    }

    /**
     * Adds a Destination Network Address Translation (DNAT) entry to a DNAT table.
     *
     * @param request - CreateForwardEntryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateForwardEntryResponse
     *
     * @param CreateForwardEntryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateForwardEntryResponse
     */
    public function createForwardEntryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->externalIp) {
            @$query['ExternalIp'] = $request->externalIp;
        }

        if (null !== $request->externalPort) {
            @$query['ExternalPort'] = $request->externalPort;
        }

        if (null !== $request->forwardEntryName) {
            @$query['ForwardEntryName'] = $request->forwardEntryName;
        }

        if (null !== $request->healthCheckPort) {
            @$query['HealthCheckPort'] = $request->healthCheckPort;
        }

        if (null !== $request->internalIp) {
            @$query['InternalIp'] = $request->internalIp;
        }

        if (null !== $request->internalPort) {
            @$query['InternalPort'] = $request->internalPort;
        }

        if (null !== $request->ipProtocol) {
            @$query['IpProtocol'] = $request->ipProtocol;
        }

        if (null !== $request->natGatewayId) {
            @$query['NatGatewayId'] = $request->natGatewayId;
        }

        if (null !== $request->standbyExternalIp) {
            @$query['StandbyExternalIp'] = $request->standbyExternalIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateForwardEntry',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateForwardEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a Destination Network Address Translation (DNAT) entry to a DNAT table.
     *
     * @param request - CreateForwardEntryRequest
     *
     * @returns CreateForwardEntryResponse
     *
     * @param CreateForwardEntryRequest $request
     *
     * @return CreateForwardEntryResponse
     */
    public function createForwardEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createForwardEntryWithOptions($request, $runtime);
    }

    /**
     * Creates a high-availability virtual IP address (HAVIP).
     *
     * @param request - CreateHaVipRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateHaVipResponse
     *
     * @param CreateHaVipRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateHaVipResponse
     */
    public function createHaVipWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->amount) {
            @$query['Amount'] = $request->amount;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->ipAddress) {
            @$query['IpAddress'] = $request->ipAddress;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateHaVip',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateHaVipResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a high-availability virtual IP address (HAVIP).
     *
     * @param request - CreateHaVipRequest
     *
     * @returns CreateHaVipResponse
     *
     * @param CreateHaVipRequest $request
     *
     * @return CreateHaVipResponse
     */
    public function createHaVip($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createHaVipWithOptions($request, $runtime);
    }

    /**
     * Creates an image from an instance.
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
        if (null !== $request->deleteAfterImageUpload) {
            @$query['DeleteAfterImageUpload'] = $request->deleteAfterImageUpload;
        }

        if (null !== $request->imageName) {
            @$query['ImageName'] = $request->imageName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->snapshotId) {
            @$query['SnapshotId'] = $request->snapshotId;
        }

        if (null !== $request->targetOSSRegionId) {
            @$query['TargetOSSRegionId'] = $request->targetOSSRegionId;
        }

        if (null !== $request->withDataDisks) {
            @$query['WithDataDisks'] = $request->withDataDisks;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateImage',
            'version' => '2017-11-10',
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
     * Creates an image from an instance.
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
     * Creates an instance.
     *
     * @remarks
     *   You can call this operation up to 10 times per second per account.
     * *   We recommend that you increase the request time because instance creation is an asynchronous operation. If the return code of the API operation is 0, it indicates that the request is successful, but does not indicate that the instance is created. If the request is successful, an instance ID is returned. You can check whether the instance is created based on the instance ID.
     * *   InvalidUserData.NotInWhiteList operation restriction: You can create an instance only if you are in the whitelist in which members have the purchase permissions. Otherwise, an error is returned.
     *
     * @param request - CreateInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceResponse
     *
     * @param CreateInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->autoRenewPeriod) {
            @$query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }

        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        if (null !== $request->hostName) {
            @$query['HostName'] = $request->hostName;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->internetChargeType) {
            @$query['InternetChargeType'] = $request->internetChargeType;
        }

        if (null !== $request->ipType) {
            @$query['IpType'] = $request->ipType;
        }

        if (null !== $request->keyPairName) {
            @$query['KeyPairName'] = $request->keyPairName;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->passwordInherit) {
            @$query['PasswordInherit'] = $request->passwordInherit;
        }

        if (null !== $request->paymentType) {
            @$query['PaymentType'] = $request->paymentType;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->privateIpAddress) {
            @$query['PrivateIpAddress'] = $request->privateIpAddress;
        }

        if (null !== $request->publicIpIdentification) {
            @$query['PublicIpIdentification'] = $request->publicIpIdentification;
        }

        if (null !== $request->quantity) {
            @$query['Quantity'] = $request->quantity;
        }

        if (null !== $request->uniqueSuffix) {
            @$query['UniqueSuffix'] = $request->uniqueSuffix;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->dataDisk) {
            @$query['DataDisk'] = $request->dataDisk;
        }

        if (null !== $request->systemDisk) {
            @$query['SystemDisk'] = $request->systemDisk;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateInstance',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an instance.
     *
     * @remarks
     *   You can call this operation up to 10 times per second per account.
     * *   We recommend that you increase the request time because instance creation is an asynchronous operation. If the return code of the API operation is 0, it indicates that the request is successful, but does not indicate that the instance is created. If the request is successful, an instance ID is returned. You can check whether the instance is created based on the instance ID.
     * *   InvalidUserData.NotInWhiteList operation restriction: You can create an instance only if you are in the whitelist in which members have the purchase permissions. Otherwise, an error is returned.
     *
     * @param request - CreateInstanceRequest
     *
     * @returns CreateInstanceResponse
     *
     * @param CreateInstanceRequest $request
     *
     * @return CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceWithOptions($request, $runtime);
    }

    /**
     * 调用CreateInstanceOpsTask来针对一个实例或实例运维组发起运维任务
     *
     * @param tmpReq - CreateInstanceActiveOpsTaskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateInstanceActiveOpsTaskResponse
     *
     * @param CreateInstanceActiveOpsTaskRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateInstanceActiveOpsTaskResponse
     */
    public function createInstanceActiveOpsTaskWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateInstanceActiveOpsTaskShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceIds) {
            $request->instanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'simple');
        }

        $query = [];
        if (null !== $request->instanceIdsShrink) {
            @$query['InstanceIds'] = $request->instanceIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateInstanceActiveOpsTask',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateInstanceActiveOpsTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 调用CreateInstanceOpsTask来针对一个实例或实例运维组发起运维任务
     *
     * @param request - CreateInstanceActiveOpsTaskRequest
     *
     * @returns CreateInstanceActiveOpsTaskResponse
     *
     * @param CreateInstanceActiveOpsTaskRequest $request
     *
     * @return CreateInstanceActiveOpsTaskResponse
     */
    public function createInstanceActiveOpsTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceActiveOpsTaskWithOptions($request, $runtime);
    }

    /**
     * Creates an SSH key pair.
     *
     * @remarks
     * An SSH key pair consists of a public key and a private key. ENS stores the public key and returns the unencrypted private key that is PEM-encoded in the PKCS#8 format. You must securely lock away the private key.
     *
     * @param request - CreateKeyPairRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateKeyPairResponse
     *
     * @param CreateKeyPairRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateKeyPairResponse
     */
    public function createKeyPairWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyPairName) {
            @$query['KeyPairName'] = $request->keyPairName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateKeyPair',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateKeyPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an SSH key pair.
     *
     * @remarks
     * An SSH key pair consists of a public key and a private key. ENS stores the public key and returns the unencrypted private key that is PEM-encoded in the PKCS#8 format. You must securely lock away the private key.
     *
     * @param request - CreateKeyPairRequest
     *
     * @returns CreateKeyPairResponse
     *
     * @param CreateKeyPairRequest $request
     *
     * @return CreateKeyPairResponse
     */
    public function createKeyPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createKeyPairWithOptions($request, $runtime);
    }

    /**
     * Creates an Edge Load Balancer (ELB) instance.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 5 times per second per user.
     *
     * @param request - CreateLoadBalancerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLoadBalancerResponse
     *
     * @param CreateLoadBalancerRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateLoadBalancerResponse
     */
    public function createLoadBalancerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->billingCycle) {
            @$query['BillingCycle'] = $request->billingCycle;
        }

        if (null !== $request->clientToken) {
            @$query['ClientToken'] = $request->clientToken;
        }

        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        if (null !== $request->loadBalancerName) {
            @$query['LoadBalancerName'] = $request->loadBalancerName;
        }

        if (null !== $request->loadBalancerSpec) {
            @$query['LoadBalancerSpec'] = $request->loadBalancerSpec;
        }

        if (null !== $request->loadBalancerType) {
            @$query['LoadBalancerType'] = $request->loadBalancerType;
        }

        if (null !== $request->networkId) {
            @$query['NetworkId'] = $request->networkId;
        }

        if (null !== $request->payType) {
            @$query['PayType'] = $request->payType;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateLoadBalancer',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLoadBalancerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an Edge Load Balancer (ELB) instance.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 5 times per second per user.
     *
     * @param request - CreateLoadBalancerRequest
     *
     * @returns CreateLoadBalancerResponse
     *
     * @param CreateLoadBalancerRequest $request
     *
     * @return CreateLoadBalancerResponse
     */
    public function createLoadBalancer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoadBalancerWithOptions($request, $runtime);
    }

    /**
     * Creates an HTTP listener.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - CreateLoadBalancerHTTPListenerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLoadBalancerHTTPListenerResponse
     *
     * @param CreateLoadBalancerHTTPListenerRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateLoadBalancerHTTPListenerResponse
     */
    public function createLoadBalancerHTTPListenerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backendServerPort) {
            @$query['BackendServerPort'] = $request->backendServerPort;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->forwardPort) {
            @$query['ForwardPort'] = $request->forwardPort;
        }

        if (null !== $request->healthCheck) {
            @$query['HealthCheck'] = $request->healthCheck;
        }

        if (null !== $request->healthCheckConnectPort) {
            @$query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }

        if (null !== $request->healthCheckDomain) {
            @$query['HealthCheckDomain'] = $request->healthCheckDomain;
        }

        if (null !== $request->healthCheckHttpCode) {
            @$query['HealthCheckHttpCode'] = $request->healthCheckHttpCode;
        }

        if (null !== $request->healthCheckInterval) {
            @$query['HealthCheckInterval'] = $request->healthCheckInterval;
        }

        if (null !== $request->healthCheckMethod) {
            @$query['HealthCheckMethod'] = $request->healthCheckMethod;
        }

        if (null !== $request->healthCheckTimeout) {
            @$query['HealthCheckTimeout'] = $request->healthCheckTimeout;
        }

        if (null !== $request->healthCheckURI) {
            @$query['HealthCheckURI'] = $request->healthCheckURI;
        }

        if (null !== $request->healthyThreshold) {
            @$query['HealthyThreshold'] = $request->healthyThreshold;
        }

        if (null !== $request->idleTimeout) {
            @$query['IdleTimeout'] = $request->idleTimeout;
        }

        if (null !== $request->listenerForward) {
            @$query['ListenerForward'] = $request->listenerForward;
        }

        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->requestTimeout) {
            @$query['RequestTimeout'] = $request->requestTimeout;
        }

        if (null !== $request->scheduler) {
            @$query['Scheduler'] = $request->scheduler;
        }

        if (null !== $request->unhealthyThreshold) {
            @$query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }

        if (null !== $request->XForwardedFor) {
            @$query['XForwardedFor'] = $request->XForwardedFor;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateLoadBalancerHTTPListener',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLoadBalancerHTTPListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an HTTP listener.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - CreateLoadBalancerHTTPListenerRequest
     *
     * @returns CreateLoadBalancerHTTPListenerResponse
     *
     * @param CreateLoadBalancerHTTPListenerRequest $request
     *
     * @return CreateLoadBalancerHTTPListenerResponse
     */
    public function createLoadBalancerHTTPListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoadBalancerHTTPListenerWithOptions($request, $runtime);
    }

    /**
     * Creates an HTTPS listener.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - CreateLoadBalancerHTTPSListenerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLoadBalancerHTTPSListenerResponse
     *
     * @param CreateLoadBalancerHTTPSListenerRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return CreateLoadBalancerHTTPSListenerResponse
     */
    public function createLoadBalancerHTTPSListenerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backendServerPort) {
            @$query['BackendServerPort'] = $request->backendServerPort;
        }

        if (null !== $request->cookie) {
            @$query['Cookie'] = $request->cookie;
        }

        if (null !== $request->cookieTimeout) {
            @$query['CookieTimeout'] = $request->cookieTimeout;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->forwardPort) {
            @$query['ForwardPort'] = $request->forwardPort;
        }

        if (null !== $request->healthCheck) {
            @$query['HealthCheck'] = $request->healthCheck;
        }

        if (null !== $request->healthCheckConnectPort) {
            @$query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }

        if (null !== $request->healthCheckDomain) {
            @$query['HealthCheckDomain'] = $request->healthCheckDomain;
        }

        if (null !== $request->healthCheckHttpCode) {
            @$query['HealthCheckHttpCode'] = $request->healthCheckHttpCode;
        }

        if (null !== $request->healthCheckInterval) {
            @$query['HealthCheckInterval'] = $request->healthCheckInterval;
        }

        if (null !== $request->healthCheckMethod) {
            @$query['HealthCheckMethod'] = $request->healthCheckMethod;
        }

        if (null !== $request->healthCheckTimeout) {
            @$query['HealthCheckTimeout'] = $request->healthCheckTimeout;
        }

        if (null !== $request->healthCheckURI) {
            @$query['HealthCheckURI'] = $request->healthCheckURI;
        }

        if (null !== $request->healthyThreshold) {
            @$query['HealthyThreshold'] = $request->healthyThreshold;
        }

        if (null !== $request->idleTimeout) {
            @$query['IdleTimeout'] = $request->idleTimeout;
        }

        if (null !== $request->listenerForward) {
            @$query['ListenerForward'] = $request->listenerForward;
        }

        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->requestTimeout) {
            @$query['RequestTimeout'] = $request->requestTimeout;
        }

        if (null !== $request->scheduler) {
            @$query['Scheduler'] = $request->scheduler;
        }

        if (null !== $request->serverCertificateId) {
            @$query['ServerCertificateId'] = $request->serverCertificateId;
        }

        if (null !== $request->stickySessionType) {
            @$query['StickySessionType'] = $request->stickySessionType;
        }

        if (null !== $request->unhealthyThreshold) {
            @$query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateLoadBalancerHTTPSListener',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLoadBalancerHTTPSListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an HTTPS listener.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - CreateLoadBalancerHTTPSListenerRequest
     *
     * @returns CreateLoadBalancerHTTPSListenerResponse
     *
     * @param CreateLoadBalancerHTTPSListenerRequest $request
     *
     * @return CreateLoadBalancerHTTPSListenerResponse
     */
    public function createLoadBalancerHTTPSListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoadBalancerHTTPSListenerWithOptions($request, $runtime);
    }

    /**
     * Creates a Transmission Control Protocol (TCP) listener.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - CreateLoadBalancerTCPListenerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLoadBalancerTCPListenerResponse
     *
     * @param CreateLoadBalancerTCPListenerRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateLoadBalancerTCPListenerResponse
     */
    public function createLoadBalancerTCPListenerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backendServerPort) {
            @$query['BackendServerPort'] = $request->backendServerPort;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->eipTransmit) {
            @$query['EipTransmit'] = $request->eipTransmit;
        }

        if (null !== $request->establishedTimeout) {
            @$query['EstablishedTimeout'] = $request->establishedTimeout;
        }

        if (null !== $request->healthCheckConnectPort) {
            @$query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }

        if (null !== $request->healthCheckConnectTimeout) {
            @$query['HealthCheckConnectTimeout'] = $request->healthCheckConnectTimeout;
        }

        if (null !== $request->healthCheckDomain) {
            @$query['HealthCheckDomain'] = $request->healthCheckDomain;
        }

        if (null !== $request->healthCheckHttpCode) {
            @$query['HealthCheckHttpCode'] = $request->healthCheckHttpCode;
        }

        if (null !== $request->healthCheckInterval) {
            @$query['HealthCheckInterval'] = $request->healthCheckInterval;
        }

        if (null !== $request->healthCheckType) {
            @$query['HealthCheckType'] = $request->healthCheckType;
        }

        if (null !== $request->healthCheckURI) {
            @$query['HealthCheckURI'] = $request->healthCheckURI;
        }

        if (null !== $request->healthyThreshold) {
            @$query['HealthyThreshold'] = $request->healthyThreshold;
        }

        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->persistenceTimeout) {
            @$query['PersistenceTimeout'] = $request->persistenceTimeout;
        }

        if (null !== $request->scheduler) {
            @$query['Scheduler'] = $request->scheduler;
        }

        if (null !== $request->unhealthyThreshold) {
            @$query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateLoadBalancerTCPListener',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLoadBalancerTCPListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a Transmission Control Protocol (TCP) listener.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - CreateLoadBalancerTCPListenerRequest
     *
     * @returns CreateLoadBalancerTCPListenerResponse
     *
     * @param CreateLoadBalancerTCPListenerRequest $request
     *
     * @return CreateLoadBalancerTCPListenerResponse
     */
    public function createLoadBalancerTCPListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoadBalancerTCPListenerWithOptions($request, $runtime);
    }

    /**
     * Creates a User Datagram Protocol (UDP) listener.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - CreateLoadBalancerUDPListenerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateLoadBalancerUDPListenerResponse
     *
     * @param CreateLoadBalancerUDPListenerRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return CreateLoadBalancerUDPListenerResponse
     */
    public function createLoadBalancerUDPListenerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->backendServerPort) {
            @$query['BackendServerPort'] = $request->backendServerPort;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->eipTransmit) {
            @$query['EipTransmit'] = $request->eipTransmit;
        }

        if (null !== $request->establishedTimeout) {
            @$query['EstablishedTimeout'] = $request->establishedTimeout;
        }

        if (null !== $request->healthCheckConnectPort) {
            @$query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }

        if (null !== $request->healthCheckConnectTimeout) {
            @$query['HealthCheckConnectTimeout'] = $request->healthCheckConnectTimeout;
        }

        if (null !== $request->healthCheckExp) {
            @$query['HealthCheckExp'] = $request->healthCheckExp;
        }

        if (null !== $request->healthCheckInterval) {
            @$query['HealthCheckInterval'] = $request->healthCheckInterval;
        }

        if (null !== $request->healthCheckReq) {
            @$query['HealthCheckReq'] = $request->healthCheckReq;
        }

        if (null !== $request->healthyThreshold) {
            @$query['HealthyThreshold'] = $request->healthyThreshold;
        }

        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->scheduler) {
            @$query['Scheduler'] = $request->scheduler;
        }

        if (null !== $request->unhealthyThreshold) {
            @$query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateLoadBalancerUDPListener',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateLoadBalancerUDPListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a User Datagram Protocol (UDP) listener.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - CreateLoadBalancerUDPListenerRequest
     *
     * @returns CreateLoadBalancerUDPListenerResponse
     *
     * @param CreateLoadBalancerUDPListenerRequest $request
     *
     * @return CreateLoadBalancerUDPListenerResponse
     */
    public function createLoadBalancerUDPListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoadBalancerUDPListenerWithOptions($request, $runtime);
    }

    /**
     * Creates a mount target.
     *
     * @remarks
     * ## [](#)Precautions
     * After you call this operation, a mount target is not immediately created. Therefore, we recommend that you call the DescribeMountTargets operation to query the status of the mount target. If the mount target is in the Active state, you can then mount the file system. Otherwise, the file system may fail to be mounted.
     *
     * @param request - CreateMountTargetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateMountTargetResponse
     *
     * @param CreateMountTargetRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateMountTargetResponse
     */
    public function createMountTargetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->mountTargetName) {
            @$query['MountTargetName'] = $request->mountTargetName;
        }

        if (null !== $request->netWorkId) {
            @$query['NetWorkId'] = $request->netWorkId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateMountTarget',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateMountTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a mount target.
     *
     * @remarks
     * ## [](#)Precautions
     * After you call this operation, a mount target is not immediately created. Therefore, we recommend that you call the DescribeMountTargets operation to query the status of the mount target. If the mount target is in the Active state, you can then mount the file system. Otherwise, the file system may fail to be mounted.
     *
     * @param request - CreateMountTargetRequest
     *
     * @returns CreateMountTargetResponse
     *
     * @param CreateMountTargetRequest $request
     *
     * @return CreateMountTargetResponse
     */
    public function createMountTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMountTargetWithOptions($request, $runtime);
    }

    /**
     * Creates a network address translation (NAT) gateway.
     *
     * @param request - CreateNatGatewayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNatGatewayResponse
     *
     * @param CreateNatGatewayRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateNatGatewayResponse
     */
    public function createNatGatewayWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        if (null !== $request->instanceBillingCycle) {
            @$query['InstanceBillingCycle'] = $request->instanceBillingCycle;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->networkId) {
            @$query['NetworkId'] = $request->networkId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateNatGateway',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateNatGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a network address translation (NAT) gateway.
     *
     * @param request - CreateNatGatewayRequest
     *
     * @returns CreateNatGatewayResponse
     *
     * @param CreateNatGatewayRequest $request
     *
     * @return CreateNatGatewayResponse
     */
    public function createNatGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNatGatewayWithOptions($request, $runtime);
    }

    /**
     * Creates a virtual private cloud (VPC).
     *
     * @remarks
     *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 5 times per second per user.
     *
     * @param request - CreateNetworkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNetworkResponse
     *
     * @param CreateNetworkRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateNetworkResponse
     */
    public function createNetworkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cidrBlock) {
            @$query['CidrBlock'] = $request->cidrBlock;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        if (null !== $request->networkName) {
            @$query['NetworkName'] = $request->networkName;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateNetwork',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a virtual private cloud (VPC).
     *
     * @remarks
     *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 5 times per second per user.
     *
     * @param request - CreateNetworkRequest
     *
     * @returns CreateNetworkResponse
     *
     * @param CreateNetworkRequest $request
     *
     * @return CreateNetworkResponse
     */
    public function createNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNetworkWithOptions($request, $runtime);
    }

    /**
     * Creates a network access control list (ACL).
     *
     * @param request - CreateNetworkAclRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNetworkAclResponse
     *
     * @param CreateNetworkAclRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateNetworkAclResponse
     */
    public function createNetworkAclWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->networkAclName) {
            @$query['NetworkAclName'] = $request->networkAclName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateNetworkAcl',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateNetworkAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a network access control list (ACL).
     *
     * @param request - CreateNetworkAclRequest
     *
     * @returns CreateNetworkAclResponse
     *
     * @param CreateNetworkAclRequest $request
     *
     * @return CreateNetworkAclResponse
     */
    public function createNetworkAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNetworkAclWithOptions($request, $runtime);
    }

    /**
     * Creates a network access control list (ACL) rule.
     *
     * @param request - CreateNetworkAclEntryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNetworkAclEntryResponse
     *
     * @param CreateNetworkAclEntryRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateNetworkAclEntryResponse
     */
    public function createNetworkAclEntryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cidrBlock) {
            @$query['CidrBlock'] = $request->cidrBlock;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->destinationCidrBlock) {
            @$query['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }

        if (null !== $request->direction) {
            @$query['Direction'] = $request->direction;
        }

        if (null !== $request->networkAclEntryName) {
            @$query['NetworkAclEntryName'] = $request->networkAclEntryName;
        }

        if (null !== $request->networkAclId) {
            @$query['NetworkAclId'] = $request->networkAclId;
        }

        if (null !== $request->policy) {
            @$query['Policy'] = $request->policy;
        }

        if (null !== $request->portRange) {
            @$query['PortRange'] = $request->portRange;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->protocol) {
            @$query['Protocol'] = $request->protocol;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateNetworkAclEntry',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateNetworkAclEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a network access control list (ACL) rule.
     *
     * @param request - CreateNetworkAclEntryRequest
     *
     * @returns CreateNetworkAclEntryResponse
     *
     * @param CreateNetworkAclEntryRequest $request
     *
     * @return CreateNetworkAclEntryResponse
     */
    public function createNetworkAclEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNetworkAclEntryWithOptions($request, $runtime);
    }

    /**
     * Create an Elastic Network Interface (ENI).
     *
     * @param tmpReq - CreateNetworkInterfaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateNetworkInterfaceResponse
     *
     * @param CreateNetworkInterfaceRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return CreateNetworkInterfaceResponse
     */
    public function createNetworkInterfaceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateNetworkInterfaceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->securityGroupIds) {
            $request->securityGroupIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->securityGroupIds, 'SecurityGroupIds', 'json');
        }

        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        if (null !== $request->securityGroupIdsShrink) {
            @$query['SecurityGroupIds'] = $request->securityGroupIdsShrink;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateNetworkInterface',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateNetworkInterfaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Create an Elastic Network Interface (ENI).
     *
     * @param request - CreateNetworkInterfaceRequest
     *
     * @returns CreateNetworkInterfaceResponse
     *
     * @param CreateNetworkInterfaceRequest $request
     *
     * @return CreateNetworkInterfaceResponse
     */
    public function createNetworkInterface($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNetworkInterfaceWithOptions($request, $runtime);
    }

    /**
     * Creates a shared data group (SDG) on an Android in Container (AIC) instance.
     *
     * @remarks
     * A SDG can be regarded as a data partition image of a virtual device. You can save a data partition of a virtual device as an SDG. A created SDG can be deployed in data partitions of other virtual devices to achieve rapid data distribution and application. The procedure for calling SDG-related API operations:
     * *   Call the [CreateSDG](~~CreateSDG~~) operation to create an SDG, which is bound to AIC Instance A (InstanceId). After you create the SDG, a blank cloud disk (also known as an original cloud disk) is attached to Device A (InstanceId).
     * *   Install applications on and deliver files to AIC Instance A (InstanceId).
     * *   Call the [SaveSDG](~~SaveSDG~~) operation to save the data disk of AIC instance A as SDG A.
     * *   Call the [DeploySDG](~~DeploySDG~~) operation to deploy SDG A to AIC Instance B. This operattion is executed asynchronously. You can call the [DescribeARMServerInstances](~~DescribeARMServerInstances~~) operation to query the status of AIC Instance B. If the status of AIC Instance B changes to success, AIC insance B is available, and AIC Instances A and B have the same applications running.
     *
     * @param request - CreateSDGRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSDGResponse
     *
     * @param CreateSDGRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateSDGResponse
     */
    public function createSDGWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSDG',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSDGResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a shared data group (SDG) on an Android in Container (AIC) instance.
     *
     * @remarks
     * A SDG can be regarded as a data partition image of a virtual device. You can save a data partition of a virtual device as an SDG. A created SDG can be deployed in data partitions of other virtual devices to achieve rapid data distribution and application. The procedure for calling SDG-related API operations:
     * *   Call the [CreateSDG](~~CreateSDG~~) operation to create an SDG, which is bound to AIC Instance A (InstanceId). After you create the SDG, a blank cloud disk (also known as an original cloud disk) is attached to Device A (InstanceId).
     * *   Install applications on and deliver files to AIC Instance A (InstanceId).
     * *   Call the [SaveSDG](~~SaveSDG~~) operation to save the data disk of AIC instance A as SDG A.
     * *   Call the [DeploySDG](~~DeploySDG~~) operation to deploy SDG A to AIC Instance B. This operattion is executed asynchronously. You can call the [DescribeARMServerInstances](~~DescribeARMServerInstances~~) operation to query the status of AIC Instance B. If the status of AIC Instance B changes to success, AIC insance B is available, and AIC Instances A and B have the same applications running.
     *
     * @param request - CreateSDGRequest
     *
     * @returns CreateSDGResponse
     *
     * @param CreateSDGRequest $request
     *
     * @return CreateSDGResponse
     */
    public function createSDG($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSDGWithOptions($request, $runtime);
    }

    /**
     * Creates a security group.
     *
     * @param tmpReq - CreateSecurityGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSecurityGroupResponse
     *
     * @param CreateSecurityGroupRequest $tmpReq
     * @param RuntimeOptions             $runtime
     *
     * @return CreateSecurityGroupResponse
     */
    public function createSecurityGroupWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateSecurityGroupShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->permissions) {
            $request->permissionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->permissions, 'Permissions', 'json');
        }

        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->permissionsShrink) {
            @$query['Permissions'] = $request->permissionsShrink;
        }

        if (null !== $request->securityGroupName) {
            @$query['SecurityGroupName'] = $request->securityGroupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSecurityGroup',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSecurityGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a security group.
     *
     * @param request - CreateSecurityGroupRequest
     *
     * @returns CreateSecurityGroupResponse
     *
     * @param CreateSecurityGroupRequest $request
     *
     * @return CreateSecurityGroupResponse
     */
    public function createSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * 调用CreateSecurityGroupPermissions创建安全组规则。
     *
     * @param tmpReq - CreateSecurityGroupPermissionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSecurityGroupPermissionsResponse
     *
     * @param CreateSecurityGroupPermissionsRequest $tmpReq
     * @param RuntimeOptions                        $runtime
     *
     * @return CreateSecurityGroupPermissionsResponse
     */
    public function createSecurityGroupPermissionsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateSecurityGroupPermissionsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->permissions) {
            $request->permissionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->permissions, 'Permissions', 'json');
        }

        $query = [];
        if (null !== $request->permissionsShrink) {
            @$query['Permissions'] = $request->permissionsShrink;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSecurityGroupPermissions',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSecurityGroupPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 调用CreateSecurityGroupPermissions创建安全组规则。
     *
     * @param request - CreateSecurityGroupPermissionsRequest
     *
     * @returns CreateSecurityGroupPermissionsResponse
     *
     * @param CreateSecurityGroupPermissionsRequest $request
     *
     * @return CreateSecurityGroupPermissionsResponse
     */
    public function createSecurityGroupPermissions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSecurityGroupPermissionsWithOptions($request, $runtime);
    }

    /**
     * Creates a snapshot.
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

        if (null !== $request->diskId) {
            @$query['DiskId'] = $request->diskId;
        }

        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        if (null !== $request->instanceBillingCycle) {
            @$query['InstanceBillingCycle'] = $request->instanceBillingCycle;
        }

        if (null !== $request->snapshotName) {
            @$query['SnapshotName'] = $request->snapshotName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSnapshot',
            'version' => '2017-11-10',
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
     * Creates a snapshot.
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
     * Adds a source network address translation (SNAT) entry to a specified SNAT table.
     *
     * @param request - CreateSnatEntryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSnatEntryResponse
     *
     * @param CreateSnatEntryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateSnatEntryResponse
     */
    public function createSnatEntryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eipAffinity) {
            @$query['EipAffinity'] = $request->eipAffinity;
        }

        if (null !== $request->idleTimeout) {
            @$query['IdleTimeout'] = $request->idleTimeout;
        }

        if (null !== $request->ispAffinity) {
            @$query['IspAffinity'] = $request->ispAffinity;
        }

        if (null !== $request->natGatewayId) {
            @$query['NatGatewayId'] = $request->natGatewayId;
        }

        if (null !== $request->snatEntryName) {
            @$query['SnatEntryName'] = $request->snatEntryName;
        }

        if (null !== $request->snatIp) {
            @$query['SnatIp'] = $request->snatIp;
        }

        if (null !== $request->sourceCIDR) {
            @$query['SourceCIDR'] = $request->sourceCIDR;
        }

        if (null !== $request->sourceNetworkId) {
            @$query['SourceNetworkId'] = $request->sourceNetworkId;
        }

        if (null !== $request->sourceVSwitchId) {
            @$query['SourceVSwitchId'] = $request->sourceVSwitchId;
        }

        if (null !== $request->standbySnatIp) {
            @$query['StandbySnatIp'] = $request->standbySnatIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSnatEntry',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSnatEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds a source network address translation (SNAT) entry to a specified SNAT table.
     *
     * @param request - CreateSnatEntryRequest
     *
     * @returns CreateSnatEntryResponse
     *
     * @param CreateSnatEntryRequest $request
     *
     * @return CreateSnatEntryResponse
     */
    public function createSnatEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSnatEntryWithOptions($request, $runtime);
    }

    /**
     * Creates a storage gateway.
     *
     * @param tmpReq - CreateStorageGatewayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateStorageGatewayResponse
     *
     * @param CreateStorageGatewayRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return CreateStorageGatewayResponse
     */
    public function createStorageGatewayWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateStorageGatewayShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->orderDetails) {
            $request->orderDetailsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->orderDetails, 'OrderDetails', 'json');
        }

        $query = [];
        if (null !== $request->orderDetailsShrink) {
            @$query['OrderDetails'] = $request->orderDetailsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateStorageGateway',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateStorageGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a storage gateway.
     *
     * @param request - CreateStorageGatewayRequest
     *
     * @returns CreateStorageGatewayResponse
     *
     * @param CreateStorageGatewayRequest $request
     *
     * @return CreateStorageGatewayResponse
     */
    public function createStorageGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStorageGatewayWithOptions($request, $runtime);
    }

    /**
     * Creates a storage volume.
     *
     * @param request - CreateStorageVolumeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateStorageVolumeResponse
     *
     * @param CreateStorageVolumeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateStorageVolumeResponse
     */
    public function createStorageVolumeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->authPassword) {
            @$query['AuthPassword'] = $request->authPassword;
        }

        if (null !== $request->authProtocol) {
            @$query['AuthProtocol'] = $request->authProtocol;
        }

        if (null !== $request->authUser) {
            @$query['AuthUser'] = $request->authUser;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        if (null !== $request->gatewayId) {
            @$query['GatewayId'] = $request->gatewayId;
        }

        if (null !== $request->isAuth) {
            @$query['IsAuth'] = $request->isAuth;
        }

        if (null !== $request->isEnable) {
            @$query['IsEnable'] = $request->isEnable;
        }

        if (null !== $request->storageId) {
            @$query['StorageId'] = $request->storageId;
        }

        if (null !== $request->volumeName) {
            @$query['VolumeName'] = $request->volumeName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateStorageVolume',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateStorageVolumeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a storage volume.
     *
     * @param request - CreateStorageVolumeRequest
     *
     * @returns CreateStorageVolumeResponse
     *
     * @param CreateStorageVolumeRequest $request
     *
     * @return CreateStorageVolumeResponse
     */
    public function createStorageVolume($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStorageVolumeWithOptions($request, $runtime);
    }

    /**
     * A vSwitch is created.
     *
     * @param request - CreateVSwitchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateVSwitchResponse
     *
     * @param CreateVSwitchRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateVSwitchResponse
     */
    public function createVSwitchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->cidrBlock) {
            @$query['CidrBlock'] = $request->cidrBlock;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        if (null !== $request->networkId) {
            @$query['NetworkId'] = $request->networkId;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->vSwitchName) {
            @$query['VSwitchName'] = $request->vSwitchName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateVSwitch',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateVSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * A vSwitch is created.
     *
     * @param request - CreateVSwitchRequest
     *
     * @returns CreateVSwitchResponse
     *
     * @param CreateVSwitchRequest $request
     *
     * @return CreateVSwitchResponse
     */
    public function createVSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVSwitchWithOptions($request, $runtime);
    }

    /**
     * 删除托管公钥.
     *
     * @param request - DeleteAICPublicKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAICPublicKeyResponse
     *
     * @param DeleteAICPublicKeyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteAICPublicKeyResponse
     */
    public function deleteAICPublicKeyWithOptions($request, $runtime)
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
            'action' => 'DeleteAICPublicKey',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAICPublicKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除托管公钥.
     *
     * @param request - DeleteAICPublicKeyRequest
     *
     * @returns DeleteAICPublicKeyResponse
     *
     * @param DeleteAICPublicKeyRequest $request
     *
     * @return DeleteAICPublicKeyResponse
     */
    public function deleteAICPublicKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAICPublicKeyWithOptions($request, $runtime);
    }

    /**
     * Releases all containers and resource instances related to a specific application in an asynchronous manner.
     *
     * @param request - DeleteApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteApplicationResponse
     *
     * @param DeleteApplicationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteApplicationResponse
     */
    public function deleteApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteApplication',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases all containers and resource instances related to a specific application in an asynchronous manner.
     *
     * @param request - DeleteApplicationRequest
     *
     * @returns DeleteApplicationResponse
     *
     * @param DeleteApplicationRequest $request
     *
     * @return DeleteApplicationResponse
     */
    public function deleteApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApplicationWithOptions($request, $runtime);
    }

    /**
     * Deletes a bucket.
     *
     * @remarks
     *   Only the Alibaba Cloud Account ID owner of a bucket can delete the bucket from the account.
     * *   You cannot delete buckets that store objects. You can only delete empty buckets.
     *
     * @param request - DeleteBucketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteBucketResponse
     *
     * @param DeleteBucketRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteBucketResponse
     */
    public function deleteBucketWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucketName) {
            @$query['BucketName'] = $request->bucketName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteBucket',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteBucketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a bucket.
     *
     * @remarks
     *   Only the Alibaba Cloud Account ID owner of a bucket can delete the bucket from the account.
     * *   You cannot delete buckets that store objects. You can only delete empty buckets.
     *
     * @param request - DeleteBucketRequest
     *
     * @returns DeleteBucketResponse
     *
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
     * Deletes the lifecycle rules for objects in a bucket.
     *
     * @param request - DeleteBucketLifecycleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteBucketLifecycleResponse
     *
     * @param DeleteBucketLifecycleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteBucketLifecycleResponse
     */
    public function deleteBucketLifecycleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucketName) {
            @$query['BucketName'] = $request->bucketName;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteBucketLifecycle',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteBucketLifecycleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the lifecycle rules for objects in a bucket.
     *
     * @param request - DeleteBucketLifecycleRequest
     *
     * @returns DeleteBucketLifecycleResponse
     *
     * @param DeleteBucketLifecycleRequest $request
     *
     * @return DeleteBucketLifecycleResponse
     */
    public function deleteBucketLifecycle($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBucketLifecycleWithOptions($request, $runtime);
    }

    /**
     * Deletes a disk.
     *
     * @remarks
     * When you release a disk, the disk must be in the Available state.
     *
     * @param request - DeleteDiskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteDiskResponse
     *
     * @param DeleteDiskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteDiskResponse
     */
    public function deleteDiskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->diskId) {
            @$query['DiskId'] = $request->diskId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteDisk',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteDiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a disk.
     *
     * @remarks
     * When you release a disk, the disk must be in the Available state.
     *
     * @param request - DeleteDiskRequest
     *
     * @returns DeleteDiskResponse
     *
     * @param DeleteDiskRequest $request
     *
     * @return DeleteDiskResponse
     */
    public function deleteDisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDiskWithOptions($request, $runtime);
    }

    /**
     * Deletes a pay-as-you-go elastic IP address (EIP).
     *
     * @param request - DeleteEipRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEipResponse
     *
     * @param DeleteEipRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteEipResponse
     */
    public function deleteEipWithOptions($request, $runtime)
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
            'action' => 'DeleteEip',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteEipResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a pay-as-you-go elastic IP address (EIP).
     *
     * @param request - DeleteEipRequest
     *
     * @returns DeleteEipResponse
     *
     * @param DeleteEipRequest $request
     *
     * @return DeleteEipResponse
     */
    public function deleteEip($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEipWithOptions($request, $runtime);
    }

    /**
     * Deletes a custom route entry.
     *
     * @param request - DeleteEnsRouteEntryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEnsRouteEntryResponse
     *
     * @param DeleteEnsRouteEntryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteEnsRouteEntryResponse
     */
    public function deleteEnsRouteEntryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->routeEntryId) {
            @$query['RouteEntryId'] = $request->routeEntryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteEnsRouteEntry',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteEnsRouteEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a custom route entry.
     *
     * @param request - DeleteEnsRouteEntryRequest
     *
     * @returns DeleteEnsRouteEntryResponse
     *
     * @param DeleteEnsRouteEntryRequest $request
     *
     * @return DeleteEnsRouteEntryResponse
     */
    public function deleteEnsRouteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEnsRouteEntryWithOptions($request, $runtime);
    }

    /**
     * 删除售卖约束的条件约束
     *
     * @param tmpReq - DeleteEnsSaleConditionControlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEnsSaleConditionControlResponse
     *
     * @param DeleteEnsSaleConditionControlRequest $tmpReq
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteEnsSaleConditionControlResponse
     */
    public function deleteEnsSaleConditionControlWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteEnsSaleConditionControlShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->saleControls) {
            $request->saleControlsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->saleControls, 'SaleControls', 'json');
        }

        $query = [];
        if (null !== $request->aliUidAccount) {
            @$query['AliUidAccount'] = $request->aliUidAccount;
        }

        if (null !== $request->commodityCode) {
            @$query['CommodityCode'] = $request->commodityCode;
        }

        if (null !== $request->customAccount) {
            @$query['CustomAccount'] = $request->customAccount;
        }

        if (null !== $request->saleControlsShrink) {
            @$query['SaleControls'] = $request->saleControlsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteEnsSaleConditionControl',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteEnsSaleConditionControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除售卖约束的条件约束
     *
     * @param request - DeleteEnsSaleConditionControlRequest
     *
     * @returns DeleteEnsSaleConditionControlResponse
     *
     * @param DeleteEnsSaleConditionControlRequest $request
     *
     * @return DeleteEnsSaleConditionControlResponse
     */
    public function deleteEnsSaleConditionControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEnsSaleConditionControlWithOptions($request, $runtime);
    }

    /**
     * 删除售卖约束基础约束
     *
     * @param tmpReq - DeleteEnsSaleControlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEnsSaleControlResponse
     *
     * @param DeleteEnsSaleControlRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteEnsSaleControlResponse
     */
    public function deleteEnsSaleControlWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteEnsSaleControlShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->saleControls) {
            $request->saleControlsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->saleControls, 'SaleControls', 'json');
        }

        $query = [];
        if (null !== $request->aliUidAccount) {
            @$query['AliUidAccount'] = $request->aliUidAccount;
        }

        if (null !== $request->commodityCode) {
            @$query['CommodityCode'] = $request->commodityCode;
        }

        if (null !== $request->customAccount) {
            @$query['CustomAccount'] = $request->customAccount;
        }

        if (null !== $request->saleControlsShrink) {
            @$query['SaleControls'] = $request->saleControlsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteEnsSaleControl',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteEnsSaleControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 删除售卖约束基础约束
     *
     * @param request - DeleteEnsSaleControlRequest
     *
     * @returns DeleteEnsSaleControlResponse
     *
     * @param DeleteEnsSaleControlRequest $request
     *
     * @return DeleteEnsSaleControlResponse
     */
    public function deleteEnsSaleControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEnsSaleControlWithOptions($request, $runtime);
    }

    /**
     * Deletes an edge private network (EPN) instance.
     *
     * @remarks
     * You can delete an EPN instance only when the instance group information is empty.
     *
     * @param request - DeleteEpnInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteEpnInstanceResponse
     *
     * @param DeleteEpnInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteEpnInstanceResponse
     */
    public function deleteEpnInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->EPNInstanceId) {
            @$query['EPNInstanceId'] = $request->EPNInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteEpnInstance',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteEpnInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an edge private network (EPN) instance.
     *
     * @remarks
     * You can delete an EPN instance only when the instance group information is empty.
     *
     * @param request - DeleteEpnInstanceRequest
     *
     * @returns DeleteEpnInstanceResponse
     *
     * @param DeleteEpnInstanceRequest $request
     *
     * @return DeleteEpnInstanceResponse
     */
    public function deleteEpnInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEpnInstanceWithOptions($request, $runtime);
    }

    /**
     * Deletes a File Storage NAS file system.
     *
     * @param request - DeleteFileSystemRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteFileSystemResponse
     *
     * @param DeleteFileSystemRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteFileSystemResponse
     */
    public function deleteFileSystemWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteFileSystem',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteFileSystemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a File Storage NAS file system.
     *
     * @param request - DeleteFileSystemRequest
     *
     * @returns DeleteFileSystemResponse
     *
     * @param DeleteFileSystemRequest $request
     *
     * @return DeleteFileSystemResponse
     */
    public function deleteFileSystem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFileSystemWithOptions($request, $runtime);
    }

    /**
     * Deletes a Destination Network Address Translation (DNAT) entry from a specified DNAT table.
     *
     * @param request - DeleteForwardEntryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteForwardEntryResponse
     *
     * @param DeleteForwardEntryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteForwardEntryResponse
     */
    public function deleteForwardEntryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->forwardEntryId) {
            @$query['ForwardEntryId'] = $request->forwardEntryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteForwardEntry',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteForwardEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a Destination Network Address Translation (DNAT) entry from a specified DNAT table.
     *
     * @param request - DeleteForwardEntryRequest
     *
     * @returns DeleteForwardEntryResponse
     *
     * @param DeleteForwardEntryRequest $request
     *
     * @return DeleteForwardEntryResponse
     */
    public function deleteForwardEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteForwardEntryWithOptions($request, $runtime);
    }

    /**
     * Deletes a high-availability VIP (HAVIP).
     *
     * @param tmpReq - DeleteHaVipsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteHaVipsResponse
     *
     * @param DeleteHaVipsRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteHaVipsResponse
     */
    public function deleteHaVipsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteHaVipsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->haVipIds) {
            $request->haVipIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->haVipIds, 'HaVipIds', 'json');
        }

        $query = [];
        if (null !== $request->haVipIdsShrink) {
            @$query['HaVipIds'] = $request->haVipIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteHaVips',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteHaVipsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a high-availability VIP (HAVIP).
     *
     * @param request - DeleteHaVipsRequest
     *
     * @returns DeleteHaVipsResponse
     *
     * @param DeleteHaVipsRequest $request
     *
     * @return DeleteHaVipsResponse
     */
    public function deleteHaVips($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteHaVipsWithOptions($request, $runtime);
    }

    /**
     * Deletes a custom image.
     *
     * @param request - DeleteImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteImageResponse
     *
     * @param DeleteImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteImageResponse
     */
    public function deleteImageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteImage',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a custom image.
     *
     * @param request - DeleteImageRequest
     *
     * @returns DeleteImageResponse
     *
     * @param DeleteImageRequest $request
     *
     * @return DeleteImageResponse
     */
    public function deleteImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteImageWithOptions($request, $runtime);
    }

    /**
     * Deletes SSH key pairs.
     *
     * @remarks
     *   After you delete an SSH key pair, you can no longer query the key pair by calling the DescribeKeyPairs operation.
     * *   If you delete an SSH key pair that is bound to an Edge Node Service (ENS) instance, ENS no longer stores the SSH key pair. However, you can still use the key pair to access the instance. When you call the DescribeInstance operation to query instance information, no other information but the name of the key pair (**KeyPairName**) is returned.
     *
     * @param request - DeleteKeyPairsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteKeyPairsResponse
     *
     * @param DeleteKeyPairsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteKeyPairsResponse
     */
    public function deleteKeyPairsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyPairId) {
            @$query['KeyPairId'] = $request->keyPairId;
        }

        if (null !== $request->keyPairName) {
            @$query['KeyPairName'] = $request->keyPairName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteKeyPairs',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteKeyPairsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes SSH key pairs.
     *
     * @remarks
     *   After you delete an SSH key pair, you can no longer query the key pair by calling the DescribeKeyPairs operation.
     * *   If you delete an SSH key pair that is bound to an Edge Node Service (ENS) instance, ENS no longer stores the SSH key pair. However, you can still use the key pair to access the instance. When you call the DescribeInstance operation to query instance information, no other information but the name of the key pair (**KeyPairName**) is returned.
     *
     * @param request - DeleteKeyPairsRequest
     *
     * @returns DeleteKeyPairsResponse
     *
     * @param DeleteKeyPairsRequest $request
     *
     * @return DeleteKeyPairsResponse
     */
    public function deleteKeyPairs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteKeyPairsWithOptions($request, $runtime);
    }

    /**
     * Deletes a listener.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - DeleteLoadBalancerListenerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteLoadBalancerListenerResponse
     *
     * @param DeleteLoadBalancerListenerRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DeleteLoadBalancerListenerResponse
     */
    public function deleteLoadBalancerListenerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->listenerProtocol) {
            @$query['ListenerProtocol'] = $request->listenerProtocol;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteLoadBalancerListener',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteLoadBalancerListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a listener.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - DeleteLoadBalancerListenerRequest
     *
     * @returns DeleteLoadBalancerListenerResponse
     *
     * @param DeleteLoadBalancerListenerRequest $request
     *
     * @return DeleteLoadBalancerListenerResponse
     */
    public function deleteLoadBalancerListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLoadBalancerListenerWithOptions($request, $runtime);
    }

    /**
     * Deletes a mount target.
     *
     * @remarks
     * After you delete a mount target, the mount target cannot be restored. Proceed with caution.
     *
     * @param request - DeleteMountTargetRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteMountTargetResponse
     *
     * @param DeleteMountTargetRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteMountTargetResponse
     */
    public function deleteMountTargetWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->mountTargetName) {
            @$query['MountTargetName'] = $request->mountTargetName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteMountTarget',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteMountTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a mount target.
     *
     * @remarks
     * After you delete a mount target, the mount target cannot be restored. Proceed with caution.
     *
     * @param request - DeleteMountTargetRequest
     *
     * @returns DeleteMountTargetResponse
     *
     * @param DeleteMountTargetRequest $request
     *
     * @return DeleteMountTargetResponse
     */
    public function deleteMountTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMountTargetWithOptions($request, $runtime);
    }

    /**
     * Deletes an Internet network address translation (NAT) gateway.
     *
     * @param request - DeleteNatGatewayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNatGatewayResponse
     *
     * @param DeleteNatGatewayRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteNatGatewayResponse
     */
    public function deleteNatGatewayWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->forceDelete) {
            @$query['ForceDelete'] = $request->forceDelete;
        }

        if (null !== $request->natGatewayId) {
            @$query['NatGatewayId'] = $request->natGatewayId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteNatGateway',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteNatGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an Internet network address translation (NAT) gateway.
     *
     * @param request - DeleteNatGatewayRequest
     *
     * @returns DeleteNatGatewayResponse
     *
     * @param DeleteNatGatewayRequest $request
     *
     * @return DeleteNatGatewayResponse
     */
    public function deleteNatGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNatGatewayWithOptions($request, $runtime);
    }

    /**
     * Deletes a virtual private cloud (VPC).
     *
     * @param request - DeleteNetworkRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNetworkResponse
     *
     * @param DeleteNetworkRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteNetworkResponse
     */
    public function deleteNetworkWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->networkId) {
            @$query['NetworkId'] = $request->networkId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteNetwork',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a virtual private cloud (VPC).
     *
     * @param request - DeleteNetworkRequest
     *
     * @returns DeleteNetworkResponse
     *
     * @param DeleteNetworkRequest $request
     *
     * @return DeleteNetworkResponse
     */
    public function deleteNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNetworkWithOptions($request, $runtime);
    }

    /**
     * Deletes a network access control list (ACL).
     *
     * @param request - DeleteNetworkAclRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNetworkAclResponse
     *
     * @param DeleteNetworkAclRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteNetworkAclResponse
     */
    public function deleteNetworkAclWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->networkAclId) {
            @$query['NetworkAclId'] = $request->networkAclId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteNetworkAcl',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteNetworkAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a network access control list (ACL).
     *
     * @param request - DeleteNetworkAclRequest
     *
     * @returns DeleteNetworkAclResponse
     *
     * @param DeleteNetworkAclRequest $request
     *
     * @return DeleteNetworkAclResponse
     */
    public function deleteNetworkAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNetworkAclWithOptions($request, $runtime);
    }

    /**
     * Deletes a network access control list (ACL) rule.
     *
     * @param request - DeleteNetworkAclEntryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNetworkAclEntryResponse
     *
     * @param DeleteNetworkAclEntryRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteNetworkAclEntryResponse
     */
    public function deleteNetworkAclEntryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->networkAclEntryId) {
            @$query['NetworkAclEntryId'] = $request->networkAclEntryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteNetworkAclEntry',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteNetworkAclEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a network access control list (ACL) rule.
     *
     * @param request - DeleteNetworkAclEntryRequest
     *
     * @returns DeleteNetworkAclEntryResponse
     *
     * @param DeleteNetworkAclEntryRequest $request
     *
     * @return DeleteNetworkAclEntryResponse
     */
    public function deleteNetworkAclEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNetworkAclEntryWithOptions($request, $runtime);
    }

    /**
     * Deletes an elastic network interface (ENI).
     *
     * @param tmpReq - DeleteNetworkInterfacesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteNetworkInterfacesResponse
     *
     * @param DeleteNetworkInterfacesRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return DeleteNetworkInterfacesResponse
     */
    public function deleteNetworkInterfacesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteNetworkInterfacesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->networkInterfaceIds) {
            $request->networkInterfaceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->networkInterfaceIds, 'NetworkInterfaceIds', 'json');
        }

        $query = [];
        if (null !== $request->networkInterfaceIdsShrink) {
            @$query['NetworkInterfaceIds'] = $request->networkInterfaceIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteNetworkInterfaces',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteNetworkInterfacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an elastic network interface (ENI).
     *
     * @param request - DeleteNetworkInterfacesRequest
     *
     * @returns DeleteNetworkInterfacesResponse
     *
     * @param DeleteNetworkInterfacesRequest $request
     *
     * @return DeleteNetworkInterfacesResponse
     */
    public function deleteNetworkInterfaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNetworkInterfacesWithOptions($request, $runtime);
    }

    /**
     * Deletes an object.
     *
     * @param request - DeleteObjectRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteObjectResponse
     *
     * @param DeleteObjectRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteObjectResponse
     */
    public function deleteObjectWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucketName) {
            @$query['BucketName'] = $request->bucketName;
        }

        if (null !== $request->objectKey) {
            @$query['ObjectKey'] = $request->objectKey;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteObject',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteObjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an object.
     *
     * @param request - DeleteObjectRequest
     *
     * @returns DeleteObjectResponse
     *
     * @param DeleteObjectRequest $request
     *
     * @return DeleteObjectResponse
     */
    public function deleteObject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteObjectWithOptions($request, $runtime);
    }

    /**
     * Deletes a shared data group (SDG).
     *
     * @remarks
     * If all the SDGs corresponding to the original disk are deleted, the original disk is automatically cleared.
     *
     * @param tmpReq - DeleteSDGRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSDGResponse
     *
     * @param DeleteSDGRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteSDGResponse
     */
    public function deleteSDGWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteSDGShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->SDGId) {
            $request->SDGIdShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->SDGId, 'SDGId', 'json');
        }

        $query = [];
        if (null !== $request->SDGIdShrink) {
            @$query['SDGId'] = $request->SDGIdShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSDG',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSDGResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a shared data group (SDG).
     *
     * @remarks
     * If all the SDGs corresponding to the original disk are deleted, the original disk is automatically cleared.
     *
     * @param request - DeleteSDGRequest
     *
     * @returns DeleteSDGResponse
     *
     * @param DeleteSDGRequest $request
     *
     * @return DeleteSDGResponse
     */
    public function deleteSDG($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSDGWithOptions($request, $runtime);
    }

    /**
     * Deletes a security group.
     *
     * @remarks
     * Before you delete a security group, make sure that no instances exist in the security group.
     *
     * @param request - DeleteSecurityGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSecurityGroupResponse
     *
     * @param DeleteSecurityGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteSecurityGroupResponse
     */
    public function deleteSecurityGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSecurityGroup',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSecurityGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a security group.
     *
     * @remarks
     * Before you delete a security group, make sure that no instances exist in the security group.
     *
     * @param request - DeleteSecurityGroupRequest
     *
     * @returns DeleteSecurityGroupResponse
     *
     * @param DeleteSecurityGroupRequest $request
     *
     * @return DeleteSecurityGroupResponse
     */
    public function deleteSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * 调用DeleteSecurityGroupPermissions删除安全组规则。
     *
     * @param tmpReq - DeleteSecurityGroupPermissionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSecurityGroupPermissionsResponse
     *
     * @param DeleteSecurityGroupPermissionsRequest $tmpReq
     * @param RuntimeOptions                        $runtime
     *
     * @return DeleteSecurityGroupPermissionsResponse
     */
    public function deleteSecurityGroupPermissionsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteSecurityGroupPermissionsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->permissions) {
            $request->permissionsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->permissions, 'Permissions', 'json');
        }

        $query = [];
        if (null !== $request->permissionsShrink) {
            @$query['Permissions'] = $request->permissionsShrink;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSecurityGroupPermissions',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSecurityGroupPermissionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 调用DeleteSecurityGroupPermissions删除安全组规则。
     *
     * @param request - DeleteSecurityGroupPermissionsRequest
     *
     * @returns DeleteSecurityGroupPermissionsResponse
     *
     * @param DeleteSecurityGroupPermissionsRequest $request
     *
     * @return DeleteSecurityGroupPermissionsResponse
     */
    public function deleteSecurityGroupPermissions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSecurityGroupPermissionsWithOptions($request, $runtime);
    }

    /**
     * Deletes a snapshot.
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
        if (null !== $request->snapshotId) {
            @$query['SnapshotId'] = $request->snapshotId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSnapshot',
            'version' => '2017-11-10',
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
     * Deletes a snapshot.
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
     * Deletes a source network address translation (SNAT) entry from a specified SNAT table.
     *
     * @param request - DeleteSnatEntryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSnatEntryResponse
     *
     * @param DeleteSnatEntryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteSnatEntryResponse
     */
    public function deleteSnatEntryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->snatEntryId) {
            @$query['SnatEntryId'] = $request->snatEntryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSnatEntry',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSnatEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a source network address translation (SNAT) entry from a specified SNAT table.
     *
     * @param request - DeleteSnatEntryRequest
     *
     * @returns DeleteSnatEntryResponse
     *
     * @param DeleteSnatEntryRequest $request
     *
     * @return DeleteSnatEntryResponse
     */
    public function deleteSnatEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSnatEntryWithOptions($request, $runtime);
    }

    /**
     * Deletes an elastic IP address (EIP) from a source network address translation (SNAT) entry.
     *
     * @param request - DeleteSnatIpForSnatEntryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSnatIpForSnatEntryResponse
     *
     * @param DeleteSnatIpForSnatEntryRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteSnatIpForSnatEntryResponse
     */
    public function deleteSnatIpForSnatEntryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->snatEntryId) {
            @$query['SnatEntryId'] = $request->snatEntryId;
        }

        if (null !== $request->snatIp) {
            @$query['SnatIp'] = $request->snatIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSnatIpForSnatEntry',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSnatIpForSnatEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an elastic IP address (EIP) from a source network address translation (SNAT) entry.
     *
     * @param request - DeleteSnatIpForSnatEntryRequest
     *
     * @returns DeleteSnatIpForSnatEntryResponse
     *
     * @param DeleteSnatIpForSnatEntryRequest $request
     *
     * @return DeleteSnatIpForSnatEntryResponse
     */
    public function deleteSnatIpForSnatEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSnatIpForSnatEntryWithOptions($request, $runtime);
    }

    /**
     * Deletes a storage gateway.
     *
     * @param request - DeleteStorageGatewayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteStorageGatewayResponse
     *
     * @param DeleteStorageGatewayRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteStorageGatewayResponse
     */
    public function deleteStorageGatewayWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->gatewayId) {
            @$query['GatewayId'] = $request->gatewayId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteStorageGateway',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteStorageGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a storage gateway.
     *
     * @param request - DeleteStorageGatewayRequest
     *
     * @returns DeleteStorageGatewayResponse
     *
     * @param DeleteStorageGatewayRequest $request
     *
     * @return DeleteStorageGatewayResponse
     */
    public function deleteStorageGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStorageGatewayWithOptions($request, $runtime);
    }

    /**
     * Deletes a storage volume.
     *
     * @param request - DeleteStorageVolumeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteStorageVolumeResponse
     *
     * @param DeleteStorageVolumeRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteStorageVolumeResponse
     */
    public function deleteStorageVolumeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->volumeId) {
            @$query['VolumeId'] = $request->volumeId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteStorageVolume',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteStorageVolumeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a storage volume.
     *
     * @param request - DeleteStorageVolumeRequest
     *
     * @returns DeleteStorageVolumeResponse
     *
     * @param DeleteStorageVolumeRequest $request
     *
     * @return DeleteStorageVolumeResponse
     */
    public function deleteStorageVolume($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStorageVolumeWithOptions($request, $runtime);
    }

    /**
     * Deletes a vSwitch.
     *
     * @remarks
     * Before you delete a vSwitch, make sure that no instances exist in the vSwitch.
     *
     * @param request - DeleteVSwitchRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteVSwitchResponse
     *
     * @param DeleteVSwitchRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteVSwitchResponse
     */
    public function deleteVSwitchWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteVSwitch',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteVSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a vSwitch.
     *
     * @remarks
     * Before you delete a vSwitch, make sure that no instances exist in the vSwitch.
     *
     * @param request - DeleteVSwitchRequest
     *
     * @returns DeleteVSwitchResponse
     *
     * @param DeleteVSwitchRequest $request
     *
     * @return DeleteVSwitchResponse
     */
    public function deleteVSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVSwitchWithOptions($request, $runtime);
    }

    /**
     * Deploys a shared data group (SDG) to compute instances.
     *
     * @param tmpReq - DeployInstanceSDGRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeployInstanceSDGResponse
     *
     * @param DeployInstanceSDGRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return DeployInstanceSDGResponse
     */
    public function deployInstanceSDGWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeployInstanceSDGShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceIds) {
            $request->instanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }

        $query = [];
        if (null !== $request->deploymentType) {
            @$query['DeploymentType'] = $request->deploymentType;
        }

        if (null !== $request->diskAccessProtocol) {
            @$query['DiskAccessProtocol'] = $request->diskAccessProtocol;
        }

        if (null !== $request->diskType) {
            @$query['DiskType'] = $request->diskType;
        }

        if (null !== $request->instanceIdsShrink) {
            @$query['InstanceIds'] = $request->instanceIdsShrink;
        }

        if (null !== $request->SDGId) {
            @$query['SDGId'] = $request->SDGId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeployInstanceSDG',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeployInstanceSDGResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deploys a shared data group (SDG) to compute instances.
     *
     * @param request - DeployInstanceSDGRequest
     *
     * @returns DeployInstanceSDGResponse
     *
     * @param DeployInstanceSDGRequest $request
     *
     * @return DeployInstanceSDGResponse
     */
    public function deployInstanceSDG($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deployInstanceSDGWithOptions($request, $runtime);
    }

    /**
     * Deploys shared data groups (SDGs).
     *
     * @param tmpReq - DeploySDGRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeploySDGResponse
     *
     * @param DeploySDGRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return DeploySDGResponse
     */
    public function deploySDGWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeploySDGShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceIds) {
            $request->instanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeploySDG',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeploySDGResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deploys shared data groups (SDGs).
     *
     * @param request - DeploySDGRequest
     *
     * @returns DeploySDGResponse
     *
     * @param DeploySDGRequest $request
     *
     * @return DeploySDGResponse
     */
    public function deploySDG($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deploySDGWithOptions($request, $runtime);
    }

    /**
     * Queries information about images of the Android in Container (AIC) instance.
     *
     * @param request - DescribeAICImagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAICImagesResponse
     *
     * @param DescribeAICImagesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeAICImagesResponse
     */
    public function describeAICImagesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->imageType) {
            @$query['ImageType'] = $request->imageType;
        }

        if (null !== $request->imageUrl) {
            @$query['ImageUrl'] = $request->imageUrl;
        }

        if (null !== $request->maxDate) {
            @$query['MaxDate'] = $request->maxDate;
        }

        if (null !== $request->minDate) {
            @$query['MinDate'] = $request->minDate;
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

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAICImages',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAICImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about images of the Android in Container (AIC) instance.
     *
     * @param request - DescribeAICImagesRequest
     *
     * @returns DescribeAICImagesResponse
     *
     * @param DescribeAICImagesRequest $request
     *
     * @return DescribeAICImagesResponse
     */
    public function describeAICImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAICImagesWithOptions($request, $runtime);
    }

    /**
     * Queries information about ARM servers and Android in Container (AIC) instances.
     *
     * @param tmpReq - DescribeARMServerInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeARMServerInstancesResponse
     *
     * @param DescribeARMServerInstancesRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeARMServerInstancesResponse
     */
    public function describeARMServerInstancesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeARMServerInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->AICSpecs) {
            $request->AICSpecsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->AICSpecs, 'AICSpecs', 'json');
        }

        if (null !== $tmpReq->ensRegionIds) {
            $request->ensRegionIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ensRegionIds, 'EnsRegionIds', 'json');
        }

        if (null !== $tmpReq->serverIds) {
            $request->serverIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->serverIds, 'ServerIds', 'json');
        }

        if (null !== $tmpReq->serverSpecs) {
            $request->serverSpecsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->serverSpecs, 'ServerSpecs', 'json');
        }

        if (null !== $tmpReq->states) {
            $request->statesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->states, 'States', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeARMServerInstances',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeARMServerInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about ARM servers and Android in Container (AIC) instances.
     *
     * @param request - DescribeARMServerInstancesRequest
     *
     * @returns DescribeARMServerInstancesResponse
     *
     * @param DescribeARMServerInstancesRequest $request
     *
     * @return DescribeARMServerInstancesResponse
     */
    public function describeARMServerInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeARMServerInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries the basic properties, resources, and container status of an application.
     *
     * @param request - DescribeApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeApplicationResponse
     *
     * @param DescribeApplicationRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeApplicationResponse
     */
    public function describeApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->appVersions) {
            @$query['AppVersions'] = $request->appVersions;
        }

        if (null !== $request->level) {
            @$query['Level'] = $request->level;
        }

        if (null !== $request->outDetailStatParams) {
            @$query['OutDetailStatParams'] = $request->outDetailStatParams;
        }

        if (null !== $request->resourceSelector) {
            @$query['ResourceSelector'] = $request->resourceSelector;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeApplication',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the basic properties, resources, and container status of an application.
     *
     * @param request - DescribeApplicationRequest
     *
     * @returns DescribeApplicationResponse
     *
     * @param DescribeApplicationRequest $request
     *
     * @return DescribeApplicationResponse
     */
    public function describeApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApplicationWithOptions($request, $runtime);
    }

    /**
     * Queries the resources that can be created.
     *
     * @param request - DescribeAvailableResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAvailableResourceResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeAvailableResourceResponse
     */
    public function describeAvailableResourceWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeAvailableResource',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAvailableResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the resources that can be created.
     *
     * @returns DescribeAvailableResourceResponse
     *
     * @return DescribeAvailableResourceResponse
     */
    public function describeAvailableResource()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableResourceWithOptions($runtime);
    }

    /**
     * Queries the specifications of resources that you can purchase when you create an instance.
     *
     * @param request - DescribeAvailableResourceInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAvailableResourceInfoResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeAvailableResourceInfoResponse
     */
    public function describeAvailableResourceInfoWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeAvailableResourceInfo',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAvailableResourceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the specifications of resources that you can purchase when you create an instance.
     *
     * @returns DescribeAvailableResourceInfoResponse
     *
     * @return DescribeAvailableResourceInfoResponse
     */
    public function describeAvailableResourceInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableResourceInfoWithOptions($runtime);
    }

    /**
     * Queries available bandwidth metering methods.
     *
     * @param request - DescribeBandWithdChargeTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBandWithdChargeTypeResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeBandWithdChargeTypeResponse
     */
    public function describeBandWithdChargeTypeWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeBandWithdChargeType',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBandWithdChargeTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries available bandwidth metering methods.
     *
     * @returns DescribeBandWithdChargeTypeResponse
     *
     * @return DescribeBandWithdChargeTypeResponse
     */
    public function describeBandWithdChargeType()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBandWithdChargeTypeWithOptions($runtime);
    }

    /**
     * Queries the metering method for the bandwidth.
     *
     * @param request - DescribeBandwitdhByInternetChargeTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeBandwitdhByInternetChargeTypeResponse
     *
     * @param DescribeBandwitdhByInternetChargeTypeRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeBandwitdhByInternetChargeTypeResponse
     */
    public function describeBandwitdhByInternetChargeTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        if (null !== $request->isp) {
            @$query['Isp'] = $request->isp;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeBandwitdhByInternetChargeType',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeBandwitdhByInternetChargeTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the metering method for the bandwidth.
     *
     * @param request - DescribeBandwitdhByInternetChargeTypeRequest
     *
     * @returns DescribeBandwitdhByInternetChargeTypeResponse
     *
     * @param DescribeBandwitdhByInternetChargeTypeRequest $request
     *
     * @return DescribeBandwitdhByInternetChargeTypeResponse
     */
    public function describeBandwitdhByInternetChargeType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBandwitdhByInternetChargeTypeWithOptions($request, $runtime);
    }

    /**
     * Queries the available resources in a region.
     *
     * @param request - DescribeCloudDiskAvailableResourceInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCloudDiskAvailableResourceInfoResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeCloudDiskAvailableResourceInfoResponse
     */
    public function describeCloudDiskAvailableResourceInfoWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeCloudDiskAvailableResourceInfo',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCloudDiskAvailableResourceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the available resources in a region.
     *
     * @returns DescribeCloudDiskAvailableResourceInfoResponse
     *
     * @return DescribeCloudDiskAvailableResourceInfoResponse
     */
    public function describeCloudDiskAvailableResourceInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudDiskAvailableResourceInfoWithOptions($runtime);
    }

    /**
     * The specifications of available resources are queried when you create a disk.
     *
     * @param tmpReq - DescribeCloudDiskTypesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCloudDiskTypesResponse
     *
     * @param DescribeCloudDiskTypesRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeCloudDiskTypesResponse
     */
    public function describeCloudDiskTypesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeCloudDiskTypesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ensRegionIds) {
            $request->ensRegionIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ensRegionIds, 'EnsRegionIds', 'json');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCloudDiskTypes',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCloudDiskTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The specifications of available resources are queried when you create a disk.
     *
     * @param request - DescribeCloudDiskTypesRequest
     *
     * @returns DescribeCloudDiskTypesResponse
     *
     * @param DescribeCloudDiskTypesRequest $request
     *
     * @return DescribeCloudDiskTypesResponse
     */
    public function describeCloudDiskTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudDiskTypesWithOptions($request, $runtime);
    }

    /**
     * Queries Container Service for Kubernetes (ACK) edge clusters.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     *
     * @param request - DescribeClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterResponse
     *
     * @param DescribeClusterRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DescribeClusterResponse
     */
    public function describeClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeCluster',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries Container Service for Kubernetes (ACK) edge clusters.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     *
     * @param request - DescribeClusterRequest
     *
     * @returns DescribeClusterResponse
     *
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
     * Queries the certificate of a Container Service for Kubernetes (ACK) edge cluster.
     *
     * @remarks
     *   The maximum number of times that each user can call this operation per second is 100.
     *
     * @param request - DescribeClusterKubeConfigRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeClusterKubeConfigResponse
     *
     * @param DescribeClusterKubeConfigRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeClusterKubeConfigResponse
     */
    public function describeClusterKubeConfigWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeClusterKubeConfig',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeClusterKubeConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the certificate of a Container Service for Kubernetes (ACK) edge cluster.
     *
     * @remarks
     *   The maximum number of times that each user can call this operation per second is 100.
     *
     * @param request - DescribeClusterKubeConfigRequest
     *
     * @returns DescribeClusterKubeConfigResponse
     *
     * @param DescribeClusterKubeConfigRequest $request
     *
     * @return DescribeClusterKubeConfigResponse
     */
    public function describeClusterKubeConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeClusterKubeConfigWithOptions($request, $runtime);
    }

    /**
     * Queries the results of creating an instance.
     *
     * @param request - DescribeCreatePrePaidInstanceResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeCreatePrePaidInstanceResultResponse
     *
     * @param DescribeCreatePrePaidInstanceResultRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeCreatePrePaidInstanceResultResponse
     */
    public function describeCreatePrePaidInstanceResultWithOptions($request, $runtime)
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
            'action' => 'DescribeCreatePrePaidInstanceResult',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeCreatePrePaidInstanceResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the results of creating an instance.
     *
     * @param request - DescribeCreatePrePaidInstanceResultRequest
     *
     * @returns DescribeCreatePrePaidInstanceResultResponse
     *
     * @param DescribeCreatePrePaidInstanceResultRequest $request
     *
     * @return DescribeCreatePrePaidInstanceResultResponse
     */
    public function describeCreatePrePaidInstanceResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCreatePrePaidInstanceResultWithOptions($request, $runtime);
    }

    /**
     * Queries the distribution status of data files on edge instances of an application.
     *
     * @param tmpReq - DescribeDataDistResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDataDistResultResponse
     *
     * @param DescribeDataDistResultRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDataDistResultResponse
     */
    public function describeDataDistResultWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeDataDistResultShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->ensRegionIds) {
            $request->ensRegionIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->ensRegionIds, 'EnsRegionIds', 'json');
        }

        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->dataNames) {
            @$query['DataNames'] = $request->dataNames;
        }

        if (null !== $request->dataVersions) {
            @$query['DataVersions'] = $request->dataVersions;
        }

        if (null !== $request->ensRegionIdsShrink) {
            @$query['EnsRegionIds'] = $request->ensRegionIdsShrink;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->maxDate) {
            @$query['MaxDate'] = $request->maxDate;
        }

        if (null !== $request->minDate) {
            @$query['MinDate'] = $request->minDate;
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
            'action' => 'DescribeDataDistResult',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDataDistResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the distribution status of data files on edge instances of an application.
     *
     * @param request - DescribeDataDistResultRequest
     *
     * @returns DescribeDataDistResultResponse
     *
     * @param DescribeDataDistResultRequest $request
     *
     * @return DescribeDataDistResultResponse
     */
    public function describeDataDistResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataDistResultWithOptions($request, $runtime);
    }

    /**
     * Queries the download URLs of application data on file servers and returns the file servers on which data is pushed.
     *
     * @param request - DescribeDataDownloadURLRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDataDownloadURLResponse
     *
     * @param DescribeDataDownloadURLRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDataDownloadURLResponse
     */
    public function describeDataDownloadURLWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDataDownloadURL',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDataDownloadURLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the download URLs of application data on file servers and returns the file servers on which data is pushed.
     *
     * @param request - DescribeDataDownloadURLRequest
     *
     * @returns DescribeDataDownloadURLResponse
     *
     * @param DescribeDataDownloadURLRequest $request
     *
     * @return DescribeDataDownloadURLResponse
     */
    public function describeDataDownloadURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataDownloadURLWithOptions($request, $runtime);
    }

    /**
     * Queries the push status of application data files on Edge Node Service (ENS) nodes.
     *
     * @param request - DescribeDataPushResultRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDataPushResultResponse
     *
     * @param DescribeDataPushResultRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDataPushResultResponse
     */
    public function describeDataPushResultWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->dataNames) {
            @$query['DataNames'] = $request->dataNames;
        }

        if (null !== $request->dataVersions) {
            @$query['DataVersions'] = $request->dataVersions;
        }

        if (null !== $request->maxDate) {
            @$query['MaxDate'] = $request->maxDate;
        }

        if (null !== $request->minDate) {
            @$query['MinDate'] = $request->minDate;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionIds) {
            @$query['RegionIds'] = $request->regionIds;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDataPushResult',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDataPushResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the push status of application data files on Edge Node Service (ENS) nodes.
     *
     * @param request - DescribeDataPushResultRequest
     *
     * @returns DescribeDataPushResultResponse
     *
     * @param DescribeDataPushResultRequest $request
     *
     * @return DescribeDataPushResultResponse
     */
    public function describeDataPushResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataPushResultWithOptions($request, $runtime);
    }

    /**
     * Queries the properties of instances and virtual devices in a specific edge application.
     *
     * @param request - DescribeDeviceServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDeviceServiceResponse
     *
     * @param DescribeDeviceServiceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDeviceServiceResponse
     */
    public function describeDeviceServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDeviceService',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDeviceServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the properties of instances and virtual devices in a specific edge application.
     *
     * @param request - DescribeDeviceServiceRequest
     *
     * @returns DescribeDeviceServiceResponse
     *
     * @param DescribeDeviceServiceRequest $request
     *
     * @return DescribeDeviceServiceResponse
     */
    public function describeDeviceService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeviceServiceWithOptions($request, $runtime);
    }

    /**
     * Queries the disk IOPS monitoring data.
     *
     * @param request - DescribeDiskIopsListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDiskIopsListResponse
     *
     * @param DescribeDiskIopsListRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeDiskIopsListResponse
     */
    public function describeDiskIopsListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeDiskIopsList',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDiskIopsListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the disk IOPS monitoring data.
     *
     * @param request - DescribeDiskIopsListRequest
     *
     * @returns DescribeDiskIopsListResponse
     *
     * @param DescribeDiskIopsListRequest $request
     *
     * @return DescribeDiskIopsListResponse
     */
    public function describeDiskIopsList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiskIopsListWithOptions($request, $runtime);
    }

    /**
     * Queries the information about one or more disks.
     *
     * @param request - DescribeDisksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeDisksResponse
     *
     * @param DescribeDisksRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeDisksResponse
     */
    public function describeDisksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->category) {
            @$query['Category'] = $request->category;
        }

        if (null !== $request->diskChargeType) {
            @$query['DiskChargeType'] = $request->diskChargeType;
        }

        if (null !== $request->diskId) {
            @$query['DiskId'] = $request->diskId;
        }

        if (null !== $request->diskIds) {
            @$query['DiskIds'] = $request->diskIds;
        }

        if (null !== $request->diskName) {
            @$query['DiskName'] = $request->diskName;
        }

        if (null !== $request->diskType) {
            @$query['DiskType'] = $request->diskType;
        }

        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        if (null !== $request->ensRegionIds) {
            @$query['EnsRegionIds'] = $request->ensRegionIds;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->orderByParams) {
            @$query['OrderByParams'] = $request->orderByParams;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->snapshotId) {
            @$query['SnapshotId'] = $request->snapshotId;
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
            'action' => 'DescribeDisks',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeDisksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about one or more disks.
     *
     * @param request - DescribeDisksRequest
     *
     * @returns DescribeDisksResponse
     *
     * @param DescribeDisksRequest $request
     *
     * @return DescribeDisksResponse
     */
    public function describeDisks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDisksWithOptions($request, $runtime);
    }

    /**
     * Queries the specifications of resources that you can purchase when you create an instance.
     *
     * @param request - DescribeElbAvailableResourceInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeElbAvailableResourceInfoResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeElbAvailableResourceInfoResponse
     */
    public function describeElbAvailableResourceInfoWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeElbAvailableResourceInfo',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeElbAvailableResourceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the specifications of resources that you can purchase when you create an instance.
     *
     * @returns DescribeElbAvailableResourceInfoResponse
     *
     * @return DescribeElbAvailableResourceInfoResponse
     */
    public function describeElbAvailableResourceInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeElbAvailableResourceInfoWithOptions($runtime);
    }

    /**
     * 描述商品code.
     *
     * @param request - DescribeEnsCommodityCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEnsCommodityCodeResponse
     *
     * @param DescribeEnsCommodityCodeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeEnsCommodityCodeResponse
     */
    public function describeEnsCommodityCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->commodityCode) {
            @$query['CommodityCode'] = $request->commodityCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEnsCommodityCode',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEnsCommodityCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 描述商品code.
     *
     * @param request - DescribeEnsCommodityCodeRequest
     *
     * @returns DescribeEnsCommodityCodeResponse
     *
     * @param DescribeEnsCommodityCodeRequest $request
     *
     * @return DescribeEnsCommodityCodeResponse
     */
    public function describeEnsCommodityCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsCommodityCodeWithOptions($request, $runtime);
    }

    /**
     * 获取模块code.
     *
     * @param request - DescribeEnsCommodityModuleCodeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEnsCommodityModuleCodeResponse
     *
     * @param DescribeEnsCommodityModuleCodeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeEnsCommodityModuleCodeResponse
     */
    public function describeEnsCommodityModuleCodeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->commodityCode) {
            @$query['CommodityCode'] = $request->commodityCode;
        }

        if (null !== $request->moduleCode) {
            @$query['ModuleCode'] = $request->moduleCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEnsCommodityModuleCode',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEnsCommodityModuleCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取模块code.
     *
     * @param request - DescribeEnsCommodityModuleCodeRequest
     *
     * @returns DescribeEnsCommodityModuleCodeResponse
     *
     * @param DescribeEnsCommodityModuleCodeRequest $request
     *
     * @return DescribeEnsCommodityModuleCodeResponse
     */
    public function describeEnsCommodityModuleCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsCommodityModuleCodeWithOptions($request, $runtime);
    }

    /**
     * Queries elastic IP addresses (EIPs).
     *
     * @param request - DescribeEnsEipAddressesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEnsEipAddressesResponse
     *
     * @param DescribeEnsEipAddressesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeEnsEipAddressesResponse
     */
    public function describeEnsEipAddressesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allocationId) {
            @$query['AllocationId'] = $request->allocationId;
        }

        if (null !== $request->associatedInstanceId) {
            @$query['AssociatedInstanceId'] = $request->associatedInstanceId;
        }

        if (null !== $request->associatedInstanceType) {
            @$query['AssociatedInstanceType'] = $request->associatedInstanceType;
        }

        if (null !== $request->eipAddress) {
            @$query['EipAddress'] = $request->eipAddress;
        }

        if (null !== $request->eipName) {
            @$query['EipName'] = $request->eipName;
        }

        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        if (null !== $request->ensRegionIds) {
            @$query['EnsRegionIds'] = $request->ensRegionIds;
        }

        if (null !== $request->icmpReplyEnabled) {
            @$query['IcmpReplyEnabled'] = $request->icmpReplyEnabled;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->standby) {
            @$query['Standby'] = $request->standby;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEnsEipAddresses',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEnsEipAddressesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries elastic IP addresses (EIPs).
     *
     * @param request - DescribeEnsEipAddressesRequest
     *
     * @returns DescribeEnsEipAddressesResponse
     *
     * @param DescribeEnsEipAddressesRequest $request
     *
     * @return DescribeEnsEipAddressesResponse
     */
    public function describeEnsEipAddresses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsEipAddressesWithOptions($request, $runtime);
    }

    /**
     * Queries regions in which ENS resources can be created.
     *
     * @param request - DescribeEnsNetDistrictRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEnsNetDistrictResponse
     *
     * @param DescribeEnsNetDistrictRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeEnsNetDistrictResponse
     */
    public function describeEnsNetDistrictWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->netDistrictCode) {
            @$query['NetDistrictCode'] = $request->netDistrictCode;
        }

        if (null !== $request->netDistrictCodeNode) {
            @$query['NetDistrictCodeNode'] = $request->netDistrictCodeNode;
        }

        if (null !== $request->netLevelCode) {
            @$query['NetLevelCode'] = $request->netLevelCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEnsNetDistrict',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEnsNetDistrictResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries regions in which ENS resources can be created.
     *
     * @param request - DescribeEnsNetDistrictRequest
     *
     * @returns DescribeEnsNetDistrictResponse
     *
     * @param DescribeEnsNetDistrictRequest $request
     *
     * @return DescribeEnsNetDistrictResponse
     */
    public function describeEnsNetDistrict($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsNetDistrictWithOptions($request, $runtime);
    }

    /**
     * Queries the supported network levels.
     *
     * @param request - DescribeEnsNetLevelRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEnsNetLevelResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeEnsNetLevelResponse
     */
    public function describeEnsNetLevelWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeEnsNetLevel',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEnsNetLevelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the supported network levels.
     *
     * @returns DescribeEnsNetLevelResponse
     *
     * @return DescribeEnsNetLevelResponse
     */
    public function describeEnsNetLevel()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsNetLevelWithOptions($runtime);
    }

    /**
     * Queries the information about ISPs and number of ISPs in an area.
     *
     * @param request - DescribeEnsNetSaleDistrictRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEnsNetSaleDistrictResponse
     *
     * @param DescribeEnsNetSaleDistrictRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeEnsNetSaleDistrictResponse
     */
    public function describeEnsNetSaleDistrictWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->netDistrictCode) {
            @$query['NetDistrictCode'] = $request->netDistrictCode;
        }

        if (null !== $request->netLevelCode) {
            @$query['NetLevelCode'] = $request->netLevelCode;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEnsNetSaleDistrict',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEnsNetSaleDistrictResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about ISPs and number of ISPs in an area.
     *
     * @param request - DescribeEnsNetSaleDistrictRequest
     *
     * @returns DescribeEnsNetSaleDistrictResponse
     *
     * @param DescribeEnsNetSaleDistrictRequest $request
     *
     * @return DescribeEnsNetSaleDistrictResponse
     */
    public function describeEnsNetSaleDistrict($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsNetSaleDistrictWithOptions($request, $runtime);
    }

    /**
     * Queries whether a node supports IPv6.
     *
     * @param request - DescribeEnsRegionIdIpv6InfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEnsRegionIdIpv6InfoResponse
     *
     * @param DescribeEnsRegionIdIpv6InfoRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeEnsRegionIdIpv6InfoResponse
     */
    public function describeEnsRegionIdIpv6InfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEnsRegionIdIpv6Info',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEnsRegionIdIpv6InfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries whether a node supports IPv6.
     *
     * @param request - DescribeEnsRegionIdIpv6InfoRequest
     *
     * @returns DescribeEnsRegionIdIpv6InfoResponse
     *
     * @param DescribeEnsRegionIdIpv6InfoRequest $request
     *
     * @return DescribeEnsRegionIdIpv6InfoResponse
     */
    public function describeEnsRegionIdIpv6Info($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsRegionIdIpv6InfoWithOptions($request, $runtime);
    }

    /**
     * Queries node resources.
     *
     * @remarks
     *
     * @param request - DescribeEnsRegionIdResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEnsRegionIdResourceResponse
     *
     * @param DescribeEnsRegionIdResourceRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeEnsRegionIdResourceResponse
     */
    public function describeEnsRegionIdResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->isp) {
            @$query['Isp'] = $request->isp;
        }

        if (null !== $request->orderByParams) {
            @$query['OrderByParams'] = $request->orderByParams;
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
            'action' => 'DescribeEnsRegionIdResource',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEnsRegionIdResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries node resources.
     *
     * @remarks
     *
     * @param request - DescribeEnsRegionIdResourceRequest
     *
     * @returns DescribeEnsRegionIdResourceResponse
     *
     * @param DescribeEnsRegionIdResourceRequest $request
     *
     * @return DescribeEnsRegionIdResourceResponse
     */
    public function describeEnsRegionIdResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsRegionIdResourceWithOptions($request, $runtime);
    }

    /**
     * Queries the Edge Node Service (ENS) nodes that you can use.
     *
     * @param request - DescribeEnsRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEnsRegionsResponse
     *
     * @param DescribeEnsRegionsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeEnsRegionsResponse
     */
    public function describeEnsRegionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEnsRegions',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEnsRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Edge Node Service (ENS) nodes that you can use.
     *
     * @param request - DescribeEnsRegionsRequest
     *
     * @returns DescribeEnsRegionsResponse
     *
     * @param DescribeEnsRegionsRequest $request
     *
     * @return DescribeEnsRegionsResponse
     */
    public function describeEnsRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsRegionsWithOptions($request, $runtime);
    }

    /**
     * Queries the usage summary of ENS virtual machines (VMs), disks, and networks.
     *
     * @param request - DescribeEnsResourceUsageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEnsResourceUsageResponse
     *
     * @param DescribeEnsResourceUsageRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeEnsResourceUsageResponse
     */
    public function describeEnsResourceUsageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEnsResourceUsage',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEnsResourceUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the usage summary of ENS virtual machines (VMs), disks, and networks.
     *
     * @param request - DescribeEnsResourceUsageRequest
     *
     * @returns DescribeEnsResourceUsageResponse
     *
     * @param DescribeEnsResourceUsageRequest $request
     *
     * @return DescribeEnsResourceUsageResponse
     */
    public function describeEnsResourceUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsResourceUsageWithOptions($request, $runtime);
    }

    /**
     * Queries route entries.
     *
     * @param request - DescribeEnsRouteEntryListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEnsRouteEntryListResponse
     *
     * @param DescribeEnsRouteEntryListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeEnsRouteEntryListResponse
     */
    public function describeEnsRouteEntryListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->destinationCidrBlock) {
            @$query['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }

        if (null !== $request->nextHopId) {
            @$query['NextHopId'] = $request->nextHopId;
        }

        if (null !== $request->nextHopType) {
            @$query['NextHopType'] = $request->nextHopType;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->routeEntryId) {
            @$query['RouteEntryId'] = $request->routeEntryId;
        }

        if (null !== $request->routeEntryName) {
            @$query['RouteEntryName'] = $request->routeEntryName;
        }

        if (null !== $request->routeEntryType) {
            @$query['RouteEntryType'] = $request->routeEntryType;
        }

        if (null !== $request->routeTableId) {
            @$query['RouteTableId'] = $request->routeTableId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEnsRouteEntryList',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEnsRouteEntryListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries route entries.
     *
     * @param request - DescribeEnsRouteEntryListRequest
     *
     * @returns DescribeEnsRouteEntryListResponse
     *
     * @param DescribeEnsRouteEntryListRequest $request
     *
     * @return DescribeEnsRouteEntryListResponse
     */
    public function describeEnsRouteEntryList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsRouteEntryListWithOptions($request, $runtime);
    }

    /**
     * Queries route tables.
     *
     * @param request - DescribeEnsRouteTablesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEnsRouteTablesResponse
     *
     * @param DescribeEnsRouteTablesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeEnsRouteTablesResponse
     */
    public function describeEnsRouteTablesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->associateType) {
            @$query['AssociateType'] = $request->associateType;
        }

        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        if (null !== $request->ensRegionIds) {
            @$query['EnsRegionIds'] = $request->ensRegionIds;
        }

        if (null !== $request->networkId) {
            @$query['NetworkId'] = $request->networkId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->routeTableId) {
            @$query['RouteTableId'] = $request->routeTableId;
        }

        if (null !== $request->routeTableName) {
            @$query['RouteTableName'] = $request->routeTableName;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEnsRouteTables',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEnsRouteTablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries route tables.
     *
     * @param request - DescribeEnsRouteTablesRequest
     *
     * @returns DescribeEnsRouteTablesResponse
     *
     * @param DescribeEnsRouteTablesRequest $request
     *
     * @return DescribeEnsRouteTablesResponse
     */
    public function describeEnsRouteTables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsRouteTablesWithOptions($request, $runtime);
    }

    /**
     * 展示配置的售卖约束信息.
     *
     * @param request - DescribeEnsSaleControlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEnsSaleControlResponse
     *
     * @param DescribeEnsSaleControlRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeEnsSaleControlResponse
     */
    public function describeEnsSaleControlWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliUidAccount) {
            @$query['AliUidAccount'] = $request->aliUidAccount;
        }

        if (null !== $request->commodityCode) {
            @$query['CommodityCode'] = $request->commodityCode;
        }

        if (null !== $request->customAccount) {
            @$query['CustomAccount'] = $request->customAccount;
        }

        if (null !== $request->moduleCode) {
            @$query['ModuleCode'] = $request->moduleCode;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEnsSaleControl',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEnsSaleControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 展示配置的售卖约束信息.
     *
     * @param request - DescribeEnsSaleControlRequest
     *
     * @returns DescribeEnsSaleControlResponse
     *
     * @param DescribeEnsSaleControlRequest $request
     *
     * @return DescribeEnsSaleControlResponse
     */
    public function describeEnsSaleControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsSaleControlWithOptions($request, $runtime);
    }

    /**
     * 获取可用资源.
     *
     * @param request - DescribeEnsSaleControlAvailableResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEnsSaleControlAvailableResourceResponse
     *
     * @param DescribeEnsSaleControlAvailableResourceRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return DescribeEnsSaleControlAvailableResourceResponse
     */
    public function describeEnsSaleControlAvailableResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->commodityCode) {
            @$query['CommodityCode'] = $request->commodityCode;
        }

        if (null !== $request->customAccount) {
            @$query['CustomAccount'] = $request->customAccount;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEnsSaleControlAvailableResource',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEnsSaleControlAvailableResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取可用资源.
     *
     * @param request - DescribeEnsSaleControlAvailableResourceRequest
     *
     * @returns DescribeEnsSaleControlAvailableResourceResponse
     *
     * @param DescribeEnsSaleControlAvailableResourceRequest $request
     *
     * @return DescribeEnsSaleControlAvailableResourceResponse
     */
    public function describeEnsSaleControlAvailableResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsSaleControlAvailableResourceWithOptions($request, $runtime);
    }

    /**
     * 获取售卖约束库存.
     *
     * @param request - DescribeEnsSaleControlStockRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEnsSaleControlStockResponse
     *
     * @param DescribeEnsSaleControlStockRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeEnsSaleControlStockResponse
     */
    public function describeEnsSaleControlStockWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliUidAccount) {
            @$query['AliUidAccount'] = $request->aliUidAccount;
        }

        if (null !== $request->commodityCode) {
            @$query['CommodityCode'] = $request->commodityCode;
        }

        if (null !== $request->customAccount) {
            @$query['CustomAccount'] = $request->customAccount;
        }

        if (null !== $request->moduleCode) {
            @$query['ModuleCode'] = $request->moduleCode;
        }

        if (null !== $request->orderType) {
            @$query['OrderType'] = $request->orderType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEnsSaleControlStock',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEnsSaleControlStockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取售卖约束库存.
     *
     * @param request - DescribeEnsSaleControlStockRequest
     *
     * @returns DescribeEnsSaleControlStockResponse
     *
     * @param DescribeEnsSaleControlStockRequest $request
     *
     * @return DescribeEnsSaleControlStockResponse
     */
    public function describeEnsSaleControlStock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsSaleControlStockWithOptions($request, $runtime);
    }

    /**
     * Queries the EPN bandwidth usage.
     *
     * @param request - DescribeEpnBandWidthDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEpnBandWidthDataResponse
     *
     * @param DescribeEpnBandWidthDataRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeEpnBandWidthDataResponse
     */
    public function describeEpnBandWidthDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->EPNInstanceId) {
            @$query['EPNInstanceId'] = $request->EPNInstanceId;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->isp) {
            @$query['Isp'] = $request->isp;
        }

        if (null !== $request->networkingModel) {
            @$query['NetworkingModel'] = $request->networkingModel;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEpnBandWidthData',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEpnBandWidthDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the EPN bandwidth usage.
     *
     * @param request - DescribeEpnBandWidthDataRequest
     *
     * @returns DescribeEpnBandWidthDataResponse
     *
     * @param DescribeEpnBandWidthDataRequest $request
     *
     * @return DescribeEpnBandWidthDataResponse
     */
    public function describeEpnBandWidthData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEpnBandWidthDataWithOptions($request, $runtime);
    }

    /**
     * Queries the metering method of the EPN bandwidth within a time period.
     *
     * @param request - DescribeEpnBandwitdhByInternetChargeTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEpnBandwitdhByInternetChargeTypeResponse
     *
     * @param DescribeEpnBandwitdhByInternetChargeTypeRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeEpnBandwitdhByInternetChargeTypeResponse
     */
    public function describeEpnBandwitdhByInternetChargeTypeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        if (null !== $request->isp) {
            @$query['Isp'] = $request->isp;
        }

        if (null !== $request->networkingModel) {
            @$query['NetworkingModel'] = $request->networkingModel;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEpnBandwitdhByInternetChargeType',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEpnBandwitdhByInternetChargeTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the metering method of the EPN bandwidth within a time period.
     *
     * @param request - DescribeEpnBandwitdhByInternetChargeTypeRequest
     *
     * @returns DescribeEpnBandwitdhByInternetChargeTypeResponse
     *
     * @param DescribeEpnBandwitdhByInternetChargeTypeRequest $request
     *
     * @return DescribeEpnBandwitdhByInternetChargeTypeResponse
     */
    public function describeEpnBandwitdhByInternetChargeType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEpnBandwitdhByInternetChargeTypeWithOptions($request, $runtime);
    }

    /**
     * Queries networking information about an EPN instance.
     *
     * @remarks
     * In internal networking mode, the value of Instances is empty in the response. In public networking mode, the value of VSwitches is empty in the response.
     *
     * @param request - DescribeEpnInstanceAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEpnInstanceAttributeResponse
     *
     * @param DescribeEpnInstanceAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeEpnInstanceAttributeResponse
     */
    public function describeEpnInstanceAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->EPNInstanceId) {
            @$query['EPNInstanceId'] = $request->EPNInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEpnInstanceAttribute',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEpnInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries networking information about an EPN instance.
     *
     * @remarks
     * In internal networking mode, the value of Instances is empty in the response. In public networking mode, the value of VSwitches is empty in the response.
     *
     * @param request - DescribeEpnInstanceAttributeRequest
     *
     * @returns DescribeEpnInstanceAttributeResponse
     *
     * @param DescribeEpnInstanceAttributeRequest $request
     *
     * @return DescribeEpnInstanceAttributeResponse
     */
    public function describeEpnInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEpnInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries EPN instances.
     *
     * @param request - DescribeEpnInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEpnInstancesResponse
     *
     * @param DescribeEpnInstancesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeEpnInstancesResponse
     */
    public function describeEpnInstancesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->EPNInstanceId) {
            @$query['EPNInstanceId'] = $request->EPNInstanceId;
        }

        if (null !== $request->EPNInstanceName) {
            @$query['EPNInstanceName'] = $request->EPNInstanceName;
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
            'action' => 'DescribeEpnInstances',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEpnInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries EPN instances.
     *
     * @param request - DescribeEpnInstancesRequest
     *
     * @returns DescribeEpnInstancesResponse
     *
     * @param DescribeEpnInstancesRequest $request
     *
     * @return DescribeEpnInstancesResponse
     */
    public function describeEpnInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEpnInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries the metering data of the edge private network (EPN).
     *
     * @param request - DescribeEpnMeasurementDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeEpnMeasurementDataResponse
     *
     * @param DescribeEpnMeasurementDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeEpnMeasurementDataResponse
     */
    public function describeEpnMeasurementDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeEpnMeasurementData',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeEpnMeasurementDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the metering data of the edge private network (EPN).
     *
     * @param request - DescribeEpnMeasurementDataRequest
     *
     * @returns DescribeEpnMeasurementDataResponse
     *
     * @param DescribeEpnMeasurementDataRequest $request
     *
     * @return DescribeEpnMeasurementDataResponse
     */
    public function describeEpnMeasurementData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEpnMeasurementDataWithOptions($request, $runtime);
    }

    /**
     * Queries the export result of an image.
     *
     * @remarks
     *   You can call this operation to query information about all custom images in your account. The information include the image properties, image export status, and the Object Storage Service (OSS) download links.
     * *   Empty strings are returned for images that are not exported.
     * *   The download links may become invalid if you delete objects in OSS.
     *
     * @param request - DescribeExportImageInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeExportImageInfoResponse
     *
     * @param DescribeExportImageInfoRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeExportImageInfoResponse
     */
    public function describeExportImageInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->imageName) {
            @$query['ImageName'] = $request->imageName;
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
            'action' => 'DescribeExportImageInfo',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeExportImageInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the export result of an image.
     *
     * @remarks
     *   You can call this operation to query information about all custom images in your account. The information include the image properties, image export status, and the Object Storage Service (OSS) download links.
     * *   Empty strings are returned for images that are not exported.
     * *   The download links may become invalid if you delete objects in OSS.
     *
     * @param request - DescribeExportImageInfoRequest
     *
     * @returns DescribeExportImageInfoResponse
     *
     * @param DescribeExportImageInfoRequest $request
     *
     * @return DescribeExportImageInfoResponse
     */
    public function describeExportImageInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExportImageInfoWithOptions($request, $runtime);
    }

    /**
     * Queries the export status of an image.
     *
     * @param request - DescribeExportImageStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeExportImageStatusResponse
     *
     * @param DescribeExportImageStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeExportImageStatusResponse
     */
    public function describeExportImageStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeExportImageStatus',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeExportImageStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the export status of an image.
     *
     * @param request - DescribeExportImageStatusRequest
     *
     * @returns DescribeExportImageStatusResponse
     *
     * @param DescribeExportImageStatusRequest $request
     *
     * @return DescribeExportImageStatusResponse
     */
    public function describeExportImageStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExportImageStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the information about file systems.
     *
     * @param request - DescribeFileSystemsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeFileSystemsResponse
     *
     * @param DescribeFileSystemsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeFileSystemsResponse
     */
    public function describeFileSystemsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeFileSystems',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeFileSystemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about file systems.
     *
     * @param request - DescribeFileSystemsRequest
     *
     * @returns DescribeFileSystemsResponse
     *
     * @param DescribeFileSystemsRequest $request
     *
     * @return DescribeFileSystemsResponse
     */
    public function describeFileSystems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFileSystemsWithOptions($request, $runtime);
    }

    /**
     * 调用DescribeForwardEntryAttribute查询DNAT条目明细.
     *
     * @param request - DescribeForwardEntryAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeForwardEntryAttributeResponse
     *
     * @param DescribeForwardEntryAttributeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeForwardEntryAttributeResponse
     */
    public function describeForwardEntryAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->forwardEntryId) {
            @$query['ForwardEntryId'] = $request->forwardEntryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeForwardEntryAttribute',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeForwardEntryAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 调用DescribeForwardEntryAttribute查询DNAT条目明细.
     *
     * @param request - DescribeForwardEntryAttributeRequest
     *
     * @returns DescribeForwardEntryAttributeResponse
     *
     * @param DescribeForwardEntryAttributeRequest $request
     *
     * @return DescribeForwardEntryAttributeResponse
     */
    public function describeForwardEntryAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeForwardEntryAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries Destination Network Address Translation (DNAT) entries that you created.
     *
     * @param request - DescribeForwardTableEntriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeForwardTableEntriesResponse
     *
     * @param DescribeForwardTableEntriesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeForwardTableEntriesResponse
     */
    public function describeForwardTableEntriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->externalIp) {
            @$query['ExternalIp'] = $request->externalIp;
        }

        if (null !== $request->forwardEntryId) {
            @$query['ForwardEntryId'] = $request->forwardEntryId;
        }

        if (null !== $request->forwardEntryName) {
            @$query['ForwardEntryName'] = $request->forwardEntryName;
        }

        if (null !== $request->internalIp) {
            @$query['InternalIp'] = $request->internalIp;
        }

        if (null !== $request->ipProtocol) {
            @$query['IpProtocol'] = $request->ipProtocol;
        }

        if (null !== $request->natGatewayId) {
            @$query['NatGatewayId'] = $request->natGatewayId;
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
            'action' => 'DescribeForwardTableEntries',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeForwardTableEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries Destination Network Address Translation (DNAT) entries that you created.
     *
     * @param request - DescribeForwardTableEntriesRequest
     *
     * @returns DescribeForwardTableEntriesResponse
     *
     * @param DescribeForwardTableEntriesRequest $request
     *
     * @return DescribeForwardTableEntriesResponse
     */
    public function describeForwardTableEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeForwardTableEntriesWithOptions($request, $runtime);
    }

    /**
     * Queries high-availability virtual IP addresses (HAVIPs).
     *
     * @param request - DescribeHaVipsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHaVipsResponse
     *
     * @param DescribeHaVipsRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeHaVipsResponse
     */
    public function describeHaVipsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHaVips',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHaVipsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries high-availability virtual IP addresses (HAVIPs).
     *
     * @param request - DescribeHaVipsRequest
     *
     * @returns DescribeHaVipsResponse
     *
     * @param DescribeHaVipsRequest $request
     *
     * @return DescribeHaVipsResponse
     */
    public function describeHaVips($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHaVipsWithOptions($request, $runtime);
    }

    /**
     * Queries instance system events.
     *
     * @remarks
     *   You must specify an event type to query. You can query multiple event types at the same time.
     *
     * @param tmpReq - DescribeHistoryEventsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeHistoryEventsResponse
     *
     * @param DescribeHistoryEventsRequest $tmpReq
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeHistoryEventsResponse
     */
    public function describeHistoryEventsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeHistoryEventsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->eventLevels) {
            $request->eventLevelsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->eventLevels, 'EventLevels', 'simple');
        }

        if (null !== $tmpReq->eventStatus) {
            $request->eventStatusShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->eventStatus, 'EventStatus', 'simple');
        }

        if (null !== $tmpReq->eventTypes) {
            $request->eventTypesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->eventTypes, 'EventTypes', 'simple');
        }

        if (null !== $tmpReq->resourceIds) {
            $request->resourceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->resourceIds, 'ResourceIds', 'simple');
        }

        $query = [];
        if (null !== $request->eventLevelsShrink) {
            @$query['EventLevels'] = $request->eventLevelsShrink;
        }

        if (null !== $request->eventStatusShrink) {
            @$query['EventStatus'] = $request->eventStatusShrink;
        }

        if (null !== $request->eventTypesShrink) {
            @$query['EventTypes'] = $request->eventTypesShrink;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceIdsShrink) {
            @$query['ResourceIds'] = $request->resourceIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeHistoryEvents',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeHistoryEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries instance system events.
     *
     * @remarks
     *   You must specify an event type to query. You can query multiple event types at the same time.
     *
     * @param request - DescribeHistoryEventsRequest
     *
     * @returns DescribeHistoryEventsResponse
     *
     * @param DescribeHistoryEventsRequest $request
     *
     * @return DescribeHistoryEventsResponse
     */
    public function describeHistoryEvents($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHistoryEventsWithOptions($request, $runtime);
    }

    /**
     * Queries available images.
     *
     * @param request - DescribeImageInfosRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeImageInfosResponse
     *
     * @param DescribeImageInfosRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeImageInfosResponse
     */
    public function describeImageInfosWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->osType) {
            @$query['OsType'] = $request->osType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeImageInfos',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeImageInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries available images.
     *
     * @param request - DescribeImageInfosRequest
     *
     * @returns DescribeImageInfosResponse
     *
     * @param DescribeImageInfosRequest $request
     *
     * @return DescribeImageInfosResponse
     */
    public function describeImageInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageInfosWithOptions($request, $runtime);
    }

    /**
     * Queries the accounts with which you share an image specified by the ImageId parameter.
     *
     * @param request - DescribeImageSharePermissionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeImageSharePermissionResponse
     *
     * @param DescribeImageSharePermissionRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeImageSharePermissionResponse
     */
    public function describeImageSharePermissionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->aliyunId) {
            @$query['AliyunId'] = $request->aliyunId;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
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
            'action' => 'DescribeImageSharePermission',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeImageSharePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the accounts with which you share an image specified by the ImageId parameter.
     *
     * @param request - DescribeImageSharePermissionRequest
     *
     * @returns DescribeImageSharePermissionResponse
     *
     * @param DescribeImageSharePermissionRequest $request
     *
     * @return DescribeImageSharePermissionResponse
     */
    public function describeImageSharePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageSharePermissionWithOptions($request, $runtime);
    }

    /**
     * Queries available images.
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
        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->imageName) {
            @$query['ImageName'] = $request->imageName;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->snapshotId) {
            @$query['SnapshotId'] = $request->snapshotId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeImages',
            'version' => '2017-11-10',
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
     * Queries available images.
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
     * You can call this operation to query whether auto-renewal is enabled for an instance.
     *
     * @param request - DescribeInstanceAutoRenewAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceAutoRenewAttributeResponse
     *
     * @param DescribeInstanceAutoRenewAttributeRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeInstanceAutoRenewAttributeResponse
     */
    public function describeInstanceAutoRenewAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceAutoRenewAttribute',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceAutoRenewAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to query whether auto-renewal is enabled for an instance.
     *
     * @param request - DescribeInstanceAutoRenewAttributeRequest
     *
     * @returns DescribeInstanceAutoRenewAttributeResponse
     *
     * @param DescribeInstanceAutoRenewAttributeRequest $request
     *
     * @return DescribeInstanceAutoRenewAttributeResponse
     */
    public function describeInstanceAutoRenewAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceAutoRenewAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries the detailed bandwidth data of an instance, which is collected every 5 minutes.
     *
     * @remarks
     *   You can call this operation up to 800 times per second per account.
     * *   You can call this operation up to 100 times per second per user.
     * *   You can specify multiple request parameters to filter query results. Specified request parameters have logical AND relations. Only the specified parameters are included in the filter conditions. However, if InstanceIds is set to an empty JSON array, this parameter is regarded as a valid filter condition and an empty result is returned.
     *
     * @param request - DescribeInstanceBandwidthDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceBandwidthDetailResponse
     *
     * @param DescribeInstanceBandwidthDetailRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeInstanceBandwidthDetailResponse
     */
    public function describeInstanceBandwidthDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceBandwidthDetail',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceBandwidthDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the detailed bandwidth data of an instance, which is collected every 5 minutes.
     *
     * @remarks
     *   You can call this operation up to 800 times per second per account.
     * *   You can call this operation up to 100 times per second per user.
     * *   You can specify multiple request parameters to filter query results. Specified request parameters have logical AND relations. Only the specified parameters are included in the filter conditions. However, if InstanceIds is set to an empty JSON array, this parameter is regarded as a valid filter condition and an empty result is returned.
     *
     * @param request - DescribeInstanceBandwidthDetailRequest
     *
     * @returns DescribeInstanceBandwidthDetailResponse
     *
     * @param DescribeInstanceBandwidthDetailRequest $request
     *
     * @return DescribeInstanceBandwidthDetailResponse
     */
    public function describeInstanceBandwidthDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceBandwidthDetailWithOptions($request, $runtime);
    }

    /**
     * Queries the boot configuration of a heterogeneous PC Farm bare metal instance.
     *
     * @remarks
     * Queries the boot configuration of a heterogeneous PC Farm bare metal instance.
     *
     * @param request - DescribeInstanceBootConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceBootConfigurationResponse
     *
     * @param DescribeInstanceBootConfigurationRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeInstanceBootConfigurationResponse
     */
    public function describeInstanceBootConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bootSet) {
            @$query['BootSet'] = $request->bootSet;
        }

        if (null !== $request->bootType) {
            @$query['BootType'] = $request->bootType;
        }

        if (null !== $request->diskSet) {
            @$query['DiskSet'] = $request->diskSet;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceBootConfiguration',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceBootConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the boot configuration of a heterogeneous PC Farm bare metal instance.
     *
     * @remarks
     * Queries the boot configuration of a heterogeneous PC Farm bare metal instance.
     *
     * @param request - DescribeInstanceBootConfigurationRequest
     *
     * @returns DescribeInstanceBootConfigurationResponse
     *
     * @param DescribeInstanceBootConfigurationRequest $request
     *
     * @return DescribeInstanceBootConfigurationResponse
     */
    public function describeInstanceBootConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceBootConfigurationWithOptions($request, $runtime);
    }

    /**
     * Queries the vCPU and memory usage of an instance.
     *
     * @param request - DescribeInstanceMonitorDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceMonitorDataResponse
     *
     * @param DescribeInstanceMonitorDataRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeInstanceMonitorDataResponse
     */
    public function describeInstanceMonitorDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceMonitorData',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceMonitorDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the vCPU and memory usage of an instance.
     *
     * @param request - DescribeInstanceMonitorDataRequest
     *
     * @returns DescribeInstanceMonitorDataResponse
     *
     * @param DescribeInstanceMonitorDataRequest $request
     *
     * @return DescribeInstanceMonitorDataResponse
     */
    public function describeInstanceMonitorData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceMonitorDataWithOptions($request, $runtime);
    }

    /**
     * Queries shared data groups (SDGs) that are mounted to an Android in Container (AIC) instance.
     *
     * @param tmpReq - DescribeInstanceSDGStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceSDGStatusResponse
     *
     * @param DescribeInstanceSDGStatusRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeInstanceSDGStatusResponse
     */
    public function describeInstanceSDGStatusWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeInstanceSDGStatusShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->SDGIds) {
            $request->SDGIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->SDGIds, 'SDGIds', 'json');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstanceSDGStatus',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceSDGStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries shared data groups (SDGs) that are mounted to an Android in Container (AIC) instance.
     *
     * @param request - DescribeInstanceSDGStatusRequest
     *
     * @returns DescribeInstanceSDGStatusResponse
     *
     * @param DescribeInstanceSDGStatusRequest $request
     *
     * @return DescribeInstanceSDGStatusResponse
     */
    public function describeInstanceSDGStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceSDGStatusWithOptions($request, $runtime);
    }

    /**
     * Queries the instance specifications that you can purchase.
     *
     * @param request - DescribeInstanceSpecRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceSpecResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeInstanceSpecResponse
     */
    public function describeInstanceSpecWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeInstanceSpec',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the instance specifications that you can purchase.
     *
     * @returns DescribeInstanceSpecResponse
     *
     * @return DescribeInstanceSpecResponse
     */
    public function describeInstanceSpec()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceSpecWithOptions($runtime);
    }

    /**
     * Queries the specifications of instance types.
     *
     * @param request - DescribeInstanceTypesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceTypesResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeInstanceTypesResponse
     */
    public function describeInstanceTypesWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeInstanceTypes',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the specifications of instance types.
     *
     * @returns DescribeInstanceTypesResponse
     *
     * @return DescribeInstanceTypesResponse
     */
    public function describeInstanceTypes()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceTypesWithOptions($runtime);
    }

    /**
     * Queries the Virtual Network Computing (VNC) URL of an Edge Node Service (ENS) instance.
     *
     * @param request - DescribeInstanceVncUrlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstanceVncUrlResponse
     *
     * @param DescribeInstanceVncUrlRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeInstanceVncUrlResponse
     */
    public function describeInstanceVncUrlWithOptions($request, $runtime)
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
            'action' => 'DescribeInstanceVncUrl',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstanceVncUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Virtual Network Computing (VNC) URL of an Edge Node Service (ENS) instance.
     *
     * @param request - DescribeInstanceVncUrlRequest
     *
     * @returns DescribeInstanceVncUrlResponse
     *
     * @param DescribeInstanceVncUrlRequest $request
     *
     * @return DescribeInstanceVncUrlResponse
     */
    public function describeInstanceVncUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceVncUrlWithOptions($request, $runtime);
    }

    /**
     * You can call this operation to view the details of one or more instances.
     *
     * @remarks
     *   You can call this operation up to 800 times per second per account.
     * *   You can call this operation up to 100 times per second per user.
     * *   You can specify multiple request parameters to be queried. Specified parameters are evaluated by using the AND operator. Only the specified parameters are included in the filter conditions. However, if InstanceIds is set to an empty JSON array, it is regarded as a valid filter condition and an empty result is returned.
     *
     * @param tmpReq - DescribeInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeInstancesResponse
     *
     * @param DescribeInstancesRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstancesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->eipAddresses) {
            $request->eipAddressesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->eipAddresses, 'EipAddresses', 'json');
        }

        if (null !== $tmpReq->serviceStatus) {
            $request->serviceStatusShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->serviceStatus, 'ServiceStatus', 'json');
        }

        if (null !== $tmpReq->tags) {
            $request->tagsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }

        $query = [];
        if (null !== $request->eipAddressesShrink) {
            @$query['EipAddresses'] = $request->eipAddressesShrink;
        }

        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        if (null !== $request->ensRegionIds) {
            @$query['EnsRegionIds'] = $request->ensRegionIds;
        }

        if (null !== $request->ensServiceId) {
            @$query['EnsServiceId'] = $request->ensServiceId;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->instanceResourceType) {
            @$query['InstanceResourceType'] = $request->instanceResourceType;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->intranetIp) {
            @$query['IntranetIp'] = $request->intranetIp;
        }

        if (null !== $request->networkId) {
            @$query['NetworkId'] = $request->networkId;
        }

        if (null !== $request->orderByParams) {
            @$query['OrderByParams'] = $request->orderByParams;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->searchKey) {
            @$query['SearchKey'] = $request->searchKey;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->serviceStatusShrink) {
            @$query['ServiceStatus'] = $request->serviceStatusShrink;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->tagsShrink) {
            @$query['Tags'] = $request->tagsShrink;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeInstances',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call this operation to view the details of one or more instances.
     *
     * @remarks
     *   You can call this operation up to 800 times per second per account.
     * *   You can call this operation up to 100 times per second per user.
     * *   You can specify multiple request parameters to be queried. Specified parameters are evaluated by using the AND operator. Only the specified parameters are included in the filter conditions. However, if InstanceIds is set to an empty JSON array, it is regarded as a valid filter condition and an empty result is returned.
     *
     * @param request - DescribeInstancesRequest
     *
     * @returns DescribeInstancesResponse
     *
     * @param DescribeInstancesRequest $request
     *
     * @return DescribeInstancesResponse
     */
    public function describeInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstancesWithOptions($request, $runtime);
    }

    /**
     * Queries one or more key pairs.
     *
     * @param request - DescribeKeyPairsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeKeyPairsResponse
     *
     * @param DescribeKeyPairsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeKeyPairsResponse
     */
    public function describeKeyPairsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyPairId) {
            @$query['KeyPairId'] = $request->keyPairId;
        }

        if (null !== $request->keyPairName) {
            @$query['KeyPairName'] = $request->keyPairName;
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
            'action' => 'DescribeKeyPairs',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeKeyPairsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries one or more key pairs.
     *
     * @param request - DescribeKeyPairsRequest
     *
     * @returns DescribeKeyPairsResponse
     *
     * @param DescribeKeyPairsRequest $request
     *
     * @return DescribeKeyPairsResponse
     */
    public function describeKeyPairs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeKeyPairsWithOptions($request, $runtime);
    }

    /**
     * Queries detailed information about an Edge Load Balancer (ELB) instance.
     *
     * @remarks
     *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 10 times per second per account.
     *
     * @param request - DescribeLoadBalancerAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLoadBalancerAttributeResponse
     *
     * @param DescribeLoadBalancerAttributeRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeLoadBalancerAttributeResponse
     */
    public function describeLoadBalancerAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLoadBalancerAttribute',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLoadBalancerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries detailed information about an Edge Load Balancer (ELB) instance.
     *
     * @remarks
     *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 10 times per second per account.
     *
     * @param request - DescribeLoadBalancerAttributeRequest
     *
     * @returns DescribeLoadBalancerAttributeResponse
     *
     * @param DescribeLoadBalancerAttributeRequest $request
     *
     * @return DescribeLoadBalancerAttributeResponse
     */
    public function describeLoadBalancerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancerAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries the configuration of an HTTP listener.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - DescribeLoadBalancerHTTPListenerAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLoadBalancerHTTPListenerAttributeResponse
     *
     * @param DescribeLoadBalancerHTTPListenerAttributeRequest $request
     * @param RuntimeOptions                                   $runtime
     *
     * @return DescribeLoadBalancerHTTPListenerAttributeResponse
     */
    public function describeLoadBalancerHTTPListenerAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLoadBalancerHTTPListenerAttribute',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLoadBalancerHTTPListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configuration of an HTTP listener.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - DescribeLoadBalancerHTTPListenerAttributeRequest
     *
     * @returns DescribeLoadBalancerHTTPListenerAttributeResponse
     *
     * @param DescribeLoadBalancerHTTPListenerAttributeRequest $request
     *
     * @return DescribeLoadBalancerHTTPListenerAttributeResponse
     */
    public function describeLoadBalancerHTTPListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancerHTTPListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries the configurations of an HTTPS listener.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - DescribeLoadBalancerHTTPSListenerAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLoadBalancerHTTPSListenerAttributeResponse
     *
     * @param DescribeLoadBalancerHTTPSListenerAttributeRequest $request
     * @param RuntimeOptions                                    $runtime
     *
     * @return DescribeLoadBalancerHTTPSListenerAttributeResponse
     */
    public function describeLoadBalancerHTTPSListenerAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLoadBalancerHTTPSListenerAttribute',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLoadBalancerHTTPSListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of an HTTPS listener.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - DescribeLoadBalancerHTTPSListenerAttributeRequest
     *
     * @returns DescribeLoadBalancerHTTPSListenerAttributeResponse
     *
     * @param DescribeLoadBalancerHTTPSListenerAttributeRequest $request
     *
     * @return DescribeLoadBalancerHTTPSListenerAttributeResponse
     */
    public function describeLoadBalancerHTTPSListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancerHTTPSListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries monitoring data of an edge load balancer (ELB) instance.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - DescribeLoadBalancerListenMonitorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLoadBalancerListenMonitorResponse
     *
     * @param DescribeLoadBalancerListenMonitorRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeLoadBalancerListenMonitorResponse
     */
    public function describeLoadBalancerListenMonitorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLoadBalancerListenMonitor',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLoadBalancerListenMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries monitoring data of an edge load balancer (ELB) instance.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - DescribeLoadBalancerListenMonitorRequest
     *
     * @returns DescribeLoadBalancerListenMonitorResponse
     *
     * @param DescribeLoadBalancerListenMonitorRequest $request
     *
     * @return DescribeLoadBalancerListenMonitorResponse
     */
    public function describeLoadBalancerListenMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancerListenMonitorWithOptions($request, $runtime);
    }

    /**
     * Queries listeners of Edge Load Balancer (ELB) instances.
     *
     * @param request - DescribeLoadBalancerListenersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLoadBalancerListenersResponse
     *
     * @param DescribeLoadBalancerListenersRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return DescribeLoadBalancerListenersResponse
     */
    public function describeLoadBalancerListenersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
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
            'action' => 'DescribeLoadBalancerListeners',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLoadBalancerListenersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries listeners of Edge Load Balancer (ELB) instances.
     *
     * @param request - DescribeLoadBalancerListenersRequest
     *
     * @returns DescribeLoadBalancerListenersResponse
     *
     * @param DescribeLoadBalancerListenersRequest $request
     *
     * @return DescribeLoadBalancerListenersResponse
     */
    public function describeLoadBalancerListeners($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancerListenersWithOptions($request, $runtime);
    }

    /**
     * Queries the specifications of an Edge Load Balancer (ELB) instance.
     *
     * @param request - DescribeLoadBalancerSpecRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLoadBalancerSpecResponse
     *
     * @param DescribeLoadBalancerSpecRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeLoadBalancerSpecResponse
     */
    public function describeLoadBalancerSpecWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLoadBalancerSpec',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLoadBalancerSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the specifications of an Edge Load Balancer (ELB) instance.
     *
     * @param request - DescribeLoadBalancerSpecRequest
     *
     * @returns DescribeLoadBalancerSpecResponse
     *
     * @param DescribeLoadBalancerSpecRequest $request
     *
     * @return DescribeLoadBalancerSpecResponse
     */
    public function describeLoadBalancerSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancerSpecWithOptions($request, $runtime);
    }

    /**
     * Queries the configurations of a Transmission Control Protocol (TCP) listener.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - DescribeLoadBalancerTCPListenerAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLoadBalancerTCPListenerAttributeResponse
     *
     * @param DescribeLoadBalancerTCPListenerAttributeRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeLoadBalancerTCPListenerAttributeResponse
     */
    public function describeLoadBalancerTCPListenerAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLoadBalancerTCPListenerAttribute',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLoadBalancerTCPListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configurations of a Transmission Control Protocol (TCP) listener.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - DescribeLoadBalancerTCPListenerAttributeRequest
     *
     * @returns DescribeLoadBalancerTCPListenerAttributeResponse
     *
     * @param DescribeLoadBalancerTCPListenerAttributeRequest $request
     *
     * @return DescribeLoadBalancerTCPListenerAttributeResponse
     */
    public function describeLoadBalancerTCPListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancerTCPListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries the configuration of a User Datagram Protocol (UDP) listener.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - DescribeLoadBalancerUDPListenerAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLoadBalancerUDPListenerAttributeResponse
     *
     * @param DescribeLoadBalancerUDPListenerAttributeRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeLoadBalancerUDPListenerAttributeResponse
     */
    public function describeLoadBalancerUDPListenerAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLoadBalancerUDPListenerAttribute',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLoadBalancerUDPListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configuration of a User Datagram Protocol (UDP) listener.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - DescribeLoadBalancerUDPListenerAttributeRequest
     *
     * @returns DescribeLoadBalancerUDPListenerAttributeResponse
     *
     * @param DescribeLoadBalancerUDPListenerAttributeRequest $request
     *
     * @return DescribeLoadBalancerUDPListenerAttributeResponse
     */
    public function describeLoadBalancerUDPListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancerUDPListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries the Edge Load Balance (ELB) instances that you have created.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - DescribeLoadBalancersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeLoadBalancersResponse
     *
     * @param DescribeLoadBalancersRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeLoadBalancersResponse
     */
    public function describeLoadBalancersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeLoadBalancers',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeLoadBalancersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the Edge Load Balance (ELB) instances that you have created.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - DescribeLoadBalancersRequest
     *
     * @returns DescribeLoadBalancersResponse
     *
     * @param DescribeLoadBalancersRequest $request
     *
     * @return DescribeLoadBalancersResponse
     */
    public function describeLoadBalancers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancersWithOptions($request, $runtime);
    }

    /**
     * Queries the metering data of the user.
     *
     * @param request - DescribeMeasurementDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMeasurementDataResponse
     *
     * @param DescribeMeasurementDataRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeMeasurementDataResponse
     */
    public function describeMeasurementDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeMeasurementData',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMeasurementDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the metering data of the user.
     *
     * @param request - DescribeMeasurementDataRequest
     *
     * @returns DescribeMeasurementDataResponse
     *
     * @param DescribeMeasurementDataRequest $request
     *
     * @return DescribeMeasurementDataResponse
     */
    public function describeMeasurementData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeasurementDataWithOptions($request, $runtime);
    }

    /**
     * Queries the information about mount targets.
     *
     * @param request - DescribeMountTargetsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeMountTargetsResponse
     *
     * @param DescribeMountTargetsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeMountTargetsResponse
     */
    public function describeMountTargetsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        if (null !== $request->mountTargetName) {
            @$query['MountTargetName'] = $request->mountTargetName;
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
            'action' => 'DescribeMountTargets',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeMountTargetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about mount targets.
     *
     * @param request - DescribeMountTargetsRequest
     *
     * @returns DescribeMountTargetsResponse
     *
     * @param DescribeMountTargetsRequest $request
     *
     * @return DescribeMountTargetsResponse
     */
    public function describeMountTargets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMountTargetsWithOptions($request, $runtime);
    }

    /**
     * Queries the specifications of resources that you can purchase when you create a NAS.
     *
     * @param request - DescribeNASAvailableResourceInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNASAvailableResourceInfoResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeNASAvailableResourceInfoResponse
     */
    public function describeNASAvailableResourceInfoWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeNASAvailableResourceInfo',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNASAvailableResourceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the specifications of resources that you can purchase when you create a NAS.
     *
     * @returns DescribeNASAvailableResourceInfoResponse
     *
     * @return DescribeNASAvailableResourceInfoResponse
     */
    public function describeNASAvailableResourceInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNASAvailableResourceInfoWithOptions($runtime);
    }

    /**
     * 根据筛选条件获取指定NC属性和资源量信息.
     *
     * @param request - DescribeNCInformationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNCInformationResponse
     *
     * @param DescribeNCInformationRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeNCInformationResponse
     */
    public function describeNCInformationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNCInformation',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNCInformationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 根据筛选条件获取指定NC属性和资源量信息.
     *
     * @param request - DescribeNCInformationRequest
     *
     * @returns DescribeNCInformationResponse
     *
     * @param DescribeNCInformationRequest $request
     *
     * @return DescribeNCInformationResponse
     */
    public function describeNCInformation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNCInformationWithOptions($request, $runtime);
    }

    /**
     * Queries created Network Address Translation (NAT) gateways.
     *
     * @param request - DescribeNatGatewaysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNatGatewaysResponse
     *
     * @param DescribeNatGatewaysRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeNatGatewaysResponse
     */
    public function describeNatGatewaysWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNatGateways',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNatGatewaysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries created Network Address Translation (NAT) gateways.
     *
     * @param request - DescribeNatGatewaysRequest
     *
     * @returns DescribeNatGatewaysResponse
     *
     * @param DescribeNatGatewaysRequest $request
     *
     * @return DescribeNatGatewaysResponse
     */
    public function describeNatGateways($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNatGatewaysWithOptions($request, $runtime);
    }

    /**
     * Queries network access control lists (ACLs).
     *
     * @param request - DescribeNetworkAclsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNetworkAclsResponse
     *
     * @param DescribeNetworkAclsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeNetworkAclsResponse
     */
    public function describeNetworkAclsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->networkAclId) {
            @$query['NetworkAclId'] = $request->networkAclId;
        }

        if (null !== $request->networkAclName) {
            @$query['NetworkAclName'] = $request->networkAclName;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNetworkAcls',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNetworkAclsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries network access control lists (ACLs).
     *
     * @param request - DescribeNetworkAclsRequest
     *
     * @returns DescribeNetworkAclsResponse
     *
     * @param DescribeNetworkAclsRequest $request
     *
     * @return DescribeNetworkAclsResponse
     */
    public function describeNetworkAcls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworkAclsWithOptions($request, $runtime);
    }

    /**
     * Queries the configuration of a specified network.
     *
     * @remarks
     *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 10 times per second per account.
     *
     * @param request - DescribeNetworkAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNetworkAttributeResponse
     *
     * @param DescribeNetworkAttributeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeNetworkAttributeResponse
     */
    public function describeNetworkAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->networkId) {
            @$query['NetworkId'] = $request->networkId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNetworkAttribute',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNetworkAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the configuration of a specified network.
     *
     * @remarks
     *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 10 times per second per account.
     *
     * @param request - DescribeNetworkAttributeRequest
     *
     * @returns DescribeNetworkAttributeResponse
     *
     * @param DescribeNetworkAttributeRequest $request
     *
     * @return DescribeNetworkAttributeResponse
     */
    public function describeNetworkAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworkAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries Elastic Network Interfaces (ENIs).
     *
     * @param request - DescribeNetworkInterfacesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNetworkInterfacesResponse
     *
     * @param DescribeNetworkInterfacesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeNetworkInterfacesResponse
     */
    public function describeNetworkInterfacesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        if (null !== $request->ensRegionIds) {
            @$query['EnsRegionIds'] = $request->ensRegionIds;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ipv6Address) {
            @$query['Ipv6Address'] = $request->ipv6Address;
        }

        if (null !== $request->networkId) {
            @$query['NetworkId'] = $request->networkId;
        }

        if (null !== $request->networkInterfaceId) {
            @$query['NetworkInterfaceId'] = $request->networkInterfaceId;
        }

        if (null !== $request->networkInterfaceIds) {
            @$query['NetworkInterfaceIds'] = $request->networkInterfaceIds;
        }

        if (null !== $request->networkInterfaceName) {
            @$query['NetworkInterfaceName'] = $request->networkInterfaceName;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->primaryIpAddress) {
            @$query['PrimaryIpAddress'] = $request->primaryIpAddress;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        if (null !== $request->type) {
            @$query['Type'] = $request->type;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeNetworkInterfaces',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNetworkInterfacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries Elastic Network Interfaces (ENIs).
     *
     * @param request - DescribeNetworkInterfacesRequest
     *
     * @returns DescribeNetworkInterfacesResponse
     *
     * @param DescribeNetworkInterfacesRequest $request
     *
     * @return DescribeNetworkInterfacesResponse
     */
    public function describeNetworkInterfaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworkInterfacesWithOptions($request, $runtime);
    }

    /**
     * Query the network list.
     *
     * @remarks
     *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 10 times per second per account.
     *
     * @param request - DescribeNetworksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeNetworksResponse
     *
     * @param DescribeNetworksRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeNetworksResponse
     */
    public function describeNetworksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        if (null !== $request->ensRegionIds) {
            @$query['EnsRegionIds'] = $request->ensRegionIds;
        }

        if (null !== $request->networkId) {
            @$query['NetworkId'] = $request->networkId;
        }

        if (null !== $request->networkIds) {
            @$query['NetworkIds'] = $request->networkIds;
        }

        if (null !== $request->networkName) {
            @$query['NetworkName'] = $request->networkName;
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
            'action' => 'DescribeNetworks',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeNetworksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Query the network list.
     *
     * @remarks
     *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 10 times per second per account.
     *
     * @param request - DescribeNetworksRequest
     *
     * @returns DescribeNetworksResponse
     *
     * @param DescribeNetworksRequest $request
     *
     * @return DescribeNetworksResponse
     */
    public function describeNetworks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworksWithOptions($request, $runtime);
    }

    /**
     * Queries the specifications of resources that can be purchased in subscription billing mode.
     *
     * @param request - DescribePrePaidInstanceStockRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePrePaidInstanceStockResponse
     *
     * @param DescribePrePaidInstanceStockRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribePrePaidInstanceStockResponse
     */
    public function describePrePaidInstanceStockWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dataDiskSize) {
            @$query['DataDiskSize'] = $request->dataDiskSize;
        }

        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        if (null !== $request->instanceSpec) {
            @$query['InstanceSpec'] = $request->instanceSpec;
        }

        if (null !== $request->systemDiskSize) {
            @$query['SystemDiskSize'] = $request->systemDiskSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePrePaidInstanceStock',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribePrePaidInstanceStockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the specifications of resources that can be purchased in subscription billing mode.
     *
     * @param request - DescribePrePaidInstanceStockRequest
     *
     * @returns DescribePrePaidInstanceStockResponse
     *
     * @param DescribePrePaidInstanceStockRequest $request
     *
     * @return DescribePrePaidInstanceStockResponse
     */
    public function describePrePaidInstanceStock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePrePaidInstanceStockWithOptions($request, $runtime);
    }

    /**
     * Queries the most recent price of an Edge Node Service (ENS) instance.
     *
     * @param tmpReq - DescribePriceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribePriceResponse
     *
     * @param DescribePriceRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return DescribePriceResponse
     */
    public function describePriceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribePriceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dataDisks) {
            $request->dataDisksShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dataDisks, 'DataDisks', 'json');
        }

        $query = [];
        if (null !== $request->dataDisksShrink) {
            @$query['DataDisks'] = $request->dataDisksShrink;
        }

        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->internetChargeType) {
            @$query['InternetChargeType'] = $request->internetChargeType;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->quantity) {
            @$query['Quantity'] = $request->quantity;
        }

        if (null !== $request->dataDisk) {
            @$query['DataDisk'] = $request->dataDisk;
        }

        if (null !== $request->systemDisk) {
            @$query['SystemDisk'] = $request->systemDisk;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribePrice',
            'version' => '2017-11-10',
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
     * Queries the most recent price of an Edge Node Service (ENS) instance.
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
     * Queries information about the Internet service providers (ISPs) of edge nodes.
     *
     * @param request - DescribeRegionIspsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionIspsResponse
     *
     * @param DescribeRegionIspsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeRegionIspsResponse
     */
    public function describeRegionIspsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegionIsps',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRegionIspsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about the Internet service providers (ISPs) of edge nodes.
     *
     * @param request - DescribeRegionIspsRequest
     *
     * @returns DescribeRegionIspsResponse
     *
     * @param DescribeRegionIspsRequest $request
     *
     * @return DescribeRegionIspsResponse
     */
    public function describeRegionIsps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionIspsWithOptions($request, $runtime);
    }

    /**
     * 获取区域节点资源量信息.
     *
     * @param request - DescribeRegionResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeRegionResourceResponse
     *
     * @param DescribeRegionResourceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeRegionResourceResponse
     */
    public function describeRegionResourceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeRegionResource',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeRegionResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取区域节点资源量信息.
     *
     * @param request - DescribeRegionResourceRequest
     *
     * @returns DescribeRegionResourceResponse
     *
     * @param DescribeRegionResourceRequest $request
     *
     * @return DescribeRegionResourceResponse
     */
    public function describeRegionResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionResourceWithOptions($request, $runtime);
    }

    /**
     * Queries the specifications of resources that you can purchase.
     *
     * @param request - DescribeReservedResourceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeReservedResourceResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return DescribeReservedResourceResponse
     */
    public function describeReservedResourceWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'DescribeReservedResource',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeReservedResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the specifications of resources that you can purchase.
     *
     * @returns DescribeReservedResourceResponse
     *
     * @return DescribeReservedResourceResponse
     */
    public function describeReservedResource()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeReservedResourceWithOptions($runtime);
    }

    /**
     * 获取资源状态变化时间线
     *
     * @param request - DescribeResourceTimelineRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeResourceTimelineResponse
     *
     * @param DescribeResourceTimelineRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeResourceTimelineResponse
     */
    public function describeResourceTimelineWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeResourceTimeline',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeResourceTimelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取资源状态变化时间线
     *
     * @param request - DescribeResourceTimelineRequest
     *
     * @returns DescribeResourceTimelineResponse
     *
     * @param DescribeResourceTimelineRequest $request
     *
     * @return DescribeResourceTimelineResponse
     */
    public function describeResourceTimeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceTimelineWithOptions($request, $runtime);
    }

    /**
     * Queries basic information about shared data groups (SDGs), including node preload information.
     *
     * @param tmpReq - DescribeSDGRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSDGResponse
     *
     * @param DescribeSDGRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return DescribeSDGResponse
     */
    public function describeSDGWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeSDGShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->SDGIds) {
            $request->SDGIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->SDGIds, 'SDGIds', 'json');
        }

        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->SDGIdsShrink) {
            @$query['SDGIds'] = $request->SDGIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSDG',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSDGResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries basic information about shared data groups (SDGs), including node preload information.
     *
     * @param request - DescribeSDGRequest
     *
     * @returns DescribeSDGResponse
     *
     * @param DescribeSDGRequest $request
     *
     * @return DescribeSDGResponse
     */
    public function describeSDG($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSDGWithOptions($request, $runtime);
    }

    /**
     * Queries the deployment status of the shared data group (SDG).
     *
     * @param tmpReq - DescribeSDGDeploymentStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSDGDeploymentStatusResponse
     *
     * @param DescribeSDGDeploymentStatusRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeSDGDeploymentStatusResponse
     */
    public function describeSDGDeploymentStatusWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeSDGDeploymentStatusShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->diskIds) {
            $request->diskIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->diskIds, 'DiskIds', 'json');
        }

        if (null !== $tmpReq->instanceIds) {
            $request->instanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }

        if (null !== $tmpReq->regionIds) {
            $request->regionIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->regionIds, 'RegionIds', 'json');
        }

        $query = [];
        if (null !== $request->deploymentType) {
            @$query['DeploymentType'] = $request->deploymentType;
        }

        if (null !== $request->diskIdsShrink) {
            @$query['DiskIds'] = $request->diskIdsShrink;
        }

        if (null !== $request->instanceIdsShrink) {
            @$query['InstanceIds'] = $request->instanceIdsShrink;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->regionIdsShrink) {
            @$query['RegionIds'] = $request->regionIdsShrink;
        }

        if (null !== $request->SDGId) {
            @$query['SDGId'] = $request->SDGId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSDGDeploymentStatus',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSDGDeploymentStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the deployment status of the shared data group (SDG).
     *
     * @param request - DescribeSDGDeploymentStatusRequest
     *
     * @returns DescribeSDGDeploymentStatusResponse
     *
     * @param DescribeSDGDeploymentStatusRequest $request
     *
     * @return DescribeSDGDeploymentStatusResponse
     */
    public function describeSDGDeploymentStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSDGDeploymentStatusWithOptions($request, $runtime);
    }

    /**
     * 查询SDG下的共享盘.
     *
     * @param request - DescribeSDGSharedDisksRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSDGSharedDisksResponse
     *
     * @param DescribeSDGSharedDisksRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSDGSharedDisksResponse
     */
    public function describeSDGSharedDisksWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->namespace) {
            @$query['Namespace'] = $request->namespace;
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

        if (null !== $request->sdgId) {
            @$query['SdgId'] = $request->sdgId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSDGSharedDisks',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSDGSharedDisksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询SDG下的共享盘.
     *
     * @param request - DescribeSDGSharedDisksRequest
     *
     * @returns DescribeSDGSharedDisksResponse
     *
     * @param DescribeSDGSharedDisksRequest $request
     *
     * @return DescribeSDGSharedDisksResponse
     */
    public function describeSDGSharedDisks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSDGSharedDisksWithOptions($request, $runtime);
    }

    /**
     * Queries information about created shared data groups (SDGs).
     *
     * @param tmpReq - DescribeSDGsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSDGsResponse
     *
     * @param DescribeSDGsRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return DescribeSDGsResponse
     */
    public function describeSDGsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DescribeSDGsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceIds) {
            $request->instanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }

        if (null !== $tmpReq->SDGIds) {
            $request->SDGIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->SDGIds, 'SDGIds', 'json');
        }

        $query = [];
        if (null !== $request->instanceIdsShrink) {
            @$query['InstanceIds'] = $request->instanceIdsShrink;
        }

        if (null !== $request->SDGIdsShrink) {
            @$query['SDGIds'] = $request->SDGIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSDGs',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSDGsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about created shared data groups (SDGs).
     *
     * @param request - DescribeSDGsRequest
     *
     * @returns DescribeSDGsResponse
     *
     * @param DescribeSDGsRequest $request
     *
     * @return DescribeSDGsResponse
     */
    public function describeSDGs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSDGsWithOptions($request, $runtime);
    }

    /**
     * Queries created secondary public IP addresses.
     *
     * @param request - DescribeSecondaryPublicIpAddressesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSecondaryPublicIpAddressesResponse
     *
     * @param DescribeSecondaryPublicIpAddressesRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeSecondaryPublicIpAddressesResponse
     */
    public function describeSecondaryPublicIpAddressesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        if (null !== $request->ensRegionIds) {
            @$query['EnsRegionIds'] = $request->ensRegionIds;
        }

        if (null !== $request->isp) {
            @$query['Isp'] = $request->isp;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->secondaryPublicIpAddress) {
            @$query['SecondaryPublicIpAddress'] = $request->secondaryPublicIpAddress;
        }

        if (null !== $request->secondaryPublicIpId) {
            @$query['SecondaryPublicIpId'] = $request->secondaryPublicIpId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSecondaryPublicIpAddresses',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSecondaryPublicIpAddressesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries created secondary public IP addresses.
     *
     * @param request - DescribeSecondaryPublicIpAddressesRequest
     *
     * @returns DescribeSecondaryPublicIpAddressesResponse
     *
     * @param DescribeSecondaryPublicIpAddressesRequest $request
     *
     * @return DescribeSecondaryPublicIpAddressesResponse
     */
    public function describeSecondaryPublicIpAddresses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecondaryPublicIpAddressesWithOptions($request, $runtime);
    }

    /**
     * Queries the rules of a security group.
     *
     * @param request - DescribeSecurityGroupAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSecurityGroupAttributeResponse
     *
     * @param DescribeSecurityGroupAttributeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeSecurityGroupAttributeResponse
     */
    public function describeSecurityGroupAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSecurityGroupAttribute',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSecurityGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the rules of a security group.
     *
     * @param request - DescribeSecurityGroupAttributeRequest
     *
     * @returns DescribeSecurityGroupAttributeResponse
     *
     * @param DescribeSecurityGroupAttributeRequest $request
     *
     * @return DescribeSecurityGroupAttributeResponse
     */
    public function describeSecurityGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries details about created security groups.
     *
     * @param request - DescribeSecurityGroupsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSecurityGroupsResponse
     *
     * @param DescribeSecurityGroupsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSecurityGroupsResponse
     */
    public function describeSecurityGroupsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->securityGroupName) {
            @$query['SecurityGroupName'] = $request->securityGroupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSecurityGroups',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSecurityGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries details about created security groups.
     *
     * @param request - DescribeSecurityGroupsRequest
     *
     * @returns DescribeSecurityGroupsResponse
     *
     * @param DescribeSecurityGroupsRequest $request
     *
     * @return DescribeSecurityGroupsResponse
     */
    public function describeSecurityGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityGroupsWithOptions($request, $runtime);
    }

    /**
     * Queries custom images.
     *
     * @param request - DescribeSelfImagesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSelfImagesResponse
     *
     * @param DescribeSelfImagesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeSelfImagesResponse
     */
    public function describeSelfImagesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->imageName) {
            @$query['ImageName'] = $request->imageName;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->snapshotId) {
            @$query['SnapshotId'] = $request->snapshotId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSelfImages',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSelfImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries custom images.
     *
     * @param request - DescribeSelfImagesRequest
     *
     * @returns DescribeSelfImagesResponse
     *
     * @param DescribeSelfImagesRequest $request
     *
     * @return DescribeSelfImagesResponse
     */
    public function describeSelfImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSelfImagesWithOptions($request, $runtime);
    }

    /**
     * You can call the DescribeServcieSchedule to query the real-time status of the instance device or container that is being occupied by the UUID.
     *
     * @param request - DescribeServcieScheduleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeServcieScheduleResponse
     *
     * @param DescribeServcieScheduleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeServcieScheduleResponse
     */
    public function describeServcieScheduleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->podConfigName) {
            @$query['PodConfigName'] = $request->podConfigName;
        }

        if (null !== $request->uuid) {
            @$query['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeServcieSchedule',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeServcieScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * You can call the DescribeServcieSchedule to query the real-time status of the instance device or container that is being occupied by the UUID.
     *
     * @param request - DescribeServcieScheduleRequest
     *
     * @returns DescribeServcieScheduleResponse
     *
     * @param DescribeServcieScheduleRequest $request
     *
     * @return DescribeServcieScheduleResponse
     */
    public function describeServcieSchedule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServcieScheduleWithOptions($request, $runtime);
    }

    /**
     * Queries the monitoring data of an edge load balancer (ELB) instance based on the listener.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - DescribeServerLoadBalancerListenMonitorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeServerLoadBalancerListenMonitorResponse
     *
     * @param DescribeServerLoadBalancerListenMonitorRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return DescribeServerLoadBalancerListenMonitorResponse
     */
    public function describeServerLoadBalancerListenMonitorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeServerLoadBalancerListenMonitor',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeServerLoadBalancerListenMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the monitoring data of an edge load balancer (ELB) instance based on the listener.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - DescribeServerLoadBalancerListenMonitorRequest
     *
     * @returns DescribeServerLoadBalancerListenMonitorResponse
     *
     * @param DescribeServerLoadBalancerListenMonitorRequest $request
     *
     * @return DescribeServerLoadBalancerListenMonitorResponse
     */
    public function describeServerLoadBalancerListenMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServerLoadBalancerListenMonitorWithOptions($request, $runtime);
    }

    /**
     * Queries the request monitoring data of an edge load balancer (ELB) instance.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - DescribeServerLoadBalancerMonitorRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeServerLoadBalancerMonitorResponse
     *
     * @param DescribeServerLoadBalancerMonitorRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return DescribeServerLoadBalancerMonitorResponse
     */
    public function describeServerLoadBalancerMonitorWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeServerLoadBalancerMonitor',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeServerLoadBalancerMonitorResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the request monitoring data of an edge load balancer (ELB) instance.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - DescribeServerLoadBalancerMonitorRequest
     *
     * @returns DescribeServerLoadBalancerMonitorResponse
     *
     * @param DescribeServerLoadBalancerMonitorRequest $request
     *
     * @return DescribeServerLoadBalancerMonitorResponse
     */
    public function describeServerLoadBalancerMonitor($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServerLoadBalancerMonitorWithOptions($request, $runtime);
    }

    /**
     * Queries information about snapshots.
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
        if (null !== $request->diskId) {
            @$query['DiskId'] = $request->diskId;
        }

        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        if (null !== $request->ensRegionIds) {
            @$query['EnsRegionIds'] = $request->ensRegionIds;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->snapshotId) {
            @$query['SnapshotId'] = $request->snapshotId;
        }

        if (null !== $request->snapshotName) {
            @$query['SnapshotName'] = $request->snapshotName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSnapshots',
            'version' => '2017-11-10',
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
     * Queries information about snapshots.
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
     * Queries the details of a specific source network address translation (SNAT) entry.
     *
     * @param request - DescribeSnatAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSnatAttributeResponse
     *
     * @param DescribeSnatAttributeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeSnatAttributeResponse
     */
    public function describeSnatAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->snatEntryId) {
            @$query['SnatEntryId'] = $request->snatEntryId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSnatAttribute',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSnatAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the details of a specific source network address translation (SNAT) entry.
     *
     * @param request - DescribeSnatAttributeRequest
     *
     * @returns DescribeSnatAttributeResponse
     *
     * @param DescribeSnatAttributeRequest $request
     *
     * @return DescribeSnatAttributeResponse
     */
    public function describeSnatAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSnatAttributeWithOptions($request, $runtime);
    }

    /**
     * Queries source network address translation (SNAT) entries.
     *
     * @param request - DescribeSnatTableEntriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSnatTableEntriesResponse
     *
     * @param DescribeSnatTableEntriesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeSnatTableEntriesResponse
     */
    public function describeSnatTableEntriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSnatTableEntries',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSnatTableEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries source network address translation (SNAT) entries.
     *
     * @param request - DescribeSnatTableEntriesRequest
     *
     * @returns DescribeSnatTableEntriesResponse
     *
     * @param DescribeSnatTableEntriesRequest $request
     *
     * @return DescribeSnatTableEntriesResponse
     */
    public function describeSnatTableEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSnatTableEntriesWithOptions($request, $runtime);
    }

    /**
     * Queries storage gateways.
     *
     * @param request - DescribeStorageGatewayRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeStorageGatewayResponse
     *
     * @param DescribeStorageGatewayRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeStorageGatewayResponse
     */
    public function describeStorageGatewayWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        if (null !== $request->gatewayId) {
            @$query['GatewayId'] = $request->gatewayId;
        }

        if (null !== $request->gatewayType) {
            @$query['GatewayType'] = $request->gatewayType;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->vpcId) {
            @$query['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeStorageGateway',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeStorageGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries storage gateways.
     *
     * @param request - DescribeStorageGatewayRequest
     *
     * @returns DescribeStorageGatewayResponse
     *
     * @param DescribeStorageGatewayRequest $request
     *
     * @return DescribeStorageGatewayResponse
     */
    public function describeStorageGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStorageGatewayWithOptions($request, $runtime);
    }

    /**
     * Queries volumes.
     *
     * @param request - DescribeStorageVolumeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeStorageVolumeResponse
     *
     * @param DescribeStorageVolumeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeStorageVolumeResponse
     */
    public function describeStorageVolumeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        if (null !== $request->gatewayId) {
            @$query['GatewayId'] = $request->gatewayId;
        }

        if (null !== $request->isEnable) {
            @$query['IsEnable'] = $request->isEnable;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->storageId) {
            @$query['StorageId'] = $request->storageId;
        }

        if (null !== $request->volumeId) {
            @$query['VolumeId'] = $request->volumeId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeStorageVolume',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeStorageVolumeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries volumes.
     *
     * @param request - DescribeStorageVolumeRequest
     *
     * @returns DescribeStorageVolumeResponse
     *
     * @param DescribeStorageVolumeRequest $request
     *
     * @return DescribeStorageVolumeResponse
     */
    public function describeStorageVolume($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeStorageVolumeWithOptions($request, $runtime);
    }

    /**
     * Queries the bandwidth that you use within a specified period of time.
     *
     * @param request - DescribeUserBandWidthDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeUserBandWidthDataResponse
     *
     * @param DescribeUserBandWidthDataRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeUserBandWidthDataResponse
     */
    public function describeUserBandWidthDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->isp) {
            @$query['Isp'] = $request->isp;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeUserBandWidthData',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeUserBandWidthDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the bandwidth that you use within a specified period of time.
     *
     * @param request - DescribeUserBandWidthDataRequest
     *
     * @returns DescribeUserBandWidthDataResponse
     *
     * @param DescribeUserBandWidthDataRequest $request
     *
     * @return DescribeUserBandWidthDataResponse
     */
    public function describeUserBandWidthData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserBandWidthDataWithOptions($request, $runtime);
    }

    /**
     * Call the DescribeVSwitchAttributes interface to query the configuration of a specified VSwitch.
     *
     * @param request - DescribeVSwitchAttributesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVSwitchAttributesResponse
     *
     * @param DescribeVSwitchAttributesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeVSwitchAttributesResponse
     */
    public function describeVSwitchAttributesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVSwitchAttributes',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVSwitchAttributesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Call the DescribeVSwitchAttributes interface to query the configuration of a specified VSwitch.
     *
     * @param request - DescribeVSwitchAttributesRequest
     *
     * @returns DescribeVSwitchAttributesResponse
     *
     * @param DescribeVSwitchAttributesRequest $request
     *
     * @return DescribeVSwitchAttributesResponse
     */
    public function describeVSwitchAttributes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVSwitchAttributesWithOptions($request, $runtime);
    }

    /**
     * Queries information about available vSwitches.
     *
     * @param request - DescribeVSwitchesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeVSwitchesResponse
     *
     * @param DescribeVSwitchesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeVSwitchesResponse
     */
    public function describeVSwitchesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        if (null !== $request->ensRegionIds) {
            @$query['EnsRegionIds'] = $request->ensRegionIds;
        }

        if (null !== $request->networkId) {
            @$query['NetworkId'] = $request->networkId;
        }

        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vSwitchIds) {
            @$query['VSwitchIds'] = $request->vSwitchIds;
        }

        if (null !== $request->vSwitchName) {
            @$query['VSwitchName'] = $request->vSwitchName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeVSwitches',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeVSwitchesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries information about available vSwitches.
     *
     * @param request - DescribeVSwitchesRequest
     *
     * @returns DescribeVSwitchesResponse
     *
     * @param DescribeVSwitchesRequest $request
     *
     * @return DescribeVSwitchesResponse
     */
    public function describeVSwitches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVSwitchesWithOptions($request, $runtime);
    }

    /**
     * Detaches a pay-as-you-go disk from an Edge Node Service (ENS) instance. You cannot call this operation to detach a disk that is created together with an instance.
     *
     * @param request - DetachDiskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachDiskResponse
     *
     * @param DetachDiskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DetachDiskResponse
     */
    public function detachDiskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->diskId) {
            @$query['DiskId'] = $request->diskId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachDisk',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachDiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detaches a pay-as-you-go disk from an Edge Node Service (ENS) instance. You cannot call this operation to detach a disk that is created together with an instance.
     *
     * @param request - DetachDiskRequest
     *
     * @returns DetachDiskResponse
     *
     * @param DetachDiskRequest $request
     *
     * @return DetachDiskResponse
     */
    public function detachDisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachDiskWithOptions($request, $runtime);
    }

    /**
     * Detaches a shared data group (SDG).
     *
     * @param tmpReq - DetachInstanceSDGRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachInstanceSDGResponse
     *
     * @param DetachInstanceSDGRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return DetachInstanceSDGResponse
     */
    public function detachInstanceSDGWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DetachInstanceSDGShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceIds) {
            $request->instanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }

        $query = [];
        if (null !== $request->instanceIdsShrink) {
            @$query['InstanceIds'] = $request->instanceIdsShrink;
        }

        if (null !== $request->SDGId) {
            @$query['SDGId'] = $request->SDGId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachInstanceSDG',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachInstanceSDGResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detaches a shared data group (SDG).
     *
     * @param request - DetachInstanceSDGRequest
     *
     * @returns DetachInstanceSDGResponse
     *
     * @param DetachInstanceSDGRequest $request
     *
     * @return DetachInstanceSDGResponse
     */
    public function detachInstanceSDG($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachInstanceSDGWithOptions($request, $runtime);
    }

    /**
     * Detach an elastic network interface (ENI) from an instance.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   You cannot detach a primary ENI from an instance.
     * *   The ENI must be in the InUse state.
     * *   The instances are in the Stopped state.
     * *   This operation is an asynchronous operation. After this operation is called to detach an ENI, you can check the state of the ENI to determine whether the ENI is detached.
     *
     * @param request - DetachNetworkInterfaceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DetachNetworkInterfaceResponse
     *
     * @param DetachNetworkInterfaceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DetachNetworkInterfaceResponse
     */
    public function detachNetworkInterfaceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->networkInterfaceId) {
            @$query['NetworkInterfaceId'] = $request->networkInterfaceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DetachNetworkInterface',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DetachNetworkInterfaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Detach an elastic network interface (ENI) from an instance.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * *   You cannot detach a primary ENI from an instance.
     * *   The ENI must be in the InUse state.
     * *   The instances are in the Stopped state.
     * *   This operation is an asynchronous operation. After this operation is called to detach an ENI, you can check the state of the ENI to determine whether the ENI is detached.
     *
     * @param request - DetachNetworkInterfaceRequest
     *
     * @returns DetachNetworkInterfaceResponse
     *
     * @param DetachNetworkInterfaceRequest $request
     *
     * @return DetachNetworkInterfaceResponse
     */
    public function detachNetworkInterface($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachNetworkInterfaceWithOptions($request, $runtime);
    }

    /**
     * Distributes pushed data to the Edge Node Service (ENS) instances of the application. You can specify multiple canary release policies, decompress files, and restart containers.
     *
     * @param request - DistApplicationDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DistApplicationDataResponse
     *
     * @param DistApplicationDataRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DistApplicationDataResponse
     */
    public function distApplicationDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->data) {
            @$query['Data'] = $request->data;
        }

        if (null !== $request->distStrategy) {
            @$query['DistStrategy'] = $request->distStrategy;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DistApplicationData',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DistApplicationDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Distributes pushed data to the Edge Node Service (ENS) instances of the application. You can specify multiple canary release policies, decompress files, and restart containers.
     *
     * @param request - DistApplicationDataRequest
     *
     * @returns DistApplicationDataResponse
     *
     * @param DistApplicationDataRequest $request
     *
     * @return DistApplicationDataResponse
     */
    public function distApplicationData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->distApplicationDataWithOptions($request, $runtime);
    }

    /**
     * Migrates the instance across nodes after an O\\\\\\&M event occurs on an instance.
     *
     * @remarks
     *   This O\\&M operation is supported only by the Instance:SystemUpgrade.Migrate event.
     *
     * @param request - EventMigrateInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EventMigrateInstanceResponse
     *
     * @param EventMigrateInstanceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return EventMigrateInstanceResponse
     */
    public function eventMigrateInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->dataPolicy) {
            @$query['DataPolicy'] = $request->dataPolicy;
        }

        if (null !== $request->eventId) {
            @$query['EventId'] = $request->eventId;
        }

        if (null !== $request->opsType) {
            @$query['OpsType'] = $request->opsType;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->planTime) {
            @$query['PlanTime'] = $request->planTime;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EventMigrateInstance',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EventMigrateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Migrates the instance across nodes after an O\\\\\\&M event occurs on an instance.
     *
     * @remarks
     *   This O\\&M operation is supported only by the Instance:SystemUpgrade.Migrate event.
     *
     * @param request - EventMigrateInstanceRequest
     *
     * @returns EventMigrateInstanceResponse
     *
     * @param EventMigrateInstanceRequest $request
     *
     * @return EventMigrateInstanceResponse
     */
    public function eventMigrateInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->eventMigrateInstanceWithOptions($request, $runtime);
    }

    /**
     * Restart the instance across nodes after an O\\\\\\&M event occurs on an instance.
     *
     * @remarks
     *   This O\\&M operation supports only the Instance:SystemMaintenance.Reboot event
     *
     * @param request - EventRebootInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EventRebootInstanceResponse
     *
     * @param EventRebootInstanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return EventRebootInstanceResponse
     */
    public function eventRebootInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eventId) {
            @$query['EventId'] = $request->eventId;
        }

        if (null !== $request->opsType) {
            @$query['OpsType'] = $request->opsType;
        }

        if (null !== $request->planTime) {
            @$query['PlanTime'] = $request->planTime;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EventRebootInstance',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EventRebootInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restart the instance across nodes after an O\\\\\\&M event occurs on an instance.
     *
     * @remarks
     *   This O\\&M operation supports only the Instance:SystemMaintenance.Reboot event
     *
     * @param request - EventRebootInstanceRequest
     *
     * @returns EventRebootInstanceResponse
     *
     * @param EventRebootInstanceRequest $request
     *
     * @return EventRebootInstanceResponse
     */
    public function eventRebootInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->eventRebootInstanceWithOptions($request, $runtime);
    }

    /**
     * The event that is used to immediately redeploy a specified resource or by appointment.
     *
     * @remarks
     *   This O\\&M operation supports only the following event types: Instance:SystemFailure.Redeploy (instance redeployment due to system problems) and Instance:SystemMaintenance.Redeploy (instance redeployment due to system maintenance).
     *
     * @param request - EventRedeployInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns EventRedeployInstanceResponse
     *
     * @param EventRedeployInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return EventRedeployInstanceResponse
     */
    public function eventRedeployInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eventId) {
            @$query['EventId'] = $request->eventId;
        }

        if (null !== $request->opsType) {
            @$query['OpsType'] = $request->opsType;
        }

        if (null !== $request->planTime) {
            @$query['PlanTime'] = $request->planTime;
        }

        if (null !== $request->resourceId) {
            @$query['ResourceId'] = $request->resourceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'EventRedeployInstance',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return EventRedeployInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * The event that is used to immediately redeploy a specified resource or by appointment.
     *
     * @remarks
     *   This O\\&M operation supports only the following event types: Instance:SystemFailure.Redeploy (instance redeployment due to system problems) and Instance:SystemMaintenance.Redeploy (instance redeployment due to system maintenance).
     *
     * @param request - EventRedeployInstanceRequest
     *
     * @returns EventRedeployInstanceResponse
     *
     * @param EventRedeployInstanceRequest $request
     *
     * @return EventRedeployInstanceResponse
     */
    public function eventRedeployInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->eventRedeployInstanceWithOptions($request, $runtime);
    }

    /**
     * Exports billing details within a specific time range.
     *
     * @param request - ExportBillDetailDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportBillDetailDataResponse
     *
     * @param ExportBillDetailDataRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ExportBillDetailDataResponse
     */
    public function exportBillDetailDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExportBillDetailData',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExportBillDetailDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Exports billing details within a specific time range.
     *
     * @param request - ExportBillDetailDataRequest
     *
     * @returns ExportBillDetailDataResponse
     *
     * @param ExportBillDetailDataRequest $request
     *
     * @return ExportBillDetailDataResponse
     */
    public function exportBillDetailData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportBillDetailDataWithOptions($request, $runtime);
    }

    /**
     * Exports a custom image to an Object Storage Service (OSS) bucket in the same region.
     *
     * @param request - ExportImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportImageResponse
     *
     * @param ExportImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ExportImageResponse
     */
    public function exportImageWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->OSSBucket) {
            @$query['OSSBucket'] = $request->OSSBucket;
        }

        if (null !== $request->OSSPrefix) {
            @$query['OSSPrefix'] = $request->OSSPrefix;
        }

        if (null !== $request->OSSRegionId) {
            @$query['OSSRegionId'] = $request->OSSRegionId;
        }

        if (null !== $request->roleName) {
            @$query['RoleName'] = $request->roleName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExportImage',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExportImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Exports a custom image to an Object Storage Service (OSS) bucket in the same region.
     *
     * @param request - ExportImageRequest
     *
     * @returns ExportImageResponse
     *
     * @param ExportImageRequest $request
     *
     * @return ExportImageResponse
     */
    public function exportImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportImageWithOptions($request, $runtime);
    }

    /**
     * Exports the metering data within a specific time range.
     *
     * @param request - ExportMeasurementDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportMeasurementDataResponse
     *
     * @param ExportMeasurementDataRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ExportMeasurementDataResponse
     */
    public function exportMeasurementDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ExportMeasurementData',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ExportMeasurementDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Exports the metering data within a specific time range.
     *
     * @param request - ExportMeasurementDataRequest
     *
     * @returns ExportMeasurementDataResponse
     *
     * @param ExportMeasurementDataRequest $request
     *
     * @return ExportMeasurementDataResponse
     */
    public function exportMeasurementData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportMeasurementDataWithOptions($request, $runtime);
    }

    /**
     * Queries the access control list (ACL) of a bucket.
     *
     * @param request - GetBucketAclRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetBucketAclResponse
     *
     * @param GetBucketAclRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetBucketAclResponse
     */
    public function getBucketAclWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucketName) {
            @$query['BucketName'] = $request->bucketName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetBucketAcl',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetBucketAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the access control list (ACL) of a bucket.
     *
     * @param request - GetBucketAclRequest
     *
     * @returns GetBucketAclResponse
     *
     * @param GetBucketAclRequest $request
     *
     * @return GetBucketAclResponse
     */
    public function getBucketAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBucketAclWithOptions($request, $runtime);
    }

    /**
     * Queries the detailed information about a bucket.
     *
     * @param request - GetBucketInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetBucketInfoResponse
     *
     * @param GetBucketInfoRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return GetBucketInfoResponse
     */
    public function getBucketInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucketName) {
            @$query['BucketName'] = $request->bucketName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetBucketInfo',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetBucketInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the detailed information about a bucket.
     *
     * @param request - GetBucketInfoRequest
     *
     * @returns GetBucketInfoResponse
     *
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
     * Queries lifecycle rules.
     *
     * @param request - GetBucketLifecycleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetBucketLifecycleResponse
     *
     * @param GetBucketLifecycleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetBucketLifecycleResponse
     */
    public function getBucketLifecycleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucketName) {
            @$query['BucketName'] = $request->bucketName;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetBucketLifecycle',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetBucketLifecycleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries lifecycle rules.
     *
     * @param request - GetBucketLifecycleRequest
     *
     * @returns GetBucketLifecycleResponse
     *
     * @param GetBucketLifecycleRequest $request
     *
     * @return GetBucketLifecycleResponse
     */
    public function getBucketLifecycle($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBucketLifecycleWithOptions($request, $runtime);
    }

    /**
     * Queries the storage usage in the previous billing cycle and the cumulative number of calls in this month.
     *
     * @param request - GetOssStorageAndAccByBucketsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOssStorageAndAccByBucketsResponse
     *
     * @param GetOssStorageAndAccByBucketsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetOssStorageAndAccByBucketsResponse
     */
    public function getOssStorageAndAccByBucketsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetOssStorageAndAccByBuckets',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOssStorageAndAccByBucketsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the storage usage in the previous billing cycle and the cumulative number of calls in this month.
     *
     * @param request - GetOssStorageAndAccByBucketsRequest
     *
     * @returns GetOssStorageAndAccByBucketsResponse
     *
     * @param GetOssStorageAndAccByBucketsRequest $request
     *
     * @return GetOssStorageAndAccByBucketsResponse
     */
    public function getOssStorageAndAccByBuckets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOssStorageAndAccByBucketsWithOptions($request, $runtime);
    }

    /**
     * Queries the storage and bandwidth usage within a specific time range.
     *
     * @remarks
     * The query and aggregation granularity of bandwidth and storage usage cannot exceed one day. Data aggregation is to collect the maximum values of usage data within a period of time.
     *
     * @param request - GetOssUsageDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetOssUsageDataResponse
     *
     * @param GetOssUsageDataRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetOssUsageDataResponse
     */
    public function getOssUsageDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetOssUsageData',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetOssUsageDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the storage and bandwidth usage within a specific time range.
     *
     * @remarks
     * The query and aggregation granularity of bandwidth and storage usage cannot exceed one day. Data aggregation is to collect the maximum values of usage data within a period of time.
     *
     * @param request - GetOssUsageDataRequest
     *
     * @returns GetOssUsageDataResponse
     *
     * @param GetOssUsageDataRequest $request
     *
     * @return GetOssUsageDataResponse
     */
    public function getOssUsageData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOssUsageDataWithOptions($request, $runtime);
    }

    /**
     * Call ImportImage to import your image file to the cloud server.
     *
     * @param tmpReq - ImportImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportImageResponse
     *
     * @param ImportImageRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return ImportImageResponse
     */
    public function importImageWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ImportImageShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->diskDeviceMapping) {
            $request->diskDeviceMappingShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->diskDeviceMapping, 'DiskDeviceMapping', 'json');
        }

        $query = [];
        if (null !== $request->architecture) {
            @$query['Architecture'] = $request->architecture;
        }

        if (null !== $request->computeType) {
            @$query['ComputeType'] = $request->computeType;
        }

        if (null !== $request->diskDeviceMappingShrink) {
            @$query['DiskDeviceMapping'] = $request->diskDeviceMappingShrink;
        }

        if (null !== $request->imageFormat) {
            @$query['ImageFormat'] = $request->imageFormat;
        }

        if (null !== $request->imageName) {
            @$query['ImageName'] = $request->imageName;
        }

        if (null !== $request->licenseType) {
            @$query['LicenseType'] = $request->licenseType;
        }

        if (null !== $request->OSSBucket) {
            @$query['OSSBucket'] = $request->OSSBucket;
        }

        if (null !== $request->OSSObject) {
            @$query['OSSObject'] = $request->OSSObject;
        }

        if (null !== $request->OSSRegion) {
            @$query['OSSRegion'] = $request->OSSRegion;
        }

        if (null !== $request->OSType) {
            @$query['OSType'] = $request->OSType;
        }

        if (null !== $request->OSVersion) {
            @$query['OSVersion'] = $request->OSVersion;
        }

        if (null !== $request->platform) {
            @$query['Platform'] = $request->platform;
        }

        if (null !== $request->targetOSSRegionId) {
            @$query['TargetOSSRegionId'] = $request->targetOSSRegionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ImportImage',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImportImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Call ImportImage to import your image file to the cloud server.
     *
     * @param request - ImportImageRequest
     *
     * @returns ImportImageResponse
     *
     * @param ImportImageRequest $request
     *
     * @return ImportImageResponse
     */
    public function importImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importImageWithOptions($request, $runtime);
    }

    /**
     * Imports the public key of a Rivest–Shamir–Adleman (RSA)-encrypted key pair that is generated by a third-party tool.
     *
     * @remarks
     *   After the key pair is imported, ENS stores the public key. You must securely store the private key.
     * *   The key pair can be only in the ssh-rsa format.
     *
     * @param request - ImportKeyPairRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportKeyPairResponse
     *
     * @param ImportKeyPairRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ImportKeyPairResponse
     */
    public function importKeyPairWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyPairName) {
            @$query['KeyPairName'] = $request->keyPairName;
        }

        if (null !== $request->publicKeyBody) {
            @$query['PublicKeyBody'] = $request->publicKeyBody;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ImportKeyPair',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImportKeyPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Imports the public key of a Rivest–Shamir–Adleman (RSA)-encrypted key pair that is generated by a third-party tool.
     *
     * @remarks
     *   After the key pair is imported, ENS stores the public key. You must securely store the private key.
     * *   The key pair can be only in the ssh-rsa format.
     *
     * @param request - ImportKeyPairRequest
     *
     * @returns ImportKeyPairResponse
     *
     * @param ImportKeyPairRequest $request
     *
     * @return ImportKeyPairResponse
     */
    public function importKeyPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importKeyPairWithOptions($request, $runtime);
    }

    /**
     * Assigns public IP addresses to an EPN instance.
     *
     * @param request - JoinPublicIpsToEpnInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns JoinPublicIpsToEpnInstanceResponse
     *
     * @param JoinPublicIpsToEpnInstanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return JoinPublicIpsToEpnInstanceResponse
     */
    public function joinPublicIpsToEpnInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->EPNInstanceId) {
            @$query['EPNInstanceId'] = $request->EPNInstanceId;
        }

        if (null !== $request->instanceInfos) {
            @$query['InstanceInfos'] = $request->instanceInfos;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'JoinPublicIpsToEpnInstance',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return JoinPublicIpsToEpnInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Assigns public IP addresses to an EPN instance.
     *
     * @param request - JoinPublicIpsToEpnInstanceRequest
     *
     * @returns JoinPublicIpsToEpnInstanceResponse
     *
     * @param JoinPublicIpsToEpnInstanceRequest $request
     *
     * @return JoinPublicIpsToEpnInstanceResponse
     */
    public function joinPublicIpsToEpnInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->joinPublicIpsToEpnInstanceWithOptions($request, $runtime);
    }

    /**
     * Adds an Edge Node Service (ENS) instance to a specified security group.
     *
     * @remarks
     * Before you call this operation to add an instance to a security group, make sure that the instance is in the Stopped or Running state.
     *
     * @param request - JoinSecurityGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns JoinSecurityGroupResponse
     *
     * @param JoinSecurityGroupRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return JoinSecurityGroupResponse
     */
    public function joinSecurityGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->networkInterfaceId) {
            @$query['NetworkInterfaceId'] = $request->networkInterfaceId;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'JoinSecurityGroup',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return JoinSecurityGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Adds an Edge Node Service (ENS) instance to a specified security group.
     *
     * @remarks
     * Before you call this operation to add an instance to a security group, make sure that the instance is in the Stopped or Running state.
     *
     * @param request - JoinSecurityGroupRequest
     *
     * @returns JoinSecurityGroupResponse
     *
     * @param JoinSecurityGroupRequest $request
     *
     * @return JoinSecurityGroupResponse
     */
    public function joinSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->joinSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * Performs networking.
     *
     * @remarks
     * For the Internal Connection mode and the Intelligent Acceleration and Internal Connection mode, instances of the vSwitch take effect automatically. You do not need to manually add instances. For public connections such as intelligent acceleration, you need to call an operation to manually add the instances to Internet-facing instances.
     *
     * @param request - JoinVSwitchesToEpnInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns JoinVSwitchesToEpnInstanceResponse
     *
     * @param JoinVSwitchesToEpnInstanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return JoinVSwitchesToEpnInstanceResponse
     */
    public function joinVSwitchesToEpnInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->EPNInstanceId) {
            @$query['EPNInstanceId'] = $request->EPNInstanceId;
        }

        if (null !== $request->vSwitchesInfo) {
            @$query['VSwitchesInfo'] = $request->vSwitchesInfo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'JoinVSwitchesToEpnInstance',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return JoinVSwitchesToEpnInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Performs networking.
     *
     * @remarks
     * For the Internal Connection mode and the Intelligent Acceleration and Internal Connection mode, instances of the vSwitch take effect automatically. You do not need to manually add instances. For public connections such as intelligent acceleration, you need to call an operation to manually add the instances to Internet-facing instances.
     *
     * @param request - JoinVSwitchesToEpnInstanceRequest
     *
     * @returns JoinVSwitchesToEpnInstanceResponse
     *
     * @param JoinVSwitchesToEpnInstanceRequest $request
     *
     * @return JoinVSwitchesToEpnInstanceResponse
     */
    public function joinVSwitchesToEpnInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->joinVSwitchesToEpnInstanceWithOptions($request, $runtime);
    }

    /**
     * Removes an instance from a security group.
     *
     * @remarks
     * Before you remove an instance from a security group, the instance must be in the Stopped or Running state.
     *
     * @param request - LeaveSecurityGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns LeaveSecurityGroupResponse
     *
     * @param LeaveSecurityGroupRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return LeaveSecurityGroupResponse
     */
    public function leaveSecurityGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->networkInterfaceId) {
            @$query['NetworkInterfaceId'] = $request->networkInterfaceId;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'LeaveSecurityGroup',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return LeaveSecurityGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes an instance from a security group.
     *
     * @remarks
     * Before you remove an instance from a security group, the instance must be in the Stopped or Running state.
     *
     * @param request - LeaveSecurityGroupRequest
     *
     * @returns LeaveSecurityGroupResponse
     *
     * @param LeaveSecurityGroupRequest $request
     *
     * @return LeaveSecurityGroupResponse
     */
    public function leaveSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->leaveSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * 查询公钥下发信息.
     *
     * @param request - ListAICPublicKeyDeliveriesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAICPublicKeyDeliveriesResponse
     *
     * @param ListAICPublicKeyDeliveriesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ListAICPublicKeyDeliveriesResponse
     */
    public function listAICPublicKeyDeliveriesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
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
            'action' => 'ListAICPublicKeyDeliveries',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAICPublicKeyDeliveriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询公钥下发信息.
     *
     * @param request - ListAICPublicKeyDeliveriesRequest
     *
     * @returns ListAICPublicKeyDeliveriesResponse
     *
     * @param ListAICPublicKeyDeliveriesRequest $request
     *
     * @return ListAICPublicKeyDeliveriesResponse
     */
    public function listAICPublicKeyDeliveries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAICPublicKeyDeliveriesWithOptions($request, $runtime);
    }

    /**
     * 查询所有托管的公钥.
     *
     * @param request - ListAICPublicKeysRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAICPublicKeysResponse
     *
     * @param ListAICPublicKeysRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListAICPublicKeysResponse
     */
    public function listAICPublicKeysWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->keyGroup) {
            @$query['KeyGroup'] = $request->keyGroup;
        }

        if (null !== $request->keyName) {
            @$query['KeyName'] = $request->keyName;
        }

        if (null !== $request->keyType) {
            @$query['KeyType'] = $request->keyType;
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
            'action' => 'ListAICPublicKeys',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAICPublicKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 查询所有托管的公钥.
     *
     * @param request - ListAICPublicKeysRequest
     *
     * @returns ListAICPublicKeysResponse
     *
     * @param ListAICPublicKeysRequest $request
     *
     * @return ListAICPublicKeysResponse
     */
    public function listAICPublicKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAICPublicKeysWithOptions($request, $runtime);
    }

    /**
     * Queries the created applications.
     *
     * @param request - ListApplicationsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListApplicationsResponse
     *
     * @param ListApplicationsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListApplicationsResponse
     */
    public function listApplicationsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appVersions) {
            @$query['AppVersions'] = $request->appVersions;
        }

        if (null !== $request->clusterNames) {
            @$query['ClusterNames'] = $request->clusterNames;
        }

        if (null !== $request->level) {
            @$query['Level'] = $request->level;
        }

        if (null !== $request->maxDate) {
            @$query['MaxDate'] = $request->maxDate;
        }

        if (null !== $request->minDate) {
            @$query['MinDate'] = $request->minDate;
        }

        if (null !== $request->outAppInfoParams) {
            @$query['OutAppInfoParams'] = $request->outAppInfoParams;
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
            'action' => 'ListApplications',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the created applications.
     *
     * @param request - ListApplicationsRequest
     *
     * @returns ListApplicationsResponse
     *
     * @param ListApplicationsRequest $request
     *
     * @return ListApplicationsResponse
     */
    public function listApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationsWithOptions($request, $runtime);
    }

    /**
     * Queries all buckets of a user.
     *
     * @param request - ListBucketsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListBucketsResponse
     *
     * @param ListBucketsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListBucketsResponse
     */
    public function listBucketsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->pageNumber) {
            @$query['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->prefix) {
            @$query['Prefix'] = $request->prefix;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListBuckets',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListBucketsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries all buckets of a user.
     *
     * @param request - ListBucketsRequest
     *
     * @returns ListBucketsResponse
     *
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
     * Queries the information about all objects in a bucket.
     *
     * @param request - ListObjectsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListObjectsResponse
     *
     * @param ListObjectsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListObjectsResponse
     */
    public function listObjectsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucketName) {
            @$query['BucketName'] = $request->bucketName;
        }

        if (null !== $request->continuationToken) {
            @$query['ContinuationToken'] = $request->continuationToken;
        }

        if (null !== $request->encodingType) {
            @$query['EncodingType'] = $request->encodingType;
        }

        if (null !== $request->marker) {
            @$query['Marker'] = $request->marker;
        }

        if (null !== $request->maxKeys) {
            @$query['MaxKeys'] = $request->maxKeys;
        }

        if (null !== $request->prefix) {
            @$query['Prefix'] = $request->prefix;
        }

        if (null !== $request->startAfter) {
            @$query['StartAfter'] = $request->startAfter;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ListObjects',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListObjectsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the information about all objects in a bucket.
     *
     * @param request - ListObjectsRequest
     *
     * @returns ListObjectsResponse
     *
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
     * 获取所有产品能力.
     *
     * @param request - ListProductAbilitiesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListProductAbilitiesResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListProductAbilitiesResponse
     */
    public function listProductAbilitiesWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListProductAbilities',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListProductAbilitiesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 获取所有产品能力.
     *
     * @returns ListProductAbilitiesResponse
     *
     * @return ListProductAbilitiesResponse
     */
    public function listProductAbilities()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listProductAbilitiesWithOptions($runtime);
    }

    /**
     * Queries tags that are added to Edge Node Service (ENS) instances.
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
        if (null !== $request->nextToken) {
            @$query['NextToken'] = $request->nextToken;
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
            'version' => '2017-11-10',
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
     * Queries tags that are added to Edge Node Service (ENS) instances.
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
     * AIC公钥登入管理.
     *
     * @param request - ManageAICLoginRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ManageAICLoginResponse
     *
     * @param ManageAICLoginRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ManageAICLoginResponse
     */
    public function manageAICLoginWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->actionName) {
            @$query['ActionName'] = $request->actionName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->keyGroup) {
            @$query['KeyGroup'] = $request->keyGroup;
        }

        if (null !== $request->keyName) {
            @$query['KeyName'] = $request->keyName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ManageAICLogin',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ManageAICLoginResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * AIC公钥登入管理.
     *
     * @param request - ManageAICLoginRequest
     *
     * @returns ManageAICLoginResponse
     *
     * @param ManageAICLoginRequest $request
     *
     * @return ManageAICLoginResponse
     */
    public function manageAICLogin($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->manageAICLoginWithOptions($request, $runtime);
    }

    /**
     * Modifies the name, description, and peak bandwidth of a specified elastic IP address (EIP).
     *
     * @param request - ModifyEnsEipAddressAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyEnsEipAddressAttributeResponse
     *
     * @param ModifyEnsEipAddressAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyEnsEipAddressAttributeResponse
     */
    public function modifyEnsEipAddressAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allocationId) {
            @$query['AllocationId'] = $request->allocationId;
        }

        if (null !== $request->bandwidth) {
            @$query['Bandwidth'] = $request->bandwidth;
        }

        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyEnsEipAddressAttribute',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyEnsEipAddressAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the name, description, and peak bandwidth of a specified elastic IP address (EIP).
     *
     * @param request - ModifyEnsEipAddressAttributeRequest
     *
     * @returns ModifyEnsEipAddressAttributeResponse
     *
     * @param ModifyEnsEipAddressAttributeRequest $request
     *
     * @return ModifyEnsEipAddressAttributeResponse
     */
    public function modifyEnsEipAddressAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyEnsEipAddressAttributeWithOptions($request, $runtime);
    }

    /**
     * Modifies the name and description of a custom route.
     *
     * @param request - ModifyEnsRouteEntryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyEnsRouteEntryResponse
     *
     * @param ModifyEnsRouteEntryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ModifyEnsRouteEntryResponse
     */
    public function modifyEnsRouteEntryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->routeEntryId) {
            @$query['RouteEntryId'] = $request->routeEntryId;
        }

        if (null !== $request->routeEntryName) {
            @$query['RouteEntryName'] = $request->routeEntryName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyEnsRouteEntry',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyEnsRouteEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the name and description of a custom route.
     *
     * @param request - ModifyEnsRouteEntryRequest
     *
     * @returns ModifyEnsRouteEntryResponse
     *
     * @param ModifyEnsRouteEntryRequest $request
     *
     * @return ModifyEnsRouteEntryResponse
     */
    public function modifyEnsRouteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyEnsRouteEntryWithOptions($request, $runtime);
    }

    /**
     * Modifies an Edge Private Network (EPN) instance.
     *
     * @param request - ModifyEpnInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyEpnInstanceResponse
     *
     * @param ModifyEpnInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyEpnInstanceResponse
     */
    public function modifyEpnInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->EPNInstanceId) {
            @$query['EPNInstanceId'] = $request->EPNInstanceId;
        }

        if (null !== $request->EPNInstanceName) {
            @$query['EPNInstanceName'] = $request->EPNInstanceName;
        }

        if (null !== $request->internetMaxBandwidthOut) {
            @$query['InternetMaxBandwidthOut'] = $request->internetMaxBandwidthOut;
        }

        if (null !== $request->networkingModel) {
            @$query['NetworkingModel'] = $request->networkingModel;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyEpnInstance',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyEpnInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies an Edge Private Network (EPN) instance.
     *
     * @param request - ModifyEpnInstanceRequest
     *
     * @returns ModifyEpnInstanceResponse
     *
     * @param ModifyEpnInstanceRequest $request
     *
     * @return ModifyEpnInstanceResponse
     */
    public function modifyEpnInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyEpnInstanceWithOptions($request, $runtime);
    }

    /**
     * Modifies the description of a NAS file system.
     *
     * @param request - ModifyFileSystemRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyFileSystemResponse
     *
     * @param ModifyFileSystemRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyFileSystemResponse
     */
    public function modifyFileSystemWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        if (null !== $request->fileSystemId) {
            @$query['FileSystemId'] = $request->fileSystemId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyFileSystem',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyFileSystemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the description of a NAS file system.
     *
     * @param request - ModifyFileSystemRequest
     *
     * @returns ModifyFileSystemResponse
     *
     * @param ModifyFileSystemRequest $request
     *
     * @return ModifyFileSystemResponse
     */
    public function modifyFileSystem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFileSystemWithOptions($request, $runtime);
    }

    /**
     * Modifies a Destination Network Address Translation (DNAT) rule.
     *
     * @param request - ModifyForwardEntryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyForwardEntryResponse
     *
     * @param ModifyForwardEntryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyForwardEntryResponse
     */
    public function modifyForwardEntryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->externalIp) {
            @$query['ExternalIp'] = $request->externalIp;
        }

        if (null !== $request->externalPort) {
            @$query['ExternalPort'] = $request->externalPort;
        }

        if (null !== $request->forwardEntryId) {
            @$query['ForwardEntryId'] = $request->forwardEntryId;
        }

        if (null !== $request->forwardEntryName) {
            @$query['ForwardEntryName'] = $request->forwardEntryName;
        }

        if (null !== $request->healthCheckPort) {
            @$query['HealthCheckPort'] = $request->healthCheckPort;
        }

        if (null !== $request->internalIp) {
            @$query['InternalIp'] = $request->internalIp;
        }

        if (null !== $request->internalPort) {
            @$query['InternalPort'] = $request->internalPort;
        }

        if (null !== $request->ipProtocol) {
            @$query['IpProtocol'] = $request->ipProtocol;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyForwardEntry',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyForwardEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a Destination Network Address Translation (DNAT) rule.
     *
     * @param request - ModifyForwardEntryRequest
     *
     * @returns ModifyForwardEntryResponse
     *
     * @param ModifyForwardEntryRequest $request
     *
     * @return ModifyForwardEntryResponse
     */
    public function modifyForwardEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyForwardEntryWithOptions($request, $runtime);
    }

    /**
     * Modifies the name of a high-availability virtual IP address (HAVIP).
     *
     * @param request - ModifyHaVipAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyHaVipAttributeResponse
     *
     * @param ModifyHaVipAttributeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyHaVipAttributeResponse
     */
    public function modifyHaVipAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->haVipId) {
            @$query['HaVipId'] = $request->haVipId;
        }

        if (null !== $request->name) {
            @$query['Name'] = $request->name;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyHaVipAttribute',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyHaVipAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the name of a high-availability virtual IP address (HAVIP).
     *
     * @param request - ModifyHaVipAttributeRequest
     *
     * @returns ModifyHaVipAttributeResponse
     *
     * @param ModifyHaVipAttributeRequest $request
     *
     * @return ModifyHaVipAttributeResponse
     */
    public function modifyHaVipAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyHaVipAttributeWithOptions($request, $runtime);
    }

    /**
     * Modifies the image attributes.
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
        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->imageName) {
            @$query['ImageName'] = $request->imageName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyImageAttribute',
            'version' => '2017-11-10',
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
     * Modifies the image attributes.
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
     * Shares or unshares an image.
     *
     * @param request - ModifyImageSharePermissionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyImageSharePermissionResponse
     *
     * @param ModifyImageSharePermissionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyImageSharePermissionResponse
     */
    public function modifyImageSharePermissionWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->addAccounts) {
            @$query['AddAccounts'] = $request->addAccounts;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->removeAccounts) {
            @$query['RemoveAccounts'] = $request->removeAccounts;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyImageSharePermission',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyImageSharePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Shares or unshares an image.
     *
     * @param request - ModifyImageSharePermissionRequest
     *
     * @returns ModifyImageSharePermissionResponse
     *
     * @param ModifyImageSharePermissionRequest $request
     *
     * @return ModifyImageSharePermissionResponse
     */
    public function modifyImageSharePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyImageSharePermissionWithOptions($request, $runtime);
    }

    /**
     * Changes the attributes of an instance, such as the name and the password.
     *
     * @remarks
     *   If an instance is in the Starting state, you cannot reset the password of the instance.
     * *   When the instance is in the Running state, you cannot change the password of the instance.
     * *   After resetting the password, you must Restart the instance in the ECS console or call the RebootInstance operation to validate the modifications. The restart operation within the instance does not validate the modifications.
     *
     * @param request - ModifyInstanceAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceAttributeResponse
     *
     * @param ModifyInstanceAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyInstanceAttributeResponse
     */
    public function modifyInstanceAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->deletionProtection) {
            @$query['DeletionProtection'] = $request->deletionProtection;
        }

        if (null !== $request->hostName) {
            @$query['HostName'] = $request->hostName;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceAttribute',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the attributes of an instance, such as the name and the password.
     *
     * @remarks
     *   If an instance is in the Starting state, you cannot reset the password of the instance.
     * *   When the instance is in the Running state, you cannot change the password of the instance.
     * *   After resetting the password, you must Restart the instance in the ECS console or call the RebootInstance operation to validate the modifications. The restart operation within the instance does not validate the modifications.
     *
     * @param request - ModifyInstanceAttributeRequest
     *
     * @returns ModifyInstanceAttributeResponse
     *
     * @param ModifyInstanceAttributeRequest $request
     *
     * @return ModifyInstanceAttributeResponse
     */
    public function modifyInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * Configures auto-renewal for instances.
     *
     * @param request - ModifyInstanceAutoRenewAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceAutoRenewAttributeResponse
     *
     * @param ModifyInstanceAutoRenewAttributeRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifyInstanceAutoRenewAttributeResponse
     */
    public function modifyInstanceAutoRenewAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->duration) {
            @$query['Duration'] = $request->duration;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->ownerId) {
            @$query['OwnerId'] = $request->ownerId;
        }

        if (null !== $request->renewalStatus) {
            @$query['RenewalStatus'] = $request->renewalStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceAutoRenewAttribute',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceAutoRenewAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures auto-renewal for instances.
     *
     * @param request - ModifyInstanceAutoRenewAttributeRequest
     *
     * @returns ModifyInstanceAutoRenewAttributeResponse
     *
     * @param ModifyInstanceAutoRenewAttributeRequest $request
     *
     * @return ModifyInstanceAutoRenewAttributeResponse
     */
    public function modifyInstanceAutoRenewAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceAutoRenewAttributeWithOptions($request, $runtime);
    }

    /**
     * Modifies the boot configuration of a heterogeneous PC Farm bare metal instance.
     *
     * @remarks
     *   If an instance is in the Starting state, you cannot reset the password of the instance.
     * *   If the instance is in the Running state, you cannot change the password of the instance.
     * *   After resetting the password, you must restart the instance in the ENS console or call the RebootInstance operation to apply the change. The restart operation within the instance does not apply the change.
     *
     * @param request - ModifyInstanceBootConfigurationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceBootConfigurationResponse
     *
     * @param ModifyInstanceBootConfigurationRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyInstanceBootConfigurationResponse
     */
    public function modifyInstanceBootConfigurationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceBootConfiguration',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceBootConfigurationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the boot configuration of a heterogeneous PC Farm bare metal instance.
     *
     * @remarks
     *   If an instance is in the Starting state, you cannot reset the password of the instance.
     * *   If the instance is in the Running state, you cannot change the password of the instance.
     * *   After resetting the password, you must restart the instance in the ENS console or call the RebootInstance operation to apply the change. The restart operation within the instance does not apply the change.
     *
     * @param request - ModifyInstanceBootConfigurationRequest
     *
     * @returns ModifyInstanceBootConfigurationResponse
     *
     * @param ModifyInstanceBootConfigurationRequest $request
     *
     * @return ModifyInstanceBootConfigurationResponse
     */
    public function modifyInstanceBootConfiguration($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceBootConfigurationWithOptions($request, $runtime);
    }

    /**
     * Changes the billing method of Edge Node Service (ENS) instances. You can switch between the pay-as-you-go and subscription billing methods for instances. You can also change the billing method for disks that you created with pay-as-you-go instances to subscription.
     *
     * @remarks
     * Before you call this operation, make sure that you fully understand the billing methods and pricing of ENS.
     * The instances must be in the Running or Stopped state, and you have no overdue payments for them.
     *
     * @param tmpReq - ModifyInstanceChargeTypeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceChargeTypeResponse
     *
     * @param ModifyInstanceChargeTypeRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyInstanceChargeTypeResponse
     */
    public function modifyInstanceChargeTypeWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ModifyInstanceChargeTypeShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceIds) {
            $request->instanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }

        $query = [];
        if (null !== $request->autoPay) {
            @$query['AutoPay'] = $request->autoPay;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->billingCycle) {
            @$query['BillingCycle'] = $request->billingCycle;
        }

        if (null !== $request->includeDataDisks) {
            @$query['IncludeDataDisks'] = $request->includeDataDisks;
        }

        if (null !== $request->instanceChargeType) {
            @$query['InstanceChargeType'] = $request->instanceChargeType;
        }

        if (null !== $request->instanceIdsShrink) {
            @$query['InstanceIds'] = $request->instanceIdsShrink;
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
            'action' => 'ModifyInstanceChargeType',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceChargeTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Changes the billing method of Edge Node Service (ENS) instances. You can switch between the pay-as-you-go and subscription billing methods for instances. You can also change the billing method for disks that you created with pay-as-you-go instances to subscription.
     *
     * @remarks
     * Before you call this operation, make sure that you fully understand the billing methods and pricing of ENS.
     * The instances must be in the Running or Stopped state, and you have no overdue payments for them.
     *
     * @param request - ModifyInstanceChargeTypeRequest
     *
     * @returns ModifyInstanceChargeTypeResponse
     *
     * @param ModifyInstanceChargeTypeRequest $request
     *
     * @return ModifyInstanceChargeTypeResponse
     */
    public function modifyInstanceChargeType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceChargeTypeWithOptions($request, $runtime);
    }

    /**
     * 修改实例网络.
     *
     * @param request - ModifyInstanceNetworkAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyInstanceNetworkAttributeResponse
     *
     * @param ModifyInstanceNetworkAttributeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return ModifyInstanceNetworkAttributeResponse
     */
    public function modifyInstanceNetworkAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->privateIpAddress) {
            @$query['PrivateIpAddress'] = $request->privateIpAddress;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyInstanceNetworkAttribute',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyInstanceNetworkAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改实例网络.
     *
     * @param request - ModifyInstanceNetworkAttributeRequest
     *
     * @returns ModifyInstanceNetworkAttributeResponse
     *
     * @param ModifyInstanceNetworkAttributeRequest $request
     *
     * @return ModifyInstanceNetworkAttributeResponse
     */
    public function modifyInstanceNetworkAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceNetworkAttributeWithOptions($request, $runtime);
    }

    /**
     * Modifies the information about an Edge Load Balancer (ELB) instance.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - ModifyLoadBalancerAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyLoadBalancerAttributeResponse
     *
     * @param ModifyLoadBalancerAttributeRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return ModifyLoadBalancerAttributeResponse
     */
    public function modifyLoadBalancerAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->loadBalancerName) {
            @$query['LoadBalancerName'] = $request->loadBalancerName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyLoadBalancerAttribute',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyLoadBalancerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the information about an Edge Load Balancer (ELB) instance.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - ModifyLoadBalancerAttributeRequest
     *
     * @returns ModifyLoadBalancerAttributeResponse
     *
     * @param ModifyLoadBalancerAttributeRequest $request
     *
     * @return ModifyLoadBalancerAttributeResponse
     */
    public function modifyLoadBalancerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLoadBalancerAttributeWithOptions($request, $runtime);
    }

    /**
     * Modifies the network information.
     *
     * @remarks
     *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 5 times per second per user.
     *
     * @param request - ModifyNetworkAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyNetworkAttributeResponse
     *
     * @param ModifyNetworkAttributeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyNetworkAttributeResponse
     */
    public function modifyNetworkAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->networkId) {
            @$query['NetworkId'] = $request->networkId;
        }

        if (null !== $request->networkName) {
            @$query['NetworkName'] = $request->networkName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyNetworkAttribute',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyNetworkAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the network information.
     *
     * @remarks
     *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 5 times per second per user.
     *
     * @param request - ModifyNetworkAttributeRequest
     *
     * @returns ModifyNetworkAttributeResponse
     *
     * @param ModifyNetworkAttributeRequest $request
     *
     * @return ModifyNetworkAttributeResponse
     */
    public function modifyNetworkAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNetworkAttributeWithOptions($request, $runtime);
    }

    /**
     * Modifies the attributes of an elastic network interface (ENI), such as its name and description.
     *
     * @param request - ModifyNetworkInterfaceAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyNetworkInterfaceAttributeResponse
     *
     * @param ModifyNetworkInterfaceAttributeRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyNetworkInterfaceAttributeResponse
     */
    public function modifyNetworkInterfaceAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->networkInterfaceId) {
            @$query['NetworkInterfaceId'] = $request->networkInterfaceId;
        }

        if (null !== $request->networkInterfaceName) {
            @$query['NetworkInterfaceName'] = $request->networkInterfaceName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyNetworkInterfaceAttribute',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyNetworkInterfaceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the attributes of an elastic network interface (ENI), such as its name and description.
     *
     * @param request - ModifyNetworkInterfaceAttributeRequest
     *
     * @returns ModifyNetworkInterfaceAttributeResponse
     *
     * @param ModifyNetworkInterfaceAttributeRequest $request
     *
     * @return ModifyNetworkInterfaceAttributeResponse
     */
    public function modifyNetworkInterfaceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNetworkInterfaceAttributeWithOptions($request, $runtime);
    }

    /**
     * Upgrades or downgrades the instance type of a subscription Edge Node Service (ENS) instance. The new instance type takes effect for the remaining lifecycle of the instance.
     *
     * @param request - ModifyPrepayInstanceSpecRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyPrepayInstanceSpecResponse
     *
     * @param ModifyPrepayInstanceSpecRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyPrepayInstanceSpecResponse
     */
    public function modifyPrepayInstanceSpecWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyPrepayInstanceSpec',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyPrepayInstanceSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Upgrades or downgrades the instance type of a subscription Edge Node Service (ENS) instance. The new instance type takes effect for the remaining lifecycle of the instance.
     *
     * @param request - ModifyPrepayInstanceSpecRequest
     *
     * @returns ModifyPrepayInstanceSpecResponse
     *
     * @param ModifyPrepayInstanceSpecRequest $request
     *
     * @return ModifyPrepayInstanceSpecResponse
     */
    public function modifyPrepayInstanceSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPrepayInstanceSpecWithOptions($request, $runtime);
    }

    /**
     * Modifies the information about a security group.
     *
     * @remarks
     *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 5 times per second per user.
     *
     * @param request - ModifySecurityGroupAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySecurityGroupAttributeResponse
     *
     * @param ModifySecurityGroupAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifySecurityGroupAttributeResponse
     */
    public function modifySecurityGroupAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->securityGroupName) {
            @$query['SecurityGroupName'] = $request->securityGroupName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySecurityGroupAttribute',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifySecurityGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the information about a security group.
     *
     * @remarks
     *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 5 times per second per user.
     *
     * @param request - ModifySecurityGroupAttributeRequest
     *
     * @returns ModifySecurityGroupAttributeResponse
     *
     * @param ModifySecurityGroupAttributeRequest $request
     *
     * @return ModifySecurityGroupAttributeResponse
     */
    public function modifySecurityGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySecurityGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * Modifies the information about a snapshot.
     *
     * @param request - ModifySnapshotAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySnapshotAttributeResponse
     *
     * @param ModifySnapshotAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifySnapshotAttributeResponse
     */
    public function modifySnapshotAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->snapshotId) {
            @$query['SnapshotId'] = $request->snapshotId;
        }

        if (null !== $request->snapshotName) {
            @$query['SnapshotName'] = $request->snapshotName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySnapshotAttribute',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifySnapshotAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the information about a snapshot.
     *
     * @param request - ModifySnapshotAttributeRequest
     *
     * @returns ModifySnapshotAttributeResponse
     *
     * @param ModifySnapshotAttributeRequest $request
     *
     * @return ModifySnapshotAttributeResponse
     */
    public function modifySnapshotAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySnapshotAttributeWithOptions($request, $runtime);
    }

    /**
     * 修改snat规则.
     *
     * @param request - ModifySnatEntryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySnatEntryResponse
     *
     * @param ModifySnatEntryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ModifySnatEntryResponse
     */
    public function modifySnatEntryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->eipAffinity) {
            @$query['EipAffinity'] = $request->eipAffinity;
        }

        if (null !== $request->ispAffinity) {
            @$query['IspAffinity'] = $request->ispAffinity;
        }

        if (null !== $request->snatEntryId) {
            @$query['SnatEntryId'] = $request->snatEntryId;
        }

        if (null !== $request->snatEntryName) {
            @$query['SnatEntryName'] = $request->snatEntryName;
        }

        if (null !== $request->snatIp) {
            @$query['SnatIp'] = $request->snatIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySnatEntry',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifySnatEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改snat规则.
     *
     * @param request - ModifySnatEntryRequest
     *
     * @returns ModifySnatEntryResponse
     *
     * @param ModifySnatEntryRequest $request
     *
     * @return ModifySnatEntryResponse
     */
    public function modifySnatEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySnatEntryWithOptions($request, $runtime);
    }

    /**
     * Modifies information about a vSwitch.
     *
     * @remarks
     *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 5 times per second per user.
     *
     * @param request - ModifyVSwitchAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifyVSwitchAttributeResponse
     *
     * @param ModifyVSwitchAttributeRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ModifyVSwitchAttributeResponse
     */
    public function modifyVSwitchAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        if (null !== $request->vSwitchName) {
            @$query['VSwitchName'] = $request->vSwitchName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifyVSwitchAttribute',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifyVSwitchAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies information about a vSwitch.
     *
     * @remarks
     *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 5 times per second per user.
     *
     * @param request - ModifyVSwitchAttributeRequest
     *
     * @returns ModifyVSwitchAttributeResponse
     *
     * @param ModifyVSwitchAttributeRequest $request
     *
     * @return ModifyVSwitchAttributeResponse
     */
    public function modifyVSwitchAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVSwitchAttributeWithOptions($request, $runtime);
    }

    /**
     * Deploys the SDG that has been attached to instances on the corresponding Android in Container (AIC) instance.
     *
     * @param tmpReq - MountInstanceSDGRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns MountInstanceSDGResponse
     *
     * @param MountInstanceSDGRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return MountInstanceSDGResponse
     */
    public function mountInstanceSDGWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new MountInstanceSDGShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceIds) {
            $request->instanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }

        $query = [];
        if (null !== $request->instanceIdsShrink) {
            @$query['InstanceIds'] = $request->instanceIdsShrink;
        }

        if (null !== $request->SDGId) {
            @$query['SDGId'] = $request->SDGId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'MountInstanceSDG',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return MountInstanceSDGResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deploys the SDG that has been attached to instances on the corresponding Android in Container (AIC) instance.
     *
     * @param request - MountInstanceSDGRequest
     *
     * @returns MountInstanceSDGResponse
     *
     * @param MountInstanceSDGRequest $request
     *
     * @return MountInstanceSDGResponse
     */
    public function mountInstanceSDG($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->mountInstanceSDGWithOptions($request, $runtime);
    }

    /**
     * Preloads a shared data group (SDG).
     *
     * @param tmpReq - PreloadRegionSDGRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PreloadRegionSDGResponse
     *
     * @param PreloadRegionSDGRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return PreloadRegionSDGResponse
     */
    public function preloadRegionSDGWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new PreloadRegionSDGShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->destinationRegionIds) {
            $request->destinationRegionIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->destinationRegionIds, 'DestinationRegionIds', 'json');
        }

        if (null !== $tmpReq->namespaces) {
            $request->namespacesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->namespaces, 'Namespaces', 'json');
        }

        $query = [];
        if (null !== $request->destinationRegionIdsShrink) {
            @$query['DestinationRegionIds'] = $request->destinationRegionIdsShrink;
        }

        if (null !== $request->diskType) {
            @$query['DiskType'] = $request->diskType;
        }

        if (null !== $request->namespacesShrink) {
            @$query['Namespaces'] = $request->namespacesShrink;
        }

        if (null !== $request->redundantNum) {
            @$query['RedundantNum'] = $request->redundantNum;
        }

        if (null !== $request->SDGId) {
            @$query['SDGId'] = $request->SDGId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PreloadRegionSDG',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PreloadRegionSDGResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Preloads a shared data group (SDG).
     *
     * @param request - PreloadRegionSDGRequest
     *
     * @returns PreloadRegionSDGResponse
     *
     * @param PreloadRegionSDGRequest $request
     *
     * @return PreloadRegionSDGResponse
     */
    public function preloadRegionSDG($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->preloadRegionSDGWithOptions($request, $runtime);
    }

    /**
     * Prepares the upload and obtains the location of the bucket.
     *
     * @param request - PrepareUploadRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PrepareUploadResponse
     *
     * @param PrepareUploadRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return PrepareUploadResponse
     */
    public function prepareUploadWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucketName) {
            @$query['BucketName'] = $request->bucketName;
        }

        if (null !== $request->clientIp) {
            @$query['ClientIp'] = $request->clientIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PrepareUpload',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PrepareUploadResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Prepares the upload and obtains the location of the bucket.
     *
     * @param request - PrepareUploadRequest
     *
     * @returns PrepareUploadResponse
     *
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
     * Pushes the business or service data of an application to file servers.
     *
     * @param request - PushApplicationDataRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PushApplicationDataResponse
     *
     * @param PushApplicationDataRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return PushApplicationDataResponse
     */
    public function pushApplicationDataWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->data) {
            @$query['Data'] = $request->data;
        }

        if (null !== $request->pushStrategy) {
            @$query['PushStrategy'] = $request->pushStrategy;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PushApplicationData',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PushApplicationDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Pushes the business or service data of an application to file servers.
     *
     * @param request - PushApplicationDataRequest
     *
     * @returns PushApplicationDataResponse
     *
     * @param PushApplicationDataRequest $request
     *
     * @return PushApplicationDataResponse
     */
    public function pushApplicationData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushApplicationDataWithOptions($request, $runtime);
    }

    /**
     * Creates an Edge Object Storage (EOS) bucket.
     *
     * @param request - PutBucketRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutBucketResponse
     *
     * @param PutBucketRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return PutBucketResponse
     */
    public function putBucketWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucketAcl) {
            @$query['BucketAcl'] = $request->bucketAcl;
        }

        if (null !== $request->bucketName) {
            @$query['BucketName'] = $request->bucketName;
        }

        if (null !== $request->comment) {
            @$query['Comment'] = $request->comment;
        }

        if (null !== $request->dispatchScope) {
            @$query['DispatchScope'] = $request->dispatchScope;
        }

        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        if (null !== $request->logicalBucketType) {
            @$query['LogicalBucketType'] = $request->logicalBucketType;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutBucket',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutBucketResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates an Edge Object Storage (EOS) bucket.
     *
     * @param request - PutBucketRequest
     *
     * @returns PutBucketResponse
     *
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
     * Modifies the access control list (ACL) of a bucket.
     *
     * @param request - PutBucketAclRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutBucketAclResponse
     *
     * @param PutBucketAclRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return PutBucketAclResponse
     */
    public function putBucketAclWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->bucketAcl) {
            @$query['BucketAcl'] = $request->bucketAcl;
        }

        if (null !== $request->bucketName) {
            @$query['BucketName'] = $request->bucketName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutBucketAcl',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutBucketAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the access control list (ACL) of a bucket.
     *
     * @param request - PutBucketAclRequest
     *
     * @returns PutBucketAclResponse
     *
     * @param PutBucketAclRequest $request
     *
     * @return PutBucketAclResponse
     */
    public function putBucketAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putBucketAclWithOptions($request, $runtime);
    }

    /**
     * Configures lifecycle rules for objects.
     *
     * @remarks
     *   You can configure up to 1,000 rules.
     * *   If an object meets multiple rules, the rule that has the earliest expiration time prevails.
     *
     * @param request - PutBucketLifecycleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns PutBucketLifecycleResponse
     *
     * @param PutBucketLifecycleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return PutBucketLifecycleResponse
     */
    public function putBucketLifecycleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allowSameActionOverlap) {
            @$query['AllowSameActionOverlap'] = $request->allowSameActionOverlap;
        }

        if (null !== $request->bucketName) {
            @$query['BucketName'] = $request->bucketName;
        }

        if (null !== $request->createdBeforeDate) {
            @$query['CreatedBeforeDate'] = $request->createdBeforeDate;
        }

        if (null !== $request->expirationDays) {
            @$query['ExpirationDays'] = $request->expirationDays;
        }

        if (null !== $request->prefix) {
            @$query['Prefix'] = $request->prefix;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->status) {
            @$query['Status'] = $request->status;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'PutBucketLifecycle',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return PutBucketLifecycleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Configures lifecycle rules for objects.
     *
     * @remarks
     *   You can configure up to 1,000 rules.
     * *   If an object meets multiple rules, the rule that has the earliest expiration time prevails.
     *
     * @param request - PutBucketLifecycleRequest
     *
     * @returns PutBucketLifecycleResponse
     *
     * @param PutBucketLifecycleRequest $request
     *
     * @return PutBucketLifecycleResponse
     */
    public function putBucketLifecycle($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putBucketLifecycleWithOptions($request, $runtime);
    }

    /**
     * Initializes a disk.
     *
     * @param request - ReInitDiskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReInitDiskResponse
     *
     * @param ReInitDiskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ReInitDiskResponse
     */
    public function reInitDiskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->diskId) {
            @$query['DiskId'] = $request->diskId;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReInitDisk',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReInitDiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Initializes a disk.
     *
     * @param request - ReInitDiskRequest
     *
     * @returns ReInitDiskResponse
     *
     * @param ReInitDiskRequest $request
     *
     * @return ReInitDiskResponse
     */
    public function reInitDisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reInitDiskWithOptions($request, $runtime);
    }

    /**
     * Restarts an Android in Container (AIC) instance.
     *
     * @param tmpReq - RebootAICInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RebootAICInstanceResponse
     *
     * @param RebootAICInstanceRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return RebootAICInstanceResponse
     */
    public function rebootAICInstanceWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RebootAICInstanceShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceIds) {
            $request->instanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RebootAICInstance',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RebootAICInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Restarts an Android in Container (AIC) instance.
     *
     * @param request - RebootAICInstanceRequest
     *
     * @returns RebootAICInstanceResponse
     *
     * @param RebootAICInstanceRequest $request
     *
     * @return RebootAICInstanceResponse
     */
    public function rebootAICInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebootAICInstanceWithOptions($request, $runtime);
    }

    /**
     * Reboots an Android in Container (AIC) server.
     *
     * @param request - RebootARMServerInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RebootARMServerInstanceResponse
     *
     * @param RebootARMServerInstanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RebootARMServerInstanceResponse
     */
    public function rebootARMServerInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RebootARMServerInstance',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RebootARMServerInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Reboots an Android in Container (AIC) server.
     *
     * @param request - RebootARMServerInstanceRequest
     *
     * @returns RebootARMServerInstanceResponse
     *
     * @param RebootARMServerInstanceRequest $request
     *
     * @return RebootARMServerInstanceResponse
     */
    public function rebootARMServerInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebootARMServerInstanceWithOptions($request, $runtime);
    }

    /**
     * Reboots an instance.
     *
     * @remarks
     *   Only instances that are in the Running state can be restarted.
     * *   If the operation is successful, the status of the instance becomes Starting.
     *
     * @param request - RebootInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RebootInstanceResponse
     *
     * @param RebootInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return RebootInstanceResponse
     */
    public function rebootInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->forceStop) {
            @$query['ForceStop'] = $request->forceStop;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RebootInstance',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RebootInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Reboots an instance.
     *
     * @remarks
     *   Only instances that are in the Running state can be restarted.
     * *   If the operation is successful, the status of the instance becomes Starting.
     *
     * @param request - RebootInstanceRequest
     *
     * @returns RebootInstanceResponse
     *
     * @param RebootInstanceRequest $request
     *
     * @return RebootInstanceResponse
     */
    public function rebootInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebootInstanceWithOptions($request, $runtime);
    }

    /**
     * 选择批量实例进行重启操作.
     *
     * @param tmpReq - RebootInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RebootInstancesResponse
     *
     * @param RebootInstancesRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return RebootInstancesResponse
     */
    public function rebootInstancesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RebootInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceIds) {
            $request->instanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'simple');
        }

        $query = [];
        if (null !== $request->instanceIdsShrink) {
            @$query['InstanceIds'] = $request->instanceIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RebootInstances',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RebootInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 选择批量实例进行重启操作.
     *
     * @param request - RebootInstancesRequest
     *
     * @returns RebootInstancesResponse
     *
     * @param RebootInstancesRequest $request
     *
     * @return RebootInstancesResponse
     */
    public function rebootInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebootInstancesWithOptions($request, $runtime);
    }

    /**
     * Recovers an Android in Container (AIC) instance on the server.
     *
     * @param request - RecoverAICInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RecoverAICInstanceResponse
     *
     * @param RecoverAICInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RecoverAICInstanceResponse
     */
    public function recoverAICInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RecoverAICInstance',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RecoverAICInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Recovers an Android in Container (AIC) instance on the server.
     *
     * @param request - RecoverAICInstanceRequest
     *
     * @returns RecoverAICInstanceResponse
     *
     * @param RecoverAICInstanceRequest $request
     *
     * @return RecoverAICInstanceResponse
     */
    public function recoverAICInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recoverAICInstanceWithOptions($request, $runtime);
    }

    /**
     * Resets an instance based on specific parameters.
     *
     * @param request - ReinitInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReinitInstanceResponse
     *
     * @param ReinitInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ReinitInstanceResponse
     */
    public function reinitInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->imageId) {
            @$body['ImageId'] = $request->imageId;
        }

        if (null !== $request->instanceId) {
            @$body['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->password) {
            @$body['Password'] = $request->password;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ReinitInstance',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReinitInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resets an instance based on specific parameters.
     *
     * @param request - ReinitInstanceRequest
     *
     * @returns ReinitInstanceResponse
     *
     * @param ReinitInstanceRequest $request
     *
     * @return ReinitInstanceResponse
     */
    public function reinitInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reinitInstanceWithOptions($request, $runtime);
    }

    /**
     * 选择批量实例进行重置操作.
     *
     * @param tmpReq - ReinitInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReinitInstancesResponse
     *
     * @param ReinitInstancesRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return ReinitInstancesResponse
     */
    public function reinitInstancesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ReinitInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceIds) {
            $request->instanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'simple');
        }

        $query = [];
        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->instanceIdsShrink) {
            @$query['InstanceIds'] = $request->instanceIdsShrink;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReinitInstances',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReinitInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 选择批量实例进行重置操作.
     *
     * @param request - ReinitInstancesRequest
     *
     * @returns ReinitInstancesResponse
     *
     * @param ReinitInstancesRequest $request
     *
     * @return ReinitInstancesResponse
     */
    public function reinitInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reinitInstancesWithOptions($request, $runtime);
    }

    /**
     * Releases an Android in Container (AIC) instance from the server.
     *
     * @param request - ReleaseAICInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseAICInstanceResponse
     *
     * @param ReleaseAICInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ReleaseAICInstanceResponse
     */
    public function releaseAICInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->serverId) {
            @$query['ServerId'] = $request->serverId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ReleaseAICInstance',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReleaseAICInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases an Android in Container (AIC) instance from the server.
     *
     * @param request - ReleaseAICInstanceRequest
     *
     * @returns ReleaseAICInstanceResponse
     *
     * @param ReleaseAICInstanceRequest $request
     *
     * @return ReleaseAICInstanceResponse
     */
    public function releaseAICInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseAICInstanceWithOptions($request, $runtime);
    }

    /**
     * Releases an ARM server.
     *
     * @param request - ReleaseARMServerInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseARMServerInstanceResponse
     *
     * @param ReleaseARMServerInstanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ReleaseARMServerInstanceResponse
     */
    public function releaseARMServerInstanceWithOptions($request, $runtime)
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
            'action' => 'ReleaseARMServerInstance',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReleaseARMServerInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases an ARM server.
     *
     * @param request - ReleaseARMServerInstanceRequest
     *
     * @returns ReleaseARMServerInstanceResponse
     *
     * @param ReleaseARMServerInstanceRequest $request
     *
     * @return ReleaseARMServerInstanceResponse
     */
    public function releaseARMServerInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseARMServerInstanceWithOptions($request, $runtime);
    }

    /**
     * Releases an instance. You can call this operation to release only Elastic IP Addresses (EIPs), Edge Load Balancer (ELB) instances, and cloud disk-based instances. We recommend that you call service-specific operations to release or unsubscribe from instances.
     *
     * @remarks
     *   You can call this operation up to 10,000 times per second per account.
     * *   The maximum number of times that each user can call this operation per second is 50.
     *
     * @param request - ReleaseInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleaseInstanceResponse
     *
     * @param ReleaseInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return ReleaseInstanceResponse
     */
    public function releaseInstanceWithOptions($request, $runtime)
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
            'action' => 'ReleaseInstance',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReleaseInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Releases an instance. You can call this operation to release only Elastic IP Addresses (EIPs), Edge Load Balancer (ELB) instances, and cloud disk-based instances. We recommend that you call service-specific operations to release or unsubscribe from instances.
     *
     * @remarks
     *   You can call this operation up to 10,000 times per second per account.
     * *   The maximum number of times that each user can call this operation per second is 50.
     *
     * @param request - ReleaseInstanceRequest
     *
     * @returns ReleaseInstanceResponse
     *
     * @param ReleaseInstanceRequest $request
     *
     * @return ReleaseInstanceResponse
     */
    public function releaseInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseInstanceWithOptions($request, $runtime);
    }

    /**
     * Deletes a pay-as-you-go instance.
     *
     * @param request - ReleasePostPaidInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleasePostPaidInstanceResponse
     *
     * @param ReleasePostPaidInstanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ReleasePostPaidInstanceResponse
     */
    public function releasePostPaidInstanceWithOptions($request, $runtime)
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
            'action' => 'ReleasePostPaidInstance',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReleasePostPaidInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a pay-as-you-go instance.
     *
     * @param request - ReleasePostPaidInstanceRequest
     *
     * @returns ReleasePostPaidInstanceResponse
     *
     * @param ReleasePostPaidInstanceRequest $request
     *
     * @return ReleasePostPaidInstanceResponse
     */
    public function releasePostPaidInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releasePostPaidInstanceWithOptions($request, $runtime);
    }

    /**
     * Call ReleasePrePaidInstance to delete a subscription instance.
     *
     * @param request - ReleasePrePaidInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ReleasePrePaidInstanceResponse
     *
     * @param ReleasePrePaidInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ReleasePrePaidInstanceResponse
     */
    public function releasePrePaidInstanceWithOptions($request, $runtime)
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
            'action' => 'ReleasePrePaidInstance',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ReleasePrePaidInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Call ReleasePrePaidInstance to delete a subscription instance.
     *
     * @param request - ReleasePrePaidInstanceRequest
     *
     * @returns ReleasePrePaidInstanceResponse
     *
     * @param ReleasePrePaidInstanceRequest $request
     *
     * @return ReleasePrePaidInstanceResponse
     */
    public function releasePrePaidInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releasePrePaidInstanceWithOptions($request, $runtime);
    }

    /**
     * Removes backend servers.
     *
     * @remarks
     *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 10 times per second per account.
     *
     * @param tmpReq - RemoveBackendServersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveBackendServersResponse
     *
     * @param RemoveBackendServersRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return RemoveBackendServersResponse
     */
    public function removeBackendServersWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RemoveBackendServersShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->backendServers) {
            $request->backendServersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->backendServers, 'BackendServers', 'json');
        }

        $query = [];
        if (null !== $request->backendServersShrink) {
            @$query['BackendServers'] = $request->backendServersShrink;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveBackendServers',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveBackendServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes backend servers.
     *
     * @remarks
     *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 10 times per second per account.
     *
     * @param request - RemoveBackendServersRequest
     *
     * @returns RemoveBackendServersResponse
     *
     * @param RemoveBackendServersRequest $request
     *
     * @return RemoveBackendServersResponse
     */
    public function removeBackendServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeBackendServersWithOptions($request, $runtime);
    }

    /**
     * Removes a shared data group (SDG) that is attached to the compute instance.
     *
     * @param tmpReq - RemoveInstanceSDGRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveInstanceSDGResponse
     *
     * @param RemoveInstanceSDGRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return RemoveInstanceSDGResponse
     */
    public function removeInstanceSDGWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RemoveInstanceSDGShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceIds) {
            $request->instanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }

        $query = [];
        if (null !== $request->instanceIdsShrink) {
            @$query['InstanceIds'] = $request->instanceIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveInstanceSDG',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveInstanceSDGResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes a shared data group (SDG) that is attached to the compute instance.
     *
     * @param request - RemoveInstanceSDGRequest
     *
     * @returns RemoveInstanceSDGResponse
     *
     * @param RemoveInstanceSDGRequest $request
     *
     * @return RemoveInstanceSDGResponse
     */
    public function removeInstanceSDG($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeInstanceSDGWithOptions($request, $runtime);
    }

    /**
     * Removes IP addresses from an edge private network (EPN) instance.
     *
     * @param request - RemovePublicIpsFromEpnInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemovePublicIpsFromEpnInstanceResponse
     *
     * @param RemovePublicIpsFromEpnInstanceRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return RemovePublicIpsFromEpnInstanceResponse
     */
    public function removePublicIpsFromEpnInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->EPNInstanceId) {
            @$query['EPNInstanceId'] = $request->EPNInstanceId;
        }

        if (null !== $request->instanceInfos) {
            @$query['InstanceInfos'] = $request->instanceInfos;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemovePublicIpsFromEpnInstance',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemovePublicIpsFromEpnInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes IP addresses from an edge private network (EPN) instance.
     *
     * @param request - RemovePublicIpsFromEpnInstanceRequest
     *
     * @returns RemovePublicIpsFromEpnInstanceResponse
     *
     * @param RemovePublicIpsFromEpnInstanceRequest $request
     *
     * @return RemovePublicIpsFromEpnInstanceResponse
     */
    public function removePublicIpsFromEpnInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removePublicIpsFromEpnInstanceWithOptions($request, $runtime);
    }

    /**
     * Removes a deployed shared data group (SDG) and restore local storage.
     *
     * @param tmpReq - RemoveSDGRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveSDGResponse
     *
     * @param RemoveSDGRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return RemoveSDGResponse
     */
    public function removeSDGWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RemoveSDGShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceIds) {
            $request->instanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveSDG',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveSDGResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes a deployed shared data group (SDG) and restore local storage.
     *
     * @param request - RemoveSDGRequest
     *
     * @returns RemoveSDGResponse
     *
     * @param RemoveSDGRequest $request
     *
     * @return RemoveSDGResponse
     */
    public function removeSDG($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeSDGWithOptions($request, $runtime);
    }

    /**
     * Removes all versions of SDG and restores the mount to the local disk.
     *
     * @param tmpReq - RemoveSDGsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveSDGsResponse
     *
     * @param RemoveSDGsRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return RemoveSDGsResponse
     */
    public function removeSDGsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RemoveSDGsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceIds) {
            $request->instanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }

        if (null !== $tmpReq->sdgIds) {
            $request->sdgIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->sdgIds, 'SdgIds', 'json');
        }

        $query = [];
        if (null !== $request->instanceIdsShrink) {
            @$query['InstanceIds'] = $request->instanceIdsShrink;
        }

        if (null !== $request->sdgIdsShrink) {
            @$query['SdgIds'] = $request->sdgIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveSDGs',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveSDGsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Removes all versions of SDG and restores the mount to the local disk.
     *
     * @param request - RemoveSDGsRequest
     *
     * @returns RemoveSDGsResponse
     *
     * @param RemoveSDGsRequest $request
     *
     * @return RemoveSDGsResponse
     */
    public function removeSDGs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeSDGsWithOptions($request, $runtime);
    }

    /**
     * Deletes the networking information. This operation is applicable only for instances that reside in the internal network.
     *
     * @param request - RemoveVSwitchesFromEpnInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RemoveVSwitchesFromEpnInstanceResponse
     *
     * @param RemoveVSwitchesFromEpnInstanceRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return RemoveVSwitchesFromEpnInstanceResponse
     */
    public function removeVSwitchesFromEpnInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->EPNInstanceId) {
            @$query['EPNInstanceId'] = $request->EPNInstanceId;
        }

        if (null !== $request->vSwitchesInfo) {
            @$query['VSwitchesInfo'] = $request->vSwitchesInfo;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RemoveVSwitchesFromEpnInstance',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RemoveVSwitchesFromEpnInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes the networking information. This operation is applicable only for instances that reside in the internal network.
     *
     * @param request - RemoveVSwitchesFromEpnInstanceRequest
     *
     * @returns RemoveVSwitchesFromEpnInstanceResponse
     *
     * @param RemoveVSwitchesFromEpnInstanceRequest $request
     *
     * @return RemoveVSwitchesFromEpnInstanceResponse
     */
    public function removeVSwitchesFromEpnInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeVSwitchesFromEpnInstanceWithOptions($request, $runtime);
    }

    /**
     * Renews a subscription Android in Container (AIC) instance.
     *
     * @param request - RenewARMServerInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenewARMServerInstanceResponse
     *
     * @param RenewARMServerInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RenewARMServerInstanceResponse
     */
    public function renewARMServerInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
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
            'action' => 'RenewARMServerInstance',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RenewARMServerInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Renews a subscription Android in Container (AIC) instance.
     *
     * @param request - RenewARMServerInstanceRequest
     *
     * @returns RenewARMServerInstanceResponse
     *
     * @param RenewARMServerInstanceRequest $request
     *
     * @return RenewARMServerInstanceResponse
     */
    public function renewARMServerInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewARMServerInstanceWithOptions($request, $runtime);
    }

    /**
     * Renews a subscription instance.
     *
     * @param request - RenewInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RenewInstanceResponse
     *
     * @param RenewInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RenewInstanceResponse
     */
    public function renewInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RenewInstance',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RenewInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Renews a subscription instance.
     *
     * @param request - RenewInstanceRequest
     *
     * @returns RenewInstanceResponse
     *
     * @param RenewInstanceRequest $request
     *
     * @return RenewInstanceResponse
     */
    public function renewInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewInstanceWithOptions($request, $runtime);
    }

    /**
     * Scales resources in an asynchronous manner and deploys or releases the container.
     *
     * @param request - RescaleApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RescaleApplicationResponse
     *
     * @param RescaleApplicationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RescaleApplicationResponse
     */
    public function rescaleApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->rescaleLevel) {
            @$query['RescaleLevel'] = $request->rescaleLevel;
        }

        if (null !== $request->rescaleType) {
            @$query['RescaleType'] = $request->rescaleType;
        }

        if (null !== $request->resourceSelector) {
            @$query['ResourceSelector'] = $request->resourceSelector;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        if (null !== $request->toAppVersion) {
            @$query['ToAppVersion'] = $request->toAppVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RescaleApplication',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RescaleApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Scales resources in an asynchronous manner and deploys or releases the container.
     *
     * @param request - RescaleApplicationRequest
     *
     * @returns RescaleApplicationResponse
     *
     * @param RescaleApplicationRequest $request
     *
     * @return RescaleApplicationResponse
     */
    public function rescaleApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rescaleApplicationWithOptions($request, $runtime);
    }

    /**
     * Scales out a bare metal device.
     *
     * @param request - RescaleDeviceServiceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RescaleDeviceServiceResponse
     *
     * @param RescaleDeviceServiceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RescaleDeviceServiceResponse
     */
    public function rescaleDeviceServiceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->ipType) {
            @$query['IpType'] = $request->ipType;
        }

        if (null !== $request->rescaleLevel) {
            @$query['RescaleLevel'] = $request->rescaleLevel;
        }

        if (null !== $request->rescaleType) {
            @$query['RescaleType'] = $request->rescaleType;
        }

        if (null !== $request->resourceSpec) {
            @$query['ResourceSpec'] = $request->resourceSpec;
        }

        if (null !== $request->serviceId) {
            @$query['ServiceId'] = $request->serviceId;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        $body = [];
        if (null !== $request->resourceInfo) {
            @$body['ResourceInfo'] = $request->resourceInfo;
        }

        if (null !== $request->resourceSelector) {
            @$body['ResourceSelector'] = $request->resourceSelector;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'RescaleDeviceService',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RescaleDeviceServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Scales out a bare metal device.
     *
     * @param request - RescaleDeviceServiceRequest
     *
     * @returns RescaleDeviceServiceResponse
     *
     * @param RescaleDeviceServiceRequest $request
     *
     * @return RescaleDeviceServiceResponse
     */
    public function rescaleDeviceService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rescaleDeviceServiceWithOptions($request, $runtime);
    }

    /**
     * Resets an Android in Container (AIC) instance.
     *
     * @param request - ResetAICInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetAICInstanceResponse
     *
     * @param ResetAICInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ResetAICInstanceResponse
     */
    public function resetAICInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetAICInstance',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetAICInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resets an Android in Container (AIC) instance.
     *
     * @param request - ResetAICInstanceRequest
     *
     * @returns ResetAICInstanceResponse
     *
     * @param ResetAICInstanceRequest $request
     *
     * @return ResetAICInstanceResponse
     */
    public function resetAICInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAICInstanceWithOptions($request, $runtime);
    }

    /**
     * Rolls back a disk by using a snapshot.
     *
     * @remarks
     * When you call this operation, take note of the following items:
     * *   The disk must be in the In Use (In_Use) or Unattached (Available) state.
     * *   The instance to which the disk is attached must be in the Stopped (Stopped) state. You can call the [StopInstance](~~StopInstance~~) operation to stop an instance.
     * *   The specified snapshot must be created from the disk specified by the DiskId parameter.
     * *   If the response contains `{"OperationLocks": {"LockReason" : "security"}}` when you query information about an ENS instance by calling the [DescribeInstances](~~DescribeInstances~~) operation, the instance is locked for security reasons and no operations are allowed on the instance.
     *
     * @param request - ResetDiskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResetDiskResponse
     *
     * @param ResetDiskRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ResetDiskResponse
     */
    public function resetDiskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->diskId) {
            @$query['DiskId'] = $request->diskId;
        }

        if (null !== $request->snapshotId) {
            @$query['SnapshotId'] = $request->snapshotId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResetDisk',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResetDiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Rolls back a disk by using a snapshot.
     *
     * @remarks
     * When you call this operation, take note of the following items:
     * *   The disk must be in the In Use (In_Use) or Unattached (Available) state.
     * *   The instance to which the disk is attached must be in the Stopped (Stopped) state. You can call the [StopInstance](~~StopInstance~~) operation to stop an instance.
     * *   The specified snapshot must be created from the disk specified by the DiskId parameter.
     * *   If the response contains `{"OperationLocks": {"LockReason" : "security"}}` when you query information about an ENS instance by calling the [DescribeInstances](~~DescribeInstances~~) operation, the instance is locked for security reasons and no operations are allowed on the instance.
     *
     * @param request - ResetDiskRequest
     *
     * @returns ResetDiskResponse
     *
     * @param ResetDiskRequest $request
     *
     * @return ResetDiskResponse
     */
    public function resetDisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetDiskWithOptions($request, $runtime);
    }

    /**
     * Resizes a pay-as-you-go disk that you purchase.
     *
     * @param request - ResizeDiskRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ResizeDiskResponse
     *
     * @param ResizeDiskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ResizeDiskResponse
     */
    public function resizeDiskWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->diskId) {
            @$query['DiskId'] = $request->diskId;
        }

        if (null !== $request->newSize) {
            @$query['NewSize'] = $request->newSize;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ResizeDisk',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ResizeDiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Resizes a pay-as-you-go disk that you purchase.
     *
     * @param request - ResizeDiskRequest
     *
     * @returns ResizeDiskResponse
     *
     * @param ResizeDiskRequest $request
     *
     * @return ResizeDiskResponse
     */
    public function resizeDisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resizeDiskWithOptions($request, $runtime);
    }

    /**
     * Deletes an inbound security group rule. After the rule is deleted, the access control implemented by the rule is removed.
     *
     * @remarks
     *   In the security group-related API documents, inbound traffic refers to the traffic sent by the source and received by the destination.
     * *   You can determine an inbound security group rule by specifying one of the following groups of parameters. You cannot determine a security group rule by specifying only one parameter.
     * *   You can specify one or more of the following parameters to remove access control for a CIDR block: IpProtocol, PortRange, Policy, and SourceCidrIp.
     *
     * @param request - RevokeSecurityGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokeSecurityGroupResponse
     *
     * @param RevokeSecurityGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RevokeSecurityGroupResponse
     */
    public function revokeSecurityGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->ipProtocol) {
            @$query['IpProtocol'] = $request->ipProtocol;
        }

        if (null !== $request->policy) {
            @$query['Policy'] = $request->policy;
        }

        if (null !== $request->portRange) {
            @$query['PortRange'] = $request->portRange;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->sourceCidrIp) {
            @$query['SourceCidrIp'] = $request->sourceCidrIp;
        }

        if (null !== $request->sourcePortRange) {
            @$query['SourcePortRange'] = $request->sourcePortRange;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RevokeSecurityGroup',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RevokeSecurityGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an inbound security group rule. After the rule is deleted, the access control implemented by the rule is removed.
     *
     * @remarks
     *   In the security group-related API documents, inbound traffic refers to the traffic sent by the source and received by the destination.
     * *   You can determine an inbound security group rule by specifying one of the following groups of parameters. You cannot determine a security group rule by specifying only one parameter.
     * *   You can specify one or more of the following parameters to remove access control for a CIDR block: IpProtocol, PortRange, Policy, and SourceCidrIp.
     *
     * @param request - RevokeSecurityGroupRequest
     *
     * @returns RevokeSecurityGroupResponse
     *
     * @param RevokeSecurityGroupRequest $request
     *
     * @return RevokeSecurityGroupResponse
     */
    public function revokeSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * Deletes an outbound security group rule. After the rule is deleted, the access control implemented by the rule is removed.
     *
     * @remarks
     * >  In the security group-related API documents, outbound traffic refers to the traffic sent by the source and received by the destination.
     *
     * @param request - RevokeSecurityGroupEgressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RevokeSecurityGroupEgressResponse
     *
     * @param RevokeSecurityGroupEgressRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return RevokeSecurityGroupEgressResponse
     */
    public function revokeSecurityGroupEgressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->destCidrIp) {
            @$query['DestCidrIp'] = $request->destCidrIp;
        }

        if (null !== $request->ipProtocol) {
            @$query['IpProtocol'] = $request->ipProtocol;
        }

        if (null !== $request->policy) {
            @$query['Policy'] = $request->policy;
        }

        if (null !== $request->portRange) {
            @$query['PortRange'] = $request->portRange;
        }

        if (null !== $request->priority) {
            @$query['Priority'] = $request->priority;
        }

        if (null !== $request->securityGroupId) {
            @$query['SecurityGroupId'] = $request->securityGroupId;
        }

        if (null !== $request->sourcePortRange) {
            @$query['SourcePortRange'] = $request->sourcePortRange;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RevokeSecurityGroupEgress',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RevokeSecurityGroupEgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes an outbound security group rule. After the rule is deleted, the access control implemented by the rule is removed.
     *
     * @remarks
     * >  In the security group-related API documents, outbound traffic refers to the traffic sent by the source and received by the destination.
     *
     * @param request - RevokeSecurityGroupEgressRequest
     *
     * @returns RevokeSecurityGroupEgressResponse
     *
     * @param RevokeSecurityGroupEgressRequest $request
     *
     * @return RevokeSecurityGroupEgressResponse
     */
    public function revokeSecurityGroupEgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeSecurityGroupEgressWithOptions($request, $runtime);
    }

    /**
     * Rolls back the container version of a specific application.
     *
     * @param request - RollbackApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RollbackApplicationResponse
     *
     * @param RollbackApplicationRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RollbackApplicationResponse
     */
    public function rollbackApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->fromAppVersion) {
            @$query['FromAppVersion'] = $request->fromAppVersion;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        if (null !== $request->toAppVersion) {
            @$query['ToAppVersion'] = $request->toAppVersion;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RollbackApplication',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RollbackApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Rolls back the container version of a specific application.
     *
     * @param request - RollbackApplicationRequest
     *
     * @returns RollbackApplicationResponse
     *
     * @param RollbackApplicationRequest $request
     *
     * @return RollbackApplicationResponse
     */
    public function rollbackApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rollbackApplicationWithOptions($request, $runtime);
    }

    /**
     * Creates a pay-as-you-go or subscription ENS instance.
     *
     * @param tmpReq - RunInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunInstancesResponse
     *
     * @param RunInstancesRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return RunInstancesResponse
     */
    public function runInstancesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new RunInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->dataDisk) {
            $request->dataDiskShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->dataDisk, 'DataDisk', 'json');
        }

        if (null !== $tmpReq->systemDisk) {
            $request->systemDiskShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->systemDisk, 'SystemDisk', 'json');
        }

        $query = [];
        if (null !== $request->amount) {
            @$query['Amount'] = $request->amount;
        }

        if (null !== $request->autoReleaseTime) {
            @$query['AutoReleaseTime'] = $request->autoReleaseTime;
        }

        if (null !== $request->autoRenew) {
            @$query['AutoRenew'] = $request->autoRenew;
        }

        if (null !== $request->autoUseCoupon) {
            @$query['AutoUseCoupon'] = $request->autoUseCoupon;
        }

        if (null !== $request->billingCycle) {
            @$query['BillingCycle'] = $request->billingCycle;
        }

        if (null !== $request->carrier) {
            @$query['Carrier'] = $request->carrier;
        }

        if (null !== $request->dataDiskShrink) {
            @$query['DataDisk'] = $request->dataDiskShrink;
        }

        if (null !== $request->deletionProtection) {
            @$query['DeletionProtection'] = $request->deletionProtection;
        }

        if (null !== $request->ensRegionId) {
            @$query['EnsRegionId'] = $request->ensRegionId;
        }

        if (null !== $request->hostName) {
            @$query['HostName'] = $request->hostName;
        }

        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->instanceChargeStrategy) {
            @$query['InstanceChargeStrategy'] = $request->instanceChargeStrategy;
        }

        if (null !== $request->instanceChargeType) {
            @$query['InstanceChargeType'] = $request->instanceChargeType;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->instanceType) {
            @$query['InstanceType'] = $request->instanceType;
        }

        if (null !== $request->internetChargeType) {
            @$query['InternetChargeType'] = $request->internetChargeType;
        }

        if (null !== $request->internetMaxBandwidthOut) {
            @$query['InternetMaxBandwidthOut'] = $request->internetMaxBandwidthOut;
        }

        if (null !== $request->ipType) {
            @$query['IpType'] = $request->ipType;
        }

        if (null !== $request->ipv6AddressCount) {
            @$query['Ipv6AddressCount'] = $request->ipv6AddressCount;
        }

        if (null !== $request->keyPairName) {
            @$query['KeyPairName'] = $request->keyPairName;
        }

        if (null !== $request->launchTemplateId) {
            @$query['LaunchTemplateId'] = $request->launchTemplateId;
        }

        if (null !== $request->launchTemplateName) {
            @$query['LaunchTemplateName'] = $request->launchTemplateName;
        }

        if (null !== $request->launchTemplateVersion) {
            @$query['LaunchTemplateVersion'] = $request->launchTemplateVersion;
        }

        if (null !== $request->netDistrictCode) {
            @$query['NetDistrictCode'] = $request->netDistrictCode;
        }

        if (null !== $request->netWorkId) {
            @$query['NetWorkId'] = $request->netWorkId;
        }

        if (null !== $request->password) {
            @$query['Password'] = $request->password;
        }

        if (null !== $request->passwordInherit) {
            @$query['PasswordInherit'] = $request->passwordInherit;
        }

        if (null !== $request->period) {
            @$query['Period'] = $request->period;
        }

        if (null !== $request->periodUnit) {
            @$query['PeriodUnit'] = $request->periodUnit;
        }

        if (null !== $request->privateIpAddress) {
            @$query['PrivateIpAddress'] = $request->privateIpAddress;
        }

        if (null !== $request->publicIpIdentification) {
            @$query['PublicIpIdentification'] = $request->publicIpIdentification;
        }

        if (null !== $request->scheduleAreaLevel) {
            @$query['ScheduleAreaLevel'] = $request->scheduleAreaLevel;
        }

        if (null !== $request->schedulingPriceStrategy) {
            @$query['SchedulingPriceStrategy'] = $request->schedulingPriceStrategy;
        }

        if (null !== $request->schedulingStrategy) {
            @$query['SchedulingStrategy'] = $request->schedulingStrategy;
        }

        if (null !== $request->securityId) {
            @$query['SecurityId'] = $request->securityId;
        }

        if (null !== $request->spotDuration) {
            @$query['SpotDuration'] = $request->spotDuration;
        }

        if (null !== $request->spotStrategy) {
            @$query['SpotStrategy'] = $request->spotStrategy;
        }

        if (null !== $request->systemDiskShrink) {
            @$query['SystemDisk'] = $request->systemDiskShrink;
        }

        if (null !== $request->tag) {
            @$query['Tag'] = $request->tag;
        }

        if (null !== $request->uniqueSuffix) {
            @$query['UniqueSuffix'] = $request->uniqueSuffix;
        }

        if (null !== $request->userData) {
            @$query['UserData'] = $request->userData;
        }

        if (null !== $request->vSwitchId) {
            @$query['VSwitchId'] = $request->vSwitchId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RunInstances',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a pay-as-you-go or subscription ENS instance.
     *
     * @param request - RunInstancesRequest
     *
     * @returns RunInstancesResponse
     *
     * @param RunInstancesRequest $request
     *
     * @return RunInstancesResponse
     */
    public function runInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runInstancesWithOptions($request, $runtime);
    }

    /**
     * Schedules the nearest idle resources including instances and pods for your device based on the user ID and IP address and initializes the virtual environment.
     *
     * @param request - RunServiceScheduleRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns RunServiceScheduleResponse
     *
     * @param RunServiceScheduleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RunServiceScheduleResponse
     */
    public function runServiceScheduleWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->clientIp) {
            @$query['ClientIp'] = $request->clientIp;
        }

        if (null !== $request->directorys) {
            @$query['Directorys'] = $request->directorys;
        }

        if (null !== $request->podConfigName) {
            @$query['PodConfigName'] = $request->podConfigName;
        }

        if (null !== $request->preLockedTimeout) {
            @$query['PreLockedTimeout'] = $request->preLockedTimeout;
        }

        if (null !== $request->scheduleStrategy) {
            @$query['ScheduleStrategy'] = $request->scheduleStrategy;
        }

        if (null !== $request->serviceAction) {
            @$query['ServiceAction'] = $request->serviceAction;
        }

        if (null !== $request->serviceCommands) {
            @$query['ServiceCommands'] = $request->serviceCommands;
        }

        if (null !== $request->uuid) {
            @$query['Uuid'] = $request->uuid;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'RunServiceSchedule',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return RunServiceScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Schedules the nearest idle resources including instances and pods for your device based on the user ID and IP address and initializes the virtual environment.
     *
     * @param request - RunServiceScheduleRequest
     *
     * @returns RunServiceScheduleResponse
     *
     * @param RunServiceScheduleRequest $request
     *
     * @return RunServiceScheduleResponse
     */
    public function runServiceSchedule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runServiceScheduleWithOptions($request, $runtime);
    }

    /**
     * Saves the disk of a specific device as a shared data group (SDG).
     *
     * @param request - SaveSDGRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SaveSDGResponse
     *
     * @param SaveSDGRequest $request
     * @param RuntimeOptions $runtime
     *
     * @return SaveSDGResponse
     */
    public function saveSDGWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SaveSDG',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SaveSDGResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Saves the disk of a specific device as a shared data group (SDG).
     *
     * @param request - SaveSDGRequest
     *
     * @returns SaveSDGResponse
     *
     * @param SaveSDGRequest $request
     *
     * @return SaveSDGResponse
     */
    public function saveSDG($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSDGWithOptions($request, $runtime);
    }

    /**
     * Sets the weights of backend servers.
     *
     * @remarks
     *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 10 times per second per account.
     *
     * @param tmpReq - SetBackendServersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetBackendServersResponse
     *
     * @param SetBackendServersRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return SetBackendServersResponse
     */
    public function setBackendServersWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new SetBackendServersShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->backendServers) {
            $request->backendServersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->backendServers, 'BackendServers', 'json');
        }

        $query = [];
        if (null !== $request->backendServersShrink) {
            @$query['BackendServers'] = $request->backendServersShrink;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetBackendServers',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetBackendServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Sets the weights of backend servers.
     *
     * @remarks
     *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 10 times per second per account.
     *
     * @param request - SetBackendServersRequest
     *
     * @returns SetBackendServersResponse
     *
     * @param SetBackendServersRequest $request
     *
     * @return SetBackendServersResponse
     */
    public function setBackendServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setBackendServersWithOptions($request, $runtime);
    }

    /**
     * Modifies the configurations of an HTTP listener.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - SetLoadBalancerHTTPListenerAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetLoadBalancerHTTPListenerAttributeResponse
     *
     * @param SetLoadBalancerHTTPListenerAttributeRequest $request
     * @param RuntimeOptions                              $runtime
     *
     * @return SetLoadBalancerHTTPListenerAttributeResponse
     */
    public function setLoadBalancerHTTPListenerAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->healthCheck) {
            @$query['HealthCheck'] = $request->healthCheck;
        }

        if (null !== $request->healthCheckConnectPort) {
            @$query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }

        if (null !== $request->healthCheckDomain) {
            @$query['HealthCheckDomain'] = $request->healthCheckDomain;
        }

        if (null !== $request->healthCheckHttpCode) {
            @$query['HealthCheckHttpCode'] = $request->healthCheckHttpCode;
        }

        if (null !== $request->healthCheckInterval) {
            @$query['HealthCheckInterval'] = $request->healthCheckInterval;
        }

        if (null !== $request->healthCheckMethod) {
            @$query['HealthCheckMethod'] = $request->healthCheckMethod;
        }

        if (null !== $request->healthCheckTimeout) {
            @$query['HealthCheckTimeout'] = $request->healthCheckTimeout;
        }

        if (null !== $request->healthCheckURI) {
            @$query['HealthCheckURI'] = $request->healthCheckURI;
        }

        if (null !== $request->healthyThreshold) {
            @$query['HealthyThreshold'] = $request->healthyThreshold;
        }

        if (null !== $request->idleTimeout) {
            @$query['IdleTimeout'] = $request->idleTimeout;
        }

        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->requestTimeout) {
            @$query['RequestTimeout'] = $request->requestTimeout;
        }

        if (null !== $request->scheduler) {
            @$query['Scheduler'] = $request->scheduler;
        }

        if (null !== $request->unhealthyThreshold) {
            @$query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }

        if (null !== $request->XForwardedFor) {
            @$query['XForwardedFor'] = $request->XForwardedFor;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetLoadBalancerHTTPListenerAttribute',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetLoadBalancerHTTPListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of an HTTP listener.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - SetLoadBalancerHTTPListenerAttributeRequest
     *
     * @returns SetLoadBalancerHTTPListenerAttributeResponse
     *
     * @param SetLoadBalancerHTTPListenerAttributeRequest $request
     *
     * @return SetLoadBalancerHTTPListenerAttributeResponse
     */
    public function setLoadBalancerHTTPListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLoadBalancerHTTPListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * Modifies the configurations of an HTTPS listener.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - SetLoadBalancerHTTPSListenerAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetLoadBalancerHTTPSListenerAttributeResponse
     *
     * @param SetLoadBalancerHTTPSListenerAttributeRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return SetLoadBalancerHTTPSListenerAttributeResponse
     */
    public function setLoadBalancerHTTPSListenerAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->healthCheck) {
            @$query['HealthCheck'] = $request->healthCheck;
        }

        if (null !== $request->healthCheckConnectPort) {
            @$query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }

        if (null !== $request->healthCheckDomain) {
            @$query['HealthCheckDomain'] = $request->healthCheckDomain;
        }

        if (null !== $request->healthCheckHttpCode) {
            @$query['HealthCheckHttpCode'] = $request->healthCheckHttpCode;
        }

        if (null !== $request->healthCheckInterval) {
            @$query['HealthCheckInterval'] = $request->healthCheckInterval;
        }

        if (null !== $request->healthCheckMethod) {
            @$query['HealthCheckMethod'] = $request->healthCheckMethod;
        }

        if (null !== $request->healthCheckTimeout) {
            @$query['HealthCheckTimeout'] = $request->healthCheckTimeout;
        }

        if (null !== $request->healthCheckURI) {
            @$query['HealthCheckURI'] = $request->healthCheckURI;
        }

        if (null !== $request->healthyThreshold) {
            @$query['HealthyThreshold'] = $request->healthyThreshold;
        }

        if (null !== $request->idleTimeout) {
            @$query['IdleTimeout'] = $request->idleTimeout;
        }

        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->requestTimeout) {
            @$query['RequestTimeout'] = $request->requestTimeout;
        }

        if (null !== $request->scheduler) {
            @$query['Scheduler'] = $request->scheduler;
        }

        if (null !== $request->serverCertificateId) {
            @$query['ServerCertificateId'] = $request->serverCertificateId;
        }

        if (null !== $request->unhealthyThreshold) {
            @$query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetLoadBalancerHTTPSListenerAttribute',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetLoadBalancerHTTPSListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of an HTTPS listener.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - SetLoadBalancerHTTPSListenerAttributeRequest
     *
     * @returns SetLoadBalancerHTTPSListenerAttributeResponse
     *
     * @param SetLoadBalancerHTTPSListenerAttributeRequest $request
     *
     * @return SetLoadBalancerHTTPSListenerAttributeResponse
     */
    public function setLoadBalancerHTTPSListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLoadBalancerHTTPSListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * Modifies the status of an Edge Load Balancer (ELB) instance.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - SetLoadBalancerStatusRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetLoadBalancerStatusResponse
     *
     * @param SetLoadBalancerStatusRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return SetLoadBalancerStatusResponse
     */
    public function setLoadBalancerStatusWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->loadBalancerStatus) {
            @$query['LoadBalancerStatus'] = $request->loadBalancerStatus;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetLoadBalancerStatus',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetLoadBalancerStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the status of an Edge Load Balancer (ELB) instance.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - SetLoadBalancerStatusRequest
     *
     * @returns SetLoadBalancerStatusResponse
     *
     * @param SetLoadBalancerStatusRequest $request
     *
     * @return SetLoadBalancerStatusResponse
     */
    public function setLoadBalancerStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLoadBalancerStatusWithOptions($request, $runtime);
    }

    /**
     * Modifies the configurations of a TCP listener.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - SetLoadBalancerTCPListenerAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetLoadBalancerTCPListenerAttributeResponse
     *
     * @param SetLoadBalancerTCPListenerAttributeRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return SetLoadBalancerTCPListenerAttributeResponse
     */
    public function setLoadBalancerTCPListenerAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->eipTransmit) {
            @$query['EipTransmit'] = $request->eipTransmit;
        }

        if (null !== $request->establishedTimeout) {
            @$query['EstablishedTimeout'] = $request->establishedTimeout;
        }

        if (null !== $request->healthCheckConnectPort) {
            @$query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }

        if (null !== $request->healthCheckConnectTimeout) {
            @$query['HealthCheckConnectTimeout'] = $request->healthCheckConnectTimeout;
        }

        if (null !== $request->healthCheckDomain) {
            @$query['HealthCheckDomain'] = $request->healthCheckDomain;
        }

        if (null !== $request->healthCheckHttpCode) {
            @$query['HealthCheckHttpCode'] = $request->healthCheckHttpCode;
        }

        if (null !== $request->healthCheckInterval) {
            @$query['HealthCheckInterval'] = $request->healthCheckInterval;
        }

        if (null !== $request->healthCheckType) {
            @$query['HealthCheckType'] = $request->healthCheckType;
        }

        if (null !== $request->healthCheckURI) {
            @$query['HealthCheckURI'] = $request->healthCheckURI;
        }

        if (null !== $request->healthyThreshold) {
            @$query['HealthyThreshold'] = $request->healthyThreshold;
        }

        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->persistenceTimeout) {
            @$query['PersistenceTimeout'] = $request->persistenceTimeout;
        }

        if (null !== $request->scheduler) {
            @$query['Scheduler'] = $request->scheduler;
        }

        if (null !== $request->unhealthyThreshold) {
            @$query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetLoadBalancerTCPListenerAttribute',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetLoadBalancerTCPListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of a TCP listener.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - SetLoadBalancerTCPListenerAttributeRequest
     *
     * @returns SetLoadBalancerTCPListenerAttributeResponse
     *
     * @param SetLoadBalancerTCPListenerAttributeRequest $request
     *
     * @return SetLoadBalancerTCPListenerAttributeResponse
     */
    public function setLoadBalancerTCPListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLoadBalancerTCPListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * Modifies the configurations of a UDP listener.
     *
     * @remarks
     *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 10 times per second per account.
     *
     * @param request - SetLoadBalancerUDPListenerAttributeRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns SetLoadBalancerUDPListenerAttributeResponse
     *
     * @param SetLoadBalancerUDPListenerAttributeRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return SetLoadBalancerUDPListenerAttributeResponse
     */
    public function setLoadBalancerUDPListenerAttributeWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->description) {
            @$query['Description'] = $request->description;
        }

        if (null !== $request->eipTransmit) {
            @$query['EipTransmit'] = $request->eipTransmit;
        }

        if (null !== $request->establishedTimeout) {
            @$query['EstablishedTimeout'] = $request->establishedTimeout;
        }

        if (null !== $request->healthCheckConnectPort) {
            @$query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }

        if (null !== $request->healthCheckConnectTimeout) {
            @$query['HealthCheckConnectTimeout'] = $request->healthCheckConnectTimeout;
        }

        if (null !== $request->healthCheckExp) {
            @$query['HealthCheckExp'] = $request->healthCheckExp;
        }

        if (null !== $request->healthCheckInterval) {
            @$query['HealthCheckInterval'] = $request->healthCheckInterval;
        }

        if (null !== $request->healthCheckReq) {
            @$query['HealthCheckReq'] = $request->healthCheckReq;
        }

        if (null !== $request->healthyThreshold) {
            @$query['HealthyThreshold'] = $request->healthyThreshold;
        }

        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        if (null !== $request->scheduler) {
            @$query['Scheduler'] = $request->scheduler;
        }

        if (null !== $request->unhealthyThreshold) {
            @$query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'SetLoadBalancerUDPListenerAttribute',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return SetLoadBalancerUDPListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies the configurations of a UDP listener.
     *
     * @remarks
     *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 10 times per second per account.
     *
     * @param request - SetLoadBalancerUDPListenerAttributeRequest
     *
     * @returns SetLoadBalancerUDPListenerAttributeResponse
     *
     * @param SetLoadBalancerUDPListenerAttributeRequest $request
     *
     * @return SetLoadBalancerUDPListenerAttributeResponse
     */
    public function setLoadBalancerUDPListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLoadBalancerUDPListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * 共享AIC镜像.
     *
     * @param tmpReq - ShareAICImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ShareAICImageResponse
     *
     * @param ShareAICImageRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return ShareAICImageResponse
     */
    public function shareAICImageWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ShareAICImageShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->users) {
            $request->usersShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->users, 'Users', 'json');
        }

        $query = [];
        if (null !== $request->imageId) {
            @$query['ImageId'] = $request->imageId;
        }

        if (null !== $request->usersShrink) {
            @$query['Users'] = $request->usersShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ShareAICImage',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ShareAICImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 共享AIC镜像.
     *
     * @param request - ShareAICImageRequest
     *
     * @returns ShareAICImageResponse
     *
     * @param ShareAICImageRequest $request
     *
     * @return ShareAICImageResponse
     */
    public function shareAICImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->shareAICImageWithOptions($request, $runtime);
    }

    /**
     * Starts an edge network instance.
     *
     * @param request - StartEpnInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartEpnInstanceResponse
     *
     * @param StartEpnInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return StartEpnInstanceResponse
     */
    public function startEpnInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->EPNInstanceId) {
            @$query['EPNInstanceId'] = $request->EPNInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartEpnInstance',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartEpnInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts an edge network instance.
     *
     * @param request - StartEpnInstanceRequest
     *
     * @returns StartEpnInstanceResponse
     *
     * @param StartEpnInstanceRequest $request
     *
     * @return StartEpnInstanceResponse
     */
    public function startEpnInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startEpnInstanceWithOptions($request, $runtime);
    }

    /**
     * Starts an instance.
     *
     * @remarks
     *   You can call the operation only when the instance is in the Stopped state.
     * *   If the operation is successful, the status of the instance becomes Starting.
     *
     * @param request - StartInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartInstanceResponse
     *
     * @param StartInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return StartInstanceResponse
     */
    public function startInstanceWithOptions($request, $runtime)
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
            'action' => 'StartInstance',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts an instance.
     *
     * @remarks
     *   You can call the operation only when the instance is in the Stopped state.
     * *   If the operation is successful, the status of the instance becomes Starting.
     *
     * @param request - StartInstanceRequest
     *
     * @returns StartInstanceResponse
     *
     * @param StartInstanceRequest $request
     *
     * @return StartInstanceResponse
     */
    public function startInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startInstanceWithOptions($request, $runtime);
    }

    /**
     * 选择批量实例进行启动操作.
     *
     * @param tmpReq - StartInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartInstancesResponse
     *
     * @param StartInstancesRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return StartInstancesResponse
     */
    public function startInstancesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new StartInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceIds) {
            $request->instanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'simple');
        }

        $query = [];
        if (null !== $request->instanceIdsShrink) {
            @$query['InstanceIds'] = $request->instanceIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartInstances',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 选择批量实例进行启动操作.
     *
     * @param request - StartInstancesRequest
     *
     * @returns StartInstancesResponse
     *
     * @param StartInstancesRequest $request
     *
     * @return StartInstancesResponse
     */
    public function startInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startInstancesWithOptions($request, $runtime);
    }

    /**
     * Enables a listener.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - StartLoadBalancerListenerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartLoadBalancerListenerResponse
     *
     * @param StartLoadBalancerListenerRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return StartLoadBalancerListenerResponse
     */
    public function startLoadBalancerListenerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->listenerProtocol) {
            @$query['ListenerProtocol'] = $request->listenerProtocol;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartLoadBalancerListener',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartLoadBalancerListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Enables a listener.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - StartLoadBalancerListenerRequest
     *
     * @returns StartLoadBalancerListenerResponse
     *
     * @param StartLoadBalancerListenerRequest $request
     *
     * @return StartLoadBalancerListenerResponse
     */
    public function startLoadBalancerListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startLoadBalancerListenerWithOptions($request, $runtime);
    }

    /**
     * Starts the elastic IP address (EIP) specified in a source network address translation (SNAT) entry.
     *
     * @param request - StartSnatIpForSnatEntryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StartSnatIpForSnatEntryResponse
     *
     * @param StartSnatIpForSnatEntryRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return StartSnatIpForSnatEntryResponse
     */
    public function startSnatIpForSnatEntryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->snatEntryId) {
            @$query['SnatEntryId'] = $request->snatEntryId;
        }

        if (null !== $request->snatIp) {
            @$query['SnatIp'] = $request->snatIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StartSnatIpForSnatEntry',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StartSnatIpForSnatEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Starts the elastic IP address (EIP) specified in a source network address translation (SNAT) entry.
     *
     * @param request - StartSnatIpForSnatEntryRequest
     *
     * @returns StartSnatIpForSnatEntryResponse
     *
     * @param StartSnatIpForSnatEntryRequest $request
     *
     * @return StartSnatIpForSnatEntryResponse
     */
    public function startSnatIpForSnatEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startSnatIpForSnatEntryWithOptions($request, $runtime);
    }

    /**
     * Stops an EPN instance.
     *
     * @param request - StopEpnInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopEpnInstanceResponse
     *
     * @param StopEpnInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return StopEpnInstanceResponse
     */
    public function stopEpnInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->EPNInstanceId) {
            @$query['EPNInstanceId'] = $request->EPNInstanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopEpnInstance',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopEpnInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops an EPN instance.
     *
     * @param request - StopEpnInstanceRequest
     *
     * @returns StopEpnInstanceResponse
     *
     * @param StopEpnInstanceRequest $request
     *
     * @return StopEpnInstanceResponse
     */
    public function stopEpnInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopEpnInstanceWithOptions($request, $runtime);
    }

    /**
     * Stops an instance.
     *
     * @remarks
     *   You can call this operation to stop instances that are only in the Running state.
     * *   If the call is successful, the state of the instance becomes Stopping.
     * *   Once the instance is stopped, the state of the instance becomes Stopped.
     * *   Force stop is supported, which is equivalent to power-off. Data that is not written to disks on the instance may be lost.
     *
     * @param request - StopInstanceRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopInstanceResponse
     *
     * @param StopInstanceRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return StopInstanceResponse
     */
    public function stopInstanceWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->forceStop) {
            @$query['ForceStop'] = $request->forceStop;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopInstance',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Stops an instance.
     *
     * @remarks
     *   You can call this operation to stop instances that are only in the Running state.
     * *   If the call is successful, the state of the instance becomes Stopping.
     * *   Once the instance is stopped, the state of the instance becomes Stopped.
     * *   Force stop is supported, which is equivalent to power-off. Data that is not written to disks on the instance may be lost.
     *
     * @param request - StopInstanceRequest
     *
     * @returns StopInstanceResponse
     *
     * @param StopInstanceRequest $request
     *
     * @return StopInstanceResponse
     */
    public function stopInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopInstanceWithOptions($request, $runtime);
    }

    /**
     * 选择批量实例进行停止操作.
     *
     * @param tmpReq - StopInstancesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopInstancesResponse
     *
     * @param StopInstancesRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return StopInstancesResponse
     */
    public function stopInstancesWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new StopInstancesShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceIds) {
            $request->instanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'simple');
        }

        $query = [];
        if (null !== $request->instanceIdsShrink) {
            @$query['InstanceIds'] = $request->instanceIdsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopInstances',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 选择批量实例进行停止操作.
     *
     * @param request - StopInstancesRequest
     *
     * @returns StopInstancesResponse
     *
     * @param StopInstancesRequest $request
     *
     * @return StopInstancesResponse
     */
    public function stopInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopInstancesWithOptions($request, $runtime);
    }

    /**
     * Disables a listener.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - StopLoadBalancerListenerRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopLoadBalancerListenerResponse
     *
     * @param StopLoadBalancerListenerRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return StopLoadBalancerListenerResponse
     */
    public function stopLoadBalancerListenerWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->listenerPort) {
            @$query['ListenerPort'] = $request->listenerPort;
        }

        if (null !== $request->listenerProtocol) {
            @$query['ListenerProtocol'] = $request->listenerProtocol;
        }

        if (null !== $request->loadBalancerId) {
            @$query['LoadBalancerId'] = $request->loadBalancerId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopLoadBalancerListener',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopLoadBalancerListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables a listener.
     *
     * @remarks
     *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *
     * @param request - StopLoadBalancerListenerRequest
     *
     * @returns StopLoadBalancerListenerResponse
     *
     * @param StopLoadBalancerListenerRequest $request
     *
     * @return StopLoadBalancerListenerResponse
     */
    public function stopLoadBalancerListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopLoadBalancerListenerWithOptions($request, $runtime);
    }

    /**
     * Disables an elastic IP address (EIP) in a source network address translation (SNAT) entry.
     *
     * @param request - StopSnatIpForSnatEntryRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns StopSnatIpForSnatEntryResponse
     *
     * @param StopSnatIpForSnatEntryRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return StopSnatIpForSnatEntryResponse
     */
    public function stopSnatIpForSnatEntryWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->snatEntryId) {
            @$query['SnatEntryId'] = $request->snatEntryId;
        }

        if (null !== $request->snatIp) {
            @$query['SnatIp'] = $request->snatIp;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'StopSnatIpForSnatEntry',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return StopSnatIpForSnatEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disables an elastic IP address (EIP) in a source network address translation (SNAT) entry.
     *
     * @param request - StopSnatIpForSnatEntryRequest
     *
     * @returns StopSnatIpForSnatEntryResponse
     *
     * @param StopSnatIpForSnatEntryRequest $request
     *
     * @return StopSnatIpForSnatEntryResponse
     */
    public function stopSnatIpForSnatEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopSnatIpForSnatEntryWithOptions($request, $runtime);
    }

    /**
     * Creates and adds tags to specific Edge Node Service (ENS) resources.
     *
     * @remarks
     * Before you add tags to a resource, Alibaba Cloud checks the number of existing tags on the resource. If the number exceeds the upper limit, an error message is returned. Only instance resources, such as virtual machines and bare machines, are supported.
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
            'version' => '2017-11-10',
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
     * Creates and adds tags to specific Edge Node Service (ENS) resources.
     *
     * @remarks
     * Before you add tags to a resource, Alibaba Cloud checks the number of existing tags on the resource. If the number exceeds the upper limit, an error message is returned. Only instance resources, such as virtual machines and bare machines, are supported.
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
     * Disassociates an elastic IP address (EIP) from an instance.
     *
     * @param request - UnAssociateEnsEipAddressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnAssociateEnsEipAddressResponse
     *
     * @param UnAssociateEnsEipAddressRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UnAssociateEnsEipAddressResponse
     */
    public function unAssociateEnsEipAddressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->allocationId) {
            @$query['AllocationId'] = $request->allocationId;
        }

        if (null !== $request->force) {
            @$query['Force'] = $request->force;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnAssociateEnsEipAddress',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnAssociateEnsEipAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disassociates an elastic IP address (EIP) from an instance.
     *
     * @param request - UnAssociateEnsEipAddressRequest
     *
     * @returns UnAssociateEnsEipAddressResponse
     *
     * @param UnAssociateEnsEipAddressRequest $request
     *
     * @return UnAssociateEnsEipAddressResponse
     */
    public function unAssociateEnsEipAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unAssociateEnsEipAddressWithOptions($request, $runtime);
    }

    /**
     * Unassigns secondary private IP addresses from an elastic network interface (ENI).
     *
     * @param request - UnassignPrivateIpAddressesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnassignPrivateIpAddressesResponse
     *
     * @param UnassignPrivateIpAddressesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UnassignPrivateIpAddressesResponse
     */
    public function unassignPrivateIpAddressesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->networkInterfaceId) {
            @$query['NetworkInterfaceId'] = $request->networkInterfaceId;
        }

        if (null !== $request->privateIpAddress) {
            @$query['PrivateIpAddress'] = $request->privateIpAddress;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnassignPrivateIpAddresses',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnassignPrivateIpAddressesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unassigns secondary private IP addresses from an elastic network interface (ENI).
     *
     * @param request - UnassignPrivateIpAddressesRequest
     *
     * @returns UnassignPrivateIpAddressesResponse
     *
     * @param UnassignPrivateIpAddressesRequest $request
     *
     * @return UnassignPrivateIpAddressesResponse
     */
    public function unassignPrivateIpAddresses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unassignPrivateIpAddressesWithOptions($request, $runtime);
    }

    /**
     * Disassociates a high-availability virtual IP address (HAVIP) from an Edge Node Service (ENS) instance or Elastic Network Interface (ENI).
     *
     * @param request - UnassociateHaVipRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnassociateHaVipResponse
     *
     * @param UnassociateHaVipRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return UnassociateHaVipResponse
     */
    public function unassociateHaVipWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->haVipId) {
            @$query['HaVipId'] = $request->haVipId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnassociateHaVip',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnassociateHaVipResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disassociates a high-availability virtual IP address (HAVIP) from an Edge Node Service (ENS) instance or Elastic Network Interface (ENI).
     *
     * @param request - UnassociateHaVipRequest
     *
     * @returns UnassociateHaVipResponse
     *
     * @param UnassociateHaVipRequest $request
     *
     * @return UnassociateHaVipResponse
     */
    public function unassociateHaVip($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unassociateHaVipWithOptions($request, $runtime);
    }

    /**
     * Disassociates a network access control list (ACL) from a network.
     *
     * @param request - UnassociateNetworkAclRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnassociateNetworkAclResponse
     *
     * @param UnassociateNetworkAclRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UnassociateNetworkAclResponse
     */
    public function unassociateNetworkAclWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->networkAclId) {
            @$query['NetworkAclId'] = $request->networkAclId;
        }

        if (null !== $request->resource) {
            @$query['Resource'] = $request->resource;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnassociateNetworkAcl',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnassociateNetworkAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Disassociates a network access control list (ACL) from a network.
     *
     * @param request - UnassociateNetworkAclRequest
     *
     * @returns UnassociateNetworkAclResponse
     *
     * @param UnassociateNetworkAclRequest $request
     *
     * @return UnassociateNetworkAclResponse
     */
    public function unassociateNetworkAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unassociateNetworkAclWithOptions($request, $runtime);
    }

    /**
     * Deletes preloaded data.
     *
     * @param tmpReq - UnloadRegionSDGRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnloadRegionSDGResponse
     *
     * @param UnloadRegionSDGRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return UnloadRegionSDGResponse
     */
    public function unloadRegionSDGWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UnloadRegionSDGShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->destinationRegionIds) {
            $request->destinationRegionIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->destinationRegionIds, 'DestinationRegionIds', 'json');
        }

        if (null !== $tmpReq->namespaces) {
            $request->namespacesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->namespaces, 'Namespaces', 'json');
        }

        $query = [];
        if (null !== $request->destinationRegionIdsShrink) {
            @$query['DestinationRegionIds'] = $request->destinationRegionIdsShrink;
        }

        if (null !== $request->namespacesShrink) {
            @$query['Namespaces'] = $request->namespacesShrink;
        }

        if (null !== $request->SDGId) {
            @$query['SDGId'] = $request->SDGId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnloadRegionSDG',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnloadRegionSDGResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes preloaded data.
     *
     * @param request - UnloadRegionSDGRequest
     *
     * @returns UnloadRegionSDGResponse
     *
     * @param UnloadRegionSDGRequest $request
     *
     * @return UnloadRegionSDGResponse
     */
    public function unloadRegionSDG($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unloadRegionSDGWithOptions($request, $runtime);
    }

    /**
     * Unmounts a shared data group (SDG) from instances.
     *
     * @param tmpReq - UnmountInstanceSDGRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UnmountInstanceSDGResponse
     *
     * @param UnmountInstanceSDGRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return UnmountInstanceSDGResponse
     */
    public function unmountInstanceSDGWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UnmountInstanceSDGShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->instanceIds) {
            $request->instanceIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }

        $query = [];
        if (null !== $request->instanceIdsShrink) {
            @$query['InstanceIds'] = $request->instanceIdsShrink;
        }

        if (null !== $request->SDGId) {
            @$query['SDGId'] = $request->SDGId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UnmountInstanceSDG',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UnmountInstanceSDGResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Unmounts a shared data group (SDG) from instances.
     *
     * @param request - UnmountInstanceSDGRequest
     *
     * @returns UnmountInstanceSDGResponse
     *
     * @param UnmountInstanceSDGRequest $request
     *
     * @return UnmountInstanceSDGResponse
     */
    public function unmountInstanceSDG($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unmountInstanceSDGWithOptions($request, $runtime);
    }

    /**
     * Removes tags from resources.
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
            'version' => '2017-11-10',
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
     * Removes tags from resources.
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
     * 修改售卖约束
     *
     * @param tmpReq - UpdateEnsSaleControlRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateEnsSaleControlResponse
     *
     * @param UpdateEnsSaleControlRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateEnsSaleControlResponse
     */
    public function updateEnsSaleControlWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateEnsSaleControlShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->saleControls) {
            $request->saleControlsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->saleControls, 'SaleControls', 'json');
        }

        $query = [];
        if (null !== $request->aliUidAccount) {
            @$query['AliUidAccount'] = $request->aliUidAccount;
        }

        if (null !== $request->commodityCode) {
            @$query['CommodityCode'] = $request->commodityCode;
        }

        if (null !== $request->customAccount) {
            @$query['CustomAccount'] = $request->customAccount;
        }

        if (null !== $request->saleControlsShrink) {
            @$query['SaleControls'] = $request->saleControlsShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateEnsSaleControl',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateEnsSaleControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 修改售卖约束
     *
     * @param request - UpdateEnsSaleControlRequest
     *
     * @returns UpdateEnsSaleControlResponse
     *
     * @param UpdateEnsSaleControlRequest $request
     *
     * @return UpdateEnsSaleControlResponse
     */
    public function updateEnsSaleControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEnsSaleControlWithOptions($request, $runtime);
    }

    /**
     * Updates the image of an Android in Container (AIC) instance.
     *
     * @param tmpReq - UpgradeAICInstanceImageRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeAICInstanceImageResponse
     *
     * @param UpgradeAICInstanceImageRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return UpgradeAICInstanceImageResponse
     */
    public function upgradeAICInstanceImageWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpgradeAICInstanceImageShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->serverIds) {
            $request->serverIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->serverIds, 'ServerIds', 'json');
        }

        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeAICInstanceImage',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpgradeAICInstanceImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the image of an Android in Container (AIC) instance.
     *
     * @param request - UpgradeAICInstanceImageRequest
     *
     * @returns UpgradeAICInstanceImageResponse
     *
     * @param UpgradeAICInstanceImageRequest $request
     *
     * @return UpgradeAICInstanceImageResponse
     */
    public function upgradeAICInstanceImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeAICInstanceImageWithOptions($request, $runtime);
    }

    /**
     * Updates the container in an asynchronous manner. You can configure multiple canary release policies.
     *
     * @param request - UpgradeApplicationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpgradeApplicationResponse
     *
     * @param UpgradeApplicationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpgradeApplicationResponse
     */
    public function upgradeApplicationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appId) {
            @$query['AppId'] = $request->appId;
        }

        if (null !== $request->template) {
            @$query['Template'] = $request->template;
        }

        if (null !== $request->timeout) {
            @$query['Timeout'] = $request->timeout;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'UpgradeApplication',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpgradeApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Updates the container in an asynchronous manner. You can configure multiple canary release policies.
     *
     * @param request - UpgradeApplicationRequest
     *
     * @returns UpgradeApplicationResponse
     *
     * @param UpgradeApplicationRequest $request
     *
     * @return UpgradeApplicationResponse
     */
    public function upgradeApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeApplicationWithOptions($request, $runtime);
    }

    /**
     * 上传公钥.
     *
     * @param request - UploadAICPublicKeyRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UploadAICPublicKeyResponse
     *
     * @param UploadAICPublicKeyRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UploadAICPublicKeyResponse
     */
    public function uploadAICPublicKeyWithOptions($request, $runtime)
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
            'action' => 'UploadAICPublicKey',
            'version' => '2017-11-10',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UploadAICPublicKeyResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * 上传公钥.
     *
     * @param request - UploadAICPublicKeyRequest
     *
     * @returns UploadAICPublicKeyResponse
     *
     * @param UploadAICPublicKeyRequest $request
     *
     * @return UploadAICPublicKeyResponse
     */
    public function uploadAICPublicKey($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->uploadAICPublicKeyWithOptions($request, $runtime);
    }
}
