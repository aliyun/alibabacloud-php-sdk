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
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeWorkflowActivityRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeWorkflowActivityResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeWorkflowRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeWorkflowResponse;
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
use AlibabaCloud\SDK\Ens\V20171110\Models\ResetAICInstanceShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ResetDeviceInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ResetDeviceInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ResetDiskRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ResetDiskResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\ResizeDiskRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\ResizeDiskResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RestartDeviceInstanceRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RestartDeviceInstanceResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RestartWorkflowRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RestartWorkflowResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RestartWorkflowShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RetryWorkflowRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RetryWorkflowResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RetryWorkflowShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RevokeSecurityGroupEgressRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RevokeSecurityGroupEgressResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RevokeSecurityGroupRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RevokeSecurityGroupResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RollbackApplicationRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RollbackApplicationResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RollbackWorkflowRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RollbackWorkflowResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RollbackWorkflowShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RunInstancesRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RunInstancesResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\RunInstancesShrinkRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RunServiceScheduleRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\RunServiceScheduleResponse;
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
use AlibabaCloud\SDK\Ens\V20171110\Models\TerminateWorkflowRequest;
use AlibabaCloud\SDK\Ens\V20171110\Models\TerminateWorkflowResponse;
use AlibabaCloud\SDK\Ens\V20171110\Models\TerminateWorkflowShrinkRequest;
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
     * @param AccosicateNetworkAclRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return AccosicateNetworkAclResponse
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
     * *   You can call this operation up to 100 times per second.
     *   * *   You can call this operation up to 10 times per second per account.
     *   *
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
     * *   You can call this operation up to 100 times per second.
     *   * *   You can call this operation up to 10 times per second per account.
     *   *
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
     * @param AddDeviceInternetPortRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return AddDeviceInternetPortResponse
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
     * @param AddDeviceInternetPortRequest $request
     *
     * @return AddDeviceInternetPortResponse
     */
    public function addDeviceInternetPort($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addDeviceInternetPortWithOptions($request, $runtime);
    }

    /**
     * # [](#)Usage notes
     *   * *   You can call this operation up to 100 times per second.
     *   * *   You can call this operation up to 5 times per second per user.
     *   * *   Internal networks and IPv4 addresses are not supported.
     *   *
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
     * # [](#)Usage notes
     *   * *   You can call this operation up to 100 times per second.
     *   * *   You can call this operation up to 5 times per second per user.
     *   * *   Internal networks and IPv4 addresses are not supported.
     *   *
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
     * @param AddSnatIpForSnatEntryRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return AddSnatIpForSnatEntryResponse
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
     * @param AssignPrivateIpAddressesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return AssignPrivateIpAddressesResponse
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
     * @param AssociateEnsEipAddressRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AssociateEnsEipAddressResponse
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
     * @param AttachDiskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return AttachDiskResponse
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
     * # [](#)Usage notes
     *   * *   You can call this operation up to 10 times per second per account.
     *   * *   After you execute the command, the instance restarts loading.
     *   * *   Limits: The instance has at least two vCPUs and 4 GB memory. An image of CentOS 7.4 or later is required.
     *   *
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
     * # [](#)Usage notes
     *   * *   You can call this operation up to 10 times per second per account.
     *   * *   After you execute the command, the instance restarts loading.
     *   * *   Limits: The instance has at least two vCPUs and 4 GB memory. An image of CentOS 7.4 or later is required.
     *   *
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
     * @param AuthorizeSecurityGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AuthorizeSecurityGroupResponse
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
     * In the security group-related API documents, outbound traffic refers to the traffic that is sent by the source device and received at the destination device.
     *   *
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
     * In the security group-related API documents, outbound traffic refers to the traffic that is sent by the source device and received at the destination device.
     *   *
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
     * @param CleanDistDataRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CleanDistDataResponse
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
     * @param CopySDGRequest $tmpReq
     * @param RuntimeOptions $runtime
     *
     * @return CopySDGResponse
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
     * @param CopySnapshotRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return CopySnapshotResponse
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
     * @param CreateARMServerInstancesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateARMServerInstancesResponse
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
     * @param CreateApplicationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateApplicationResponse
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
     * @param CreateClassicNetworkRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return CreateClassicNetworkResponse
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
     * @param CreateDiskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return CreateDiskResponse
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
     * *   You can call this operation up to 5,000 times per second per account.
     *   * *   You can call this operation up to 50 times per second per user.
     *   *
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
     * *   You can call this operation up to 5,000 times per second per account.
     *   * *   You can call this operation up to 50 times per second per user.
     *   *
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
     * @param CreateEnsRouteEntryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateEnsRouteEntryResponse
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
     * @param CreateEnsSaleControlRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return CreateEnsSaleControlResponse
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
     * @param CreateEnsServiceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateEnsServiceResponse
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
     * @param CreateEpnInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return CreateEpnInstanceResponse
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
     * @param CreateFileSystemRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return CreateFileSystemResponse
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
     * @param CreateForwardEntryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return CreateForwardEntryResponse
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
     * @param CreateImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return CreateImageResponse
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
     * *   You can call this operation up to 10 times per second per account.
     *   * *   We recommend that you increase the request time because instance creation is an asynchronous operation. If the return code of the API operation is 0, it indicates that the request is successful, but does not indicate that the instance is created. If the request is successful, an instance ID is returned. You can check whether the instance is created based on the instance ID.
     *   * *   InvalidUserData.NotInWhiteList operation restriction: You can create an instance only if you are in the whitelist in which members have the purchase permissions. Otherwise, an error is returned.
     *   *
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
     * *   You can call this operation up to 10 times per second per account.
     *   * *   We recommend that you increase the request time because instance creation is an asynchronous operation. If the return code of the API operation is 0, it indicates that the request is successful, but does not indicate that the instance is created. If the request is successful, an instance ID is returned. You can check whether the instance is created based on the instance ID.
     *   * *   InvalidUserData.NotInWhiteList operation restriction: You can create an instance only if you are in the whitelist in which members have the purchase permissions. Otherwise, an error is returned.
     *   *
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
     * @param CreateInstanceActiveOpsTaskRequest $tmpReq
     * @param RuntimeOptions                     $runtime
     *
     * @return CreateInstanceActiveOpsTaskResponse
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
     * An SSH key pair consists of a public key and a private key. ENS stores the public key and returns the unencrypted private key that is PEM-encoded in the PKCS#8 format. You must securely lock away the private key.
     *   *
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
     * An SSH key pair consists of a public key and a private key. ENS stores the public key and returns the unencrypted private key that is PEM-encoded in the PKCS#8 format. You must securely lock away the private key.
     *   *
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
     * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 5 times per second per user.
     *   *
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
     * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 5 times per second per user.
     *   *
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
     * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 10 times per second per user.
     *   *
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
     * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 10 times per second per user.
     *   *
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
     * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 10 times per second per user.
     *   *
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
     * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 10 times per second per user.
     *   *
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
     * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 10 times per second per user.
     *   *
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
     * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 10 times per second per user.
     *   *
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
     * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 10 times per second per user.
     *   *
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
     * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 10 times per second per user.
     *   *
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
     * ## [](#)Precautions
     *   * After you call this operation, a mount target is not immediately created. Therefore, we recommend that you call the DescribeMountTargets operation to query the status of the mount target. If the mount target is in the Active state, you can then mount the file system. Otherwise, the file system may fail to be mounted.
     *   *
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
     * ## [](#)Precautions
     *   * After you call this operation, a mount target is not immediately created. Therefore, we recommend that you call the DescribeMountTargets operation to query the status of the mount target. If the mount target is in the Active state, you can then mount the file system. Otherwise, the file system may fail to be mounted.
     *   *
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
     * @param CreateNatGatewayRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateNatGatewayResponse
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
     * *   You can call this operation up to 100 times per second.
     *   * *   You can call this operation up to 5 times per second per user.
     *   *
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
     * *   You can call this operation up to 100 times per second.
     *   * *   You can call this operation up to 5 times per second per user.
     *   *
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
     * @param CreateNetworkAclRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return CreateNetworkAclResponse
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
     * @param CreateNetworkAclEntryRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateNetworkAclEntryResponse
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
     * @param CreateSecurityGroupRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return CreateSecurityGroupResponse
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
     * @param CreateSnapshotRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return CreateSnapshotResponse
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
     * @param CreateSnatEntryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return CreateSnatEntryResponse
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
     * @param CreateVSwitchRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CreateVSwitchResponse
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
     * @param DeleteApplicationRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteApplicationResponse
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
     * @param DeleteBucketLifecycleRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteBucketLifecycleResponse
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
     * @param DeleteDeviceInternetPortRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteDeviceInternetPortResponse
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
     * @param DeleteDeviceInternetPortRequest $request
     *
     * @return DeleteDeviceInternetPortResponse
     */
    public function deleteDeviceInternetPort($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteDeviceInternetPortWithOptions($request, $runtime);
    }

    /**
     * When you release a disk, the disk must be in the Available state.
     *   *
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
     * When you release a disk, the disk must be in the Available state.
     *   *
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
     * @param DeleteEnsRouteEntryRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DeleteEnsRouteEntryResponse
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
     * @param DeleteEnsSaleConditionControlRequest $tmpReq
     * @param RuntimeOptions                       $runtime
     *
     * @return DeleteEnsSaleConditionControlResponse
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
     * @param DeleteEnsSaleControlRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return DeleteEnsSaleControlResponse
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
     * You can delete an EPN instance only when the instance group information is empty.
     *   *
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
     * You can delete an EPN instance only when the instance group information is empty.
     *   *
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
     * @param DeleteFileSystemRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteFileSystemResponse
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
     * @param DeleteForwardEntryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DeleteForwardEntryResponse
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
     * @param DeleteImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteImageResponse
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
     * *   After you delete an SSH key pair, you can no longer query the key pair by calling the DescribeKeyPairs operation.
     *   * *   If you delete an SSH key pair that is bound to an Edge Node Service (ENS) instance, ENS no longer stores the SSH key pair. However, you can still use the key pair to access the instance. When you call the DescribeInstance operation to query instance information, no other information but the name of the key pair (**KeyPairName**) is returned.
     *   *
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
     * *   After you delete an SSH key pair, you can no longer query the key pair by calling the DescribeKeyPairs operation.
     *   * *   If you delete an SSH key pair that is bound to an Edge Node Service (ENS) instance, ENS no longer stores the SSH key pair. However, you can still use the key pair to access the instance. When you call the DescribeInstance operation to query instance information, no other information but the name of the key pair (**KeyPairName**) is returned.
     *   *
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
     * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 10 times per second per user.
     *   *
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
     * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 10 times per second per user.
     *   *
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
     * After you delete a mount target, the mount target cannot be restored. Proceed with caution.
     *   *
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
     * After you delete a mount target, the mount target cannot be restored. Proceed with caution.
     *   *
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
     * @param DeleteNatGatewayRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteNatGatewayResponse
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
     * @param DeleteNetworkRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteNetworkResponse
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
     * @param DeleteNetworkAclRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DeleteNetworkAclResponse
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
     * @param DeleteNetworkAclEntryRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteNetworkAclEntryResponse
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
     * @param DeleteObjectRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return DeleteObjectResponse
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
     * Before you delete a security group, make sure that no instances exist in the security group.
     *   *
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
     * Before you delete a security group, make sure that no instances exist in the security group.
     *   *
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
     * @param DeleteSnapshotRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteSnapshotResponse
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
     * @param DeleteSnatEntryRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return DeleteSnatEntryResponse
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
     * @param DeleteSnatIpForSnatEntryRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DeleteSnatIpForSnatEntryResponse
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
     * Before you delete a vSwitch, make sure that no instances exist in the vSwitch.
     *   *
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
     * Before you delete a vSwitch, make sure that no instances exist in the vSwitch.
     *   *
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
     * @param DeploySDGRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return DeploySDGResponse
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
     * @param DescribeAICImagesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeAICImagesResponse
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
     * @param DescribeARMServerInstancesRequest $tmpReq
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeARMServerInstancesResponse
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
     * @param DescribeApplicationRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeApplicationResponse
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
     * @param DescribeApplicationResourceSummaryRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeApplicationResourceSummaryResponse
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
     * @param DescribeApplicationResourceSummaryRequest $request
     *
     * @return DescribeApplicationResourceSummaryResponse
     */
    public function describeApplicationResourceSummary($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeApplicationResourceSummaryWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeAvailableResourceResponse
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
     * @return DescribeAvailableResourceResponse
     */
    public function describeAvailableResource()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableResourceWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeAvailableResourceInfoResponse
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
     * @return DescribeAvailableResourceInfoResponse
     */
    public function describeAvailableResourceInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAvailableResourceInfoWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeBandWithdChargeTypeResponse
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
     * @return DescribeBandWithdChargeTypeResponse
     */
    public function describeBandWithdChargeType()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeBandWithdChargeTypeWithOptions($runtime);
    }

    /**
     * @param DescribeBandwitdhByInternetChargeTypeRequest $request
     * @param RuntimeOptions                               $runtime
     *
     * @return DescribeBandwitdhByInternetChargeTypeResponse
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
     * @param RuntimeOptions $runtime
     *
     * @return DescribeCloudDiskAvailableResourceInfoResponse
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
     * @return DescribeCloudDiskAvailableResourceInfoResponse
     */
    public function describeCloudDiskAvailableResourceInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudDiskAvailableResourceInfoWithOptions($runtime);
    }

    /**
     * @param DescribeCloudDiskTypesRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeCloudDiskTypesResponse
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
     * @param DescribeCreatePrePaidInstanceResultRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return DescribeCreatePrePaidInstanceResultResponse
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
     * @param DescribeDataDistResultRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDataDistResultResponse
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
     * @param DescribeDataDownloadURLRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeDataDownloadURLResponse
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
     * @param DescribeDataPushResultRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeDataPushResultResponse
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
     * @param DescribeDeviceServiceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeDeviceServiceResponse
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
     * @param DescribeDisksRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DescribeDisksResponse
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
     * @param DescribeEipAddressesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeEipAddressesResponse
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
     * @param DescribeEipAddressesRequest $request
     *
     * @return DescribeEipAddressesResponse
     */
    public function describeEipAddresses($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEipAddressesWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeElbAvailableResourceInfoResponse
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
     * @return DescribeElbAvailableResourceInfoResponse
     */
    public function describeElbAvailableResourceInfo()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeElbAvailableResourceInfoWithOptions($runtime);
    }

    /**
     * @param DescribeEnsCommodityCodeRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeEnsCommodityCodeResponse
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
     * @param DescribeEnsCommodityModuleCodeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeEnsCommodityModuleCodeResponse
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
     * @param DescribeEnsEipAddressesRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeEnsEipAddressesResponse
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
     * @param DescribeEnsNetDistrictRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeEnsNetDistrictResponse
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
     * @param RuntimeOptions $runtime
     *
     * @return DescribeEnsNetLevelResponse
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
     * @return DescribeEnsNetLevelResponse
     */
    public function describeEnsNetLevel()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeEnsNetLevelWithOptions($runtime);
    }

    /**
     * @param DescribeEnsNetSaleDistrictRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeEnsNetSaleDistrictResponse
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
     * @param DescribeEnsRegionIdIpv6InfoRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeEnsRegionIdIpv6InfoResponse
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
     * ****
     *   *
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
     * ****
     *   *
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
     * @param DescribeEnsRegionsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeEnsRegionsResponse
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
     * @param DescribeEnsResourceUsageRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeEnsResourceUsageResponse
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
     * @param DescribeEnsRouteEntryListRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeEnsRouteEntryListResponse
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
     * @param DescribeEnsSaleControlRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeEnsSaleControlResponse
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
     * @param DescribeEnsSaleControlAvailableResourceRequest $request
     * @param RuntimeOptions                                 $runtime
     *
     * @return DescribeEnsSaleControlAvailableResourceResponse
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
     * @param DescribeEnsSaleControlStockRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeEnsSaleControlStockResponse
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
     * @param DescribeEpnBandWidthDataRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeEpnBandWidthDataResponse
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
     * @param DescribeEpnBandwitdhByInternetChargeTypeRequest $request
     * @param RuntimeOptions                                  $runtime
     *
     * @return DescribeEpnBandwitdhByInternetChargeTypeResponse
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
     * In internal networking mode, the value of Instances is empty in the response. In public networking mode, the value of VSwitches is empty in the response.
     *   *
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
     * In internal networking mode, the value of Instances is empty in the response. In public networking mode, the value of VSwitches is empty in the response.
     *   *
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
     * @param DescribeEpnInstancesRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeEpnInstancesResponse
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
     * @param DescribeEpnMeasurementDataRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return DescribeEpnMeasurementDataResponse
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
     * *   You can call this operation to query information about all custom images in your account. The information include the image properties, image export status, and the Object Storage Service (OSS) download links.
     *   * *   Empty strings are returned for images that are not exported.
     *   * *   The download links may become invalid if you delete objects in OSS.
     *   *
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
     * *   You can call this operation to query information about all custom images in your account. The information include the image properties, image export status, and the Object Storage Service (OSS) download links.
     *   * *   Empty strings are returned for images that are not exported.
     *   * *   The download links may become invalid if you delete objects in OSS.
     *   *
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
     * @param DescribeExportImageStatusRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeExportImageStatusResponse
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
     * @param DescribeFileSystemsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeFileSystemsResponse
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
     * @param DescribeForwardTableEntriesRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeForwardTableEntriesResponse
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
     * @param DescribeImageInfosRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeImageInfosResponse
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
     * @param DescribeImageSharePermissionRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribeImageSharePermissionResponse
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
     * @param DescribeImagesRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return DescribeImagesResponse
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
     * @param DescribeInstanceAutoRenewAttributeRequest $request
     * @param RuntimeOptions                            $runtime
     *
     * @return DescribeInstanceAutoRenewAttributeResponse
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
     * @param DescribeInstanceMonitorDataRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeInstanceMonitorDataResponse
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
     * @param RuntimeOptions $runtime
     *
     * @return DescribeInstanceSpecResponse
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
     * @return DescribeInstanceSpecResponse
     */
    public function describeInstanceSpec()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceSpecWithOptions($runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return DescribeInstanceTypesResponse
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
     * @return DescribeInstanceTypesResponse
     */
    public function describeInstanceTypes()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceTypesWithOptions($runtime);
    }

    /**
     * @param DescribeInstanceVncUrlRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeInstanceVncUrlResponse
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
     * *   You can call this operation up to 800 times per second per account.
     *   * *   You can call this operation up to 100 times per second per user.
     *   * *   You can specify multiple request parameters to be queried. Specified parameters are evaluated by using the AND operator. Only the specified parameters are included in the filter conditions. However, if InstanceIds is set to an empty JSON array, it is regarded as a valid filter condition and an empty result is returned.
     *   *
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
     * *   You can call this operation up to 800 times per second per account.
     *   * *   You can call this operation up to 100 times per second per user.
     *   * *   You can specify multiple request parameters to be queried. Specified parameters are evaluated by using the AND operator. Only the specified parameters are included in the filter conditions. However, if InstanceIds is set to an empty JSON array, it is regarded as a valid filter condition and an empty result is returned.
     *   *
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
     * @param DescribeKeyPairsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeKeyPairsResponse
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
     * >
     *   * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 10 times per second per user.
     *   *
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
     * >
     *   * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 10 times per second per user.
     *   *
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
     * >
     *   * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 10 times per second per user.
     *   *
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
     * >
     *   * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 10 times per second per user.
     *   *
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
     * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 10 times per second per user.
     *   *
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
     * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 10 times per second per user.
     *   *
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
     * @param DescribeLoadBalancerSpecRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeLoadBalancerSpecResponse
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
     * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 10 times per second per user.
     *   *
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
     * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 10 times per second per user.
     *   *
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
     * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 10 times per second per user.
     *   *
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
     * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 10 times per second per user.
     *   *
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
     * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 10 times per second per user.
     *   *
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
     * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 10 times per second per user.
     *   *
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
     * @param DescribeMeasurementDataRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeMeasurementDataResponse
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
     * @param DescribeMountTargetsRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return DescribeMountTargetsResponse
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
     * @param DescribeNCInformationRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeNCInformationResponse
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
     * @param DescribeNatGatewaysRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeNatGatewaysResponse
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
     * @param DescribeNetworkAclsRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DescribeNetworkAclsResponse
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
     * *   You can call this operation up to 100 times per second.
     *   * *   You can call this operation up to 10 times per second per account.
     *   *
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
     * *   You can call this operation up to 100 times per second.
     *   * *   You can call this operation up to 10 times per second per account.
     *   *
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
     * @param DescribeNetworkInterfacesRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeNetworkInterfacesResponse
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
     * *   You can call this operation up to 100 times per second.
     *   * *   You can call this operation up to 10 times per second per account.
     *   *
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
     * *   You can call this operation up to 100 times per second.
     *   * *   You can call this operation up to 10 times per second per account.
     *   *
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
     * @param DescribePrePaidInstanceStockRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return DescribePrePaidInstanceStockResponse
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
     * @param DescribePriceRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return DescribePriceResponse
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
     * @param DescribeRegionIspsRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeRegionIspsResponse
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
     * @param DescribeRegionResourceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeRegionResourceResponse
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
     * @param RuntimeOptions $runtime
     *
     * @return DescribeReservedResourceResponse
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
     * @return DescribeReservedResourceResponse
     */
    public function describeReservedResource()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeReservedResourceWithOptions($runtime);
    }

    /**
     * @param DescribeResourceTimelineRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeResourceTimelineResponse
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
     * @param DescribeSDGDeploymentStatusRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return DescribeSDGDeploymentStatusResponse
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
     * @param DescribeSecurityGroupAttributeRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return DescribeSecurityGroupAttributeResponse
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
     * @param DescribeSecurityGroupsRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return DescribeSecurityGroupsResponse
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
     * @param DescribeSelfImagesRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return DescribeSelfImagesResponse
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
     * @param DescribeServcieScheduleRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeServcieScheduleResponse
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
     * @param DescribeSnapshotsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeSnapshotsResponse
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
     * @param DescribeSnatAttributeRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DescribeSnatAttributeResponse
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
     * @param DescribeSnatTableEntriesRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeSnatTableEntriesResponse
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
     * @param DescribeUserBandWidthDataRequest $request
     * @param RuntimeOptions                   $runtime
     *
     * @return DescribeUserBandWidthDataResponse
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
     * @param DescribeVSwitchesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeVSwitchesResponse
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
     * @param DescribeWorkflowRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return DescribeWorkflowResponse
     */
    public function describeWorkflowWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->aliUid)) {
            $query['AliUid'] = $request->aliUid;
        }
        if (!Utils::isUnset($request->businessId)) {
            $query['BusinessId'] = $request->businessId;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->ensRegionId)) {
            $query['EnsRegionId'] = $request->ensRegionId;
        }
        if (!Utils::isUnset($request->id)) {
            $query['Id'] = $request->id;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNum)) {
            $query['PageNum'] = $request->pageNum;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->workFlowId)) {
            $query['WorkFlowId'] = $request->workFlowId;
        }
        if (!Utils::isUnset($request->workFlowName)) {
            $query['WorkFlowName'] = $request->workFlowName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWorkflow',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeWorkflowRequest $request
     *
     * @return DescribeWorkflowResponse
     */
    public function describeWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWorkflowWithOptions($request, $runtime);
    }

    /**
     * @param DescribeWorkflowActivityRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return DescribeWorkflowActivityResponse
     */
    public function describeWorkflowActivityWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->workFlowId)) {
            $query['WorkFlowId'] = $request->workFlowId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeWorkflowActivity',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeWorkflowActivityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DescribeWorkflowActivityRequest $request
     *
     * @return DescribeWorkflowActivityResponse
     */
    public function describeWorkflowActivity($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeWorkflowActivityWithOptions($request, $runtime);
    }

    /**
     * @param DetachDiskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return DetachDiskResponse
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
     * @param DistApplicationDataRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return DistApplicationDataResponse
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
     * @param ExportBillDetailDataRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ExportBillDetailDataResponse
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
     * @param ExportImageRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ExportImageResponse
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
     * @param ExportMeasurementDataRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ExportMeasurementDataResponse
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
     * @param GetBucketAclRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return GetBucketAclResponse
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
     * @param GetBucketLifecycleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetBucketLifecycleResponse
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
     * @param GetDeviceInternetPortRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return GetDeviceInternetPortResponse
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
     * @param GetDeviceInternetPortRequest $request
     *
     * @return GetDeviceInternetPortResponse
     */
    public function getDeviceInternetPort($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeviceInternetPortWithOptions($request, $runtime);
    }

    /**
     * @param GetOssStorageAndAccByBucketsRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return GetOssStorageAndAccByBucketsResponse
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
     * The query and aggregation granularity of bandwidth and storage usage cannot exceed one day. Data aggregation is to collect the maximum values of usage data within a period of time.
     *   *
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
     * The query and aggregation granularity of bandwidth and storage usage cannot exceed one day. Data aggregation is to collect the maximum values of usage data within a period of time.
     *   *
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
     * *   After the key pair is imported, ENS stores the public key. You must securely store the private key.
     *   * *   The key pair can be only in the ssh-rsa format.
     *   *
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
     * *   After the key pair is imported, ENS stores the public key. You must securely store the private key.
     *   * *   The key pair can be only in the ssh-rsa format.
     *   *
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
     * @param JoinPublicIpsToEpnInstanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return JoinPublicIpsToEpnInstanceResponse
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
     * Before you call this operation to add an instance to a security group, make sure that the instance is in the Stopped or Running state.
     *   *
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
     * Before you call this operation to add an instance to a security group, make sure that the instance is in the Stopped or Running state.
     *   *
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
     * @param JoinVSwitchesToEpnInstanceRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return JoinVSwitchesToEpnInstanceResponse
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
     * Before you remove an instance from a security group, the instance must be in the Stopped or Running state.
     *   *
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
     * Before you remove an instance from a security group, the instance must be in the Stopped or Running state.
     *   *
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
     * @param ListApplicationsRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ListApplicationsResponse
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
     * @param ListBucketsRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListBucketsResponse
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
     * @param ModifyEnsEipAddressAttributeRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return ModifyEnsEipAddressAttributeResponse
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
     * @param ModifyEpnInstanceRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ModifyEpnInstanceResponse
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
     * @param ModifyFileSystemRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return ModifyFileSystemResponse
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
     * @param ModifyForwardEntryRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ModifyForwardEntryResponse
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
     * @param ModifyImageAttributeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ModifyImageAttributeResponse
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
     * @param ModifyImageSharePermissionRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return ModifyImageSharePermissionResponse
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
     * *   If an instance is in the Starting state, you cannot reset the password of the instance.
     *   * *   When the instance is in the Running state, you cannot change the password of the instance.
     *   * *   After resetting the password, you must Restart the instance in the ECS console or call the RebootInstance operation to validate the modifications. The restart operation within the instance does not validate the modifications.
     *   *
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
     * *   If an instance is in the Starting state, you cannot reset the password of the instance.
     *   * *   When the instance is in the Running state, you cannot change the password of the instance.
     *   * *   After resetting the password, you must Restart the instance in the ECS console or call the RebootInstance operation to validate the modifications. The restart operation within the instance does not validate the modifications.
     *   *
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
     * @param ModifyInstanceAutoRenewAttributeRequest $request
     * @param RuntimeOptions                          $runtime
     *
     * @return ModifyInstanceAutoRenewAttributeResponse
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
     * @param ModifyInstanceChargeTypeRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyInstanceChargeTypeResponse
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
     * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 10 times per second per user.
     *   *
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
     * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 10 times per second per user.
     *   *
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
     * *   You can call this operation up to 100 times per second.
     *   * *   You can call this operation up to 5 times per second per user.
     *   *
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
     * *   You can call this operation up to 100 times per second.
     *   * *   You can call this operation up to 5 times per second per user.
     *   *
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
     * @param ModifyPrepayInstanceSpecRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ModifyPrepayInstanceSpecResponse
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
     * *   You can call this operation up to 100 times per second.
     *   * *   You can call this operation up to 5 times per second per user.
     *   *
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
     * *   You can call this operation up to 100 times per second.
     *   * *   You can call this operation up to 5 times per second per user.
     *   *
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
     * @param ModifySnapshotAttributeRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifySnapshotAttributeResponse
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
     * *   You can call this operation up to 100 times per second.
     *   * *   You can call this operation up to 5 times per second per user.
     *   *
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
     * *   You can call this operation up to 100 times per second.
     *   * *   You can call this operation up to 5 times per second per user.
     *   *
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
     * @param PushApplicationDataRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return PushApplicationDataResponse
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
     * @param PutBucketRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return PutBucketResponse
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
     * @param PutBucketAclRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return PutBucketAclResponse
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
     * - You can configure up to 1000 rules.
     *   * - If an object meets multiple rules, the rule that has the earliest expiration time prevails.
     *   *
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
     * - You can configure up to 1000 rules.
     *   * - If an object meets multiple rules, the rule that has the earliest expiration time prevails.
     *   *
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
     * @param ReInitDiskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ReInitDiskResponse
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
     * @param RebootAICInstanceRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return RebootAICInstanceResponse
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
     * @param RebootARMServerInstanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return RebootARMServerInstanceResponse
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
     * *   Only instances that are in the Running state can be restarted.
     *   * *   If the operation is successful, the status of the instance becomes Starting.
     *   *
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
     * *   Only instances that are in the Running state can be restarted.
     *   * *   If the operation is successful, the status of the instance becomes Starting.
     *   *
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
     * @param RebootInstancesRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return RebootInstancesResponse
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
     * @param RecoverAICInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RecoverAICInstanceResponse
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
     * @param ReinitInstanceRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ReinitInstanceResponse
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
     * @param ReinitInstancesRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return ReinitInstancesResponse
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
     * @param ReleaseAICInstanceRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return ReleaseAICInstanceResponse
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
     * @param ReleaseARMServerInstanceRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return ReleaseARMServerInstanceResponse
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
     * *   You can call this operation up to 10,000 times per second per account.
     *   * *   The maximum number of times that each user can call this operation per second is 50.
     *   *
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
     * *   You can call this operation up to 10,000 times per second per account.
     *   * *   The maximum number of times that each user can call this operation per second is 50.
     *   *
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
     * @param ReleasePostPaidInstanceRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return ReleasePostPaidInstanceResponse
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
     * @param ReleasePrePaidInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return ReleasePrePaidInstanceResponse
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
     * *   You can call this operation up to 100 times per second.
     *   * *   You can call this operation up to 10 times per second per account.
     *   *
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
     * *   You can call this operation up to 100 times per second.
     *   * *   You can call this operation up to 10 times per second per account.
     *   *
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
     * @param RemovePublicIpsFromEpnInstanceRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return RemovePublicIpsFromEpnInstanceResponse
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
     * @param RemoveVSwitchesFromEpnInstanceRequest $request
     * @param RuntimeOptions                        $runtime
     *
     * @return RemoveVSwitchesFromEpnInstanceResponse
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
     * @param RenewARMServerInstanceRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return RenewARMServerInstanceResponse
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
     * @param RenewInstanceRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return RenewInstanceResponse
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
     * @param RescaleApplicationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RescaleApplicationResponse
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
     * @param RescaleDeviceServiceRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return RescaleDeviceServiceResponse
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
     * @param ResetAICInstanceRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return ResetAICInstanceResponse
     */
    public function resetAICInstanceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ResetAICInstanceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->instanceIds)) {
            $request->instanceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->instanceIds, 'InstanceIds', 'json');
        }
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
     * @param ResetDeviceInstanceRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return ResetDeviceInstanceResponse
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
     * @param ResetDeviceInstanceRequest $request
     *
     * @return ResetDeviceInstanceResponse
     */
    public function resetDeviceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->resetDeviceInstanceWithOptions($request, $runtime);
    }

    /**
     * When you call this operation, take note of the following items:
     *   * *   The disk must be in the In Use (In_Use) or Unattached (Available) state.
     *   * *   The instance to which the disk is attached must be in the Stopped (Stopped) state. You can call the **StopInstance** operation to stop an instance.
     *   * *   The snapshot specified by the SnapshotId parameter must be created from the disk specified by the DiskId parameter.
     *   * *   When you call the **DescribeInstance** operation to query instance information, if the response contains `{"OperationLocks": {"LockReason" : "security"}}` for an instance, the instance is locked for security reasons and you cannot perform operations on the instance.
     *   *
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
     * When you call this operation, take note of the following items:
     *   * *   The disk must be in the In Use (In_Use) or Unattached (Available) state.
     *   * *   The instance to which the disk is attached must be in the Stopped (Stopped) state. You can call the **StopInstance** operation to stop an instance.
     *   * *   The snapshot specified by the SnapshotId parameter must be created from the disk specified by the DiskId parameter.
     *   * *   When you call the **DescribeInstance** operation to query instance information, if the response contains `{"OperationLocks": {"LockReason" : "security"}}` for an instance, the instance is locked for security reasons and you cannot perform operations on the instance.
     *   *
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
     * @param ResizeDiskRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ResizeDiskResponse
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
     * @param RestartDeviceInstanceRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return RestartDeviceInstanceResponse
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
     * @param RestartDeviceInstanceRequest $request
     *
     * @return RestartDeviceInstanceResponse
     */
    public function restartDeviceInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartDeviceInstanceWithOptions($request, $runtime);
    }

    /**
     * @param RestartWorkflowRequest $tmpReq
     * @param RuntimeOptions         $runtime
     *
     * @return RestartWorkflowResponse
     */
    public function restartWorkflowWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RestartWorkflowShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->workflowIds)) {
            $request->workflowIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->workflowIds, 'WorkflowIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->workflowIdsShrink)) {
            $query['WorkflowIds'] = $request->workflowIdsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RestartWorkflow',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RestartWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RestartWorkflowRequest $request
     *
     * @return RestartWorkflowResponse
     */
    public function restartWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->restartWorkflowWithOptions($request, $runtime);
    }

    /**
     * @param RetryWorkflowRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return RetryWorkflowResponse
     */
    public function retryWorkflowWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RetryWorkflowShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->workflowIds)) {
            $request->workflowIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->workflowIds, 'WorkflowIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->workflowIdsShrink)) {
            $query['WorkflowIds'] = $request->workflowIdsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RetryWorkflow',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RetryWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RetryWorkflowRequest $request
     *
     * @return RetryWorkflowResponse
     */
    public function retryWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->retryWorkflowWithOptions($request, $runtime);
    }

    /**
     * *   In the security group-related API documents, inbound traffic refers to the traffic sent by the source and received by the destination.
     *   * *   You can determine an inbound security group rule by specifying one of the following groups of parameters. You cannot determine a security group rule by specifying only one parameter.
     *   * *   You can specify one or more of the following parameters to remove access control for a CIDR block: IpProtocol, PortRange, Policy, and SourceCidrIp.
     *   *
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
     * *   In the security group-related API documents, inbound traffic refers to the traffic sent by the source and received by the destination.
     *   * *   You can determine an inbound security group rule by specifying one of the following groups of parameters. You cannot determine a security group rule by specifying only one parameter.
     *   * *   You can specify one or more of the following parameters to remove access control for a CIDR block: IpProtocol, PortRange, Policy, and SourceCidrIp.
     *   *
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
     * >  In the security group-related API documents, outbound traffic refers to the traffic sent by the source and received by the destination.
     *   *
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
     * >  In the security group-related API documents, outbound traffic refers to the traffic sent by the source and received by the destination.
     *   *
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
     * @param RollbackApplicationRequest $request
     * @param RuntimeOptions             $runtime
     *
     * @return RollbackApplicationResponse
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
     * @param RollbackWorkflowRequest $tmpReq
     * @param RuntimeOptions          $runtime
     *
     * @return RollbackWorkflowResponse
     */
    public function rollbackWorkflowWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RollbackWorkflowShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->workflowIds)) {
            $request->workflowIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->workflowIds, 'WorkflowIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->workflowIdsShrink)) {
            $query['WorkflowIds'] = $request->workflowIdsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RollbackWorkflow',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RollbackWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RollbackWorkflowRequest $request
     *
     * @return RollbackWorkflowResponse
     */
    public function rollbackWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->rollbackWorkflowWithOptions($request, $runtime);
    }

    /**
     * @param RunInstancesRequest $tmpReq
     * @param RuntimeOptions      $runtime
     *
     * @return RunInstancesResponse
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
     * @param RunServiceScheduleRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return RunServiceScheduleResponse
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
     * *   You can call this operation up to 100 times per second.
     *   * *   You can call this operation up to 10 times per second per account.
     *   *
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
     * *   You can call this operation up to 100 times per second.
     *   * *   You can call this operation up to 10 times per second per account.
     *   *
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
     * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 10 times per second per user.
     *   *
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
     * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 10 times per second per user.
     *   *
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
     * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 10 times per second per user.
     *   *
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
     * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 10 times per second per user.
     *   *
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
     * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 10 times per second per user.
     *   *
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
     * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 10 times per second per user.
     *   *
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
     * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 10 times per second per user.
     *   *
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
     * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 10 times per second per user.
     *   *
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
     * >
     *   * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 10 times per second per user.
     *   *
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
     * >
     *   * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 10 times per second per user.
     *   *
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
     * @param StartEpnInstanceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return StartEpnInstanceResponse
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
     * *   You can call the operation only when the instance is in the Stopped state.
     *   * *   If the operation is successful, the status of the instance becomes Starting.
     *   *
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
     * *   You can call the operation only when the instance is in the Stopped state.
     *   * *   If the operation is successful, the status of the instance becomes Starting.
     *   *
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
     * @param StartInstancesRequest $tmpReq
     * @param RuntimeOptions        $runtime
     *
     * @return StartInstancesResponse
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
     * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 10 times per second per user.
     *   *
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
     * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 10 times per second per user.
     *   *
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
     * @param StartSnatIpForSnatEntryRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return StartSnatIpForSnatEntryResponse
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
     * @param StopEpnInstanceRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return StopEpnInstanceResponse
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
     * *   You can call this operation to stop instances that are only in the Running state.
     *   * *   If the call is successful, the state of the instance becomes Stopping.
     *   * *   Once the instance is stopped, the state of the instance becomes Stopped.
     *   * *   Force stop is supported, which is equivalent to power-off. Data that is not written to disks on the instance may be lost.
     *   *
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
     * *   You can call this operation to stop instances that are only in the Running state.
     *   * *   If the call is successful, the state of the instance becomes Stopping.
     *   * *   Once the instance is stopped, the state of the instance becomes Stopped.
     *   * *   Force stop is supported, which is equivalent to power-off. Data that is not written to disks on the instance may be lost.
     *   *
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
     * @param StopInstancesRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return StopInstancesResponse
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
     * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 10 times per second per user.
     *   *
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
     * *   You can call this operation up to 100 times per second per account.
     *   * *   You can call this operation up to 10 times per second per user.
     *   *
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
     * @param StopSnatIpForSnatEntryRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return StopSnatIpForSnatEntryResponse
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
     * @param TerminateWorkflowRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return TerminateWorkflowResponse
     */
    public function terminateWorkflowWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new TerminateWorkflowShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->workflowIds)) {
            $request->workflowIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->workflowIds, 'WorkflowIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->workflowIdsShrink)) {
            $query['WorkflowIds'] = $request->workflowIdsShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TerminateWorkflow',
            'version'     => '2017-11-10',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TerminateWorkflowResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param TerminateWorkflowRequest $request
     *
     * @return TerminateWorkflowResponse
     */
    public function terminateWorkflow($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->terminateWorkflowWithOptions($request, $runtime);
    }

    /**
     * @param UnAssociateEnsEipAddressRequest $request
     * @param RuntimeOptions                  $runtime
     *
     * @return UnAssociateEnsEipAddressResponse
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
     * @param UnassignPrivateIpAddressesRequest $request
     * @param RuntimeOptions                    $runtime
     *
     * @return UnassignPrivateIpAddressesResponse
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
     * @param UnassociateNetworkAclRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return UnassociateNetworkAclResponse
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
     * @param UpdateEnsSaleControlRequest $tmpReq
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateEnsSaleControlResponse
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
     * @param UpgradeAICInstanceImageRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return UpgradeAICInstanceImageResponse
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
     * @param UpgradeApplicationRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return UpgradeApplicationResponse
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
     * @param UpgradeApplicationRequest $request
     *
     * @return UpgradeApplicationResponse
     */
    public function upgradeApplication($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->upgradeApplicationWithOptions($request, $runtime);
    }
}
