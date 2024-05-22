<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Ens\V20171110\Models\AccosicateNetworkAclRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AccosicateNetworkAclResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\AddBackendServersRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AddBackendServersResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\AddBackendServersShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AddDeviceInternetPortRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AddDeviceInternetPortResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\AddNetworkInterfaceToInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AddNetworkInterfaceToInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\AddSnatIpForSnatEntryRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AddSnatIpForSnatEntryResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\AssignPrivateIpAddressesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AssignPrivateIpAddressesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\AssociateEnsEipAddressRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AssociateEnsEipAddressResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\AttachDiskRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AttachDiskResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\AttachEnsInstancesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AttachEnsInstancesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\AuthorizeSecurityGroupEgressRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AuthorizeSecurityGroupEgressResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\AuthorizeSecurityGroupRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\AuthorizeSecurityGroupResponse;
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
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateNetworkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateNetworkResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateSDGRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateSDGResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateSecurityGroupRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateSecurityGroupResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateSnapshotRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateSnapshotResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateSnatEntryRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateSnatEntryResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateVSwitchRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateVSwitchResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteApplicationRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteApplicationResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteBucketLifecycleRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteBucketLifecycleResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteBucketRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteBucketResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteDeviceInternetPortRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteDeviceInternetPortResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteDiskRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteDiskResponse;
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
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteNetworkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteNetworkResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteObjectRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteObjectResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSDGRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSDGResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSDGShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSecurityGroupRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSecurityGroupResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSnapshotRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSnapshotResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSnatEntryRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSnatEntryResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSnatIpForSnatEntryRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteSnatIpForSnatEntryResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteVSwitchRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeleteVSwitchResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeploySDGRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeploySDGResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DeploySDGShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAICImagesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAICImagesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeApplicationRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeApplicationResourceSummaryRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeApplicationResourceSummaryResponse;
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
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDisksRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDisksResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEipAddressesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEipAddressesResponse;
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
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeForwardTableEntriesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeForwardTableEntriesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImageInfosRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImageInfosResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImageSharePermissionRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImageSharePermissionResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImagesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImagesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceAutoRenewAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceAutoRenewAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceMonitorDataRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceMonitorDataResponse;
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
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSDGsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSDGsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSDGsShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSecurityGroupAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSecurityGroupAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSecurityGroupsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSecurityGroupsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSelfImagesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSelfImagesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeServcieScheduleRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeServcieScheduleResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSnapshotsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSnapshotsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSnatAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSnatAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSnatTableEntriesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSnatTableEntriesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeUserBandWidthDataRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeUserBandWidthDataResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeVSwitchesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeVSwitchesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DetachDiskRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DetachDiskResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DistApplicationDataRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DistApplicationDataResponse;
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
use AlibabaCloud\SDK\Ens\V20171110\Models\GetDeviceInternetPortRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\GetDeviceInternetPortResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\GetOssStorageAndAccByBucketsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\GetOssStorageAndAccByBucketsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\GetOssUsageDataRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\GetOssUsageDataResponse;
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
use AlibabaCloud\SDK\Ens\V20171110\Models\ListApplicationsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ListApplicationsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ListBucketsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ListBucketsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ListObjectsRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ListObjectsResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyEnsEipAddressAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyEnsEipAddressAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyEpnInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyEpnInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyFileSystemRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyFileSystemResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyForwardEntryRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyForwardEntryResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyImageAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyImageAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyImageSharePermissionRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyImageSharePermissionResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyInstanceAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyInstanceAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyInstanceAutoRenewAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyInstanceAutoRenewAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyInstanceChargeTypeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyInstanceChargeTypeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyInstanceChargeTypeShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyLoadBalancerAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyLoadBalancerAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyNetworkAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyNetworkAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyPrepayInstanceSpecRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyPrepayInstanceSpecResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifySecurityGroupAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifySecurityGroupAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifySnapshotAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifySnapshotAttributeResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyVSwitchAttributeRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ModifyVSwitchAttributeResponse;
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
use AlibabaCloud\SDK\Ens\V20171110\Models\RemovePublicIpsFromEpnInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RemovePublicIpsFromEpnInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RemoveSDGRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RemoveSDGResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RemoveSDGShrinkRequest;
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
use AlibabaCloud\SDK\Ens\V20171110\Models\ResetDeviceInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ResetDeviceInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ResetDiskRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ResetDiskResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ResizeDiskRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ResizeDiskResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RestartDeviceInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RestartDeviceInstanceResponse;
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
use AlibabaCloud\SDK\Ens\V20171110\Models\UnassignPrivateIpAddressesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\UnassignPrivateIpAddressesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\UnAssociateEnsEipAddressRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\UnAssociateEnsEipAddressResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\UnassociateNetworkAclRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\UnassociateNetworkAclResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\UpdateEnsSaleControlRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\UpdateEnsSaleControlResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\UpdateEnsSaleControlShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\UpgradeAICInstanceImageRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\UpgradeAICInstanceImageResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\UpgradeAICInstanceImageShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\UpgradeApplicationRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\UpgradeApplicationResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Associates a network access control list (ACL) with a network.
     *  *
     * @param AccosicateNetworkAclRequest $request AccosicateNetworkAclRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return AccosicateNetworkAclResponse AccosicateNetworkAclResponse
     */
    public function accosicateNetworkAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->networkAclId)) {
            $query['NetworkAclId'] = $request->networkAclId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AccosicateNetworkAcl',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AccosicateNetworkAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Associates a network access control list (ACL) with a network.
     *  *
     * @param AccosicateNetworkAclRequest $request AccosicateNetworkAclRequest
     *
     * @return AccosicateNetworkAclResponse AccosicateNetworkAclResponse
     */
    public function accosicateNetworkAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->accosicateNetworkAclWithOptions($request, $runtime);
    }

    /**
     * @summary Adds backend servers.
     *  *
     * @description *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 10 times per second per account.
     *  *
     * @param AddBackendServersRequest $tmpReq  AddBackendServersRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return AddBackendServersResponse AddBackendServersResponse
     */
    public function addBackendServersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddBackendServersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->backendServers)) {
            $request->backendServersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->backendServers, 'BackendServers', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->backendServersShrink)) {
            $query['BackendServers'] = $request->backendServersShrink;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddBackendServers',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddBackendServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds backend servers.
     *  *
     * @description *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 10 times per second per account.
     *  *
     * @param AddBackendServersRequest $request AddBackendServersRequest
     *
     * @return AddBackendServersResponse AddBackendServersResponse
     */
    public function addBackendServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addBackendServersWithOptions($request, $runtime);
    }

    /**
     * @summary Configures Network Address Translation (NAT) rules for an instance. This operation is an asynchronous API operation. For more information about the configurations, see the API documentation of GetDeviceInternetPort.
     *  *
     * @param AddDeviceInternetPortRequest $request AddDeviceInternetPortRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return AddDeviceInternetPortResponse AddDeviceInternetPortResponse
     */
    public function addDeviceInternetPortWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddDeviceInternetPort',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddDeviceInternetPortResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Configures Network Address Translation (NAT) rules for an instance. This operation is an asynchronous API operation. For more information about the configurations, see the API documentation of GetDeviceInternetPort.
     *  *
     * @param AddDeviceInternetPortRequest $request AddDeviceInternetPortRequest
     *
     * @return AddDeviceInternetPortResponse AddDeviceInternetPortResponse
     */
    public function addDeviceInternetPort($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDeviceInternetPortWithOptions($request, $runtime);
    }

    /**
     * @summary Adds an IPv6 network interface controller (NIC). A public IP address is automatically assigned at the same time.
     *  *
     * @description # [](#)Usage notes
     * *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 5 times per second per user.
     * *   Internal networks and IPv4 addresses are not supported.
     *  *
     * @param AddNetworkInterfaceToInstanceRequest $request AddNetworkInterfaceToInstanceRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return AddNetworkInterfaceToInstanceResponse AddNetworkInterfaceToInstanceResponse
     */
    public function addNetworkInterfaceToInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoStart)) {
            $query['AutoStart'] = $request->autoStart;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->networks)) {
            $query['Networks'] = $request->networks;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddNetworkInterfaceToInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddNetworkInterfaceToInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds an IPv6 network interface controller (NIC). A public IP address is automatically assigned at the same time.
     *  *
     * @description # [](#)Usage notes
     * *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 5 times per second per user.
     * *   Internal networks and IPv4 addresses are not supported.
     *  *
     * @param AddNetworkInterfaceToInstanceRequest $request AddNetworkInterfaceToInstanceRequest
     *
     * @return AddNetworkInterfaceToInstanceResponse AddNetworkInterfaceToInstanceResponse
     */
    public function addNetworkInterfaceToInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addNetworkInterfaceToInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Adds an elastic IP address (EIP) to a Source Network Address Translation (SNAT) entry.
     *  *
     * @param AddSnatIpForSnatEntryRequest $request AddSnatIpForSnatEntryRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return AddSnatIpForSnatEntryResponse AddSnatIpForSnatEntryResponse
     */
    public function addSnatIpForSnatEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->snatEntryId)) {
            $query['SnatEntryId'] = $request->snatEntryId;
        }
        if (!Utils::isUnset($request->snatIp)) {
            $query['SnatIp'] = $request->snatIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddSnatIpForSnatEntry',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddSnatIpForSnatEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds an elastic IP address (EIP) to a Source Network Address Translation (SNAT) entry.
     *  *
     * @param AddSnatIpForSnatEntryRequest $request AddSnatIpForSnatEntryRequest
     *
     * @return AddSnatIpForSnatEntryResponse AddSnatIpForSnatEntryResponse
     */
    public function addSnatIpForSnatEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addSnatIpForSnatEntryWithOptions($request, $runtime);
    }

    /**
     * @summary Assigns secondary private IP addresses to an elastic network interface (ENI).
     *  *
     * @param AssignPrivateIpAddressesRequest $request AssignPrivateIpAddressesRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return AssignPrivateIpAddressesResponse AssignPrivateIpAddressesResponse
     */
    public function assignPrivateIpAddressesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->networkInterfaceId)) {
            $query['NetworkInterfaceId'] = $request->networkInterfaceId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AssignPrivateIpAddresses',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssignPrivateIpAddressesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Assigns secondary private IP addresses to an elastic network interface (ENI).
     *  *
     * @param AssignPrivateIpAddressesRequest $request AssignPrivateIpAddressesRequest
     *
     * @return AssignPrivateIpAddressesResponse AssignPrivateIpAddressesResponse
     */
    public function assignPrivateIpAddresses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->assignPrivateIpAddressesWithOptions($request, $runtime);
    }

    /**
     * @summary Associates an elastic IP address (EIP) with a cloud resource that is deployed in the same region.
     *  *
     * @param AssociateEnsEipAddressRequest $request AssociateEnsEipAddressRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return AssociateEnsEipAddressResponse AssociateEnsEipAddressResponse
     */
    public function associateEnsEipAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allocationId)) {
            $query['AllocationId'] = $request->allocationId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->standby)) {
            $query['Standby'] = $request->standby;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AssociateEnsEipAddress',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AssociateEnsEipAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Associates an elastic IP address (EIP) with a cloud resource that is deployed in the same region.
     *  *
     * @param AssociateEnsEipAddressRequest $request AssociateEnsEipAddressRequest
     *
     * @return AssociateEnsEipAddressResponse AssociateEnsEipAddressResponse
     */
    public function associateEnsEipAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->associateEnsEipAddressWithOptions($request, $runtime);
    }

    /**
     * @summary Attaches a disk to an Edge Node Service (ENS) instance.
     *  *
     * @param AttachDiskRequest $request AttachDiskRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachDiskResponse AttachDiskResponse
     */
    public function attachDiskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->deleteWithInstance)) {
            $query['DeleteWithInstance'] = $request->deleteWithInstance;
        }
        if (!Utils::isUnset($request->diskId)) {
            $query['DiskId'] = $request->diskId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachDisk',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachDiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Attaches a disk to an Edge Node Service (ENS) instance.
     *  *
     * @param AttachDiskRequest $request AttachDiskRequest
     *
     * @return AttachDiskResponse AttachDiskResponse
     */
    public function attachDisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachDiskWithOptions($request, $runtime);
    }

    /**
     * @summary Adds an Edge Node Service (ENS) instance to Container Service for Kubernetes (ACK).
     *  *
     * @description # [](#)Usage notes
     * *   You can call this operation up to 10 times per second per account.
     * *   After you execute the command, the instance restarts loading.
     * *   Limits: The instance has at least two vCPUs and 4 GB memory. An image of CentOS 7.4 or later is required.
     *  *
     * @param AttachEnsInstancesRequest $request AttachEnsInstancesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return AttachEnsInstancesResponse AttachEnsInstancesResponse
     */
    public function attachEnsInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->scripts)) {
            $query['Scripts'] = $request->scripts;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AttachEnsInstances',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AttachEnsInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds an Edge Node Service (ENS) instance to Container Service for Kubernetes (ACK).
     *  *
     * @description # [](#)Usage notes
     * *   You can call this operation up to 10 times per second per account.
     * *   After you execute the command, the instance restarts loading.
     * *   Limits: The instance has at least two vCPUs and 4 GB memory. An image of CentOS 7.4 or later is required.
     *  *
     * @param AttachEnsInstancesRequest $request AttachEnsInstancesRequest
     *
     * @return AttachEnsInstancesResponse AttachEnsInstancesResponse
     */
    public function attachEnsInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->attachEnsInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an inbound security group rule. This operation allows or denies the inbound traffic from other devices to instances in the security group.
     *  *
     * @param AuthorizeSecurityGroupRequest $request AuthorizeSecurityGroupRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return AuthorizeSecurityGroupResponse AuthorizeSecurityGroupResponse
     */
    public function authorizeSecurityGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipProtocol)) {
            $query['IpProtocol'] = $request->ipProtocol;
        }
        if (!Utils::isUnset($request->policy)) {
            $query['Policy'] = $request->policy;
        }
        if (!Utils::isUnset($request->portRange)) {
            $query['PortRange'] = $request->portRange;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->sourceCidrIp)) {
            $query['SourceCidrIp'] = $request->sourceCidrIp;
        }
        if (!Utils::isUnset($request->sourcePortRange)) {
            $query['SourcePortRange'] = $request->sourcePortRange;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AuthorizeSecurityGroup',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AuthorizeSecurityGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an inbound security group rule. This operation allows or denies the inbound traffic from other devices to instances in the security group.
     *  *
     * @param AuthorizeSecurityGroupRequest $request AuthorizeSecurityGroupRequest
     *
     * @return AuthorizeSecurityGroupResponse AuthorizeSecurityGroupResponse
     */
    public function authorizeSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an outbound security group rule. This operation allows or denies the outbound traffic from the instances in the security group to other devices.
     *  *
     * @description In the security group-related API documents, outbound traffic refers to the traffic that is sent by the source device and received at the destination device.
     *  *
     * @param AuthorizeSecurityGroupEgressRequest $request AuthorizeSecurityGroupEgressRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return AuthorizeSecurityGroupEgressResponse AuthorizeSecurityGroupEgressResponse
     */
    public function authorizeSecurityGroupEgressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->destCidrIp)) {
            $query['DestCidrIp'] = $request->destCidrIp;
        }
        if (!Utils::isUnset($request->ipProtocol)) {
            $query['IpProtocol'] = $request->ipProtocol;
        }
        if (!Utils::isUnset($request->policy)) {
            $query['Policy'] = $request->policy;
        }
        if (!Utils::isUnset($request->portRange)) {
            $query['PortRange'] = $request->portRange;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->sourcePortRange)) {
            $query['SourcePortRange'] = $request->sourcePortRange;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AuthorizeSecurityGroupEgress',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AuthorizeSecurityGroupEgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an outbound security group rule. This operation allows or denies the outbound traffic from the instances in the security group to other devices.
     *  *
     * @description In the security group-related API documents, outbound traffic refers to the traffic that is sent by the source device and received at the destination device.
     *  *
     * @param AuthorizeSecurityGroupEgressRequest $request AuthorizeSecurityGroupEgressRequest
     *
     * @return AuthorizeSecurityGroupEgressResponse AuthorizeSecurityGroupEgressResponse
     */
    public function authorizeSecurityGroupEgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeSecurityGroupEgressWithOptions($request, $runtime);
    }

    /**
     * @summary 清理分发数据
     *  *
     * @param CleanDistDataRequest $request CleanDistDataRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CleanDistDataResponse CleanDistDataResponse
     */
    public function cleanDistDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->dataName)) {
            $query['DataName'] = $request->dataName;
        }
        if (!Utils::isUnset($request->dataVersion)) {
            $query['DataVersion'] = $request->dataVersion;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CleanDistData',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CleanDistDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 清理分发数据
     *  *
     * @param CleanDistDataRequest $request CleanDistDataRequest
     *
     * @return CleanDistDataResponse CleanDistDataResponse
     */
    public function cleanDistData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cleanDistDataWithOptions($request, $runtime);
    }

    /**
     * @summary Copies a shared data group (SDG) across nodes.
     *  *
     * @param CopySDGRequest $tmpReq  CopySDGRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return CopySDGResponse CopySDGResponse
     */
    public function copySDGWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CopySDGShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->destinationRegionIds)) {
            $request->destinationRegionIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->destinationRegionIds, 'DestinationRegionIds', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CopySDG',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CopySDGResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Copies a shared data group (SDG) across nodes.
     *  *
     * @param CopySDGRequest $request CopySDGRequest
     *
     * @return CopySDGResponse CopySDGResponse
     */
    public function copySDG($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copySDGWithOptions($request, $runtime);
    }

    /**
     * @summary Copies a snapshot.
     *  *
     * @param CopySnapshotRequest $tmpReq  CopySnapshotRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return CopySnapshotResponse CopySnapshotResponse
     */
    public function copySnapshotWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CopySnapshotShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->destinationRegionIds)) {
            $request->destinationRegionIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->destinationRegionIds, 'DestinationRegionIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->destinationRegionIdsShrink)) {
            $query['DestinationRegionIds'] = $request->destinationRegionIdsShrink;
        }
        if (!Utils::isUnset($request->destinationSnapshotDescription)) {
            $query['DestinationSnapshotDescription'] = $request->destinationSnapshotDescription;
        }
        if (!Utils::isUnset($request->destinationSnapshotName)) {
            $query['DestinationSnapshotName'] = $request->destinationSnapshotName;
        }
        if (!Utils::isUnset($request->snapshotId)) {
            $query['SnapshotId'] = $request->snapshotId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CopySnapshot',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CopySnapshotResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Copies a snapshot.
     *  *
     * @param CopySnapshotRequest $request CopySnapshotRequest
     *
     * @return CopySnapshotResponse CopySnapshotResponse
     */
    public function copySnapshot($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->copySnapshotWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an ARM server.
     *  *
     * @param CreateARMServerInstancesRequest $request CreateARMServerInstancesRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateARMServerInstancesResponse CreateARMServerInstancesResponse
     */
    public function createARMServerInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->amount)) {
            $query['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->autoUseCoupon)) {
            $query['AutoUseCoupon'] = $request->autoUseCoupon;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->frequency)) {
            $query['Frequency'] = $request->frequency;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->keyPairName)) {
            $query['KeyPairName'] = $request->keyPairName;
        }
        if (!Utils::isUnset($request->nameSpace_)) {
            $query['NameSpace'] = $request->nameSpace_;
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
        if (!Utils::isUnset($request->resolution)) {
            $query['Resolution'] = $request->resolution;
        }
        if (!Utils::isUnset($request->serverName)) {
            $query['ServerName'] = $request->serverName;
        }
        if (!Utils::isUnset($request->serverType)) {
            $query['ServerType'] = $request->serverType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateARMServerInstances',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateARMServerInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an ARM server.
     *  *
     * @param CreateARMServerInstancesRequest $request CreateARMServerInstancesRequest
     *
     * @return CreateARMServerInstancesResponse CreateARMServerInstancesResponse
     */
    public function createARMServerInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createARMServerInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an edge application that allows you to manage Edge Node Service (ENS) nodes in containers, bare metal instances, and virtual machines.
     *  *
     * @param CreateApplicationRequest $request CreateApplicationRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateApplicationResponse CreateApplicationResponse
     */
    public function createApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->template)) {
            $query['Template'] = $request->template;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateApplication',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an edge application that allows you to manage Edge Node Service (ENS) nodes in containers, bare metal instances, and virtual machines.
     *  *
     * @param CreateApplicationRequest $request CreateApplicationRequest
     *
     * @return CreateApplicationResponse CreateApplicationResponse
     */
    public function createApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a classic network
     *  *
     * @param CreateClassicNetworkRequest $request CreateClassicNetworkRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateClassicNetworkResponse CreateClassicNetworkResponse
     */
    public function createClassicNetworkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cidrBlock)) {
            $query['CidrBlock'] = $request->cidrBlock;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->networkName)) {
            $query['NetworkName'] = $request->networkName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateClassicNetwork',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateClassicNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a classic network
     *  *
     * @param CreateClassicNetworkRequest $request CreateClassicNetworkRequest
     *
     * @return CreateClassicNetworkResponse CreateClassicNetworkResponse
     */
    public function createClassicNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClassicNetworkWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a pay-as-you-go or subscription data disk.
     *  *
     * @param CreateDiskRequest $request CreateDiskRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDiskResponse CreateDiskResponse
     */
    public function createDiskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->diskName)) {
            $query['DiskName'] = $request->diskName;
        }
        if (!Utils::isUnset($request->encrypted)) {
            $query['Encrypted'] = $request->encrypted;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->instanceChargeType)) {
            $query['InstanceChargeType'] = $request->instanceChargeType;
        }
        if (!Utils::isUnset($request->KMSKeyId)) {
            $query['KMSKeyId'] = $request->KMSKeyId;
        }
        if (!Utils::isUnset($request->size)) {
            $query['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->snapshotId)) {
            $query['SnapshotId'] = $request->snapshotId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateDisk',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a pay-as-you-go or subscription data disk.
     *  *
     * @param CreateDiskRequest $request CreateDiskRequest
     *
     * @return CreateDiskResponse CreateDiskResponse
     */
    public function createDisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDiskWithOptions($request, $runtime);
    }

    /**
     * @summary Applies for an elastic IP address (EIP).
     *  *
     * @description *   You can call this operation up to 5,000 times per second per account.
     * *   You can call this operation up to 50 times per second per user.
     *  *
     * @param CreateEipInstanceRequest $request CreateEipInstanceRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateEipInstanceResponse CreateEipInstanceResponse
     */
    public function createEipInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->instanceChargeType)) {
            $query['InstanceChargeType'] = $request->instanceChargeType;
        }
        if (!Utils::isUnset($request->internetChargeType)) {
            $query['InternetChargeType'] = $request->internetChargeType;
        }
        if (!Utils::isUnset($request->isp)) {
            $query['Isp'] = $request->isp;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateEipInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEipInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Applies for an elastic IP address (EIP).
     *  *
     * @description *   You can call this operation up to 5,000 times per second per account.
     * *   You can call this operation up to 50 times per second per user.
     *  *
     * @param CreateEipInstanceRequest $request CreateEipInstanceRequest
     *
     * @return CreateEipInstanceResponse CreateEipInstanceResponse
     */
    public function createEipInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEipInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a custom route entry.
     *  *
     * @param CreateEnsRouteEntryRequest $request CreateEnsRouteEntryRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateEnsRouteEntryResponse CreateEnsRouteEntryResponse
     */
    public function createEnsRouteEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->destinationCidrBlock)) {
            $query['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }
        if (!Utils::isUnset($request->nextHopId)) {
            $query['NextHopId'] = $request->nextHopId;
        }
        if (!Utils::isUnset($request->nextHopType)) {
            $query['NextHopType'] = $request->nextHopType;
        }
        if (!Utils::isUnset($request->routeEntryName)) {
            $query['RouteEntryName'] = $request->routeEntryName;
        }
        if (!Utils::isUnset($request->routeTableId)) {
            $query['RouteTableId'] = $request->routeTableId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateEnsRouteEntry',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEnsRouteEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a custom route entry.
     *  *
     * @param CreateEnsRouteEntryRequest $request CreateEnsRouteEntryRequest
     *
     * @return CreateEnsRouteEntryResponse CreateEnsRouteEntryResponse
     */
    public function createEnsRouteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEnsRouteEntryWithOptions($request, $runtime);
    }

    /**
     * @summary 创建售卖约束
     *  *
     * @param CreateEnsSaleControlRequest $tmpReq  CreateEnsSaleControlRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateEnsSaleControlResponse CreateEnsSaleControlResponse
     */
    public function createEnsSaleControlWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateEnsSaleControlShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->saleControls)) {
            $request->saleControlsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->saleControls, 'SaleControls', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->aliUidAccount)) {
            $query['AliUidAccount'] = $request->aliUidAccount;
        }
        if (!Utils::isUnset($request->commodityCode)) {
            $query['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->saleControlsShrink)) {
            $query['SaleControls'] = $request->saleControlsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateEnsSaleControl',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEnsSaleControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建售卖约束
     *  *
     * @param CreateEnsSaleControlRequest $request CreateEnsSaleControlRequest
     *
     * @return CreateEnsSaleControlResponse CreateEnsSaleControlResponse
     */
    public function createEnsSaleControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEnsSaleControlWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an edge service.
     *  *
     * @param CreateEnsServiceRequest $request CreateEnsServiceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateEnsServiceResponse CreateEnsServiceResponse
     */
    public function createEnsServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ensServiceId)) {
            $query['EnsServiceId'] = $request->ensServiceId;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateEnsService',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEnsServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an edge service.
     *  *
     * @param CreateEnsServiceRequest $request CreateEnsServiceRequest
     *
     * @return CreateEnsServiceResponse CreateEnsServiceResponse
     */
    public function createEnsService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEnsServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an edge private network (EPN) instance.
     *  *
     * @param CreateEpnInstanceRequest $request CreateEpnInstanceRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateEpnInstanceResponse CreateEpnInstanceResponse
     */
    public function createEpnInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->EPNInstanceName)) {
            $query['EPNInstanceName'] = $request->EPNInstanceName;
        }
        if (!Utils::isUnset($request->EPNInstanceType)) {
            $query['EPNInstanceType'] = $request->EPNInstanceType;
        }
        if (!Utils::isUnset($request->internetChargeType)) {
            $query['InternetChargeType'] = $request->internetChargeType;
        }
        if (!Utils::isUnset($request->internetMaxBandwidthOut)) {
            $query['InternetMaxBandwidthOut'] = $request->internetMaxBandwidthOut;
        }
        if (!Utils::isUnset($request->networkingModel)) {
            $query['NetworkingModel'] = $request->networkingModel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateEpnInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEpnInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an edge private network (EPN) instance.
     *  *
     * @param CreateEpnInstanceRequest $request CreateEpnInstanceRequest
     *
     * @return CreateEpnInstanceResponse CreateEpnInstanceResponse
     */
    public function createEpnInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createEpnInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a Network Attached Storage (NAS) file system.
     *  *
     * @param CreateFileSystemRequest $tmpReq  CreateFileSystemRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateFileSystemResponse CreateFileSystemResponse
     */
    public function createFileSystemWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateFileSystemShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->orderDetails)) {
            $request->orderDetailsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->orderDetails, 'OrderDetails', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateFileSystem',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateFileSystemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a Network Attached Storage (NAS) file system.
     *  *
     * @param CreateFileSystemRequest $request CreateFileSystemRequest
     *
     * @return CreateFileSystemResponse CreateFileSystemResponse
     */
    public function createFileSystem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createFileSystemWithOptions($request, $runtime);
    }

    /**
     * @summary Adds a Destination Network Address Translation (DNAT) entry to a DNAT table.
     *  *
     * @param CreateForwardEntryRequest $request CreateForwardEntryRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateForwardEntryResponse CreateForwardEntryResponse
     */
    public function createForwardEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->externalIp)) {
            $query['ExternalIp'] = $request->externalIp;
        }
        if (!Utils::isUnset($request->externalPort)) {
            $query['ExternalPort'] = $request->externalPort;
        }
        if (!Utils::isUnset($request->forwardEntryName)) {
            $query['ForwardEntryName'] = $request->forwardEntryName;
        }
        if (!Utils::isUnset($request->healthCheckPort)) {
            $query['HealthCheckPort'] = $request->healthCheckPort;
        }
        if (!Utils::isUnset($request->internalIp)) {
            $query['InternalIp'] = $request->internalIp;
        }
        if (!Utils::isUnset($request->internalPort)) {
            $query['InternalPort'] = $request->internalPort;
        }
        if (!Utils::isUnset($request->ipProtocol)) {
            $query['IpProtocol'] = $request->ipProtocol;
        }
        if (!Utils::isUnset($request->natGatewayId)) {
            $query['NatGatewayId'] = $request->natGatewayId;
        }
        if (!Utils::isUnset($request->standbyExternalIp)) {
            $query['StandbyExternalIp'] = $request->standbyExternalIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateForwardEntry',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateForwardEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds a Destination Network Address Translation (DNAT) entry to a DNAT table.
     *  *
     * @param CreateForwardEntryRequest $request CreateForwardEntryRequest
     *
     * @return CreateForwardEntryResponse CreateForwardEntryResponse
     */
    public function createForwardEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createForwardEntryWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an image from an instance.
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
        if (!Utils::isUnset($request->deleteAfterImageUpload)) {
            $query['DeleteAfterImageUpload'] = $request->deleteAfterImageUpload;
        }
        if (!Utils::isUnset($request->imageName)) {
            $query['ImageName'] = $request->imageName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->snapshotId)) {
            $query['SnapshotId'] = $request->snapshotId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateImage',
            'version'     => '2017-11-10',
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
     * @summary Creates an image from an instance.
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
     * @summary Creates an instance.
     *  *
     * @description *   You can call this operation up to 10 times per second per account.
     * *   We recommend that you increase the request time because instance creation is an asynchronous operation. If the return code of the API operation is 0, it indicates that the request is successful, but does not indicate that the instance is created. If the request is successful, an instance ID is returned. You can check whether the instance is created based on the instance ID.
     * *   InvalidUserData.NotInWhiteList operation restriction: You can create an instance only if you are in the whitelist in which members have the purchase permissions. Otherwise, an error is returned.
     *  *
     * @param CreateInstanceRequest $request CreateInstanceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateInstanceResponse CreateInstanceResponse
     */
    public function createInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->autoRenewPeriod)) {
            $query['AutoRenewPeriod'] = $request->autoRenewPeriod;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->hostName)) {
            $query['HostName'] = $request->hostName;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->internetChargeType)) {
            $query['InternetChargeType'] = $request->internetChargeType;
        }
        if (!Utils::isUnset($request->ipType)) {
            $query['IpType'] = $request->ipType;
        }
        if (!Utils::isUnset($request->keyPairName)) {
            $query['KeyPairName'] = $request->keyPairName;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->passwordInherit)) {
            $query['PasswordInherit'] = $request->passwordInherit;
        }
        if (!Utils::isUnset($request->paymentType)) {
            $query['PaymentType'] = $request->paymentType;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->privateIpAddress)) {
            $query['PrivateIpAddress'] = $request->privateIpAddress;
        }
        if (!Utils::isUnset($request->publicIpIdentification)) {
            $query['PublicIpIdentification'] = $request->publicIpIdentification;
        }
        if (!Utils::isUnset($request->quantity)) {
            $query['Quantity'] = $request->quantity;
        }
        if (!Utils::isUnset($request->uniqueSuffix)) {
            $query['UniqueSuffix'] = $request->uniqueSuffix;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->dataDisk)) {
            $query['DataDisk'] = $request->dataDisk;
        }
        if (!Utils::isUnset($request->systemDisk)) {
            $query['SystemDisk'] = $request->systemDisk;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an instance.
     *  *
     * @description *   You can call this operation up to 10 times per second per account.
     * *   We recommend that you increase the request time because instance creation is an asynchronous operation. If the return code of the API operation is 0, it indicates that the request is successful, but does not indicate that the instance is created. If the request is successful, an instance ID is returned. You can check whether the instance is created based on the instance ID.
     * *   InvalidUserData.NotInWhiteList operation restriction: You can create an instance only if you are in the whitelist in which members have the purchase permissions. Otherwise, an error is returned.
     *  *
     * @param CreateInstanceRequest $request CreateInstanceRequest
     *
     * @return CreateInstanceResponse CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 调用CreateInstanceOpsTask来针对一个实例或实例运维组发起运维任务
     *  *
     * @param CreateInstanceActiveOpsTaskRequest $tmpReq  CreateInstanceActiveOpsTaskRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateInstanceActiveOpsTaskResponse CreateInstanceActiveOpsTaskResponse
     */
    public function createInstanceActiveOpsTaskWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateInstanceActiveOpsTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->instanceIds)) {
            $request->instanceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->instanceIdsShrink)) {
            $query['InstanceIds'] = $request->instanceIdsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateInstanceActiveOpsTask',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceActiveOpsTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 调用CreateInstanceOpsTask来针对一个实例或实例运维组发起运维任务
     *  *
     * @param CreateInstanceActiveOpsTaskRequest $request CreateInstanceActiveOpsTaskRequest
     *
     * @return CreateInstanceActiveOpsTaskResponse CreateInstanceActiveOpsTaskResponse
     */
    public function createInstanceActiveOpsTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceActiveOpsTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an SSH key pair.
     *  *
     * @description An SSH key pair consists of a public key and a private key. ENS stores the public key and returns the unencrypted private key that is PEM-encoded in the PKCS#8 format. You must securely lock away the private key.
     *  *
     * @param CreateKeyPairRequest $request CreateKeyPairRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateKeyPairResponse CreateKeyPairResponse
     */
    public function createKeyPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyPairName)) {
            $query['KeyPairName'] = $request->keyPairName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateKeyPair',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateKeyPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an SSH key pair.
     *  *
     * @description An SSH key pair consists of a public key and a private key. ENS stores the public key and returns the unencrypted private key that is PEM-encoded in the PKCS#8 format. You must securely lock away the private key.
     *  *
     * @param CreateKeyPairRequest $request CreateKeyPairRequest
     *
     * @return CreateKeyPairResponse CreateKeyPairResponse
     */
    public function createKeyPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createKeyPairWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an Edge Load Balancer (ELB) instance.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 5 times per second per user.
     *  *
     * @param CreateLoadBalancerRequest $request CreateLoadBalancerRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLoadBalancerResponse CreateLoadBalancerResponse
     */
    public function createLoadBalancerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->loadBalancerName)) {
            $query['LoadBalancerName'] = $request->loadBalancerName;
        }
        if (!Utils::isUnset($request->loadBalancerSpec)) {
            $query['LoadBalancerSpec'] = $request->loadBalancerSpec;
        }
        if (!Utils::isUnset($request->networkId)) {
            $query['NetworkId'] = $request->networkId;
        }
        if (!Utils::isUnset($request->payType)) {
            $query['PayType'] = $request->payType;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLoadBalancer',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLoadBalancerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an Edge Load Balancer (ELB) instance.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 5 times per second per user.
     *  *
     * @param CreateLoadBalancerRequest $request CreateLoadBalancerRequest
     *
     * @return CreateLoadBalancerResponse CreateLoadBalancerResponse
     */
    public function createLoadBalancer($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoadBalancerWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an HTTP listener.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *  *
     * @param CreateLoadBalancerHTTPListenerRequest $request CreateLoadBalancerHTTPListenerRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLoadBalancerHTTPListenerResponse CreateLoadBalancerHTTPListenerResponse
     */
    public function createLoadBalancerHTTPListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->forwardPort)) {
            $query['ForwardPort'] = $request->forwardPort;
        }
        if (!Utils::isUnset($request->healthCheck)) {
            $query['HealthCheck'] = $request->healthCheck;
        }
        if (!Utils::isUnset($request->healthCheckConnectPort)) {
            $query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }
        if (!Utils::isUnset($request->healthCheckDomain)) {
            $query['HealthCheckDomain'] = $request->healthCheckDomain;
        }
        if (!Utils::isUnset($request->healthCheckHttpCode)) {
            $query['HealthCheckHttpCode'] = $request->healthCheckHttpCode;
        }
        if (!Utils::isUnset($request->healthCheckInterval)) {
            $query['HealthCheckInterval'] = $request->healthCheckInterval;
        }
        if (!Utils::isUnset($request->healthCheckMethod)) {
            $query['HealthCheckMethod'] = $request->healthCheckMethod;
        }
        if (!Utils::isUnset($request->healthCheckTimeout)) {
            $query['HealthCheckTimeout'] = $request->healthCheckTimeout;
        }
        if (!Utils::isUnset($request->healthCheckURI)) {
            $query['HealthCheckURI'] = $request->healthCheckURI;
        }
        if (!Utils::isUnset($request->healthyThreshold)) {
            $query['HealthyThreshold'] = $request->healthyThreshold;
        }
        if (!Utils::isUnset($request->idleTimeout)) {
            $query['IdleTimeout'] = $request->idleTimeout;
        }
        if (!Utils::isUnset($request->listenerForward)) {
            $query['ListenerForward'] = $request->listenerForward;
        }
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->requestTimeout)) {
            $query['RequestTimeout'] = $request->requestTimeout;
        }
        if (!Utils::isUnset($request->scheduler)) {
            $query['Scheduler'] = $request->scheduler;
        }
        if (!Utils::isUnset($request->unhealthyThreshold)) {
            $query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }
        if (!Utils::isUnset($request->XForwardedFor)) {
            $query['XForwardedFor'] = $request->XForwardedFor;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLoadBalancerHTTPListener',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLoadBalancerHTTPListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an HTTP listener.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *  *
     * @param CreateLoadBalancerHTTPListenerRequest $request CreateLoadBalancerHTTPListenerRequest
     *
     * @return CreateLoadBalancerHTTPListenerResponse CreateLoadBalancerHTTPListenerResponse
     */
    public function createLoadBalancerHTTPListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoadBalancerHTTPListenerWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an HTTPS listener.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *  *
     * @param CreateLoadBalancerHTTPSListenerRequest $request CreateLoadBalancerHTTPSListenerRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLoadBalancerHTTPSListenerResponse CreateLoadBalancerHTTPSListenerResponse
     */
    public function createLoadBalancerHTTPSListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cookie)) {
            $query['Cookie'] = $request->cookie;
        }
        if (!Utils::isUnset($request->cookieTimeout)) {
            $query['CookieTimeout'] = $request->cookieTimeout;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->forwardPort)) {
            $query['ForwardPort'] = $request->forwardPort;
        }
        if (!Utils::isUnset($request->healthCheck)) {
            $query['HealthCheck'] = $request->healthCheck;
        }
        if (!Utils::isUnset($request->healthCheckConnectPort)) {
            $query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }
        if (!Utils::isUnset($request->healthCheckDomain)) {
            $query['HealthCheckDomain'] = $request->healthCheckDomain;
        }
        if (!Utils::isUnset($request->healthCheckHttpCode)) {
            $query['HealthCheckHttpCode'] = $request->healthCheckHttpCode;
        }
        if (!Utils::isUnset($request->healthCheckInterval)) {
            $query['HealthCheckInterval'] = $request->healthCheckInterval;
        }
        if (!Utils::isUnset($request->healthCheckMethod)) {
            $query['HealthCheckMethod'] = $request->healthCheckMethod;
        }
        if (!Utils::isUnset($request->healthCheckTimeout)) {
            $query['HealthCheckTimeout'] = $request->healthCheckTimeout;
        }
        if (!Utils::isUnset($request->healthCheckURI)) {
            $query['HealthCheckURI'] = $request->healthCheckURI;
        }
        if (!Utils::isUnset($request->healthyThreshold)) {
            $query['HealthyThreshold'] = $request->healthyThreshold;
        }
        if (!Utils::isUnset($request->idleTimeout)) {
            $query['IdleTimeout'] = $request->idleTimeout;
        }
        if (!Utils::isUnset($request->listenerForward)) {
            $query['ListenerForward'] = $request->listenerForward;
        }
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->requestTimeout)) {
            $query['RequestTimeout'] = $request->requestTimeout;
        }
        if (!Utils::isUnset($request->scheduler)) {
            $query['Scheduler'] = $request->scheduler;
        }
        if (!Utils::isUnset($request->serverCertificateId)) {
            $query['ServerCertificateId'] = $request->serverCertificateId;
        }
        if (!Utils::isUnset($request->stickySessionType)) {
            $query['StickySessionType'] = $request->stickySessionType;
        }
        if (!Utils::isUnset($request->unhealthyThreshold)) {
            $query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLoadBalancerHTTPSListener',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLoadBalancerHTTPSListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an HTTPS listener.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *  *
     * @param CreateLoadBalancerHTTPSListenerRequest $request CreateLoadBalancerHTTPSListenerRequest
     *
     * @return CreateLoadBalancerHTTPSListenerResponse CreateLoadBalancerHTTPSListenerResponse
     */
    public function createLoadBalancerHTTPSListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoadBalancerHTTPSListenerWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a Transmission Control Protocol (TCP) listener.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *  *
     * @param CreateLoadBalancerTCPListenerRequest $request CreateLoadBalancerTCPListenerRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLoadBalancerTCPListenerResponse CreateLoadBalancerTCPListenerResponse
     */
    public function createLoadBalancerTCPListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backendServerPort)) {
            $query['BackendServerPort'] = $request->backendServerPort;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->eipTransmit)) {
            $query['EipTransmit'] = $request->eipTransmit;
        }
        if (!Utils::isUnset($request->establishedTimeout)) {
            $query['EstablishedTimeout'] = $request->establishedTimeout;
        }
        if (!Utils::isUnset($request->healthCheckConnectPort)) {
            $query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }
        if (!Utils::isUnset($request->healthCheckConnectTimeout)) {
            $query['HealthCheckConnectTimeout'] = $request->healthCheckConnectTimeout;
        }
        if (!Utils::isUnset($request->healthCheckDomain)) {
            $query['HealthCheckDomain'] = $request->healthCheckDomain;
        }
        if (!Utils::isUnset($request->healthCheckHttpCode)) {
            $query['HealthCheckHttpCode'] = $request->healthCheckHttpCode;
        }
        if (!Utils::isUnset($request->healthCheckInterval)) {
            $query['HealthCheckInterval'] = $request->healthCheckInterval;
        }
        if (!Utils::isUnset($request->healthCheckType)) {
            $query['HealthCheckType'] = $request->healthCheckType;
        }
        if (!Utils::isUnset($request->healthCheckURI)) {
            $query['HealthCheckURI'] = $request->healthCheckURI;
        }
        if (!Utils::isUnset($request->healthyThreshold)) {
            $query['HealthyThreshold'] = $request->healthyThreshold;
        }
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->persistenceTimeout)) {
            $query['PersistenceTimeout'] = $request->persistenceTimeout;
        }
        if (!Utils::isUnset($request->scheduler)) {
            $query['Scheduler'] = $request->scheduler;
        }
        if (!Utils::isUnset($request->unhealthyThreshold)) {
            $query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLoadBalancerTCPListener',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLoadBalancerTCPListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a Transmission Control Protocol (TCP) listener.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *  *
     * @param CreateLoadBalancerTCPListenerRequest $request CreateLoadBalancerTCPListenerRequest
     *
     * @return CreateLoadBalancerTCPListenerResponse CreateLoadBalancerTCPListenerResponse
     */
    public function createLoadBalancerTCPListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoadBalancerTCPListenerWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a User Datagram Protocol (UDP) listener.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *  *
     * @param CreateLoadBalancerUDPListenerRequest $request CreateLoadBalancerUDPListenerRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateLoadBalancerUDPListenerResponse CreateLoadBalancerUDPListenerResponse
     */
    public function createLoadBalancerUDPListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backendServerPort)) {
            $query['BackendServerPort'] = $request->backendServerPort;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->eipTransmit)) {
            $query['EipTransmit'] = $request->eipTransmit;
        }
        if (!Utils::isUnset($request->healthCheckConnectPort)) {
            $query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }
        if (!Utils::isUnset($request->healthCheckConnectTimeout)) {
            $query['HealthCheckConnectTimeout'] = $request->healthCheckConnectTimeout;
        }
        if (!Utils::isUnset($request->healthCheckExp)) {
            $query['HealthCheckExp'] = $request->healthCheckExp;
        }
        if (!Utils::isUnset($request->healthCheckInterval)) {
            $query['HealthCheckInterval'] = $request->healthCheckInterval;
        }
        if (!Utils::isUnset($request->healthCheckReq)) {
            $query['HealthCheckReq'] = $request->healthCheckReq;
        }
        if (!Utils::isUnset($request->healthyThreshold)) {
            $query['HealthyThreshold'] = $request->healthyThreshold;
        }
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->scheduler)) {
            $query['Scheduler'] = $request->scheduler;
        }
        if (!Utils::isUnset($request->unhealthyThreshold)) {
            $query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateLoadBalancerUDPListener',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLoadBalancerUDPListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a User Datagram Protocol (UDP) listener.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *  *
     * @param CreateLoadBalancerUDPListenerRequest $request CreateLoadBalancerUDPListenerRequest
     *
     * @return CreateLoadBalancerUDPListenerResponse CreateLoadBalancerUDPListenerResponse
     */
    public function createLoadBalancerUDPListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createLoadBalancerUDPListenerWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a mount target.
     *  *
     * @description ## [](#)Precautions
     * After you call this operation, a mount target is not immediately created. Therefore, we recommend that you call the DescribeMountTargets operation to query the status of the mount target. If the mount target is in the Active state, you can then mount the file system. Otherwise, the file system may fail to be mounted.
     *  *
     * @param CreateMountTargetRequest $request CreateMountTargetRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateMountTargetResponse CreateMountTargetResponse
     */
    public function createMountTargetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->mountTargetName)) {
            $query['MountTargetName'] = $request->mountTargetName;
        }
        if (!Utils::isUnset($request->netWorkId)) {
            $query['NetWorkId'] = $request->netWorkId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateMountTarget',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMountTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a mount target.
     *  *
     * @description ## [](#)Precautions
     * After you call this operation, a mount target is not immediately created. Therefore, we recommend that you call the DescribeMountTargets operation to query the status of the mount target. If the mount target is in the Active state, you can then mount the file system. Otherwise, the file system may fail to be mounted.
     *  *
     * @param CreateMountTargetRequest $request CreateMountTargetRequest
     *
     * @return CreateMountTargetResponse CreateMountTargetResponse
     */
    public function createMountTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createMountTargetWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a network address translation (NAT) gateway.
     *  *
     * @param CreateNatGatewayRequest $request CreateNatGatewayRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNatGatewayResponse CreateNatGatewayResponse
     */
    public function createNatGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->networkId)) {
            $query['NetworkId'] = $request->networkId;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateNatGateway',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateNatGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a network address translation (NAT) gateway.
     *  *
     * @param CreateNatGatewayRequest $request CreateNatGatewayRequest
     *
     * @return CreateNatGatewayResponse CreateNatGatewayResponse
     */
    public function createNatGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNatGatewayWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a virtual private cloud (VPC).
     *  *
     * @description *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 5 times per second per user.
     *  *
     * @param CreateNetworkRequest $request CreateNetworkRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNetworkResponse CreateNetworkResponse
     */
    public function createNetworkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cidrBlock)) {
            $query['CidrBlock'] = $request->cidrBlock;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->networkName)) {
            $query['NetworkName'] = $request->networkName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateNetwork',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a virtual private cloud (VPC).
     *  *
     * @description *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 5 times per second per user.
     *  *
     * @param CreateNetworkRequest $request CreateNetworkRequest
     *
     * @return CreateNetworkResponse CreateNetworkResponse
     */
    public function createNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNetworkWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a network access control list (ACL).
     *  *
     * @param CreateNetworkAclRequest $request CreateNetworkAclRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNetworkAclResponse CreateNetworkAclResponse
     */
    public function createNetworkAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->networkAclName)) {
            $query['NetworkAclName'] = $request->networkAclName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateNetworkAcl',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateNetworkAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a network access control list (ACL).
     *  *
     * @param CreateNetworkAclRequest $request CreateNetworkAclRequest
     *
     * @return CreateNetworkAclResponse CreateNetworkAclResponse
     */
    public function createNetworkAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNetworkAclWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a network access control list (ACL) rule.
     *  *
     * @param CreateNetworkAclEntryRequest $request CreateNetworkAclEntryRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNetworkAclEntryResponse CreateNetworkAclEntryResponse
     */
    public function createNetworkAclEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cidrBlock)) {
            $query['CidrBlock'] = $request->cidrBlock;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->direction)) {
            $query['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->networkAclEntryName)) {
            $query['NetworkAclEntryName'] = $request->networkAclEntryName;
        }
        if (!Utils::isUnset($request->networkAclId)) {
            $query['NetworkAclId'] = $request->networkAclId;
        }
        if (!Utils::isUnset($request->policy)) {
            $query['Policy'] = $request->policy;
        }
        if (!Utils::isUnset($request->portRange)) {
            $query['PortRange'] = $request->portRange;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->protocol)) {
            $query['Protocol'] = $request->protocol;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateNetworkAclEntry',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateNetworkAclEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a network access control list (ACL) rule.
     *  *
     * @param CreateNetworkAclEntryRequest $request CreateNetworkAclEntryRequest
     *
     * @return CreateNetworkAclEntryResponse CreateNetworkAclEntryResponse
     */
    public function createNetworkAclEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNetworkAclEntryWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a shared data group (SDG) by using a specific device.
     *  *
     * @description ## [](#)
     * After you create an SDG, you must call the [SaveSDG](https://help.aliyun.com/document_detail/608126.html) operation to save the SDG. Otherwise, the SDG is unavailable.
     *  *
     * @param CreateSDGRequest $request CreateSDGRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSDGResponse CreateSDGResponse
     */
    public function createSDGWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSDG',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSDGResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a shared data group (SDG) by using a specific device.
     *  *
     * @description ## [](#)
     * After you create an SDG, you must call the [SaveSDG](https://help.aliyun.com/document_detail/608126.html) operation to save the SDG. Otherwise, the SDG is unavailable.
     *  *
     * @param CreateSDGRequest $request CreateSDGRequest
     *
     * @return CreateSDGResponse CreateSDGResponse
     */
    public function createSDG($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSDGWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a security group.
     *  *
     * @param CreateSecurityGroupRequest $request CreateSecurityGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSecurityGroupResponse CreateSecurityGroupResponse
     */
    public function createSecurityGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->securityGroupName)) {
            $query['SecurityGroupName'] = $request->securityGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSecurityGroup',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSecurityGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a security group.
     *  *
     * @param CreateSecurityGroupRequest $request CreateSecurityGroupRequest
     *
     * @return CreateSecurityGroupResponse CreateSecurityGroupResponse
     */
    public function createSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a snapshot.
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
        if (!Utils::isUnset($request->diskId)) {
            $query['DiskId'] = $request->diskId;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->snapshotName)) {
            $query['SnapshotName'] = $request->snapshotName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSnapshot',
            'version'     => '2017-11-10',
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
     * @summary Creates a snapshot.
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
     * @summary Adds a source network address translation (SNAT) entry to a specified SNAT table.
     *  *
     * @param CreateSnatEntryRequest $request CreateSnatEntryRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSnatEntryResponse CreateSnatEntryResponse
     */
    public function createSnatEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->natGatewayId)) {
            $query['NatGatewayId'] = $request->natGatewayId;
        }
        if (!Utils::isUnset($request->snatEntryName)) {
            $query['SnatEntryName'] = $request->snatEntryName;
        }
        if (!Utils::isUnset($request->snatIp)) {
            $query['SnatIp'] = $request->snatIp;
        }
        if (!Utils::isUnset($request->sourceCIDR)) {
            $query['SourceCIDR'] = $request->sourceCIDR;
        }
        if (!Utils::isUnset($request->sourceNetworkId)) {
            $query['SourceNetworkId'] = $request->sourceNetworkId;
        }
        if (!Utils::isUnset($request->sourceVSwitchId)) {
            $query['SourceVSwitchId'] = $request->sourceVSwitchId;
        }
        if (!Utils::isUnset($request->standbySnatIp)) {
            $query['StandbySnatIp'] = $request->standbySnatIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateSnatEntry',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSnatEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds a source network address translation (SNAT) entry to a specified SNAT table.
     *  *
     * @param CreateSnatEntryRequest $request CreateSnatEntryRequest
     *
     * @return CreateSnatEntryResponse CreateSnatEntryResponse
     */
    public function createSnatEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSnatEntryWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a vSwitch.
     *  *
     * @param CreateVSwitchRequest $request CreateVSwitchRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateVSwitchResponse CreateVSwitchResponse
     */
    public function createVSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->cidrBlock)) {
            $query['CidrBlock'] = $request->cidrBlock;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->networkId)) {
            $query['NetworkId'] = $request->networkId;
        }
        if (!Utils::isUnset($request->vSwitchName)) {
            $query['VSwitchName'] = $request->vSwitchName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateVSwitch',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a vSwitch.
     *  *
     * @param CreateVSwitchRequest $request CreateVSwitchRequest
     *
     * @return CreateVSwitchResponse CreateVSwitchResponse
     */
    public function createVSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createVSwitchWithOptions($request, $runtime);
    }

    /**
     * @summary Releases all containers and resource instances related to a specific application in an asynchronous manner.
     *  *
     * @param DeleteApplicationRequest $request DeleteApplicationRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteApplicationResponse DeleteApplicationResponse
     */
    public function deleteApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteApplication',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Releases all containers and resource instances related to a specific application in an asynchronous manner.
     *  *
     * @param DeleteApplicationRequest $request DeleteApplicationRequest
     *
     * @return DeleteApplicationResponse DeleteApplicationResponse
     */
    public function deleteApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a bucket.
     *  *
     * @description *   Only the Alibaba Cloud Account ID owner of a bucket can delete the bucket from the account.
     * *   You cannot delete buckets that store objects. You can only delete empty buckets.
     *  *
     * @param DeleteBucketRequest $request DeleteBucketRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteBucketResponse DeleteBucketResponse
     */
    public function deleteBucketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucketName)) {
            $query['BucketName'] = $request->bucketName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteBucket',
            'version'     => '2017-11-10',
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
     * @summary Deletes a bucket.
     *  *
     * @description *   Only the Alibaba Cloud Account ID owner of a bucket can delete the bucket from the account.
     * *   You cannot delete buckets that store objects. You can only delete empty buckets.
     *  *
     * @param DeleteBucketRequest $request DeleteBucketRequest
     *
     * @return DeleteBucketResponse DeleteBucketResponse
     */
    public function deleteBucket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBucketWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes the lifecycle rules for objects in a bucket.
     *  *
     * @param DeleteBucketLifecycleRequest $request DeleteBucketLifecycleRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteBucketLifecycleResponse DeleteBucketLifecycleResponse
     */
    public function deleteBucketLifecycleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucketName)) {
            $query['BucketName'] = $request->bucketName;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteBucketLifecycle',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteBucketLifecycleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes the lifecycle rules for objects in a bucket.
     *  *
     * @param DeleteBucketLifecycleRequest $request DeleteBucketLifecycleRequest
     *
     * @return DeleteBucketLifecycleResponse DeleteBucketLifecycleResponse
     */
    public function deleteBucketLifecycle($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteBucketLifecycleWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes Network Address Translation (NAT) rules for a server or container based on the ID.
     *  *
     * @param DeleteDeviceInternetPortRequest $request DeleteDeviceInternetPortRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDeviceInternetPortResponse DeleteDeviceInternetPortResponse
     */
    public function deleteDeviceInternetPortWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDeviceInternetPort',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDeviceInternetPortResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes Network Address Translation (NAT) rules for a server or container based on the ID.
     *  *
     * @param DeleteDeviceInternetPortRequest $request DeleteDeviceInternetPortRequest
     *
     * @return DeleteDeviceInternetPortResponse DeleteDeviceInternetPortResponse
     */
    public function deleteDeviceInternetPort($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDeviceInternetPortWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a disk.
     *  *
     * @description When you release a disk, the disk must be in the Available state.
     *  *
     * @param DeleteDiskRequest $request DeleteDiskRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteDiskResponse DeleteDiskResponse
     */
    public function deleteDiskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->diskId)) {
            $query['DiskId'] = $request->diskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteDisk',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteDiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a disk.
     *  *
     * @description When you release a disk, the disk must be in the Available state.
     *  *
     * @param DeleteDiskRequest $request DeleteDiskRequest
     *
     * @return DeleteDiskResponse DeleteDiskResponse
     */
    public function deleteDisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDiskWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a custom route entry.
     *  *
     * @param DeleteEnsRouteEntryRequest $request DeleteEnsRouteEntryRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEnsRouteEntryResponse DeleteEnsRouteEntryResponse
     */
    public function deleteEnsRouteEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->routeEntryId)) {
            $query['RouteEntryId'] = $request->routeEntryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEnsRouteEntry',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEnsRouteEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a custom route entry.
     *  *
     * @param DeleteEnsRouteEntryRequest $request DeleteEnsRouteEntryRequest
     *
     * @return DeleteEnsRouteEntryResponse DeleteEnsRouteEntryResponse
     */
    public function deleteEnsRouteEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEnsRouteEntryWithOptions($request, $runtime);
    }

    /**
     * @summary 删除售卖约束的条件约束
     *  *
     * @param DeleteEnsSaleConditionControlRequest $tmpReq  DeleteEnsSaleConditionControlRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEnsSaleConditionControlResponse DeleteEnsSaleConditionControlResponse
     */
    public function deleteEnsSaleConditionControlWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteEnsSaleConditionControlShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->saleControls)) {
            $request->saleControlsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->saleControls, 'SaleControls', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->aliUidAccount)) {
            $query['AliUidAccount'] = $request->aliUidAccount;
        }
        if (!Utils::isUnset($request->commodityCode)) {
            $query['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->saleControlsShrink)) {
            $query['SaleControls'] = $request->saleControlsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEnsSaleConditionControl',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEnsSaleConditionControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除售卖约束的条件约束
     *  *
     * @param DeleteEnsSaleConditionControlRequest $request DeleteEnsSaleConditionControlRequest
     *
     * @return DeleteEnsSaleConditionControlResponse DeleteEnsSaleConditionControlResponse
     */
    public function deleteEnsSaleConditionControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEnsSaleConditionControlWithOptions($request, $runtime);
    }

    /**
     * @summary 删除售卖约束基础约束
     *  *
     * @param DeleteEnsSaleControlRequest $tmpReq  DeleteEnsSaleControlRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEnsSaleControlResponse DeleteEnsSaleControlResponse
     */
    public function deleteEnsSaleControlWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteEnsSaleControlShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->saleControls)) {
            $request->saleControlsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->saleControls, 'SaleControls', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->aliUidAccount)) {
            $query['AliUidAccount'] = $request->aliUidAccount;
        }
        if (!Utils::isUnset($request->commodityCode)) {
            $query['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->saleControlsShrink)) {
            $query['SaleControls'] = $request->saleControlsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEnsSaleControl',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEnsSaleControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除售卖约束基础约束
     *  *
     * @param DeleteEnsSaleControlRequest $request DeleteEnsSaleControlRequest
     *
     * @return DeleteEnsSaleControlResponse DeleteEnsSaleControlResponse
     */
    public function deleteEnsSaleControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEnsSaleControlWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an edge private network (EPN) instance.
     *  *
     * @description You can delete an EPN instance only when the instance group information is empty.
     *  *
     * @param DeleteEpnInstanceRequest $request DeleteEpnInstanceRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteEpnInstanceResponse DeleteEpnInstanceResponse
     */
    public function deleteEpnInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->EPNInstanceId)) {
            $query['EPNInstanceId'] = $request->EPNInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteEpnInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEpnInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an edge private network (EPN) instance.
     *  *
     * @description You can delete an EPN instance only when the instance group information is empty.
     *  *
     * @param DeleteEpnInstanceRequest $request DeleteEpnInstanceRequest
     *
     * @return DeleteEpnInstanceResponse DeleteEpnInstanceResponse
     */
    public function deleteEpnInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteEpnInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a Network Attached Storage (NAS) file system.
     *  *
     * @param DeleteFileSystemRequest $request DeleteFileSystemRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteFileSystemResponse DeleteFileSystemResponse
     */
    public function deleteFileSystemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteFileSystem',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteFileSystemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a Network Attached Storage (NAS) file system.
     *  *
     * @param DeleteFileSystemRequest $request DeleteFileSystemRequest
     *
     * @return DeleteFileSystemResponse DeleteFileSystemResponse
     */
    public function deleteFileSystem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteFileSystemWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a Destination Network Address Translation (DNAT) entry from a specified DNAT table.
     *  *
     * @param DeleteForwardEntryRequest $request DeleteForwardEntryRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteForwardEntryResponse DeleteForwardEntryResponse
     */
    public function deleteForwardEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->forwardEntryId)) {
            $query['ForwardEntryId'] = $request->forwardEntryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteForwardEntry',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteForwardEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a Destination Network Address Translation (DNAT) entry from a specified DNAT table.
     *  *
     * @param DeleteForwardEntryRequest $request DeleteForwardEntryRequest
     *
     * @return DeleteForwardEntryResponse DeleteForwardEntryResponse
     */
    public function deleteForwardEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteForwardEntryWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a custom image.
     *  *
     * @param DeleteImageRequest $request DeleteImageRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteImageResponse DeleteImageResponse
     */
    public function deleteImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteImage',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a custom image.
     *  *
     * @param DeleteImageRequest $request DeleteImageRequest
     *
     * @return DeleteImageResponse DeleteImageResponse
     */
    public function deleteImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteImageWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes SSH key pairs.
     *  *
     * @description *   After you delete an SSH key pair, you can no longer query the key pair by calling the DescribeKeyPairs operation.
     * *   If you delete an SSH key pair that is bound to an Edge Node Service (ENS) instance, ENS no longer stores the SSH key pair. However, you can still use the key pair to access the instance. When you call the DescribeInstance operation to query instance information, no other information but the name of the key pair (**KeyPairName**) is returned.
     *  *
     * @param DeleteKeyPairsRequest $request DeleteKeyPairsRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteKeyPairsResponse DeleteKeyPairsResponse
     */
    public function deleteKeyPairsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyPairId)) {
            $query['KeyPairId'] = $request->keyPairId;
        }
        if (!Utils::isUnset($request->keyPairName)) {
            $query['KeyPairName'] = $request->keyPairName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteKeyPairs',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteKeyPairsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes SSH key pairs.
     *  *
     * @description *   After you delete an SSH key pair, you can no longer query the key pair by calling the DescribeKeyPairs operation.
     * *   If you delete an SSH key pair that is bound to an Edge Node Service (ENS) instance, ENS no longer stores the SSH key pair. However, you can still use the key pair to access the instance. When you call the DescribeInstance operation to query instance information, no other information but the name of the key pair (**KeyPairName**) is returned.
     *  *
     * @param DeleteKeyPairsRequest $request DeleteKeyPairsRequest
     *
     * @return DeleteKeyPairsResponse DeleteKeyPairsResponse
     */
    public function deleteKeyPairs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteKeyPairsWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a listener.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *  *
     * @param DeleteLoadBalancerListenerRequest $request DeleteLoadBalancerListenerRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteLoadBalancerListenerResponse DeleteLoadBalancerListenerResponse
     */
    public function deleteLoadBalancerListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->listenerProtocol)) {
            $query['ListenerProtocol'] = $request->listenerProtocol;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteLoadBalancerListener',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLoadBalancerListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a listener.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *  *
     * @param DeleteLoadBalancerListenerRequest $request DeleteLoadBalancerListenerRequest
     *
     * @return DeleteLoadBalancerListenerResponse DeleteLoadBalancerListenerResponse
     */
    public function deleteLoadBalancerListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteLoadBalancerListenerWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a mount target.
     *  *
     * @description After you delete a mount target, the mount target cannot be restored. Proceed with caution.
     *  *
     * @param DeleteMountTargetRequest $request DeleteMountTargetRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteMountTargetResponse DeleteMountTargetResponse
     */
    public function deleteMountTargetWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->mountTargetName)) {
            $query['MountTargetName'] = $request->mountTargetName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteMountTarget',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMountTargetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a mount target.
     *  *
     * @description After you delete a mount target, the mount target cannot be restored. Proceed with caution.
     *  *
     * @param DeleteMountTargetRequest $request DeleteMountTargetRequest
     *
     * @return DeleteMountTargetResponse DeleteMountTargetResponse
     */
    public function deleteMountTarget($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteMountTargetWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an Internet network address translation (NAT) gateway.
     *  *
     * @param DeleteNatGatewayRequest $request DeleteNatGatewayRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNatGatewayResponse DeleteNatGatewayResponse
     */
    public function deleteNatGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->natGatewayId)) {
            $query['NatGatewayId'] = $request->natGatewayId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNatGateway',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNatGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an Internet network address translation (NAT) gateway.
     *  *
     * @param DeleteNatGatewayRequest $request DeleteNatGatewayRequest
     *
     * @return DeleteNatGatewayResponse DeleteNatGatewayResponse
     */
    public function deleteNatGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNatGatewayWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a virtual private cloud (VPC).
     *  *
     * @param DeleteNetworkRequest $request DeleteNetworkRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNetworkResponse DeleteNetworkResponse
     */
    public function deleteNetworkWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->networkId)) {
            $query['NetworkId'] = $request->networkId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNetwork',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNetworkResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a virtual private cloud (VPC).
     *  *
     * @param DeleteNetworkRequest $request DeleteNetworkRequest
     *
     * @return DeleteNetworkResponse DeleteNetworkResponse
     */
    public function deleteNetwork($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNetworkWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a network access control list (ACL).
     *  *
     * @param DeleteNetworkAclRequest $request DeleteNetworkAclRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNetworkAclResponse DeleteNetworkAclResponse
     */
    public function deleteNetworkAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->networkAclId)) {
            $query['NetworkAclId'] = $request->networkAclId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNetworkAcl',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNetworkAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a network access control list (ACL).
     *  *
     * @param DeleteNetworkAclRequest $request DeleteNetworkAclRequest
     *
     * @return DeleteNetworkAclResponse DeleteNetworkAclResponse
     */
    public function deleteNetworkAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNetworkAclWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a network access control list (ACL) rule.
     *  *
     * @param DeleteNetworkAclEntryRequest $request DeleteNetworkAclEntryRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNetworkAclEntryResponse DeleteNetworkAclEntryResponse
     */
    public function deleteNetworkAclEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->networkAclEntryId)) {
            $query['NetworkAclEntryId'] = $request->networkAclEntryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteNetworkAclEntry',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNetworkAclEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a network access control list (ACL) rule.
     *  *
     * @param DeleteNetworkAclEntryRequest $request DeleteNetworkAclEntryRequest
     *
     * @return DeleteNetworkAclEntryResponse DeleteNetworkAclEntryResponse
     */
    public function deleteNetworkAclEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNetworkAclEntryWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an object.
     *  *
     * @param DeleteObjectRequest $request DeleteObjectRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteObjectResponse DeleteObjectResponse
     */
    public function deleteObjectWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucketName)) {
            $query['BucketName'] = $request->bucketName;
        }
        if (!Utils::isUnset($request->objectKey)) {
            $query['ObjectKey'] = $request->objectKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteObject',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteObjectResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an object.
     *  *
     * @param DeleteObjectRequest $request DeleteObjectRequest
     *
     * @return DeleteObjectResponse DeleteObjectResponse
     */
    public function deleteObject($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteObjectWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a shared data group (SDG).
     *  *
     * @description ## [](#)
     * If all the SDGs corresponding to the original disk are deleted, the original disk is automatically cleared.
     *  *
     * @param DeleteSDGRequest $tmpReq  DeleteSDGRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSDGResponse DeleteSDGResponse
     */
    public function deleteSDGWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteSDGShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->SDGId)) {
            $request->SDGIdShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->SDGId, 'SDGId', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSDG',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSDGResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a shared data group (SDG).
     *  *
     * @description ## [](#)
     * If all the SDGs corresponding to the original disk are deleted, the original disk is automatically cleared.
     *  *
     * @param DeleteSDGRequest $request DeleteSDGRequest
     *
     * @return DeleteSDGResponse DeleteSDGResponse
     */
    public function deleteSDG($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSDGWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a security group.
     *  *
     * @description Before you delete a security group, make sure that no instances exist in the security group.
     *  *
     * @param DeleteSecurityGroupRequest $request DeleteSecurityGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSecurityGroupResponse DeleteSecurityGroupResponse
     */
    public function deleteSecurityGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSecurityGroup',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSecurityGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a security group.
     *  *
     * @description Before you delete a security group, make sure that no instances exist in the security group.
     *  *
     * @param DeleteSecurityGroupRequest $request DeleteSecurityGroupRequest
     *
     * @return DeleteSecurityGroupResponse DeleteSecurityGroupResponse
     */
    public function deleteSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a snapshot.
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
        if (!Utils::isUnset($request->snapshotId)) {
            $query['SnapshotId'] = $request->snapshotId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSnapshot',
            'version'     => '2017-11-10',
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
     * @summary Deletes a snapshot.
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
     * @summary Deletes a source network address translation (SNAT) entry from a specified SNAT table.
     *  *
     * @param DeleteSnatEntryRequest $request DeleteSnatEntryRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSnatEntryResponse DeleteSnatEntryResponse
     */
    public function deleteSnatEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->snatEntryId)) {
            $query['SnatEntryId'] = $request->snatEntryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSnatEntry',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSnatEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a source network address translation (SNAT) entry from a specified SNAT table.
     *  *
     * @param DeleteSnatEntryRequest $request DeleteSnatEntryRequest
     *
     * @return DeleteSnatEntryResponse DeleteSnatEntryResponse
     */
    public function deleteSnatEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSnatEntryWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an elastic IP address (EIP) from a source network address translation (SNAT) entry.
     *  *
     * @param DeleteSnatIpForSnatEntryRequest $request DeleteSnatIpForSnatEntryRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteSnatIpForSnatEntryResponse DeleteSnatIpForSnatEntryResponse
     */
    public function deleteSnatIpForSnatEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->snatEntryId)) {
            $query['SnatEntryId'] = $request->snatEntryId;
        }
        if (!Utils::isUnset($request->snatIp)) {
            $query['SnatIp'] = $request->snatIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteSnatIpForSnatEntry',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSnatIpForSnatEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an elastic IP address (EIP) from a source network address translation (SNAT) entry.
     *  *
     * @param DeleteSnatIpForSnatEntryRequest $request DeleteSnatIpForSnatEntryRequest
     *
     * @return DeleteSnatIpForSnatEntryResponse DeleteSnatIpForSnatEntryResponse
     */
    public function deleteSnatIpForSnatEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSnatIpForSnatEntryWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a vSwitch.
     *  *
     * @description Before you delete a vSwitch, make sure that no instances exist in the vSwitch.
     *  *
     * @param DeleteVSwitchRequest $request DeleteVSwitchRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteVSwitchResponse DeleteVSwitchResponse
     */
    public function deleteVSwitchWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteVSwitch',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteVSwitchResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a vSwitch.
     *  *
     * @description Before you delete a vSwitch, make sure that no instances exist in the vSwitch.
     *  *
     * @param DeleteVSwitchRequest $request DeleteVSwitchRequest
     *
     * @return DeleteVSwitchResponse DeleteVSwitchResponse
     */
    public function deleteVSwitch($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteVSwitchWithOptions($request, $runtime);
    }

    /**
     * @summary Deploys shared data groups (SDGs).
     *  *
     * @param DeploySDGRequest $tmpReq  DeploySDGRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeploySDGResponse DeploySDGResponse
     */
    public function deploySDGWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeploySDGShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->instanceIds)) {
            $request->instanceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeploySDG',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeploySDGResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deploys shared data groups (SDGs).
     *  *
     * @param DeploySDGRequest $request DeploySDGRequest
     *
     * @return DeploySDGResponse DeploySDGResponse
     */
    public function deploySDG($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deploySDGWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about images of the Android in Container (AIC) instance.
     *  *
     * @param DescribeAICImagesRequest $request DescribeAICImagesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAICImagesResponse DescribeAICImagesResponse
     */
    public function describeAICImagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->imageType)) {
            $query['ImageType'] = $request->imageType;
        }
        if (!Utils::isUnset($request->imageUrl)) {
            $query['ImageUrl'] = $request->imageUrl;
        }
        if (!Utils::isUnset($request->maxDate)) {
            $query['MaxDate'] = $request->maxDate;
        }
        if (!Utils::isUnset($request->minDate)) {
            $query['MinDate'] = $request->minDate;
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
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAICImages',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAICImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries information about images of the Android in Container (AIC) instance.
     *  *
     * @param DescribeAICImagesRequest $request DescribeAICImagesRequest
     *
     * @return DescribeAICImagesResponse DescribeAICImagesResponse
     */
    public function describeAICImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAICImagesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about ARM servers and Android in Container (AIC) instances.
     *  *
     * @param DescribeARMServerInstancesRequest $tmpReq  DescribeARMServerInstancesRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeARMServerInstancesResponse DescribeARMServerInstancesResponse
     */
    public function describeARMServerInstancesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeARMServerInstancesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->AICSpecs)) {
            $request->AICSpecsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->AICSpecs, 'AICSpecs', 'json');
        }
        if (!Utils::isUnset($tmpReq->ensRegionIds)) {
            $request->ensRegionIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ensRegionIds, 'EnsRegionIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->serverIds)) {
            $request->serverIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->serverIds, 'ServerIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->serverSpecs)) {
            $request->serverSpecsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->serverSpecs, 'ServerSpecs', 'json');
        }
        if (!Utils::isUnset($tmpReq->states)) {
            $request->statesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->states, 'States', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeARMServerInstances',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeARMServerInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries information about ARM servers and Android in Container (AIC) instances.
     *  *
     * @param DescribeARMServerInstancesRequest $request DescribeARMServerInstancesRequest
     *
     * @return DescribeARMServerInstancesResponse DescribeARMServerInstancesResponse
     */
    public function describeARMServerInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeARMServerInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the basic properties, resources, and container status of an application.
     *  *
     * @param DescribeApplicationRequest $request DescribeApplicationRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApplicationResponse DescribeApplicationResponse
     */
    public function describeApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->appVersions)) {
            $query['AppVersions'] = $request->appVersions;
        }
        if (!Utils::isUnset($request->level)) {
            $query['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->outDetailStatParams)) {
            $query['OutDetailStatParams'] = $request->outDetailStatParams;
        }
        if (!Utils::isUnset($request->resourceSelector)) {
            $query['ResourceSelector'] = $request->resourceSelector;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApplication',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the basic properties, resources, and container status of an application.
     *  *
     * @param DescribeApplicationRequest $request DescribeApplicationRequest
     *
     * @return DescribeApplicationResponse DescribeApplicationResponse
     */
    public function describeApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the total quota of resources and the resource usage in different region levels. You can perform resource scale-out based on this information.
     *  *
     * @param DescribeApplicationResourceSummaryRequest $request DescribeApplicationResourceSummaryRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeApplicationResourceSummaryResponse DescribeApplicationResourceSummaryResponse
     */
    public function describeApplicationResourceSummaryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->level)) {
            $query['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeApplicationResourceSummary',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeApplicationResourceSummaryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the total quota of resources and the resource usage in different region levels. You can perform resource scale-out based on this information.
     *  *
     * @param DescribeApplicationResourceSummaryRequest $request DescribeApplicationResourceSummaryRequest
     *
     * @return DescribeApplicationResourceSummaryResponse DescribeApplicationResourceSummaryResponse
     */
    public function describeApplicationResourceSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApplicationResourceSummaryWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the resources that can be created.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAvailableResourceResponse DescribeAvailableResourceResponse
     */
    public function describeAvailableResourceWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeAvailableResource',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAvailableResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the resources that can be created.
     *  *
     * @return DescribeAvailableResourceResponse DescribeAvailableResourceResponse
     */
    public function describeAvailableResource()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableResourceWithOptions($runtime);
    }

    /**
     * @summary Queries the specifications of resources that you can purchase when you create an instance.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAvailableResourceInfoResponse DescribeAvailableResourceInfoResponse
     */
    public function describeAvailableResourceInfoWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeAvailableResourceInfo',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAvailableResourceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the specifications of resources that you can purchase when you create an instance.
     *  *
     * @return DescribeAvailableResourceInfoResponse DescribeAvailableResourceInfoResponse
     */
    public function describeAvailableResourceInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableResourceInfoWithOptions($runtime);
    }

    /**
     * @summary Queries available bandwidth metering methods.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBandWithdChargeTypeResponse DescribeBandWithdChargeTypeResponse
     */
    public function describeBandWithdChargeTypeWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeBandWithdChargeType',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBandWithdChargeTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries available bandwidth metering methods.
     *  *
     * @return DescribeBandWithdChargeTypeResponse DescribeBandWithdChargeTypeResponse
     */
    public function describeBandWithdChargeType()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBandWithdChargeTypeWithOptions($runtime);
    }

    /**
     * @summary Queries the metering method for the bandwidth.
     *  *
     * @param DescribeBandwitdhByInternetChargeTypeRequest $request DescribeBandwitdhByInternetChargeTypeRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeBandwitdhByInternetChargeTypeResponse DescribeBandwitdhByInternetChargeTypeResponse
     */
    public function describeBandwitdhByInternetChargeTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->isp)) {
            $query['Isp'] = $request->isp;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeBandwitdhByInternetChargeType',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeBandwitdhByInternetChargeTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the metering method for the bandwidth.
     *  *
     * @param DescribeBandwitdhByInternetChargeTypeRequest $request DescribeBandwitdhByInternetChargeTypeRequest
     *
     * @return DescribeBandwitdhByInternetChargeTypeResponse DescribeBandwitdhByInternetChargeTypeResponse
     */
    public function describeBandwitdhByInternetChargeType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBandwitdhByInternetChargeTypeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the available resources in a region.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCloudDiskAvailableResourceInfoResponse DescribeCloudDiskAvailableResourceInfoResponse
     */
    public function describeCloudDiskAvailableResourceInfoWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeCloudDiskAvailableResourceInfo',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCloudDiskAvailableResourceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the available resources in a region.
     *  *
     * @return DescribeCloudDiskAvailableResourceInfoResponse DescribeCloudDiskAvailableResourceInfoResponse
     */
    public function describeCloudDiskAvailableResourceInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudDiskAvailableResourceInfoWithOptions($runtime);
    }

    /**
     * @summary Queries the specifications of resources that you can purchase when you create an instance.
     *  *
     * @param DescribeCloudDiskTypesRequest $request DescribeCloudDiskTypesRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCloudDiskTypesResponse DescribeCloudDiskTypesResponse
     */
    public function describeCloudDiskTypesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCloudDiskTypes',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCloudDiskTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the specifications of resources that you can purchase when you create an instance.
     *  *
     * @param DescribeCloudDiskTypesRequest $request DescribeCloudDiskTypesRequest
     *
     * @return DescribeCloudDiskTypesResponse DescribeCloudDiskTypesResponse
     */
    public function describeCloudDiskTypes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudDiskTypesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the results of creating an instance.
     *  *
     * @param DescribeCreatePrePaidInstanceResultRequest $request DescribeCreatePrePaidInstanceResultRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCreatePrePaidInstanceResultResponse DescribeCreatePrePaidInstanceResultResponse
     */
    public function describeCreatePrePaidInstanceResultWithOptions($request, $runtime)
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
            'action'      => 'DescribeCreatePrePaidInstanceResult',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCreatePrePaidInstanceResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the results of creating an instance.
     *  *
     * @param DescribeCreatePrePaidInstanceResultRequest $request DescribeCreatePrePaidInstanceResultRequest
     *
     * @return DescribeCreatePrePaidInstanceResultResponse DescribeCreatePrePaidInstanceResultResponse
     */
    public function describeCreatePrePaidInstanceResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCreatePrePaidInstanceResultWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the distribution status of data files on edge instances of an application.
     *  *
     * @param DescribeDataDistResultRequest $tmpReq  DescribeDataDistResultRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDataDistResultResponse DescribeDataDistResultResponse
     */
    public function describeDataDistResultWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeDataDistResultShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->ensRegionIds)) {
            $request->ensRegionIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->ensRegionIds, 'EnsRegionIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->dataNames)) {
            $query['DataNames'] = $request->dataNames;
        }
        if (!Utils::isUnset($request->dataVersions)) {
            $query['DataVersions'] = $request->dataVersions;
        }
        if (!Utils::isUnset($request->ensRegionIdsShrink)) {
            $query['EnsRegionIds'] = $request->ensRegionIdsShrink;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->maxDate)) {
            $query['MaxDate'] = $request->maxDate;
        }
        if (!Utils::isUnset($request->minDate)) {
            $query['MinDate'] = $request->minDate;
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
            'action'      => 'DescribeDataDistResult',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDataDistResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the distribution status of data files on edge instances of an application.
     *  *
     * @param DescribeDataDistResultRequest $request DescribeDataDistResultRequest
     *
     * @return DescribeDataDistResultResponse DescribeDataDistResultResponse
     */
    public function describeDataDistResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataDistResultWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the download URLs of application data on file servers and returns the file servers on which data is pushed.
     *  *
     * @param DescribeDataDownloadURLRequest $request DescribeDataDownloadURLRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDataDownloadURLResponse DescribeDataDownloadURLResponse
     */
    public function describeDataDownloadURLWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDataDownloadURL',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDataDownloadURLResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the download URLs of application data on file servers and returns the file servers on which data is pushed.
     *  *
     * @param DescribeDataDownloadURLRequest $request DescribeDataDownloadURLRequest
     *
     * @return DescribeDataDownloadURLResponse DescribeDataDownloadURLResponse
     */
    public function describeDataDownloadURL($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataDownloadURLWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the push status of application data files on Edge Node Service (ENS) nodes.
     *  *
     * @param DescribeDataPushResultRequest $request DescribeDataPushResultRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDataPushResultResponse DescribeDataPushResultResponse
     */
    public function describeDataPushResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->dataNames)) {
            $query['DataNames'] = $request->dataNames;
        }
        if (!Utils::isUnset($request->dataVersions)) {
            $query['DataVersions'] = $request->dataVersions;
        }
        if (!Utils::isUnset($request->maxDate)) {
            $query['MaxDate'] = $request->maxDate;
        }
        if (!Utils::isUnset($request->minDate)) {
            $query['MinDate'] = $request->minDate;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->regionIds)) {
            $query['RegionIds'] = $request->regionIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDataPushResult',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDataPushResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the push status of application data files on Edge Node Service (ENS) nodes.
     *  *
     * @param DescribeDataPushResultRequest $request DescribeDataPushResultRequest
     *
     * @return DescribeDataPushResultResponse DescribeDataPushResultResponse
     */
    public function describeDataPushResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDataPushResultWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the properties of instances and virtual devices in a specific edge application.
     *  *
     * @param DescribeDeviceServiceRequest $request DescribeDeviceServiceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDeviceServiceResponse DescribeDeviceServiceResponse
     */
    public function describeDeviceServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeDeviceService',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDeviceServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the properties of instances and virtual devices in a specific edge application.
     *  *
     * @param DescribeDeviceServiceRequest $request DescribeDeviceServiceRequest
     *
     * @return DescribeDeviceServiceResponse DescribeDeviceServiceResponse
     */
    public function describeDeviceService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDeviceServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about one or more disks.
     *  *
     * @param DescribeDisksRequest $request DescribeDisksRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDisksResponse DescribeDisksResponse
     */
    public function describeDisksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->category)) {
            $query['Category'] = $request->category;
        }
        if (!Utils::isUnset($request->diskChargeType)) {
            $query['DiskChargeType'] = $request->diskChargeType;
        }
        if (!Utils::isUnset($request->diskId)) {
            $query['DiskId'] = $request->diskId;
        }
        if (!Utils::isUnset($request->diskIds)) {
            $query['DiskIds'] = $request->diskIds;
        }
        if (!Utils::isUnset($request->diskName)) {
            $query['DiskName'] = $request->diskName;
        }
        if (!Utils::isUnset($request->diskType)) {
            $query['DiskType'] = $request->diskType;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->ensRegionIds)) {
            $query['EnsRegionIds'] = $request->ensRegionIds;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->orderByParams)) {
            $query['OrderByParams'] = $request->orderByParams;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->snapshotId)) {
            $query['SnapshotId'] = $request->snapshotId;
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
            'action'      => 'DescribeDisks',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDisksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about one or more disks.
     *  *
     * @param DescribeDisksRequest $request DescribeDisksRequest
     *
     * @return DescribeDisksResponse DescribeDisksResponse
     */
    public function describeDisks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDisksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the properties of elastic IP addresses (EIPs).
     *  *
     * @param DescribeEipAddressesRequest $request DescribeEipAddressesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEipAddressesResponse DescribeEipAddressesResponse
     */
    public function describeEipAddressesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->eips)) {
            $query['Eips'] = $request->eips;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEipAddresses',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEipAddressesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the properties of elastic IP addresses (EIPs).
     *  *
     * @param DescribeEipAddressesRequest $request DescribeEipAddressesRequest
     *
     * @return DescribeEipAddressesResponse DescribeEipAddressesResponse
     */
    public function describeEipAddresses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEipAddressesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the specifications of resources that you can purchase when you create an instance.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeElbAvailableResourceInfoResponse DescribeElbAvailableResourceInfoResponse
     */
    public function describeElbAvailableResourceInfoWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeElbAvailableResourceInfo',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeElbAvailableResourceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the specifications of resources that you can purchase when you create an instance.
     *  *
     * @return DescribeElbAvailableResourceInfoResponse DescribeElbAvailableResourceInfoResponse
     */
    public function describeElbAvailableResourceInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeElbAvailableResourceInfoWithOptions($runtime);
    }

    /**
     * @summary 描述商品code
     *  *
     * @param DescribeEnsCommodityCodeRequest $request DescribeEnsCommodityCodeRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEnsCommodityCodeResponse DescribeEnsCommodityCodeResponse
     */
    public function describeEnsCommodityCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->commodityCode)) {
            $query['CommodityCode'] = $request->commodityCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEnsCommodityCode',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEnsCommodityCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 描述商品code
     *  *
     * @param DescribeEnsCommodityCodeRequest $request DescribeEnsCommodityCodeRequest
     *
     * @return DescribeEnsCommodityCodeResponse DescribeEnsCommodityCodeResponse
     */
    public function describeEnsCommodityCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsCommodityCodeWithOptions($request, $runtime);
    }

    /**
     * @summary 获取模块code
     *  *
     * @param DescribeEnsCommodityModuleCodeRequest $request DescribeEnsCommodityModuleCodeRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEnsCommodityModuleCodeResponse DescribeEnsCommodityModuleCodeResponse
     */
    public function describeEnsCommodityModuleCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->commodityCode)) {
            $query['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->moduleCode)) {
            $query['ModuleCode'] = $request->moduleCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEnsCommodityModuleCode',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEnsCommodityModuleCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取模块code
     *  *
     * @param DescribeEnsCommodityModuleCodeRequest $request DescribeEnsCommodityModuleCodeRequest
     *
     * @return DescribeEnsCommodityModuleCodeResponse DescribeEnsCommodityModuleCodeResponse
     */
    public function describeEnsCommodityModuleCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsCommodityModuleCodeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries elastic IP addresses (EIPs).
     *  *
     * @param DescribeEnsEipAddressesRequest $request DescribeEnsEipAddressesRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEnsEipAddressesResponse DescribeEnsEipAddressesResponse
     */
    public function describeEnsEipAddressesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allocationId)) {
            $query['AllocationId'] = $request->allocationId;
        }
        if (!Utils::isUnset($request->associatedInstanceId)) {
            $query['AssociatedInstanceId'] = $request->associatedInstanceId;
        }
        if (!Utils::isUnset($request->associatedInstanceType)) {
            $query['AssociatedInstanceType'] = $request->associatedInstanceType;
        }
        if (!Utils::isUnset($request->eipAddress)) {
            $query['EipAddress'] = $request->eipAddress;
        }
        if (!Utils::isUnset($request->eipName)) {
            $query['EipName'] = $request->eipName;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->standby)) {
            $query['Standby'] = $request->standby;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEnsEipAddresses',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEnsEipAddressesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries elastic IP addresses (EIPs).
     *  *
     * @param DescribeEnsEipAddressesRequest $request DescribeEnsEipAddressesRequest
     *
     * @return DescribeEnsEipAddressesResponse DescribeEnsEipAddressesResponse
     */
    public function describeEnsEipAddresses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsEipAddressesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries regions in which ENS resources can be created.
     *  *
     * @param DescribeEnsNetDistrictRequest $request DescribeEnsNetDistrictRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEnsNetDistrictResponse DescribeEnsNetDistrictResponse
     */
    public function describeEnsNetDistrictWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->netDistrictCode)) {
            $query['NetDistrictCode'] = $request->netDistrictCode;
        }
        if (!Utils::isUnset($request->netLevelCode)) {
            $query['NetLevelCode'] = $request->netLevelCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEnsNetDistrict',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEnsNetDistrictResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries regions in which ENS resources can be created.
     *  *
     * @param DescribeEnsNetDistrictRequest $request DescribeEnsNetDistrictRequest
     *
     * @return DescribeEnsNetDistrictResponse DescribeEnsNetDistrictResponse
     */
    public function describeEnsNetDistrict($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsNetDistrictWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the supported network levels.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEnsNetLevelResponse DescribeEnsNetLevelResponse
     */
    public function describeEnsNetLevelWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeEnsNetLevel',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEnsNetLevelResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the supported network levels.
     *  *
     * @return DescribeEnsNetLevelResponse DescribeEnsNetLevelResponse
     */
    public function describeEnsNetLevel()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsNetLevelWithOptions($runtime);
    }

    /**
     * @summary Queries the information about ISPs and number of ISPs in an area.
     *  *
     * @param DescribeEnsNetSaleDistrictRequest $request DescribeEnsNetSaleDistrictRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEnsNetSaleDistrictResponse DescribeEnsNetSaleDistrictResponse
     */
    public function describeEnsNetSaleDistrictWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->netDistrictCode)) {
            $query['NetDistrictCode'] = $request->netDistrictCode;
        }
        if (!Utils::isUnset($request->netLevelCode)) {
            $query['NetLevelCode'] = $request->netLevelCode;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEnsNetSaleDistrict',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEnsNetSaleDistrictResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about ISPs and number of ISPs in an area.
     *  *
     * @param DescribeEnsNetSaleDistrictRequest $request DescribeEnsNetSaleDistrictRequest
     *
     * @return DescribeEnsNetSaleDistrictResponse DescribeEnsNetSaleDistrictResponse
     */
    public function describeEnsNetSaleDistrict($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsNetSaleDistrictWithOptions($request, $runtime);
    }

    /**
     * @summary Queries whether an edge node supports IPv6.
     *  *
     * @param DescribeEnsRegionIdIpv6InfoRequest $request DescribeEnsRegionIdIpv6InfoRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEnsRegionIdIpv6InfoResponse DescribeEnsRegionIdIpv6InfoResponse
     */
    public function describeEnsRegionIdIpv6InfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEnsRegionIdIpv6Info',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEnsRegionIdIpv6InfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries whether an edge node supports IPv6.
     *  *
     * @param DescribeEnsRegionIdIpv6InfoRequest $request DescribeEnsRegionIdIpv6InfoRequest
     *
     * @return DescribeEnsRegionIdIpv6InfoResponse DescribeEnsRegionIdIpv6InfoResponse
     */
    public function describeEnsRegionIdIpv6Info($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsRegionIdIpv6InfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries node resources.
     *  *
     * @description ****
     *  *
     * @param DescribeEnsRegionIdResourceRequest $request DescribeEnsRegionIdResourceRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEnsRegionIdResourceResponse DescribeEnsRegionIdResourceResponse
     */
    public function describeEnsRegionIdResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->isp)) {
            $query['Isp'] = $request->isp;
        }
        if (!Utils::isUnset($request->orderByParams)) {
            $query['OrderByParams'] = $request->orderByParams;
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
            'action'      => 'DescribeEnsRegionIdResource',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEnsRegionIdResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries node resources.
     *  *
     * @description ****
     *  *
     * @param DescribeEnsRegionIdResourceRequest $request DescribeEnsRegionIdResourceRequest
     *
     * @return DescribeEnsRegionIdResourceResponse DescribeEnsRegionIdResourceResponse
     */
    public function describeEnsRegionIdResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsRegionIdResourceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the Edge Node Service (ENS) nodes that you can use.
     *  *
     * @param DescribeEnsRegionsRequest $request DescribeEnsRegionsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEnsRegionsResponse DescribeEnsRegionsResponse
     */
    public function describeEnsRegionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEnsRegions',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEnsRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the Edge Node Service (ENS) nodes that you can use.
     *  *
     * @param DescribeEnsRegionsRequest $request DescribeEnsRegionsRequest
     *
     * @return DescribeEnsRegionsResponse DescribeEnsRegionsResponse
     */
    public function describeEnsRegions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsRegionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the usage summary of ENS virtual machines (VMs), disks, and networks.
     *  *
     * @param DescribeEnsResourceUsageRequest $request DescribeEnsResourceUsageRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEnsResourceUsageResponse DescribeEnsResourceUsageResponse
     */
    public function describeEnsResourceUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEnsResourceUsage',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEnsResourceUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the usage summary of ENS virtual machines (VMs), disks, and networks.
     *  *
     * @param DescribeEnsResourceUsageRequest $request DescribeEnsResourceUsageRequest
     *
     * @return DescribeEnsResourceUsageResponse DescribeEnsResourceUsageResponse
     */
    public function describeEnsResourceUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsResourceUsageWithOptions($request, $runtime);
    }

    /**
     * @summary Queries route entries.
     *  *
     * @param DescribeEnsRouteEntryListRequest $request DescribeEnsRouteEntryListRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEnsRouteEntryListResponse DescribeEnsRouteEntryListResponse
     */
    public function describeEnsRouteEntryListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->destinationCidrBlock)) {
            $query['DestinationCidrBlock'] = $request->destinationCidrBlock;
        }
        if (!Utils::isUnset($request->nextHopId)) {
            $query['NextHopId'] = $request->nextHopId;
        }
        if (!Utils::isUnset($request->nextHopType)) {
            $query['NextHopType'] = $request->nextHopType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->routeEntryId)) {
            $query['RouteEntryId'] = $request->routeEntryId;
        }
        if (!Utils::isUnset($request->routeEntryName)) {
            $query['RouteEntryName'] = $request->routeEntryName;
        }
        if (!Utils::isUnset($request->routeEntryType)) {
            $query['RouteEntryType'] = $request->routeEntryType;
        }
        if (!Utils::isUnset($request->routeTableId)) {
            $query['RouteTableId'] = $request->routeTableId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEnsRouteEntryList',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEnsRouteEntryListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries route entries.
     *  *
     * @param DescribeEnsRouteEntryListRequest $request DescribeEnsRouteEntryListRequest
     *
     * @return DescribeEnsRouteEntryListResponse DescribeEnsRouteEntryListResponse
     */
    public function describeEnsRouteEntryList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsRouteEntryListWithOptions($request, $runtime);
    }

    /**
     * @summary 展示配置的售卖约束信息
     *  *
     * @param DescribeEnsSaleControlRequest $request DescribeEnsSaleControlRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEnsSaleControlResponse DescribeEnsSaleControlResponse
     */
    public function describeEnsSaleControlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUidAccount)) {
            $query['AliUidAccount'] = $request->aliUidAccount;
        }
        if (!Utils::isUnset($request->commodityCode)) {
            $query['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->customAccount)) {
            $query['CustomAccount'] = $request->customAccount;
        }
        if (!Utils::isUnset($request->moduleCode)) {
            $query['ModuleCode'] = $request->moduleCode;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEnsSaleControl',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEnsSaleControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 展示配置的售卖约束信息
     *  *
     * @param DescribeEnsSaleControlRequest $request DescribeEnsSaleControlRequest
     *
     * @return DescribeEnsSaleControlResponse DescribeEnsSaleControlResponse
     */
    public function describeEnsSaleControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsSaleControlWithOptions($request, $runtime);
    }

    /**
     * @summary 获取可用资源
     *  *
     * @param DescribeEnsSaleControlAvailableResourceRequest $request DescribeEnsSaleControlAvailableResourceRequest
     * @param RuntimeOptions                                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEnsSaleControlAvailableResourceResponse DescribeEnsSaleControlAvailableResourceResponse
     */
    public function describeEnsSaleControlAvailableResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->commodityCode)) {
            $query['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->customAccount)) {
            $query['CustomAccount'] = $request->customAccount;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEnsSaleControlAvailableResource',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEnsSaleControlAvailableResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取可用资源
     *  *
     * @param DescribeEnsSaleControlAvailableResourceRequest $request DescribeEnsSaleControlAvailableResourceRequest
     *
     * @return DescribeEnsSaleControlAvailableResourceResponse DescribeEnsSaleControlAvailableResourceResponse
     */
    public function describeEnsSaleControlAvailableResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsSaleControlAvailableResourceWithOptions($request, $runtime);
    }

    /**
     * @summary 获取售卖约束库存
     *  *
     * @param DescribeEnsSaleControlStockRequest $request DescribeEnsSaleControlStockRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEnsSaleControlStockResponse DescribeEnsSaleControlStockResponse
     */
    public function describeEnsSaleControlStockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUidAccount)) {
            $query['AliUidAccount'] = $request->aliUidAccount;
        }
        if (!Utils::isUnset($request->commodityCode)) {
            $query['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->customAccount)) {
            $query['CustomAccount'] = $request->customAccount;
        }
        if (!Utils::isUnset($request->moduleCode)) {
            $query['ModuleCode'] = $request->moduleCode;
        }
        if (!Utils::isUnset($request->orderType)) {
            $query['OrderType'] = $request->orderType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEnsSaleControlStock',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEnsSaleControlStockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取售卖约束库存
     *  *
     * @param DescribeEnsSaleControlStockRequest $request DescribeEnsSaleControlStockRequest
     *
     * @return DescribeEnsSaleControlStockResponse DescribeEnsSaleControlStockResponse
     */
    public function describeEnsSaleControlStock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsSaleControlStockWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the EPN bandwidth usage.
     *  *
     * @param DescribeEpnBandWidthDataRequest $request DescribeEpnBandWidthDataRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEpnBandWidthDataResponse DescribeEpnBandWidthDataResponse
     */
    public function describeEpnBandWidthDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->EPNInstanceId)) {
            $query['EPNInstanceId'] = $request->EPNInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->isp)) {
            $query['Isp'] = $request->isp;
        }
        if (!Utils::isUnset($request->networkingModel)) {
            $query['NetworkingModel'] = $request->networkingModel;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEpnBandWidthData',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEpnBandWidthDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the EPN bandwidth usage.
     *  *
     * @param DescribeEpnBandWidthDataRequest $request DescribeEpnBandWidthDataRequest
     *
     * @return DescribeEpnBandWidthDataResponse DescribeEpnBandWidthDataResponse
     */
    public function describeEpnBandWidthData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEpnBandWidthDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the metering method of the EPN bandwidth within a time period.
     *  *
     * @param DescribeEpnBandwitdhByInternetChargeTypeRequest $request DescribeEpnBandwitdhByInternetChargeTypeRequest
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEpnBandwitdhByInternetChargeTypeResponse DescribeEpnBandwitdhByInternetChargeTypeResponse
     */
    public function describeEpnBandwitdhByInternetChargeTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->isp)) {
            $query['Isp'] = $request->isp;
        }
        if (!Utils::isUnset($request->networkingModel)) {
            $query['NetworkingModel'] = $request->networkingModel;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEpnBandwitdhByInternetChargeType',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEpnBandwitdhByInternetChargeTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the metering method of the EPN bandwidth within a time period.
     *  *
     * @param DescribeEpnBandwitdhByInternetChargeTypeRequest $request DescribeEpnBandwitdhByInternetChargeTypeRequest
     *
     * @return DescribeEpnBandwitdhByInternetChargeTypeResponse DescribeEpnBandwitdhByInternetChargeTypeResponse
     */
    public function describeEpnBandwitdhByInternetChargeType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEpnBandwitdhByInternetChargeTypeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries networking information about an EPN instance.
     *  *
     * @description In internal networking mode, the value of Instances is empty in the response. In public networking mode, the value of VSwitches is empty in the response.
     *  *
     * @param DescribeEpnInstanceAttributeRequest $request DescribeEpnInstanceAttributeRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEpnInstanceAttributeResponse DescribeEpnInstanceAttributeResponse
     */
    public function describeEpnInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->EPNInstanceId)) {
            $query['EPNInstanceId'] = $request->EPNInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEpnInstanceAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEpnInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries networking information about an EPN instance.
     *  *
     * @description In internal networking mode, the value of Instances is empty in the response. In public networking mode, the value of VSwitches is empty in the response.
     *  *
     * @param DescribeEpnInstanceAttributeRequest $request DescribeEpnInstanceAttributeRequest
     *
     * @return DescribeEpnInstanceAttributeResponse DescribeEpnInstanceAttributeResponse
     */
    public function describeEpnInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEpnInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries EPN instances.
     *  *
     * @param DescribeEpnInstancesRequest $request DescribeEpnInstancesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEpnInstancesResponse DescribeEpnInstancesResponse
     */
    public function describeEpnInstancesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->EPNInstanceId)) {
            $query['EPNInstanceId'] = $request->EPNInstanceId;
        }
        if (!Utils::isUnset($request->EPNInstanceName)) {
            $query['EPNInstanceName'] = $request->EPNInstanceName;
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
            'action'      => 'DescribeEpnInstances',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEpnInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries EPN instances.
     *  *
     * @param DescribeEpnInstancesRequest $request DescribeEpnInstancesRequest
     *
     * @return DescribeEpnInstancesResponse DescribeEpnInstancesResponse
     */
    public function describeEpnInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEpnInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the metering data of the edge private network (EPN).
     *  *
     * @param DescribeEpnMeasurementDataRequest $request DescribeEpnMeasurementDataRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeEpnMeasurementDataResponse DescribeEpnMeasurementDataResponse
     */
    public function describeEpnMeasurementDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeEpnMeasurementData',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeEpnMeasurementDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the metering data of the edge private network (EPN).
     *  *
     * @param DescribeEpnMeasurementDataRequest $request DescribeEpnMeasurementDataRequest
     *
     * @return DescribeEpnMeasurementDataResponse DescribeEpnMeasurementDataResponse
     */
    public function describeEpnMeasurementData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEpnMeasurementDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the export result of an image.
     *  *
     * @description *   You can call this operation to query information about all custom images in your account. The information include the image properties, image export status, and the Object Storage Service (OSS) download links.
     * *   Empty strings are returned for images that are not exported.
     * *   The download links may become invalid if you delete objects in OSS.
     *  *
     * @param DescribeExportImageInfoRequest $request DescribeExportImageInfoRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeExportImageInfoResponse DescribeExportImageInfoResponse
     */
    public function describeExportImageInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->imageName)) {
            $query['ImageName'] = $request->imageName;
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
            'action'      => 'DescribeExportImageInfo',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExportImageInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the export result of an image.
     *  *
     * @description *   You can call this operation to query information about all custom images in your account. The information include the image properties, image export status, and the Object Storage Service (OSS) download links.
     * *   Empty strings are returned for images that are not exported.
     * *   The download links may become invalid if you delete objects in OSS.
     *  *
     * @param DescribeExportImageInfoRequest $request DescribeExportImageInfoRequest
     *
     * @return DescribeExportImageInfoResponse DescribeExportImageInfoResponse
     */
    public function describeExportImageInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExportImageInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the export status of an image.
     *  *
     * @param DescribeExportImageStatusRequest $request DescribeExportImageStatusRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeExportImageStatusResponse DescribeExportImageStatusResponse
     */
    public function describeExportImageStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeExportImageStatus',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeExportImageStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the export status of an image.
     *  *
     * @param DescribeExportImageStatusRequest $request DescribeExportImageStatusRequest
     *
     * @return DescribeExportImageStatusResponse DescribeExportImageStatusResponse
     */
    public function describeExportImageStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeExportImageStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about file systems.
     *  *
     * @param DescribeFileSystemsRequest $request DescribeFileSystemsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeFileSystemsResponse DescribeFileSystemsResponse
     */
    public function describeFileSystemsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeFileSystems',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeFileSystemsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about file systems.
     *  *
     * @param DescribeFileSystemsRequest $request DescribeFileSystemsRequest
     *
     * @return DescribeFileSystemsResponse DescribeFileSystemsResponse
     */
    public function describeFileSystems($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeFileSystemsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries Destination Network Address Translation (DNAT) entries that you created.
     *  *
     * @param DescribeForwardTableEntriesRequest $request DescribeForwardTableEntriesRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeForwardTableEntriesResponse DescribeForwardTableEntriesResponse
     */
    public function describeForwardTableEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->externalIp)) {
            $query['ExternalIp'] = $request->externalIp;
        }
        if (!Utils::isUnset($request->forwardEntryId)) {
            $query['ForwardEntryId'] = $request->forwardEntryId;
        }
        if (!Utils::isUnset($request->forwardEntryName)) {
            $query['ForwardEntryName'] = $request->forwardEntryName;
        }
        if (!Utils::isUnset($request->internalIp)) {
            $query['InternalIp'] = $request->internalIp;
        }
        if (!Utils::isUnset($request->ipProtocol)) {
            $query['IpProtocol'] = $request->ipProtocol;
        }
        if (!Utils::isUnset($request->natGatewayId)) {
            $query['NatGatewayId'] = $request->natGatewayId;
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
            'action'      => 'DescribeForwardTableEntries',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeForwardTableEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries Destination Network Address Translation (DNAT) entries that you created.
     *  *
     * @param DescribeForwardTableEntriesRequest $request DescribeForwardTableEntriesRequest
     *
     * @return DescribeForwardTableEntriesResponse DescribeForwardTableEntriesResponse
     */
    public function describeForwardTableEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeForwardTableEntriesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries available images.
     *  *
     * @param DescribeImageInfosRequest $request DescribeImageInfosRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeImageInfosResponse DescribeImageInfosResponse
     */
    public function describeImageInfosWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->osType)) {
            $query['OsType'] = $request->osType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeImageInfos',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageInfosResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries available images.
     *  *
     * @param DescribeImageInfosRequest $request DescribeImageInfosRequest
     *
     * @return DescribeImageInfosResponse DescribeImageInfosResponse
     */
    public function describeImageInfos($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageInfosWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the accounts with which you share an image specified by the ImageId parameter.
     *  *
     * @param DescribeImageSharePermissionRequest $request DescribeImageSharePermissionRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeImageSharePermissionResponse DescribeImageSharePermissionResponse
     */
    public function describeImageSharePermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliyunId)) {
            $query['AliyunId'] = $request->aliyunId;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
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
            'action'      => 'DescribeImageSharePermission',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeImageSharePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the accounts with which you share an image specified by the ImageId parameter.
     *  *
     * @param DescribeImageSharePermissionRequest $request DescribeImageSharePermissionRequest
     *
     * @return DescribeImageSharePermissionResponse DescribeImageSharePermissionResponse
     */
    public function describeImageSharePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeImageSharePermissionWithOptions($request, $runtime);
    }

    /**
     * @summary Queries available images.
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
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->imageName)) {
            $query['ImageName'] = $request->imageName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->snapshotId)) {
            $query['SnapshotId'] = $request->snapshotId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeImages',
            'version'     => '2017-11-10',
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
     * @summary Queries available images.
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
     * @summary You can call this operation to query whether auto-renewal is enabled for an instance.
     *  *
     * @param DescribeInstanceAutoRenewAttributeRequest $request DescribeInstanceAutoRenewAttributeRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceAutoRenewAttributeResponse DescribeInstanceAutoRenewAttributeResponse
     */
    public function describeInstanceAutoRenewAttributeWithOptions($request, $runtime)
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
            'action'      => 'DescribeInstanceAutoRenewAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceAutoRenewAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call this operation to query whether auto-renewal is enabled for an instance.
     *  *
     * @param DescribeInstanceAutoRenewAttributeRequest $request DescribeInstanceAutoRenewAttributeRequest
     *
     * @return DescribeInstanceAutoRenewAttributeResponse DescribeInstanceAutoRenewAttributeResponse
     */
    public function describeInstanceAutoRenewAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceAutoRenewAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the vCPU and memory usage of an instance.
     *  *
     * @param DescribeInstanceMonitorDataRequest $request DescribeInstanceMonitorDataRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceMonitorDataResponse DescribeInstanceMonitorDataResponse
     */
    public function describeInstanceMonitorDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceMonitorData',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceMonitorDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the vCPU and memory usage of an instance.
     *  *
     * @param DescribeInstanceMonitorDataRequest $request DescribeInstanceMonitorDataRequest
     *
     * @return DescribeInstanceMonitorDataResponse DescribeInstanceMonitorDataResponse
     */
    public function describeInstanceMonitorData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceMonitorDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the instance specifications that you can purchase.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceSpecResponse DescribeInstanceSpecResponse
     */
    public function describeInstanceSpecWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeInstanceSpec',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the instance specifications that you can purchase.
     *  *
     * @return DescribeInstanceSpecResponse DescribeInstanceSpecResponse
     */
    public function describeInstanceSpec()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceSpecWithOptions($runtime);
    }

    /**
     * @summary Queries the specifications of instance types.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceTypesResponse DescribeInstanceTypesResponse
     */
    public function describeInstanceTypesWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeInstanceTypes',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceTypesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the specifications of instance types.
     *  *
     * @return DescribeInstanceTypesResponse DescribeInstanceTypesResponse
     */
    public function describeInstanceTypes()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceTypesWithOptions($runtime);
    }

    /**
     * @summary Queries the Virtual Network Computing (VNC) URL of an Edge Node Service (ENS) instance.
     *  *
     * @param DescribeInstanceVncUrlRequest $request DescribeInstanceVncUrlRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceVncUrlResponse DescribeInstanceVncUrlResponse
     */
    public function describeInstanceVncUrlWithOptions($request, $runtime)
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
            'action'      => 'DescribeInstanceVncUrl',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceVncUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the Virtual Network Computing (VNC) URL of an Edge Node Service (ENS) instance.
     *  *
     * @param DescribeInstanceVncUrlRequest $request DescribeInstanceVncUrlRequest
     *
     * @return DescribeInstanceVncUrlResponse DescribeInstanceVncUrlResponse
     */
    public function describeInstanceVncUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceVncUrlWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of one or more Edge Node Service (ENS) instances.
     *  *
     * @description *   You can call this operation up to 800 times per second per account.
     * *   You can call this operation up to 100 times per second per user.
     * *   You can specify multiple request parameters to be queried. Specified parameters are evaluated by using the AND operator. Only the specified parameters are included in the filter conditions. However, if InstanceIds is set to an empty JSON array, it is regarded as a valid filter condition and an empty result is returned.
     *  *
     * @param DescribeInstancesRequest $tmpReq  DescribeInstancesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstancesResponse DescribeInstancesResponse
     */
    public function describeInstancesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeInstancesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->ensRegionIds)) {
            $query['EnsRegionIds'] = $request->ensRegionIds;
        }
        if (!Utils::isUnset($request->ensServiceId)) {
            $query['EnsServiceId'] = $request->ensServiceId;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->instanceResourceType)) {
            $query['InstanceResourceType'] = $request->instanceResourceType;
        }
        if (!Utils::isUnset($request->intranetIp)) {
            $query['IntranetIp'] = $request->intranetIp;
        }
        if (!Utils::isUnset($request->networkId)) {
            $query['NetworkId'] = $request->networkId;
        }
        if (!Utils::isUnset($request->orderByParams)) {
            $query['OrderByParams'] = $request->orderByParams;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->searchKey)) {
            $query['SearchKey'] = $request->searchKey;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstances',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of one or more Edge Node Service (ENS) instances.
     *  *
     * @description *   You can call this operation up to 800 times per second per account.
     * *   You can call this operation up to 100 times per second per user.
     * *   You can specify multiple request parameters to be queried. Specified parameters are evaluated by using the AND operator. Only the specified parameters are included in the filter conditions. However, if InstanceIds is set to an empty JSON array, it is regarded as a valid filter condition and an empty result is returned.
     *  *
     * @param DescribeInstancesRequest $request DescribeInstancesRequest
     *
     * @return DescribeInstancesResponse DescribeInstancesResponse
     */
    public function describeInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries one or more key pairs.
     *  *
     * @param DescribeKeyPairsRequest $request DescribeKeyPairsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeKeyPairsResponse DescribeKeyPairsResponse
     */
    public function describeKeyPairsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyPairId)) {
            $query['KeyPairId'] = $request->keyPairId;
        }
        if (!Utils::isUnset($request->keyPairName)) {
            $query['KeyPairName'] = $request->keyPairName;
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
            'action'      => 'DescribeKeyPairs',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeKeyPairsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries one or more key pairs.
     *  *
     * @param DescribeKeyPairsRequest $request DescribeKeyPairsRequest
     *
     * @return DescribeKeyPairsResponse DescribeKeyPairsResponse
     */
    public function describeKeyPairs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeKeyPairsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries detailed information about an Edge Load Balancer (ELB) instance.
     *  *
     * @description >
     * *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *  *
     * @param DescribeLoadBalancerAttributeRequest $request DescribeLoadBalancerAttributeRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLoadBalancerAttributeResponse DescribeLoadBalancerAttributeResponse
     */
    public function describeLoadBalancerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLoadBalancerAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLoadBalancerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries detailed information about an Edge Load Balancer (ELB) instance.
     *  *
     * @description >
     * *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *  *
     * @param DescribeLoadBalancerAttributeRequest $request DescribeLoadBalancerAttributeRequest
     *
     * @return DescribeLoadBalancerAttributeResponse DescribeLoadBalancerAttributeResponse
     */
    public function describeLoadBalancerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancerAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configuration of an HTTP listener.
     *  *
     * @description >
     * *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *  *
     * @param DescribeLoadBalancerHTTPListenerAttributeRequest $request DescribeLoadBalancerHTTPListenerAttributeRequest
     * @param RuntimeOptions                                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLoadBalancerHTTPListenerAttributeResponse DescribeLoadBalancerHTTPListenerAttributeResponse
     */
    public function describeLoadBalancerHTTPListenerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLoadBalancerHTTPListenerAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLoadBalancerHTTPListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the configuration of an HTTP listener.
     *  *
     * @description >
     * *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *  *
     * @param DescribeLoadBalancerHTTPListenerAttributeRequest $request DescribeLoadBalancerHTTPListenerAttributeRequest
     *
     * @return DescribeLoadBalancerHTTPListenerAttributeResponse DescribeLoadBalancerHTTPListenerAttributeResponse
     */
    public function describeLoadBalancerHTTPListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancerHTTPListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configurations of an HTTPS listener.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *  *
     * @param DescribeLoadBalancerHTTPSListenerAttributeRequest $request DescribeLoadBalancerHTTPSListenerAttributeRequest
     * @param RuntimeOptions                                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLoadBalancerHTTPSListenerAttributeResponse DescribeLoadBalancerHTTPSListenerAttributeResponse
     */
    public function describeLoadBalancerHTTPSListenerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLoadBalancerHTTPSListenerAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLoadBalancerHTTPSListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the configurations of an HTTPS listener.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *  *
     * @param DescribeLoadBalancerHTTPSListenerAttributeRequest $request DescribeLoadBalancerHTTPSListenerAttributeRequest
     *
     * @return DescribeLoadBalancerHTTPSListenerAttributeResponse DescribeLoadBalancerHTTPSListenerAttributeResponse
     */
    public function describeLoadBalancerHTTPSListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancerHTTPSListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the specifications of an Edge Load Balancer (ELB) instance.
     *  *
     * @param DescribeLoadBalancerSpecRequest $request DescribeLoadBalancerSpecRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLoadBalancerSpecResponse DescribeLoadBalancerSpecResponse
     */
    public function describeLoadBalancerSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLoadBalancerSpec',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLoadBalancerSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the specifications of an Edge Load Balancer (ELB) instance.
     *  *
     * @param DescribeLoadBalancerSpecRequest $request DescribeLoadBalancerSpecRequest
     *
     * @return DescribeLoadBalancerSpecResponse DescribeLoadBalancerSpecResponse
     */
    public function describeLoadBalancerSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancerSpecWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configurations of a Transmission Control Protocol (TCP) listener.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *  *
     * @param DescribeLoadBalancerTCPListenerAttributeRequest $request DescribeLoadBalancerTCPListenerAttributeRequest
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLoadBalancerTCPListenerAttributeResponse DescribeLoadBalancerTCPListenerAttributeResponse
     */
    public function describeLoadBalancerTCPListenerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLoadBalancerTCPListenerAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLoadBalancerTCPListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the configurations of a Transmission Control Protocol (TCP) listener.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *  *
     * @param DescribeLoadBalancerTCPListenerAttributeRequest $request DescribeLoadBalancerTCPListenerAttributeRequest
     *
     * @return DescribeLoadBalancerTCPListenerAttributeResponse DescribeLoadBalancerTCPListenerAttributeResponse
     */
    public function describeLoadBalancerTCPListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancerTCPListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configuration of a User Datagram Protocol (UDP) listener.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *  *
     * @param DescribeLoadBalancerUDPListenerAttributeRequest $request DescribeLoadBalancerUDPListenerAttributeRequest
     * @param RuntimeOptions                                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLoadBalancerUDPListenerAttributeResponse DescribeLoadBalancerUDPListenerAttributeResponse
     */
    public function describeLoadBalancerUDPListenerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLoadBalancerUDPListenerAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLoadBalancerUDPListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the configuration of a User Datagram Protocol (UDP) listener.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *  *
     * @param DescribeLoadBalancerUDPListenerAttributeRequest $request DescribeLoadBalancerUDPListenerAttributeRequest
     *
     * @return DescribeLoadBalancerUDPListenerAttributeResponse DescribeLoadBalancerUDPListenerAttributeResponse
     */
    public function describeLoadBalancerUDPListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancerUDPListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries Edge Load Balancer (ELB) instances.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *  *
     * @param DescribeLoadBalancersRequest $request DescribeLoadBalancersRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeLoadBalancersResponse DescribeLoadBalancersResponse
     */
    public function describeLoadBalancersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeLoadBalancers',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeLoadBalancersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries Edge Load Balancer (ELB) instances.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *  *
     * @param DescribeLoadBalancersRequest $request DescribeLoadBalancersRequest
     *
     * @return DescribeLoadBalancersResponse DescribeLoadBalancersResponse
     */
    public function describeLoadBalancers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeLoadBalancersWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the metering data of the user.
     *  *
     * @param DescribeMeasurementDataRequest $request DescribeMeasurementDataRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMeasurementDataResponse DescribeMeasurementDataResponse
     */
    public function describeMeasurementDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeMeasurementData',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMeasurementDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the metering data of the user.
     *  *
     * @param DescribeMeasurementDataRequest $request DescribeMeasurementDataRequest
     *
     * @return DescribeMeasurementDataResponse DescribeMeasurementDataResponse
     */
    public function describeMeasurementData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMeasurementDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about mount targets.
     *  *
     * @param DescribeMountTargetsRequest $request DescribeMountTargetsRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeMountTargetsResponse DescribeMountTargetsResponse
     */
    public function describeMountTargetsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->mountTargetName)) {
            $query['MountTargetName'] = $request->mountTargetName;
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
            'action'      => 'DescribeMountTargets',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeMountTargetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about mount targets.
     *  *
     * @param DescribeMountTargetsRequest $request DescribeMountTargetsRequest
     *
     * @return DescribeMountTargetsResponse DescribeMountTargetsResponse
     */
    public function describeMountTargets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeMountTargetsWithOptions($request, $runtime);
    }

    /**
     * @summary 根据筛选条件获取指定NC属性和资源量信息
     *  *
     * @param DescribeNCInformationRequest $request DescribeNCInformationRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNCInformationResponse DescribeNCInformationResponse
     */
    public function describeNCInformationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNCInformation',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNCInformationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 根据筛选条件获取指定NC属性和资源量信息
     *  *
     * @param DescribeNCInformationRequest $request DescribeNCInformationRequest
     *
     * @return DescribeNCInformationResponse DescribeNCInformationResponse
     */
    public function describeNCInformation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNCInformationWithOptions($request, $runtime);
    }

    /**
     * @summary Queries created Network Address Translation (NAT) gateways.
     *  *
     * @param DescribeNatGatewaysRequest $request DescribeNatGatewaysRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNatGatewaysResponse DescribeNatGatewaysResponse
     */
    public function describeNatGatewaysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNatGateways',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNatGatewaysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries created Network Address Translation (NAT) gateways.
     *  *
     * @param DescribeNatGatewaysRequest $request DescribeNatGatewaysRequest
     *
     * @return DescribeNatGatewaysResponse DescribeNatGatewaysResponse
     */
    public function describeNatGateways($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNatGatewaysWithOptions($request, $runtime);
    }

    /**
     * @summary Queries network access control lists (ACLs).
     *  *
     * @param DescribeNetworkAclsRequest $request DescribeNetworkAclsRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNetworkAclsResponse DescribeNetworkAclsResponse
     */
    public function describeNetworkAclsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNetworkAcls',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNetworkAclsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries network access control lists (ACLs).
     *  *
     * @param DescribeNetworkAclsRequest $request DescribeNetworkAclsRequest
     *
     * @return DescribeNetworkAclsResponse DescribeNetworkAclsResponse
     */
    public function describeNetworkAcls($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworkAclsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configuration of a specified network.
     *  *
     * @description *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 10 times per second per account.
     *  *
     * @param DescribeNetworkAttributeRequest $request DescribeNetworkAttributeRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNetworkAttributeResponse DescribeNetworkAttributeResponse
     */
    public function describeNetworkAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->networkId)) {
            $query['NetworkId'] = $request->networkId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNetworkAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNetworkAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the configuration of a specified network.
     *  *
     * @description *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 10 times per second per account.
     *  *
     * @param DescribeNetworkAttributeRequest $request DescribeNetworkAttributeRequest
     *
     * @return DescribeNetworkAttributeResponse DescribeNetworkAttributeResponse
     */
    public function describeNetworkAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworkAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries Elastic Network Interfaces (ENIs).
     *  *
     * @param DescribeNetworkInterfacesRequest $request DescribeNetworkInterfacesRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNetworkInterfacesResponse DescribeNetworkInterfacesResponse
     */
    public function describeNetworkInterfacesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->networkId)) {
            $query['NetworkId'] = $request->networkId;
        }
        if (!Utils::isUnset($request->networkInterfaceId)) {
            $query['NetworkInterfaceId'] = $request->networkInterfaceId;
        }
        if (!Utils::isUnset($request->networkInterfaceName)) {
            $query['NetworkInterfaceName'] = $request->networkInterfaceName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->primaryIpAddress)) {
            $query['PrimaryIpAddress'] = $request->primaryIpAddress;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNetworkInterfaces',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNetworkInterfacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries Elastic Network Interfaces (ENIs).
     *  *
     * @param DescribeNetworkInterfacesRequest $request DescribeNetworkInterfacesRequest
     *
     * @return DescribeNetworkInterfacesResponse DescribeNetworkInterfacesResponse
     */
    public function describeNetworkInterfaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworkInterfacesWithOptions($request, $runtime);
    }

    /**
     * @summary Query the network list.
     *  *
     * @description *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 10 times per second per account.
     *  *
     * @param DescribeNetworksRequest $request DescribeNetworksRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNetworksResponse DescribeNetworksResponse
     */
    public function describeNetworksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->networkId)) {
            $query['NetworkId'] = $request->networkId;
        }
        if (!Utils::isUnset($request->networkName)) {
            $query['NetworkName'] = $request->networkName;
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
            'action'      => 'DescribeNetworks',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNetworksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Query the network list.
     *  *
     * @description *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 10 times per second per account.
     *  *
     * @param DescribeNetworksRequest $request DescribeNetworksRequest
     *
     * @return DescribeNetworksResponse DescribeNetworksResponse
     */
    public function describeNetworks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNetworksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the specifications of resources that you can purchase.
     *  *
     * @param DescribePrePaidInstanceStockRequest $request DescribePrePaidInstanceStockRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePrePaidInstanceStockResponse DescribePrePaidInstanceStockResponse
     */
    public function describePrePaidInstanceStockWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataDiskSize)) {
            $query['DataDiskSize'] = $request->dataDiskSize;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->instanceSpec)) {
            $query['InstanceSpec'] = $request->instanceSpec;
        }
        if (!Utils::isUnset($request->systemDiskSize)) {
            $query['SystemDiskSize'] = $request->systemDiskSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePrePaidInstanceStock',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribePrePaidInstanceStockResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the specifications of resources that you can purchase.
     *  *
     * @param DescribePrePaidInstanceStockRequest $request DescribePrePaidInstanceStockRequest
     *
     * @return DescribePrePaidInstanceStockResponse DescribePrePaidInstanceStockResponse
     */
    public function describePrePaidInstanceStock($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describePrePaidInstanceStockWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the most recent price of an Edge Node Service (ENS) instance.
     *  *
     * @param DescribePriceRequest $tmpReq  DescribePriceRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribePriceResponse DescribePriceResponse
     */
    public function describePriceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribePriceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->dataDisks)) {
            $request->dataDisksShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->dataDisks, 'DataDisks', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->dataDisksShrink)) {
            $query['DataDisks'] = $request->dataDisksShrink;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->internetChargeType)) {
            $query['InternetChargeType'] = $request->internetChargeType;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->quantity)) {
            $query['Quantity'] = $request->quantity;
        }
        if (!Utils::isUnset($request->dataDisk)) {
            $query['DataDisk'] = $request->dataDisk;
        }
        if (!Utils::isUnset($request->systemDisk)) {
            $query['SystemDisk'] = $request->systemDisk;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribePrice',
            'version'     => '2017-11-10',
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
     * @summary Queries the most recent price of an Edge Node Service (ENS) instance.
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
     * @summary Queries information about the Internet service providers (ISPs) of edge nodes.
     *  *
     * @param DescribeRegionIspsRequest $request DescribeRegionIspsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionIspsResponse DescribeRegionIspsResponse
     */
    public function describeRegionIspsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegionIsps',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionIspsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries information about the Internet service providers (ISPs) of edge nodes.
     *  *
     * @param DescribeRegionIspsRequest $request DescribeRegionIspsRequest
     *
     * @return DescribeRegionIspsResponse DescribeRegionIspsResponse
     */
    public function describeRegionIsps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionIspsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取区域节点资源量信息
     *  *
     * @param DescribeRegionResourceRequest $request DescribeRegionResourceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeRegionResourceResponse DescribeRegionResourceResponse
     */
    public function describeRegionResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeRegionResource',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeRegionResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取区域节点资源量信息
     *  *
     * @param DescribeRegionResourceRequest $request DescribeRegionResourceRequest
     *
     * @return DescribeRegionResourceResponse DescribeRegionResourceResponse
     */
    public function describeRegionResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeRegionResourceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the specifications of resources that you can purchase.
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeReservedResourceResponse DescribeReservedResourceResponse
     */
    public function describeReservedResourceWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeReservedResource',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeReservedResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the specifications of resources that you can purchase.
     *  *
     * @return DescribeReservedResourceResponse DescribeReservedResourceResponse
     */
    public function describeReservedResource()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeReservedResourceWithOptions($runtime);
    }

    /**
     * @summary 获取资源状态变化时间线
     *  *
     * @param DescribeResourceTimelineRequest $request DescribeResourceTimelineRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeResourceTimelineResponse DescribeResourceTimelineResponse
     */
    public function describeResourceTimelineWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeResourceTimeline',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeResourceTimelineResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取资源状态变化时间线
     *  *
     * @param DescribeResourceTimelineRequest $request DescribeResourceTimelineRequest
     *
     * @return DescribeResourceTimelineResponse DescribeResourceTimelineResponse
     */
    public function describeResourceTimeline($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeResourceTimelineWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the deployment status of the shared data group (SDG).
     *  *
     * @param DescribeSDGDeploymentStatusRequest $request DescribeSDGDeploymentStatusRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSDGDeploymentStatusResponse DescribeSDGDeploymentStatusResponse
     */
    public function describeSDGDeploymentStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSDGDeploymentStatus',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSDGDeploymentStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the deployment status of the shared data group (SDG).
     *  *
     * @param DescribeSDGDeploymentStatusRequest $request DescribeSDGDeploymentStatusRequest
     *
     * @return DescribeSDGDeploymentStatusResponse DescribeSDGDeploymentStatusResponse
     */
    public function describeSDGDeploymentStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSDGDeploymentStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about created shared data groups (SDGs).
     *  *
     * @param DescribeSDGsRequest $tmpReq  DescribeSDGsRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSDGsResponse DescribeSDGsResponse
     */
    public function describeSDGsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeSDGsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->instanceIds)) {
            $request->instanceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->SDGIds)) {
            $request->SDGIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->SDGIds, 'SDGIds', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSDGs',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSDGsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries information about created shared data groups (SDGs).
     *  *
     * @param DescribeSDGsRequest $request DescribeSDGsRequest
     *
     * @return DescribeSDGsResponse DescribeSDGsResponse
     */
    public function describeSDGs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSDGsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the rules of a security group.
     *  *
     * @param DescribeSecurityGroupAttributeRequest $request DescribeSecurityGroupAttributeRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSecurityGroupAttributeResponse DescribeSecurityGroupAttributeResponse
     */
    public function describeSecurityGroupAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSecurityGroupAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSecurityGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the rules of a security group.
     *  *
     * @param DescribeSecurityGroupAttributeRequest $request DescribeSecurityGroupAttributeRequest
     *
     * @return DescribeSecurityGroupAttributeResponse DescribeSecurityGroupAttributeResponse
     */
    public function describeSecurityGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries details about created security groups.
     *  *
     * @param DescribeSecurityGroupsRequest $request DescribeSecurityGroupsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSecurityGroupsResponse DescribeSecurityGroupsResponse
     */
    public function describeSecurityGroupsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->securityGroupName)) {
            $query['SecurityGroupName'] = $request->securityGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSecurityGroups',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSecurityGroupsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries details about created security groups.
     *  *
     * @param DescribeSecurityGroupsRequest $request DescribeSecurityGroupsRequest
     *
     * @return DescribeSecurityGroupsResponse DescribeSecurityGroupsResponse
     */
    public function describeSecurityGroups($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityGroupsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries custom images.
     *  *
     * @param DescribeSelfImagesRequest $request DescribeSelfImagesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSelfImagesResponse DescribeSelfImagesResponse
     */
    public function describeSelfImagesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->imageName)) {
            $query['ImageName'] = $request->imageName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->snapshotId)) {
            $query['SnapshotId'] = $request->snapshotId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSelfImages',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSelfImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries custom images.
     *  *
     * @param DescribeSelfImagesRequest $request DescribeSelfImagesRequest
     *
     * @return DescribeSelfImagesResponse DescribeSelfImagesResponse
     */
    public function describeSelfImages($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSelfImagesWithOptions($request, $runtime);
    }

    /**
     * @summary You can call the DescribeServcieSchedule to query the real-time status of the instance device or container that is being occupied by the UUID.
     *  *
     * @param DescribeServcieScheduleRequest $request DescribeServcieScheduleRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeServcieScheduleResponse DescribeServcieScheduleResponse
     */
    public function describeServcieScheduleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->podConfigName)) {
            $query['PodConfigName'] = $request->podConfigName;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeServcieSchedule',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeServcieScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary You can call the DescribeServcieSchedule to query the real-time status of the instance device or container that is being occupied by the UUID.
     *  *
     * @param DescribeServcieScheduleRequest $request DescribeServcieScheduleRequest
     *
     * @return DescribeServcieScheduleResponse DescribeServcieScheduleResponse
     */
    public function describeServcieSchedule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeServcieScheduleWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about snapshots.
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
        if (!Utils::isUnset($request->diskId)) {
            $query['DiskId'] = $request->diskId;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->snapshotId)) {
            $query['SnapshotId'] = $request->snapshotId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSnapshots',
            'version'     => '2017-11-10',
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
     * @summary Queries information about snapshots.
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
     * @summary Queries the details of a specific source network address translation (SNAT) entry.
     *  *
     * @param DescribeSnatAttributeRequest $request DescribeSnatAttributeRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSnatAttributeResponse DescribeSnatAttributeResponse
     */
    public function describeSnatAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->snatEntryId)) {
            $query['SnatEntryId'] = $request->snatEntryId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSnatAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSnatAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a specific source network address translation (SNAT) entry.
     *  *
     * @param DescribeSnatAttributeRequest $request DescribeSnatAttributeRequest
     *
     * @return DescribeSnatAttributeResponse DescribeSnatAttributeResponse
     */
    public function describeSnatAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSnatAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries source network address translation (SNAT) entries.
     *  *
     * @param DescribeSnatTableEntriesRequest $request DescribeSnatTableEntriesRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSnatTableEntriesResponse DescribeSnatTableEntriesResponse
     */
    public function describeSnatTableEntriesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSnatTableEntries',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSnatTableEntriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries source network address translation (SNAT) entries.
     *  *
     * @param DescribeSnatTableEntriesRequest $request DescribeSnatTableEntriesRequest
     *
     * @return DescribeSnatTableEntriesResponse DescribeSnatTableEntriesResponse
     */
    public function describeSnatTableEntries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSnatTableEntriesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the bandwidth that you use within a specified period of time.
     *  *
     * @param DescribeUserBandWidthDataRequest $request DescribeUserBandWidthDataRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeUserBandWidthDataResponse DescribeUserBandWidthDataResponse
     */
    public function describeUserBandWidthDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->isp)) {
            $query['Isp'] = $request->isp;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeUserBandWidthData',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeUserBandWidthDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the bandwidth that you use within a specified period of time.
     *  *
     * @param DescribeUserBandWidthDataRequest $request DescribeUserBandWidthDataRequest
     *
     * @return DescribeUserBandWidthDataResponse DescribeUserBandWidthDataResponse
     */
    public function describeUserBandWidthData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeUserBandWidthDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about available vSwitches.
     *  *
     * @param DescribeVSwitchesRequest $request DescribeVSwitchesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeVSwitchesResponse DescribeVSwitchesResponse
     */
    public function describeVSwitchesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->networkId)) {
            $query['NetworkId'] = $request->networkId;
        }
        if (!Utils::isUnset($request->orderByParams)) {
            $query['OrderByParams'] = $request->orderByParams;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vSwitchName)) {
            $query['VSwitchName'] = $request->vSwitchName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeVSwitches',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeVSwitchesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries information about available vSwitches.
     *  *
     * @param DescribeVSwitchesRequest $request DescribeVSwitchesRequest
     *
     * @return DescribeVSwitchesResponse DescribeVSwitchesResponse
     */
    public function describeVSwitches($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeVSwitchesWithOptions($request, $runtime);
    }

    /**
     * @summary Detaches a pay-as-you-go data disk or a system disk from an Elastic Compute Service (ECS) instance.
     *  *
     * @param DetachDiskRequest $request DetachDiskRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DetachDiskResponse DetachDiskResponse
     */
    public function detachDiskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->diskId)) {
            $query['DiskId'] = $request->diskId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DetachDisk',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DetachDiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Detaches a pay-as-you-go data disk or a system disk from an Elastic Compute Service (ECS) instance.
     *  *
     * @param DetachDiskRequest $request DetachDiskRequest
     *
     * @return DetachDiskResponse DetachDiskResponse
     */
    public function detachDisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->detachDiskWithOptions($request, $runtime);
    }

    /**
     * @summary Distributes pushed data to the Edge Node Service (ENS) instances of the application. You can specify multiple canary release policies, decompress files, and restart containers.
     *  *
     * @param DistApplicationDataRequest $request DistApplicationDataRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DistApplicationDataResponse DistApplicationDataResponse
     */
    public function distApplicationDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->data)) {
            $query['Data'] = $request->data;
        }
        if (!Utils::isUnset($request->distStrategy)) {
            $query['DistStrategy'] = $request->distStrategy;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DistApplicationData',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DistApplicationDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Distributes pushed data to the Edge Node Service (ENS) instances of the application. You can specify multiple canary release policies, decompress files, and restart containers.
     *  *
     * @param DistApplicationDataRequest $request DistApplicationDataRequest
     *
     * @return DistApplicationDataResponse DistApplicationDataResponse
     */
    public function distApplicationData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->distApplicationDataWithOptions($request, $runtime);
    }

    /**
     * @summary Exports billing details within a specific time range.
     *  *
     * @param ExportBillDetailDataRequest $request ExportBillDetailDataRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportBillDetailDataResponse ExportBillDetailDataResponse
     */
    public function exportBillDetailDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExportBillDetailData',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportBillDetailDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Exports billing details within a specific time range.
     *  *
     * @param ExportBillDetailDataRequest $request ExportBillDetailDataRequest
     *
     * @return ExportBillDetailDataResponse ExportBillDetailDataResponse
     */
    public function exportBillDetailData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportBillDetailDataWithOptions($request, $runtime);
    }

    /**
     * @summary Exports a custom image to an Object Storage Service (OSS) bucket in the same region.
     *  *
     * @param ExportImageRequest $request ExportImageRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportImageResponse ExportImageResponse
     */
    public function exportImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->OSSBucket)) {
            $query['OSSBucket'] = $request->OSSBucket;
        }
        if (!Utils::isUnset($request->OSSPrefix)) {
            $query['OSSPrefix'] = $request->OSSPrefix;
        }
        if (!Utils::isUnset($request->OSSRegionId)) {
            $query['OSSRegionId'] = $request->OSSRegionId;
        }
        if (!Utils::isUnset($request->roleName)) {
            $query['RoleName'] = $request->roleName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExportImage',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Exports a custom image to an Object Storage Service (OSS) bucket in the same region.
     *  *
     * @param ExportImageRequest $request ExportImageRequest
     *
     * @return ExportImageResponse ExportImageResponse
     */
    public function exportImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportImageWithOptions($request, $runtime);
    }

    /**
     * @summary Exports the metering data within a specific time range.
     *  *
     * @param ExportMeasurementDataRequest $request ExportMeasurementDataRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportMeasurementDataResponse ExportMeasurementDataResponse
     */
    public function exportMeasurementDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ExportMeasurementData',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ExportMeasurementDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Exports the metering data within a specific time range.
     *  *
     * @param ExportMeasurementDataRequest $request ExportMeasurementDataRequest
     *
     * @return ExportMeasurementDataResponse ExportMeasurementDataResponse
     */
    public function exportMeasurementData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportMeasurementDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the access control list (ACL) of a bucket.
     *  *
     * @param GetBucketAclRequest $request GetBucketAclRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetBucketAclResponse GetBucketAclResponse
     */
    public function getBucketAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBucketAcl',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBucketAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the access control list (ACL) of a bucket.
     *  *
     * @param GetBucketAclRequest $request GetBucketAclRequest
     *
     * @return GetBucketAclResponse GetBucketAclResponse
     */
    public function getBucketAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBucketAclWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the detailed information about a bucket.
     *  *
     * @param GetBucketInfoRequest $request GetBucketInfoRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return GetBucketInfoResponse GetBucketInfoResponse
     */
    public function getBucketInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucketName)) {
            $query['BucketName'] = $request->bucketName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBucketInfo',
            'version'     => '2017-11-10',
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
     * @summary Queries the detailed information about a bucket.
     *  *
     * @param GetBucketInfoRequest $request GetBucketInfoRequest
     *
     * @return GetBucketInfoResponse GetBucketInfoResponse
     */
    public function getBucketInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBucketInfoWithOptions($request, $runtime);
    }

    /**
     * @summary Queries lifecycle rules.
     *  *
     * @param GetBucketLifecycleRequest $request GetBucketLifecycleRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetBucketLifecycleResponse GetBucketLifecycleResponse
     */
    public function getBucketLifecycleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucketName)) {
            $query['BucketName'] = $request->bucketName;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBucketLifecycle',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBucketLifecycleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries lifecycle rules.
     *  *
     * @param GetBucketLifecycleRequest $request GetBucketLifecycleRequest
     *
     * @return GetBucketLifecycleResponse GetBucketLifecycleResponse
     */
    public function getBucketLifecycle($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBucketLifecycleWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the network address translation (NAT) rule details of a device such as a server or container by its ID.
     *  *
     * @param GetDeviceInternetPortRequest $request GetDeviceInternetPortRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDeviceInternetPortResponse GetDeviceInternetPortResponse
     */
    public function getDeviceInternetPortWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDeviceInternetPort',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDeviceInternetPortResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the network address translation (NAT) rule details of a device such as a server or container by its ID.
     *  *
     * @param GetDeviceInternetPortRequest $request GetDeviceInternetPortRequest
     *
     * @return GetDeviceInternetPortResponse GetDeviceInternetPortResponse
     */
    public function getDeviceInternetPort($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceInternetPortWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the storage usage in the previous billing cycle and the cumulative number of calls in this month.
     *  *
     * @param GetOssStorageAndAccByBucketsRequest $request GetOssStorageAndAccByBucketsRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOssStorageAndAccByBucketsResponse GetOssStorageAndAccByBucketsResponse
     */
    public function getOssStorageAndAccByBucketsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOssStorageAndAccByBuckets',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOssStorageAndAccByBucketsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the storage usage in the previous billing cycle and the cumulative number of calls in this month.
     *  *
     * @param GetOssStorageAndAccByBucketsRequest $request GetOssStorageAndAccByBucketsRequest
     *
     * @return GetOssStorageAndAccByBucketsResponse GetOssStorageAndAccByBucketsResponse
     */
    public function getOssStorageAndAccByBuckets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOssStorageAndAccByBucketsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the storage and bandwidth usage within a specific time range.
     *  *
     * @description The query and aggregation granularity of bandwidth and storage usage cannot exceed one day. Data aggregation is to collect the maximum values of usage data within a period of time.
     *  *
     * @param GetOssUsageDataRequest $request GetOssUsageDataRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetOssUsageDataResponse GetOssUsageDataResponse
     */
    public function getOssUsageDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetOssUsageData',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOssUsageDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the storage and bandwidth usage within a specific time range.
     *  *
     * @description The query and aggregation granularity of bandwidth and storage usage cannot exceed one day. Data aggregation is to collect the maximum values of usage data within a period of time.
     *  *
     * @param GetOssUsageDataRequest $request GetOssUsageDataRequest
     *
     * @return GetOssUsageDataResponse GetOssUsageDataResponse
     */
    public function getOssUsageData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOssUsageDataWithOptions($request, $runtime);
    }

    /**
     * @summary Imports the public key of a Rivest–Shamir–Adleman (RSA)-encrypted key pair that is generated by a third-party tool.
     *  *
     * @description *   After the key pair is imported, ENS stores the public key. You must securely store the private key.
     * *   The key pair can be only in the ssh-rsa format.
     *  *
     * @param ImportKeyPairRequest $request ImportKeyPairRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ImportKeyPairResponse ImportKeyPairResponse
     */
    public function importKeyPairWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyPairName)) {
            $query['KeyPairName'] = $request->keyPairName;
        }
        if (!Utils::isUnset($request->publicKeyBody)) {
            $query['PublicKeyBody'] = $request->publicKeyBody;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ImportKeyPair',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ImportKeyPairResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Imports the public key of a Rivest–Shamir–Adleman (RSA)-encrypted key pair that is generated by a third-party tool.
     *  *
     * @description *   After the key pair is imported, ENS stores the public key. You must securely store the private key.
     * *   The key pair can be only in the ssh-rsa format.
     *  *
     * @param ImportKeyPairRequest $request ImportKeyPairRequest
     *
     * @return ImportKeyPairResponse ImportKeyPairResponse
     */
    public function importKeyPair($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importKeyPairWithOptions($request, $runtime);
    }

    /**
     * @summary Assigns public IP addresses to an EPN instance.
     *  *
     * @param JoinPublicIpsToEpnInstanceRequest $request JoinPublicIpsToEpnInstanceRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return JoinPublicIpsToEpnInstanceResponse JoinPublicIpsToEpnInstanceResponse
     */
    public function joinPublicIpsToEpnInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->EPNInstanceId)) {
            $query['EPNInstanceId'] = $request->EPNInstanceId;
        }
        if (!Utils::isUnset($request->instanceInfos)) {
            $query['InstanceInfos'] = $request->instanceInfos;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'JoinPublicIpsToEpnInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return JoinPublicIpsToEpnInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Assigns public IP addresses to an EPN instance.
     *  *
     * @param JoinPublicIpsToEpnInstanceRequest $request JoinPublicIpsToEpnInstanceRequest
     *
     * @return JoinPublicIpsToEpnInstanceResponse JoinPublicIpsToEpnInstanceResponse
     */
    public function joinPublicIpsToEpnInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->joinPublicIpsToEpnInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Adds an Edge Node Service (ENS) instance to a specified security group.
     *  *
     * @description Before you call this operation to add an instance to a security group, make sure that the instance is in the Stopped or Running state.
     *  *
     * @param JoinSecurityGroupRequest $request JoinSecurityGroupRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return JoinSecurityGroupResponse JoinSecurityGroupResponse
     */
    public function joinSecurityGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->networkInterfaceId)) {
            $query['NetworkInterfaceId'] = $request->networkInterfaceId;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'JoinSecurityGroup',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return JoinSecurityGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds an Edge Node Service (ENS) instance to a specified security group.
     *  *
     * @description Before you call this operation to add an instance to a security group, make sure that the instance is in the Stopped or Running state.
     *  *
     * @param JoinSecurityGroupRequest $request JoinSecurityGroupRequest
     *
     * @return JoinSecurityGroupResponse JoinSecurityGroupResponse
     */
    public function joinSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->joinSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * @summary For internal connections, instances that are associated with a vSwitch automatically take effect. For public connections such as intelligent acceleration, you need to manually add the instances.
     *  *
     * @param JoinVSwitchesToEpnInstanceRequest $request JoinVSwitchesToEpnInstanceRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return JoinVSwitchesToEpnInstanceResponse JoinVSwitchesToEpnInstanceResponse
     */
    public function joinVSwitchesToEpnInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->EPNInstanceId)) {
            $query['EPNInstanceId'] = $request->EPNInstanceId;
        }
        if (!Utils::isUnset($request->vSwitchesInfo)) {
            $query['VSwitchesInfo'] = $request->vSwitchesInfo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'JoinVSwitchesToEpnInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return JoinVSwitchesToEpnInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary For internal connections, instances that are associated with a vSwitch automatically take effect. For public connections such as intelligent acceleration, you need to manually add the instances.
     *  *
     * @param JoinVSwitchesToEpnInstanceRequest $request JoinVSwitchesToEpnInstanceRequest
     *
     * @return JoinVSwitchesToEpnInstanceResponse JoinVSwitchesToEpnInstanceResponse
     */
    public function joinVSwitchesToEpnInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->joinVSwitchesToEpnInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Removes an instance from a security group.
     *  *
     * @description Before you remove an instance from a security group, the instance must be in the Stopped or Running state.
     *  *
     * @param LeaveSecurityGroupRequest $request LeaveSecurityGroupRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return LeaveSecurityGroupResponse LeaveSecurityGroupResponse
     */
    public function leaveSecurityGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->networkInterfaceId)) {
            $query['NetworkInterfaceId'] = $request->networkInterfaceId;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'LeaveSecurityGroup',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return LeaveSecurityGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes an instance from a security group.
     *  *
     * @description Before you remove an instance from a security group, the instance must be in the Stopped or Running state.
     *  *
     * @param LeaveSecurityGroupRequest $request LeaveSecurityGroupRequest
     *
     * @return LeaveSecurityGroupResponse LeaveSecurityGroupResponse
     */
    public function leaveSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->leaveSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the created applications.
     *  *
     * @param ListApplicationsRequest $request ListApplicationsRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListApplicationsResponse ListApplicationsResponse
     */
    public function listApplicationsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appVersions)) {
            $query['AppVersions'] = $request->appVersions;
        }
        if (!Utils::isUnset($request->clusterNames)) {
            $query['ClusterNames'] = $request->clusterNames;
        }
        if (!Utils::isUnset($request->level)) {
            $query['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->maxDate)) {
            $query['MaxDate'] = $request->maxDate;
        }
        if (!Utils::isUnset($request->minDate)) {
            $query['MinDate'] = $request->minDate;
        }
        if (!Utils::isUnset($request->outAppInfoParams)) {
            $query['OutAppInfoParams'] = $request->outAppInfoParams;
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
            'action'      => 'ListApplications',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListApplicationsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the created applications.
     *  *
     * @param ListApplicationsRequest $request ListApplicationsRequest
     *
     * @return ListApplicationsResponse ListApplicationsResponse
     */
    public function listApplications($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listApplicationsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries all buckets of a user.
     *  *
     * @param ListBucketsRequest $request ListBucketsRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListBucketsResponse ListBucketsResponse
     */
    public function listBucketsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
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
            'version'     => '2017-11-10',
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
     * @summary Queries all buckets of a user.
     *  *
     * @param ListBucketsRequest $request ListBucketsRequest
     *
     * @return ListBucketsResponse ListBucketsResponse
     */
    public function listBuckets($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listBucketsWithOptions($request, $runtime);
    }

    /**
     * @summary Lists all objects in a bucket.
     *  *
     * @param ListObjectsRequest $request ListObjectsRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return ListObjectsResponse ListObjectsResponse
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
        if (!Utils::isUnset($request->encodingType)) {
            $query['EncodingType'] = $request->encodingType;
        }
        if (!Utils::isUnset($request->marker)) {
            $query['Marker'] = $request->marker;
        }
        if (!Utils::isUnset($request->maxKeys)) {
            $query['MaxKeys'] = $request->maxKeys;
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
            'version'     => '2017-11-10',
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
     * @summary Lists all objects in a bucket.
     *  *
     * @param ListObjectsRequest $request ListObjectsRequest
     *
     * @return ListObjectsResponse ListObjectsResponse
     */
    public function listObjects($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listObjectsWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the name, description, and peak bandwidth of a specified elastic IP address (EIP).
     *  *
     * @param ModifyEnsEipAddressAttributeRequest $request ModifyEnsEipAddressAttributeRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyEnsEipAddressAttributeResponse ModifyEnsEipAddressAttributeResponse
     */
    public function modifyEnsEipAddressAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allocationId)) {
            $query['AllocationId'] = $request->allocationId;
        }
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $query['Name'] = $request->name;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyEnsEipAddressAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyEnsEipAddressAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the name, description, and peak bandwidth of a specified elastic IP address (EIP).
     *  *
     * @param ModifyEnsEipAddressAttributeRequest $request ModifyEnsEipAddressAttributeRequest
     *
     * @return ModifyEnsEipAddressAttributeResponse ModifyEnsEipAddressAttributeResponse
     */
    public function modifyEnsEipAddressAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyEnsEipAddressAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies an Edge Private Network (EPN) instance.
     *  *
     * @param ModifyEpnInstanceRequest $request ModifyEpnInstanceRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyEpnInstanceResponse ModifyEpnInstanceResponse
     */
    public function modifyEpnInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->EPNInstanceId)) {
            $query['EPNInstanceId'] = $request->EPNInstanceId;
        }
        if (!Utils::isUnset($request->EPNInstanceName)) {
            $query['EPNInstanceName'] = $request->EPNInstanceName;
        }
        if (!Utils::isUnset($request->internetMaxBandwidthOut)) {
            $query['InternetMaxBandwidthOut'] = $request->internetMaxBandwidthOut;
        }
        if (!Utils::isUnset($request->networkingModel)) {
            $query['NetworkingModel'] = $request->networkingModel;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyEpnInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyEpnInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies an Edge Private Network (EPN) instance.
     *  *
     * @param ModifyEpnInstanceRequest $request ModifyEpnInstanceRequest
     *
     * @return ModifyEpnInstanceResponse ModifyEpnInstanceResponse
     */
    public function modifyEpnInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyEpnInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the description of a file system.
     *  *
     * @param ModifyFileSystemRequest $request ModifyFileSystemRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyFileSystemResponse ModifyFileSystemResponse
     */
    public function modifyFileSystemWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $query['FileSystemId'] = $request->fileSystemId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyFileSystem',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyFileSystemResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the description of a file system.
     *  *
     * @param ModifyFileSystemRequest $request ModifyFileSystemRequest
     *
     * @return ModifyFileSystemResponse ModifyFileSystemResponse
     */
    public function modifyFileSystem($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyFileSystemWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies a Destination Network Address Translation (DNAT) rule.
     *  *
     * @param ModifyForwardEntryRequest $request ModifyForwardEntryRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyForwardEntryResponse ModifyForwardEntryResponse
     */
    public function modifyForwardEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->forwardEntryId)) {
            $query['ForwardEntryId'] = $request->forwardEntryId;
        }
        if (!Utils::isUnset($request->forwardEntryName)) {
            $query['ForwardEntryName'] = $request->forwardEntryName;
        }
        if (!Utils::isUnset($request->healthCheckPort)) {
            $query['HealthCheckPort'] = $request->healthCheckPort;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyForwardEntry',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyForwardEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies a Destination Network Address Translation (DNAT) rule.
     *  *
     * @param ModifyForwardEntryRequest $request ModifyForwardEntryRequest
     *
     * @return ModifyForwardEntryResponse ModifyForwardEntryResponse
     */
    public function modifyForwardEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyForwardEntryWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the image attributes.
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
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->imageName)) {
            $query['ImageName'] = $request->imageName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyImageAttribute',
            'version'     => '2017-11-10',
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
     * @summary Modifies the image attributes.
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
     * @summary Shares or unshares an image.
     *  *
     * @param ModifyImageSharePermissionRequest $request ModifyImageSharePermissionRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyImageSharePermissionResponse ModifyImageSharePermissionResponse
     */
    public function modifyImageSharePermissionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->addAccounts)) {
            $query['AddAccounts'] = $request->addAccounts;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->removeAccounts)) {
            $query['RemoveAccounts'] = $request->removeAccounts;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyImageSharePermission',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyImageSharePermissionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Shares or unshares an image.
     *  *
     * @param ModifyImageSharePermissionRequest $request ModifyImageSharePermissionRequest
     *
     * @return ModifyImageSharePermissionResponse ModifyImageSharePermissionResponse
     */
    public function modifyImageSharePermission($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyImageSharePermissionWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the attributes of an instance, such as the name and the password.
     *  *
     * @description *   If an instance is in the Starting state, you cannot reset the password of the instance.
     * *   When the instance is in the Running state, you cannot change the password of the instance.
     * *   After resetting the password, you must Restart the instance in the ECS console or call the RebootInstance operation to validate the modifications. The restart operation within the instance does not validate the modifications.
     *  *
     * @param ModifyInstanceAttributeRequest $request ModifyInstanceAttributeRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceAttributeResponse ModifyInstanceAttributeResponse
     */
    public function modifyInstanceAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->hostName)) {
            $query['HostName'] = $request->hostName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the attributes of an instance, such as the name and the password.
     *  *
     * @description *   If an instance is in the Starting state, you cannot reset the password of the instance.
     * *   When the instance is in the Running state, you cannot change the password of the instance.
     * *   After resetting the password, you must Restart the instance in the ECS console or call the RebootInstance operation to validate the modifications. The restart operation within the instance does not validate the modifications.
     *  *
     * @param ModifyInstanceAttributeRequest $request ModifyInstanceAttributeRequest
     *
     * @return ModifyInstanceAttributeResponse ModifyInstanceAttributeResponse
     */
    public function modifyInstanceAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Configures auto-renewal for instances.
     *  *
     * @param ModifyInstanceAutoRenewAttributeRequest $request ModifyInstanceAutoRenewAttributeRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceAutoRenewAttributeResponse ModifyInstanceAutoRenewAttributeResponse
     */
    public function modifyInstanceAutoRenewAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->duration)) {
            $query['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->ownerId)) {
            $query['OwnerId'] = $request->ownerId;
        }
        if (!Utils::isUnset($request->renewalStatus)) {
            $query['RenewalStatus'] = $request->renewalStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyInstanceAutoRenewAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceAutoRenewAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Configures auto-renewal for instances.
     *  *
     * @param ModifyInstanceAutoRenewAttributeRequest $request ModifyInstanceAutoRenewAttributeRequest
     *
     * @return ModifyInstanceAutoRenewAttributeResponse ModifyInstanceAutoRenewAttributeResponse
     */
    public function modifyInstanceAutoRenewAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceAutoRenewAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Changes the billing method of Edge Node Service (ENS) instances. You can switch between the pay-as-you-go and subscription billing methods for instances. You can also change the billing method for disks that you created with pay-as-you-go instances to subscription.
     *  *
     * @description Before you call this operation, make sure that you fully understand the billing methods and pricing of ENS.
     * The instances must be in the Running or Stopped state, and you have no overdue payments for them.
     *  *
     * @param ModifyInstanceChargeTypeRequest $tmpReq  ModifyInstanceChargeTypeRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyInstanceChargeTypeResponse ModifyInstanceChargeTypeResponse
     */
    public function modifyInstanceChargeTypeWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyInstanceChargeTypeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->instanceIds)) {
            $request->instanceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->autoPay)) {
            $query['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->includeDataDisks)) {
            $query['IncludeDataDisks'] = $request->includeDataDisks;
        }
        if (!Utils::isUnset($request->instanceChargeType)) {
            $query['InstanceChargeType'] = $request->instanceChargeType;
        }
        if (!Utils::isUnset($request->instanceIdsShrink)) {
            $query['InstanceIds'] = $request->instanceIdsShrink;
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
            'action'      => 'ModifyInstanceChargeType',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyInstanceChargeTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Changes the billing method of Edge Node Service (ENS) instances. You can switch between the pay-as-you-go and subscription billing methods for instances. You can also change the billing method for disks that you created with pay-as-you-go instances to subscription.
     *  *
     * @description Before you call this operation, make sure that you fully understand the billing methods and pricing of ENS.
     * The instances must be in the Running or Stopped state, and you have no overdue payments for them.
     *  *
     * @param ModifyInstanceChargeTypeRequest $request ModifyInstanceChargeTypeRequest
     *
     * @return ModifyInstanceChargeTypeResponse ModifyInstanceChargeTypeResponse
     */
    public function modifyInstanceChargeType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyInstanceChargeTypeWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the information about an Edge Load Balancer (ELB) instance.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *  *
     * @param ModifyLoadBalancerAttributeRequest $request ModifyLoadBalancerAttributeRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyLoadBalancerAttributeResponse ModifyLoadBalancerAttributeResponse
     */
    public function modifyLoadBalancerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->loadBalancerName)) {
            $query['LoadBalancerName'] = $request->loadBalancerName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyLoadBalancerAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyLoadBalancerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the information about an Edge Load Balancer (ELB) instance.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *  *
     * @param ModifyLoadBalancerAttributeRequest $request ModifyLoadBalancerAttributeRequest
     *
     * @return ModifyLoadBalancerAttributeResponse ModifyLoadBalancerAttributeResponse
     */
    public function modifyLoadBalancerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyLoadBalancerAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the network information.
     *  *
     * @description *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 5 times per second per user.
     *  *
     * @param ModifyNetworkAttributeRequest $request ModifyNetworkAttributeRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyNetworkAttributeResponse ModifyNetworkAttributeResponse
     */
    public function modifyNetworkAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->networkId)) {
            $query['NetworkId'] = $request->networkId;
        }
        if (!Utils::isUnset($request->networkName)) {
            $query['NetworkName'] = $request->networkName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyNetworkAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyNetworkAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the network information.
     *  *
     * @description *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 5 times per second per user.
     *  *
     * @param ModifyNetworkAttributeRequest $request ModifyNetworkAttributeRequest
     *
     * @return ModifyNetworkAttributeResponse ModifyNetworkAttributeResponse
     */
    public function modifyNetworkAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNetworkAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Upgrades or downgrades the instance type of a subscription Edge Node Service (ENS) instance. The new instance type takes effect for the remaining lifecycle of the instance.
     *  *
     * @param ModifyPrepayInstanceSpecRequest $request ModifyPrepayInstanceSpecRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyPrepayInstanceSpecResponse ModifyPrepayInstanceSpecResponse
     */
    public function modifyPrepayInstanceSpecWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyPrepayInstanceSpec',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyPrepayInstanceSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Upgrades or downgrades the instance type of a subscription Edge Node Service (ENS) instance. The new instance type takes effect for the remaining lifecycle of the instance.
     *  *
     * @param ModifyPrepayInstanceSpecRequest $request ModifyPrepayInstanceSpecRequest
     *
     * @return ModifyPrepayInstanceSpecResponse ModifyPrepayInstanceSpecResponse
     */
    public function modifyPrepayInstanceSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPrepayInstanceSpecWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the information about a security group.
     *  *
     * @description *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 5 times per second per user.
     *  *
     * @param ModifySecurityGroupAttributeRequest $request ModifySecurityGroupAttributeRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifySecurityGroupAttributeResponse ModifySecurityGroupAttributeResponse
     */
    public function modifySecurityGroupAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->securityGroupName)) {
            $query['SecurityGroupName'] = $request->securityGroupName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySecurityGroupAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySecurityGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the information about a security group.
     *  *
     * @description *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 5 times per second per user.
     *  *
     * @param ModifySecurityGroupAttributeRequest $request ModifySecurityGroupAttributeRequest
     *
     * @return ModifySecurityGroupAttributeResponse ModifySecurityGroupAttributeResponse
     */
    public function modifySecurityGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySecurityGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the information about a snapshot.
     *  *
     * @param ModifySnapshotAttributeRequest $request ModifySnapshotAttributeRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifySnapshotAttributeResponse ModifySnapshotAttributeResponse
     */
    public function modifySnapshotAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->snapshotId)) {
            $query['SnapshotId'] = $request->snapshotId;
        }
        if (!Utils::isUnset($request->snapshotName)) {
            $query['SnapshotName'] = $request->snapshotName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifySnapshotAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySnapshotAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the information about a snapshot.
     *  *
     * @param ModifySnapshotAttributeRequest $request ModifySnapshotAttributeRequest
     *
     * @return ModifySnapshotAttributeResponse ModifySnapshotAttributeResponse
     */
    public function modifySnapshotAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySnapshotAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies information about a vSwitch.
     *  *
     * @description *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 5 times per second per user.
     *  *
     * @param ModifyVSwitchAttributeRequest $request ModifyVSwitchAttributeRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyVSwitchAttributeResponse ModifyVSwitchAttributeResponse
     */
    public function modifyVSwitchAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        if (!Utils::isUnset($request->vSwitchName)) {
            $query['VSwitchName'] = $request->vSwitchName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyVSwitchAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyVSwitchAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies information about a vSwitch.
     *  *
     * @description *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 5 times per second per user.
     *  *
     * @param ModifyVSwitchAttributeRequest $request ModifyVSwitchAttributeRequest
     *
     * @return ModifyVSwitchAttributeResponse ModifyVSwitchAttributeResponse
     */
    public function modifyVSwitchAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyVSwitchAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Pushes the business or service data of an application to file servers.
     *  *
     * @param PushApplicationDataRequest $request PushApplicationDataRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return PushApplicationDataResponse PushApplicationDataResponse
     */
    public function pushApplicationDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->data)) {
            $query['Data'] = $request->data;
        }
        if (!Utils::isUnset($request->pushStrategy)) {
            $query['PushStrategy'] = $request->pushStrategy;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PushApplicationData',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PushApplicationDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Pushes the business or service data of an application to file servers.
     *  *
     * @param PushApplicationDataRequest $request PushApplicationDataRequest
     *
     * @return PushApplicationDataResponse PushApplicationDataResponse
     */
    public function pushApplicationData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pushApplicationDataWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an EOS bucket.
     *  *
     * @param PutBucketRequest $request PutBucketRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return PutBucketResponse PutBucketResponse
     */
    public function putBucketWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->bucketAcl)) {
            $body['BucketAcl'] = $request->bucketAcl;
        }
        if (!Utils::isUnset($request->bucketName)) {
            $body['BucketName'] = $request->bucketName;
        }
        if (!Utils::isUnset($request->comment)) {
            $body['Comment'] = $request->comment;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $body['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->logicalBucketType)) {
            $body['LogicalBucketType'] = $request->logicalBucketType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PutBucket',
            'version'     => '2017-11-10',
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
     * @summary Creates an EOS bucket.
     *  *
     * @param PutBucketRequest $request PutBucketRequest
     *
     * @return PutBucketResponse PutBucketResponse
     */
    public function putBucket($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putBucketWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the access control list (ACL) of a bucket.
     *  *
     * @param PutBucketAclRequest $request PutBucketAclRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return PutBucketAclResponse PutBucketAclResponse
     */
    public function putBucketAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bucketAcl)) {
            $query['BucketAcl'] = $request->bucketAcl;
        }
        if (!Utils::isUnset($request->bucketName)) {
            $query['BucketName'] = $request->bucketName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutBucketAcl',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutBucketAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the access control list (ACL) of a bucket.
     *  *
     * @param PutBucketAclRequest $request PutBucketAclRequest
     *
     * @return PutBucketAclResponse PutBucketAclResponse
     */
    public function putBucketAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putBucketAclWithOptions($request, $runtime);
    }

    /**
     * @summary Configures lifecycle rules for objects.
     *  *
     * @description - You can configure up to 1000 rules.
     * - If an object meets multiple rules, the rule that has the earliest expiration time prevails.
     *  *
     * @param PutBucketLifecycleRequest $request PutBucketLifecycleRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return PutBucketLifecycleResponse PutBucketLifecycleResponse
     */
    public function putBucketLifecycleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allowSameActionOverlap)) {
            $query['AllowSameActionOverlap'] = $request->allowSameActionOverlap;
        }
        if (!Utils::isUnset($request->bucketName)) {
            $query['BucketName'] = $request->bucketName;
        }
        if (!Utils::isUnset($request->createdBeforeDate)) {
            $query['CreatedBeforeDate'] = $request->createdBeforeDate;
        }
        if (!Utils::isUnset($request->expirationDays)) {
            $query['ExpirationDays'] = $request->expirationDays;
        }
        if (!Utils::isUnset($request->prefix)) {
            $query['Prefix'] = $request->prefix;
        }
        if (!Utils::isUnset($request->ruleId)) {
            $query['RuleId'] = $request->ruleId;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'PutBucketLifecycle',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PutBucketLifecycleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Configures lifecycle rules for objects.
     *  *
     * @description - You can configure up to 1000 rules.
     * - If an object meets multiple rules, the rule that has the earliest expiration time prevails.
     *  *
     * @param PutBucketLifecycleRequest $request PutBucketLifecycleRequest
     *
     * @return PutBucketLifecycleResponse PutBucketLifecycleResponse
     */
    public function putBucketLifecycle($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->putBucketLifecycleWithOptions($request, $runtime);
    }

    /**
     * @summary Initializes a disk.
     *  *
     * @param ReInitDiskRequest $request ReInitDiskRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ReInitDiskResponse ReInitDiskResponse
     */
    public function reInitDiskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->diskId)) {
            $query['DiskId'] = $request->diskId;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReInitDisk',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReInitDiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Initializes a disk.
     *  *
     * @param ReInitDiskRequest $request ReInitDiskRequest
     *
     * @return ReInitDiskResponse ReInitDiskResponse
     */
    public function reInitDisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reInitDiskWithOptions($request, $runtime);
    }

    /**
     * @summary Restarts an Android in Container (AIC) instance.
     *  *
     * @param RebootAICInstanceRequest $tmpReq  RebootAICInstanceRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return RebootAICInstanceResponse RebootAICInstanceResponse
     */
    public function rebootAICInstanceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RebootAICInstanceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->instanceIds)) {
            $request->instanceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RebootAICInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RebootAICInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Restarts an Android in Container (AIC) instance.
     *  *
     * @param RebootAICInstanceRequest $request RebootAICInstanceRequest
     *
     * @return RebootAICInstanceResponse RebootAICInstanceResponse
     */
    public function rebootAICInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebootAICInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Reboots an Android in Container (AIC) server.
     *  *
     * @param RebootARMServerInstanceRequest $request RebootARMServerInstanceRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return RebootARMServerInstanceResponse RebootARMServerInstanceResponse
     */
    public function rebootARMServerInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RebootARMServerInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RebootARMServerInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Reboots an Android in Container (AIC) server.
     *  *
     * @param RebootARMServerInstanceRequest $request RebootARMServerInstanceRequest
     *
     * @return RebootARMServerInstanceResponse RebootARMServerInstanceResponse
     */
    public function rebootARMServerInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebootARMServerInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Reboots an instance.
     *  *
     * @description *   Only instances that are in the Running state can be restarted.
     * *   If the operation is successful, the status of the instance becomes Starting.
     *  *
     * @param RebootInstanceRequest $request RebootInstanceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return RebootInstanceResponse RebootInstanceResponse
     */
    public function rebootInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->forceStop)) {
            $query['ForceStop'] = $request->forceStop;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RebootInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RebootInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Reboots an instance.
     *  *
     * @description *   Only instances that are in the Running state can be restarted.
     * *   If the operation is successful, the status of the instance becomes Starting.
     *  *
     * @param RebootInstanceRequest $request RebootInstanceRequest
     *
     * @return RebootInstanceResponse RebootInstanceResponse
     */
    public function rebootInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebootInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 选择批量实例进行重启操作
     *  *
     * @param RebootInstancesRequest $tmpReq  RebootInstancesRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return RebootInstancesResponse RebootInstancesResponse
     */
    public function rebootInstancesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RebootInstancesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->instanceIds)) {
            $request->instanceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->instanceIdsShrink)) {
            $query['InstanceIds'] = $request->instanceIdsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RebootInstances',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RebootInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 选择批量实例进行重启操作
     *  *
     * @param RebootInstancesRequest $request RebootInstancesRequest
     *
     * @return RebootInstancesResponse RebootInstancesResponse
     */
    public function rebootInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rebootInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Recovers an Android in Container (AIC) instance on the server.
     *  *
     * @param RecoverAICInstanceRequest $request RecoverAICInstanceRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return RecoverAICInstanceResponse RecoverAICInstanceResponse
     */
    public function recoverAICInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RecoverAICInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RecoverAICInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Recovers an Android in Container (AIC) instance on the server.
     *  *
     * @param RecoverAICInstanceRequest $request RecoverAICInstanceRequest
     *
     * @return RecoverAICInstanceResponse RecoverAICInstanceResponse
     */
    public function recoverAICInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->recoverAICInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Resets an instance based on specific parameters.
     *  *
     * @param ReinitInstanceRequest $request ReinitInstanceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ReinitInstanceResponse ReinitInstanceResponse
     */
    public function reinitInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->imageId)) {
            $body['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->password)) {
            $body['Password'] = $request->password;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ReinitInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReinitInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Resets an instance based on specific parameters.
     *  *
     * @param ReinitInstanceRequest $request ReinitInstanceRequest
     *
     * @return ReinitInstanceResponse ReinitInstanceResponse
     */
    public function reinitInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reinitInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 选择批量实例进行重置操作
     *  *
     * @param ReinitInstancesRequest $tmpReq  ReinitInstancesRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ReinitInstancesResponse ReinitInstancesResponse
     */
    public function reinitInstancesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ReinitInstancesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->instanceIds)) {
            $request->instanceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->instanceIdsShrink)) {
            $query['InstanceIds'] = $request->instanceIdsShrink;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReinitInstances',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReinitInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 选择批量实例进行重置操作
     *  *
     * @param ReinitInstancesRequest $request ReinitInstancesRequest
     *
     * @return ReinitInstancesResponse ReinitInstancesResponse
     */
    public function reinitInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->reinitInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Releases an Android in Container (AIC) instance from the server.
     *  *
     * @param ReleaseAICInstanceRequest $request ReleaseAICInstanceRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleaseAICInstanceResponse ReleaseAICInstanceResponse
     */
    public function releaseAICInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->serverId)) {
            $query['ServerId'] = $request->serverId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ReleaseAICInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseAICInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Releases an Android in Container (AIC) instance from the server.
     *  *
     * @param ReleaseAICInstanceRequest $request ReleaseAICInstanceRequest
     *
     * @return ReleaseAICInstanceResponse ReleaseAICInstanceResponse
     */
    public function releaseAICInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseAICInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Releases an ARM server.
     *  *
     * @param ReleaseARMServerInstanceRequest $request ReleaseARMServerInstanceRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleaseARMServerInstanceResponse ReleaseARMServerInstanceResponse
     */
    public function releaseARMServerInstanceWithOptions($request, $runtime)
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
            'action'      => 'ReleaseARMServerInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseARMServerInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Releases an ARM server.
     *  *
     * @param ReleaseARMServerInstanceRequest $request ReleaseARMServerInstanceRequest
     *
     * @return ReleaseARMServerInstanceResponse ReleaseARMServerInstanceResponse
     */
    public function releaseARMServerInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseARMServerInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Releases an instance.
     *  *
     * @description *   You can call this operation up to 10,000 times per second per account.
     * *   The maximum number of times that each user can call this operation per second is 50.
     *  *
     * @param ReleaseInstanceRequest $request ReleaseInstanceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleaseInstanceResponse ReleaseInstanceResponse
     */
    public function releaseInstanceWithOptions($request, $runtime)
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
            'action'      => 'ReleaseInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleaseInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Releases an instance.
     *  *
     * @description *   You can call this operation up to 10,000 times per second per account.
     * *   The maximum number of times that each user can call this operation per second is 50.
     *  *
     * @param ReleaseInstanceRequest $request ReleaseInstanceRequest
     *
     * @return ReleaseInstanceResponse ReleaseInstanceResponse
     */
    public function releaseInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releaseInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a pay-as-you-go instance.
     *  *
     * @param ReleasePostPaidInstanceRequest $request ReleasePostPaidInstanceRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleasePostPaidInstanceResponse ReleasePostPaidInstanceResponse
     */
    public function releasePostPaidInstanceWithOptions($request, $runtime)
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
            'action'      => 'ReleasePostPaidInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleasePostPaidInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a pay-as-you-go instance.
     *  *
     * @param ReleasePostPaidInstanceRequest $request ReleasePostPaidInstanceRequest
     *
     * @return ReleasePostPaidInstanceResponse ReleasePostPaidInstanceResponse
     */
    public function releasePostPaidInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releasePostPaidInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Call ReleasePrePaidInstance to delete a subscription instance.
     *  *
     * @param ReleasePrePaidInstanceRequest $request ReleasePrePaidInstanceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return ReleasePrePaidInstanceResponse ReleasePrePaidInstanceResponse
     */
    public function releasePrePaidInstanceWithOptions($request, $runtime)
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
            'action'      => 'ReleasePrePaidInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReleasePrePaidInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Call ReleasePrePaidInstance to delete a subscription instance.
     *  *
     * @param ReleasePrePaidInstanceRequest $request ReleasePrePaidInstanceRequest
     *
     * @return ReleasePrePaidInstanceResponse ReleasePrePaidInstanceResponse
     */
    public function releasePrePaidInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->releasePrePaidInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Removes backend servers.
     *  *
     * @description *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 10 times per second per account.
     *  *
     * @param RemoveBackendServersRequest $tmpReq  RemoveBackendServersRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveBackendServersResponse RemoveBackendServersResponse
     */
    public function removeBackendServersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RemoveBackendServersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->backendServers)) {
            $request->backendServersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->backendServers, 'BackendServers', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->backendServersShrink)) {
            $query['BackendServers'] = $request->backendServersShrink;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveBackendServers',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveBackendServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes backend servers.
     *  *
     * @description *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 10 times per second per account.
     *  *
     * @param RemoveBackendServersRequest $request RemoveBackendServersRequest
     *
     * @return RemoveBackendServersResponse RemoveBackendServersResponse
     */
    public function removeBackendServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeBackendServersWithOptions($request, $runtime);
    }

    /**
     * @summary Removes IP addresses from an edge private network (EPN) instance.
     *  *
     * @param RemovePublicIpsFromEpnInstanceRequest $request RemovePublicIpsFromEpnInstanceRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return RemovePublicIpsFromEpnInstanceResponse RemovePublicIpsFromEpnInstanceResponse
     */
    public function removePublicIpsFromEpnInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->EPNInstanceId)) {
            $query['EPNInstanceId'] = $request->EPNInstanceId;
        }
        if (!Utils::isUnset($request->instanceInfos)) {
            $query['InstanceInfos'] = $request->instanceInfos;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemovePublicIpsFromEpnInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemovePublicIpsFromEpnInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes IP addresses from an edge private network (EPN) instance.
     *  *
     * @param RemovePublicIpsFromEpnInstanceRequest $request RemovePublicIpsFromEpnInstanceRequest
     *
     * @return RemovePublicIpsFromEpnInstanceResponse RemovePublicIpsFromEpnInstanceResponse
     */
    public function removePublicIpsFromEpnInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removePublicIpsFromEpnInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Removes shared data groups (SDGs) that are deployed on instances.
     *  *
     * @param RemoveSDGRequest $tmpReq  RemoveSDGRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveSDGResponse RemoveSDGResponse
     */
    public function removeSDGWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RemoveSDGShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->instanceIds)) {
            $request->instanceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveSDG',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveSDGResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Removes shared data groups (SDGs) that are deployed on instances.
     *  *
     * @param RemoveSDGRequest $request RemoveSDGRequest
     *
     * @return RemoveSDGResponse RemoveSDGResponse
     */
    public function removeSDG($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeSDGWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes the networking information. This operation is applicable only for instances that reside in the internal network.
     *  *
     * @param RemoveVSwitchesFromEpnInstanceRequest $request RemoveVSwitchesFromEpnInstanceRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return RemoveVSwitchesFromEpnInstanceResponse RemoveVSwitchesFromEpnInstanceResponse
     */
    public function removeVSwitchesFromEpnInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->EPNInstanceId)) {
            $query['EPNInstanceId'] = $request->EPNInstanceId;
        }
        if (!Utils::isUnset($request->vSwitchesInfo)) {
            $query['VSwitchesInfo'] = $request->vSwitchesInfo;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RemoveVSwitchesFromEpnInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveVSwitchesFromEpnInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes the networking information. This operation is applicable only for instances that reside in the internal network.
     *  *
     * @param RemoveVSwitchesFromEpnInstanceRequest $request RemoveVSwitchesFromEpnInstanceRequest
     *
     * @return RemoveVSwitchesFromEpnInstanceResponse RemoveVSwitchesFromEpnInstanceResponse
     */
    public function removeVSwitchesFromEpnInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->removeVSwitchesFromEpnInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Renews a subscription Android in Container (AIC) instance.
     *  *
     * @param RenewARMServerInstanceRequest $request RenewARMServerInstanceRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return RenewARMServerInstanceResponse RenewARMServerInstanceResponse
     */
    public function renewARMServerInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
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
            'action'      => 'RenewARMServerInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenewARMServerInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Renews a subscription Android in Container (AIC) instance.
     *  *
     * @param RenewARMServerInstanceRequest $request RenewARMServerInstanceRequest
     *
     * @return RenewARMServerInstanceResponse RenewARMServerInstanceResponse
     */
    public function renewARMServerInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewARMServerInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Renews a subscription instance.
     *  *
     * @param RenewInstanceRequest $request RenewInstanceRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return RenewInstanceResponse RenewInstanceResponse
     */
    public function renewInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RenewInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenewInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Renews a subscription instance.
     *  *
     * @param RenewInstanceRequest $request RenewInstanceRequest
     *
     * @return RenewInstanceResponse RenewInstanceResponse
     */
    public function renewInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Scales resources in an asynchronous manner and deploys or releases the container.
     *  *
     * @param RescaleApplicationRequest $request RescaleApplicationRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return RescaleApplicationResponse RescaleApplicationResponse
     */
    public function rescaleApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->rescaleLevel)) {
            $query['RescaleLevel'] = $request->rescaleLevel;
        }
        if (!Utils::isUnset($request->rescaleType)) {
            $query['RescaleType'] = $request->rescaleType;
        }
        if (!Utils::isUnset($request->resourceSelector)) {
            $query['ResourceSelector'] = $request->resourceSelector;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        if (!Utils::isUnset($request->toAppVersion)) {
            $query['ToAppVersion'] = $request->toAppVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RescaleApplication',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RescaleApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Scales resources in an asynchronous manner and deploys or releases the container.
     *  *
     * @param RescaleApplicationRequest $request RescaleApplicationRequest
     *
     * @return RescaleApplicationResponse RescaleApplicationResponse
     */
    public function rescaleApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rescaleApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary Scales out a bare metal device.
     *  *
     * @param RescaleDeviceServiceRequest $request RescaleDeviceServiceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return RescaleDeviceServiceResponse RescaleDeviceServiceResponse
     */
    public function rescaleDeviceServiceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->ipType)) {
            $query['IpType'] = $request->ipType;
        }
        if (!Utils::isUnset($request->rescaleLevel)) {
            $query['RescaleLevel'] = $request->rescaleLevel;
        }
        if (!Utils::isUnset($request->rescaleType)) {
            $query['RescaleType'] = $request->rescaleType;
        }
        if (!Utils::isUnset($request->resourceSpec)) {
            $query['ResourceSpec'] = $request->resourceSpec;
        }
        if (!Utils::isUnset($request->serviceId)) {
            $query['ServiceId'] = $request->serviceId;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        $body = [];
        if (!Utils::isUnset($request->resourceInfo)) {
            $body['ResourceInfo'] = $request->resourceInfo;
        }
        if (!Utils::isUnset($request->resourceSelector)) {
            $body['ResourceSelector'] = $request->resourceSelector;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RescaleDeviceService',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RescaleDeviceServiceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Scales out a bare metal device.
     *  *
     * @param RescaleDeviceServiceRequest $request RescaleDeviceServiceRequest
     *
     * @return RescaleDeviceServiceResponse RescaleDeviceServiceResponse
     */
    public function rescaleDeviceService($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rescaleDeviceServiceWithOptions($request, $runtime);
    }

    /**
     * @summary Resets an Android in Container (AIC) instance.
     *  *
     * @param ResetAICInstanceRequest $request ResetAICInstanceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetAICInstanceResponse ResetAICInstanceResponse
     */
    public function resetAICInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetAICInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetAICInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Resets an Android in Container (AIC) instance.
     *  *
     * @param ResetAICInstanceRequest $request ResetAICInstanceRequest
     *
     * @return ResetAICInstanceResponse ResetAICInstanceResponse
     */
    public function resetAICInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetAICInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Resets an instance including its image.
     *  *
     * @param ResetDeviceInstanceRequest $request ResetDeviceInstanceRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetDeviceInstanceResponse ResetDeviceInstanceResponse
     */
    public function resetDeviceInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetDeviceInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetDeviceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Resets an instance including its image.
     *  *
     * @param ResetDeviceInstanceRequest $request ResetDeviceInstanceRequest
     *
     * @return ResetDeviceInstanceResponse ResetDeviceInstanceResponse
     */
    public function resetDeviceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetDeviceInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Rolls back a disk by using a snapshot.
     *  *
     * @description When you call this operation, take note of the following items:
     * *   The disk must be in the In Use (In_Use) or Unattached (Available) state.
     * *   The instance to which the disk is attached must be in the Stopped (Stopped) state. You can call the **StopInstance** operation to stop an instance.
     * *   The snapshot specified by the SnapshotId parameter must be created from the disk specified by the DiskId parameter.
     * *   When you call the **DescribeInstance** operation to query instance information, if the response contains `{"OperationLocks": {"LockReason" : "security"}}` for an instance, the instance is locked for security reasons and you cannot perform operations on the instance.
     *  *
     * @param ResetDiskRequest $request ResetDiskRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return ResetDiskResponse ResetDiskResponse
     */
    public function resetDiskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->diskId)) {
            $query['DiskId'] = $request->diskId;
        }
        if (!Utils::isUnset($request->snapshotId)) {
            $query['SnapshotId'] = $request->snapshotId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResetDisk',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResetDiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Rolls back a disk by using a snapshot.
     *  *
     * @description When you call this operation, take note of the following items:
     * *   The disk must be in the In Use (In_Use) or Unattached (Available) state.
     * *   The instance to which the disk is attached must be in the Stopped (Stopped) state. You can call the **StopInstance** operation to stop an instance.
     * *   The snapshot specified by the SnapshotId parameter must be created from the disk specified by the DiskId parameter.
     * *   When you call the **DescribeInstance** operation to query instance information, if the response contains `{"OperationLocks": {"LockReason" : "security"}}` for an instance, the instance is locked for security reasons and you cannot perform operations on the instance.
     *  *
     * @param ResetDiskRequest $request ResetDiskRequest
     *
     * @return ResetDiskResponse ResetDiskResponse
     */
    public function resetDisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetDiskWithOptions($request, $runtime);
    }

    /**
     * @summary Resizes a pay-as-you-go disk that you purchase.
     *  *
     * @param ResizeDiskRequest $request ResizeDiskRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ResizeDiskResponse ResizeDiskResponse
     */
    public function resizeDiskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->diskId)) {
            $query['DiskId'] = $request->diskId;
        }
        if (!Utils::isUnset($request->newSize)) {
            $query['NewSize'] = $request->newSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ResizeDisk',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ResizeDiskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Resizes a pay-as-you-go disk that you purchase.
     *  *
     * @param ResizeDiskRequest $request ResizeDiskRequest
     *
     * @return ResizeDiskResponse ResizeDiskResponse
     */
    public function resizeDisk($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resizeDiskWithOptions($request, $runtime);
    }

    /**
     * @summary Restarts applications deployed on an instance and returns the restart results in a synchronous manner.
     *  *
     * @param RestartDeviceInstanceRequest $request RestartDeviceInstanceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return RestartDeviceInstanceResponse RestartDeviceInstanceResponse
     */
    public function restartDeviceInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestartDeviceInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RestartDeviceInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Restarts applications deployed on an instance and returns the restart results in a synchronous manner.
     *  *
     * @param RestartDeviceInstanceRequest $request RestartDeviceInstanceRequest
     *
     * @return RestartDeviceInstanceResponse RestartDeviceInstanceResponse
     */
    public function restartDeviceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartDeviceInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an inbound security group rule. After the rule is deleted, the access control implemented by the rule is removed.
     *  *
     * @description *   In the security group-related API documents, inbound traffic refers to the traffic sent by the source and received by the destination.
     * *   You can determine an inbound security group rule by specifying one of the following groups of parameters. You cannot determine a security group rule by specifying only one parameter.
     * *   You can specify one or more of the following parameters to remove access control for a CIDR block: IpProtocol, PortRange, Policy, and SourceCidrIp.
     *  *
     * @param RevokeSecurityGroupRequest $request RevokeSecurityGroupRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return RevokeSecurityGroupResponse RevokeSecurityGroupResponse
     */
    public function revokeSecurityGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ipProtocol)) {
            $query['IpProtocol'] = $request->ipProtocol;
        }
        if (!Utils::isUnset($request->policy)) {
            $query['Policy'] = $request->policy;
        }
        if (!Utils::isUnset($request->portRange)) {
            $query['PortRange'] = $request->portRange;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->sourceCidrIp)) {
            $query['SourceCidrIp'] = $request->sourceCidrIp;
        }
        if (!Utils::isUnset($request->sourcePortRange)) {
            $query['SourcePortRange'] = $request->sourcePortRange;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RevokeSecurityGroup',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RevokeSecurityGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an inbound security group rule. After the rule is deleted, the access control implemented by the rule is removed.
     *  *
     * @description *   In the security group-related API documents, inbound traffic refers to the traffic sent by the source and received by the destination.
     * *   You can determine an inbound security group rule by specifying one of the following groups of parameters. You cannot determine a security group rule by specifying only one parameter.
     * *   You can specify one or more of the following parameters to remove access control for a CIDR block: IpProtocol, PortRange, Policy, and SourceCidrIp.
     *  *
     * @param RevokeSecurityGroupRequest $request RevokeSecurityGroupRequest
     *
     * @return RevokeSecurityGroupResponse RevokeSecurityGroupResponse
     */
    public function revokeSecurityGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeSecurityGroupWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes an outbound security group rule. After the rule is deleted, the access control implemented by the rule is removed.
     *  *
     * @description >  In the security group-related API documents, outbound traffic refers to the traffic sent by the source and received by the destination.
     *  *
     * @param RevokeSecurityGroupEgressRequest $request RevokeSecurityGroupEgressRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return RevokeSecurityGroupEgressResponse RevokeSecurityGroupEgressResponse
     */
    public function revokeSecurityGroupEgressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->destCidrIp)) {
            $query['DestCidrIp'] = $request->destCidrIp;
        }
        if (!Utils::isUnset($request->ipProtocol)) {
            $query['IpProtocol'] = $request->ipProtocol;
        }
        if (!Utils::isUnset($request->policy)) {
            $query['Policy'] = $request->policy;
        }
        if (!Utils::isUnset($request->portRange)) {
            $query['PortRange'] = $request->portRange;
        }
        if (!Utils::isUnset($request->priority)) {
            $query['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->securityGroupId)) {
            $query['SecurityGroupId'] = $request->securityGroupId;
        }
        if (!Utils::isUnset($request->sourcePortRange)) {
            $query['SourcePortRange'] = $request->sourcePortRange;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RevokeSecurityGroupEgress',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RevokeSecurityGroupEgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes an outbound security group rule. After the rule is deleted, the access control implemented by the rule is removed.
     *  *
     * @description >  In the security group-related API documents, outbound traffic refers to the traffic sent by the source and received by the destination.
     *  *
     * @param RevokeSecurityGroupEgressRequest $request RevokeSecurityGroupEgressRequest
     *
     * @return RevokeSecurityGroupEgressResponse RevokeSecurityGroupEgressResponse
     */
    public function revokeSecurityGroupEgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->revokeSecurityGroupEgressWithOptions($request, $runtime);
    }

    /**
     * @summary Rolls back the container version of a specific application.
     *  *
     * @param RollbackApplicationRequest $request RollbackApplicationRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return RollbackApplicationResponse RollbackApplicationResponse
     */
    public function rollbackApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->fromAppVersion)) {
            $query['FromAppVersion'] = $request->fromAppVersion;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        if (!Utils::isUnset($request->toAppVersion)) {
            $query['ToAppVersion'] = $request->toAppVersion;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RollbackApplication',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RollbackApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Rolls back the container version of a specific application.
     *  *
     * @param RollbackApplicationRequest $request RollbackApplicationRequest
     *
     * @return RollbackApplicationResponse RollbackApplicationResponse
     */
    public function rollbackApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rollbackApplicationWithOptions($request, $runtime);
    }

    /**
     * @summary Creates one or more pay-as-you-go or subscription Edge Node Service (ENS) instances.
     *  *
     * @param RunInstancesRequest $tmpReq  RunInstancesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return RunInstancesResponse RunInstancesResponse
     */
    public function runInstancesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RunInstancesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->dataDisk)) {
            $request->dataDiskShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->dataDisk, 'DataDisk', 'json');
        }
        if (!Utils::isUnset($tmpReq->systemDisk)) {
            $request->systemDiskShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->systemDisk, 'SystemDisk', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->amount)) {
            $query['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->autoReleaseTime)) {
            $query['AutoReleaseTime'] = $request->autoReleaseTime;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $query['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->autoUseCoupon)) {
            $query['AutoUseCoupon'] = $request->autoUseCoupon;
        }
        if (!Utils::isUnset($request->billingCycle)) {
            $query['BillingCycle'] = $request->billingCycle;
        }
        if (!Utils::isUnset($request->carrier)) {
            $query['Carrier'] = $request->carrier;
        }
        if (!Utils::isUnset($request->dataDiskShrink)) {
            $query['DataDisk'] = $request->dataDiskShrink;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->hostName)) {
            $query['HostName'] = $request->hostName;
        }
        if (!Utils::isUnset($request->imageId)) {
            $query['ImageId'] = $request->imageId;
        }
        if (!Utils::isUnset($request->instanceChargeStrategy)) {
            $query['InstanceChargeStrategy'] = $request->instanceChargeStrategy;
        }
        if (!Utils::isUnset($request->instanceChargeType)) {
            $query['InstanceChargeType'] = $request->instanceChargeType;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $query['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->instanceType)) {
            $query['InstanceType'] = $request->instanceType;
        }
        if (!Utils::isUnset($request->internetChargeType)) {
            $query['InternetChargeType'] = $request->internetChargeType;
        }
        if (!Utils::isUnset($request->internetMaxBandwidthOut)) {
            $query['InternetMaxBandwidthOut'] = $request->internetMaxBandwidthOut;
        }
        if (!Utils::isUnset($request->ipType)) {
            $query['IpType'] = $request->ipType;
        }
        if (!Utils::isUnset($request->keyPairName)) {
            $query['KeyPairName'] = $request->keyPairName;
        }
        if (!Utils::isUnset($request->netDistrictCode)) {
            $query['NetDistrictCode'] = $request->netDistrictCode;
        }
        if (!Utils::isUnset($request->netWorkId)) {
            $query['NetWorkId'] = $request->netWorkId;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->passwordInherit)) {
            $query['PasswordInherit'] = $request->passwordInherit;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->privateIpAddress)) {
            $query['PrivateIpAddress'] = $request->privateIpAddress;
        }
        if (!Utils::isUnset($request->publicIpIdentification)) {
            $query['PublicIpIdentification'] = $request->publicIpIdentification;
        }
        if (!Utils::isUnset($request->scheduleAreaLevel)) {
            $query['ScheduleAreaLevel'] = $request->scheduleAreaLevel;
        }
        if (!Utils::isUnset($request->schedulingPriceStrategy)) {
            $query['SchedulingPriceStrategy'] = $request->schedulingPriceStrategy;
        }
        if (!Utils::isUnset($request->schedulingStrategy)) {
            $query['SchedulingStrategy'] = $request->schedulingStrategy;
        }
        if (!Utils::isUnset($request->securityId)) {
            $query['SecurityId'] = $request->securityId;
        }
        if (!Utils::isUnset($request->spotStrategy)) {
            $query['SpotStrategy'] = $request->spotStrategy;
        }
        if (!Utils::isUnset($request->systemDiskShrink)) {
            $query['SystemDisk'] = $request->systemDiskShrink;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        if (!Utils::isUnset($request->uniqueSuffix)) {
            $query['UniqueSuffix'] = $request->uniqueSuffix;
        }
        if (!Utils::isUnset($request->userData)) {
            $query['UserData'] = $request->userData;
        }
        if (!Utils::isUnset($request->vSwitchId)) {
            $query['VSwitchId'] = $request->vSwitchId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RunInstances',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RunInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates one or more pay-as-you-go or subscription Edge Node Service (ENS) instances.
     *  *
     * @param RunInstancesRequest $request RunInstancesRequest
     *
     * @return RunInstancesResponse RunInstancesResponse
     */
    public function runInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Schedules the nearest idle resources including instances and pods for your device based on the user ID and IP address and initializes the virtual environment.
     *  *
     * @param RunServiceScheduleRequest $request RunServiceScheduleRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return RunServiceScheduleResponse RunServiceScheduleResponse
     */
    public function runServiceScheduleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->clientIp)) {
            $query['ClientIp'] = $request->clientIp;
        }
        if (!Utils::isUnset($request->directorys)) {
            $query['Directorys'] = $request->directorys;
        }
        if (!Utils::isUnset($request->podConfigName)) {
            $query['PodConfigName'] = $request->podConfigName;
        }
        if (!Utils::isUnset($request->preLockedTimeout)) {
            $query['PreLockedTimeout'] = $request->preLockedTimeout;
        }
        if (!Utils::isUnset($request->scheduleStrategy)) {
            $query['ScheduleStrategy'] = $request->scheduleStrategy;
        }
        if (!Utils::isUnset($request->serviceAction)) {
            $query['ServiceAction'] = $request->serviceAction;
        }
        if (!Utils::isUnset($request->serviceCommands)) {
            $query['ServiceCommands'] = $request->serviceCommands;
        }
        if (!Utils::isUnset($request->uuid)) {
            $query['Uuid'] = $request->uuid;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RunServiceSchedule',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RunServiceScheduleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Schedules the nearest idle resources including instances and pods for your device based on the user ID and IP address and initializes the virtual environment.
     *  *
     * @param RunServiceScheduleRequest $request RunServiceScheduleRequest
     *
     * @return RunServiceScheduleResponse RunServiceScheduleResponse
     */
    public function runServiceSchedule($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runServiceScheduleWithOptions($request, $runtime);
    }

    /**
     * @summary Saves the disk of a specific device as a shared data group (SDG).
     *  *
     * @param SaveSDGRequest $request SaveSDGRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return SaveSDGResponse SaveSDGResponse
     */
    public function saveSDGWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SaveSDG',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveSDGResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Saves the disk of a specific device as a shared data group (SDG).
     *  *
     * @param SaveSDGRequest $request SaveSDGRequest
     *
     * @return SaveSDGResponse SaveSDGResponse
     */
    public function saveSDG($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->saveSDGWithOptions($request, $runtime);
    }

    /**
     * @summary Sets the weights of backend servers.
     *  *
     * @description *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 10 times per second per account.
     *  *
     * @param SetBackendServersRequest $tmpReq  SetBackendServersRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return SetBackendServersResponse SetBackendServersResponse
     */
    public function setBackendServersWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SetBackendServersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->backendServers)) {
            $request->backendServersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->backendServers, 'BackendServers', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->backendServersShrink)) {
            $query['BackendServers'] = $request->backendServersShrink;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetBackendServers',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetBackendServersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Sets the weights of backend servers.
     *  *
     * @description *   You can call this operation up to 100 times per second.
     * *   You can call this operation up to 10 times per second per account.
     *  *
     * @param SetBackendServersRequest $request SetBackendServersRequest
     *
     * @return SetBackendServersResponse SetBackendServersResponse
     */
    public function setBackendServers($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setBackendServersWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of an HTTP listener.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *  *
     * @param SetLoadBalancerHTTPListenerAttributeRequest $request SetLoadBalancerHTTPListenerAttributeRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return SetLoadBalancerHTTPListenerAttributeResponse SetLoadBalancerHTTPListenerAttributeResponse
     */
    public function setLoadBalancerHTTPListenerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->healthCheck)) {
            $query['HealthCheck'] = $request->healthCheck;
        }
        if (!Utils::isUnset($request->healthCheckConnectPort)) {
            $query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }
        if (!Utils::isUnset($request->healthCheckDomain)) {
            $query['HealthCheckDomain'] = $request->healthCheckDomain;
        }
        if (!Utils::isUnset($request->healthCheckHttpCode)) {
            $query['HealthCheckHttpCode'] = $request->healthCheckHttpCode;
        }
        if (!Utils::isUnset($request->healthCheckInterval)) {
            $query['HealthCheckInterval'] = $request->healthCheckInterval;
        }
        if (!Utils::isUnset($request->healthCheckMethod)) {
            $query['HealthCheckMethod'] = $request->healthCheckMethod;
        }
        if (!Utils::isUnset($request->healthCheckTimeout)) {
            $query['HealthCheckTimeout'] = $request->healthCheckTimeout;
        }
        if (!Utils::isUnset($request->healthCheckURI)) {
            $query['HealthCheckURI'] = $request->healthCheckURI;
        }
        if (!Utils::isUnset($request->healthyThreshold)) {
            $query['HealthyThreshold'] = $request->healthyThreshold;
        }
        if (!Utils::isUnset($request->idleTimeout)) {
            $query['IdleTimeout'] = $request->idleTimeout;
        }
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->requestTimeout)) {
            $query['RequestTimeout'] = $request->requestTimeout;
        }
        if (!Utils::isUnset($request->scheduler)) {
            $query['Scheduler'] = $request->scheduler;
        }
        if (!Utils::isUnset($request->unhealthyThreshold)) {
            $query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetLoadBalancerHTTPListenerAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetLoadBalancerHTTPListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of an HTTP listener.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *  *
     * @param SetLoadBalancerHTTPListenerAttributeRequest $request SetLoadBalancerHTTPListenerAttributeRequest
     *
     * @return SetLoadBalancerHTTPListenerAttributeResponse SetLoadBalancerHTTPListenerAttributeResponse
     */
    public function setLoadBalancerHTTPListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLoadBalancerHTTPListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of an HTTPS listener.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *  *
     * @param SetLoadBalancerHTTPSListenerAttributeRequest $request SetLoadBalancerHTTPSListenerAttributeRequest
     * @param RuntimeOptions                               $runtime runtime options for this request RuntimeOptions
     *
     * @return SetLoadBalancerHTTPSListenerAttributeResponse SetLoadBalancerHTTPSListenerAttributeResponse
     */
    public function setLoadBalancerHTTPSListenerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->healthCheck)) {
            $query['HealthCheck'] = $request->healthCheck;
        }
        if (!Utils::isUnset($request->healthCheckConnectPort)) {
            $query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }
        if (!Utils::isUnset($request->healthCheckDomain)) {
            $query['HealthCheckDomain'] = $request->healthCheckDomain;
        }
        if (!Utils::isUnset($request->healthCheckHttpCode)) {
            $query['HealthCheckHttpCode'] = $request->healthCheckHttpCode;
        }
        if (!Utils::isUnset($request->healthCheckInterval)) {
            $query['HealthCheckInterval'] = $request->healthCheckInterval;
        }
        if (!Utils::isUnset($request->healthCheckMethod)) {
            $query['HealthCheckMethod'] = $request->healthCheckMethod;
        }
        if (!Utils::isUnset($request->healthCheckTimeout)) {
            $query['HealthCheckTimeout'] = $request->healthCheckTimeout;
        }
        if (!Utils::isUnset($request->healthCheckURI)) {
            $query['HealthCheckURI'] = $request->healthCheckURI;
        }
        if (!Utils::isUnset($request->healthyThreshold)) {
            $query['HealthyThreshold'] = $request->healthyThreshold;
        }
        if (!Utils::isUnset($request->idleTimeout)) {
            $query['IdleTimeout'] = $request->idleTimeout;
        }
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->requestTimeout)) {
            $query['RequestTimeout'] = $request->requestTimeout;
        }
        if (!Utils::isUnset($request->scheduler)) {
            $query['Scheduler'] = $request->scheduler;
        }
        if (!Utils::isUnset($request->serverCertificateId)) {
            $query['ServerCertificateId'] = $request->serverCertificateId;
        }
        if (!Utils::isUnset($request->unhealthyThreshold)) {
            $query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetLoadBalancerHTTPSListenerAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetLoadBalancerHTTPSListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of an HTTPS listener.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *  *
     * @param SetLoadBalancerHTTPSListenerAttributeRequest $request SetLoadBalancerHTTPSListenerAttributeRequest
     *
     * @return SetLoadBalancerHTTPSListenerAttributeResponse SetLoadBalancerHTTPSListenerAttributeResponse
     */
    public function setLoadBalancerHTTPSListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLoadBalancerHTTPSListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the status of an Edge Load Balancer (ELB) instance.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *  *
     * @param SetLoadBalancerStatusRequest $request SetLoadBalancerStatusRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SetLoadBalancerStatusResponse SetLoadBalancerStatusResponse
     */
    public function setLoadBalancerStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->loadBalancerStatus)) {
            $query['LoadBalancerStatus'] = $request->loadBalancerStatus;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetLoadBalancerStatus',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetLoadBalancerStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the status of an Edge Load Balancer (ELB) instance.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *  *
     * @param SetLoadBalancerStatusRequest $request SetLoadBalancerStatusRequest
     *
     * @return SetLoadBalancerStatusResponse SetLoadBalancerStatusResponse
     */
    public function setLoadBalancerStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLoadBalancerStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of a TCP listener.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *  *
     * @param SetLoadBalancerTCPListenerAttributeRequest $request SetLoadBalancerTCPListenerAttributeRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return SetLoadBalancerTCPListenerAttributeResponse SetLoadBalancerTCPListenerAttributeResponse
     */
    public function setLoadBalancerTCPListenerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->eipTransmit)) {
            $query['EipTransmit'] = $request->eipTransmit;
        }
        if (!Utils::isUnset($request->establishedTimeout)) {
            $query['EstablishedTimeout'] = $request->establishedTimeout;
        }
        if (!Utils::isUnset($request->healthCheckConnectPort)) {
            $query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }
        if (!Utils::isUnset($request->healthCheckConnectTimeout)) {
            $query['HealthCheckConnectTimeout'] = $request->healthCheckConnectTimeout;
        }
        if (!Utils::isUnset($request->healthCheckDomain)) {
            $query['HealthCheckDomain'] = $request->healthCheckDomain;
        }
        if (!Utils::isUnset($request->healthCheckHttpCode)) {
            $query['HealthCheckHttpCode'] = $request->healthCheckHttpCode;
        }
        if (!Utils::isUnset($request->healthCheckInterval)) {
            $query['HealthCheckInterval'] = $request->healthCheckInterval;
        }
        if (!Utils::isUnset($request->healthCheckType)) {
            $query['HealthCheckType'] = $request->healthCheckType;
        }
        if (!Utils::isUnset($request->healthCheckURI)) {
            $query['HealthCheckURI'] = $request->healthCheckURI;
        }
        if (!Utils::isUnset($request->healthyThreshold)) {
            $query['HealthyThreshold'] = $request->healthyThreshold;
        }
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->persistenceTimeout)) {
            $query['PersistenceTimeout'] = $request->persistenceTimeout;
        }
        if (!Utils::isUnset($request->scheduler)) {
            $query['Scheduler'] = $request->scheduler;
        }
        if (!Utils::isUnset($request->unhealthyThreshold)) {
            $query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetLoadBalancerTCPListenerAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetLoadBalancerTCPListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of a TCP listener.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *  *
     * @param SetLoadBalancerTCPListenerAttributeRequest $request SetLoadBalancerTCPListenerAttributeRequest
     *
     * @return SetLoadBalancerTCPListenerAttributeResponse SetLoadBalancerTCPListenerAttributeResponse
     */
    public function setLoadBalancerTCPListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLoadBalancerTCPListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the configurations of a UDP listener.
     *  *
     * @description >
     * *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *  *
     * @param SetLoadBalancerUDPListenerAttributeRequest $request SetLoadBalancerUDPListenerAttributeRequest
     * @param RuntimeOptions                             $runtime runtime options for this request RuntimeOptions
     *
     * @return SetLoadBalancerUDPListenerAttributeResponse SetLoadBalancerUDPListenerAttributeResponse
     */
    public function setLoadBalancerUDPListenerAttributeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->eipTransmit)) {
            $query['EipTransmit'] = $request->eipTransmit;
        }
        if (!Utils::isUnset($request->healthCheckConnectPort)) {
            $query['HealthCheckConnectPort'] = $request->healthCheckConnectPort;
        }
        if (!Utils::isUnset($request->healthCheckConnectTimeout)) {
            $query['HealthCheckConnectTimeout'] = $request->healthCheckConnectTimeout;
        }
        if (!Utils::isUnset($request->healthCheckExp)) {
            $query['HealthCheckExp'] = $request->healthCheckExp;
        }
        if (!Utils::isUnset($request->healthCheckInterval)) {
            $query['HealthCheckInterval'] = $request->healthCheckInterval;
        }
        if (!Utils::isUnset($request->healthCheckReq)) {
            $query['HealthCheckReq'] = $request->healthCheckReq;
        }
        if (!Utils::isUnset($request->healthyThreshold)) {
            $query['HealthyThreshold'] = $request->healthyThreshold;
        }
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        if (!Utils::isUnset($request->scheduler)) {
            $query['Scheduler'] = $request->scheduler;
        }
        if (!Utils::isUnset($request->unhealthyThreshold)) {
            $query['UnhealthyThreshold'] = $request->unhealthyThreshold;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetLoadBalancerUDPListenerAttribute',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetLoadBalancerUDPListenerAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the configurations of a UDP listener.
     *  *
     * @description >
     * *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *  *
     * @param SetLoadBalancerUDPListenerAttributeRequest $request SetLoadBalancerUDPListenerAttributeRequest
     *
     * @return SetLoadBalancerUDPListenerAttributeResponse SetLoadBalancerUDPListenerAttributeResponse
     */
    public function setLoadBalancerUDPListenerAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setLoadBalancerUDPListenerAttributeWithOptions($request, $runtime);
    }

    /**
     * @summary Starts an edge network instance.
     *  *
     * @param StartEpnInstanceRequest $request StartEpnInstanceRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return StartEpnInstanceResponse StartEpnInstanceResponse
     */
    public function startEpnInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->EPNInstanceId)) {
            $query['EPNInstanceId'] = $request->EPNInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartEpnInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartEpnInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Starts an edge network instance.
     *  *
     * @param StartEpnInstanceRequest $request StartEpnInstanceRequest
     *
     * @return StartEpnInstanceResponse StartEpnInstanceResponse
     */
    public function startEpnInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startEpnInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Starts an instance.
     *  *
     * @description *   You can call the operation only when the instance is in the Stopped state.
     * *   If the operation is successful, the status of the instance becomes Starting.
     *  *
     * @param StartInstanceRequest $request StartInstanceRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return StartInstanceResponse StartInstanceResponse
     */
    public function startInstanceWithOptions($request, $runtime)
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
            'action'      => 'StartInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Starts an instance.
     *  *
     * @description *   You can call the operation only when the instance is in the Stopped state.
     * *   If the operation is successful, the status of the instance becomes Starting.
     *  *
     * @param StartInstanceRequest $request StartInstanceRequest
     *
     * @return StartInstanceResponse StartInstanceResponse
     */
    public function startInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 选择批量实例进行启动操作
     *  *
     * @param StartInstancesRequest $tmpReq  StartInstancesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return StartInstancesResponse StartInstancesResponse
     */
    public function startInstancesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new StartInstancesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->instanceIds)) {
            $request->instanceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->instanceIdsShrink)) {
            $query['InstanceIds'] = $request->instanceIdsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartInstances',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 选择批量实例进行启动操作
     *  *
     * @param StartInstancesRequest $request StartInstancesRequest
     *
     * @return StartInstancesResponse StartInstancesResponse
     */
    public function startInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Enables a listener.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *  *
     * @param StartLoadBalancerListenerRequest $request StartLoadBalancerListenerRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return StartLoadBalancerListenerResponse StartLoadBalancerListenerResponse
     */
    public function startLoadBalancerListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->listenerProtocol)) {
            $query['ListenerProtocol'] = $request->listenerProtocol;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartLoadBalancerListener',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartLoadBalancerListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables a listener.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *  *
     * @param StartLoadBalancerListenerRequest $request StartLoadBalancerListenerRequest
     *
     * @return StartLoadBalancerListenerResponse StartLoadBalancerListenerResponse
     */
    public function startLoadBalancerListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startLoadBalancerListenerWithOptions($request, $runtime);
    }

    /**
     * @summary Starts the elastic IP address (EIP) specified in a source network address translation (SNAT) entry.
     *  *
     * @param StartSnatIpForSnatEntryRequest $request StartSnatIpForSnatEntryRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return StartSnatIpForSnatEntryResponse StartSnatIpForSnatEntryResponse
     */
    public function startSnatIpForSnatEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->snatEntryId)) {
            $query['SnatEntryId'] = $request->snatEntryId;
        }
        if (!Utils::isUnset($request->snatIp)) {
            $query['SnatIp'] = $request->snatIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartSnatIpForSnatEntry',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartSnatIpForSnatEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Starts the elastic IP address (EIP) specified in a source network address translation (SNAT) entry.
     *  *
     * @param StartSnatIpForSnatEntryRequest $request StartSnatIpForSnatEntryRequest
     *
     * @return StartSnatIpForSnatEntryResponse StartSnatIpForSnatEntryResponse
     */
    public function startSnatIpForSnatEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->startSnatIpForSnatEntryWithOptions($request, $runtime);
    }

    /**
     * @summary Stops an EPN instance.
     *  *
     * @param StopEpnInstanceRequest $request StopEpnInstanceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return StopEpnInstanceResponse StopEpnInstanceResponse
     */
    public function stopEpnInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->EPNInstanceId)) {
            $query['EPNInstanceId'] = $request->EPNInstanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopEpnInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopEpnInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Stops an EPN instance.
     *  *
     * @param StopEpnInstanceRequest $request StopEpnInstanceRequest
     *
     * @return StopEpnInstanceResponse StopEpnInstanceResponse
     */
    public function stopEpnInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopEpnInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Stops an instance.
     *  *
     * @description *   You can call this operation to stop instances that are only in the Running state.
     * *   If the call is successful, the state of the instance becomes Stopping.
     * *   Once the instance is stopped, the state of the instance becomes Stopped.
     * *   Force stop is supported, which is equivalent to power-off. Data that is not written to disks on the instance may be lost.
     *  *
     * @param StopInstanceRequest $request StopInstanceRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return StopInstanceResponse StopInstanceResponse
     */
    public function stopInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->forceStop)) {
            $query['ForceStop'] = $request->forceStop;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopInstance',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Stops an instance.
     *  *
     * @description *   You can call this operation to stop instances that are only in the Running state.
     * *   If the call is successful, the state of the instance becomes Stopping.
     * *   Once the instance is stopped, the state of the instance becomes Stopped.
     * *   Force stop is supported, which is equivalent to power-off. Data that is not written to disks on the instance may be lost.
     *  *
     * @param StopInstanceRequest $request StopInstanceRequest
     *
     * @return StopInstanceResponse StopInstanceResponse
     */
    public function stopInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 选择批量实例进行停止操作
     *  *
     * @param StopInstancesRequest $tmpReq  StopInstancesRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return StopInstancesResponse StopInstancesResponse
     */
    public function stopInstancesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new StopInstancesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->instanceIds)) {
            $request->instanceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'simple');
        }
        $query = [];
        if (!Utils::isUnset($request->instanceIdsShrink)) {
            $query['InstanceIds'] = $request->instanceIdsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopInstances',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 选择批量实例进行停止操作
     *  *
     * @param StopInstancesRequest $request StopInstancesRequest
     *
     * @return StopInstancesResponse StopInstancesResponse
     */
    public function stopInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary Disables a listener.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *  *
     * @param StopLoadBalancerListenerRequest $request StopLoadBalancerListenerRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return StopLoadBalancerListenerResponse StopLoadBalancerListenerResponse
     */
    public function stopLoadBalancerListenerWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->listenerPort)) {
            $query['ListenerPort'] = $request->listenerPort;
        }
        if (!Utils::isUnset($request->listenerProtocol)) {
            $query['ListenerProtocol'] = $request->listenerProtocol;
        }
        if (!Utils::isUnset($request->loadBalancerId)) {
            $query['LoadBalancerId'] = $request->loadBalancerId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopLoadBalancerListener',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopLoadBalancerListenerResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disables a listener.
     *  *
     * @description *   You can call this operation up to 100 times per second per account.
     * *   You can call this operation up to 10 times per second per user.
     *  *
     * @param StopLoadBalancerListenerRequest $request StopLoadBalancerListenerRequest
     *
     * @return StopLoadBalancerListenerResponse StopLoadBalancerListenerResponse
     */
    public function stopLoadBalancerListener($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopLoadBalancerListenerWithOptions($request, $runtime);
    }

    /**
     * @summary Disables an elastic IP address (EIP) in a source network address translation (SNAT) entry.
     *  *
     * @param StopSnatIpForSnatEntryRequest $request StopSnatIpForSnatEntryRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return StopSnatIpForSnatEntryResponse StopSnatIpForSnatEntryResponse
     */
    public function stopSnatIpForSnatEntryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->snatEntryId)) {
            $query['SnatEntryId'] = $request->snatEntryId;
        }
        if (!Utils::isUnset($request->snatIp)) {
            $query['SnatIp'] = $request->snatIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopSnatIpForSnatEntry',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopSnatIpForSnatEntryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disables an elastic IP address (EIP) in a source network address translation (SNAT) entry.
     *  *
     * @param StopSnatIpForSnatEntryRequest $request StopSnatIpForSnatEntryRequest
     *
     * @return StopSnatIpForSnatEntryResponse StopSnatIpForSnatEntryResponse
     */
    public function stopSnatIpForSnatEntry($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopSnatIpForSnatEntryWithOptions($request, $runtime);
    }

    /**
     * @summary Disassociates an elastic IP address (EIP) from an instance.
     *  *
     * @param UnAssociateEnsEipAddressRequest $request UnAssociateEnsEipAddressRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return UnAssociateEnsEipAddressResponse UnAssociateEnsEipAddressResponse
     */
    public function unAssociateEnsEipAddressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->allocationId)) {
            $query['AllocationId'] = $request->allocationId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnAssociateEnsEipAddress',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnAssociateEnsEipAddressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disassociates an elastic IP address (EIP) from an instance.
     *  *
     * @param UnAssociateEnsEipAddressRequest $request UnAssociateEnsEipAddressRequest
     *
     * @return UnAssociateEnsEipAddressResponse UnAssociateEnsEipAddressResponse
     */
    public function unAssociateEnsEipAddress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unAssociateEnsEipAddressWithOptions($request, $runtime);
    }

    /**
     * @summary Unassigns secondary private IP addresses from an elastic network interface (ENI).
     *  *
     * @param UnassignPrivateIpAddressesRequest $request UnassignPrivateIpAddressesRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return UnassignPrivateIpAddressesResponse UnassignPrivateIpAddressesResponse
     */
    public function unassignPrivateIpAddressesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->networkInterfaceId)) {
            $query['NetworkInterfaceId'] = $request->networkInterfaceId;
        }
        if (!Utils::isUnset($request->privateIpAddress)) {
            $query['PrivateIpAddress'] = $request->privateIpAddress;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnassignPrivateIpAddresses',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnassignPrivateIpAddressesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Unassigns secondary private IP addresses from an elastic network interface (ENI).
     *  *
     * @param UnassignPrivateIpAddressesRequest $request UnassignPrivateIpAddressesRequest
     *
     * @return UnassignPrivateIpAddressesResponse UnassignPrivateIpAddressesResponse
     */
    public function unassignPrivateIpAddresses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unassignPrivateIpAddressesWithOptions($request, $runtime);
    }

    /**
     * @summary Disassociates a network access control list (ACL) from a network.
     *  *
     * @param UnassociateNetworkAclRequest $request UnassociateNetworkAclRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return UnassociateNetworkAclResponse UnassociateNetworkAclResponse
     */
    public function unassociateNetworkAclWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->networkAclId)) {
            $query['NetworkAclId'] = $request->networkAclId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UnassociateNetworkAcl',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UnassociateNetworkAclResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disassociates a network access control list (ACL) from a network.
     *  *
     * @param UnassociateNetworkAclRequest $request UnassociateNetworkAclRequest
     *
     * @return UnassociateNetworkAclResponse UnassociateNetworkAclResponse
     */
    public function unassociateNetworkAcl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->unassociateNetworkAclWithOptions($request, $runtime);
    }

    /**
     * @summary 修改售卖约束
     *  *
     * @param UpdateEnsSaleControlRequest $tmpReq  UpdateEnsSaleControlRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateEnsSaleControlResponse UpdateEnsSaleControlResponse
     */
    public function updateEnsSaleControlWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateEnsSaleControlShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->saleControls)) {
            $request->saleControlsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->saleControls, 'SaleControls', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->aliUidAccount)) {
            $query['AliUidAccount'] = $request->aliUidAccount;
        }
        if (!Utils::isUnset($request->commodityCode)) {
            $query['CommodityCode'] = $request->commodityCode;
        }
        if (!Utils::isUnset($request->saleControlsShrink)) {
            $query['SaleControls'] = $request->saleControlsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateEnsSaleControl',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateEnsSaleControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 修改售卖约束
     *  *
     * @param UpdateEnsSaleControlRequest $request UpdateEnsSaleControlRequest
     *
     * @return UpdateEnsSaleControlResponse UpdateEnsSaleControlResponse
     */
    public function updateEnsSaleControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateEnsSaleControlWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the image of an Android in Container (AIC) instance.
     *  *
     * @param UpgradeAICInstanceImageRequest $tmpReq  UpgradeAICInstanceImageRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeAICInstanceImageResponse UpgradeAICInstanceImageResponse
     */
    public function upgradeAICInstanceImageWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpgradeAICInstanceImageShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->serverIds)) {
            $request->serverIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->serverIds, 'ServerIds', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeAICInstanceImage',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeAICInstanceImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the image of an Android in Container (AIC) instance.
     *  *
     * @param UpgradeAICInstanceImageRequest $request UpgradeAICInstanceImageRequest
     *
     * @return UpgradeAICInstanceImageResponse UpgradeAICInstanceImageResponse
     */
    public function upgradeAICInstanceImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeAICInstanceImageWithOptions($request, $runtime);
    }

    /**
     * @summary Updates the container in an asynchronous manner. You can configure multiple canary release policies.
     *  *
     * @param UpgradeApplicationRequest $request UpgradeApplicationRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return UpgradeApplicationResponse UpgradeApplicationResponse
     */
    public function upgradeApplicationWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appId)) {
            $query['AppId'] = $request->appId;
        }
        if (!Utils::isUnset($request->template)) {
            $query['Template'] = $request->template;
        }
        if (!Utils::isUnset($request->timeout)) {
            $query['Timeout'] = $request->timeout;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpgradeApplication',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpgradeApplicationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Updates the container in an asynchronous manner. You can configure multiple canary release policies.
     *  *
     * @param UpgradeApplicationRequest $request UpgradeApplicationRequest
     *
     * @return UpgradeApplicationResponse UpgradeApplicationResponse
     */
    public function upgradeApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeApplicationWithOptions($request, $runtime);
    }
}
